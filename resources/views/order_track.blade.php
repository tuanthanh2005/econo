<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo Dõi Đơn Hàng #{{ $order->id }} - Giao Cấp Tốc</title>
    
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
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
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

        /* MAIN CONTENT */
        main {
            padding: 40px 0 80px;
        }

        .track-layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
        }

        .track-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .track-title {
            font-size: 18px;
            font-weight: 900;
            margin-bottom: 24px;
            border-bottom: 1.5px solid var(--border-color);
            padding-bottom: 14px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .track-title i {
            color: var(--primary);
        }

        /* TIMELINE FLOW */
        .timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 20px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 10px;
            bottom: 10px;
            width: 3px;
            background: var(--border-color);
            z-index: 1;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 36px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-badge {
            position: absolute;
            left: -36px;
            top: 2px;
            width: 33px;
            height: 33px;
            border-radius: 50%;
            background: white;
            border: 3px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            z-index: 2;
            transition: var(--transition);
            color: var(--text-muted);
        }

        .timeline-item.completed .timeline-badge {
            background: #e8f5e9;
            border-color: #2e7d32;
            color: #2e7d32;
        }

        .timeline-item.active .timeline-badge {
            background: var(--primary-light);
            border-color: var(--primary);
            color: var(--primary);
            box-shadow: 0 0 0 4px rgba(255, 87, 34, 0.15);
            animation: pulseDot 2s infinite;
        }

        .timeline-content {
            padding-left: 10px;
        }

        .timeline-title {
            font-size: 14.5px;
            font-weight: 850;
            color: var(--text-color);
            margin-bottom: 4px;
        }

        .timeline-item.active .timeline-title {
            color: var(--primary);
        }

        .timeline-time {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
        }

        .timeline-desc {
            font-size: 12.5px;
            color: var(--text-muted);
            margin-top: 6px;
            line-height: 1.5;
        }

        /* Order Details Sidebar Card */
        .order-sidebar-card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            height: fit-content;
        }

        .sidebar-title {
            font-size: 16px;
            font-weight: 900;
            margin-bottom: 20px;
            border-bottom: 1px dashed var(--border-color);
            padding-bottom: 12px;
            color: var(--text-color);
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 13px;
            font-weight: 700;
        }

        .detail-row:last-child {
            margin-bottom: 0;
        }

        .detail-lbl {
            color: var(--text-muted);
            font-weight: 500;
        }

        .detail-val {
            color: var(--text-color);
            font-weight: 800;
            text-align: right;
            max-width: 180px;
        }

        .items-box {
            border-top: 1px dashed var(--border-color);
            margin-top: 20px;
            padding-top: 20px;
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-size: 12.5px;
            font-weight: 700;
        }

        .item-row:last-child {
            margin-bottom: 0;
        }

        .item-name-qty {
            display: flex;
            flex-direction: column;
        }

        .home-action-btn {
            width: 100%;
            background: #0f172a;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-size: 13.5px;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .home-action-btn:hover {
            background: #1e293b;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes pulseDot {
            0% { box-shadow: 0 0 0 0 rgba(255, 87, 34, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(255, 87, 34, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 87, 34, 0); }
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
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container" style="margin-top: 30px; margin-bottom: 50px;">
        
        <div style="background: #e8f5e9; border: 1px solid #c8e6c9; color: #2e7d32; padding: 16px 20px; border-radius: 16px; margin-bottom: 30px; display: flex; align-items: center; gap: 12px; font-weight: 700; font-size: 14px;">
            <i class="fa-solid fa-circle-check" style="font-size: 20px;"></i>
            <span>Đã cọc thành công 50%! Đơn hàng hỏa tốc của bạn đã được xác nhận và đưa vào lộ trình chuẩn bị giao.</span>
        </div>

        <div class="track-layout">
            
            <!-- Left Side: Timeline Progress -->
            <div class="track-card">
                <h2 class="track-title"><i class="fa-solid fa-road-barrier"></i> Hành trình theo dõi đơn hàng</h2>
                
                <div class="timeline">
                    
                    <!-- Stage 1: Ordered and Deposited -->
                    @php
                        $isPendingPayment = $order->status === 'pending_payment';
                        $isCancelled = $order->status === 'cancelled';
                        
                        $stage1Class = (!$isPendingPayment && !$isCancelled) ? 'completed' : ($isPendingPayment ? 'active' : '');
                        $stage2Class = ($order->status === 'processing') ? 'active' : (in_array($order->status, ['shipped', 'completed']) ? 'completed' : '');
                        $stage3Class = ($order->status === 'shipped') ? 'active' : ($order->status === 'completed' ? 'completed' : '');
                        $stage4Class = ($order->status === 'completed') ? 'completed' : '';
                    @endphp

                    <div class="timeline-item {{ $stage1Class }}">
                        <div class="timeline-badge"><i class="fa-solid fa-check"></i></div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Đã đặt cọc 50% & Xác nhận đơn hàng</h4>
                            <span class="timeline-time">{{ $order->created_at->format('H:i - d/m/Y') }}</span>
                            <p class="timeline-desc">Hệ thống đã nhận khoản cọc chuyển khoản 50% trị giá <strong>{{ number_format($order->total_price * 0.5, 0, ',', '.') }}đ</strong> thành công.</p>
                        </div>
                    </div>

                    <!-- Stage 2: Preparing -->
                    <div class="timeline-item {{ $stage2Class }}">
                        <div class="timeline-badge"><i class="fa-solid fa-box-open"></i></div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Đang đóng gói & chuẩn bị tại kho Quận 5</h4>
                            <span class="timeline-time">
                                @if (in_array($order->status, ['processing', 'shipped', 'completed']))
                                    ⚡ Kho hàng đang soạn đơn
                                @else
                                    Chờ cọc thanh toán
                                @endif
                            </span>
                            <p class="timeline-desc">Nhân viên kho hàng Quận 5 đang tiến hành kiểm kê sản phẩm, đóng gói chống sốc bảo quản hỏa tốc.</p>
                        </div>
                    </div>

                    <!-- Stage 3: Delivering -->
                    <div class="timeline-item {{ $stage3Class }}">
                        <div class="timeline-badge"><i class="fa-solid fa-motorcycle"></i></div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Đang trên đường giao hỏa tốc</h4>
                            <span class="timeline-time">
                                @if ($order->status === 'shipped')
                                    🛵 Shipper đang di chuyển
                                @elseif ($order->status === 'completed')
                                    Đã bàn giao shipper
                                @else
                                    Chờ chuẩn bị xong hàng
                                @endif
                            </span>
                            <p class="timeline-desc">Đối tác shipper hỏa tốc đã nhận hàng và đang tối ưu hóa lộ trình giao đến nhà bạn nhanh nhất.</p>
                        </div>
                    </div>

                    <!-- Stage 4: Delivered and Completed -->
                    <div class="timeline-item {{ $stage4Class }}">
                        <div class="timeline-badge"><i class="fa-solid fa-house-chimney-user"></i></div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Đã giao hàng & Thu nốt 50% còn lại</h4>
                            <span class="timeline-time">
                                @if ($order->status === 'completed')
                                    🎉 Hoàn thành đơn hàng
                                @else
                                    Chờ bàn giao
                                @endif
                            </span>
                            <p class="timeline-desc">Shipper giao tận nơi, khách nhận hàng và thanh toán nốt số tiền 50% còn lại là <strong>{{ number_format($order->total_price * 0.5, 0, ',', '.') }}đ</strong> cho shipper.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Order Summary -->
            <div class="order-sidebar-card">
                <h3 class="sidebar-title">Thông tin đơn hàng #{{ $order->id }}</h3>
                
                <div class="detail-row">
                    <span class="detail-lbl">Khách hàng:</span>
                    <span class="detail-val">{{ $order->customer_name }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-lbl">Số điện thoại:</span>
                    <span class="detail-val">{{ $order->customer_phone }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-lbl">Địa chỉ nhận:</span>
                    <span class="detail-val" style="font-size: 11.5px;">{{ $order->customer_address }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-lbl">Dự kiến giao:</span>
                    <span class="detail-val" style="color: var(--primary);"><i class="fa-solid fa-bolt"></i> {{ $order->delivery_eta }}</span>
                </div>
                <div class="detail-row" style="margin-top: 10px; border-top: 1px dashed var(--border-color); padding-top: 10px;">
                    <span class="detail-lbl">Tổng thanh toán:</span>
                    <span class="detail-val" style="color: var(--secondary); font-size: 15px;">{{ number_format($order->total_price, 0, ',', '.') }}đ</span>
                </div>

                <!-- Product list -->
                <div class="items-box">
                    <h4 style="font-size: 12.5px; font-weight: 800; color: var(--text-color); margin-bottom: 12px;">Món hàng trong đơn:</h4>
                    @foreach ($order->items as $item)
                        <div class="item-row">
                            <div class="item-name-qty">
                                <span style="font-weight: 700; color: var(--text-color);">{{ $item->product->name }}</span>
                                <span style="font-size: 10px; color: var(--text-muted);">Số lượng: 1</span>
                            </div>
                            <span style="font-weight: 800; color: var(--text-color);">{{ number_format($item->price, 0, ',', '.') }}đ</span>
                        </div>
                    @endforeach
                </div>

                <a href="/" class="home-action-btn"><i class="fa-solid fa-house"></i> Về trang chủ mua sắm</a>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-grid">
            <span style="font-size: 12.5px;">© 2026 Giao Cấp Tốc. All rights reserved.</span>
            <span style="font-size: 12.5px;">Bản đồ theo dõi hành trình đơn hàng.</span>
        </div>
    </footer>
</body>
</html>
