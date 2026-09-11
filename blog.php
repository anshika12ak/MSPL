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

$blogs = [
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






