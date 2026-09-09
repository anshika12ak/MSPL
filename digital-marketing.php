<?php
$activePage = 'services';
$title = 'Digital Marketing | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Services India | SEO & SMM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        /* --- HERO STYLES --- */
        .srv-hero-wrapper {
            text-align: center;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.92), rgba(76, 34, 106, 0.85)), url('assets/image/digitalmarketingheader.png') center/cover no-repeat;
            background-size: cover;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            position: relative;
            z-index: 1;
            padding: 120px 0 100px;
        }
        .srv-hero-bg-orb1, .srv-hero-bg-orb2 {
            position: absolute; border-radius: 50%; filter: blur(120px); z-index: -1; opacity: 0.45; animation: srvHeroOrbDrift 10s alternate infinite ease-in-out;
            will-change: transform;
        }
        .srv-hero-bg-orb1 { top: -10%; left: -10%; width: 40vw; height: 40vw; background: #7528a8; }
        .srv-hero-bg-orb2 { bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: #38bdf8; animation-duration: 12s; animation-direction: alternate-reverse; }
        @keyframes srvHeroOrbDrift { 0% { transform: translate3d(0, 0, 0); } 100% { transform: translate3d(40px, 40px, 0); } }
        
        .srv-hero-image {
            width: min(240px, 42vw);
            height: auto;
            display: block;
            margin: 0 auto 24px;
            border-radius: 24px;
            box-shadow: 0 22px 60px rgba(2, 6, 23, 0.28);
        }
        .srv-hero-badge {
            display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px;
            background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px;
            border: 1px solid rgba(255,255,255,0.15); opacity: 0; animation: srvFadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.05s;
        }
        .srv-hero-headline {
            font-size: clamp(2.8rem, 5vw, 4.2rem); font-weight: 800; line-height: 1.05; margin: 0 0 20px 0; color: #ffffff;
            opacity: 0; animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.1s;
        }
        .srv-hero-headline-accent { background: linear-gradient(135deg, #c084fc 0%, #e879f9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .srv-hero-subtext {
            font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.7; margin: 0 auto 36px; max-width: 800px;
            opacity: 0; animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s;
        }
        @keyframes srvFadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
        
        .eyebrow { display: inline-flex; align-items: center; gap: 6px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--blue); margin-bottom: 12px; background: rgba(152, 55, 212, 0.08); padding: 6px 16px; border-radius: 100px; border: 1px solid rgba(152, 55, 212, 0.15); }
        
        .content-section { padding: 88px 0; background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden; }
        .content-container { max-width: 1100px; margin: 0 auto; color: var(--text); font-size: 1.05rem; line-height: 1.75; }
        .content-container h2 { color: var(--text); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; margin-bottom: 24px; line-height: 1.15; }
        .content-container h3 { color: var(--text); font-size: 1.5rem; font-weight: 800; margin-top: 60px; margin-bottom: 20px; }
        .content-container p { margin-bottom: 24px; color: var(--muted); }
        .content-container ul { margin-bottom: 32px; padding-left: 24px; color: var(--muted); }
        .content-container li { margin-bottom: 12px; padding-left: 8px; }
        .content-container li::marker { color: var(--blue); font-weight: bold; }
        
        .cta-box { background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
        .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; will-change: transform; }
        .cta-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-strong); }
        .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
        .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
        .cta-box .button-primary { background: #ffffff !important; color: var(--green-dark) !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; border: none; }
        .cta-box .btn-shine::after { background: linear-gradient(to right, rgba(29, 78, 158, 0) 0%, rgba(29, 78, 158, 0.1) 50%, rgba(29, 78, 158, 0) 100%); }
        .btn-shine { position: relative; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; }
        .btn-shine::after { content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%); transform: skewX(-25deg); animation: shine 3s infinite; }
        .btn-shine:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 10px 24px rgba(152, 55, 212, 0.3); }
        @keyframes shine { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
        
        /* Image & Intro Grid Styles */
        .intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px; }
        .intro-image-wrap { position: relative; border-radius: 24px; overflow: hidden; box-shadow: var(--shadow-strong); animation: floatImg 6s ease-in-out infinite; }
        .intro-image-wrap img { width: 100%; height: auto; display: block; transition: transform 0.5s ease; }
        .intro-image-wrap:hover img { transform: scale(1.05); }
        @keyframes floatImg { 0%, 100% { transform: translateY(0); box-shadow: var(--shadow-strong); } 50% { transform: translateY(-15px); box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.2); } }
        @media (max-width: 991px) { .intro-grid { grid-template-columns: 1fr; gap: 30px; } }
        @media (max-width: 768px) { .srv-hero-image { width: min(180px, 56vw); margin-bottom: 18px; border-radius: 20px; } }
        
        /* Ambient Orbs */
        .page-orb { position: absolute; border-radius: 50%; filter: blur(100px); opacity: 0.4; z-index: 0; pointer-events: none; animation: floatOrb 10s ease-in-out infinite; will-change: transform; }
        .orb-1 { width: 400px; height: 400px; background: rgba(152, 55, 212, 0.15); top: 5%; right: -100px; }
        .orb-2 { width: 350px; height: 350px; background: rgba(29, 78, 158, 0.12); bottom: 15%; left: -100px; animation-delay: -5s; }
        @keyframes floatOrb { 0%, 100% { transform: translate3d(0, 0, 0) scale(1); } 50% { transform: translate3d(0, -20px, 0) scale(1.05); } }

        /* Extended Content Styles */
        .service-features-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin: 0 0 60px; }
        
        /* Card Gradient Hover Effect */
        .feature-card, .process-card, .why-item { 
            position: relative; z-index: 1; overflow: hidden;
            background: var(--card); border: 1px solid var(--line); border-radius: 20px; padding: 30px; 
            box-shadow: var(--shadow); transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        .feature-card { flex: 1 1 280px; max-width: 380px; }
        .process-card { flex: 1 1 240px; max-width: 340px; }
        .why-item { flex: 1 1 300px; max-width: 400px; }
        .feature-card:nth-child(even), .process-card:nth-child(even), .why-item:nth-child(even) {
            --hover-grad: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
        }
        .feature-card::before, .process-card::before, .why-item::before { content: ""; position: absolute; inset: 0; background: var(--hover-grad); opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .feature-card:hover, .process-card:hover, .why-item:hover { transform: translateY(-10px); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; }
        .feature-card:hover::before, .process-card:hover::before, .why-item:hover::before { opacity: 1; }
        
        .feature-card h3, .process-card h3, .why-item h4, .feature-card p, .process-card p, .why-item p { transition: color 0.4s ease; }
        .feature-card:hover h3, .process-card:hover h3, .why-item:hover h4 { color: #fff; }
        .feature-card:hover p, .process-card:hover p, .why-item:hover p { color: rgba(255,255,255,0.8); }

        .card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 2; width: 100%; }
        .feature-icon { width: 56px; height: 56px; background: var(--hover-grad); color: #fff; margin-bottom: 0; border-radius: 16px; display: flex; align-items: center; justify-content: center; transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, border 0.3s ease; box-shadow: 0 8px 16px rgba(0,0,0,0.1); }
        .feature-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); background: rgba(255,255,255,0.2) !important; box-shadow: 0 6px 24px rgba(255,255,255,0.25); border: 1.5px solid rgba(255,255,255,0.35); color: #fff; }
        .feature-card h3, .process-card h3 { font-size: 1.25rem; color: var(--text); margin-bottom: 12px; font-weight: 700; margin-top: 0; }
        .feature-card p, .process-card p { font-size: 1rem; color: var(--muted); margin: 0; line-height: 1.6; }

        .tech-stack-section { margin-top: 80px; margin-bottom: 60px; }
        .tech-stack-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 32px; }
        .tech-item { flex: 1 1 140px; max-width: 240px; position: relative; z-index: 1; overflow: hidden; padding: 24px; display: flex; flex-direction: column; align-items: center; gap: 12px; font-weight: 600; color: var(--text); background: var(--card); border: 1px solid var(--line); border-radius: 20px; box-shadow: var(--shadow); transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease, color 0.3s ease; text-align: center; line-height: 1.4; }
        .tech-item::before { content: ""; position: absolute; inset: 0; background: linear-gradient(135deg, var(--blue) 0%, var(--green) 100%); opacity: 0; transition: opacity 0.4s ease, transform 0.4s ease; transform: scale(0.5); z-index: -1; border-radius: 20px; }
        .tech-item:hover { transform: translateY(-8px) scale(1.05); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; color: #fff; }
        .tech-item:hover::before { opacity: 1; transform: scale(1.5); }
        .tech-item svg { width: 36px; height: 36px; fill: currentColor; transition: transform 0.3s ease; }
        .tech-item:hover svg { transform: scale(1.1); }

        .process-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin: 40px 0 80px; }
        .process-card { position: relative; margin-top: 20px; border-left: 4px solid transparent; }
        .process-step-num { background: var(--hover-grad); color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: 800; font-size: 1.1rem; box-shadow: var(--shadow); transition: transform 0.3s ease, background 0.3s ease, border 0.3s ease; }
        .process-card:hover .process-step-num { background: rgba(255,255,255,0.2); transform: scale(1.15) rotate(-10deg); border: 1.5px solid rgba(255,255,255,0.35); }

        .why-choose-list { display: flex; flex-wrap: wrap; justify-content: center; gap: 24px; margin: 30px 0 50px; }
        .why-item { border-left: 4px solid var(--blue); }
        .why-item:nth-child(even) { border-left-color: var(--green); }
        .why-item:hover { border-left-color: transparent; }
        .why-item h4 { margin: 0 0 12px 0; color: var(--text); font-size: 1.15rem; font-weight: 700;}
        .why-item .card-top h4 { margin: 0; }
        .why-item p { margin: 0; font-size: 1rem; color: var(--muted); line-height: 1.6;}
        
        .content-container h2 span, .content-container h3 span { background: linear-gradient(135deg, var(--blue) 0%, var(--green) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .reveal { opacity: 0; transform: translateY(36px) scale(0.96); transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal.active { opacity: 1; transform: translateY(0) scale(1); }
    </style>
    <meta name="description" content="Boost traffic and leads with SEO, social media marketing, and branding solutions.">
    <meta name="keywords" content="digital marketing India, SEO services">
    <link rel="canonical" href="https://www.mithilasoftech.com/services/digital-marketing" />
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">📈 &nbsp; Growth Marketing</span>
        <h1 class="srv-hero-headline">Digital Marketing Services <br><span class="srv-hero-headline-bold">for <span class="srv-hero-headline-accent">Business Growth</span></span></h1>
        <p class="srv-hero-subtext">Data-driven SEO, Google Ads, Meta campaigns, and comprehensive digital strategies that accelerate growth and turn clicks into loyal customers.</p>
    </div>
</section>

<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="container content-container" style="position: relative; z-index: 2;">
        
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow reveal">Digital Marketing</span>
                <h2 class="reveal" style="transition-delay: 0.05s;">Accelerate Your <span>Growth Online</span></h2>
                <p class="reveal" style="transition-delay: 0.15s;">In the crowded digital landscape, standing out requires more than just a website. We craft targeted, data-driven marketing campaigns that put your brand in front of the right audience at the exact right time.</p>
                <p class="reveal" style="transition-delay: 0.25s;">From comprehensive technical SEO and content creation to high-converting PPC campaigns across Google and Meta, our holistic approach ensures maximum ROI and sustainable, long-term business growth.</p>
            </div>
            <div class="intro-image-wrap reveal" style="transition-delay: 0.3s;">
                <img src="assets/image/digitalservice.png" alt="SEO services dashboard" loading="lazy">
            </div>
        </div>

        <div class="service-features-grid">
            <div class="feature-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
                </div>
                <h3>Search Engine Optimization</h3>
                <p>Climb to the top of Google search results organically with comprehensive technical, on-page, and off-page SEO strategies.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></div>
                </div>
                <h3>Pay-Per-Click (PPC)</h3>
                <p>Maximize your ad spend with high-converting Google Ads and retargeting campaigns designed to capture high-intent buyers.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></div>
                </div>
                <h3>Social Media Marketing</h3>
                <p>Build a loyal community and engaging brand presence across Instagram, Facebook, LinkedIn, and Twitter.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
                </div>
                <h3>Content Strategy</h3>
                <p>Deliver compelling blogs, copy, whitepapers, and creative assets that establish your authority and drive customer action.</p>
            </div>
        </div>

        <span class="eyebrow reveal">Our Offerings</span>
        <h3 class="reveal" style="transition-delay: 0.05s;">Strategic <span>Campaigns</span></h3>
        <ul class="reveal" style="transition-delay: 0.15s;">
            <li><strong>Local SEO Dominance:</strong> Optimize your Google My Business and local citations to capture foot traffic and nearby search queries.</li>
            <li><strong>Social Media Advertising:</strong> Hyper-targeted Meta (Facebook/IG) and LinkedIn ad campaigns to generate B2B and B2C leads.</li>
            <li><strong>Email Marketing Automation:</strong> Drip campaigns and newsletters that nurture prospects and maximize customer lifetime value.</li>
            <li><strong>Conversion Rate Optimization:</strong> A/B testing landing pages and analyzing user behavior to turn more visitors into buyers.</li>
        </ul>

        <span class="eyebrow reveal" style="margin-top: 40px;">How We Work</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Marketing Process</span></h3>
        <p class="reveal" style="transition-delay: 0.15s;">We operate with complete transparency, letting data guide our decisions and providing you with clear, measurable reports.</p>
        <div class="process-grid">
            <div class="process-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top"><div class="process-step-num">1</div></div>
                <h3 style="margin-top: 16px;">Discovery & Audit</h3><p>We analyze your current digital presence, competitor landscape, and target audience to identify growth gaps.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top"><div class="process-step-num">2</div></div>
                <h3 style="margin-top: 16px;">Strategy Formulation</h3><p>We build a multi-channel roadmap detailing keywords, ad budgets, content calendars, and specific KPIs.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top"><div class="process-step-num">3</div></div>
                <h3 style="margin-top: 16px;">Campaign Execution</h3><p>Our specialists launch SEO updates, deploy ad creatives, and begin publishing engaging social content.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top"><div class="process-step-num">4</div></div>
                <h3 style="margin-top: 16px;">Optimize & Scale</h3><p>We monitor real-time data, cutting underperforming ads and scaling the strategies that deliver the best ROI.</p>
            </div>
        </div>

        <div class="tech-stack-section">
            <span class="eyebrow reveal">Marketing Tools</span>
            <h2 class="reveal" style="transition-delay: 0.05s;">Tools <span>We Master</span></h2>
            <p class="reveal" style="transition-delay: 0.15s;">We utilize enterprise-grade marketing and analytics software to track every conversion accurately.</p>
            <div class="tech-stack-grid">
                <div class="tech-item reveal" style="transition-delay: 0.1s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>Google Analytics 4</div>
                <div class="tech-item reveal" style="transition-delay: 0.15s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>SEMrush / Ahrefs</div>
                <div class="tech-item reveal" style="transition-delay: 0.2s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5 21v-7h2.4l.4-3h-2.8V9.1c0-.9.3-1.6 1.6-1.6h1.3V4.8c-.2 0-1-.1-1.9-.1-2.4 0-4 1.5-4 4.3V11H8v3h2.7v7h2.8z"></path></svg>Meta Ads Manager</div>
                <div class="tech-item reveal" style="transition-delay: 0.25s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>HubSpot</div>
                <div class="tech-item reveal" style="transition-delay: 0.3s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>Mailchimp</div>
                <div class="tech-item reveal" style="transition-delay: 0.35s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>Looker Studio</div>
                <div class="tech-item reveal" style="transition-delay: 0.4s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>Google Tag Manager</div>
                <div class="tech-item reveal" style="transition-delay: 0.45s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>Canva & Adobe</div>
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
      const hamburgerBtn = document.getElementById('hamburger-btn');
      const mainNav = document.getElementById('main-nav');
      if (hamburgerBtn && mainNav) {
          hamburgerBtn.addEventListener('click', () => {
              const isActive = mainNav.classList.toggle('is-active');
              hamburgerBtn.classList.toggle('is-active');
              hamburgerBtn.setAttribute('aria-expanded', isActive);
          });
      }

      const revealObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => { 
              if (entry.isIntersecting) { 
                  entry.target.classList.add("active");
                  observer.unobserve(entry.target); 
              } 
          });
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
