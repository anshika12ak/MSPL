<?php


$services = [
  [
    'title' => 'Web Development',
    'desc' => 'Custom websites, e-commerce portals, admin dashboards & PWAs built with modern tech stacks.',
    'tags' => ['React', 'Next.js', 'WordPress', 'E-Commerce'],
    'gradient' => 'linear-gradient(135deg, #6722a8, #1a7a37)',
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
    'gradient' => 'linear-gradient(135deg, #2ed060, #22a84b)',
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
  ],
  [
    'title' => 'Cyber Security',
    'desc' => 'Website audits, SSL, data protection compliance, firewall setup & threat monitoring.',
    'tags' => ['SSL', 'Firewall', 'VAPT', 'Compliance'],
    'gradient' => 'linear-gradient(135deg, #9837d4, #153a75)',
    // FiShield
    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
  ]
];
?>

<style>
    /* --- Scoped Styles for Services Motion Grid --- */
    .sgm-section {
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    /* Background Decorations */
    .sgm-bg-orb1, .sgm-bg-orb2 {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        z-index: 1;
        opacity: 0.5;
    }
    .sgm-bg-orb1 {
        width: 400px;
        height: 400px;
        background: rgba(34, 168, 75, 0.15); /* Greenish orb */
        top: -100px;
        left: -100px;
    }
    .sgm-bg-orb2 {
        width: 350px;
        height: 350px;
        background: rgba(152, 55, 212, 0.12); /* Purplish orb */
        bottom: -50px;
        right: -100px;
    }

    .sgm-container {
        width: 100%;
        padding: 0 20px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* Header Animation (Replaces framer-motion) */
    .sgm-header {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 60px auto;
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .sgm-header.sgm-in-view {
        opacity: 1;
        transform: translateY(0);
    }

    .sgm-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 18px;
        border-radius: 999px;
        background: rgba(34, 168, 75, 0.1);
        color: #22a84b;
        font-weight: 700;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
    .sgm-title {
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        font-weight: 800;
        color: #1a202c;
        line-height: 1.15;
        margin: 0 0 16px 0;
    }
    .sgm-title span {
        color: #1e88e5;
    }
    .sgm-subtitle {
        font-size: 1.1rem;
        color: #4a5568;
        line-height: 1.7;
        margin: 0;
    }

    /* Grid */
    .sgm-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    /* Card Animation (Replaces framer-motion) */
    .sgm-card {
        position: relative;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 24px;
        padding: 32px;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        
        opacity: 0;
        transform: translateY(44px) scale(0.94);
        transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), 
                    transform 0.6s cubic-bezier(0.22, 1, 0.36, 1),
                    box-shadow 0.3s ease;
    }
    .sgm-card.sgm-in-view {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
    .sgm-card:hover {
        transform: translateY(-8px) scale(1);
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
    }

    /* Card Decorations */
    .sgm-card-overlay {
        position: absolute;
        inset: 0;
        background: var(--sgm-gradient);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 0;
    }
    .sgm-card:hover .sgm-card-overlay { opacity: 0.04; }
    
    .sgm-card-accent {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: var(--sgm-gradient);
        z-index: 1;
    }

    /* Card Content */
    .sgm-card-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .sgm-card-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 24px;
    }
    .sgm-icon-box {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: var(--sgm-gradient);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    .sgm-card-arrow {
        color: #cbd5e1;
        transition: transform 0.3s ease, color 0.3s ease;
    }
    .sgm-card:hover .sgm-card-arrow {
        transform: translate(4px, -4px);
        color: #1a202c;
    }
    
    .sgm-card-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1a202c;
        margin: 0 0 12px 0;
    }
    .sgm-card-desc {
        font-size: 1rem;
        color: #4a5568;
        line-height: 1.6;
        margin: 0 0 24px 0;
        flex-grow: 1;
    }
    .sgm-card-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .sgm-tag {
        font-size: 0.75rem;
        font-weight: 600;
        background: #f1f5f9;
        color: #475569;
        padding: 6px 12px;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.02);
    }

    /* View All Button */
    .sgm-view-all {
        text-align: center;
        margin-top: 50px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .sgm-view-all.sgm-in-view {
        opacity: 1;
        transform: translateY(0);
    }
    .sgm-view-all-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        border-radius: 999px;
        font-weight: 600;
        background: transparent;
        color: #1a202c;
        border: 2px solid #e2e8f0;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .sgm-view-all-btn:hover {
        transform: translateY(-2px);
        border-color: #1e88e5;
        color: #1e88e5;
        box-shadow: 0 8px 16px rgba(30, 136, 229, 0.1);
    }
</style>

<section class="section sgm-section" id="services-grid">
    <div class="sgm-bg-orb1"></div>
    <div class="sgm-bg-orb2"></div>

    <div class="sgm-container">
        
        <div class="sgm-header sgm-reveal">
            <span class="sgm-badge">What We Offer</span>
            <h2 class="sgm-title">Our <span>Core Services</span></h2>
            <p class="sgm-subtitle">A comprehensive suite of digital services designed to accelerate growth for businesses and citizens across India.</p>
        </div>

        <div class="sgm-grid">
            <?php foreach ($services as $index => $svc): ?>
                <div class="sgm-card sgm-reveal" style="--sgm-gradient: <?php echo $svc['gradient']; ?>; transition-delay: <?php echo ($index * 0.1); ?>s;">
                    
                    <div class="sgm-card-overlay"></div>
                    <div class="sgm-card-accent"></div>
                    
                    <div class="sgm-card-content">
                        <div class="sgm-card-top">
                            <div class="sgm-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <?php echo $svc['icon']; ?>
                                </svg>
                            </div>
                            <div class="sgm-card-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                                </svg>
                            </div>
                        </div>

                        <h3 class="sgm-card-title"><?php echo htmlspecialchars($svc['title']); ?></h3>
                        <p class="sgm-card-desc"><?php echo htmlspecialchars($svc['desc']); ?></p>

                        <div class="sgm-card-tags">
                            <?php foreach ($svc['tags'] as $tag): ?>
                                <span class="sgm-tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sgm-view-all sgm-reveal" style="transition-delay: 0.3s;">
            <a href="services.php" class="sgm-view-all-btn">
                View All Services 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>