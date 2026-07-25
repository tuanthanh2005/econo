@extends('admin.layouts.app')

@section('title', 'Bảng Điều Khiển')

@section('content')
<div class="row g-4 mb-4">
    <!-- Categories Card -->
    <div class="col-md-3">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <span class="text-muted fw-semibold small d-block mb-1">DANH MỤC</span>
                    <span class="fs-3 fw-bold">{{ $categoriesCount }}</span>
                </div>
                <div class="bg-primary-subtle text-primary p-3 rounded-3">
                    <i class="fa-solid fa-list fs-4"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Card -->
    <div class="col-md-3">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <span class="text-muted fw-semibold small d-block mb-1">SẢN PHẨM</span>
                    <span class="fs-3 fw-bold">{{ $productsCount }}</span>
                </div>
                <div class="bg-success-subtle text-success p-3 rounded-3">
                    <i class="fa-solid fa-box-open fs-4"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Card -->
    <div class="col-md-3">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <span class="text-muted fw-semibold small d-block mb-1">ĐƠN HÀNG</span>
                    <span class="fs-3 fw-bold">{{ $ordersCount }}</span>
                </div>
                <div class="bg-info-subtle text-info p-3 rounded-3">
                    <i class="fa-solid fa-receipt fs-4"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Card -->
    <div class="col-md-3">
        <div class="card p-4 border-0 shadow-sm" style="border-radius: 16px;">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <span class="text-muted fw-semibold small d-block mb-1">DOANH THU</span>
                    <span class="fs-3 fw-bold text-success">{{ number_format($totalRevenue, 0, ',', '.') }}đ</span>
                </div>
                <div class="bg-warning-subtle text-warning p-3 rounded-3">
                    <i class="fa-solid fa-money-bill-wave fs-4"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-transparent py-3">
        <h5 class="fw-bold mb-0"><i class="fa-solid fa-clock-rotate-left me-2 text-primary"></i> Đơn Hàng Gần Đây</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="px-4 py-3">Mã đơn</th>
                        <th class="py-3">Khách hàng</th>
                        <th class="py-3">Số điện thoại</th>
                        <th class="py-3">Địa chỉ</th>
                        <th class="py-3">Tổng tiền</th>
                        <th class="py-3">Trạng thái</th>
                        <th class="py-3">Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recentOrders as $order)
                        <tr>
                            <td class="px-4 fw-bold">#{{ $order->id }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_phone }}</td>
                            <td>{{ Str::limit($order->customer_address, 30) }}</td>
                            <td class="fw-bold text-danger">{{ number_format($order->total_price, 0, ',', '.') }}đ</td>
                            <td>
                                @if($order->status === 'pending')
                                    <span class="badge bg-warning text-dark">Chờ xử lý</span>
                                @elseif($order->status === 'processing')
                                    <span class="badge bg-info">Đang xử lý</span>
                                @elseif($order->status === 'shipped')
                                    <span class="badge bg-primary">Đang giao</span>
                                @elseif($order->status === 'completed')
                                    <span class="badge bg-success">Hoàn thành</span>
                                @else
                                    <span class="badge bg-danger">Đã hủy</span>
                                @endif
                            </td>
                            <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Chưa có đơn hàng nào được đặt.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
