<?php
$activePage = 'services';
$title = 'E-Commerce Development | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        .srv-hero-wrapper {
            text-align: center; overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.92), rgba(21, 58, 117, 0.85)), url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: #ffffff; font-family: 'Inter', sans-serif; position: relative; z-index: 1; padding: 120px 0 100px;
            background-size: 100% auto;
            animation: heroBgPan 15s linear infinite alternate;
        }
        @keyframes heroBgPan { 0% { background-position: 0% 50%; background-size: 100% auto; } 100% { background-position: 100% 50%; background-size: 110% auto; } }
        .srv-hero-headline { font-size: clamp(2.6rem, 5vw, 5rem); font-weight: 800; line-height: 1.02; margin: 0 0 20px 0; opacity: 0; transform: translateY(30px); animation: fadeUpHero 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s; }
        .srv-hero-subtext { font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.75; margin: 0 auto 36px; max-width: 700px; opacity: 0; transform: translateY(30px); animation: fadeUpHero 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.4s; }
        @keyframes fadeUpHero { to { opacity: 1; transform: translateY(0); } }
        
        .eyebrow { display: inline-flex; align-items: center; gap: 6px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--green); margin-bottom: 12px; background: rgba(29, 78, 158, 0.08); padding: 6px 16px; border-radius: 100px; border: 1px solid rgba(29, 78, 158, 0.15); }
        
        .content-section { padding: 88px 0; background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden; }
        .content-container { max-width: 1100px; margin: 0 auto; color: var(--text); font-size: 1.05rem; line-height: 1.75; }
        .content-container h2 { color: var(--text); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; margin-bottom: 24px; line-height: 1.15; }
        .content-container h3 { color: var(--text); font-size: 1.5rem; font-weight: 800; margin-top: 60px; margin-bottom: 20px; }
        .content-container p { margin-bottom: 24px; color: var(--muted); }
        .content-container ul { margin-bottom: 32px; padding-left: 24px; color: var(--muted); }
        .content-container li { margin-bottom: 12px; padding-left: 8px; }
        .content-container li::marker { color: var(--green); font-weight: bold; }
        
        .cta-box { background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
        .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; }
        .cta-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-strong); }
        .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
        .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
        .cta-box .button-primary { background: #ffffff !important; color: var(--green-dark) !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; border: none; }
        .cta-box .btn-shine::after { background: linear-gradient(to right, rgba(29, 78, 158, 0) 0%, rgba(29, 78, 158, 0.1) 50%, rgba(29, 78, 158, 0) 100%); }
        .btn-shine { position: relative; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; }
        .btn-shine::after { content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%); transform: skewX(-25deg); animation: shine 3s infinite; }
        .btn-shine:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 10px 24px rgba(29, 78, 158, 0.3); }
        @keyframes shine { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
        
        /* Image & Intro Grid Styles */
        .intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px; }
        .intro-image-wrap { position: relative; border-radius: 24px; overflow: hidden; box-shadow: var(--shadow-strong); animation: floatImg 6s ease-in-out infinite; }
        .intro-image-wrap img { width: 100%; height: auto; display: block; transition: transform 0.5s ease; }
        .intro-image-wrap:hover img { transform: scale(1.05); }
        @keyframes floatImg { 0%, 100% { transform: translateY(0); box-shadow: var(--shadow-strong); } 50% { transform: translateY(-15px); box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.2); } }
        @media (max-width: 991px) { .intro-grid { grid-template-columns: 1fr; gap: 30px; } }
        
        /* Ambient Orbs */
        .page-orb { position: absolute; border-radius: 50%; filter: blur(100px); opacity: 0.4; z-index: 0; pointer-events: none; animation: floatOrb 10s ease-in-out infinite; }
        .orb-1 { width: 400px; height: 400px; background: rgba(29, 78, 158, 0.15); top: 5%; right: -100px; }
        .orb-2 { width: 350px; height: 350px; background: rgba(152, 55, 212, 0.12); bottom: 15%; left: -100px; animation-delay: -5s; }
        @keyframes floatOrb { 0%, 100% { transform: translateY(0) scale(1); } 50% { transform: translateY(-20px) scale(1.05); } }

        /* Extended Content Styles */
        .service-features-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 30px; margin: 0 0 60px; 
        }
        
        /* Card Gradient Hover Effect */
        .feature-card, .process-card, .why-item { 
            position: relative; z-index: 1; overflow: hidden;
            background: var(--card); border: 1px solid var(--line); border-radius: 20px; padding: 30px; 
            box-shadow: var(--shadow); transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
        }
        .feature-card:nth-child(even), .process-card:nth-child(even), .why-item:nth-child(even) {
            --hover-grad: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        .feature-card::before, .process-card::before, .why-item::before {
            content: ""; position: absolute; inset: 0; background: var(--hover-grad); opacity: 0; transition: opacity 0.4s ease; z-index: -1;
        }
        .feature-card:hover, .process-card:hover, .why-item:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 24px 56px rgba(0,0,0,0.1); 
            border-color: transparent; 
        }
        .feature-card:hover::before, .process-card:hover::before, .why-item:hover::before { opacity: 1; }
        
        /* Text colors on hover */
        .feature-card h3, .process-card h3, .why-item h4, .feature-card p, .process-card p, .why-item p { transition: color 0.4s ease; }
        .feature-card:hover h3, .process-card:hover h3, .why-item:hover h4 { color: #fff; }
        .feature-card:hover p, .process-card:hover p, .why-item:hover p { color: rgba(255,255,255,0.8); }

        /* Card Arrow */
        .card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 2; width: 100%; }
        .card-arrow { width: 36px; height: 36px; border-radius: 50%; background: rgba(0,0,0,0.04); display: flex; align-items: center; justify-content: center; color: var(--muted); transition: all 0.35s ease; }
        .feature-card:hover .card-arrow, .process-card:hover .card-arrow, .why-item:hover .card-arrow { background: rgba(255,255,255,0.2); color: #fff; transform: translate(3px, -3px); }

        .feature-icon {
            width: 56px; height: 56px; background: var(--hover-grad); color: #fff; margin-bottom: 0;
            border-radius: 16px; display: flex; align-items: center; justify-content: center; 
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .feature-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); background: rgba(255,255,255,0.2) !important; box-shadow: 0 6px 24px rgba(255,255,255,0.25); border: 1.5px solid rgba(255,255,255,0.35); color: #fff; }
        .feature-card h3, .process-card h3 { font-size: 1.25rem; color: var(--text); margin-bottom: 12px; font-weight: 700; margin-top: 0; }
        .feature-card p, .process-card p { font-size: 1rem; color: var(--muted); margin: 0; line-height: 1.6; }

        .tech-stack-section { margin-top: 80px; margin-bottom: 60px; }
        .tech-stack-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); 
            gap: 24px; 
            margin-top: 32px; 
        }
        .tech-item { 
            position: relative; z-index: 1; overflow: hidden; padding: 32px 24px; display: flex; flex-direction: column; align-items: center; gap: 16px; 
            font-weight: 600; color: var(--text); background: var(--card); border: 1px solid var(--line); border-radius: 20px; box-shadow: var(--shadow);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease, color 0.3s ease;
            text-align: center;
            line-height: 1.4;
        }
        .tech-item::before { content: ""; position: absolute; inset: 0; background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%); opacity: 0; transition: opacity 0.4s ease, transform 0.4s ease; transform: scale(0.5); z-index: -1; border-radius: 20px; }
        .tech-item:hover { transform: translateY(-8px) scale(1.05); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; color: #fff; }
        .tech-item:hover::before { opacity: 1; transform: scale(1.5); }
        .tech-item svg { 
            width: 44px; height: 44px; transition: transform 0.3s ease; 
            margin-bottom: 4px; color: var(--green); 
        }
        .tech-item svg:not([fill="none"]) { fill: currentColor; }
        .tech-item:hover svg { transform: scale(1.1); color: #ffffff; }

        .process-grid { 
            display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); 
            gap: 30px; margin: 40px 0 80px; 
        }
        .process-card { position: relative; margin-top: 20px; border-left: 4px solid transparent; }
        .process-step-num { 
            background: var(--hover-grad); 
            color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; 
            border-radius: 50%; font-weight: 800; font-size: 1.1rem; box-shadow: var(--shadow); transition: transform 0.3s ease, background 0.3s ease, border 0.3s ease; 
        }
        .process-card:hover .process-step-num { background: rgba(255,255,255,0.2); transform: scale(1.15) rotate(-10deg); border: 1.5px solid rgba(255,255,255,0.35); }

        .why-choose-list { 
            display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 24px; margin: 30px 0 50px; 
        }
        .why-item { border-left: 4px solid var(--green); }
        .why-item:nth-child(even) { border-left-color: var(--blue); }
        .why-item:hover { border-left-color: transparent; }
        .why-item h4 { margin: 0 0 12px 0; color: var(--text); font-size: 1.15rem; font-weight: 700;}
        .why-item .card-top h4 { margin: 0; }
        .why-item p { margin: 0; font-size: 1rem; color: var(--muted); line-height: 1.6;}
        
        /* Gradient text for section headers */
        .content-container h2 span, .content-container h3 span {
            background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced Scroll Reveal Animation */
        .reveal { 
            opacity: 0; transform: translateY(36px) scale(0.96); 
            transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); 
        }
        .reveal.active { opacity: 1; transform: translateY(0) scale(1); }

        @media (max-width: 768px) {
            .srv-hero-wrapper { padding: 80px 0 60px; }
            .srv-hero-image { width: min(180px, 56vw); margin-bottom: 18px; border-radius: 20px; }
            .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
            .content-section { padding: 60px 0; }
            .content-container h3 { margin-top: 40px; }
            .service-features-grid, .process-grid, .why-choose-list { gap: 20px; margin-bottom: 40px; }
            .feature-card, .process-card, .why-item { padding: 24px; }
            .tech-stack-section { margin-top: 60px; }
            .tech-stack-grid { gap: 16px; margin-top: 24px; grid-template-columns: repeat(auto-fill, minmax(130px, 1fr)); }
            .tech-item { padding: 20px 16px; gap: 10px; }
            .cta-box { padding: 32px 20px; margin-top: 40px; }
        }
    </style>
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge" style="display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px; background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px; border: 1px solid rgba(255,255,255,0.15);">🛒 &nbsp; E-Commerce</span>
        <h1 class="srv-hero-headline">E-Commerce <br><span class="srv-hero-headline-bold">Development</span></h1>
        <p class="srv-hero-subtext">Full-featured online stores powered by human-centred design, seamless checkout flows, and scalable product management.</p>
    </div>
</section>

<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="container content-container" style="position: relative; z-index: 2;">
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow reveal">E-Commerce Solutions</span>
                <h2 class="reveal" style="transition-delay: 0.05s;">Build High-Converting <span>Online Stores</span></h2>
                <p class="reveal" style="transition-delay: 0.15s;">In the competitive digital marketplace, a generic storefront won't cut it. We build custom, robust, and scalable e-commerce platforms designed to turn visitors into loyal customers.</p>
                <p class="reveal" style="transition-delay: 0.25s;">Whether you are a local retailer moving online or an enterprise seeking a massive digital catalog, our e-commerce solutions focus on seamless user journeys, secure payments, and effortless inventory management.</p>
            </div>
            <div class="intro-image-wrap reveal" style="transition-delay: 0.3s;">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=800&q=80" alt="E-Commerce Shopping Online" loading="lazy">
            </div>
        </div>

        <div class="service-features-grid">
            <div class="feature-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></div>
                </div>
                <h3>Custom Storefront Design</h3>
                <p>We craft tailored UI/UX designs that reflect your brand identity, ensuring a unique and engaging shopping experience for your buyers.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></div>
                </div>
                <h3>Mobile-Optimized Shopping</h3>
                <p>With most users shopping on their phones, we build responsive storefronts that guarantee a flawless mobile commerce experience.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg></div>
                </div>
                <h3>Inventory & Order Management</h3>
                <p>Real-time inventory syncing, automated order tracking, and intuitive admin panels to help you manage your business efficiently.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
                </div>
                <h3>Secure Payment Gateways</h3>
                <p>Seamlessly integrate with trusted payment processors like Razorpay, Stripe, and PayPal to offer your customers secure and fast checkout options.</p>
            </div>
        </div>

        <span class="eyebrow reveal">Our Offerings</span>
        <h3 class="reveal" style="transition-delay: 0.05s;">Our <span>E-Commerce Services</span></h3>
        <ul class="reveal" style="transition-delay: 0.15s;">
            <li><strong>Shopify Development:</strong> Fully customized, high-converting Shopify stores tailored to your unique brand requirements.</li>
            <li><strong>WooCommerce Solutions:</strong> Flexible and scalable WordPress-based online stores, perfect for growing product catalogs.</li>
            <li><strong>Custom Multi-vendor Marketplaces:</strong> Platforms built from the ground up to support multiple sellers, complex commission structures, and massive scale.</li>
            <li><strong>B2B & B2C E-Commerce Portals:</strong> Specialized portals designed to handle bulk orders, customer-specific pricing, and seamless CRM integrations.</li>
        </ul>

        <span class="eyebrow reveal" style="margin-top: 40px;">How We Work</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Proven Development Process</span></h3>
        <p class="reveal" style="transition-delay: 0.15s;">We believe in full transparency. Our agile development process ensures your project is delivered on time, within budget, and exactly to your specifications.</p>
        <div class="process-grid">
            <div class="process-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top"><div class="process-step-num">1</div></div>
                <h3 style="margin-top: 16px;">Strategy & Planning</h3><p>We map out your product catalog structure, payment gateways, and user journeys to ensure a frictionless shopping experience.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top"><div class="process-step-num">2</div></div>
                <h3 style="margin-top: 16px;">Store Design & Prototyping</h3><p>Our UI/UX experts design custom, conversion-optimized storefront layouts that reflect your unique brand identity.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top"><div class="process-step-num">3</div></div>
                <h3 style="margin-top: 16px;">Development & Integrations</h3><p>We build your store securely, integrating necessary APIs, payment systems, CRMs, and third-party logistics providers.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top"><div class="process-step-num">4</div></div>
                <h3 style="margin-top: 16px;">Testing & Launch</h3><p>We rigorously test the shopping cart, checkout flow, and load speeds across devices before launching your store to the world.</p>
            </div>
        </div>

        <span class="eyebrow reveal">The Advantage</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Why Choose <span>Mithila Softech?</span></h3>
        <div class="why-choose-list">
            <div class="why-item reveal" style="transition-delay: 0.1s;">
                <div class="card-top" style="margin-bottom: 8px;"><h4>Conversion-Centric Design</h4></div>
                <p>Every element of your store is optimized to reduce cart abandonment and turn casual browsers into loyal, paying customers.</p>
            </div>
            <div class="why-item reveal" style="transition-delay: 0.2s;">
                <div class="card-top" style="margin-bottom: 8px;"><h4>Scalable Architecture</h4></div>
                <p>From 100 products to 100,000, our e-commerce platforms are built to handle massive traffic spikes and inventory growth seamlessly.</p>
            </div>
            <div class="why-item reveal" style="transition-delay: 0.3s;">
                <div class="card-top" style="margin-bottom: 8px;"><h4>Post-Launch Support</h4></div>
                <p>We provide ongoing maintenance, feature updates, and technical support to ensure your store remains secure and lightning-fast year-round.</p>
            </div>
        </div>

        <div class="tech-stack-section">
            <span class="eyebrow reveal">Tech Stack</span>
            <h2 class="reveal" style="transition-delay: 0.05s;">Technologies <span>We Master</span></h2>
            <p class="reveal" style="transition-delay: 0.15s;">We leverage the best modern e-commerce technologies to ensure your store is powerful, fast, and secure.</p>
            <div class="tech-stack-grid">
                <div class="tech-item reveal" style="transition-delay: 0.1s;">
                    <svg viewBox="0 0 24 24"><path d="M12 2.152l-9.848 5.686v11.373l9.848 5.686 9.848-5.686v-11.373l-9.848-5.686zm-8.348 6.551l8.348-4.82 8.348 4.82v9.641l-8.348 4.82-8.348-4.82v-9.641zm8.348 9.56l-6.196-3.578v-7.155l6.196-3.578 6.196 3.578v7.155l-6.196 3.578z"/></svg>
                    Shopify
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.15s;">
                    <svg viewBox="0 0 24 24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm.268-15.013c-.93 0-1.745.244-2.146.547-.463.34-.73.805-.73 1.34 0 .902.66 1.39 1.733 1.83l.805.34c1.317.56 1.95 1.196 1.95 2.123 0 1.292-1.072 2.218-2.68 2.218-1.025 0-2.17-.317-3.072-.854l.585-1.536c.805.463 1.633.682 2.316.682.975 0 1.584-.365 1.584-.974 0-.805-.634-1.243-1.633-1.682l-.804-.34c-1.39-.586-2.072-1.268-2.072-2.195 0-1.29 1.097-2.193 2.657-2.193 1 0 2.023.268 2.803.707l-.536 1.536c-.73-.39-1.512-.55-2.28-.55z"/></svg>
                    WooCommerce
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.2s;">
                    <svg viewBox="0 0 24 24"><path d="M11.955 2.012c6.035 0 10.926 4.891 10.926 10.926 0 6.036-4.891 10.927-10.926 10.927-6.036 0-10.927-4.891-10.927-10.927 0-6.035 4.89-10.926 10.927-10.926zm4.908 6.845a4.013 4.013 0 0 0-3.32-1.854c-2.318 0-4.04 1.73-4.04 4.043 0 2.312 1.722 4.041 4.04 4.041 1.488 0 2.766-.8 3.32-1.855l-1.636-1.002a2.214 2.214 0 0 1-1.684.97c-1.127 0-2.04-.904-2.04-2.154 0-1.25.913-2.155 2.04-2.155.706 0 1.34.382 1.684.97l1.636-1.004z"/></svg>
                    React.js
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.25s;">
                    <svg viewBox="0 0 24 24"><path d="M14.135 12.052l-5.32 3.072v-6.143l5.32 3.071zM24 12c0 6.627-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0s12 5.373 12 12zm-1.867 0c0-5.596-4.537-10.133-10.133-10.133S1.867 6.404 1.867 12s4.537 10.133 10.133 10.133S22.133 17.596 22.133 12z"/></svg>
                    Next.js
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.3s;">
                    <svg viewBox="0 0 24 24"><path d="M12.001 2.012c5.518 0 10.002 4.484 10.002 10.001 0 5.518-4.484 10.002-10.002 10.002-5.518 0-10.001-4.484-10.001-10.002 0-5.517 4.483-10.001 10.001-10.001zm-2.003 14.53l5.632-5.632-1.416-1.414-4.216 4.216-2.098-2.098-1.416 1.414 3.514 3.514z"/></svg>
                    Node.js
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.35s;">
                    <svg viewBox="0 0 24 24"><path d="M2.5 12.5C2.5 17.747 6.753 22 12 22C17.247 22 21.5 17.747 21.5 12.5C21.5 7.253 17.247 3 12 3C6.753 3 2.5 7.253 2.5 12.5ZM12 4.5C16.418 4.5 20 8.082 20 12.5C20 16.918 16.418 20.5 12 20.5C7.582 20.5 4 16.918 4 12.5C4 8.082 7.582 4.5 12 4.5ZM11.25 7.5V11.69L8.28 14.66L9.34 15.72L12.75 12.31V7.5H11.25Z"/></svg>
                    PHP & Laravel
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.4s;">
                    <svg viewBox="0 0 24 24"><path d="M12.001,4.8c-3.208,0-5.6,1.6-6.4,4.8,1.2-2.4,3.2-3.2,5.6-2.4,1.2,.4,2,1.2,2.8,2,1.2,1.2,2.4,2.4,4.8,2.4,3.208,0,5.6-1.6,6.4-4.8-1.2,2.4-3.2,3.2-5.6,2.4-1.2-.4-2-1.2-2.8-2-1.2-1.2-2.4-2.4-4.8-2.4Zm-6.4,6.4c-3.208,0-5.6,1.6-6.4,4.8,1.2-2.4,3.2-3.2,5.6-2.4,1.2,.4,2,1.2,2.8,2,1.2,1.2,2.4,2.4,4.8,2.4,3.208,0,5.6-1.6,6.4-4.8-1.2,2.4-3.2,3.2-5.6,2.4-1.2-.4-2-1.2-2.8-2-1.2-1.2-2.4-2.4-4.8-2.4Z"/></svg>
                    Tailwind CSS
                </div>
                <div class="tech-item reveal" style="transition-delay: 0.45s;">
                    <svg viewBox="0 0 24 24"><path d="M12 0s-2.906 7.42-2.906 13.094c0 3.12 1.344 4.887 2.906 6.366 1.562-1.48 2.906-3.246 2.906-6.366C14.906 7.42 12 0 12 0Zm0 20.354c-.655 0-1.42.316-1.42 1.823 0 1.487.765 1.823 1.42 1.823.655 0 1.42-.336 1.42-1.823 0-1.507-.765-1.823-1.42-1.823Z"/></svg>
                    MongoDB
                </div>
            </div>
        </div>

        <div class="cta-box reveal">
            <h3>Ready to partner with us?</h3>
            <p>Let's turn your ideas into digital reality. Reach out to our team to discuss your next big project.</p>
            <a href="index#contact" class="button button-primary btn-shine" style="border-radius: 999px;">Contact Us Today</a>
        </div>
    </div>
</section>

<?php include 'footer-new.php'; ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {
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

      // Scroll Reveal logic
      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add("active"); });
      }, { threshold: 0.15 });
      document.querySelectorAll(".reveal").forEach(el => revealObserver.observe(el));
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
