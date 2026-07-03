<?php
/**
 * Component: Internal Page Hero (centered, background image)
 * Based on internal-hero-template.html.
 *
 * Expects $hero = [
 *   'title'      => string (required)
 *   'subtitle'   => string (optional)
 *   'image'      => string (optional, defaults to spartan-2.png)
 *   'breadcrumbs'=> array of ['label' => ..., 'url' => ...] (last item has no url)
 *   'size'       => 'default' | 'short'  (short = compact hero for shop/utility pages)
 * ];
 */
$hero_image = $hero['image'] ?? 'assets/images/spartan-2.png';
$hero_crumbs = $hero['breadcrumbs'] ?? [['label' => 'Home', 'url' => 'index.php'], ['label' => $hero['title']]];
$hero_short = ($hero['size'] ?? 'default') === 'short';
$hero_height = $hero_short ? 'h-[240px] md:h-[300px]' : 'h-[380px] md:h-[450px]';
$hero_title_size = $hero_short ? 'text-3xl sm:text-4xl md:text-5xl' : 'text-4xl sm:text-5xl md:text-6xl';
?>
<section class="relative <?php echo $hero_height; ?> w-full overflow-hidden bg-spartan-navy flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $hero_image; ?>" alt="<?php echo htmlspecialchars(strip_tags($hero['title'])); ?>" class="w-full h-full object-cover object-center filter brightness-[0.6] contrast-[1.05]">
        <div class="absolute inset-0 bg-gradient-to-b from-spartan-navy/15 via-spartan-navy/45 to-spartan-navy/85"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center <?php echo $hero_short ? 'space-y-3 mt-4' : 'space-y-5 mt-8'; ?> select-text">
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

        <!-- Page Heading -->
        <h1 class="font-oswald <?php echo $hero_title_size; ?> font-bold uppercase tracking-wider text-white leading-tight">
            <?php echo $hero['title']; ?>
        </h1>

        <?php if (!empty($hero['subtitle'])): ?>
        <!-- Brief Page Subtitle -->
        <p class="font-sans text-xs sm:text-sm <?php echo $hero_short ? '' : 'md:text-base'; ?> text-slate-300 leading-relaxed max-w-2xl mx-auto font-light">
            <?php echo $hero['subtitle']; ?>
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
