@extends('admin.layouts.app')

@section('title', 'Chi Tiết Đơn Hàng #' . $order->id)

@section('content')
<div class="row g-4">
    <!-- Left Column: Customer details & Items -->
    <div class="col-md-8">
        <!-- Customer card -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-transparent py-3">
                <h5 class="fw-bold mb-0">Thông Tin Giao Nhận</h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <span class="text-muted small d-block mb-1">TÊN KHÁCH HÀNG</span>
                        <span class="fw-bold text-dark">{{ $order->customer_name }}</span>
                    </div>
                    <div class="col-sm-6">
                        <span class="text-muted small d-block mb-1">SỐ ĐIỆN THOẠI</span>
                        <span class="fw-bold text-dark">{{ $order->customer_phone }}</span>
                    </div>
                    <div class="col-12">
                        <span class="text-muted small d-block mb-1">ĐỊA CHỈ GIAO HÀNG</span>
                        <span class="fw-bold text-dark">{{ $order->customer_address }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Items card -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent py-3">
                <h5 class="fw-bold mb-0">Sản Phẩm Đã Đặt</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4">Ảnh/Icon</th>
                                <th>Tên sản phẩm</th>
                                <th>Thương hiệu</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th class="text-end px-4">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->items as $item)
                                <tr>
                                    <td class="px-4">
                                        @if ($item->product->image_path)
                                            <img src="{{ $item->product->image_path }}" alt="{{ $item->product->name }}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px;">
                                        @else
                                            <div class="bg-light text-muted d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 8px; font-size: 16px;">
                                                <i class="{{ $item->product->font_awesome_icon ?? 'fa-solid fa-box' }}"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="fw-semibold">{{ $item->product->name }}</td>
                                    <td>{{ $item->product->brand }}</td>
                                    <td>{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                    <td>x{{ $item->quantity }}</td>
                                    <td class="text-end px-4 fw-bold text-danger">{{ number_format($item->price * $item->quantity, 0, ',', '.') }}đ</td>
                                </tr>
                            @endforeach
                            <!-- Total Row -->
                            <tr class="table-light">
                                <td colspan="5" class="text-end fw-bold py-3">Tổng giá trị đơn hàng:</td>
                                <td class="text-end px-4 fw-bold text-danger fs-5 py-3">{{ number_format($order->total_price, 0, ',', '.') }}đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Status control -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent py-3">
                <h5 class="fw-bold mb-0">Cập Nhật Trạng Thái</h5>
            </div>
            <div class="card-body p-4">
                <form action="/admin/orders/{{ $order->id }}/status" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Trạng Thái Đơn Hàng</label>
                        <select name="status" class="form-select rounded-3">
                            <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                            <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Đang xử lý</option>
                            <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Đang giao hàng</option>
                            <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Đã hoàn thành</option>
                            <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Đã hủy đơn</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-3 fw-bold py-2 mt-2">Xác Nhận Thay Đổi</button>
                </form>
                
                <div class="mt-4 pt-3 border-top text-muted small">
                    <span class="d-block fw-bold mb-1">Lịch sử đặt hàng:</span>
                    <i class="fa-regular fa-clock me-1"></i> Khởi tạo đơn: {{ $order->created_at->format('H:i:s d/m/Y') }}
                </div>
            </div>
        </div>

        <a href="/admin/orders" class="btn btn-light w-100 rounded-3 fw-semibold border shadow-sm py-2 mt-3"><i class="fa-solid fa-arrow-left me-2"></i> Quay lại danh sách</a>
    </div>
</div>
@endsection
