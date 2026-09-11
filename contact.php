<?php
$activePage = 'about';
$title = 'About Us | Mithila Softech';
$logo_path = "assets/image/ms.png";

$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = $base_dir === '/' ? '/' : $base_dir . '/';

$awards = [
    ["name" => "GeM", "img" => "assets/image/gem.png"],
    ["name" => "Ministry of MSME", "img" => "assets/image/MSMElogo.png"],
    ["name" => "#startupindia", "img" => "assets/image/StartupIndia.png"],
    ["name" => "STARTUP BIHAR", "img" => "assets/image/startUpBihar.png"],
];
$clients = [
    ["name" => "L&T", "img" => "assets/image/l-and-t.png", "bg" => "#ffffff"],
    ["name" => "Wipro", "img" => "assets/image/wipro_logo.png", "bg" => "#dceaff"],
    ["name" => "Tech Mahindra", "img" => "assets/image/tech_mahindra_logo.png", "bg" => "#ffffff"],
    ["name" => "Virtusa", "img" => "assets/image/virtusa_logo.png", "bg" => "#d4e5ff"],
    ["name" => "Harman", "img" => "assets/image/harman_logo.png", "bg" => "#ffffff"],
    ["name" => "Hexaware", "img" => "assets/image/hexaware_logo.png", "bg" => "#cddfff"],
    ["name" => "NYC", "img" => "assets/image/nyclogo.png", "bg" => "#ffffff"], 
    ["name" => "Avia", "img" => "assets/image/avia.png", "bg" => "#c5daff"],
    ["name" => "Think Sys", "img" => "assets/image/Thinksys.png", "bg" => "#ffffff"],
    ["name" => "Aski Inc", "img" => "assets/image/askilogoo.png", "bg" => "#bdd4ff"],
];

$stats = [
    ["number"=>"60","label"=>"Technologies Mastered", "icon"=>"💻"],
    ["number"=>"50","label"=>"Team Strength", "icon"=>"👥"],
    ["number"=>"100","label"=>"Clients Worldwide", "icon"=>"🌍"],
    ["number"=>"20","label"=>"Services Offered", "icon"=>"⚙️"]
];

$testimonials = [
    ["name" => "Info somnath", "role" => "Customer", "text" => "Outstanding SEO agency! Mithila Softech helped us fix our website's technical SEO, optimize our content, and significantly increase our organic search traffic. They provide excellent monthly reports, clear communication, and most importantly real results. If you want your website to rank higher on Google, they are the team to trust.", "link" => "", "img" => "assets/image/ms.png"],
    ["name" => "Deepak Mishra", "role" => "Customer", "text" => "I had a really good experience with Mithila Softtech Company. The team is helpful, friendly, and easy to communicate with. They understand requirements well and deliver the work on time without compromising on quality. Overall, it’s a reliable company with a positive work approach. I would definitely recommend Mithila Softtech to others.", "link" => "https://share.google/PYO50A25Sab77pOy5", "img" => "assets/image/deepak_mishra.jpg"],
    ["name" => "Pramod Kumar", "role" => "Customer", "text" => "Good experience overall. The team was cooperative, patient, and focused on understanding our business requirements before starting the work.", "link" => "https://share.google/mRT25cRYPsquMdwQT", "img" => "assets/image/pramod_kumar.jpg"],
    ["name" => "Namrata", "role" => "Customer", "text" => "Mithila Softech helped improve our website structure and local SEO. We noticed better engagement after implementing their suggestions.", "link" => "https://share.google/J6DHkkc3mdBdsAuPv", "img" => "assets/image/namrata.jpg"],
    ["name" => "Anshika Singh", "role" => "Customer", "text" => "Had a great experience working with Mithila Softech. Their team explained the SEO process clearly and helped improve our website visibility. Communication was smooth throughout the project.", "link" => "https://share.google/vOJPK0RddwMq5CkKd", "img" => "assets/image/anshika_singh.jpg"],
    ["name" => "The Abhishek Sharma", "role" => "Customer", "text" => "Mithila Softech stands out for their industry-specific approach. They don't offer a one-size-fits-all solution — they actually understand your sector and build accordingly. Clean communication, timely delivery, and real results. Would definitely work with them again.", "link" => "https://share.google/Tlfx2H8cOBZ0rlW2H", "img" => "assets/image/abhishek_sharma.jpg"],
    ["name" => "Ragini Mishra", "role" => "Customer", "text" => "The team is creative and understands branding well. They helped us improve our social media presence and website performance.", "link" => "https://share.google/cuLmepYkySKJUF3WA", "img" => "assets/image/ragini_mishra.jpg"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo $base_url; ?>">
    <title>Contact Mithila Softech | Get IT Solutions Today</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    <link rel="icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        /* --- HERO STYLES --- */
        .srv-hero-wrapper {
            text-align: center;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/digitalseva.jpg') center/cover no-repeat;
            background-size: cover;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            position: relative;
            z-index: 1;
            padding: 120px 0 100px;
        }
        .srv-hero-wrapper::after {
            content: ''; position: absolute; top: -30px; left: -30px; right: -30px; bottom: -30px;
            background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 30px 30px; opacity: 0.3; z-index: -1;
            animation: bgScroll 20s linear infinite;
            will-change: transform;
        }
        @keyframes bgScroll { 0% { transform: translate3d(0, 0, 0); } 100% { transform: translate3d(30px, 30px, 0); } }
        .srv-hero-bg-orb1, .srv-hero-bg-orb2 {
            position: absolute; border-radius: 50%; filter: blur(120px); z-index: -1; opacity: 0.45; animation: srvHeroOrbDrift 10s alternate infinite ease-in-out; will-change: transform;
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
        .srv-hero-headline-accent { display: block; margin-top: 6px; background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .srv-hero-subtext {
            font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.7; margin: 0 auto 36px; max-width: 800px;
            opacity: 0; animation: srvFadeUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s;
        }
        @keyframes srvFadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
        
        .eyebrow { display: inline-flex; align-items: center; gap: 6px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--green); margin-bottom: 12px; background: rgba(29, 78, 158, 0.08); padding: 6px 16px; border-radius: 100px; border: 1px solid rgba(29, 78, 158, 0.15); position: relative; overflow: hidden; }
        .eyebrow::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(29, 78, 158, 0.15), transparent); animation: shine 3s infinite; }
        
        .content-section { padding: 88px 0; background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden; }
        .content-container { max-width: 1100px; margin: 0 auto; color: var(--text); font-size: 1.05rem; line-height: 1.75; }
        .content-container h2 { color: var(--text); font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; margin-bottom: 24px; line-height: 1.15; }
        .content-container h3 { color: var(--text); font-size: 1.5rem; font-weight: 800; margin-top: 60px; margin-bottom: 20px; }
        .content-container p { margin-bottom: 24px; color: var(--muted); }
        
        .cta-box { background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
        .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; }
        .cta-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-strong); }
        .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
        .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
        .cta-box .button-primary { background: #ffffff !important; color: var(--green-dark) !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; }
        .cta-box .btn-shine::after { background: linear-gradient(to right, rgba(29, 78, 158, 0) 0%, rgba(29, 78, 158, 0.1) 50%, rgba(29, 78, 158, 0) 100%); }
        
        .btn-shine { position: relative; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; }
        .btn-shine::after { content: ''; position: absolute; top: 0; left: 0; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%); transform: skewX(-25deg) translate3d(-250%, 0, 0); animation: shine 3s infinite; will-change: transform; }
        .btn-shine:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 10px 24px rgba(29, 78, 158, 0.3); }
        @keyframes shine { 0% { transform: skewX(-25deg) translate3d(-250%, 0, 0); } 20%, 100% { transform: skewX(-25deg) translate3d(250%, 0, 0); } }
        
        /* Image & Intro Grid Styles */
        .intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px; }
        .intro-image-wrap { position: relative; border-radius: 24px; overflow: hidden; box-shadow: var(--shadow-strong); animation: floatImg 6s ease-in-out infinite; border: 4px solid #fff; }
        .intro-image-wrap::before { content: ''; position: absolute; inset: -10px; background: linear-gradient(135deg, var(--green), var(--blue)); z-index: -1; border-radius: 28px; filter: blur(15px); opacity: 0.6; }
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
        .service-features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin: 60px 0; }
        
        .feature-card { 
            position: relative; z-index: 1; overflow: hidden;
            background: #ffffff; border: 1px solid rgba(29, 78, 158, 0.1); border-radius: 20px; padding: 36px 30px; 
            box-shadow: var(--shadow); transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
        }
        .feature-card:nth-child(even) {
            --hover-grad: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        .feature-card::before { content: ""; position: absolute; inset: 0; background: var(--hover-grad); opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 24px 40px rgba(29, 78, 158, 0.15); border-color: transparent; }
        .feature-card:hover::before { opacity: 1; }
        .feature-card h3, .feature-card p { transition: color 0.4s ease; }
        .feature-card:hover h3 { color: #fff; }
        .feature-card:hover p { color: rgba(255,255,255,0.8); }

        .card-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; position: relative; z-index: 2; width: 100%; }
        
        .feature-icon {
            width: 56px; height: 56px; background: var(--hover-grad); color: #fff; margin-bottom: 0;
            border-radius: 16px; display: flex; align-items: center; justify-content: center; 
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .feature-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); background: rgba(255,255,255,0.2) !important; box-shadow: 0 0 30px rgba(255,255,255,0.5); border: 1.5px solid rgba(255,255,255,0.35); color: #fff; }
        .feature-card h3 { font-size: 1.25rem; color: var(--text); margin-bottom: 12px; font-weight: 700; margin-top: 0; }
        .feature-card p { font-size: 1rem; color: var(--muted); margin: 0; line-height: 1.6; }

        /* Awards & Clients Sliders (Matching Home Page) */
        .awards-slider { overflow: hidden; margin-top: 8px; padding: 15px 0; }
        .awards-track { display: flex; gap: 24px; width: max-content; animation: scrollAwards 18s linear infinite; }
        .awards-track:hover, .awards-track:active { animation-play-state: paused; }
        .award-item { flex-shrink: 0; padding: 0 16px; display: flex; align-items: center; justify-content: center; min-height: 110px; transition: transform 0.3s ease; }
        .award-item:hover { transform: translateY(-5px) scale(1.05); }
        .award-item img { width: auto; max-width: 240px; height: 70px; object-fit: contain; }
        .award-item strong { font-size: 0.9rem; text-align: center; }
        @keyframes scrollAwards { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-50% - 12px)); } }
        @media (max-width: 768px) {
            .awards-track { gap: 16px; }
            .award-item img { max-width: 150px; height: 50px; }
            .award-item { min-height: 80px; padding: 0 10px; }
            @keyframes scrollAwards { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-50% - 8px)); } }
        }
        @media (max-width: 480px) {
            .awards-track { gap: 12px; }
            .award-item img { max-width: 120px; height: 40px; }
            .award-item { min-height: 60px; padding: 0 8px; }
            @keyframes scrollAwards { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-50% - 6px)); } }
        }
        
        /* Values Slider */
        .values-slider-wrapper { position: relative; margin-top: 30px; padding: 10px 0; }
        .values-track { display: flex; gap: 30px; overflow-x: auto; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; padding: 10px 0; }
        .values-track::-webkit-scrollbar { display: none; }
        .values-track .feature-card { width: 340px; min-width: 340px; flex-shrink: 0; margin-bottom: 0; }
        
        .scroll-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 50px; height: 50px; border-radius: 50%;
            background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(8px);
            border: 1px solid var(--line); box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            color: var(--green); display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 10;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .scroll-btn:hover {
            background: var(--green);
            color: #ffffff;
            box-shadow: var(--shadow-strong);
            transform: translateY(-50%) scale(1.1);
        }
        .prev-btn { left: -25px; }
        .next-btn { right: -25px; }
        @media (max-width: 1200px) {
            .prev-btn { left: 10px; }
            .next-btn { right: 10px; }
        }
        

        /* Testimonials Section */
        .testimonials-slider-wrapper { position: relative; margin-top: 24px; display: flex; align-items: center; gap: 20px; }
        .testimonials-track { flex: 1 1 auto; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; overflow: visible; padding: 10px 0; }
        .testimonials-track::-webkit-scrollbar { display: none; }
        .testimonials-track .testimonial-card { min-width: 0; margin-bottom: 0; }
        .testimonial-view-more-side { flex: 0 0 auto; display: flex; align-items: center; justify-content: center; padding: 10px 0; }
        
        .scroll-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 50px; height: 50px; border-radius: 50%;
            background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(8px);
            border: 1px solid var(--line); box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            color: var(--green); display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 10;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .scroll-btn:hover {
            background: var(--green);
            color: #ffffff;
            box-shadow: var(--shadow-strong);
            transform: translateY(-50%) scale(1.1);
        }
        .prev-btn { left: -25px; }
        .next-btn { right: -25px; }
        @media (max-width: 1200px) {
            .prev-btn { left: 10px; }
            .next-btn { right: 10px; }
        }
        
        .testimonial-card { background: #ffffff; border: 1px solid rgba(0,0,0,0.05); border-radius: 24px; padding: 36px 26px; box-shadow: 0 12px 34px -12px rgba(0,0,0,0.08); transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease; position: relative; overflow: hidden; display: flex; flex-direction: column; }
        .testimonial-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(29, 78, 158, 0.12); border-color: var(--blue); }
        .quote-icon { position: absolute; top: -10px; right: 20px; font-size: 8rem; color: rgba(29, 78, 158, 0.05); font-family: Georgia, serif; line-height: 1; pointer-events: none; }
        .testimonial-text { font-size: 1.02rem; color: var(--muted); line-height: 1.7; margin-bottom: 26px; position: relative; z-index: 2; flex-grow: 1; }
        .testimonial-author { display: flex; align-items: center; gap: 16px; position: relative; z-index: 2; }
        .author-avatar { width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, var(--green), var(--blue)); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; box-shadow: 0 4px 10px rgba(29, 78, 158, 0.3); }
        .author-info h4 { margin: 0 0 4px 0; font-size: 1rem; color: var(--text); font-weight: 800; }
        .author-info span { font-size: 0.85rem; color: var(--blue); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }

        .content-container h2 span, .content-container h3 span { background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        
        .reveal { opacity: 0; transform: translateY(36px) scale(0.96); transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal.active { opacity: 1; transform: translateY(0) scale(1); }

        @media (max-width: 768px) {
            .srv-hero-wrapper { padding: 80px 0 60px; }
            .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
            .content-section, .stats-section { padding: 60px 0; }
            .cta-box { padding: 36px 20px; margin-top: 50px; }
            .service-features-grid { gap: 20px; }
            .feature-card { padding: 24px; }
            .values-track .feature-card { width: 280px; min-width: 280px; }
            .testimonials-slider-wrapper { flex-direction: column; align-items: stretch; }
            .testimonials-track { grid-template-columns: 1fr; }
            .testimonials-track .testimonial-card { min-width: 0; }
            .testimonial-view-more-side { justify-content: center; }
        }
        @media (max-width: 991px) {
            .testimonials-slider-wrapper { flex-direction: column; align-items: stretch; }
            .testimonials-track { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .testimonial-view-more-side { justify-content: center; }
        }
        @media (max-width: 768px) {
            .testimonials-track { grid-template-columns: 1fr; }
        }
    </style>
    <meta name="description" content="Contact Mithila Softech for software, web, mobile app &amp; digital marketing services. Let’s build your solution today.">
    <meta name="keywords" content="contact IT company, hire developers India">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/contact" />
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">📞 &nbsp; Get in Touch</span>
        <h1 class="srv-hero-headline">Contact Mithila Softech – <br><span class="srv-hero-headline-bold">Let’s Build <span class="srv-hero-headline-accent">Your Solution</span></span></h1>
        <p class="srv-hero-subtext">We are a team of passionate developers, designers, and digital strategists dedicated to building robust technology solutions for growing businesses.</p>
    </div>
</section>

<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="container content-container" style="position: relative; z-index: 2;">
        
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow reveal">Who We Are</span>
                <h2 class="reveal" style="transition-delay: 0.05s;">Digital Power. <br><span>Business Ki Seva.</span></h2>
                <p class="reveal" style="transition-delay: 0.15s;">Mithila Softech is a premier technology solutions and digital consulting agency. We bridge the gap between complex business challenges and scalable technological innovation.</p>
                <p class="reveal" style="transition-delay: 0.25s;">From custom software development and enterprise resource planning (ERP) to digital marketing and government e-services (CSC, PAN, Aadhaar), we provide an end-to-end ecosystem designed to accelerate your growth and operational efficiency.</p>
            </div>
            <div class="intro-image-wrap reveal" style="transition-delay: 0.3s;">
                <img src="assets/image/digitalseva.jpg" alt="contact Mithila Softech office" loading="lazy">
            </div>
        </div>

        <span class="eyebrow reveal" style="margin-top: 20px;">Our Journey</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">How It <span>Started</span></h3>
        <p class="reveal" style="transition-delay: 0.15s;">Founded with a vision to democratize technology for businesses across India, Mithila Softech began as a small group of passionate developers. Over the years, we've grown into a comprehensive IT and digital marketing agency, helping hundreds of brands transition to the digital space.</p>
        <p class="reveal" style="transition-delay: 0.25s; margin-bottom: 40px;">Our journey has been fueled by a commitment to quality, a deep understanding of our clients' needs, and an unwavering focus on delivering measurable results. Today, we stand proud as a trusted technology partner for startups, enterprises, and government initiatives alike.</p>

    </div>
</section>

<!-- IMPACT SECTION MATCHING HOME PAGE -->
<section class="section stats-section reveal" style="background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); position: relative; overflow: hidden; padding: 72px 0;">
    <div style="position: absolute; top: -50px; left: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(50px);"></div>
    <div style="position: absolute; bottom: -50px; right: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(50px);"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-heading center" style="text-align: center; margin-bottom: 28px;">
            <span class="eyebrow" style="background: rgba(255,255,255,0.1); color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; border: 1px solid rgba(255,255,255,0.2);">Our Impact</span>
            <h2 style="color: #ffffff !important; margin-top: 15px; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800;">Our <span style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; background: none !important;">Strength in Numbers</span></h2>
            <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Delivering excellence and scaling businesses globally through technology.</p>
        </div>
        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px;">
        <?php foreach ($stats as $index => $stat): ?>
            <article class="stat-card reveal" style="--delay: <?php echo ($index * 0.1); ?>s; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 28px 18px; text-align: center; backdrop-filter: blur(10px); transition: transform 0.3s ease, background 0.3s ease;">
                <div class="stat-icon" style="font-size: 2.5rem; margin-bottom: 16px;"><?php echo $stat["icon"]; ?></div>
                <strong style="display: block; font-size: 3.5rem; font-weight: 900; line-height: 1; margin-bottom: 8px; color: #fff;"><span class="counter" data-target="<?php echo $stat["number"]; ?>">0</span>+</strong>
                <span style="font-size: 1rem; color: rgba(255,255,255,0.85); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;"><?php echo $stat["label"]; ?></span>
            </article>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container content-container" style="position: relative; z-index: 2;">
        <span class="eyebrow reveal" style="margin-top: 0;">Our Compass</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Mission & <span>Vision</span></h3>
        
        <div class="service-features-grid" style="margin-bottom: 20px;">
            <div class="feature-card reveal" style="transition-delay: 0.1s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg></div>
                </div>
                <h3>Our Mission</h3>
                <p>To empower businesses of all sizes by delivering innovative, scalable, and affordable digital solutions that drive measurable operational excellence and market growth.</p>
            </div>
            <div class="feature-card reveal" style="transition-delay: 0.2s;">
                <div class="card-top">
                    <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
                </div>
                <h3>Our Vision</h3>
                <p>To become a globally recognized technology partner known for uncompromised quality, strict integrity, and transforming ordinary ideas into extraordinary digital experiences.</p>
            </div>
        </div>

        <span class="eyebrow reveal" style="margin-top: 32px;">Why Us</span>
        <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Core Values</span></h3>

        <div class="values-slider-wrapper reveal" style="transition-delay: 0.1s;">
            <button class="scroll-btn prev-btn" aria-label="Scroll Left" onclick="scrollValues(-350)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            
            <div class="values-track" id="valuesTrack">
                <div class="feature-card">
                    <div class="card-top">
                        <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
                    </div>
                    <h3>Integrity & Transparency</h3>
                    <p>We believe in honest communication, clear timelines, and transparent pricing. No hidden fees or unexpected technical jargon.</p>
                </div>
                <div class="feature-card">
                    <div class="card-top">
                        <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
                    </div>
                    <h3>Agile Innovation</h3>
                    <p>Technology moves fast, and so do we. We adopt agile methodologies to deliver iterative, high-quality updates that adapt to your market.</p>
                </div>
                <div class="feature-card">
                    <div class="card-top">
                        <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                    </div>
                    <h3>Client-Centricity</h3>
                    <p>Your success is our success. We partner with you at every step, providing dedicated support and tailored architectural planning.</p>
                </div>
                <div class="feature-card">
                    <div class="card-top">
                        <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
                    </div>
                    <h3>Excellence in Quality</h3>
                    <p>From clean, scalable code to stunning user interfaces, we rigorously test every deliverable to ensure it meets enterprise standards.</p>
                </div>
            </div>
            
            <button class="scroll-btn next-btn" aria-label="Scroll Right" onclick="scrollValues(350)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <div style="margin-top: 40px;">
            <span class="eyebrow reveal">Excellence</span>
            <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Awards & <span>Recognition</span></h3>
            <p class="reveal" style="transition-delay: 0.15s;">Celebrated for excellence in delivering IT solutions across the industry.</p>
            <div class="awards-slider reveal" style="transition-delay: 0.25s;">
                <div class="awards-track">
                    <?php foreach($awards as $award): ?>
                        <article class="award-item">
                            <?php if(!empty($award['img'])): ?>
                                <img src="<?php echo htmlspecialchars($award['img']); ?>" alt="<?php echo htmlspecialchars($award['name']); ?>" loading="lazy" />
                            <?php else: ?>
                                <strong><?php echo htmlspecialchars($award['name']); ?></strong>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                    <?php foreach($awards as $award): ?>
                        <article class="award-item" aria-hidden="true">
                            <?php if(!empty($award['img'])): ?>
                                <img src="<?php echo htmlspecialchars($award['img']); ?>" alt="<?php echo htmlspecialchars($award['name']); ?>" loading="lazy" />
                            <?php else: ?>
                                <strong><?php echo htmlspecialchars($award['name']); ?></strong>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div style="margin-top: 40px; margin-bottom: 12px;">
            <span class="eyebrow reveal">Trusted By</span>
            <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">Our <span>Clients</span></h3>
            <p class="reveal" style="transition-delay: 0.15s;">Partnering with industry leaders and innovative companies to deliver exceptional results.</p>
            <div class="awards-slider reveal" style="transition-delay: 0.25s;">
                <div class="awards-track" style="animation-direction: reverse;">
                    <?php foreach ($clients as $client): ?>
                        <article class="award-item">
                            <?php if(!empty($client['img'])): ?>
                                <img src="<?php echo htmlspecialchars($client['img']); ?>" alt="<?php echo htmlspecialchars($client['name']); ?>" loading="lazy" />
                            <?php else: ?>
                                <strong><?php echo htmlspecialchars($client['name']); ?></strong>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                    <!-- Duplicate for infinite scrolling -->
                    <?php foreach ($clients as $client): ?>
                        <article class="award-item" aria-hidden="true">
                            <?php if(!empty($client['img'])): ?>
                                <img src="<?php echo htmlspecialchars($client['img']); ?>" alt="<?php echo htmlspecialchars($client['name']); ?>" loading="lazy" />
                            <?php else: ?>
                                <strong><?php echo htmlspecialchars($client['name']); ?></strong>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div style="margin-top: 40px; margin-bottom: 24px;">
            <span class="eyebrow reveal">Client Stories</span>
            <h3 class="reveal" style="transition-delay: 0.05s; margin-top: 10px;">What Our <span>Clients Say</span></h3>
            <p class="reveal" style="transition-delay: 0.15s;">Don't just take our word for it. Here is what businesses have to say about partnering with Mithila Softech.</p>
            
            <div class="testimonials-slider-wrapper reveal" style="transition-delay: 0.25s;">
                <div class="testimonials-track" id="contactTestimonialsTrack" style="gap: 20px;">
                <?php foreach($testimonials as $index => $t): ?>
                    <article class="testimonial-card testimonial-card-toggle" <?php echo $index >= 3 ? 'hidden' : ''; ?>>
                        <div class="quote-icon">"</div>
                        <div class="stars" style="color: #f59e0b; margin-bottom: 14px; display: flex; gap: 3px;">
                            <?php for($i=0; $i<5; $i++): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <?php endfor; ?>
                        </div>
                        <?php 
                            $text = htmlspecialchars($t['text']);
                            $limit = 100;
                            $isLong = strlen($text) > $limit;
                            $shortText = $isLong ? substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...' : $text;
                        ?>
                        <p class="testimonial-text">
                            <span class="short-text"><?php echo $shortText; ?></span>
                            <?php if ($isLong): ?>
                                <span class="full-text" style="display: none;"><?php echo $text; ?></span>
                                <a href="javascript:void(0);" onclick="this.previousElementSibling.style.display='inline'; this.previousElementSibling.previousElementSibling.style.display='none'; this.style.display='none';" style="color: var(--blue); text-decoration: none; font-weight: 600; margin-left: 5px;">Read more</a>
                            <?php endif; ?>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>
                                    <?php if (!empty($t['link'])): ?>
                                        <a href="<?php echo htmlspecialchars($t['link']); ?>" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;" title="View original review">
                                            <?php echo htmlspecialchars($t['name']); ?>
                                        </a>
                                    <?php else: ?>
                                        <?php echo htmlspecialchars($t['name']); ?>
                                    <?php endif; ?>
                                </h4>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                </div>
                <?php if (count($testimonials) > 3): ?>
                <div class="testimonial-view-more-side">
                    <button type="button" class="button button-primary" style="border-radius: 999px;" onclick="toggleTestimonials('contactTestimonialsTrack', this)">View More</button>
                </div>
                <?php endif; ?>
            </div>
        </div>

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
      const revealObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => { 
              if (entry.isIntersecting) { 
                  entry.target.classList.add("active"); 
                  observer.unobserve(entry.target);
              } 
          });
      }, { threshold: 0.1 });
      document.querySelectorAll(".reveal").forEach(el => revealObserver.observe(el));

      // Number Counter Logic
      const counterObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  const counter = entry.target;
                  const target = +counter.getAttribute('data-target');
                  const duration = 2000;
                  const increment = target / (duration / 16);
                  let current = 0;
                  
                  const updateCounter = () => {
                      current += increment;
                      if (current < target) {
                          counter.innerText = Math.ceil(current);
                          requestAnimationFrame(updateCounter);
                      } else {
                          counter.innerText = target;
                      }
                  };
                  setTimeout(updateCounter, 300);
                  observer.unobserve(counter);
              }
          });
      }, { threshold: 0.5 });
      document.querySelectorAll(".counter").forEach(el => counterObserver.observe(el));
  });

  function scrollValues(offset) {
      const track = document.getElementById('valuesTrack');
      if (track) {
          track.scrollBy({ left: offset, behavior: 'smooth' });
      }
  }

  function toggleTestimonials(trackId, button) {
      const track = document.getElementById(trackId);
      if (!track) return;
      const cards = Array.from(track.querySelectorAll('.testimonial-card-toggle'));
      const expanded = cards.every((card, index) => index < 3 || !card.hidden);
      cards.forEach((card, index) => {
          if (index >= 3) card.hidden = expanded;
      });
      button.textContent = expanded ? 'View More' : 'View Less';
  }

</script>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
</body>
</html>
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  const counter = entry.target;
                  const target = +counter.getAttribute('data-target');
                  const duration = 2000;
                  const increment = target / (duration / 16);
                  let current = 0;
                  
                  const updateCounter = () => {
                      current += increment;
                      if (current < target) {
                          counter.innerText = Math.ceil(current);
                          requestAnimationFrame(updateCounter);
                      } else {
                          counter.innerText = target;
                      }
                  };
                  setTimeout(updateCounter, 300);
                  observer.unobserve(counter);
              }
          });
      }, { threshold: 0.5 });
      document.querySelectorAll(".counter").forEach(el => counterObserver.observe(el));
  });

  function scrollValues(dir) {
      const track = document.getElementById('valuesTrack');
      if (track) {
          const card = track.querySelector('.feature-card');
          const gap = parseInt(window.getComputedStyle(track).gap) || 30;
          const scrollAmount = card ? (card.offsetWidth + gap) * Math.sign(dir) : dir;
          track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      }
  }
</script>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
</body>
</html>


