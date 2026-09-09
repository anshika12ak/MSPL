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
    }
    
    .inner-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85) 0%, rgba(21, 58, 117, 0.75) 100%);
        z-index: -1;
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
        border: 1px solid rgba(255,255,255,0.2);
        opacity: 0;
        transform: translateY(20px);
        animation: innerHeroFadeUp 0.6s ease forwards;
    }

    .inner-hero-headline {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin: 0 0 20px 0;
        color: #ffffff;
        opacity: 0;
        transform: translateY(20px);
        animation: innerHeroFadeUp 0.6s ease forwards 0.1s;
    }

    .inner-hero-subtext {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        margin: 0 auto;
        max-width: 800px;
        opacity: 0;
        transform: translateY(20px);
        animation: innerHeroFadeUp 0.6s ease forwards 0.2s;
    }

    @keyframes innerHeroFadeUp {
        to { opacity: 1; transform: translateY(0); }
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
