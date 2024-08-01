<!-- resources/views/admin/orders/index.blade.php -->

@extends('admin.layouts.master')
@php
use App\Models\Order;
@endphp
@section('content')
    <h1>Danh sách đơn hàng</h1>

   
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Người dùng</th>
                <th>Trạng thái đơn hàng</th>
                <th>Trạng thái thanh toán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_name }}</td>
                    <td class="text-warning">{{ Order::STATUS_ORDER[$order->status_order] }}</td>
                    <td class="text-warning">{{ Order::STATUS_PAYMENT[$order->status_payment] }}</td>
                    <td>
                        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="status_order_{{ $order->id }}">Trạng thái đơn hàng:</label>
                                <select name="status_order" id="status_order_{{ $order->id }}" class="form-control" required>
                                    @foreach(Order::STATUS_ORDER as $key => $value)
                                        <option value="{{ $key }}" {{ $order->status_order == $key ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status_payment_{{ $order->id }}">Trạng thái thanh toán:</label>
                                <select name="status_payment" id="status_payment_{{ $order->id }}" class="form-control" required>
                                    @foreach(Order::STATUS_PAYMENT as $key => $value)
                                        <option value="{{ $key }}" {{ $order->status_payment == $key ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
