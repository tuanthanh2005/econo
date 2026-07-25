<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán Đặt Cọc Đơn Hàng #{{ $order->id }} - Giao Cấp Tốc</title>
    
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

        .payment-card {
            background: white;
            border-radius: 28px;
            padding: 40px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            max-width: 650px;
            margin: 0 auto;
        }

        .payment-header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 20px;
        }

        .payment-title {
            font-size: 20px;
            font-weight: 900;
            color: var(--text-color);
            margin-bottom: 8px;
        }

        .payment-subtitle {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .alert-box {
            background: #fff9db;
            border: 1px solid #ffe066;
            padding: 16px;
            border-radius: 16px;
            font-size: 12.5px;
            color: #b7791f;
            margin-bottom: 24px;
            font-weight: 600;
            line-height: 1.5;
        }

        .billing-summary {
            background: #f8fafc;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid var(--border-color);
            margin-bottom: 24px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 13.5px;
            font-weight: 700;
        }

        .summary-row.highlight {
            border-top: 1px dashed var(--border-color);
            padding-top: 12px;
            margin-top: 12px;
            font-size: 16px;
            font-weight: 900;
            color: var(--secondary);
        }

        .bank-details-box {
            background: white;
            border: 2px solid var(--primary-light);
            border-radius: 20px;
            padding: 24px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-sm);
        }

        .bank-details-title {
            font-size: 14px;
            font-weight: 900;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .bank-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 13.5px;
            font-weight: 700;
        }

        .bank-row:last-child {
            margin-bottom: 0;
        }

        .bank-label {
            color: var(--text-muted);
            font-weight: 500;
        }

        .bank-value {
            color: var(--text-color);
            font-weight: 800;
        }

        .bank-value.copyable {
            color: var(--primary);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .bank-value.copyable:hover {
            text-decoration: underline;
        }

        .confirm-btn {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 900;
            text-transform: uppercase;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .confirm-btn:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: #0f172a;
            color: #94a3b8;
            padding: 40px 0 30px;
            border-top: 1px solid #1e293b;
        }

        .footer-grid {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        <div class="payment-card">
            
            <div class="payment-header">
                <h2 class="payment-title"><i class="fa-solid fa-qrcode text-primary"></i> Thanh toán đặt cọc 50% đơn hàng</h2>
                <p class="payment-subtitle">Vui lòng thanh toán cọc trước 50% đơn hàng hỏa tốc để xác thực đơn và tránh tình trạng "bom hàng". Số tiền còn lại bạn sẽ trả khi nhận hàng.</p>
            </div>

            <div class="alert-box">
                <i class="fa-solid fa-circle-info"></i> Hệ thống đang chờ nhận cọc. Sau khi chuyển khoản thành công, bạn vui lòng nhấn nút <strong>"Xác nhận đã thanh toán 50%"</strong> bên dưới để shipper bắt đầu giao đơn ngay.
            </div>

            <div class="billing-summary">
                <div class="summary-row">
                    <span style="color: var(--text-muted);">Tổng giá trị đơn hàng:</span>
                    <span>{{ number_format($order->total_price, 0, ',', '.') }}đ</span>
                </div>
                <div class="summary-row highlight">
                    <span>Số tiền cần cọc trước (50%):</span>
                    <span>{{ number_format($order->total_price * 0.5, 0, ',', '.') }}đ</span>
                </div>
                <div class="summary-row" style="margin-top: 12px; font-size: 12.5px; color: var(--text-muted);">
                    <span>Số tiền thanh toán khi nhận hàng (Cod):</span>
                    <span>{{ number_format($order->total_price * 0.5, 0, ',', '.') }}đ</span>
                </div>
            </div>

            <div class="bank-details-box" style="display: flex; gap: 24px; align-items: center; flex-wrap: wrap; background: white; border: 2px solid var(--primary-light); border-radius: 20px; padding: 24px; margin-bottom: 30px; box-shadow: var(--shadow-sm);">
                <div style="flex: 1; min-width: 280px;">
                    <h3 class="bank-details-title" style="font-size: 14px; font-weight: 900; color: var(--primary); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 8px; display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-university"></i> Thông tin chuyển khoản</h3>
                    
                    <div class="bank-row">
                        <span class="bank-label">Ngân hàng:</span>
                        <span class="bank-value">OCB (Ngân hàng TMCP Phương Đông)</span>
                    </div>
                    <div class="bank-row">
                        <span class="bank-label">Số tài khoản:</span>
                        <span class="bank-value copyable" onclick="copyText('0772698113')">
                            0772698113 <i class="fa-regular fa-copy"></i>
                        </span>
                    </div>
                    <div class="bank-row">
                        <span class="bank-label">Chủ tài khoản:</span>
                        <span class="bank-value">TRAN THANH TUAN</span>
                    </div>
                    <div class="bank-row">
                        <span class="bank-label">Số tiền cọc (50%):</span>
                        <span class="bank-value" style="color: var(--secondary);">{{ number_format($order->total_price * 0.5, 0, ',', '.') }}đ</span>
                    </div>
                    <div class="bank-row">
                        <span class="bank-label">Nội dung chuyển khoản:</span>
                        <span class="bank-value copyable" onclick="copyText('GCT {{ $order->id }}')">
                            GCT {{ $order->id }} <i class="fa-regular fa-copy"></i>
                        </span>
                    </div>
                </div>

                <!-- VietQR dynamic Code area -->
                <div style="flex-shrink: 0; width: 180px; height: 180px; border: 1.5px solid var(--border-color); border-radius: 16px; overflow: hidden; background: white; padding: 6px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-sm);">
                    <img src="https://img.vietqr.io/image/OCB-0772698113-compact.png?amount={{ $order->total_price * 0.5 }}&addInfo=GCT%20{{ $order->id }}&accountName=TRAN%20THANH%20TUAN" alt="Mã VietQR cọc 50%" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>

            <form action="{{ route('order.confirm_payment', ['id' => $order->id]) }}" method="POST">
                @csrf
                <button type="submit" class="confirm-btn">
                    <i class="fa-solid fa-circle-check"></i> Xác nhận đã thanh toán 50%
                </button>
            </form>

        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-grid">
            <span style="font-size: 12.5px;">© 2026 Giao Cấp Tốc. All rights reserved.</span>
            <span style="font-size: 12.5px;">Hệ thống xác thực giao hàng tự động.</span>
        </div>
    </footer>

    <script>
        function copyText(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('Đã sao chép: ' + text);
            }).catch(err => {
                console.error('Không thể sao chép:', err);
            });
        }
    </script>
</body>
</html>
