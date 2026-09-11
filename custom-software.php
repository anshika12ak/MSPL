<?php
$activePage = 'services';
$title = 'Custom IT Solutions | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom IT Solutions | Software Development Services</title>
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
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.92), rgba(21, 58, 117, 0.85)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            position: relative;
            z-index: 1;
            padding: 120px 0 100px;
            background-size: 100% auto;
            animation: heroBgPan 15s linear infinite alternate;
        }
        @keyframes heroBgPan { 0% { background-position: 0% 50%; background-size: 100% auto; } 100% { background-position: 100% 50%; background-size: 110% auto; } }
        .srv-hero-bg-orb1, .srv-hero-bg-orb2 {
            position: absolute; border-radius: 50%; filter: blur(120px); z-index: -1; opacity: 0.45; animation: srvHeroOrbDrift 10s alternate infinite ease-in-out;
            will-change: transform;
        }
        .srv-hero-bg-orb1 { top: -10%; left: -10%; width: 40vw; height: 40vw; background: #1d4ed8; }
        .srv-hero-bg-orb2 { bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: #38bdf8; animation-duration: 12s; animation-direction: alternate-reverse; }
        @keyframes srvHeroOrbDrift { 0% { transform: translate3d(0, 0, 0); } 100% { transform: translate3d(40px, 40px, 0); } }
        
        .srv-hero-badge {
            display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px;
            background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px;
            border: 1px solid rgba(255,255,255,0.15); opacity: 0; animation: srvFadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.05s;
        }
        .srv-hero-headline {
            font-size: clamp(2.8rem, 5vw, 4.2rem); font-weight: 800; line-height: 1.05; margin: 0 0 20px 0; color: #ffffff;
            opacity: 0; animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.1s;
        }
        .srv-hero-headline-accent { background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .srv-hero-subtext {
            font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.7; margin: 0 auto 36px; max-width: 800px;
            opacity: 0; animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s;
        }
        @keyframes srvFadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
        
        .eyebrow { display: inline-flex; align-items: center; gap: 6px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--blue); margin-bottom: 12px; background: rgba(29, 78, 158, 0.08); padding: 6px 16px; border-radius: 100px; border: 1px solid rgba(29, 78, 158, 0.15); }
        
        .content-section { padding: 88px 0; background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden; }
        .content-container { max-width: 1100px; margin: 0 auto; color: var(--text); font-size: 1.05rem; line-height: 1.75; }
        .content-container h2 { color: var(--text); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; margin-bottom: 24px; line-height: 1.15; }
        .content-container h3 { color: var(--text); font-size: 1.5rem; font-weight: 800; margin-top: 60px; margin-bottom: 20px; }
        .content-container p { margin-bottom: 24px; color: var(--muted); }
        .content-container ul { margin-bottom: 32px; padding-left: 24px; color: var(--muted); }
        .content-container li { margin-bottom: 12px; padding-left: 8px; }
        .content-container li::marker { color: var(--blue); font-weight: bold; }
        
        .cta-box { background: linear-gradient(135deg, var(--green-dark, #15803d) 0%, var(--blue-dark, #1e40af) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
        .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; will-change: transform; }
        .cta-box:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
        .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
        .cta-box .button-primary { background: #ffffff !important; color: #1e40af !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; border: none; }
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
        .page-orb { position: absolute; border-radius: 50%; filter: blur(100px); opacity: 0.4; z-index: 0; pointer-events: none; animation: floatOrb 10s ease-in-out infinite; will-change: transform; }
        .orb-1 { width: 400px; height: 400px; background: rgba(29, 78, 158, 0.15); top: 5%; right: -100px; }
        .orb-2 { width: 350px; height: 350px; background: rgba(152, 55, 212, 0.12); bottom: 15%; left: -100px; animation-delay: -5s; }
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
        
        /* Text colors on hover */
        .feature-card h3, .process-card h3, .why-item h4, .feature-card p, .process-card p, .why-item p { transition: color 0.4s ease; }
        .feature-card:hover h3, .process-card:hover h3, .why-item:hover h4 { color: #fff; }
        .feature-card:hover p, .process-card:hover p, .why-item:hover p { color: rgba(255,255,255,0.8); }

        /* Card Arrow */
        .card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 2; width: 100%; }
        .card-arrow { width: 36px; height: 36px; border-radius: 50%; background: rgba(0,0,0,0.04); display: flex; align-items: center; justify-content: center; color: var(--muted); transition: all 0.35s ease; }
        .feature-card:hover .card-arrow, .process-card:hover .card-arrow, .why-item:hover .card-arrow { background: rgba(255,255,255,0.2); color: #fff; transform: translate(3px, -3px); }

        .feature-icon { width: 56px; height: 56px; background: var(--hover-grad); color: #fff; margin-bottom: 0; border-radius: 16px; display: flex; align-items: center; justify-content: center; transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, border 0.3s ease; box-shadow: 0 8px 16px rgba(0,0,0,0.1); }
        .feature-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); background: rgba(255,255,255,0.2) !important; box-shadow: 0 6px 24px rgba(255,255,255,0.25); border: 1.5px solid rgba(255,255,255,0.35); color: #fff; }
        .feature-card h3, .process-card h3 { font-size: 1.25rem; color: var(--text); margin-bottom: 12px; font-weight: 700; margin-top: 0; }
        .feature-card p, .process-card p { font-size: 1rem; color: var(--muted); margin: 0; line-height: 1.6; }

        .tech-stack-section { margin-top: 80px; margin-bottom: 60px; }
        .tech-stack-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 32px; }
        .tech-item { flex: 1 1 140px; max-width: 240px; position: relative; z-index: 1; overflow: hidden; padding: 24px; display: flex; flex-direction: column; align-items: center; gap: 12px; font-weight: 600; color: var(--text); background: var(--card); border: 1px solid var(--line); border-radius: 20px; box-shadow: var(--shadow); transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease, color 0.3s ease; text-align: center; line-height: 1.4;}
        .tech-item::before { content: ""; position: absolute; inset: 0; background: linear-gradient(135deg, var(--blue) 0%, var(--green) 100%); opacity: 0; transition: opacity 0.4s ease, transform 0.4s ease; transform: scale(0.5); z-index: -1; border-radius: 20px; }
        .tech-item:hover { transform: translateY(-8px) scale(1.05); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; color: #fff; }
        .tech-item:hover::before { opacity: 1; transform: scale(1.5); }
        .tech-item svg { width: 36px; height: 36px; fill: currentColor; transition: transform 0.3s ease; }
        .tech-item:hover svg { transform: scale(1.1); }

        .process-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin: 40px 0 80px; }
        .process-card { position: relative; margin-top: 20px; border-left: 4px solid transparent; }
        .process-step-num { background: var(--hover-grad); color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: 800; font-size: 1.1rem; box-shadow: var(--shadow); transition: transform 0.3s ease, background 0.3s ease, border 0.3s ease; }
        .process-card:hover .process-step-num { background: rgba(255,255,255,0.2); transform: scale(1.15) rotate(-10deg); border: 1.5px solid rgba(255,255,255,0.35); }
        
        .content-container h2 span, .content-container h3 span { background: linear-gradient(135deg, var(--blue) 0%, var(--green) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .reveal { opacity: 0; transform: translateY(36px) scale(0.96); transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal.active { opacity: 1; transform: translateY(0) scale(1); }
        
        @media (max-width: 768px) {
            .srv-hero-wrapper { padding: 80px 0 60px; }
            .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
            .content-section { padding: 60px 0; }
            .content-container h3 { margin-top: 40px; }
            .service-features-grid, .process-grid { gap: 20px; margin-bottom: 40px; }
            .feature-card, .process-card { padding: 24px; }
            .tech-stack-section { margin-top: 60px; }
            .tech-stack-grid { gap: 16px; margin-top: 24px; }
            .tech-item { flex: 1 1 130px; max-width: 100%; padding: 20px 16px; gap: 10px; }
            .feature-card, .process-card { max-width: 100%; }
            .cta-box { padding: 30px 20px; margin-top: 30px; }
        }
    </style>
    <meta name="description" content="Tailored IT solutions to meet unique business needs with scalable software systems.">
    <meta name="keywords" content="custom software development">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/services/custom-it-solutions" />
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">💻 &nbsp; Custom Software</span>
        <h1 class="srv-hero-headline">Custom IT Solutions <br><span class="srv-hero-headline-bold">for <span class="srv-hero-headline-accent">Your Business</span></span></h1>
        <p class="srv-hero-subtext">ERP, CRM, inventory management & bespoke software tailored to your business needs.</p>
    </div>
</section>

<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="container content-container" style="position: relative; z-index: 2;">
        
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow reveal">Custom Software</span>
                <h2 class="reveal" style="transition-delay: 0.05s;">Software Engineered for <span>Your Business</span></h2>
                <p class="reveal" style="transition-delay: 0.15s;">Off-the-shelf software doesn't always fit. We build scalable, secure, and custom-tailored software solutions designed to seamlessly integrate with and streamline your unique operations.</p>
                <p class="reveal" style="transition-delay: 0.25s;">Whether you need a specialized CRM, a complex ERP system, or a brand-new SaaS product, our expert engineering team turns your specific requirements into a robust digital reality.</p>
            </div>
            <div class="intro-image-wrap reveal" style="transition-delay: 0.3s;">
                <img src="assets/image/customit.png" alt="custom software development process" loading="lazy">
            </div>
        </div>

        <div class="service-features-grid">
            <div class="feature-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                </div>
                <h3>CRM Development</h3>
                <p>Better tools to manage and follow up with leads, improving customer retention and tracking organizational interactions effectively.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></div>
                </div>
                <h3>Enterprise Resource Planning (ERP)</h3>
                <p>Streamline your supply chain, inventory, HR, and financials with a unified operational platform built uniquely for your industry.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg></div>
                </div>
                <h3>SaaS Architecture</h3>
                <p>Build, launch, and scale your own Software-as-a-Service product with resilient multi-tenant architectures and subscription management.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div>
                </div>
                <h3>API Integrations & Automation</h3>
                <p>Connect disparate systems to save time, reduce manual data entry, and minimize human errors through automated background workflows.</p>
            </div>
        </div>

        <span class="eyebrow reveal">Our Offerings</span>
        <h3 class="reveal" style="transition-delay: 0.05s;">Custom Software <span>Specialties</span></h3>
        <ul class="reveal" style="transition-delay: 0.15s;">
            <li><strong>Custom Web Applications:</strong> Secure, fast, and highly interactive portals for your internal team or customers.</li>
            <li><strong>Legacy System Modernization:</strong> Upgrade your outdated software to modern tech stacks without losing crucial data.</li>
            <li><strong>Database Design & Management:</strong> Scalable and secure database architectures that grow with your business.</li>
            <li><strong>Cloud-Native Solutions:</strong> Applications built specifically to leverage the power and scalability of AWS, Azure, or GCP.</li>
        </ul>

        <span class="eyebrow reveal" style="margin-top: 40px;">How We Work</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Development Process</span></h3>
        <p class="reveal" style="transition-delay: 0.15s;">We approach custom software systematically, ensuring what we build aligns perfectly with your immediate business goals and long-term vision.</p>
        <div class="process-grid">
            <div class="process-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top"><div class="process-step-num">1</div></div>
                <h3 style="margin-top: 16px;">Requirement Analysis</h3><p>We dive deep into your business processes, bottlenecks, and user needs to understand exactly what you need.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top"><div class="process-step-num">2</div></div>
                <h3 style="margin-top: 16px;">System Architecture</h3><p>Our architects design a scalable, secure, and future-proof blueprint detailing the data flows and tech stack.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top"><div class="process-step-num">3</div></div>
                <h3 style="margin-top: 16px;">Agile Development</h3><p>We develop your software in sprints, giving you regular functional updates and the ability to provide iterative feedback.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top"><div class="process-step-num">4</div></div>
                <h3 style="margin-top: 16px;">Testing & Deployment</h3><p>Rigorous QA testing ensures your software is bug-free, followed by a seamless launch and ongoing support strategy.</p>
            </div>
        </div>

        <div class="tech-stack-section">
            <span class="eyebrow reveal">Tech Stack</span>
            <h2 class="reveal" style="transition-delay: 0.05s;">Tools <span>We Master</span></h2>
            <p class="reveal" style="transition-delay: 0.15s;">We build custom software leveraging industry-standard, scalable, and secure technologies.</p>
            <div class="tech-stack-grid">
                <div class="tech-item reveal" style="transition-delay: 0.1s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(45 12 12)"></ellipse><ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(-45 12 12)"></ellipse></svg>React & Frontend</div>
                <div class="tech-item reveal" style="transition-delay: 0.15s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.001 2.012c5.518 0 10.002 4.484 10.002 10.001 0 5.518-4.484 10.002-10.002 10.002-5.518 0-10.001-4.484-10.001-10.002 0-5.517 4.483-10.001 10.001-10.001zm-2.003 14.53l5.632-5.632-1.416-1.414-4.216 4.216-2.098-2.098-1.416 1.414 3.514 3.514z"/></svg>Node.js</div>
                <div class="tech-item reveal" style="transition-delay: 0.2s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>Python</div>
                <div class="tech-item reveal" style="transition-delay: 0.25s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg>AWS / Azure</div>
                <div class="tech-item reveal" style="transition-delay: 0.3s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>Docker</div>
                <div class="tech-item reveal" style="transition-delay: 0.35s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>PostgreSQL</div>
                <div class="tech-item reveal" style="transition-delay: 0.4s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>GraphQL</div>
                <div class="tech-item reveal" style="transition-delay: 0.45s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 0s-2.906 7.42-2.906 13.094c0 3.12 1.344 4.887 2.906 6.366 1.562-1.48 2.906-3.246 2.906-6.366C14.906 7.42 12 0 12 0Zm0 20.354c-.655 0-1.42.316-1.42 1.823 0 1.487.765 1.823 1.42 1.823.655 0 1.42-.336 1.42-1.823 0-1.507-.765-1.823-1.42-1.823Z"/></svg>MongoDB</div>
            </div>
        </div>
        
        <div class="cta-box reveal">
            <h3>Ready to partner with us?</h3>
            <p>Let's turn your ideas into digital reality. Reach out to our team to discuss your next big project.</p>
            <a href="index.php#contact" class="button button-primary btn-shine" style="border-radius: 999px;">Contact Us Today</a>
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

<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
</body>
</html>
