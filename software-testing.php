<?php
$activePage = 'services';
$title = 'Software Testing & QA Services | Mithila Softech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Testing &amp; QA Services | Mithila Softech</title>
    <meta name="description" content="End-to-end software testing and QA services from Mithila Softech. Automated testing, manual QA, API testing, mobile app testing, performance & security audits. Ship bug-free software faster.">
    <meta name="keywords" content="software testing services, QA testing company, automation testing, manual testing, API testing, mobile app testing, performance testing JMeter, security testing VAPT, software quality assurance India">
    <link rel="canonical" href="https://www.mithilasoftech.com/software-testing" />
    <link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpeg">

    <!-- Preload / Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css?v=2.2">

    <style>
        /* ==========================================================================
           MITHILA SOFTECH DESIGN SYSTEM - SOFTWARE TESTING & QA SERVICES
           Theme: Royal Blue (#1D4E9E) & Vibrant Purple (#9837d4)
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
            align-items: center;
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
        .intro-metrics-card {
            background: linear-gradient(135deg, rgba(29, 78, 158, 0.05) 0%, rgba(152, 55, 212, 0.05) 100%);
            border: 1px solid var(--qa-line);
            border-radius: 24px;
            padding: 36px 32px;
            box-shadow: var(--qa-shadow);
        }
        .intro-metrics-card h3 {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 20px 0;
        }
        .impact-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .impact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.98rem;
            line-height: 1.5;
            color: #334155;
            font-weight: 500;
        }
        .impact-item svg {
            color: #10b981;
            flex-shrink: 0;
            margin-top: 3px;
        }

        /* --- SERVICE FEATURES GRID (8 CARDS) --- */
        .service-features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
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

        /* --- COMPARISON SECTION: MANUAL VS AUTOMATION --- */
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
        .comp-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .comp-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.94rem;
            color: #334155;
            font-weight: 500;
            line-height: 1.4;
        }
        .comp-list li svg {
            color: #10b981;
            flex-shrink: 0;
        }

        /* --- 6-STAGE TESTING PROCESS --- */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }
        .process-card {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            padding: 34px 28px;
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

        /* --- TECH STACK SECTION --- */
        .tech-categories-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        .tech-category-card {
            background: var(--qa-card);
            border: 1px solid var(--qa-line);
            border-radius: 20px;
            padding: 32px 26px;
            box-shadow: var(--qa-shadow);
        }
        .tech-category-card h3 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--qa-text);
            margin: 0 0 16px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .tech-category-card h3 svg {
            color: var(--qa-primary);
        }
        .tools-badges-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .tool-badge {
            background: var(--qa-bg-alt);
            border: 1px solid var(--qa-line);
            padding: 8px 14px;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 700;
            color: #334155;
            transition: all 0.25s ease;
        }
        .tool-badge:hover {
            background: var(--qa-primary);
            color: #ffffff;
            border-color: var(--qa-primary);
            transform: translateY(-2px);
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


        /* --- CTA BOX --- */
        .cta-box {
            background: linear-gradient(135deg, var(--qa-primary-dark) 0%, var(--qa-secondary-dark) 100%);
            border: none;
            border-radius: 28px;
            padding: 64px 48px;
            text-align: center;
            margin: 30px 0 0;
            box-shadow: 0 24px 50px rgba(29, 78, 158, 0.25);
            position: relative;
            overflow: hidden;
        }
        .cta-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.12) 0%, transparent 60%);
            pointer-events: none;
            animation: srvHeroOrbDrift 15s linear infinite;
        }
        .cta-box h2 {
            color: #ffffff;
            font-size: clamp(2rem, 3.8vw, 2.8rem);
            margin: 0 0 16px 0;
            font-weight: 800;
            position: relative;
            z-index: 2;
        }
        .cta-box p {
            color: rgba(255, 255, 255, 0.88);
            font-size: 1.15rem;
            max-width: 720px;
            margin: 0 auto 36px;
            line-height: 1.75;
            position: relative;
            z-index: 2;
        }
        .cta-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            position: relative;
            z-index: 2;
        }
        .cta-box .btn-white {
            background: #ffffff !important;
            color: var(--qa-primary-dark) !important;
            font-weight: 800;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15) !important;
        }
        .cta-box .btn-white:hover {
            transform: translateY(-3px) scale(1.02);
            color: var(--qa-primary) !important;
        }
        .cta-box .btn-trans-border {
            background: rgba(255, 255, 255, 0.12);
            border: 2px solid rgba(255, 255, 255, 0.35);
            color: #ffffff !important;
            backdrop-filter: blur(8px);
        }
        .cta-box .btn-trans-border:hover {
            background: #ffffff;
            color: var(--qa-primary-dark) !important;
            border-color: #ffffff;
        }

        /* --- RESPONSIVE BREAKPOINTS --- */
        @media (max-width: 1200px) {
            .service-features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .tech-categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 991px) {
            .qa-stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }
            .intro-grid {
                grid-template-columns: 1fr;
                gap: 36px;
            }
            .comparison-grid {
                grid-template-columns: 1fr;
            }
            .process-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .why-choose-list {
                grid-template-columns: 1fr;
            }
            .tech-categories-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .content-section {
                padding: 64px 0;
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
            .cta-box {
                padding: 44px 24px;
                border-radius: 20px;
            }
        }

        /* --- EXTRA RESPONSIVE FIXES (tablet and mobile) --- */
        img, svg, video { max-width: 100%; }

        @media (max-width: 991px) {
            html, body { overflow-x: hidden; max-width: 100%; overscroll-behavior-x: none; }
            main, section, .content-section, .content-container, footer { max-width: 100%; }
            .content-section { padding: 70px 0; overflow-x: clip; }
            .page-orb { display: none; }
            .section-head { margin-bottom: 36px; }
            .comparison-grid, .why-choose-list { gap: 20px; }
            .service-features-grid > *, .comparison-grid > *, .process-grid > *,
            .why-choose-list > *, .tech-categories-grid > *, .intro-grid > * { min-width: 0; }
            p, h1, h2, h3, h4, li { overflow-wrap: anywhere; }
        }

        @media (max-width: 640px) {
            .content-section { padding: 48px 0; }
            .content-container { padding: 0 16px; }
            .section-title { font-size: clamp(1.6rem, 7vw, 2rem); }
            .section-subtitle { font-size: 0.98rem; }
            .intro-grid { gap: 28px; margin-bottom: 44px; }
            .intro-text h2 { font-size: clamp(1.5rem, 6.5vw, 1.9rem); }
            .intro-text p { font-size: 0.98rem; line-height: 1.7; }
            .qa-stat-item { padding: 20px 16px; }
            .qa-stat-item .stat-num { font-size: 1.8rem; }
            .button-primary, .button-outline { width: 100%; justify-content: center; text-align: center; box-sizing: border-box; }
            .cta-box h2 { font-size: clamp(1.5rem, 6.5vw, 1.9rem); }
            .cta-box .btn-white, .cta-box .btn-trans-border { width: 100%; justify-content: center; text-align: center; box-sizing: border-box; }
        }

        @media (max-width: 380px) {
            .content-container { padding: 0 12px; }
            .cta-box { padding: 36px 16px; }
        }
    </style>
</head>
<body>

<?php include 'headerhome.php'; ?>

<!-- ==========================================
     STANDARD HERO SECTION (MATCHES ALL PAGES VIA heropage.php)
     ========================================== -->
<?php 
$hero_badge = 'Quality Assurance';
$hero_title = 'Software Testing &amp; <br><span class="hero-headline-bold">QA <span class="hero-headline-accent">Services</span></span>';
$hero_subtext = 'Accelerate your release cycles and eliminate critical defects before they hit production with enterprise-grade automated & manual QA.';
$hero_bg_image = 'assets/image/itsolutionsheader.png';
include 'heropage.php'; 
?>

<!-- ==========================================
     SECTION 2: STATS & STRATEGIC OVERVIEW
     ========================================== -->
<section class="content-section">
    <div class="page-orb orb-1"></div>
    <div class="page-orb orb-2"></div>
    <div class="content-container" style="position: relative; z-index: 2;">
        
        <!-- Trust Stats Strip -->
        <div class="stats-strip-container ms-reveal">
            <div class="qa-stats-bar">
                <div class="qa-stat-item">
                    <span class="stat-num" data-counter data-target="99.8" data-suffix="%">99.8%</span>
                    <span class="stat-label">Defect Detection Rate</span>
                </div>
                <div class="qa-stat-item">
                    <span class="stat-num" data-counter data-target="4" data-suffix="x">4x</span>
                    <span class="stat-label">Faster Release Sprints</span>
                </div>
                <div class="qa-stat-item">
                    <span class="stat-num" data-counter data-target="500" data-suffix="+">500+</span>
                    <span class="stat-label">Real Devices &amp; Browsers</span>
                </div>
                <div class="qa-stat-item">
                    <span class="stat-num" data-counter data-target="60" data-suffix="%">60%</span>
                    <span class="stat-label">Lower QA Overhead via Automation</span>
                </div>
            </div>
        </div>

        <div class="intro-grid">
            <div class="intro-text ms-reveal ms-reveal-left">
                <span class="eyebrow">Quality Engineering</span>
                <h2>Protect Your Brand Reputation with <span>Flawless Software Delivery</span></h2>
                <p>
                    In modern software delivery, a single critical checkout bug, slow loading state, or authentication failure can irrevocably damage user trust and drive prospective customers directly to your competitors. Studies prove that defects detected in production cost up to <strong>30x more</strong> to resolve than those caught early in the development lifecycle.
                </p>
                <p>
                    At Mithila Softech, software testing is not a superficial last-minute checkpoint. We implement an intelligent, shift-left quality engineering framework. Our ISTQB-certified QA leads embed directly into your Agile sprint cycles, conducting rigorous automated regression suites, exploratory usability checks, and deep security audits to guarantee uninterrupted business continuity.
                </p>
                <a href="index#contact" class="button-primary btn-shine ms-btn-pulse">Request QA Consultation</a>
            </div>

            <div class="intro-metrics-card ms-reveal ms-reveal-right ms-card-shine">
                <h3>The Mithila Softech QA Impact</h3>
                <ul class="impact-list">
                    <li class="impact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Zero-Day Production Defect Guarantee</strong> on all critical user journeys.</span>
                    </li>
                    <li class="impact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Automated Regression Pipelines</strong> executing in minutes on every GitHub PR.</span>
                    </li>
                    <li class="impact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Real Physical Device Matrix</strong> testing on 500+ Android &amp; iOS hardware variants.</span>
                    </li>
                    <li class="impact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Detailed, Reproducible Defect Logs</strong> with network HAR traces, logs, and video clips.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 3: CORE SOFTWARE TESTING SERVICES (8 CARDS)
     ========================================== -->
<section class="content-section bg-alt" id="services">
    <div class="content-container">
        <div class="section-head ms-reveal">
            <span class="eyebrow">Comprehensive Capabilities</span>
            <h2 class="section-title">Full-Spectrum Software Testing <span>Services We Offer</span></h2>
            <p class="section-subtitle">
                From frontend pixel accuracy and backend API microservices to high-concurrency load testing, our engineers inspect every layer of your application architecture.
            </p>
        </div>

        <div class="service-features-grid">
            <!-- 1. Automation Testing -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-1">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Test Automation Services</h3>
                    <p>Build robust, maintainable test automation frameworks that execute across browsers and operating systems. Catch regressions in minutes before code merges.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">Selenium</span>
                    <span class="card-chip">Cypress</span>
                    <span class="card-chip">Playwright</span>
                    <span class="card-chip">TypeScript</span>
                </div>
            </div>

            <!-- 2. Manual & Exploratory Testing -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-2">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Manual &amp; Exploratory QA</h3>
                    <p>Meticulous human-driven testing uncovering subtle usability hurdles, visual quirks, cognitive friction, and complex edge cases that automated scripts overlook.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">Exploratory</span>
                    <span class="card-chip">UI/UX Audit</span>
                    <span class="card-chip">Smoke Tests</span>
                    <span class="card-chip">Sanity Checks</span>
                </div>
            </div>

            <!-- 3. API & Microservices Testing -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-3">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>API &amp; Backend Testing</h3>
                    <p>Verify data contracts, payload structures, token authentication (OAuth/JWT), rate limiting, and database state integrity across RESTful and GraphQL APIs.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">Postman</span>
                    <span class="card-chip">RestAssured</span>
                    <span class="card-chip">Newman</span>
                    <span class="card-chip">Swagger</span>
                </div>
            </div>

            <!-- 4. Mobile App Testing -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-4">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Mobile Application Testing</h3>
                    <p>End-to-end testing across 500+ physical iOS and Android smartphones and tablets. Evaluate memory consumption, battery usage, push notifications, and network latency.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">Appium</span>
                    <span class="card-chip">BrowserStack</span>
                    <span class="card-chip">iOS / Android</span>
                    <span class="card-chip">Crashlytics</span>
                </div>
            </div>

            <!-- 5. Performance & Load Testing -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-1">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Performance &amp; Load Testing</h3>
                    <p>Stress-test servers and databases under simulated spikes of 10,000+ concurrent users. Identify concurrency bottlenecks, CPU leaks, and response latency before launch.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">Apache JMeter</span>
                    <span class="card-chip">k6</span>
                    <span class="card-chip">Gatling</span>
                    <span class="card-chip">Stress &amp; Soak</span>
                </div>
            </div>

            <!-- 6. Security Testing & VAPT -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-2">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Security Testing &amp; VAPT</h3>
                    <p>Penetration testing and vulnerability assessments aligned with OWASP Top 10 standards. Detect SQL injection, XSS, session flaws, and privilege escalation vulnerabilities.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">OWASP Top 10</span>
                    <span class="card-chip">Burp Suite</span>
                    <span class="card-chip">SonarQube</span>
                    <span class="card-chip">ZAP Proxy</span>
                </div>
            </div>

            <!-- 7. Cross-Browser & Compatibility -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-3">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Cross-Browser &amp; Device Testing</h3>
                    <p>Guarantee pixel-perfect visual styling, font rendering, and seamless JavaScript execution across Chrome, Safari, Firefox, Edge, and mobile browser viewports.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">BrowserStack</span>
                    <span class="card-chip">LambdaTest</span>
                    <span class="card-chip">Pixel-Perfect</span>
                    <span class="card-chip">Responsive QA</span>
                </div>
            </div>

            <!-- 8. Continuous Testing in CI/CD -->
            <div class="feature-card ms-reveal ms-card-shine ms-delay-4">
                <div>
                    <div class="card-top">
                        <div class="feature-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <div class="card-arrow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>
                    <h3>Continuous QA &amp; CI/CD Pipelines</h3>
                    <p>Integrate automated test runs directly into Jenkins, GitHub Actions, or GitLab CI pipelines. Developers get immediate feedback on regressions with zero release delays.</p>
                </div>
                <div class="card-tech-chips">
                    <span class="card-chip">GitHub Actions</span>
                    <span class="card-chip">Jenkins</span>
                    <span class="card-chip">Docker</span>
                    <span class="card-chip">TestRail</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 4: MANUAL VS AUTOMATION STRATEGY
     ========================================== -->
<section class="content-section">
    <div class="content-container">
        <div class="section-head ms-reveal">
            <span class="eyebrow">Strategic Balance</span>
            <h2 class="section-title">Manual vs. Automated Testing: <span>The Optimal Blend</span></h2>
            <p class="section-subtitle">
                High-velocity product teams do not rely exclusively on one method. We implement an intelligent hybrid QA strategy that maximizes test coverage while driving down costs.
            </p>
        </div>

        <div class="comparison-grid">
            <!-- Manual Testing Card -->
            <div class="comp-card ms-reveal ms-card-shine ms-delay-1">
                <span class="comp-card-badge purple">Human Intuition</span>
                <h3>Manual &amp; Exploratory Testing</h3>
                <p>Essential when user perception, visual harmony, usability nuances, and spontaneous exploratory interactions dictate project success.</p>
                <ul class="comp-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Rapid evaluation of new and evolving features</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Real-world UX, layout shifts &amp; usability checks</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Ad-hoc bug bashing &amp; exploratory edge-cases</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Zero upfront framework coding required</span>
                    </li>
                </ul>
            </div>

            <!-- Automation Testing Card -->
            <div class="comp-card ms-reveal ms-card-shine ms-delay-2">
                <span class="comp-card-badge blue">Speed &amp; Scale</span>
                <h3>Test Automation Engineering</h3>
                <p>Crucial for repetitive regression suites, multi-browser matrix checks, complex data-driven tests, and rapid CI/CD build verifications.</p>
                <ul class="comp-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Executes thousands of assertions in minutes</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Immediate regression alerts on every Pull Request</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Reusable, version-controlled test scripts</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Eliminates human error in repetitive workflows</span>
                    </li>
                </ul>
            </div>

            <!-- Hybrid Model (Recommended) -->
            <div class="comp-card highlight ms-reveal ms-card-shine ms-delay-3">
                <span class="comp-card-badge green">Recommended</span>
                <h3>The Mithila Softech Hybrid QA</h3>
                <p>We combine 80% automated coverage on stable business flows with 20% skilled exploratory testing on new features and complex UX journeys.</p>
                <ul class="comp-list">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Saves up to 60% in ongoing regression testing costs</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Guarantees zero critical regressions in production</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Rapid release velocity aligned with sprint cadences</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Actionable JIRA defect tickets with screenshots &amp; logs</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 5: 6-STAGE TESTING PROCESS
     ========================================== -->
<section class="content-section bg-alt" id="testing-process">
    <div class="content-container">
        <div class="section-head ms-reveal">
            <span class="eyebrow">Proven Methodology</span>
            <h2 class="section-title">Our Structured 6-Stage <span>Testing Lifecycle</span></h2>
            <p class="section-subtitle">
                An ISTQB-compliant, Agile-aligned quality engineering workflow that delivers 100% visibility, end-to-end traceability, and actionable defect insights.
            </p>
        </div>

        <div class="process-grid">
            <!-- Stage 1 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-1">
                <div class="process-step-num">01</div>
                <h3>Requirement Analysis &amp; Scoping</h3>
                <p>We review your user stories, product requirement documents (PRD), and wireframes to identify edge cases, risk hotspots, and test acceptance criteria.</p>
            </div>

            <!-- Stage 2 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-2">
                <div class="process-step-num">02</div>
                <h3>Test Planning &amp; Strategy</h3>
                <p>Our lead QA engineers draft a formal Test Plan detailing testing types, device/browser matrices, automation frameworks, test environments, and sprint milestones.</p>
            </div>

            <!-- Stage 3 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-3">
                <div class="process-step-num">03</div>
                <h3>Test Case Design &amp; Scripting</h3>
                <p>We craft modular test cases with preconditions and expected results, alongside Gherkin BDD scenarios and automated scripts for core user journeys.</p>
            </div>

            <!-- Stage 4 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-4">
                <div class="process-step-num">04</div>
                <h3>Environment Setup &amp; Test Data</h3>
                <p>We configure staging environments, populate sanitized database test fixtures, configure API mock stubs, and connect continuous integration hooks.</p>
            </div>

            <!-- Stage 5 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-5">
                <div class="process-step-num">05</div>
                <h3>Execution &amp; Defect Tracking</h3>
                <p>We run manual exploratory tests and automated suites. Defects are immediately triaged and logged in Jira with severity, console logs, and video captures.</p>
            </div>

            <!-- Stage 6 -->
            <div class="process-card ms-reveal ms-card-shine ms-delay-6">
                <div class="process-step-num">06</div>
                <h3>Regression &amp; Release Sign-Off</h3>
                <p>We verify bug resolutions, execute complete regression suites to verify zero collateral breakage, and deliver a comprehensive QA Sign-Off report for production.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 6: TOOLS & TECHNOLOGY ECOSYSTEM
     ========================================== -->
<section class="content-section" id="tools">
    <div class="content-container">
        <div class="section-head ms-reveal">
            <span class="eyebrow">Tools &amp; Frameworks</span>
            <h2 class="section-title">Enterprise QA Technologies <span>We Master</span></h2>
            <p class="section-subtitle">
                We leverage modern, industry-standard testing frameworks and platforms to integrate seamlessly with your existing tech stack and workflows.
            </p>
        </div>

        <div class="tech-categories-grid">
            <!-- Automation Frameworks -->
            <div class="tech-category-card ms-reveal ms-card-shine ms-delay-1">
                <h3>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    <span>Test Automation</span>
                </h3>
                <div class="tools-badges-wrap">
                    <span class="tool-badge ms-badge-hover">Selenium WebDriver</span>
                    <span class="tool-badge ms-badge-hover">Cypress</span>
                    <span class="tool-badge ms-badge-hover">Playwright</span>
                    <span class="tool-badge ms-badge-hover">Appium</span>
                    <span class="tool-badge ms-badge-hover">WebdriverIO</span>
                    <span class="tool-badge ms-badge-hover">PyTest</span>
                    <span class="tool-badge ms-badge-hover">JUnit / TestNG</span>
                </div>
            </div>

            <!-- API & Performance Tools -->
            <div class="tech-category-card ms-reveal ms-card-shine ms-delay-2">
                <h3>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    <span>API &amp; Performance</span>
                </h3>
                <div class="tools-badges-wrap">
                    <span class="tool-badge ms-badge-hover">Postman</span>
                    <span class="tool-badge ms-badge-hover">RestAssured</span>
                    <span class="tool-badge ms-badge-hover">Newman</span>
                    <span class="tool-badge ms-badge-hover">Apache JMeter</span>
                    <span class="tool-badge ms-badge-hover">k6</span>
                    <span class="tool-badge ms-badge-hover">Gatling</span>
                    <span class="tool-badge ms-badge-hover">Swagger / OpenAPI</span>
                </div>
            </div>

            <!-- Management & CI/CD -->
            <div class="tech-category-card ms-reveal ms-card-shine ms-delay-3">
                <h3>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    <span>CI/CD &amp; Tracking</span>
                </h3>
                <div class="tools-badges-wrap">
                    <span class="tool-badge ms-badge-hover">Jira</span>
                    <span class="tool-badge ms-badge-hover">TestRail</span>
                    <span class="tool-badge ms-badge-hover">GitHub Actions</span>
                    <span class="tool-badge ms-badge-hover">Jenkins</span>
                    <span class="tool-badge ms-badge-hover">GitLab CI</span>
                    <span class="tool-badge ms-badge-hover">BrowserStack</span>
                    <span class="tool-badge ms-badge-hover">SonarQube</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECTION 7: WHY PARTNER WITH MITHILA SOFTECH
     ========================================== -->
<section class="content-section bg-alt" id="why-choose">
    <div class="content-container">
        <div class="section-head ms-reveal">
            <span class="eyebrow">The Mithila Softech Advantage</span>
            <h2 class="section-title">Why Engineering Teams Choose Us for <span>Software QA</span></h2>
            <p class="section-subtitle">
                We combine deep technical rigor, modern automation infrastructure, and transparent communication to make quality assurance a genuine competitive advantage.
            </p>
        </div>

        <div class="why-choose-list">
            <div class="why-item ms-reveal ms-card-shine ms-delay-1">
                <h4>ISTQB-Certified Senior Engineers</h4>
                <p>Our QA specialists bring years of hands-on experience across complex microservices, payment gateways, healthcare portals, and high-load consumer apps.</p>
            </div>

            <div class="why-item ms-reveal ms-card-shine ms-delay-2">
                <h4>Actionable, Zero-Fluff Defect Logs</h4>
                <p>Every logged ticket includes clear reproduction steps, environment details, expected vs. actual outcomes, video screen captures, network HAR logs, and stack traces.</p>
            </div>

            <div class="why-item ms-reveal ms-card-shine ms-delay-3">
                <h4>Shift-Left Defect Prevention</h4>
                <p>We review architecture blueprints, API schemas, and wireframes before coding begins - preventing costly foundational defects rather than just logging them post-build.</p>
            </div>

            <div class="why-item ms-reveal ms-card-shine ms-delay-4">
                <h4>Seamless Toolchain Integration</h4>
                <p>We work inside your workflows without friction. We attend your daily standups, comment on GitHub PRs, log tickets in Jira, and communicate directly in Slack/Teams.</p>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================
     SECTION 9: HIGH-IMPACT CTA BOX
     ========================================== -->
<section class="content-container">
    <div class="cta-box ms-reveal ms-reveal-scale">
        <h2>Ready to Ship Bug-Free Software with Total Confidence?</h2>
        <p>
            Connect directly with our lead QA architect today. We will evaluate your current product roadmap, review your test coverage gaps, and deliver an actionable QA strategy within 24 hours.
        </p>
        <div class="cta-actions">
            <a href="index#contact" class="button-primary btn-white btn-shine ms-btn-pulse">
                <span>Book Free QA Consultation</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="https://wa.me/919971921698" target="_blank" class="button-outline btn-trans-border">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/></svg>
                <span>Chat on WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<?php include 'footer-new.php'; ?>

<!-- Interactive Script for Smooth Scroll -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
});
</script>

</body>
</html>
