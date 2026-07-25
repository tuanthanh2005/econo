<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đặt Hàng Thành Công - Giao Cấp Tốc</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        :root {
            --primary: #ff5722;
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-card {
            background: white;
            border-radius: 24px;
            padding: 40px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            border: 1px solid var(--border-color);
            text-align: center;
        }

        .success-icon {
            width: 64px;
            height: 64px;
            background: #e8f5e9;
            color: #2e7d32;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 20px;
            animation: bounce 1s ease;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-12px); }
            60% { transform: translateY(-6px); }
        }

        .title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 24px;
            line-height: 1.5;
        }

        .order-details-box {
            background: #f8fafc;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid var(--border-color);
            text-align: left;
            margin-bottom: 30px;
            font-size: 13px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f1f5f9;
        }

        .detail-row:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .detail-lbl {
            color: var(--text-muted);
            font-weight: 500;
        }

        .detail-val {
            font-weight: 700;
            color: var(--text-main);
            text-align: right;
            max-width: 250px;
        }

        .home-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 700;
            padding: 14px 28px;
            border-radius: 12px;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.2);
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .home-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.3);
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="success-icon"><i class="fa-solid fa-check"></i></div>
        
        <h2 class="title">Đặt Hàng Thành Công!</h2>
        <p class="subtitle">Cảm ơn bạn đã lựa chọn Giao Cấp Tốc. Đơn hàng của bạn đã được chuyển đến hệ thống xử lý đóng gói hỏa tốc.</p>

        <div class="order-details-box">
            <div class="detail-row">
                <span class="detail-lbl">Mã đơn hàng:</span>
                <span class="detail-val" style="color: var(--primary);">#{{ $order->id }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-lbl">Người nhận:</span>
                <span class="detail-val">{{ $order->customer_name }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-lbl">Số điện thoại:</span>
                <span class="detail-val">{{ $order->customer_phone }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-lbl">Địa chỉ giao nhận:</span>
                <span class="detail-val">{{ $order->customer_address }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-lbl">Thời gian dự kiến:</span>
                <span class="detail-val text-success"><i class="fa-solid fa-bolt me-1"></i> {{ $order->delivery_eta }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-lbl">Tổng thanh toán:</span>
                <span class="detail-val" style="color: var(--secondary); font-size: 16px;">{{ number_format($order->total_price, 0, ',', '.') }}đ</span>
            </div>
        </div>

        <a href="/" class="home-btn"><i class="fa-solid fa-house me-2"></i> Về trang chủ</a>
    </div>

</body>
</html>
