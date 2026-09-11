<?php
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$logo_path = "assets/image/ms.png";
$fallbackImg = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='400' viewBox='0 0 600 400'%3E%3Crect width='600' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%236b7280' font-family='Arial' font-size='22'%3EImage unavailable%3C/text%3E%3C/svg%3E";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Software Products | Business Solutions by Mithila Softech</title>
  <meta name="description" content="Explore innovative software products designed to improve business efficiency and growth.">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Our Products – Mithila Softech">
  <meta property="og:description" content="Explore our product offerings designed to solve real business and education challenges.">
  <meta property="og:image" content="assets/image/product.jpg">
  <meta property="og:url" content="https://mithilasoftech.com/product">

  <!-- X (Twitter) Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Our Products – Mithila Softech">
  <meta name="twitter:description" content="Explore our product offerings designed to solve real business and education challenges.">
  <meta name="twitter:image" content="assets/image/product.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
  <style>
    .hero-products { padding: 88px 0; background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/vidyalaybox.jpg') center/cover no-repeat; background-size: cover; color: #fff; text-align: center; }
    .hero-products h1 { font-size: clamp(30px, 4.5vw, 52px); font-weight: 800; margin-bottom: 16px; color: #fff; }
    .hero-products p { font-size: 1.125rem; color: rgba(255,255,255,0.85); max-width: 700px; margin: 0 auto; }
    
    .hero-products { position: relative; }
    .srv-hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        border-radius: 0;
        margin: 0;
        box-shadow: none;
    }
    @media (max-width: 768px) { .srv-hero-image { width: 100%; height: 100%; } }

    .products-section { padding: 60px 0; background: var(--bg-alt); }
    .product-card {
        display: grid; grid-template-columns: 1fr 1fr; gap: 0;
        background: var(--card); border: 1px solid var(--line);
        border-radius: 20px; padding: 0; box-shadow: var(--shadow);
        align-items: stretch; transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        max-width: 900px;
        margin: 0 auto;
    }
    .product-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-strong); border-color: var(--blue); }
    
    .product-image-wrapper {
        background: #f1f5f9;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        max-height: 350px;
    }
    .product-card img { width: 100%; max-width: 100%; height: 100%; max-height: 100%; object-fit: cover; border-radius: 0; box-shadow: none; }
    .product-content { padding: 30px 40px; display: flex; flex-direction: column; justify-content: center; }
    .product-content h2 { font-size: 26px; font-weight: 800; color: var(--text); margin-bottom: 12px; }
    .product-content p { color: var(--muted); font-size: 1rem; line-height: 1.6; margin-bottom: 20px; }
    
    .cta-box { background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 60px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
    .cta-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-strong); }
    .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
    .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
    .cta-box .button-primary { background: #ffffff !important; color: var(--green-dark) !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; border: none; display: inline-block; text-decoration: none; padding: 14px 32px; }

    @media (max-width: 900px) { .product-card { grid-template-columns: 1fr; max-width: 600px; } .product-card img { max-height: 300px; max-width: 100%; } .product-image-wrapper { padding: 0; height: 300px; } }
    @media (max-width: 768px) { .hero-products { padding: 80px 0 60px; } .hero-products h1 { font-size: clamp(2.2rem, 6vw, 3rem); } .products-section { padding: 40px 0; } .product-content { padding: 24px; } .product-content h2 { font-size: 24px; } .product-image-wrapper { height: 250px; } .product-card { padding: 0; gap: 0; } }

    /* Scroll Reveal Animation */
    .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1); transition-delay: var(--delay, 0ms); }
    .reveal.in-view { opacity: 1; transform: translateY(0); }
  </style>
    <meta name="keywords" content="software products, business solutions">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/product" />
</head>
<body>
<?php $activePage = 'product'; include 'headerhome.php'; ?>

<?php 
$hero_badge = '📦 &nbsp; Our Products';
$hero_title = 'Business Software Products <br><span class="hero-headline-bold">for <span class="hero-headline-accent">Modern Enterprises</span></span>';
$hero_subtext = 'Explore our product offerings designed to solve real business and education challenges.';
include 'heropage.php'; 
?>

<section class="products-section">
  <div class="container">
    <article class="product-card reveal" style="--delay: 200ms;">
      <a href="https://vidyalaybox.com/" target="_blank" rel="noopener noreferrer" class="product-image-wrapper">
        <img src="assets/image/product.jpg" alt="business software product UI" loading="eager" onerror="this.onerror=null;this.src='<?= e($fallbackImg) ?>';" />
      </a>
      <div class="product-content">
        <h2>VidyalayBox</h2>
        <p>VidyalayBox is an education-focused platform built to simplify school operations, communication, and digital learning workflows. Designed to bridge the gap between administrators, teachers, and students with an intuitive interface.</p>
        <a class="button button-primary" href="https://vidyalaybox.com/" target="_blank" rel="noopener noreferrer" style="border-radius: 999px;">Visit Product</a>
      </div>
    </article>

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

      // Scroll Reveal Observer
      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add("in-view"); });
      }, { threshold: 0.15 });
      document.querySelectorAll(".reveal").forEach(el => revealObserver.observe(el));
  });
</script>
</body>
</html>
