<?php
/**
 * Component: Brand Pillars strip (Reliability / Expertise / Service / Readiness)
 */
$pillars = [
    ['icon' => 'fa-anchor', 'title' => 'Reliability', 'text' => 'Harshest environments demand proven performance. We deliver certified, battle-tested marine safety gear that never fails.'],
    ['icon' => 'fa-compass', 'title' => 'Expertise', 'text' => 'Decades of deep maritime knowledge. We guide your fleet through complex Transport Canada and DFO regulations.'],
    ['icon' => 'fa-screwdriver-wrench', 'title' => 'Service', 'text' => 'Your schedule is our priority. Our rapid-turnaround maintenance ensures you pass every inspection seamlessly.'],
    ['icon' => 'fa-warehouse', 'title' => 'Readiness', 'text' => 'Always stocked, local, and prepared. We deploy inventory and rapid service tech teams when you need them.'],
];
?>
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-12 select-text">
        <?php foreach ($pillars as $pillar): ?>
        <div class="flex flex-col">
            <i class="fa-solid <?php echo $pillar['icon']; ?> text-4xl text-spartan-teal mb-8"></i>
            <div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.15em] uppercase mb-4"><?php echo $pillar['title']; ?></h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo $pillar['text']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
