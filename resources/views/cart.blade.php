<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng & Đặt hàng - Giao Cấp Tốc</title>
    
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        /* INHERIT HOMEPAGE STYLE SYSTEM */
        :root {
            --primary: #ff5722;
            --primary-hover: #e64a19;
            --primary-light: rgba(255, 87, 34, 0.08);
            --secondary: #dc2626;
            --bg-color: #f8fafc;
            --text-color: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 16px 36px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Mulish', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.5;
            overflow-x: hidden;
            transition: var(--transition);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* HEADER */
        header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 16px 0;
            transition: var(--transition);
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            text-decoration: none;
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.3);
        }

        .logo-text h1 {
            font-size: 16px;
            font-weight: 900;
            color: var(--text-color);
            letter-spacing: -0.5px;
        }

        .logo-text span {
            font-size: 9px;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }

        .location-selector {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            border: 1.5px solid var(--border-color);
            padding: 10px 18px;
            border-radius: 14px;
            cursor: pointer;
            transition: var(--transition);
            max-width: 320px;
            text-align: left;
        }

        .location-selector:hover {
            border-color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .location-icon {
            color: var(--primary);
            font-size: 18px;
        }

        .location-details span:first-child {
            font-size: 10px;
            color: var(--text-muted);
            font-weight: 700;
            display: block;
        }

        .location-details span:last-child {
            font-size: 12px;
            font-weight: 800;
            color: var(--text-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            max-width: 200px;
        }

        /* User Dropdown */
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-dropdown-btn {
            background: white;
            border: 1.5px solid var(--border-color);
            padding: 10px 16px;
            border-radius: 14px;
            font-size: 12.5px;
            font-weight: 800;
            color: var(--text-color);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .user-dropdown-btn:hover {
            border-color: var(--primary);
        }

        .user-dropdown-menu {
            position: absolute;
            right: 0;
            top: calc(100% + 8px);
            background: white;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-lg);
            width: 220px;
            padding: 8px;
            z-index: 1000;
            display: none;
        }

        .user-dropdown-menu.open {
            display: block;
            animation: slideDown 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .user-dropdown-menu a {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            color: var(--text-color);
            font-size: 12.5px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 10px;
            transition: var(--transition);
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

        .login-btn {
            background: white;
            border: 1.5px solid var(--border-color);
            color: var(--text-color);
            padding: 10px 20px;
            border-radius: 14px;
            cursor: pointer;
            font-size: 12.5px;
            font-weight: 800;
            transition: var(--transition);
        }

        .login-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* MAIN LAYOUT */
        main {
            padding: 40px 0 80px;
        }

        .cart-page-layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
        }

        /* Left Column: Cart items table */
        .cart-section-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .cart-section-title {
            font-size: 20px;
            font-weight: 900;
            margin-bottom: 24px;
            border-bottom: 1.5px solid var(--border-color);
            padding-bottom: 14px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-section-title i {
            color: var(--primary);
        }

        .cart-page-items {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .cart-page-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .cart-page-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .cart-page-item-image {
            width: 72px;
            height: 72px;
            background: #f8fafc;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .cart-page-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-page-item-image i {
            font-size: 32px;
            color: var(--text-muted);
        }

        .cart-page-item-details {
            flex-grow: 1;
        }

        .cart-page-item-name {
            font-size: 15px;
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 4px;
        }

        .cart-page-item-eta {
            font-size: 9px;
            color: var(--primary);
            background: var(--primary-light);
            padding: 2px 8px;
            border-radius: 6px;
            font-weight: 750;
            display: inline-block;
            margin-bottom: 6px;
        }

        .cart-page-item-price {
            font-size: 14px;
            font-weight: 800;
            color: var(--text-color);
        }

        .cart-page-item-remove {
            color: var(--text-muted);
            border: none;
            background: none;
            font-size: 20px;
            padding: 8px;
            cursor: pointer;
            transition: var(--transition);
        }

        .cart-page-item-remove:hover {
            color: var(--secondary);
            transform: scale(1.1);
        }

        .cart-empty-state {
            text-align: center;
            padding: 60px 0;
            color: var(--text-muted);
        }

        .cart-empty-state i {
            font-size: 64px;
            color: var(--text-muted);
            margin-bottom: 16px;
            display: block;
        }

        .cart-empty-state p {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .back-to-shop-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-size: 13.5px;
            font-weight: 800;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.25);
            transition: var(--transition);
        }

        .back-to-shop-btn:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        /* Right Column: Checkout Summary & Form */
        .checkout-section-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .checkout-section-title {
            font-size: 18px;
            font-weight: 900;
            margin-bottom: 20px;
            border-bottom: 1.5px solid var(--border-color);
            padding-bottom: 12px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkout-section-title i {
            color: var(--primary);
        }

        .summary-totals {
            margin-bottom: 24px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            font-size: 13.5px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-muted);
        }

        .summary-row.total {
            border-top: 1px dashed var(--border-color);
            padding-top: 12px;
            margin-top: 12px;
            font-size: 16px;
            font-weight: 900;
            color: var(--text-color);
        }

        .summary-row.total span:last-child {
            color: var(--primary);
            font-size: 18px;
        }

        .cart-promo-banner {
            background: var(--primary-light);
            border: 1px solid rgba(255, 87, 34, 0.2);
            color: var(--text-color);
            padding: 12px;
            border-radius: 12px;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .checkout-form-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checkout-group {
            position: relative;
        }

        .checkout-input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 12px;
            border: 1.5px solid var(--border-color);
            font-size: 13px;
            font-weight: 600;
            outline: none;
            transition: var(--transition);
        }

        .checkout-input:focus {
            border-color: var(--primary);
        }

        .checkout-submit-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.3);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .checkout-submit-btn:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        .osm-suggestions-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            max-height: 180px;
            overflow-y: auto;
            display: none;
            padding: 4px;
        }

        .osm-suggestions-list.show {
            display: block;
        }

        .osm-suggestion-item {
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .osm-suggestion-item:hover {
            background: #f1f5f9;
        }

        /* MODALS */
        .modal {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition);
        }

        .modal.open {
            opacity: 1;
            pointer-events: auto;
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
            border: none;
            background: none;
            cursor: pointer;
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

        .suggested-title {
            font-size: 10px;
            color: var(--text-muted);
            text-transform: uppercase;
            font-weight: 800;
            margin-bottom: 8px;
            display: block;
        }

        .suggested-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .chip {
            background: #f1f5f9;
            border: none;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            color: var(--text-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .chip:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        .modal-footer {
            display: flex;
            gap: 12px;
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
            margin-top: 20px;
        }

        .modal-btn {
            flex: 1;
            padding: 12px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
        }

        .modal-btn.cancel {
            background: white;
            border: 1.5px solid var(--border-color);
            color: var(--text-muted);
        }

        .modal-btn.cancel:hover {
            border-color: var(--text-color);
            color: var(--text-color);
        }

        .modal-btn.confirm {
            background: var(--secondary);
            border: none;
            color: white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .modal-btn.confirm:hover {
            background: #b91c1c;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: #0f172a;
            color: #94a3b8;
            padding: 60px 0 30px;
            border-top: 1px solid #1e293b;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-brand h3 {
            color: white;
            margin-bottom: 16px;
        }

        .footer-col h4 {
            color: white;
            margin-bottom: 16px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
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
            font-size: 12px;
        }

        /* FLOATING CHAT BUBBLES */
        .chat-bubbles-container {
            position: fixed;
            bottom: 24px;
            right: 24px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 99;
            transition: var(--transition);
        }

        .chat-bubble {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .bubble-zalo {
            background: #0068ff;
        }

        .bubble-messenger {
            background: #0084ff;
        }

        .bubble-phone {
            background: #10b981;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="header-content">
                
                <!-- Logo -->
                <a href="/" class="logo-area">
                    <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="logo-text">
                        <h1>GIAO CẤP TỐC</h1>
                        <span>⚡ HỎA TỐC 1 - 3 GIỜ</span>
                    </div>
                </a>

                <!-- Location Selector -->
                <button class="location-selector" onclick="openLocationModal()">
                    <span class="location-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <div class="location-details">
                        <span style="display: flex; align-items: center; gap: 6px;">Giao đến địa chỉ: <span id="header-eta-badge" style="background: var(--primary-light); color: var(--primary); font-size: 10px; font-weight: 800; padding: 1px 6px; border-radius: 6px; white-space: nowrap;">⚡ Đang tính...</span></span>
                        <span id="delivery-address-lbl">Quận 1, TP. Hồ Chí Minh</span>
                    </div>
                </button>

                <!-- Header Actions -->
                <div class="header-actions" style="display: flex; align-items: center; gap: 12px;">
                    <a href="/gio-hang" class="cart-btn">
                        <i class="bi bi-bag-dash-fill"></i>
                        <span class="cart-badge" id="cart-badge-count">0</span>
                    </a>
                    
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
    <main class="container" style="margin-top: 30px; margin-bottom: 50px;">
        <form action="/dat-hang" method="POST" id="checkout-form">
            @csrf
            <input type="hidden" name="items" id="checkout-items-json">
            
            <div class="cart-page-layout">
                
                <!-- Left Column: Cart items & Delivery Address -->
                <div class="cart-section-card">
                    <h2 class="cart-section-title"><i class="bi bi-cart3"></i> Giỏ hàng tạm tính</h2>
                    
                    <div class="cart-page-items" id="cart-page-items-container" style="margin-bottom: 30px;">
                        <!-- Loaded dynamically via Javascript -->
                    </div>

                    <!-- Input Delivery Info Section on the Left Side -->
                    <div style="border-top: 2px dashed var(--border-color); padding-top: 30px; margin-top: 30px;">
                        <h3 class="cart-section-title" style="border-bottom: none; padding-bottom: 0; margin-bottom: 20px;">
                            <i class="fa-solid fa-truck-fast"></i> Thông tin nhận hàng hỏa tốc
                        </h3>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div class="checkout-group">
                                <label style="font-size: 11px; font-weight: 800; color: var(--text-muted); display: block; margin-bottom: 8px; text-transform: uppercase;">Họ tên người nhận *</label>
                                <input type="text" name="customer_name" required placeholder="Nhập họ tên người nhận" class="checkout-input" style="font-size: 13.5px; padding: 14px;">
                            </div>
                            <div class="checkout-group">
                                <label style="font-size: 11px; font-weight: 800; color: var(--text-muted); display: block; margin-bottom: 8px; text-transform: uppercase;">Số điện thoại giao hàng *</label>
                                <input type="text" name="customer_phone" required placeholder="Nhập số điện thoại nhận hàng" class="checkout-input" style="font-size: 13.5px; padding: 14px;">
                            </div>
                        </div>
                        
                        <div class="checkout-group" style="position: relative;">
                            <label style="font-size: 11px; font-weight: 800; color: var(--text-muted); display: block; margin-bottom: 8px; text-transform: uppercase;">Địa chỉ giao nhận cụ thể *</label>
                            <input type="text" name="customer_address" id="checkout-address-input" required placeholder="Nhập địa chỉ giao hàng cụ thể tại TP.HCM (Sử dụng gợi ý bên dưới)" class="checkout-input" style="font-size: 13.5px; padding: 14px;">
                        </div>
                    </div>
                </div>

                <!-- Right Column: Checkout Billing Summary -->
                <div class="checkout-section-card">
                    <h2 class="checkout-section-title"><i class="fa-regular fa-credit-card"></i> Thông tin thanh toán</h2>
                    
                    <div class="summary-totals">
                        <div class="summary-row">
                            <span>Tạm tính:</span>
                            <span id="cart-subtotal-lbl">0 đ</span>
                        </div>
                        <div class="summary-row">
                            <span>Phí giao hàng hỏa tốc:</span>
                            <span id="cart-shipping-lbl">0 đ</span>
                        </div>
                        <div class="summary-row total">
                            <span>Tổng cộng:</span>
                            <span id="cart-total-lbl">0 đ</span>
                        </div>
                    </div>

                    <div class="cart-promo-banner" id="cart-eta-promo-lbl" style="margin-bottom: 24px;">
                        <i class="fa-solid fa-truck-fast text-primary"></i> Giao hỏa tốc khoảng <strong>-- phút</strong>
                    </div>

                    <button type="submit" class="checkout-submit-btn" style="padding: 16px; font-size: 15px; font-weight: 900; text-transform: uppercase; letter-spacing: 0.5px;">
                        <i class="fa-solid fa-paper-plane"></i> Tiến Hành Đặt Hàng
                    </button>
                </div>

            </div>
        </form>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo-area" style="margin-bottom: 16px;">
                        <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
                        <span style="color: white; font-weight: 900; font-size: 16px;">GIAO CẤP TỐC</span>
                    </div>
                    <p style="font-size: 12.5px; line-height: 1.6;">Dịch vụ mua sắm giao hàng siêu tốc trong ngày, phục vụ mọi nhu cầu thiết yếu hằng ngày của bạn.</p>
                </div>
                <div class="footer-col">
                    <h4>Ngành hàng</h4>
                    <ul class="footer-links" style="font-size: 12.5px;">
                        @foreach ($categories as $cat)
                            <li><a href="/danh-muc/{{ $cat->slug }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Khu vực phục vụ</h4>
                    <p style="font-size: 12px; line-height: 1.6;">Hỗ trợ giao hàng hỏa tốc tại các khu vực trung tâm TP. Hồ Chí Minh trong phạm vi 25km.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2026 Giao Cấp Tốc. All rights reserved.</span>
                <span>Thiết kế giao diện mua sắm hỏa tốc thế hệ mới.</span>
            </div>
        </div>
    </footer>

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
                <i class="fa-solid fa-circle-info"></i> Lưu ý: Mặt hàng ẩm thực chỉ hỗ trợ giao hàng hỏa tốc trong bán kính 6km để bảo đảm hương vị ngon nhất.
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

    <!-- FLOATING CHAT BUBBLES -->
    <div class="chat-bubbles-container">
        <a href="#" class="chat-bubble bubble-zalo">
            <span style="font-family: sans-serif; font-size: 12px;">Zalo</span>
        </a>
        <a href="#" class="chat-bubble bubble-messenger">
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>
    </div>

    <!-- SCRIPTS -->
    <script>
        const isUserLoggedIn = @json(auth()->check());
        let deliveryAddress = @json(auth()->user()->address ?? 'Quận 5, TP. Hồ Chí Minh');
        let lastSyncedAddress = deliveryAddress;

        // Coordinates
        let deliveryLat = 10.7541;
        let deliveryLon = 106.6625;
        let tempLat = 10.7541;
        let tempLon = 106.6625;

        const WAREHOUSE_LAT = 10.7541;
        const WAREHOUSE_LON = 106.6625;

        let cart = [];

        // Load cart from LocalStorage
        function loadCartFromStorage() {
            const savedCart = localStorage.getItem('giaocaptoc_cart');
            if (savedCart) {
                cart = JSON.parse(savedCart);
            }
            updateCartUI();
        }

        function saveCartToStorage() {
            localStorage.setItem('giaocaptoc_cart', JSON.stringify(cart));
        }

        // Format Currency
        function formatPrice(val) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(val);
        }

        // Distance formula
        function calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371;
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            return R * c;
        }

        // Update ETA and Shipping displays
        function updateDynamicETA() {
            const distance = calculateDistance(deliveryLat, deliveryLon, WAREHOUSE_LAT, WAREHOUSE_LON);
            
            // ETA
            let etaMinutes = Math.round(20 + distance * 1.7);
            if (etaMinutes < 25) etaMinutes = 25;
            
            let etaString = '';
            if (etaMinutes >= 60) {
                etaString = `${(etaMinutes / 60).toFixed(1)} giờ`;
            } else {
                etaString = `${etaMinutes} phút`;
            }

            // Update Header Badge
            const headerEta = document.getElementById('header-eta-badge');
            if (headerEta) {
                headerEta.textContent = `⚡ Dự kiến: ${etaString} (${distance.toFixed(1)}km)`;
            }

            // Update Cart Promo Banner
            const cartPromo = document.getElementById('cart-eta-promo-lbl');
            if (cartPromo) {
                cartPromo.innerHTML = `<i class="fa-solid fa-truck-fast text-primary"></i> Giao hỏa tốc khoảng <strong>${etaString}</strong> (${distance.toFixed(1)}km)`;
            }

            // Re-render totals
            updateCartUI();
        }

        // Remove item from cart page
        function removeFromCart(uniqueId) {
            cart = cart.filter(item => item.uniqueId !== uniqueId);
            saveCartToStorage();
            updateCartUI();
        }

        // Update Cart Page list & totals
        function updateCartUI() {
            document.getElementById('cart-badge-count').textContent = cart.length;

            const container = document.getElementById('cart-page-items-container');
            const totalLbl = document.getElementById('cart-total-lbl');
            const checkoutItemsJson = document.getElementById('checkout-items-json');
            
            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="cart-empty-state">
                        <i class="bi bi-cart-x"></i>
                        <p>Giỏ hàng của bạn đang trống.</p>
                        <a href="/" class="back-to-shop-btn">Quay lại mua sắm ngay</a>
                    </div>
                `;
                if (document.getElementById('cart-subtotal-lbl')) document.getElementById('cart-subtotal-lbl').textContent = '0 đ';
                if (document.getElementById('cart-shipping-lbl')) document.getElementById('cart-shipping-lbl').textContent = '0 đ';
                totalLbl.textContent = '0 đ';
                checkoutItemsJson.value = '[]';
                
                // Disable submit button if empty
                const submitBtn = document.querySelector('.checkout-submit-btn');
                if (submitBtn) submitBtn.disabled = true;
                return;
            }

            // Enable submit button
            const submitBtn = document.querySelector('.checkout-submit-btn');
            if (submitBtn) submitBtn.disabled = false;

            container.innerHTML = cart.map(item => `
                <div class="cart-page-item">
                    <div class="cart-page-item-image">
                        ${item.image_path ? `<img src="${item.image_path}">` : `<i class="${item.font_awesome_icon}"></i>`}
                    </div>
                    <div class="cart-page-item-details">
                        <h4 class="cart-page-item-name">${item.name}</h4>
                        <span class="cart-page-item-eta">⚡ ${item.eta}</span>
                        <span class="cart-page-item-price">${formatPrice(item.price)}</span>
                    </div>
                    <button class="cart-page-item-remove" onclick="removeFromCart(${item.uniqueId})">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </div>
            `).join('');

            const total = cart.reduce((sum, item) => sum + item.price, 0);
            
            const distance = calculateDistance(deliveryLat, deliveryLon, WAREHOUSE_LAT, WAREHOUSE_LON);
            const shippingFee = Math.round(15000 + distance * 7000);
            const finalTotal = total + shippingFee;

            const subtotalLbl = document.getElementById('cart-subtotal-lbl');
            const shippingLbl = document.getElementById('cart-shipping-lbl');
            
            if (subtotalLbl) subtotalLbl.textContent = formatPrice(total);
            if (shippingLbl) shippingLbl.textContent = formatPrice(shippingFee);
            totalLbl.textContent = formatPrice(finalTotal);
            
            checkoutItemsJson.value = JSON.stringify(cart);
        }

        // Toggle User Account Dropdown
        function toggleUserDropdown(event) {
            event.stopPropagation();
            const menu = document.getElementById('user-dropdown-menu');
            if (menu) {
                menu.classList.toggle('open');
            }
        }

        window.addEventListener('click', () => {
            const menu = document.getElementById('user-dropdown-menu');
            if (menu && menu.classList.contains('open')) {
                menu.classList.remove('open');
            }
        });

        // Location modal controls
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
                
                updateDynamicETA();
                
                if (isUserLoggedIn) {
                    syncAddressToDatabase(addr);
                }
            }
            closeLocationModal();
        }

        // Auto Detect User Location
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
                                    
                                    updateDynamicETA();
                                    console.log('📍 Tự động bắt vị trí thành công:', address, lat, lon);
                                }
                            })
                            .catch(err => console.error('Lỗi lấy vị trí OSM:', err));
                    },
                    (error) => {
                        console.warn('⚠️ Quyền vị trí bị chặn hoặc lỗi:', error.message);
                    }
                );
            }
        }

        // Manual geolocation trigger
        function triggerManualGeolocation() {
            const btn = document.querySelector('.modal-locate-btn');
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Đang định vị...';
            btn.disabled = true;

            if (!navigator.geolocation) {
                alert('Trình duyệt của bạn không hỗ trợ định vị.');
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
                    if (error.code === 1) {
                        alert('⚠️ Quyền vị trí đã bị chặn. Vui lòng mở lại cài đặt trình duyệt của bạn.');
                    } else {
                        alert('⚠️ Lỗi định vị: ' + error.message);
                    }
                },
                { enableHighAccuracy: true, timeout: 8000, maximumAge: 0 }
            );
        }

        // Sync to DB
        function syncAddressToDatabase(addr) {
            if (addr === lastSyncedAddress) return;

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

        // OSM Autocomplete
        function setupOSMAutocomplete(inputId, onSelectCallback) {
            const input = document.getElementById(inputId);
            if (!input) return;

            input.parentNode.style.position = 'relative';

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

            document.addEventListener('click', (e) => {
                if (e.target !== input && e.target !== container) {
                    container.classList.remove('show');
                }
            });
        }

        // Init DOM
        window.addEventListener('DOMContentLoaded', () => {
            loadCartFromStorage();
            
            document.getElementById('checkout-address-input').value = deliveryAddress;
            document.getElementById('delivery-address-lbl').textContent = deliveryAddress;
            
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
                updateDynamicETA();
                if (isUserLoggedIn) {
                    syncAddressToDatabase(selectedAddr);
                }
            });

            // Geolocation and ETA triggers
            const hasSavedAddress = @json(auth()->check() && !empty(auth()->user()->address));
            if (!hasSavedAddress) {
                detectUserLocation();
            } else {
                fetch(`https://nominatim.openstreetmap.org/search?format=json&limit=1&q=${encodeURIComponent(deliveryAddress)}&countrycodes=vn`)
                    .then(res => res.json())
                    .then(data => {
                        if (data && data.length > 0) {
                            deliveryLat = parseFloat(data[0].lat);
                            deliveryLon = parseFloat(data[0].lon);
                            updateDynamicETA();
                        }
                    })
                    .catch(err => console.error('Lỗi định vị địa chỉ lưu sẵn:', err));
            }
        });
    </script>
</body>
</html>
