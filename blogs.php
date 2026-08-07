<?php
require_once __DIR__ . '/includes/db.php';

$pageTitle = "Blog | Tips & Resources for O and A Level Students";
$pageDescription = "Explore the Orb-Ed.pk blog for helpful tips, exam strategies, and resources for O & A Level students in Pakistan and worldwide. Stay informed and succeed!";

$perPage = 9;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;

$total = (int)$pdo->query("SELECT COUNT(*) FROM posts WHERE status = 'published'")->fetchColumn();
$totalPages = max(1, (int)ceil($total / $perPage));

$stmt = $pdo->prepare(
    "SELECT title, slug, excerpt, featured_image, featured_image_alt, category, published_at
     FROM posts WHERE status = 'published' ORDER BY published_at DESC LIMIT :limit OFFSET :offset"
);
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$posts = $stmt->fetchAll();
?>
<div class="currentpage4 ">

  <?php include __DIR__ . '/header.php'; ?>

  <div class="blogPage">
    <div class="container-1500">
      <h1 class="title-mean" data-aos="zoom-in">Orb-Ed Blog</h1>

      <div class="row">
        <?php foreach ($posts as $post): ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <a href="blogs/<?php echo htmlspecialchars($post['slug']); ?>" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm">
                <?php if (!empty($post['featured_image'])): ?>
                  <img src="assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>"
                       class="card-img-top" style="height:200px; object-fit:cover;"
                       alt="<?php echo htmlspecialchars($post['featured_image_alt'] ?: $post['title']); ?>">
                <?php endif; ?>
                <div class="card-body">
                  <p class="text-muted mb-1 small"><?php echo htmlspecialchars($post['category']); ?></p>
                  <h2 class="h5"><?php echo htmlspecialchars($post['title']); ?></h2>
                  <p class="text-muted"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>

        <?php if (!$posts): ?>
          <p class="text-center py-5">No posts published yet — check back soon.</p>
        <?php endif; ?>
      </div>

      <?php if ($totalPages > 1): ?>
        <nav class="d-flex justify-content-center gap-2 my-4">
          <?php for ($p = 1; $p <= $totalPages; $p++): ?>
            <a href="?page=<?php echo $p; ?>"
               class="btn btn-sm <?php echo $p === $page ? 'btn-primary' : 'btn-outline-primary'; ?>"><?php echo $p; ?></a>
          <?php endfor; ?>
        </nav>
      <?php endif; ?>
    </div>
  </div>

  <?php include __DIR__ . '/footer.php'; ?>
</div>
