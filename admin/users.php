<?php
require_once __DIR__ . '/includes/auth.php';
requireAdmin();

$users = $pdo->query(
    'SELECT u.id, u.username, u.display_name, u.role, u.created_at, COUNT(p.id) AS post_count
     FROM admin_users u
     LEFT JOIN posts p ON p.author_id = u.id
     GROUP BY u.id, u.username, u.display_name, u.role, u.created_at
     ORDER BY u.created_at ASC'
)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Users | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include __DIR__ . '/includes/nav.php'; ?>
  <div class="container pb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1 class="h4 mb-0">Users</h1>
      <a href="user-edit.php" class="btn btn-primary">+ New User</a>
    </div>
    <table class="table table-bordered bg-white align-middle">
      <thead>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Role</th>
          <th>Posts</th>
          <th>Joined</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $u): ?>
          <tr>
            <td><?php echo htmlspecialchars($u['display_name'] ?: '—'); ?></td>
            <td><?php echo htmlspecialchars($u['username']); ?></td>
            <td>
              <span class="badge <?php echo $u['role'] === 'admin' ? 'bg-primary' : 'bg-secondary'; ?>">
                <?php echo htmlspecialchars($u['role']); ?>
              </span>
            </td>
            <td><?php echo (int) $u['post_count']; ?></td>
            <td><?php echo htmlspecialchars(date('M j, Y', strtotime($u['created_at']))); ?></td>
            <td class="text-nowrap">
              <a href="user-edit.php?id=<?php echo (int) $u['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
              <?php if ((int) $u['id'] !== (int) $currentUser['id']): ?>
                <form method="post" action="user-delete.php" class="d-inline"
                      onsubmit="return confirm('Delete this user? Their posts stay, just unattributed.');">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="id" value="<?php echo (int) $u['id']; ?>">
                  <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
