<?php
/**
 * Site Header Component
 *
 * @var string $logo_path Path to the logo image.
 * @var string $company   The company name.
 */
$is_home = !isset($activePage) || $activePage === 'home';
$home_link = $is_home ? './#home' : './';
$base_link = './';
$nav_items = [
    ['label' => 'Home', 'href' => $home_link, 'key' => 'home'],
    ['label' => 'About', 'href' => 'about', 'key' => 'about'],
    [
        'label' => 'Industry',
        'href' => 'industry',
        'key' => 'industry_group',
        'dropdown' => [
            ['label' => 'Manufacturing', 'href' => 'industry-manufacturing', 'key' => 'industry'],
            ['label' => 'Banking & Finance', 'href' => 'industry-banking', 'key' => 'industry'],
            ['label' => 'Healthcare', 'href' => 'industry-healthcare', 'key' => 'industry'],
            ['label' => 'Transport & Logistics', 'href' => 'industry-transport-logistics', 'key' => 'industry'],
            ['label' => 'Retail & E-Commerce', 'href' => 'industry-retail', 'key' => 'industry'],
            ['label' => 'Education', 'href' => 'industry-education', 'key' => 'industry'],
            ['label' => 'Media & Entertainment', 'href' => 'industry-media', 'key' => 'industry'],
            ['label' => 'Real Estate', 'href' => 'industry-real-estate', 'key' => 'industry']
        ]
    ],
    ['label' => 'Products', 'href' => 'product', 'key' => 'product'],
    [
        'label' => 'Services',
        'href' => 'services',
        'key' => 'services_group',
        'dropdown' => [
            ['label' => 'Web Development', 'href' => 'website-design', 'key' => 'services'],
            ['label' => 'Mobile App Development', 'href' => 'app-development', 'key' => 'services'],
            ['label' => 'Digital Marketing', 'href' => 'digital-marketing', 'key' => 'services'],
            ['label' => 'Custom IT Solutions', 'href' => 'custom-software', 'key' => 'services'],
            ['label' => 'Recruitment Services', 'href' => 'recruitment-services', 'key' => 'services']
        ]
    ],
    ['label' => 'Blog', 'href' => 'blog', 'key' => 'blog'],
    [
        'label' => 'Career',
        'href' => '#',
        'key' => 'career_group',
        'dropdown' => [
            ['label' => 'Jobs', 'href' => 'careers', 'key' => 'career'],
            ['label' => 'Internships', 'href' => 'internships', 'key' => 'internship']
        ]
    ],
];
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0EK82RV731"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0EK82RV731');
</script>
<style>
    /* Base Header Dependencies */
    body { padding-top: 92px; margin: 0; }
    
    /* Make content full screen across the website */
    .container, .content-container, .hero-container, .hero-motion-container, .sg-container, .sgm-container, .cs-container, .blog-body, .apply-wrap, .global-presence-grid, .inner-hero-content {
        max-width: 100% !important;
        width: 100% !important;
        padding-left: clamp(20px, 6vw, 100px) !important;
        padding-right: clamp(20px, 6vw, 100px) !important;
        box-sizing: border-box !important;
    }
    
    img, video, iframe {
        max-width: 100%;
        height: auto;
    }

    /* Center all main titles */
    .content-container h2, .content-container h3, .blog-body h2, .blog-body h3, .blog-body h4, .contact-copy h2 {
        text-align: center;
    }
    .eyebrow {
        display: table !important;
        margin: 0 auto 12px !important;
    }

    /* Constrain text paragraphs and lists for better readability */
    .content-container > p, .content-container > ul, .content-container > ol, 
    .blog-body > p, .blog-body > ul, .blog-body > ol, 
    .contact-copy > p, .intro-text > p {
        max-width: 800px;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .top-bar { position: fixed; top: 0; left: 0; right: 0; z-index: 31; background-color: var(--green, #1D4E9E); color: #ffffff; font-size: 0.8rem; padding: 8px 0; font-weight: 500; font-family: 'Inter', sans-serif; }
    .top-bar:not(.shared-top-bar) { display: none !important; }
    .top-bar-inner { display: flex; justify-content: space-between; align-items: center; max-width: 100%; margin: 0 auto; padding: 0 clamp(20px, 6vw, 100px); }
    .top-contact, .top-links { display: flex; gap: 24px; }
    .top-bar a { color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: color 0.2s ease; }
    .top-bar a:hover { color: #ffffff; }

    .site-header { position: fixed; top: 34px; left: 0; right: 0; z-index: 30; background: rgba(255, 255, 255, 0.95); border-bottom: 1px solid rgba(29, 78, 158, 0.1); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04); animation: headerSlideIn 0.7s cubic-bezier(0.22, 1, 0.36, 1); font-family: 'Inter', sans-serif; }
    .nav-wrap-header { display: grid; grid-template-columns: auto 1fr auto; align-items: center; gap: 24px; padding: 4px clamp(20px, 6vw, 100px); max-width: 100%; margin: 0 auto; }
    
    .brand { display: inline-flex; align-items: center; gap: 12px; text-decoration: none; }
    .brand img { height: 48px; width: auto; object-fit: contain; transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); }
    .brand:hover img { transform: scale(1.06) rotate(-2deg); }

    .site-nav-main { display: flex; justify-content: space-evenly; align-items: center; padding-left: 0; flex-wrap: nowrap; gap: clamp(16px, 2.5vw, 40px); color: #120b1f; font-weight: 600; white-space: nowrap; width: 100%; margin: 0; list-style: none; }
    .site-nav-main > a, .nav-dropdown > a {
        display: inline-flex; align-items: center; justify-content: center; position: relative; padding: 10px 12px; border-radius: 999px; overflow: hidden; color: #120b1f; text-decoration: none; transition: color 0.3s ease, transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.35s ease, background 0.35s ease;
    }
    .site-nav-main > a span, .nav-dropdown > a span { position: relative; z-index: 1; transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1); }
    .site-nav-main > a::before, .nav-dropdown > a::before {
        content: ""; position: absolute; inset: 0; border-radius: inherit; background: linear-gradient(135deg, rgba(29, 78, 158, 0.12), rgba(152, 55, 212, 0.16)); transform: scale(0.82); opacity: 0; transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.3s ease;
    }
    .site-nav-main > a:hover, .site-nav-main > a:focus-visible, .site-nav-main > a.is-current, .nav-dropdown > a:hover, .nav-dropdown > a.is-current { color: var(--blue, #9837d4); transform: translateY(-2px); box-shadow: 0 12px 24px rgba(29, 78, 158, 0.12); }
    .site-nav-main > a:hover span, .site-nav-main > a:focus-visible span, .site-nav-main > a.is-current span, .nav-dropdown > a:hover span, .nav-dropdown > a.is-current span { transform: translateX(4px); }
    .site-nav-main > a:hover::before, .site-nav-main > a:focus-visible::before, .site-nav-main > a.is-current::before, .nav-dropdown > a:hover::before, .nav-dropdown > a.is-current::before { opacity: 1; transform: scale(1); }

    .header-actions { display: flex; align-items: center; gap: 16px; margin-left: auto; }

    .hamburger { display: none; background: transparent; border: none; cursor: pointer; flex-direction: column; gap: 6px; padding: 5px; z-index: 101; position: relative; }
    .hamburger span { display: block; width: 28px; height: 3px; background: var(--text, #0f172a); transition: all 0.3s ease; border-radius: 3px; }
    .hamburger.is-active span { background: var(--green-dark, #153a75); }

    @keyframes headerSlideIn { from { opacity: 0; transform: translateY(-18px); } to { opacity: 1; transform: translateY(0); } }

    /* Dropdown Navigation Styles */
    .nav-dropdown {
        position: relative;
        display: inline-block;
        margin: 0;
    }
    .nav-dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        min-width: 180px;
        box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.12);
        z-index: 1000;
        border-radius: 8px;
        padding: 8px 0;
    }
    .nav-dropdown:hover .nav-dropdown-menu {
        display: block;
    }
    .nav-dropdown-menu a {
        color: var(--text, #333);
        padding: 10px 20px;
        text-decoration: none;
        display: block;
        font-size: 14px;
        font-weight: 500;
        white-space: nowrap;
        transition: background-color 0.2s, color 0.2s;
    }
    .nav-dropdown-menu a:hover {
        background-color: rgba(0, 0, 0, 0.04);
        color: var(--text, #333);
    }
    
    /* Mobile Drawer Dropdown Adjustments (Base drawer styling is managed in style.css) */
    @media (max-width: 1199px) {
        .site-header { top: 0; }
        .top-bar { display: none !important; }
        body { padding-top: 58px; }
        .nav-wrap-header { display: flex; justify-content: space-between; gap: 16px; }
        .hamburger { display: flex; }
        .hamburger.is-active span:nth-child(1) { transform: translateY(9px) rotate(45deg); }
        .hamburger.is-active span:nth-child(2) { opacity: 0; }
        .hamburger.is-active span:nth-child(3) { transform: translateY(-9px) rotate(-45deg); }

        body::after { content: ''; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.4); backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px); z-index: 25; opacity: 0; visibility: hidden; transition: opacity 0.4s ease, visibility 0.4s ease; pointer-events: none; }
        body:has(.site-nav-main.is-active) { overflow: hidden; }
        body:has(.site-nav-main.is-active)::after { opacity: 1; visibility: visible; pointer-events: auto; }

        .site-nav-main {
            position: fixed; top: 0; right: 0; transform: translateX(100%); width: min(340px, 86vw); height: 100vh; background: #ffffff; flex-direction: column; flex-wrap: nowrap; justify-content: flex-start; align-items: flex-start; padding: 96px 24px 32px; gap: 12px; box-shadow: -10px 0 30px rgba(0,0,0,0.1); transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1); z-index: 100; overflow-y: auto;
        }
        .site-nav-main.is-active { transform: translateX(0); }
        .site-nav-main > a, .site-nav-main .nav-dropdown > a {
            display: flex !important;
            justify-content: flex-start !important;
            width: 100%;
            padding: 18px 8px !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 0 !important;
            opacity: 0; transform: translateX(30px); transition: opacity 0.4s ease, transform 0.4s ease, background 0.3s ease, color 0.3s ease, padding-left 0.3s ease;
        }
        .site-nav-main.is-active > a, .site-nav-main.is-active > .nav-dropdown > a { opacity: 1; transform: translateX(0); }
        .site-nav-main .nav-dropdown > a {
            justify-content: space-between !important;
        }
        .site-nav-main a::before {
            display: none !important;
        }
        .site-nav-main > a:hover, .site-nav-main .nav-dropdown > a:hover {
            padding-left: 16px !important;
            background-color: rgba(152, 55, 212, 0.05) !important;
            color: var(--blue, #9837d4);
        }
        .site-nav-main a:hover span { transform: none !important; }
        .nav-dropdown {
            width: 100%;
            display: block;
        }
        .nav-dropdown-menu {
            position: static;
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.02);
            padding: 10px;
            display: none;
            margin-top: 0;
            border-radius: 0 0 8px 8px;
            width: 100%;
        }
        .nav-dropdown:hover .nav-dropdown-menu,
        .nav-dropdown:active .nav-dropdown-menu,
        .nav-dropdown:focus-within .nav-dropdown-menu {
            display: none; /* Disable hover-open on mobile to fix iOS double-tap */
        }
        .nav-dropdown.is-open .nav-dropdown-menu {
            display: flex !important;
            flex-direction: column;
            gap: 4px;
        }
        .nav-dropdown-menu a {
            white-space: normal;
            padding: 10px 15px;
            border-radius: 6px;
            display: block;
            width: 100%;
        }
    }

    @media (max-width: 640px) {
        .brand img { height: 40px; }
        .site-nav-main { padding-top: 80px; width: min(320px, 88vw); padding-left: 18px; padding-right: 18px; }
    }
</style>
<div class="top-bar shared-top-bar">
    <div class="container top-bar-inner">
        <div class="top-contact">
            <a href="mailto:info@mithilasoftech.com">&#9993; info@mithilasoftech.com</a>
            <a href="tel:+919971921698">&#128222; +91 99719 21698</a>
        </div>
        <div class="top-links">
            <a href="<?php echo $base_link; ?>#contact">Support</a>
        </div>
    </div> 
</div>
<header class="site-header">
    <div class="container nav-wrap nav-wrap-header">
        <a class="brand" href="<?php echo $home_link; ?>">
            <img src="<?php echo htmlspecialchars($logo_path ?? 'assets/image/ms.png'); ?>" alt="<?php echo htmlspecialchars($company ?? 'Mithila Softech'); ?> Logo">
        </a>
        <nav class="site-nav site-nav-main" id="main-nav">
            <?php foreach ($nav_items as $item): ?>
                <?php if (isset($item['dropdown'])): ?>
                    <?php 
                        $isActiveDropdown = false;
                        foreach ($item['dropdown'] as $sub) {
                            if (($activePage ?? 'home') === $sub['key']) $isActiveDropdown = true;
                        }
                    ?>
                    <div class="nav-dropdown">
                        <a href="<?php echo $item['href']; ?>" class="<?php echo $isActiveDropdown ? 'is-current' : ''; ?>" aria-haspopup="true" aria-expanded="false">
                            <span><?php echo htmlspecialchars($item['label']); ?> &#9662;</span>
                        </a>
                        <div class="nav-dropdown-menu">
                            <?php foreach ($item['dropdown'] as $subItem): ?>
                            <a href="<?php echo $subItem['href']; ?>">
                                    <?php echo htmlspecialchars($subItem['label']); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo $item['href']; ?>" class="<?php echo (($activePage ?? 'home') === $item['key']) ? 'is-current' : ''; ?>" <?php echo (($activePage ?? 'home') === $item['key']) ? 'aria-current="page"' : ''; ?>>
                        <span><?php echo htmlspecialchars($item['label']); ?></span>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav> 
        <div class="header-actions">
            <button class="hamburger" id="hamburger-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-nav">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<!-- Sticky Free Quote Button -->
<a href="index.php#contact" class="sticky-free-quote" aria-label="Get a Free Quote">Free Quote</a>

<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.top-bar:not(.shared-top-bar)').forEach((bar) => {
        bar.remove();
    });

    // Hamburger Menu Toggle Logic
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainNav = document.getElementById('main-nav');
    
    if (hamburgerBtn && mainNav && !window.hamburgerInitialized) {
        window.hamburgerInitialized = true;
        hamburgerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            const isActive = mainNav.classList.toggle('is-active');
            hamburgerBtn.classList.toggle('is-active');
            hamburgerBtn.setAttribute('aria-expanded', isActive);
        }, true);

        // Close menu when clicking outside of it
        document.addEventListener('click', (e) => {
            if (mainNav.classList.contains('is-active') && !mainNav.contains(e.target) && !hamburgerBtn.contains(e.target)) {
                mainNav.classList.remove('is-active');
                hamburgerBtn.classList.remove('is-active');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu on link click (useful for mobile anchor navigation)
        mainNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (!link.nextElementSibling || !link.nextElementSibling.classList.contains('nav-dropdown-menu')) {
                    mainNav.classList.remove('is-active');
                    hamburgerBtn.classList.remove('is-active');
                    hamburgerBtn.setAttribute('aria-expanded', 'false');
                }
            });
        });

        // Mobile Dropdown Toggle (Tap once to open, tap again to navigate)
        mainNav.querySelectorAll('.nav-dropdown > a').forEach(dropdownToggle => {
            dropdownToggle.addEventListener('click', (e) => {
                if (window.innerWidth <= 1199) {
                    const parent = dropdownToggle.parentElement;
                    if (!parent.classList.contains('is-open')) {
                        e.preventDefault(); // Stop navigation to open the menu
                        mainNav.querySelectorAll('.nav-dropdown').forEach(dropdown => {
                            if (dropdown !== parent) {
                                dropdown.classList.remove('is-open');
                            }
                        });
                        parent.classList.add('is-open');
                    }
                }
            });
        });
    }

        // --- Global Slider Buttons Injection ---
        if (!window.globalSliderInitialized) {
            window.globalSliderInitialized = true;
            const gridsToSlide = document.querySelectorAll('.service-features-grid, .tech-stack-grid, .process-grid, .why-choose-list, .srv-card-grid, .stats-grid, .testimonial-grid, .benefit-grid, .blog-grid, .mission-vision-grid, .global-presence-grid, .spread-cards, .cs-grid, .sgm-grid, .sd-grid, .life-grid, .pricing-grid');
            
            gridsToSlide.forEach(grid => {
                // Skip if already wrapped
                if (grid.parentElement.classList.contains('global-slider-wrapper')) return;

                const wrapper = document.createElement('div');
                wrapper.className = 'global-slider-wrapper';
                
                grid.parentNode.insertBefore(wrapper, grid);
                wrapper.appendChild(grid);
                
                const prevBtn = document.createElement('button');
                prevBtn.className = 'global-scroll-btn global-prev-btn';
                prevBtn.setAttribute('aria-label', 'Scroll Left');
                prevBtn.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>';
                prevBtn.onclick = () => {
                    const firstChild = grid.firstElementChild;
                    const gap = parseInt(window.getComputedStyle(grid).gap) || 20;
                    const scrollAmount = firstChild ? (firstChild.offsetWidth + gap) : 360;
                    grid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                };
                
                const nextBtn = document.createElement('button');
                nextBtn.className = 'global-scroll-btn global-next-btn';
                nextBtn.setAttribute('aria-label', 'Scroll Right');
                nextBtn.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>';
                nextBtn.onclick = () => {
                    const firstChild = grid.firstElementChild;
                    const gap = parseInt(window.getComputedStyle(grid).gap) || 20;
                    const scrollAmount = firstChild ? (firstChild.offsetWidth + gap) : 360;
                    grid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                };
                
                wrapper.appendChild(prevBtn);
                wrapper.appendChild(nextBtn);

                const checkScroll = () => {
                    const isScrollable = grid.scrollWidth > grid.clientWidth + 2;
                    if (!isScrollable) {
                        prevBtn.style.display = 'none';
                        nextBtn.style.display = 'none';
                    } else {
                        const isAtStart = grid.scrollLeft <= 10;
                        const isAtEnd = Math.ceil(grid.scrollLeft + grid.clientWidth) >= grid.scrollWidth - 10;
                        prevBtn.style.display = isAtStart ? 'none' : 'flex';
                        nextBtn.style.display = isAtEnd ? 'none' : 'flex';
                    }
                };
                
                checkScroll();
                window.addEventListener('resize', checkScroll);
                grid.addEventListener('scroll', checkScroll, { passive: true });
                setTimeout(checkScroll, 500); 
                setTimeout(checkScroll, 1500);
                setTimeout(checkScroll, 3000);
            });
        }
});
</script>
