<!-- resources/views/user/profile.blade.php -->

@extends('client.layouts.master')

@section('content')
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
<main> @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@elseif(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                        uk-sticky="offset: 90; bottom: true; media: @m;">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                <section>
                                    <div
                                        class="uk-width-1-3 uk-width-1-4@s uk-width-1-2@m uk-margin-auto uk-visible-toggle uk-position-relative uk-border-circle uk-overflow-hidden uk-light">
                                        <img class="uk-width-1-1" src="{{asset('theme/dest/images/avatar.jpg')}}"><a
                                            class="uk-link-reset uk-overlay-primary uk-position-cover uk-hidden-hover"
                                            href="#">
                                            <div class="uk-position-center"><span
                                                    uk-icon="icon: camera; ratio: 1.25;"></span></div>
                                        </a></div>
                                </section>
                                <div class="uk-text-center">
                                    <div class="uk-h4 uk-margin-remove">{{ $user->name }}</div>
                                    <div class="uk-text-meta">{{$user->created_at}}</div>
                                </div>
                                <div>
                                    <div class="uk-grid-small uk-flex-center" uk-grid>
                                        <div><a class="uk-button uk-button-default uk-button-small"
                                                href="#"><span class="uk-margin-xsmall-right"
                                                    uk-icon="icon: cog; ratio: .75;"></span><span>Settings</span></a>
                                        </div>
                                        <div><button class="uk-button uk-button-default uk-button-small"
                                                href="#" title="Log out"><span
                                                    uk-icon="icon: sign-out; ratio: .75;"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <nav>
                                <ul class="uk-nav uk-nav-default tm-nav">
                                    <li class="uk-active"><a href="account.html">Orders
                                            <span>(2)</span></a></li>
                                    <li><a href="{{asset('theme/dest/favorites.html')}}">Favorites
                                            <span>(3)</span></a></li>
                                    <li><a href="personal.html">Personal Info</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-expand@m">
                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                        <header class="uk-card-header">
                            <h1 class="uk-h2">Orders</h1>
                        </header>
                        <section class="uk-card-body">
                            <h3 class="mt-4">Đơn hàng của bạn</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Số Đơn Hàng</th>
                        <th>Tổng Giá</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Tạo</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                            <td>
                                <span class="badge badge-{{ $order->status_order }}">
                                    {{ \App\Models\Order::STATUS_ORDER[$order->status_order] }}
                                </span>
                                {{-- {{ \App\Models\Order::STATUS_ORDER[$order->status_order] }} --}}
                            </td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('user.order-detail', $order->id) }}" class="btn btn-info btn-sm">Xem Chi Tiết</a>
                                @if($order->status_order !== 'canceled' && $order->status_order !== 'delivered')
                                    <form action="{{ route('user.cancel-order', $order->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hủy Đơn</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div uk-slider>
                <ul
                    class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: star; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Mauris placerat</div>
                                <div class="uk-text-meta">Donec mollis nibh dolor, sit amet auctor</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: receiver; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Lorem ipsum</div>
                                <div class="uk-text-meta">Sit amet, consectetur adipiscing elit</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: location; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Proin pharetra</div>
                                <div class="uk-text-meta">Nec quam a fermentum ut viverra</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: comments; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Praesent ultrices</div>
                                <div class="uk-text-meta">Praesent ultrices, orci nec finibus</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: happy; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Duis condimentum</div>
                                <div class="uk-text-meta">Pellentesque eget varius arcu</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
        </div>
    </section>

</main>
{{-- <div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <h1 class="mb-0">Thông Tin Tài Khoản</h1>
        </div>
        <div class="card-body">
            <h3>Thông Tin Cá Nhân</h3>
            <p><strong>Tên:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Điện Thoại:</strong> {{ $user->phone ?? 'Chưa cập nhật' }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $user->address ?? 'Chưa cập nhật' }}</p>

            <h3 class="mt-4">Danh Sách Đơn Hàng</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Số Đơn Hàng</th>
                        <th>Tổng Giá</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Tạo</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                            <td>{{ \App\Models\Order::STATUS_ORDER[$order->status_order] }}</td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('user.order-detail', $order->id) }}" class="btn btn-info btn-sm">Xem Chi Tiết</a>
                                @if($order->status_order !== 'canceled' && $order->status_order !== 'delivered')
                                    <form action="{{ route('user.cancel-order', $order->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hủy Đơn</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
@endsection
