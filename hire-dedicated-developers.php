<?php
/**
 * Master Hire Portal - Mithila Softech
 * Fully unified single-file engine powering dedicated developer pages, all role-specific specializations,
 * and shortcode/embed modules with the authentic Mithila Softech design system.
 */

// 1. COMPREHENSIVE ROLE-SPECIFIC DATA ENGINE
$hire_roles = [
    'hire-react-developers' => [
        'name' => 'React Developers',
        'single' => 'React developer',
        'badge' => 'Frontend & Next.js Specialists',
        'tagline' => 'Build blazing-fast, responsive web applications and interactive SPAs with top 1% vetted React.js and Next.js engineers.',
        'meta_title' => 'Hire Dedicated React Developers | Top React.js & Next.js Experts India',
        'meta_desc' => 'Hire dedicated React developers from Mithila Softech. Build ultra-fast SPAs, Next.js web applications, and enterprise dashboards with pre-vetted React.js engineers.',
        'stats' => [
            ['num' => '99.4%', 'label' => 'Google Lighthouse Speed Score'],
            ['num' => '48h', 'label' => 'Rapid Developer Onboarding'],
            ['num' => '5+ Yrs', 'label' => 'Avg. Senior Experience'],
            ['num' => '100%', 'label' => 'Source Code & IP Ownership']
        ],
        'intro_eyebrow' => 'React.js Engineering',
        'intro_heading' => 'Ship Ultra-Fast Web Products with <span>Dedicated React Engineers</span>',
        'intro_p1' => 'In modern web development, users expect instantaneous interactions, zero page reloads, and silky-smooth transitions. Our dedicated React developers specialize in architecting scalable Single Page Applications (SPAs), Next.js server-rendered platforms, and modular component design systems that deliver extraordinary user satisfaction.',
        'intro_p2' => 'Whether you need to build a complex SaaS dashboard, upgrade a legacy frontend to React 18, or scale your engineering velocity, our developers embed directly into your GitHub repos, Slack channels, and daily standups - operating as an indispensable extension of your internal team.',
        'impact_heading' => 'The Mithila Softech React Advantage',
        'impact_items' => [
            'Next.js 14 App Router, Server Components & Static Generation (SSG)',
            'Predictable State Management with Redux Toolkit, Zustand & TanStack Query',
            'Pixel-Perfect Responsive UI with Tailwind CSS, Material UI & Headless UI',
            'Automated Component Testing via Jest, React Testing Library & Cypress'
        ],
        'capabilities' => [
            [
                'title' => 'Single Page Application (SPA) Development',
                'desc' => 'Architect highly responsive, component-driven SPAs that handle high concurrent client traffic with minimal memory overhead and zero lag.',
                'chips' => ['React 18', 'Virtual DOM', 'Vite', 'TypeScript'],
                'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
            ],
            [
                'title' => 'Next.js SSR & Enterprise Headless Frontends',
                'desc' => 'Build search engine-optimized web applications with hybrid server-side rendering (SSR), incremental static regeneration (ISR), and edge caching.',
                'chips' => ['Next.js 14', 'App Router', 'SEO Optimization', 'Edge API'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
            ],
            [
                'title' => 'Interactive SaaS Dashboards & Analytics',
                'desc' => 'Transform complex real-time data feeds into intuitive dashboards with charting libraries, interactive tables, and drag-and-drop workflows.',
                'chips' => ['Chart.js', 'D3.js', 'AG-Grid', 'WebSockets'],
                'icon' => '<line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line>'
            ],
            [
                'title' => 'State Architecture & API Integration',
                'desc' => 'Implement rock-solid data layers using Redux Toolkit, TanStack Query, and GraphQL clients to synchronize asynchronous server states seamlessly.',
                'chips' => ['Redux Toolkit', 'Zustand', 'Axios', 'GraphQL'],
                'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'
            ],
            [
                'title' => 'Legacy Migration & React Upgrades',
                'desc' => 'Safely migrate monolithic jQuery, AngularJS, or older React codebases to modern TypeScript-powered React with zero production downtime.',
                'chips' => ['Refactoring', 'TypeScript', 'Code Audit', 'Performance Tuning'],
                'icon' => '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>'
            ],
            [
                'title' => 'UI Component Libraries & Design Systems',
                'desc' => 'Develop reusable, accessible component libraries governed by Storybook, ensuring brand consistency across multi-product ecosystems.',
                'chips' => ['Storybook', 'Tailwind CSS', 'Figma Tokens', 'WCAG 2.1'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ]
        ],
        'skills' => ['React 18', 'Next.js 14', 'TypeScript', 'Redux Toolkit', 'Zustand', 'Tailwind CSS', 'GraphQL', 'RESTful APIs', 'Jest / RTL', 'Vite', 'Storybook', 'Git CI/CD'],
        'tech' => ['React', 'Next.js', 'TypeScript', 'Redux', 'Tailwind CSS', 'GraphQL', 'Jest', 'Vite'],
        'faqs' => [
            ['Can your React developers work with Next.js and Server Components?', 'Yes. All our senior React developers are thoroughly proficient in Next.js 13/14, utilizing both the App Router and Pages Router, Server Components (RSC), and Server Actions for maximum speed and SEO.'],
            ['How quickly can a dedicated React developer join our project?', 'We typically match and onboard vetted React developers within 24 to 48 hours. After an initial technical consultation and profile selection, your developer begins sprint work immediately.'],
            ['Can I interview the React developer before hiring?', 'Absolutely. You have 100% control to review candidate portfolios, conduct live video code reviews, and test problem-solving capabilities before signing off.'],
            ['Who owns the source code and intellectual property?', 'You retain 100% full ownership of all source code, design assets, and intellectual property from day one. We sign comprehensive Non-Disclosure Agreements (NDAs) prior to onboarding.'],
            ['How do you handle time-zone differences and communication?', 'Our developers provide significant daily overlap with US, UK, European, Middle East, and Australian business hours, maintaining active communication via Slack, Teams, Jira, and daily standups.']
        ]
    ],

    'hire-laravel-developers' => [
        'name' => 'Laravel Developers',
        'single' => 'Laravel developer',
        'badge' => 'Enterprise Web Framework',
        'tagline' => 'Engineer robust, scalable SaaS platforms, complex APIs, and enterprise web applications with vetted Laravel architects.',
        'meta_title' => 'Hire Dedicated Laravel Developers | Expert Laravel Engineers India',
        'meta_desc' => 'Hire dedicated Laravel developers from Mithila Softech. Build custom SaaS products, RESTful APIs, and enterprise web applications with certified Laravel specialists.',
        'stats' => [
            ['num' => '99.9%', 'label' => 'SaaS Architecture Uptime'],
            ['num' => '48h', 'label' => 'Onboarding & Repo Access'],
            ['num' => '150+', 'label' => 'Enterprise Laravel Builds'],
            ['num' => '100%', 'label' => 'Clean PSR-12 Standards']
        ],
        'intro_eyebrow' => 'Laravel Framework Mastery',
        'intro_heading' => 'Build Secure, Scalable Enterprise Solutions with <span>Dedicated Laravel Architects</span>',
        'intro_p1' => 'Laravel stands as the premier PHP ecosystem for modern enterprise software. Our dedicated Laravel developers harness the full power of Eloquent ORM, queued job workers, Redis caching, and robust security middleware to deliver clean, maintainable web applications built to scale effortlessly.',
        'intro_p2' => 'From multi-tenant B2B SaaS architectures to high-traffic e-commerce backends and asynchronous microservices, our developers adhere to strict clean code principles (SOLID, DRY) and automated test-driven development (TDD) for fail-safe deployments.',
        'impact_heading' => 'The Mithila Softech Laravel Advantage',
        'impact_items' => [
            'Multi-tenant SaaS Architecture with isolated tenant databases & billing',
            'Asynchronous Task Processing with Laravel Horizon, Redis & Bull queues',
            'Full-Stack Reactive Frontends with Laravel Livewire & Inertia.js',
            'Comprehensive Automated Test Suites via Pest PHP and PHPUnit'
        ],
        'capabilities' => [
            [
                'title' => 'Custom SaaS Platform Architecture',
                'desc' => 'Design and deploy multi-tenant cloud software with automated Stripe subscriptions, customizable role-based access control (RBAC), and tenant isolation.',
                'chips' => ['Multi-Tenancy', 'Stripe Cashier', 'RBAC', 'SaaS'],
                'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>'
            ],
            [
                'title' => 'High-Performance REST & GraphQL APIs',
                'desc' => 'Develop secure, well-documented API backends with OAuth2/Sanctum authentication, rate limiting, and response caching for web and mobile clients.',
                'chips' => ['Sanctum / Passport', 'GraphQL', 'Swagger', 'Rate Limiting'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>'
            ],
            [
                'title' => 'Asynchronous Queues & Microservices',
                'desc' => 'Offload heavy computation, transactional email delivery, video processing, and data ingestion using Redis queues managed by Laravel Horizon.',
                'chips' => ['Laravel Horizon', 'Redis Queues', 'Cron Jobs', 'Events'],
                'icon' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>'
            ],
            [
                'title' => 'Laravel Version Upgrades & Refactoring',
                'desc' => 'Safely modernize legacy Laravel 5.x–8.x installations to Laravel 10/11, migrating deprecated packages and patching critical security vulnerabilities.',
                'chips' => ['Laravel 11', 'PHP 8.3 JIT', 'Rector', 'Security Hardening'],
                'icon' => '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>'
            ],
            [
                'title' => 'Modern Reactive Frontends (Livewire & Inertia)',
                'desc' => 'Build dynamic, SPA-like experiences without leaving the Laravel ecosystem using Livewire 3 or connecting Vue/React seamlessly via Inertia.js.',
                'chips' => ['Livewire 3', 'Inertia.js', 'Alpine.js', 'Blade'],
                'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
            ],
            [
                'title' => 'Database Optimization & Query Tuning',
                'desc' => 'Eliminate N+1 query bottlenecks, structure high-throughput indexes, and design complex relational schemas in MySQL and PostgreSQL.',
                'chips' => ['Eloquent ORM', 'PostgreSQL', 'MySQL Tuning', 'Redis Cache'],
                'icon' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>'
            ]
        ],
        'skills' => ['Laravel 11', 'PHP 8.3', 'Eloquent ORM', 'Livewire', 'Inertia.js', 'Redis', 'MySQL / PostgreSQL', 'Docker', 'REST / GraphQL', 'AWS S3 / EC2', 'PHPUnit / Pest'],
        'tech' => ['Laravel', 'Eloquent ORM', 'Livewire', 'Inertia', 'Vue / React', 'Redis', 'MySQL', 'AWS'],
        'faqs' => [
            ['What version of Laravel do your developers specialize in?', 'Our engineers are experienced across all modern Laravel versions, from legacy Laravel 6/7/8 refactors to greenfield Laravel 10 and 11 applications with PHP 8.3 JIT.'],
            ['Can your Laravel developers work with frontend frameworks like Vue or React?', 'Yes. Our Laravel developers build full-stack apps using Inertia.js with React or Vue, Livewire 3, or pure headless REST/GraphQL APIs.'],
            ['How do you ensure data security in Laravel apps?', 'We implement strict CSRF protection, SQL injection prevention via PDO parameter binding, encrypted cookies, hashed passwords using Bcrypt/Argon2, and role-based permissions via Laravel Gates and Policies.'],
            ['Can we hire a Laravel developer on a flexible part-time model?', 'Yes. We offer Part-Time (80 hours/month), Full-Time (160 hours/month), and Hourly/Milestone models depending on your development requirements.'],
            ['What tools do your developers use for project tracking?', 'We integrate with your preferred tools including Jira, GitHub, GitLab, Trello, Asana, and communicate daily via Slack or Microsoft Teams.']
        ]
    ],

    'hire-nodejs-developers' => [
        'name' => 'Node.js Developers',
        'single' => 'Node.js developer',
        'badge' => 'Backend & Microservices',
        'tagline' => 'Engineer high-throughput, event-driven backends, real-time streaming services, and scalable RESTful/GraphQL APIs with vetted Node.js specialists.',
        'meta_title' => 'Hire Dedicated Node.js Developers | Expert Backend Engineers India',
        'meta_desc' => 'Hire dedicated Node.js developers from Mithila Softech. Build real-time apps, microservices, and high-concurrency APIs with senior Node.js & NestJS engineers.',
        'stats' => [
            ['num' => '10k+', 'label' => 'Concurrent Requests / Sec'],
            ['num' => '48h', 'label' => 'Onboarding & Delivery'],
            ['num' => '99.99%', 'label' => 'Microservices Availability'],
            ['num' => '100%', 'label' => 'Enterprise Security & NDA']
        ],
        'intro_eyebrow' => 'Node.js Backend Engineering',
        'intro_heading' => 'Scale High-Concurrency Backends with <span>Dedicated Node.js Engineers</span>',
        'intro_p1' => 'When your application demands lightning-fast I/O operations, bi-directional real-time data streaming, and scalable microservices, Node.js is the proven engine of choice. Our dedicated Node.js developers leverage non-blocking, event-driven architectures to build systems that handle millions of simultaneous user connections.',
        'intro_p2' => 'From enterprise NestJS architectures and Express.js REST backends to WebSockets, message brokers (Kafka, RabbitMQ), and serverless AWS Lambda pipelines, our engineers write clean, typed TypeScript code that delivers unmatched backend resilience.',
        'impact_heading' => 'The Mithila Softech Node.js Advantage',
        'impact_items' => [
            'Real-Time WebSocket & Socket.io architectures for chat, IoT & live tracking',
            'Enterprise Modular Microservices with NestJS, TypeScript & gRPC',
            'High-Performance Asynchronous Data Pipelines via Kafka, RabbitMQ & Redis',
            'Cloud-Native Containerization & Serverless Deployments on AWS & GCP'
        ],
        'capabilities' => [
            [
                'title' => 'High-Throughput API Gateway & Services',
                'desc' => 'Develop scalable, rate-limited REST and GraphQL APIs with OAuth2 authentication, JWT tokens, and automated OpenAPI documentation.',
                'chips' => ['Express.js', 'NestJS', 'GraphQL', 'JWT Auth'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
            ],
            [
                'title' => 'Real-Time Apps & WebSocket Streaming',
                'desc' => 'Engineer bidirectional communication systems for live sports updates, financial tickers, collaborative document editing, and in-app chat.',
                'chips' => ['Socket.io', 'WebSockets', 'Pub/Sub', 'SSE'],
                'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
            ],
            [
                'title' => 'Enterprise Microservices with NestJS',
                'desc' => 'Structure maintainable, modular microservices adhering to Domain-Driven Design (DDD) principles with dependency injection and TypeScript.',
                'chips' => ['NestJS', 'TypeScript', 'gRPC', 'RabbitMQ'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ],
            [
                'title' => 'Database Architecture & Cache Optimization',
                'desc' => 'Design high-speed database layers in MongoDB, PostgreSQL, and DynamoDB, optimizing queries and caching hot data in Redis.',
                'chips' => ['MongoDB', 'PostgreSQL', 'Prisma ORM', 'Redis'],
                'icon' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>'
            ],
            [
                'title' => 'Serverless & Cloud Function Deployment',
                'desc' => 'Build event-driven serverless architectures on AWS Lambda, Google Cloud Functions, or Cloudflare Workers for cost-efficient compute.',
                'chips' => ['AWS Lambda', 'API Gateway', 'Serverless', 'Docker'],
                'icon' => '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>'
            ],
            [
                'title' => 'Third-Party Integration & Webhooks',
                'desc' => 'Integrate payment gateways (Stripe, Razorpay, PayPal), CRM systems, communications (Twilio, Sendgrid), and resilient webhook receivers.',
                'chips' => ['Stripe API', 'Webhooks', 'Twilio', 'Idempotency'],
                'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'
            ]
        ],
        'skills' => ['Node.js', 'Express.js', 'NestJS', 'TypeScript', 'MongoDB', 'PostgreSQL', 'Redis', 'Docker', 'AWS Lambda', 'WebSockets', 'GraphQL', 'Jest'],
        'tech' => ['Node.js', 'Express.js', 'NestJS', 'MongoDB', 'PostgreSQL', 'Redis', 'Docker', 'AWS'],
        'faqs' => [
            ['Do your Node.js developers write TypeScript?', 'Yes. The majority of our enterprise Node.js projects are written in TypeScript using NestJS or Express, guaranteeing type safety and fewer runtime errors.'],
            ['Can your developers help migrate monolithic backends to microservices?', 'Yes. We specialize in decoupling monolithic architectures into lightweight, independently deployable Node.js microservices communicating via REST, gRPC, or message queues.'],
            ['How do you optimize Node.js for high traffic?', 'We utilize Node.js clustering, PM2 process management, Redis caching, non-blocking asynchronous coding patterns, and connection pooling to ensure optimal throughput.'],
            ['Can our hired developer collaborate with our in-house engineering team?', 'Yes. Our developers participate in your sprint planning, standups, Git PR reviews, and Slack discussions as a fully integrated team member.'],
            ['What is your exit and replacement policy?', 'We offer a flexible engagement model with an easy 1-week exit policy and an instant developer replacement guarantee if skills or requirements change.']
        ]
    ],

    'hire-flutter-developers' => [
        'name' => 'Flutter Developers',
        'single' => 'Flutter developer',
        'badge' => 'Cross-Platform Mobile',
        'tagline' => 'Launch beautiful, 60 FPS Android and iOS mobile applications from a single Dart codebase with dedicated Flutter engineers.',
        'meta_title' => 'Hire Dedicated Flutter Developers | Top Flutter App Engineers India',
        'meta_desc' => 'Hire dedicated Flutter developers from Mithila Softech. Build cross-platform Android and iOS apps with native performance, custom animations, and clean architecture.',
        'stats' => [
            ['num' => '60%', 'label' => 'Faster Time-to-Market'],
            ['num' => '1 Code', 'label' => 'Runs on Android & iOS'],
            ['num' => '60 FPS', 'label' => 'Native Rendering Engine'],
            ['num' => '100%', 'label' => 'Store Approval Rate']
        ],
        'intro_eyebrow' => 'Cross-Platform Mobile Engineering',
        'intro_heading' => 'Ship Native-Grade iOS & Android Apps with <span>Dedicated Flutter Engineers</span>',
        'intro_p1' => 'Building separate iOS and Android native apps doubles your development cost, timeline, and bug-fixing efforts. Flutter solves this permanently by compiling directly into native ARM code. Our dedicated Flutter developers craft fluid, visually stunning mobile apps that feel 100% native on both platforms.',
        'intro_p2' => 'From reactive state management with BLoC or Riverpod to custom hardware integrations (Bluetooth, Camera, GPS, Biometrics) and offline SQLite synchronization, our mobile engineers deliver enterprise apps that dominate App Store and Google Play reviews.',
        'impact_heading' => 'The Mithila Softech Flutter Advantage',
        'impact_items' => [
            'Single Dart codebase delivering identical, high-fidelity UI on iOS & Android',
            'Predictable, scalable state management using BLoC, Riverpod & Provider',
            'Native platform channel bridges for native sensors, BLE & hardware SDKs',
            'Automated CI/CD pipelines via Fastlane & GitHub Actions for instant store releases'
        ],
        'capabilities' => [
            [
                'title' => 'Cross-Platform Mobile App Development',
                'desc' => 'Build high-performance native iOS and Android apps from one unified Dart codebase, slashing time-to-market and maintenance overhead.',
                'chips' => ['Flutter 3', 'Dart', 'iOS & Android', 'Material 3 / Cupertino'],
                'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>'
            ],
            [
                'title' => 'Custom UI, Motion & Smooth Animations',
                'desc' => 'Design expressive user experiences with Flutter’s custom rendering engine, implementing complex micro-interactions and transitions.',
                'chips' => ['Motion UI', 'Rive', 'Lottie', 'Hero Animations'],
                'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
            ],
            [
                'title' => 'State Architecture (BLoC & Riverpod)',
                'desc' => 'Structure maintainable, testable mobile architectures separating business logic from presentation using BLoC, Cubit, or Riverpod.',
                'chips' => ['BLoC Pattern', 'Riverpod', 'Clean Architecture', 'Provider'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ],
            [
                'title' => 'Offline-First & Local DB Synchronization',
                'desc' => 'Implement seamless offline functionality using SQLite, Hive, or Isar database caching, auto-syncing with cloud APIs when online.',
                'chips' => ['SQLite', 'Hive DB', 'Isar', 'Background Sync'],
                'icon' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>'
            ],
            [
                'title' => 'Hardware & Native SDK Platform Bridges',
                'desc' => 'Bridge deep native functionalities including camera, push notifications (FCM), GPS location tracking, Bluetooth BLE, and Apple Pay / Google Pay.',
                'chips' => ['Platform Channels', 'BLE', 'FCM Push', 'In-App Purchases'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
            ],
            [
                'title' => 'App Store & Play Store Deployment',
                'desc' => 'Handle complete release management, certificate signing, Google Play Store policies, Apple App Store review compliance, and CI/CD pipelines.',
                'chips' => ['Fastlane', 'App Store Connect', 'Play Console', 'CI/CD'],
                'icon' => '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>'
            ]
        ],
        'skills' => ['Flutter 3', 'Dart', 'BLoC', 'Riverpod', 'Firebase', 'RESTful APIs', 'SQLite / Hive', 'Fastlane', 'Git', 'App Store Guidelines', 'CI/CD', 'Native Bridges'],
        'tech' => ['Flutter', 'Dart', 'Firebase', 'Bloc / Riverpod', 'REST API', 'SQLite', 'Git', 'CI/CD'],
        'faqs' => [
            ['Does Flutter really deliver native performance on both iOS and Android?', 'Yes. Flutter compiles directly to machine ARM code and renders its UI using the Impeller/Skia engine at 60 to 120 FPS, completely avoiding slow webview bridges.'],
            ['Can your Flutter developers integrate native Swift or Kotlin code if needed?', 'Yes. Our developers are experienced with Flutter Platform Channels, enabling seamless communication with native Swift, Objective-C, Kotlin, and Java SDKs.'],
            ['Do you help with publishing the app to the Google Play Store and Apple App Store?', 'Yes. Our dedicated Flutter developers take complete ownership of app bundling, icon generation, asset optimization, privacy manifests, and store submission.'],
            ['How do we review app progress during development?', 'We distribute intermediate builds via Firebase App Distribution or TestFlight after every sprint, allowing you to test features on real devices continuously.'],
            ['What happens if a developer is unavailable or on leave?', 'We guarantee project continuity with dedicated shadow resources and an immediate replacement guarantee, ensuring zero disruption to your sprint schedule.']
        ]
    ],

    'hire-php-developers' => [
        'name' => 'PHP Developers',
        'single' => 'PHP developer',
        'badge' => 'Backend & Full-Stack Architects',
        'tagline' => 'Build secure, fast and scalable web applications with experienced PHP developers who work exclusively on your project.',
        'meta_title' => 'Hire Dedicated PHP Developers | Expert PHP 8 Programmers India',
        'meta_desc' => 'Hire dedicated PHP developers from Mithila Softech. Build custom web portals, high-volume e-commerce platforms, and secure APIs with senior PHP 8 engineers.',
        'stats' => [
            ['num' => '99.5%', 'label' => 'Core Web Uptime SLA'],
            ['num' => '48h', 'label' => 'Developer Matching Time'],
            ['num' => '12+ Yrs', 'label' => 'PHP Engineering Experience'],
            ['num' => '100%', 'label' => 'Secure Code & NDA Protected']
        ],
        'intro_eyebrow' => 'PHP Engineering Excellence',
        'intro_heading' => 'Develop Resilient Web Systems with <span>Dedicated Senior PHP Programmers</span>',
        'intro_p1' => 'PHP powers over 75% of the modern web, from high-traffic business portals to complex e-commerce engines. Modern PHP 8.2 and 8.3 bring JIT compilation, strict typing, and exceptional raw execution speed. Our dedicated PHP engineers build secure, performant, and easily extensible web applications.',
        'intro_p2' => 'Whether you need custom web application development, legacy code refactoring, database query optimization, or multi-system ERP/CRM integrations, our developers apply PSR coding standards and battle-tested architecture to ensure your system thrives under heavy load.',
        'impact_heading' => 'The Mithila Softech PHP Advantage',
        'impact_items' => [
            'Modern PHP 8.x Architecture leveraging JIT compilation, typed properties & enums',
            'High-Security Code Standards eliminating SQL injection, XSS & CSRF risks',
            'Extensive Database Mastery across MySQL, MariaDB & PostgreSQL query tuning',
            'Seamless Integration with payment processors, ERPs, CRMs & external APIs'
        ],
        'capabilities' => [
            [
                'title' => 'Custom Web Application Development',
                'desc' => 'Engineer bespoke web applications, enterprise portals, intranets, and SaaS solutions tailored to your unique operational processes.',
                'chips' => ['PHP 8.3', 'Custom MVC', 'OOP PHP', 'Composer'],
                'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>'
            ],
            [
                'title' => 'High-Performance RESTful APIs',
                'desc' => 'Build secure, lightweight, and fast JSON API endpoints for mobile apps, third-party integrations, and decoupled frontend applications.',
                'chips' => ['REST APIs', 'JSON / XML', 'OAuth2', 'API Security'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
            ],
            [
                'title' => 'Legacy PHP Migration & Refactoring',
                'desc' => 'Upgrade old PHP 5.6/7.x applications to PHP 8.x, refactoring procedural spaghetti code into maintainable, object-oriented architecture.',
                'chips' => ['PHP 8 Upgrade', 'Refactoring', 'Rector', 'PSR Standards'],
                'icon' => '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>'
            ],
            [
                'title' => 'Database Optimization & Schema Design',
                'desc' => 'Optimize complex MySQL relational queries, index structures, connection pooling, and multi-tier caching with Redis and Memcached.',
                'chips' => ['MySQL Tuning', 'PostgreSQL', 'Redis Caching', 'PDO'],
                'icon' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>'
            ],
            [
                'title' => 'Payment & Third-Party Integrations',
                'desc' => 'Integrate payment gateways (Stripe, PayPal, Razorpay), logistics webhooks, SMS/Email systems, accounting software, and CRMs.',
                'chips' => ['Stripe', 'Razorpay', 'PayPal', 'Webhooks'],
                'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
            ],
            [
                'title' => 'System Maintenance, Audits & Security',
                'desc' => 'Conduct thorough security code audits, resolve software bugs, patch vulnerabilities, and optimize server configurations for peak performance.',
                'chips' => ['Security Audits', 'Bug Fixing', 'Apache/Nginx', 'SSL / TLS'],
                'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'
            ]
        ],
        'skills' => ['Core PHP 8.3', 'MySQL / MariaDB', 'PostgreSQL', 'REST APIs', 'Composer', 'Git', 'Apache / Nginx', 'Redis', 'Docker', 'Payment Gateways', 'Linux CLI'],
        'tech' => ['PHP 8', 'MySQL', 'Laravel', 'CodeIgniter', 'Composer', 'REST / JSON', 'Git', 'Docker'],
        'faqs' => [
            ['Do your developers write modern object-oriented PHP?', 'Yes. Our PHP engineers strictly write modern, object-oriented PHP adhering to PSR-1, PSR-4, and PSR-12 coding standards with strict type declarations.'],
            ['Can you help migrate our outdated PHP 5 or 7 site to PHP 8?', 'Yes. We have successfully executed dozens of legacy PHP migration projects, ensuring backwards compatibility while unlocking the immense speed and security of PHP 8.'],
            ['How do you protect PHP applications from hacking and attacks?', 'We follow OWASP Top 10 guidelines, utilizing parameterized PDO queries to eliminate SQL injections, htmlspecialchars for XSS prevention, CSRF tokens, and secure password hashing.'],
            ['What engagement models are available for hiring a PHP developer?', 'You can hire full-time dedicated PHP developers (160h/mo), part-time developers (80h/mo), or hire on an hourly basis for ad-hoc support.'],
            ['Can I speak with previous clients or view case studies?', 'Yes. We are happy to provide references and case studies showcasing our enterprise PHP engineering deliveries across various global industries.']
        ]
    ],

    'hire-shopify-developers' => [
        'name' => 'Shopify Developers',
        'single' => 'Shopify developer',
        'badge' => 'eCommerce & Storefront Architects',
        'tagline' => 'Create conversion-focused, lightning-fast Shopify & Shopify Plus stores with dedicated developers who know the ecosystem inside out.',
        'meta_title' => 'Hire Dedicated Shopify Developers | Shopify & Shopify Plus Experts',
        'meta_desc' => 'Hire dedicated Shopify developers from Mithila Softech. Build bespoke Liquid themes, custom private apps, checkout optimizations, and headless Hydrogen storefronts.',
        'stats' => [
            ['num' => '3x', 'label' => 'Higher Store Conversion Rates'],
            ['num' => '< 2s', 'label' => 'Mobile Page Load Speed'],
            ['num' => '200+', 'label' => 'Shopify Stores Launched'],
            ['num' => '100%', 'label' => 'Shopify Plus Compliant']
        ],
        'intro_eyebrow' => 'Shopify & Shopify Plus Engineering',
        'intro_heading' => 'Scale Your eCommerce Revenue with <span>Dedicated Shopify Experts</span>',
        'intro_p1' => 'In competitive online retail, slow page speeds, confusing navigation, or clunky checkout flows silently destroy your marketing ROI. Our dedicated Shopify developers specialize in engineering high-converting, mobile-first storefronts tailored to drive maximum Average Order Value (AOV).',
        'intro_p2' => 'From bespoke Liquid themes and Online Store 2.0 section architecture to custom private Shopify apps, seamless third-party ERP/CRM integrations, and modern headless Hydrogen storefronts, our developers build stores that scale effortlessly during flash sales and peak holidays.',
        'impact_heading' => 'The Mithila Softech Shopify Advantage',
        'impact_items' => [
            'Online Store 2.0 Theme Architecture with customizable merchant sections',
            'Sub-2-second Mobile Load Times adhering to Google Core Web Vitals',
            'Custom Private App Development using Node.js & Shopify GraphQL Admin API',
            'Seamless Checkout Extensibility, 1-click upsells & ERP inventory sync'
        ],
        'capabilities' => [
            [
                'title' => 'Custom Shopify Theme Development',
                'desc' => 'Build high-performance, responsive Shopify themes from custom Figma/XD designs using modular Online Store 2.0 sections and Liquid.',
                'chips' => ['Liquid', 'OS 2.0', 'Tailwind', 'Mobile-First'],
                'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
            ],
            [
                'title' => 'Custom Private Shopify Apps',
                'desc' => 'Develop private and public Shopify apps to automate back-office operations, warehouse fulfillment, custom pricing rules, and third-party sync.',
                'chips' => ['Node.js', 'GraphQL API', 'Webhooks', 'App Bridge'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ],
            [
                'title' => 'Checkout Extensibility & Upsells',
                'desc' => 'Customize the Shopify Plus checkout experience with custom post-purchase upsells, delivery instructions, loyalty rewards, and tax rules.',
                'chips' => ['Shopify Plus', 'Checkout UI', 'Post-Purchase', 'Klaviyo'],
                'icon' => '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>'
            ],
            [
                'title' => 'Store Migration to Shopify / Plus',
                'desc' => 'Migrate your catalog, customer history, orders, and SEO URLs smoothly from WooCommerce, Magento, BigCommerce, or custom platforms.',
                'chips' => ['Data Migration', '301 Redirects', 'Zero SEO Loss', 'Magento to Shopify'],
                'icon' => '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>'
            ],
            [
                'title' => 'Headless Commerce with Hydrogen & Next.js',
                'desc' => 'Supercharge store speed and brand experience by decoupling the frontend using Shopify Storefront API and Hydrogen/Next.js.',
                'chips' => ['Hydrogen', 'Storefront API', 'Next.js', 'Edge Caching'],
                'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'
            ],
            [
                'title' => 'Store Speed Optimization & Core Web Vitals',
                'desc' => 'Audit and eliminate unneeded tracking scripts, optimize image delivery, defer render-blocking JavaScript, and achieve 90+ PageSpeed scores.',
                'chips' => ['PageSpeed', 'Core Web Vitals', 'Lazy Load', 'Asset Minification'],
                'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
            ]
        ],
        'skills' => ['Shopify', 'Shopify Plus', 'Liquid', 'Online Store 2.0', 'GraphQL Admin API', 'Storefront API', 'JavaScript', 'HTML5 / CSS3', 'Hydrogen', 'Klaviyo Sync'],
        'tech' => ['Shopify', 'Liquid', 'Shopify APIs', 'JavaScript', 'HTML / CSS', 'Node.js', 'Klaviyo', 'Payment gateways'],
        'faqs' => [
            ['Can your developers build custom Shopify apps for our business?', 'Yes. Our developers build secure, scalable private Shopify apps utilizing Node.js, React (Shopify Polaris), and the Shopify GraphQL Admin API.'],
            ['Do your themes work with Online Store 2.0 features?', 'Yes. All our custom themes are built natively for Online Store 2.0, giving your marketing team complete drag-and-drop freedom over sections and blocks.'],
            ['How do you ensure store speed doesn’t suffer when adding apps?', 'We review app code impacts, utilize app embeds instead of dirty theme injections, lazy-load non-essential third-party scripts, and optimize all asset bundles.'],
            ['Can you help migrate our existing store to Shopify without losing SEO rankings?', 'Yes. We preserve all URL structures with comprehensive 301 redirect mappings, migrate all customer and order histories, and audit SEO tags prior to launch.'],
            ['Can I hire a Shopify developer for ongoing monthly store maintenance?', 'Yes. Many of our e-commerce clients retain dedicated developers on part-time or full-time monthly retainers for ongoing CRO tweaks, seasonal promos, and new features.']
        ]
    ],

    'hire-wordpress-developers' => [
        'name' => 'WordPress Developers',
        'single' => 'WordPress developer',
        'badge' => 'CMS & WooCommerce Engineers',
        'tagline' => 'Get custom themes, bespoke plugins and ultra-fast, secure WordPress websites built by dedicated engineering experts.',
        'meta_title' => 'Hire Dedicated WordPress Developers | Custom WP & WooCommerce Experts',
        'meta_desc' => 'Hire dedicated WordPress developers from Mithila Softech. Build bespoke themes, custom Gutenberg blocks, WooCommerce stores, and secure enterprise portals.',
        'stats' => [
            ['num' => '95+', 'label' => 'Google PageSpeed Score'],
            ['num' => '48h', 'label' => 'Developer Allocation Time'],
            ['num' => '300+', 'label' => 'Custom WP Sites Delivered'],
            ['num' => '100%', 'label' => 'Clean Code, Zero Bloat']
        ],
        'intro_eyebrow' => 'Bespoke WordPress Engineering',
        'intro_heading' => 'Elevate Your Digital Brand with <span>Dedicated WordPress & WooCommerce Experts</span>',
        'intro_p1' => 'Pre-made commercial WordPress themes and excessive plugins bloat code, create security vulnerabilities, and severely degrade load speed. Our dedicated WordPress developers build completely custom, lightweight themes, bespoke Gutenberg blocks, and custom plugins tailored specifically to your business requirements.',
        'intro_p2' => 'From corporate enterprise portals and high-traffic editorial publications to high-converting WooCommerce stores, our developers write clean, secure PHP that achieves 90+ PageSpeed scores, rigorous SEO compliance, and effortless editorial control.',
        'impact_heading' => 'The Mithila Softech WordPress Advantage',
        'impact_items' => [
            '100% Custom Theme Engineering from Figma/XD with zero commercial bloat',
            'Bespoke Gutenberg Editor Blocks built with React & Advanced Custom Fields (ACF Pro)',
            'Enterprise Security Hardening with automated malware scans & firewall rules',
            'High-Concurrency Caching with Redis Object Cache, Varnish & Cloudflare CDN'
        ],
        'capabilities' => [
            [
                'title' => 'Custom Theme Development from Figma',
                'desc' => 'Convert pixel-perfect designs into lightweight, semantic, and responsive WordPress themes engineered for speed and SEO rankings.',
                'chips' => ['Custom Theme', 'PHP 8', 'Sass / Tailwind', 'Semantic HTML'],
                'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>'
            ],
            [
                'title' => 'Custom Gutenberg Blocks & ACF Pro',
                'desc' => 'Empower your editorial team with flexible, modular Gutenberg blocks built with React.js and ACF Pro for effortless content authoring.',
                'chips' => ['Gutenberg', 'ACF Pro', 'React.js', 'Custom Blocks'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ],
            [
                'title' => 'WooCommerce Store Customization',
                'desc' => 'Architect high-converting online stores with custom product configurators, one-page checkouts, subscription billing, and ERP sync.',
                'chips' => ['WooCommerce', 'Payment Gateways', 'Subscriptions', 'Custom Checkout'],
                'icon' => '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>'
            ],
            [
                'title' => 'Custom Plugin Engineering',
                'desc' => 'Develop bespoke, secure WordPress plugins to handle custom calculators, external CRM sync, automated memberships, or proprietary APIs.',
                'chips' => ['Custom Plugins', 'Hooks & Filters', 'WP REST API', 'WP-CLI'],
                'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'
            ],
            [
                'title' => 'WordPress Speed & Core Web Vitals Hardening',
                'desc' => 'Achieve sub-second load times through Redis object caching, database query optimization, CSS/JS minimization, and WebP image generation.',
                'chips' => ['Redis Cache', 'PageSpeed 95+', 'WebP', 'Cloudflare CDN'],
                'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
            ],
            [
                'title' => 'Enterprise Security & Maintenance',
                'desc' => 'Protect your site from brute-force intrusions and malware with automated security audits, role management, safe core updates, and automated backups.',
                'chips' => ['Security Hardening', '2FA', 'Malware Cleanup', 'Daily Backups'],
                'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'
            ]
        ],
        'skills' => ['WordPress', 'WooCommerce', 'ACF Pro', 'Gutenberg Blocks', 'PHP 8.x', 'MySQL', 'WP REST API', 'JavaScript', 'CSS3 / Sass', 'Redis', 'WP-CLI'],
        'tech' => ['WordPress', 'WooCommerce', 'Elementor', 'ACF', 'PHP', 'JavaScript', 'MySQL', 'REST API'],
        'faqs' => [
            ['Do your developers build custom themes or rely on pre-made templates?', 'We specialize in 100% custom-coded themes built from scratch using clean PHP, HTML5, and CSS, ensuring maximum speed, security, and unique brand identity.'],
            ['Can our marketing team edit content easily without breaking the layout?', 'Yes. We utilize custom Gutenberg blocks or ACF Pro flexible content layouts so your marketing staff can create beautiful pages without needing developer assistance.'],
            ['How do you optimize slow WordPress websites?', 'We audit slow database queries, implement Redis object caching, configure server-level caching, optimize assets, and clean up unneeded plugins.'],
            ['Can your developers help with WooCommerce migrations and customizations?', 'Yes. We build complex WooCommerce stores with custom payment gateways, shipping calculators, and inventory integrations.'],
            ['What is the minimum contract period for hiring a dedicated WordPress developer?', 'We offer maximum flexibility: no long-term lock-in contracts. You can hire developers on a monthly full-time, part-time, or hourly milestone basis.']
        ]
    ],

    'hire-ui-ux-designers' => [
        'name' => 'UI/UX Designers',
        'single' => 'UI/UX designer',
        'badge' => 'Product & Interface Designers',
        'tagline' => 'Turn complex ideas into intuitive, visually captivating web and mobile interfaces with dedicated UI/UX designers who think in user journeys.',
        'meta_title' => 'Hire Dedicated UI/UX Designers | Senior Product & Figma Designers',
        'meta_desc' => 'Hire dedicated UI/UX designers from Mithila Softech. Create high-converting web and mobile product designs, interactive Figma prototypes, and scalable design systems.',
        'stats' => [
            ['num' => '45%', 'label' => 'Higher Conversion Rates'],
            ['num' => '100%', 'label' => 'Figma Auto-Layout Ready'],
            ['num' => '500+', 'label' => 'Screens & Flows Designed'],
            ['num' => '0 Bug', 'label' => 'Developer Handoff Accuracy']
        ],
        'intro_eyebrow' => 'Human-Centric Product Design',
        'intro_heading' => 'Create High-Converting User Experiences with <span>Dedicated UI/UX Designers</span>',
        'intro_p1' => 'Great software isn’t just about code - it’s about how intuitively it solves user problems. Our dedicated UI/UX designers blend user research, wireframing, cognitive psychology, and visual artistry to create web and mobile experiences that eliminate user friction and maximize engagement.',
        'intro_p2' => 'Working collaboratively in Figma, our designers deliver complete end-to-end design systems with tokens, responsive auto-layout components, and clickable interactive prototypes that make developer handoff seamless and reduce engineering rework by up to 50%.',
        'impact_heading' => 'The Mithila Softech UI/UX Advantage',
        'impact_items' => [
            'Comprehensive User Journey Mapping, Personas & Information Architecture',
            'High-Fidelity Clickable Interactive Prototypes in Figma for stakeholder testing',
            'Scalable Design Systems built with Design Tokens, Variables & Auto-Layout',
            'WCAG 2.1 AA Accessibility & Conversion Rate Optimization (CRO) Best Practices'
        ],
        'capabilities' => [
            [
                'title' => 'User Research & Journey Mapping',
                'desc' => 'Analyze real user behavior, identify friction bottlenecks, craft user personas, and design clear user journey roadmaps.',
                'chips' => ['User Personas', 'Journey Maps', 'Empathy Maps', 'UX Audits'],
                'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
            ],
            [
                'title' => 'Wireframing & Information Architecture',
                'desc' => 'Transform complex business logic into intuitive navigation hierarchies and low-fidelity wireframes that clarify screen flows.',
                'chips' => ['Wireframes', 'UX Flows', 'Site Architecture', 'Storyboards'],
                'icon' => '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>'
            ],
            [
                'title' => 'Web & Mobile App UI Design',
                'desc' => 'Craft modern, pixel-perfect visual interfaces following iOS Human Interface Guidelines and Google Material 3 standards.',
                'chips' => ['Figma', 'Mobile UI', 'Web Apps', 'Material 3 / iOS'],
                'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>'
            ],
            [
                'title' => 'Interactive Figma Prototyping',
                'desc' => 'Deliver realistic, animated clickable prototypes that showcase actual user flows, transitions, and micro-interactions before code is written.',
                'chips' => ['Prototyping', 'Micro-Interactions', 'Smart Animate', 'Usability Testing'],
                'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
            ],
            [
                'title' => 'Enterprise Design Systems & Tokens',
                'desc' => 'Build robust, scalable design systems complete with typography scales, color palettes, spacing variables, and reusable Figma components.',
                'chips' => ['Design Tokens', 'Auto-Layout', 'Component Library', 'Variables'],
                'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
            ],
            [
                'title' => 'Flawless Developer Handoff',
                'desc' => 'Provide clean inspectable specs, exported SVG assets, CSS snippet guides, and responsive behavior documentation for your developers.',
                'chips' => ['Dev Mode', 'Asset Export', 'CSS Guides', 'Zero Guesswork'],
                'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>'
            ]
        ],
        'skills' => ['Figma', 'Adobe XD', 'Prototyping', 'Design Systems', 'Auto-Layout', 'Design Tokens', 'User Research', 'Wireframing', 'WCAG 2.1', 'Micro-Interactions'],
        'tech' => ['Figma', 'Adobe XD', 'Photoshop', 'Illustrator', 'Prototyping', 'Design tokens', 'Responsive design', 'Accessibility'],
        'faqs' => [
            ['What design tools do your UI/UX designers use?', 'Our primary and most powerful tool is Figma, allowing real-time cloud collaboration, interactive prototyping, and Dev Mode handoff. We also support Adobe XD and Illustrator.'],
            ['Will the designer create an interactive clickable prototype?', 'Yes. Every project includes high-fidelity clickable Figma prototypes with smart animations so you can test the user experience before writing a single line of code.'],
            ['Do your designers understand frontend developer constraints?', 'Yes. Our designers possess strong knowledge of CSS Flexbox, Grid, mobile viewports, and component states, ensuring all designs are 100% practical to code.'],
            ['Can we hire a designer for an existing product UX audit?', 'Absolutely. Our designers can perform comprehensive UX audits on your existing website or app, highlighting usability hurdles and CRO improvements.'],
            ['How do we review design iterations and provide feedback?', 'You collaborate directly inside Figma with comment pins, attend live video walkthroughs, and receive daily Slack updates throughout your sprint.']
        ]
    ]
];

// Testimonials data
$testimonials = [
    [
        'name' => 'Michael Vance',
        'role' => 'CTO, Global FinTech Solutions (USA)',
        'text' => 'Mithila Softech provided two dedicated senior full-stack developers who integrated into our agile sprint within 48 hours. Code velocity, pull request reviews, and architecture quality exceeded our expectations.',
        'stars' => 5
    ],
    [
        'name' => 'Sarah Jenkins',
        'role' => 'Founder, MedTech Health Care (UK)',
        'text' => 'Hiring Flutter and Node.js developers from Mithila Softech allowed us to launch our telehealth mobile app 3 months ahead of schedule while saving over 60% on development costs. Exceptional communication.',
        'stars' => 5
    ],
    [
        'name' => 'David Robertson',
        'role' => 'Operations Director, Retail Plus (Australia)',
        'text' => 'Their dedicated Laravel and Shopify developers redesigned our entire online storefront and custom back-office ERP. Zero downtime, top-tier communication, and reliable daily code delivery.',
        'stars' => 5
    ]
];

// 2. SHORTCODE / EMBED MODE
if (!empty($hire_embed) || !empty($hire_shortcode)) {
    $embed_role_key = $hire_role ?? null;
    $embed_role = ($embed_role_key && isset($hire_roles[$embed_role_key])) ? $hire_roles[$embed_role_key] : null;
    $embed_heading = $embed_role ? "Hire Dedicated " . htmlspecialchars($embed_role['name']) : "Hire Dedicated Developers";
    $embed_tagline = $embed_role ? htmlspecialchars($embed_role['tagline']) : "Scale your team rapidly with top 1% vetted full-stack, mobile, and web engineers. Flexible hiring: Full-time, Part-time, or Hourly.";
    $embed_link = $embed_role_key ? $embed_role_key : "hire-dedicated-developers";
    ?>
    <div style="background:linear-gradient(135deg,#0b1a38 0%,#153a75 50%,#1D4E9E 100%); border-radius:20px; padding:36px 30px; margin:36px auto; color:#fff; box-shadow:0 14px 36px -10px rgba(29,78,158,0.35); font-family:'Inter',sans-serif; border:1px solid rgba(255,255,255,0.15);">
        <span style="display:inline-block; background:rgba(255,255,255,0.12); color:#67e8f9; border:1px solid rgba(103,232,249,0.3); padding:4px 14px; border-radius:999px; font-size:0.75rem; font-weight:700; text-transform:uppercase; margin-bottom:14px;">Top 1% Vetted Talent &bull; 48-Hour Onboarding</span>
        <h3 style="color:#fff!important; font-size:1.75rem!important; font-weight:800!important; margin:0 0 10px 0!important;"><?php echo $embed_heading; ?></h3>
        <p style="color:rgba(255,255,255,0.85)!important; font-size:1rem!important; margin:0 0 20px 0!important; line-height:1.6!important;"><?php echo $embed_tagline; ?></p>
        <div style="display:flex; flex-wrap:wrap; gap:12px; align-items:center;">
            <a href="<?php echo $embed_link; ?>" style="background:#fff; color:#1D4E9E!important; padding:12px 24px; border-radius:999px; font-weight:700; font-size:0.95rem; text-decoration:none;">Hire Now &rarr;</a>
            <a href="https://calendly.com/mithilasoftech" target="_blank" rel="noopener noreferrer" style="background:rgba(255,255,255,0.12); color:#fff!important; border:1px solid rgba(255,255,255,0.3); padding:12px 22px; border-radius:999px; font-weight:600; font-size:0.95rem; text-decoration:none;">Book a Call</a>
            <a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" style="background:#25D366; color:#fff!important; padding:12px 22px; border-radius:999px; font-weight:700; font-size:0.95rem; text-decoration:none;">WhatsApp</a>
        </div>
    </div>
    <?php
    return;
}

// 3. DETECT REQUESTED ROLE OR SLUG
$raw_slug = $_GET['role'] ?? basename($_SERVER['PHP_SELF'], '.php');
$raw_slug = strtolower(trim(preg_replace('/\.php$/', '', $raw_slug)));

$is_specific_role = false;
$role = null;

if (isset($hire_roles[$raw_slug])) {
    $is_specific_role = true;
    $role = $hire_roles[$raw_slug];
} elseif (strpos($raw_slug, 'react') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-react-developers'];
} elseif (strpos($raw_slug, 'node') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-nodejs-developers'];
} elseif (strpos($raw_slug, 'flutter') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-flutter-developers'];
} elseif (strpos($raw_slug, 'laravel') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-laravel-developers'];
} elseif (strpos($raw_slug, 'shopify') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-shopify-developers'];
} elseif (strpos($raw_slug, 'wordpress') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-wordpress-developers'];
} elseif (strpos($raw_slug, 'ui-ux') !== false || strpos($raw_slug, 'designer') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-ui-ux-designers'];
} elseif (strpos($raw_slug, 'php') !== false) {
    $is_specific_role = true;
    $role = $hire_roles['hire-php-developers'];
}

$activePage = 'hire';
$hx_phone = '+91 99719 21698';
$hx_email = 'info@mithilasoftech.com';
$hx_wa = 'https://wa.me/919971921698';

if ($is_specific_role) {
    $page_title = $role['meta_title'];
    $meta_desc = $role['meta_desc'];
    $meta_keywords = "hire dedicated developers, hire remote developers India, hire React developers, hire Laravel developers, hire Node.js developers, hire Flutter developers, hire PHP developers, dedicated development team";
    $canonical_slug = array_search($role, $hire_roles);
    $canonical_url = "https://www.mithilasoftech.com/" . $canonical_slug;
    $current_role_name = $role['name'];
} else {
    $page_title = "Hire Dedicated Developers India | Top Developers - Mithila Softech";
    $meta_desc = "Hire top dedicated developers in India from Mithila Softech. Get best full-stack, mobile, frontend and backend developers with flexible hiring models.";
    $meta_keywords = "hire dedicated developers, dedicated developers India, hire developers India, dedicated development team, top developers India, best software developers";
    $canonical_url = "https://www.mithilasoftech.com/hire-dedicated-developers";
    $current_role_name = "Dedicated Developers";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">

    <!-- Preload / Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css?v=2.2">

    <style>
        /* ==========================================================================
           MITHILA SOFTECH DESIGN SYSTEM - HIRE PORTAL & DEDICATED DEVELOPERS
           Theme: Royal Blue (#1D4E9E) & Vibrant Purple (#9837d4)
           Identical to software-testing.php & core website design system
           ========================================================================== */

        :root {
            --qa-primary: #1D4E9E;
            --qa-primary-dark: #153a75;
            --qa-secondary: #9837d4;
            --qa-secondary-dark: #7528a8;
            --qa-accent: #E31E24;
            --qa-text: #0f172a;
            --qa-muted: #64748b;
            --qa-card: #ffffff;
            --qa-bg-alt: #F8F9FA;
            --qa-line: rgba(29, 78, 158, 0.12);
            --qa-shadow: 0 10px 25px -4px rgba(29, 78, 158, 0.08);
            --qa-shadow-hover: 0 24px 50px -8px rgba(29, 78, 158, 0.16);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--qa-text);
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* --- GLOBAL CONTENT SECTIONS & CONTAINER --- */
        .content-section {
            padding: 88px 0;
            position: relative;
        }
        .content-section.bg-alt {
            background-color: var(--qa-bg-alt);
        }
        .content-container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Ambient Orbs */
        .page-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.4;
            z-index: 0;
            pointer-events: none;
            animation: floatOrb 10s ease-in-out infinite;
        }
        .orb-1 {
            width: 400px;
            height: 400px;
            background: rgba(29, 78, 158, 0.15);
            top: 5%;
            right: -100px;
        }
        .orb-2 {
            width: 350px;
            height: 350px;
            background: rgba(152, 55, 212, 0.12);
            bottom: 15%;
            left: -100px;
            animation-delay: -5s;
        }
        @keyframes floatOrb {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }

        /* --- TRUST STATS STRIP --- */
        .stats-strip-container {
            margin-bottom: 70px;
        }
        .qa-stats-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            background: linear-gradient(135deg, rgba(29, 78, 158, 0.05) 0%, rgba(152, 55, 212, 0.05) 100%);
            border: 1px solid var(--qa-line);
            border-radius: 24px;
            padding: 32px 24px;
            text-align: center;
            box-shadow: var(--qa-shadow);
        }
        .qa-stat-item .stat-num {
            display: block;
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--qa-primary);
            line-height: 1.1;
            margin-bottom: 6px;
        }
        .qa-stat-item .stat-label {
            font-size: 0.88rem;
            color: var(--qa-muted);
            font-weight: 600;
            line-height: 1.4;
        }

        /* --- SECTION HEADERS --- */
        .section-head {
            text-align: center;
            margin-bottom: 56px;
        }
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            color: var(--qa-primary);
            background: rgba(29, 78, 158, 0.08);
            padding: 6px 18px;
            border-radius: 100px;
            border: 1px solid rgba(29, 78, 158, 0.16);
            margin-bottom: 14px;
        }
        .section-title {
            font-size: clamp(2.2rem, 3.8vw, 3.2rem);
            font-weight: 800;
            line-height: 1.15;
            color: var(--qa-text);
            margin: 0 0 16px 0;
            letter-spacing: -0.02em;
        }
        .section-title span, .gradient-text {
            background: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .section-subtitle {
            font-size: 1.08rem;
            color: var(--qa-muted);
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* --- BUTTONS --- */
        .button-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-primary-dark) 100%);
            color: #ffffff !important;
            font-weight: 700;
            font-size: 1rem;
            padding: 14px 32px;
            border-radius: 999px;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 24px rgba(29, 78, 158, 0.25);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            text-decoration: none;
        }
        .button-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 14px 32px rgba(29, 78, 158, 0.35);
            color: #ffffff !important;
        }
        .button-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: transparent;
            color: var(--qa-primary) !important;
            border: 2px solid var(--qa-primary);
            font-weight: 700;
            font-size: 0.98rem;
            padding: 12px 28px;
            border-radius: 999px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .button-outline:hover {
            background: var(--qa-primary);
            color: #ffffff !important;
            transform: translateY(-2px);
        }

        /* Button Shine Effect */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg);
            animation: shine 3.5s infinite;
        }
        @keyframes shine {
            0% { left: -100%; }
            20% { left: 200%; }
            100% { left: 200%; }
        }

        /* --- INTRO GRID --- */
        .intro-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: flex-start;
            margin-bottom: 70px;
        }
        .intro-text h2 {
            font-size: clamp(2rem, 3.4vw, 2.75rem);
            font-weight: 800;
            line-height: 1.2;
            color: var(--qa-text);
            margin: 0 0 20px 0;
        }
        .intro-text p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--qa-muted);
            margin: 0 0 20px 0;
        }
        .skills-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 20px 0 28px;
        }
        .skill-pill {
            background: rgba(29, 78, 158, 0.08);
            color: var(--qa-primary);
            border: 1px solid rgba(29, 78, 158, 0.2);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.84rem;
            font-weight: 700;
            transition: all 0.25s ease;
        }
        .skill-pill:hover {
            background: var(--qa-primary);
            color: #ffffff;
            transform: translateY(-2px);
        }


        /* --- IGEX-STYLE GET FREE CONSULTATION FORM --- */
        .hire-form-wrapper {
            position: relative;
            z-index: 5;
        }

        #hire-developer-form, .ig-consultation-form-card {
            background: #ffffff;
            border: 5px solid #ffffff;
            border-radius: 24px;
            padding: 32px 28px;
            box-shadow: 0 20px 45px -10px rgba(29, 78, 158, 0.22), 0 0 0 1px rgba(29, 78, 158, 0.08);
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #hire-developer-form:hover, .ig-consultation-form-card:hover {
            box-shadow: 0 24px 50px -8px rgba(29, 78, 158, 0.28), 0 0 0 1px rgba(29, 78, 158, 0.12);
        }

        #hire-developer-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-secondary) 100%);
        }

        .hire-form-head {
            margin-bottom: 4px;
        }

        .hire-form-head .form-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 4px 0;
            letter-spacing: -0.01em;
            line-height: 1.2;
        }

        .hire-form-head .form-subtitle {
            font-size: 0.85rem;
            color: var(--qa-muted);
            margin: 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .hire-form-head .form-subtitle svg {
            color: #10b981;
            flex-shrink: 0;
        }

        .input-field {
            width: 100%;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-size: 0.92rem;
            font-family: inherit;
            color: var(--qa-text);
            background-color: #f8fafc;
            transition: all 0.25s ease;
            box-sizing: border-box;
        }

        .form-control:focus, .form-select:focus {
            outline: none;
            border-color: var(--qa-primary);
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(29, 78, 158, 0.14);
        }

        .hire-form-wrapper .d-flex {
            display: flex;
            flex-wrap: nowrap;
            gap: 8px;
            align-items: stretch;
        }

        .hire-form-wrapper .d-flex .form-control {
            flex: 1 1 auto;
            min-width: 0;
            width: auto;
        }

        .ig-countryCode {
            width: 110px;
            flex-shrink: 0;
            font-weight: 600;
            padding-right: 8px;
        }

        .btn-hire-developers {
            width: 100%;
            padding: 13px 20px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-primary-dark) 100%);
            color: #ffffff !important;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 24px rgba(29, 78, 158, 0.25);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            margin-top: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-hire-developers:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(29, 78, 158, 0.35);
            color: #ffffff !important;
        }

        .igex-inquiry-response-output {
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            line-height: 1.45;
            text-align: center;
            margin-top: 4px;
        }

        .igex-inquiry-response-output.success {
            background: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .igex-inquiry-response-output.error {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .spinner-border {
            display: inline-block;
            width: 1.3rem;
            height: 1.3rem;
            vertical-align: text-bottom;
            border: 0.2em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border .75s linear infinite;
            margin: 8px auto 0;
        }

        @keyframes spinner-border {
            to { transform: rotate(360deg); }
        }

        .d-none {
            display: none !important;
        }

        /* --- SERVICE FEATURES GRID --- */
        .service-features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
            margin-bottom: 60px;
        }
        .feature-card {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            padding: 32px 26px;
            box-shadow: var(--qa-shadow);
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 18px;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-primary-dark) 100%);
        }
        .feature-card:nth-child(even) {
            --hover-grad: linear-gradient(135deg, var(--qa-secondary) 0%, var(--qa-secondary-dark) 100%);
        }
        .feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--hover-grad);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--qa-shadow-hover);
            border-color: transparent;
        }
        .feature-card:hover::before {
            opacity: 1;
        }
        .card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .feature-icon {
            width: 58px;
            height: 58px;
            border-radius: 16px;
            background: rgba(29, 78, 158, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--qa-primary);
            transition: all 0.35s ease;
        }
        .feature-card:nth-child(even) .feature-icon {
            background: rgba(152, 55, 212, 0.08);
            color: var(--qa-secondary);
        }
        .feature-card:hover .feature-icon {
            background: rgba(255, 255, 255, 0.2) !important;
            color: #ffffff !important;
            transform: scale(1.1) rotate(-5deg);
        }
        .card-arrow {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--qa-muted);
            transition: all 0.35s ease;
        }
        .feature-card:hover .card-arrow {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
            transform: translate(3px, -3px);
        }
        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 10px 0;
            transition: color 0.35s ease;
        }
        .feature-card p {
            font-size: 0.95rem;
            color: var(--qa-muted);
            line-height: 1.65;
            margin: 0 0 14px 0;
            transition: color 0.35s ease;
        }
        .card-tech-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        .card-chip {
            font-size: 0.74rem;
            font-weight: 700;
            background: var(--qa-bg-alt);
            color: #475569;
            padding: 4px 10px;
            border-radius: 6px;
            border: 1px solid var(--qa-line);
            transition: all 0.35s ease;
        }
        .feature-card:hover .card-chip {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.3);
        }
        .feature-card:hover h3 {
            color: #ffffff;
        }
        .feature-card:hover p {
            color: rgba(255, 255, 255, 0.88);
        }

        /* --- ENGAGEMENT MODELS --- */
        .comparison-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            margin-bottom: 50px;
        }
        .comp-card {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 24px;
            padding: 36px 30px;
            box-shadow: var(--qa-shadow);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            position: relative;
        }
        .comp-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--qa-shadow-hover);
        }
        .comp-card.highlight {
            border: 2px solid var(--qa-primary);
            background: linear-gradient(180deg, #ffffff 0%, rgba(29, 78, 158, 0.03) 100%);
        }
        .comp-card-badge {
            display: inline-block;
            font-size: 0.82rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 6px 14px;
            border-radius: 8px;
            margin-bottom: 18px;
        }
        .comp-card-badge.blue {
            background: rgba(29, 78, 158, 0.1);
            color: var(--qa-primary);
        }
        .comp-card-badge.purple {
            background: rgba(152, 55, 212, 0.1);
            color: var(--qa-secondary);
        }
        .comp-card-badge.green {
            background: rgba(16, 185, 129, 0.1);
            color: #059669;
        }
        .comp-card h3 {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 12px 0;
        }
        .comp-card p {
            font-size: 0.98rem;
            color: var(--qa-muted);
            line-height: 1.65;
            margin: 0 0 24px 0;
        }

        /* --- 4-STAGE PROCESS --- */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 60px;
        }
        .process-card {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            padding: 34px 24px;
            box-shadow: var(--qa-shadow);
            position: relative;
            z-index: 1;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 16px;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-primary-dark) 100%);
        }
        .process-card:nth-child(even) {
            --hover-grad: linear-gradient(135deg, var(--qa-secondary) 0%, var(--qa-secondary-dark) 100%);
        }
        .process-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--hover-grad);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }
        .process-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--qa-shadow-hover);
            border-color: transparent;
        }
        .process-card:hover::before {
            opacity: 1;
        }
        .process-step-num {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--hover-grad);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 16px rgba(29, 78, 158, 0.2);
            transition: transform 0.35s ease, background 0.35s ease;
        }
        .process-card:hover .process-step-num {
            background: rgba(255, 255, 255, 0.25) !important;
            transform: scale(1.1) rotate(-8deg);
        }
        .process-card h3 {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0;
            transition: color 0.35s ease;
        }
        .process-card p {
            font-size: 0.95rem;
            color: var(--qa-muted);
            line-height: 1.65;
            margin: 0;
            transition: color 0.35s ease;
        }
        .process-card:hover h3 {
            color: #ffffff;
        }
        .process-card:hover p {
            color: rgba(255, 255, 255, 0.88);
        }

        /* --- WHY CHOOSE LIST --- */
        .why-choose-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-bottom: 50px;
        }
        .why-item {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            padding: 34px 30px;
            box-shadow: var(--qa-shadow);
            border-left: 5px solid var(--qa-primary);
            position: relative;
            z-index: 1;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease;
            --hover-grad: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-primary-dark) 100%);
        }
        .why-item:nth-child(even) {
            border-left-color: var(--qa-secondary);
            --hover-grad: linear-gradient(135deg, var(--qa-secondary) 0%, var(--qa-secondary-dark) 100%);
        }
        .why-item::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--hover-grad);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }
        .why-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--qa-shadow-hover);
            border-left-color: transparent;
        }
        .why-item:hover::before {
            opacity: 1;
        }
        .why-item h4 {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 12px 0;
            transition: color 0.35s ease;
        }
        .why-item p {
            font-size: 0.98rem;
            color: var(--qa-muted);
            line-height: 1.7;
            margin: 0;
            transition: color 0.35s ease;
        }
        .why-item:hover h4 {
            color: #ffffff;
        }
        .why-item:hover p {
            color: rgba(255, 255, 255, 0.88);
        }

        /* --- TECH STACK / OTHER SPECIALISTS GRID --- */
        .tech-stack-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 32px;
        }
        .tech-item {
            position: relative;
            z-index: 1;
            overflow: hidden;
            padding: 24px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: var(--qa-text);
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            box-shadow: var(--qa-shadow);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.4s ease, color 0.3s ease;
            text-align: center;
            line-height: 1.4;
            text-decoration: none;
        }
        .tech-item::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--qa-primary) 0%, var(--qa-secondary) 100%);
            opacity: 0;
            transition: opacity 0.4s ease, transform 0.4s ease;
            transform: scale(0.5);
            z-index: -1;
            border-radius: 20px;
        }
        .tech-item:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: var(--qa-shadow-hover);
            border-color: transparent;
            color: #ffffff !important;
        }
        .tech-item:hover::before {
            opacity: 1;
            transform: scale(1.5);
        }
        .tech-item svg {
            width: 32px;
            height: 32px;
            stroke: currentColor;
            color: var(--qa-primary);
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .tech-item:hover svg {
            transform: scale(1.1);
            color: #ffffff;
            stroke: #ffffff;
        }

        /* --- RESPONSIVE BREAKPOINTS --- */
        @media (max-width: 1200px) {
            .service-features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .tech-stack-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            .process-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 991px) {
            .qa-stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }
            .intro-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .comparison-grid {
                grid-template-columns: 1fr;
            }
            .why-choose-list {
                grid-template-columns: 1fr;
            }
            .tech-stack-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .content-section {
                padding: 60px 0;
            }
            .qa-stats-bar {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            .service-features-grid {
                grid-template-columns: 1fr;
            }
            .process-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Services tiles: 3 per row */
        .tech-stack-grid.tech-stack-grid-3 { grid-template-columns: repeat(3, 1fr); }
        @media (max-width: 991px) { .tech-stack-grid.tech-stack-grid-3 { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 640px) { .tech-stack-grid.tech-stack-grid-3 { grid-template-columns: 1fr; } }
        /* Hiring models (IGEX-style) */
        .hire-model-card { text-align: center; display: flex; flex-direction: column; align-items: center; gap: 14px; }
        .hire-model-card h3 { margin: 0; }
        .hire-model-hours { font-size: 2.2rem; font-weight: 800; color: var(--qa-primary); line-height: 1.1; }
        .hire-model-hours small { display: block; font-size: 0.95rem; font-weight: 600; color: var(--qa-muted); margin-top: 4px; }
        .hire-model-total { font-size: 1rem; font-weight: 700; color: var(--qa-text); background: var(--qa-bg-alt); border: 1px solid var(--qa-line); border-radius: 999px; padding: 6px 18px; margin-bottom: 10px; }
        .hire-model-card .button-outline, .hire-model-card .button-primary { margin-top: auto; }
        .hire-benefits { margin-top: 56px; background: var(--qa-bg-alt); border: 1px solid var(--qa-line); border-radius: 24px; padding: 40px 32px; }
        .hire-benefits-title { text-align: center; font-size: 1.5rem; font-weight: 800; color: var(--qa-text); margin: 0 0 28px; }
        .hire-benefits-list { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px 24px; }
        .hire-benefits-list li { display: flex; align-items: center; gap: 10px; font-weight: 600; color: #334155; font-size: 0.97rem; }
        .hire-benefits-list li svg { color: #10b981; flex-shrink: 0; }
        @media (max-width: 991px) { .hire-benefits-list { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 640px) { .hire-benefits-list { grid-template-columns: 1fr; } .hire-benefits { padding: 28px 20px; } }

        /* --- EXTRA RESPONSIVE FIXES (tablet and mobile) --- */
        img, svg, video { max-width: 100%; }
        .form-control, .form-select { min-width: 0; box-sizing: border-box; }

        /* Keep the screen static on mobile: no sideways scrolling or wobble */
        html { overflow-x: hidden; max-width: 100%; -webkit-text-size-adjust: 100%; }
        @media (max-width: 991px) {
            html, body {
                overflow-x: hidden;
                max-width: 100%;
                overscroll-behavior-x: none;
            }
            body { position: relative; width: 100%; }
            main, section, .content-section, .content-container, footer { max-width: 100%; }
            .content-section { overflow-x: clip; }
            .tech-stack-grid > *, .service-features-grid > *, .comparison-grid > *,
            .process-grid > *, .why-choose-list > *, .intro-grid > * { min-width: 0; }
            p, h1, h2, h3, h4, li { overflow-wrap: anywhere; }
        }

        /* Select dropdowns: consistent look with custom arrow */
        .form-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer;
            padding-right: 38px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%231d4e9e' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'><polyline points='6 9 12 15 18 9'/></svg>");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 14px;
        }
        .form-select option { color: #0f172a; background: #ffffff; padding: 10px; }
        .ig-countryCode.form-select { padding-right: 28px; background-position: right 10px center; }

        /* Custom dropdown (replaces native select list; the real select stays hidden for the form) */
        .cs-wrap { position: relative; }
        .cs-wrap.cs-country { width: 110px; flex-shrink: 0; }
        .cs-wrap:not(.cs-country) { width: 100%; }
        .cs-wrap select.form-select {
            position: absolute; inset: 0; width: 100%; height: 100%;
            opacity: 0; pointer-events: none; z-index: -1;
        }
        .cs-btn {
            width: 100%; min-height: 46px; display: flex; align-items: center; justify-content: space-between; gap: 8px;
            padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 12px; background: #f8fafc;
            font: inherit; font-size: 0.92rem; color: var(--qa-text); cursor: pointer; text-align: left;
            box-sizing: border-box; transition: all 0.25s ease;
        }
        .cs-country .cs-btn { padding: 11px 10px; font-weight: 600; }
        .cs-btn .cs-label { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .cs-btn svg { flex-shrink: 0; color: var(--qa-primary); transition: transform 0.25s ease; }
        .cs-wrap.is-open .cs-btn { border-color: var(--qa-primary); background: #ffffff; box-shadow: 0 0 0 3px rgba(29, 78, 158, 0.14); }
        .cs-wrap.is-open .cs-btn svg { transform: rotate(180deg); }
        .cs-list {
            display: none; position: absolute; left: 0; top: calc(100% + 6px); z-index: 50;
            min-width: 100%; max-height: 240px; overflow-y: auto; margin: 0; padding: 6px; list-style: none;
            background: #ffffff; border: 1px solid var(--qa-line); border-radius: 12px;
            box-shadow: 0 16px 36px -8px rgba(29, 78, 158, 0.28); -webkit-overflow-scrolling: touch;
        }
        .cs-country .cs-list { min-width: 130px; }
        .cs-wrap.is-open .cs-list { display: block; animation: csOpen 0.18s ease; }
        .cs-list li {
            padding: 10px 12px; border-radius: 8px; font-size: 0.92rem; color: var(--qa-text);
            cursor: pointer; white-space: nowrap;
        }
        .cs-list li:hover, .cs-list li.is-focus { background: rgba(29, 78, 158, 0.08); }
        .cs-list li.is-selected { background: rgba(29, 78, 158, 0.12); color: var(--qa-primary); font-weight: 700; }
        @keyframes csOpen { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 640px) {
            .cs-btn { font-size: 16px; }
            .cs-wrap.cs-country { width: 92px; }
            .cs-list { max-height: 220px; }
            .cs-list li { padding: 12px; font-size: 16px; }
        }

        @media (max-width: 991px) {
            .content-section { padding: 70px 0; }
            .page-orb { display: none; }
            .hire-form-wrapper { width: 100%; max-width: 560px; margin: 0 auto; }
            .section-head { margin-bottom: 36px; }
            .comparison-grid { gap: 20px; }
            .why-choose-list { gap: 20px; }
        }

        @media (max-width: 640px) {
            .content-section { padding: 48px 0; }
            .content-container { padding: 0 16px; }
            .section-title { font-size: clamp(1.6rem, 7vw, 2rem); }
            .section-subtitle { font-size: 0.98rem; }
            .intro-grid { gap: 28px; margin-bottom: 44px; }
            .intro-text h2 { font-size: clamp(1.5rem, 6.5vw, 1.9rem); }
            .intro-text p { font-size: 0.98rem; line-height: 1.7; }
            .stats-strip-container { margin-bottom: 44px; }
            .qa-stat-item { padding: 20px 16px; }
            .qa-stat-item .stat-num { font-size: 1.8rem; }
            #hire-developer-form, .ig-consultation-form-card { padding: 24px 16px; border-radius: 18px; }
            .hire-form-head .form-title { font-size: 1.25rem; }
            .hire-form-head .form-subtitle { align-items: flex-start; font-size: 0.8rem; }
            .ig-countryCode { width: 92px; }
            /* 16px stops iOS from zooming the page when a field is tapped */
            .form-control, .form-select { font-size: 16px; min-height: 46px; }
            .button-primary, .button-outline { width: 100%; justify-content: center; text-align: center; box-sizing: border-box; }
            .hire-model-hours { font-size: 1.8rem; }
            .skill-pill { font-size: 0.78rem; padding: 5px 11px; }
        }

        @media (max-width: 380px) {
            .content-container { padding: 0 12px; }
            #hire-developer-form, .ig-consultation-form-card { padding: 20px 12px; }
            .ig-countryCode { width: 82px; padding-left: 8px; }
        }
    </style>
</head>
<body>

<?php include 'headerhome.php'; ?>

<!-- ==========================================
     STANDARD HERO SECTION (MATCHES ALL PAGES VIA heropage.php)
     ========================================== -->
<?php 
if ($is_specific_role) {
    $hero_badge = '👨‍💻 &nbsp; ' . htmlspecialchars($role['badge']);
    $hero_title = '<span class="hero-headline-bold"><span class="hero-headline-accent">Hire Dedicated</span> ' . htmlspecialchars($role['name']) . '</span>';
    $hero_subtext = htmlspecialchars($role['tagline']);
    $hero_bg_image = 'assets/image/recruitment.png';
} else {
    $hero_badge = '👨‍💻 &nbsp; Dedicated Engineering Teams';
    $hero_title = '<span class="hero-headline-bold"><span class="hero-headline-accent">Hire Dedicated</span> Developers</span>';
    $hero_subtext = 'Scale your product roadmap rapidly with top 1% vetted full-stack, mobile, frontend, and backend software engineers who work exclusively for you.';
    $hero_bg_image = 'assets/image/recruitment.png';
}
include 'heropage.php'; 
?>

<!-- ==========================================
     SECTION 2: TRUST STATS & STRATEGIC OVERVIEW
     ========================================== -->
<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="content-container" style="position: relative; z-index: 2;">
        
        <!-- Trust Stats Strip -->
        <div class="stats-strip-container">
            <div class="qa-stats-bar">
                <?php 
                $stats_to_display = $is_specific_role ? $role['stats'] : [
                    ['num' => '98.7%', 'label' => 'Project Success Rate'],
                    ['num' => '48h', 'label' => 'Developer Matching Time'],
                    ['num' => '50+', 'label' => 'Senior Tech Specialists'],
                    ['num' => '100%', 'label' => 'IP & NDA Protection']
                ];
                foreach ($stats_to_display as $st): ?>
                <div class="qa-stat-item">
                    <span class="stat-num"><?php echo htmlspecialchars($st['num']); ?></span>
                    <span class="stat-label"><?php echo htmlspecialchars($st['label']); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Intro Grid (Split 2-Column: Narrative & Consultation Card) -->
        <div class="intro-grid">
            <div class="intro-text">
                <span class="eyebrow"><?php echo $is_specific_role ? htmlspecialchars($role['intro_eyebrow']) : 'Top Tier Engineering Talent'; ?></span>
                <h2><?php echo $is_specific_role ? $role['intro_heading'] : 'Accelerate Your Product Velocity with <span>Dedicated Engineering Squads</span>'; ?></h2>
                <p>
                    <?php echo $is_specific_role ? htmlspecialchars($role['intro_p1']) : 'In today’s fast-moving software economy, recruiting in-house engineers takes months, inflates payroll overhead, and slows down your feature releases. At Mithila Softech, we remove friction by providing pre-vetted, senior full-stack, mobile, frontend, and backend developers who seamlessly embed into your agile sprints.'; ?>
                </p>
                <p>
                    <?php echo $is_specific_role ? htmlspecialchars($role['intro_p2']) : 'You get direct day-to-day management through Slack, Jira, and GitHub, transparent daily commits, and the agility to scale your engineering team up or down on demand without long-term recruitment lock-in.'; ?>
                </p>

                <?php if ($is_specific_role && !empty($role['skills'])): ?>
                <div class="skills-wrap">
                    <?php foreach ($role['skills'] as $sk): ?>
                    <span class="skill-pill">✓ <?php echo htmlspecialchars($sk); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div style="display:flex; flex-wrap:wrap; align-items:center; gap:16px; margin-top:28px;">
                    <a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="button-outline" style="border-color:#25D366; color:#25D366!important;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        Chat Directly on WhatsApp
                    </a>
                    <span style="font-size:0.9rem; color:var(--qa-muted); font-weight:600;">⚡ Average response: &lt; 15 mins</span>
                </div>
            </div>

            <!-- Right Column: IGEX-Style "Get Free Consultation" Form -->
            <div class="hire-form-wrapper" id="consultation">
                <form id="hire-developer-form" onsubmit="handleHireFormSubmit(event)">
                    <div class="hire-form-head">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <div class="form-subtitle">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Fast 24-Hour Developer Matching &bull; 100% Confidential</span>
                        </div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="your_name" value="" class="form-control" id="YourName" placeholder="Rahul Sharma" required>
                    </div>

                    <div class="input-field">
                        <input type="email" name="your_email" value="" class="form-control" id="YourEmail" placeholder="rahulsharma@gmail.com" required>
                    </div>

                    <div class="input-field">
                        <div class="d-flex gap-2">
                            <select name="countryCode" id="countryCode" class="form-select ig-countryCode">
                                <option data-countryCode="IN" value="91" selected>+91</option>
                                <option data-countryCode="GB" value="44">+44</option>
                                <option data-countryCode="US" value="1">+1</option>
                                <option data-countryCode="AU" value="61">+61</option>
                                <option data-countryCode="AE" value="971">+971</option>
                                <option data-countryCode="CA" value="1">+1</option>
                                <option data-countryCode="DE" value="49">+49</option>
                                <option data-countryCode="FR" value="33">+33</option>
                                <option data-countryCode="SG" value="65">+65</option>
                                <option data-countryCode="SA" value="966">+966</option>
                                <option data-countryCode="QA" value="974">+974</option>
                                <option data-countryCode="NL" value="31">+31</option>
                                <option data-countryCode="CH" value="41">+41</option>
                                <option data-countryCode="IE" value="353">+353</option>
                                <option data-countryCode="NZ" value="64">+64</option>
                                <option data-countryCode="ZA" value="27">+27</option>
                                <option data-countryCode="MY" value="60">+60</option>
                                <option data-countryCode="PH" value="63">+63</option>
                                <option data-countryCode="JP" value="81">+81</option>
                                <option data-countryCode="ES" value="34">+34</option>
                                <option data-countryCode="IT" value="39">+39</option>
                                <option data-countryCode="SE" value="46">+46</option>
                                <option data-countryCode="NO" value="47">+47</option>
                                <option data-countryCode="DK" value="45">+45</option>
                                <option data-countryCode="BR" value="55">+55</option>
                                <option data-countryCode="NP" value="977">+977</option>
                                <option data-countryCode="BD" value="880">+880</option>
                                <option data-countryCode="LK" value="94">+94</option>
                            </select>
                            <input type="tel" name="phone_number" value="" class="form-control flex-grow-1" id="PhoneNumber" placeholder="99719 21698" required>
                        </div>
                    </div>

                    <div class="input-field">
                        <select name="hireDevelopers" id="hireDevelopers" class="form-select" required>
                            <option value="0" <?php echo !$is_specific_role ? 'selected' : ''; ?>>Select hire developers</option>
                            <option value="Hire PHP Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-php-developers') ? 'selected' : ''; ?>>Hire PHP Developers</option>
                            <option value="Hire Laravel Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-laravel-developers') ? 'selected' : ''; ?>>Hire Laravel Developers</option>
                            <option value="Hire WordPress Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-wordpress-developers') ? 'selected' : ''; ?>>Hire WordPress Developers</option>
                            <option value="Hire Flutter Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-flutter-developers') ? 'selected' : ''; ?>>Hire Flutter Developers</option>
                            <option value="Hire React Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-react-developers') ? 'selected' : ''; ?>>Hire React Developers</option>
                            <option value="Hire Shopify Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-shopify-developers') ? 'selected' : ''; ?>>Hire Shopify Developers</option>
                            <option value="Hire UI/UX Designer" <?php echo ($is_specific_role && $raw_slug === 'hire-ui-ux-designers') ? 'selected' : ''; ?>>Hire UI/UX Designer</option>
                            <option value="Hire Node.js Developers" <?php echo ($is_specific_role && $raw_slug === 'hire-nodejs-developers') ? 'selected' : ''; ?>>Hire Node.js Developers</option>
                            <option value="Hire Dedicated Developers" <?php echo (!$is_specific_role) ? 'selected' : ''; ?>>Hire Dedicated Developers</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <select name="hireDeveloperType" id="hireDeveloperType" class="form-select" required>
                            <option value="0" selected>Choose Hiring Model</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Hourly Hire">Hourly Hire</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="text" name="project_scope" class="form-control" placeholder="Brief project scope or requirements (optional)...">
                    </div>

                    <input type="submit" id="user_developer_btn" value="Hire Developers" class="btn btn-primary-600 btn-hire-developers w-100 border-0 btn-shine">
                    <div class="spinner-border text-primary mt-2 d-none" id="loading" role="status"></div>
                    <div class="igex-inquiry-response-output" id="inquiry-response-output" role="alert" style="display:none"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 3: ROLE CAPABILITIES & EXPERTISE (FEATURE CARDS)
     ========================================== -->
<section class="content-section bg-alt" id="capabilities">
    <div class="content-container">
        <div class="section-head">
            <span class="eyebrow">Technical Mastery</span>
            <h2 class="section-title">
                <?php echo $is_specific_role ? 'Specialized Capabilities of Our <span>' . htmlspecialchars($role['name']) . '</span>' : 'Comprehensive Engineering Services <span>We Provide</span>'; ?>
            </h2>
            <p class="section-subtitle">
                <?php echo $is_specific_role ? 'Every developer undergoes rigorous technical vetting, code reviews, and scenario-based tests before joining your project.' : 'From frontend and native mobile engineering to high-concurrency microservices, our developers cover your full technology lifecycle.'; ?>
            </p>
        </div>

        <div class="<?php echo $is_specific_role ? 'service-features-grid' : 'tech-stack-grid tech-stack-grid-3'; ?>">
            <?php 
            $cards = $is_specific_role ? $role['capabilities'] : [
                [
                    'title' => 'Dedicated Full-Stack Developers',
                    'link' => 'hire-react-developers',
                    'desc' => 'End-to-end web product development handling reactive frontends (React, Vue), scalable backends (Node.js, Laravel, PHP), and relational database optimization.',
                    'chips' => ['React', 'Node.js', 'Laravel', 'PostgreSQL'],
                    'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>'
                ],
                [
                    'title' => 'Cross-Platform Mobile Engineers',
                    'link' => 'hire-flutter-developers',
                    'desc' => 'Build high-performance Android and iOS mobile applications from a single codebase using Flutter and React Native with 60 FPS native responsiveness.',
                    'chips' => ['Flutter', 'React Native', 'Dart', 'Firebase'],
                    'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>'
                ],
                [
                    'title' => 'Enterprise Backend & Microservices',
                    'link' => 'hire-nodejs-developers',
                    'desc' => 'Architect high-throughput, low-latency microservices and REST/GraphQL APIs designed to withstand millions of requests using Node.js, NestJS, and Laravel.',
                    'chips' => ['NestJS', 'Express', 'Redis', 'Docker'],
                    'icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>'
                ],
                [
                    'title' => 'E-Commerce & CMS Specialists',
                    'link' => 'hire-shopify-developers',
                    'desc' => 'Custom Shopify and Shopify Plus theme development, headless Hydrogen builds, and custom-coded WordPress/WooCommerce websites built for maximum conversion.',
                    'chips' => ['Shopify Plus', 'Liquid', 'WooCommerce', 'Headless'],
                    'icon' => '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>'
                ],
                [
                    'title' => 'UI/UX Product & Design Systems Leads',
                    'link' => 'hire-ui-ux-designers',
                    'desc' => 'Human-centric user research, interactive Figma prototypes, and comprehensive design systems with tokens that eliminate developer guesswork.',
                    'chips' => ['Figma', 'Design Systems', 'Auto-Layout', 'WCAG 2.1'],
                    'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>'
                ],
                [
                    'title' => 'Automated & Manual QA Engineers',
                    'link' => 'software-testing',
                    'desc' => 'Protect your release cycles with automated regression suites (Playwright, Cypress, Selenium), API testing, and deep security audits to guarantee zero defects.',
                    'chips' => ['Cypress', 'Playwright', 'Selenium', 'Postman'],
                    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'
                ]
            ];

            foreach ($cards as $cd): ?>
            <?php if (!$is_specific_role): ?>
            <a href="<?php echo htmlspecialchars($cd['link']); ?>" class="tech-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <?php echo $cd['icon']; ?>
                </svg>
                <?php echo htmlspecialchars($cd['title']); ?>
            </a>
            <?php else: ?>
            <div class="feature-card">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <?php echo $cd['icon']; ?>
                            </svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3><?php echo htmlspecialchars($cd['title']); ?></h3>
                    <p><?php echo htmlspecialchars($cd['desc']); ?></p>
                </div>
                <div class="card-tech-chips">
                    <?php foreach ($cd['chips'] as $cp): ?>
                    <span class="card-chip"><?php echo htmlspecialchars($cp); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 4: FLEXIBLE ENGAGEMENT MODELS
     ========================================== -->
<section class="content-section">
    <div class="content-container">
        <div class="section-head">
            <span class="eyebrow">Hiring Models</span>
            <h2 class="section-title">Our Hiring <span>Dedicated Developers Models</span></h2>
            <p class="section-subtitle">
                Scale your engineering capacity up or down as project milestones evolve. Choose the model that perfectly fits your budget and timeline.
            </p>
        </div>

        <div class="comparison-grid hire-models-grid">
            <div class="comp-card hire-model-card">
                <span class="comp-card-badge blue">Agile Support</span>
                <h3>Part Time Monthly Hire</h3>
                <div class="hire-model-hours">4 Hours <small>per day</small></div>
                <div class="hire-model-total">80 Hours / Month</div>
                <a href="#hire-developer-form" data-model="Part Time" class="button-outline" style="width:100%; text-align:center;">Select Part-Time</a>
            </div>

            <div class="comp-card hire-model-card highlight">
                <span class="comp-card-badge green">Most Popular</span>
                <h3>Full Time Monthly Hire</h3>
                <div class="hire-model-hours">8 Hours <small>per day</small></div>
                <div class="hire-model-total">160 Hours / Month</div>
                <a href="#hire-developer-form" data-model="Full Time" class="button-primary btn-shine" style="width:100%; text-align:center;">Hire Full-Time Developer</a>
            </div>

            <div class="comp-card hire-model-card">
                <span class="comp-card-badge purple">Flexible</span>
                <h3>Hourly Hire</h3>
                <div class="hire-model-hours">40 Hours <small>minimum</small></div>
                <div class="hire-model-total">Pay as you go</div>
                <a href="#hire-developer-form" data-model="Hourly Hire" class="button-outline" style="width:100%; text-align:center;">Choose Hourly Model</a>
            </div>
        </div>

        <div class="hire-benefits">
            <h3 class="hire-benefits-title">Benefits</h3>
            <ul class="hire-benefits-list">
                <?php foreach (['Cost savings', 'No project manager charges', 'Daily reporting and code updates', 'Skilled personnel', 'Direct team communication', 'Project management tools access', 'Scalability options', 'Simple exit terms'] as $bn): ?>
                <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><?php echo $bn; ?></li>
                <?php endforeach; ?>
            </ul>
            <div style="text-align:center; margin-top:32px;">
                <a href="#hire-developer-form" class="button-primary btn-shine">Hire Developers Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 5: 4-STAGE HIRING PROCESS
     ========================================== -->
<section class="content-section bg-alt">
    <div class="content-container">
        <div class="section-head">
            <span class="eyebrow">Seamless Onboarding</span>
            <h2 class="section-title">How to Hire in <span>4 Simple Steps</span></h2>
            <p class="section-subtitle">
                From initial scope consultation to active sprint execution, our mature onboarding process gets your developer coding within 48 hours.
            </p>
        </div>

        <div class="process-grid">
            <div class="process-card">
                <div class="process-step-num">1</div>
                <h3>Share Requirements</h3>
                <p>Tell us your tech stack, framework versions, target timelines, and developer seniority requirements.</p>
            </div>
            <div class="process-card">
                <div class="process-step-num">2</div>
                <h3>Review Profiles (24h)</h3>
                <p>We handpick and share pre-vetted senior developer resumes matching your exact technical criteria.</p>
            </div>
            <div class="process-card">
                <div class="process-step-num">3</div>
                <h3>Live Interview</h3>
                <p>Conduct live video code reviews and problem-solving interviews. Select the developer you trust 100%.</p>
            </div>
            <div class="process-card">
                <div class="process-step-num">4</div>
                <h3>Onboard &amp; Build</h3>
                <p>Sign mutual NDAs, grant repository access, and your dedicated developer kicks off sprint work immediately.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 6: WHY CHOOSE MITHILA SOFTECH
     ========================================== -->
<section class="content-section">
    <div class="content-container">
        <div class="section-head">
            <span class="eyebrow">Enterprise Trust</span>
            <h2 class="section-title">Why Global Companies Partner with <span>Mithila Softech</span></h2>
            <p class="section-subtitle">
                We combine Silicon-Valley engineering standards with transparent pricing, guaranteed delivery velocity, and direct communication.
            </p>
        </div>

        <div class="why-choose-list">
            <div class="why-item">
                <h4>Top 1% Pre-Vetted Tech Talent</h4>
                <p>Our rigorous 4-stage vetting evaluates data structures, algorithmic efficiency, architectural patterns, and English communication proficiency.</p>
            </div>
            <div class="why-item">
                <h4>Direct Communication &amp; Agile Integration</h4>
                <p>Your dedicated developers work directly inside your Slack, Microsoft Teams, Jira, and GitHub repos with daily standup updates and time logs.</p>
            </div>
            <div class="why-item">
                <h4>Zero Infrastructure or Recruitment Overheads</h4>
                <p>We provide enterprise hardware, high-speed fiber internet, continuous power backup, and licensed development toolchains at zero extra cost to you.</p>
            </div>
            <div class="why-item">
                <h4>Strict Non-Disclosure &amp; IP Protection</h4>
                <p>All source code, design assets, and database schemas remain 100% your proprietary property from day one, backed by strict international NDAs.</p>
            </div>
            <div class="why-item">
                <h4>Flexible Scaling &amp; Easy Exit Policy</h4>
                <p>Scale from 1 developer to an entire engineering pod in days, with zero bureaucratic hurdles and a transparent 1-week exit policy.</p>
            </div>
            <div class="why-item">
                <h4>Complementary Senior Tech Lead Governance</h4>
                <p>Every hired developer is shadowed by a senior Solutions Architect who performs periodic code quality audits, ensuring enterprise standards.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 7: OTHER SPECIALISTS NAVIGATOR
     ========================================== -->
<section class="content-section bg-alt">
    <div class="content-container">
        <div class="section-head">
            <span class="eyebrow">Explore Our Talent</span>
            <h2 class="section-title">Hire Specialized <span>Engineers &amp; Designers</span></h2>
            <p class="section-subtitle">
                Looking for other specific technology competencies? Explore our dedicated specialists across modern web, mobile, and cloud stacks.
            </p>
        </div>

        <div class="tech-stack-grid">
            <?php foreach ($hire_roles as $slug => $r): ?>
                <?php if ($slug !== $raw_slug): ?>
                <a href="<?php echo $slug; ?>" class="tech-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                    Hire <?php echo htmlspecialchars($r['name']); ?>
                </a>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($is_specific_role): ?>
            <a href="hire-dedicated-developers" class="tech-item" style="border:2px dashed var(--qa-primary);">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                View All Dedicated Teams
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include 'footer-new.php'; ?>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/919971921698" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
  <svg viewBox="0 0 24 24" width="32" height="32" fill="white">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>

<!-- Interactive AJAX Lead Form Handler (IGEX Solutions Architecture) -->
<script>
function handleHireFormSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('hire-developer-form');
    const btn = document.getElementById('user_developer_btn');
    const loading = document.getElementById('loading');
    const responseOutput = document.getElementById('inquiry-response-output');
    
    // Form fields validation
    const name = form.your_name ? form.your_name.value.trim() : '';
    const email = form.your_email ? form.your_email.value.trim() : '';
    const phone = form.phone_number ? form.phone_number.value.trim() : '';

    if (!name || !email || !phone) {
        responseOutput.style.display = 'block';
        responseOutput.className = 'igex-inquiry-response-output error';
        responseOutput.innerText = 'Please complete your name, email, and phone number.';
        return;
    }

    btn.disabled = true;
    const originalText = btn.value;
    btn.value = 'Submitting Request...';
    if (loading) loading.classList.remove('d-none');
    responseOutput.style.display = 'none';

    const formData = new FormData(form);
    
    fetch('hire-submit.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(text => {
        if (loading) loading.classList.add('d-none');
        btn.disabled = false;
        btn.value = originalText;
        responseOutput.style.display = 'block';
        if (text.includes('INSERT successful')) {
            responseOutput.className = 'igex-inquiry-response-output success';
            responseOutput.innerText = 'Thank you! Your consultation request has been received. Our senior tech recruiter will reach out within 24 hours.';
            form.reset();
        } else {
            console.error('Hire form response:', text);
            responseOutput.className = 'igex-inquiry-response-output error';
            responseOutput.innerText = 'Something went wrong. Please WhatsApp or call us directly.';
        }
    })
    .catch(err => {
        if (loading) loading.classList.add('d-none');
        btn.disabled = false;
        btn.value = originalText;
        responseOutput.style.display = 'block';
        responseOutput.className = 'igex-inquiry-response-output success';
        responseOutput.innerText = 'Thank you! Your consultation request has been received. Our senior tech recruiter will reach out within 24 hours.';
        form.reset();
    });
}

// Smooth scroll to consultation form when any consultation CTA is clicked
document.querySelectorAll('a[href="#consultation"], a[href="#hire-developer-form"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const model = this.getAttribute('data-model');
        if (model) {
            const selectEl = document.getElementById('hireDeveloperType');
            if (selectEl) { selectEl.value = model; selectEl.dispatchEvent(new Event('change', { bubbles: true })); }
        }
        const target = document.getElementById('consultation');
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'center' });
            setTimeout(() => {
                const nameInput = document.getElementById('YourName');
                if (nameInput) nameInput.focus();
            }, 600);
        }
    });
});
</script>

<script>
// Custom dropdowns for the hire form selects (the native select stays in the form for submission)
(function () {
    var form = document.getElementById('hire-developer-form');
    if (!form) return;
    var chevron = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>';
    var wraps = [];

    function closeAll(except) {
        wraps.forEach(function (w) { if (w !== except) w.classList.remove('is-open'); });
    }

    form.querySelectorAll('select.form-select').forEach(function (select) {
        var wrap = document.createElement('div');
        wrap.className = 'cs-wrap' + (select.classList.contains('ig-countryCode') ? ' cs-country' : '');
        select.parentNode.insertBefore(wrap, select);
        wrap.appendChild(select);
        select.tabIndex = -1;

        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'cs-btn';
        btn.setAttribute('aria-haspopup', 'listbox');
        btn.setAttribute('aria-expanded', 'false');
        wrap.appendChild(btn);

        var list = document.createElement('ul');
        list.className = 'cs-list';
        list.setAttribute('role', 'listbox');
        wrap.appendChild(list);

        Array.prototype.forEach.call(select.options, function (opt, i) {
            var li = document.createElement('li');
            li.setAttribute('role', 'option');
            li.dataset.index = i;
            li.textContent = opt.textContent;
            list.appendChild(li);
        });

        function sync() {
            var opt = select.options[select.selectedIndex];
            btn.innerHTML = '<span class="cs-label"></span>' + chevron;
            btn.firstChild.textContent = opt ? opt.textContent : '';
            Array.prototype.forEach.call(list.children, function (li, i) {
                var on = i === select.selectedIndex;
                li.classList.toggle('is-selected', on);
                li.setAttribute('aria-selected', on ? 'true' : 'false');
            });
        }

        function open() {
            closeAll(wrap);
            wrap.classList.add('is-open');
            btn.setAttribute('aria-expanded', 'true');
            var sel = list.querySelector('.is-selected');
            if (sel) list.scrollTop = sel.offsetTop - 6;
        }
        function close() {
            wrap.classList.remove('is-open');
            btn.setAttribute('aria-expanded', 'false');
        }

        btn.addEventListener('click', function () {
            wrap.classList.contains('is-open') ? close() : open();
        });
        list.addEventListener('click', function (e) {
            var li = e.target.closest('li');
            if (!li) return;
            select.selectedIndex = +li.dataset.index;
            select.dispatchEvent(new Event('change', { bubbles: true }));
            close();
            btn.focus();
        });
        btn.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') { close(); return; }
            if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                e.preventDefault();
                var next = select.selectedIndex + (e.key === 'ArrowDown' ? 1 : -1);
                if (next >= 0 && next < select.options.length) {
                    select.selectedIndex = next;
                    select.dispatchEvent(new Event('change', { bubbles: true }));
                }
            }
        });
        select.addEventListener('change', sync);
        wrap.classList.contains('is-open');
        wraps.push(wrap);
        wrap._close = close;
        sync();
    });

    // form.reset() restores the default option: refresh the labels afterwards
    form.addEventListener('reset', function () {
        setTimeout(function () {
            form.querySelectorAll('select.form-select').forEach(function (s) {
                s.dispatchEvent(new Event('change'));
            });
        }, 0);
    });

    document.addEventListener('click', function (e) {
        wraps.forEach(function (w) { if (!w.contains(e.target)) w._close(); });
    });
})();
</script>

</body>
</html>
