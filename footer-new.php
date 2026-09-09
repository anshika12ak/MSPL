<?php
$footer_logo = 'assets/image/ms.png';
$footer_phone = '+91 99719 21698';
$footer_email = 'info@mithilasoftech.com';

$footer_sections = [
    [
        'title' => 'Who we are',
        'links' => [
            ['label' => 'About Us', 'href' => 'about'],
            ['label' => 'Our Approach', 'href' => 'about'],
            ['label' => 'Our Values', 'href' => 'about'],
            ['label' => 'Industries We Serve', 'href' => 'industry']
        ]
    ],
    [
        'title' => 'Our Services',
        'links' => [
            ['label' => 'Digital Advertising', 'href' => 'digital-ads'],
            ['label' => 'Ecommerce', 'href' => 'ecommerce-development'],
            ['label' => 'SEO Services', 'href' => 'seo-services'],
            ['label' => 'Web Development', 'href' => 'services']
        ]
    ]
];

$footer_socials = [
    ['label' => 'Facebook', 'href' => 'https://www.facebook.com/people/Mithila-Softech/61556884505882/#', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>'],
    ['label' => 'YouTube', 'href' => 'https://www.youtube.com/@mithilasoftech', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.42a2.78 2.78 0 0 0-1.94 2C1 8.17 1 12 1 12s0 3.83.46 5.58a2.78 2.78 0 0 0 1.94 2C8.88 20 12 20 12 20s6.88 0 8.6-.42a2.78 2.78 0 0 0 1.94-2C23 15.83 23 12 23 12s0-3.83-.46-5.58z"></path><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"></polygon></svg>'],
    ['label' => 'Instagram', 'href' => 'https://www.instagram.com/mithilasoftech/?igsh=MTV1OGJlcjQwNzN1Yw%3D%3D#', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>'],
    ['label' => 'LinkedIn', 'href' => 'https://in.linkedin.com/company/mithila-softech', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>']
];
?>

<style>
    .footer-new {
        background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
        padding: 60px 0 30px;
        font-family: 'Inter', sans-serif;
        color: #333;
    }

    .footer-new .container {
        max-width: 100%;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-new-top {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
        padding-bottom: 40px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .footer-brand {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .footer-brand-info {
        display: flex;
        gap: 12px;
        align-items: center;
        font-size: 0.95rem;
        color: #555;
    }

    .footer-brand-info svg {
        width: 16px;
        height: 16px;
        color: #1e88e5;
    }

    .footer-brand-info a {
        color: #555;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-brand-info a:hover {
        color: #1e88e5;
    }

    .footer-section h4 {
        font-size: 0.9rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-section li {
        margin-bottom: 10px;
    }

    .footer-section ul li a {
        display: inline-block;
        width: 100%;
        color: #666;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
        cursor: pointer;
        pointer-events: auto;
    }

    .footer-section ul li a:hover {
        color: #1e88e5;
    }

    .footer-socials {
        display: flex;
        gap: 12px;
    }

    .footer-social-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #1e88e5;
        border: 1px solid #1e88e5;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(30, 136, 229, 0.2);
    }

    .footer-social-btn svg {
        width: 24px;
        height: 24px;
    }

    .footer-social-btn:hover {
        background: #1565c0;
        color: #ffffff;
        transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(30, 136, 229, 0.4);
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        color: #666;
        padding-top: 20px;
    }

    .footer-bottom a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
        margin-left: 20px;
    }

    .footer-bottom a:hover {
        color: #1e88e5;
    }

    @media (max-width: 768px) {
        .footer-new-top {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .footer-bottom a {
            margin-left: 0;
            margin: 0 10px;
        }
    }

    @media (max-width: 480px) {
        .footer-new-top {
            grid-template-columns: 1fr;
        }

        .footer-socials {
            justify-content: center;
        }
    }
</style>

<footer class="footer-new">
    <div class="container">
        <!-- Top Footer -->
        <div class="footer-new-top">
            <!-- Brand & Contact -->
            <div class="footer-brand">
                <img src="<?php echo htmlspecialchars($footer_logo); ?>" alt="Mithila Softech" style="width: 120px; height: auto;">
                
                <div class="footer-brand-info">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <a href="tel:<?php echo htmlspecialchars($footer_phone); ?>"><?php echo htmlspecialchars($footer_phone); ?></a>
                </div>

                <div class="footer-brand-info">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <a href="mailto:<?php echo htmlspecialchars($footer_email); ?>"><?php echo htmlspecialchars($footer_email); ?></a>
                </div>
            </div>

            <!-- Navigation Sections -->
            <?php foreach ($footer_sections as $section): ?>
            <div class="footer-section">
                <h4><?php echo htmlspecialchars($section['title']); ?></h4>
                <ul>
                    <?php foreach ($section['links'] as $link): ?>
                    <li><a href="<?php echo htmlspecialchars($link['href']); ?>"><?php echo htmlspecialchars($link['label']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>

            <!-- Social Media -->
            <div class="footer-section">
                <h4>Connect</h4>
                <div class="footer-socials">
                    <?php foreach ($footer_socials as $social): ?>
                    <a href="<?php echo htmlspecialchars($social['href']); ?>" class="footer-social-btn" title="<?php echo htmlspecialchars($social['label']); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo $social['icon']; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <div>&copy; <?php echo date('Y'); ?> Mithila Softech. All rights reserved.</div>
            <div>
                <a href="privacyPolicy">Privacy Policy</a>
                <a href="termsAndConditions">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>

<!-- Global Floating WhatsApp Button -->
<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
