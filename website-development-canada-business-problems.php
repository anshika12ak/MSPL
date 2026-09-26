<?php
$activePage = 'blog';
$title = 'Why Your Canadian Business Website Is Losing Customers | Website Development Canada';
$hero_title = 'Why Your Canadian Business Website Is Losing Customers—and How to Fix It';
$hero_subtext = 'Learn how website development in Canada can solve common business problems like poor mobile experience, slow loading, weak conversions, and difficult navigation.';
$hero_bg_image = 'assets/image/website-development-canada-hero-banner.jpg';
$hero_bg_size = 'cover';
$fallbackImg = "https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable";

function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$all_blogs = [
    [
        "title" => "How Custom Mobile App Development Solves Business Problems",
        "excerpt" => "Discover how custom mobile app development can help businesses solve customer engagement, automation, sales, and operational challenges.",
        "date" => "September 26, 2026",
        "category" => "Mobile Development",
        "img" => "assets/image/custom-mobile-app-development-business-problems.png",
        "link" => "custom-mobile-app-development-business-solutions.php",
    ],
    [
        "title" => "Why Your Canadian Business Website Is Losing Customers | Website Development Canada",
        "excerpt" => "Learn how website development in Canada can solve common business problems like poor mobile experience, slow loading, weak conversions, and difficult navigation.",
        "date" => "September 25, 2026",
        "category" => "Web Development",
        "img" => "assets/image/your-website-gets-traffic-common-reasons.png",
        "link" => "website-development-canada-business-problems.php",
    ],
    [
        "title" => "Voice Search, Featured Snippets & AI Content Optimization Services",
        "excerpt" => "Improve your online visibility with voice search optimization services, featured snippet optimization, and AI content optimization for better search performance.",
        "date" => "September 22, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/modern-search-requires-smarter-optimization.png",
        "link" => "voice-search-featured-snippet-ai-content-optimization.php",
    ],
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
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Learn how website development in Canada can solve common business problems like poor mobile experience, slow loading, weak conversions, and difficult navigation.">
    <meta name="keywords" content="website development Canada, web development company Canada, website development services Canada, custom website development Canada, business website development Canada, responsive web design Canada, website redesign Canada">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://www.mithilasoftech.com/website-development-canada-business-problems">
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
        .blog-image { width: 100%; height: auto; border-radius: 16px; margin-bottom: 30px; box-shadow: var(--shadow); }
        .blog-internal-image { display: block; max-width: 440px; width: 100%; height: auto; margin: 24px auto 32px; border-radius: 12px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06); border: 1px solid #e5e7eb; }
        .problem-box { background: #f8fafc; border-left: 4px solid var(--blue-dark); padding: 18px 22px; border-radius: 0 8px 8px 0; margin: 24px 0; }
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

                    <img src="<?php echo $hero_bg_image; ?>" alt="Why Your Canadian Business Website Is Losing Customers - Website Development Canada" class="blog-image" onerror="this.onerror=null;this.src='<?php echo $fallbackImg; ?>';">

                    <p>A business website should do more than display your company name, services, and contact details. It should help potential customers understand your offer, trust your business, and take the next step.</p>
                    <p>Yet many Canadian businesses invest in websites that look good but fail to generate enough enquiries.</p>
                    <p>The problem is often not the business itself. It can be the way the website communicates the business, handles visitors, works on mobile devices, or guides users toward an enquiry.</p>
                    <p>Professional <a href="best-it-services-company-in-canada.php">website development in Canada</a> can address these problems by combining design, functionality, performance, SEO, and conversion-focused development.</p>

                    <img src="assets/image/your-website-gets-traffic-common-reasons.png" alt="Your Website Gets Traffic - Common Reasons & Solutions" class="blog-internal-image" onerror="this.onerror=null;this.src='<?php echo $fallbackImg; ?>';">

                    <h2>Problem 1: Visitors Do Not Understand Your Business Quickly</h2>
                    <p>Imagine a potential customer lands on your homepage after searching Google. If they cannot immediately understand:</p>
                    <ul>
                        <li>What your company offers</li>
                        <li>Who you serve</li>
                        <li>What makes your service useful</li>
                        <li>Which location you serve</li>
                        <li>How they can contact you</li>
                    </ul>
                    <p>they may leave before exploring your website.</p>

                    <h3>The Solution</h3>
                    <p>Your homepage should communicate your core value proposition immediately.</p>
                    <p>Instead of using vague statements such as &ldquo;Innovative Solutions for a Better Future,&rdquo; use direct messaging that explains the service and customer benefit.</p>
                    <p>For example: <strong><a href="best-custom-software-development-company-canada.php">Custom Software Solutions for Growing Canadian Businesses</a></strong> is more informative than: <em>Building the Future Through Innovation</em>.</p>
                    <p>A good <a href="best-custom-it-solution-services-in-canada.php">business website development Canada</a> strategy starts with the customer's questions rather than the company's internal terminology.</p>

                    <h2>Problem 2: Your Website Works on Desktop but Performs Poorly on Mobile</h2>
                    <p>A website may look excellent on a large monitor but become difficult to use on a smartphone.</p>
                    <p>Small buttons, crowded menus, difficult forms, oversized images, and horizontal scrolling can create unnecessary friction. This is particularly important because customers may discover your business while searching from their phones.</p>

                    <h3>The Solution: Responsive Website Development</h3>
                    <p>A professional <a href="website-design.php">responsive web design in Canada</a> approach paired with refined <a href="ui-ux-design.php">UI/UX design</a> ensures that the website adapts seamlessly to different screen sizes.</p>
                    <p>Important elements include:</p>
                    <ul>
                        <li>Mobile-friendly navigation</li>
                        <li>Readable typography</li>
                        <li>Properly sized buttons</li>
                        <li>Responsive images</li>
                        <li>Easy-to-use enquiry forms</li>
                        <li>Fast-loading mobile pages</li>
                        <li>Clear calls to action</li>
                    </ul>
                    <p>Mobile responsiveness should be considered during development rather than added as an afterthought.</p>

                    <h2>Problem 3: Your Website Gets Visitors but Few Enquiries</h2>
                    <p>Traffic is useful, but <a href="website-gets-traffic-but-no-leads.php">traffic without enquiries</a> does not directly create business opportunities.</p>
                    <p>A common issue is that websites contain multiple pages but do not provide a clear path toward contacting the business. A visitor may read your service page and then wonder: <em>What should I do now?</em></p>

                    <h3>The Solution: Build Conversion Paths</h3>
                    <p>Every important service page should have a logical next step. Depending on the business, this could be:</p>
                    <ul>
                        <li>Request a quote</li>
                        <li>Book a consultation</li>
                        <li>Schedule a demo</li>
                        <li>Contact the team</li>
                        <li>Request pricing</li>
                        <li>Submit a project requirement</li>
                    </ul>
                    <p>The CTA should also appear naturally throughout the page instead of being hidden at the bottom. This is where <a href="website-development-services-affordable-seo-services-india.php">custom website development in Canada</a> can be more useful than simply installing a template. The website can be structured around the company's actual sales process.</p>

                    <h2>Problem 4: Your Website Is Too Slow</h2>
                    <p>A beautiful website can still perform poorly if it takes too long to load.</p>
                    <p>Large images, unnecessary scripts, excessive plugins, inefficient code, and poorly configured hosting can all contribute to performance problems. Slow websites can create a poor user experience and make it harder for visitors to reach important pages.</p>

                    <h3>The Solution</h3>
                    <p>Performance should be considered during the development process. Developers can work on areas such as:</p>
                    <ul>
                        <li>Image optimization</li>
                        <li>Efficient code</li>
                        <li>Browser caching</li>
                        <li>Script management</li>
                        <li>Responsive image delivery</li>
                        <li>Database optimization</li>
                        <li>Hosting configuration</li>
                        <li>Core page performance</li>
                    </ul>
                    <p>A faster website provides a better foundation for SEO, advertising, and conversion campaigns.</p>

                    <h2>Problem 5: Your Website Has No Clear Service Structure</h2>
                    <p>Some business websites place every service on one page. This can make it difficult for customers and search engines to understand exactly what the company offers.</p>
                    <p>For example, a company providing <a href="custom-software.php">software development</a>, <a href="ecommerce-development.php">eCommerce development</a>, <a href="app-development.php">mobile applications</a>, and IT consulting may benefit from separate service pages.</p>

                    <h3>The Solution: Build Dedicated Service Pages</h3>
                    <p>A structured website could include: <code>Home &rarr; Services &rarr; Individual Service &rarr; Contact</code>.</p>
                    <p>Each service page can explain:</p>
                    <ol>
                        <li>The customer's problem</li>
                        <li>The company's solution</li>
                        <li>Key features or benefits</li>
                        <li>How the process works</li>
                        <li>Relevant proof or examples</li>
                        <li>Frequently asked questions</li>
                        <li>A clear enquiry option</li>
                    </ol>
                    <p>This structure can also create stronger opportunities for targeting relevant search queries.</p>

                    <h2>Problem 6: Your Website Cannot Grow With Your Business</h2>
                    <p>A basic website may work when a company has only a few services. But as the business grows, new requirements can appear:</p>
                    <ul>
                        <li>Online booking</li>
                        <li>Customer accounts</li>
                        <li>E-commerce</li>
                        <li>CRM integration</li>
                        <li>Payment systems</li>
                        <li>Customer portals</li>
                        <li>Automated forms</li>
                        <li>Admin dashboards</li>
                        <li><a href="api-development-integration-services.php">Third-party API integrations</a></li>
                    </ul>
                    <p>If the original website was not built with scalability in mind, adding these features later can become difficult and expensive.</p>

                    <h3>The Solution: Plan for Scalability</h3>
                    <p>A good <a href="web-application-development-company.php">web development company Canada</a> should understand where the business is going, not just what it needs today. Before development begins, businesses should identify potential future requirements and choose an appropriate technology architecture. This can reduce the need for a complete rebuild when the business expands.</p>

                    <h2>Problem 7: Your Website and Marketing Work Separately</h2>
                    <p>Another common problem occurs when a company invests in <a href="seo-services.php">SEO</a> or paid advertising but sends visitors to a poorly structured website. Marketing brings the visitor; the website needs to convert that visitor.</p>
                    <p>This means website development and <a href="best-digital-marketing-company-canada-integrated-business-growth.php">digital marketing in Canada</a> should support each other.</p>
                    <p><a href="index.php">Mithila Softech</a> offers web development alongside SEO, Google Ads, Meta campaigns, and other digital services, allowing businesses to address both the website and marketing sides of their digital presence.</p>

                    <h2>A Better Website Development Process for Canadian Businesses</h2>
                    <p>Instead of beginning with colours and layouts, start with the business problem. A practical development process can look like this:</p>
                    <ul>
                        <li><strong>Step 1: Identify the Business Problem:</strong> Determine whether the main issue is low enquiries, poor usability, slow performance, outdated design, weak search visibility, or operational inefficiency.</li>
                        <li><strong>Step 2: Understand the Customer Journey:</strong> Map how customers discover the business, evaluate the service, and eventually contact or purchase from the company.</li>
                        <li><strong>Step 3: Plan the Website Structure:</strong> Create pages around services, locations, customer needs, and conversion objectives.</li>
                        <li><strong>Step 4: Develop the Website:</strong> Build the website with responsive design, appropriate functionality, performance, security, and scalability in mind.</li>
                        <li><strong>Step 5: Test Before Launch:</strong> Check the website across mobile and desktop devices, browsers, forms, links, navigation, page speed, and other important functions.</li>
                        <li><strong>Step 6: Measure and Improve:</strong> After launch, monitor traffic, enquiries, user behaviour, and important conversion points. The website can then be improved based on actual business data.</li>
                    </ul>

                    <h2>When Should a Canadian Business Consider Website Redesign?</h2>
                    <p>A complete redesign may be worth considering when your current website:</p>
                    <ul>
                        <li>Looks outdated</li>
                        <li>Is difficult to use on mobile</li>
                        <li>Generates very few enquiries</li>
                        <li>Loads slowly</li>
                        <li>Has confusing navigation</li>
                        <li>Cannot support new functionality</li>
                        <li>Has outdated content</li>
                        <li>Does not properly represent your current services</li>
                        <li>Is difficult to maintain</li>
                    </ul>
                    <p>However, not every website needs to be rebuilt from scratch. Sometimes targeted improvements to UX, content, speed, landing pages, or technical infrastructure can solve the problem.</p>

                    <h2>Conclusion</h2>
                    <p>Your website should work as a business tool, not simply as an online brochure. If a Canadian business is receiving visitors but struggling to generate enquiries, the solution may involve improving the website's messaging, mobile experience, performance, service structure, conversion paths, or functionality.</p>
                    <p>Effective website development services in Canada should begin with the business problem and then build the technology around the required outcome.</p>
                    <p>Whether you need a new website, a redesign, eCommerce functionality, or scalable <a href="progressive-web-app-development-company-india.php">progressive web applications</a>, the objective should remain the same: create a digital platform that is easier for customers to use and easier for your business to grow with.</p>
                    <p><a href="index.php">Mithila Softech</a> provides custom web development, eCommerce websites, admin dashboards, and progressive web applications, with technologies including React, Next.js, WordPress, and eCommerce solutions.</p>

                    <h2>FAQs</h2>
                    <p><strong>1. What should I look for in a website development company in Canada?</strong><br>Look for a development partner that understands your business objectives, customer journey, technology requirements, mobile usability, performance, SEO structure, security, and future scalability&mdash;not just visual design.</p>
                    <p><strong>2. How can website development help generate more leads?</strong><br>A properly developed website can improve messaging, navigation, page speed, mobile usability, service presentation, enquiry forms, and calls to action. These improvements can make it easier for relevant visitors to become enquiries.</p>
                    <p><strong>3. Should I redesign my existing website or build a new one?</strong><br>It depends on the condition of your existing website. If the technology, structure, and design can support your goals, targeted improvements may be sufficient. If the underlying platform prevents important improvements, a complete redevelopment may make more sense.</p>
                    <p><strong>4. Is responsive design important for Canadian business websites?</strong><br>Yes. A responsive website adapts its layout and functionality to different screen sizes, helping users navigate the website on smartphones, tablets, and desktop computers.</p>
                    <p><strong>5. Can a website be connected to business software?</strong><br>Yes. Depending on the requirements, a website can integrate with CRM systems, payment gateways, booking platforms, email tools, APIs, analytics systems, customer portals, and other business applications.</p>

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
                        <li><a href="blog.php?cat=Web+Development">Web Development <span>7</span></a></li>
                        <li><a href="blog.php?cat=Web+Design">Web Design <span>4</span></a></li>
                        <li><a href="blog.php?cat=Technology">Technology <span>11</span></a></li>
                        <li><a href="blog.php?cat=Digital+Marketing">Digital Marketing <span>15</span></a></li>
                        <li><a href="blog.php?cat=Mobile+Development">Mobile Development <span>4</span></a></li>
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
                    <h3 class="widget-title">Get a Canadian Consultation</h3>
                    <form class="sidebar-form" action="index.php#contact" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Business Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" rows="3" placeholder="Tell us about your website or project..." required></textarea>
                        <button type="submit">Request Consultation</button>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php include 'footer-new.php'; ?>

</body>
</html>
