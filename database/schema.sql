-- Orb-Ed blog CMS schema
-- Run once against the orbed_blogs database.
-- Contains no credentials or seed data — safe to keep in a public repo.

CREATE TABLE IF NOT EXISTS admin_users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(190) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL UNIQUE,
  excerpt VARCHAR(500) DEFAULT NULL,
  content LONGTEXT NOT NULL,
  featured_image VARCHAR(255) DEFAULT NULL,
  featured_image_alt VARCHAR(255) DEFAULT NULL,
  meta_title VARCHAR(255) DEFAULT NULL,
  meta_description VARCHAR(255) DEFAULT NULL,
  focus_keyword VARCHAR(255) DEFAULT NULL,
  category VARCHAR(50) NOT NULL DEFAULT 'General',
  status ENUM('draft', 'published') NOT NULL DEFAULT 'draft',
  published_at DATETIME DEFAULT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY idx_status_published (status, published_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
