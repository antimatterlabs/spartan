<?php
$page_title = 'FAQ | Spartan Industrial Marine';
$active_nav = 'faq';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Frequently Asked Questions',
    'subtitle' => 'Turnaround times, certificates, pricing, and shipping. If it is not answered here, call the counter.',
    'image' => 'assets/images/spartan-3.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'FAQ'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- FAQ accordion -->
    <section class="py-16 md:py-24 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="divide-y divide-slate-100 border-y border-slate-100 select-text">
            <?php foreach ($site_faqs as $faq): ?>
            <div>
                <button onclick="toggleFaq(this)" class="w-full py-6 flex items-center justify-between text-left group">
                    <h3 class="font-oswald text-base md:text-lg font-bold text-spartan-navy tracking-wide uppercase pr-6 group-hover:text-spartan-teal transition-colors"><?php echo $faq['q']; ?></h3>
                    <i class="fa-solid fa-plus text-spartan-teal text-sm shrink-0 transition-transform duration-200"></i>
                </button>
                <div class="hidden pb-6">
                    <p class="text-sm text-slate-600 font-light leading-relaxed max-w-2xl"><?php echo $faq['a']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Still stuck strip -->
        <div class="mt-14 bg-spartan-light-gray p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 select-text">
            <div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.15em] uppercase mb-1.5">Didn't find your answer?</h3>
                <p class="text-sm text-slate-600 font-light">Call <?php echo $site['phone']; ?> or send a message. A real person replies within one business day.</p>
            </div>
            <a href="contact.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors shrink-0">
                <span>Contact Us</span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
