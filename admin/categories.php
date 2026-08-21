<?php
require_once __DIR__ . '/includes/auth.php';

function slugifyCategory(string $text): string
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verify();

    $name = trim($_POST['name'] ?? '');
    if ($name === '') {
        $errors[] = 'Category name is required.';
    } else {
        $slug = slugifyCategory($name);
        $check = $pdo->prepare('SELECT id FROM categories WHERE name = ? OR slug = ?');
        $check->execute([$name, $slug]);
        if ($check->fetch()) {
            $errors[] = 'A category with that name already exists.';
        } else {
            $stmt = $pdo->prepare('INSERT INTO categories (name, slug) VALUES (?, ?)');
            $stmt->execute([$name, $slug]);
            header('Location: categories.php');
            exit;
        }
    }
}

$categories = $pdo->query(
    'SELECT c.id, c.name, c.slug, COUNT(p.id) AS post_count
     FROM categories c
     LEFT JOIN posts p ON p.category_id = c.id
     GROUP BY c.id, c.name, c.slug
     ORDER BY c.name ASC'
)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Categories | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include __DIR__ . '/includes/nav.php'; ?>
  <div class="container pb-4">
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h2 class="h5">Add New Category</h2>
            <?php if ($errors): ?>
              <div class="alert alert-danger">
                <?php foreach ($errors as $e): ?><div><?php echo htmlspecialchars($e); ?></div><?php endforeach; ?>
              </div>
            <?php endif; ?>
            <form method="post">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <table class="table table-bordered bg-white align-middle">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Posts</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $cat): ?>
              <tr>
                <td><?php echo htmlspecialchars($cat['name']); ?></td>
                <td><code><?php echo htmlspecialchars($cat['slug']); ?></code></td>
                <td><?php echo (int) $cat['post_count']; ?></td>
                <td class="text-nowrap">
                  <a href="category-edit.php?id=<?php echo (int) $cat['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                  <form method="post" action="category-delete.php" class="d-inline"
                        onsubmit="return confirm('Delete this category? Posts in it will move to Uncategorized.');">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo (int) $cat['id']; ?>">
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php if (!$categories): ?>
              <tr><td colspan="4" class="text-center text-muted py-4">No categories yet.</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
