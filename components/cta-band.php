<?php
/**
 * Component: Teal CTA Band
 *
 * Optional $cta = [
 *   'eyebrow' => string,
 *   'title'   => string,
 *   'text'    => string,
 *   'button_label' => string,
 *   'button_url'   => string,
 * ];
 * Falls back to the certification season defaults.
 */
$cta = array_merge([
    'eyebrow' => 'CERTIFICATION SEASON',
    'title' => "Don't wait for survey week.",
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'button_label' => 'Book a Service',
    'button_url' => 'inspection-services.php',
], $cta ?? []);
?>
<section class="bg-spartan-teal text-white py-16 overflow-hidden relative">
    <div class="absolute -right-10 bottom-0 h-32 w-[480px] bg-white opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 select-text">
        <div class="max-w-2xl">
            <span class="font-oswald text-[10px] font-bold tracking-[0.3em] uppercase text-white/80 block mb-3"><?php echo $cta['eyebrow']; ?></span>
            <h2 class="font-oswald text-2xl md:text-4xl font-bold tracking-widest uppercase leading-tight mb-4">
                <?php echo $cta['title']; ?>
            </h2>
            <p class="text-sm text-white/90 font-light leading-relaxed max-w-xl">
                <?php echo $cta['text']; ?>
            </p>
        </div>
        <div class="flex flex-wrap gap-4 shrink-0">
            <a href="<?php echo $cta['button_url']; ?>" class="bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center rounded-none border border-spartan-navy hover:bg-spartan-charcoal transition-all duration-300 uppercase">
                <span><?php echo $cta['button_label']; ?></span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
            <a href="<?php echo $site['phone_href']; ?>" class="border border-white/70 hover:border-white bg-transparent text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center rounded-none hover:bg-white/10 transition-all duration-300 uppercase">
                <i class="fa-solid fa-phone text-[11px] mr-2.5"></i>
                <span><?php echo $site['phone']; ?></span>
            </a>
        </div>
    </div>
</section>
<?php unset($cta); ?>
