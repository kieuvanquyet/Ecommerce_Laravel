
@extends('client.layouts.master')

@section('content')
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
                                <div class="uk-h4 uk-margin-remove"></div>
                                <div class="uk-text-meta"></div>
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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Chi Tiết Đơn Hàng #{{ $order->id }}</h5>
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
                    
                                <p class="mt-3"><strong>Tổng Giá:</strong> {{ number_format($order->total_price, 0, ',', '.') }} đ</p>
                                <a href="{{ route('user.profile') }}" class="btn btn-secondary mb-3">Quay lại</a>
                                @if($order->status_order !== 'canceled' && $order->status_order !== 'delivered')
                                   
                                    <form action="{{ route('user.cancel-order', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hủy Đơn Hàng</button>
                                    </form>
                                @endif
                            </div>
                        </div>
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


<div class="container mt-5">
    
</div>
@endsection
