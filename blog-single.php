<?php
$page_title = 'How Often Does Your Life Raft Actually Need Servicing? | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$post = $site_posts[0];

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
?>

    <!-- Article -->
    <article class="py-16 md:py-20 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>

        <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mt-10 mb-4">The Annual Rule</h2>
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
        </p>

        <!-- Pull quote -->
        <blockquote class="border-l-2 border-spartan-teal bg-spartan-light-gray p-8 my-10">
            <p class="font-oswald text-lg font-bold tracking-wide text-spartan-navy uppercase leading-snug">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor."
            </p>
        </blockquote>

        <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mt-10 mb-4">The Two Exceptions</h2>
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mt-10 mb-4">Booking Around Survey Season</h2>
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="text-base text-slate-700 font-light leading-relaxed mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
        </p>

        <!-- Article footer -->
        <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-6">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-spartan-navy text-spartan-teal flex items-center justify-center">
                    <i class="fa-solid fa-life-ring text-xl"></i>
                </div>
                <div>
                    <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.15em] uppercase block">Spartan Service Team</span>
                    <span class="text-xs text-slate-500 font-light">Dartmouth Service Centre</span>
                </div>
            </div>
            <div class="flex items-center space-x-3 text-slate-400">
                <span class="text-[10px] font-bold tracking-[0.2em] uppercase">Share</span>
                <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="Share by email"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </article>

    <!-- Related posts -->
    <section class="py-16 bg-spartan-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center select-text">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-none">MORE FROM THE BLOG</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 select-text">
                <?php foreach (array_slice($site_posts, 1, 3) as $rel): ?>
                <article class="group">
                    <a href="blog-single.php" class="block h-44 w-full overflow-hidden mb-5">
                        <img src="<?php echo $rel['image']; ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                    <span class="font-mono text-[10px] text-slate-400 tracking-widest uppercase block mb-2"><?php echo $rel['category']; ?> · <?php echo $rel['date']; ?></span>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-widest uppercase leading-tight">
                        <a href="blog-single.php" class="hover:text-spartan-teal transition-colors"><?php echo $rel['title']; ?></a>
                    </h3>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
