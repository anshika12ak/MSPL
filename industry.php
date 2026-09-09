<?php
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$logo_path = "assets/image/ms.png";
$fallbackImg = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='400' viewBox='0 0 600 400'%3E%3Crect width='600' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%236b7280' font-family='Arial' font-size='22'%3EImage unavailable%3C/text%3E%3C/svg%3E";

$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = $base_dir === '/' ? '/' : $base_dir . '/';

$industries = [
  [
    "title" => "Manufacturing",
    "desc" => "Automate workflows and enhance inventory efficiency with custom manufacturing software development services.",
    "img" => "assets/image/automation.jpg",
    "icon" => '<path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4H4a2 2 0 0 0-2 2z"/>',
    "overview" => "We help manufacturers modernize operations with automation, inventory control, and real-time monitoring systems.",
    "points" => ["Workflow automation & ERP", "Inventory & supply chain management", "Custom mobile apps for shop floor"],
    "detail" => "Manufacturers can automate workflows and enhance inventory efficiency with our custom manufacturing software development services. Providing comprehensive software development services for the manufacturing industry, Mithila Softech also specializes in the development of custom mobile apps and technology-based solutions for the manufacturing industry. The manufacturing industry has made some incredibly tremendous strides in technological integration despite the continuous changes and challenges every now and then, impeccable design innovations from startups, and a shortage of qualified and trained employees.",
    "gallery" => [
      "assets/image/automation.jpg",
      "https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?auto=format&fit=crop&w=400&q=80"
    ]
  ],
  [
    "title" => "Banking & Finance",
    "desc" => "Leverage fintech expertise to develop payment gateways, digital wallets, banking portals, and Robo advisors.",
    "img" => "assets/image/banking.jpg",
    "icon" => '<rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/>',
    "overview" => "We build secure, compliant fintech solutions that power modern banking experiences and financial workflows.",
    "points" => ["Payment gateways & digital wallets", "Banking portals & Robo advisors", "Regulatory compliance & security"],
    "detail" => "As a fintech development company, our main objective is to leverage our specialties to develop app solutions like payment gateways, digital wallets, banking portals, Robo advisors, and much more. We ensure high data security and optimize ROI for our customers. Partner with our FinTech developers to build robust applications that elevate financial services to the next level.",
    "gallery" => [
      "assets/image/banking.jpg",
      "assets/image/banking.jpg"
    ]
  ],
  [
    "title" => "Healthcare",
    "desc" => "Helping clinics, hospitals, and medical associations digitize and automate their daily processes with smart solutions.",
    "img" => "assets/image/healthcareindustry.jpg",
    "icon" => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
    "overview" => "We deliver healthcare software that streamlines patient management, records, and clinical operations efficiently.",
    "points" => ["Patient management systems", "EHR & clinical workflow tools", "Telemedicine & appointment portals"],
    "detail" => "The healthcare industry demands strict compliance, unparalleled data security, and seamless user experiences. We design, develop, and deploy HIPAA-compliant software solutions for clinics, hospitals, and telemedicine startups to make their daily processes organized, digital, and automated.",
    "gallery" => [
      "assets/image/healthcareindustry.jpg",
      "assets/image/healthcareindustry.jpg"
    ]
  ],
  [
    "title" => "Transport & Logistics",
    "desc" => "Making transportation and logistics transparent and simple with supply chain management systems.",
    "img" => "assets/image/DigitalLogistics.jpg",
    "icon" => '<rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
    "overview" => "We build logistics platforms that give real-time visibility across fleets, orders, and supply chain operations.",
    "points" => ["Fleet & route management", "Order tracking & supply chain visibility", "Warehouse & dispatch automation"],
    "detail" => "The industry is perennially advancing with the constant changes in the logistics and transportation industry. The race to provide cheaper services however still remains the same. To have increased output value it is necessary to have technologies that come economical and are easily manageable through the minimum training. The supply chain management system should be designed to make the transportation and logistics process transparent and simple.",
    "gallery" => [
      "assets/image/DigitalLogistics.jpg",
      "assets/image/DigitalLogistics.jpg"
    ]
  ],
  [
    "title" => "Retail",
    "desc" => "CRM and retail platforms to manage customer data, sales pipelines, and multi-channel business operations.",
    "img" => "assets/image/ecommercesolutions.png",
    "icon" => '<circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>',
    "overview" => "We develop retail tech solutions that connect customers, inventory, and sales teams in one unified ecosystem.",
    "points" => ["CRM & customer data management", "POS & inventory systems", "E-commerce & omnichannel integration"],
    "detail" => "A CRM system helps a company store and manage customer data. It enables customer service, sales, business development, marketing, recruitment and other departments to manage external interactions and customer relationships. A CRM system provides a central location for storing potential and current customers' contact information. CRM analytics can help businesses make better decisions, identify sales opportunities, track customer interactions, manage marketing campaigns, and record service issues.",
    "gallery" => [
      "assets/image/ecommercesolutions.png",
      "assets/image/ecommercesolutions.png"
    ]
  ],
  [
    "title" => "Education",
    "desc" => "School management systems and EdTech solutions designed for schools, colleges, and universities.",
    "img" => "assets/image/educationindustry.jpg",
    "icon" => '<path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',
    "overview" => "We create education technology platforms that simplify administration, enhance learning, and connect institutions.",
    "points" => ["School & university management systems", "LMS & e-learning platforms", "Student portals & digital classrooms"],
    "detail" => "All Aspects of Your School & Education Managed. Our expert team of professionals have designed the best School Management System for educational institutions to meet the specific and diverse requirements of schools, colleges, professional institutions, and universities. Our School ERP software is equipped with a dynamic web portal containing individual dashboards for Students, Parents, Teachers, Staff Members, and Management, allowing them to access all pertinent information and communication from a single location.",
    "gallery" => [
      "assets/image/educationindustry.jpg",
      "assets/image/educationindustry.jpg"
    ]
  ],
  [
    "title" => "Media",
    "desc" => "Helping media and entertainment companies embrace tech modernization and strengthen customer relationships.",
    "img" => "assets/image/media.png",
    "icon" => '<polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>',
    "overview" => "We build digital media platforms and content management systems that scale with audience and distribution needs.",
    "points" => ["Content management systems (CMS)", "OTT & streaming platform development", "Audience analytics & engagement tools"],
    "detail" => "Media and entertainment companies are being impacted by several emerging trends such as digitalization, multi-platform content consumption and the omnipresence of social media. We help organizations manage and analyze massive data volumes, launch scalable streaming platforms, and embrace tech modernization while maximizing audience engagement.",
    "gallery" => [
      "assets/image/media.png",
      "assets/image/media.png"
    ]
  ],
  [
    "title" => "Real Estate",
    "desc" => "Software for monitoring construction projects, progress tracking, and managing the real estate lifecycle.",
    "img" => "assets/image/realindustry.png",
    "icon" => '<path d="M3 21h18"/><path d="M9 8h1"/><path d="M9 12h1"/><path d="M9 16h1"/><path d="M14 8h1"/><path d="M14 12h1"/><path d="M14 16h1"/><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"/>',
    "overview" => "We develop property management and construction tracking platforms for real estate firms and developers.",
    "points" => ["Property listing & management portals", "Construction project tracking", "CRM for real estate sales teams"],
    "detail" => "Effective property and real estate management requires robust tools. We build solutions for property listings, agent CRMs, and construction project tracking to maximize your operational efficiency, ensure transparent tenant relationships, and accelerate sales cycles.",
    "gallery" => [
      "assets/image/realindustry.png",
      "assets/image/realindustry.png"
    ]
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Industry-Based IT Solutions | Software Services India</title>
  <meta name="description" content="Discover customized IT solutions for healthcare, finance, retail, logistics, and more industries.">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
  
  <style>
    :root{
      --primary-blue: var(--green);
      --primary-purple: var(--blue);
      --accent-orange: var(--accent);
      --gray-50: #f8fafc;
      --gray-100: #e5e7eb;
      --gray-600: #4b5563;
    }
    
    /* --- NEW HERO STYLES --- */
    .srv-hero-wrapper {
        text-align: center;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
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

    /* --- NEW GRID STYLES --- */
    .srv-category-section { position: relative; overflow: hidden; padding: 88px 0; background: var(--bg-alt); }
    .srv-card-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 50px; }
    .srv-card {
        width: 100%;
        background: var(--card); border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 24px; padding: 32px; box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05); height: 100%;
        position: relative; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;
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
    .srv-card-link {
        text-decoration: none;
        display: flex;
        flex: 1 1 320px;
        max-width: 380px;
    }
    .srv-card p { font-size: 1rem; color: var(--muted); line-height: 1.6; margin: 0; flex-grow: 1; transition: color 0.35s ease; }
    .srv-card:hover p { color: rgba(255,255,255,0.8); }

    /* --- DETAIL SECTIONS --- */
    .detail-item {
      display: grid; grid-template-columns: 1.1fr 1fr; gap: 36px;
      margin-top: 40px; border: 1px solid var(--line); border-radius: 24px;
      padding: 40px; background: #fff; scroll-margin-top: 100px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: var(--shadow);
    }
    .detail-item:hover { box-shadow: var(--shadow-strong); transform: translateY(-4px); }
    .detail-content h3 { color: var(--text); font-size: 32px; line-height: 1.2; margin-bottom: 14px; font-weight: 800; }
    .detail-content p { color: var(--muted); margin-bottom: 18px; line-height: 1.7; }
    .detail-list { list-style: none; display: flex; flex-direction: column; gap: 10px; padding: 0; }
    .detail-list li {
      background: var(--bg-alt); border: 1px solid var(--line);
      border-radius: 12px; padding: 14px 18px; font-size: 14px;
      color: var(--text); font-weight: 500; position: relative;
    }
    .detail-media > img:first-child { width: 100%; height: 280px; object-fit: cover; border-radius: 16px; margin-bottom: 14px; box-shadow: var(--shadow-strong); animation: floatImg 6s ease-in-out infinite; }
    @keyframes floatImg { 0%, 100% { transform: translateY(0); box-shadow: var(--shadow-strong); } 50% { transform: translateY(-15px); box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.2); } }
    .detail-gallery { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .detail-gallery img { width: 100%; height: 110px; object-fit: cover; border-radius: 12px; box-shadow: var(--shadow); }

    /* --- CTA BOX --- */
    .cta-box { background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; margin-bottom: 60px; }
    .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; }
    .cta-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-strong); }
    .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
    .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
    .cta-box .button-primary { background: #ffffff !important; color: var(--green-dark) !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; display: inline-block; padding: 14px 32px; text-decoration: none; border: none; }
    .btn-shine { position: relative; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; }
    .btn-shine::after { content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%); transform: skewX(-25deg); animation: shine 3s infinite; }
    .cta-box .btn-shine::after { background: linear-gradient(to right, rgba(29, 78, 158, 0) 0%, rgba(29, 78, 158, 0.1) 50%, rgba(29, 78, 158, 0) 100%); }
    @keyframes shine { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
    .btn-shine:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 10px 24px rgba(29, 78, 158, 0.3); }

    /* --- REVEAL --- */
    .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); transition-delay: var(--delay, 0ms); }
    .reveal.in-view { opacity: 1; transform: translateY(0); }

    /* --- RESPONSIVE --- */
    @media (max-width: 1200px) {
      :root { --service-visible: 2; }
      .prev-btn { left: 5px; }
      .next-btn { right: 5px; }
      .detail-item { grid-template-columns: 1fr; }
    }
    @media (max-width: 768px) {
      :root { --service-visible: 1; }
      .hero-content-slider { min-height: 420px; padding: 46px 0; }
      .services-section-ind { padding: 60px 0; }
      .detail-item { padding: 20px; gap: 20px; }
      .cta-box { padding: 36px 20px; margin-top: 50px; }
      .srv-hero-wrapper { padding: 80px 0 60px; }
      .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
      .srv-category-section { padding: 60px 0; }
      .srv-card-grid { margin-top: 30px; gap: 20px; }
      .srv-card { padding: 24px; }
    }
  </style>
    <meta name="keywords" content="industry software, IT solutions sectors">
    <link rel="canonical" href="https://www.mithilasoftech.com/industry" />
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php $activePage = 'industry'; include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="srv-hero-bg-orb1"></div>
    <div class="srv-hero-bg-orb2"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">🏢 &nbsp; Industries We Serve</span>
        <h1 class="srv-hero-headline">Industry-Specific IT Solutions <br><span class="srv-hero-headline-bold">for <span class="srv-hero-headline-accent">Business Growth</span></span></h1>
        <p class="srv-hero-subtext">Focused technology solutions aligned with the unique challenges and growth opportunities across leading industry sectors. We partner with businesses to build tools that improve efficiency, visibility, and growth.</p>
    </div>
</section>

<section class="section srv-category-section" id="industries-grid">
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-heading center reveal">
            <h2>Explore <span>Industries</span></h2>
            <p>Click on an industry below to learn how our tailored digital solutions can transform your operations.</p>
        </div>

        <div class="srv-card-grid text-left">
            <?php foreach ($industries as $i => $ind): 
                $hover_grad = ($i % 2 === 0) ? 'linear-gradient(135deg, #1D4E9E 0%, #153a75 100%)' : 'linear-gradient(135deg, #9837d4 0%, #7528a8 100%)';
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $ind['title'])));
                $link = 'industry-' . $slug . '.php';
            ?>
                <a href="<?= e($link) ?>" class="srv-card-link">
                    <article class="srv-card reveal" style="--hover-grad: <?= $hover_grad ?>; transition-delay: <?= ($i % 4) * 0.1 ?>s;">
                        <div class="srv-card-overlay"></div>
                        <div class="srv-card-accent"></div>
                        <div class="srv-card-content">
                            <div class="srv-card-top">
                                <div class="srv-card-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <?= $ind['icon'] ?>
                                    </svg>
                                </div>
                                <div class="srv-card-arrow" aria-label="Learn more about <?= htmlspecialchars($ind['title']) ?>">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <h3><?= htmlspecialchars($ind['title']) ?></h3>
                            <p><?= htmlspecialchars($ind['overview']) ?></p>
                        </div>
                    </article>
                </a>
            <?php endforeach; ?>
        </div>
  </div>
</section>

<div class="container">
    <div class="cta-box reveal">
      <h3>Ready to partner with us?</h3>
      <p>Let's turn your ideas into digital reality. Reach out to our team to discuss your next big project.</p>
        <a href="index.php#contact" class="button button-primary btn-shine" style="border-radius: 999px;">Contact Us Today</a>
    </div>
</div>

<?php include 'footer-new.php'; ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {
      
      // Header Hamburger Menu Toggle
      const hamburgerBtn = document.getElementById('hamburger-btn');
      const mainNav = document.getElementById('main-nav');
      if (hamburgerBtn && mainNav) {
          hamburgerBtn.addEventListener('click', () => {
              const isActive = mainNav.classList.toggle('is-active');
              hamburgerBtn.classList.toggle('is-active');
              hamburgerBtn.setAttribute('aria-expanded', isActive);
          });
      }

      // Scroll Reveal Animation
      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add("in-view"); });
      }, { threshold: 0.1 });
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
