<?php
/**
 * Services Grid Component
 * Translated from React (ServicesGrid.jsx) to PHP / Native CSS Animations
 */

$services = [
  [
    'title' => 'Web Development',
    'desc' => 'Custom websites, e-commerce portals, admin dashboards & PWAs built with modern tech stacks.',
    'tags' => ['React', 'Next.js', 'WordPress', 'E-Commerce'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E, #153a75)',
    // FiGlobe
    'icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>'
  ],
  [
    'title' => 'Digital Marketing',
    'desc' => 'Data-driven SEO, Google Ads, Meta campaigns & social media strategies that convert.',
    'tags' => ['SEO', 'Google Ads', 'Meta Ads', 'Analytics'],
    'gradient' => 'linear-gradient(135deg, #9837d4, #7528a8)',
    // FiTrendingUp
    'icon' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>'
  ],
  [
    'title' => 'Government e-Services',
    'desc' => 'CSC, Aadhaar enrollment, PAN card, NSDL, passport & all citizen digital services facilitation.',
    'tags' => ['CSC', 'Aadhaar', 'PAN', 'NSDL'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E, #153a75)',
    // BsBuilding equivalent
    'icon' => '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/>'
  ],
  [
    'title' => 'Mobile App Development',
    'desc' => 'Native Android & iOS apps, cross-platform solutions using React Native & Flutter.',
    'tags' => ['React Native', 'Flutter', 'Android', 'iOS'],
    'gradient' => 'linear-gradient(135deg, #9837d4, #7528a8)',
    // FiSmartphone
    'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>'
  ],
  [
    'title' => 'Custom IT Solutions',
    'desc' => 'ERP, CRM, inventory management & bespoke software tailored to your business needs.',
    'tags' => ['ERP', 'CRM', 'SaaS', 'API'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E, #7528a8)',
    // FiCpu
    'icon' => '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>'
  ]
];
?>

<style>
    /* --- Services Grid Component Scoped Styles --- */
    .sg-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, var(--green-dark, #153a75) 0%, var(--blue-dark, #4c226a) 100%);
        font-family: 'Inter', sans-serif;
    }

    /* Background Decorations */
    .sg-bg-orb1, .sg-bg-orb2 {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        z-index: 1;
        opacity: 0.5;
    }
    .sg-bg-orb1 {
        width: 400px;
        height: 400px;
        background: rgba(29, 78, 158, 0.08); /* Bluish orb */
        top: -100px;
        left: -100px;
    }
    .sg-bg-orb2 {
        width: 350px;
        height: 350px;
        background: rgba(152, 55, 212, 0.08); /* Purplish orb */
        bottom: -50px;
        right: -100px;
    }

    .sg-container {
        width: 100%;
        padding: 0 20px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* Header */
    .sg-header {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 60px auto;
    }
    .sg-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-weight: 700;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
    .sg-title {
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.15;
        margin: 0 0 16px 0;
    }
    .sg-title span {
        background: linear-gradient(135deg, #89b3ff, #e0cff0);
        -webkit-background-clip: text;
        color: transparent;
    }
    .sg-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.7;
        margin: 0;
    }

    /* Grid & Cards */
    .sg-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        align-items: stretch;
    }
    .sg-card {
        flex: 0 1 calc(33.333% - 20px);
        min-width: 300px;
        max-width: 380px;
        width: 100%;
        position: relative;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 32px;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }
    @media (max-width: 768px) {
        .sg-card { flex: 1 1 100%; max-width: 100%; }
    }
    .sg-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.3);
    }

    /* Card Decorations */
    .sg-card-overlay {
        position: absolute;
        inset: 0;
        background: var(--sg-gradient);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 0;
    }
    .sg-card:hover .sg-card-overlay {
        opacity: 0.04;
    }
    .sg-card-accent {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--sg-gradient);
        z-index: 1;
    }

    /* Card Content */
    .sg-card-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .sg-card-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 24px;
    }
    .sg-icon-box {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: var(--sg-gradient);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    .sg-card-arrow {
        color: rgba(255, 255, 255, 0.5);
        transition: transform 0.3s ease, color 0.3s ease;
    }
    .sg-card:hover .sg-card-arrow {
        transform: translate(4px, -4px);
        color: #ffffff;
    }
    
    .sg-card-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 12px 0;
    }
    .sg-card-desc {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin: 0 0 24px 0;
        flex-grow: 1;
    }
    .sg-card-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .sg-tag {
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 6px 12px;
        border-radius: 8px;
    }

    /* View All Button */
    .sg-view-all {
        text-align: center;
        margin-top: 50px;
    }
    .sg-view-all-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        border-radius: 999px;
        font-weight: 600;
        background: transparent;
        color: #ffffff;
        border: 2px solid rgba(255, 255, 255, 0.3);
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .sg-view-all-btn:hover {
        transform: translateY(-2px);
        border-color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* --- Animations --- */
    .sg-reveal {
        opacity: 0;
        transform: translateY(32px) scale(0.96);
        transition: opacity 0.6s ease, transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .sg-reveal.sg-in-view {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
</style>

<section class="section sg-section" id="services-grid">
    <div class="sg-bg-orb1"></div>
    <div class="sg-bg-orb2"></div>

    <div class="sg-container">
        
        <div class="sg-header sg-reveal">
            <span class="sg-badge">What We Offer</span>
            <h2 class="sg-title">Our <span>Core Services</span></h2>
            <p class="sg-subtitle">A comprehensive suite of digital services designed to accelerate growth for businesses and citizens across India.</p>
        </div>

        <div class="sg-grid">
            <?php foreach ($services as $index => $svc): ?>
                <div class="sg-card sg-reveal" style="--sg-gradient: <?php echo $svc['gradient']; ?>; transition-delay: <?php echo ($index * 0.1); ?>s;">
                    
                    <div class="sg-card-overlay"></div>
                    <div class="sg-card-accent"></div>
                    
                    <div class="sg-card-content">
                        <div class="sg-card-top">
                            <div class="sg-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <?php echo $svc['icon']; ?>
                                </svg>
                            </div>
                            <div class="sg-card-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                                </svg>
                            </div>
                        </div>

                        <h3 class="sg-card-title"><?php echo htmlspecialchars($svc['title']); ?></h3>
                        <p class="sg-card-desc"><?php echo htmlspecialchars($svc['desc']); ?></p>

                        <div class="sg-card-tags">
                            <?php foreach ($svc['tags'] as $tag): ?>
                                <span class="sg-tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sg-view-all sg-reveal" style="transition-delay: 0.3s;">
            <a href="services.php" class="sg-view-all-btn">
                View All Services 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const observerOptions = { threshold: 0.15 };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("sg-in-view");
                // Once it's in view, we unobserve it so the animation runs only once (similar to viewport: { once: true })
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.sg-reveal').forEach(el => observer.observe(el));
});
</script>