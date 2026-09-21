<?php
if (!function_exists('local_blog_image')) {
    function local_blog_image($preferred, $fallback) {
        return file_exists(__DIR__ . '/' . $preferred) ? $preferred : $fallback;
    }
}
$company = "Mithila Softech";
$tagline = "Digital Power. Business Ki Seva";
$logo_path = "assets/image/ms.png"; 
$year = date("Y");
$sectors = [
    ["name" => "Education", "img" => "assets/image/eduction.png", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'],
    ["name" => "Healthcare", "img" => "assets/image/medical.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>'],
    ["name" => "Finance", "img" => "assets/image/finance.png", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>'],
    ["name" => "Retail & E-commerce", "img" => "assets/image/eommerce.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>'],
    ["name" => "Real Estate", "img" => "assets/image/realestate.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M9 8h1"/><path d="M9 12h1"/><path d="M9 16h1"/><path d="M14 8h1"/><path d="M14 12h1"/><path d="M14 16h1"/><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"/></svg>'],
    ["name" => "Agriculture", "img" => "assets/image/agriculture.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>'],
    ["name" => "IT & Startups", "img" => "assets/image/it-startups.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'],
    ["name" => "Logistics", "img" => "assets/image/logistics.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>'],
    ["name" => "Travel & Tourism", "img" => "assets/image/travel.jpg", "icon" => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-.5-.5-2.5 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.2-1.1.6L3 8l6 5-4 4-3-1-1 1 3 4 4 3 1-1-1-3 4-4 5 6l1.2-.7c.4-.2.7-.6.6-1.1z"/></svg>']
];
$serviceSpread = [
    ["icon"=>"01","title"=>"Web Development","desc"=>"Modern, responsive business websites and portals tailored for your brand."],
    ["icon"=>"02","title"=>"Digital Marketing","desc"=>"SEO, social media, paid ads, and campaigns that generate leads and growth."],
    ["icon"=>"03","title"=>"Mobile Apps","desc"=>"Android-friendly app solutions and customer-facing mobile experiences."],
    ["icon"=>"04","title"=>"Custom Software","desc"=>"CRM, dashboards, automation tools, and software built around your operations."]
];
$plans = [
    ["title"=>"Static Website","price"=>"4,999","desc"=>"Best for small businesses and new startups.","features"=>["3-5 responsive pages","Home, About, Services, Contact","Basic SEO setup","Fast delivery"],"popular"=>false],
    ["title"=>"Dynamic Website","price"=>"7,999","desc"=>"Great for growing businesses with content updates.","features"=>["Admin dashboard","Blog or services management","Mobile responsive design","Launch support"],"popular"=>true],
    ["title"=>"E-Commerce Website","price"=>"21,999","desc"=>"Complete online store setup for retailers and brands.","features"=>["Product catalog","Cart and checkout","Order dashboard","SEO optimized"],"popular"=>false],
    ["title"=>"Mobile Application","price"=>"49,999","desc"=>"Custom mobile app for your service or business idea.","features"=>["Android-ready","User-friendly screens","API integration","Launch assistance"],"popular"=>false],
    ["title"=>"CRM Software","price"=>"69,999","desc"=>"Manage leads, teams, and follow-ups in one place.","features"=>["Lead tracking","Reports and analytics","Role-based access","Workflow automation"],"popular"=>false],
    ["title"=>"Digital Marketing","price"=>"8,999","suffix"=>"/month","desc"=>"Monthly visibility and growth package for businesses.","features"=>["Social media support","SEO and content","Ad campaign help","Monthly reporting"],"popular"=>false]
];
$stats = [
    ["number"=>"60","label"=>"Technologies Mastered", "icon"=>"&#128187;"],
    ["number"=>"50","label"=>"Team Strength", "icon"=>"&#128101;"],
    ["number"=>"100","label"=>"Clients Worldwide", "icon"=>"&#127757;"],
    ["number"=>"20","label"=>"Services Offered", "icon"=>"&#9881;&#65039;"],
];
$awards = [
    ["name" => "GeM", "img" => "assets/image/gem.png"],
    ["name" => "Ministry of MSME", "img" => "assets/image/MSMElogo.png"],
    ["name" => "#startupindia", "img" => "assets/image/StartupIndia.png"],
    ["name" => "STARTUP BIHAR", "img" => "assets/image/startUpBihar.png"],
];
$clients = [
    ["name" => "L&T", "img" => "assets/image/l-and-t.png"],
    ["name" => "Wipro", "img" => "assets/image/wipro_logo.png"],
    ["name" => "Tech Mahindra", "img" => "assets/image/tech_mahindra_logo.png"],
    ["name" => "Virtusa", "img" => "assets/image/virtusa_logo.png"],
    ["name" => "Harman", "img" => "assets/image/harman_logo.png"],
    ["name" => "Hexaware", "img" => "assets/image/hexaware_logo.png"],
    ["name" => "NYC", "img" => "assets/image/nyclogo.png"], 
    ["name" => "Think Sys", "img" => "assets/image/thinksys.jpg"],
    ["name" => "Aski Inc", "img" => "assets/image/askilogoo.png"],
];
$partners = [
    ["name" => "AWS"],
    ["name" => "Azure"],
    ["name" => "Google Cloud"],
    ["name" => "ServiceNow"],
    ["name" => "SAP"],
    ["name" => "Databricks"],
    ["name" => "Vue.ai"],
    ["name" => "Actian"],
    ["name" => "OneStream"],
    ["name" => "Salesforce"],
    ["name" => "Snowflake"],
    ["name" => "Elemica"],
];
$blogs = [
    [
        "title" => "AI Search Optimization Company: How AI-Ready Websites Drive Business Growth | Mithila Softech",
        "excerpt" => "Looking for an AI search optimization company? Learn how AI-ready SEO, web development and custom software solutions can help businesses grow online.",
        "date" => "September 19, 2026",
        "category" => "Technology",
        "img" => "assets/image/aisearchera.png",
        "link" => "ai-search-optimization-web-development-custom-software",
    ],
    [
        "title" => "Why Your Website Gets Traffic but No Leads: 9 Problems to Fix",
        "excerpt" => "Is your website getting visitors but not generating leads? Discover 9 common website problems and practical solutions to turn traffic into business enquiries.",
        "date" => "September 17, 2026",
        "category" => "Web Design",
        "img" => "assets/image/website-development-seo-services.jpeg",
        "link" => "website-gets-traffic-but-no-leads",
    ],
    [
        "title" => "Best Marketing Services in Dubai for Business Growth | Mithila Softech",
        "excerpt" => "Discover the best marketing services in Dubai, including SEO, social media, Google Ads and content marketing to increase visibility and leads.",
        "date" => "September 15, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/best-marketing-services-in-dubai.jpg",
        "link" => "best-marketing-services-in-dubai",
    ],
    [
        "title" => "Best Custom Software Development Agency in Dubai | Mithila Softech",
        "excerpt" => "Looking for the best custom software agency in Dubai? Discover how tailored software development solutions can help businesses improve operations, automate processes, and build scalable digital platforms.",
        "date" => "September 12, 2026",
        "category" => "Technology",
        "img" => "assets/image/bestsoftwaredubai.jpeg",
        "link" => "best-custom-software-agency-dubai",
    ],
    [
        "title" => "Best App Development Services in USA | Mithila Softech",
        "excerpt" => "Looking for professional app development services in USA? Mithila Softech delivers custom mobile applications for businesses, startups, and enterprises with scalable technology, intuitive UI/UX, and reliable development solutions.",
        "date" => "September 11, 2026",
        "category" => "Mobile Development",
        "img" => "assets/image/bestmarketingusa.jpeg",
        "link" => "app-development-services-usa",
    ],
    [
        "title" => "Best Marketing Company in Dubai for Business Growth | Mithila Softech",
        "excerpt" => "Finding the best marketing company in Dubai can help businesses improve online visibility, attract qualified customers, and increase conversions. Learn what to look for when choosing a digital marketing partner in Dubai.",
        "date" => "September 8, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/bestmarketingdubai.jpeg",
        "link" => "best-marketing-company-in-dubai",
    ],
    [
        "title" => "Best Website Development Services in Dubai for Business Growth | Mithila Softech",
        "excerpt" => "A professional website is essential for businesses competing in Dubai's highly competitive digital market. Discover how the best website development services in Dubai can help improve your online presence, attract customers, generate leads, and support long-term business growth.",
        "date" => "September 5, 2026",
        "category" => "Web Development",
        "img" => "assets/image/best-website-development-services-dubai.jpg",
        "link" => "best-website-development-services-dubai",
    ],
    [
        "title" => "Best Digital Marketing Agency in India for Business Growth | Mithila Softech",
        "excerpt" => "Looking for the best digital marketing agency in India? Discover how SEO, Google Ads, social media, content marketing, and analytics can help grow your business online.",
        "date" => "September 3, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/best-digital-marketing-agency-in-india.jpg",
        "link" => "best-digital-marketing-agency-in-india",
    ],
    [
        "title" => "Best Website Designing Company in India for Modern Business Websites | Mithila Softech",
        "excerpt" => "Looking for the best website designing company in India? Learn what makes a professional web design company different and how a well-designed, responsive, and SEO-friendly website can help your business attract visitors, build trust, and generate more leads.",
        "date" => "September 1, 2026",
        "category" => "Web Design",
        "img" => "assets/image/best-website-designing-company-in-india.jpg",
        "link" => "best-website-designing-company-in-india",
    ],
    [
        "title" => "Top Web Development Services in USA for Growing Businesses | Mithila Softech",
        "excerpt" => "Explore the top web development services in the USA that help businesses build fast, secure, responsive, and user-friendly websites designed for long-term growth.",
        "date" => "August 29, 2026",
        "category" => "Web Development",
        "img" => "assets/image/top-web-dev-services-usa-hero.jpg",
        "link" => "top-web-development-services-in-usa",
    ],
    [
        "title" => "Custom Software Services: Building Smarter Solutions for Modern Businesses | Mithila Softech",
        "excerpt" => "Custom software helps businesses automate repetitive tasks, analyze data, improve decision-making, and deliver smarter customer experiences. Discover how tailored software solutions can support business growth.",
        "date" => "August 29, 2026",
        "category" => "Technology",
        "img" => "assets/image/custom-software-services-usa-hero.jpg",
        "link" => "custom-software-services-usa",
    ],
    [
        "title" => "Best IT Services Company in Canada | Reliable IT Solutions - Mithila Softech",
        "excerpt" => "Discover why businesses looking for the best IT services company in Canada need a technology partner that combines software development, web solutions, mobile apps, digital transformation, and business-focused IT services.",
        "date" => "August 25, 2026",
        "category" => "Technology",
        "img" => "assets/image/new_blog25_0.png",
        "link" => "best-it-services-company-in-canada",
    ],
    [
        "title" => "Best Web Development Services in Australia | Mithila Softech",
        "excerpt" => "Choosing the right web development partner can have a major impact on your online visibility, customer experience, and business growth. Explore the key web development services Australian businesses need and learn how Mithila Softech can help create responsive, scalable, secure, and business-focused digital solutions.",
        "date" => "August 22, 2026",
        "category" => "Web Development",
        "img" => "assets/image/blog_image_2.png",
        "link" => "best-web-development-services-in-australia",
    ],
    [
        "title" => "Best Custom IT Solution Services in Canada | Mithila Softech",
        "excerpt" => "Finding the best custom IT solution services in Canada can help businesses replace inefficient processes, automate operations, improve customer experiences, and build scalable digital systems. Learn how to choose the right technology partner and why customized IT solutions can be a better fit than one-size-fits-all software.",
        "date" => "August 20, 2026",
        "category" => "Technology",
        "img" => "assets/image/blog_image_0.png",
        "link" => "best-custom-it-solution-services-in-canada",
    ],
    [
        "title" => "Best Web Development Company in UK: How to Choose the Right Partner",
        "excerpt" => "Choosing the best web development company in the UK can significantly impact your online growth. Learn what to look for in a web development partner and how the right team can build a secure, scalable, and SEO-friendly website.",
        "date" => "August 18, 2026",
        "category" => "Web Development",
        "img" => "assets/image/best-web-dev-uk-2.png",
        "link" => "best-web-development-company-in-uk",
    ],
    [
        "title" => "Best Mobile App Development Services in Australia | Mithila Softech",
        "excerpt" => "Looking for reliable mobile app development services in Australia? Discover how custom Android, iOS, and cross-platform apps can help businesses improve customer engagement, automate processes, and support long-term growth.",
        "date" => "August 14, 2026",
        "category" => "Technology",
        "img" => "assets/image/australia-app-hero.png",
        "link" => "best-mobile-app-development-services-australia",
    ],
    [
        "title" => "Best Custom Software Development Company in Canada",
        "excerpt" => "Looking for the best custom software development company in Canada? Learn how the right development partner can help businesses build secure, scalable, and customized software solutions.",
        "date" => "August 13, 2026",
        "category" => "Technology",
        "img" => "assets/image/canada-software-hero-2026.png",
        "link" => "best-custom-software-development-company-canada",
    ],
    [
        "title" => "Best Software Development Company in 2026 | Mithila Softech",
        "excerpt" => "Discover why custom software development is becoming essential for UK businesses in 2026 and how the right software development partner can improve efficiency, security, automation, and long-term growth.",
        "date" => "August 11, 2026",
        "category" => "Technology",
        "img" => "assets/image/uk-software-hero-2026.png",
        "link" => "best-software-development-company-2026",
    ],
    [
        "title" => "Best App Development Company in 2026 | Mithila Softech",
        "excerpt" => "Looking for the best app development company in 2026? Discover the key factors businesses should consider when choosing a reliable mobile app development company for secure, scalable, and user-friendly applications.",
        "date" => "August 8, 2026",
        "category" => "App Development",
        "img" => "assets/image/app-dev-2026-img1.png",
        "link" => "best-app-development-company-in-2026",
    ],
    [
        "title" => "Best Website Development Services in UK | Custom Web Development Company | Mithila Softech",
        "excerpt" => "Searching for the best website development services in UK? Discover how Mithila Softech creates high-performance, SEO-friendly, and custom websites designed to increase traffic, improve user experience, and generate more business leads.",
        "date" => "August 6, 2026",
        "category" => "Web Development",
        "img" => "assets/image/web-dev-uk-img1.png",
        "link" => "best-website-development-services-in-uk",
    ],
    [
        "title" => "Tips to Improve Social Media Engagement for Your Business in 2026 | Mithila Softech",
        "excerpt" => "Want to increase likes, comments, shares, and conversions? Learn the best social media engagement strategies that help businesses build stronger relationships, improve brand visibility, and achieve sustainable growth.",
        "date" => "August 4, 2026",
        "category" => "Social Media",
        "img" => "assets/image/social-media-engagement-hero-new.jpg",
        "link" => "tips-to-improve-social-media-engagement",
    ],
    [
        "title" => "Top 10 Custom Software Development Companies in 2026 | Best Software Development Firms",
        "excerpt" => "Looking for the best custom software development company in 2026? Explore our list of the top 10 software development companies that deliver innovative, scalable, and secure software solutions for businesses across industries.",
        "date" => "1st August 2026",
        "category" => "Technology",
        "img" => "assets/image/top-10-custom-software-2026-hero.jpg",
        "link" => "top-10-custom-software-development-companies-in-2026",
    ],
    [
        "title" => "AI Development Services: How Businesses Are Using Artificial Intelligence in 2026",
        "excerpt" => "Discover how AI development services help businesses automate operations, improve customer experiences, and drive growth. Learn how Mithila Softech builds AI-powered business solutions.",
        "date" => "July 30, 2026",
        "category" => "Technology",
        "img" => "assets/image/blog30july.png",
        "link" => "ai-development-services",
    ],
    [
        "title" => "ERP Software Development Company: Custom ERP Solutions for Business Growth",
        "excerpt" => "Choosing the right ERP software development company can transform your business operations by integrating departments, automating workflows, and improving decision-making. Learn how Mithila Softech develops scalable, secure, and customized ERP solutions for businesses across industries.",
        "date" => "July 28, 2026",
        "category" => "Technology",
        "img" => "assets/image/blog28july.jpg",
        "link" => "erp-software-development-company",
    ],
    [
        "title" => "7 Integral Elements of a Successful SEO Marketing Campaign for 2026",
        "excerpt" => "A successful SEO marketing campaign in 2026 requires much more than keyword optimization. Discover the seven essential elements that improve search rankings, user experience, and conversions while leveraging AI-powered digital marketing and modern SEO strategies.",
        "date" => "July 25, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/blog25july.jpg",
        "link" => "7-integral-elements-successful-seo-marketing-campaign-2026",
    ],
    [
        "title" => "Technical SEO Agency: How AI is Transforming Digital Marketing in 2026",
        "excerpt" => "Discover how a Technical SEO agency combines AI powered digital marketing, voice search optimization services, featured snippet optimization, and AI content optimization to improve website performance, increase organic rankings, and drive sustainable business growth in 2026.",
        "date" => "July 23, 2026",
        "category" => "Technical SEO",
        "img" => "assets/image/twentythirdblog.png",
        "link" => "technical-seo-agency-ai-powered-digital-marketing",
    ],
    [
        "title" => "AI Powered Digital Marketing: How AI Content Optimization & Featured Snippets Drive SEO Success in 2026",
        "excerpt" => "Artificial Intelligence is reshaping digital marketing by helping businesses improve SEO, create optimized content, and capture more organic traffic. Learn how AI-powered digital marketing, voice search optimization, and featured snippet optimization can help your business grow online.",
        "date" => "July 21, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/twentyoneblog.png",
        "link" => "ai-powered-digital-marketing-featured-snippet-optimization",
    ],
    [
        "title" => "AI Integration Services for Businesses: How Custom AI Solutions Drive Growth in 2026",
        "excerpt" => "Discover how AI integration services help businesses automate operations, improve customer experience, and increase productivity. Learn how Mithila Softech develops custom AI-powered business solutions.",
        "date" => "July 18, 2026",
        "category" => "Technology",
        "img" => "assets/image/custom-ai.png",
        "link" => "ai-integration-services-for-businesses",
    ],
    [
        "title" => "API Development & Integration Services for Businesses",
        "excerpt" => "Discover how API development and integration services help businesses connect applications, automate workflows, improve efficiency, and enable seamless data exchange. Learn why custom API solutions are essential for modern enterprises.",
        "date" => "July 16, 2026",
        "category" => "Technology",
        "img" => "assets/image/api-development-and-integration-services-for-businesses.png",
        "link" => "api-development-integration-services",
    ],
    [
        "title" => "Progressive Web App Development Company in India: Why PWAs Are the Future of Business Growth",
        "excerpt" => "Discover how Progressive Web Applications (PWAs) combine the speed of mobile apps with the accessibility of websites. Learn why businesses are investing in PWA development to improve customer experience, boost conversions, and reduce development costs.",
        "date" => "July 13, 2026",
        "category" => "Technology",
        "img" => "assets/image/progressive-web-app-development-company-india.png",
        "link" => "progressive-web-app-development-company-india",
    ],
    [
        "title" => "Why Hiring a Digital Marketing Company in India Can Transform Your Business in 2026",
        "excerpt" => "A strong digital presence is essential for business success in 2026. Learn how a Digital Marketing Company in India can help you attract customers, improve search rankings, and maximize your marketing ROI with customized strategies.",
        "date" => "July 10, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/digital-marketing-company-in-india-can-transform-your-business-in-2026.png",
        "link" => "digital-marketing-company-india",
    ],
    [
        "title" => "How AI Is Transforming Digital Marketing: 10 Strategies Every Business Should Adopt in 2026",
        "excerpt" => "Artificial Intelligence is revolutionizing digital marketing by making campaigns smarter, faster, and more personalized. Learn how businesses can use AI to improve SEO, content creation, advertising, customer engagement, and overall marketing performance.",
        "date" => "July 8, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/how-ai-is-transforming-digital-marketing-10-strategies-every-business-should-adopt-in-2026.png",
        "link" => "ai-in-digital-marketing",
    ],
    [
        "title" => "Local SEO vs Traditional SEO: Which Strategy Is Best for Your Business in 2026?",
        "excerpt" => "Should your business focus on Local SEO or Traditional SEO? This guide explains the key differences, benefits, and best use cases to help you make the right decision and grow your online presence.",
        "date" => "July 6, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/local-seo-vs-traditional-seo-which-strategy-is-best-for-your-business-in-2026.jpg",
        "link" => "local-seo-vs-traditional-seo",
    ],
    [
        "title" => "Web Application Development Company: The Complete Guide to Building Custom Web Applications for Modern Businesses",
        "excerpt" => "Businesses today need more than a standard website. They need powerful web applications that automate operations, improve customer experiences, and support business growth. Learn how a professional web application development company builds secure, scalable, and custom web applications.",
        "date" => "July 4, 2026",
        "category" => "Technology",
        "img" => local_blog_image("assets/image/web-application-development-company.png", "assets/image/web.jpg?v=20260704"),
        "link" => "web-application-development-company",
    ],
    [
        "title" => "Custom CRM Software Development Services: The Complete Guide for Modern Businesses",
        "excerpt" => "Customer relationships are the foundation of every successful business, but managing leads, sales, follow-ups, and customer interactions manually can become overwhelming. Custom CRM software development centralizes customer data, automates tasks, improves communication, and increases sales efficiency.",
        "date" => "July 3, 2026",
        "category" => "Technology",
        "img" => local_blog_image("assets/image/custom-crm-software-development-services.png", "assets/image/crm-software-app-development.png?v=20260703"),
        "link" => "custom-crm-software-development-services",
    ],
    [
        "title" => "ERP Software Development Company in India: Complete Guide to Custom ERP Solutions for Businesses",
        "excerpt" => "Managing business operations with separate software leads to inefficiencies, data duplication, and communication gaps. A custom ERP system integrates finance, inventory, HR, CRM, sales, and operations into one centralized platform for automation, productivity, and growth.",
        "date" => "July 2, 2026",
        "category" => "Technology",
        "img" => local_blog_image("assets/image/erp-software-development-company-india.png", "assets/image/customit.png?v=20260702"),
        "link" => "erp-software-development-company-india",
    ],
    [
        "title" => "How Custom CRM Software Can Increase Sales and Productivity for Your Business",
        "excerpt" => "Customer relationships are the foundation of every successful business. Learn how custom CRM software can centralize customer data, automate repetitive tasks, improve collaboration, and help your sales team close more deals while increasing overall productivity.",
        "date" => "June 27, 2026",
        "category" => "Technology",
        "img" => "assets/image/custom-crm-software-sales-productivity.jpg?v=20260627-1458",
        "link" => "custom-crm-software-increase-sales-productivity",
    ],
    [
        "title" => "Best Software Development Services in UK: How to Choose the Right Technology Partner",
        "excerpt" => "Looking for the best software development services in UK? Discover key factors, benefits, and how custom software solutions can help businesses achieve digital transformation and growth.",
        "date" => "June 25, 2026",
        "category" => "Technology",
        "img" => "assets/image/best-software-development-services-in-uk.jpeg?v=20260626-1135",
        "link" => "best-software-development-services-in-uk",
    ],    [
        "title" => "What Is AI SEO? How It Works and Why It Matters in 2026",
        "excerpt" => "AI SEO is the future of search optimization where artificial intelligence is used to improve rankings, content relevance, and visibility across Google and AI-powered search engines.",
        "date" => "June 22, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/what-is-ai-seo-2026.jpg?v=20260622-1659x948",
        "link" => "what-is-ai-seo-2026.php",
    ],
    [
        "title" => "AI Powered Digital Marketing: How AI, Voice Search, and Technical SEO Are Transforming Business Growth",
        "excerpt" => "Artificial Intelligence is revolutionizing digital marketing by helping businesses automate campaigns, personalize customer experiences, and make smarter decisions. Combined with voice search, technical SEO, and AI content optimization, companies can achieve sustainable growth.",
        "date" => "June 20, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/ai-powered-digital-marketing.jpg?v=20260622-1659x948",
        "link" => "ai-powered-digital-marketing-voice-search-technical-seo-guide",
    ],
    [
        "title" => "Website Development Services and Affordable SEO Services India: The Complete Growth Guide for Businesses",
        "excerpt" => "A well-designed website and an effective SEO strategy are essential for business success in today's digital landscape. Learn how website development and affordable SEO solutions can help businesses attract customers, build credibility, and achieve sustainable growth.",
        "date" => "June 16, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/website-development-seo-services.jpeg?v=20260619-1246",
        "link" => "website-development-services-affordable-seo-services-india",
    ],
    [
        "title" => "CRM Software Development Company & App Development Company India: A Complete Business Guide",
        "excerpt" => "Businesses today need smarter ways to engage customers and stay competitive. Learn how CRM software and mobile applications can streamline operations, enhance customer experiences, and support long-term growth.",
        "date" => "June 16, 2026",
        "category" => "Technology",
        "img" => "assets/image/crm-software-app-development.png?v=20260619-1215",
        "link" => "crm-software-development-company-app-development-company-india",
    ],
    [
        "title" => "Best Digital Marketing Company in Canada: Why Integrated Technology and Marketing Matter for Business Growth",
        "excerpt" => "Choosing the best digital marketing company in Canada is about more than rankings and ads. Businesses that combine strategic marketing with custom technology solutions often achieve better efficiency, stronger customer relationships, and sustainable growth.",
        "date" => "June 10, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/canadadigital.png?v=20260610-1659",
        "link" => "best-digital-marketing-company-canada-integrated-business-growth",
    ],
    [
        "title" => "SEO vs AI SEO Services: Which Delivers Better Results for Small Businesses?",
        "excerpt" => "Small businesses are increasingly hearing about AI SEO, but many are unsure how it differs from traditional SEO. This guide explains the key differences, benefits, and why AI-powered optimization is becoming an important part of modern digital marketing strategies.",
        "date" => "June 8, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/seovsai.png?v=20260610-1659",
        "link" => "seo-vs-ai-seo-services-for-small-businesses",
    ],
    [
        "title" => "How Specialized Digital Marketing Services Drive Scalable Business Growth",
        "excerpt" => "Modern businesses need specialized digital marketing strategies to compete in crowded online markets. From SEO and content marketing to eCommerce optimization and SaaS growth campaigns, choosing the right expertise can significantly improve visibility, lead generation, and long-term revenue growth.",
        "date" => "June 5, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/businessgrowth.png?v=20260610-1659",
        "link" => "specialized-digital-marketing-services-for-business-growth",
    ],
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
        "excerpt" => "Businesses today need more than traditional SEO to stay competitive. By combining technical optimization, AI-driven strategies, and answer-focused content, companies can improve search visibility, attract qualified leads, and drive sustainable business growth.",
        "date" => "June 2, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/aisearchera.png?v=20260610-1659",
        "link" => "business-growth-through-modern-search-optimization",
    ],
    [
        "title" => "Nike Digital Marketing Case Study & Online Growth Lessons for Modern Brands",
        "excerpt" => "Discover how Nike transformed into a digital-first global brand using SEO, social media storytelling, influencer marketing, mobile engagement, and personalized campaigns. Learn actionable digital growth strategies businesses can apply for long-term online success.",
        "date" => "April 24, 2026",
        "category" => "Case Study",
        "img" => "assets/image/nikecase.png?v=20260610-1659",
        "link" => "nike-digital-marketing-case-study",
    ],
    [
        "title" => "How a Real Estate Brand Generated Rs. 3.2 Crore Through Strategic Digital Marketing",
        "excerpt" => "Learn how Mithila Softech helped a real estate developer generate Rs. 3.2 crore in property sales through SEO, AEO, social media campaigns, and performance marketing strategies designed for high-quality property lead generation.",
        "date" => "January 24, 2026",
        "category" => "Case Study",
        "img" => "assets/image/realestateblog.png?v=20260610-1659",
        "link" => "real-estate-digital-marketing-case-study-property-sales",
    ],
    [
        "title" => "SEO Company in Delhi - AI Powered SEO Services for Small Businesses in India",
        "excerpt" => "Mithila SoftWch is a leading SEO company in Delhi offering AI SEO services, digital marketing strategies, and affordable SEO services for small businesses across India to improve rankings, traffic, and online visibility.",
        "date" => "February 1, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/seoindelhi.png?v=20260610-1659",
        "link" => "seo-company-in-delhi-ai-seo-services-india",
    ],
    [
        "title" => "How Digital Marketing Helps Local Businesses Grow Faster in 2026",
        "excerpt" => "Digital marketing has become essential for every local business that wants to grow in today's competitive market. From SEO and social media marketing to website development and lead generation, businesses can now reach more customers online and build a stronger brand presence.",
        "date" => "May 25, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/blog6.png?v=20260610-1659",
        "link" => "how-digital-marketing-helps-local-businesses-grow-faster-in-2026",
    ],
    [
        "title" => "Why Every Small Business Needs Professional SEO Services in 2026",
        "excerpt" => "Learn how professional SEO services help small businesses improve search rankings, attract targeted customers, increase website traffic, and achieve long-term business growth.",
        "date" => "March 20, 2026",
        "category" => "Digital Marketing",
        "img" => "assets/image/blog5.png?v=20260610-1659",
        "link" => "seo-services-for-small-business-2026",
    ],
    [
        "title" => "Why Custom Software Development Is Essential for Business Growth in 2026",
        "excerpt" => "Explore how custom software development helps businesses streamline operations, improve productivity, automate workflows, and achieve long-term growth in the digital era.",
        "date" => "February 15, 2026",
        "category" => "Technology",
        "img" => "assets/image/whycustom.png?v=20260610-1659",
        "link" => "why-custom-software-development-is-essential-for-business-growth-in-2026",
    ],
    [
        "title" => "The Ultimate Guide to Digital Transformation for Modern Businesses",
        "excerpt" => "Discover how digital transformation is helping businesses modernize operations, improve productivity, and achieve long-term growth through automation, software development, and digital technologies.",
        "date" => "May 10, 2026",
        "category" => "Business",
        "img" => "assets/image/theultimateguide.png?v=20260610-1659",
        "link" => "the-ultimate-guide-to-digital-transformation-for-modern-businesses",
    ],
    [
        "title" => "Mobile App Development Trends Every Business Should Know in 2026",
        "excerpt" => "Explore the top mobile app development trends businesses should follow in 2026, including AI-powered apps, cross-platform development, IoT integration, super apps, and advanced user experiences.",
        "date" => "January 1, 2026",
        "category" => "Mobile Development",
        "img" => "assets/image/mobileapp-development.png?v=20260610-1659",
        "link" => "mobile-app-development-trends-every-business-should-know-in-2026",
    ],
];
$testimonials = [
    ["name" => "Info somnath", "role" => "Customer", "text" => "Outstanding SEO agency! Mithila Softech helped us fix our website's technical SEO, optimize our content, and significantly increase our organic search traffic. They provide excellent monthly reports, clear communication, and most importantly real results. If you want your website to rank higher on Google, they are the team to trust.", "link" => "", "img" => "assets/image/ms.png"],
    ["name" => "Deepak Mishra", "role" => "Customer", "text" => "I had a really good experience with Mithila Softtech Company. The team is helpful, friendly, and easy to communicate with. They understand requirements well and deliver the work on time without compromising on quality. Overall, it's a reliable company with a positive work approach. I would definitely recommend Mithila Softtech to others.", "link" => "https://share.google/PYO50A25Sab77pOy5", "img" => "assets/image/deepak_mishra.jpg"],
    ["name" => "Pramod Kumar", "role" => "Customer", "text" => "Good experience overall. The team was cooperative, patient, and focused on understanding our business requirements before starting the work.", "link" => "https://share.google/mRT25cRYPsquMdwQT", "img" => "assets/image/pramod_kumar.jpg"],
    ["name" => "Namrata", "role" => "Customer", "text" => "Mithila Softech helped improve our website structure and local SEO. We noticed better engagement after implementing their suggestions.", "link" => "https://share.google/J6DHkkc3mdBdsAuPv", "img" => "assets/image/namrata.jpg"],
    ["name" => "Anshika Singh", "role" => "Customer", "text" => "Had a great experience working with Mithila Softech. Their team explained the SEO process clearly and helped improve our website visibility. Communication was smooth throughout the project.", "link" => "https://share.google/vOJPK0RddwMq5CkKd", "img" => "assets/image/anshika_singh.jpg"],
    ["name" => "The Abhishek Sharma", "role" => "Customer", "text" => "Mithila Softech stands out for their industry-specific approach. They don't offer a one-size-fits-all solution - they actually understand your sector and build accordingly. Clean communication, timely delivery, and real results. Would definitely work with them again.", "link" => "https://share.google/Tlfx2H8cOBZ0rlW2H", "img" => "assets/image/abhishek_sharma.jpg"],
    ["name" => "Ragini Mishra", "role" => "Customer", "text" => "The team is creative and understands branding well. They helped us improve our social media presence and website performance.", "link" => "https://share.google/cuLmepYkySKJUF3WA", "img" => "assets/image/ragini_mishra.jpg"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Software & IT Company India | Mithila Softech</title>
    <meta name="description" content="Mithila Softech delivers custom software, web, mobile apps &amp; digital marketing services to help businesses grow with scalable IT solutions.">
    <meta name="keywords" content="IT company India, software development, web development, app development">
    <meta name="google-site-verification" content="1SrAUt6GmwQvp5YRcm5h9gDUgdBxu4AaoeSRf5FZLLw" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="assets/image/favicon.jpg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="services.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="princing.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="coreservices.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <style>
        /* Secondary/Highlight Elements */
        .popular-pill { background-color: var(--brand-secondary) !important; }
        
        /* Typography Updates */
        .price { color: var(--brand-primary); }
        .price span { color: var(--brand-secondary); }
        .site-footer { border-top: 4px solid var(--brand-primary); }
        .footer-badge-wrap .round-badge { background: var(--brand-secondary); }
        

        /* Sectors Manual Scrolling Slider with Buttons */
        .sector-slider-wrapper {
            position: relative;
            margin-top: 12px;
            padding: 20px 0;
        }
        .sector-track {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* IE and Edge */
            padding: 10px 0; /* Padding to prevent box-shadow clipping */
        }
        .sector-track::-webkit-scrollbar {
            display: none; /* Chrome, Safari and Opera */
        }
        .sector-slider-wrapper .sector-card {
            width: 280px;
            flex-shrink: 0;
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid rgba(0,0,0,0.05);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            overflow: hidden;
        }
        .sector-slider-wrapper .sector-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(29, 78, 158, 0.12);
            border-color: var(--brand-primary);
        }
        .sector-img-wrap {
            width: 100%;
            height: 160px;
            overflow: hidden;
        }
        .sector-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .sector-slider-wrapper .sector-card:hover .sector-img-wrap img {
            transform: scale(1.1);
        }
        .sector-content {
            padding: 0 20px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
            width: 100%;
        }
        .sector-slider-wrapper .sector-icon-wrap {
            width: 56px; height: 56px; display: grid; place-items: center;
            background: #ffffff; border: 2px solid #ffffff;
            border-radius: 50%; color: var(--brand-primary);
            transition: all 0.4s ease;
            margin-top: -48px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            position: relative;
            z-index: 2;
        }
        .sector-slider-wrapper .sector-card:hover .sector-icon-wrap {
            background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
            color: #ffffff;
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 10px 20px rgba(29, 78, 158, 0.25);
        }
        .sector-slider-wrapper .sector-name {
            font-weight: 800; color: var(--text-dark); font-size: 1.1rem; margin-top: 0;
        }
        .scroll-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 52px; height: 52px; border-radius: 50%;
            background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(8px);
            border: 1px solid rgba(29, 78, 158, 0.15); box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            color: var(--brand-primary); display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 10;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .scroll-btn:hover {
            background: var(--brand-primary);
            color: #ffffff;
            box-shadow: var(--shadow-strong);
            transform: translateY(-50%) scale(1.1);
        }
        .prev-btn { left: -26px; }
        .next-btn { right: -26px; }
        @media (max-width: 1200px) {
            .prev-btn { left: 5px; }
            .next-btn { right: 5px; }
        }
        @media (max-width: 768px) {
            .scroll-btn { width: 36px; height: 36px; }
            .prev-btn { left: 4px; }
            .next-btn { right: 4px; }
        }

        /* Awards & Recognition Section (Slider) */
        .awards-section {
            background-color: #f8f9fa;
        }
        .awards-slider {
            overflow: hidden;
            margin-top: 8px;
            padding: 15px 0; /* Padding prevents hover shadows from clipping */
        }
        .awards-track {
            display: flex;
            gap: 24px;
            width: max-content;
            animation: scrollAwards 18s linear infinite;
        }
        /* Pause animation on hover or click (active) */
        .awards-track:hover, .awards-track:active {
            animation-play-state: paused;
        }
        .award-item {
            flex-shrink: 0;
            padding: 0 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 110px;

            transition: transform 0.3s ease;
        }
        .award-item:hover {
            transform: translateY(-5px) scale(1.05);
        }
        .award-item img {
            width: auto;
            max-width: 240px;
            height: 70px;
            object-fit: contain;
        }
        .award-item strong {
            font-size: 0.9rem;
            text-align: center;
        }
        @keyframes scrollAwards {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-50% - 12px)); } /* Shift by half width minus half the 24px gap */
        }
        @media (max-width: 768px) {
            .awards-track { gap: 16px; }
            .award-item img { max-width: 150px; height: 50px; }
            .award-item { min-height: 80px; padding: 0 10px; }
            @keyframes scrollAwards {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-50% - 8px)); }
            }
        }
        @media (max-width: 480px) {
            .awards-track { gap: 12px; }
            .award-item img { max-width: 120px; height: 40px; }
            .award-item { min-height: 60px; padding: 0 8px; }
            @keyframes scrollAwards {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-50% - 6px)); }
            }
        }

        /* Testimonials Grid Layout */
        .testimonials-grid-wrapper { position: relative; padding: 10px 0; }
        .testimonials-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; padding: 10px 0; }
        .testimonial-action-center { display: flex; align-items: center; justify-content: center; margin-top: 24px; }
        .testimonial-card { min-width: 0; background: #ffffff; border: 1px solid rgba(0,0,0,0.05); border-radius: 18px; padding: 28px 22px; box-shadow: 0 10px 26px -10px rgba(0,0,0,0.08); transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease; position: relative; display: flex; flex-direction: column; }
        .testimonial-card[hidden], .testimonial-card-toggle[hidden] { display: none !important; }
        .testimonial-card:hover { transform: translateY(-6px); box-shadow: 0 15px 30px rgba(29, 78, 158, 0.1); border-color: var(--brand-primary); }
        .quote-icon { position: absolute; top: -5px; right: 15px; font-size: 5rem; color: rgba(29, 78, 158, 0.05); font-family: Georgia, serif; line-height: 1; pointer-events: none; }
        .testimonial-text { font-size: 0.95rem; color: var(--muted); line-height: 1.65; margin-bottom: 18px; position: relative; z-index: 2; flex-grow: 1; }
        .testimonial-author { display: flex; align-items: center; gap: 12px; position: relative; z-index: 2; }
        .author-avatar { width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(135deg, var(--green), var(--blue)); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem; box-shadow: 0 4px 10px rgba(29, 78, 158, 0.3); flex-shrink: 0; }
        .author-info h4 { margin: 0 0 2px 0; font-size: 0.9rem; color: var(--text); font-weight: 800; }
        .author-info span { font-size: 0.75rem; color: var(--blue); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
        @media (max-width: 991px) { .testimonials-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
        @media (max-width: 768px) { .testimonials-grid { grid-template-columns: 1fr; } .testimonial-card { padding: 22px 18px; } }

        /* UNIFORM HOMEPAGE SECTION SPACING */
        /* Change this padding value below to instantly increase or decrease the gap for ALL sections equally */
        .section {
            padding: 36px 0 !important; 
        }
        
        /* Consistent uniform spacing for elements inside sections */
        .section-heading.center {
            margin-bottom: 14px !important;
        }
        .spread-cards, .awards-slider, .testimonials-grid-wrapper, .sector-slider-wrapper {
            margin-top: 12px !important;
        }
        #partners .cs-grid {
            margin-top: 40px !important;
        }
        
        /* Blog Customizations */
        .blog-card {
            background: var(--card, #ffffff); border: 1px solid var(--line, #e2e8f0); border-radius: 24px;
            overflow: hidden; box-shadow: var(--shadow, 0 10px 30px rgba(0,0,0,0.05)); display: flex; flex-direction: column;
            transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.5s ease, border-color 0.5s ease;
            position: relative; cursor: pointer;
            --blog-gradient: linear-gradient(135deg, var(--green-dark, #15803d) 0%, var(--blue-dark, #1e3a8a) 100%);
        }
        .blog-card:hover { transform: translateY(-10px); box-shadow: 0 24px 56px rgba(0,0,0,0.12); border-color: transparent; }
        .blog-card-accent { position: absolute; top: 0; left: 0; right: 0; height: 4px; background: var(--blog-gradient); z-index: 3; transition: opacity 0.3s ease; }
        .blog-card:hover .blog-card-accent { opacity: 0; }
        .blog-thumb-wrap { width: 100%; height: auto; aspect-ratio: 16 / 9; overflow: hidden; position: relative; z-index: 2; background: #020617; border-radius: 20px; border: 1px solid rgba(15, 23, 42, 0.12); box-shadow: 0 14px 34px rgba(15, 23, 42, 0.12); }
        .blog-thumb { width: 100%; height: 100%; object-fit: contain; transition: none; background: #020617; border-radius: inherit; }
        .blog-thumb.blog-thumb-contain { object-fit: contain; background: #020617; }
        .blog-card:hover .blog-thumb { transform: none !important; }
        .blog-card:hover .blog-thumb.blog-thumb-contain { transform: none !important; }
        .blog-content { padding: 28px; display: flex; flex-direction: column; gap: 14px; flex-grow: 1; position: relative; overflow: hidden; z-index: 2; background: #fff; }
        .blog-card-overlay { position: absolute; inset: 0; background: var(--blog-gradient); opacity: 0; transition: opacity 0.5s ease; z-index: 0; }
        .blog-card:hover .blog-card-overlay { opacity: 1; }
        .blog-meta, .blog-content h3, .blog-content p, .blog-read { position: relative; z-index: 2; }
        .blog-meta { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; font-size: 0.85rem; }
        .blog-category { background: var(--blue-transparent, rgba(30, 58, 138, 0.1)); color: var(--blue-dark, #1e3a8a); border-radius: 999px; padding: 4px 10px; font-size: 0.75rem; font-weight: 700; transition: all 0.4s ease; }
        .blog-date { color: var(--muted, #64748b); font-weight: 600; transition: color 0.4s ease; }
        .blog-card:hover .blog-category { background: rgba(255,255,255,0.2); color: #fff; }
        .blog-card:hover .blog-date { color: rgba(255,255,255,0.8); }
        .blog-content h3 { color: var(--text, #0f172a); font-size: 1.15rem; font-weight: 800; line-height: 1.4; margin: 0; transition: color 0.4s ease; }
        .blog-card:hover .blog-content h3 { color: #fff; }
        .blog-content p { color: var(--muted, #64748b); font-size: 0.9rem; line-height: 1.6; margin: 0; transition: color 0.4s ease; }
        .blog-content p.blog-excerpt { min-height: 90px; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; }
        .blog-card:hover .blog-content p { color: rgba(255,255,255,0.8); }
        .blog-read { color: var(--green, #16a34a); font-size: 0.95rem; font-weight: 700; display: inline-flex; align-items: center; gap: 8px; margin-top: 10px; transition: gap 0.3s ease, color 0.4s ease; text-decoration: none; }
        .blog-card:hover .blog-read { gap: 12px !important; color: #fff !important; }
        
        /* Blog Slider Components */
        .blog-slider-wrapper { position: relative; margin-top: 12px; padding: 20px 0; }
        .blog-track { display: flex; gap: 24px; overflow-x: auto; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; padding: 10px 0; }
        .blog-track::-webkit-scrollbar { display: none; }
        .blog-track .blog-card { width: 280px; flex-shrink: 0; }
        .blog-track .blog-thumb-wrap { height: auto; aspect-ratio: 16 / 9; }
        .blog-track .blog-content { padding: 20px; gap: 12px; }
        
        @media (max-width: 768px) {
            .section {
                padding: 24px 0 !important; /* Mobile uniform gap */
            }
        }
    </style>
    <link rel="canonical" href="https://www.mithilasoftech.com/" />
</head>
<body>
    <?php include 'headerhome.php'; ?>
    <main>
        <h1 style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0;">Custom Software Development &amp; IT Solutions Company in India</h1>
        <?php 
        $hero_heading_tag = 'h2';
        $hero_title = 'Transforming Ideas into <br><span class="hero-headline-bold">Digital <span class="hero-headline-accent">Success</span></span>';
        include 'herohome.php'; 
        ?>
        
        <section class="section sectors-section reveal" id="sectors">
            <div class="container">
                <div class="section-heading center">
                    <span class="eyebrow">Industries We Serve</span>
                    <h2>Transforming Challenges <span>Across Different Sectors</span></h2>
                    <p>Delivering tailored IT and digital solutions to empower businesses, organizations, and entities across various industries.</p>
                    
                   
                </div>
                <div class="sector-slider-wrapper reveal">
                    <button class="scroll-btn prev-btn" aria-label="Scroll Left" onclick="scrollSectors(-304)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    
                    <div class="sector-track" id="sectorTrack">
                        <!-- Single Set of Cards -->
                        <?php foreach ($sectors as $index => $sector): ?>
                            <article class="sector-card" onclick="window.location.href='industry.php'">
                                <div class="sector-img-wrap">
                                    <?php if ($sector['name'] === 'Agriculture'): ?>
                                    <img src="assets/image/agriculture.jpg" alt="Mithila Softech IT solutions team" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                    <?php else: ?>
                                        <img src="<?php echo htmlspecialchars($sector['img']); ?>" alt="<?php echo htmlspecialchars($sector['name']); ?> IT services company office India" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                                <div class="sector-content">
                                    <div class="sector-icon-wrap">
                                        <span class="sector-icon"><?php echo $sector["icon"]; ?></span>
                                    </div>
                                    <span class="sector-name"><?php echo $sector["name"]; ?></span>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <button class="scroll-btn next-btn" aria-label="Scroll Right" onclick="scrollSectors(304)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
                <div class="center-action" style="margin-top: 10px; text-align: center;">
                <a href="industry" class="button button-secondary btn-shine" style="border-radius: 999px; padding: 12px 32px; font-weight: 700;">Explore Industry Solutions -></a>
                </div>
            </div>
        </section>

        <script>
            function scrollSectors(dir) {
                const track = document.getElementById('sectorTrack');
                if (track) {
                    const card = track.querySelector('.sector-card');
                    const gap = parseInt(window.getComputedStyle(track).gap) || 24;
                    const scrollAmount = card ? (card.offsetWidth + gap) * Math.sign(dir) : dir;
                    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            }
        </script>

        <?php include 'coreserviceshome.php'; ?>
        
        <section class="section blogs-section" id="blogs" style="background: var(--bg-alt, #f8fafc);">
            <div class="container">
                <div class="section-heading center reveal">
                    <span class="eyebrow">Insights & Updates</span>
                    <h2>Our Latest <span>Blogs</span></h2>
                    <p>Stay updated with the latest technology trends, insights, and news from our team.</p>
                </div>
                
                <div class="blog-slider-wrapper">
                    <button class="scroll-btn prev-btn" aria-label="Scroll Left" onclick="scrollBlogs(-304)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <div class="blog-track" id="blogTrack">
                    <?php foreach($blogs as $index => $blog): ?>
                        <article class="blog-card reveal" style="--delay: <?php echo ($index * 0.1); ?>s;" onclick="window.location.href='<?php echo htmlspecialchars($blog['link'] ?? 'https://www.mithilasoftech.com/blog'); ?>'">
                            <div class="blog-card-accent"></div>
                            <div class="blog-thumb-wrap">
                                <a href="<?php echo htmlspecialchars($blog['link'] ?? 'https://www.mithilasoftech.com/blog'); ?>" style="display: block; width: 100%; height: 100%;">
                                    <img class="blog-thumb blog-thumb-contain" src="<?php echo htmlspecialchars($blog['img']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy" onerror="this.onerror=null;this.src='https://placehold.co/600x400/e5e7eb/6b7280?text=Image+Unavailable';" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-card-overlay"></div>
                                <div class="blog-meta">
                                    <span class="blog-category"><?php echo htmlspecialchars($blog['category']); ?></span>
                                    <span class="blog-date"><?php echo htmlspecialchars($blog['date']); ?></span>
                                </div>
                                <h3><a href="<?php echo htmlspecialchars($blog['link'] ?? 'https://www.mithilasoftech.com/blog'); ?>" style="color: inherit; text-decoration: none;"><?php echo htmlspecialchars($blog['title']); ?></a></h3>
                                <p class="blog-excerpt"><?php echo htmlspecialchars($blog['excerpt']); ?></p>
                                <a href="<?php echo htmlspecialchars($blog['link'] ?? 'https://www.mithilasoftech.com/blog'); ?>" class="blog-read">Read More &rarr;</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    </div>
                    <button class="scroll-btn next-btn" aria-label="Scroll Right" onclick="scrollBlogs(304)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
                
                <script>
                    function scrollBlogs(dir) {
                        const track = document.getElementById('blogTrack');
                        if (track) {
                            const card = track.querySelector('.blog-card');
                            const gap = parseInt(window.getComputedStyle(track).gap) || 24;
                            const scrollAmount = card ? (card.offsetWidth + gap) * Math.sign(dir) : dir;

                            const isAtEnd = Math.ceil(track.scrollLeft + track.clientWidth) >= track.scrollWidth - 10;
                            const isAtStart = track.scrollLeft <= 10;

                            if (dir > 0 && isAtEnd) {
                                track.scrollTo({ left: 0, behavior: 'smooth' });
                            } else if (dir < 0 && isAtStart) {
                                track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
                            } else {
                                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                            }
                        }
                    }

                    document.addEventListener('DOMContentLoaded', () => {
                        let blogAutoScroll = setInterval(() => scrollBlogs(304), 3500);
                        const blogWrapper = document.querySelector('.blog-slider-wrapper');
                        
                        if (blogWrapper) {
                            blogWrapper.addEventListener('mouseenter', () => clearInterval(blogAutoScroll));
                            blogWrapper.addEventListener('mouseleave', () => {
                                clearInterval(blogAutoScroll);
                                blogAutoScroll = setInterval(() => scrollBlogs(304), 3500);
                            });
                            
                            // Touch events for mobile
                            blogWrapper.addEventListener('touchstart', () => clearInterval(blogAutoScroll), { passive: true });
                            blogWrapper.addEventListener('touchend', () => {
                                clearInterval(blogAutoScroll);
                                blogAutoScroll = setInterval(() => scrollBlogs(304), 3500);
                            }, { passive: true });
                        }
                    });
                </script>

                <div class="center-action" style="margin-top: 10px; text-align: center;">
                    <a href="blog" class="button button-secondary btn-shine" style="border-radius: 999px; padding: 12px 32px; font-weight: 700;">View All Blogs -></a>
                </div>
            </div>
        </section>

        <section class="section awards-section" id="awards">
            <div class="container">
                <div class="section-heading center reveal">
                    <h2>Awards & <span>Recognition</span></h2>
                    <p>Celebrated for excellence in delivering technologies industry.</p>
                </div>
                <div class="awards-slider reveal">
                    <div class="awards-track">
                        <!-- Original Set -->
                        <?php foreach($awards as $award): ?>
                            <article class="award-item">
                                <?php if(!empty($award['img'])): ?>
                                    <img src="<?php echo htmlspecialchars($award['img']); ?>" alt="<?php echo htmlspecialchars($award['name']); ?>" />
                                <?php else: ?>
                                    <strong><?php echo htmlspecialchars($award['name']); ?></strong>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                        <!-- Duplicated Set for infinite seamless scrolling -->
                        <?php foreach($awards as $award): ?>
                            <article class="award-item" aria-hidden="true">
                                <?php if(!empty($award['img'])): ?>
                                    <img src="<?php echo htmlspecialchars($award['img']); ?>" alt="<?php echo htmlspecialchars($award['name']); ?>" />
                                <?php else: ?>
                                    <strong><?php echo htmlspecialchars($award['name']); ?></strong>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner Ecosystem Section styled like Core Services -->
        <section class="section cs-section" id="partners" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
            <div class="cs-bg-orb1" style="background: radial-gradient(circle, rgba(152,55,212,0.06) 0%, transparent 70%); left: -80px; right: auto;"></div>
            <div class="cs-bg-orb2" style="background: radial-gradient(circle, rgba(34,168,75,0.08) 0%, transparent 70%); right: -60px; left: auto;"></div>

            <div class="cs-container">
                <div class="section-heading center cs-reveal" style="margin-bottom: 36px;">
            <span class="eyebrow" style="background: rgba(29, 78, 158, 0.08); color: var(--brand-secondary); border: 1px solid rgba(29, 78, 158, 0.15); padding: 6px 16px; border-radius: 100px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 12px; display: inline-block;">Clients</span>
                    <h2>Our <span>Clients</span></h2>
                    <p>We collaborate with global technology leaders to deliver robust, scalable, and secure solutions.</p>
                </div>

                <div class="awards-slider reveal">
                    <div class="awards-track" style="animation-direction: reverse;">
                        <!-- Original Set -->
                        <?php foreach($clients as $client): ?>
                            <article class="award-item">
                                <?php if(!empty($client['img'])): ?>
                                    <img src="<?php echo htmlspecialchars($client['img']); ?>" alt="<?php echo htmlspecialchars($client['name']); ?>" />
                                <?php else: ?>
                                    <strong><?php echo htmlspecialchars($client['name']); ?></strong>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                        <!-- Duplicated Set for infinite seamless scrolling -->
                        <?php foreach($clients as $client): ?>
                            <article class="award-item" aria-hidden="true">
                                <?php if(!empty($client['img'])): ?>
                                    <img src="<?php echo htmlspecialchars($client['img']); ?>" alt="<?php echo htmlspecialchars($client['name']); ?>" />
                                <?php else: ?>
                                    <strong><?php echo htmlspecialchars($client['name']); ?></strong>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section testimonials-section" id="testimonials" style="background: #ffffff; padding-top: 0 !important;">
            <div class="container">
                <div class="section-heading center reveal">
                    <span class="eyebrow">Client Stories</span>
                    <h2>What Our <span>Clients Say</span></h2>
                    <p>Don't just take our word for it. Here is what businesses have to say about partnering with Mithila Softech.</p>
                </div>
                <div class="testimonials-grid-wrapper reveal">
                    <div class="testimonials-grid" id="testimonialTrack">
                        <?php foreach($testimonials as $index => $t): ?>
                            <article class="testimonial-card testimonial-card-toggle" <?php echo $index >= 3 ? 'hidden' : ''; ?>>
                                <div class="quote-icon">"</div>
                                <div class="stars" style="color: #f59e0b; margin-bottom: 14px; display: flex; gap: 3px;">
                                    <?php for($i=0; $i<5; $i++): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    <?php endfor; ?>
                                </div>
                                <?php 
                                    $text = htmlspecialchars($t['text']);
                                    $limit = 100;
                                    $isLong = strlen($text) > $limit;
                                    $shortText = $isLong ? substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...' : $text;
                                ?>
                                <p class="testimonial-text">
                                    <span class="short-text"><?php echo $shortText; ?></span>
                                    <?php if ($isLong): ?>
                                        <span class="full-text" style="display: none;"><?php echo $text; ?></span>
                                        <a href="javascript:void(0);" onclick="this.previousElementSibling.style.display='inline'; this.previousElementSibling.previousElementSibling.style.display='none'; this.style.display='none';" style="color: var(--blue); text-decoration: none; font-weight: 600; margin-left: 5px;">Read more</a>
                                    <?php endif; ?>
                                </p>
                                <div class="testimonial-author">
                                    <div class="author-info">
                                        <h4>
                                            <?php if (!empty($t['link'])): ?>
                                                <a href="<?php echo htmlspecialchars($t['link']); ?>" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;" title="View original review">
                                                    <?php echo htmlspecialchars($t['name']); ?>
                                                </a>
                                            <?php else: ?>
                                                <?php echo htmlspecialchars($t['name']); ?>
                                            <?php endif; ?>
                                        </h4>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <?php if (count($testimonials) > 3): ?>
                    <div class="testimonial-action-center">
                        <button type="button" class="button button-primary" style="border-radius: 999px; padding: 12px 36px; font-weight: 700;" onclick="toggleTestimonials('testimonialTrack', this)">View More</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <script>
            function toggleTestimonials(trackId, button) {
                const track = document.getElementById(trackId);
                if (!track) return;
                const cards = Array.from(track.querySelectorAll('.testimonial-card-toggle'));
                const expanded = cards.some((card, index) => index >= 3 && !card.hidden);
                cards.forEach((card, index) => {
                    if (index >= 3) {
                        card.hidden = expanded;
                    }
                });
                button.textContent = expanded ? 'View More' : 'View Less';
            }
        </script>

        <section class="section stats-section reveal" style="background: linear-gradient(135deg, var(--green-dark) 0%, var(--blue-dark) 100%); position: relative; overflow: hidden;">
            <div style="position: absolute; top: -50px; left: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(50px);"></div>
            <div style="position: absolute; bottom: -50px; right: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(50px);"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <div class="section-heading center" style="text-align: center; margin-bottom: 28px;">
                    <span class="eyebrow" style="background: rgba(255,255,255,0.1); color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; border: 1px solid rgba(255,255,255,0.2);">Our Impact</span>
                    <h2 style="color: #ffffff !important; margin-top: 15px; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800;">Our <span style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; background: none !important;">Strength in Numbers</span></h2>
                    <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Delivering excellence and scaling businesses globally through technology.</p>
                </div>
                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px;">
                <?php foreach ($stats as $index => $stat): ?>
                    <article class="stat-card reveal" style="--delay: <?php echo ($index * 0.1); ?>s; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 28px 18px; text-align: center; backdrop-filter: blur(10px); transition: transform 0.3s ease, background 0.3s ease;">
                        <div class="stat-icon" style="font-size: 2.5rem; margin-bottom: 16px;"><?php echo $stat["icon"]; ?></div>
                        <strong style="display: block; font-size: 3.5rem; font-weight: 900; line-height: 1; margin-bottom: 8px; color: #fff;"><span class="counter" data-target="<?php echo $stat["number"]; ?>">0</span>+</strong>
                        <span style="font-size: 1rem; color: rgba(255,255,255,0.85); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;"><?php echo $stat["label"]; ?></span>
                    </article>
                <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-copy reveal">
                        <span class="eyebrow" style="margin-bottom: 20px;">Contact Us</span>
                        <h2>Let's Work <br><span>Together</span></h2>
                        <p>Have a project in mind? Need website, software, or digital business support? Share your requirement and our team will connect with you.</p>
                    </div>
                    <div class="contact-form-wrap reveal" style="box-shadow: 0 30px 60px rgba(0,0,0,0.6), inset 0 0 20px rgba(255,255,255,0.05);">
                        <form class="contact-form" action="#" method="POST">
                            <div class="form-row">
                                <label>Full Name<input type="text" name="name" placeholder="Rahul Sharma" required></label>
                                <label>Email Address<input type="email" name="email" placeholder="rahul@example.com" required></label>
                            </div>
                            <label>Phone Number<input type="text" name="phone" placeholder="+91 99719 21698" required></label>
                            <label>Message<textarea name="message" rows="5" placeholder="Tell us about your project or requirement..." required></textarea></label>
                            <button type="submit" class="button button-primary">Send Message</button>
                            <div class="success-message" id="form-success">Message sent!</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section global-presence-section reveal" id="global-presence" style="background: #f8fafc; position: relative; overflow: hidden; padding: 80px 0;">
            <div style="position: absolute; inset: 0; background-image: radial-gradient(rgba(29, 78, 158, 0.15) 2px, transparent 2px); background-size: 30px 30px; opacity: 0.5; z-index: 1;"></div>
            
            <div class="container" style="position: relative; z-index: 2;">
                <div class="section-heading center">
                    <span class="eyebrow" style="background: rgba(29, 78, 158, 0.1); color: var(--green); border: 1px solid rgba(29, 78, 158, 0.2);">Global Footprint</span>
                    <h2>Our Global <span>Presence</span></h2>
                    <p>Delivering technological excellence from our offices across India and the USA.</p>
                </div>
                <div class="global-presence-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-top: 40px; max-width: 900px; margin-left: auto; margin-right: auto;">
                    <!-- Location 1 -->
                    <div class="gp-card reveal" style="background: #ffffff; border: 1px solid rgba(0,0,0,0.05); border-radius: 16px; padding: 24px 20px; text-align: center; box-shadow: 0 8px 20px rgba(0,0,0,0.04); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden;">
                        <div class="gp-gradient-line" style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%);"></div>
                        <div class="gp-icon" style="margin-bottom: 12px; transition: transform 0.4s ease; animation: gpUpDownBlink 1.5s infinite ease-in-out;"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                        <h3 style="font-size: 1.15rem; color: var(--text); margin-bottom: 8px; font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 8px;">Patna, Bihar <span class="gp-blink-dot" title="Active Office"></span></h3>
                        <p style="color: var(--muted); font-size: 0.9rem; line-height: 1.5; margin: 0;">B-Hub, 5th Floor, Maurya Lok Complex, Block A, Patna, Bihar-800001</p>
                    </div>
                    <!-- Location 2 -->
                    <div class="gp-card reveal" style="--delay: 0.1s; background: #ffffff; border: 1px solid rgba(0,0,0,0.05); border-radius: 16px; padding: 24px 20px; text-align: center; box-shadow: 0 8px 20px rgba(0,0,0,0.04); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden;">
                        <div class="gp-gradient-line" style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%);"></div>
                        <div class="gp-icon" style="margin-bottom: 12px; transition: transform 0.4s ease; animation: gpUpDownBlink 1.5s infinite ease-in-out 0.2s;"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                        <h3 style="font-size: 1.15rem; color: var(--text); margin-bottom: 8px; font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 8px;">New Delhi <span class="gp-blink-dot" title="Active Office"></span></h3>
                        <p style="color: var(--muted); font-size: 0.9rem; line-height: 1.5; margin: 0;">B - 142 B, Pandav Nagar<br>New Delhi 110092</p>
                    </div>
                    <!-- Location 3 -->
                    <div class="gp-card reveal" style="--delay: 0.2s; background: #ffffff; border: 1px solid rgba(0,0,0,0.05); border-radius: 16px; padding: 24px 20px; text-align: center; box-shadow: 0 8px 20px rgba(0,0,0,0.04); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden;">
                        <div class="gp-gradient-line" style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(135deg, var(--green) 0%, var(--blue) 100%);"></div>
                        <div class="gp-icon" style="margin-bottom: 12px; transition: transform 0.4s ease; animation: gpUpDownBlink 1.5s infinite ease-in-out 0.4s;"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                        <h3 style="font-size: 1.15rem; color: var(--text); margin-bottom: 8px; font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 8px;">Sheridan, USA <span class="gp-blink-dot" title="Active Office"></span></h3>
                        <p style="color: var(--muted); font-size: 0.9rem; line-height: 1.5; margin: 0;">Sheridan, Wyoming<br>USA</p>
                    </div>
                </div>
            </div>
            <style>
                .gp-card:hover { transform: translateY(-8px) scale(1.02) !important; box-shadow: 0 15px 35px rgba(29, 78, 158, 0.12) !important; border-color: rgba(29, 78, 158, 0.2) !important; }
                .gp-card:hover .gp-icon { transform: scale(1.15) rotate(5deg) !important; }
                .gp-blink-dot { display: inline-block; width: 8px; height: 8px; background-color: #22c55e; border-radius: 50%; box-shadow: 0 0 0 rgba(34, 197, 94, 0.4); animation: gpPulse 2s infinite; }
                @keyframes gpPulse { 0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); } 70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(34, 197, 94, 0); } 100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); } }
                .gp-gradient-line { animation: gpLineGlow 2s infinite alternate; }
                @keyframes gpLineGlow { 0% { opacity: 0.7; box-shadow: 0 0 5px rgba(29, 78, 158, 0.2); } 100% { opacity: 1; box-shadow: 0 0 15px rgba(152, 55, 212, 0.8); } }
                @keyframes gpUpDownBlink { 0%, 100% { transform: translateY(0); opacity: 1; } 50% { transform: translateY(-8px); opacity: 0.5; } }
            </style>
        </section>
    </main>
    <?php include 'footer-new.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = { threshold: 0.1 };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
            
            // Number Counter Logic
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target');
                        const duration = 2000; // Animation duration in ms (2 seconds)
                        const increment = target / (duration / 16); // Approx 60 frames per second
                        let current = 0;
                        
                        const updateCounter = () => {
                            current += increment;
                            if (current < target) {
                                counter.innerText = Math.ceil(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        setTimeout(updateCounter, 800);
                        observer.unobserve(counter); // Stop observing once animated
                    }
                });
            }, { threshold: 0.5 });
            document.querySelectorAll(".counter").forEach(el => counterObserver.observe(el));

            document.querySelector('.contact-form').addEventListener('submit', (e) => {
                e.preventDefault();
                document.getElementById('form-success').style.display = 'block';
                e.target.reset();
            });
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







