<?php
// Copy this file to config/db.php on the server and fill in real values.
// config/db.php is gitignored and must NEVER be committed to this repo
// (this repo is public on GitHub).

$dbHost = 'localhost'; // MySQL server host (localhost from the server itself;
                        // an external IP/hostname if connecting remotely)
$dbName = 'your_database_name';
$dbUser = 'your_database_user';
$dbPass = 'your_database_password';

try {
    $pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_TIMEOUT => 5,
        ]
    );
} catch (PDOException $e) {
    error_log('Database connection failed: ' . $e->getMessage());
    http_response_code(500);
    die('Service temporarily unavailable.');
}
