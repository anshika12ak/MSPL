<?php

$footer_logo = 'assets/image/ms.png';

$footer_socials = [
  ['label' => 'YouTube', 'href' => 'https://www.youtube.com/@mithilasoftech', 'icon' => '<path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.897 3.405 0 4.92 0 8s.897 4.595 4.385 4.816c3.6.245 11.626.246 15.23 0C23.103 12.595 24 11.08 24 8s-.897-4.595-4.385-4.816zM9.6 11.536V4.464l6.4 3.536-6.4 3.536z"/>'],
  ['label' => 'Facebook', 'href' => 'https://www.facebook.com/people/Mithila-Softech/61556884505882/#', 'icon' => '<path d="M224 480h-48V304h-40v-56h40v-40c0-44.2 25.1-69.5 65.3-69.5 19.3 0 35.7 1.4 40.4 2.1v50.2h-29.7c-21.4 0-25.6 10.2-25.6 25.1v37.1h55.9l-7.3 56h-48.6V480z"/>'],
  ['label' => 'Instagram', 'href' => 'https://www.instagram.com/mithilasoftech/?igsh=MTV1OGJlcjQwNzN1Yw%3D%3D#', 'icon' => '<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9 26.3 26.2 58 34.4 93.9 36.2 37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>'],
  ['label' => 'LinkedIn', 'href' => 'https://in.linkedin.com/company/mithila-softech', 'icon' => '<path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 53.79-54.3c29.7 0 53.79 24.5 53.79 54.3a53.79 53.79 0 0 1-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>']
];

$footer_services = [
  "Website Design & Development",
  "Digital Marketing",
  "Mobile App Development",
  "IT Solutions & Cyber Security"
];

$footer_nav_links = [
  ['label' => 'Home', 'to' => 'index'],
  ['label' => 'About Us', 'to' => 'about'],
  ['label' => 'Services', 'to' => 'services'],
  ['label' => 'Contact Us', 'to' => 'index#contact'],
  ['label' => 'Privacy Policy', 'to' => 'privacyPolicy']
];

$footer_legal_links = [
  ['label' => 'Privacy Policy', 'to' => 'privacyPolicy'],
  ['label' => 'Terms & Conditions', 'to' => 'termsAndConditions']
];
?>

<style>
    /* Animations */
    .fm-reveal, .fm-reveal-col, .fm-reveal-mid-nav {
        opacity: 0;
        transition-property: opacity, transform;
    }
    .fm-reveal.fm-in-view {
        opacity: 1;
        transition-duration: 0.6s;
    }
    .fm-reveal-col {
        transform: translateY(28px);
        transition-duration: 0.55s;
        transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }
    .fm-reveal-col.fm-in-view { transform: translateY(0); opacity: 1; }
    .fm-reveal-mid-nav {
        transform: translateY(16px);
        transition-duration: 0.5s;
    }
    .fm-reveal-mid-nav.fm-in-view { transform: translateY(0); opacity: 1; }

    /* Social Buttons */
    .socials { display: flex; gap: 15px; flex-wrap: wrap; margin-top: 15px; }
    .socialBtn {
        width: 48px; height: 48px; border-radius: 50%;
        background: #1e88e5; color: #ffffff;
        display: flex; align-items: center; justify-content: center;
        transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(30, 136, 229, 0.2);
    }
    .socialBtn:hover {
        background: #1565c0; transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(30, 136, 229, 0.4); color: #ffffff;
    }
</style>

<!-- FOOTER -->
<footer class="footer fm-reveal">
  <div class="container">
        
        <div class="row g-5 topRow">
            <!-- Col 1: Brand & Socials -->
            <div class="col-lg-3 col-md-6 fm-reveal-col" style="transition-delay: 0s;">
                <a href="index" class="brand">
                    <img src="<?php echo htmlspecialchars($footer_logo); ?>" alt="Mithila Softech" class="logoImg" />
                    <div>
                        <div class="logoName">MITHILA SOFTECH</div>
                        <div class="logoTagline">Digital Power. Business Ki Seva.</div>
                    </div>
                </a>
                <div class="socials">
                    <?php foreach ($footer_socials as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['href']); ?>" class="socialBtn" aria-label="<?php echo htmlspecialchars($social['label']); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 448 512" fill="currentColor"><?php echo $social['icon']; ?></svg>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Col 2: Services -->
            <div class="col-lg-3 col-md-6 fm-reveal-col" style="transition-delay: 0.1s;">
                <ul class="serviceList">
                    <?php foreach ($footer_services as $s): ?>
                        <li><a href="services" class="serviceLink"><?php echo htmlspecialchars($s); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Col 3: Get in Touch -->
            <div class="col-lg-3 col-md-6 fm-reveal-col" style="transition-delay: 0.2s;">
                <div class="touchHeading">GET IN TOUCH</div>
                <a href="tel:+919971921698" class="touchPhone">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    +91 99719 21698
                </a>
                <a href="mailto:info@mithilasoftech.com" class="touchEmail">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    info@mithilasoftech.com
                </a>
            </div>

            <!-- Col 4: Rotating Badge -->
            <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center fm-reveal-col" style="transition-delay: 0.3s;">
                <a href="index#contact" class="rotatingBadge" aria-label="Contact us">
                    <svg viewBox="0 0 120 120" class="rotatingRing">
                        <defs><path id="circle" d="M 60,60 m -40,0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0"></path></defs>
                        <text class="ringText"><textPath href="#circle" startOffset="0%">CONTACT · CONTACT · CONTACT ·&nbsp;</textPath></text>
                    </svg>
                    <div class="badgeCenter">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                </a>
            </div>
        </div>

        <div class="divider"></div>

        <nav class="midNav fm-reveal-mid-nav">
            <?php foreach ($footer_nav_links as $l): ?>
                <a href="<?php echo htmlspecialchars($l['to']); ?>" class="midNavLink"><?php echo htmlspecialchars($l['label']); ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="dividerThin"></div>

        <div class="bottom">
            <div class="legalLinks">
                <?php foreach ($footer_legal_links as $i => $l): ?>
                    <span>
                        <a href="<?php echo htmlspecialchars($l['to']); ?>" class="legalLink"><?php echo htmlspecialchars($l['label']); ?></a>
                        <?php if ($i < count($footer_legal_links) - 1): ?>
                            <span class="legalSep">|</span>
                        <?php endif; ?>
                    </span>
                <?php endforeach; ?>
            </div>
            <span class="copyright">
                &copy; <?php echo date('Y'); ?> <span>Mithila Softech</span>. All rights reserved. Made with ❤️ in India 🇮🇳
            </span>
        </div>

  </div>
</footer>