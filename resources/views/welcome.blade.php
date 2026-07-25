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
            max-width: 280px;
            overflow: hidden;
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
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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

        /* Free OpenStreetMap Autocomplete Dropdown styling */
        .osm-suggestions-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            z-index: 9999;
            max-height: 220px;
            overflow-y: auto;
            display: none;
            margin-top: 6px;
            padding: 6px 0;
            list-style: none;
            text-align: left;
        }

        .osm-suggestions-list.show {
            display: block;
        }

        .osm-suggestion-item {
            padding: 10px 16px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            color: var(--text-main);
        }

        .osm-suggestion-item:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

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
            display: flex;
            gap: 8px;
        }

        .modal-locate-btn {
            background: var(--primary-light);
            color: var(--primary);
            border: 1px solid rgba(255, 87, 34, 0.2);
            border-radius: 12px;
            font-size: 11px;
            font-weight: 750;
            white-space: nowrap;
            padding: 0 16px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .modal-locate-btn:hover {
            background: var(--primary);
            color: white;
        }

        .modal-locate-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
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

        /* CHECKOUT FORM IN SIDEBAR */
        .checkout-form-container {
            border-top: 1.5px solid var(--border-color);
            padding: 15px 0 0;
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .checkout-input {
            width: 100%;
            padding: 10px 14px;
            border-radius: 10px;
            border: 1.5px solid var(--border-color);
            font-size: 12px;
            font-weight: 500;
            outline: none;
        }

        .checkout-input:focus {
            border-color: var(--primary);
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
            border: none;
            width: 100%;
            cursor: pointer;
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
            transition: all 0.3s ease;
        }

        body.cart-open .chat-bubbles-container {
            opacity: 0;
            pointer-events: none;
            visibility: hidden;
            transform: translateY(20px);
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

        .chat-bubble::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid currentColor;
            opacity: 0;
            pointer-events: none;
        }

        .bubble-zalo { background: #0068ff; color: #0068ff; }
        .bubble-zalo span { color: white; }
        .bubble-zalo::before { animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite; }
        .bubble-messenger { background: linear-gradient(135deg, #00c6ff, #0072ff); color: #00c6ff; }
        .bubble-messenger i { color: white; }
        .bubble-telegram { background: #229ED9; color: #229ED9; }
        .bubble-telegram i { color: white; }
        .bubble-webchat { background: linear-gradient(135deg, var(--primary), var(--secondary)); color: var(--primary); }
        .bubble-webchat i { color: white; }
        .bubble-webchat::before { animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite 0.5s; }

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
            0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(216, 67, 21, 0.4); }
            50% { transform: scale(1.08); box-shadow: 0 0 0 8px rgba(216, 67, 21, 0); }
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

        /* User Account Dropdown */
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-dropdown-btn {
            background: #f1f5f9;
            color: var(--text-main);
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 12px;
            font-size: 13px;
            display: flex;
            align-items: center;
            border: 1.5px solid var(--border-color);
            transition: var(--transition);
        }

        .user-dropdown-btn:hover {
            background: #e2e8f0;
        }

        .user-dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-color);
            min-width: 210px;
            display: none;
            flex-direction: column;
            padding: 8px 0;
            z-index: 150;
        }

        .user-dropdown-menu.open {
            display: flex;
        }

        .user-dropdown-menu a {
            padding: 10px 18px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-main);
            display: flex;
            align-items: center;
            transition: var(--transition);
            text-decoration: none;
        }

        .user-dropdown-menu a i {
            margin-right: 12px;
            width: 16px;
            text-align: center;
            font-size: 14px;
        }

        .user-dropdown-menu a:hover {
            background: #f8fafc;
            color: var(--primary);
        }

        .user-dropdown-menu .dropdown-divider {
            height: 1px;
            background: #f1f5f9;
            margin: 6px 0;
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
                    
                    @auth
                        @if (Auth::user()->role === 'superadmin')
                            <a href="/admin/dashboard" class="login-btn" style="text-decoration: none;"><i class="fa-solid fa-gauge me-1"></i> Admin</a>
                        @else
                            <div class="user-dropdown">
                                <button class="user-dropdown-btn" onclick="toggleUserDropdown(event)">
                                    <i class="fa-regular fa-user me-1"></i> {{ Auth::user()->name }}
                                </button>
                                <div class="user-dropdown-menu" id="user-dropdown-menu">
                                    <a href="/tai-khoan"><i class="fa-solid fa-receipt me-2"></i> Đơn hàng của tôi</a>
                                    <a href="/tai-khoan?tab=favorites"><i class="fa-solid fa-heart me-2"></i> Sản phẩm yêu thích</a>
                                    <a href="/tai-khoan?tab=addresses"><i class="fa-solid fa-map-location-dot me-2"></i> Sổ địa chỉ</a>
                                    <a href="/tai-khoan?tab=profile"><i class="fa-solid fa-user me-2"></i> Hồ sơ tài khoản</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/logout" class="text-danger"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Đăng xuất</a>
                                </div>
                            </div>
                        @endif
                    @else
                        <a href="/login" class="login-btn" style="text-decoration: none;">Đăng nhập</a>
                    @endauth
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
                        @foreach ($categories as $cat)
                            <div id="cat-{{ $cat->slug }}" class="cat-card" onclick="navigateToCategory('{{ $cat->slug }}')">
                                <div class="cat-emoji"><i class="{{ $cat->icon_class }}"></i></div>
                                <span class="cat-title">{{ $cat->name }}</span>
                                <span class="cat-eta-badge">{{ $cat->eta_label }}</span>
                            </div>
                        @endforeach
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
                        @foreach ($flashProducts as $product)
                            @php
                                $soldPercent = $product->stock > 0 ? round(($product->sold / ($product->stock + $product->sold)) * 100) : 0;
                            @endphp
                            <div class="product-card flash">
                                <div class="discount-tag">-{{ $product->discount }}%</div>
                                <div class="p-eta-badge">
                                    <span>⚡</span> {{ $product->eta }}
                                </div>
                                <div class="p-img-area">
                                    @if ($product->image_path)
                                        <img src="{{ $product->image_path }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <i class="{{ $product->font_awesome_icon }}"></i>
                                    @endif
                                </div>
                                <div class="p-info">
                                    <div>
                                        <span class="p-brand">{{ $product->brand }}</span>
                                        <h3 class="p-name">{{ $product->name }}</h3>
                                        <div class="progress-container">
                                            <div class="progress-bar-bg">
                                                <div class="progress-bar-fill" style="width: {{ $soldPercent }}%"></div>
                                            </div>
                                            <div class="progress-text">
                                                <span>Đã bán {{ $product->sold }}</span>
                                                <span>Còn {{ $product->stock }}</span>
                                            </div>
                                        </div>
                                        @if ($product->category->slug === 'food' || $product->category->slug === 'drinks')
                                            <div style="font-size: 9px; color: #d84315; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 4px;">
                                                <i class="fa-solid fa-circle-exclamation"></i> Chỉ giao Q1, 3, 4, 5, 6, 8, 10, 11
                                            </div>
                                        @endif
                                    </div>
                                    <div class="p-footer-row">
                                        <div class="price-wrapper">
                                            <span>Giá Flash Sale</span>
                                            <span>{{ number_format($product->price, 0, ',', '.') }}đ <span class="old-price">{{ number_format($product->old_price, 0, ',', '.') }}đ</span></span>
                                        </div>
                                        <button class="add-to-cart-btn" onclick="addToCart({{ $product->id }})">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        @foreach ($featuredProducts as $product)
                            <div class="product-card">
                                <div class="p-eta-badge" style="background: rgba(220, 38, 38, 0.95); backdrop-filter: blur(4px);">
                                    <span>🔥</span> BÁN CHẠY
                                </div>
                                <div class="p-img-area">
                                    @if ($product->image_path)
                                        <img src="{{ $product->image_path }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <i class="{{ $product->font_awesome_icon }}"></i>
                                    @endif
                                </div>
                                <div class="p-info">
                                    <div>
                                        <span class="p-brand">{{ $product->brand }}</span>
                                        <h3 class="p-name">{{ $product->name }}</h3>
                                        <div class="p-stock">
                                            <span class="stock-dot"></span>
                                            <span class="stock-txt">Giao hỏa tốc {{ strtolower($product->eta) }}</span>
                                        </div>
                                        @if ($product->category->slug === 'food' || $product->category->slug === 'drinks')
                                            <div style="font-size: 9px; color: #d84315; font-weight: 700; display: flex; align-items: center; gap: 4px; margin-top: 4px;">
                                                <i class="fa-solid fa-circle-exclamation"></i> Chỉ giao Q1, 3, 4, 5, 6, 8, 10, 11
                                            </div>
                                        @endif
                                    </div>
                                    <div class="p-footer-row">
                                        <div class="price-wrapper">
                                            <span>Giá bán lẻ</span>
                                            <span>{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                        </div>
                                        <button class="add-to-cart-btn" onclick="addToCart({{ $product->id }})">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        <div class="how-card">
                            <div class="how-num">1</div>
                            <h3>Đặt Hàng Gấp</h3>
                            <p>Chọn mặt hàng từ kho hàng nội thành có sẵn. Không cần ký gửi hay vận chuyển liên tỉnh.</p>
                        </div>
                        <div class="how-card">
                            <div class="how-num">2</div>
                            <h3>Đóng Gói Ngay</h3>
                            <p>Kho xử lý đơn tự động đóng gói sản phẩm trong 10-15 phút kể từ lúc xác nhận đơn hàng.</p>
                        </div>
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
                <input type="text" id="temp-address-input" placeholder="Nhập địa chỉ của bạn (VD: Quận 1, TP.HCM)..." class="modal-input" style="flex-grow: 1;">
                <button type="button" class="modal-locate-btn" onclick="triggerManualGeolocation()">
                    <i class="fa-solid fa-location-crosshairs"></i> Tự động định vị
                </button>
            </div>
            
            <div>
                <span class="suggested-title">Khu vực nhận hàng gợi ý (TP.HCM)</span>
                <div class="suggested-chips">
                    <button class="chip" onclick="setTempAddress('Quận 5, TP.HCM', 10.7541, 106.6625)">Quận 5 (Hub trung tâm)</button>
                    <button class="chip" onclick="setTempAddress('Quận 1, TP.HCM', 10.7783, 106.6967)">Quận 1 (Hỏa tốc)</button>
                    <button class="chip" onclick="setTempAddress('Quận 7, TP.HCM', 10.7324, 106.7269)">Quận 7 (Giao nhanh)</button>
                    <button class="chip" onclick="setTempAddress('TP. Thủ Đức, TP.HCM', 10.8494, 106.7537)">Thủ Đức (Trong ngày)</button>
                    <button class="chip" onclick="setTempAddress('Quận Bình Tân, TP.HCM', 10.7628, 106.5982)">Bình Tân (Dưới 25km)</button>
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

            <!-- CHECKOUT FORM -->
            <form action="/dat-hang" method="POST" id="checkout-form" class="checkout-form-container">
                @csrf
                <input type="hidden" name="items" id="checkout-items-json">
                <div class="mb-2">
                    <input type="text" name="customer_name" required placeholder="Họ tên người nhận" class="checkout-input">
                </div>
                <div class="mb-2">
                    <input type="text" name="customer_phone" required placeholder="Số điện thoại giao hàng" class="checkout-input">
                </div>
                <div class="mb-2">
                    <input type="text" name="customer_address" id="checkout-address-input" required placeholder="Địa chỉ giao nhận cụ thể" class="checkout-input">
                </div>
                <button type="submit" class="cart-checkout-btn">Tiến Hành Đặt Hàng</button>
            </form>
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
                        @foreach ($categories as $cat)
                            <li><a href="/danh-muc/{{ $cat->slug }}">{{ $cat->name }}</a></li>
                        @endforeach
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
                    <p style="font-size: 11px; line-height: 1.6;">Hỗ trợ giao hàng hỏa tốc tại các khu vực trung tâm TP. Hồ Chí Minh trong phạm vi 25km.</p>
                </div>

            </div>
            
            <div class="footer-bottom">
                <span>© 2026 Giao Cấp Tốc. All rights reserved.</span>
                <span>Thiết kế giao diện mua sắm hỏa tốc thế hệ mới.</span>
            </div>
        </div>
    </footer>

    <!-- JS data seeding from backend -->
    <script>
        // Data populated from database
        const products = @json($categories->flatMap->products);
        const flashProducts = @json($flashProducts);
        
        const isUserLoggedIn = @json(auth()->check());
        let deliveryAddress = @json(auth()->user()->address ?? 'Quận 5, TP. Hồ Chí Minh');
        let lastSyncedAddress = deliveryAddress;
        
        // Coordinates for precise distance calculation (default to Q5 center)
        let deliveryLat = 10.7541;
        let deliveryLon = 106.6625;
        let tempLat = 10.7541;
        let tempLon = 106.6625;

        const WAREHOUSE_LAT = 10.7541; // Hub Quận 5
        const WAREHOUSE_LON = 106.6625;

        let cart = [];

        // Format Currency
        // Free OpenStreetMap Autocomplete setup
        function setupOSMAutocomplete(inputId, onSelectCallback) {
            const input = document.getElementById(inputId);
            if (!input) return;

            // Make sure parent is relative for dropdown alignment
            input.parentNode.style.position = 'relative';

            // Create suggestions container
            const container = document.createElement('ul');
            container.className = 'osm-suggestions-list';
            input.parentNode.appendChild(container);

            let debounceTimer;

            input.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                const query = input.value.trim();
                
                if (query.length < 3) {
                    container.classList.remove('show');
                    return;
                }

                debounceTimer = setTimeout(() => {
                    fetch(`https://nominatim.openstreetmap.org/search?format=json&addressdetails=1&limit=5&q=${encodeURIComponent(query)}&countrycodes=vn`)
                        .then(res => res.json())
                        .then(data => {
                            if (data.length === 0) {
                                container.classList.remove('show');
                                return;
                            }

                            container.innerHTML = data.map(item => `
                                <li class="osm-suggestion-item" data-address="${item.display_name}" data-lat="${item.lat}" data-lon="${item.lon}">
                                    <i class="fa-solid fa-map-pin text-muted" style="font-size: 11px; margin-right: 8px;"></i>
                                    <span style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-size: 12px; font-weight: 500;">${item.display_name}</span>
                                </li>
                            `).join('');
                            container.classList.add('show');

                            // Click item
                            const items = container.querySelectorAll('.osm-suggestion-item');
                            items.forEach(el => {
                                el.addEventListener('click', () => {
                                    const selectedAddress = el.getAttribute('data-address');
                                    const lat = parseFloat(el.getAttribute('data-lat'));
                                    const lon = parseFloat(el.getAttribute('data-lon'));
                                    input.value = selectedAddress;
                                    container.classList.remove('show');
                                    if (onSelectCallback) {
                                        onSelectCallback(selectedAddress, lat, lon);
                                    }
                                });
                            });
                        })
                        .catch(err => console.error('OSM Fetch Error:', err));
                }, 400);
            });

            // Close on click outside
            document.addEventListener('click', (e) => {
                if (e.target !== input && e.target !== container) {
                    container.classList.remove('show');
                }
            });
        }

        function formatPrice(val) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(val);
        }

        // Navigate to Category details view page (Blade route for SEO)
        function navigateToCategory(slug) {
            window.location.href = `/danh-muc/${slug}`;
        }

        function goBackToHome() {
            window.location.href = '/';
        }

        // Calculate distance in km between two lat/lng coordinates (Haversine formula)
        function calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371; // Radius of the earth in km
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            return R * c; // Distance in km
        }

        // Add to Cart
        function addToCart(productId) {
            let product = products.find(p => p.id === productId);
            if (!product) {
                product = flashProducts.find(p => p.id === productId);
            }
            if (product) {
                const addrLower = deliveryAddress.toLowerCase();
                
                // Calculate distance from user to warehouse (Q5)
                const distance = calculateDistance(deliveryLat, deliveryLon, WAREHOUSE_LAT, WAREHOUSE_LON);
                console.log(`ℹ️ Khoảng cách từ khách tới kho Quận 5: ${distance.toFixed(2)} km`);

                // 1. Check if inside TP.HCM (25km limit)
                const isInsideHCMC = addrLower.includes('hồ chí minh') || addrLower.includes('ho chi minh') || addrLower.includes('tphcm') || addrLower.includes('tp.hcm') || addrLower.includes('hcm') || addrLower.includes('quận') || addrLower.includes('q.');
                const isOtherCity = addrLower.includes('hà nội') || addrLower.includes('đà nẵng') || addrLower.includes('ha noi') || addrLower.includes('da nang');
                
                if (isOtherCity || !isInsideHCMC || distance > 25) {
                    alert(`⚠️ Giao Cấp Tốc hiện chỉ phục vụ giao hàng hỏa tốc trong phạm vi TP. Hồ Chí Minh (bán kính dưới 25km từ kho hàng Quận 5).\n\nKhoảng cách hiện tại của bạn là ${distance.toFixed(1)}km. Vui lòng cập nhật địa chỉ nhận hàng tại TP.HCM.`);
                    openLocationModal();
                    return;
                }

                // 2. Check delivery restriction for food and drinks (under 6km)
                if (product.category_id === 3 || product.category_id === 4) { // Drinks/Food IDs
                    if (distance > 6) {
                        const changeAddress = confirm(`⚠️ Mặt hàng ẩm thực này chỉ hỗ trợ giao hỏa tốc trong bán kính 6km từ kho Quận 5 (bạn đang ở cách ${distance.toFixed(1)}km) để bảo đảm chất lượng tươi ngon nóng hổi.\n\nBạn có muốn đổi địa chỉ giao hàng gần hơn không?`);
                        if (changeAddress) {
                            openLocationModal();
                        }
                        return;
                    }
                }

                cart.push({
                    uniqueId: Date.now() + Math.random(),
                    ...product
                });
                updateCartUI();
                
                // Show notification toast or open sidebar
                toggleCart();
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
            const checkoutItemsJson = document.getElementById('checkout-items-json');
            
            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="cart-empty-txt">
                        <i class="bi bi-cart-x"></i>
                        <span>Giỏ hàng trống.</span>
                    </div>
                `;
                totalLbl.textContent = '0 đ';
                checkoutItemsJson.value = '[]';
                return;
            }

            container.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <span class="cart-item-emoji">
                        ${item.image_path ? `<img src="${item.image_path}" style="width: 32px; height: 32px; object-fit: cover; border-radius: 6px;">` : `<i class="${item.font_awesome_icon}"></i>`}
                    </span>
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
            
            // Populate hidden inputs for Laravel backend submit
            checkoutItemsJson.value = JSON.stringify(cart);
        }

        // Toggle Cart Sidebar
        function toggleCart() {
            const sidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('cart-overlay');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
            document.body.classList.toggle('cart-open');
        }

        // Location Modal Controls
        function openLocationModal() {
            document.getElementById('temp-address-input').value = deliveryAddress;
            document.getElementById('location-modal').classList.add('open');
        }

        function closeLocationModal() {
            document.getElementById('location-modal').classList.remove('open');
        }

        function setTempAddress(addr, lat, lon) {
            document.getElementById('temp-address-input').value = addr;
            if (lat && lon) {
                tempLat = lat;
                tempLon = lon;
            }
        }

        function saveLocation() {
            const addr = document.getElementById('temp-address-input').value;
            if (addr.trim() !== '') {
                deliveryAddress = addr;
                deliveryLat = tempLat;
                deliveryLon = tempLon;
                document.getElementById('delivery-address-lbl').textContent = addr;
                document.getElementById('checkout-address-input').value = addr;
                
                if (isUserLoggedIn) {
                    syncAddressToDatabase(addr);
                }
            }
            closeLocationModal();
        }

        // Start countdown timer for Flash Sale
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

        // Toggle User Account Dropdown
        function toggleUserDropdown(event) {
            event.stopPropagation();
            const menu = document.getElementById('user-dropdown-menu');
            if (menu) {
                menu.classList.toggle('open');
            }
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', () => {
            const menu = document.getElementById('user-dropdown-menu');
            if (menu && menu.classList.contains('open')) {
                menu.classList.remove('open');
            }
        });

        // Auto Detect User Location via Geolocation API & OSM Reverse Geocoding
        function detectUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lon = position.coords.longitude;
                        
                        fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
                            .then(res => res.json())
                            .then(data => {
                                if (data && data.display_name) {
                                    const address = data.display_name;
                                    deliveryAddress = address;
                                    deliveryLat = lat;
                                    deliveryLon = lon;
                                    tempLat = lat;
                                    tempLon = lon;
                                    document.getElementById('delivery-address-lbl').textContent = address;
                                    const checkoutInput = document.getElementById('checkout-address-input');
                                    if (checkoutInput) {
                                        checkoutInput.value = address;
                                    }
                                    console.log('📍 Tự động bắt vị trí thành công:', address, lat, lon);
                                }
                            })
                            .catch(err => console.error('Lỗi lấy vị trí OSM:', err));
                    },
                    (error) => {
                        console.warn('⚠️ Quyền truy cập vị trí bị từ chối hoặc lỗi:', error.message);
                    }
                );
            }
        }

        // Manual geolocation trigger inside location modal
        function triggerManualGeolocation() {
            const btn = document.querySelector('.modal-locate-btn');
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Đang định vị...';
            btn.disabled = true;

            if (!navigator.geolocation) {
                alert('Trình duyệt của bạn không hỗ trợ định vị vị trí.');
                btn.innerHTML = originalHtml;
                btn.disabled = false;
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    
                    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
                        .then(res => res.json())
                        .then(data => {
                            if (data && data.display_name) {
                                const address = data.display_name;
                                tempLat = lat;
                                tempLon = lon;
                                document.getElementById('temp-address-input').value = address;
                                console.log('📍 Định vị thủ công thành công:', address, lat, lon);
                            }
                            btn.innerHTML = originalHtml;
                            btn.disabled = false;
                        })
                        .catch(err => {
                            console.error('Lỗi lấy vị trí OSM:', err);
                            btn.innerHTML = originalHtml;
                            btn.disabled = false;
                        });
                },
                (error) => {
                    btn.innerHTML = originalHtml;
                    btn.disabled = false;
                    
                    if (error.code === 1) { // 1 is PERMISSION_DENIED
                        alert('⚠️ Quyền truy cập vị trí đã bị chặn.\n\nVui lòng bấm vào biểu tượng 🔒 hoặc ℹ️ trên thanh địa chỉ trình duyệt của bạn (góc trên bên trái), chọn "Cho phép truy cập vị trí" (Allow Location), sau đó nhấn lại nút này để định vị tự động nhé!');
                    } else {
                        alert('⚠️ Không thể lấy vị trí hiện tại: ' + error.message);
                    }
                },
                { enableHighAccuracy: true, timeout: 8000, maximumAge: 0 }
            );
        }

        function syncAddressToDatabase(addr) {
            if (addr === lastSyncedAddress) {
                console.log('ℹ️ Địa chỉ trùng khớp với cache, không gửi request sync DB.');
                return;
            }

            fetch('/tai-khoan/cap-nhat-dia-chi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ address: addr })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    lastSyncedAddress = addr;
                    console.log('✅ Địa chỉ đã được đồng bộ vào Database:', addr);
                }
            })
            .catch(err => console.error('Lỗi lưu địa chỉ vào DB:', err));
        }

        // Init render
        window.addEventListener('DOMContentLoaded', () => {
            document.getElementById('checkout-address-input').value = deliveryAddress;
            document.getElementById('delivery-address-lbl').textContent = deliveryAddress;
            updateCartUI();
            startFlashSaleTimer();
            
            // Initialize OSM Autocomplete
            setupOSMAutocomplete('temp-address-input', (selectedAddr, lat, lon) => {
                tempLat = lat;
                tempLon = lon;
            });
            setupOSMAutocomplete('checkout-address-input', (selectedAddr, lat, lon) => {
                deliveryAddress = selectedAddr;
                deliveryLat = lat;
                deliveryLon = lon;
                document.getElementById('delivery-address-lbl').textContent = selectedAddr;
                if (isUserLoggedIn) {
                    syncAddressToDatabase(selectedAddr);
                }
            });

            // Auto detect location on load ONLY if user does not have a saved address in DB
            const hasSavedAddress = @json(auth()->check() && !empty(auth()->user()->address));
            if (!hasSavedAddress) {
                detectUserLocation();
            }
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
