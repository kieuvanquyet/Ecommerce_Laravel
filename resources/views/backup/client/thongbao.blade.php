@extends('client.layouts.master')

@section('content')
    <style>
        .container {
            text-align: center;
            padding: 50px;
        }
        .success-message {
            font-size: 1.5em;
            color: #4CAF50; 
        }
        .btn-home {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 1em;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <div class="success-message">
            <h1>Thanh Toán Thành Công!</h1>
            <p>Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đã được xử lý thành công.</p>
        </div>
        <a href="{{ url('/') }}" class="btn-home">Về Trang Chủ</a>
    </div>

    
@endsection
