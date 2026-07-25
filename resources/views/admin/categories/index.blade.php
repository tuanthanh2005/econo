@extends('admin.layouts.app')

@section('title', 'Quản Lý Danh Mục')

@section('content')
<div class="row g-4">
    <!-- List Categories -->
    <div class="col-md-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent py-3">
                <h5 class="fw-bold mb-0">Danh Sách Danh Mục</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4">Icon</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th>ETA Giao</th>
                                <th>Trạng thái</th>
                                <th class="text-end px-4">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                                <tr>
                                    <td class="px-4"><i class="{{ $cat->icon_class }} fs-5 text-primary"></i></td>
                                    <td class="fw-semibold">{{ $cat->name }}</td>
                                    <td>{{ Str::limit($cat->description, 40) }}</td>
                                    <td><span class="badge bg-light text-dark fw-bold border">{{ $cat->eta_label }}</span></td>
                                    <td>
                                        @if ($cat->is_active)
                                            <span class="badge bg-success-subtle text-success">Đang hoạt động</span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger">Đã khóa</span>
                                        @endif
                                    </td>
                                    <td class="text-end px-4">
                                        <button class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $cat->id }}"><i class="fa-solid fa-pen"></i></button>
                                        <form action="/admin/categories/{{ $cat->id }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc muốn xóa danh mục này? Tất cả sản phẩm trong danh mục này cũng sẽ bị xóa.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- EDIT MODAL -->
                                <div class="modal fade" id="editModal{{ $cat->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 20px;">
                                            <form action="/admin/categories/{{ $cat->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold">Chỉnh Sửa Danh Mục</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold small">Tên Danh Mục</label>
                                                        <input type="text" name="name" value="{{ $cat->name }}" required class="form-control rounded-3">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold small">Mô Tả</label>
                                                        <textarea name="description" class="form-control rounded-3" rows="3">{{ $cat->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold small">Class Icon (FontAwesome)</label>
                                                        <input type="text" name="icon_class" value="{{ $cat->icon_class }}" class="form-control rounded-3">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold small">Nhãn ETA Giao Hàng</label>
                                                        <input type="text" name="eta_label" value="{{ $cat->eta_label }}" class="form-control rounded-3">
                                                    </div>
                                                    <div class="mb-3 form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="is_active" id="activeSwitch{{ $cat->id }}" value="1" {{ $cat->is_active ? 'checked' : '' }}>
                                                        <label class="form-check-label fw-semibold small" for="activeSwitch{{ $cat->id }}">Kích hoạt hoạt động</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary rounded-3 btn-sm" data-bs-dismiss="modal">Hủy</button>
                                                    <button type="submit" class="btn btn-primary rounded-3 btn-sm">Lưu Thay Đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Category -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent py-3">
                <h5 class="fw-bold mb-0">Thêm Danh Mục Mới</h5>
            </div>
            <div class="card-body">
                <form action="/admin/categories" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Tên Danh Mục</label>
                        <input type="text" name="name" required class="form-control rounded-3" placeholder="Ví dụ: Phụ Kiện Điện Thoại">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Mô Tả</label>
                        <textarea name="description" class="form-control rounded-3" rows="3" placeholder="Mô tả ngắn gọn về nhóm ngành hàng này..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Class Icon (FontAwesome)</label>
                        <input type="text" name="icon_class" class="form-control rounded-3" placeholder="fa-solid fa-headphones">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Nhãn ETA Giao Hàng</label>
                        <input type="text" name="eta_label" class="form-control rounded-3" placeholder="⚡ Giao nhanh 1.5h">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-3 mt-2">Tạo Danh Mục</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
