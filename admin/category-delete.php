<?php
require_once __DIR__ . '/includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: categories.php');
    exit;
}

csrf_verify();

$id = (int) ($_POST['id'] ?? 0);

$stmt = $pdo->prepare('SELECT * FROM categories WHERE id = ?');
$stmt->execute([$id]);
$category = $stmt->fetch();

if ($category) {
    if ($category['name'] === 'General') {
        header('Location: categories.php');
        exit;
    }

    // Find or create the fallback category so posts never end up with none.
    $fallback = $pdo->prepare('SELECT id FROM categories WHERE name = ?');
    $fallback->execute(['General']);
    $fallbackId = $fallback->fetchColumn();
    if (!$fallbackId) {
        $pdo->prepare('INSERT INTO categories (name, slug) VALUES (?, ?)')->execute(['General', 'general']);
        $fallbackId = $pdo->lastInsertId();
    }

    $pdo->prepare('UPDATE posts SET category_id = ? WHERE category_id = ?')->execute([$fallbackId, $id]);
    $pdo->prepare('DELETE FROM categories WHERE id = ?')->execute([$id]);
}

header('Location: categories.php');
exit;
