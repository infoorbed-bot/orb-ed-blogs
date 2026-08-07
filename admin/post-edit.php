<?php
require_once __DIR__ . '/includes/auth.php';

function slugify(string $text): string
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

$id = 0;
$post = [
    'title' => '',
    'slug' => '',
    'excerpt' => '',
    'content' => '',
    'featured_image' => '',
    'featured_image_alt' => '',
    'meta_title' => '',
    'meta_description' => '',
    'focus_keyword' => '',
    'category' => 'General',
    'status' => 'draft',
    'published_at' => null,
];

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} elseif (isset($_POST['id'])) {
    $id = (int)$_POST['id'];
}

if ($id > 0) {
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    $existing = $stmt->fetch();
    if ($existing) {
        $post = $existing;
    } else {
        $id = 0;
    }
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verify();

    $post['title'] = trim($_POST['title'] ?? '');
    $post['slug'] = slugify($_POST['slug'] ?? $post['title']);
    $post['excerpt'] = trim($_POST['excerpt'] ?? '');
    $post['content'] = $_POST['content'] ?? '';
    $post['featured_image_alt'] = trim($_POST['featured_image_alt'] ?? '');
    $post['meta_title'] = trim($_POST['meta_title'] ?? '');
    $post['meta_description'] = trim($_POST['meta_description'] ?? '');
    $post['focus_keyword'] = trim($_POST['focus_keyword'] ?? '');
    $post['category'] = trim($_POST['category'] ?? 'General');
    $post['status'] = ($_POST['status'] ?? 'draft') === 'published' ? 'published' : 'draft';

    if ($post['title'] === '') {
        $errors[] = 'Title is required.';
    }
    if ($post['slug'] === '') {
        $errors[] = 'Slug is required.';
    }
    if (trim(strip_tags($post['content'])) === '') {
        $errors[] = 'Content is required.';
    }

    if ($post['slug'] !== '') {
        $check = $pdo->prepare('SELECT id FROM posts WHERE slug = ? AND id != ?');
        $check->execute([$post['slug'], $id]);
        if ($check->fetch()) {
            $errors[] = 'That slug is already used by another post. Choose a different one.';
        }
    }

    if (!empty($_FILES['featured_image']['name'])) {
        $file = $_FILES['featured_image'];
        $allowedExt = ['jpg', 'jpeg', 'png', 'webp'];
        $allowedMime = ['image/jpeg', 'image/png', 'image/webp'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $maxSize = 2 * 1024 * 1024;

        if ($file['error'] !== UPLOAD_ERR_OK) {
            $errors[] = 'Image upload failed. Please try again.';
        } elseif (!in_array($ext, $allowedExt, true)) {
            $errors[] = 'Featured image must be a JPG, PNG, or WEBP file.';
        } elseif ($file['size'] > $maxSize) {
            $errors[] = 'Featured image must be smaller than 2MB.';
        } else {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $file['tmp_name']);
            finfo_close($finfo);

            if (!in_array($mime, $allowedMime, true)) {
                $errors[] = 'That file does not look like a valid image.';
            } else {
                $newName = bin2hex(random_bytes(16)) . '.' . $ext;
                $destDir = __DIR__ . '/../assets/images/blog/';
                $dest = $destDir . $newName;

                if (move_uploaded_file($file['tmp_name'], $dest)) {
                    if (!empty($post['featured_image'])) {
                        $oldPath = $destDir . basename($post['featured_image']);
                        if (is_file($oldPath)) {
                            unlink($oldPath);
                        }
                    }
                    $post['featured_image'] = $newName;
                } else {
                    $errors[] = 'Could not save the uploaded image.';
                }
            }
        }
    }

    if (!$errors) {
        $publishedAt = $post['published_at'];
        if ($post['status'] === 'published' && empty($publishedAt)) {
            $publishedAt = date('Y-m-d H:i:s');
        }

        if ($id > 0) {
            $stmt = $pdo->prepare(
                'UPDATE posts SET title=?, slug=?, excerpt=?, content=?, featured_image=?, featured_image_alt=?,
                 meta_title=?, meta_description=?, focus_keyword=?, category=?, status=?, published_at=?
                 WHERE id=?'
            );
            $stmt->execute([
                $post['title'], $post['slug'], $post['excerpt'], $post['content'],
                $post['featured_image'], $post['featured_image_alt'],
                $post['meta_title'], $post['meta_description'], $post['focus_keyword'],
                $post['category'], $post['status'], $publishedAt, $id,
            ]);
        } else {
            $stmt = $pdo->prepare(
                'INSERT INTO posts (title, slug, excerpt, content, featured_image, featured_image_alt,
                 meta_title, meta_description, focus_keyword, category, status, published_at)
                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)'
            );
            $stmt->execute([
                $post['title'], $post['slug'], $post['excerpt'], $post['content'],
                $post['featured_image'], $post['featured_image_alt'],
                $post['meta_title'], $post['meta_description'], $post['focus_keyword'],
                $post['category'], $post['status'], $publishedAt,
            ]);
        }

        header('Location: posts.php');
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
  <title><?php echo $id > 0 ? 'Edit Post' : 'New Post'; ?> | Orb-Ed Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
</head>
<body>
  <div class="container py-4" style="max-width: 900px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0"><?php echo $id > 0 ? 'Edit Post' : 'New Post'; ?></h1>
      <a href="posts.php" class="btn btn-outline-secondary btn-sm">&larr; Back to Posts</a>
    </div>

    <?php if ($errors): ?>
      <div class="alert alert-danger">
        <ul class="mb-0">
          <?php foreach ($errors as $e): ?><li><?php echo htmlspecialchars($e); ?></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id" value="<?php echo (int)$id; ?>">

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" id="title-input" class="form-control" value="<?php echo htmlspecialchars($post['title']); ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Slug (URL: orb-ed.pk/blogs/...)</label>
        <input type="text" name="slug" id="slug-input" class="form-control" value="<?php echo htmlspecialchars($post['slug']); ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Excerpt (shown on the blog listing)</label>
        <textarea name="excerpt" class="form-control" rows="2"><?php echo htmlspecialchars($post['excerpt']); ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Content</label>
        <div id="editor" style="height: 400px; background: #fff;"></div>
        <input type="hidden" name="content" id="content-input">
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Featured Image (JPG/PNG/WEBP, max 2MB)</label>
          <input type="file" name="featured_image" class="form-control" accept=".jpg,.jpeg,.png,.webp">
          <?php if (!empty($post['featured_image'])): ?>
            <img src="../assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>" style="max-height:100px; margin-top:8px;" class="d-block rounded">
          <?php endif; ?>
        </div>
        <div class="col-md-6">
          <label class="form-label">Featured Image Alt Text</label>
          <input type="text" name="featured_image_alt" class="form-control" value="<?php echo htmlspecialchars($post['featured_image_alt']); ?>">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Category</label>
          <select name="category" class="form-select">
            <?php foreach (['O Level', 'A Level', 'MDCAT', 'General'] as $cat): ?>
              <option value="<?php echo htmlspecialchars($cat); ?>" <?php echo $post['category'] === $cat ? 'selected' : ''; ?>><?php echo htmlspecialchars($cat); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Focus Keyword</label>
          <input type="text" name="focus_keyword" class="form-control" value="<?php echo htmlspecialchars($post['focus_keyword']); ?>">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Meta Title (falls back to title if blank)</label>
        <input type="text" name="meta_title" class="form-control" value="<?php echo htmlspecialchars($post['meta_title']); ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Meta Description</label>
        <textarea name="meta_description" id="meta-desc-input" class="form-control" rows="2"><?php echo htmlspecialchars($post['meta_description']); ?></textarea>
        <div class="form-text" id="meta-desc-counter"></div>
      </div>

      <div class="mb-4">
        <label class="form-label d-block">Status</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status" value="draft" id="status-draft" <?php echo $post['status'] === 'draft' ? 'checked' : ''; ?>>
          <label class="form-check-label" for="status-draft">Draft</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status" value="published" id="status-published" <?php echo $post['status'] === 'published' ? 'checked' : ''; ?>>
          <label class="form-check-label" for="status-published">Published</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Save Post</button>
    </form>
  </div>

  <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
  <script>
    const quill = new Quill('#editor', { theme: 'snow' });
    quill.root.innerHTML = <?php echo json_encode($post['content']); ?>;

    document.querySelector('form').addEventListener('submit', function () {
      document.getElementById('content-input').value = quill.root.innerHTML;
    });

    const titleInput = document.getElementById('title-input');
    const slugInput = document.getElementById('slug-input');
    let slugEdited = <?php echo $id > 0 ? 'true' : 'false'; ?>;
    slugInput.addEventListener('input', () => { slugEdited = true; });
    titleInput.addEventListener('input', () => {
      if (!slugEdited) {
        slugInput.value = titleInput.value
          .toLowerCase()
          .trim()
          .replace(/[^a-z0-9]+/g, '-')
          .replace(/^-+|-+$/g, '');
      }
    });

    const metaDesc = document.getElementById('meta-desc-input');
    const counter = document.getElementById('meta-desc-counter');
    function updateCounter() {
      counter.textContent = metaDesc.value.length + ' / 155 characters (ideal range for search results)';
    }
    metaDesc.addEventListener('input', updateCounter);
    updateCounter();
  </script>
</body>
</html>
