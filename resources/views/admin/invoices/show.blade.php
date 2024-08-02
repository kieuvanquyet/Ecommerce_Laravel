@extends('admin.layouts.master')

@section('content')
    <h1>Chi tiết hóa đơn</h1>
    <p>ID đơn hàng: {{ $order->id }}</p>
    <p>Tổng giá: {{ number_format($order->total_price, 2) }} VNĐ</p>
    <h3>Thông tin người đặt hàng</h3>
    <p>Tên: {{ $order->user_name }}</p>
    <p>Email: {{ $order->user_email }}</p>
    <p>Điện thoại: {{ $order->user_phone }}</p>
    <p>Địa chỉ: {{ $order->user_address }}</p>
    <h3>Thông tin người nhận hàng</h3>
    <p>Tên: {{ $order->ship_user_name }}</p>
    <p>Email: {{ $order->ship_user_email }}</p>
    <p>Điện thoại: {{ $order->ship_user_phone }}</p>
    <p>Địa chỉ: {{ $order->ship_user_address }}</p>

    <h3>Chi tiết sản phẩm</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>SKU</th>
                <th>Giá gốc</th>
                <th>Giá giảm</th>
                <th>Số lượng</th>
                <th>Size</th>
                <th>Màu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_sku }}</td>
                    <td>{{ number_format($item->product_price_regular, 2) }} VNĐ</td>
                    <td>{{ $item->product_price_sale ? number_format($item->product_price_sale, 2) : 'Không có' }} VNĐ</td>
                    <td>{{ $item->quatity }}</td>
                    <td>{{ $item->variant_size_name }}</td>
                    <td>
                        <div style="background-color: {{ $item->variant_color_name }}; width: 20px; height: 20px;">
                        </div>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.invoices.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('admin.invoices.print', $order->id) }}" class="btn btn-primary">In hóa đơn</a>

@endsection
