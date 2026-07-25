@extends('admin.layouts.app')

@section('title', 'Quản Lý Đơn Hàng')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-transparent py-3">
        <h5 class="fw-bold mb-0">Danh Sách Đơn Hàng</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="px-4">Mã đơn</th>
                        <th>Khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Thời gian đặt</th>
                        <th class="text-end px-4">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td class="px-4 fw-bold">#{{ $order->id }}</td>
                            <td class="fw-semibold">{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_phone }}</td>
                            <td>{{ Str::limit($order->customer_address, 40) }}</td>
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
                            <td class="text-end px-4">
                                <a href="/admin/orders/{{ $order->id }}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-eye me-1"></i> Chi tiết</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-muted">Chưa có đơn hàng nào được đặt.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
