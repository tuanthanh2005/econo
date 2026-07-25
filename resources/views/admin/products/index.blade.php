@extends('admin.layouts.app')

@section('title', 'Quản Lý Sản Phẩm')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-transparent py-3 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">Danh Sách Sản Phẩm</h5>
        <a href="/admin/products/create" class="btn btn-primary btn-sm rounded-3 fw-bold"><i class="fa-solid fa-plus me-1"></i> Thêm Sản Phẩm</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="px-4">Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Nhãn con</th>
                        <th>Thương hiệu</th>
                        <th>Giá bán</th>
                        <th>Kho</th>
                        <th>Flashsale</th>
                        <th>Nổi bật</th>
                        <th>Trạng thái</th>
                        <th class="text-end px-4">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-4">
                                @if ($product->image_path)
                                    <img src="{{ $product->image_path }}" alt="{{ $product->name }}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px;">
                                @else
                                    <div class="bg-light text-muted d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 8px; font-size: 16px;">
                                        <i class="{{ $product->font_awesome_icon ?? 'fa-solid fa-box' }}"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="fw-semibold" style="max-width: 200px;">{{ $product->name }}</td>
                            <td><span class="badge bg-light text-dark border">{{ $product->category->name }}</span></td>
                            <td><small class="text-muted">{{ $product->sub_category ?? '-' }}</small></td>
                            <td>{{ $product->brand }}</td>
                            <td class="fw-bold text-danger">{{ number_format($product->price, 0, ',', '.') }}đ</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                @if ($product->is_flashsale)
                                    <span class="badge bg-danger">⚡ Flash</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                @if ($product->is_featured)
                                    <span class="badge bg-warning text-dark">🔥 Hot</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                @if ($product->is_active)
                                    <span class="badge bg-success-subtle text-success">Hoạt động</span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger">Khóa</span>
                                @endif
                            </td>
                            <td class="text-end px-4">
                                <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-outline-primary btn-sm me-1"><i class="fa-solid fa-pen"></i></a>
                                <form action="/admin/products/{{ $product->id }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
