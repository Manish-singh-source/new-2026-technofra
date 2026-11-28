<?php
require_once __DIR__ . '/blog-helpers.php';
header('Content-Type: text/html; charset=UTF-8');

$config = blog_admin_config();
$configured = !empty($config['password_hash']) && password_get_info((string) $config['password_hash'])['algo'] !== null;
$error = '';
$notice = (string) ($_SESSION['blog_admin_notice'] ?? '');
unset($_SESSION['blog_admin_notice']);

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        blog_require_csrf();
        $action = (string) ($_POST['action'] ?? '');

        if ($action === 'login' && !blog_is_admin()) {
            $username = (string) ($_POST['username'] ?? '');
            $password = (string) ($_POST['password'] ?? '');
            if ($configured && hash_equals((string) $config['username'], $username) && password_verify($password, (string) $config['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['blog_admin_authenticated'] = true;
                blog_cleanup_abandoned_uploads();
                header('Location: ' . blog_url('admin'));
                exit;
            }
            $error = 'The username or password was incorrect.';
        } elseif ($action === 'logout' && blog_is_admin()) {
            unset($_SESSION['blog_admin_authenticated']);
            session_regenerate_id(true);
            header('Location: ' . blog_url('admin'));
            exit;
        } elseif (blog_is_admin() && $action === 'save') {
            $posts = blog_load_posts();
            $oldSlug = trim((string) ($_POST['old_slug'] ?? ''));
            $title = trim((string) ($_POST['title'] ?? ''));
            $excerpt = trim((string) ($_POST['excerpt'] ?? ''));
            $metaTitle = trim((string) ($_POST['meta_title'] ?? ''));
            $metaDescription = trim((string) ($_POST['meta_description'] ?? ''));
            $requestedSlug = trim((string) ($_POST['slug'] ?? ''));
            $contentHtml = trim((string) ($_POST['content_html'] ?? ''));
            $content = blog_sanitize_html($contentHtml);
            $plainContent = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($content), ENT_QUOTES, 'UTF-8')));
            $hasInlineImage = preg_match('/<img\b/i', $content) === 1;
            $status = (string) ($_POST['status'] ?? 'draft');
            $publishAtInput = trim((string) ($_POST['publish_at'] ?? ''));
            if (!in_array($status, ['draft', 'scheduled', 'published'], true)) {
                throw new RuntimeException('Choose a valid publishing status.');
            }
            if ($title === '' || strlen($title) > 180) {
                throw new RuntimeException('Enter a title of 1 to 180 characters.');
            }
            if (strlen($metaTitle) > 180) {
                throw new RuntimeException('Keep the meta title to 180 characters or fewer.');
            }
            if (strlen($metaDescription) > 320) {
                throw new RuntimeException('Keep the meta description to 320 characters or fewer.');
            }
            if (strlen($excerpt) > 280) {
                throw new RuntimeException('Keep the card description to 280 characters or fewer.');
            }
            if (($plainContent === '' && !$hasInlineImage) || strlen($content) > 200000) {
                throw new RuntimeException('Enter article content or add an image before saving.');
            }
            $existingIndex = null;
            $existingPost = null;
            if ($oldSlug !== '') {
                foreach ($posts as $index => $post) {
                    if (($post['slug'] ?? '') === $oldSlug) {
                        $existingIndex = $index;
                        $existingPost = $post;
                        break;
                    }
                }
                if ($existingPost === null) {
                    throw new RuntimeException('The article you are editing no longer exists.');
                }
            }

            $slug = blog_slug($requestedSlug !== '' ? $requestedSlug : $title);
            foreach ($posts as $post) {
                if (($post['slug'] ?? '') === $slug && $slug !== $oldSlug) {
                    $slug .= '-' . substr(bin2hex(random_bytes(4)), 0, 8);
                    break;
                }
            }

            $timezone = new DateTimeZone('Asia/Kolkata');
            $now = new DateTime('now', $timezone);
            $publishAt = null;
            $publishedAt = $existingPost['published_at'] ?? null;
            if ($status === 'scheduled') {
                $publishAtDate = DateTime::createFromFormat('!Y-m-d\TH:i', $publishAtInput, $timezone);
                $dateErrors = DateTime::getLastErrors();
                if (!$publishAtDate || ($dateErrors !== false && ($dateErrors['warning_count'] > 0 || $dateErrors['error_count'] > 0)) || $publishAtDate->format('Y-m-d\TH:i') !== $publishAtInput) {
                    throw new RuntimeException('Choose a valid date and time for the scheduled article.');
                }
                if ($publishAtDate <= $now) {
                    $status = 'published';
                    $publishAt = null;
                    $publishedAt = $now->format('Y-m-d H:i:s');
                } else {
                    $publishAt = $publishAtDate->format('Y-m-d H:i:s');
                    $publishedAt = $publishAt;
                }
            } elseif ($status === 'published') {
                $publishAt = null;
                // Keep the original date for an article that is already live; going live now (new, draft, or
                // scheduled for later) uses the current time.
                $wasLive = $existingPost !== null && blog_is_live($existingPost) && !empty($existingPost['published_at']);
                $publishedAt = $wasLive ? $existingPost['published_at'] : $now->format('Y-m-d H:i:s');
            } else {
                $publishAt = null;
                $publishedAt = $existingPost['published_at'] ?? $now->format('Y-m-d H:i:s');
            }

            $image = $existingPost['image'] ?? '';
            $imageToRemove = '';
            $newImage = blog_upload_image($_FILES['image'] ?? []);
            if ($newImage !== null) {
                $imageToRemove = $image;
                $image = $newImage;
            } elseif (!empty($_POST['remove_image']) && $image !== '') {
                $imageToRemove = $image;
                $image = '';
            }

            $post = [
                'slug' => $slug,
                'title' => $title,
                'meta_title' => $metaTitle !== '' ? $metaTitle : $title,
                'meta_description' => $metaDescription !== '' ? $metaDescription : blog_excerpt($content, 160),
                'excerpt' => $excerpt !== '' ? $excerpt : blog_excerpt($content, 150),
                'content' => $content,
                'image' => $image,
                'published_at' => $publishedAt,
                'updated_at' => $now->format(DateTime::ATOM),
                'status' => $status,
                'publish_at' => $publishAt,
            ];
            if ($existingIndex === null) {
                array_unshift($posts, $post);
                $notice = $status === 'scheduled' ? 'Article scheduled successfully.' : ($status === 'draft' ? 'Draft saved successfully.' : 'Article published successfully.');
            } else {
                $posts[$existingIndex] = $post;
                $notice = 'Article updated successfully.';
            }
            if (!blog_save_posts($posts)) {
                throw new RuntimeException('The article could not be saved. Please check storage permissions.');
            }
            // Saving upserts by slug, so a changed slug would leave the old row behind as a duplicate article.
            if ($existingPost !== null && $slug !== $oldSlug) {
                blog_delete_post($oldSlug);
            }
            // Delete the replaced cover and any inline images removed from the content, unless another article uses them.
            $removedInlineImages = array_diff(blog_content_uploaded_images($existingPost['content'] ?? ''), blog_content_uploaded_images($content));
            blog_remove_unused_images(array_merge([$imageToRemove], $removedInlineImages));
            $_SESSION['blog_admin_notice'] = $notice;
            header('Location: ' . blog_url('admin'));
            exit;
        } elseif (blog_is_admin() && $action === 'change_status') {
            $slug = trim((string) ($_POST['slug'] ?? ''));
            $status = (string) ($_POST['status'] ?? '');
            if (!in_array($status, ['draft', 'published', 'scheduled'], true)) {
                throw new RuntimeException('Choose a valid publishing status.');
            }
            $timezone = new DateTimeZone('Asia/Kolkata');
            $now = new DateTime('now', $timezone);
            $publishAt = null;
            if ($status === 'scheduled') {
                $input = trim((string) ($_POST['publish_at'] ?? ''));
                $date = DateTime::createFromFormat('!Y-m-d\TH:i', $input, $timezone);
                $dateErrors = DateTime::getLastErrors();
                if (!$date || ($dateErrors !== false && ($dateErrors['warning_count'] || $dateErrors['error_count'])) || $date->format('Y-m-d\TH:i') !== $input) {
                    throw new RuntimeException('Choose a valid schedule date and time (IST).');
                }
                if ($date <= $now) {
                    $status = 'published';
                } else {
                    $publishAt = $date->format('Y-m-d H:i:s');
                }
            }
            if (!blog_change_post_status($slug, $status, $publishAt)) {
                throw new RuntimeException('The status could not be updated. Please try again.');
            }
            $_SESSION['blog_admin_notice'] = 'Article status updated to ' . $status . '.';
            header('Location: ' . blog_url('admin') . '?view=list');
            exit;
        } elseif (blog_is_admin() && $action === 'delete') {
            $slug = trim((string) ($_POST['slug'] ?? ''));
            $posts = blog_load_posts();
            $post = blog_find_post($posts, $slug);
            if ($post === null) {
                throw new RuntimeException('The article could not be found.');
            }
            if (!blog_delete_post($slug)) {
                throw new RuntimeException('The article could not be deleted. Please try again.');
            }
            // Delete the cover and inline images of the article, unless another article still uses them.
            blog_remove_unused_images(array_merge([(string) ($post['image'] ?? '')], blog_content_uploaded_images($post['content'] ?? '')));
            $_SESSION['blog_admin_notice'] = 'Article deleted.';
            header('Location: ' . blog_url('admin') . '?view=list');
            exit;
        }
    }
} catch (RuntimeException $exception) {
    $error = $exception->getMessage();
} catch (JsonException $exception) {
    $error = 'The article could not be saved because its content contains invalid text.';
}

$posts = [];
$editingPost = null;
if (blog_is_admin()) {
    try {
        $posts = blog_load_posts();
        $editSlug = trim((string) ($_GET['edit'] ?? ''));
        if ($editSlug !== '') {
            $editingPost = blog_find_post($posts, $editSlug);
            if ($editingPost === null) {
                $error = 'The article you requested could not be found.';
            }
        }
    } catch (RuntimeException $exception) {
        $error = $exception->getMessage();
    }
}
// Values shown in the article form. After a failed save, refill it with what was submitted so nothing typed is lost.
$formPost = $editingPost;
if ($error !== '' && blog_is_admin() && $_SERVER['REQUEST_METHOD'] === 'POST' && (string) ($_POST['action'] ?? '') === 'save') {
    $postedOldSlug = trim((string) ($_POST['old_slug'] ?? ''));
    $editingPost = $postedOldSlug !== '' ? blog_find_post($posts, $postedOldSlug) : null;
    $formPost = array_merge($editingPost ?? [], [
        'title' => trim((string) ($_POST['title'] ?? '')),
        'meta_title' => trim((string) ($_POST['meta_title'] ?? '')),
        'meta_description' => trim((string) ($_POST['meta_description'] ?? '')),
        'slug' => trim((string) ($_POST['slug'] ?? '')),
        'content' => blog_sanitize_html((string) ($_POST['content_html'] ?? '')),
        'status' => (string) ($_POST['status'] ?? 'published'),
        'publish_at' => str_replace('T', ' ', trim((string) ($_POST['publish_at'] ?? ''))),
    ]);
}
$view = ((string) ($_GET['view'] ?? 'create')) === 'list' ? 'list' : 'create';
$pageTitle = 'Blog Admin | Technofra';?><!doctype html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Blog Admin | Technofra</title>
<style>
*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:#f4f7fb;color:#152238;font:14px/1.5 Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}.crm-admin{min-height:100vh;display:flex}.crm-sidebar{width:238px;flex:none;display:flex;flex-direction:column;padding:28px 18px;background:#0d1b2a;color:#dbe7f3}.crm-brand{display:flex;align-items:center;gap:11px;padding:0 10px 30px}.crm-brand-mark{display:grid;place-items:center;width:38px;height:38px;border-radius:11px;background:#27b5a7;color:#fff;font-weight:800;letter-spacing:-.04em}.crm-brand strong,.crm-brand small{display:block}.crm-brand strong{font-size:15px;color:#fff}.crm-brand small{margin-top:2px;color:#91a8bf;font-size:11px}.crm-nav{display:grid;gap:7px}.crm-nav a,.crm-sidebar-bottom a{display:block;border-radius:9px;color:#aebfd0;text-decoration:none;padding:11px 12px}.crm-nav a:hover,.crm-nav a.is-active{background:#19334b;color:#fff}.crm-sidebar-bottom{margin-top:auto}.crm-sidebar-bottom form{margin-top:8px}.crm-sidebar-bottom button{width:100%;border:1px solid #38536d;border-radius:9px;background:transparent;color:#aebfd0;padding:10px 12px;text-align:left;cursor:pointer}.crm-sidebar-bottom button:hover{background:#19334b;color:#fff}.crm-main{width:100%;max-width:1400px;margin:0 auto;padding:38px 42px 64px}.crm-topbar{display:flex;justify-content:space-between;align-items:flex-end;gap:24px;margin-bottom:28px}.crm-kicker,.tf-blog-eyebrow{margin:0 0 7px;color:#27a89e;font-size:11px;font-weight:800;letter-spacing:.14em;text-transform:uppercase}.crm-topbar h1{margin:0;font-size:30px;line-height:1.1;letter-spacing:-.04em}.crm-topbar p:not(.crm-kicker){margin:8px 0 0;color:#6b7b8d}.crm-view-link{border:1px solid #cfd9e5;border-radius:9px;background:#fff;color:#166f83;text-decoration:none;padding:10px 15px;white-space:nowrap}.crm-view-link:hover{border-color:#27b5a7;background:#f2fffd}.crm-grid{display:grid;grid-template-columns:minmax(320px,.85fr) minmax(480px,1.35fr);align-items:start;gap:22px}.crm-card,.tf-admin-login{border:1px solid #e0e7ef;border-radius:14px;background:#fff;box-shadow:0 8px 28px rgba(21,34,56,.05);padding:25px}.crm-card-heading{display:flex;justify-content:space-between;align-items:flex-start;gap:15px;margin-bottom:21px}.crm-card h2,.tf-admin-login h2{margin:0;color:#152238;font-size:22px;letter-spacing:-.035em}.crm-card-heading .tf-blog-eyebrow{margin-bottom:5px}.crm-cancel{color:#167e8c;text-decoration:none;font-size:13px}.tf-admin-form{display:grid;gap:15px}.tf-admin-form label{display:grid;gap:7px;color:#30445c;font-size:13px;font-weight:650}.tf-admin-form label span{color:#7e8ea0;font-weight:400}.tf-admin-form input,.tf-admin-form select,.tf-admin-form textarea{width:100%;border:1px solid #d5dfe9;border-radius:8px;background:#fff;color:#152238;padding:11px 12px;font:inherit;outline:none}.tf-admin-form input:focus,.tf-admin-form select:focus,.tf-admin-form textarea:focus{border-color:#27b5a7;box-shadow:0 0 0 3px rgba(39,181,167,.14)}.tf-admin-form input[type=file]{padding:8px}#blog-publish-at-field[hidden]{display:none!important}.crm-submit{border:0;border-radius:8px;background:#0e8792;color:#fff;padding:12px 17px;font-weight:750;cursor:pointer}.crm-submit:hover{background:#08707b}.crm-alert{margin:0 0 20px;border-radius:9px;padding:12px 15px}.crm-alert-success{border:1px solid #a7dfcc;background:#effcf7;color:#14735e}.crm-alert-error,.tf-admin-alert-error{border:1px solid #f0baba;background:#fff5f5;color:#ae3434}.crm-list{display:grid;gap:0}.crm-list-item{display:grid;grid-template-columns:76px minmax(0,1fr) auto;gap:14px;align-items:center;border-top:1px solid #e7edf3;padding:16px 0}.crm-list-item:first-child{border-top:0;padding-top:0}.crm-list-thumb{width:76px;height:58px;border-radius:8px;object-fit:cover;background:#e9eef4}.crm-list-item h3{margin:0 0 4px;font-size:14px;line-height:1.3}.crm-list-meta{margin:0;color:#718196;font-size:12px}.crm-list-actions{display:flex;gap:10px;align-items:center}.crm-list-actions a{color:#127b8c;text-decoration:none;font-size:12px;font-weight:700}.crm-list-actions button{border:0;background:transparent;color:#c34b4b;padding:0;font:inherit;font-size:12px;cursor:pointer}.tf-admin-login{max-width:540px}.tf-admin-login-intro{margin-bottom:20px}.tf-admin-login-intro p{margin:7px 0 0;color:#718196}.tf-admin-login-icon{display:grid;place-items:center;width:40px;height:40px;margin-bottom:15px;border-radius:11px;background:#e4faf6;color:#0e8792;font-weight:800}.tf-admin-alert{margin-bottom:18px;border-radius:8px;padding:12px}.tf-admin-alert code{font-size:12px}.crm-empty{border:1px dashed #cbd7e3;border-radius:9px;padding:24px;color:#718196;text-align:center}.crm-status{display:inline-block;border-radius:999px;background:#e8f8f4;color:#167b68;padding:3px 8px;font-size:11px;font-weight:700}.crm-status.is-scheduled{background:#fff6df;color:#9a6b12}.crm-status.is-draft{background:#eef1f5;color:#657487}@media (max-width:900px){.crm-sidebar{width:200px}.crm-main{padding:28px 22px}.crm-grid{grid-template-columns:1fr}}@media (max-width:650px){.crm-admin{display:block}.crm-sidebar{width:100%;padding:18px;display:block}.crm-brand{padding:0 0 16px}.crm-nav{display:flex;overflow:auto}.crm-sidebar-bottom{display:flex;gap:8px;margin-top:15px}.crm-sidebar-bottom form{margin:0}.crm-sidebar-bottom a,.crm-sidebar-bottom button{white-space:nowrap}.crm-main{padding:22px 14px 40px}.crm-topbar{display:block}.crm-view-link{display:inline-block;margin-top:18px}.crm-list-item{grid-template-columns:56px minmax(0,1fr)}.crm-list-thumb{width:56px;height:48px}.crm-list-actions{grid-column:2}.crm-card,.tf-admin-login{padding:18px}}
.blog-editor-wrap{border:1px solid #d9e1eb;border-radius:8px;overflow:hidden;background:#fff}.blog-editor-wrap .ql-toolbar{border:0;border-bottom:1px solid #e5eaf1}.blog-editor-wrap .ql-container{border:0;font:inherit;font-size:13px}.blog-editor-wrap .ql-editor{min-height:380px;line-height:1.6}.blog-editor-error{margin:-7px 0 0;color:#b91c1c;font-size:12px}.crm-row{display:flex;justify-content:space-between;gap:18px;align-items:center;border-top:1px solid #e7edf3;padding:16px 0}.crm-row:first-child{border-top:0;padding-top:0}.crm-row-main{min-width:0;display:flex;align-items:center;gap:14px}.crm-row-main>img{display:block;flex:0 0 76px;width:76px;height:58px;max-width:76px;object-fit:cover;border-radius:8px;background:#e9eef4}.crm-row-main>div{min-width:0}.crm-row-main h3{margin:0 0 4px;font-size:14px;line-height:1.3;overflow-wrap:anywhere}.crm-row-main p{margin:3px 0;color:#718196;font-size:12px}.crm-actions{display:flex;flex:0 0 auto;align-items:center;gap:11px}.crm-actions a{color:#127b8c;text-decoration:none;font-size:12px;font-weight:700}.crm-actions form{margin:0}.crm-actions button{border:0;background:transparent;color:#c34b4b;padding:0;font:inherit;font-size:12px;cursor:pointer}.tf-admin-count{display:inline-grid;place-items:center;min-width:24px;height:24px;margin-left:4px;border-radius:999px;background:#e4faf6;color:#0e8792;font-size:12px;vertical-align:middle}.blog-editor-wrap{min-height:430px}.blog-editor-wrap #blog-editor{min-height:380px}@media (max-width:650px){.crm-row{display:block}.crm-actions{margin:12px 0 0 90px}.crm-row-main>img{flex-basis:64px;width:64px;height:52px;max-width:64px}}.crm-grid-create-only,.crm-grid-list-only{grid-template-columns:minmax(0,900px)}.crm-grid-create-only .crm-card,.crm-grid-list-only .crm-card{width:100%}.content-builder{border:1px solid #d9e1eb;border-radius:8px;background:#f8fafc;padding:12px}.content-builder-toolbar{display:flex;flex-wrap:wrap;gap:8px;padding-bottom:12px;border-bottom:1px solid #e5eaf1}.content-builder-add{border:1px solid #b9dfe0;border-radius:7px;background:#fff;color:#087b84;padding:8px 12px;font:inherit;font-size:12px;font-weight:700;cursor:pointer}.content-builder-add:hover{background:#e8fbf9}.content-builder-blocks{display:grid;gap:10px;margin-top:12px}.content-builder-block{border:1px solid #d9e1eb;border-radius:8px;background:#fff;padding:12px}.content-builder-block-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;color:#30445c;font-size:12px}.content-builder-remove{border:0;background:transparent;color:#c34b4b;font:inherit;font-size:12px;cursor:pointer}.content-builder-heading-level{width:auto!important;min-width:140px;margin-bottom:8px;padding:7px 10px;border:1px solid #d5dfe9;border-radius:7px;background:#fff;color:#152238;font:inherit;font-size:13px;font-weight:600}.content-builder-title,.content-builder-description,.content-builder-image-file{width:100%;border:1px solid #d5dfe9;border-radius:7px;background:#fff;color:#152238;padding:10px 11px;font:inherit;outline:none}.content-builder-title:focus,.content-builder-description:focus,.content-builder-image-file:focus{border-color:#27b5a7;box-shadow:0 0 0 3px rgba(39,181,167,.14)}.content-builder-description{resize:vertical}.content-builder-image-preview{margin-top:10px}.content-builder-image-preview img{display:block;max-width:220px;max-height:140px;border-radius:7px;object-fit:cover}.content-builder-empty{margin:12px 0 2px;color:#718196;font-size:12px}.content-builder-empty[hidden]{display:none}.content-builder-image-url{display:none}.content-format-toolbar{display:flex;flex-wrap:wrap;align-items:center;gap:3px;margin-bottom:7px;padding:4px;border:1px solid #e5eaf1;border-radius:6px;background:#f8fafc}.content-format-toolbar button,.content-format-toolbar label{display:inline-grid;place-items:center;min-width:27px;height:27px;border:0;border-radius:4px;background:transparent;color:#334155;font:inherit;font-size:13px;cursor:pointer}.content-format-toolbar button:hover,.content-format-toolbar label:hover{background:#e2e8f0}.content-format-toolbar input{position:absolute;width:1px;height:1px;opacity:0}.content-builder-description{min-height:120px;padding:10px 11px;line-height:1.55;overflow:auto}.content-builder-description:empty:before{content:attr(data-placeholder);color:#94a3b8}.content-builder-description ul,.content-builder-description ol{margin:6px 0 6px 22px}.crm-grid-create-only{grid-template-columns:minmax(0,1fr)}.crm-grid-create-only .crm-card{width:100%;max-width:none}.content-builder-toolbar{position:sticky;top:12px;z-index:20;background:#f8fafc;padding:8px 0 12px;box-shadow:0 6px 12px rgba(15,35,55,.06)}.content-builder-toolbar .content-format-toolbar{margin:0}.crm-grid-list-only{grid-template-columns:minmax(0,1fr)}.crm-grid-list-only .crm-card{width:100%;max-width:none}.crm-main{flex:1;min-width:0;width:auto}.tf-admin-current-image{display:flex;align-items:center;gap:14px;flex-wrap:wrap}.tf-admin-current-image img{display:block;width:min(320px,100%);height:200px;max-width:100%;object-fit:cover;border-radius:8px}.tf-admin-current-image label{display:flex;align-items:center;gap:7px}.content-table-tools{display:flex;flex-wrap:wrap;align-items:center;gap:6px;margin-bottom:8px}.content-table-tools button{border:1px solid #d5dfe9;border-radius:6px;background:#fff;color:#30445c;padding:5px 10px;font:inherit;font-size:12px;cursor:pointer}.content-table-tools button:hover{background:#eef3f8}.content-table-tools label{display:flex!important;align-items:center;gap:6px;margin:0 0 0 6px!important;font-size:12px;font-weight:600;color:#30445c}.content-table-tools input{width:auto!important;margin:0}.content-table-wrap{overflow-x:auto}.content-table-wrap table{width:100%;border-collapse:collapse;font-size:13px}.content-table-wrap td,.content-table-wrap th{min-width:90px;border:1px solid #d5dfe9;padding:8px 10px;vertical-align:top;text-align:left;outline:none}.content-table-wrap th{background:#f1f5f9;font-weight:700}.content-table-wrap td:focus,.content-table-wrap th:focus{box-shadow:inset 0 0 0 2px #27b5a7}.content-builder-description table{border-collapse:collapse}.content-builder-description td,.content-builder-description th{border:1px solid #d5dfe9;padding:6px}</style>
</head><body>
<main class="crm-admin">
    <aside class="crm-sidebar" aria-label="Blog administration">
        <div class="crm-brand"><div><img src="<?php echo blog_escape(blog_base_path() . '/assets/images/new/logo.png'); ?>" alt="Technofra" width="180" style="display:block;width:100%;max-width:180px;height:auto"><small>Blog CRM</small></div></div>
        <nav class="crm-nav"><a class="<?php echo $view === 'create' ? 'is-active' : ''; ?>" href="<?php echo blog_escape(blog_url('admin') . '?view=create'); ?>">+ Create blogs</a><a class="<?php echo $view === 'list' ? 'is-active' : ''; ?>" href="<?php echo blog_escape(blog_url('admin') . '?view=list'); ?>">List blogs</a></nav>
        <div class="crm-sidebar-bottom"><a href="<?php echo blog_escape(blog_url()); ?>" target="_blank" rel="noopener">View public blog</a><?php if (blog_is_admin()): ?><form method="post" action="<?php echo blog_escape(blog_url('admin')); ?>"><input type="hidden" name="csrf_token" value="<?php echo blog_escape(blog_csrf_token()); ?>"><input type="hidden" name="action" value="logout"><button type="submit">Sign out</button></form><?php endif; ?></div>
    </aside>
    <section class="crm-main">
        <header class="crm-topbar"><div><p class="crm-kicker">Content workspace</p><h1>Blog management</h1><p>Create, schedule and manage your website articles.</p></div><a class="crm-view-link" href="<?php echo blog_escape(blog_url()); ?>" target="_blank" rel="noopener">View public blog</a></header>

        <?php if ($error !== ''): ?><div class="crm-alert crm-alert-error" role="alert"><?php echo blog_escape($error); ?></div><?php endif; ?>
        <?php if ($notice !== ''): ?><div class="crm-alert crm-alert-success" role="status"><?php echo blog_escape($notice); ?></div><?php endif; ?>

        <?php if (!blog_is_admin()): ?>
            <section class="tf-admin-login">
                <div class="tf-admin-login-intro">
                    <span class="tf-admin-login-icon" aria-hidden="true">T</span>
                    <h2>Sign in to manage your articles</h2>
                    <p>Publish, edit, or remove posts that appear on the Technofra blog.</p>
                </div>
                <?php if (!$configured): ?>
                    <div class="tf-admin-alert tf-admin-alert-error">
                        Admin access is not configured yet. Set <code>TECHNOFRA_BLOG_ADMIN_PASSWORD_HASH</code> to a PHP password hash, or add a private <code>blog-config.local.php</code> file as described in <a href="BLOG_SETUP.md">BLOG_SETUP.md</a>.
                    </div>
                <?php else: ?>
                    <form class="tf-admin-form" method="post" action="<?php echo blog_escape(blog_url('admin')); ?>">
                        <input type="hidden" name="csrf_token" value="<?php echo blog_escape(blog_csrf_token()); ?>">
                        <input type="hidden" name="action" value="login">
                        <label>Username<input name="username" type="text" autocomplete="username" required></label>
                        <label>Password<input name="password" type="password" autocomplete="current-password" required></label>
                        <button class="crm-submit" type="submit">Sign in</button>
                    </form>
                <?php endif; ?>
            </section>
        <?php else: ?>
            <div class="crm-grid <?php echo $view === 'list' ? 'crm-grid-list-only' : 'crm-grid-create-only'; ?>">
                <?php if ($view !== 'list'): ?>
                <section class="crm-card" id="create-blog">
                    <div class="crm-card-heading">
                        <div>
                            <p class="tf-blog-eyebrow"><?php echo $editingPost ? 'Update your article' : 'Create something useful'; ?></p>
                            <h2><?php echo $editingPost ? 'Edit article' : 'New article'; ?></h2>
                        </div>
                        <?php if ($editingPost): ?>
                            <a class="crm-cancel" href="<?php echo blog_escape(blog_url('admin')); ?>">Cancel edit</a>
                        <?php endif; ?>
                    </div>
                    <form class="tf-admin-form" method="post" action="<?php echo blog_escape(blog_url('admin')); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="csrf_token" value="<?php echo blog_escape(blog_csrf_token()); ?>">
                        <input type="hidden" name="action" value="save">
                        <input type="hidden" name="old_slug" value="<?php echo blog_escape($editingPost['slug'] ?? ''); ?>">
                        <label>Article title<input name="title" type="text" maxlength="180" required value="<?php echo blog_escape($formPost['title'] ?? ''); ?>"></label>
                        <label>Meta title <span>(SEO title)</span><input name="meta_title" type="text" maxlength="180" value="<?php echo blog_escape($formPost['meta_title'] ?? ($formPost['title'] ?? '')); ?>"></label>
                        <label>Meta description <span>(SEO description)</span><textarea name="meta_description" rows="3" maxlength="320"><?php echo blog_escape($formPost['meta_description'] ?? ''); ?></textarea></label>
                        <label>URL slug <span>(letters, numbers, and hyphens)</span><input name="slug" type="text" maxlength="220" value="<?php echo blog_escape($formPost['slug'] ?? ''); ?>"></label>
                        <label>Article content</label>
                        <div class="content-builder" id="content-builder">
                            <div class="content-builder-toolbar" role="toolbar" aria-label="Add article content block">
                                <button type="button" class="content-builder-add" data-block="title">+ Title</button>
                                <button type="button" class="content-builder-add" data-block="description">+ Description</button>
                                <button type="button" class="content-builder-add" data-block="image">+ Image</button>
                                <button type="button" class="content-builder-add" data-block="table">+ Table</button><div class="content-format-toolbar content-format-toolbar-main" role="toolbar" aria-label="Description formatting"><button type="button" data-command="bold" title="Bold"><strong>B</strong></button><button type="button" data-command="italic" title="Italic"><em>I</em></button><button type="button" data-command="underline" title="Underline"><u>U</u></button><label title="Text color">A<input type="color" data-command="foreColor" value="#1f2937"></label><button type="button" data-command="createLink" title="Add link">↗</button><button type="button" data-command="justifyLeft" title="Align left">≡</button><button type="button" data-command="justifyCenter" title="Align center">≡</button><button type="button" data-command="insertUnorderedList" title="Bulleted list">•</button><button type="button" data-command="insertOrderedList" title="Numbered list">1.</button><button type="button" data-command="outdent" title="Decrease indent">⇤</button><button type="button" data-command="indent" title="Increase indent">⇥</button></div>
                            </div>
                            <div class="content-builder-blocks" id="content-blocks"></div>
                            <p class="content-builder-empty" id="content-builder-empty">Add title, description, image, or table blocks. They will appear in the order you add them.</p>
                        </div>
                        <input type="hidden" name="content_html" id="content-html">
                        <p id="content-error" class="blog-editor-error" role="alert" hidden>Add at least one title, description, or image block.</p>
                        <label>Publishing status
                            <select name="status" id="blog-status" required>
                                <?php $editingStatus = (string) ($formPost['status'] ?? 'published'); ?>
                                <option value="draft"<?php echo $editingStatus === 'draft' ? ' selected' : ''; ?>>Draft</option>
                                <option value="published"<?php echo $editingStatus === 'published' ? ' selected' : ''; ?>>Publish Now</option>
                                <option value="scheduled"<?php echo $editingStatus === 'scheduled' ? ' selected' : ''; ?>>Schedule</option>
                            </select>
                        </label>
                        <label id="blog-publish-at-field"<?php echo $editingStatus === 'scheduled' ? '' : ' hidden'; ?>>Schedule date and time
                            <input name="publish_at" type="datetime-local" value="<?php echo !empty($formPost['publish_at']) ? blog_escape(str_replace(' ', 'T', substr($formPost['publish_at'], 0, 16))) : ''; ?>">
                        </label>
                        <label>Cover image <span>(JPG, PNG, WebP; up to 5 MB)</span><input name="image" type="file" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"></label>
                        <?php if (!empty($editingPost['image'])): ?>
                            <div class="tf-admin-current-image">
                                <img src="<?php echo blog_escape(blog_image_url($editingPost['image'])); ?>" alt="Current cover">
                                <label class="tf-admin-checkbox"><input type="checkbox" name="remove_image" value="1"> Remove current image</label>
                            </div>
                        <?php endif; ?>
                        <button class="crm-submit" type="submit"><?php echo $editingPost ? 'Save changes' : 'Publish article'; ?></button>
                    </form>
                    <script>
                        (function () {
                            var form = document.querySelector('#create-blog form.tf-admin-form');
                            var status = document.getElementById('blog-status');
                            var scheduleField = document.getElementById('blog-publish-at-field');
                            var blocks = document.getElementById('content-blocks');
                            var empty = document.getElementById('content-builder-empty');
                            var hidden = document.getElementById('content-html');
                            var error = document.getElementById('content-error');
                            var activeEditor = null;
                            var initial = <?php echo json_encode(blog_render_content($formPost['content'] ?? ''), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
                            if (!form || !blocks || !hidden) return;

                            function escapeHtml(value) {
                                return String(value).replace(/[&<>"']/g, function (character) {
                                    return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[character];
                                });
                            }

                            function updateEmpty() {
                                empty.hidden = blocks.children.length > 0;
                            }

                            function removeBlock(block) {
                                block.remove();
                                updateEmpty();
                            }

                            function hasVisibleContent(element) {
                                return !!(element.textContent.trim() || (element.querySelector && element.querySelector('img,table,hr')) || /^(IMG|HR|TABLE)$/.test(element.tagName));
                            }

                            function unwrapElement(element) {
                                while (element.firstChild) element.parentNode.insertBefore(element.firstChild, element);
                                element.remove();
                            }

                            // Turns pasted Google Docs / Word / web HTML into the plain semantic HTML the builder stores.
                            function cleanPastedHtml(html) {
                                var doc = new DOMParser().parseFromString(html, 'text/html');
                                var body = doc.body;
                                Array.prototype.forEach.call(body.querySelectorAll('style,script,meta,link,title,colgroup,col,svg,iframe,object,embed'), function (node) { node.remove(); });
                                var all = Array.prototype.slice.call(body.getElementsByTagName('*')).reverse();
                                all.forEach(function (element) {
                                    if (!element.parentNode) return;
                                    var tag = element.tagName;
                                    var style = element.getAttribute('style') || '';
                                    var inHeading = !!(element.parentNode.closest && element.parentNode.closest('h1,h2,h3,h4,h5,h6,th'));
                                    if (tag.indexOf('-') !== -1) { unwrapElement(element); return; } // e.g. <google-sheets-html-origin> wrapper
                                    if (tag === 'B' && (/^docs-internal-guid/.test(element.id || '') || /font-weight\s*:\s*(normal|[1-4]00)\b/i.test(style))) { unwrapElement(element); return; }
                                    if (tag === 'SPAN' || tag === 'FONT') {
                                        var weight = (style.match(/font-weight\s*:\s*([a-z0-9]+)/i) || [])[1] || '';
                                        var wrapperTags = [];
                                        if (!inHeading && (weight === 'bold' || weight === 'bolder' || parseInt(weight, 10) >= 600)) wrapperTags.push('strong');
                                        if (/font-style\s*:\s*italic/i.test(style)) wrapperTags.push('em');
                                        if (/text-decoration[^;]*underline/i.test(style) && !element.closest('a')) wrapperTags.push('u');
                                        if (wrapperTags.length && element.textContent.trim()) {
                                            var outer = null, inner = null;
                                            wrapperTags.forEach(function (name) { var node = doc.createElement(name); if (inner) inner.appendChild(node); else outer = node; inner = node; });
                                            while (element.firstChild) inner.appendChild(element.firstChild);
                                            element.parentNode.replaceChild(outer, element);
                                        } else {
                                            unwrapElement(element);
                                        }
                                        return;
                                    }
                                    if (tag === 'B' || tag === 'I') {
                                        var semantic = doc.createElement(tag === 'B' ? 'strong' : 'em');
                                        while (element.firstChild) semantic.appendChild(element.firstChild);
                                        element.parentNode.replaceChild(semantic, element);
                                        element = semantic;
                                        tag = semantic.tagName;
                                    }
                                    if (tag === 'STRONG' && inHeading) { unwrapElement(element); return; }
                                    if (tag === 'DIV' || tag === 'SECTION' || tag === 'ARTICLE') {
                                        if (element.querySelector('p,h1,h2,h3,h4,h5,h6,ul,ol,table,blockquote,div')) { unwrapElement(element); return; }
                                        var paragraph = doc.createElement('p');
                                        while (element.firstChild) paragraph.appendChild(element.firstChild);
                                        element.parentNode.replaceChild(paragraph, element);
                                        element = paragraph;
                                        tag = 'P';
                                    }
                                    // Paragraphs inside list items and table cells become line breaks.
                                    if (tag === 'P' && element.parentNode.closest && element.parentNode.closest('li,td,th')) {
                                        if (element.nextElementSibling && element.nextElementSibling.tagName === 'P') element.appendChild(doc.createElement('br'));
                                        unwrapElement(element);
                                        return;
                                    }
                                    var keep = {A: ['href'], IMG: ['src', 'alt'], TD: ['colspan', 'rowspan'], TH: ['colspan', 'rowspan']}[tag] || [];
                                    Array.prototype.slice.call(element.attributes).forEach(function (attribute) {
                                        if (keep.indexOf(attribute.name) === -1) element.removeAttribute(attribute.name);
                                    });
                                    if (tag === 'TD' || tag === 'TH') {
                                        ['colspan', 'rowspan'].forEach(function (name) { if (element.getAttribute(name) === '1') element.removeAttribute(name); });
                                    }
                                    if (tag === 'A') {
                                        var href = element.getAttribute('href') || '';
                                        var redirect = href.match(/^https?:\/\/(?:www\.)?google\.com\/url\?(?:.*&)?q=([^&]+)/i);
                                        if (redirect) { try { element.setAttribute('href', decodeURIComponent(redirect[1])); } catch (e) {} }
                                        if (!element.getAttribute('href')) unwrapElement(element);
                                    }
                                });
                                // Google Docs tables have no header cells: treat a fully bold first row as the header.
                                Array.prototype.forEach.call(body.querySelectorAll('table'), function (table) {
                                    if (table.querySelector('th') || !table.rows.length) return;
                                    var first = Array.prototype.slice.call(table.rows[0].cells);
                                    var allBold = first.length > 0 && first.every(function (cell) {
                                        var text = cell.textContent.trim();
                                        var bold = Array.prototype.map.call(cell.querySelectorAll('strong'), function (node) { return node.textContent; }).join('').trim();
                                        return text !== '' && bold.replace(/\s+/g, '') === text.replace(/\s+/g, '');
                                    });
                                    if (!allBold) return;
                                    first.forEach(function (cell) {
                                        var header = doc.createElement('th');
                                        Array.prototype.forEach.call(cell.attributes, function (attribute) { header.setAttribute(attribute.name, attribute.value); });
                                        header.innerHTML = cell.innerHTML;
                                        Array.prototype.forEach.call(header.querySelectorAll('strong'), unwrapElement);
                                        cell.parentNode.replaceChild(header, cell);
                                    });
                                });
                                Array.prototype.forEach.call(body.querySelectorAll('p,h1,h2,h3,h4,h5,h6,li,ul,ol,blockquote'), function (element) {
                                    if (element.parentNode && !hasVisibleContent(element)) element.remove();
                                });
                                return body.innerHTML.replace(/&nbsp;/g, ' ').trim();
                            }

                            // Splits stored or pasted HTML into builder blocks: headings -> Title, tables -> Table,
                            // standalone images -> Image, everything else -> Description. Empty elements are dropped.
                            function htmlToBlocks(html) {
                                var specs = [];
                                if (!html) return specs;
                                var parsed = new DOMParser().parseFromString(html, 'text/html');
                                var descriptionBuffer = [];
                                function flushDescription() {
                                    var combinedHtml = descriptionBuffer.join('').trim();
                                    if (combinedHtml) specs.push({type: 'description', value: combinedHtml});
                                    descriptionBuffer = [];
                                }
                                Array.prototype.forEach.call(parsed.body.childNodes, function (element) {
                                    if (element.nodeType === 3) {
                                        if (element.textContent.trim()) descriptionBuffer.push('<p>' + escapeHtml(element.textContent.trim()) + '</p>');
                                        return;
                                    }
                                    if (element.nodeType !== 1) return;
                                    var imageSrc = null;
                                    if (element.tagName === 'IMG') {
                                        imageSrc = element.getAttribute('src') || '';
                                    } else if ((element.tagName === 'P' || element.tagName === 'DIV') && !element.textContent.trim()) {
                                        var imgs = element.querySelectorAll('img');
                                        if (imgs.length === 1 && element.children.length === 1) imageSrc = imgs[0].getAttribute('src') || '';
                                    }
                                    if (imageSrc !== null) {
                                        flushDescription();
                                        specs.push({type: 'image', value: imageSrc});
                                        return;
                                    }
                                    var table = element.tagName === 'TABLE' ? element : null;
                                    if (!table && element.children.length === 1 && element.children[0].tagName === 'TABLE' && element.textContent.trim() === element.children[0].textContent.trim()) table = element.children[0];
                                    if (table) {
                                        flushDescription();
                                        specs.push({type: 'table', value: table.outerHTML});
                                        return;
                                    }
                                    if (!hasVisibleContent(element)) return;
                                    if (/^H[1-6]$/.test(element.tagName) || (element.tagName === 'P' && element.classList.contains('ql-title'))) {
                                        flushDescription();
                                        specs.push({type: 'title', value: element.textContent.trim(), heading: element.tagName === 'P' ? 'p' : element.tagName.toLowerCase()});
                                        return;
                                    }
                                    descriptionBuffer.push(element.outerHTML);
                                });
                                flushDescription();
                                return specs;
                            }

                            function handleDescriptionPaste(event, editor) {
                                var clipboard = event.clipboardData;
                                var html = clipboard ? clipboard.getData('text/html') : '';
                                if (!html) {
                                    // Tab-separated text (copied spreadsheet cells without HTML) becomes a Table block.
                                    var grid = clipboardToGrid(clipboard);
                                    if (!grid || (grid.length === 1 && grid[0].length === 1)) return;
                                    event.preventDefault();
                                    var owner = editor.closest('.content-builder-block');
                                    addBlock('table', gridToTableHtml(grid), null, owner.nextSibling, true);
                                    if (!hasVisibleContent(editor)) owner.remove();
                                    updateEmpty();
                                    return;
                                }
                                event.preventDefault();
                                var cleaned = cleanPastedHtml(html);
                                if (!cleaned) return;
                                var probe = new DOMParser().parseFromString(cleaned, 'text/html').body;
                                var hasBlockContent = Array.prototype.some.call(probe.children, function (element) { return /^(P|H[1-6]|UL|OL|TABLE|BLOCKQUOTE|HR|IMG)$/.test(element.tagName); });
                                var specs = hasBlockContent ? htmlToBlocks(cleaned) : [];
                                if (!hasBlockContent || (specs.length === 1 && specs[0].type === 'description')) {
                                    document.execCommand('insertHTML', false, hasBlockContent ? specs[0].value : cleaned);
                                    return;
                                }
                                // Multi-part paste (headings, tables, images): add proper blocks after this one.
                                var current = editor.closest('.content-builder-block');
                                var before = current.nextSibling;
                                specs.forEach(function (spec) { addBlock(spec.type, spec.value, spec.heading, before, true); });
                                if (!hasVisibleContent(editor)) current.remove();
                                updateEmpty();
                            }

                            // Reads copied table cells from the clipboard: an HTML table (Excel, Google Sheets/Docs, Word, web)
                            // or tab-separated text. Returns rows of cell HTML, or null when the clipboard holds no table.
                            function clipboardToGrid(clipboard) {
                                if (!clipboard) return null;
                                var html = clipboard.getData('text/html');
                                if (html && /<table\b/i.test(html)) {
                                    var table = new DOMParser().parseFromString(cleanPastedHtml(html), 'text/html').querySelector('table');
                                    if (table && table.rows.length) {
                                        return Array.prototype.map.call(table.rows, function (row) {
                                            return Array.prototype.map.call(row.cells, function (cell) { return cell.innerHTML.trim(); });
                                        });
                                    }
                                }
                                var text = clipboard.getData('text/plain');
                                if (!text || text.indexOf('\t') === -1) return null;
                                var lines = text.replace(/\r\n?/g, '\n').replace(/\n+$/, '').split('\n');
                                return lines.map(function (line) {
                                    return line.split('\t').map(function (value) { return escapeHtml(value.trim()); });
                                });
                            }

                            function gridToTableHtml(grid) {
                                return '<table><tbody>' + grid.map(function (values) {
                                    return '<tr>' + values.map(function (value) { return '<td>' + value + '</td>'; }).join('') + '</tr>';
                                }).join('') + '</tbody></table>';
                            }

                            function buildEditableTable(sourceHtml) {
                                var source = sourceHtml ? new DOMParser().parseFromString(sourceHtml, 'text/html').querySelector('table') : null;
                                var table = document.createElement('table');
                                var body = document.createElement('tbody');
                                table.appendChild(body);
                                var rows = source ? Array.prototype.slice.call(source.rows) : [null, null, null];
                                rows.forEach(function (sourceRow, rowIndex) {
                                    var row = document.createElement('tr');
                                    var cells = sourceRow ? Array.prototype.slice.call(sourceRow.cells) : [null, null, null];
                                    cells.forEach(function (sourceCell) {
                                        var cell = document.createElement(sourceCell ? sourceCell.tagName.toLowerCase() : (rowIndex === 0 ? 'th' : 'td'));
                                        if (sourceCell) {
                                            ['colspan', 'rowspan'].forEach(function (name) { if (sourceCell.getAttribute(name)) cell.setAttribute(name, sourceCell.getAttribute(name)); });
                                            cell.innerHTML = sourceCell.innerHTML;
                                        }
                                        cell.contentEditable = 'true';
                                        row.appendChild(cell);
                                    });
                                    body.appendChild(row);
                                });
                                return table;
                            }

                            function serializeTable(table) {
                                var hasText = false;
                                var rowsHtml = Array.prototype.map.call(table.rows, function (row) {
                                    return '<tr>' + Array.prototype.map.call(row.cells, function (cell) {
                                        var name = cell.tagName.toLowerCase();
                                        var attributes = '';
                                        ['colspan', 'rowspan'].forEach(function (attribute) {
                                            var span = parseInt(cell.getAttribute(attribute), 10);
                                            if (span > 1) attributes += ' ' + attribute + '="' + span + '"';
                                        });
                                        if (cell.textContent.trim() || cell.querySelector('img')) hasText = true;
                                        var inner = cell.innerHTML.replace(/<div>/gi, '<br>').replace(/<\/div>/gi, '').replace(/^(\s|<br\s*\/?>)+|(\s|<br\s*\/?>)+$/gi, '');
                                        return '<' + name + attributes + '>' + inner + '</' + name + '>';
                                    }).join('') + '</tr>';
                                });
                                if (!hasText) return '';
                                var headerRow = table.rows[0] && Array.prototype.every.call(table.rows[0].cells, function (cell) { return cell.tagName === 'TH'; });
                                if (headerRow) return '<table><thead>' + rowsHtml[0] + '</thead><tbody>' + rowsHtml.slice(1).join('') + '</tbody></table>';
                                return '<table><tbody>' + rowsHtml.join('') + '</tbody></table>';
                            }

                            function setupTableBlock(block, value) {
                                var wrap = block.querySelector('.content-table-wrap');
                                var table = buildEditableTable(value);
                                wrap.appendChild(table);
                                var headerToggle = block.querySelector('.content-table-header');
                                var activeCell = null;
                                function firstRowIsHeader() { return !!table.rows[0] && Array.prototype.every.call(table.rows[0].cells, function (cell) { return cell.tagName === 'TH'; }); }
                                function makeCell(tagName) { var cell = document.createElement(tagName); cell.contentEditable = 'true'; return cell; }
                                function cellIndex() { return activeCell && activeCell.isConnected ? activeCell.cellIndex : -1; }
                                function rowIndex() { return activeCell && activeCell.isConnected ? activeCell.parentNode.rowIndex : -1; }
                                headerToggle.checked = firstRowIsHeader();
                                wrap.addEventListener('focusin', function (event) {
                                    var cell = event.target.closest('td,th');
                                    if (cell) { activeCell = cell; activeEditor = cell; }
                                });
                                wrap.addEventListener('keydown', function (event) {
                                    if (event.key === 'Enter' && event.target.closest('td,th')) { event.preventDefault(); document.execCommand('insertLineBreak'); }
                                });
                                wrap.addEventListener('paste', function (event) {
                                    var text = event.clipboardData ? event.clipboardData.getData('text/plain') : '';
                                    var grid = clipboardToGrid(event.clipboardData);
                                    event.preventDefault();
                                    if (!grid || (grid.length === 1 && grid[0].length === 1)) {
                                        document.execCommand('insertText', false, text);
                                        return;
                                    }
                                    // Copied table cells: fill the grid starting at the cell being pasted into, growing the table as needed.
                                    var startRow = rowIndex() >= 0 ? rowIndex() : 0;
                                    var startColumn = cellIndex() >= 0 ? cellIndex() : 0;
                                    grid.forEach(function (values, r) {
                                        while (table.rows.length <= startRow + r) {
                                            var newRow = table.tBodies[0].insertRow(-1);
                                            var count = table.rows[0] ? table.rows[0].cells.length : 1;
                                            for (var n = 0; n < count; n++) newRow.appendChild(makeCell('td'));
                                        }
                                        values.forEach(function (value, c) {
                                            while (table.rows[startRow + r].cells.length <= startColumn + c) {
                                                Array.prototype.forEach.call(table.rows, function (row, index) {
                                                    row.appendChild(makeCell(index === 0 && firstRowIsHeader() ? 'th' : 'td'));
                                                });
                                            }
                                            table.rows[startRow + r].cells[startColumn + c].innerHTML = value;
                                        });
                                    });
                                });
                                headerToggle.addEventListener('change', function () {
                                    if (!table.rows[0]) return;
                                    Array.prototype.slice.call(table.rows[0].cells).forEach(function (cell) {
                                        var replacement = makeCell(headerToggle.checked ? 'th' : 'td');
                                        ['colspan', 'rowspan'].forEach(function (name) { if (cell.getAttribute(name)) replacement.setAttribute(name, cell.getAttribute(name)); });
                                        replacement.innerHTML = cell.innerHTML;
                                        cell.parentNode.replaceChild(replacement, cell);
                                    });
                                    activeCell = null;
                                });
                                block.querySelector('.content-table-tools').addEventListener('click', function (event) {
                                    var button = event.target.closest('button[data-table]');
                                    if (!button) return;
                                    var action = button.dataset.table;
                                    var columns = Math.max.apply(null, Array.prototype.map.call(table.rows, function (row) { return row.cells.length; }).concat([1]));
                                    if (action === 'add-row') {
                                        var at = rowIndex() >= 0 ? rowIndex() + 1 : table.rows.length;
                                        var row = table.tBodies[0].insertRow(Math.min(at, table.tBodies[0].rows.length));
                                        for (var i = 0; i < columns; i++) row.appendChild(makeCell('td'));
                                        row.cells[0].focus();
                                    } else if (action === 'add-column') {
                                        var column = cellIndex() >= 0 ? cellIndex() + 1 : columns;
                                        Array.prototype.forEach.call(table.rows, function (row, index) {
                                            var cell = makeCell(index === 0 && firstRowIsHeader() ? 'th' : 'td');
                                            row.insertBefore(cell, row.cells[column] || null);
                                        });
                                    } else if (action === 'remove-row') {
                                        if (table.rows.length <= 1) return;
                                        var removeAt = rowIndex() >= 0 ? rowIndex() : table.rows.length - 1;
                                        table.rows[removeAt].remove();
                                        activeCell = null;
                                        headerToggle.checked = firstRowIsHeader();
                                    } else if (action === 'remove-column') {
                                        if (columns <= 1) return;
                                        var removeColumn = cellIndex() >= 0 ? cellIndex() : columns - 1;
                                        Array.prototype.forEach.call(table.rows, function (row) { if (row.cells.length > 1 && row.cells[removeColumn]) row.cells[removeColumn].remove(); });
                                        activeCell = null;
                                    }
                                });
                            }

                            function addBlock(type, value, headingTag, beforeNode, skipFocus) {
                                var block = document.createElement('div');
                                block.className = 'content-builder-block';
                                block.dataset.type = type;
                                var remove = '<button type="button" class="content-builder-remove">Remove</button>';
                                if (type === 'title') {
                                    block.innerHTML = '<div class="content-builder-block-head"><strong>Title</strong>' + remove + '</div><select class="content-builder-heading-level" aria-label="Heading level"><option value="h2">Heading 2 (H2)</option><option value="h1">Heading 1 (H1)</option><option value="h3">Heading 3 (H3)</option><option value="h4">Heading 4 (H4)</option><option value="h5">Heading 5 (H5)</option><option value="h6">Heading 6 (H6)</option><option value="p">Paragraph (P)</option></select><input class="content-builder-title" type="text" maxlength="180" placeholder="Enter section title">';
                                    block.querySelector('.content-builder-heading-level').value = headingTag || 'h2';
                                    block.querySelector('.content-builder-title').value = value || '';
                                } else if (type === 'description') {
                                    block.innerHTML = '<div class="content-builder-block-head"><strong>Description</strong>' + remove + '</div><div class="content-builder-description" contenteditable="true" role="textbox" aria-multiline="true" data-placeholder="Write description text"></div>';
                                    var descriptionEditor = block.querySelector('.content-builder-description');
                                    descriptionEditor.innerHTML = value || '';
                                    descriptionEditor.addEventListener('paste', function (event) { handleDescriptionPaste(event, descriptionEditor); });
                                } else if (type === 'table') {
                                    block.innerHTML = '<div class="content-builder-block-head"><strong>Table</strong>' + remove + '</div><div class="content-table-tools"><button type="button" data-table="add-row">+ Row</button><button type="button" data-table="add-column">+ Column</button><button type="button" data-table="remove-row">− Row</button><button type="button" data-table="remove-column">− Column</button><label><input type="checkbox" class="content-table-header"> First row is header</label></div><div class="content-table-wrap"></div>';
                                    setupTableBlock(block, value);
                                } else {
                                    block.innerHTML = '<div class="content-builder-block-head"><strong>Image</strong>' + remove + '</div><input class="content-builder-image-file" type="file" accept="image/jpeg,image/png,image/webp,image/gif"><input class="content-builder-image-url" type="hidden"><div class="content-builder-image-preview"></div>';
                                    if (value) {
                                        block.querySelector('.content-builder-image-url').value = value;
                                        block.querySelector('.content-builder-image-preview').innerHTML = '<img src="' + escapeHtml(value) + '" alt="Article image">';
                                    }
                                    block.querySelector('.content-builder-image-file').addEventListener('change', function () {
                                        var input = this;
                                        if (!input.files[0]) return;
                                        var data = new FormData();
                                        data.append('image', input.files[0]);
                                        input.disabled = true;
                                        fetch('<?php echo blog_escape(blog_base_path() . '/blog-upload-image/'); ?>', {method:'POST', body:data, credentials:'same-origin'})
                                            .then(function (response) { return response.json(); })
                                            .then(function (result) {
                                                if (result.error) throw new Error(result.error);
                                                block.querySelector('.content-builder-image-url').value = result.url;
                                                block.querySelector('.content-builder-image-preview').innerHTML = '<img src="' + escapeHtml(result.url) + '" alt="Article image">';
                                            })
                                            .catch(function (uploadError) { window.alert(uploadError.message || 'The image could not be uploaded.'); })
                                            .finally(function () { input.disabled = false; });
                                    });
                                }
                                block.querySelector('.content-builder-remove').addEventListener('click', function () { removeBlock(block); });
                                blocks.insertBefore(block, beforeNode || null);
                                var editor = block.querySelector('.content-builder-description');
                                if (editor) { editor.addEventListener('focus', function () { activeEditor = editor; }); if (!skipFocus) activeEditor = editor; }
                                updateEmpty();
                                if (!skipFocus && type !== 'image') block.querySelector('input.content-builder-title, [contenteditable="true"]').focus();
                            }

                            function loadInitial(html) {
                                htmlToBlocks(html).forEach(function (spec) { addBlock(spec.type, spec.value, spec.heading, null, true); });
                            }

                            function serialize() {
                                var html = '';
                                Array.prototype.forEach.call(blocks.children, function (block) {
                                    var type = block.dataset.type;
                                    if (type === 'title') {
                                        var title = block.querySelector('.content-builder-title').value.trim();
                                        var heading = block.querySelector('.content-builder-heading-level').value;
                                        if (title) {
                                            if (heading === 'p') {
                                                html += '<p class="ql-title">' + escapeHtml(title) + '</p>';
                                            } else {
                                                html += '<' + heading + '>' + escapeHtml(title) + '</' + heading + '>';
                                            }
                                        }
                                    } else if (type === 'table') {
                                        html += serializeTable(block.querySelector('.content-table-wrap table'));
                                    } else if (type === 'description') {
                                        var descriptionNode = block.querySelector('.content-builder-description');
                                        var description = descriptionNode.innerHTML.trim();
                                        if (description && hasVisibleContent(descriptionNode)) {
                                            if (/^<(p|ul|ol|blockquote|div|h[1-6]|table|hr)\b/i.test(description)) {
                                                html += description;
                                            } else {
                                                html += '<p>' + description + '</p>';
                                            }
                                        }
                                    } else {
                                        var url = block.querySelector('.content-builder-image-url').value.trim();
                                        if (url) html += '<p><img src="' + escapeHtml(url) + '" alt="Article image"></p>';
                                    }
                                });
                                return html;
                            }

                            document.querySelectorAll('.content-format-toolbar button, .content-format-toolbar input').forEach(function (control) {
                                control.addEventListener('mousedown', function (event) { event.preventDefault(); });
                                control.addEventListener('click', function () {
                                    var editor = activeEditor || blocks.querySelector('.content-builder-description:last-of-type');
                                    if (!editor) { window.alert('Add a Description block first.'); return; }
                                    editor.focus();
                                    var command = control.dataset.command;
                                    var value = control.type === 'color' ? control.value : null;
                                    if (command === 'createLink') {
                                        value = window.prompt('Enter the URL');
                                        if (!value) return;
                                    }
                                    document.execCommand(command, false, value);
                                });
                            });
                            document.querySelectorAll('.content-builder-add').forEach(function (button) {
                                button.addEventListener('click', function () { addBlock(button.dataset.block, ''); });
                            });
                            if (status && scheduleField) {
                                var updateSchedule = function () { scheduleField.hidden = status.value !== 'scheduled'; };
                                status.addEventListener('change', updateSchedule);
                                updateSchedule();
                            }
                            loadInitial(initial);
                            form.addEventListener('submit', function (event) {
                                var html = serialize();
                                if (!html) {
                                    event.preventDefault();
                                    error.hidden = false;
                                    error.scrollIntoView({behavior:'smooth', block:'center'});
                                    return;
                                }
                                error.hidden = true;
                                hidden.value = html;
                            });
                        }());
                    </script></section>

                <?php endif; ?>
                <?php if ($view === 'list'): ?>
                <section class="crm-card" id="list-blogs">
                    <div class="crm-card-heading">
                        <div>
                            <p class="tf-blog-eyebrow">Your content</p>
                            <h2>All articles <span class="tf-admin-count"><?php echo count($posts); ?></span></h2>
                        </div>
                    </div>
                    <?php if ($posts): ?>
                        <div class="crm-list">
                            <?php foreach ($posts as $post): ?>
                                <article class="crm-row">
                                    <div class="crm-row-main">
                                        <?php if (!empty($post['image'])): ?><img src="<?php echo blog_escape(blog_image_url($post['image'])); ?>" alt=""><?php endif; ?>
                                        <div>
                                            <h3><?php echo blog_escape($post['title']); ?></h3>
                                            <p><span class="tf-admin-status"><?php echo blog_escape(blog_status_label($post)); ?></span><?php if ((string) ($post['status'] ?? '') === 'scheduled' && !blog_is_live($post) && !empty($post['publish_at'])): ?> - Goes live: <?php echo blog_escape((new DateTime($post['publish_at'], new DateTimeZone('Asia/Kolkata')))->format('j M Y, h:i A')); ?><?php endif; ?></p>
                                            <p><?php echo blog_escape(blog_format_date($post['published_at'] ?? '')); ?> - <?php echo blog_escape(blog_url($post['slug'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="crm-actions">
                                        <button type="button" class="crm-change-status" data-slug="<?php echo blog_escape($post['slug']); ?>" data-title="<?php echo blog_escape($post['title']); ?>" data-status="<?php echo blog_escape($post['status'] ?? 'draft'); ?>" data-publish-at="<?php echo blog_escape(!empty($post['publish_at']) ? substr(str_replace(' ', 'T', $post['publish_at']), 0, 16) : ''); ?>">Change status</button>
                                        <a href="<?php echo blog_escape(blog_url('admin') . '?view=create&edit=' . rawurlencode($post['slug'])); ?>">Edit</a>
                                        <a href="<?php echo blog_escape(blog_url($post['slug'])); ?>" target="_blank" rel="noopener">View</a>
                                        <form method="post" action="<?php echo blog_escape(blog_url('admin')); ?>" onsubmit="return confirm('Delete this article?');">
                                            <input type="hidden" name="csrf_token" value="<?php echo blog_escape(blog_csrf_token()); ?>">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="slug" value="<?php echo blog_escape($post['slug']); ?>">
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="crm-empty">No articles yet. Publish your first article using the form.</p>
                    <?php endif; ?>
                </section>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php if (blog_is_admin() && $view === 'list'): ?>
<style>
.crm-actions{flex-wrap:wrap;justify-content:flex-end}.crm-actions .crm-change-status{border:1px solid #b9dfe0;border-radius:7px;background:#effbf9;color:#087b84;padding:7px 10px;font-weight:700;white-space:nowrap}.crm-status-dialog{width:min(440px,calc(100% - 32px));max-height:90vh;overflow:auto;border:1px solid #d9e1eb;border-radius:14px;padding:25px;color:#152238;background:#fff;box-shadow:0 20px 65px #0d1b2a33}.crm-status-dialog::backdrop{background:#0d1b2a99}.crm-status-dialog h2{margin:0;font-size:22px}.crm-status-dialog p{color:#718196;overflow-wrap:anywhere}.crm-status-dialog .crm-status-schedule[hidden]{display:none}.crm-status-dialog-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:5px}.crm-status-cancel{border:1px solid #cfd9e5;background:#fff;color:#30445c;padding:10px 16px;border-radius:8px;cursor:pointer}
</style>
<dialog id="blog-status-dialog" class="crm-status-dialog" aria-labelledby="blog-status-heading" aria-describedby="blog-status-title">
    <h2 id="blog-status-heading">Change status</h2>
    <p id="blog-status-title"></p>
    <form class="tf-admin-form" method="post" action="<?php echo blog_escape(blog_url('admin') . '?view=list'); ?>">
        <input type="hidden" name="csrf_token" value="<?php echo blog_escape(blog_csrf_token()); ?>">
        <input type="hidden" name="action" value="change_status">
        <input type="hidden" name="slug" id="blog-status-slug">
        <label>Publishing status<select name="status" id="blog-status-select"><option value="draft">Draft</option><option value="published">Published</option><option value="scheduled">Scheduled</option></select></label>
        <label class="crm-status-schedule" id="blog-status-schedule" hidden>Schedule date and time (IST)<input type="datetime-local" name="publish_at" id="blog-status-date"></label>
        <div class="crm-status-dialog-actions"><button type="button" class="crm-status-cancel" id="blog-status-cancel">Cancel</button><button type="submit" class="crm-submit">Save status</button></div>
    </form>
</dialog>
<script>
(function () {
    var dialog = document.getElementById('blog-status-dialog');
    var status = document.getElementById('blog-status-select');
    var field = document.getElementById('blog-status-schedule');
    var date = document.getElementById('blog-status-date');
    function updateSchedule() {
        field.hidden = status.value !== 'scheduled';
        date.required = !field.hidden;
        date.disabled = field.hidden;
    }
    document.querySelectorAll('.crm-change-status').forEach(function (button) {
        button.addEventListener('click', function () {
            document.getElementById('blog-status-slug').value = button.dataset.slug;
            document.getElementById('blog-status-title').textContent = button.dataset.title;
            status.value = button.dataset.status;
            date.value = button.dataset.publishAt;
            updateSchedule();
            dialog.showModal();
        });
    });
    status.addEventListener('change', updateSchedule);
    document.getElementById('blog-status-cancel').addEventListener('click', function () { dialog.close(); });
}());
</script>
<?php endif; ?>
</body></html>








