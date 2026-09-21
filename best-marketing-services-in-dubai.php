<?php
$activePage = 'blog';
$title = 'Best Marketing Services in Dubai for Business Growth | Mithila Softech';
$hero_title = 'Best Marketing Services in Dubai: Grow Your Business Online';
$hero_subtext = 'Discover the best marketing services in Dubai, including SEO, social media, Google Ads and content marketing to increase visibility and leads.';
$hero_bg_image = 'assets/image/best-marketing-services-in-dubai.jpg';
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
        "title" => "Best Marketing Company in Dubai: How to Choose the Right Digital Marketing Partner",
        "excerpt" => "Finding the best marketing company in Dubai can help businesses improve online visibility, attract qualified customers, and increase conversions.",
        "date" => "September 8, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/bestmarketingdubai.jpeg",
        "link" => "best-marketing-company-in-dubai.php",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Discover the best marketing services in Dubai, including SEO, social media, Google Ads and content marketing to increase visibility and leads.">
    <meta name="keywords" content="Best Marketing Services in Dubai, Digital marketing services in Dubai, Marketing company in Dubai, Digital marketing agency in Dubai, SEO services in Dubai, Social media marketing Dubai, Google Ads services Dubai, Online marketing services Dubai, Performance marketing Dubai, Content marketing Dubai, Lead generation services Dubai">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />
    <link rel="canonical" href="https://mithilasoftech.com/best-marketing-services-in-dubai/">
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
        .blog-layout { display: flex; gap: 40px; align-items: flex-start; }
        .blog-main { flex: 1; min-width: 0; }
        .blog-sidebar { width: 360px; flex-shrink: 0; position: sticky; top: 120px; display: flex; flex-direction: column; gap: 40px; }
        .journey-box { background: #f0fdf4; border-left: 4px solid var(--green); padding: 18px 22px; border-radius: 8px; margin: 24px 0; font-weight: 600; color: var(--blue-dark); }
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

                    <p>Dubai is one of the most competitive business markets in the world. From startups and small businesses to established companies and eCommerce brands, businesses need a strong online presence to reach their target customers.</p>
                    <p>Having a website is no longer enough. Customers search on Google, explore social media, compare different businesses and read reviews before making purchasing decisions.</p>
                    <p>This makes professional <a href="digital-marketing.php">digital marketing services in Dubai</a> an important part of a modern business growth strategy.</p>
                    <p>The right marketing strategy can help a business improve its online visibility, attract relevant visitors, generate qualified leads and convert prospects into customers.</p>

                    <h2>Why Businesses Need Marketing Services in Dubai</h2>
                    <img src="assets/image/best-marketing-services-in-dubai-flowchart.png?v=<?php echo time(); ?>" alt="Best Marketing Services in Dubai for Business Growth Infographic" class="blog-internal-image" onerror="this.onerror=null;this.src='<?php echo $fallbackImg; ?>';">
                    <p>The Dubai market is highly competitive across industries such as <a href="industry-real-estate.php">real estate</a>, <a href="industry-healthcare.php">healthcare</a>, hospitality, <a href="industry-education.php">education</a>, construction, <a href="industry-retail.php">retail</a>, <a href="industry-banking-finance.php">finance</a> and professional services.</p>
                    <p>Professional marketing services can help businesses:</p>
                    <ul>
                        <li>Increase online visibility</li>
                        <li>Reach their target audience</li>
                        <li>Improve search engine rankings</li>
                        <li>Generate qualified leads</li>
                        <li>Increase website traffic</li>
                        <li>Build brand awareness</li>
                        <li>Improve social media presence</li>
                        <li>Increase conversions</li>
                        <li>Track marketing performance</li>
                        <li>Develop long-term customer relationships</li>
                    </ul>
                    <p>The objective should not simply be getting more followers or website visitors. A successful marketing strategy should contribute to actual business goals such as enquiries, bookings, sales and revenue. Learn more about evaluating marketing partners in our guide to choosing the <a href="best-marketing-company-in-dubai.php">best marketing company in Dubai</a>.</p>

                    <h2>1. Search Engine Optimization Services</h2>
                    <p>SEO is one of the most effective long-term strategies for improving online visibility.</p>
                    <p>When customers search for products or services on Google, appearing in relevant search results gives businesses an opportunity to attract potential customers.</p>
                    <p>Professional <a href="seo-services.php">SEO services in Dubai</a> can include:</p>
                    <ul>
                        <li>Keyword research</li>
                        <li><a href="technical-seo-agency-ai-powered-digital-marketing.php">Technical SEO</a></li>
                        <li>On-page optimization</li>
                        <li>Content optimization</li>
                        <li>Local SEO</li>
                        <li>Internal linking</li>
                        <li>Competitor analysis</li>
                        <li>Website performance optimization</li>
                        <li>Search performance monitoring</li>
                    </ul>
                    <p>For example, a real estate company may target keywords related to property investment in Dubai, while a healthcare business may target specific healthcare services and locations.</p>
                    <p>The focus should be on targeting relevant keywords that match the search intent of potential customers.</p>

                    <h2>2. Social Media Marketing in Dubai</h2>
                    <p>Social media plays an important role in building brand awareness and connecting with customers.</p>
                    <p>Depending on the target audience, businesses can use platforms such as Instagram, Facebook, LinkedIn, YouTube and other relevant social networks.</p>
                    <p>Effective <a href="social-media-marketing.php">social media marketing in Dubai</a> can include:</p>
                    <ul>
                        <li>Social media strategy</li>
                        <li>Content creation</li>
                        <li>Reels and videos</li>
                        <li>Graphic designs</li>
                        <li>Community management</li>
                        <li>Social media advertising</li>
                        <li>Audience targeting</li>
                        <li>Performance tracking</li>
                    </ul>
                    <p>Consistent and valuable content can help businesses establish credibility while keeping their brand visible to potential customers. Discover actionable tips in our guide on <a href="tips-to-improve-social-media-engagement.php">improving social media engagement</a>.</p>

                    <h2>3. Google Ads and PPC Marketing</h2>
                    <p>Businesses that want faster visibility can use paid advertising through Google Ads and other PPC platforms.</p>
                    <p><a href="digital-ads.php">Google Ads services</a> in Dubai can help businesses reach users who are actively searching for specific products or services.</p>
                    <p>PPC campaigns can include:</p>
                    <ul>
                        <li>Search campaigns</li>
                        <li>Display advertising</li>
                        <li>Remarketing</li>
                        <li>Shopping campaigns</li>
                        <li>Lead generation campaigns</li>
                        <li>Location-based advertising</li>
                    </ul>
                    <p>However, simply spending more on advertising does not guarantee better results. Successful PPC campaigns require proper keyword selection, compelling advertisements, optimized landing pages, conversion tracking and regular campaign improvements.</p>

                    <h2>4. Content Marketing</h2>
                    <p>Content marketing helps businesses educate their audience while building credibility and authority.</p>
                    <p>Content can include:</p>
                    <ul>
                        <li>SEO blogs</li>
                        <li>Service pages</li>
                        <li>Industry guides</li>
                        <li><a href="real-estate-digital-marketing-case-study-property-sales.php">Case studies</a></li>
                        <li>FAQs</li>
                        <li>Social media posts</li>
                        <li>Videos</li>
                        <li>Infographics</li>
                        <li>Landing pages</li>
                    </ul>
                    <p>For example, a digital marketing agency in Dubai can publish useful content about SEO, Google Ads, social media marketing, lead generation and online business growth. Good content should answer customer questions and provide useful information rather than simply promoting a service.</p>

                    <h2>5. Local SEO for Dubai Businesses</h2>
                    <p>Local SEO is especially important for businesses that serve customers in particular locations.</p>
                    <p>A strong <a href="local-seo-vs-traditional-seo.php">local SEO strategy</a> can help businesses appear when potential customers search for services in Dubai or specific areas.</p>
                    <p>Local SEO activities may include:</p>
                    <ul>
                        <li>Google Business Profile optimization</li>
                        <li>Local keyword research</li>
                        <li>Location-specific pages</li>
                        <li>Customer review management</li>
                        <li>Local citations</li>
                        <li>Local content creation</li>
                        <li>Business information optimization</li>
                    </ul>
                    <p>For example, an interior design company could target interior design company in Dubai, while a restaurant could target searches based on cuisine and location.</p>

                    <h2>6. Performance Marketing and Lead Generation</h2>
                    <p>The goal of marketing should ultimately be to generate business results.</p>
                    <p>Performance marketing focuses on measurable outcomes such as:</p>
                    <div class="journey-box">
                        Traffic &rarr; Leads &rarr; Prospects &rarr; Customers &rarr; Revenue
                    </div>
                    <p>Businesses can combine SEO, Google Ads, social media advertising, landing pages and analytics to create an effective lead-generation funnel. This allows businesses to understand which marketing channels are generating valuable leads and where improvements are required.</p>

                    <h2>7. Website Optimization</h2>
                    <p>Marketing campaigns bring potential customers to a website, but the website needs to convert those visitors into enquiries or customers.</p>
                    <p>Important areas include:</p>
                    <ul>
                        <li><a href="website-design.php">Website speed & responsive design</a></li>
                        <li>Mobile responsiveness</li>
                        <li>Easy navigation</li>
                        <li>Clear calls to action</li>
                        <li>Contact forms</li>
                        <li>Service information</li>
                        <li>Trust signals</li>
                        <li>Landing page design</li>
                        <li><a href="ui-ux-design.php">User experience (UI/UX)</a></li>
                    </ul>
                    <p>For example, if a business receives thousands of visitors but very few enquiries, simply increasing advertising spend may not solve the problem. Learn more in our breakdown on <a href="website-gets-traffic-but-no-leads.php">why websites get traffic but no leads</a>.</p>

                    <h2>How to Choose the Best Marketing Company in Dubai</h2>
                    <p>With many companies offering marketing services in Dubai, businesses should carefully evaluate their options.</p>
                    
                    <h3>Check Their Services</h3>
                    <p>Choose a company that provides the marketing services relevant to your business objectives, such as SEO, PPC, social media and content marketing.</p>

                    <h3>Understand Their Strategy</h3>
                    <p>Ask how they plan to understand your target audience, competitors, industry and business goals.</p>

                    <h3>Review Their Reporting</h3>
                    <p>A professional marketing company should provide clear reports showing meaningful performance metrics.</p>

                    <h3>Consider Industry Experience</h3>
                    <p>Experience with businesses in your industry can help an agency understand your audience and competitive environment.</p>

                    <h3>Focus on Business Results</h3>
                    <p>Do not choose an agency only because it promises more followers or traffic. Look for strategies that can contribute to enquiries, sales and revenue.</p>

                    <h2>Why Choose Mithila Softech?</h2>
                    <p><a href="https://www.mithilasoftech.com/">Mithila Softech</a> provides technology and digital marketing solutions designed to help businesses establish and grow their online presence.</p>
                    <p>Its marketing solutions can support businesses with areas such as:</p>
                    <ul>
                        <li>SEO & Local Optimization</li>
                        <li>Social media marketing</li>
                        <li>Google Ads & PPC</li>
                        <li>Paid advertising</li>
                        <li>Content marketing</li>
                        <li>Lead generation</li>
                        <li><a href="best-website-development-services-dubai.php">Website development in Dubai</a></li>
                        <li><a href="ecommerce-development.php">eCommerce solutions</a></li>
                        <li><a href="best-custom-software-agency-dubai.php">Custom software development in Dubai</a></li>
                    </ul>
                    <p>By combining website technology with digital marketing, businesses can create a stronger online presence and develop a more effective customer acquisition strategy.</p>

                    <h2>Conclusion</h2>
                    <p>Finding the best marketing services in Dubai is not simply about choosing a company that offers the most services. The right marketing partner should understand your business, target audience, competition and growth objectives.</p>
                    <p>SEO can build long-term organic visibility, social media can increase brand engagement, Google Ads can capture high-intent customers, content marketing can establish authority and performance marketing can help generate measurable leads.</p>
                    <p>For businesses operating in Dubai's competitive market, a well-planned and consistent digital marketing strategy can create a strong foundation for sustainable online growth.</p>

                    <h2>FAQs</h2>
                    <p><strong>1. What are the best marketing services in Dubai?</strong><br>Some of the most important marketing services include SEO, local SEO, social media marketing, Google Ads, content marketing, performance marketing, lead generation and website optimization.</p>
                    <p><strong>2. How much do marketing services cost in Dubai?</strong><br>The cost depends on the services required, business size, competition, marketing goals and advertising budget. Different businesses may require different marketing strategies and packages.</p>
                    <p><strong>3. Is SEO better than Google Ads for a Dubai business?</strong><br>Both have different benefits. Google Ads can provide faster paid visibility, while SEO focuses on building organic search visibility over time. Many businesses can benefit from using both.</p>
                    <p><strong>4. How long does digital marketing take to show results?</strong><br>The timeframe depends on the marketing channel and business competition. Paid campaigns can generate results quickly, while SEO and content marketing generally require consistent effort over a longer period.</p>
                    <p><strong>5. How do I choose the right digital marketing agency in Dubai?</strong><br>Consider the agency's experience, services, strategy, reporting process, communication and understanding of your business goals. Choose a company focused on measurable business growth rather than only vanity metrics.</p>

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
                        <li><a href="blog.php?cat=Digital+Marketing">Digital Marketing <span>14</span></a></li>
                        <li><a href="blog.php?cat=Technology">Technology <span>11</span></a></li>
                        <li><a href="blog.php?cat=Web+Design">Web Design <span>3</span></a></li>
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
