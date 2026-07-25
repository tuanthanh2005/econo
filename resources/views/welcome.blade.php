<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giao Cấp Tốc - Giao Hàng Siêu Tốc Trong Vài Giờ</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Giao Cấp Tốc - Dịch vụ mua sắm giao hàng siêu tốc trong vài giờ tại nội thành. Hoa tươi, trà sữa, thức ăn, phụ kiện điện thoại giao ngay không cần đợi lâu.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        :root {
            --primary: #ff5722;
            --primary-light: #ffebe5;
            --secondary: #ff2a68;
            --accent: #ff9800;
            --bg-body: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
            --border-radius: 20px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-family: inherit;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER */
        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
            gap: 20px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            color: white;
            width: 44px;
            height: 44px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.3);
            animation: pulse-glow 2s infinite;
            transition: all 0.3s ease;
        }

        .logo-icon i {
            transition: transform 0.5s ease;
        }

        .logo-area:hover .logo-icon i {
            transform: rotate(360deg) scale(1.1);
        }

        .logo-text h1 {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.5px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.1;
        }

        .logo-text span {
            font-size: 10px;
            font-weight: 700;
            color: var(--secondary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            display: block;
        }

        /* Location selector */
        .location-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #f1f5f9;
            padding: 8px 16px;
            border-radius: 14px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: var(--transition);
        }

        .location-selector:hover {
            background: #e2e8f0;
        }

        .location-icon {
            color: var(--secondary);
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .location-details {
            text-align: left;
        }

        .location-details span:first-child {
            display: block;
            font-size: 10px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .location-details span:last-child {
            font-size: 12px;
            font-weight: 700;
            color: var(--text-main);
        }

        /* Search box */
        .search-container {
            flex: 1;
            max-width: 450px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 16px 12px 42px;
            border: 1.5px solid var(--border-color);
            background: #f8fafc;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: var(--transition);
        }

        .search-input:focus {
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 4px var(--primary-light);
        }

        .search-icon-svg {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            pointer-events: none;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Header Right Actions */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .cart-btn {
            position: relative;
            background: white;
            border: 1.5px solid var(--border-color);
            width: 44px;
            height: 44px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            font-size: 18px;
        }

        .cart-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: var(--primary-light);
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-size: 10px;
            font-weight: 800;
            min-width: 20px;
            height: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 4px;
            border: 2px solid white;
        }

        .login-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 14px;
            font-size: 14px;
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.2);
            transition: var(--transition);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.3);
        }

        /* HERO SECTION */
        .hero {
            background: radial-gradient(circle at 10% 20%, rgba(255, 87, 34, 0.06) 0%, rgba(255, 42, 104, 0.03) 90%);
            padding: 24px 0;
            overflow: hidden;
            border-bottom: 1px solid var(--border-color);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 32px;
            align-items: center;
        }

        .hero-left {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .hero-tagline {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--primary-light);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 30px;
            width: fit-content;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tagline-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: var(--primary);
            position: relative;
        }

        .tagline-dot::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: var(--primary);
            animation: ping 1.5s infinite;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.5px;
        }

        .hero-title span {
            background: linear-gradient(to right, var(--primary), var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 13px;
            color: var(--text-muted);
            font-weight: 500;
            max-width: 500px;
        }

        .hero-actions-row {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 4px;
        }

        .cta-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 700;
            padding: 12px 28px;
            border-radius: 12px;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.2);
            transition: var(--transition);
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 87, 34, 0.3);
        }

        .guarantee {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .guarantee-badges {
            display: flex;
            margin-right: 2px;
        }

        .g-badge {
            background: #fff;
            border: 2px solid white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            box-shadow: var(--shadow-sm);
        }

        .g-badge i {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .g-badge:nth-child(1) { color: #f57c00; }
        .g-badge:nth-child(2) { margin-left: -8px; background: var(--primary-light); color: var(--primary); }
        .g-badge:nth-child(3) { margin-left: -8px; background: #e8f5e9; color: #2e7d32; }

        .guarantee-text {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
            line-height: 1.2;
        }

        /* Hero Right (Comparison) */
        .comparison-card {
            background: white;
            border-radius: 20px;
            padding: 16px 20px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
        }

        .comparison-card h3 {
            font-size: 11px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: center;
            margin-bottom: 12px;
        }

        .comparison-items {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .comp-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 14px;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .comp-item.econo {
            background: linear-gradient(to right, var(--primary-light), rgba(255, 42, 104, 0.02));
            border-color: rgba(255, 87, 34, 0.15);
        }

        .comp-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .comp-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .econo .comp-icon {
            background: var(--primary);
            color: white;
        }

        .other .comp-icon {
            background: #cbd5e1;
            color: #64748b;
        }

        .comp-info h4 {
            font-size: 13px;
            font-weight: 800;
        }

        .econo .comp-info h4 { color: var(--primary); }
        .other .comp-info h4 { color: #64748b; }

        .comp-info p {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .comp-right {
            text-align: right;
        }

        .comp-time {
            display: block;
            font-size: 15px;
            font-weight: 800;
        }

        .econo .comp-time { color: var(--primary); }
        .other .comp-time { color: var(--text-muted); }

        .comp-badge {
            font-size: 9px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 20px;
            display: inline-block;
            margin-top: 2px;
        }

        .econo .comp-badge {
            background: rgba(255, 42, 104, 0.08);
            color: var(--secondary);
            border: 1px solid rgba(255, 42, 104, 0.15);
        }

        .other .comp-badge {
            background: #f1f5f9;
            color: #64748b;
        }

        .stats-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-top: 12px;
            padding-top: 10px;
            border-top: 1px solid var(--border-color);
            text-align: center;
        }

        .stat-col:first-child {
            border-right: 1px solid var(--border-color);
        }

        .stat-num {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-main);
            display: block;
        }

        .stat-lbl {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* CATEGORIES SECTION */
        .categories-section {
            padding: 32px 0;
            background: white;
        }

        .section-header {
            text-align: center;
            max-width: 500px;
            margin: 0 auto 20px;
        }

        .section-header h2 {
            font-size: 22px;
            font-weight: 800;
            color: var(--text-main);
        }

        .section-header p {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 4px;
            font-weight: 500;
        }

        .cat-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
        }

        .cat-card {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 12px 8px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .cat-card:hover {
            transform: translateY(-4px);
            background: #fafafa;
        }

        .cat-card:nth-child(1):hover { box-shadow: 0 8px 20px -4px rgba(233, 30, 99, 0.18); border-color: rgba(233, 30, 99, 0.3); }
        .cat-card:nth-child(2):hover { box-shadow: 0 8px 20px -4px rgba(30, 136, 229, 0.18); border-color: rgba(30, 136, 229, 0.3); }
        .cat-card:nth-child(3):hover { box-shadow: 0 8px 20px -4px rgba(255, 179, 0, 0.18); border-color: rgba(255, 179, 0, 0.3); }
        .cat-card:nth-child(4):hover { box-shadow: 0 8px 20px -4px rgba(76, 175, 80, 0.18); border-color: rgba(76, 175, 80, 0.3); }
        .cat-card:nth-child(5):hover { box-shadow: 0 8px 20px -4px rgba(156, 39, 176, 0.18); border-color: rgba(156, 39, 176, 0.3); }

        .cat-card.active {
            border-color: var(--primary);
            background-color: rgba(255, 87, 34, 0.02);
            box-shadow: 0 4px 12px -4px rgba(255, 87, 34, 0.15);
        }

        .cat-emoji {
            font-size: 18px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .cat-card:nth-child(1) .cat-emoji { background: #ffebee; color: #e91e63; }
        .cat-card:nth-child(2) .cat-emoji { background: #e3f2fd; color: #1e88e5; }
        .cat-card:nth-child(3) .cat-emoji { background: #fff8e1; color: #ffb300; }
        .cat-card:nth-child(4) .cat-emoji { background: #e8f5e9; color: #4caf50; }
        .cat-card:nth-child(5) .cat-emoji { background: #f3e5f5; color: #9c27b0; }

        .cat-card.active .cat-emoji {
            transform: scale(1.05);
        }

        .cat-title {
            font-size: 12px;
            font-weight: 800;
            color: var(--text-main);
        }

        .cat-eta-badge {
            font-size: 8px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 10px;
            margin-top: 2px;
        }

        .cat-card:nth-child(1) .cat-eta-badge { background: #ffebee; color: var(--secondary); }
        .cat-card:nth-child(2) .cat-eta-badge { background: #e3f2fd; color: #1e88e5; }
        .cat-card:nth-child(3) .cat-eta-badge { background: #fff8e1; color: #f57f17; }
        .cat-card:nth-child(4) .cat-eta-badge { background: #e8f5e9; color: #2e7d32; }
        .cat-card:nth-child(5) .cat-eta-badge { background: #f3e5f5; color: #7b1fa2; }


        /* CATEGORY VIEW SPECIFIC LAYOUT */
        .breadcrumbs {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .breadcrumbs span.sep {
            color: #cbd5e1;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 800;
            color: var(--primary);
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 20px;
        }

        .back-link:hover {
            transform: translateX(-4px);
        }

        .category-banner {
            border-radius: 20px;
            padding: 24px 30px;
            color: white;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .category-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.15), transparent);
        }

        .banner-info {
            position: relative;
            z-index: 5;
        }

        .banner-info h2 {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .banner-info p {
            font-size: 12px;
            opacity: 0.9;
        }

        .banner-icon {
            font-size: 64px;
            opacity: 0.15;
            position: absolute;
            right: 24px;
            bottom: -8px;
        }

        .banner-flowers { background: linear-gradient(135deg, #ec4899, #f43f5e); }
        .banner-accessories { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
        .banner-drinks { background: linear-gradient(135deg, #f59e0b, #d97706); }
        .banner-food { background: linear-gradient(135deg, #10b981, #047857); }
        .banner-others { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }

        .category-layout {
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 24px;
        }

        .category-sidebar {
            background: white;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid var(--border-color);
            align-self: start;
        }

        .sidebar-title {
            font-size: 12px;
            font-weight: 800;
            color: var(--text-main);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 6px;
        }

        .sidebar-menu {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-menu-item {
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            transition: var(--transition);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-menu-item:hover, .sidebar-menu-item.active {
            background: var(--primary-light);
            color: var(--primary);
        }

        .sidebar-menu-item span.count {
            background: white;
            padding: 1px 6px;
            border-radius: 12px;
            font-size: 9px;
            font-weight: 800;
            border: 1px solid var(--border-color);
            color: var(--text-muted);
        }

        .sidebar-menu-item.active span.count {
            border-color: var(--primary);
            color: var(--primary);
        }

        .category-header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .category-results-txt {
            font-size: 13px;
            font-weight: 700;
            color: var(--text-main);
        }

        .sort-dropdown {
            background: white;
            border: 1px solid var(--border-color);
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-main);
            outline: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .sort-dropdown:focus {
            border-color: var(--primary);
        }


        /* PRODUCTS SECTION */
        .products-section {
            padding: 40px 0 60px;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .products-header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
        }

        .p-header-left {
            display: flex;
            flex-direction: column;
        }

        .p-header-top {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .p-header-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
        }

        .p-header-sub {
            font-size: 11px;
            font-weight: 800;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .p-header-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
            margin-top: 4px;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }

        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #f1f5f9;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
            position: relative;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(255, 87, 34, 0.15);
        }

        .p-eta-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 10;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .p-eta-badge span {
            color: var(--accent);
        }

        .p-img-area {
            aspect-ratio: 1 / 1;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            user-select: none;
            position: relative;
        }

        .p-img-area i {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.15);
        }

        .product-card:hover .p-img-area i {
            transform: scale(1.2) rotate(6deg);
        }

        .product-card:hover .p-img-area {
            background: #f1f5f9;
        }

        .p-info {
            padding: 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
            gap: 12px;
        }

        .p-brand {
            font-size: 8px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: block;
        }

        .p-name {
            font-size: 12px;
            font-weight: 800;
            color: var(--text-main);
            margin-top: 2px;
            min-height: 34px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
        }

        .p-stock {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 6px;
        }

        .stock-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #10b981;
        }

        .stock-txt {
            font-size: 9px;
            color: #059669;
            font-weight: 700;
        }

        .p-footer-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid #f8fafc;
            padding-top: 12px;
        }

        .price-wrapper span:first-child {
            display: block;
            font-size: 9px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .price-wrapper span:last-child {
            font-size: 14px;
            font-weight: 800;
            color: var(--secondary);
        }

        .add-to-cart-btn {
            background: #f1f5f9;
            color: var(--text-main);
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-size: 12px;
        }

        .add-to-cart-btn:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.1) rotate(90deg);
        }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 0;
            background: white;
            border-radius: 24px;
            border: 1px dashed var(--border-color);
        }

        .empty-icon { font-size: 32px; margin-bottom: 8px; display: block; color: var(--text-muted); }
        .empty-title { font-weight: 700; color: var(--text-main); font-size: 15px; }
        .empty-desc { font-size: 12px; color: var(--text-muted); margin-top: 2px; }


        /* HOW IT WORKS */
        .how-section {
            padding: 80px 0;
            background: white;
        }

        .how-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .how-card {
            background: #f8fafc;
            border-radius: 20px;
            padding: 30px 24px;
            text-align: center;
            border: 1px solid #f1f5f9;
            position: relative;
            transition: var(--transition);
        }

        .how-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--border-color);
        }

        .how-num {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 16px;
            margin: 0 auto 20px;
            box-shadow: 0 4px 10px rgba(255, 87, 34, 0.2);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .how-card:hover .how-num {
            transform: scale(1.15) rotate(-10deg);
        }

        .how-card:nth-child(2) .how-num { background: var(--accent); box-shadow: 0 4px 10px rgba(255, 152, 0, 0.2); }
        .how-card:nth-child(3) .how-num { background: var(--secondary); box-shadow: 0 4px 10px rgba(255, 42, 104, 0.2); }

        .how-card h3 {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-main);
        }

        .how-card p {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 10px;
            line-height: 1.6;
            font-weight: 500;
        }


        /* COMMITMENT SECTION */
        .commitment-section {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .commitment-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }

        .commit-left h2 {
            font-size: 28px;
            font-weight: 800;
        }

        .commit-left span {
            color: var(--accent);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 8px;
        }

        .commit-left p {
            color: #cbd5e1;
            font-size: 13px;
            margin-top: 12px;
            line-height: 1.6;
            max-width: 580px;
        }

        .commit-right {
            display: flex;
            justify-content: flex-end;
        }

        .shield-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 24px;
            border-radius: 24px;
            text-align: center;
            width: 100%;
            max-width: 280px;
        }

        .shield-icon { font-size: 40px; display: block; margin-bottom: 8px; color: var(--accent); }
        .shield-card h3 { font-size: 16px; font-weight: 800; }
        .shield-card p { font-size: 11px; color: #94a3b8; margin-top: 4px; }


        /* LOCATION MODAL */
        .modal {
            position: fixed;
            inset: 0;
            z-index: 200;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.open {
            display: flex;
        }

        .modal-backdrop {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(4px);
        }

        .modal-content {
            background: white;
            border-radius: 28px;
            padding: 30px;
            max-width: 440px;
            width: 100%;
            box-shadow: var(--shadow-lg);
            z-index: 10;
            position: relative;
            border: 1px solid var(--border-color);
        }

        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .modal-header h3 {
            font-size: 18px;
            font-weight: 800;
        }

        .close-btn {
            color: var(--text-muted);
            font-size: 20px;
            line-height: 1;
            padding: 4px;
        }

        .modal-desc {
            font-size: 11px;
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .modal-input-wrapper {
            margin-bottom: 20px;
        }

        .modal-input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 12px;
            border: 1.5px solid var(--border-color);
            font-size: 14px;
            font-weight: 500;
            outline: none;
        }

        .modal-input:focus {
            border-color: var(--primary);
        }

        .suggested-title {
            font-size: 10px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
            display: block;
        }

        .suggested-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .chip {
            background: #f1f5f9;
            color: var(--text-main);
            font-size: 11px;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 8px;
            transition: var(--transition);
        }

        .chip:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        .modal-footer {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }

        .modal-btn {
            width: 50%;
            padding: 12px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            text-align: center;
        }

        .modal-btn.cancel {
            border: 1.5px solid var(--border-color);
            color: var(--text-muted);
        }

        .modal-btn.confirm {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.2);
        }


        /* CART SIDEBAR */
        .cart-sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            right: -100%;
            width: 100%;
            max-width: 400px;
            background: white;
            box-shadow: var(--shadow-lg);
            z-index: 210;
            display: flex;
            flex-direction: column;
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-left: 1px solid var(--border-color);
        }

        .cart-sidebar.open {
            right: 0;
        }

        .cart-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(4px);
            z-index: 205;
            display: none;
        }

        .cart-overlay.open {
            display: block;
        }

        .cart-header {
            padding: 20px;
            background: #f8fafc;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cart-header-title {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cart-header-title h3 { font-size: 16px; font-weight: 800; }
        .cart-header-title i { font-size: 18px; color: var(--primary); }

        .cart-items {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f8fafc;
            padding: 12px;
            border-radius: 16px;
            border: 1px solid #f1f5f9;
        }

        .cart-item-emoji { font-size: 24px; color: var(--primary); display: flex; align-items: center; }
        .cart-item-info { flex-grow: 1; }
        .cart-item-name { font-size: 12px; font-weight: 800; color: var(--text-main); }
        .cart-item-eta { font-size: 9px; color: var(--primary); font-weight: 700; display: block; margin-top: 2px; }
        .cart-item-price { font-size: 12px; color: var(--secondary); font-weight: 800; display: block; margin-top: 2px; }

        .cart-item-remove {
            color: var(--text-muted);
            padding: 6px;
            border-radius: 8px;
            transition: var(--transition);
            font-size: 14px;
        }

        .cart-item-remove:hover {
            color: var(--secondary);
            background: #ffebee;
        }

        .cart-empty-txt {
            text-align: center;
            color: var(--text-muted);
            font-size: 12px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .cart-empty-txt i {
            font-size: 32px;
            margin-bottom: 4px;
        }

        .cart-footer {
            padding: 20px;
            background: #f8fafc;
            border-top: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cart-total-row {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 800;
        }

        .cart-total-row span:last-child {
            color: var(--secondary);
            font-size: 16px;
        }

        .cart-promo-banner {
            background: var(--primary-light);
            border: 1px solid rgba(255, 87, 34, 0.15);
            padding: 10px;
            border-radius: 12px;
            font-size: 10px;
            color: var(--primary);
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cart-checkout-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 800;
            text-align: center;
            padding: 14px;
            border-radius: 14px;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.15);
        }


        /* FOOTER */
        footer {
            background: #0f172a;
            color: #94a3b8;
            padding: 60px 0 40px;
            border-top: 1px solid #1e293b;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr repeat(3, 1.2fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-logo-icon {
            background: var(--primary);
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 14px;
        }

        .footer-logo span {
            color: white;
            font-weight: 800;
            font-size: 16px;
        }

        .footer-brand p {
            font-size: 11px;
            line-height: 1.6;
        }

        .footer-col h4 {
            color: white;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links a {
            font-size: 11px;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #1e293b;
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 10px;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .comparison-card {
                max-width: 500px;
                margin: 0 auto;
            }
            .cat-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .products-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            .category-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                height: 70px;
            }
            .search-container, .location-selector {
                display: none;
            }
            .hero-title {
                font-size: 28px;
            }
            .cat-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .how-grid {
                grid-template-columns: 1fr;
            }
            .commitment-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .commit-right {
                justify-content: center;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @keyframes ping {
            75%, 100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 10px rgba(255, 87, 34, 0.4);
            }
            50% {
                box-shadow: 0 0 20px rgba(255, 87, 34, 0.7);
            }
        }

        /* Floating Chat Bubbles */
        .chat-bubbles-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
            animation: float-bubbles 3s ease-in-out infinite alternate;
        }

        .chat-bubble {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            cursor: pointer;
            text-decoration: none;
        }

        .chat-bubble:hover {
            transform: scale(1.15) rotate(8deg);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
        }

        /* Tooltip style */
        .chat-bubble::after {
            content: attr(data-tooltip);
            position: absolute;
            right: 60px;
            top: 50%;
            transform: translateY(-50%) scale(0.9);
            background: #0f172a;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .chat-bubble:hover::after {
            opacity: 1;
            transform: translateY(-50%) scale(1);
        }

        /* Pulse Ring Glow Animation */
        .chat-bubble::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid currentColor;
            opacity: 0;
            pointer-events: none;
        }

        .bubble-zalo {
            background: #0068ff;
            color: #0068ff;
        }

        .bubble-zalo span {
            color: white;
        }

        .bubble-zalo::before {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }

        .bubble-messenger {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #00c6ff;
        }

        .bubble-messenger i {
            color: white;
        }

        .bubble-telegram {
            background: #229ED9;
            color: #229ED9;
        }

        .bubble-telegram i {
            color: white;
        }

        .bubble-webchat {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--primary);
        }

        .bubble-webchat i {
            color: white;
        }

        .bubble-webchat::before {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite 0.5s;
        }

        @keyframes float-bubbles {
            0% { transform: translateY(0); }
            100% { transform: translateY(-8px); }
        }

        @keyframes pulse-ring {
            0% { transform: scale(0.95); opacity: 0.8; }
            50% { transform: scale(1.15); opacity: 0.3; }
            100% { transform: scale(1.3); opacity: 0; }
        }

        /* Flash Sale Styles */
        .flashsale-section {
            padding: 36px 0;
            background: linear-gradient(180deg, #fff0eb, #ffffff);
            border-top: 1.5px solid #ffe5db;
        }

        .flashsale-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .flashsale-title-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .flashsale-icon {
            background: #ffe5db;
            color: #d84315;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            animation: pulse-flash-icon 2s infinite ease-in-out;
        }

        @keyframes pulse-flash-icon {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(216, 67, 21, 0.4);
            }
            50% {
                transform: scale(1.08);
                box-shadow: 0 0 0 8px rgba(216, 67, 21, 0);
            }
        }

        .flashsale-title-wrapper h2 {
            font-size: 20px;
            font-weight: 800;
            color: #d84315;
        }

        .flashsale-badge {
            background: #d84315;
            color: white;
            font-size: 9px;
            font-weight: 800;
            padding: 2px 8px;
            border-radius: 4px;
            letter-spacing: 0.5px;
        }

        .flashsale-timer {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 700;
            color: #d84315;
        }

        .timer-box {
            background: #d84315;
            color: white;
            padding: 4px 8px;
            border-radius: 6px;
            font-weight: 800;
            font-size: 13px;
        }

        .discount-tag {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #d84315;
            color: white;
            font-size: 10px;
            font-weight: 800;
            padding: 3px 8px;
            border-radius: 8px;
            z-index: 10;
        }

        .old-price {
            text-decoration: line-through;
            color: var(--text-muted);
            font-size: 11px;
            font-weight: 500;
            margin-left: 6px;
        }

        .progress-container {
            margin-top: 8px;
        }

        .progress-bar-bg {
            background: #ffe5db;
            height: 6px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-bar-fill {
            background: linear-gradient(90deg, #ff5722, #d84315);
            height: 100%;
            border-radius: 10px;
        }

        .progress-text {
            font-size: 9px;
            font-weight: 800;
            color: #d84315;
            display: flex;
            justify-content: space-between;
            margin-top: 4px;
        }
    </style>
</head>
<body>

    <!-- HEADER / NAVIGATION -->
    <header>
        <div class="container">
            <div class="header-content">
                
                <!-- Logo -->
                <div class="logo-area" onclick="goBackToHome()">
                    <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="logo-text">
                        <h1>GIAO CẤP TỐC</h1>
                        <span>⚡ HỎA TỐC 1 - 3 GIỜ</span>
                    </div>
                </div>

                <!-- Location Selector (Hyperlocal focus) -->
                <button class="location-selector" onclick="openLocationModal()">
                    <span class="location-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <div class="location-details">
                        <span>Giao đến địa chỉ:</span>
                        <span id="delivery-address-lbl">Quận 1, TP. Hồ Chí Minh</span>
                    </div>
                </button>

                <!-- Search Bar -->
                <div class="search-container">
                    <span class="search-icon-svg"><i class="bi bi-search"></i></span>
                    <input type="text" id="search-input" oninput="filterProducts()" placeholder="Tìm hoa tươi, ốp điện thoại, trà sữa..." class="search-input">
                </div>

                <!-- Cart & Account Actions -->
                <div class="header-actions">
                    <button class="cart-btn" onclick="toggleCart()">
                        <i class="bi bi-bag-dash-fill"></i>
                        <span class="cart-badge" id="cart-badge-count">0</span>
                    </button>
                    
                    <button class="login-btn">Đăng nhập</button>
                </div>

            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main style="flex-grow: 1;">
        
        <!-- ================= HOME VIEW ================= -->
        <div id="home-view">
            <!-- HERO SECTION -->
            <section class="hero">
                <div class="container">
                    <div class="hero-grid">
                        
                        <!-- Left Hero: Core Concept -->
                        <div class="hero-left">
                            <div class="hero-tagline">
                                <span class="tagline-dot"></span>
                                MÔ HÌNH GIAO HÀNG THẾ HỆ MỚI
                            </div>
                            
                            <h1 class="hero-title">
                                Cần giao gấp? <br>
                                <span>Giao ngay trong vài giờ</span>
                            </h1>
                            
                            <p class="hero-description">
                                Không còn phải mòn mỏi chờ đợi 3-4 ngày từ Shopee hay TikTok. Đặt hoa tươi lễ tiệc, phụ kiện điện thoại, trà sữa giải khát... nhận liền tay trong 1-3 tiếng hoặc sáng sớm mai!
                            </p>

                            <!-- Call to Action & Delivery Promise -->
                            <div class="hero-actions-row">
                                <a href="#quick-shop" class="cta-btn">Khám Phá Ngay</a>
                                <div class="guarantee">
                                    <div class="guarantee-badges">
                                        <div class="g-badge"><i class="fa-solid fa-trophy"></i></div>
                                        <div class="g-badge"><i class="fa-solid fa-bolt-lightning"></i></div>
                                        <div class="g-badge"><i class="fa-solid fa-circle-check"></i></div>
                                    </div>
                                    <span class="guarantee-text">Cam kết giao hàng<br>trễ hoàn 100% tiền</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Hero: Comparison Visualizer -->
                        <div class="hero-right">
                            <div class="comparison-card">
                                <h3>Bảng so sánh thời gian giao hàng</h3>
                                
                                <div class="comparison-items">
                                    <!-- Econo Flash Card -->
                                    <div class="comp-item econo">
                                        <div class="comp-left">
                                            <div class="comp-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
                                            <div class="comp-info">
                                                <h4>GIAO CẤP TỐC</h4>
                                                <p>Đặt và nhận siêu tốc</p>
                                            </div>
                                        </div>
                                        <div class="comp-right">
                                            <span class="comp-time">1 - 3 GIỜ</span>
                                            <span class="comp-badge">Giao Trong Ngày</span>
                                        </div>
                                    </div>

                                    <!-- Traditional Platform Card -->
                                    <div class="comp-item other">
                                        <div class="comp-left">
                                            <div class="comp-icon"><i class="fa-solid fa-box-open"></i></div>
                                            <div class="comp-info">
                                                <h4>Shopee / TikTok</h4>
                                                <p>Giao hàng tiêu chuẩn</p>
                                            </div>
                                        </div>
                                        <div class="comp-right">
                                            <span class="comp-time">3 - 4 NGÀY</span>
                                            <span class="comp-badge">Chờ Vận Chuyển</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Decorative Stats -->
                                <div class="stats-row">
                                    <div class="stat-col">
                                        <span class="stat-num">45 Phút</span>
                                        <span class="stat-lbl">Giao đồ ăn, nước uống</span>
                                    </div>
                                    <div class="stat-col">
                                        <span class="stat-num">Sáng Mai</span>
                                        <span class="stat-lbl">Cam kết muộn nhất</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- CATEGORIES SELECTOR SECTION -->
            <section id="quick-shop" class="categories-section">
                <div class="container">
                    
                    <div class="section-header">
                        <h2>Danh Mục Đặt Hàng Giao Ngay</h2>
                        <p>Chọn nhóm sản phẩm bạn đang cần gấp để xem sản phẩm hỗ trợ giao hỏa tốc.</p>
                    </div>

                    <!-- Category Horizontal Grid -->
                    <div class="cat-grid">
                        <!-- Category Card 1: Flowers -->
                        <div id="cat-flowers" class="cat-card" onclick="navigateToCategory('flowers')">
                            <div class="cat-emoji"><i class="fa-solid fa-gift"></i></div>
                            <span class="cat-title">Hoa Dịp Lễ</span>
                            <span class="cat-eta-badge">⚡ Giao nhanh 1h</span>
                        </div>

                        <!-- Category Card 2: Phone Accessories -->
                        <div id="cat-accessories" class="cat-card" onclick="navigateToCategory('accessories')">
                            <div class="cat-emoji"><i class="fa-solid fa-headphones"></i></div>
                            <span class="cat-title">Phụ Kiện Điện Thoại</span>
                            <span class="cat-eta-badge">⚡ Giao nhanh 1.5h</span>
                        </div>

                        <!-- Category Card 3: Bubble tea -->
                        <div id="cat-drinks" class="cat-card" onclick="navigateToCategory('drinks')">
                            <div class="cat-emoji"><i class="fa-solid fa-mug-hot"></i></div>
                            <span class="cat-title">Trà Sữa & Nước</span>
                            <span class="cat-eta-badge">⚡ Giao nhanh 45m</span>
                        </div>

                        <!-- Category Card 4: Food -->
                        <div id="cat-food" class="cat-card" onclick="navigateToCategory('food')">
                            <div class="cat-emoji"><i class="fa-solid fa-burger"></i></div>
                            <span class="cat-title">Đồ Ăn Vặt / Xế</span>
                            <span class="cat-eta-badge">⚡ Giao nhanh 30m</span>
                        </div>

                        <!-- Category Card 5: Others -->
                        <div id="cat-others" class="cat-card" onclick="navigateToCategory('others')">
                            <div class="cat-emoji"><i class="fa-solid fa-boxes-stacked"></i></div>
                            <span class="cat-title">Mặt Hàng Khác</span>
                            <span class="cat-eta-badge">⚡ Nhận sáng mai</span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- FLASH SALE SECTION -->
            <section class="flashsale-section">
                <div class="container">
                    <div class="flashsale-header">
                        <div class="flashsale-title-wrapper">
                            <span class="flashsale-icon"><i class="fa-solid fa-bolt-lightning"></i></span>
                            <h2>Flash Sale Trong Ngày</h2>
                            <span class="flashsale-badge">HỎA TỐC</span>
                        </div>
                        <div class="flashsale-timer" id="flashsale-timer">
                            <span>Kết thúc trong:</span>
                            <div class="timer-box" id="timer-hours">02</div> :
                            <div class="timer-box" id="timer-minutes">14</div> :
                            <div class="timer-box" id="timer-seconds">45</div>
                        </div>
                    </div>

                    <!-- Flash Sale Grid -->
                    <div class="products-grid" id="flashsale-products-container">
                        <!-- Dynamic Flash Sale products by JS -->
                    </div>
                </div>
            </section>

            <!-- FEATURED PRODUCTS SECTION -->
            <section class="featured-section" style="padding: 40px 0; background: white; border-bottom: 1px solid var(--border-color);">
                <div class="container">
                    <div class="products-header-row" style="margin-bottom: 24px;">
                        <div class="p-header-left">
                            <div class="p-header-top">
                                <span class="p-header-indicator" style="background: var(--secondary);"></span>
                                <span class="p-header-sub" style="color: var(--secondary);">Gợi ý cho bạn</span>
                            </div>
                            <h2 class="p-header-title">Sản Phẩm Nổi Bật Hôm Nay</h2>
                        </div>
                    </div>

                    <!-- Featured Products Grid -->
                    <div class="products-grid" id="featured-products-container">
                        <!-- Dynamic Featured products by JS -->
                    </div>
                </div>
            </section>

            <!-- HOW IT WORKS SECTION -->
            <section class="how-section">
                <div class="container">
                    <div class="section-header">
                        <h2>Cách Thức Hoạt Động Siêu Tốc</h2>
                        <p>Sự khác biệt giúp chúng tôi tối ưu hóa thời gian giao hàng đến tay bạn trong thời gian ngắn nhất.</p>
                    </div>

                    <div class="how-grid">
                        <!-- Step 1 -->
                        <div class="how-card">
                            <div class="how-num">1</div>
                            <h3>Đặt Hàng Gấp</h3>
                            <p>Chọn mặt hàng từ kho hàng nội thành có sẵn. Không cần ký gửi hay vận chuyển liên tỉnh.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="how-card">
                            <div class="how-num">2</div>
                            <h3>Đóng Gói Ngay</h3>
                            <p>Kho xử lý đơn tự động đóng gói sản phẩm trong 10-15 phút kể từ lúc xác nhận đơn hàng.</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="how-card">
                            <div class="how-num">3</div>
                            <h3>Giao Trong Vài Giờ</h3>
                            <p>Đối tác tài xế địa phương lấy hàng và giao ngay lập tức. Đảm bảo chất lượng sản phẩm.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CUSTOMER COMMITMENT SECTION -->
            <section class="commitment-section">
                <div class="container">
                    <div class="commitment-grid">
                        <div class="commit-left">
                            <span>⚡ CAM KẾT CHẤT LƯỢNG VÀ THỜI GIAN</span>
                            <h2>Trễ một phút - Bồi thường lập tức</h2>
                            <p>
                                Chúng tôi cam kết thời gian hiển thị trên đơn hàng là chính xác tuyệt đối. Nếu đơn hàng giao trễ hơn thời gian cam kết quá 15 phút, bạn sẽ nhận được voucher đền bù 100.000đ hoặc hoàn tiền đơn hàng.
                            </p>
                        </div>
                        <div class="commit-right">
                            <div class="shield-card">
                                <span class="shield-icon"><i class="fa-solid fa-shield-halved"></i></span>
                                <h3>100% Yên Tâm</h3>
                                <p>Hỗ trợ khách hàng hỏa tốc 24/7 qua chat & hotline</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- ================= CATEGORY DETAIL VIEW ================= -->
        <div id="category-detail-view" class="container" style="display: none; padding: 30px 20px;">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <span onclick="goBackToHome()" style="cursor: pointer; hover:color:var(--primary)">Trang chủ</span>
                <span class="sep">/</span>
                <span id="breadcrumb-category" style="color: var(--text-main); font-weight: 800;">Tên danh mục</span>
            </div>

            <!-- Back Link -->
            <div class="back-link" onclick="goBackToHome()">
                <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
            </div>

            <!-- Banner Header -->
            <div class="category-banner" id="category-banner-bg">
                <div class="banner-info">
                    <h2 id="category-banner-title">Tên danh mục</h2>
                    <p id="category-banner-desc">Mô tả danh mục ngắn gọn</p>
                </div>
                <div class="banner-icon" id="category-banner-icon"><i class="fa-solid fa-gift"></i></div>
            </div>

            <!-- Main Layout: Sidebar & Content -->
            <div class="category-layout">
                
                <!-- Sidebar filter -->
                <aside class="category-sidebar">
                    <div class="sidebar-title">Nhóm sản phẩm</div>
                    <ul class="sidebar-menu" id="sidebar-subcategories-list">
                        <!-- Dynamic sub-categories by JS -->
                    </ul>
                </aside>

                <!-- Product Grid view -->
                <div class="category-content">
                    
                    <div class="category-header-row">
                        <div class="category-results-txt">
                            Tìm thấy <span id="results-count" class="text-rose-600">0</span> sản phẩm khả dụng
                        </div>
                        <div>
                            <select id="sort-select" onchange="sortCategoryProducts()" class="sort-dropdown">
                                <option value="default">Sắp xếp: Mặc định</option>
                                <option value="price-asc">Giá: Thấp đến Cao</option>
                                <option value="price-desc">Giá: Cao đến Thấp</option>
                                <option value="eta-asc">Giao hàng nhanh nhất</option>
                            </select>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid" id="category-products-container">
                        <!-- Dynamic products by JS -->
                    </div>

                </div>

            </div>
        </div>

    </main>

    <!-- LOCATION MODAL -->
    <div class="modal" id="location-modal">
        <div class="modal-backdrop" onclick="closeLocationModal()"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h3>Chọn Địa Chỉ Giao Hàng</h3>
                <button class="close-btn" onclick="closeLocationModal()">&times;</button>
            </div>
            <p class="modal-desc" style="margin-bottom: 10px;">Nhập địa chỉ giao hàng để chúng tôi tính toán thời gian giao hỏa tốc chính xác nhất.</p>
            <div style="background: #fff9db; border: 1px solid #ffe066; padding: 10px 12px; border-radius: 12px; font-size: 11px; color: #b7791f; margin-bottom: 16px; font-weight: 600; line-height: 1.4;">
                <i class="fa-solid fa-circle-info"></i> Lưu ý: Mặt hàng đồ ăn, trà sữa, nước uống chỉ hỗ trợ giao hàng hỏa tốc tại khu vực lân cận Q.5 (Q.1, Q.3, Q.4, Q.5, Q.6, Q.8, Q.10, Q.11) để bảo đảm hương vị ngon nhất.
            </div>

            <div class="modal-input-wrapper">
                <input type="text" id="temp-address-input" placeholder="Nhập địa chỉ của bạn (VD: Quận 1, TP.HCM)..." class="modal-input">
            </div>
            
            <div>
                <span class="suggested-title">Khu vực nhận hàng gợi ý (TP.HCM)</span>
                <div class="suggested-chips">
                    <button class="chip" onclick="setTempAddress('Quận 5, TP.HCM')">Quận 5 (Hub trung tâm)</button>
                    <button class="chip" onclick="setTempAddress('Quận 1, TP.HCM')">Quận 1 (Hỏa tốc)</button>
                    <button class="chip" onclick="setTempAddress('Quận 7, TP.HCM')">Quận 7 (Giao nhanh)</button>
                    <button class="chip" onclick="setTempAddress('TP. Thủ Đức, TP.HCM')">Thủ Đức (Trong ngày)</button>
                    <button class="chip" onclick="setTempAddress('Quận Bình Tân, TP.HCM')">Bình Tân (Dưới 25km)</button>
                </div>
            </div>

            <div class="modal-footer">
                <button class="modal-btn cancel" onclick="closeLocationModal()">Đóng</button>
                <button class="modal-btn confirm" onclick="saveLocation()">Xác Nhận</button>
            </div>
        </div>
    </div>

    <!-- CART SIDEBAR -->
    <div class="cart-overlay" id="cart-overlay" onclick="toggleCart()"></div>
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <div class="cart-header-title">
                <i class="bi bi-cart4"></i>
                <h3>Giỏ Hàng Tạm Tính</h3>
            </div>
            <button class="close-btn" onclick="toggleCart()">&times;</button>
        </div>

        <div class="cart-items" id="cart-items-container">
            <!-- Dynamic items by JS -->
        </div>

        <div class="cart-footer">
            <div class="cart-total-row">
                <span>Tổng tiền:</span>
                <span id="cart-total-lbl">0 đ</span>
            </div>
            <div class="cart-promo-banner">
                <i class="fa-solid fa-circle-check"></i>
                <span>Giao siêu tốc trong 1-3 tiếng sau khi đặt!</span>
            </div>
            <button class="cart-checkout-btn">Tiến Hành Đặt Hàng</button>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="footer-logo-icon"><i class="fa-solid fa-bolt"></i></div>
                        <span>GIAO CẤP TỐC</span>
                    </div>
                    <p>Dịch vụ mua sắm giao hàng siêu tốc trong ngày, phục vụ mọi nhu cầu thiết yếu hằng ngày của bạn.</p>
                </div>

                <div class="footer-col">
                    <h4>Ngành hàng hỗ trợ</h4>
                    <ul class="footer-links">
                        <li><a href="#" onclick="navigateToCategory('flowers')">Hoa Tươi Dịp Lễ</a></li>
                        <li><a href="#" onclick="navigateToCategory('accessories')">Phụ Kiện Điện Thoại</a></li>
                        <li><a href="#" onclick="navigateToCategory('drinks')">Trà Sữa & Đồ Uống</a></li>
                        <li><a href="#" onclick="navigateToCategory('food')">Đồ Ăn & Thức Ăn Nhanh</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Hỗ trợ khách hàng</h4>
                    <ul class="footer-links">
                        <li><a href="#">Chính Sách Hoàn Tiền</a></li>
                        <li><a href="#">Chính Sách Bảo Mật</a></li>
                        <li><a href="#">Điều Khoản Dịch Vụ</a></li>
                        <li><a href="#">Liên Hệ Hotline</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Khu vực phục vụ</h4>
                    <p style="font-size: 11px; line-height: 1.6;">Hỗ trợ giao hàng hỏa tốc tại các khu vực trung tâm TP. Hồ Chí Minh, Hà Nội, Đà Nẵng.</p>
                </div>

            </div>
            
            <div class="footer-bottom">
                <span>© 2026 Giao Cấp Tốc. All rights reserved.</span>
                <span>Thiết kế giao diện mua sắm hỏa tốc thế hệ mới.</span>
            </div>
        </div>
    </footer>

    <!-- Vanilla Javascript Controllers -->
    <script>
        // State variables
        let currentView = 'home'; // 'home' or 'category'
        let activeCategory = 'flowers';
        let activeSubCategory = 'Tất cả';
        let searchQuery = '';
        let sortBy = 'default';
        let deliveryAddress = 'Quận 1, TP. Hồ Chí Minh';
        let cart = [];

        // Seeded Products with subCategories
        const products = [
            // Flowers
            { id: 1, category: 'flowers', subCategory: 'Bó hoa tươi', name: 'Bó hoa hướng dương rực rỡ (3 bông lớn)', price: 350000, fontAwesomeIcon: 'fa-solid fa-gift', eta: 'Giao trong 1 giờ', brand: 'Dalat Farm' },
            { id: 2, category: 'flowers', subCategory: 'Bó hoa tươi', name: 'Bó hồng đỏ tình yêu cổ điển (9 bông)', price: 450000, fontAwesomeIcon: 'fa-solid fa-gift', eta: 'Giao trong 1.5 giờ', brand: 'Love Florist' },
            { id: 3, category: 'flowers', subCategory: 'Cây trang trí', name: 'Chậu sen đá cảnh mini decor bàn làm việc', price: 85000, fontAwesomeIcon: 'fa-solid fa-seedling', eta: 'Giao trong 2 giờ', brand: 'Decor Garden' },
            { id: 4, category: 'flowers', subCategory: 'Giỏ quả tặng', name: 'Giỏ hoa quả tươi cao cấp (Tặng kèm thiệp)', price: 600000, fontAwesomeIcon: 'fa-solid fa-gift', eta: 'Giao trong 2 giờ', brand: 'Fresh Gift' },
            
            // Accessories
            { id: 5, category: 'accessories', subCategory: 'Ốp điện thoại', name: 'Ốp lưng iPhone 15 Pro Max Silicon chống sốc', price: 120000, fontAwesomeIcon: 'fa-solid fa-mobile-screen-button', eta: 'Giao trong 1 giờ', brand: 'Spigen' },
            { id: 6, category: 'accessories', subCategory: 'Kính cường lực', name: 'Kính cường lực KingKong full màn hình 9H', price: 90000, fontAwesomeIcon: 'fa-solid fa-shield-halved', eta: 'Giao trong 1 giờ', brand: 'KingKong' },
            { id: 7, category: 'accessories', subCategory: 'Tai nghe không dây', name: 'Tai nghe Bluetooth không dây Hoco EW45', price: 280000, fontAwesomeIcon: 'fa-solid fa-headphones', eta: 'Giao trong 1.5 giờ', brand: 'Hoco' },
            { id: 8, category: 'accessories', subCategory: 'Cáp sạc & Pin', name: 'Cáp sạc nhanh Type-C to Lightning 20W', price: 95000, fontAwesomeIcon: 'fa-solid fa-plug', eta: 'Giao trong 1 giờ', brand: 'Anker' },

            // Drinks
            { id: 9, category: 'drinks', subCategory: 'Trà sữa', name: 'Trà sữa trân châu hoàng kim size L (Nhiều đá)', price: 55000, fontAwesomeIcon: 'fa-solid fa-mug-hot', eta: 'Giao trong 45 phút', brand: 'Gong Cha' },
            { id: 10, category: 'drinks', subCategory: 'Trà hoa quả', name: 'Trà đào cam sả đá xay mát lạnh ngày hè', price: 48000, fontAwesomeIcon: 'fa-solid fa-glass-water', eta: 'Giao trong 45 phút', brand: 'The Coffee House' },
            { id: 11, category: 'drinks', subCategory: 'Trà sữa', name: 'Matcha Latte macchiato kem sữa béo ngậy', price: 60000, fontAwesomeIcon: 'fa-solid fa-mug-hot', eta: 'Giao trong 45 phút', brand: 'Phúc Long' },
            { id: 12, category: 'drinks', subCategory: 'Cà phê', name: 'Cafe muối đậm vị truyền thống Huế', price: 35000, fontAwesomeIcon: 'fa-solid fa-coffee', eta: 'Giao trong 30 phút', brand: 'Cà Phê Muối' },

            // Food
            { id: 13, category: 'food', subCategory: 'Gà rán & Burger', name: 'Gà rán giòn sốt cay Hàn Quốc (Combo 2 miếng)', price: 79000, fontAwesomeIcon: 'fa-solid fa-burger', eta: 'Giao trong 45 phút', brand: 'Lotteria' },
            { id: 14, category: 'food', subCategory: 'Ăn vặt', name: 'Bánh tráng trộn khô bò full topping tép mỡ', price: 30000, fontAwesomeIcon: 'fa-solid fa-bowl-food', eta: 'Giao trong 30 phút', brand: 'Bánh Tráng Cô Ba' },
            { id: 15, category: 'food', subCategory: 'Gà rán & Burger', name: 'Combo Burger Bò Phô Mai + Khoai tây chiên', price: 95000, fontAwesomeIcon: 'fa-solid fa-burger', eta: 'Giao trong 45 phút', brand: 'McDonalds' },
            { id: 16, category: 'food', subCategory: 'Mì cay', name: 'Mì cay hải sản kim chi cấp độ 2 nóng hổi', price: 55000, fontAwesomeIcon: 'fa-solid fa-bowl-hot', eta: 'Giao trong 40 phút', brand: 'Mì Cay Seoul' },

            // Others
            { id: 17, category: 'others', subCategory: 'Cáp sạc & Pin', name: 'Sạc dự phòng dung lượng cao 10.000mAh', price: 350000, fontAwesomeIcon: 'fa-solid fa-battery-three-quarters', eta: 'Giao trong 1.5 giờ', brand: 'Xiaomi' },
            { id: 18, category: 'others', name: 'Bó hoa sáp thơm cao cấp lưu hương lâu', price: 250000, fontAwesomeIcon: 'fa-solid fa-gift', eta: 'Giao trong 2 giờ', brand: 'Flower Corner' },
            { id: 19, category: 'others', name: 'Hộp súp cua óc heo trứng bắc thảo nóng', price: 40000, fontAwesomeIcon: 'fa-solid fa-bowl-food', eta: 'Giao trong 30 phút', brand: 'Súp Cua Hạnh' }
        ];

        // Seeded Flash Sale Products
        const flashProducts = [
            { id: 101, category: 'flowers', name: 'Bó hồng đỏ tình yêu cổ điển (9 bông)', price: 315000, oldPrice: 450000, discount: 30, sold: 14, stock: 20, fontAwesomeIcon: 'fa-solid fa-gift', eta: 'Giao trong 1 giờ', brand: 'Love Florist' },
            { id: 102, category: 'accessories', name: 'Tai nghe Bluetooth không dây Hoco EW45', price: 199000, oldPrice: 280000, discount: 29, sold: 18, stock: 25, fontAwesomeIcon: 'fa-solid fa-headphones', eta: 'Giao trong 1.5 giờ', brand: 'Hoco' },
            { id: 103, category: 'drinks', name: 'Trà sữa trân châu hoàng kim size L', price: 39000, oldPrice: 55000, discount: 29, sold: 32, stock: 50, fontAwesomeIcon: 'fa-solid fa-mug-hot', eta: 'Giao trong 45 phút', brand: 'Gong Cha' },
            { id: 104, category: 'food', name: 'Gà rán giòn sốt cay Hàn Quốc (Combo 2 miếng)', price: 49000, oldPrice: 79000, discount: 38, sold: 9, stock: 15, fontAwesomeIcon: 'fa-solid fa-burger', eta: 'Giao trong 45 phút', brand: 'Lotteria' }
        ];

        // Format Currency
        function formatPrice(val) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(val);
        }

        // Navigate to Category details view page
        function navigateToCategory(cat) {
            currentView = 'category';
            activeCategory = cat;
            activeSubCategory = 'Tất cả';
            
            // Toggle view visibility
            document.getElementById('home-view').style.display = 'none';
            document.getElementById('category-detail-view').style.display = 'block';
            
            // Set header scroll view to top
            window.scrollTo(0, 0);

            // Render category header banner details
            const catMeta = {
                flowers: { title: 'Hoa Tươi Dịp Lễ', desc: 'Thiết kế hoa tươi đẹp mắt, hoa chúc mừng, sinh nhật, giao nhanh nội thành cam kết chất lượng hoa tươi.', iconClass: 'fa-solid fa-gift', bannerClass: 'banner-flowers' },
                accessories: { title: 'Phụ Kiện Điện Thoại', desc: 'Ốp lưng thời trang, kính cường lực chất lượng cao, tai nghe bluetooth, dây sạc cáp chính hãng giao hỏa tốc.', iconClass: 'fa-solid fa-headphones', bannerClass: 'banner-accessories' },
                drinks: { title: 'Trà Sữa & Nước Uống', desc: 'Giải khát tức thì với các loại trà sữa trân châu, trà đào, latte đá xay thơm ngon từ các thương hiệu nổi tiếng.', iconClass: 'fa-solid fa-mug-hot', bannerClass: 'banner-drinks' },
                food: { title: 'Đồ Ăn & Thức Ăn Nhanh', desc: 'Burger bò phô mai, gà rán giòn rụm, bánh tráng trộn ăn vặt văn phòng giao nóng hổi trong 30-45 phút.', iconClass: 'fa-solid fa-burger', bannerClass: 'banner-food' },
                others: { title: 'Mặt Hàng Khác', desc: 'Các mặt hàng pin sạc dự phòng, hoa sáp quà tặng và súp nóng thơm ngon phục vụ bạn giao nhanh.', iconClass: 'fa-solid fa-boxes-stacked', bannerClass: 'banner-others' }
            };

            const meta = catMeta[cat];
            document.getElementById('breadcrumb-category').textContent = meta.title;
            document.getElementById('category-banner-title').textContent = meta.title;
            document.getElementById('category-banner-desc').textContent = meta.desc;
            
            // Set banner bg theme and icon
            const bannerBg = document.getElementById('category-banner-bg');
            bannerBg.className = 'category-banner ' + meta.bannerClass;
            document.getElementById('category-banner-icon').innerHTML = `<i class="${meta.iconClass}"></i>`;

            // Render Sidebar sub-categories
            renderSidebar();
            renderCategoryProducts();
        }

        // Return back to Home view
        function goBackToHome() {
            currentView = 'home';
            document.getElementById('category-detail-view').style.display = 'none';
            document.getElementById('home-view').style.display = 'block';
            window.scrollTo(0, 0);
        }

        // Render Sidebar subcategories list
        function renderSidebar() {
            const listContainer = document.getElementById('sidebar-subcategories-list');
            
            // Extract subcategories for current category
            const subCategories = ['Tất cả'];
            products.forEach(p => {
                if (p.category === activeCategory && p.subCategory && !subCategories.includes(p.subCategory)) {
                    subCategories.push(p.subCategory);
                }
            });

            listContainer.innerHTML = subCategories.map(sub => {
                const isActive = activeSubCategory === sub;
                // Count products in this sub-category
                let count = 0;
                if (sub === 'Tất cả') {
                    count = products.filter(p => p.category === activeCategory).length;
                } else {
                    count = products.filter(p => p.category === activeCategory && p.subCategory === sub).length;
                }

                return `
                    <li class="sidebar-menu-item ${isActive ? 'active' : ''}" onclick="filterSubCategory('${sub}')">
                        <span>${sub}</span>
                        <span class="count">${count}</span>
                    </li>
                `;
            }).join('');
        }

        // Filter products by subcategory selection
        function filterSubCategory(sub) {
            activeSubCategory = sub;
            renderSidebar();
            renderCategoryProducts();
        }

        // Render Category products with filters and sorting
        function renderCategoryProducts() {
            const container = document.getElementById('category-products-container');
            const countLbl = document.getElementById('results-count');

            // 1. Filter by category
            let filtered = products.filter(p => p.category === activeCategory);

            // 2. Filter by subcategory
            if (activeSubCategory !== 'Tất cả') {
                filtered = filtered.filter(p => p.subCategory === activeSubCategory);
            }

            // 3. Filter by search query (if any)
            if (searchQuery.trim() !== '') {
                const query = searchQuery.toLowerCase().trim();
                filtered = filtered.filter(p => p.name.toLowerCase().includes(query));
            }

            // 4. Sorting logic
            if (sortBy === 'price-asc') {
                filtered.sort((a, b) => a.price - b.price);
            } else if (sortBy === 'price-desc') {
                filtered.sort((a, b) => b.price - a.price);
            } else if (sortBy === 'eta-asc') {
                // simple parse logic for eta matching (e.g. "Giao trong 30 phút" -> 30)
                const getMinutes = (str) => {
                    if (str.includes('phút')) {
                        return parseInt(str.match(/\d+/)[0]);
                    }
                    if (str.includes('giờ')) {
                        return parseFloat(str.match(/\d+(\.\d+)?/)[0]) * 60;
                    }
                    return 9999;
                };
                filtered.sort((a, b) => getMinutes(a.eta) - getMinutes(b.eta));
            }

            // Set result count label
            countLbl.textContent = filtered.length;

            if (filtered.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <span class="empty-icon"><i class="bi bi-search"></i></span>
                        <h4 class="empty-title">Không tìm thấy sản phẩm</h4>
                        <p class="empty-desc">Nhóm sản phẩm này chưa khả dụng tại kho gần nhất.</p>
                    </div>
                `;
                return;
            }

            container.innerHTML = filtered.map(product => `
                <div class="product-card">
                    <div class="p-eta-badge">
                        <span>⚡</span> ${product.eta}
                    </div>
                    <div class="p-img-area">
                        <i class="${product.fontAwesomeIcon}"></i>
                    </div>
                    <div class="p-info">
                        <div>
                            <span class="p-brand">${product.brand}</span>
                            <h3 class="p-name">${product.name}</h3>
                            <div class="p-stock">
                                <span class="stock-dot"></span>
                                <span class="stock-txt">Sẵn sàng giao</span>
                            </div>
                            ${(product.category === 'food' || product.category === 'drinks') ? `
                                <div style="font-size: 9px; color: #d84315; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 4px;">
                                    <i class="fa-solid fa-circle-exclamation"></i> Chỉ giao Q1, 3, 4, 5, 6, 8, 10, 11
                                </div>
                            ` : ''}
                        </div>
                        <div class="p-footer-row">
                            <div class="price-wrapper">
                                <span>Giá bán lẻ</span>
                                <span>${formatPrice(product.price)}</span>
                            </div>
                            <button class="add-to-cart-btn" onclick="addToCart(${product.id})">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Sort Select handling
        function sortCategoryProducts() {
            sortBy = document.getElementById('sort-select').value;
            renderCategoryProducts();
        }

        // Filter products from search bar input
        function filterProducts() {
            searchQuery = document.getElementById('search-input').value;
            if (currentView === 'category') {
                renderCategoryProducts();
            }
        }

        // Add to Cart
        function addToCart(productId) {
            let product = products.find(p => p.id === productId);
            if (!product) {
                product = flashProducts.find(p => p.id === productId);
            }
            if (product) {
                const addrLower = deliveryAddress.toLowerCase();
                
                // 1. Check if inside TP.HCM (25km limit)
                const isInsideHCMC = addrLower.includes('hồ chí minh') || addrLower.includes('tphcm') || addrLower.includes('tp.hcm') || addrLower.includes('hcm') || addrLower.includes('quận') || addrLower.includes('q.');
                const isOtherCity = addrLower.includes('hà nội') || addrLower.includes('đà nẵng') || addrLower.includes('ha noi') || addrLower.includes('da nang');
                
                if (isOtherCity || !isInsideHCMC) {
                    alert(`⚠️ Giao Cấp Tốc hiện chỉ phục vụ giao hàng hỏa tốc trong phạm vi TP. Hồ Chí Minh (bán kính dưới 25km từ kho hàng Quận 5).\n\nĐịa chỉ hiện tại của bạn là '${deliveryAddress}'. Vui lòng cập nhật địa chỉ nhận hàng tại TP.HCM.`);
                    openLocationModal();
                    return;
                }

                // 2. Check delivery restriction for food and drinks
                if (product.category === 'food' || product.category === 'drinks') {
                    const allowedLocalDistricts = ['Quận 1', 'Quận 3', 'Quận 4', 'Quận 5', 'Quận 6', 'Quận 8', 'Quận 10', 'Quận 11', 'Q.1', 'Q.3', 'Q.4', 'Q.5', 'Q.6', 'Q.8', 'Q.10', 'Q.11', 'Q1', 'Q3', 'Q4', 'Q5', 'Q6', 'Q8', 'Q10', 'Q11', 'Bình Thạnh', 'Phú Nhuận'];
                    const isAllowedLocal = allowedLocalDistricts.some(d => addrLower.includes(d.toLowerCase()));
                    if (!isAllowedLocal) {
                        const changeAddress = confirm(`⚠️ Mặt hàng ẩm thực này chỉ hỗ trợ giao hỏa tốc tại các quận trung tâm lân cận Q.5 (Q.1, 3, 4, 5, 6, 8, 10, 11, Phú Nhuận, Bình Thạnh) để bảo đảm chất lượng tươi ngon nóng hổi.\n\nBạn có muốn đổi địa chỉ giao hàng gần hơn không?`);
                        if (changeAddress) {
                            openLocationModal();
                            return;
                        }
                    }
                }

                cart.push({
                    uniqueId: Date.now() + Math.random(),
                    ...product
                });
                updateCartUI();
            }
        }

        // Remove from Cart
        function removeFromCart(uniqueId) {
            cart = cart.filter(item => item.uniqueId !== uniqueId);
            updateCartUI();
        }

        // Update Cart UI components
        function updateCartUI() {
            document.getElementById('cart-badge-count').textContent = cart.length;

            const container = document.getElementById('cart-items-container');
            const totalLbl = document.getElementById('cart-total-lbl');
            
            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="cart-empty-txt">
                        <i class="bi bi-cart-x"></i>
                        <span>Giỏ hàng trống.</span>
                    </div>
                `;
                totalLbl.textContent = '0 đ';
                return;
            }

            container.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <span class="cart-item-emoji"><i class="${item.fontAwesomeIcon}"></i></span>
                    <div class="cart-item-info">
                        <h4 class="cart-item-name">${item.name}</h4>
                        <span class="cart-item-eta">⚡ ${item.eta}</span>
                        <span class="cart-item-price">${formatPrice(item.price)}</span>
                    </div>
                    <button class="cart-item-remove" onclick="removeFromCart(${item.uniqueId})">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            `).join('');

            const total = cart.reduce((sum, item) => sum + item.price, 0);
            totalLbl.textContent = formatPrice(total);
        }

        // Toggle Cart Sidebar
        function toggleCart() {
            const sidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('cart-overlay');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
        }

        // Location Modal Controls
        function openLocationModal() {
            document.getElementById('temp-address-input').value = deliveryAddress;
            document.getElementById('location-modal').classList.add('open');
        }

        function closeLocationModal() {
            document.getElementById('location-modal').classList.remove('open');
        }

        function setTempAddress(addr) {
            document.getElementById('temp-address-input').value = addr;
        }

        function saveLocation() {
            const addr = document.getElementById('temp-address-input').value;
            if (addr.trim() !== '') {
                deliveryAddress = addr;
                document.getElementById('delivery-address-lbl').textContent = addr;
            }
            closeLocationModal();
        }

        // Render Flash Sale products
        function renderFlashSaleProducts() {
            const container = document.getElementById('flashsale-products-container');
            if (!container) return;

            container.innerHTML = flashProducts.map(product => {
                const soldPercent = Math.round((product.sold / product.stock) * 100);
                return `
                    <div class="product-card flash">
                        <div class="discount-tag">-${product.discount}%</div>
                        <div class="p-eta-badge">
                            <span>⚡</span> ${product.eta}
                        </div>
                        <div class="p-img-area">
                            <i class="${product.fontAwesomeIcon}"></i>
                        </div>
                        <div class="p-info">
                            <div>
                                <span class="p-brand">${product.brand}</span>
                                <h3 class="p-name">${product.name}</h3>
                                <div class="progress-container">
                                    <div class="progress-bar-bg">
                                        <div class="progress-bar-fill" style="width: ${soldPercent}%"></div>
                                    </div>
                                    <div class="progress-text">
                                        <span>Đã bán ${product.sold}</span>
                                        <span>Còn ${product.stock - product.sold}</span>
                                    </div>
                                </div>
                                ${(product.category === 'food' || product.category === 'drinks') ? `
                                    <div style="font-size: 9px; color: #d84315; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 4px;">
                                        <i class="fa-solid fa-circle-exclamation"></i> Chỉ giao Q1, 3, 4, 5, 6, 8, 10, 11
                                    </div>
                                ` : ''}
                            </div>
                            <div class="p-footer-row">
                                <div class="price-wrapper">
                                    <span>Giá Flash Sale</span>
                                    <span>${formatPrice(product.price)} <span class="old-price">${formatPrice(product.oldPrice)}</span></span>
                                </div>
                                <button class="add-to-cart-btn" onclick="addToCart(${product.id})">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // Start countdown timer for Flash Sale (counts down to 8 hours from now)
        function startFlashSaleTimer() {
            let hours = 2;
            let minutes = 14;
            let seconds = 45;

            const updateTimer = () => {
                if (seconds > 0) {
                    seconds--;
                } else {
                    if (minutes > 0) {
                        minutes--;
                        seconds = 59;
                    } else {
                        if (hours > 0) {
                            hours--;
                            minutes = 59;
                            seconds = 59;
                        } else {
                            // Reset to another 8 hours for demo
                            hours = 8;
                            minutes = 0;
                            seconds = 0;
                        }
                    }
                }

                const hrsEl = document.getElementById('timer-hours');
                const minsEl = document.getElementById('timer-minutes');
                const secsEl = document.getElementById('timer-seconds');

                if (hrsEl) hrsEl.textContent = String(hours).padStart(2, '0');
                if (minsEl) minsEl.textContent = String(minutes).padStart(2, '0');
                if (secsEl) secsEl.textContent = String(seconds).padStart(2, '0');
            };

            setInterval(updateTimer, 1000);
        }

        // Render Featured Products
        function renderFeaturedProducts() {
            const container = document.getElementById('featured-products-container');
            if (!container) return;

            // Pick 4 hot products from main list
            const featuredIds = [1, 7, 9, 15];
            const hotProducts = products.filter(p => featuredIds.includes(p.id));

            container.innerHTML = hotProducts.map(product => `
                <div class="product-card">
                    <div class="p-eta-badge" style="background: rgba(220, 38, 38, 0.95); backdrop-filter: blur(4px);">
                        <span>🔥</span> BÁN CHẠY
                    </div>
                    <div class="p-img-area">
                        <i class="${product.fontAwesomeIcon}"></i>
                    </div>
                    <div class="p-info">
                        <div>
                            <span class="p-brand">${product.brand}</span>
                            <h3 class="p-name">${product.name}</h3>
                            <div class="p-stock">
                                <span class="stock-dot"></span>
                                <span class="stock-txt">Giao hỏa tốc ${product.eta.toLowerCase()}</span>
                            </div>
                            ${(product.category === 'food' || product.category === 'drinks') ? `
                                <div style="font-size: 9px; color: #d84315; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 4px;">
                                    <i class="fa-solid fa-circle-exclamation"></i> Chỉ giao Q1, 3, 4, 5, 6, 8, 10, 11
                                </div>
                            ` : ''}
                        </div>
                        <div class="p-footer-row">
                            <div class="price-wrapper">
                                <span>Giá bán lẻ</span>
                                <span>${formatPrice(product.price)}</span>
                            </div>
                            <button class="add-to-cart-btn" onclick="addToCart(${product.id})">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Init render
        window.addEventListener('DOMContentLoaded', () => {
            updateCartUI();
            renderFlashSaleProducts();
            renderFeaturedProducts();
            startFlashSaleTimer();
        });
    </script>
    <!-- FLOATING CHAT BUBBLES -->
    <div class="chat-bubbles-container">
        <!-- Zalo -->
        <a href="#" class="chat-bubble bubble-zalo" data-tooltip="Zalo hỗ trợ nhanh">
            <span style="font-family: sans-serif; font-size: 12px; letter-spacing: -0.5px;">Zalo</span>
        </a>
        <!-- Messenger -->
        <a href="#" class="chat-bubble bubble-messenger" data-tooltip="Messenger Facebook">
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>
        <!-- Telegram -->
        <a href="#" class="chat-bubble bubble-telegram" data-tooltip="Telegram Channel">
            <i class="fa-brands fa-telegram"></i>
        </a>
        <!-- Live Web Chat -->
        <div class="chat-bubble bubble-webchat" data-tooltip="Chat trực tiếp Web" onclick="alert('Hệ thống Chat đang kết nối với tổng đài viên Giao Cấp Tốc...')">
            <i class="fa-solid fa-headset"></i>
        </div>
    </div>

</body>
</html>
