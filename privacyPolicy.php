<?php
$activePage = 'privacy';
$title = 'Privacy Policy | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Mithila Softech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        .policy-content h2 { margin-top: 40px; margin-bottom: 16px; font-size: 1.75rem; text-align: left; color: var(--text); }
        .policy-content p { margin-bottom: 20px; text-align: left; color: var(--muted); line-height: 1.75; }
        .policy-content ul { margin-bottom: 24px; padding-left: 20px; text-align: left; color: var(--muted); line-height: 1.75; }
        .policy-content li { margin-bottom: 10px; }
        .policy-content .section-heading h2 { text-align: center; margin-top: 0; }
    </style>
    <meta name="description" content="Read our privacy policy to understand how we collect, use, and protect your data.">
    <meta name="keywords" content="privacy policy IT company">
    <link rel="canonical" href="https://www.mithilasoftech.com/privacy-policy" />
</head>
<body>

<?php include 'headerhome.php'; ?>

<?php 
$hero_badge = '🔒 &nbsp; Privacy';
$hero_title = 'Privacy Policy';
$hero_subtext = 'How we collect, use, and protect your data.';
include 'heropage.php'; 
?>

<section class="section" style="background: var(--bg-alt); padding-top: 60px !important;">
    <div class="container policy-content">
        
        <h2>1. Introduction</h2>
        <p>Welcome to Mithila Softech. We respect your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

        <h2>2. Information We Collect</h2>
        <p>We may collect personal information that you voluntarily provide to us when you express an interest in obtaining information about us or our products and services, when you participate in activities on the website, or otherwise when you contact us. This includes:</p>
        <ul>
            <li>Personal details such as name, email address, and phone number.</li>
            <li>Business information provided through contact forms.</li>
            <li>Usage data and cookies to improve our website experience.</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the information we collect or receive:</p>
        <ul>
            <li>To facilitate account creation and logon process.</li>
            <li>To send administrative information to you.</li>
            <li>To fulfill and manage your orders and requests.</li>
            <li>To improve our services and communication with you.</li>
        </ul>

        <h2>4. Information Sharing and Disclosure</h2>
        <p>We do not share, sell, rent, or trade your information with third parties for their promotional purposes. We may share your information only with your consent, to comply with laws, to protect your rights, or to fulfill business obligations.</p>

        <h2>5. Security of Your Information</h2>
        <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable.</p>

        <h2>6. Contact Us</h2>
        <p>If you have questions or comments about this Privacy Policy, please contact us at:</p>
        <p>
            <strong>Mithila Softech</strong><br>
            Email: <a href="mailto:info@mithilasoftech.com" style="color: #15803d;">info@mithilasoftech.com</a><br>
            Phone: <a href="tel:+919971921698" style="color: #15803d;">+91 99719 21698</a>
        </p>
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
