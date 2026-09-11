<?php
$activePage = 'industry';
$title = 'Healthcare Industry Solutions | Mithila Softech';

// Healthcare Data
$industry_data = [
    "title" => "Healthcare",
    "desc" => "Helping clinics, hospitals, and medical organizations digitize operations with secure and smart healthcare solutions.",
    "img" => "assets/image/healthcareindustry.jpg",
    "overview" => "We build advanced healthcare IT systems that improve patient care, streamline hospital operations, and ensure data security.",
    "detail" => "Our healthcare solutions help hospitals and clinics manage patient records, appointments, billing, and diagnostics efficiently. We create scalable platforms including telemedicine systems, EMR solutions, and hospital management software.",
    "gallery" => [
      "assets/image/healthcareindustry.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Healthcare Software Solutions | Medical IT Services</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

<style>
    /* --- NEW HERO STYLES (Matching Home Page) --- */
    .srv-hero-wrapper {
        text-align: center;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/healthcareindustry.jpg') center/cover no-repeat;
        background-size: cover;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        position: relative;
        z-index: 1;
        padding: 120px 0 100px;
    }
    .srv-hero-bg-orb1, .srv-hero-bg-orb2 {
        position: absolute; border-radius: 50%; filter: blur(120px); z-index: -1; opacity: 0.45; animation: srvHeroOrbDrift 10s alternate infinite ease-in-out;
    }
    .srv-hero-bg-orb1 { top: -10%; left: -10%; width: 40vw; height: 40vw; background: #1d4ed8; }
    .srv-hero-bg-orb2 { bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: #38bdf8; animation-duration: 12s; animation-direction: alternate-reverse; }
    @keyframes srvHeroOrbDrift { 0% { transform: translate(0, 0); } 100% { transform: translate(40px, 40px); } }
    
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
            grid-template-columns: repeat(4, 1fr); 
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
</style>

    <meta name="description" content="Advanced healthcare software solutions for hospitals, clinics, and medical businesses.">
    <meta name="keywords" content="healthcare IT, hospital software">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/industry/healthcare" />
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">🏥 &nbsp; Healthcare Solutions</span>
        <h1 class="srv-hero-headline">Healthcare Software Solutions <br><span class="srv-hero-headline-bold">for <span class="srv-hero-headline-accent">Hospitals &amp; Clinics</span></span></h1>
        <p class="srv-hero-subtext"><?php echo htmlspecialchars($industry_data['desc']); ?></p>
    </div>
</section>

<!-- CONTENT -->
<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="container content-container" style="position: relative; z-index: 2;">

        <!-- INTRO -->
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow reveal">HealthTech Solutions</span>
                <h2 class="reveal" style="transition-delay: 0.05s;">Digital Systems for <span>Modern Healthcare</span></h2>
                <p class="reveal" style="transition-delay: 0.15s;"><?php echo htmlspecialchars($industry_data['overview']); ?></p>
                <p class="reveal" style="transition-delay: 0.25s;"><?php echo htmlspecialchars($industry_data['detail']); ?></p>
            </div>
            <div class="intro-image-wrap reveal" style="transition-delay: 0.3s;">
                <img src="<?php echo htmlspecialchars($industry_data['gallery'][0]); ?>" alt="hospital management software India" loading="lazy">
            </div>
        </div>

        <!-- FEATURES -->
        <div class="service-features-grid">
            <div class="feature-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                </div>
                <h3>Hospital Management System</h3>
                <p>Manage patients, appointments, staff, and billing efficiently in one centralized, secure system.</p>
            </div>

            <div class="feature-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
                </div>
                <h3>Electronic Medical Records</h3>
                <p>Securely store and access patient history, e-prescriptions, and laboratory reports seamlessly.</p>
            </div>

            <div class="feature-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.6 11.6L22 7v10l-6.4-4.6v-1z"></path><rect x="2" y="5" width="14" height="14" rx="2" ry="2"></rect></svg></div>
                </div>
                <h3>Telemedicine Platforms</h3>
                <p>Enable high-quality video consultations and reliable remote healthcare services for your patients.</p>
            </div>

            <div class="feature-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                </div>
                <h3>Patient & Doctor Portals</h3>
                <p>Provide real-time secure access to appointments, diagnostics, and direct communication.</p>
            </div>
        </div>

        <!-- SERVICES -->
        <span class="eyebrow reveal">Our Offerings</span>
        <h3 class="reveal" style="transition-delay: 0.05s;">Our <span>Healthcare Services</span></h3>
        <ul class="reveal" style="transition-delay: 0.15s;">
            <li><strong>Appointment & Scheduling Systems:</strong> Smart booking engines for clinics and large hospitals.</li>
            <li><strong>Billing & Insurance Management:</strong> Automated revenue cycle management and claims processing.</li>
            <li><strong>Lab & Diagnostic Integration:</strong> LIMS integration for real-time test results and reporting.</li>
            <li><strong>Mobile Health Applications:</strong> Patient-facing apps for tracking vitals, medications, and tele-consults.</li>
        </ul>

        <!-- PROCESS -->
        <span class="eyebrow reveal" style="margin-top: 40px;">How We Work</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Development Process</span></h3>
        <p class="reveal" style="transition-delay: 0.15s;">We build healthcare platforms focusing on intuitive design, strict data security, and compliance with health regulations.</p>
        <div class="process-grid">
            <div class="process-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top"><div class="process-step-num">1</div></div>
                <h3 style="margin-top: 16px;">Requirement Analysis</h3><p>We consult with your staff to understand hospital workflows and critical system requirements.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top"><div class="process-step-num">2</div></div>
                <h3 style="margin-top: 16px;">UI/UX Design</h3><p>We create simple, distraction-free and intuitive dashboards suitable for fast-paced medical environments.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.3s;">
                <div class="card-top"><div class="process-step-num">3</div></div>
                <h3 style="margin-top: 16px;">Secure Development</h3><p>Our engineers build robust platforms prioritizing patient data privacy and strict healthcare compliance.</p>
            </div>
            <div class="process-card reveal" style="transition-delay: 0.4s;">
                <div class="card-top"><div class="process-step-num">4</div></div>
                <h3 style="margin-top: 16px;">Deployment & Training</h3><p>We deploy the system smoothly and train your medical staff to ensure rapid, error-free adoption.</p>
            </div>
        </div>

        <!-- TECH STACK -->
        <div class="tech-stack-section">
            <span class="eyebrow reveal">Tech Stack</span>
            <h2 class="reveal" style="transition-delay: 0.05s;">Technologies for <span>Healthcare</span></h2>
            <p class="reveal" style="transition-delay: 0.15s;">We utilize robust, highly secure frameworks engineered specifically for critical health data management.</p>
            <div class="tech-stack-grid">
                <div class="tech-item reveal" style="transition-delay: 0.1s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>FHIR / HL7 Integration</div>
                <div class="tech-item reveal" style="transition-delay: 0.15s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Electronic Medical Records</div>
                <div class="tech-item reveal" style="transition-delay: 0.2s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.6 11.6L22 7v10l-6.4-4.6v-1z"></path><rect x="2" y="5" width="14" height="14" rx="2" ry="2"></rect></svg>Telemedicine APIs (WebRTC)</div>
                <div class="tech-item reveal" style="transition-delay: 0.25s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg>Compliant Cloud (AWS/Azure)</div>
                <div class="tech-item reveal" style="transition-delay: 0.3s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>AI for Diagnostics</div>
                <div class="tech-item reveal" style="transition-delay: 0.35s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>IoT Medical Devices</div>
                <div class="tech-item reveal" style="transition-delay: 0.4s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>Blockchain Records</div>
                <div class="tech-item reveal" style="transition-delay: 0.45s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Data Security & Encryption</div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box reveal">
            <h3>Ready to partner with us?</h3>
            <p>Let's turn your ideas into digital reality. Reach out to our team to discuss your next big project.</p>
            <a href="index.php#contact" class="button button-primary btn-shine" style="border-radius: 999px;">Contact Us Today</a>
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

      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add("active"); });
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
