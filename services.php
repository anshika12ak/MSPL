<?php
$activePage = 'services';
$title = 'Our Services | Mithila Softech';

$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = $base_dir === '/' ? '/' : $base_dir . '/';

// Data for Detailed Services (Adapted from your home page motion components)
$categories = [
  [
    'id' => 'web',
    'label' => 'Web & E-Commerce',
    'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>'
  ],
  [
    'id' => 'mktg',
    'label' => 'Marketing & Branding',
    'icon' => '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>'
  ],
  [
    'id' => 'app',
    'label' => 'App Development',
    'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>'
  ],
  [
    'id' => 'tech',
    'label' => 'Recruitment Services',
    'icon' => '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line>'
  ],
];

$tab_desc = [
  'web' => 'Our web and e-commerce agency transforms how clients and customers meet online — creating aesthetically functional experiences that grow your business.',
  'mktg' => 'Data-driven marketing strategies tailored for the Indian market — build your brand story and turn clicks into loyal customers.',
  'app' => 'We specialise in Flutter and React Native app development — delivering cross-platform mobile apps with native performance, beautiful UI, and end-to-end support.',
  'tech' => 'Cutting-edge technology solutions — from custom software to AI — engineered to streamline your operations and accelerate growth.',
];

$services = [
  'web' => [
    ['title' => 'Website Design & Development', 'link' => 'website-design', 'desc' => 'Custom responsive websites built with modern frameworks that open your business to new possibilities.', 'color' => '#1D4E9E', 'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>'],
    ['title' => 'E-Commerce Development', 'link' => 'ecommerce-development', 'desc' => 'Full-featured online stores powered by human-centred design, seamless checkout flows, and scalable management.', 'color' => '#1D4E9E', 'icon' => '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>'],
    ['title' => 'Dynamic Web Applications', 'link' => 'web-applications', 'desc' => 'Data-driven portals, dashboards and PWAs that go beyond static pages to deliver real-time experiences.', 'color' => '#1D4E9E', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'],
  ],
  'mktg' => [
    ['title' => 'Social Media Marketing', 'link' => 'social-media-marketing', 'desc' => 'Engaging content strategies across Facebook, Instagram, LinkedIn and YouTube that build community and drive growth.', 'color' => '#9837d4', 'icon' => '<circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>'],
    ['title' => 'Search Engine Optimization', 'link' => 'seo-services', 'desc' => 'Technical SEO, on-page optimization and link-building campaigns that push you to the top of Google rankings.', 'color' => '#9837d4', 'icon' => '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>'],
    ['title' => 'Google & Meta Ads', 'link' => 'digital-ads', 'desc' => 'Data-driven paid campaigns with precise audience targeting, creative A/B testing, and measurable ROAS.', 'color' => '#9837d4', 'icon' => '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>'],
  ],
  'app' => [
    ['title' => 'Cross-Platform Development', 'link' => 'app-development', 'desc' => 'Build stunning, natively compiled apps for Android & iOS from a single codebase using React Native & Flutter.', 'color' => '#E31E24', 'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>'],
    ['title' => 'UI/UX Design & Prototyping', 'link' => 'ui-ux-design', 'desc' => 'User-centred mobile design with interactive Figma prototypes, wireframes, user-flow mapping.', 'color' => '#E31E24', 'icon' => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line>'],
    ['title' => 'App Deployment & Support', 'link' => 'app-support', 'desc' => 'End-to-end launch support — app store listing, ASO, CI/CD pipelines, bug fixes, and feature updates.', 'color' => '#E31E24', 'icon' => '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line>'],
  ],
  'tech' => [
    ['title' => 'Custom Software Solutions', 'link' => 'custom-software', 'desc' => 'Bespoke ERP, CRM and SaaS products engineered to your exact business processes and scale effortlessly.', 'color' => '#22a84b', 'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'],
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo $base_url; ?>">
    <title>IT Services Company India | Software & Digital Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        /* Specific Styles for Services Page Header & Tabs */
        .srv-bg-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            z-index: 0;
            opacity: 0.6;
            animation: srvOrbDrift 10s ease-in-out infinite;
            pointer-events: none;
        }
        
        @keyframes srvOrbDrift {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }

        /* --- Services Hero (Matched to Home Page Theme) --- */
        .srv-hero-wrapper {
            text-align: center;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            background-size: cover;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            position: relative;
            z-index: 1;
            padding: 100px 0 80px;
        }
        .srv-hero-bg-orb1, .srv-hero-bg-orb2 {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            z-index: -1;
            opacity: 0.45;
            animation: srvHeroOrbDrift 10s alternate infinite ease-in-out;
        }
        .srv-hero-bg-orb1 { top: -10%; left: -10%; width: 40vw; height: 40vw; background: #1d4ed8; }
        .srv-hero-bg-orb2 { bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: #38bdf8; animation-duration: 12s; animation-direction: alternate-reverse; }
        @keyframes srvHeroOrbDrift { 
            0% { transform: translate(0, 0); } 
            100% { transform: translate(40px, 40px); } 
        }
        .srv-hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 18px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 24px;
            border: 1px solid rgba(255,255,255,0.15);
            /* Animation */
            opacity: 0;
            animation: srvFadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.05s;
        }
        .srv-hero-headline {
            font-size: clamp(2.8rem, 5vw, 4.2rem);
            font-weight: 800;
            line-height: 1.05;
            margin: 0 0 12px 0;
            color: #ffffff;
            /* Animation */
            opacity: 0;
            animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.1s;
        }
        .srv-hero-headline-accent { 
            background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
            background-clip: text;
        }
        .srv-hero-subtext {
            font-size: 1.125rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
            margin: 0 auto 36px;
            max-width: 700px;
            /* Animation */
            opacity: 0;
            animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s;
        }

        @keyframes srvFadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 768px) {
            .srv-hero-wrapper { padding: 80px 0 60px; }
            .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
            .srv-category-section { padding: 28px 0; }
            .srv-card-grid { margin-top: 30px; gap: 20px; }
            .srv-card { padding: 24px; flex: 1 1 100% !important; max-width: 100% !important; }
            .contact-section { padding: 28px 0; }
            .contact-copy h2 { font-size: clamp(2.2rem, 6vw, 3rem); }
            .contact-form-wrap { padding: 30px 20px; }
        }
        
        /* Specific Styles for Category Sections */
        .srv-category-section {
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--line);
        }
        .srv-cat-icon-main {
            width: 80px; height: 80px;
            margin: 0 auto 24px;
            border-radius: 24px;
            display: flex; align-items: center; justify-content: center;
            border: 1px solid;
            box-shadow: var(--shadow);
        }
        .srv-category-section .section-heading h2 {
            font-size: clamp(2.2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 16px;
        }
        .srv-category-section .section-heading p {
            font-size: 1.1rem;
            line-height: 1.75;
            max-width: 800px;
            margin: 0 auto;
        }
        .srv-card-grid { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: center; 
            gap: 30px; 
            margin-top: 40px; 
            align-items: stretch;
        }
        
        .srv-card {
            flex: 0 1 calc(33.333% - 20px);
            min-width: 300px;
            max-width: 380px;
            width: 100%;
            background: var(--card); border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 24px; padding: 32px; box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05); height: 100%;
            position: relative; overflow: hidden; display: flex; flex-direction: column;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
        }
        .srv-card:hover { transform: translateY(-10px); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; }
        
        .srv-card-overlay { position: absolute; inset: 0; background: var(--hover-grad); opacity: 0; transition: opacity 0.4s ease; z-index: 1; }
        .srv-card:hover .srv-card-overlay { opacity: 1; }
        
        .srv-card-accent { position: absolute; top: 0; left: 0; right: 0; height: 4px; background: var(--hover-grad); z-index: 2; opacity: 0.7; transition: opacity 0.3s ease; }
        .srv-card:hover .srv-card-accent { opacity: 0; }
        
        .srv-card-content { position: relative; z-index: 2; display: flex; flex-direction: column; height: 100%; }
        
        .srv-card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px; }
        
        .srv-card-icon { 
            width: 54px; height: 54px; border-radius: 16px; display: flex; align-items: center; justify-content: center; 
            background: var(--hover-grad); color: #fff; box-shadow: 0 4px 16px rgba(0,0,0,0.12); 
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, border 0.3s ease;
        }
        .srv-card:hover .srv-card-icon { transform: scale(1.1) rotate(-5deg); box-shadow: 0 6px 24px rgba(255,255,255,0.25); background: rgba(255,255,255,0.2) !important; border: 1.5px solid rgba(255,255,255,0.35); }
        
        .srv-card-arrow {
            width: 38px; height: 38px; border-radius: 50%;
            background: rgba(0,0,0,0.04); color: var(--muted); transition: all 0.35s ease;
            display: flex; align-items: center; justify-content: center;
            text-decoration: none; position: relative; z-index: 5;
        }
        .srv-card:hover .srv-card-arrow { background: rgba(255,255,255,0.2); color: #fff; transform: translate(3px, -3px); }
        
        .srv-card h3 { font-size: 1.35rem; font-weight: 700; color: var(--text); margin: 0 0 12px; line-height: 1.4; transition: color 0.35s ease; }
        .srv-card:hover h3 { color: #fff; }
        .srv-card p { font-size: 1rem; color: var(--muted); line-height: 1.6; margin: 0; flex-grow: 1; transition: color 0.35s ease; }
        .srv-card:hover p { color: rgba(255,255,255,0.8); }
        
        /* Scroll Reveal */
        .reveal { 
            opacity: 0; transform: translateY(36px) scale(0.96); 
            transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); 
        }
        .reveal.active { opacity: 1; transform: translateY(0) scale(1); }
    </style>
    <meta name="description" content="Comprehensive IT services including software development, web, mobile apps &amp; marketing.">
    <meta name="keywords" content="IT services India, software services">
    <link rel="canonical" href="https://www.mithilasoftech.com/services" />
</head>
<body>

<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">💡 &nbsp; What We Offer</span>
        <h1 class="srv-hero-headline">Complete IT Services &amp; <br><span class="srv-hero-headline-bold">Digital Solutions <span class="srv-hero-headline-accent">in India</span></span></h1>
        <p class="srv-hero-subtext">A complete suite of digital solutions — from responsive websites and mobile apps to cutting-edge IT services — tailored to accelerate your business growth.</p> 
    </div>
</section>

<!-- ── Detailed Service Sections ── -->
<?php foreach ($categories as $index => $cat): 
    $cat_id = $cat['id'];
    $cat_desc = $tab_desc[$cat_id];
    $cat_services = $services[$cat_id];
    // Get main color from the first service in the category to use as theme color
    $theme_color = $cat_services[0]['color'];
    $bg_style = ($index % 2 === 1) ? 'background: var(--bg-alt);' : 'background: #ffffff;';
?>
<section class="section srv-category-section" style="<?= $bg_style ?>" id="<?= $cat_id ?>">
    <!-- Decorative Ambient Orb -->
    <div class="srv-bg-orb" style="width: 350px; height: 350px; background: <?= htmlspecialchars($theme_color) ?>12; top: -50px; <?= ($index % 2 === 0) ? 'right: -100px;' : 'left: -100px;' ?>"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-heading center reveal">
            <div class="srv-cat-icon-main" style="color: <?= htmlspecialchars($theme_color) ?>; background: <?= htmlspecialchars($theme_color) ?>10; border-color: <?= htmlspecialchars($theme_color) ?>25;">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <?= $cat['icon'] ?>
                </svg>
            </div>
            <h2><?= htmlspecialchars($cat['label']) ?></h2>
            <p><?= htmlspecialchars($cat_desc) ?></p>
        </div>

        <div class="srv-card-grid text-left">
            <?php foreach ($cat_services as $i => $svc): 
                $hover_grad = ($i % 2 === 0) ? 'linear-gradient(135deg, #1D4E9E 0%, #153a75 100%)' : 'linear-gradient(135deg, #9837d4 0%, #7528a8 100%)';
            ?>
                <article class="srv-card reveal" style="--hover-grad: <?= $hover_grad ?>; transition-delay: <?= $i * 0.1 ?>s;">
                    <div class="srv-card-overlay"></div>
                    <div class="srv-card-accent"></div>
                    <div class="srv-card-content">
                        <div class="srv-card-top">
                            <div class="srv-card-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <?= $svc['icon'] ?>
                                </svg>
                            </div>
                            <a href="<?= htmlspecialchars($svc['link'] ?? '#') ?>" class="srv-card-arrow" aria-label="Learn more about <?= htmlspecialchars($svc['title']) ?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                                </svg>
                            </a>
                        </div>
                        <h3><a href="<?= htmlspecialchars($svc['link'] ?? '#') ?>" style="text-decoration: none; color: inherit;"><?= htmlspecialchars($svc['title']) ?></a></h3>
                        <p><?= htmlspecialchars($svc['desc']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- ── Contact CTA Section ── -->
<section class="section contact-section" id="contact" style="position: relative; border-top: 1px solid rgba(255,255,255,0.05); padding: 60px 0;">
    <!-- Decorative Glowing Orb -->
    <div style="position: absolute; top: 50%; right: 0; width: 800px; height: 800px; background: radial-gradient(circle, rgba(56,189,248,0.12) 0%, transparent 70%); transform: translateY(-50%); pointer-events: none; z-index: 0;"></div>
    
    <div class="container" style="max-width: 650px; position: relative; z-index: 2;">
        <div class="section-heading center reveal" style="text-align: center; margin-bottom: 24px;">
            <span class="eyebrow" style="background: rgba(56,189,248,0.1); color: #38bdf8; border: 1px solid rgba(56,189,248,0.3); margin-bottom: 12px; display: inline-flex;">🚀 Ready to scale?</span>
            <h2 style="color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 12px; font-weight: 800;">
                Let's build something <br>
                <span style="background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">extraordinary</span>
            </h2>
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.95rem;">Fill out the form below to share your requirements and our team will connect with you.</p>
        </div>
        
        <div class="contact-form-wrap reveal" style="transition-delay: 0.2s; box-shadow: 0 30px 60px rgba(0,0,0,0.6), inset 0 0 20px rgba(255,255,255,0.05);">
            <form class="contact-form" action="#" method="POST">
                <div class="form-row">
                    <label>Name<input type="text" name="name" placeholder="John Doe" required></label>
                    <label>Phone<input type="tel" name="phone" placeholder="+91 98765 43210" required></label>
                </div>
                <label>Email<input type="email" name="email" placeholder="john@example.com" required></label>
                <label>Service Required
                    <select name="service" style="width: 100%; border: 2px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 12px 16px; font: inherit; background: rgba(0,0,0,0.4); color: #fff; transition: all 0.3s ease; font-size: 0.95rem; -webkit-appearance: none;">
                        <option value="" disabled selected style="color: rgba(255,255,255,0.4);">Select a service...</option>
                        <option value="web" style="color: #000;">Web Development</option>
                        <option value="app" style="color: #000;">Mobile App Development</option>
                        <option value="marketing" style="color: #000;">Digital Marketing</option>
                        <option value="software" style="color: #000;">Custom Software/ERP</option>
                        <option value="other" style="color: #000;">Other IT Solutions</option>
                    </select>
                </label>
                <label>Project Details<textarea name="message" rows="4" placeholder="Tell us about your project..." required></textarea></label>
                <button type="submit" class="button button-primary">Get a Free Quote</button>
                <div class="success-message" id="form-success">Message sent!</div>
            </form>
        </div>
    </div>
</section>

<?php include 'footer-new.php'; ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    // --- Scroll Reveal Intersections ---
    // Mobile Menu Toggle
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mainNav = document.getElementById('main-nav');
    if (hamburgerBtn && mainNav) {
        hamburgerBtn.addEventListener('click', () => {
            const isActive = mainNav.classList.toggle('is-active');
            hamburgerBtn.classList.toggle('is-active');
            hamburgerBtn.setAttribute('aria-expanded', isActive);
        });
    }

    const observerOptions = { threshold: 0.15 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const successMsg = document.getElementById('form-success');
            if (successMsg) successMsg.style.display = 'block';
            e.target.reset();
        });
    }
});
</script>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
</body>
</html>
