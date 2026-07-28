<?php
$page_title = 'Industry Articles & News | Spartan Industrial Marine';
$meta_description = 'Read Spartan Industrial Marine articles and news about commercial fishing supplies, vessel safety requirements, recalls, and marine operations across Atlantic Canada.';
$active_nav = 'resources';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Industry Articles & News',
    'subtitle' => 'Commercial fishing updates, compliance guidance, safety recalls, and practical marine operations advice from Spartan.',
    'image' => 'assets/images/j9/marine-rigging.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Blog'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$featured_post = $site_posts[0];
$other_posts = array_slice($site_posts, 1);
?>

    <!-- Featured post -->
    <section class="py-16 md:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="<?php echo site_escape(site_post_url($featured_post)); ?>" class="grid grid-cols-1 md:grid-cols-2 bg-spartan-navy group overflow-hidden select-text">
            <div class="relative h-[300px] md:h-auto md:min-h-[400px] overflow-hidden">
                <img src="<?php echo $featured_post['image']; ?>" alt="<?php echo htmlspecialchars($featured_post['title']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 brightness-90">
            </div>
            <div class="p-10 md:p-14 flex flex-col justify-center text-white relative overflow-hidden">
                <div class="absolute -right-12 -bottom-6 w-[340px] h-20 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                <div class="relative z-10">
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">FEATURED</span>
                        <span class="font-mono text-[10px] text-slate-400 tracking-widest uppercase"><?php echo $featured_post['category']; ?> · <?php echo $featured_post['date']; ?></span>
                    </div>
                    <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider uppercase leading-tight mb-4 group-hover:text-spartan-teal transition-colors">
                        <?php echo $featured_post['title']; ?>
                    </h2>
                    <p class="text-sm text-slate-300 font-light leading-relaxed mb-6 max-w-md">
                        <?php echo $featured_post['excerpt']; ?>
                    </p>
                    <span class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal uppercase">
                        <span>Read Article</span>
                        <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </div>
        </a>
    </section>

    <!-- Post grid -->
    <section class="pb-16 md:pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-14 select-text">
            <?php foreach ($other_posts as $post): ?>
            <article class="group">
                <a href="<?php echo site_escape(site_post_url($post)); ?>" class="block h-52 w-full overflow-hidden mb-6">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </a>
                <span class="font-mono text-[10px] text-slate-400 tracking-widest uppercase block mb-2"><?php echo $post['category']; ?> · <?php echo $post['date']; ?></span>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase leading-tight mb-3">
                    <a href="<?php echo site_escape(site_post_url($post)); ?>" class="hover:text-spartan-teal transition-colors"><?php echo $post['title']; ?></a>
                </h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    <?php echo $post['excerpt']; ?>
                </p>
                <a href="<?php echo site_escape(site_post_url($post)); ?>" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Read Article</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
