@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Danh Sách Đơn Hàng</h1>
<style>
    .badge-pending {
    background-color: #f6b94b;
    color: black;
}

.badge-confirmed {
    background-color: #7fffff;
    color:  black;
}

.badge-preparing_goods {
    background-color: #b9f30c;
    color: black;
}

.badge-shipping {
    background-color: #017fff;
    color: white;
}

.badge-delivered {
    background-color: green;
    color: white;
}

.badge-canceled {
    background-color: #fe0100;
    color: white;
}

</style>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Số Đơn Hàng</th>
                <th>Tên Khách Hàng</th>
                <th>Tổng Giá</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_name }}</td>
                    <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                    <td>
                        <span class="badge badge-{{ $order->status_order }}">
                            {{ \App\Models\Order::STATUS_ORDER[$order->status_order] }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">Chi Tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
