<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../db.php';

function extract_first_value(array $source, array $keys): ?string
{
    $stack = [$source];

    while (!empty($stack)) {
        $current = array_pop($stack);
        if (!is_array($current)) {
            continue;
        }

        foreach ($current as $key => $value) {
            $normalizedKey = strtolower((string) $key);
            $matchedKey = null;

            foreach ($keys as $candidate) {
                if ($normalizedKey === strtolower((string) $candidate)) {
                    $matchedKey = $candidate;
                    break;
                }
            }

            if ($matchedKey !== null) {
                if (is_array($value)) {
                    $nested = extract_first_value($value, $keys);
                    if ($nested !== null) {
                        return trim((string) $nested);
                    }
                    continue;
                }

                return trim((string) $value);
            }

            if (is_array($value)) {
                $stack[] = $value;
            }
        }
    }

    return null;
}

$rawBody = trim((string) file_get_contents('php://input'));
$input = [];
if ($rawBody !== '') {
    $decoded = json_decode($rawBody, true);
    if (is_array($decoded)) {
        $input = $decoded;
    } else {
        parse_str($rawBody, $parsed);
        if (is_array($parsed)) {
            $input = $parsed;
        }
    }
}
if (!is_array($input) || count($input) === 0) {
    $input = $_POST;
}
if (!is_array($input)) {
    $input = [];
}
$input = array_merge($_GET, $_POST, $_REQUEST, $input);

$username = extract_first_value($input, ['username', 'user_name', 'userName', 'newUsername', 'new_username', 'userid', 'user_id', 'userId', 'uid', 'id', 'login', 'account', 'user']);
$email = extract_first_value($input, ['email', 'mail', 'email_address', 'emailAddress']);
if ($email === null || $email === '') {
    $email = $username ?? '';
}
$password = extract_first_value($input, ['password', 'pass', 'passwd', 'pwd', 'password1', 'passWord', 'secret']);

if ($username === null || $username === '' || $email === '' || $password === null || $password === '') {
    http_response_code(400);
    echo json_encode([
        'Error' => 'username, email and password are required',
        'Success' => false,
        'ErrorCode' => 'InvalidRequest',
        'Value' => [
            'User' => null,
            'Form' => ['Errors' => []]
        ]
    ]);
    exit;
}

try {
    $database = database();
    $query = $database->prepare('INSERT INTO users (username, email, password_hash, balance, created_at) VALUES (:username, :email, :password_hash, 0, NOW()) RETURNING id');
    $query->execute([
        'username' => $username,
        'email' => $email,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    $userId = (int) $query->fetchColumn();
    $token = hash('sha256', 'cairo-city:' . $userId . ':' . $username);
    $refreshToken = hash('sha256', 'cairo-city-refresh:' . $userId . ':' . $username);
    $profile = [
        'id' => $userId,
        'user_id' => $userId,
        'userId' => $userId,
        'username' => $username,
        'email' => $email,
        'balance' => 0
    ];

    echo json_encode([
        'Error' => null,
        'Success' => true,
        'ErrorCode' => null,
        'Value' => [
            'User' => [
                'UserId' => $userId,
                'Password' => $password,
                'Message' => 'account created'
            ],
            'Form' => [
                'Errors' => []
            ]
        ]
    ], JSON_UNESCAPED_SLASHES);
} catch (PDOException $error) {
    http_response_code($error->getCode() === '23505' ? 409 : 503);
    echo json_encode([
        'Error' => 'account could not be created',
        'Success' => false,
        'ErrorCode' => $error->getCode() === '23505' ? 'AlreadyExists' : 'ServiceUnavailable',
        'Value' => [
            'User' => null,
            'Form' => ['Errors' => []]
        ]
    ]);
}
