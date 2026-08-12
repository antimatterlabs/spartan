<?php
/**
 * Component: Internal Page Hero (centered, background image)
 * Based on internal-hero-template.html.
 *
 * Expects $hero = [
 *   'title'      => string (required)
 *   'eyebrow'    => string (optional)
 *   'subtitle'   => string (optional)
 *   'image'      => string (optional, defaults to j9/spartan-storefront-exterior.webp)
 *   'breadcrumbs'=> array of ['label' => ..., 'url' => ...] (last item has no url)
 *   'size'       => 'default' | 'short' | 'tall'  (short = compact hero for shop/utility pages)
 *   'show_breadcrumbs' => bool (optional, defaults to true)
 *   'button_label' => string (optional)
 *   'button_url'   => string (optional)
 *   'secondary_button_label' => string (optional)
 *   'secondary_button_url'   => string (optional)
 * ];
 */
$hero_image = $hero['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp';
$hero_crumbs = $hero['breadcrumbs'] ?? [['label' => 'Home', 'url' => 'index.php'], ['label' => $hero['title']]];
$hero_show_breadcrumbs = $hero['show_breadcrumbs'] ?? true;
$hero_size = $hero['size'] ?? 'default';
$hero_short = $hero_size === 'short';
$hero_tall = $hero_size === 'tall';
$hero_min_height = $hero['height_class'] ?? ($hero_short ? 'min-h-[280px]' : ($hero_tall ? 'min-h-[620px] md:min-h-[680px]' : 'min-h-[420px]'));
$hero_padding = $hero_short ? 'py-20 md:py-24' : ($hero_tall ? 'py-28 md:py-36' : 'py-24 md:py-32');
$hero_title_size = $hero_short ? 'text-3xl sm:text-4xl md:text-5xl' : ($hero_tall ? 'text-3xl sm:text-4xl md:text-5xl lg:text-6xl' : 'text-4xl sm:text-5xl md:text-6xl');
$hero_content_width = $hero_tall ? 'max-w-6xl' : 'max-w-4xl';
$hero_subtitle_width = $hero_tall ? 'max-w-5xl' : 'max-w-3xl';
$hero_title_text = strip_tags((string) ($hero['title'] ?? ''));
?>
<section class="relative <?php echo $hero_min_height; ?> <?php echo $hero_padding; ?> w-full overflow-hidden bg-spartan-navy flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo site_escape($hero_image); ?>" alt="<?php echo site_escape($hero_title_text); ?>" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-b from-spartan-navy/15 via-spartan-navy/45 to-spartan-navy/85"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative z-10 <?php echo $hero_content_width; ?> mx-auto px-4 sm:px-6 lg:px-8 text-center select-text">
        <?php if ($hero_show_breadcrumbs): ?>
        <!-- Breadcrumbs -->
        <nav class="flex items-center justify-center space-x-2 text-xs md:text-sm font-mono font-bold tracking-widest text-spartan-teal uppercase <?php echo !empty($hero['eyebrow']) ? 'mb-5' : 'mb-6'; ?>">
            <?php foreach ($hero_crumbs as $i => $crumb): ?>
                <?php if ($i > 0): ?><span class="text-slate-500 font-light">/</span><?php endif; ?>
                <?php if (!empty($crumb['url'])): ?>
                    <a href="<?php echo $crumb['url']; ?>" class="hover:text-spartan-teal-light transition-colors"><?php echo strtoupper($crumb['label']); ?></a>
                <?php else: ?>
                    <span class="text-slate-300"><?php echo strtoupper($crumb['label']); ?></span>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
        <?php endif; ?>

        <?php if (!empty($hero['eyebrow'])): ?>
        <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal-light tracking-[0.32em] uppercase block mb-6">
            <?php echo site_escape($hero['eyebrow']); ?>
        </span>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="font-oswald <?php echo $hero_title_size; ?> font-bold uppercase tracking-wider text-white leading-tight <?php echo !empty($hero['subtitle']) ? ($hero_short ? 'mb-5' : 'mb-7') : ''; ?>">
            <?php echo site_escape($hero['title']); ?>
        </h1>

        <?php if (!empty($hero['subtitle'])): ?>
        <!-- Brief Page Subtitle -->
        <p class="font-sans text-base <?php echo $hero_short ? 'md:text-lg' : 'md:text-xl'; ?> text-slate-200 leading-relaxed <?php echo $hero_subtitle_width; ?> mx-auto font-light">
            <?php echo site_escape($hero['subtitle']); ?>
        </p>
        <?php endif; ?>

        <?php if (!empty($hero['button_label']) || !empty($hero['secondary_button_label'])): ?>
        <div class="flex flex-wrap justify-center gap-3 pt-1">
            <?php if (!empty($hero['button_label'])): ?>
            <a href="<?php echo site_escape($hero['button_url'] ?? '#'); ?>" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                <span><?php echo site_escape($hero['button_label']); ?></span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
            <?php endif; ?>
            <?php if (!empty($hero['secondary_button_label'])): ?>
            <a href="<?php echo site_escape($hero['secondary_button_url'] ?? '#'); ?>" class="inline-flex items-center border border-white/70 text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                <span><?php echo site_escape($hero['secondary_button_label']); ?></span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if (!$hero_short): ?>
        <!-- Small Wave Divider Accent -->
        <div class="flex justify-center pt-6 md:pt-8">
            <div class="w-16 h-4 bg-spartan-teal" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
        </div>
        <?php endif; ?>
    </div>

    <!-- Stretched Wave Mask Divider (blends into white body) -->
    <div class="absolute bottom-0 inset-x-0 z-10 overflow-hidden leading-[0] pointer-events-none">
        <svg viewBox="0 0 176.23 11.78" preserveAspectRatio="none" class="relative block w-full h-8 md:h-12 text-white fill-current">
            <path d="M175.37,11.19S152.97,0,121.72,0c-26.26,0-36.05,6.77-71.07,6.77C25.36,6.77,6.95,2.88,1.14,1.46c-.55-.13-.99-.18-1.14-.14l.04,10.46h176.19l-.86-.59Z"></path>
        </svg>
    </div>
</section>
