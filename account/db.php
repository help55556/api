<?php

function database(): PDO
{
    $url = getenv('DATABASE_URL');
    if ($url) {
        $parts = parse_url($url);
        if (!$parts || empty($parts['host'])) {
            throw new RuntimeException('DATABASE_URL is invalid');
        }

        $host = $parts['host'];
        $port = $parts['port'] ?? 5432;
        $name = ltrim((string) ($parts['path'] ?? ''), '/');
        $user = urldecode((string) ($parts['user'] ?? ''));
        $password = urldecode((string) ($parts['pass'] ?? ''));
    } else {
        $host = getenv('PGHOST') ?: getenv('POSTGRES_HOST');
        $port = getenv('PGPORT') ?: getenv('POSTGRES_PORT') ?: 5432;
        $name = getenv('PGDATABASE') ?: getenv('POSTGRES_DB');
        $user = getenv('PGUSER') ?: getenv('POSTGRES_USER');
        $password = getenv('PGPASSWORD') ?: getenv('POSTGRES_PASSWORD');

        if (!$host || !$name || !$user) {
            throw new RuntimeException('PostgreSQL connection variables are not configured');
        }
    }

    $dsn = 'pgsql:host=' . $host . ';port=' . $port . ';dbname=' . $name;

    return new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}
