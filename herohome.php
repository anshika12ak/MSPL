<?php
/**
 * Hero Component
 * Updated with new color scheme
 */

$logo = $hero_logo ?? 'assets/image/round.jpg';

$chips = $hero_chips ?? [
  ['label' => 'Web Development', 'dot' => '#38bdf8', 'style' => 'top: 15%; left: 10%;', 'delay' => '0.65s'],
  ['label' => 'Mobile Apps', 'dot' => '#60a5fa', 'style' => 'bottom: 20%; left: 5%;', 'delay' => '0.77s'],
  ['label' => 'Recruitment Services', 'dot' => '#3b82f6', 'style' => 'top: 25%; right: -5%;', 'delay' => '0.89s'],
  ['label' => 'Digital Marketing', 'dot' => '#2563eb', 'style' => 'bottom: 10%; right: 5%;', 'delay' => '1.01s']
];

$badge_text = $hero_badge ?? 'Your Growth. Our Technology.';
$title_text = $hero_title ?? 'Transforming Ideas into <span class="hero-headline-bold">Digital <span class="hero-headline-accent">Success</span></span>';
$sub_text   = $hero_subtext ?? 'At Mithila Softech, we don\'t just build solutions - we create impact. Whether it\'s web development, digital marketing, or hiring the right talent, we empower you to lead in the digital world. Innovate. Execute. Dominate.';
$heading_tag = $hero_heading_tag ?? 'h1';
?>

<style>
    /* --- Layout & Container --- */
    .hero-wrapper {
        overflow: hidden;
        background: linear-gradient(145deg, #020617 0%, #0f172a 40%, var(--green-dark) 100%);
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        position: relative;
        z-index: 1;
        min-height: calc(100vh - 92px);
        display: flex;
        align-items: center;
        padding: 40px 0 !important;
    }
    .hero-bg-orb1, .hero-bg-orb2 {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        z-index: -1;
        opacity: 0.45;
        animation: fmOrbDrift 10s alternate infinite ease-in-out;
        will-change: transform;
    }
    .hero-bg-orb1 { top: -10%; left: -10%; width: 40vw; height: 40vw; background: #1d4ed8; }
    .hero-bg-orb2 { bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: #38bdf8; animation-duration: 12s; animation-direction: alternate-reverse; }
    @keyframes fmOrbDrift {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(40px, 40px, 0); }
    }
    .hero-container {
        width: 100%;
        padding: 0 4vw;
        max-width: 100%;
        margin: 0 auto;
    }
    .hero-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(32px, 6vw, 80px);
        align-items: center;
    }

    /* --- Left Column: Typography & Content --- */
    .hero-content-col {
        text-align: center;
    }
    .hero-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 24px;
        opacity: 0;
        animation: fmFadeUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.05s;
    }
    .hero-headline {
        font-size: clamp(2.8rem, 5vw, 4.2rem);
        font-weight: 800;
        line-height: 1.05;
        margin: 0 0 12px 0;
        color: #ffffff;
        opacity: 0;
        animation: fmFadeUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.1s;
    }
    .hero-headline-bold { display: block; }
    .hero-headline-accent {
        background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtext {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.7;
        margin: 0 auto 36px;
        max-width: 90%;
        opacity: 0;
        animation: fmFadeUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.2s;
    }

    /* --- Left Column: Buttons --- */
    .hero-btn-group {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 16px;
        opacity: 0;
        animation: fmFadeUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.3s;
    }
    .hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        border-radius: 999px;
        font-weight: 600;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: pointer;
    }
    .hero-btn-primary {
        background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        color: #ffffff;
        border: none;
    }
    .hero-btn-primary:hover {
        transform: scale(1.05) translateY(-2px);
        box-shadow: 0 10px 24px rgba(37, 99, 235, 0.4);
    }
    .hero-btn-primary:active { transform: scale(0.97); }

    .hero-btn-secondary {
        background: transparent;
        color: #ffffff;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }
    .hero-btn-secondary:hover {
        transform: scale(1.04) translateY(-2px);
        border-color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }
    .hero-btn-secondary:active { transform: scale(0.97); }

    /* --- Right Column: Visuals & Orbits --- */
    .hero-visual-col {
        opacity: 0;
        transform: scale(0.85);
        animation: fmVisualScale 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.15s;
    }
    .hero-visual {
        position: relative;
        height: 520px;
        width: 100%;
        max-width: 520px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-circle-outer {
        position: absolute; width: 420px; height: 420px;
        border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: 50%;
        animation: fmSpin 22s linear infinite;
        will-change: transform;
    }
    .hero-orbit-dot {
        position: absolute; top: -6px; left: 50%; transform: translateX(-50%);
        width: 12px; height: 12px; background: #38bdf8; border-radius: 50%;
        box-shadow: 0 0 16px #38bdf8;
    }

    .hero-circle-inner {
        position: absolute; width: 280px; height: 280px;
        border: 1px dashed rgba(255, 255, 255, 0.15); border-radius: 50%;
        animation: fmSpinReverse 14s linear infinite;
        will-change: transform;
    }
    .hero-orbit-dot2 {
        position: absolute; bottom: -6px; left: 50%; transform: translateX(-50%);
        width: 12px; height: 12px; background: #60a5fa; border-radius: 50%;
        box-shadow: 0 0 16px #60a5fa;
    }

    .hero-center-card {
        position: relative; width: 150px; height: 150px; background: #ffffff;
        border-radius: 50%; overflow: hidden;
        box-shadow: 0 0 40px rgba(0,0,0,0.4); display: flex; justify-content: center; align-items: center;
        opacity: 0; transform: scale(0.8) translateY(20px);
        animation: fmCenterReveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards 0.3s;
    }
    .hero-center-card img { width: 85%; height: auto; object-fit: contain; }

    .hero-chip {
        position: absolute;
        display: flex; align-items: center; gap: 10px;
        padding: 12px 20px; background: rgba(255,255,255,0.1); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 999px;
        box-shadow: 0 12px 32px rgba(0,0,0,0.2); font-weight: 600; font-size: 0.95rem; color: #ffffff;
        border: 1px solid rgba(255,255,255,0.2); text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        opacity: 0; transform: translateY(20px);
        animation: fmChipReveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards, fmFloat 5s ease-in-out infinite 0.6s;
        will-change: transform, opacity;
    }
    .hero-chip-dot { width: 10px; height: 10px; border-radius: 50%; }

    /* --- Framer Motion Keyframe Replications --- */
    @keyframes fmFadeUp { from { opacity: 0; transform: translateY(32px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fmVisualScale { from { opacity: 0; transform: scale(0.85); } to { opacity: 1; transform: scale(1); } }
    @keyframes fmCenterReveal { to { opacity: 1; transform: scale(1) translateY(0); } }
    @keyframes fmChipReveal { to { opacity: 1; transform: translateY(0); } }
    @keyframes fmSpin { to { transform: rotate(360deg); } }
    @keyframes fmSpinReverse { to { transform: rotate(-360deg); } }
    @keyframes fmFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* --- Responsive Queries --- */
    @media (max-width: 991px) {
        .hero-wrapper { min-height: calc(100vh - 58px); padding: 20px 0 !important; }
        .hero-row { grid-template-columns: 1fr; text-align: center; display: flex; flex-direction: column; justify-content: center; gap: 24px; }
        .hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); margin-bottom: 10px; }
        .hero-subtext { margin: 0 auto 15px auto; font-size: 1rem; line-height: 1.5; max-width: 90%; }
        .hero-btn-group { justify-content: center; margin-bottom: 10px; }
        .hero-btn { padding: 12px 24px; font-size: 0.9rem; }
        .hero-visual { margin-top: 20px; height: 380px; }
        .hero-visual-col { display: flex; align-items: center; justify-content: center; flex: 1; width: 100%; }
        .hero-circle-outer { width: 320px; height: 320px; }
        .hero-circle-inner { width: 210px; height: 210px; }
    }
    @media (max-width: 767px) {
        .hero-wrapper {
            padding: 20px 0 !important;
        }
        .hero-row { gap: 16px; }
        .hero-headline {
            font-size: clamp(1.6rem, 7vw, 2.2rem);
            margin-bottom: 8px;
        }
        .hero-subtext {
            max-width: 100%;
            font-size: 0.85rem;
            line-height: 1.4;
            margin-bottom: 12px;
        }
        .hero-btn-group { gap: 10px; }
        .hero-btn { padding: 10px 20px; font-size: 0.85rem; }
        .hero-visual {
            height: 300px;
            min-height: auto;
            max-width: 100%;
            margin-top: 10px;
        }
        .hero-circle-outer { width: 250px; height: 250px; }
        .hero-circle-inner { width: 160px; height: 160px; }
        .hero-center-card {
            width: 90px;
            height: 90px;
        }
        .hero-chip {
            max-width: 140px;
            padding: 8px 14px;
            font-size: 0.75rem;
            gap: 8px;
        }
        .hero-chip-dot { width: 8px; height: 8px; }
        .hero-visual > .hero-chip:nth-last-of-type(4) { top: 20px !important; left: -10px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(3) { bottom: 60px !important; left: -10px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(2) { top: 45px !important; right: -10px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(1) { bottom: 85px !important; right: -10px !important; }
    }
    @media (max-width: 600px) {
        .hero-circle-outer { width: 230px; height: 230px; }
        .hero-circle-inner { width: 150px; height: 150px; }
        .hero-visual { height: 280px; }
        .hero-center-card { width: 85px; height: 85px; }
        .hero-chip { display: flex !important; max-width: 120px; padding: 6px 12px; font-size: 0.7rem; gap: 6px; border-radius: 20px; }
        .hero-visual > .hero-chip:nth-last-of-type(4) { top: 10px !important; left: 0px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(3) { bottom: 50px !important; left: 0px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(2) { top: 35px !important; right: 0px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(1) { bottom: 75px !important; right: 0px !important; }
    }
    @media (max-width: 420px) {
        .hero-visual {
            height: 250px;
        }
        .hero-circle-outer { width: 210px; height: 210px; }
        .hero-circle-inner { width: 140px; height: 140px; }
        .hero-center-card { width: 75px; height: 75px; }
        .hero-chip { max-width: 105px; padding: 5px 10px; font-size: 0.65rem; }
        .hero-visual > .hero-chip:nth-last-of-type(4) { top: 5px !important; left: 5px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(3) { bottom: 40px !important; left: 5px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(2) { top: 25px !important; right: 5px !important; }
        .hero-visual > .hero-chip:nth-last-of-type(1) { bottom: 60px !important; right: 5px !important; }
    }
</style>

<section class="section hero-wrapper" id="home">
    <div class="hero-bg-orb1"></div>
    <div class="hero-bg-orb2"></div>
    <div class="hero-container">
        <div class="hero-row">

            <!-- Left Column Content -->
            <div class="hero-content-col">
                <span class="hero-badge"><?php echo $badge_text; ?></span>
                <<?php echo $heading_tag; ?> class="hero-headline"><?php echo $title_text; ?></<?php echo $heading_tag; ?>>
                <p class="hero-subtext"><?php echo $sub_text; ?></p>
                <div class="hero-btn-group"><a href="#contact" class="hero-btn hero-btn-primary">Start Your Journey <span class="hero-btn-arrow">&rarr;</span></a><a href="#contact" class="hero-btn hero-btn-secondary">Talk to Experts <span class="hero-btn-arrow">&rarr;</span></a></div>
            </div>

            <!-- Right Column Visual -->
            <div class="hero-visual-col">
                <div class="hero-visual">
                    <div class="hero-circle-outer"><div class="hero-orbit-dot"></div></div>
                    <div class="hero-circle-inner"><div class="hero-orbit-dot2"></div></div>
                    <div class="hero-center-card"><img src="<?php echo htmlspecialchars($logo); ?>" alt="Mithila Softech Logo"></div>
                    <?php foreach ($chips as $chip): ?>
                        <div class="hero-chip" style="<?php echo $chip['style']; ?> animation-delay: <?php echo $chip['delay']; ?>, calc(<?php echo $chip['delay']; ?> + 0.5s);"><span class="hero-chip-dot" style="background: <?php echo $chip['dot']; ?>"></span><?php echo htmlspecialchars($chip['label']); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
