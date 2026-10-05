<?php
if (!function_exists('e')) {
    function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }
}

$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = $base_dir === '/' ? '/' : $base_dir . '/';

$logo = "assets/image/ms.png";
$logo_path = "assets/image/ms.png";
$fallbackImg = "https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable";

if (!function_exists('local_blog_image')) {
    function local_blog_image($preferred, $fallback) {
        return file_exists(__DIR__ . '/' . $preferred) ? $preferred : $fallback;
    }
}

$title = 'Mithila Softech Blog - Insights on Software, Transformation, Analytics and Mobile Apps';

require_once __DIR__ . '/blogs-data.php';

$search_query = trim($_GET['q'] ?? '');
$display_blogs = [];
if ($search_query !== '') {
    foreach ($blogs as $blog) {
        if (stripos($blog['title'], $search_query) !== false || 
            stripos($blog['excerpt'], $search_query) !== false || 
            stripos($blog['category'], $search_query) !== false) {
            $display_blogs[] = $blog;
        }
    }
} else {
    $display_blogs = $blogs;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $base_url; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Blog | Software, Tech & Digital Marketing Insights</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=20260905">
    <style>
        .blog-content-wrap {
            padding: 80px 0;
            background: #ffffff;
        }
        .blog-body {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text);
        }
        .blog-body h2 {
            font-size: 2rem;
            color: var(--green-dark);
            margin: 40px 0 20px;
        }
        .blog-body p {
            margin-bottom: 24px;
            color: var(--muted);
        }
        .blog-image {
            width: 100%;
            height: auto;
            border-radius: 20px;
            margin-bottom: 40px;
            border: 1px solid rgba(15, 23, 42, 0.12);
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.14);
        }
        .blog-layout {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }
        .blog-main {
            flex: 1;
            min-width: 0;
        }
        .blog-sidebar {
            width: 360px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        .blog-list {
            display: flex;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .blog-layout {
                flex-direction: column;
            }
            .blog-sidebar { width: 100%; }
        }
        @media (max-width: 768px) {
            .blog-thumb-wrap { height: auto !important; aspect-ratio: 1659 / 948; margin-bottom: 16px !important; }
            .blog-content h3 { font-size: 1.35rem !important; }
        }
        .blog-post-item {
            display: flex;
            flex-direction: column;
            padding-bottom: 50px;
            margin-bottom: 50px;
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
            position: relative;
        }
        .blog-post-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .blog-thumb-wrap { width: 100%; height: auto; aspect-ratio: 1659 / 948; overflow: hidden; position: relative; border-radius: 20px; margin-bottom: 24px; background: #020617; border: 1px solid rgba(15, 23, 42, 0.12); box-shadow: 0 14px 34px rgba(15, 23, 42, 0.12); }
        .blog-thumb { width: 100%; height: 100%; object-fit: cover; object-position: center; transition: none; background: #020617; border-radius: inherit; }
        .blog-thumb.blog-thumb-contain { object-fit: contain; object-position: center; background: #020617; }
        .blog-post-item:hover .blog-thumb,
        .blog-post-item:hover .blog-thumb.blog-thumb-contain { transform: none; }
        
        .blog-category-badge {
            position: absolute; top: 20px; left: 20px; background: var(--blue-dark); color: #fff;
            padding: 6px 14px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;
            text-transform: uppercase; z-index: 2;
        }
        
        .blog-content { display: flex; flex-direction: column; flex-grow: 1; background: #fff; }
        
        .blog-meta { display: flex; gap: 15px; align-items: center; font-size: 0.9rem; color: #6b7280; margin-bottom: 16px; }
        .blog-meta span { display: inline-flex; align-items: center; gap: 6px; }
        
        .blog-content h3 {
            color: #111827;
            font-size: 1.7rem;
            font-weight: 800;
            line-height: 1.4;
            margin: 0 0 16px;
            transition: color 0.3s ease;
        }
        .blog-post-item:hover .blog-content h3 { color: var(--green); }
        
        .blog-content p.blog-excerpt { color: #4b5563; font-size: 1.05rem; line-height: 1.7; margin: 0 0 24px; flex-grow: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        
        .blog-card-footer { display: flex; justify-content: flex-start; align-items: center; padding-top: 0; border-top: none; }
        
        .blog-read {
            color: var(--blue-dark);
            font-size: 1rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: gap 0.3s ease;
        }
        .blog-read svg { width: 18px; height: 18px; transition: transform 0.3s ease; }
        .blog-read:hover { color: var(--green); }
        .blog-post-item:hover .blog-read { gap: 12px; }

        .full-blog-content h4 {
            font-size: 1.5rem;
            color: var(--blue-dark);
            margin: 30px 0 15px;
        }
        .full-blog-content ol, .full-blog-content ul {
            margin-bottom: 24px;
            padding-left: 20px;
        }
        .full-blog-content li {
            margin-bottom: 10px;
        }

        /* Sidebar Styles */
        .sidebar-widget {
            background: #ffffff;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .widget-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--blue-dark);
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--green);
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .search-form {
            display: flex;
            gap: 8px;
        }
        .search-form input {
            flex: 1;
            padding: 14px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            font-family: inherit;
            width: 100%;
            transition: border-color 0.3s ease;
        }
        .search-form input:focus { border-color: var(--blue-dark); }
        .search-form button {
            background: var(--blue-dark);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0 18px;
            cursor: pointer;
            transition: background 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .search-form button:hover { background: var(--green); }
        
        .category-list { list-style: none; padding: 0; margin: 0; }
        .category-list li { margin-bottom: 14px; }
        .category-list li:last-child { margin-bottom: 0; }
        .category-list a {
            text-decoration: none; color: #4b5563; display: flex;
            justify-content: space-between; align-items: center;
            transition: color 0.3s ease; font-weight: 500;
        }
        .category-list a:hover { color: var(--green); }
        .category-list span {
            background: rgba(29, 78, 158, 0.1); color: var(--blue-dark);
            padding: 4px 10px; border-radius: 999px; font-size: 0.8rem; font-weight: 700;
        }
        
        .recent-post-item { display: flex; gap: 16px; margin-bottom: 24px; align-items: center; }
        .recent-post-item:last-child { margin-bottom: 0; }
        .recent-post-thumb {
            width: 80px; height: 80px; border-radius: 12px;
            border: 1px solid rgba(15, 23, 42, 0.10);
            object-fit: cover; object-position: center; flex-shrink: 0; background: #020617;
        }
        .recent-post-info h4 {
            font-size: 0.95rem; margin: 0 0 6px; line-height: 1.4; font-weight: 600;
        }
        .recent-post-info a {
            color: #111827; text-decoration: none; transition: color 0.3s ease;
            display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
        }
        .recent-post-info a:hover { color: var(--green); }
        .recent-post-date {
            font-size: 0.8rem; color: #6b7280; display: block;
        }
        
        .sidebar-form { display: flex; flex-direction: column; gap: 12px; }
        .sidebar-form input, .sidebar-form textarea {
            width: 100%; padding: 12px 14px; border: 1px solid #d1d5db;
            border-radius: 8px; font-family: inherit; font-size: 0.95rem;
            outline: none; transition: border-color 0.3s ease; box-sizing: border-box;
            background: #f9fafb;
        }
        .sidebar-form input:focus, .sidebar-form textarea:focus { border-color: var(--blue-dark); background: #ffffff; }
        .sidebar-form textarea { resize: vertical; min-height: 80px; }
        .sidebar-form button {
            background: var(--blue-dark); color: #fff; border: none;
            border-radius: 8px; padding: 12px; font-weight: 600; font-size: 1rem;
            cursor: pointer; transition: background 0.3s ease;
            margin-top: 4px;
        }
        .sidebar-form button:hover { background: var(--green); }

        .srv-hero-wrapper {
            text-align: center; overflow: hidden;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.92), rgba(21, 58, 117, 0.85)), url('assets/image/digitalseva.jpg') center/cover no-repeat;
            color: #ffffff; font-family: 'Inter', sans-serif; position: relative; z-index: 1; padding: 120px 0 100px;
        }
        .srv-hero-headline { font-size: clamp(2.6rem, 5vw, 5rem); font-weight: 800; line-height: 1.02; margin: 0 0 20px 0; color: #fff; }
        .srv-hero-headline-accent { background: linear-gradient(135deg, #38bdf8 0%, #bfdbfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .srv-hero-subtext { font-size: 1.125rem; color: rgba(255, 255, 255, 0.8); line-height: 1.75; margin: 0 auto 36px; max-width: 700px; }
        .srv-hero-badge {
            display: inline-flex; align-items: center; padding: 8px 18px; border-radius: 999px;
            background: rgba(255, 255, 255, 0.1); color: #ffffff; font-weight: 700; font-size: 0.95rem; margin-bottom: 24px;
            border: 1px solid rgba(255,255,255,0.15);
        }
    </style>
    <meta name="description" content="Explore blogs on software development, digital marketing, and IT trends to grow your business online.">
    <meta name="keywords" content="IT blog, tech blog, marketing insights">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/blog" />
</head>
<body>

<?php $activePage = 'blog'; include 'headerhome.php'; ?>

<section class="srv-hero-wrapper">
    <div class="container" style="position: relative; z-index: 2;">
        <span class="srv-hero-badge">Our Blog</span>
        <h1 class="srv-hero-headline">Insights on <br><span class="srv-hero-headline-bold">Software Development &amp; <span class="srv-hero-headline-accent">Digital Marketing</span></span></h1>
        <p class="srv-hero-subtext">Insights, practical guides, and industry viewpoints across software development, testing, ERP, marketing, and hiring.</p>
    </div>
</section>

<section class="blog-content-wrap">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                <div class="blog-list">
                    <?php if (empty($display_blogs)): ?>
                        <div style="padding: 40px; text-align: center; background: #f9fafb; border-radius: 16px; border: 1px solid #e5e7eb;">
                            <h3 style="color: var(--blue-dark); margin-bottom: 10px;">No results found</h3>
                            <p style="color: var(--muted); margin-bottom: 20px;">We couldn't find any blogs matching "<?= e($search_query) ?>".</p>
                            <a href="blog" class="button button-primary" style="border-radius: 999px;">View All Blogs</a>
                        </div>
                    <?php else: ?>
                    <?php foreach ($display_blogs as $blog): ?>
                        <article class="blog-post-item blog-reveal" onclick="window.location.href='<?= e($blog['link'] ?? '#') ?>'" style="cursor: pointer;">
                            <div class="blog-thumb-wrap">
                                <span class="blog-category-badge"><?= e($blog['category']) ?></span>
                                <a href="<?= e($blog['link'] ?? '#') ?>" style="display: block; width: 100%; height: 100%;">
                                    <img class="blog-thumb" src="<?= e($blog['img']) ?>" alt="<?= e($blog['title']) ?>" loading="lazy" onerror="this.onerror=null;this.src='<?= e($fallbackImg) ?>';" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <?= e($blog['date']) ?>
                                    </span>
                                </div>
                                <h3><a href="<?= e($blog['link'] ?? '#') ?>" style="color: inherit; text-decoration: none;"><?= e($blog['title']) ?></a></h3>
                                <p class="blog-excerpt"><?= e($blog['excerpt']) ?></p>
                                <div class="blog-card-footer">
                                    <a href="<?= e($blog['link'] ?? '#') ?>" class="blog-read">
                                        Read More 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            
            <aside class="blog-sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Search</h3>
                    <form class="search-form" action="blog.php" method="GET">
                        <input type="text" name="q" placeholder="Search blogs..." value="<?= e($search_query) ?>">
                        <button type="submit" aria-label="Search"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                    </form>
                </div>
                
                <div class="sidebar-widget">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="category-list">
                        <li><a href="#">Digital Marketing <span>11</span></a></li>
                        <li><a href="#">Case Study <span>3</span></a></li>
                        <li><a href="#">Technology <span>8</span></a></li>
                        <li><a href="#">Business <span>1</span></a></li>
                        <li><a href="#">Mobile Development <span>1</span></a></li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-posts">
                        <?php foreach (array_slice($blogs, 0, 3) as $recent): ?>
                            <div class="recent-post-item" onclick="window.location.href='<?= e($recent['link'] ?? '#') ?>'" style="cursor: pointer;">
                                <a href="<?= e($recent['link'] ?? '#') ?>" style="display: block; flex-shrink: 0;">
                                    <img src="<?= e($recent['img']) ?>" alt="<?= e($recent['title']) ?>" class="recent-post-thumb" onerror="this.onerror=null;this.src='<?= e($fallbackImg) ?>';">
                                </a>
                                <div class="recent-post-info">
                                    <h4><a href="<?= e($recent['link'] ?? '#') ?>"><?= e($recent['title']) ?></a></h4>
                                    <span class="recent-post-date"><?= e($recent['date']) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="sidebar-widget">
                    <h3 class="widget-title">Get a Free Quote</h3>
                    <form class="sidebar-form" action="index#contact" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email Address" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" rows="3" placeholder="How can we help you?" required></textarea>
                        <button type="submit">Submit Request</button>
                    </form>
                </div>
            </aside>
        </div>
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

      // Scroll Reveal logic
      const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => { 
              if (entry.isIntersecting) {
                  entry.target.classList.add("active"); 
                  entry.target.classList.add("in-view"); 
              }
          });
      }, { threshold: 0.15 });
      
      document.querySelectorAll(".reveal, .blog-reveal").forEach(el => revealObserver.observe(el));
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






