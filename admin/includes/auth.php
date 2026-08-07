<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/csrf.php';

if (empty($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
