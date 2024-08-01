@extends('client.layouts.master')

@section('title')
    Giỏ hàng
@endsection

@section('content')
<main>
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                <div class="uk-text-center">
                    <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Cart</span></li>
                    </ul>
                    <h1 class="uk-margin-small-top uk-margin-remove-bottom">Cart</h1>
                </div>
                <div>
                    <div class="uk-grid-medium" uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                <header class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                                    <div class="uk-grid-small uk-child-width-1-2" uk-grid>
                                        <div>product</div>
                                        <div>
                                            <div class="uk-grid-small uk-child-width-expand" uk-grid>
                                                
                                                <div class="tm-quantity-column">quantity</div>
                                                <div>size</div>
                                                <div>color</div>
                                                <div class="uk-width-auto">
                                                    <div style="width: 20px;"></div>
                                                </div>
                                                <div>sum</div>
                                            </div>
                                        </div>
                                    </div>
                                </header>

                                @if($cart && $cart->items->count() > 0)
                                    @foreach($cart->items as $item)
                                    <div class="uk-card-body">
                                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle" uk-grid>
                                            <div>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-auto@s">
                                                        <div>
                                                            <input type="checkbox" class="product-checkbox" data-price="{{ $itemsTotalAmount[$item->id] ?? 0, 0 }}" value="{{ $item->id }}" />
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-3">
                                                        <div class="tm-ratio tm-ratio-4-3">
                                                            <a class="tm-media-box" href="product.html">
                                                                <figure class="tm-media-box-wrap">
                                                                    <img src="{{$item->productVariant->product->img_thumbnail}}" alt='' />
                                                                    <img src="{{Storage::url( $item->productVariant->product->img_thumbnail)}}" alt='' />
                                                                </figure>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-expand">
                                                        <div class="uk-text-meta">Laptop</div>
                                                        <a class="uk-link-heading" href="product.html">{{ $item->productVariant->product->name }}</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center" uk-grid>
                                                    
                                                    <div class="tm-cart-quantity-column">
                                                        <a onclick="increment(-1, 'product-1')" uk-icon="icon: minus; ratio: .75"></a>
                                                        <input class="uk-input tm-quantity-input" id="product-1" type="text" maxlength="3" value="{{ $item->quatity  }}" />
                                                        <a onclick="increment(+1, 'product-1')" uk-icon="icon: plus; ratio: .75"></a>
                                                    </div>
                                                    <div>
                                                        <div class="uk-text-muted uk-hidden@m">Size</div>
                                                        <div>{{ $item->productVariant->size->name  }}</div>
                                                    </div>
                                                    <div>
                                                        <div style="width: 20px; height: 20px; background: {{ $item->productVariant->color->name }};"></div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-text-muted uk-hidden@m">Price</div>
                                                        <div>{{ number_format($item->productVariant->product->price_sale ?: $item->productVariant->product->price_regular, 0, ',', '.') }}đ</div>
                                                    </div>
                                                    <div class="uk-width-auto@s">
                                                        <a class="uk-text-danger" uk-tooltip="Remove"><span uk-icon="close"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần tổng tiền và thanh toán -->
   <!-- Phần tổng tiền và thanh toán -->
<section class="uk-section uk-section-small uk-background-muted fixed-footer">
    <div class="uk-container">
        <form action="{{ route('order.save') }}" method="POST">
            @csrf
            {{-- @method("POST") --}}
            <div class="uk-card uk-card-default uk-card-body uk-text-center" style="padding: 10px; margin: 0;">
                <div class="uk-grid-small uk-child-width-auto uk-flex-middle" uk-grid>
                    <div>
                        <label>
                            <input type="checkbox" id="select-all" />
                            <span>Select All</span>
                        </label>
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-margin-small-bottom">Total</h4>
                        <div id="total-price" class="uk-text-large">0đ</div>
                    </div>
                    <div class="form-group">
                        <label for="payment_method">Phương thức thanh toán</label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            @foreach(App\Models\Order::PAYMENT_METHODS as $key => $method)
                                <option value="{{ $key }}">{{ $method }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="discount_code">Discount Code</label>
                        <input type="text" name="discount_code" id="discount_code" class="uk-input" placeholder="Enter discount code">
                    </div>
                    <div>
                        <button class="uk-button uk-button-primary" id="checkout-button">Thanh toán</button>
                        {{-- <a href="" class="uk-button uk-button-primary" id="checkout-button">Thanh toán</a> --}}
                    </div>
                </div>
                <!-- Hidden input to hold selected items -->
                <input type="hidden" name="selected_items" id="selected_items" />
            </div>
        </form>
    </div>
</section>

    
    
</main>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    function updateTotal() {
        let total = 0;
        let selectedItems = [];

        document.querySelectorAll('.product-checkbox:checked').forEach(function (checkbox) {
            let price = parseFloat(checkbox.getAttribute('data-price'));
            let itemId = checkbox.value;

            if (!isNaN(price)) {
                total += price;
                selectedItems.push(itemId);
            }
        });

        document.getElementById('total-price').textContent = total.toLocaleString('vi-VN') + 'đ';
        document.getElementById('selected_items').value = selectedItems.join(',');
    }

    document.querySelectorAll('.product-checkbox').forEach(function (checkbox) {
        checkbox.addEventListener('change', updateTotal);
    });

    document.getElementById('select-all').addEventListener('change', function () {
        var checkboxes = document.querySelectorAll('.product-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        updateTotal();
    });

    updateTotal();

    document.getElementById('discount_code').addEventListener('input', function() {
        let discountCode = this.value;
        let totalPriceElement = document.getElementById('total-price');
        let totalPrice = parseFloat(totalPriceElement.innerText.replace('đ', '').replace(',', '.'));

        // Gửi yêu cầu AJAX để kiểm tra mã giảm giá
        fetch('{{ route('order.save') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ discount_code: discountCode, selected_items: document.getElementById('selected_items').value })
        })
        .then(response => response.json())
        .then(data => {
            let discount = data.discount || 0;
            let finalPrice = totalPrice - discount;
            totalPriceElement.innerText = new Intl.NumberFormat('vi-VN').format(finalPrice) + 'đ';
        })
        .catch(error => console.error('Error:', error));
    });
});


</script>
@endsection
