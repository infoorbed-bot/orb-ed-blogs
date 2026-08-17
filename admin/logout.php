<?php
session_start();
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/remember.php';

remember_forget($pdo);
$_SESSION = [];
session_destroy();
header('Location: login.php');
exit;
