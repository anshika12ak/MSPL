<?php
$activePage = 'blog';
$title = 'Why Your Website Gets Traffic but No Leads: 9 Problems to Fix | Mithila Softech';
$hero_title = 'Why Your Website Gets Traffic but No Leads: 9 Problems to Fix';
$hero_subtext = 'Is your website getting visitors but not generating leads? Discover 9 common website problems and practical solutions to turn traffic into business enquiries.';
$hero_bg_image = 'assets/image/website-development-seo-services.jpeg';
$hero_bg_size = 'cover';
$fallbackImg = "https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable";

function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$all_blogs = [
    [
        "title" => "How AI Search Optimization, Web Development and Custom Software Can Help Your Business Grow",
        "excerpt" => "AI is changing how customers discover businesses online. Learn how AI search optimization, web development, and custom software drive growth.",
        "date" => "September 19, 2026",
        "category" => "Technology",
        "img" => "assets/image/aisearchera.png",
        "link" => "ai-search-optimization-web-development-custom-software.php",
    ],
    [
        "title" => "Why Your Website Gets Traffic but No Leads: 9 Problems to Fix",
        "excerpt" => "Is your website getting visitors but not generating leads? Discover 9 common website problems and practical solutions to turn traffic into business enquiries.",
        "date" => "September 17, 2026",
        "category" => "Web Design",
        "img" => "assets/image/website-development-seo-services.jpeg",
        "link" => "website-gets-traffic-but-no-leads.php",
    ],
    [
        "title" => "Best Marketing Services in Dubai: Grow Your Business Online",
        "excerpt" => "Looking for the best marketing services in Dubai? Discover how SEO, social media marketing, Google Ads, content marketing and performance marketing help businesses grow.",
        "date" => "September 15, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/best-marketing-services-in-dubai.jpg",
        "link" => "best-marketing-services-in-dubai.php",
    ],
    [
        "title" => "Best Custom Software Agency in Dubai for Business Growth",
        "excerpt" => "Looking for the best custom software agency in Dubai? Discover how tailored software development solutions can help businesses improve operations.",
        "date" => "September 12, 2026",
        "category" => "Technology",
        "img" => "assets/image/bestsoftwaredubai.jpeg",
        "link" => "best-custom-software-agency-dubai.php",
    ],
    [
        "title" => "Best App Development Services in USA | Mithila Softech",
        "excerpt" => "Looking for professional app development services in USA? Mithila Softech delivers custom mobile applications for businesses, startups, and enterprises.",
        "date" => "September 11, 2026",
        "category" => "Mobile Development",
        "img" => "assets/image/bestmarketingusa.jpeg",
        "link" => "app-development-services-usa.php",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Is your website getting visitors but not generating leads? Discover 9 common website problems and practical solutions to turn traffic into business enquiries.">
    <meta name="keywords" content="website not generating leads, website conversion problems, improve website conversions, business website development, website development services, lead generation website, conversion-focused website design, professional website development, MithilaSoftech">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://mithilasoftech.com/website-gets-traffic-but-no-leads">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        .blog-content-wrap { padding: 80px 0; background: #ffffff; }
        .blog-main .blog-body { max-width: 800px; margin: 0 auto; padding-left: 0 !important; padding-right: 0 !important; font-size: 1.1rem; line-height: 1.8; color: var(--text); }
        .blog-main .blog-body > p, .blog-main .blog-body > ul, .blog-main .blog-body > ol { margin-left: 0 !important; }
        .blog-main .blog-body h2, .blog-main .blog-body h3, .blog-main .blog-body h4 { text-align: left !important; }
        .blog-body h2 { font-size: 1.8rem; color: var(--blue-dark); margin: 40px 0 20px; }
        .blog-body h3 { font-size: 1.4rem; color: var(--text); margin: 30px 0 15px; }
        .blog-body p { margin-bottom: 24px; color: var(--muted); }
        .blog-body ul { margin-bottom: 24px; padding-left: 20px; }
        .blog-body li { margin-bottom: 10px; color: var(--muted); }
        .blog-body a { color: var(--green); font-weight: 600; text-decoration: underline; }
        .blog-body a:hover { color: var(--blue-dark); }
        .blog-image { width: 100%; height: auto; border-radius: 16px; margin-bottom: 40px; box-shadow: var(--shadow); }
        .solution-box { background: #f8fafc; border-left: 4px solid var(--blue-dark); padding: 18px 22px; border-radius: 8px; margin: 20px 0 30px; }
        .solution-box h4 { margin-top: 0; color: var(--blue-dark); font-size: 1.15rem; }
        .flow-diagram { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 24px; text-align: center; margin: 30px 0; font-weight: 600; color: var(--blue-dark); line-height: 2; }
        .blog-layout { display: flex; gap: 40px; align-items: flex-start; }
        .blog-main { flex: 1; min-width: 0; }
        .blog-sidebar { width: 360px; flex-shrink: 0; position: sticky; top: 120px; display: flex; flex-direction: column; gap: 40px; }
        @media (max-width: 991px) {
            .blog-layout { flex-direction: column; }
            .blog-sidebar { width: 100%; position: static; }
        }
        @media (max-width: 768px) {
            .blog-content-wrap { padding: 40px 15px; }
            .blog-main { max-width: 100%; overflow-x: hidden; }
            .blog-main .blog-body { font-size: 1rem; padding: 0 !important; overflow-wrap: break-word; }
            .blog-body h2 { font-size: 1.5rem; margin: 30px 0 15px; }
            .blog-body h3 { font-size: 1.25rem; margin: 24px 0 12px; }
            .blog-image { margin-bottom: 24px; border-radius: 10px; }
            .sidebar-widget { padding: 20px; }
            .recent-post-thumb { width: 60px; height: 60px; }
        }
        @media (max-width: 480px) {
            .blog-content-wrap { padding: 30px 10px; }
            .blog-body h2 { font-size: 1.35rem; }
            .blog-body h3 { font-size: 1.15rem; }
            .blog-body p, .blog-body ul { margin-bottom: 16px; }
        }
        .sidebar-widget { background: #ffffff; border-radius: 16px; padding: 28px; border: 1px solid #e5e7eb; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .widget-title { font-size: 1.25rem; font-weight: 800; color: var(--blue-dark); margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid var(--green); display: inline-block; text-transform: uppercase; letter-spacing: 0.5px; }
        .search-form { display: flex; gap: 8px; }
        .search-form input { flex: 1; padding: 14px 16px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-family: inherit; width: 100%; transition: border-color 0.3s ease; }
        .search-form input:focus { border-color: var(--blue-dark); }
        .search-form button { background: var(--blue-dark); color: #fff; border: none; border-radius: 8px; padding: 0 18px; cursor: pointer; transition: background 0.3s ease; display: flex; align-items: center; justify-content: center; }
        .search-form button:hover { background: var(--green); }
        .category-list { list-style: none; padding: 0; margin: 0; }
        .category-list li { margin-bottom: 14px; }
        .category-list li:last-child { margin-bottom: 0; }
        .category-list a { text-decoration: none; color: #4b5563; display: flex; justify-content: space-between; align-items: center; transition: color 0.3s ease; font-weight: 500; }
        .category-list a:hover { color: var(--green); }
        .category-list span { background: rgba(29, 78, 158, 0.1); color: var(--blue-dark); padding: 4px 10px; border-radius: 999px; font-size: 0.8rem; font-weight: 700; }
        .recent-post-item { display: flex; gap: 16px; margin-bottom: 24px; align-items: center; }
        .recent-post-item:last-child { margin-bottom: 0; }
        .recent-post-thumb { width: 80px; height: 80px; border-radius: 8px; object-fit: cover; flex-shrink: 0; }
        .recent-post-info h4 { font-size: 0.95rem; margin: 0 0 6px; line-height: 1.4; font-weight: 600; }
        .recent-post-info a { color: #111827; text-decoration: none; transition: color 0.3s ease; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .recent-post-info a:hover { color: var(--green); }
        .recent-post-date { font-size: 0.8rem; color: #6b7280; display: block; }
        .sidebar-form { display: flex; flex-direction: column; gap: 12px; }
        .sidebar-form input, .sidebar-form textarea { width: 100%; padding: 12px 14px; border: 1px solid #d1d5db; border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; transition: border-color 0.3s ease; box-sizing: border-box; background: #f9fafb; }
        .sidebar-form input:focus, .sidebar-form textarea:focus { border-color: var(--blue-dark); background: #ffffff; }
        .sidebar-form textarea { resize: vertical; min-height: 80px; }
        .sidebar-form button { background: var(--blue-dark); color: #fff; border: none; border-radius: 8px; padding: 12px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: background 0.3s ease; margin-top: 4px; }
        .sidebar-form button:hover { background: var(--green); }
    </style>
</head>
<body>

<?php include 'headerhome.php'; ?>

<?php include 'heropage.php'; ?>

<section class="blog-content-wrap">
    <div class="container">
        <div class="blog-layout">
            <main class="blog-main">
                <a href="blog.php" style="display: inline-block; margin-bottom: 20px; color: var(--blue-dark); font-weight: 600; text-decoration: none; position: relative; z-index: 10;">&larr; Back to Blogs</a>
                <div class="blog-body">

                    <img src="<?php echo $hero_bg_image; ?>" alt="<?php echo $hero_title; ?>" class="blog-image" onerror="this.onerror=null;this.src='<?php echo $fallbackImg; ?>';">

                    <p>You invested in a website.</p>
                    <p>You are getting visitors from Google, social media, advertisements, or referrals. But there is one frustrating problem:</p>
                    <p><strong>People visit your website, look around, and leave without contacting you.</strong></p>
                    <p>This is a common problem for businesses. Website traffic alone does not guarantee enquiries or sales. A website needs to do more than display information&mdash;it needs to guide visitors toward taking action.</p>
                    <p>If your website is attracting visitors but generating very few enquiries, the problem may not be your marketing alone. Your website itself could be creating barriers between visitors and your business.</p>
                    <p>Let's look at the 9 most common problems and how to solve them.</p>

                    <img src="assets/image/web.jpg" alt="Website Conversion Problems and Solutions" class="blog-image" onerror="this.onerror=null;this.src='<?php echo $fallbackImg; ?>';">

                    <h2>1. Your Website Does Not Clearly Explain What You Offer</h2>
                    <p>When someone lands on your website, they should understand within a few seconds:</p>
                    <ul>
                        <li>What your business does</li>
                        <li>Who you serve</li>
                        <li>What problem you solve</li>
                        <li>Why they should consider you</li>
                        <li>What they should do next</li>
                    </ul>
                    <p>A vague headline such as &ldquo;Welcome to Our Digital World&rdquo; does not tell a potential customer enough.</p>
                    <p>Instead, your homepage should communicate a specific value proposition. For example, <em>&ldquo;Custom Website Development for Growing Businesses&rdquo;</em> is much clearer than <em>&ldquo;Innovative Digital Solutions for the Future.&rdquo;</em></p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Review your homepage and ask: &ldquo;If a new visitor reads only the headline and first section, will they understand what we actually do?&rdquo; If the answer is no, your website needs clearer messaging and refined <a href="ui-ux-design.php">UI/UX design</a>.</p>
                    </div>

                    <h2>2. Visitors Cannot Find the Next Step</h2>
                    <p>A visitor may be interested in your service but still leave because they don't know what to do next.</p>
                    <p>A website should provide clear calls to action (CTAs) such as:</p>
                    <ul>
                        <li>Request a Quote</li>
                        <li>Book a Consultation</li>
                        <li>Get Started</li>
                        <li>Contact Our Team</li>
                        <li>Request a Free Consultation</li>
                        <li>Discuss Your Project</li>
                    </ul>
                    <p>The CTA should not be hidden only at the bottom of a long page.</p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Place relevant calls to action throughout important sections of your website. For example, a service page can follow this structure: <strong>Problem &rarr; Solution &rarr; Benefits &rarr; Process &rarr; Proof &rarr; CTA</strong>.</p>
                    </div>

                    <h2>3. Your Website Looks Outdated</h2>
                    <p>Customers often make an initial judgement about a business based on its website.</p>
                    <p>An outdated design, inconsistent typography, poor-quality images, broken layouts, or cluttered pages can reduce trust. This is particularly important for businesses selling professional services.</p>
                    <p>A potential client may think: <em>&ldquo;If their website looks neglected, will their service be professional?&rdquo;</em></p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Modernize the design with professional <a href="website-design.php">website design services</a> while keeping the user journey simple. A modern business website should have clean navigation, consistent branding, responsive design, clear content hierarchy, and professional visuals.</p>
                    </div>

                    <h2>4. Your Website Is Difficult to Use on Mobile</h2>
                    <p>A visitor may discover your business through Google or social media on a smartphone. If your website is difficult to use on mobile, potential customers may leave before contacting you.</p>
                    <p>Common mobile problems include:</p>
                    <ul>
                        <li>Text that is too small to read easily</li>
                        <li>Buttons that are difficult to tap</li>
                        <li>Images that break the layout</li>
                        <li>Slow-loading mobile pages</li>
                        <li>Menus that are confusing to navigate</li>
                        <li>Forms that are frustrating to complete</li>
                    </ul>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Your website should be built mobile-first and tested thoroughly across multiple screen sizes. Mobile responsiveness is not an optional feature&mdash;it is a vital foundation of modern web engineering.</p>
                    </div>

                    <h2>5. Your Website Loads Too Slowly</h2>
                    <p>Visitors don't want to wait for a website to load. Large uncompressed images, unnecessary scripts, poor hosting configuration, and unoptimized code drastically degrade loading speed.</p>
                    <p>A slow website frustrates visitors and damages your search engine rankings.</p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Conduct a comprehensive performance review to compress oversized images, eliminate unused scripts, optimize code, implement browser caching, and ensure fast, reliable hosting.</p>
                    </div>

                    <h2>6. Your Website Has No Trust Signals</h2>
                    <p>Imagine two companies offering the same service. One website simply says: &ldquo;We provide professional services.&rdquo; The other shows case studies, client testimonials, certifications, years of experience, and transparent results.</p>
                    <p>Which website gives a visitor the confidence to get in touch?</p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Add genuine evidence including: <strong>Case Studies + Client Testimonials + Portfolio + Reviews + Industry Experience + Clear Company Information</strong>. Showcase real results to establish credibility.</p>
                    </div>

                    <h2>7. Your Contact Form Creates Too Much Friction</h2>
                    <p>Sometimes the visitor is ready to enquire&mdash;but the form stops them in their tracks.</p>
                    <p>Forms requesting 10+ fields (full name, company name, title, address, phone, email, budget, multiple detailed questions) feel overwhelming during initial discovery.</p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Ask only for essential information at the initial stage (Name, Email/Phone, Service Needed, and Brief Requirement). You can collect detailed project specs during subsequent conversations.</p>
                    </div>

                    <h2>8. Your Service Pages Talk About You Instead of the Customer's Problem</h2>
                    <p>Many business websites state: <em>&ldquo;We are a leading company providing high-quality services.&rdquo;</em> But visitors are asking: <em>&ldquo;Can you solve my specific problem?&rdquo;</em></p>
                    <p>For example, a business owner seeking custom development is often dealing with inefficient workflows, poor lead conversion, slow systems, or lack of integrations.</p>
                    <div class="solution-box">
                        <h4>Solution</h4>
                        <p>Build service pages around customer problems. Highlight how your <a href="custom-software.php">custom software</a> or <a href="web-applications.php">web applications</a> solve real operational and commercial bottlenecks.</p>
                    </div>

                    <h2>9. Your Website and Marketing Strategy Are Working Separately</h2>
                    <p>A business may spend heavily on <a href="seo-services.php">SEO services</a>, PPC ads, or social media campaigns, but if the landing page isn't aligned to convert those visitors, marketing ROI plummets.</p>
                    <p>If either side is weak, business results suffer:</p>
                    <div class="flow-diagram">
                        SEO / Ads &rarr; Traffic &rarr; Poor Website Experience &rarr; Visitor Leaves &rarr; No Enquiry
                        <br><br>
                        <strong>Better Approach:</strong><br>
                        SEO / Ads &rarr; Targeted Landing Page &rarr; Clear Value Proposition &rarr; Trust Signals &rarr; Clear CTA &rarr; Qualified Enquiry
                    </div>

                    <h2>How a Conversion-Focused Website Can Solve the Problem</h2>
                    <p>A professional website should be built around the customer's journey rather than simply around company information:</p>
                    <div class="flow-diagram">
                        Customer Problem &darr;<br>
                        Clear Solution &darr;<br>
                        Relevant Service &darr;<br>
                        Key Benefits &darr;<br>
                        Proof &amp; Trust Signals &darr;<br>
                        Call to Action &darr;<br>
                        Qualified Business Enquiry
                    </div>

                    <h2>When Should You Consider Redesigning Your Website?</h2>
                    <p>You may need to consider a website redesign or redevelopment if:</p>
                    <ul>
                        <li>Your website looks outdated compared to competitors</li>
                        <li>Visitors are not converting into leads</li>
                        <li>Your bounce or exit rates are abnormally high</li>
                        <li>The website performs poorly on smartphones and tablets</li>
                        <li>Pages load slowly</li>
                        <li>Your services are difficult to understand</li>
                        <li>Your business model has evolved but your website hasn't</li>
                        <li>Your marketing campaigns are sending paid traffic to weak landing pages</li>
                    </ul>

                    <h2>What Should a Business Website Do?</h2>
                    <p>Your website should work as an active 24/7 sales engine, helping your business to:</p>
                    <ul>
                        <li>Explain services with clarity and authority</li>
                        <li>Build trust and social proof</li>
                        <li>Answer prospective customer questions</li>
                        <li>Generate qualified leads and enquiries</li>
                        <li>Support SEO, PPC, and digital marketing campaigns</li>
                        <li>Make it effortless for customers to connect with your team</li>
                    </ul>

                    <h2>Turn Your Website Into a Business Tool</h2>
                    <p>If your website is receiving visitors but those visitors are not becoming enquiries, don't automatically assume that you need more traffic. First ask: <em>&ldquo;What happens after someone reaches my website?&rdquo;</em></p>
                    <p><a href="https://www.mithilasoftech.com/">Mithila Softech</a> helps businesses evaluate their website requirements and develop professional, responsive, user-focused websites designed around real business objectives. Combine your web presence with smart tools like <a href="custom-crm-software-increase-sales-productivity.php">custom CRM systems</a> to capture and close every lead efficiently.</p>

                    <h2>Conclusion</h2>
                    <p>A website does not become successful simply because it receives visitors. It needs to communicate clearly, build trust, provide a smooth user experience, and make it easy for potential customers to take the next step.</p>
                    <p>If your business is investing in marketing but your website is not generating enough enquiries, the solution involves improving the website rather than simply buying more ads.</p>

                    <h2>FAQs</h2>
                    <p><strong>1. Why is my website getting traffic but no leads?</strong><br>Your website may have unclear messaging, weak calls to action, poor mobile usability, slow loading speed, limited trust signals, or a complicated enquiry process. Website traffic needs to be supported by a seamless conversion experience.</p>
                    <p><strong>2. Do I need a completely new website to get more leads?</strong><br>Not always. An audit can identify whether the problems can be solved through content improvements, design tweaks, speed optimization, landing page refinement, or specific redevelopment.</p>
                    <p><strong>3. What makes a website conversion-focused?</strong><br>A conversion-focused website clearly communicates the customer's problem and solution, builds trust, works flawlessly across all devices, loads fast, and guides visitors toward a single, compelling action.</p>
                    <p><strong>4. How does website development help business growth?</strong><br>Professional website development improves usability, performance, mobile responsiveness, content structure, service presentation, and enquiry pathways, turning passive traffic into active customers.</p>
                    <p><strong>5. Can Mithila Softech improve an existing business website?</strong><br>Yes. Mithila Softech can redesign specific sections, optimize speed and responsiveness, rebuild conversion paths, and align your website with your business growth goals.</p>

                </div>
                <a href="blog.php" class="button button-primary" style="margin-top: 30px; display: inline-block; position: relative; z-index: 10;">&larr; Back to Blogs</a>
            </main>

            <aside class="blog-sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Search</h3>
                    <form class="search-form" action="blog.php" method="GET">
                        <input type="text" name="q" placeholder="Search blogs..." value="<?= isset($_GET['q']) ? e($_GET['q']) : '' ?>">
                        <button type="submit" aria-label="Search"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                    </form>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="category-list">
                        <li><a href="blog.php?cat=Web+Design">Web Design <span>4</span></a></li>
                        <li><a href="blog.php?cat=Digital+Marketing">Digital Marketing <span>14</span></a></li>
                        <li><a href="blog.php?cat=Technology">Technology <span>11</span></a></li>
                        <li><a href="blog.php?cat=Web+Development">Web Development <span>6</span></a></li>
                        <li><a href="blog.php?cat=Mobile+Development">Mobile Development <span>3</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-posts">
                        <?php foreach (array_slice($all_blogs, 0, 3) as $recent): ?>
                            <div class="recent-post-item">
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
                    <form class="sidebar-form" action="index.php#contact" method="POST">
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
