<!DOCTYPE html>
<html>
<head>
    <title>Hóa Đơn Đặt Hàng</title>
</head>
<body>
    <h1>Hóa Đơn Đặt Hàng</h1>
    <p>Số Đơn Hàng: {{ $order->id }}</p>
    <p>Tên Khách Hàng: {{ $order->user_name }}</p>
    <p>Email: {{ $order->user_email }}</p>
    <p>Điện Thoại: {{ $order->user_phone }}</p>
    <p>Địa Chỉ: {{ $order->user_address }}</p>
    <h2>Chi Tiết Đơn Hàng:</h2>
    <ul>
        @foreach($order->orderItems as $item)
            <li>{{ $item->product_name }} - {{ $item->product_price_sale }} x {{ $item->quatity }}đ</li>
        @endforeach
    </ul>
    <p>Tổng Giá: {{ $order->total_price }}đ</p>
</body>
</html>
