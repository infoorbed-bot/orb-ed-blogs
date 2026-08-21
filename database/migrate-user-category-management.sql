-- ============================================================
-- Adds Categories (proper table, was free-text) and Users
-- (display name + role: admin/author) to the CMS, and links
-- every post to both. Run this whole script once in phpMyAdmin
-- for orbed_blogs.
-- ============================================================

-- 1. Categories table
CREATE TABLE IF NOT EXISTS categories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL UNIQUE,
  slug VARCHAR(100) NOT NULL UNIQUE,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. Seed categories from whatever's actually in your posts today
INSERT IGNORE INTO categories (name, slug)
SELECT DISTINCT category, LOWER(REPLACE(TRIM(category), ' ', '-'))
FROM posts
WHERE category IS NOT NULL AND TRIM(category) <> '';

-- Guaranteed fallback category (used when a category gets deleted later)
INSERT IGNORE INTO categories (name, slug) VALUES ('General', 'general');

-- 3. Extend admin_users with display name + role
ALTER TABLE admin_users
  ADD COLUMN display_name VARCHAR(190) NOT NULL DEFAULT '' AFTER username,
  ADD COLUMN role ENUM('admin', 'author') NOT NULL DEFAULT 'author' AFTER password_hash;

-- Make your existing account the admin
UPDATE admin_users
SET display_name = 'Orb-Ed Team', role = 'admin'
WHERE username = 'info.orbed@gmail.com';

-- 4. Extend posts with category_id + author_id
ALTER TABLE posts
  ADD COLUMN category_id INT UNSIGNED DEFAULT NULL AFTER focus_keyword,
  ADD COLUMN author_id INT UNSIGNED DEFAULT NULL AFTER category_id;

-- Backfill category_id from the old free-text category column
UPDATE posts p
JOIN categories c ON c.name = p.category
SET p.category_id = c.id;

-- Backfill author_id: every existing post becomes attributed to your account
UPDATE posts
SET author_id = (SELECT id FROM admin_users WHERE username = 'info.orbed@gmail.com' LIMIT 1)
WHERE author_id IS NULL;

-- 5. Foreign keys
ALTER TABLE posts
  ADD CONSTRAINT fk_posts_category FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL,
  ADD CONSTRAINT fk_posts_author FOREIGN KEY (author_id) REFERENCES admin_users(id) ON DELETE SET NULL;

-- 6. Drop the old free-text category column now that category_id replaces it
ALTER TABLE posts DROP COLUMN category;
