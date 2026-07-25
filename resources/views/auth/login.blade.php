<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Nhập - Giao Cấp Tốc</title>
    <meta name="description" content="Đăng nhập tài khoản Giao Cấp Tốc để theo dõi các đơn hàng hoa tươi, phụ kiện điện thoại, đồ ăn hỏa tốc của bạn.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #ff5722;
            --primary-light: #ffebe5;
            --secondary: #ff2a68;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --bg-body: #f8fafc;
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

        .auth-card {
            background: white;
            border-radius: 24px;
            padding: 40px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            border: 1px solid var(--border-color);
        }

        .logo-area {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 24px;
        }

        .logo-icon {
            background: linear-gradient(135deg, #ff9800, var(--secondary));
            color: white;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .logo-text h1 {
            font-size: 18px;
            font-weight: 800;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
        }

        .auth-title {
            text-align: center;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .auth-subtitle {
            text-align: center;
            font-size: 12px;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px 12px 42px;
            border: 1.5px solid var(--border-color);
            background: #f8fafc;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 4px var(--primary-light);
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 700;
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            font-size: 14px;
            margin-top: 10px;
            border: none;
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.2);
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.3);
        }

        .auth-footer {
            text-align: center;
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 24px;
        }

        .auth-footer a {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
        }

        .alert {
            background: #ffebee;
            color: #c62828;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid #ffcdd2;
        }

        .alert-success {
            background: #e8f5e9;
            color: #2e7d32;
            border-color: #c8e6c9;
        }
    </style>
</head>
<body>

    <div class="auth-card">
        <a href="/" class="logo-area">
            <div class="logo-icon"><i class="fa-solid fa-bolt"></i></div>
            <div class="logo-text">
                <h1>GIAO CẤP TỐC</h1>
            </div>
        </a>

        <h2 class="auth-title">Chào mừng trở lại!</h2>
        <p class="auth-subtitle">Đăng nhập tài khoản của bạn để đặt hàng hỏa tốc</p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            
            <div class="form-group">
                <label class="form-label">Địa chỉ Email</label>
                <div class="input-group">
                    <span class="input-icon"><i class="fa-regular fa-envelope"></i></span>
                    <input type="email" name="email" value="{{ old('email') }}" required class="form-input" placeholder="email@gmail.com">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <div class="input-group">
                    <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required class="form-input" placeholder="••••••••">
                </div>
            </div>

            <button type="submit" class="submit-btn">Đăng Nhập</button>
        </form>

        <div class="auth-footer">
            Chưa có tài khoản? <a href="/register">Đăng ký ngay</a>
        </div>
    </div>

</body>
</html>
