<?php
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$logo = "assets/ms.png";
$fallbackImg = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='400' viewBox='0 0 600 400'%3E%3Crect width='600' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%236b7280' font-family='Arial' font-size='22'%3EImage unavailable%3C/text%3E%3C/svg%3E";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Best CRM and ERP Software Development Company – Mithila Softech</title>
  <meta name="description" content="Mithila Softech is a leading CRM & ERP software development company delivering custom, affordable, and scalable solutions for businesses.">
  <meta name="keywords" content="Best CRM and ERP software development company, custom ERP software development India, CRM solutions company Bihar, affordable ERP and CRM developers, enterprise software development services, Mithila Softech CRM ERP experts">
<style>
    :root{
      --primary-blue:#1e3a8a;
      --primary-purple:#7c3aed;
      --white:#fff;
      --gray-50:#f8fafc;
      --gray-100:#e5e7eb;
      --gray-600:#4b5563;
      --gray-900:#111827;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;color:var(--gray-900);background:#fff;line-height:1.6}
    a{color:inherit;text-decoration:none}
    .container{max-width:1200px;margin:0 auto;padding:0 20px}


    .hero {
        padding: 120px 0 100px;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(30, 58, 138, 0.85)), url('../assets/image/digitalseva.jpg') center/cover no-repeat;
        color: #ffffff;
        text-align: center;
    }
    .hero h1 {
        font-size: clamp(30px, 4.5vw, 52px);
        line-height: 1.2;
        color: #ffffff;
        margin-bottom: 12px;
        font-weight: 800;
    }
    .hero p {
        max-width: 820px;
        color: rgba(255, 255, 255, 0.85);
        font-size: clamp(15px, 2vw, 18px);
        margin: 0 auto;
    }

    .products{padding:64px 0;background:#fff}
    .product-card{
      display:grid;grid-template-columns:1fr 1.1fr;gap:22px;
      border:1px solid var(--gray-100);border-radius:18px;background:var(--gray-50);padding:18px;
    }
    .product-card img{width:100%;height:280px;object-fit:cover;border-radius:12px}
    .product-content h2{font-size:32px;line-height:1.2;color:var(--primary-blue);margin-bottom:10px}
    .product-content p{color:var(--gray-600);margin-bottom:16px}
    .btn-primary{
      display:inline-block;background:var(--primary-blue);color:#fff;padding:12px 24px;
      border-radius:8px;font-weight:600;font-size:14px;
    }

    footer{background:linear-gradient(135deg,var(--primary-blue),var(--primary-purple));color:#fff;padding:56px 0 30px;margin-top:50px}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:40px;margin-bottom:26px}
    .footer-brand img{height:50px;background:#fff;padding:8px 14px;border-radius:8px;margin-bottom:16px}
    .footer-brand p{font-size:14px;opacity:.9}
    .footer-section h4{margin-bottom:12px}
    .footer-links{display:flex;flex-direction:column;gap:9px}
    .footer-links a{font-size:14px;opacity:.92}
    .footer-links a:hover{text-decoration:underline;opacity:1}
    .footer-bottom{border-top:1px solid rgba(255,255,255,.22);padding-top:20px;text-align:center;font-size:14px;opacity:.92}

    @media (max-width:900px){
      .product-card{grid-template-columns:1fr}
    }
    @media (max-width:768px){
      .menu{display:none}
      .hamburger{display:block}
      .container{padding:0 16px}
      .hero{padding:56px 0}
      .products{padding:48px 0}
      .product-card{padding:16px}
      .product-content h2{font-size:28px}
      .footer-grid{grid-template-columns:1fr}
    }
    @media (max-width:480px){
      .container{padding:0 14px}
      .hero{padding:42px 0}
      .hero h1{font-size:32px}
      .hero p{font-size:15px}
      .products{padding:40px 0}
      .product-card{gap:16px;padding:14px;border-radius:16px}
      .product-card img{height:220px}
      .product-content h2{font-size:24px}
    }
    @media (max-width:1024px){
      .footer-grid{grid-template-columns:1fr 1fr}
    }
  </style>
  <link rel="stylesheet" href="image/site-footer.css" />
  <link rel="stylesheet" href="image/site-chrome.css" />
</head>
<body>
<?php $activePage = 'product'; include '../headerhome.php'; ?>

<section class="hero">
  <div class="container">
    <h1>Our Products</h1>
    <p>Explore our product offerings designed to solve real business and education challenges.</p>
  </div>
</section>

<section class="products">
  <div class="container">
    <article class="product-card">
      <a href="https://vidyalaybox.com/" target="_blank" rel="noopener noreferrer">
        <img src="../assets/image/vidyalaybox.jpg" alt="VidyalayBox" loading="eager" onerror="this.onerror=null;this.src='<?= e($fallbackImg) ?>';" />
      </a>
      <div class="product-content">
        <h2>VidyalayBox</h2>
        <p>VidyalayBox is an education-focused platform built to simplify school operations, communication, and digital learning workflows.</p>
        <a class="btn-primary" href="https://vidyalaybox.com/" target="_blank" rel="noopener noreferrer">Visit Product</a>
      </div>
    </article>
  </div>
</section>

<?php include __DIR__ . '/partials/site_footer.php'; ?>
</body>
</html>
