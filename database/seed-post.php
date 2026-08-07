<?php
// One-off: migrates the article that used to be hardcoded in blogs.php
// into the posts table. Safe to keep/commit — no credentials here.
// Run once: php database/seed-post.php

require __DIR__ . '/../config/db.php';

$title = "Stepping Into A Level? Here's How Orb-Ed Can Help";
$slug = 'stepping-into-a-level-how-orb-ed-can-help';

$existing = $pdo->prepare('SELECT id FROM posts WHERE slug = ?');
$existing->execute([$slug]);
if ($existing->fetch()) {
    echo "Post already exists, skipping.\n";
    exit;
}

$content = <<<HTML
<p>Whether you're a student who's invested in academics or one that does not like to study a lot and still
want to score well, Orb-Ed has the right learning resources for all. With an extensive library of structured
recorded lectures, detailed notes, revision guides, solved and unsolved topical and yearly past papers along
with 24/7 tutor support, Orb-Ed is here as your learning partner to ensure your academics stay on track. So,
let's dive in and explore how Orb-Ed can be your ideal learning partner.</p>
<h2>Learning Flexibility</h2>
<p>With Orb-Ed, the greatest benefit you have is the learning flexibility to plan your schedule. Whether
you're a student who likes to rise and shine or study in the late hours of the night, our structured
lectures and notes are there around the clock so you can study anywhere, anytime. Doesn't that make life
easy and save time travelling from one tuition to another?</p>
<h2>Make The Most Of Your A Level Experience</h2>
<p>With all the freed-up time and no stress of a confining after college study schedule, you can take a sigh
of relief and make the most of your A Level experience. That means engaging in clubs and societies on
campus, participating in extra-curricular and sports activities, and focus on skill development all while
studying at your own pace. Think how much you can accomplish and enjoy during A Level with Orb-Ed.</p>
<h2>Stay Ahead Of The Curve</h2>
<p>With Orb-Ed, you get access to past paper tips and tricks along with revision guides to equip you with the
skills and techniques required to appear in your CAIE examination. These are proven methods created by
experts through which you can understand the concepts of each lecture and score well in exams. Now that's
what we call staying ahead of the curve.</p>
<p>So, what are you waiting for? Register now with Orb-Ed and get started with your learning partner.</p>
<p>Want to explore Orb-Ed? <a href="https://lms.orb-ed.pk/account/register">Click here</a> to avail your free trial.</p>
HTML;

$stmt = $pdo->prepare(
    'INSERT INTO posts (title, slug, excerpt, content, meta_title, meta_description, category, status, published_at)
     VALUES (:title, :slug, :excerpt, :content, :meta_title, :meta_description, :category, :status, :published_at)'
);

$stmt->execute([
    ':title' => $title,
    ':slug' => $slug,
    ':excerpt' => "Whether you're invested in academics or not, Orb-Ed has the right learning resources to help you step into A Level.",
    ':content' => $content,
    ':meta_title' => "Stepping Into A Level? Here's How Orb-Ed Can Help",
    ':meta_description' => 'Starting A Level? See how Orb-Ed\'s recorded lectures, past papers, and 24/7 tutor support give you the flexibility to study anywhere, anytime.',
    ':category' => 'A Level',
    ':status' => 'published',
    ':published_at' => '2023-01-07 00:00:00',
]);

echo "Seed post created.\n";
