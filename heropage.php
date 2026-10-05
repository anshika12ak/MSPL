<?php
/**
 * Inner Page Hero Component
 */

// Define generic defaults based on some keyword matching in the script name
$script_name = basename($_SERVER['PHP_SELF']);

if (!isset($hero_bg_image)) {
    if (strpos($script_name, 'about') !== false) {
        $hero_bg_image = 'assets/image/aboutheader.png';
    } elseif (strpos($script_name, 'service') !== false || strpos($script_name, 'design') !== false || strpos($script_name, 'development') !== false || strpos($script_name, 'marketing') !== false || strpos($script_name, 'support') !== false) {
        $hero_bg_image = 'assets/image/itsolutionsheader.png';
    } elseif (strpos($script_name, 'industry') !== false) {
        $hero_bg_image = 'assets/image/industryheader.jpg'; // Assuming generic or fall back
    } elseif (strpos($script_name, 'blog') !== false) {
        $hero_bg_image = 'assets/image/blogheader.png';
    } elseif (strpos($script_name, 'career') !== false) {
        $hero_bg_image = 'assets/image/careerheader.png';
    } elseif (strpos($script_name, 'contact') !== false) {
        $hero_bg_image = 'assets/image/contactheader.png'; // If exists, else fallback
    } else {
        $hero_bg_image = 'assets/image/digitalseva.jpg';
    }
}

$badge_text = $hero_badge ?? 'Explore';
$title_text = $hero_title ?? 'Mithila Softech';
$sub_text   = $hero_subtext ?? '';
$hero_bg_size = $hero_bg_size ?? 'cover';
?>

<style>
    .inner-hero-wrapper {
        position: relative;
        background: url('<?php echo htmlspecialchars($hero_bg_image); ?>') center/<?php echo htmlspecialchars($hero_bg_size); ?> no-repeat;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        text-align: center;
        padding: 140px 20px 100px;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
        overflow: hidden;
    }
    
    .inner-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.88) 0%, rgba(21, 58, 117, 0.78) 100%);
        z-index: -1;
    }

    /* Ambient Animated Floating Orbs in Hero */
    .inner-hero-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.35;
        z-index: 0;
        pointer-events: none;
    }
    .inner-hero-orb-1 {
        width: 340px;
        height: 340px;
        background: radial-gradient(circle, rgba(56, 189, 248, 0.45) 0%, rgba(29, 78, 158, 0) 70%);
        top: -60px;
        right: 8%;
        animation: heroOrbFloat1 12s ease-in-out infinite alternate;
    }
    .inner-hero-orb-2 {
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(152, 55, 212, 0.4) 0%, rgba(21, 58, 117, 0) 70%);
        bottom: -50px;
        left: 6%;
        animation: heroOrbFloat2 14s ease-in-out infinite alternate-reverse;
    }

    @keyframes heroOrbFloat1 {
        0% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 25px) scale(1.1); }
        100% { transform: translate(20px, -15px) scale(0.95); }
    }
    @keyframes heroOrbFloat2 {
        0% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(25px, -25px) scale(1.12); }
        100% { transform: translate(-20px, 20px) scale(0.9); }
    }
    
    .inner-hero-content {
        max-width: 900px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .inner-hero-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        color: #ffffff;
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 24px;
        border: 1px solid rgba(255,255,255,0.25);
        opacity: 1;
        transform: none;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    @keyframes heroBadgeFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-4px); }
    }

    .inner-hero-headline {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin: 0 0 20px 0;
        color: #ffffff;
        opacity: 1;
        transform: none;
    }

    .inner-hero-headline .hero-headline-accent {
        background: linear-gradient(135deg, #38bdf8 0%, #ffffff 35%, #38bdf8 65%, #bfdbfe 100%);
        background-size: 220% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: heroAccentShimmer 5s ease-in-out infinite;
    }

    @keyframes heroAccentShimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    .inner-hero-subtext {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        margin: 0 auto;
        max-width: 800px;
        opacity: 1;
        transform: none;
    }

    @media (max-width: 768px) {
        .inner-hero-wrapper {
            padding: 100px 20px 60px;
            min-height: 300px;
        }
        .inner-hero-headline {
            font-size: clamp(2rem, 6vw, 2.5rem);
        }
        .inner-hero-subtext {
            font-size: 1rem;
        }
    }
</style>

<section class="inner-hero-wrapper">
    <div class="inner-hero-overlay"></div>
    <div class="inner-hero-orb inner-hero-orb-1"></div>
    <div class="inner-hero-orb inner-hero-orb-2"></div>
    <div class="inner-hero-content">
        <?php if (!empty($badge_text)): ?>
            <span class="inner-hero-badge"><?php echo $badge_text; ?></span>
        <?php endif; ?>
        <h1 class="inner-hero-headline"><?php echo $title_text; ?></h1>
        <?php if (!empty($sub_text)): ?>
            <p class="inner-hero-subtext"><?php echo $sub_text; ?></p>
        <?php endif; ?>
    </div>
</section>
