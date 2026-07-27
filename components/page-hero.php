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
 * ];
 */
$hero_image = $hero['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp';
$hero_crumbs = $hero['breadcrumbs'] ?? [['label' => 'Home', 'url' => 'index.php'], ['label' => $hero['title']]];
$hero_show_breadcrumbs = $hero['show_breadcrumbs'] ?? true;
$hero_size = $hero['size'] ?? 'default';
$hero_short = $hero_size === 'short';
$hero_tall = $hero_size === 'tall';
$hero_height = $hero_short ? 'h-[240px] md:h-[300px]' : ($hero_tall ? 'h-[640px] md:h-[680px] lg:h-[720px]' : 'h-[380px] md:h-[450px]');
$hero_title_size = $hero_short ? 'text-3xl sm:text-4xl md:text-5xl' : ($hero_tall ? 'text-3xl sm:text-4xl md:text-5xl lg:text-6xl' : 'text-4xl sm:text-5xl md:text-6xl');
$hero_content_width = $hero_tall ? 'max-w-6xl' : 'max-w-4xl';
$hero_subtitle_width = $hero_tall ? 'max-w-4xl' : 'max-w-2xl';
$hero_title_text = strip_tags((string) ($hero['title'] ?? ''));
?>
<section class="relative <?php echo $hero_height; ?> w-full overflow-hidden bg-spartan-navy flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo site_escape($hero_image); ?>" alt="<?php echo site_escape($hero_title_text); ?>" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-b from-spartan-navy/15 via-spartan-navy/45 to-spartan-navy/85"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative z-10 <?php echo $hero_content_width; ?> mx-auto px-4 sm:px-6 lg:px-8 text-center <?php echo $hero_short ? 'space-y-3 mt-4' : 'space-y-5 mt-8'; ?> select-text">
        <?php if ($hero_show_breadcrumbs): ?>
        <!-- Breadcrumbs -->
        <nav class="flex items-center justify-center space-x-2 text-[10px] md:text-xs font-mono font-bold tracking-widest text-spartan-teal uppercase">
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
        <span class="font-oswald text-[10px] sm:text-xs font-bold text-spartan-teal-light tracking-[0.28em] uppercase block">
            <?php echo site_escape($hero['eyebrow']); ?>
        </span>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="font-oswald <?php echo $hero_title_size; ?> font-bold uppercase tracking-wider text-white leading-tight">
            <?php echo site_escape($hero['title']); ?>
        </h1>

        <?php if (!empty($hero['subtitle'])): ?>
        <!-- Brief Page Subtitle -->
        <p class="font-sans text-xs sm:text-sm <?php echo $hero_short ? '' : 'md:text-base'; ?> text-slate-300 leading-relaxed <?php echo $hero_subtitle_width; ?> mx-auto font-light">
            <?php echo site_escape($hero['subtitle']); ?>
        </p>
        <?php endif; ?>

        <?php if (!$hero_short): ?>
        <!-- Small Wave Divider Accent -->
        <div class="flex justify-center pt-2">
            <div class="w-12 h-3 bg-spartan-teal" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
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
