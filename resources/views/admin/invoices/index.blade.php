@extends('admin.layouts.master')

@section('content')
    <h1>Danh sách hóa đơn</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Tổng giá</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_name }}</td>
                    <td>{{ $order->user_email }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.invoices.show', $order->id) }}" class="btn btn-info">Xem</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
