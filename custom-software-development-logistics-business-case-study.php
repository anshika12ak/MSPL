<?php
$activePage = 'blog';
$title = 'How Custom Software Development Helped a Logistics Company Scale Operations Efficiently | Mithila Softech';
$hero_title = 'How a Growing Logistics Company Transformed Operations with Custom Software Development';
$hero_subtext = 'Discover how a logistics company improved workflow automation, customer management, operational visibility, and digital growth using custom ERP, CRM, mobile app, and website development solutions.';
$hero_bg_image = 'assets/image/digitallogistics.png?v=20260610-1659';
$hero_bg_size = 'contain';
$fallbackImg = "https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable";

function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8"); }

$all_blogs = [
    [
        "title" => "How a Growing Logistics Company Transformed Operations with Custom Software Development",
        "excerpt" => "Explore how a logistics and transportation company streamlined operations, improved customer communication, and accelerated business growth through custom software, ERP integration, CRM systems, mobile app development, and website optimization.",
        "date" => "May 27, 2026",
        "category" => "Case Study",
        "img" => "assets/image/digitallogistics.png?v=20260610-1659",
        "link" => "custom-software-development-logistics-business-case-study",
    ],
    [
        "title" => "How Modern Search Optimization Helps Businesses Grow in the AI Search Era",
        "excerpt" => "Businesses today need more than traditional SEO to stay competitive. By combining technical optimization, AI-driven strategies, and answer-focused content, companies can improve search visibility.",
        "date" => "June 2, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/aisearchera.png?v=20260610-1659",
        "link" => "business-growth-through-modern-search-optimization",
    ],
    [
        "title" => "Nike Digital Marketing Case Study & Online Growth Lessons for Modern Brands",
        "excerpt" => "Discover how Nike transformed into a digital-first global brand using SEO, social media storytelling, influencer marketing, mobile engagement, and personalized campaigns.",
        "date" => "April 24, 2026",
        "category" => "Case Study",
        "img" => "assets/image/nikecase.png?v=20260610-1659",
        "link" => "nike-digital-marketing-case-study",
    ],
    [
        "title" => "How a Real Estate Brand Generated Rs.3.2 Crore Through Strategic Digital Marketing",
        "excerpt" => "Learn how Mithila Softech helped a real estate developer generate Rs.3.2 crore in property sales through SEO, AEO, social media campaigns, and performance marketing strategies.",
        "date" => "January 24, 2026",
        "category" => "Case Study",
        "img" => "assets/image/realestateblog.png?v=20260610-1659",
        "link" => "real-estate-digital-marketing-case-study-property-sales",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <meta name="description" content="Discover how a logistics company improved workflow automation, customer management, operational visibility, and digital growth using custom ERP, CRM, mobile app, and website development solutions.">
    <meta name="keywords" content="Custom software development services, ERP software development company, CRM software development company, App development company, Website development services">
    <link rel="canonical" href="https://www.mithilasoftech.com/custom-software-development-logistics-business-case-study">
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
        .blog-body h3 { font-size: 1.35rem; color: var(--text); margin: 30px 0 15px; }
        .blog-body p { margin-bottom: 24px; color: var(--muted); }
        .blog-body ul, .blog-body ol { margin-bottom: 24px; padding-left: 20px; }
        .blog-body li { margin-bottom: 10px; color: var(--muted); }
        .blog-image { width: 100%; height: auto; border-radius: 16px; margin-bottom: 40px; box-shadow: var(--shadow); }
        .blog-layout { display: flex; gap: 40px; align-items: flex-start; }
        .blog-main { flex: 1; min-width: 0; }
        .blog-sidebar { width: 360px; flex-shrink: 0; position: sticky; top: 120px; display: flex; flex-direction: column; gap: 40px; }
        @media (max-width: 991px) { .blog-layout { flex-direction: column; } .blog-sidebar { width: 100%; position: static; } }
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
        .recent-post-thumb { width: 80px; height: 80px; border-radius: 8px; object-fit: cover; flex-shrink: 0; }
        .recent-post-info h4 { font-size: 0.95rem; margin: 0 0 6px; line-height: 1.4; font-weight: 600; }
        .recent-post-info a { color: #111827; text-decoration: none; transition: color 0.3s ease; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .recent-post-date { font-size: 0.8rem; color: #6b7280; display: block; }
        .sidebar-form { display: flex; flex-direction: column; gap: 12px; }
        .sidebar-form input, .sidebar-form textarea { width: 100%; padding: 12px 14px; border: 1px solid #d1d5db; border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; box-sizing: border-box; background: #f9fafb; }
        .sidebar-form textarea { resize: vertical; min-height: 80px; }
        .sidebar-form button { background: var(--blue-dark); color: #fff; border: none; border-radius: 8px; padding: 12px; font-weight: 600; font-size: 1rem; cursor: pointer; margin-top: 4px; }
    </style>
</head>
<body>

<?php include 'headerhome.php'; ?>

<section class="srv-hero-wrapper" style="background-color: #020617; background-image: linear-gradient(135deg, rgba(2, 6, 23, 0.72), rgba(21, 58, 117, 0.55)), url('<?php echo e($hero_bg_image); ?>'); background-position: center, center; background-size: cover, contain; background-repeat: no-repeat, no-repeat; text-align: center; padding: 120px 0 100px; color: #fff;">
    <div class="container">
        <span style="display: inline-flex; padding: 8px 18px; border-radius: 999px; background: rgba(255,255,255,0.12); font-weight: 700; margin-bottom: 22px;">Case Study</span>
        <h1 style="font-size: clamp(2.2rem, 4vw, 4.2rem); font-weight: 800; line-height: 1.08; margin: 0 auto 22px; max-width: 980px;"><?php echo e($hero_title); ?></h1>
        <p style="max-width: 760px; margin: 0 auto; color: rgba(255,255,255,0.84); line-height: 1.75; font-size: 1.08rem;"><?php echo e($hero_subtext); ?></p>
    </div>
</section>

<section class="blog-content-wrap">
    <div class="container">
        <div class="blog-layout">
            <main class="blog-main">
                <a href="blog" style="display: inline-block; margin-bottom: 20px; color: var(--blue-dark); font-weight: 600; text-decoration: none;">&larr; Back to Blogs</a>
<div class="blog-body">
                    
                    <img src="<?php echo e($hero_bg_image); ?>" alt="<?php echo e($hero_title); ?>" class="blog-image" onerror="this.onerror=null;this.src='<?php echo e($fallbackImg); ?>';">

                    <p>Businesses today operate in a highly competitive and technology-driven environment where efficiency, speed, customer experience, and operational accuracy directly impact long-term success. Companies that still depend on manual systems, spreadsheets, disconnected software tools, and outdated workflows often struggle to scale effectively.</p>
                    <p>As industries continue moving toward automation and digital transformation, modern organizations now require intelligent technology solutions that can centralize operations, improve productivity, and create better customer experiences.</p>
                    <p>This case study highlights how a rapidly growing logistics and supply chain company transformed its business operations with advanced digital solutions developed by Mithila Softech.</p>
                    <p>The company faced major operational bottlenecks due to fragmented workflows, inefficient communication systems, delayed reporting, and the lack of a centralized digital infrastructure. To solve these challenges, they partnered with a provider of professional <a href="custom-software" style="color: var(--blue-dark); text-decoration: underline; font-weight: 600;">Custom software development services</a> to build scalable and fully integrated business solutions.</p>
                    <p>The result was a complete digital transformation that improved efficiency, streamlined operations, enhanced customer management, and supported long-term business growth.</p>

                    <h2>Understanding the Client's Business Challenges</h2>
                    <p>The logistics company operated across multiple regions and managed transportation services, fleet operations, warehousing, shipment coordination, and customer support for several enterprise clients. Although the business had grown rapidly over the years, its internal systems had not evolved at the same pace.</p>
                    <p>Most operational activities relied heavily on spreadsheets, manual communication, and disconnected third-party tools. As operational complexity increased, the business started facing several critical challenges.</p>

                    <h3>Lack of Centralized Operations</h3>
                    <p>Different departments used separate tools and processes to manage their daily activities. The sales team tracked customer information manually. The operations department relied on spreadsheets for shipment coordination, while warehouse teams used separate inventory systems.</p>
                    <p>Because these systems were not connected, management struggled to access accurate real-time business data. This created delays, communication gaps, and reporting inaccuracies.</p>

                    <h3>Poor Customer Relationship Management</h3>
                    <p>Customer communication was another major challenge. The business lacked a structured customer relationship management system. Sales inquiries, support requests, and customer follow-ups were managed manually through emails and spreadsheets.</p>
                    <p>As customer volume increased, the company found it difficult to:</p>
                    <ul>
                        <li>Track customer interactions</li>
                        <li>Manage sales pipelines</li>
                        <li>Handle support requests efficiently</li>
                        <li>Monitor lead conversion performance</li>
                    </ul>
                    <p>This affected customer satisfaction and slowed down sales processes.</p>

                    <h3>Delayed Operational Reporting</h3>
                    <p>Management teams did not have access to centralized dashboards or automated reporting systems. Generating business reports required manual data collection from multiple departments, which consumed valuable time and increased the risk of reporting errors.</p>
                    <p>Without accurate operational visibility, decision-making became slower and less effective.</p>

                    <h3>Inefficient Communication Between Teams</h3>
                    <p>Field teams, warehouse staff, customer support agents, and management departments often struggled with communication delays. The absence of mobile accessibility and real-time operational updates affected workflow efficiency and shipment coordination.</p>
                    <p>The business needed a modern digital ecosystem that could connect all operational departments through one centralized platform.</p>

                    <h2>Building a Digital Transformation Strategy</h2>
                    <p>Before starting development, the technology team conducted detailed consultations with the client to understand their operational workflows, pain points, future business goals, and scalability requirements.</p>
                    <p>Instead of offering generic software solutions, the objective was to build customized systems specifically tailored to the company's business processes.</p>
                    <p>The digital transformation strategy focused on:</p>
                    <ul>
                        <li>Automating manual workflows</li>
                        <li>Centralizing business operations</li>
                        <li>Improving customer management</li>
                        <li>Enhancing operational transparency</li>
                        <li>Providing real-time reporting</li>
                        <li>Increasing scalability for future growth</li>
                    </ul>
                    <p>To achieve these objectives, the development team proposed a combination of ERP software integration, CRM software development, mobile application development, modern website development, and cloud-based operational infrastructure.</p>

                    <h2>ERP Software Development for Operational Automation</h2>
                    <p>One of the most important components of the transformation was the implementation of a custom ERP platform. As an experienced <a href="custom-software" style="color: var(--blue-dark); text-decoration: underline; font-weight: 600;">ERP software development company</a>, the development team designed a fully customized enterprise resource planning system tailored specifically for logistics and transportation operations.</p>
                    <p>The ERP system acted as a centralized operational hub connecting multiple departments into one unified platform.</p>

                    <h3>Key ERP Features Implemented</h3>
                    <ul>
                        <li>Shipment management dashboards</li>
                        <li>Inventory and warehouse tracking</li>
                        <li>Fleet management systems</li>
                        <li>Vendor coordination modules</li>
                        <li>Billing and invoicing automation</li>
                        <li>Financial reporting systems</li>
                        <li>Operational analytics dashboards</li>
                        <li>Employee workflow management</li>
                    </ul>
                    <p>The ERP system replaced several disconnected tools and manual spreadsheets previously used by the company. This significantly improved operational visibility and internal coordination.</p>

                    <h3>How the ERP System Improved Efficiency</h3>
                    <p>Before ERP implementation, operational updates required constant manual communication between departments. After integration, all operational data became available in real time through centralized dashboards.</p>
                    <p>Managers could now monitor shipment status, fleet availability, delivery schedules, inventory movement, financial reports, and operational performance metrics. This improved decision-making speed and operational control.</p>
                    <p>The ERP system also reduced repetitive manual tasks, helping teams focus more on productivity and customer service.</p>

                    <h2>CRM Software Development for Better Customer Management</h2>
                    <p>The next phase of digital transformation focused on improving customer communication and lead management. The company required a centralized customer management platform capable of handling growing customer interactions efficiently.</p>
                    <p>As a professional <a href="custom-software" style="color: var(--blue-dark); text-decoration: underline; font-weight: 600;">CRM software development company</a>, the team developed a customized CRM solution tailored specifically to the company's sales and support workflows.</p>

                    <h3>CRM Features Included</h3>
                    <ul>
                        <li>Lead management automation</li>
                        <li>Customer communication tracking</li>
                        <li>Sales pipeline monitoring</li>
                        <li>Automated reminders and follow-ups</li>
                        <li>Support ticket management</li>
                        <li>Customer analytics dashboards</li>
                        <li>Performance tracking systems</li>
                    </ul>
                    <p>This allowed the company to manage customer interactions more effectively while improving sales coordination.</p>

                    <h3>Impact on Customer Experience</h3>
                    <p>The CRM platform helped the business significantly improve response times and customer engagement. Sales teams could now track every inquiry from initial contact to final conversion.</p>
                    <p>Customer support teams gained access to complete interaction histories, allowing them to provide faster and more personalized support.</p>
                    <ul>
                        <li>Improved lead conversion rates</li>
                        <li>Faster customer response times</li>
                        <li>Better communication management</li>
                        <li>Increased customer satisfaction</li>
                        <li>Higher operational transparency</li>
                    </ul>
                    <p>The CRM solution also helped management analyze customer behavior and optimize future sales strategies.</p>

                    <h2>Mobile App Development for Real-Time Accessibility</h2>
                    <p>Field operations and logistics coordination required mobile accessibility for operational staff and drivers. To improve communication and real-time tracking, the company invested in a dedicated mobile application.</p>
                    <p>As an experienced <a href="app-development" style="color: var(--blue-dark); text-decoration: underline; font-weight: 600;">App development company</a>, the development team created a scalable mobile solution compatible with both Android and iOS devices.</p>

                    <h3>Mobile App Features</h3>
                    <ul>
                        <li>Live shipment tracking</li>
                        <li>Driver task management</li>
                        <li>GPS location integration</li>
                        <li>Real-time delivery updates</li>
                        <li>Push notifications</li>
                        <li>Internal communication systems</li>
                        <li>Digital proof of delivery features</li>
                    </ul>
                    <p>The mobile application allowed operational teams to stay connected regardless of location.</p>

                    <h3>Business Benefits of Mobile Accessibility</h3>
                    <p>Before mobile integration, operational updates depended heavily on manual calls and delayed reporting. The mobile application streamlined communication between drivers, warehouse teams, and management departments.</p>
                    <p>This improved delivery coordination, operational accuracy, team productivity, real-time reporting, and customer communication. The mobile platform also reduced paperwork and improved overall workflow efficiency.</p>

                    <h2>Website Development for Digital Growth</h2>
                    <p>The company's existing website lacked modern functionality, mobile responsiveness, and SEO optimization. It did not effectively represent the company's services or support lead generation.</p>
                    <p>To strengthen digital presence and improve customer engagement, the business invested in professional <a href="website-design" style="color: var(--blue-dark); text-decoration: underline; font-weight: 600;">Website development services</a>. The development team designed a modern, fast, and conversion-focused website optimized for user experience and search visibility.</p>

                    <h3>Website Improvements Included</h3>
                    <ul>
                        <li>Responsive mobile-friendly design</li>
                        <li>Modern UI/UX structure</li>
                        <li>Service-focused landing pages</li>
                        <li>Faster loading speed</li>
                        <li>SEO optimization</li>
                        <li>Inquiry and contact forms</li>
                        <li>User-friendly navigation</li>
                    </ul>
                    <p>The goal was not only to improve website appearance but also to create a platform capable of supporting business growth and digital marketing strategies.</p>

                    <h3>Results from Website Optimization</h3>
                    <ul>
                        <li>Increased online inquiries</li>
                        <li>Better customer engagement</li>
                        <li>Lower bounce rates</li>
                        <li>Improved search engine visibility</li>
                        <li>Stronger brand credibility</li>
                    </ul>
                    <p>The website became an important lead-generation and customer communication channel.</p>

                    <h2>Overall Business Results After Digital Transformation</h2>
                    <p>Within months of implementation, the company achieved significant operational improvements. The integrated digital ecosystem helped streamline workflows, improve customer experiences, and support long-term scalability.</p>

                    <h3>Key Business Outcomes</h3>
                    <ul>
                        <li>Reduced manual operational workload</li>
                        <li>Faster communication between departments</li>
                        <li>Improved customer management systems</li>
                        <li>Better operational visibility</li>
                        <li>Higher workflow efficiency</li>
                        <li>Increased scalability for future growth</li>
                        <li>Better reporting accuracy</li>
                        <li>Enhanced customer satisfaction</li>
                    </ul>
                    <p>The business gained a strong competitive advantage by adopting customized technology solutions tailored specifically to its operational needs.</p>

                    <h2>Why Custom Software Development Matters Today</h2>
                    <p>Every business operates differently, and generic software solutions often fail to address unique operational challenges. Custom software allows businesses to create systems designed specifically for their workflows, goals, and scalability requirements.</p>
                    <p>Professional Custom software development services help companies:</p>
                    <ul>
                        <li>Automate repetitive processes</li>
                        <li>Improve operational efficiency</li>
                        <li>Enhance customer experiences</li>
                        <li>Centralize business operations</li>
                        <li>Reduce manual errors</li>
                        <li>Improve scalability</li>
                    </ul>
                    <p>Businesses investing in customized technology solutions are better prepared to adapt to changing market demands and future growth opportunities.</p>

                    <h2>Conclusion</h2>
                    <p>Technology has become one of the most important drivers of modern business growth. Companies that continue relying on disconnected systems and outdated workflows often struggle with inefficiency, communication gaps, and limited scalability.</p>
                    <p>This case study demonstrates how a logistics business successfully transformed its operations through customized ERP systems, CRM platforms, mobile applications, and website development solutions.</p>
                    <p>With the right digital transformation strategy, businesses can improve operational efficiency, enhance customer experiences, and create scalable systems capable of supporting long-term growth.</p>
                    <p>Organizations looking to modernize operations and achieve sustainable digital growth should partner with experienced technology providers that understand both business challenges and scalable software architecture.</p>

                    <h2>Frequently Asked Questions (FAQs)</h2>
                    <p><strong>1. What are custom software development services?</strong><br>Custom software development services involve building tailored software solutions designed specifically according to a business's operational requirements and goals.</p>
                    <p><strong>2. Why should businesses invest in ERP software?</strong><br>ERP software helps centralize operations, automate workflows, improve reporting accuracy, and increase operational efficiency through a unified business platform.</p>
                    <p><strong>3. What does a CRM software development company provide?</strong><br>A CRM software development company creates systems that help businesses manage customer interactions, sales pipelines, lead tracking, and customer support processes more efficiently.</p>
                    <p><strong>4. Why is mobile app development important for logistics businesses?</strong><br>Mobile applications improve real-time communication, operational tracking, delivery coordination, and accessibility for field teams and operational staff.</p>
                    <p><strong>5. How do website development services help businesses grow?</strong><br>Professional website development services improve online visibility, customer engagement, SEO performance, and lead generation while strengthening brand credibility.</p>

                    

                </div>
<a href="blog" class="button button-primary" style="margin-top: 30px; display: inline-block;">&larr; Back to Blogs</a>
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
                        <li><a href="#">Case Study <span>3</span></a></li>
                        <li><a href="#">Digital Marketing <span>4</span></a></li>
                        <li><a href="#">Technology <span>1</span></a></li>
                        <li><a href="#">Business <span>1</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-posts">
                        <?php foreach (array_slice($all_blogs, 1, 3) as $recent): ?>
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

