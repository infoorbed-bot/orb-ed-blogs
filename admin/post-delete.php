<?php
require_once __DIR__ . '/includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: posts.php');
    exit;
}

csrf_verify();

$id = (int)($_POST['id'] ?? 0);

if ($id > 0) {
    $stmt = $pdo->prepare('SELECT featured_image FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    $post = $stmt->fetch();

    $del = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $del->execute([$id]);

    if ($post && !empty($post['featured_image'])) {
        $path = __DIR__ . '/../assets/images/blog/' . basename($post['featured_image']);
        if (is_file($path)) {
            unlink($path);
        }
    }
}

header('Location: posts.php');
exit;
