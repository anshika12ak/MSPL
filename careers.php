<?php
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$logo_path = "assets/image/ms.png";
$fallbackImg = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1200' height='700' viewBox='0 0 1200 700'%3E%3Crect width='1200' height='700' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%236b7280' font-family='Arial' font-size='24'%3EImage unavailable%3C/text%3E%3C/svg%3E";

$benefits = [
  ["title" => "Ownership Culture", "desc" => "Work on meaningful products and take end-to-end ownership from idea to delivery.", "icon" => '<path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line>'],
  ["title" => "Growth-Focused Learning", "desc" => "Continuous mentoring, peer code reviews, and practical exposure to modern stacks.", "icon" => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>'],
  ["title" => "Flexible Work Environment", "desc" => "A balanced setup with high accountability, transparent communication, and flexibility.", "icon" => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'],
  ["title" => "Performance Recognition", "desc" => "We celebrate outcomes, consistency, and impact through structured growth paths.", "icon" => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Careers at Mithila Softech | IT Jobs India</title>
  <meta name="description" content="Join Mithila Softech and build your career in software development and IT services.">
  <meta name="keywords" content="IT jobs India, careers software company">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
  
  <style>
    /* Hero Section */
    .hero-careers {
        min-height: 440px;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/teamcollab.png') center/cover no-repeat;
        background-size: cover;
        color: #fff;
        display: flex;
        align-items: center;
        text-align: center;
        padding: 88px 0;
        position: relative;
        overflow: hidden;
    }
    
    .srv-hero-wrapper { position: relative; }
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

    .hero-careers-badge {
        display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px;
        background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px;
        border: 1px solid rgba(255,255,255,0.2); text-transform: uppercase; letter-spacing: 0.5px;
    }
    .hero-careers h1 { font-size: clamp(2.8rem, 5vw, 4.2rem); font-weight: 800; line-height: 1.1; margin: 0 0 20px 0; color: #fff; }
    .hero-careers p { max-width: 760px; margin: 0 auto; color: rgba(255, 255, 255, 0.85); font-size: 1.125rem; line-height: 1.7; }
    
    .hero-actions { display: flex; gap: 16px; justify-content: center; margin-top: 32px; flex-wrap: wrap; }
    .btn-ghost {
        background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.4);
        padding: 12px 28px; border-radius: 999px; font-weight: 600; text-decoration: none;
        transition: all 0.3s ease;
    }
    .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; transform: translateY(-2px); }

    /* Life Grid */
    .life-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 48px;
    }
    .life-grid img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .life-grid img:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }

    /* Benefits Grid */
    .benefit-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
        margin-top: 48px;
    }
    .benefit-card {
        position: relative; z-index: 1; overflow: hidden;
        background: var(--card);
        border: 1px solid var(--line);
        border-radius: 20px;
        padding: 30px;
        box-shadow: var(--shadow);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
        --hover-grad: linear-gradient(135deg, var(--green) 0%, var(--green-dark) 100%);
    }
    .benefit-card:nth-child(even) { --hover-grad: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%); }
    .benefit-card::before { content: ""; position: absolute; inset: 0; background: var(--hover-grad); opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
    .benefit-card:hover { transform: translateY(-10px); box-shadow: 0 24px 56px rgba(0,0,0,0.1); border-color: transparent; }
    .benefit-card:hover::before { opacity: 1; }
    .benefit-card h3, .benefit-card p { transition: color 0.4s ease; }
    .benefit-card:hover h3 { color: #fff; }
    .benefit-card:hover p { color: rgba(255,255,255,0.8); }
    .benefit-icon { width: 56px; height: 56px; background: var(--hover-grad); color: #fff; margin-bottom: 20px; border-radius: 16px; display: flex; align-items: center; justify-content: center; transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, border 0.3s ease; box-shadow: 0 8px 16px rgba(0,0,0,0.1); }
    .benefit-card:hover .benefit-icon { transform: scale(1.1) rotate(-5deg); background: rgba(255,255,255,0.2) !important; box-shadow: 0 6px 24px rgba(255,255,255,0.25); border: 1.5px solid rgba(255,255,255,0.35); color: #fff; }
    .benefit-card h3 { font-size: 1.25rem; color: var(--text); margin-bottom: 12px; font-weight: 700; margin-top: 0; }
    .benefit-card p { font-size: 1rem; color: var(--muted); margin: 0; line-height: 1.6; }

    /* Application Form */
    .apply-wrap {
        background: var(--card);
        border: 1px solid var(--line);
        border-radius: 24px;
        padding: 48px;
        box-shadow: var(--shadow);
        max-width: 800px;
        margin: 40px auto 0;
    }
    .apply-wrap h3 { font-size: 1.8rem; color: var(--text); font-weight: 800; margin-bottom: 8px; }
    .apply-wrap p { color: var(--muted); margin-bottom: 24px; }
    
    .career-form { display: grid; gap: 20px; }
    .career-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .career-form input, .career-form textarea {
        width: 100%;
        padding: 14px 20px;
        border: 1px solid var(--line);
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        background: var(--bg-alt);
        color: var(--text);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .career-form input:focus, .career-form textarea:focus {
        border-color: var(--blue);
        outline: none;
        box-shadow: 0 0 0 4px rgba(102, 45, 145, 0.1);
    }
    .career-form textarea { min-height: 140px; resize: vertical; }
    .career-form button { width: max-content; }

    /* Scroll Reveal */
    .reveal {
        opacity: 0; transform: translateY(32px);
        transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        transition-delay: var(--delay, 0ms);
    }
    .reveal.in-view { opacity: 1; transform: translateY(0); }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .benefit-grid { grid-template-columns: 1fr; gap: 20px; margin-top: 30px; }
        .benefit-card { padding: 24px; }
        .career-form-row { grid-template-columns: 1fr; gap: 16px; }
        .apply-wrap { padding: 30px 20px; margin-top: 30px; }
        .hero-careers { padding: 80px 0 60px; min-height: auto; }
        .hero-careers h1 { font-size: clamp(2.2rem, 6vw, 3rem); }
    }
  </style>
    <link rel="canonical" href="https://www.mithilasoftech.com/careers" />
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php $activePage = 'career'; include 'headerhome.php'; ?>

<section class="hero-careers">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="hero-careers-badge">🚀 &nbsp; Careers at Mithila Softech</span>
        <h1>Careers at Mithila Softech &ndash; <br><span class="hero-headline-bold">Join <span class="hero-headline-accent" style="color: #38bdf8;">Our Team</span></span></h1>
        <p>Join a high-ownership team solving real business problems with strong engineering, quality execution, and fast delivery culture.</p>
    </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-heading center reveal">
      <h2>Life at <span>Mithila Softech</span></h2>
      <p>Learning, ownership, and collaboration shape our day-to-day work culture.</p>
    </div>
    <div class="life-grid reveal" style="--delay:150ms;">
      <img src="assets/image/job.jpg" alt="Life at Mithila Softech" loading="lazy" />
      <img src="assets/image/IMG-20260812-WA0019.jpg" alt="Mithila Softech Team" loading="lazy" />
      <img src="assets/image/IMG-20260812-WA0025.jpg" alt="Mithila Softech Work Culture" loading="lazy" style="object-position: 50% 60%;" />
      <img src="assets/image/IMG-20260818-WA0030.jpg" alt="Mithila Softech Office Celebration" loading="lazy" />
      <img src="assets/image/IMG-20260818-WA0072.jpg" alt="Mithila Softech Team Collaboration" loading="lazy" style="object-position: 50% 20%;" />
      <img src="assets/image/team-workspace.jpg" alt="Mithila Softech Team Workspace" loading="lazy" />
      <img src="assets/image/team-meeting.jpg" alt="Mithila Softech Team Meeting" loading="lazy" style="object-position: center 35%;" />
      <img src="assets/image/team-cake-celebration.jpg" alt="Mithila Softech Team Celebration" loading="lazy" style="object-position: center 28%;" />
    </div>
  </div>
</section>

<section class="section" style="background: var(--bg-alt);">
  <div class="container">
    <div class="section-heading center reveal">
      <h2>Why <span>Join Us</span></h2>
      <p>We combine startup speed with structured engineering discipline.</p>
    </div>
    <div class="benefit-grid">
      <?php foreach($benefits as $index => $item): ?>
        <article class="benefit-card reveal" style="--delay: <?= $index * 100 ?>ms;">
          <div class="benefit-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $item["icon"] ?></svg>
          </div>
          <h3><?= e($item["title"]) ?></h3>
          <p><?= e($item["desc"]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" id="openings">
  <div class="container">
    <div class="section-heading center reveal">
      <h2>Apply <span>With Us</span></h2>
      <p>Share your profile and our team will connect when a suitable opportunity matches your skills.</p>
    </div>
    
    <div class="apply-wrap reveal" id="apply" style="--delay:150ms;">
      <h3>Apply for a Role</h3>
      <p>Share your details and our hiring team will connect with you.</p>
      
      <form class="career-form" method="post" action="#">
        <div class="career-form-row">
            <input type="text" name="name" placeholder="Full Name" required />
            <input type="tel" name="phone" placeholder="Phone Number" required />
        </div>
        <div class="career-form-row">
            <input type="email" name="email" placeholder="Email Address" required />
            <input type="text" name="position" placeholder="Position Applying For" />
        </div>
        <textarea name="message" placeholder="Tell us about your experience and include a link to your resume/portfolio..."></textarea>
        <button type="submit" class="button button-primary">Send Application</button>
      </form>
    </div>
  </div>
</section>

<?php include 'footer-new.php'; ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {
      // Mobile Menu Toggle matching the theme logic
      const hamburgerBtn = document.getElementById('hamburger-btn');
      const mainNav = document.getElementById('main-nav');
      if (hamburgerBtn && mainNav) {
          hamburgerBtn.addEventListener('click', () => {
              const isActive = mainNav.classList.toggle('is-active');
              hamburgerBtn.classList.toggle('is-active');
              hamburgerBtn.setAttribute('aria-expanded', isActive);
          });
      }

      // Scroll Reveal logic
      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add("in-view"); });
      }, { threshold: 0.15 });
      document.querySelectorAll(".reveal").forEach(el => revealObserver.observe(el));
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
