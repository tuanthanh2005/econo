<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

// ================= FRONTEND ROUTES =================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-muc/{slug}', [HomeController::class, 'category'])->name('category.show');
Route::get('/san-pham/{slug}', [HomeController::class, 'productDetails'])->name('product.show');
Route::get('/gio-hang', [HomeController::class, 'showCart'])->name('cart.show');
Route::post('/dat-hang', [HomeController::class, 'checkout'])->name('checkout.store');
Route::get('/don-hang/{id}/thanh-toan', [HomeController::class, 'showPayment'])->name('order.payment');
Route::post('/don-hang/{id}/xac-nhan-thanh-toan', [HomeController::class, 'confirmPayment'])->name('order.confirm_payment');
Route::get('/don-hang/{id}/theo-doi', [HomeController::class, 'trackOrder'])->name('order.track');

// ================= AUTHENTICATION =================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ================= USER ACCOUNT PROFILE =================
Route::middleware(['auth'])->group(function () {
    Route::get('/tai-khoan', [HomeController::class, 'profile'])->name('profile');
    Route::post('/tai-khoan/cap-nhat', [HomeController::class, 'updateProfile'])->name('profile.update');
    Route::post('/tai-khoan/cap-nhat-dia-chi', [HomeController::class, 'updateAddress'])->name('profile.update_address');
});

// ================= BACKEND (SUPERADMIN) =================
Route::middleware(['auth', 'superadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Categories CRUD
    Route::resource('/categories', CategoryController::class)->except(['create', 'show', 'edit']);
    
    // Products CRUD
    Route::resource('/products', ProductController::class);
    
    // Orders Management
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
});
