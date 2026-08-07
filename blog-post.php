<?php
require_once __DIR__ . '/includes/db.php';

function extractFaqSchema(string $html): ?array
{
    if (stripos($html, 'faq-block') === false) {
        return null;
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?><div>' . $html . '</div>');
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $faqBlocks = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' faq-block ')]");
    if ($faqBlocks->length === 0) {
        return null;
    }

    $questions = [];
    $currentQuestion = null;
    foreach ($faqBlocks->item(0)->childNodes as $node) {
        if ($node->nodeName === 'h3') {
            $currentQuestion = trim($node->textContent);
        } elseif ($node->nodeName === 'p' && $currentQuestion !== null) {
            $questions[] = [
                '@type' => 'Question',
                'name' => $currentQuestion,
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => trim($node->textContent),
                ],
            ];
            $currentQuestion = null;
        }
    }

    if (!$questions) {
        return null;
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $questions,
    ];
}

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

$stmt = $pdo->prepare("SELECT * FROM posts WHERE slug = ? AND status = 'published'");
$stmt->execute([$slug]);
$post = $stmt->fetch();

$pageBase = 'https://orb-ed.pk/';
$bodyClass = 'no-bg-image';

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

$faqSchema = extractFaqSchema($post['content']);

include __DIR__ . '/header.php';
?>
<div class="aboutpage">
  <section class="sec-1 contactsection">
    <div class="container-1500">
      <div class="row">
        <div class="col-lg-9 col-md-12 represhing m-auto">

          <p><a href="blogs.php">&larr; Back to Blog</a></p>
          <h1 class="blog-post-title"><?php echo htmlspecialchars($post['title']); ?></h1>
          <p class="text-muted">
            <?php echo htmlspecialchars(date('F j, Y', strtotime($post['published_at']))); ?>
            &middot; <?php echo htmlspecialchars($post['category']); ?>
          </p>

          <?php if (!empty($post['featured_image'])): ?>
            <img src="assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>"
                 alt="<?php echo htmlspecialchars($post['featured_image_alt'] ?: $post['title']); ?>"
                 style="width:100%; aspect-ratio:1200/630; object-fit:cover; border-radius:8px; margin-bottom:24px;">
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
<?php if ($faqSchema): ?>
<script type="application/ld+json"><?php echo json_encode($faqSchema); ?></script>
<?php endif; ?>
<?php include __DIR__ . '/footer.php'; ?>
