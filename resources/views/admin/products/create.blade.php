@extends('admin.layouts.app')

@section('title', 'Thêm Sản Phẩm')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-transparent py-3">
        <h5 class="fw-bold mb-0">Thêm Sản Phẩm Mới</h5>
    </div>
    <div class="card-body p-4">
        @if ($errors->any())
            <div class="alert alert-danger" style="border-radius: 12px;">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/admin/products" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Danh Mục</label>
                        <select name="category_id" required class="form-select rounded-3">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Nhóm con (Sub-category)</label>
                        <input type="text" name="sub_category" class="form-control rounded-3" placeholder="Ví dụ: Bó hoa tươi, Ốp điện thoại, Trà sữa...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Tên Sản Phẩm</label>
                        <input type="text" name="name" required class="form-control rounded-3" placeholder="Nhập tên sản phẩm...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Thương hiệu / Nhà cung cấp</label>
                        <input type="text" name="brand" class="form-control rounded-3" placeholder="Ví dụ: Gong Cha, Dalat Farm...">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Giá Bán Lẻ (đ)</label>
                            <input type="number" name="price" required class="form-control rounded-3" placeholder="35000">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Giá Gốc (đ) (cho Flash Sale)</label>
                            <input type="number" name="old_price" class="form-control rounded-3" placeholder="50000">
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Tỉ lệ giảm giá (%)</label>
                            <input type="number" name="discount" class="form-control rounded-3" placeholder="10">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Số Lượng Trong Kho</label>
                            <input type="number" name="stock" value="20" required class="form-control rounded-3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Thời gian giao dự kiến (ETA)</label>
                        <input type="text" name="eta" class="form-control rounded-3" placeholder="Ví dụ: Giao trong 45 phút, Giao trong 1 giờ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Tải Ảnh Sản Phẩm (Lưu trực tiếp vào public)</label>
                        <input type="file" name="image" class="form-control rounded-3">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Icon thay thế (FontAwesome class)</label>
                        <input type="text" name="font_awesome_icon" class="form-control rounded-3" placeholder="fa-solid fa-gift">
                    </div>

                    <div class="mb-3 mt-4">
                        <div class="form-check form-switch d-inline-block me-4">
                            <input class="form-check-input" type="checkbox" name="is_flashsale" id="isFlashsaleSwitch" value="1">
                            <label class="form-check-label fw-semibold small" for="isFlashsaleSwitch">Sản phẩm Flash Sale</label>
                        </div>

                        <div class="form-check form-switch d-inline-block">
                            <input class="form-check-input" type="checkbox" name="is_featured" id="isFeaturedSwitch" value="1">
                            <label class="form-check-label fw-semibold small" for="isFeaturedSwitch">Sản phẩm Nổi Bật</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="/admin/products" class="btn btn-secondary rounded-3">Quay Lại</a>
                <button type="submit" class="btn btn-primary rounded-3 px-4">Lưu Sản Phẩm</button>
            </div>
        </form>
    </div>
</div>
@endsection
