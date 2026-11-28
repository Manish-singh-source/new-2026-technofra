<?php

require_once __DIR__ . '/blog-schedule.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    $isHttps = !empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off';
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

function blog_escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function blog_base_path()
{
    if (defined('BLOG_BASE_PATH')) return BLOG_BASE_PATH;
    $directory = str_replace('\\', '/', dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/')));
    if ($directory === '/' || $directory === '.' || $directory === '\\') {
        return '';
    }

    return rtrim($directory, '/');
}

function blog_url($path = '')
{
    if ($path === 'admin') return blog_base_path() . '/blog-admin/';
    $url = blog_base_path() . '/blog/';
    return $path === '' ? $url : $url . '?post=' . rawurlencode(trim((string) $path, '/'));
}

function blog_storage_directory()
{
    return __DIR__ . '/blog-content';
}

function blog_posts_file()
{
    return blog_storage_directory() . '/posts.json';
}

function blog_slug($title)
{
    $title = trim((string) $title);
    if (function_exists('iconv')) {
        $asciiTitle = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title);
        if ($asciiTitle !== false) {
            $title = $asciiTitle;
        }
    }
    $slug = strtolower($title);
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    $slug = trim((string) $slug, '-');

    return $slug !== '' ? $slug : 'blog-' . date('YmdHis');
}

function blog_csrf_token()
{
    if (empty($_SESSION['blog_csrf_token'])) {
        $_SESSION['blog_csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['blog_csrf_token'];
}

function blog_require_csrf()
{
    $submittedToken = (string) ($_POST['csrf_token'] ?? '');
    $sessionToken = (string) ($_SESSION['blog_csrf_token'] ?? '');
    if ($submittedToken === '' || $sessionToken === '' || !hash_equals($sessionToken, $submittedToken)) {
        throw new RuntimeException('Your session token expired. Please refresh the page and try again.');
    }
}

function blog_admin_config()
{
    static $config;
    if ($config === null) {
        $config = require __DIR__ . '/blog-config.php';
    }

    return $config;
}

function blog_is_admin()
{
    return !empty($_SESSION['blog_admin_authenticated']);
}

function blog_find_post(array $posts, $slug)
{
    foreach ($posts as $post) {
        if (($post['slug'] ?? '') === $slug) {
            return $post;
        }
    }

    return null;
}

function blog_excerpt($content, $limit = 180)
{
    $text = trim(preg_replace('/\\s+/', ' ', html_entity_decode(strip_tags((string) $content), ENT_QUOTES, 'UTF-8')));
    if (function_exists('mb_strlen') && mb_strlen($text, 'UTF-8') > $limit) return mb_substr($text, 0, $limit, 'UTF-8') . '...';
    if (strlen($text) > $limit) return substr($text, 0, $limit) . '...';
    return $text;
}

function blog_format_date($date)
{
    $timestamp = strtotime((string) $date);
    return $timestamp === false ? '' : date('F j, Y', $timestamp);
}

function blog_sanitize_html($html)
{
    $html = (string) $html;
    if (trim($html) === '') return '';
    $previous = libxml_use_internal_errors(true);
    $document = new DOMDocument('1.0', 'UTF-8');
    $document->loadHTML('<?xml encoding="UTF-8"><div id="blog-sanitize-root">' . $html . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    libxml_use_internal_errors($previous);
    $root = $document->getElementById('blog-sanitize-root');
    if (!$root) return '';
    $allowed = ['p','br','strong','b','em','i','u','s','h1','h2','h3','h4','h5','h6','ul','ol','li','blockquote','hr','span','a','img','table','thead','tbody','tfoot','tr','th','td'];
    $remove = ['script','style','iframe','object','embed','form','input','button','svg','math','link','meta'];
    $walk = function ($node) use (&$walk, $allowed, $remove) {
        for ($child = $node->firstChild; $child;) {
            $next = $child->nextSibling;
            if ($child instanceof DOMComment) {
                $node->removeChild($child);
            } elseif ($child instanceof DOMElement) {
                $tag = strtolower($child->tagName);
                // Google Docs wraps copied content in <b style="font-weight:normal" id="docs-internal-guid-...">;
                // keeping that <b> after its style is stripped would make the whole article bold.
                $isDocsWrapper = $tag === 'b' && (strpos($child->getAttribute('id'), 'docs-internal-guid') === 0 || preg_match('/font-weight\s*:\s*(normal|[1-4]00)\b/i', $child->getAttribute('style')));
                if (in_array($tag, $remove, true)) {
                    $node->removeChild($child);
                } elseif ($isDocsWrapper || !in_array($tag, $allowed, true)) {
                    $walk($child);
                    while ($child->firstChild) $node->insertBefore($child->firstChild, $child);
                    $node->removeChild($child);
                } else {
                    $allowedAttributes = ['a' => ['href','target','rel'], 'img' => ['src','alt'], 'span' => ['class','style'], 'p' => ['class'], 'h1' => ['class'], 'h2' => ['class'], 'h3' => ['class'], 'h4' => ['class'], 'h5' => ['class'], 'h6' => ['class'], 'li' => ['class'], 'td' => ['colspan','rowspan'], 'th' => ['colspan','rowspan']];
                    $keep = $allowedAttributes[$tag] ?? [];
                    for ($i = $child->attributes->length - 1; $i >= 0; $i--) {
                        $attribute = $child->attributes->item($i);
                        if ($attribute instanceof DOMAttr && !in_array(strtolower($attribute->name), $keep, true)) {
                            $child->removeAttributeNode($attribute);
                        }
                    }
                    if ($child->hasAttribute('href') && !preg_match('~^(https?://|mailto:|/|#)~i', $child->getAttribute('href'))) $child->removeAttribute('href');
                    if ($child->hasAttribute('src') && !preg_match('#^(https?://|/)#i', $child->getAttribute('src'))) $child->removeAttribute('src');
                    foreach (['colspan', 'rowspan'] as $span) {
                        if ($child->hasAttribute($span) && !preg_match('/^[1-9][0-9]?$/', $child->getAttribute($span))) $child->removeAttribute($span);
                    }
                    if ($child->hasAttribute('class') &&!preg_match('/^ql-[a-z0-9- ]+$/', $child->getAttribute('class'))) $child->removeAttribute('class');
                    if ($child->hasAttribute('style')) {
                        $styles = [];
                        foreach (explode(';', $child->getAttribute('style')) as $rule) {
                            $parts = explode(':', $rule, 2);
                            if (count($parts) !== 2) continue;
                            $property = strtolower(trim($parts[0]));
                            $value = trim($parts[1]);
                            if (in_array($property, ['color','background-color'], true) && preg_match('/^(#[0-9a-f]{3,8}|rgb\(\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*\))$/i', $value)) $styles[] = $property . ':' . $value;
                        }
                        if ($styles) $child->setAttribute('style', implode(';', $styles)); else $child->removeAttribute('style');
                    }
                    if ($tag === 'a') $child->setAttribute('rel', 'noopener noreferrer');
                    $walk($child);
                }
            }
            $child = $next;
        }
    };
    $walk($root);
    $output = '';
    foreach ($root->childNodes as $child) $output .= $document->saveHTML($child);
    return $output;
}

function blog_render_content($content)
{
    $content = (string) $content;
    if (preg_match('/<(p|h[1-6]|ul|ol|blockquote|table)\b/i', $content)) return blog_sanitize_html($content);
    $blocks = preg_split('/\R\s*\R+/', trim($content));
    $html = '';
    foreach ($blocks as $block) {
        $lines = array_values(array_filter(array_map('trim', preg_split('/\R/', $block)), static function ($line) { return $line !== ''; }));
        if (!$lines) continue;
        if (count($lines) === 1 && preg_match('/^## (.+)$/', $lines[0], $match)) $html .= '<h2>' . blog_escape($match[1]) . '</h2>';
        elseif (count($lines) === 1 && preg_match('/^### (.+)$/', $lines[0], $match)) $html .= '<h3>' . blog_escape($match[1]) . '</h3>';
        elseif (count(array_filter($lines, static function ($line) { return strpos($line, '- ') === 0; })) === count($lines)) {
            $html .= '<ul>'; foreach ($lines as $line) $html .= '<li>' . blog_escape(substr($line, 2)) . '</li>'; $html .= '</ul>';
        } else $html .= '<p>' . nl2br(blog_escape(implode("\n", $lines))) . '</p>';
    }
    return $html;
}

function blog_image_url($path)
{
    $path = trim((string) $path);
    if ($path === '') return '';
    if (preg_match('#^https?://#i', $path)) return $path;
    return rtrim(blog_base_path(), '/') . '/' . ltrim($path, '/');
}
function blog_upload_image($file)
{
    if (!isset($file['error']) || $file['error'] === UPLOAD_ERR_NO_FILE) {
        return null;
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new RuntimeException('The image upload failed. Please choose another image and try again.');
    }
    if ($file['size'] > 5 * 1024 * 1024) {
        throw new RuntimeException('The image must be smaller than 5 MB.');
    }

    $imageInfo = getimagesize($file['tmp_name']);
    $allowedTypes = [
        IMAGETYPE_JPEG => 'jpg',
        IMAGETYPE_PNG => 'png',
        IMAGETYPE_WEBP => 'webp',
    ];
    if ($imageInfo === false || !isset($allowedTypes[$imageInfo[2]])) {
        throw new RuntimeException('Upload a valid JPG, PNG, or WebP image.');
    }

    $uploadDirectory = blog_storage_directory() . '/uploads';
    if (!is_dir($uploadDirectory) && !mkdir($uploadDirectory, 0755, true) && !is_dir($uploadDirectory)) {
        throw new RuntimeException('The image upload directory could not be created.');
    }

    $filename = bin2hex(random_bytes(16)) . '.' . $allowedTypes[$imageInfo[2]];
    if (!move_uploaded_file($file['tmp_name'], $uploadDirectory . '/' . $filename)) {
        throw new RuntimeException('The uploaded image could not be saved.');
    }

    return 'blog-content/uploads/' . $filename;
}

function blog_remove_uploaded_image($image)
{
    // Covers use 32-character names (jpg/png/webp); inline uploads use 16-character names and may also be gif.
    if (!is_string($image) || !preg_match('#^blog-content/uploads/([a-f0-9]{32}|[a-f0-9]{16})\.(jpg|png|webp|gif)$#', $image)) {
        return;
    }

    $file = __DIR__ . '/' . $image;
    if (is_file($file) && !unlink($file)) {
        throw new RuntimeException('The old blog image could not be removed.');
    }
}

// Uploaded images (blog-content/uploads/...) referenced by <img> tags inside article HTML.
function blog_content_uploaded_images($html)
{
    preg_match_all('#<img\b[^>]*\bsrc=["\'][^"\']*?(blog-content/uploads/(?:[a-f0-9]{32}|[a-f0-9]{16})\.(?:jpg|png|webp|gif))["\']#i', (string) $html, $matches);
    return array_values(array_unique($matches[1]));
}

// Every uploaded image still used by any article (cover or inline), read straight from the database.
// Returns null when the database cannot be read, so callers never delete files on a failed lookup.
function blog_uploaded_images_in_use()
{
    $connection = blog_db_connection();
    if (!$connection || !blog_ensure_schema($connection)) return null;
    $result = $connection->query('SELECT image, content FROM blogs');
    if (!$result) return null;
    $used = [];
    while ($row = $result->fetch_assoc()) {
        if ((string) $row['image'] !== '') $used[ltrim((string) $row['image'], '/')] = true;
        foreach (blog_content_uploaded_images($row['content']) as $image) $used[$image] = true;
    }
    return $used;
}

// Deletes the given uploaded images unless some article still uses them.
function blog_remove_unused_images(array $images)
{
    $images = array_values(array_unique(array_filter($images)));
    if (!$images) return;
    $used = blog_uploaded_images_in_use();
    if ($used === null) return;
    foreach ($images as $image) {
        if (isset($used[$image])) continue;
        try {
            blog_remove_uploaded_image($image);
        } catch (RuntimeException $exception) {
            error_log('Blog image cleanup failed: ' . $exception->getMessage());
        }
    }
}

// Inline images are uploaded as soon as they are picked, before the article is saved. Removes inline uploads
// that no article uses and that are older than $maxAgeSeconds (abandoned drafts, removed or replaced Image blocks).
// Cover images are never touched here: they are only uploaded on save and are cleaned up on replace/delete.
function blog_cleanup_abandoned_uploads($maxAgeSeconds = 86400)
{
    $directory = blog_storage_directory() . '/uploads';
    if (!is_dir($directory)) return;
    $used = blog_uploaded_images_in_use();
    if ($used === null) return;
    foreach (glob($directory . '/*') ?: [] as $file) {
        $name = basename($file);
        if (!preg_match('/^[a-f0-9]{16}\.(jpg|png|webp|gif)$/', $name)) continue;
        if (isset($used['blog-content/uploads/' . $name])) continue;
        if (!is_file($file) || time() - (int) filemtime($file) < $maxAgeSeconds) continue;
        if (!@unlink($file)) error_log('Blog upload cleanup could not remove ' . $name);
    }
}



