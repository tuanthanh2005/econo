<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'sub_category' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'sold' => 'nullable|integer|min:0',
            'stock' => 'required|integer|min:0',
            'eta' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'font_awesome_icon' => 'nullable|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            // Move file directly to public directory
            $image->move(public_path('uploads/products'), $filename);
            $imagePath = '/uploads/products/' . $filename;
        }

        Product::create([
            'category_id' => $request->category_id,
            'sub_category' => $request->sub_category,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'brand' => $request->brand ?? 'Giao Cấp Tốc',
            'price' => $request->price,
            'old_price' => $request->old_price,
            'discount' => $request->discount ?? 0,
            'sold' => $request->sold ?? 0,
            'stock' => $request->stock,
            'eta' => $request->eta ?? 'Giao trong 1 giờ',
            'image_path' => $imagePath,
            'font_awesome_icon' => $request->font_awesome_icon ?? 'fa-solid fa-box',
            'is_flashsale' => $request->has('is_flashsale'),
            'is_featured' => $request->has('is_featured'),
            'is_active' => true
        ]);

        return redirect('/admin/products')->with('success', 'Đã thêm sản phẩm mới thành công.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'sub_category' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'sold' => 'nullable|integer|min:0',
            'stock' => 'required|integer|min:0',
            'eta' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'font_awesome_icon' => 'nullable|string|max:255',
        ]);

        $imagePath = $product->image_path;
        if ($request->hasFile('image')) {
            // Delete old file if exists in public
            if ($imagePath && file_exists(public_path($imagePath))) {
                @unlink(public_path($imagePath));
            }

            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $filename);
            $imagePath = '/uploads/products/' . $filename;
        }

        $product->update([
            'category_id' => $request->category_id,
            'sub_category' => $request->sub_category,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'brand' => $request->brand,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'discount' => $request->discount ?? 0,
            'sold' => $request->sold ?? 0,
            'stock' => $request->stock,
            'eta' => $request->eta,
            'image_path' => $imagePath,
            'font_awesome_icon' => $request->font_awesome_icon,
            'is_flashsale' => $request->has('is_flashsale'),
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active')
        ]);

        return redirect('/admin/products')->with('success', 'Đã cập nhật sản phẩm thành công.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image_path && file_exists(public_path($product->image_path))) {
            @unlink(public_path($product->image_path));
        }
        $product->delete();
        return redirect('/admin/products')->with('success', 'Đã xóa sản phẩm.');
    }
}
