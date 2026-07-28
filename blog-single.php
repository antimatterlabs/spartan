<?php
require_once __DIR__ . '/partials/data.php';

$has_requested_slug = isset($_GET['post']) || isset($_GET['slug']);
$requested_slug = (string) ($_GET['post'] ?? $_GET['slug'] ?? ($site_posts[0]['slug'] ?? ''));
$post = $has_requested_slug ? site_find_post($requested_slug) : ($site_posts[0] ?? null);

if (!$post) {
    http_response_code(404);
    $page_title = 'Article Not Found | Spartan Industrial Marine';
    $meta_description = 'The requested Spartan Industrial Marine article could not be found.';
    $active_nav = 'resources';
    require_once __DIR__ . '/partials/header.php';
    ?>
    <main class="py-24 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center select-text">
        <h1 class="font-oswald text-4xl font-bold tracking-widest text-spartan-navy uppercase mb-4">Article Not Found</h1>
        <p class="text-slate-600 mb-8">The article you are looking for is no longer available.</p>
        <a href="blog.php" class="inline-flex items-center bg-spartan-teal text-white px-6 py-3 text-xs font-bold tracking-[0.18em] uppercase hover:bg-spartan-navy transition-colors">View Articles</a>
    </main>
    <?php
    require_once __DIR__ . '/partials/footer.php';
    exit;
}

$page_title = $post['meta_title'] ?? ($post['title'] . ' | Spartan Industrial Marine');
$meta_description = $post['meta_description'] ?? $post['excerpt'] ?? '';
$active_nav = 'resources';
$canonical_url = site_post_url($post);

$article_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post['title'],
    'description' => $meta_description,
    'image' => $post['image'],
    'datePublished' => $post['date_iso'] ?? $post['date'],
    'dateModified' => $post['modified_iso'] ?? ($post['date_iso'] ?? $post['date']),
    'author' => [
        '@type' => 'Organization',
        'name' => $post['author'] ?? 'Spartan Industrial Marine',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Spartan Industrial Marine',
    ],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => $canonical_url,
    ],
];

$head_extra = '<style>
.article-content p { margin: 0 0 1.35rem; color: #334155; font-size: 1rem; line-height: 1.85; font-weight: 300; }
.article-content h2 { margin: 3.25rem 0 1rem; font-family: "Oswald", sans-serif; font-size: 1.7rem; line-height: 1.15; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #0d1f2a; }
.article-content h3 { margin: 2.25rem 0 0.85rem; font-family: "Oswald", sans-serif; font-size: 1.15rem; line-height: 1.25; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #0d1f2a; }
.article-content ul { margin: 0 0 1.7rem 1.25rem; list-style: disc; color: #334155; }
.article-content li { padding-left: 0.25rem; line-height: 1.75; font-weight: 300; }
.article-content li + li { margin-top: 0.7rem; }
.article-content strong { color: #0d1f2a; font-weight: 700; }
.article-content table { width: 100%; min-width: 640px; border-collapse: collapse; font-size: 0.9rem; color: #334155; }
.article-content th { background: #0d1f2a; color: #fff; font-family: "Oswald", sans-serif; letter-spacing: 0.12em; text-transform: uppercase; font-size: 0.76rem; text-align: left; padding: 1rem; }
.article-content td { border: 1px solid #dbe4ee; padding: 1rem; vertical-align: top; line-height: 1.55; }
@media (min-width: 768px) {
    .article-content p, .article-content li { font-size: 1.05rem; }
    .article-content h2 { font-size: 2rem; }
}
</style>
<script type="application/ld+json">' . json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => $post['title'],
    'subtitle' => $post['category'] . ' · ' . $post['date'],
    'image' => $post['image'],
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Blog', 'url' => 'blog.php'],
        ['label' => 'Article'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$related_posts = array_values(array_filter($site_posts, function ($related) use ($post) {
    return ($related['slug'] ?? '') !== ($post['slug'] ?? '');
}));
?>

    <!-- Article -->
    <article class="py-16 md:py-20 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
        <div class="mb-10 pb-8 border-b border-slate-200 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-spartan-navy text-spartan-teal flex items-center justify-center">
                    <i class="fa-solid fa-pen-nib text-lg"></i>
                </div>
                <div>
                    <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.15em] uppercase block"><?php echo site_escape($post['author'] ?? 'Spartan Industrial Marine'); ?></span>
                    <span class="text-xs text-slate-500 font-light"><?php echo site_escape($post['author_role'] ?? 'Marine Supply & Service Team'); ?></span>
                </div>
            </div>
            <div class="flex flex-wrap gap-3 text-[10px] font-bold tracking-[0.2em] uppercase">
                <span class="bg-spartan-light-gray text-slate-600 px-3 py-2"><?php echo site_escape($post['date']); ?></span>
                <?php if (!empty($post['read_time'])): ?>
                <span class="bg-spartan-light-gray text-slate-600 px-3 py-2"><?php echo site_escape($post['read_time']); ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="article-content">
            <?php echo $post['body']; ?>
        </div>

        <!-- Article footer -->
        <div class="mt-12 pt-8 border-t border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-6">
            <div>
                <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.15em] uppercase block mb-1"><?php echo site_escape($post['author'] ?? 'Spartan Industrial Marine'); ?></span>
                <p class="text-sm text-slate-600 font-light leading-relaxed max-w-lg mb-0"><?php echo site_escape($post['author_bio'] ?? 'Practical marine supply and service guidance from Spartan Industrial Marine.'); ?></p>
            </div>
            <a href="blog.php" class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal hover:text-spartan-navy uppercase transition-colors">
                <span>All Articles</span>
                <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
            </a>
        </div>
    </article>

    <?php if (!empty($related_posts)): ?>
    <!-- Related posts -->
    <section class="py-16 bg-spartan-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center select-text">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-none">MORE FROM THE BLOG</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 select-text">
                <?php foreach (array_slice($related_posts, 0, 3) as $rel): ?>
                <article class="group">
                    <a href="<?php echo site_escape(site_post_url($rel)); ?>" class="block h-44 w-full overflow-hidden mb-5">
                        <img src="<?php echo site_escape($rel['image']); ?>" alt="<?php echo site_escape($rel['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                    <span class="font-mono text-[10px] text-slate-400 tracking-widest uppercase block mb-2"><?php echo site_escape($rel['category']); ?> · <?php echo site_escape($rel['date']); ?></span>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-widest uppercase leading-tight">
                        <a href="<?php echo site_escape(site_post_url($rel)); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($rel['title']); ?></a>
                    </h3>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
