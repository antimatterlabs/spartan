<?php
/**
 * Global footer: newsletter band, footer columns, toast, and shared JS.
 */
require_once __DIR__ . '/data.php';

$footer_menu_sections = [
    [
        'title' => 'ABOUT',
        'links' => [
            ['label' => 'Why Spartan', 'url' => 'about.php'],
            ['label' => 'Careers', 'url' => 'contact.php'],
            ['label' => 'Delivery Information', 'url' => 'terms.php'],
            ['label' => 'Privacy Policy', 'url' => 'terms.php'],
            ['label' => 'Terms & Conditions', 'url' => 'terms.php'],
            ['label' => 'Contact Us', 'url' => 'contact.php'],
        ],
    ],
    [
        'title' => 'Products',
        'links' => [
            ['label' => 'Catalogue', 'url' => 'products.php'],
            ['label' => 'Trap Production', 'url' => 'production.php'],
            ['label' => 'Top Sellers', 'url' => 'products.php'],
            ['label' => 'On Sale', 'url' => 'products.php'],
            ['label' => 'PAUL', 'url' => site_brand_url('paul')],
            ['label' => 'Fierce Workwear', 'url' => site_brand_url('fierce-workwear')],
        ],
    ],
    [
        'title' => 'Services',
        'links' => [
            ['label' => 'Inspection Services', 'url' => 'inspection-services.php'],
            ['label' => 'Rental Equipment', 'url' => 'rental-equipment.php'],
            ['label' => 'Safety & Training', 'url' => 'training-courses.php'],
        ],
    ],
    [
        'title' => 'Resources',
        'links' => [
            ['label' => 'Definitions & Warnings', 'url' => 'terms.php'],
            ['label' => 'Industry Articles', 'url' => 'blog.php'],
            ['label' => 'CertTracker', 'url' => 'certtracker.php'],
            ['label' => 'FAQs', 'url' => 'faq.php'],
            ['label' => 'Sitemap', 'url' => 'sitemap.php'],
        ],
    ],
];
?>

    <!-- ======================================================= -->
    <!-- ======================= FOOTER ======================== -->
    <!-- ======================================================= -->
    <footer class="bg-spartan-navy text-slate-400 border-t border-slate-800 pt-14 pb-12">

        <!-- Newsletter band -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 mb-12 border-b border-slate-800">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 select-text">
                <div class="max-w-lg">
                    <h3 class="font-oswald text-lg font-bold text-white tracking-[0.15em] uppercase mb-2">Stock & Service Notices</h3>
                    <p class="text-xs font-light leading-relaxed text-slate-400">
                        Season stock arrivals, service booking windows, and recall notices. No fluff, unsubscribe anytime.
                    </p>
                </div>
                <form onsubmit="event.preventDefault(); alert('Newsletter registration mockup!');" class="flex w-full max-w-md">
                    <input type="email" required placeholder="Enter work email..." class="flex-grow bg-spartan-navy-light text-white text-xs border border-slate-700/60 focus:border-spartan-teal px-4 py-3.5 outline-none placeholder-slate-500 rounded-none transition-colors">
                    <button type="submit" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-6 py-3.5 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase shrink-0">
                        SIGN UP
                    </button>
                </form>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 border-b border-slate-800">
            <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,2fr)] gap-10 lg:gap-14">
                <div class="space-y-4 select-text">
                    <img src="assets/images/Spartan Industrial Marine White.png" alt="Spartan Industrial Marine" class="h-14 object-contain mb-2">
                    <p class="text-xs font-light leading-relaxed max-w-sm text-slate-400">
                        Spartan Industrial Marine supplies and services commercial fishing, aquaculture, shipyard, offshore, and government fleets across Atlantic Canada, with certified safety servicing, a full rigging shop, and stock that's actually on the shelf.
                    </p>
                    <div class="flex items-center space-x-4 pt-2 text-white">
                        <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="hover:text-spartan-teal transition-colors" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8 select-text">
                    <?php foreach ($footer_menu_sections as $section): ?>
                    <div class="border-t border-slate-700/70 pt-3">
                        <h4 class="font-oswald text-sm font-bold text-white tracking-[0.08em] uppercase mb-3">
                            <?php echo site_escape($section['title']); ?>
                        </h4>
                        <ul class="space-y-2 text-sm font-medium">
                            <?php foreach ($section['links'] as $link): ?>
                            <li>
                                <a href="<?php echo site_escape($link['url']); ?>" class="<?php echo site_escape($link['class'] ?? 'text-slate-300'); ?> hover:text-spartan-teal transition-colors">
                                    <?php echo site_escape($link['label']); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Base Footer (Copyrights) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 flex flex-col sm:flex-row justify-between items-center text-[10px] font-mono tracking-widest uppercase select-text">
            <span>© 2026 Spartan Industrial Marine. All rights reserved.</span>
            <div class="flex space-x-6 mt-4 sm:mt-0 text-slate-500">
                <a href="terms.php" class="hover:text-spartan-teal transition-colors">Privacy Policy</a>
                <a href="terms.php" class="hover:text-spartan-teal transition-colors">Terms & Conditions</a>
                <a href="sitemap.php" class="hover:text-spartan-teal transition-colors">Sitemap</a>
            </div>
        </div>
    </footer>


    <!-- ================= TOAST NOTIFICATION ================= -->
    <div id="toast-notify" class="fixed bottom-6 right-6 z-50 bg-spartan-navy text-white px-5 py-4 rounded-none border border-spartan-teal/40 transform translate-y-24 opacity-0 transition-all duration-300 flex items-center space-x-3 pointer-events-none">
        <div class="w-8 h-8 bg-spartan-teal/10 flex items-center justify-center text-spartan-teal">
            <i class="fa-solid fa-circle-check text-base"></i>
        </div>
        <div>
            <span id="toast-title" class="text-[10px] font-mono tracking-widest text-slate-400 block uppercase">ADDED TO ORDER</span>
            <span id="toast-message" class="text-xs font-semibold tracking-wide">Item added to your order.</span>
        </div>
    </div>


    <!-- ================= SHARED JAVASCRIPT ================= -->
    <script>
        // Global cart state
        let cartItems = [];
        let subtotalVal = 0.00;

        // Mega Menu mouseover functionality
        let closeTimers = {};
        const megaPairs = Array.from(document.querySelectorAll('[data-mega-trigger]'))
            .map(trigger => ({
                trigger,
                menu: document.getElementById(trigger.dataset.megaTrigger)
            }))
            .filter(pair => pair.menu);

        megaPairs.forEach(({ trigger, menu }) => {
            trigger.addEventListener('mouseenter', () => openMenu(menu));
            menu.addEventListener('mouseenter', () => openMenu(menu));
            trigger.addEventListener('mouseleave', () => scheduleCloseMenu(menu));
            menu.addEventListener('mouseleave', () => scheduleCloseMenu(menu));
        });

        function openMenu(menuToShow) {
            if (closeTimers[menuToShow.id]) {
                clearTimeout(closeTimers[menuToShow.id]);
            }
            megaPairs.forEach(({ menu }) => {
                if (menu !== menuToShow) closeMenuImmediately(menu);
            });
            menuToShow.classList.remove('scale-y-0', 'opacity-0', 'pointer-events-none');
            menuToShow.classList.add('scale-y-100', 'opacity-100', 'pointer-events-auto');
        }

        function scheduleCloseMenu(menu) {
            closeTimers[menu.id] = setTimeout(() => {
                closeMenuImmediately(menu);
            }, 100);
        }

        function closeMenuImmediately(menu) {
            if (!menu) return;
            menu.classList.remove('scale-y-100', 'opacity-100', 'pointer-events-auto');
            menu.classList.add('scale-y-0', 'opacity-0', 'pointer-events-none');
        }

        // Carousel scroller (reusable for any horizontal snap carousel by id)
        function scrollCarousel(carouselId, direction) {
            const el = document.getElementById(carouselId);
            if (!el) return;
            const amount = Math.round(el.clientWidth * 0.8);
            el.scrollBy({ left: direction * amount, behavior: 'smooth' });
        }

        // Toggle Mobile Menu Side drawer
        function openMobileShopMenu() {
            const panel = document.getElementById('mobile-shop-panel');
            const primary = document.getElementById('mobile-menu-primary');
            const trigger = document.querySelector('[aria-controls="mobile-shop-panel"]');
            if (!panel || !primary) return;

            primary.setAttribute('inert', '');
            primary.setAttribute('aria-hidden', 'true');
            panel.removeAttribute('inert');
            panel.setAttribute('aria-hidden', 'false');
            panel.classList.remove('translate-x-full', 'pointer-events-none');
            panel.classList.add('translate-x-0', 'pointer-events-auto');
            if (trigger) trigger.setAttribute('aria-expanded', 'true');

            setTimeout(() => {
                panel.querySelector('[aria-label="Back to main menu"]')?.focus();
            }, 300);
        }

        function closeMobileShopMenu(restoreFocus = true) {
            const panel = document.getElementById('mobile-shop-panel');
            const primary = document.getElementById('mobile-menu-primary');
            const trigger = document.querySelector('[aria-controls="mobile-shop-panel"]');
            if (!panel || !primary) return;

            panel.classList.add('translate-x-full', 'pointer-events-none');
            panel.classList.remove('translate-x-0', 'pointer-events-auto');
            panel.setAttribute('inert', '');
            panel.setAttribute('aria-hidden', 'true');
            primary.removeAttribute('inert');
            primary.setAttribute('aria-hidden', 'false');
            if (trigger) trigger.setAttribute('aria-expanded', 'false');

            if (restoreFocus && trigger) {
                setTimeout(() => trigger.focus(), 300);
            }
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const inner = document.getElementById('mobile-menu-inner');
            if (menu.classList.contains('opacity-0')) {
                closeMobileShopMenu(false);
                menu.classList.remove('opacity-0', 'pointer-events-none');
                menu.classList.add('opacity-100', 'pointer-events-all');
                inner.classList.remove('translate-x-full');
                inner.classList.add('translate-x-0');
            } else {
                closeMobileShopMenu(false);
                menu.classList.add('opacity-0', 'pointer-events-none');
                menu.classList.remove('opacity-100', 'pointer-events-all');
                inner.classList.add('translate-x-full');
                inner.classList.remove('translate-x-0');
            }
        }

        // Toggle Search Full-screen overlay
        function toggleSearch() {
            const overlay = document.getElementById('search-overlay');
            if (overlay.classList.contains('opacity-0')) {
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                overlay.classList.add('opacity-100', 'pointer-events-all');
                setTimeout(() => {
                    overlay.querySelector('input').focus();
                }, 100);
            } else {
                overlay.classList.add('opacity-0', 'pointer-events-none');
                overlay.classList.remove('opacity-100', 'pointer-events-all');
            }
        }

        // Toggle Cart Side drawer
        function toggleCart() {
            const drawer = document.getElementById('cart-drawer');
            const inner = document.getElementById('cart-drawer-inner');
            if (drawer.classList.contains('opacity-0')) {
                drawer.classList.remove('opacity-0', 'pointer-events-none');
                drawer.classList.add('opacity-100', 'pointer-events-all');
                inner.classList.remove('translate-x-full');
                inner.classList.add('translate-x-0');
            } else {
                drawer.classList.add('opacity-0', 'pointer-events-none');
                drawer.classList.remove('opacity-100', 'pointer-events-all');
                inner.classList.add('translate-x-full');
                inner.classList.remove('translate-x-0');
            }
        }

        // Add Product To Cart functionality
        function addToCart(name, price, img) {
            cartItems.push({ name, price, img });
            subtotalVal += price;
            updateCartDisplay();

            const badge = document.getElementById('cart-badge');
            badge.classList.remove('badge-pop');
            void badge.offsetWidth;
            badge.classList.add('badge-pop');

            showToastMessage('ADDED TO ORDER', `${name} has been added to your order.`);
        }

        // Update Cart Drawer UI
        function updateCartDisplay() {
            const badge = document.getElementById('cart-badge');
            const emptyState = document.getElementById('cart-empty-state');
            const gridState = document.getElementById('cart-items-grid');
            const subtotalLabel = document.getElementById('cart-subtotal-val');

            badge.innerText = cartItems.length;
            subtotalLabel.innerText = `$${subtotalVal.toFixed(2)} CAD`;

            if (cartItems.length > 0) {
                emptyState.classList.add('hidden');
                gridState.classList.remove('hidden');

                gridState.innerHTML = '';
                cartItems.forEach((item, index) => {
                    const row = document.createElement('div');
                    row.className = 'flex items-center space-x-4 border-b border-slate-100 pb-4 select-text';
                    row.innerHTML = `
                        <img src="${item.img}" alt="${item.name}" class="w-16 h-16 object-cover border border-slate-100 bg-white">
                        <div class="flex-grow">
                            <h4 class="font-oswald text-xs font-bold text-spartan-navy uppercase leading-tight">${item.name}</h4>
                            <span class="font-sans text-xs font-semibold text-slate-700 mt-1 block">$${item.price.toFixed(2)}</span>
                        </div>
                        <button onclick="removeCartItem(${index})" class="p-2 text-slate-400 hover:text-red-500 transition-colors" title="Remove item">
                            <i class="fa-solid fa-trash-can text-sm"></i>
                        </button>
                    `;
                    gridState.appendChild(row);
                });
            } else {
                emptyState.classList.remove('hidden');
                gridState.classList.add('hidden');
            }
        }

        // Remove item from cart
        function removeCartItem(index) {
            const removed = cartItems.splice(index, 1)[0];
            subtotalVal -= removed.price;
            updateCartDisplay();
            showToastMessage('REMOVED ITEM', `${removed.name} has been removed.`);
        }

        // Clear whole cart
        function clearCart() {
            cartItems = [];
            subtotalVal = 0.00;
            updateCartDisplay();
            showToastMessage('CLEARED ORDER', `All items have been removed.`);
        }

        // Toast display utility
        let toastTimeout;
        function showToastMessage(title, text) {
            const toast = document.getElementById('toast-notify');
            const toastTitle = document.getElementById('toast-title');
            const toastMsg = document.getElementById('toast-message');

            toastTitle.innerText = title;
            toastMsg.innerText = text;

            if (toastTimeout) {
                clearTimeout(toastTimeout);
            }

            toast.classList.remove('translate-y-24', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            toastTimeout = setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3000);
        }

        // Services booking simulated click
        function requestService(serviceName) {
            alert(`Service request: ${serviceName}. A Spartan technician will contact you within one business day.`);
        }

        // Product Filter switcher (homepage tabs + shop sidebar links)
        function filterProducts(filter) {
            const cards = document.querySelectorAll('.product-card-element');
            if (!cards.length) return;
            const isPrefixedFilter = typeof filter === 'string' && filter.includes(':');
            const [filterType, rawFilterValue] = isPrefixedFilter ? filter.split(':', 2) : ['category', filter];
            const filterValue = rawFilterValue || filter;

            // Homepage-style tab buttons (id="tab-xxx")
            document.querySelectorAll('[id^="tab-"]').forEach(btn => {
                if (filterType === 'category' && btn.id === `tab-${filterValue}`) {
                    btn.className = "bg-spartan-navy text-white border border-spartan-navy px-4 py-2 ring-2 ring-spartan-teal ring-offset-2 ring-offset-white shadow-sm transition-colors";
                } else {
                    btn.className = "bg-white border border-slate-200 text-slate-700 px-4 py-2 hover:border-spartan-teal hover:text-spartan-navy transition-colors";
                }
            });

            // Shop sidebar links (.filter-cat with data-cat)
            document.querySelectorAll('.filter-cat').forEach(el => {
                const active = (el.dataset.filter || el.dataset.cat) === filter;
                el.classList.toggle('text-spartan-teal', active);
                el.classList.toggle('font-bold', active);
                el.classList.toggle('border-spartan-teal', active);
                el.classList.toggle('text-slate-600', !active);
                el.classList.toggle('border-transparent', !active);
            });

            // Show/hide cards + live result count
            let visible = 0;
            cards.forEach(card => {
                let show = filter === 'all';
                if (!show) {
                    if (filterType === 'group') {
                        show = card.getAttribute('data-group') === filterValue;
                    } else if (filterType === 'brand') {
                        show = card.getAttribute('data-brand') === filterValue;
                    } else {
                        show = card.getAttribute('data-category') === filterValue;
                    }
                }
                card.style.display = show ? 'block' : 'none';
                if (show) visible++;
            });
            const count = document.getElementById('product-count');
            if (count) count.innerText = visible;
        }

        // FAQ accordion toggle
        function toggleFaq(btn) {
            const answer = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            const isOpen = !answer.classList.contains('hidden');
            answer.classList.toggle('hidden');
            if (icon) icon.classList.toggle('rotate-45', !isOpen);
        }

        // Apply an initial product filter if a page requested one (e.g. products.php?cat=rope)
        if (window.SPARTAN_INITIAL_FILTER) {
            document.addEventListener('DOMContentLoaded', () => filterProducts(window.SPARTAN_INITIAL_FILTER));
        }
    </script>
</body>
</html>
