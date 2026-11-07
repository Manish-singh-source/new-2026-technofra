-- Blog rich-content compatibility migration for crm.blogs.
-- Existing columns and rows are preserved.

ALTER TABLE blogs MODIFY content LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL;
ALTER TABLE blogs ADD COLUMN IF NOT EXISTS meta_title VARCHAR(180) NOT NULL DEFAULT '' AFTER title;
ALTER TABLE blogs ADD COLUMN IF NOT EXISTS meta_description VARCHAR(320) NOT NULL DEFAULT '' AFTER meta_title;

SET @has_live_index := (SELECT COUNT(*) FROM information_schema.statistics WHERE table_schema = DATABASE() AND table_name = 'blogs' AND index_name = 'blogs_status_publish_at');
SET @add_live_index := IF(@has_live_index = 0, 'ALTER TABLE blogs ADD INDEX blogs_status_publish_at (status, publish_at)', 'SELECT 1');
PREPARE blog_index_stmt FROM @add_live_index;
EXECUTE blog_index_stmt;
DEALLOCATE PREPARE blog_index_stmt;

-- Rollback: ALTER TABLE blogs DROP INDEX blogs_status_publish_at;
-- The content column cannot be safely rolled back without truncating rich HTML.