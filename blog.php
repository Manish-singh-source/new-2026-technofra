<?php
require_once __DIR__ . '/blog-helpers.php';
header('Content-Type: text/html; charset=UTF-8');

$pageStylesheet = 'assets/css/blog.css?v=' . (int) filemtime(__DIR__ . '/assets/css/blog.css');
$baseHref = blog_base_path() . '/';
$bodyClass = 'tf-blog-page';
$posts = blog_live_posts(blog_load_posts());

$requestedSlug = trim((string) ($_GET['post'] ?? ''), '/');
$currentPost = $requestedSlug === '' ? null : blog_find_post($posts, $requestedSlug);
$notFound = $requestedSlug !== '' && $currentPost === null;
if ($notFound) {
    http_response_code(404);
}
if ($notFound) {
    http_response_code(404);
}

if ($currentPost !== null) {
    $pageTitle = ($currentPost['meta_title'] ?? '') !== '' ? $currentPost['meta_title'] : (($currentPost['title'] ?? 'Blog') . ' | Technofra');
    $metaDescription = (string) ($currentPost['meta_description'] ?? '');
    if ($metaDescription === '') $metaDescription = (string) ($currentPost['excerpt'] ?? blog_excerpt($currentPost['content'] ?? '', 160));
    $canonicalUrl = 'https://technofra.com' . blog_url($currentPost['slug']);
} else {
    $pageTitle = 'Blog | Technofra';
    $canonicalUrl = 'https://technofra.com' . blog_url();
}

include __DIR__ . '/header.php';
?>
<main class="tf-blog">
    <section class="tf-blog-hero">
        <?php if ($currentPost === null): ?>
            <div class="tf-blog-container">
                <?php if ($notFound): ?>
                    <h1>Article not found</h1>
                <?php else: ?>
                    <h1>Blog</h1>
                <?php endif; ?>
                <nav class="tf-blog-breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <span aria-hidden="true">&gt;</span>
                    <?php if ($notFound): ?>
                        <span aria-current="page">Article not found</span>
                    <?php else: ?>
                        <span aria-current="page">Blog</span>
                    <?php endif; ?>
                </nav>
            </div>
        <?php endif; ?>
    </section>

    <section class="tf-blog-content<?php echo $currentPost !== null ? ' tf-blog-detail-content' : ''; ?>">
        <div class="tf-blog-container">
            <?php if ($currentPost !== null): ?>
                <div class="tf-blog-detail-layout">
                    <article class="tf-blog-article">
                        <header class="tf-blog-article-header">
                            <div class="tf-blog-article-meta">
                                <span class="tf-blog-card-category"style="display: none;">BLOG</span>

                                <?php if (!empty($currentPost['updated_at']) && $currentPost['updated_at'] !== ($currentPost['published_at'] ?? '')): ?>
                                    <span>Updated <?php echo blog_escape(blog_format_date($currentPost['updated_at'])); ?></span>
                                <?php endif; ?>
                            </div>
                        </header>
                        <?php if (!empty($currentPost['image'])): ?>
                            <img class="tf-blog-feature-image" src="<?php echo blog_escape(blog_image_url($currentPost['image'])); ?>" alt="<?php echo blog_escape($currentPost['title']); ?>">
                        <?php endif; ?>
                        <div class="tf-blog-article-copy blog-content"><?php echo blog_render_content((string) ($currentPost['content'] ?? '')); ?></div>
                        <a class="tf-blog-back" href="<?php echo blog_escape(blog_url()); ?>"><span aria-hidden="true">&gt;</span> Back to all articles</a>
                    </article>
                    <aside class="tf-blog-detail-sidebar" aria-label="Blog sidebar">
                        <section class="tf-blog-sidebar-widget">
                            <h2>Search</h2>
                            <form class="tf-blog-search-form" action="<?php echo blog_escape(blog_url()); ?>" method="get" role="search">
                                <label class="tf-blog-visually-hidden" for="tf-blog-detail-search">Search articles</label>
                                <input id="tf-blog-detail-search" type="search" name="q" placeholder="Search..." required>
                                <button type="submit">Search</button>
                            </form>
                        </section>
                        <section class="tf-blog-sidebar-widget">
                            <h2>Recent Posts</h2>
                            <div class="tf-blog-recent-posts">
                                <?php foreach (array_slice($posts, 0, 3) as $recentPost): ?>
                                    <a class="tf-blog-recent-post" href="<?php echo blog_escape(blog_url($recentPost['slug'])); ?>">
                                        <?php if (!empty($recentPost['image'])): ?>
                                            <img src="<?php echo blog_escape(blog_image_url($recentPost['image'])); ?>" alt="" loading="lazy">
                                        <?php else: ?>
                                            <span class="tf-blog-recent-placeholder" aria-hidden="true"></span>
                                        <?php endif; ?>
                                        <span class="tf-blog-recent-copy">
                                            <span class="tf-blog-recent-date"><span aria-hidden="true">&gt;</span><?php echo blog_escape(blog_format_date($recentPost['published_at'] ?? '')); ?></span>
                                            <span class="tf-blog-recent-title"><?php echo blog_escape($recentPost['title']); ?></span>
                                        </span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    </aside>
                </div>
            <?php elseif ($notFound): ?>
                <div class="tf-blog-empty">
                    <p>Sorry, we could not find that article.</p>
                    <a class="tf-blog-button" href="<?php echo blog_escape(blog_url()); ?>">Browse all articles</a>
                </div>
            <?php else: ?>
                <?php
                $searchQuery = trim((string) ($_GET['q'] ?? ''));
                if ($searchQuery !== '') {
                    $searchNeedle = function_exists('mb_strtolower')
                        ? mb_strtolower($searchQuery, 'UTF-8')
                        : strtolower($searchQuery);
                    $searchTerms = preg_split('/\s+/', $searchNeedle, -1, PREG_SPLIT_NO_EMPTY);
                    $posts = array_values(array_filter($posts, static function ($post) use ($searchTerms) {
                        $searchText = implode(' ', [
                            (string) ($post['title'] ?? ''),
                            (string) ($post['excerpt'] ?? ''),
                            strip_tags((string) ($post['content'] ?? '')),
                        ]);
                        $searchText = function_exists('mb_strtolower')
                            ? mb_strtolower($searchText, 'UTF-8')
                            : strtolower($searchText);

                        foreach ($searchTerms as $searchTerm) {
                            if (strpos($searchText, $searchTerm) === false) {
                                return false;
                            }
                        }

                        return true;
                    }));
                }
                $pageSize = 6;
                $totalPages = max(1, (int) ceil(count($posts) / $pageSize));
                $pageNumber = filter_var($_GET['page'] ?? 1, FILTER_VALIDATE_INT);
                $pageNumber = $pageNumber === false ? 1 : max(1, min($totalPages, $pageNumber));
                $visiblePosts = array_slice($posts, ($pageNumber - 1) * $pageSize, $pageSize);
                ?>
                <div class="tf-blog-layout">
                    <section class="tf-blog-feed" aria-label="Blog articles">
                    <?php if ($searchQuery !== ''): ?>
                        <p class="tf-blog-search-summary">Search results for &quot;<?php echo blog_escape($searchQuery); ?>&quot;</p>
                    <?php endif; ?>
                    <?php if ($visiblePosts): ?>
                    <div class="tf-blog-list">
                        <?php foreach ($visiblePosts as $post): ?>
                            <article class="tf-blog-card">
                                <a class="tf-blog-card-image" href="<?php echo blog_escape(blog_url($post['slug'])); ?>" aria-label="Read <?php echo blog_escape($post['title']); ?>">
                                    <?php if (!empty($post['image'])): ?>
                                        <img src="<?php echo blog_escape(blog_image_url($post['image'])); ?>" alt="" loading="lazy">
                                    <?php else: ?>
                                        <span class="tf-blog-image-placeholder" aria-hidden="true">
                                            <span class="tf-blog-placeholder-window"></span>
                                            <span class="tf-blog-placeholder-chart"></span>
                                        </span>
                                    <?php endif; ?>
                                </a>
                                <div class="tf-blog-card-copy">
                                    <span class="tf-blog-card-category">BLOG</span>
                                    <h2><a href="<?php echo blog_escape(blog_url($post['slug'])); ?>"><?php echo blog_escape($post['title']); ?></a></h2>
                                    <div class="tf-blog-card-footer">
                                        <span class="tf-blog-card-date"><?php echo blog_escape(blog_format_date($post['published_at'] ?? '')); ?></span>
                                        <a class="tf-blog-read-more" href="<?php echo blog_escape(blog_url($post['slug'])); ?>">Read more <span aria-hidden="true">&gt;</span></a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                        <div class="tf-blog-empty">
                            <p><?php echo $searchQuery !== '' ? 'No articles matched your search. Try another keyword.' : 'No articles yet. Check back soon for fresh insights from Technofra.'; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if ($totalPages > 1): ?>
                        <nav class="tf-blog-pagination" aria-label="Blog pages">
                            <?php if ($pageNumber > 1): ?>
                                <a href="<?php echo blog_escape(blog_url() . '?' . http_build_query(array_filter(['page' => $pageNumber - 1, 'q' => $searchQuery]))); ?>" aria-label="Previous page">&lt;</a>
                            <?php endif; ?>
                            <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                                <?php if ($page === $pageNumber): ?>
                                    <span class="is-current" aria-current="page"><?php echo $page; ?></span>
                                <?php else: ?>
                                    <a href="<?php echo blog_escape(blog_url() . '?' . http_build_query(array_filter(['page' => $page, 'q' => $searchQuery]))); ?>"><?php echo $page; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($pageNumber < $totalPages): ?>
                                <a href="<?php echo blog_escape(blog_url() . '?' . http_build_query(array_filter(['page' => $pageNumber + 1, 'q' => $searchQuery]))); ?>" aria-label="Next page">&gt;</a>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>
                    </section>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>




