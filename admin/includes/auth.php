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
