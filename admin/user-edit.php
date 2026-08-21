<?php
require_once __DIR__ . '/includes/auth.php';
requireAdmin();

$id = 0;
$user = [
    'username' => '',
    'display_name' => '',
    'role' => 'author',
];

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} elseif (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
}

if ($id > 0) {
    $stmt = $pdo->prepare('SELECT * FROM admin_users WHERE id = ?');
    $stmt->execute([$id]);
    $existing = $stmt->fetch();
    if ($existing) {
        $user = $existing;
    } else {
        $id = 0;
    }
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verify();

    $user['username'] = trim($_POST['username'] ?? '');
    $user['display_name'] = trim($_POST['display_name'] ?? '');
    $user['role'] = ($_POST['role'] ?? 'author') === 'admin' ? 'admin' : 'author';
    $password = $_POST['password'] ?? '';

    if ($user['username'] === '') {
        $errors[] = 'Username is required.';
    }
    if ($user['display_name'] === '') {
        $errors[] = 'Display name is required (this is what readers see on published posts).';
    }
    if ($id === 0 && $password === '') {
        $errors[] = 'Password is required for a new user.';
    }
    if ($password !== '' && strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters.';
    }

    if ($user['username'] !== '') {
        $check = $pdo->prepare('SELECT id FROM admin_users WHERE username = ? AND id != ?');
        $check->execute([$user['username'], $id]);
        if ($check->fetch()) {
            $errors[] = 'That username is already in use.';
        }
    }

    // Never allow the last admin to be demoted to author.
    if ($id > 0 && $user['role'] !== 'admin') {
        $adminCount = (int) $pdo->query("SELECT COUNT(*) FROM admin_users WHERE role = 'admin'")->fetchColumn();
        $stmt = $pdo->prepare('SELECT role FROM admin_users WHERE id = ?');
        $stmt->execute([$id]);
        $currentRole = $stmt->fetchColumn();
        if ($currentRole === 'admin' && $adminCount <= 1) {
            $errors[] = 'You cannot remove admin rights from the last remaining admin.';
        }
    }

    if (!$errors) {
        if ($id > 0) {
            if ($password !== '') {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare('UPDATE admin_users SET username = ?, display_name = ?, role = ?, password_hash = ? WHERE id = ?');
                $stmt->execute([$user['username'], $user['display_name'], $user['role'], $hash, $id]);
            } else {
                $stmt = $pdo->prepare('UPDATE admin_users SET username = ?, display_name = ?, role = ? WHERE id = ?');
                $stmt->execute([$user['username'], $user['display_name'], $user['role'], $id]);
            }
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare('INSERT INTO admin_users (username, display_name, role, password_hash) VALUES (?, ?, ?, ?)');
            $stmt->execute([$user['username'], $user['display_name'], $user['role'], $hash]);
        }

        header('Location: users.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title><?php echo $id > 0 ? 'Edit User' : 'New User'; ?> | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include __DIR__ . '/includes/nav.php'; ?>
  <div class="container pb-4" style="max-width: 520px;">
    <h1 class="h4 mb-3"><?php echo $id > 0 ? 'Edit User' : 'New User'; ?></h1>
    <?php if ($errors): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $e): ?><div><?php echo htmlspecialchars($e); ?></div><?php endforeach; ?>
      </div>
    <?php endif; ?>
    <form method="post" class="card card-body">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id" value="<?php echo (int) $id; ?>">

      <div class="mb-3">
        <label class="form-label">Display Name</label>
        <input type="text" name="display_name" class="form-control" value="<?php echo htmlspecialchars($user['display_name']); ?>" required>
        <div class="form-text">Shown publicly as the byline on their published posts.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        <div class="form-text">Used to log in — an email or a simple handle both work.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Password <?php echo $id > 0 ? '(leave blank to keep current password)' : ''; ?></label>
        <input type="password" name="password" class="form-control" <?php echo $id > 0 ? '' : 'required'; ?>>
      </div>

      <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-select">
          <option value="author" <?php echo $user['role'] === 'author' ? 'selected' : ''; ?>>Author — can write and manage posts</option>
          <option value="admin" <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin — can also manage users</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="users.php" class="btn btn-outline-secondary">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
