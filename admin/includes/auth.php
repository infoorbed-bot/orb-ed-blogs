<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/csrf.php';
require_once __DIR__ . '/remember.php';

if (empty($_SESSION['admin_id'])) {
    $remembered = remember_consume($pdo);
    if ($remembered) {
        session_regenerate_id(true);
        $_SESSION['admin_id'] = $remembered['admin_id'];
    }
}

if (empty($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->prepare('SELECT id, username, display_name, role FROM admin_users WHERE id = ?');
$stmt->execute([$_SESSION['admin_id']]);
$currentUser = $stmt->fetch();

if (!$currentUser) {
    // Account was deleted while this session was still active.
    $_SESSION = [];
    session_destroy();
    header('Location: login.php');
    exit;
}

function isAdmin(): bool
{
    global $currentUser;
    return $currentUser['role'] === 'admin';
}

function requireAdmin(): void
{
    if (!isAdmin()) {
        http_response_code(403);
        die('You need an administrator account to access this page.');
    }
}
