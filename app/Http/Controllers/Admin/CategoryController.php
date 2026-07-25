<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon_class' => 'nullable|string',
            'eta_label' => 'nullable|string',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'icon_class' => $request->icon_class ?? 'fa-solid fa-box',
            'eta_label' => $request->eta_label ?? '⚡ Giao nhanh 1h',
            'is_active' => true
        ]);

        return back()->with('success', 'Đã thêm danh mục mới thành công.');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon_class' => 'nullable|string',
            'eta_label' => 'nullable|string',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'icon_class' => $request->icon_class,
            'eta_label' => $request->eta_label,
            'is_active' => $request->has('is_active')
        ]);

        return back()->with('success', 'Cập nhật danh mục thành công.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Đã xóa danh mục.');
    }
}
