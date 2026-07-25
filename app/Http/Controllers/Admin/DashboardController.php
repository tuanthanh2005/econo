<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $categoriesCount = Category::count();
        $productsCount = Product::count();
        $ordersCount = Order::count();
        $totalRevenue = Order::where('status', 'completed')->sum('total_price');
        
        $recentOrders = Order::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'categoriesCount',
            'productsCount',
            'ordersCount',
            'totalRevenue',
            'recentOrders'
        ));
    }
}
