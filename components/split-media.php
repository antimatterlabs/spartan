<?php
/**
 * Component: Split Media Card (image one side, content the other)
 *
 * Expects $sm = [
 *   'eyebrow'      => string
 *   'title'        => string
 *   'text'         => string
 *   'button_label' => string
 *   'button_url'   => string
 *   'image'        => string
 *   'image_alt'    => string
 *   'reverse'      => bool   (true = image on the right)
 *   'button_style' => 'solid' | 'outline'  (default solid navy)
 * ];
 */
$sm_reverse = !empty($sm['reverse']);
$sm_btn_style = $sm['button_style'] ?? 'solid';
$sm_btn_classes = $sm_btn_style === 'outline'
    ? 'border border-spartan-navy text-spartan-navy hover:bg-spartan-navy hover:text-white'
    : 'bg-spartan-navy text-white hover:bg-spartan-charcoal';
?>
<div class="grid grid-cols-1 md:grid-cols-2 bg-white">
    <!-- Image side -->
    <div class="relative h-[300px] md:h-auto md:min-h-[420px] overflow-hidden <?php echo $sm_reverse ? 'order-1 md:order-2' : ''; ?>">
        <img src="<?php echo $sm['image']; ?>" alt="<?php echo $sm['image_alt'] ?? ''; ?>" class="absolute inset-0 w-full h-full object-cover">
        <!-- Wave accent bleeding off the image edge -->
        <div class="absolute -bottom-2 <?php echo $sm_reverse ? '-right-8' : '-left-8'; ?> w-[120%] h-16 bg-spartan-teal opacity-60 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
    </div>
    <!-- Content side -->
    <div class="p-10 md:p-14 flex flex-col justify-center <?php echo $sm_reverse ? 'order-2 md:order-1' : ''; ?>">
        <div class="w-14 h-4 bg-spartan-teal mb-5" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
        <?php if (!empty($sm['eyebrow'])): ?>
        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3"><?php echo $sm['eyebrow']; ?></span>
        <?php endif; ?>
        <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
            <?php echo $sm['title']; ?>
        </h3>
        <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-md">
            <?php echo $sm['text']; ?>
        </p>
        <?php if (!empty($sm['button_label'])): ?>
        <div>
            <a href="<?php echo $sm['button_url'] ?? '#'; ?>" class="inline-flex items-center <?php echo $sm_btn_classes; ?> py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase transition-colors">
                <span><?php echo $sm['button_label']; ?></span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>
