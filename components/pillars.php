<?php
/**
 * Component: Brand Pillars strip (Reliability / Service / Expertise / Availability)
 */
$pillars = [
    ['icon' => 'fa-anchor', 'title' => 'Reliability', 'text' => "Gear that holds up in real conditions. If we stock it, we'd trust it on our own boat."],
    ['icon' => 'fa-screwdriver-wrench', 'title' => 'Service', 'text' => 'Certified raft, suit, and rigging service in-house, with turnaround you can plan a season around.'],
    ['icon' => 'fa-compass', 'title' => 'Expertise', 'text' => 'Staff who have worked the wharf, the deck, and the yard. Ask a question, get a straight answer.'],
    ['icon' => 'fa-warehouse', 'title' => 'Availability', 'text' => "Deep stock across three locations. When the season opens, the shelf isn't empty."],
];
?>
<section class="border-b border-slate-100 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 select-text">
        <?php foreach ($pillars as $pillar): ?>
        <div class="flex items-start space-x-4">
            <div class="w-11 h-11 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center">
                <i class="fa-solid <?php echo $pillar['icon']; ?> text-lg"></i>
            </div>
            <div>
                <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-1.5"><?php echo $pillar['title']; ?></h3>
                <p class="text-xs text-slate-500 font-light leading-relaxed"><?php echo $pillar['text']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
