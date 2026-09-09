<?php


$core_services = [
  [
    'title' => 'Web Development',
    'link' => 'website-design',
    'desc' => 'Custom websites, e-commerce portals, admin dashboards & PWAs built with modern tech stacks.',
    'tags' => ['React', 'Next.js', 'WordPress', 'E-Commerce'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E 0%, #153a75 100%)',
    // FiGlobe
    'icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>'
  ],
  [
    'title' => 'Digital Marketing',
    'link' => 'digital-marketing',
    'desc' => 'Data-driven SEO, Google Ads, Meta campaigns & social media strategies that convert.',
    'tags' => ['SEO', 'Google Ads', 'Meta Ads', 'Analytics'],
    'gradient' => 'linear-gradient(135deg, #662D91 0%, #4c226a 100%)',
    'gradient' => 'linear-gradient(135deg, #9837d4 0%, #7528a8 100%)',
    // FiTrendingUp
    'icon' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>'
  ],
  [
    'title' => 'Recruitment Services',
    'link' => 'recruitment-services',
    'desc' => 'End-to-end IT talent acquisition, executive search, and staffing solutions for growing businesses.',
    'tags' => ['IT Staffing', 'Executive Search', 'Talent', 'HR'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E 0%, #153a75 100%)',
    // FiUsers
    'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>'
  ],
  [
    'title' => 'Mobile App Development',
    'link' => 'app-development',
    'desc' => 'Native Android & iOS apps, cross-platform solutions using React Native & Flutter.',
    'tags' => ['React Native', 'Flutter', 'Android', 'iOS'],
    'gradient' => 'linear-gradient(135deg, #662D91 0%, #4c226a 100%)',
    'gradient' => 'linear-gradient(135deg, #9837d4 0%, #7528a8 100%)',
    // FiSmartphone
    'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>'
  ],
  [
    'title' => 'Custom IT Solutions',
    'link' => 'custom-software',
    'desc' => 'ERP, CRM, inventory management & bespoke software tailored to your business needs.',
    'tags' => ['ERP', 'CRM', 'SaaS', 'API'],
    'gradient' => 'linear-gradient(135deg, #1D4E9E 0%, #4c226a 100%)',
    'gradient' => 'linear-gradient(135deg, #1D4E9E 0%, #7528a8 100%)',
    // FiCpu
    'icon' => '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>'
  ]
];
?>

<section class="section cs-section" id="core-services">
    <div class="cs-bg-orb1"></div>
    <div class="cs-bg-orb2"></div>

    <div class="cs-container">

        <div class="section-heading center cs-reveal">
            <span class="eyebrow">What We Offer</span>
            <h2>Our <span>Core Services</span></h2>
            <p>
                A comprehensive suite of digital services designed to accelerate growth
                for businesses and citizens across India.
            </p>
        </div>

        <div class="cs-grid">
            <?php foreach (array_slice($core_services, 0, 3) as $index => $svc): ?>
                <div class="cs-card cs-reveal" style="--cs-gradient: <?php echo $svc['gradient']; ?>; transition-delay: <?php echo ($index % 3) * 0.1; ?>s;">

                    <div class="cs-card-overlay"></div>
                    <div class="cs-card-accent"></div>

                    <div class="cs-card-content">
                        <div class="cs-card-top">
                            <div class="cs-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <?php echo $svc['icon']; ?>
                                </svg>
                            </div>
                            <a href="<?php echo htmlspecialchars($svc['link'] ?? '#'); ?>" class="cs-card-arrow" aria-label="Learn more about <?php echo htmlspecialchars($svc['title']); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                                </svg>
                            </a>
                        </div>

                        <h3 class="cs-card-title"><a href="<?php echo htmlspecialchars($svc['link'] ?? '#'); ?>" style="text-decoration: none; color: inherit;"><?php echo htmlspecialchars($svc['title']); ?></a></h3>
                        <p class="cs-card-desc"><?php echo htmlspecialchars($svc['desc']); ?></p>

                        <div class="cs-card-tags">
                            <?php foreach ($svc['tags'] as $tag): ?>
                                <span class="cs-tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="cs-view-all cs-reveal" style="transition-delay: 0.3s;">
            <a href="services" class="cs-view-all-btn" style="text-decoration: none;">
                <span class="btn-text">View All Services</span> 
                <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('cs-in-view');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const revealElements = document.querySelectorAll('.cs-reveal');
    revealElements.forEach(el => observer.observe(el));
});
</script>