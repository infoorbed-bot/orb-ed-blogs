<?php
require_once __DIR__ . '/includes/db.php';
header('Content-Type: application/xml; charset=utf-8');

$staticPages = [
    ['loc' => 'https://orb-ed.pk/', 'changefreq' => 'weekly', 'priority' => '1.0'],
    ['loc' => 'https://orb-ed.pk/aboutus.php', 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://orb-ed.pk/courses.php', 'changefreq' => 'weekly', 'priority' => '0.9'],
    ['loc' => 'https://orb-ed.pk/blogs.php', 'changefreq' => 'weekly', 'priority' => '0.7'],
    ['loc' => 'https://orb-ed.pk/contact.php', 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://orb-ed.pk/studyabroad.php', 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://orb-ed.pk/faqs.php', 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['loc' => 'https://orb-ed.pk/carrers.php', 'changefreq' => 'monthly', 'priority' => '0.5'],
    ['loc' => 'https://orb-ed.pk/terms.php', 'changefreq' => 'yearly', 'priority' => '0.4'],
    ['loc' => 'https://orb-ed.pk/economics.php', 'changefreq' => 'monthly', 'priority' => '0.7'],
];
$today = date('Y-m-d');

$posts = $pdo->query("SELECT slug, updated_at FROM posts WHERE status = 'published' ORDER BY published_at DESC")->fetchAll();

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($staticPages as $p) {
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($p['loc']) . "</loc>\n";
    echo "    <lastmod>{$today}</lastmod>\n";
    echo "    <changefreq>{$p['changefreq']}</changefreq>\n";
    echo "    <priority>{$p['priority']}</priority>\n";
    echo "  </url>\n";
}

foreach ($posts as $post) {
    $loc = 'https://orb-ed.pk/blogs/' . $post['slug'];
    $lastmod = date('Y-m-d', strtotime($post['updated_at']));
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($loc) . "</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.6</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>' . "\n";
