<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Quản Trị Viên Giao Cấp Tốc</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            color: #0f172a;
        }

        .sidebar {
            width: 250px;
            background-color: #0f172a;
            color: white;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 24px 16px;
            z-index: 100;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
            padding-left: 8px;
            text-decoration: none;
            color: white;
        }

        .sidebar-brand-icon {
            background: #ff5722;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .sidebar-brand h1 {
            font-size: 16px;
            font-weight: 800;
            margin: 0;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .nav-menu-item a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #94a3b8;
            padding: 12px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-menu-item a:hover, .nav-menu-item.active a {
            background-color: #1e293b;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
            min-height: 100vh;
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 16px 30px;
            border-radius: 16px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            border: 1px solid #e2e8f0;
        }

        .card {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid #e2e8f0;
            padding: 16px 24px;
            font-weight: 700;
            font-size: 14px;
        }

        .btn-primary {
            background: #ff5722;
            border-color: #ff5722;
        }

        .btn-primary:hover {
            background: #e64a19;
            border-color: #e64a19;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="/" class="sidebar-brand">
            <div class="sidebar-brand-icon"><i class="fa-solid fa-bolt"></i></div>
            <div>
                <h1>GIAO CẤP TỐC</h1>
            </div>
        </a>

        <ul class="nav-menu">
            <li class="nav-menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard">
                    <i class="fa-solid fa-chart-line"></i> Dashboard
                </a>
            </li>
            <li class="nav-menu-item {{ Request::is('admin/categories*') ? 'active' : '' }}">
                <a href="/admin/categories">
                    <i class="fa-solid fa-list"></i> Quản Lý Danh Mục
                </a>
            </li>
            <li class="nav-menu-item {{ Request::is('admin/products*') ? 'active' : '' }}">
                <a href="/admin/products">
                    <i class="fa-solid fa-box-open"></i> Quản Lý Sản Phẩm
                </a>
            </li>
            <li class="nav-menu-item {{ Request::is('admin/orders*') ? 'active' : '' }}">
                <a href="/admin/orders">
                    <i class="fa-solid fa-receipt"></i> Quản Lý Đơn Hàng
                </a>
            </li>
        </ul>
    </div>

    <!-- MAIN WRAPPER -->
    <div class="main-content">
        <!-- TOP HEADER BAR -->
        <div class="header-bar">
            <h2 class="fs-5 fw-bold mb-0">Hệ Thống Quản Trị Backend</h2>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm fw-semibold" type="button" data-bs-toggle="dropdown">
                    <i class="fa-regular fa-user me-2"></i> {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><a class="dropdown-item text-danger fw-semibold" href="/logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Đăng xuất</a></li>
                </ul>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-radius: 12px;">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-radius: 12px;">
                <i class="fa-solid fa-triangle-exclamation me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- DYNAMIC PAGE CONTENT -->
        @yield('content')
    </div>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
