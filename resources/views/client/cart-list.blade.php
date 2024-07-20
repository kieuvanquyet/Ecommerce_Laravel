@extends('client.layouts.master')

@section('title')
    Giỏ hàng
@endsection
@section('content')
{{-- 
 <div class="container">
    <h1 class="mt-5 mb-3 text-center">Giỏ hàng</h1>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Giá thường</th>
                    <th>Giá sale</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                </tr>

                @if(session()->has('cart'))
                    @foreach(session('cart') as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['price_regular'] }}</td>
                            <td>{{ $item['price_sale'] }}</td>
                            <td>{{ $item['color']['name'] }}</td>
                            <td>{{ $item['size']['name'] }}</td>
                            <td>
                                {{-- Nút giảm--}}
                                {{-- {{ $item['quantity'] }} --}}
                                {{-- Nút tăng --}}
                            {{-- </td>
                        </tr>
                    @endforeach
                @endif

            </table>
        </div> --}}
        {{-- <div class="col-md-4">
            <h2>Tổng tiền: {{ number_format($totalAmount) }}</h2>
            <form action="{{ route('order.save') }}" method="post">
                @csrf
                <div class="mt-3 mb-2">
                    <label
                        for="user_name"> {{ \Str::convertCase('user_name', MB_CASE_TITLE) }}</label>
                    <input type="text" name="user_name" id="user_name" value="{{ auth()->user()?->name }}">
                </div>
                <div class="mt-3 mb-2">
                    <label
                        for="user_email"> {{ \Str::convertCase('user_email', MB_CASE_TITLE) }}</label>
                    <input type="text" name="user_email" id="user_email" value="{{ auth()->user()?->emai }}">
                </div>
                <div class="mt-3 mb-2">
                    <label
                        for="user_phone"> {{ \Str::convertCase('user_phone', MB_CASE_TITLE) }}</label>
                    <input type="text" name="user_phone" id="user_phone">
                </div>
                <div class="mt-3 mb-2">
                    <label
                        for="user_address"> {{ \Str::convertCase('user_address', MB_CASE_TITLE) }}</label>
                    <input type="text" name="user_address" id="user_address">
                </div>
                <button class="btn btn-primary" type="submit">Đặt hàng</button>
            </form>
        </div>
    </div>
</div>  --}}


<main>
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                <div class="uk-text-center">
                    <ul
                        class="uk-breadcrumb uk-flex-center uk-margin-remove"
                    >
                        <li><a href="index.html">Home</a></li>
                        <li><span>Cart</span></li>
                    </ul>
                    <h1
                        class="uk-margin-small-top uk-margin-remove-bottom"
                    >
                        Cart
                    </h1>
                </div>
                <div>
                   
                    <div class="uk-grid-medium" uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div
                                class="uk-card uk-card-default uk-card-small tm-ignore-container"
                            >
                                <header
                                    class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m"
                                >
                                    <div
                                        class="uk-grid-small uk-child-width-1-2"
                                        uk-grid
                                    >
                                        <div>product</div>
                                        <div>
                                            <div
                                                class="uk-grid-small uk-child-width-expand"
                                                uk-grid
                                            >
                                                <div>price</div>
                                                <div
                                                    class="tm-quantity-column"
                                                >
                                                    quantity
                                                </div>
                                                <div>size</div>
                                                <div>color</div>
                                                <div
                                                    class="uk-width-auto"
                                                >
                                                    <div
                                                        style="
                                                            width: 20px;
                                                        "
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                @if(session()->has('cart'))
                                @foreach(session('cart') as $item)
                                <div class="uk-card-body">
                                    <div
                                        class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                        uk-grid
                                    >
                                        <!-- Product cell-->
                                        <div>
                                            <div
                                                class="uk-grid-small"
                                                uk-grid
                                            >
                                                <div
                                                    class="uk-width-1-3"
                                                >
                                                    <div
                                                        class="tm-ratio tm-ratio-4-3"
                                                    >
                                                        <a
                                                            class="tm-media-box"
                                                            href="product.html"
                                                            ><figure
                                                                class="tm-media-box-wrap"
                                                            >
                                                                <img
                                                                    src="images/products/1/1-small.jpg"
                                                                    alt='Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Silver)'
                                                                /></figure
                                                        ></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="uk-width-expand"
                                                >
                                                    <div
                                                        class="uk-text-meta"
                                                    >
                                                        Laptop
                                                    </div>
                                                    <a
                                                        class="uk-link-heading"
                                                        href="product.html"
                                                        >{{ $item['name'] }}</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Other cells-->
                                        <div>
                                            <div
                                                class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                uk-grid
                                            >
                                                <div>
                                                    <div
                                                        class="uk-text-muted uk-hidden@m"
                                                    >
                                                        Price
                                                    </div>
                                                    <div>
                                                        {{ $item['price_sale'] }}
                                                    </div>
                                                </div>
                                                <div
                                                    class="tm-cart-quantity-column"
                                                >
                                               
                                                    <a
                                                        onclick="increment(-1, 'product-1')"
                                                        uk-icon="icon: minus; ratio: .75"
                                                    ></a
                                                    ><input
                                                        class="uk-input tm-quantity-input"
                                                        id="product-1"
                                                        type="text"
                                                        maxlength="3"
                                                        value=" {{ $item['quantity'] }}"
                                                    /><a
                                                        onclick="increment(+1, 'product-1')"
                                                        uk-icon="icon: plus; ratio: .75"
                                                    ></a>
                                                </div>
                                                <div>
                                                    <div
                                                        class="uk-text-muted uk-hidden@m"
                                                    >
                                                        Size
                                                    </div>
                                                    <div>
                                                        {{ $item['size']['name'] }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="">
                                                        
                                                    </div>
                                                    <div style="width: 20px; height: 20px; background: {{ $item['color']['name'] }};">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="uk-width-auto@s"
                                                >
                                                    <a
                                                        class="uk-text-danger"
                                                        uk-tooltip="Remove"
                                                        ><span
                                                            uk-icon="close"
                                                        ></span
                                                    ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                {{-- <div class="uk-card-body">
                                    <div
                                        class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                        uk-grid
                                    >
                                        <!-- Product cell-->
                                        <div>
                                            <div
                                                class="uk-grid-small"
                                                uk-grid
                                            >
                                                <div
                                                    class="uk-width-1-3"
                                                >
                                                    <div
                                                        class="tm-ratio tm-ratio-4-3"
                                                    >
                                                        <a
                                                            class="tm-media-box"
                                                            href="product.html"
                                                            ><figure
                                                                class="tm-media-box-wrap"
                                                            >
                                                                <img
                                                                    src="images/products/2/2-small.jpg"
                                                                    alt='Apple MacBook 12" MNYN2LL/A 512GB (Rose Gold)'
                                                                /></figure
                                                        ></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="uk-width-expand"
                                                >
                                                    <div
                                                        class="uk-text-meta"
                                                    >
                                                        Laptop
                                                    </div>
                                                    <a
                                                        class="uk-link-heading"
                                                        href="product.html"
                                                        >Apple
                                                        MacBook
                                                        12&quot;
                                                        MNYN2LL/A
                                                        512GB (Rose
                                                        Gold)</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Other cells-->
                                        <div>
                                            <div
                                                class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                uk-grid
                                            >
                                                <div>
                                                    <div
                                                        class="uk-text-muted uk-hidden@m"
                                                    >
                                                        Price
                                                    </div>
                                                    <div>
                                                        $1549.00
                                                    </div>
                                                </div>
                                                <div
                                                    class="tm-cart-quantity-column"
                                                >
                                                    <a
                                                        onclick="increment(-1, 'product-2')"
                                                        uk-icon="icon: minus; ratio: .75"
                                                    ></a
                                                    ><input
                                                        class="uk-input tm-quantity-input"
                                                        id="product-2"
                                                        type="text"
                                                        maxlength="3"
                                                        value="1"
                                                    /><a
                                                        onclick="increment(+1, 'product-2')"
                                                        uk-icon="icon: plus; ratio: .75"
                                                    ></a>
                                                </div>
                                                <div>
                                                    <div
                                                        class="uk-text-muted uk-hidden@m"
                                                    >
                                                        Sum
                                                    </div>
                                                    <div>
                                                        $1549.00
                                                    </div>
                                                </div>
                                                <div
                                                    class="uk-width-auto@s"
                                                >
                                                    <a
                                                        class="uk-text-danger"
                                                        uk-tooltip="Remove"
                                                        ><span
                                                            uk-icon="close"
                                                        ></span
                                                    ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-footer">
                                    <label
                                        ><span
                                            class="uk-form-label uk-margin-small-right"
                                            >Promo Code</span
                                        >
                                        <div class="uk-inline">
                                            <a
                                                class="uk-form-icon uk-form-icon-flip"
                                                href="#"
                                                uk-icon="arrow-right"
                                            ></a
                                            ><input
                                                class="uk-input uk-form-width-small"
                                                type="text"
                                            /></div
                                    ></label>
                                </div> --}}
                            </div>
                        </div>
                        <div
                            class="uk-width-1-1 tm-aside-column uk-width-1-4@m"
                        >
                        <form action="{{ route('order.save') }}" method="post">
                            @csrf
                            <div
                                class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                uk-sticky="offset: 30; bottom: true; media: @m;"
                            >



                                <div class="uk-card-body">
                                    
                                    
                                        <div class="mt-3 mb-2">
                                            <label
                                                for="user_name"> {{ Str::convertCase('user_name', MB_CASE_TITLE) }}</label>
                                            <input type="text" name="user_name" id="user_name" value="{{ auth()->user()?->name }}">
                                        </div>
                                        <div class="mt-3 mb-2">
                                            <label
                                                for="user_email"> {{ Str::convertCase('user_email', MB_CASE_TITLE) }}</label>
                                            <input type="text" name="user_email" id="user_email" value="{{ auth()->user()?->emai }}">
                                        </div>
                                        <div class="mt-3 mb-2">
                                            <label
                                                for="user_phone"> {{ Str::convertCase('user_phone', MB_CASE_TITLE) }}</label>
                                            <input type="text" name="user_phone" id="user_phone">
                                        </div>
                                        <div class="mt-3 mb-2">
                                            <label
                                                for="user_address"> {{ Str::convertCase('user_address', MB_CASE_TITLE) }}</label>
                                            <input type="text" name="user_address" id="user_address">
                                        </div>
                                        
                                    
                                </div>
                                <div class="uk-card-body">
                                    <div
                                        class="uk-grid-small uk-flex-middle"
                                        uk-grid
                                    >
                                        <div
                                            class="uk-width-expand uk-text-muted"
                                        >
                                        Tổng tiền:
                                        </div>
                                        <div
                                            class="uk-text-lead uk-text-bolder"
                                        >
                                             {{ number_format($totalAmount) }}
                                        </div>
                                    </div>
                                    <button class="uk-button uk-button-primary uk-margin-small uk-width-1-1 " type="submit">Đặt hàng</button>
                                   
                                    >
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div uk-slider>
                <ul
                    class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid"
                >
                    <li>
                        <div
                            class="uk-grid-small uk-flex-center uk-flex-left@s"
                            uk-grid
                        >
                            <div>
                                <span
                                    uk-icon="icon: star; ratio: 2.5;"
                                ></span>
                            </div>
                            <div
                                class="uk-text-center uk-text-left@s uk-width-expand@s"
                            >
                                <div>Mauris placerat</div>
                                <div class="uk-text-meta">
                                    Donec mollis nibh dolor, sit
                                    amet auctor
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="uk-grid-small uk-flex-center uk-flex-left@s"
                            uk-grid
                        >
                            <div>
                                <span
                                    uk-icon="icon: receiver; ratio: 2.5;"
                                ></span>
                            </div>
                            <div
                                class="uk-text-center uk-text-left@s uk-width-expand@s"
                            >
                                <div>Lorem ipsum</div>
                                <div class="uk-text-meta">
                                    Sit amet, consectetur adipiscing
                                    elit
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="uk-grid-small uk-flex-center uk-flex-left@s"
                            uk-grid
                        >
                            <div>
                                <span
                                    uk-icon="icon: location; ratio: 2.5;"
                                ></span>
                            </div>
                            <div
                                class="uk-text-center uk-text-left@s uk-width-expand@s"
                            >
                                <div>Proin pharetra</div>
                                <div class="uk-text-meta">
                                    Nec quam a fermentum ut viverra
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="uk-grid-small uk-flex-center uk-flex-left@s"
                            uk-grid
                        >
                            <div>
                                <span
                                    uk-icon="icon: comments; ratio: 2.5;"
                                ></span>
                            </div>
                            <div
                                class="uk-text-center uk-text-left@s uk-width-expand@s"
                            >
                                <div>Praesent ultrices</div>
                                <div class="uk-text-meta">
                                    Praesent ultrices, orci nec
                                    finibus
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="uk-grid-small uk-flex-center uk-flex-left@s"
                            uk-grid
                        >
                            <div>
                                <span
                                    uk-icon="icon: happy; ratio: 2.5;"
                                ></span>
                            </div>
                            <div
                                class="uk-text-center uk-text-left@s uk-width-expand@s"
                            >
                                <div>Duis condimentum</div>
                                <div class="uk-text-meta">
                                    Pellentesque eget varius arcu
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul
                    class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"
                ></ul>
            </div>
        </div>
    </section>
</main>
@endsection
       