<?php
/**
 * Component: Service item (image-led, no card chrome)
 * Use with include() inside a loop.
 *
 * Expects $service = one item from $site_services.
 */
?>
<div class="group">
    <a href="service-single.php" class="block h-52 w-full overflow-hidden mb-6">
        <img src="<?php echo $service['image']; ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    </a>
    <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">
        <a href="service-single.php" class="hover:text-spartan-teal transition-colors"><?php echo $service['title']; ?></a>
    </h3>
    <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
        <?php echo $service['desc']; ?>
    </p>
    <a href="service-single.php" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
        <span><?php echo $service['cta']; ?></span>
        <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
    </a>
</div>
