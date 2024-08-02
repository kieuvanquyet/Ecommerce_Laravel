@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="mb-0">Chi Tiết Đơn Hàng #{{ $order->id }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Tên Khách Hàng:</strong> {{ $order->user_name }}</p>
            <p><strong>Email:</strong> {{ $order->user_email }}</p>
            <p><strong>Điện Thoại:</strong> {{ $order->user_phone }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $order->user_address }}</p>

            <h2 class="mt-4">Chi Tiết Đơn Hàng:</h2>
            <ul class="list-group">
                @foreach($order->orderItems as $item)
                    <li class="list-group-item">
                        {{ $item->product_name }} - {{ number_format($item->product_price_sale, 0, ',', '.') }} đ x {{ $item->quatity }}
                    </li>
                @endforeach
            </ul>

            <p class="mt-3"><strong>Tổng Giá:</strong> <b style="font-size: 25px; color:rgb(163, 44, 82)">{{ number_format($order->total_price, 0, ',', '.') }}</b>đ</p>

            <h3 class="mt-4">Cập Nhật Trạng Thái</h3>
            <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="status_order">Trạng Thái:</label>
                    <select name="status_order" id="status_order" class="form-control">
                        @foreach(\App\Models\Order::validTransitions()[$order->status_order] as $status)
                            <option value="{{ $status }}" {{ $order->status_order == $status ? 'selected' : '' }}>
                                {{ \App\Models\Order::STATUS_ORDER[$status] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>
                <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection
