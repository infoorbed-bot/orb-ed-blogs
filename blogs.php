<?php
require_once __DIR__ . '/includes/db.php';

$pageTitle = "Blog | Tips & Resources for O and A Level Students";
$pageDescription = "Explore the Orb-Ed.pk blog for helpful tips, exam strategies, and resources for O & A Level students in Pakistan and worldwide. Stay informed and succeed!";
$bodyClass = 'no-bg-image';

$perPage = 15;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;

$total = (int)$pdo->query("SELECT COUNT(*) FROM posts WHERE status = 'published'")->fetchColumn();
$totalPages = max(1, (int)ceil($total / $perPage));

$stmt = $pdo->prepare(
    "SELECT p.title, p.slug, p.excerpt, p.featured_image, p.featured_image_alt, p.published_at,
            c.name AS category_name,
            COALESCE(u.display_name, u.username) AS author_name
     FROM posts p
     LEFT JOIN categories c ON c.id = p.category_id
     LEFT JOIN admin_users u ON u.id = p.author_id
     WHERE p.status = 'published' ORDER BY p.published_at DESC LIMIT :limit OFFSET :offset"
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
                       class="card-img-top" style="width:100%; aspect-ratio:1200/630; object-fit:cover;"
                       alt="<?php echo htmlspecialchars($post['featured_image_alt'] ?: $post['title']); ?>">
                <?php endif; ?>
                <div class="card-body">
                  <p class="text-muted mb-1 small">
                    <?php echo htmlspecialchars($post['category_name'] ?? 'Uncategorized'); ?>
                    <?php if (!empty($post['published_at'])): ?>
                      &middot; <?php echo htmlspecialchars(date('F j, Y', strtotime($post['published_at']))); ?>
                    <?php endif; ?>
                    <?php if (!empty($post['author_name'])): ?>
                      &middot; by <?php echo htmlspecialchars($post['author_name']); ?>
                    <?php endif; ?>
                  </p>
                  <h2 class="h5 blog-card-title"><?php echo htmlspecialchars($post['title']); ?></h2>
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
