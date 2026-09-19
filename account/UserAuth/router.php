<?php

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (str_starts_with($path, '/api/')) {
    $path = substr($path, 4);
}

$relativePath = ltrim($path, '/');
if ($relativePath === '') {
    $relativePath = 'android/index.php';
}

$documentRoot = __DIR__;
$target = realpath($documentRoot . '/' . $relativePath);
if ($target === false || !str_starts_with($target, $documentRoot . DIRECTORY_SEPARATOR) || !is_file($target)) {
    http_response_code(404);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['error' => 'Not found']);
    return true;
}

$extension = strtolower(pathinfo($target, PATHINFO_EXTENSION));
if ($extension !== 'php') {
    return false;
}

require $target;
return true;

