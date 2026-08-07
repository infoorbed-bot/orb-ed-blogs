<?php
require_once __DIR__ . '/includes/db.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

$stmt = $pdo->prepare("SELECT * FROM posts WHERE slug = ? AND status = 'published'");
$stmt->execute([$slug]);
$post = $stmt->fetch();

$pageBase = 'https://orb-ed.pk/';

if (!$post) {
    http_response_code(404);
    $pageTitle = 'Post Not Found | Orb-Ed Blog';
    $pageDescription = 'The blog post you are looking for could not be found.';
    include __DIR__ . '/header.php';
    ?>
    <div class="aboutpage">
      <section class="sec-1 contactsection">
        <div class="container-1500 text-center" style="padding: 80px 0;">
          <h1>404 — Post Not Found</h1>
          <p><a href="blogs.php">&larr; Back to the Blog</a></p>
        </div>
      </section>
    </div>
    <?php
    include __DIR__ . '/footer.php';
    exit;
}

$pageTitle = $post['meta_title'] ?: $post['title'];
$pageDescription = $post['meta_description'] ?: $post['excerpt'];
$pageCanonical = 'https://orb-ed.pk/blogs/' . $post['slug'];

$articleImage = !empty($post['featured_image'])
    ? 'https://orb-ed.pk/assets/images/blog/' . $post['featured_image']
    : 'https://orb-ed.pk/assets/images/orbed-logo.png';

$articleSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post['title'],
    'image' => $articleImage,
    'datePublished' => $post['published_at'],
    'dateModified' => $post['updated_at'],
    'author' => ['@type' => 'Organization', 'name' => 'Orb-Ed'],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Orb-Ed',
        'logo' => ['@type' => 'ImageObject', 'url' => 'https://orb-ed.pk/assets/images/orbed-logo.png'],
    ],
]);

include __DIR__ . '/header.php';
?>
<div class="aboutpage">
  <section class="sec-1 contactsection">
    <div class="container-1500">
      <div class="row">
        <div class="col-lg-9 col-md-12 represhing m-auto">

          <p><a href="blogs.php">&larr; Back to Blog</a></p>
          <h1><?php echo htmlspecialchars($post['title']); ?></h1>
          <p class="text-muted">
            <?php echo htmlspecialchars(date('F j, Y', strtotime($post['published_at']))); ?>
            &middot; <?php echo htmlspecialchars($post['category']); ?>
          </p>

          <?php if (!empty($post['featured_image'])): ?>
            <img src="assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>"
                 alt="<?php echo htmlspecialchars($post['featured_image_alt'] ?: $post['title']); ?>"
                 style="width:100%; max-height:420px; object-fit:cover; border-radius:8px; margin-bottom:24px;">
          <?php endif; ?>

          <div class="blog-post-content">
            <?php echo $post['content']; ?>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
<script type="application/ld+json"><?php echo $articleSchema; ?></script>
<?php include __DIR__ . '/footer.php'; ?>
