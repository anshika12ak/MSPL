<?php
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$logo_path = "assets/image/ms.png";
$fallbackImg = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1200' height='700' viewBox='0 0 1200 700'%3E%3Crect width='1200' height='700' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%236b7280' font-family='Arial' font-size='24'%3EImage unavailable%3C/text%3E%3C/svg%3E";

$tracks = [
  ["title" => "Web Development Internship", "duration" => "3 Months", "mode" => "Hybrid", "desc" => "Work on responsive interfaces and backend integration with practical project tasks."],
  ["title" => "Software Testing Internship", "duration" => "3 Months", "mode" => "On-site", "desc" => "Learn manual testing workflows, reporting, and automation fundamentals."],
  ["title" => "Digital Marketing Internship", "duration" => "2-3 Months", "mode" => "Hybrid", "desc" => "Assist with SEO, content planning, social campaigns, and analytics tracking."],
  ["title" => "HR & Recruitment Internship", "duration" => "2 Months", "mode" => "On-site", "desc" => "Support sourcing, screening, and interview coordination for hiring operations."],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Internships at Mithila Softech | IT Training Programs</title>
  <meta name="description" content="Apply for internships and gain real-world experience in IT and software development.">
  <meta name="keywords" content="IT internships India">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
  <style>
    /* Hero Section */
    .hero-internship {
        min-height: 440px;
        background: linear-gradient(135deg, rgba(2, 6, 23, 0.85), rgba(21, 58, 117, 0.85)), url('assets/image/internship.png') center/cover no-repeat;
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

    .hero-badge {
        display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px;
        background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px;
        border: 1px solid rgba(255,255,255,0.2); text-transform: uppercase; letter-spacing: 0.5px;
    }
    .hero-internship h1 { font-size: clamp(2.8rem, 5vw, 4.2rem); font-weight: 800; line-height: 1.1; margin: 0 0 20px 0; color: #fff; }
    .hero-internship p { max-width: 760px; margin: 0 auto; color: rgba(255, 255, 255, 0.85); font-size: 1.125rem; line-height: 1.7; }

    /* Grid & Cards */
    .internship-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
        margin-top: 48px;
    }
    .internship-card {
        background: var(--card);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 32px;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .internship-card:hover { transform: translateY(-5px); border-color: var(--blue); }
    .internship-card h3 { color: var(--text); font-size: 1.35rem; font-weight: 800; margin-bottom: 12px; }
    .internship-card p { color: var(--muted); line-height: 1.6; margin: 0; font-size: 1rem; }
    
    .intern-meta { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px; }
    .intern-chip { font-size: 0.8rem; font-weight: 700; padding: 6px 12px; border-radius: 999px; color: var(--green); background: var(--green-transparent); }

    /* Application Form */
    .apply-wrap {
        background: var(--card);
        border: 1px solid var(--line);
        border-radius: 24px;
        padding: 48px;
        box-shadow: var(--shadow);
        max-width: 800px;
        margin: 60px auto 0;
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

    /* Intern Images */
    .intern-images { display: flex; gap: 20px; justify-content: center; margin-bottom: 40px; }
    .intern-images img { width: 48%; border-radius: 16px; box-shadow: var(--shadow); object-fit: cover; height: 300px; }

    /* Scroll Reveal */
    .reveal {
        opacity: 0; transform: translateY(32px);
        transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        transition-delay: var(--delay, 0ms);
    }
    .reveal.in-view { opacity: 1; transform: translateY(0); }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .internship-grid { grid-template-columns: 1fr; }
        .career-form-row { grid-template-columns: 1fr; }
        .apply-wrap { padding: 30px 20px; }
        .hero-internship { padding: 60px 0; min-height: auto; }
        .intern-images { flex-direction: column; }
        .intern-images img { width: 100%; height: auto; }
    }
  </style>
    <link rel="canonical" href="https://www.mithilasoftech.com/internships" />
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php $activePage = 'internship'; include 'headerhome.php'; ?>

<section class="hero-internship">
  <div class="container">
    <span class="hero-badge reveal">🎓 &nbsp; Internship Program</span>
    <h1 class="reveal" style="--delay:100ms;">Internship Opportunities in IT &amp; Software Development</h1>
    <p class="reveal" style="--delay:200ms;">Launch your professional journey with hands-on projects, direct mentorship, and real delivery experience across our core business domains.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-heading center reveal">
      <h2>Internship <span>Tracks</span></h2>
      <p>Choose the stream that matches your learning goals and build production-ready skills.</p>
    </div>
    
    <div class="intern-images reveal" style="--delay:100ms;">
        <img src="assets/image/internship.png" alt="IT internship training India" loading="lazy" />
        <img src="assets/image/internship1.jpg" alt="students learning coding" loading="lazy" />
    </div>
    
    <div class="internship-grid">
      <?php foreach($tracks as $index => $item): ?>
        <article class="internship-card reveal" style="--delay: <?= $index * 100 ?>ms;">
          <h3><?= e($item["title"]) ?></h3>
          <div class="intern-meta">
            <span class="intern-chip">⏱ <?= e($item["duration"]) ?></span>
            <span class="intern-chip">📍 <?= e($item["mode"]) ?></span>
          </div>
          <p><?= e($item["desc"]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="apply-wrap reveal" style="--delay:150ms;">
      <h3>Apply for an Internship</h3>
      <p>Share your details and preferred track. Our team will get in touch with next steps.</p>
      
      <form class="career-form" method="post" action="#">
        <div class="career-form-row">
            <input type="text" name="name" placeholder="Full Name" required />
            <input type="tel" name="phone" placeholder="Phone Number" required />
        </div>
        <div class="career-form-row">
            <input type="email" name="email" placeholder="Email Address" required />
            <input type="text" name="track" placeholder="Preferred Internship Track" required />
        </div>
        <textarea name="message" placeholder="Tell us about your background, skills, and why you want to join this track..."></textarea>
        <button type="submit" class="button button-primary">Submit Application</button>
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
