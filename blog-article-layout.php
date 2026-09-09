<?php
$fallbackImg = $fallbackImg ?? "https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable";
$activePage = $activePage ?? 'blog';

if (!function_exists('e')) {
    function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }
}

$recent_blogs = $recent_blogs ?? [
    [
        "title" => "Best Website Development Services in Dubai for Business Growth | Mithila Softech",
        "date" => "September 5, 2026",
        "img" => "assets/image/best-website-development-services-dubai.jpg",
        "link" => "best-website-development-services-dubai",
    ],
    [
        "title" => "Best Digital Marketing Agency in India for Business Growth | Mithila Softech",
        "date" => "September 3, 2026",
        "img" => "assets/image/best-digital-marketing-agency-in-india.jpg",
        "link" => "best-digital-marketing-agency-in-india",
    ],
    [
        "title" => "Best Website Designing Company in India for Modern Business Websites | Mithila Softech",
        "date" => "September 1, 2026",
        "img" => "assets/image/best-website-designing-company-in-india.jpg",
        "link" => "best-website-designing-company-in-india",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <meta name="description" content="<?php echo e($meta_description); ?>">
    <meta name="keywords" content="<?php echo e($meta_keywords); ?>">
    <link rel="canonical" href="<?php echo e($canonical); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preload" as="image" href="<?php echo e($hero_bg_image); ?>" fetchpriority="high">
    <link rel="stylesheet" href="assets/css/style.css?v=20260905">
    <style>
        .blog-content-wrap { padding: 80px 0; background: #ffffff; }
        .blog-content-wrap .container { margin-left: 0 !important; max-width: 100% !important; padding-left: 20px !important; padding-right: 20px !important; }
        .blog-layout { display: flex; gap: 40px; align-items: flex-start; }
        .blog-main { flex: 1; min-width: 0; }
        .blog-main .blog-body { max-width: 100%; margin: 0; font-size: 1.1rem; line-height: 1.8; color: var(--text); text-align: left !important; }
        .blog-article-title { font-size: clamp(2.2rem, 4vw, 4.2rem); font-weight: 800; line-height: 1.08; margin: 0 0 22px 0; max-width: 100%; text-align: left !important; }
        .blog-article-subtitle { max-width: 100%; margin: 0 0 30px 0; color: rgba(255,255,255,0.84); line-height: 1.75; font-size: 1.08rem; text-align: left !important; }
        .blog-body h2 { font-size: 1.8rem; color: var(--blue-dark); margin: 40px 0 20px; text-align: left !important; }
        .blog-body h3 { font-size: 1.25rem; color: var(--text); margin: 28px 0 12px; text-align: left !important; }
        .blog-body p { margin-bottom: 24px; color: var(--muted); text-align: left !important; }
        .blog-body ul, .blog-body ol { margin-bottom: 24px; padding-left: 20px; text-align: left !important; }
        .blog-body li { margin-bottom: 10px; color: var(--muted); }
        .blog-body a { color: var(--blue-dark); text-decoration: underline; font-weight: 600; }
        .blog-image { width: 100%; height: auto; border-radius: 20px; margin-bottom: 40px; border: 1px solid rgba(15, 23, 42, 0.12); box-shadow: 0 16px 40px rgba(15, 23, 42, 0.14); }
        .comparison-table { width: 100%; border-collapse: collapse; margin: 0 0 28px; font-size: 0.98rem; }
        .comparison-table th, .comparison-table td { border: 1px solid #e5e7eb; padding: 12px 14px; text-align: left; vertical-align: top; }
        .comparison-table th { background: #f8fafc; color: var(--blue-dark); font-weight: 800; }
        .blog-sidebar { width: 360px; flex-shrink: 0; position: sticky; top: 120px; display: flex; flex-direction: column; gap: 40px; }
        .sidebar-widget { background: #ffffff; border-radius: 16px; padding: 28px; border: 1px solid #e5e7eb; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .widget-title { font-size: 1.25rem; font-weight: 800; color: var(--blue-dark); margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid var(--green); display: inline-block; text-transform: uppercase; letter-spacing: 0.5px; }
        .search-form { display: flex; gap: 8px; }
        .search-form input { flex: 1; padding: 14px 16px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-family: inherit; width: 100%; }
        .search-form button { background: var(--blue-dark); color: #fff; border: none; border-radius: 8px; padding: 0 18px; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .category-list { list-style: none; padding: 0; margin: 0; }
        .category-list li { margin-bottom: 14px; }
        .category-list a { text-decoration: none; color: #4b5563; display: flex; justify-content: space-between; align-items: center; font-weight: 500; }
        .category-list span { background: rgba(29, 78, 158, 0.1); color: var(--blue-dark); padding: 4px 10px; border-radius: 999px; font-size: 0.8rem; font-weight: 700; }
        .recent-post-item { display: flex; gap: 16px; margin-bottom: 24px; align-items: center; }
        .recent-post-item:last-child { margin-bottom: 0; }
        .recent-post-thumb { width: 80px; height: 80px; border-radius: 12px; border: 1px solid rgba(15, 23, 42, 0.10); object-fit: cover; flex-shrink: 0; background: #020617; }
        .recent-post-info h4 { font-size: 0.95rem; margin: 0 0 6px; line-height: 1.4; font-weight: 600; }
        .recent-post-info a { color: #111827; text-decoration: none; transition: color 0.3s ease; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .recent-post-date { font-size: 0.8rem; color: #6b7280; display: block; }
        .sidebar-form { display: flex; flex-direction: column; gap: 12px; }
        .sidebar-form input, .sidebar-form textarea { width: 100%; padding: 12px 14px; border: 1px solid #d1d5db; border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; box-sizing: border-box; background: #f9fafb; }
        .sidebar-form textarea { resize: vertical; min-height: 80px; }
        .sidebar-form button { background: var(--blue-dark); color: #fff; border: none; border-radius: 8px; padding: 12px; font-weight: 600; font-size: 1rem; cursor: pointer; margin-top: 4px; }
        @media (max-width: 991px) { .blog-layout { flex-direction: column; } .blog-sidebar { width: 100%; position: static; } }
        @media (max-width: 640px) {
            .blog-content-wrap { width: 100%; padding: 28px 0 44px; overflow: hidden; }
            .blog-content-wrap > .container,
            .blog-article-hero > .container { width: 100% !important; max-width: 100% !important; padding-left: 14px !important; padding-right: 14px !important; }
            .blog-main .blog-body { width: 100% !important; max-width: 100% !important; padding-left: 0 !important; padding-right: 0 !important; font-size: 0.94rem; line-height: 1.65; }
            .blog-article-hero { width: 100%; padding: 34px 0 36px !important; background-size: cover, contain !important; background-position: center, center top !important; overflow: hidden; }
            .blog-article-title { font-size: clamp(1.45rem, 8vw, 2rem) !important; line-height: 1.14 !important; margin-bottom: 14px !important; max-width: 100% !important; }
            .blog-article-subtitle { font-size: 0.82rem !important; line-height: 1.55 !important; max-width: 100% !important; }
            .blog-body p { margin-bottom: 18px; }
            .blog-body h2 { font-size: 1.35rem; margin: 28px 0 14px; line-height: 1.25; }
            .blog-image { display: block; width: 100% !important; max-width: 100% !important; height: auto !important; object-fit: contain; border-radius: 12px; margin-bottom: 22px; box-shadow: 0 10px 24px rgba(15, 23, 42, 0.14); }
            .comparison-table { display: block; overflow-x: auto; white-space: nowrap; }
        }
    </style>
</head>
<body>

<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper blog-article-hero" style="background-color: #020617; background-image: linear-gradient(135deg, rgba(2, 6, 23, 0.76), rgba(21, 58, 117, 0.58)), url('<?php echo e($hero_bg_image); ?>'); background-position: center, center; background-size: cover, cover; background-repeat: no-repeat, no-repeat; text-align: left; padding: 120px 0 100px; color: #fff;">
    <div class="container">
        <span style="display: inline-flex; padding: 8px 18px; border-radius: 999px; background: rgba(255,255,255,0.12); font-weight: 700; margin-bottom: 22px;"><?php echo e($category); ?></span>
        <h1 class="blog-article-title"><?php echo e($hero_title); ?></h1>
        <p class="blog-article-subtitle"><?php echo e($hero_subtext); ?></p>
    </div>
</section>

<section class="blog-content-wrap">
    <div class="container">
        <div class="blog-layout">
            <main class="blog-main">
                <div class="blog-body">
                    <a href="blog" style="display: inline-block; margin-bottom: 20px; color: var(--blue-dark); font-weight: 600; text-decoration: none;">&larr; Back to Blogs</a>
                    <?php 
                    $body_featured_img = isset($featured_image) ? $featured_image : $hero_bg_image;
                    if (!empty($body_featured_img) && $body_featured_img !== false): 
                    ?>
                        <img src="<?php echo e($body_featured_img); ?>" alt="<?php echo e($hero_title); ?>" class="blog-image" fetchpriority="high" decoding="async" onerror="this.onerror=null;this.src='<?php echo e($fallbackImg); ?>';">
                    <?php endif; ?>

                    <?php foreach ($content_blocks as $block): ?>
                        <?php if ($block['type'] === 'p'): ?>
                            <p><?php echo $block['html']; ?></p>
                        <?php elseif ($block['type'] === 'h2'): ?>
                            <h2><?php echo e($block['text']); ?></h2>
                        <?php elseif ($block['type'] === 'h3'): ?>
                            <h3><?php echo e($block['text']); ?></h3>
                        <?php elseif ($block['type'] === 'ul'): ?>
                            <ul>
                                <?php foreach ($block['items'] as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?>
                            </ul>
                        <?php elseif ($block['type'] === 'ol'): ?>
                            <ol>
                                <?php foreach ($block['items'] as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?>
                            </ol>
                        <?php elseif ($block['type'] === 'img'): ?>
                            <img src="<?php echo e($block['src']); ?>" alt="<?php echo e($block['alt'] ?? ''); ?>" class="blog-image" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='<?php echo e($fallbackImg); ?>';">
                        <?php elseif ($block['type'] === 'table'): ?>
                            <table class="comparison-table">
                                <thead><tr><?php foreach ($block['headers'] as $header): ?><th><?php echo e($header); ?></th><?php endforeach; ?></tr></thead>
                                <tbody>
                                    <?php foreach ($block['rows'] as $row): ?>
                                        <tr><?php foreach ($row as $cell): ?><td><?php echo e($cell); ?></td><?php endforeach; ?></tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <a href="blog" class="button button-primary" style="margin-top: 30px; display: inline-block;">&larr; Back to Blogs</a>
                </div>
            </main>

            <aside class="blog-sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Search</h3>
                    <form class="search-form" action="blog" method="GET">
                        <input type="text" name="q" placeholder="Search blogs..." value="<?= isset($_GET['q']) ? e($_GET['q']) : '' ?>">
                        <button type="submit" aria-label="Search"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                    </form>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="category-list">
                        <li><a href="#">Digital Marketing <span>8</span></a></li>
                        <li><a href="#">Technology <span>8</span></a></li>
                        <li><a href="#">Case Study <span>3</span></a></li>
                        <li><a href="#">Business <span>1</span></a></li>
                        <li><a href="#">Mobile Development <span>1</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-posts">
                        <?php foreach (array_slice($recent_blogs, 0, 3) as $recent): ?>
                            <div class="recent-post-item">
                                <a href="<?= e($recent['link'] ?? '#') ?>" style="display: block; flex-shrink: 0;">
                                    <img src="<?= e($recent['img']) ?>" alt="<?= e($recent['title']) ?>" class="recent-post-thumb" loading="lazy" decoding="async" onerror="this.onerror=null;this.src='<?= e($fallbackImg) ?>';">
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

</body>
</html>


