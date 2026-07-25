<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Giao Cấp Tốc</title>
    
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

        /* Cart Button */
        .cart-btn {
            background: var(--primary);
            border: none;
            color: white;
            padding: 10px 16px;
            border-radius: 14px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-btn:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: var(--secondary);
            color: white;
            font-size: 9px;
            font-weight: 900;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
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

        .product-detail-layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Left Side: Product Details */
        .product-main-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .product-gallery {
            width: 100%;
            height: 380px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 24px;
            border: 1px solid var(--border-color);
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-gallery i {
            font-size: 80px;
            color: var(--text-muted);
        }

        .product-description-section {
            border-top: 1px solid var(--border-color);
            padding-top: 24px;
            margin-top: 24px;
        }

        .product-description-section h3 {
            font-size: 16px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            color: var(--text-color);
        }

        .product-description-section p {
            font-size: 13.5px;
            line-height: 1.7;
            color: var(--text-muted);
            white-space: pre-line;
        }

        /* Right Side: Delivery & Buy Card */
        .product-sidebar-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .brand-badge {
            background: var(--primary-light);
            color: var(--primary);
            font-size: 10px;
            font-weight: 900;
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 12px;
        }

        .product-title {
            font-size: 24px;
            font-weight: 900;
            line-height: 1.3;
            margin-bottom: 16px;
            color: var(--text-color);
        }

        .price-box {
            background: #f8fafc;
            border-radius: 16px;
            padding: 16px;
            border: 1px solid var(--border-color);
            margin-bottom: 24px;
        }

        .price-box-label {
            font-size: 10px;
            color: var(--text-muted);
            text-transform: uppercase;
            font-weight: 800;
            margin-bottom: 4px;
            display: block;
        }

        .current-price {
            font-size: 26px;
            font-weight: 900;
            color: var(--primary);
        }

        .old-price-discount {
            font-size: 14px;
            text-decoration: line-through;
            color: var(--text-muted);
            margin-left: 10px;
        }

        .delivery-eta-badge {
            background: rgba(220, 38, 38, 0.08);
            color: var(--secondary);
            font-size: 12px;
            font-weight: 800;
            padding: 8px 14px;
            border-radius: 10px;
            margin-bottom: 24px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .delivery-calculation-box {
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
            margin-bottom: 24px;
        }

        .delivery-calculation-box h4 {
            font-size: 13px;
            font-weight: 850;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 12px;
        }

        .shipping-fee-row {
            display: flex;
            justify-content: space-between;
            font-size: 13.5px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .buy-actions {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .action-btn {
            width: 100%;
            padding: 14px;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .action-btn.primary {
            background: var(--primary);
            color: white;
            border: none;
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.3);
        }

        .action-btn.primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        .action-btn.secondary {
            background: white;
            color: var(--text-color);
            border: 1.5px solid var(--border-color);
        }

        .action-btn.secondary:hover {
            border-color: var(--text-color);
        }

        /* RELATED PRODUCTS */
        .related-section {
            border-top: 1px solid var(--border-color);
            padding-top: 60px;
        }

        .related-title {
            font-size: 20px;
            font-weight: 900;
            margin-bottom: 24px;
            color: var(--text-color);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 24px;
        }

        /* Product Card Styles */
        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1.5px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: var(--primary);
        }

        .p-eta-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: white;
            font-size: 9px;
            font-weight: 800;
            padding: 4px 8px;
            border-radius: 6px;
            z-index: 2;
        }

        .p-img-area {
            height: 180px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-bottom: 1.5px solid var(--border-color);
        }

        .p-img-area img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .p-img-area i {
            font-size: 40px;
            color: var(--text-muted);
        }

        .p-info {
            padding: 16px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .p-brand {
            font-size: 9px;
            color: var(--primary);
            text-transform: uppercase;
            font-weight: 800;
            display: block;
            margin-bottom: 4px;
        }

        .p-name {
            font-size: 13.5px;
            font-weight: 800;
            color: var(--text-color);
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .p-footer-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 12px;
        }

        .price-wrapper span:first-child {
            font-size: 8px;
            color: var(--text-muted);
            text-transform: uppercase;
            font-weight: 800;
            display: block;
        }

        .price-wrapper span:last-child {
            font-size: 14.5px;
            font-weight: 900;
            color: var(--primary);
        }

        .add-to-cart-btn {
            background: var(--primary-light);
            border: none;
            color: var(--primary);
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-to-cart-btn:hover {
            background: var(--primary);
            color: white;
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

        .modal-input:focus {
            border-color: var(--primary);
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

        /* CART SIDEBAR */
        .cart-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition);
        }

        .cart-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .cart-sidebar {
            position: fixed;
            right: -420px;
            top: 0;
            bottom: 0;
            width: 420px;
            background: white;
            box-shadow: var(--shadow-lg);
            z-index: 1001;
            display: flex;
            flex-direction: column;
            transition: var(--transition);
        }

        .cart-sidebar.open {
            right: 0;
        }

        .cart-header {
            padding: 24px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cart-header-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-header-title i {
            color: var(--primary);
            font-size: 22px;
        }

        .cart-header-title h3 {
            font-size: 16px;
            font-weight: 850;
        }

        .cart-items {
            flex-grow: 1;
            overflow-y: auto;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
            position: relative;
        }

        .cart-item-emoji {
            font-size: 24px;
            width: 44px;
            height: 44px;
            background: #f8fafc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border-color);
        }

        .cart-item-info {
            flex-grow: 1;
        }

        .cart-item-name {
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 2px;
        }

        .cart-item-eta {
            font-size: 9px;
            color: var(--primary);
            background: var(--primary-light);
            padding: 2px 6px;
            border-radius: 4px;
            display: inline-block;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .cart-item-price {
            font-size: 12.5px;
            font-weight: 700;
            display: block;
        }

        .cart-item-remove {
            color: var(--text-muted);
            cursor: pointer;
            border: none;
            background: none;
            font-size: 16px;
            padding: 4px;
            transition: var(--transition);
        }

        .cart-item-remove:hover {
            color: var(--secondary);
        }

        .cart-empty-txt {
            text-align: center;
            color: var(--text-muted);
            margin-top: 40px;
        }

        .cart-empty-txt i {
            font-size: 48px;
            display: block;
            margin-bottom: 12px;
        }

        .cart-footer {
            padding: 24px;
            border-top: 1px solid var(--border-color);
            background: #f8fafc;
        }

        .cart-total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .cart-promo-banner {
            background: var(--primary-light);
            border: 1px solid rgba(255, 87, 34, 0.2);
            color: var(--text-color);
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 11.5px;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
            font-weight: 600;
        }

        .checkout-form-container {
            margin-top: 16px;
        }

        .checkout-input {
            width: 100%;
            padding: 10px 14px;
            border-radius: 10px;
            border: 1.5px solid var(--border-color);
            font-size: 12.5px;
            font-weight: 600;
            margin-bottom: 8px;
            outline: none;
        }

        .checkout-input:focus {
            border-color: var(--primary);
        }

        .cart-checkout-btn {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-size: 13.5px;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.25);
        }

        .cart-checkout-btn:hover {
            background: var(--primary-hover);
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

        body.cart-open .chat-bubbles-container {
            opacity: 0;
            pointer-events: none;
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
            position: relative;
        }

        .chat-bubble:hover {
            transform: scale(1.1);
        }

        .bubble-zalo {
            background: #0068ff;
        }

        .bubble-messenger {
            background: #0084ff;
        }

        .bubble-phone {
            background: #10b981;
            animation: ringRing 2s infinite;
        }

        /* Animations */
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes ringRing {
            0% { transform: scale(1); }
            15% { transform: scale(1.1) rotate(-5deg); }
            30% { transform: scale(1.1) rotate(5deg); }
            45% { transform: scale(1.1) rotate(-5deg); }
            60% { transform: scale(1.1) rotate(5deg); }
            75% { transform: scale(1) rotate(0); }
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
    <main class="container">
        
        <!-- Breadcrumb / Back button -->
        <div style="margin-bottom: 24px;">
            <a href="/" style="text-decoration: none; color: var(--text-muted); font-size: 13px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ mua sắm
            </a>
        </div>

        <div class="product-detail-layout">
            
            <!-- Left Side: Product main content card -->
            <div class="product-main-card">
                <div class="product-gallery">
                    @if ($product->image_path)
                        <img src="{{ $product->image_path }}" alt="{{ $product->name }}">
                    @else
                        <i class="{{ $product->font_awesome_icon }}"></i>
                    @endif
                </div>

                <div class="product-description-section">
                    <h3>Thông tin chi tiết</h3>
                    <p>{{ $product->description ?? 'Sản phẩm giao hỏa tốc chất lượng cao từ hệ thống Giao Cấp Tốc.' }}</p>
                </div>
            </div>

            <!-- Right Side: Sidebar pricing / delivery options -->
            <div class="product-sidebar-card">
                <span class="brand-badge">{{ $product->brand ?? 'Giao Cấp Tốc' }}</span>
                <h2 class="product-title">{{ $product->name }}</h2>

                <div class="delivery-eta-badge" id="product-detail-eta-box">
                    <i class="fa-solid fa-bolt"></i> ⚡ Đang tính thời gian...
                </div>

                <div class="price-box">
                    <span class="price-box-label">Giá bán hỏa tốc</span>
                    <div style="display: flex; align-items: baseline;">
                        <span class="current-price">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                        @if ($product->old_price && $product->old_price > $product->price)
                            <span class="old-price-discount">{{ number_format($product->old_price, 0, ',', '.') }}đ</span>
                        @endif
                    </div>
                </div>

                <!-- Shipping fee calculation -->
                <div class="delivery-calculation-box">
                    <h4>Chi tiết vận chuyển</h4>
                    <div class="shipping-fee-row">
                        <span style="color: var(--text-muted);">Quãng đường:</span>
                        <span id="detail-shipping-distance">0.0 km</span>
                    </div>
                    <div class="shipping-fee-row" style="margin-top: 6px;">
                        <span style="color: var(--text-muted);">Phí giao hàng:</span>
                        <span id="detail-shipping-price" style="color: var(--primary);">0đ</span>
                    </div>
                </div>

                <div class="buy-actions">
                    <button class="action-btn primary" onclick="addCurrentProductToCart()">
                        <i class="fa-solid fa-cart-plus"></i> Thêm Vào Giỏ Hàng
                    </button>
                    <button class="action-btn secondary" onclick="window.location.href='/gio-hang'">
                        Xem Giỏ Hàng
                    </button>
                </div>
            </div>

        </div>

        <!-- RELATED PRODUCTS SECTION -->
        @if (count($relatedProducts) > 0)
            <div class="related-section">
                <h3 class="related-title"><i class="fa-solid fa-star text-warning me-1"></i> Sản phẩm tương tự</h3>
                <div class="products-grid">
                    @foreach ($relatedProducts as $p)
                        <div class="product-card">
                            <div class="p-eta-badge">
                                <span>⚡</span> {{ $p->eta }}
                            </div>
                            <div class="p-img-area" onclick="window.location.href='/san-pham/{{ $p->slug }}'" style="cursor: pointer;">
                                @if ($p->image_path)
                                    <img src="{{ $p->image_path }}" alt="{{ $p->name }}">
                                @else
                                    <i class="{{ $p->font_awesome_icon }}"></i>
                                @endif
                            </div>
                            <div class="p-info">
                                <div>
                                    <span class="p-brand">{{ $p->brand }}</span>
                                    <h3 class="p-name" onclick="window.location.href='/san-pham/{{ $p->slug }}'" style="cursor: pointer;">{{ $p->name }}</h3>
                                </div>
                                <div class="p-footer-row">
                                    <div class="price-wrapper">
                                        <span>Giá bán lẻ</span>
                                        <span>{{ number_format($p->price, 0, ',', '.') }}đ</span>
                                    </div>
                                    <button class="add-to-cart-btn" onclick="addToCartOutside({{ $p->id }})">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

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
            <!-- Dynamic items -->
        </div>

        <div class="cart-footer">
            <div class="cart-total-row" style="font-size: 13px; color: var(--text-muted); margin-bottom: 4px;">
                <span>Tạm tính:</span>
                <span id="cart-subtotal-lbl">0 đ</span>
            </div>
            <div class="cart-total-row" style="font-size: 13px; color: var(--text-muted); margin-bottom: 8px;">
                <span>Phí giao hàng hỏa tốc:</span>
                <span id="cart-shipping-lbl">0 đ</span>
            </div>
            <div class="cart-total-row" style="border-top: 1px dashed var(--border-color); padding-top: 8px; margin-bottom: 12px;">
                <span style="font-weight: 800; font-size: 15px;">Tổng cộng:</span>
                <span id="cart-total-lbl" style="font-weight: 800; font-size: 16px; color: var(--primary);">0 đ</span>
            </div>
            <div class="cart-promo-banner" id="cart-eta-promo-lbl">
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

    <!-- FLOATING CHAT BUBBLES -->
    <div class="chat-bubbles-container">
        <a href="#" class="chat-bubble bubble-zalo" data-tooltip="Zalo hỗ trợ">
            <span style="font-family: sans-serif; font-size: 12px; letter-spacing: -0.5px;">Zalo</span>
        </a>
        <a href="#" class="chat-bubble bubble-messenger" data-tooltip="Messenger Facebook">
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>
        <a href="tel:0909123456" class="chat-bubble bubble-phone" data-tooltip="Gọi Hotline">
            <i class="fa-solid fa-phone"></i>
        </a>
    </div>

    <!-- SCRIPTS -->
    <script>
        // Data populated from database
        const currentProduct = @json($product);
        const relatedProducts = @json($relatedProducts);
        
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

        // Load cart from LocalStorage to keep session sync
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

            // Update Product detail sidebar ETA & pricing calculations
            const sidebarEta = document.getElementById('product-detail-eta-box');
            if (sidebarEta) {
                sidebarEta.innerHTML = `<i class="fa-solid fa-bolt"></i> ⚡ Giao dự kiến: <strong>${etaString}</strong>`;
            }

            const sidebarDistance = document.getElementById('detail-shipping-distance');
            if (sidebarDistance) {
                sidebarDistance.textContent = `${distance.toFixed(1)} km`;
            }

            const shippingFee = Math.round(15000 + distance * 7000);
            const sidebarPrice = document.getElementById('detail-shipping-price');
            if (sidebarPrice) {
                sidebarPrice.textContent = formatPrice(shippingFee);
            }

            // Re-render Cart totals
            updateCartUI();
        }

        // Add current page product to cart
        function addCurrentProductToCart() {
            // Check delivery boundaries
            const distance = calculateDistance(deliveryLat, deliveryLon, WAREHOUSE_LAT, WAREHOUSE_LON);
            const addrLower = deliveryAddress.toLowerCase();

            const isInsideHCMC = addrLower.includes('hồ chí minh') || addrLower.includes('ho chi minh') || addrLower.includes('tphcm') || addrLower.includes('tp.hcm') || addrLower.includes('hcm') || addrLower.includes('quận') || addrLower.includes('q.');
            const isOtherCity = addrLower.includes('hà nội') || addrLower.includes('đà nẵng') || addrLower.includes('ha noi') || addrLower.includes('da nang');
            
            if (isOtherCity || !isInsideHCMC || distance > 25) {
                alert(`⚠️ Giao Cấp Tốc hiện chỉ phục vụ giao hàng hỏa tốc trong phạm vi TP. Hồ Chí Minh (bán kính dưới 25km từ kho hàng Quận 5).\n\nKhoảng cách hiện tại của bạn là ${distance.toFixed(1)}km. Vui lòng cập nhật địa chỉ nhận hàng tại TP.HCM.`);
                openLocationModal();
                return;
            }

            // Hot Food / Drinks restriction
            if (currentProduct.category_id === 3 || currentProduct.category_id === 4) {
                if (distance > 6) {
                    alert(`⚠️ Mặt hàng ẩm thực này chỉ hỗ trợ giao hỏa tốc trong bán kính 6km từ kho Quận 5 (bạn đang ở cách ${distance.toFixed(1)}km) để bảo đảm chất lượng tươi ngon nóng hổi.`);
                    openLocationModal();
                    return;
                }
            }

            cart.push({
                uniqueId: Date.now() + Math.random(),
                ...currentProduct
            });
            saveCartToStorage();
            window.location.href = '/gio-hang';
        }

        // Add related product to cart
        function addToCartOutside(productId) {
            let product = relatedProducts.find(p => p.id === productId);
            if (product) {
                cart.push({
                    uniqueId: Date.now() + Math.random(),
                    ...product
                });
                saveCartToStorage();
                window.location.href = '/gio-hang';
            }
        }

        // Remove item from cart
        function removeFromCart(uniqueId) {
            cart = cart.filter(item => item.uniqueId !== uniqueId);
            saveCartToStorage();
            updateCartUI();
        }

        // Update Cart UI list & totals
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
                if (document.getElementById('cart-subtotal-lbl')) document.getElementById('cart-subtotal-lbl').textContent = '0 đ';
                if (document.getElementById('cart-shipping-lbl')) document.getElementById('cart-shipping-lbl').textContent = '0 đ';
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

        // Toggle Cart Sidebar
        function toggleCart() {
            const sidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('cart-overlay');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
            document.body.classList.toggle('cart-open');
        }

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
