<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh Mục {{ $category->name }} - Giao Cấp Tốc</title>
    <meta name="description" content="{{ $category->description }}">
    
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
            --transition: all 0.3s ease;
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
            --border-radius: 20px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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
        }

        .logo-text h1 {
            font-size: 20px;
            font-weight: 800;
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

        /* MAIN LAYOUT (Sidebar + Products) */
        .layout-grid {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 30px;
            margin: 40px 0;
        }

        .sidebar-card {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border-color);
            padding: 24px;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 100px;
        }

        .sidebar-title {
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 16px;
            color: var(--text-main);
            border-bottom: 1.5px solid var(--border-color);
            padding-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .filter-item a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            padding: 8px 12px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .filter-item a:hover, .filter-item.active a {
            background: var(--primary-light);
            color: var(--primary);
        }

        /* Category Header Block */
        .category-hero {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border-color);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .category-meta h2 {
            font-size: 22px;
            font-weight: 800;
            color: var(--text-main);
        }

        .category-meta p {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 4px;
        }

        .sort-select {
            padding: 10px 16px;
            border-radius: 12px;
            border: 1.5px solid var(--border-color);
            font-size: 13px;
            font-weight: 700;
            outline: none;
            background: white;
        }

        /* Products list */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
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
            transition: var(--transition);
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

        .p-img-area {
            aspect-ratio: 1 / 1;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            position: relative;
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
            transition: var(--transition);
            font-size: 12px;
        }

        .add-to-cart-btn:hover {
            background: var(--primary);
            color: white;
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

        .cart-header h3 { font-size: 16px; font-weight: 800; }
        .cart-items { flex-grow: 1; overflow-y: auto; padding: 20px; display: flex; flex-direction: column; gap: 16px; }

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
        .cart-item-price { font-size: 12px; color: var(--secondary); font-weight: 800; }
        
        .cart-item-remove {
            color: var(--text-muted);
            padding: 6px;
            border-radius: 8px;
            transition: var(--transition);
        }

        .cart-item-remove:hover {
            color: var(--secondary);
            background: #ffebee;
        }

        .cart-total-row { display: flex; justify-content: space-between; font-size: 14px; font-weight: 800; }
        .cart-total-row span:last-child { color: var(--secondary); font-size: 16px; }

        .cart-footer { padding: 20px; background: #f8fafc; border-top: 1px solid var(--border-color); display: flex; flex-direction: column; gap: 12px; }

        .checkout-form-container { display: flex; flex-direction: column; gap: 10px; margin-top: 10px; border-top: 1.5px solid var(--border-color); padding-top: 15px; }
        .checkout-input { width: 100%; padding: 10px 14px; border-radius: 10px; border: 1.5px solid var(--border-color); font-size: 12px; font-weight: 500; }
        .cart-checkout-btn { background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; font-weight: 800; padding: 14px; border-radius: 14px; text-align: center; border: none; width: 100%; cursor: pointer; }

        /* BACK BUTTON */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo-area">
                    <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="logo-text">
                        <h1>GIAO CẤP TỐC</h1>
                        <span>⚡ HỎA TỐC 1 - 3 GIỜ</span>
                    </div>
                </a>

                <div class="header-actions">
                    <a href="/gio-hang" class="cart-btn" style="text-decoration: none; display: flex; align-items: center; justify-content: center; position: relative;">
                        <i class="bi bi-bag-dash-fill"></i>
                        <span class="cart-badge" id="cart-badge-count">0</span>
                    </a>
                    <a href="/" class="login-btn" style="text-decoration: none; background: #334155;">Về Trang Chủ</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="layout-grid">
            
            <!-- SIDEBAR FILTERS -->
            <div class="sidebar-col">
                <a href="/" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ</a>
                
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Danh Mục Khác</h3>
                    <ul class="filter-list" style="margin-bottom: 30px;">
                        @foreach ($categories as $cat)
                            <li class="filter-item {{ $cat->slug == $category->slug ? 'active' : '' }}">
                                <a href="/danh-muc/{{ $cat->slug }}">
                                    <span><i class="{{ $cat->icon_class }} me-2"></i> {{ $cat->name }}</span>
                                    <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    @if (!empty($subCategories))
                        <h3 class="sidebar-title">Phân Loại Con</h3>
                        <ul class="filter-list">
                            <li class="filter-item {{ !request()->has('sub') || request('sub') == 'Tất cả' ? 'active' : '' }}">
                                <a href="?sort={{ request('sort', 'default') }}">Tất cả</a>
                            </li>
                            @foreach ($subCategories as $sub)
                                <li class="filter-item {{ request('sub') == $sub ? 'active' : '' }}">
                                    <a href="?sub={{ urlencode($sub) }}&sort={{ request('sort', 'default') }}">{{ $sub }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

            <!-- PRODUCTS LISTING -->
            <div class="products-col">
                
                <!-- Category Details Hero Header -->
                <div class="category-hero">
                    <div class="category-meta">
                        <h2>{{ $category->name }}</h2>
                        <p>{{ $category->description }}</p>
                    </div>
                    <div>
                        <select onchange="location = this.value;" class="sort-select">
                            <option value="?sort=default&sub={{ request('sub') }}" {{ request('sort') == 'default' ? 'selected' : '' }}>Sắp xếp mặc định</option>
                            <option value="?sort=price-asc&sub={{ request('sub') }}" {{ request('sort') == 'price-asc' ? 'selected' : '' }}>Giá: Thấp đến Cao</option>
                            <option value="?sort=price-desc&sub={{ request('sub') }}" {{ request('sort') == 'price-desc' ? 'selected' : '' }}>Giá: Cao đến Thấp</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="products-grid">
                    @forelse ($products as $product)
                        <div class="product-card">
                            <div class="p-eta-badge">
                                <span>⚡</span> {{ $product->eta }}
                            </div>
                            <div class="p-img-area" onclick="window.location.href='/san-pham/{{ $product->slug }}'" style="cursor: pointer;">
                                @if ($product->image_path)
                                    <img src="{{ $product->image_path }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <i class="{{ $product->font_awesome_icon ?? 'fa-solid fa-box' }}"></i>
                                @endif
                            </div>
                            <div class="p-info">
                                <div>
                                    <span class="p-brand">{{ $product->brand }}</span>
                                    <h3 class="p-name" onclick="window.location.href='/san-pham/{{ $product->slug }}'" style="cursor: pointer;">{{ $product->name }}</h3>
                                    @if ($category->slug === 'food' || $category->slug === 'drinks')
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
                    @empty
                        <div class="empty-state" style="grid-column: 1/-1; text-align: center; padding: 60px 0; background: white; border-radius: 24px; border: 1px dashed var(--border-color);">
                            <span class="empty-icon" style="font-size: 32px; color: var(--text-muted);"><i class="fa-regular fa-folder-open"></i></span>
                            <h3 class="empty-title" style="font-size: 15px; margin-top: 8px;">Không có sản phẩm nào</h3>
                            <p class="empty-desc" style="font-size: 12px; color: var(--text-muted);">Sản phẩm trong nhóm này hiện đang được cập nhật hoặc hết hàng.</p>
                        </div>
                    @endforelse
                </div>

            </div>

        </div>
    </div>

    <!-- CART SIDEBAR -->
    <div class="cart-overlay" id="cart-overlay" onclick="toggleCart()"></div>
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h3>Giỏ Hàng Tạm Tính</h3>
            <button onclick="toggleCart()" class="close-btn" style="font-size: 20px;">&times;</button>
        </div>

        <div class="cart-items" id="cart-items-container">
            <!-- Dynamic items -->
        </div>

        <div class="cart-footer">
            <div class="cart-total-row">
                <span>Tổng cộng:</span>
                <span id="cart-total-lbl">0 đ</span>
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
                    <input type="text" name="customer_address" id="checkout-address-input" required placeholder="Địa chỉ nhận hàng cụ thể" class="checkout-input">
                </div>
                <button type="submit" class="cart-checkout-btn">Tiến Hành Đặt Hàng</button>
            </form>
        </div>
    </div>

    <script>
        const products = @json($products);
        let cart = [];
        let deliveryAddress = 'Quận 5, TP. Hồ Chí Minh';

        function formatPrice(val) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(val);
        }

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

        function addToCart(productId) {
            let product = products.find(p => p.id === productId);
            if (product) {
                const savedAddr = localStorage.getItem('deliveryAddress');
                if (savedAddr) {
                    deliveryAddress = savedAddr;
                }
                const addrLower = deliveryAddress.toLowerCase();
                const isInsideHCMC = addrLower.includes('hồ chí minh') || addrLower.includes('tphcm') || addrLower.includes('tp.hcm') || addrLower.includes('hcm') || addrLower.includes('quận') || addrLower.includes('q.');
                
                if (!isInsideHCMC) {
                    alert(`⚠️ Giao Cấp Tốc hiện chỉ phục vụ giao hàng hỏa tốc trong phạm vi TP. Hồ Chí Minh (bán kính dưới 25km từ kho hàng Quận 5).`);
                    return;
                }

                // Food / Drinks checks
                if ({{ $category->id }} === 3 || {{ $category->id }} === 4) {
                    const allowedLocalDistricts = ['Quận 1', 'Quận 3', 'Quận 4', 'Quận 5', 'Quận 6', 'Quận 8', 'Quận 10', 'Quận 11', 'Q.1', 'Q.3', 'Q.4', 'Q.5', 'Q.6', 'Q.8', 'Q.10', 'Q.11', 'Q1', 'Q3', 'Q4', 'Q5', 'Q6', 'Q8', 'Q10', 'Q11', 'Bình Thạnh', 'Phú Nhuận'];
                    const isAllowedLocal = allowedLocalDistricts.some(d => addrLower.includes(d.toLowerCase()));
                    if (!isAllowedLocal) {
                        alert(`⚠️ Mặt hàng ẩm thực này chỉ hỗ trợ giao hỏa tốc tại các quận trung tâm lân cận Q.5.`);
                        return;
                    }
                }

                cart.push({
                    uniqueId: Date.now() + Math.random(),
                    ...product
                });
                saveCartToStorage();
                window.location.href = '/gio-hang';
            }
        }

        function removeFromCart(uniqueId) {
            cart = cart.filter(item => item.uniqueId !== uniqueId);
            saveCartToStorage();
            updateCartUI();
        }

        function updateCartUI() {
            document.getElementById('cart-badge-count').textContent = cart.length;

            const container = document.getElementById('cart-items-container');
            const totalLbl = document.getElementById('cart-total-lbl');
            const checkoutItemsJson = document.getElementById('checkout-items-json');
            
            if (!container || !totalLbl) return;

            if (cart.length === 0) {
                container.innerHTML = `<div class="cart-empty-txt">Giỏ hàng trống</div>`;
                totalLbl.textContent = '0 đ';
                if (checkoutItemsJson) checkoutItemsJson.value = '[]';
                return;
            }

            container.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <span class="cart-item-emoji">
                        ${item.image_path ? `<img src="${item.image_path}" style="width: 32px; height: 32px; object-fit: cover; border-radius: 6px;">` : `<i class="${item.font_awesome_icon ?? 'fa-solid fa-box'}"></i>`}
                    </span>
                    <div class="cart-item-info">
                        <h4 class="cart-item-name">${item.name}</h4>
                        <span class="cart-item-price">${formatPrice(item.price)}</span>
                    </div>
                    <button class="cart-item-remove" onclick="removeFromCart(${item.uniqueId})">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            `).join('');

            const total = cart.reduce((sum, item) => sum + item.price, 0);
            totalLbl.textContent = formatPrice(total);
            if (checkoutItemsJson) checkoutItemsJson.value = JSON.stringify(cart);
        }

        window.addEventListener('DOMContentLoaded', () => {
            loadCartFromStorage();
            const authUserAddress = @json(auth()->user()->address ?? '');
            if (authUserAddress) {
                deliveryAddress = authUserAddress;
            }
            if (document.getElementById('checkout-address-input')) {
                document.getElementById('checkout-address-input').value = deliveryAddress;
            }
        });
    </script>

</body>
</html>
