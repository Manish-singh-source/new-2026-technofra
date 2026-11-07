<?php

date_default_timezone_set('Asia/Kolkata');

function blog_db_connection()
{
    static $connection;
    static $attempted = false;
    if ($attempted) return $connection;
    $attempted = true;
    $configPath = __DIR__ . '/book-call-config.php';
    if (!is_file($configPath)) return null;
    $config = require $configPath;
    $db = $config['db'] ?? [];
    $host = trim((string) ($db['host'] ?? 'localhost'));
    $port = (int) ($db['port'] ?? 3306);
    $user = (string) ($db['username'] ?? 'root');
    $password = (string) ($db['password'] ?? '');
    $database = trim((string) ($db['database'] ?? ''));
    if ($database === '') return null;
    mysqli_report(MYSQLI_REPORT_OFF);
    $hosts = array_values(array_unique(array_filter([$host, $host === 'localhost' ? '127.0.0.1' : null, $host === '127.0.0.1' ? 'localhost' : null])));
    foreach ($hosts as $candidate) {
        $connection = @new mysqli($candidate, $user, $password, $database, $port);
        if (!$connection->connect_errno) {
            $connection->set_charset('utf8mb4');
            $connection->query("SET time_zone = '+05:30'");
            return $connection;
        }
    }
    $connection = null;
    return null;
}

function blog_ensure_schema($connection)
{
    $sql = "CREATE TABLE IF NOT EXISTS blogs (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        slug VARCHAR(220) NOT NULL,
        title VARCHAR(180) NOT NULL,
        excerpt VARCHAR(280) NOT NULL DEFAULT '',
        content LONGTEXT NOT NULL,
        image VARCHAR(500) NOT NULL DEFAULT '',
        published_at DATETIME NULL,
        updated_at DATETIME NULL,
        status VARCHAR(20) NOT NULL DEFAULT 'published',
        publish_at DATETIME NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        UNIQUE KEY blogs_slug_unique (slug),
        KEY blogs_status_publish_at (status, publish_at),
        KEY blogs_published_at (published_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    if ($connection->query($sql) !== true) return false;
    foreach (["meta_title" => "VARCHAR(180) NOT NULL DEFAULT ''", "meta_description" => "VARCHAR(320) NOT NULL DEFAULT ''"] as $column => $definition) {
        $check = $connection->query("SHOW COLUMNS FROM blogs LIKE '$column'");
        if ($check && $check->num_rows === 0 && !$connection->query("ALTER TABLE blogs ADD COLUMN $column $definition")) return false;
    }
    return true;
}

function blog_json_posts_backup()
{
    $file = __DIR__ . '/blog-content/posts.json';
    if (!is_file($file)) return [];
    $handle = @fopen($file, 'rb');
    if ($handle === false) return [];
    try {
        if (!flock($handle, LOCK_SH)) return [];
        $json = stream_get_contents($handle);
        flock($handle, LOCK_UN);
    } finally { fclose($handle); }
    try { $posts = json_decode((string) $json, true, 512, JSON_THROW_ON_ERROR); }
    catch (JsonException $exception) { return []; }
    return is_array($posts) ? array_values(array_filter($posts, 'is_array')) : [];
}

function blog_database_datetime($value)
{
    if ($value === null || trim((string) $value) === '') return null;
    try {
        $date = new DateTime((string) $value, new DateTimeZone('Asia/Kolkata'));
        $date->setTimezone(new DateTimeZone('Asia/Kolkata'));
        return $date->format('Y-m-d H:i:s');
    } catch (Exception $exception) { return null; }
}

function blog_db_post_values(array $post)
{
    return [
        (string) ($post['slug'] ?? ''),
        (string) ($post['title'] ?? ''),
        (string) ($post['meta_title'] ?? ''),
        (string) ($post['meta_description'] ?? ''),
        (string) ($post['excerpt'] ?? ''),
        (string) ($post['content'] ?? ''),
        (string) ($post['image'] ?? ''),
        blog_database_datetime($post['published_at'] ?? null),
        blog_database_datetime($post['updated_at'] ?? null),
        (string) ($post['status'] ?? 'published'),
        blog_database_datetime($post['publish_at'] ?? null),
    ];
}

function blog_db_upsert_posts($connection, array $posts)
{
    if (!$connection->begin_transaction()) return false;
    try {
        $insert = $connection->prepare('INSERT INTO blogs (slug, title, meta_title, meta_description, excerpt, content, image, published_at, updated_at, status, publish_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE title = VALUES(title), meta_title = VALUES(meta_title), meta_description = VALUES(meta_description), excerpt = VALUES(excerpt), content = VALUES(content), image = VALUES(image), published_at = VALUES(published_at), updated_at = VALUES(updated_at), status = VALUES(status), publish_at = VALUES(publish_at)');
        if (!$insert) throw new RuntimeException('Could not prepare blog save query.');
        foreach ($posts as $post) {
            $values = blog_db_post_values($post);
            if ($values[0] === '' || $values[1] === '') continue;
            $insert->bind_param('sssssssssss', $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6], $values[7], $values[8], $values[9], $values[10]);
            if (!$insert->execute()) throw new RuntimeException('Could not save blog record.');
        }
        $insert->close();
        $connection->commit();
        return true;
    } catch (Throwable $exception) {
        $connection->rollback();
        error_log('Blog database save failed: ' . $exception->getMessage());
        return false;
    }
}

function blog_change_post_status($slug, $status, $publishAt)
{
    if (!in_array($status, ['draft', 'published', 'scheduled'], true)) return false;
    try {
        $connection = blog_db_connection();
        if (!$connection || !blog_ensure_schema($connection)) return false;
        $now = (new DateTime('now', new DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s');
        $publishedAt = $publishAt ?? $now;
        $update = $connection->prepare("UPDATE blogs SET status = ?, publish_at = ?, published_at = CASE WHEN ? = 'draft' THEN published_at ELSE ? END, updated_at = ? WHERE slug = ? LIMIT 1");
        if (!$update) return false;
        $update->bind_param('ssssss', $status, $publishAt, $status, $publishedAt, $now, $slug);
        $success = $update->execute() && $update->affected_rows === 1;
        $update->close();
        return $success;
    } catch (Throwable $exception) {
        error_log('Blog status update failed: ' . $exception->getMessage());
        return false;
    }
}

function blog_delete_post($slug)
{
    $connection = blog_db_connection();
    if (!$connection || !blog_ensure_schema($connection)) return false;
    $delete = $connection->prepare('DELETE FROM blogs WHERE slug = ? LIMIT 1');
    if (!$delete) return false;
    $delete->bind_param('s', $slug);
    $success = $delete->execute();
    $delete->close();
    return $success;
}

function blog_promote_due_posts($connection)
{
    $now = (new DateTime('now', new DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s');
    $update = $connection->prepare("UPDATE blogs SET status = 'published', published_at = COALESCE(publish_at, published_at), updated_at = ?, publish_at = NULL WHERE status = 'scheduled' AND publish_at IS NOT NULL AND publish_at <= ?");
    if (!$update) return false;
    $update->bind_param('ss', $now, $now);
    $success = $update->execute();
    $update->close();
    return $success;
}

function blog_load_posts()
{
    $connection = blog_db_connection();
    if (!$connection || !blog_ensure_schema($connection)) return blog_json_posts_backup();
    blog_promote_due_posts($connection);
    $countResult = $connection->query('SELECT COUNT(*) AS total FROM blogs');
    $count = $countResult ? (int) ($countResult->fetch_assoc()['total'] ?? 0) : 0;
    if ($count === 0) {
        $backupPosts = blog_json_posts_backup();
        if ($backupPosts) blog_db_upsert_posts($connection, $backupPosts);
    }
    $posts = [];
    $result = $connection->query('SELECT slug, title, meta_title, meta_description, excerpt, content, image, published_at, updated_at, status, publish_at FROM blogs ORDER BY COALESCE(publish_at, published_at, created_at) DESC, id DESC');
    if (!$result) return [];
    while ($post = $result->fetch_assoc()) $posts[] = $post;
    return $posts;
}

function blog_save_posts(array $posts)
{
    $connection = blog_db_connection();
    return $connection && blog_ensure_schema($connection) && blog_db_upsert_posts($connection, $posts);
}

function blog_is_live(array $post)
{
    $status = (string) ($post['status'] ?? 'published');
    if ($status === 'published') return true;
    if ($status !== 'scheduled') return false;
    $publishAt = DateTime::createFromFormat('!Y-m-d H:i:s', (string) ($post['publish_at'] ?? ''), new DateTimeZone('Asia/Kolkata'));
    return $publishAt instanceof DateTime && $publishAt <= new DateTime('now', new DateTimeZone('Asia/Kolkata'));
}

function blog_live_posts(array $posts)
{
    $posts = array_values(array_filter($posts, 'blog_is_live'));
    usort($posts, static function ($first, $second) {
        return strcmp((string) ($second['publish_at'] ?? $second['published_at'] ?? ''), (string) ($first['publish_at'] ?? $first['published_at'] ?? ''));
    });
    return $posts;
}

function blog_status_label(array $post)
{
    return blog_is_live($post) ? 'Published' : ((string) ($post['status'] ?? 'published') === 'scheduled' ? 'Scheduled' : 'Draft');
}

