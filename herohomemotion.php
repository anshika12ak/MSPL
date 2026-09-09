<?php
/**
 * Hero Component (Translated from React/Framer Motion to PHP/CSS)
 */

$logo = 'assets/image/round.jpg'; 

$chips = [
  ['label' => 'Web Development', 'dot' => '#a8224c', 'delay' => '0.65s'],
  ['label' => 'Mobile Apps', 'dot' => '#42a5f5', 'delay' => '0.77s'],
  ['label' => 'Recruitment Services', 'dot' => '#22a84b', 'delay' => '0.89s'],
  ['label' => 'Digital Marketing', 'dot' => '#c01515', 'delay' => '1.01s'],
];
?>

<style>
    /* Hero Section Scoped Styles */
    .hero-motion-section {
        overflow: hidden;
        background-color: #ffffff;
        font-family: 'Inter', sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 80px 0;
    }
    .hero-motion-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 0 20px;
    }
    .hero-motion-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(24px, 4vw, 40px);
        align-items: center;
    }

    /* Left Column Typography & Buttons */
    .hm-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 16px;
        border-radius: 50px;
        background: rgba(34, 168, 75, 0.1);
        color: #22a84b;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.05s;
    }
    .hm-headline {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin: 0 0 20px 0;
        color: #1a202c;
        opacity: 0;
        animation: fadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.18s, hmBlink 3s ease-in-out infinite 1s;
    }
    .hm-headline-bold { display: block; }
    .hm-headline-accent { color: #f37021; }
    .hm-subtext {
        font-size: 1.125rem;
        color: #4a5568;
        line-height: 1.6;
        margin-bottom: 36px;
        max-width: 90%;
        opacity: 0;
        animation: fadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.3s;
    }
    .hm-btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        opacity: 0;
        animation: fadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.42s;
    }
    .hm-btn {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 14px 32px; border-radius: 50px; font-weight: 600;
        text-decoration: none; transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hm-btn-primary { background: #22a84b; color: #ffffff; }
    .hm-btn-primary:hover { transform: scale(1.05) translateY(-2px); box-shadow: 0 10px 20px rgba(34, 168, 75, 0.2); }
    .hm-btn-secondary { background: transparent; color: #1a202c; border: 2px solid #e2e8f0; transition: all 0.2s ease; }
    .hm-btn-secondary:hover { transform: scale(1.04) translateY(-2px); border-color: #1e88e5; color: #1e88e5; }

    /* Right Column Visuals */
    .hm-visual {
        position: relative;
        width: 100%;
        height: 520px;
        max-width: 520px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        animation: springScaleIn 0.85s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.25s;
    }
    .hm-circle-outer { position: absolute; width: 420px; height: 420px; border: 1px dashed rgba(30, 136, 229, 0.4); border-radius: 50%; animation: spin 22s linear infinite; }
    .hm-orbit-dot { position: absolute; top: -6px; left: 50%; transform: translateX(-50%); width: 12px; height: 12px; background: #1e88e5; border-radius: 50%; box-shadow: 0 0 10px rgba(30, 136, 229, 0.5); }
    
    .hm-circle-inner { position: absolute; width: 280px; height: 280px; border: 1px dashed rgba(34, 168, 75, 0.4); border-radius: 50%; animation: spinReverse 14s linear infinite; }
    .hm-orbit-dot2 { position: absolute; bottom: -6px; left: 50%; transform: translateX(-50%); width: 12px; height: 12px; background: #22a84b; border-radius: 50%; box-shadow: 0 0 10px rgba(34, 168, 75, 0.5); }
    
    .hm-center-card {
        position: relative; width: 140px; height: 140px; background: #ffffff; border-radius: 50%;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08); display: flex; justify-content: center; align-items: center;
        opacity: 0; transform: scale(0.5);
        animation: springScaleIn 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards 0.5s;
        overflow: hidden;
    }
    .hm-center-card img { width: 85%; height: auto; object-fit: contain; }
    
    .hm-chips-row {
        position: absolute;
        bottom: 65px;
        width: 120%;
        left: -10%;
        overflow: hidden; 
        z-index: 10;
        white-space: nowrap;
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }
    .hm-chips-track {
        display: flex;
        gap: 16px;
        width: max-content;
        animation: hmMarquee 12s linear infinite;
    }
    .hm-chips-row:hover .hm-chips-track {
        animation-play-state: paused;
    }
    .hm-chip {
        display: flex; align-items: center; gap: 10px;
        padding: 12px 20px; background: #ffffff; border-radius: 50px;
        box-shadow: 0 12px 24px rgba(0,0,0,0.06); font-weight: 600; font-size: 0.95rem; color: #1a202c;
        border: 1px solid rgba(0,0,0,0.02);
    }
    .hm-chip-dot { width: 10px; height: 10px; border-radius: 50%; }

    /* Keyframes replacing framer-motion */
    @keyframes fadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes spin { to { transform: rotate(360deg); } }
    @keyframes spinReverse { to { transform: rotate(-360deg); } }
    @keyframes springScaleIn { to { opacity: 1; transform: scale(1); } }
    @keyframes hmBlink { 0%, 100% { opacity: 1; } 50% { opacity: 0.4; } }
    @keyframes hmMarquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-50% - 8px)); }
    }

    /* Responsive */
    @media (max-width: 991px) {
        .hero-motion-row { grid-template-columns: 1fr; text-align: center; }
        .hm-subtext { margin: 0 auto 30px auto; }
        .hm-btn-group { justify-content: center; }
        .hm-visual { margin-top: 40px; height: 470px; }
    }
    @media (max-width: 767px) {
        .hero-motion-section {
            min-height: auto;
            padding: 64px 0 48px;
        }
        .hm-subtext {
            max-width: 100%;
            font-size: 1rem;
        }
        .hm-visual {
            height: 430px;
            max-width: 100%;
        }
        .hm-center-card {
            width: 124px;
            height: 124px;
        }
        .hm-chips-row {
            bottom: 26px;
            width: 100%;
            left: 0;
        }
    }
    @media (max-width: 600px) {
        .hm-circle-outer { width: min(78vw, 320px); height: min(78vw, 320px); }
        .hm-circle-inner { width: min(54vw, 220px); height: min(54vw, 220px); }
        .hm-chip { padding: 10px 14px; font-size: 0.82rem; }
        .hm-chips-track {
            gap: 12px;
            animation-duration: 14s;
        }
    }
</style>

<section class="section hero-motion-section" id="home">
    <div class="hero-motion-container">
        <div class="hero-motion-row">
            <!-- Left Content -->
            <div class="hm-col-left">
                <span class="hm-badge">🇮🇳 &nbsp; Trusted IT Services Partner</span>
                <h1 class="hm-headline">Build Fast.<span class="hm-headline-bold"><span class="hm-headline-accent">Grow </span>Smarter.</span></h1>
                <p class="hm-subtext">From idea to execution — we deliver cutting-edge web, mobile, digital and hiring solutions to accelerate your business success.</p>
                <div class="hm-btn-group"><a href="services" class="hm-btn hm-btn-primary">Explore Services <span>↗</span></a><a href="#contact" class="hm-btn hm-btn-secondary">Get In Touch →</a></div>
            </div>
            <!-- Right Visual -->
            <div class="hm-col-right">
                <div class="hm-visual"><div class="hm-circle-outer"><div class="hm-orbit-dot"></div></div><div class="hm-circle-inner"><div class="hm-orbit-dot2"></div></div><div class="hm-center-card"><img src="<?php echo htmlspecialchars($logo); ?>" alt="Mithila Softech Logo"></div><div class="hm-chips-row"><div class="hm-chips-track"><?php foreach ($chips as $chip): ?><div class="hm-chip"><span class="hm-chip-dot" style="background: <?php echo $chip['dot']; ?>"></span><?php echo htmlspecialchars($chip['label']); ?></div><?php endforeach; ?><?php foreach ($chips as $chip): ?><div class="hm-chip" aria-hidden="true"><span class="hm-chip-dot" style="background: <?php echo $chip['dot']; ?>"></span><?php echo htmlspecialchars($chip['label']); ?></div><?php endforeach; ?></div></div></div>
            </div>
        </div>
    </div>
</section>
