<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();
        
        // Fetch active flash sale products
        $flashProducts = Product::where('is_active', true)
                                ->where('is_flashsale', true)
                                ->get();
                                
        // Fetch active featured products                        
        $featuredProducts = Product::where('is_active', true)
                                   ->where('is_featured', true)
                                   ->take(5)
                                   ->get();

        return view('welcome', compact('categories', 'flashProducts', 'featuredProducts'));
    }

    public function category(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $categories = Category::where('is_active', true)->get();

        // Get subcategories unique list
        $subCategories = Product::where('category_id', $category->id)
                                ->whereNotNull('sub_category')
                                ->distinct()
                                ->pluck('sub_category')
                                ->toArray();

        // Query products
        $query = Product::where('category_id', $category->id)->where('is_active', true);

        if ($request->has('sub') && $request->sub !== 'Tất cả') {
            $query->where('sub_category', $request->sub);
        }

        if ($request->has('q') && !empty($request->q)) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        // Sorting
        $sort = $request->get('sort', 'default');
        if ($sort === 'price-asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'price-desc') {
            $query->orderBy('price', 'desc');
        }

        $products = $query->get();

        return view('category', compact('category', 'categories', 'subCategories', 'products', 'sort'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:25',
            'customer_address' => 'required|string|max:500',
            'items' => 'required|json'
        ]);

        $items = json_decode($request->items, true);
        if (empty($items)) {
            return back()->with('error', 'Giỏ hàng trống, không thể đặt hàng.');
        }

        DB::beginTransaction();
        try {
            $totalPrice = 0;
            
            // 1. Create Order
            $order = Order::create([
                'user_id' => auth()->id(),
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'total_price' => 0, // updated after item sum
                'status' => 'pending',
                'delivery_eta' => '1 - 3 giờ'
            ]);

            // 2. Create Order Items
            foreach ($items as $item) {
                $product = Product::findOrFail($item['id']);
                
                // Check stock
                if ($product->stock < 1) {
                    throw new \Exception('Sản phẩm ' . $product->name . ' đã hết hàng.');
                }
                
                // Deduct stock
                $product->decrement('stock', 1);
                $product->increment('sold', 1);

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'quantity' => 1 
                ]);

                $totalPrice += $product->price;
            }

            // Update final total price
            $order->update(['total_price' => $totalPrice]);

            DB::commit();
            return view('checkout_success', compact('order'));

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function profile()
    {
        $user = auth()->user();
        if (!$user) {
            return redirect('/login');
        }

        $orders = Order::where('user_id', $user->id)
                       ->with('items.product')
                       ->orderBy('created_at', 'desc')
                       ->get();

        return view('profile', compact('user', 'orders'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with('success', 'Cập nhật thông tin tài khoản thành công.');
    }

    public function updateAddress(Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        $request->validate([
            'address' => 'required|string|max:500'
        ]);

        $user->update([
            'address' => $request->address
        ]);

        return response()->json(['success' => true, 'message' => 'Địa chỉ đã được đồng bộ vào hệ thống.']);
    }
}
