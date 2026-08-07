<?php
require_once __DIR__ . '/includes/auth.php';

$perPage = 20;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;

$total = (int)$pdo->query('SELECT COUNT(*) FROM posts')->fetchColumn();
$totalPages = max(1, (int)ceil($total / $perPage));

$stmt = $pdo->prepare(
    'SELECT id, title, slug, status, category, featured_image, published_at, updated_at
     FROM posts
     ORDER BY (published_at IS NULL) ASC, published_at DESC, updated_at DESC
     LIMIT :limit OFFSET :offset'
);
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Posts | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Posts</h1>
      <div>
        <a href="post-edit.php" class="btn btn-primary">+ New Post</a>
        <a href="logout.php" class="btn btn-outline-secondary">Log Out</a>
      </div>
    </div>
    <table class="table table-bordered bg-white align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Category</th>
          <th>Status</th>
          <th>Published</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($posts as $i => $post): ?>
        <tr>
          <td><?php echo $offset + $i + 1; ?></td>
          <td>
            <?php if (!empty($post['featured_image'])): ?>
              <img src="../assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>"
                   alt="" style="width:80px; height:42px; object-fit:cover; border-radius:4px;">
            <?php else: ?>
              <span class="text-muted small">No image</span>
            <?php endif; ?>
          </td>
          <td><?php echo htmlspecialchars($post['title']); ?></td>
          <td><?php echo htmlspecialchars($post['category']); ?></td>
          <td>
            <span class="badge <?php echo $post['status'] === 'published' ? 'bg-success' : 'bg-secondary'; ?>">
              <?php echo htmlspecialchars($post['status']); ?>
            </span>
          </td>
          <td><?php echo $post['published_at'] ? htmlspecialchars(date('M j, Y', strtotime($post['published_at']))) : '—'; ?></td>
          <td class="text-nowrap">
            <a href="post-edit.php?id=<?php echo (int)$post['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <?php if ($post['status'] === 'published'): ?>
              <a href="/blogs/<?php echo htmlspecialchars($post['slug']); ?>" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary">View</a>
            <?php endif; ?>
            <form method="post" action="post-delete.php" class="d-inline" onsubmit="return confirm('Delete this post? This cannot be undone.');">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="id" value="<?php echo (int)$post['id']; ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
        <?php if (!$posts): ?>
          <tr><td colspan="7" class="text-center text-muted py-4">No posts yet. Create your first one.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>

    <?php if ($totalPages > 1): ?>
      <nav class="d-flex justify-content-center gap-2 my-4">
        <?php for ($p = 1; $p <= $totalPages; $p++): ?>
          <a href="?page=<?php echo $p; ?>"
             class="btn btn-sm <?php echo $p === $page ? 'btn-primary' : 'btn-outline-primary'; ?>"><?php echo $p; ?></a>
        <?php endfor; ?>
      </nav>
    <?php endif; ?>
  </div>
</body>
</html>
