<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tài Khoản Của Tôi - Giao Cấp Tốc</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #ff5722;
            --primary-light: #ffebe5;
            --secondary: #ff2a68;
            --bg-body: #f8fafc;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
        }

        .header-bar {
            background: white;
            border-bottom: 1px solid var(--border-color);
            padding: 16px 0;
            margin-bottom: 30px;
        }

        .logo-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text-main);
        }

        .logo-icon {
            background: linear-gradient(135deg, #ff9800, var(--secondary));
            color: white;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .logo-brand h1 {
            font-size: 18px;
            font-weight: 800;
            margin: 0;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .profile-nav-card {
            background: white;
            border-radius: 20px;
            border: 1px solid var(--border-color);
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        }

        .profile-user-info {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1.5px solid var(--border-color);
            margin-bottom: 20px;
        }

        .profile-avatar {
            width: 64px;
            height: 64px;
            background: var(--primary-light);
            color: var(--primary);
            font-size: 24px;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .nav-pills .nav-link {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 13px;
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            width: 100%;
            text-align: left;
            border: none;
            background: none;
        }

        .nav-pills .nav-link:hover {
            background-color: #f8fafc;
            color: var(--text-main);
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .content-card {
            background: white;
            border-radius: 24px;
            border: 1px solid var(--border-color);
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            min-height: 450px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 24px;
            color: var(--text-main);
        }

        .order-history-item {
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }

        .order-history-item:hover {
            border-color: var(--primary);
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.04);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 12px;
            margin-bottom: 12px;
        }

        .order-id {
            font-weight: 800;
            font-size: 14px;
            color: var(--primary);
        }

        .order-date {
            color: var(--text-muted);
            font-size: 12px;
        }

        .order-item-detail {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }

        .order-item-detail:last-child {
            margin-bottom: 0;
        }

        .order-item-img {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid var(--border-color);
        }

        .order-item-placeholder {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #f1f5f9;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .order-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #f1f5f9;
        }

        .order-total {
            font-weight: 800;
            color: var(--secondary);
            font-size: 15px;
        }

        .address-item {
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 16px;
            margin-bottom: 12px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .address-info {
            font-size: 13px;
            font-weight: 600;
        }

        .address-delete-btn {
            color: var(--text-muted);
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .address-delete-btn:hover {
            color: var(--secondary);
        }

        .favorite-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: 14px;
            margin-bottom: 12px;
        }

        .favorite-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .favorite-name {
            font-size: 13px;
            font-weight: 700;
        }

        .favorite-price {
            font-size: 12px;
            color: var(--secondary);
            font-weight: 800;
        }

        .favorite-remove-btn {
            color: var(--text-muted);
            font-size: 14px;
        }

        .favorite-remove-btn:hover {
            color: var(--secondary);
        }
    </style>
</head>
<body>

    <!-- TOP HEADER -->
    <div class="header-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="logo-brand">
                <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
                <div>
                    <h1>GIAO CẤP TỐC</h1>
                </div>
            </a>
            <a href="/" class="btn btn-light btn-sm border rounded-3 fw-bold"><i class="fa-solid fa-house me-1"></i> Về trang chủ</a>
        </div>
    </div>

    <!-- MAIN BODY -->
    <div class="container pb-5">
        <div class="row g-4">
            
            <!-- LEFT PANEL: Navigation -->
            <div class="col-md-3">
                <div class="profile-nav-card shadow-sm">
                    <div class="profile-user-info">
                        <div class="profile-avatar">{{ substr($user->name, 0, 1) }}</div>
                        <h4 class="fs-6 fw-bold mb-1">{{ $user->name }}</h4>
                        <span class="text-muted small">{{ $user->email }}</span>
                    </div>

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                        <button class="nav-link active" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab">
                            <i class="fa-solid fa-receipt text-center" style="width: 16px;"></i> Đơn hàng của tôi
                        </button>
                        <button class="nav-link" id="v-pills-favorites-tab" data-bs-toggle="pill" data-bs-target="#v-pills-favorites" type="button" role="tab">
                            <i class="fa-solid fa-heart text-center" style="width: 16px;"></i> Sản phẩm yêu thích
                        </button>
                        <button class="nav-link" id="v-pills-addresses-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addresses" type="button" role="tab" onclick="renderSavedAddresses()">
                            <i class="fa-solid fa-map-location-dot text-center" style="width: 16px;"></i> Danh sách địa chỉ
                        </button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab">
                            <i class="fa-solid fa-user-edit text-center" style="width: 16px;"></i> Hồ sơ cá nhân
                        </button>
                        <a href="/logout" class="nav-link text-danger mt-3">
                            <i class="fa-solid fa-arrow-right-from-bracket text-center" style="width: 16px;"></i> Đăng xuất
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL: Tab Contents -->
            <div class="col-md-9">
                <div class="content-card shadow-sm tab-content" id="v-pills-tabContent">
                    
                    <!-- TAB 1: Order history -->
                    <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel">
                        <h3 class="card-title">Đơn hàng của tôi</h3>
                        
                        @forelse ($orders as $order)
                            <div class="order-history-item">
                                <div class="order-header">
                                    <div>
                                        <span class="order-id">Đơn hàng #{{ $order->id }}</span>
                                        <span class="order-date ms-2">({{ $order->created_at->format('H:i d/m/Y') }})</span>
                                    </div>
                                    <div>
                                        @if($order->status === 'pending')
                                            <span class="badge bg-warning text-dark">Chờ xử lý</span>
                                        @elseif($order->status === 'processing')
                                            <span class="badge bg-info">Đang xử lý</span>
                                        @elseif($order->status === 'shipped')
                                            <span class="badge bg-primary">Đang giao</span>
                                        @elseif($order->status === 'completed')
                                            <span class="badge bg-success">Hoàn thành</span>
                                        @else
                                            <span class="badge bg-danger">Đã hủy</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="order-items-list mb-3">
                                    @foreach ($order->items as $item)
                                        <div class="order-item-detail">
                                            @if ($item->product->image_path)
                                                <img src="{{ $item->product->image_path }}" class="order-item-img" alt="{{ $item->product->name }}">
                                            @else
                                                <div class="order-item-placeholder"><i class="{{ $item->product->font_awesome_icon ?? 'fa-solid fa-box' }}"></i></div>
                                            @endif
                                            <div>
                                                <div class="fw-semibold text-dark" style="font-size: 13px;">{{ $item->product->name }}</div>
                                                <div class="text-muted" style="font-size: 11px;">Thương hiệu: {{ $item->product->brand }} | Đơn giá: {{ number_format($item->price, 0, ',', '.') }}đ</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="order-footer">
                                    <div class="text-muted small">
                                        <i class="fa-solid fa-truck me-1"></i> Giao tới: {{ Str::limit($order->customer_address, 45) }}
                                    </div>
                                    <span class="order-total">Tổng tiền: {{ number_format($order->total_price, 0, ',', '.') }}đ</span>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5 text-muted">
                                <i class="fa-regular fa-folder-open fs-1 mb-3 d-block text-secondary"></i>
                                Bạn chưa đặt đơn hàng nào hỏa tốc.
                            </div>
                        @endforelse
                    </div>

                    <!-- TAB 2: Favorite products (Seeded from localStorage) -->
                    <div class="tab-pane fade" id="v-pills-favorites" role="tabpanel">
                        <h3 class="card-title">Sản phẩm yêu thích</h3>
                        <div id="favorites-container">
                            <!-- Populated dynamically via Javascript -->
                        </div>
                    </div>

                    <!-- TAB 3: Addresses -->
                    <div class="tab-pane fade" id="v-pills-addresses" role="tabpanel">
                        <h3 class="card-title">Sổ địa chỉ giao hàng</h3>
                        
                        <form id="add-address-form" class="mb-4" onsubmit="saveNewAddress(event)">
                            <div class="input-group">
                                <input type="text" id="new-address-input" required class="form-control rounded-start-3" placeholder="Nhập địa chỉ giao hàng mới (VD: 123 Nguyễn Trãi, Quận 5)...">
                                <button class="btn btn-primary rounded-end-3 fw-bold" type="submit">Thêm Mới</button>
                            </div>
                        </form>

                        <div id="addresses-container">
                            <!-- Populated dynamically via Javascript -->
                        </div>
                    </div>

                    <!-- TAB 4: Profile edit -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel">
                        <h3 class="card-title">Hồ sơ cá nhân</h3>

                        @if (session('success'))
                            <div class="alert alert-success border-0 shadow-sm mb-4" style="border-radius: 12px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/tai-khoan/cap-nhat" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Họ và Tên</label>
                                <input type="text" name="name" value="{{ $user->name }}" required class="form-control rounded-3 py-2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Địa chỉ Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" required class="form-control rounded-3 py-2">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-3 px-4 py-2 fw-bold mt-2">Cập Nhật Thông Tin</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Account Manager Logic -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const tabParam = params.get('tab');
            if (tabParam) {
                const tabEl = document.querySelector(`#v-pills-${tabParam}-tab`);
                if (tabEl) {
                    const allLinks = document.querySelectorAll('.nav-pills button');
                    allLinks.forEach(lnk => lnk.classList.remove('active'));
                    tabEl.classList.add('active');

                    const allPanes = document.querySelectorAll('.tab-content .tab-pane');
                    allPanes.forEach(pane => {
                        pane.classList.remove('show');
                        pane.classList.remove('active');
                    });
                    const targetPane = document.querySelector(`#v-pills-${tabParam}`);
                    if (targetPane) {
                        targetPane.classList.add('show');
                        targetPane.classList.add('active');
                    }
                }
            }

            renderFavorites();
            renderSavedAddresses();
        });

        function getSavedAddresses() {
            let addrs = localStorage.getItem('user_saved_addresses');
            return addrs ? JSON.parse(addrs) : ['Quận 1, TP. Hồ Chí Minh', 'Quận 5, TP. Hồ Chí Minh'];
        }

        function renderSavedAddresses() {
            const addrs = getSavedAddresses();
            const container = document.getElementById('addresses-container');
            if (addrs.length === 0) {
                container.innerHTML = `<div class="text-muted text-center py-4">Chưa lưu địa chỉ nào.</div>`;
                return;
            }

            container.innerHTML = addrs.map((addr, idx) => `
                <div class="address-item">
                    <span class="address-info"><i class="fa-solid fa-map-pin me-2 text-primary"></i> ${addr}</span>
                    <button onclick="deleteAddress(${idx})" class="address-delete-btn btn btn-link p-0 text-decoration-none">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
            `).join('');
        }

        function saveNewAddress(e) {
            e.preventDefault();
            const input = document.getElementById('new-address-input');
            const addr = input.value.trim();
            if (addr) {
                const addrs = getSavedAddresses();
                addrs.push(addr);
                localStorage.setItem('user_saved_addresses', JSON.stringify(addrs));
                input.value = '';
                renderSavedAddresses();
            }
        }

        function deleteAddress(idx) {
            if (confirm('Bạn chắc chắn muốn xóa địa chỉ này?')) {
                const addrs = getSavedAddresses();
                addrs.splice(idx, 1);
                localStorage.setItem('user_saved_addresses', JSON.stringify(addrs));
                renderSavedAddresses();
            }
        }

        function getFavorites() {
            let favs = localStorage.getItem('user_favorites');
            return favs ? JSON.parse(favs) : [];
        }

        function renderFavorites() {
            const favs = getFavorites();
            const container = document.getElementById('favorites-container');
            if (favs.length === 0) {
                container.innerHTML = `<div class="text-muted text-center py-5"><i class="fa-regular fa-heart fs-1 d-block mb-3 text-secondary"></i> Bạn chưa yêu thích sản phẩm nào.</div>`;
                return;
            }

            container.innerHTML = favs.map(product => `
                <div class="favorite-item">
                    <div class="favorite-left">
                        <div class="order-item-placeholder" style="width: 48px; height: 48px; border-radius: 8px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                            ${product.image_path ? `<img src="${product.image_path}" style="width: 48px; height: 48px; object-fit: cover; border-radius: 8px;">` : `<i class="${product.font_awesome_icon ?? 'fa-solid fa-box'}"></i>`}
                        </div>
                        <div>
                            <span class="favorite-name d-block">${product.name}</span>
                            <span class="favorite-price">${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.price)}</span>
                        </div>
                    </div>
                    <button onclick="removeFavorite(${product.id})" class="favorite-remove-btn btn btn-link p-0 text-decoration-none">
                        <i class="fa-solid fa-heart-crack"></i> Bỏ thích
                    </button>
                </div>
            `).join('');
        }

        function removeFavorite(productId) {
            let favs = getFavorites();
            favs = favs.filter(p => p.id !== productId);
            localStorage.setItem('user_favorites', JSON.stringify(favs));
            renderFavorites();
        }
    </script>

</body>
</html>
