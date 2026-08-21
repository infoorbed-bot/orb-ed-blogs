<?php
require_once __DIR__ . '/includes/auth.php';

function slugifyCategory(string $text): string
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

$id = (int) ($_GET['id'] ?? $_POST['id'] ?? 0);
$stmt = $pdo->prepare('SELECT * FROM categories WHERE id = ?');
$stmt->execute([$id]);
$category = $stmt->fetch();

if (!$category) {
    header('Location: categories.php');
    exit;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verify();

    $name = trim($_POST['name'] ?? '');
    if ($name === '') {
        $errors[] = 'Category name is required.';
    } else {
        $slug = slugifyCategory($name);
        $check = $pdo->prepare('SELECT id FROM categories WHERE (name = ? OR slug = ?) AND id != ?');
        $check->execute([$name, $slug, $id]);
        if ($check->fetch()) {
            $errors[] = 'Another category already uses that name.';
        } else {
            $update = $pdo->prepare('UPDATE categories SET name = ?, slug = ? WHERE id = ?');
            $update->execute([$name, $slug, $id]);
            header('Location: categories.php');
            exit;
        }
        $category['name'] = $name;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Edit Category | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include __DIR__ . '/includes/nav.php'; ?>
  <div class="container pb-4" style="max-width: 500px;">
    <h1 class="h4 mb-3">Edit Category</h1>
    <?php if ($errors): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $e): ?><div><?php echo htmlspecialchars($e); ?></div><?php endforeach; ?>
      </div>
    <?php endif; ?>
    <form method="post" class="card card-body">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id" value="<?php echo (int) $id; ?>">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($category['name']); ?>" required>
      </div>
      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="categories.php" class="btn btn-outline-secondary">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
