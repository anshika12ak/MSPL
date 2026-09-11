<?php
$activePage = 'services';
$title = 'Custom IT Solutions | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Security Services India | Data Protection</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        .srv-hero-wrapper {
            text-align: center; overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/customit.png') center/cover no-repeat;
            background-size: cover;
            color: #ffffff; font-family: 'Inter', sans-serif; position: relative; z-index: 1; padding: 120px 0 100px;
        }
        .srv-hero-headline { font-size: clamp(2.5rem, 5vw, 3.8rem); font-weight: 800; line-height: 1.1; margin: 0 0 20px 0; }
        .srv-hero-subtext { font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.7; margin: 0 auto 36px; max-width: 700px; }
        .content-section { padding: 80px 0; background: #ffffff; }
        .content-container { max-width: 800px; margin: 0 auto; color: #334155; font-size: 1.1rem; line-height: 1.8; }
        .content-container h2 { color: #0f172a; font-size: 2rem; font-weight: 800; margin-bottom: 24px; }
        .content-container p { margin-bottom: 24px; }
        .content-container ul { margin-bottom: 32px; padding-left: 24px; }
        .content-container li { margin-bottom: 12px; padding-left: 8px; }
        .content-container li::marker { color: #1D4E9E; font-weight: bold; }
        .cta-box { background: linear-gradient(135deg, var(--green-dark, #15803d) 0%, var(--blue-dark, #1e40af) 100%); border: none; border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 80px; box-shadow: 0 20px 40px rgba(29, 78, 158, 0.2); transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; overflow: hidden; }
        .cta-box::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%); pointer-events: none; animation: srvHeroOrbDrift 15s linear infinite; }
        .cta-box:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .cta-box h3 { color: #ffffff; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 16px; font-weight: 800; margin-top: 0; position: relative; z-index: 2; }
        .cta-box p { color: rgba(255, 255, 255, 0.85); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; position: relative; z-index: 2; }
        .cta-box .button-primary { background: #ffffff !important; color: #1e40af !important; box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important; position: relative; z-index: 2; font-weight: 800; border: none; }
        .btn-shine { position: relative; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; }
        .btn-shine::after { content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%); transform: skewX(-25deg); animation: shine 3s infinite; }
        .cta-box .btn-shine::after { background: linear-gradient(to right, rgba(29, 78, 158, 0) 0%, rgba(29, 78, 158, 0.1) 50%, rgba(29, 78, 158, 0) 100%); }
        .btn-shine:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 10px 24px rgba(29, 78, 158, 0.3); }
        @keyframes shine { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
        @keyframes srvHeroOrbDrift { 0% { transform: translate(0, 0); } 100% { transform: translate(40px, 40px); } }
        @media (max-width: 768px) {
            .srv-hero-wrapper { padding: 80px 0 60px; }
            .srv-hero-headline { font-size: clamp(2.2rem, 6vw, 3rem); }
            .content-section { padding: 60px 0; }
            .cta-box { padding: 30px 20px; margin-top: 30px; }
        }
    </style>
    <meta name="description" content="Protect your business with advanced cyber security and data protection solutions.">
    <meta name="keywords" content="cyber security India, data protection">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/services/cyber-security" />
</head>
<body>
<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge" style="display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px; background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px; border: 1px solid rgba(255,255,255,0.15);">🛡️ &nbsp; Security First</span>
        <h1 class="srv-hero-headline">Cyber Security Services <br><span class="srv-hero-headline-bold">for <span class="srv-hero-headline-accent" style="background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Data Protection</span></span></h1>
        <p class="srv-hero-subtext">Website audits, SSL, data protection compliance, firewall setup & threat monitoring to keep your business secure.</p>
    </div>
</section>

<section class="content-section">
    <div class="container content-container">
        <h2>Software Engineered for Your Business</h2>
        <img src="assets/image/customit.png" alt="cyber security protection system" style="width: 100%; border-radius: 24px; margin-bottom: 30px;">
        <p>Off-the-shelf software doesn't always fit. We build scalable, secure, and custom-tailored software solutions designed to seamlessly integrate with and streamline your unique operations.</p>
        <ul>
            <li><strong>Customer Relationship Management (CRM):</strong> Better tools to manage and follow up with leads.</li>
            <li><strong>SaaS Architecture:</strong> Build and scale your own Software-as-a-Service product.</li>
            <li><strong>API Integrations & Automation:</strong> Connect disparate systems to save time and reduce errors.</li>
        </ul>
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
  });
</script>

<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
</body>
</html>
