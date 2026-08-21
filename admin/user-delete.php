<?php
require_once __DIR__ . '/includes/auth.php';
requireAdmin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: users.php');
    exit;
}

csrf_verify();

$id = (int) ($_POST['id'] ?? 0);

if ($id > 0 && $id !== (int) $currentUser['id']) {
    $stmt = $pdo->prepare('SELECT role FROM admin_users WHERE id = ?');
    $stmt->execute([$id]);
    $role = $stmt->fetchColumn();

    $adminCount = (int) $pdo->query("SELECT COUNT(*) FROM admin_users WHERE role = 'admin'")->fetchColumn();

    if (!($role === 'admin' && $adminCount <= 1)) {
        // Posts by this user stay published; author_id just goes NULL via the FK.
        $pdo->prepare('DELETE FROM admin_users WHERE id = ?')->execute([$id]);
    }
}

header('Location: users.php');
exit;
