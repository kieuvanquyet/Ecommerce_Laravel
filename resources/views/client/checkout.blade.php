@extends('client.layouts.master')

@section('title')
    Giỏ hàng
@endsection

@section('content')
         
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <section class="uk-text-center"><a class="uk-link-muted uk-text-small" href="cart.html"><span
                                    class="uk-margin-xsmall-right" uk-icon="icon: arrow-left; ratio: .75;"></span>Return
                                to cart</a>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Checkout</h1>
                        </section>
                       
                        <section>
                            <div class="uk-grid-medium" uk-grid>
                                <div class="uk-form-stacked uk-width-1-1 tm-checkout uk-width-expand@m">
                                <form action="{{ route('order.store') }}" method="POST" >
                               
                                <div class="uk-form-stacked uk-width-1-1 tm-checkout uk-width-expand@m">
                                    
                                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                        <section>
                                            <h2 class="tm-checkout-title">Contact Information</h2>
                                            <div
                                                class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                                               
                                                    @csrf
                                                    <input type="hidden" name="selected_items" value="{{ implode(',', $selectedItems) }}">
                                                    <input type="hidden" name="final_price" value="{{ $finalPrice }}">
                                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s"
                                                    uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Name
                                                            </div>
                                                            <input type="text" name="name" id="name" class="uk-input" value="{{ $user->name }}" placeholder="Enter your name">
                                                            </label></div>
                                                    <div>
                                                        <label>
                                                            <div class="uk-form-label uk-form-label-required">Email
                                                            </div>
                                                            <input type="email" name="email" id="email" class="uk-input" value="{{ $user->email }}" placeholder="Enter your email">

                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Phone
                                                                Number</div>
                                                                <input type="text" name="phone" id="phone" class="uk-input" value="{{ $user->phone }}" placeholder="Enter your address">

                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Address
                                                            </div><input type="text" name="address" id="address" class="uk-input" value="{{ $user->address }}" placeholder="Enter your address">
                                                        </label></div>
                                                </div>
                                                <div>
                                                    <label for="payment_method">Select Payment Method</label>
                                                    <select name="payment_method" id="payment_method" class="uk-select">
                                                        @foreach(App\Models\Order::PAYMENT_METHODS as $key => $method)
                                                            <option value="{{ $key }}">{{ $method }}</option>
                                                        @endforeach
                                                    </select>
                                                        {{-- <input type="text" class="uk-input" value="" readonly> --}}
                                                </div>
                                               
                                            </div>
                                        </section>
                                      
                                    </div> 
                                    </div>
                                </div>
                                
                                <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                        uk-sticky="offset: 30; bottom: true; media: @m;">
                                        <section class="uk-card-body">
                                            <h4>Items in order</h4>
                                            @foreach($cartItems as $item)
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-small">
                                                       
                                                            <li>{{ $item->productVariant->product->name }}  đ</li>
                                                      
                                                    </div>
                                                    <div class="uk-text-meta">{{ $item->quatity }} × {{ number_format($item->productVariant->product->price_sale ?: $item->productVariant->product->price_regular, 0, ',', '.') }}đ</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>$1599.00</div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Shipping</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>{{ $user->address }}</div>
                                                    <div class="uk-text-meta">Free, tomorrow</div>
                                                </div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Payment</div>
                                                </div>  
                                                <div class="uk-text-right">
                                                    <div></div>
                                                    {{-- <div>{{ $paymentMethodName }}</div> --}}
                                                </div>
                                            </div>
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Subtotal</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>{{ number_format($totalPrice, 0, ',', '.') }}đ</div>
                                                </div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Discount</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div class="uk-text-danger">-{{ number_format($discount, 0, ',', '.') }}đ</div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Total</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div class="uk-text-lead uk-text-bolder">{{ number_format($finalPrice, 0, ',', '.') }}đ</div>
                                                </div>
                                            </div> 
                                            <button type="submit" class="uk-button uk-button-primary uk-margin-small uk-width-1-1">Thanh toan</button>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </section>

                    </div>
                </div>
            </section>
        </main>
        
        
       
        {{-- <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <div class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><span>Checkout</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Checkout</h1>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <h3>Order Summary</h3>
                                <ul>
                                    @foreach($cartItems as $item)
                                        <li>{{ $item->productVariant->product->name }} - {{ $item->quatity }} x {{ number_format($item->productVariant->product->price_sale ?: $item->productVariant->product->price_regular, 0, ',', '.') }}đ</li>
                                    @endforeach
                                </ul>
                                <p>Total Price: {{ number_format($totalPrice, 0, ',', '.') }}đ</p>
                                <p>Discount: -{{ number_format($discount, 0, ',', '.') }}đ</p>
                                <p>Final Price: {{ number_format($finalPrice, 0, ',', '.') }}đ</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <h3>Payment Method</h3>
                                <form action="{{ route('order.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="selected_items" value="{{ implode(',', $selectedItems) }}">
                                    <input type="hidden" name="final_price" value="{{ $finalPrice }}">
                                    <div class="form-group">
                                        <label for="payment_method">Select Payment Method</label>
                                        <select name="payment_method" id="payment_method" class="uk-select">
                                            @foreach(App\Models\Order::PAYMENT_METHODS as $key => $method)
                                                <option value="{{ $key }}">{{ $method }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="uk-input" value="{{ $user->name }}" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="uk-input" value="{{ $user->email }}" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" class="uk-input" value="{{ $user->address }}" placeholder="Enter your address">
                                    </div>
                                    <div class="form-group">
                                        <label for="pjone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="uk-input" value="{{ $user->phone }}" placeholder="Enter your address">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="discount_code">Discount Code</label>
                                        <input type="text" name="discount_code" id="discount_code" class="uk-input" placeholder="Enter discount code">
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <button type="submit" class="uk-button uk-button-primary">Thanh toan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main> --}} 
        
        
        
        
        
@endsection
