<?php
require_once __DIR__ . '/includes/auth.php';

$posts = $pdo->query('SELECT id, title, slug, status, category, published_at, updated_at FROM posts ORDER BY updated_at DESC')->fetchAll();
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
          <th>Title</th>
          <th>Category</th>
          <th>Status</th>
          <th>Published</th>
          <th>Updated</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
          <td><?php echo htmlspecialchars($post['title']); ?></td>
          <td><?php echo htmlspecialchars($post['category']); ?></td>
          <td>
            <span class="badge <?php echo $post['status'] === 'published' ? 'bg-success' : 'bg-secondary'; ?>">
              <?php echo htmlspecialchars($post['status']); ?>
            </span>
          </td>
          <td><?php echo $post['published_at'] ? htmlspecialchars($post['published_at']) : '—'; ?></td>
          <td><?php echo htmlspecialchars($post['updated_at']); ?></td>
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
          <tr><td colspan="6" class="text-center text-muted py-4">No posts yet. Create your first one.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
