@extends('client.layouts.master')

@section('title')
    Sản phẩm
@endsection

@section('content')
      
  
    <main>
        <section class="uk-section uk-section-small">
            <div class="uk-container">
                <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                    <div class="uk-text-center">
                        <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="catalog.html">Catalog</a></li>
                            <li><a href="category.html">Laptops &amp; Tablets</a></li>
                            <li><a href="subcategory.html">Laptops</a></li>
                            <li><span>{{ $product->name }}</span></li>
                        </ul>
                        <h1 class="uk-margin-small-top uk-margin-remove-bottom">{{ $product->name }}</h1>
                    </div>
                    <div>
                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                    <div class="uk-grid-small uk-grid-collapse uk-grid-match" uk-grid>
                                        <div class="uk-width-1-1 uk-width-expand@m">
                                            <div class="uk-grid-collapse uk-child-width-1-1"uk-slideshow="finite: true; ratio: 4:3;" uk-grid>
                                                <div>
                                                    <ul class="uk-slideshow-items" uk-lightbox>
                                                        <li>
                                                            <a class="uk-card-body tm-media-box tm-media-box-zoom" href="">
                                                                <figure class="tm-media-box-wrap">
                                                                    <img src="{{Storage::url($product->img_thumbnail)}}" alt="">
                                                                    <img
                                                                        src="{{ $product->img_thumbnail }}"
                                                                        alt="">
                                                                </figure>
                                                            </a>
                                                        </li>
                                                        {{-- <li><a class="uk-card-body tm-media-box tm-media-box-zoom"
                                                                href="images/products/1/1-add-1-large.jpg">
                                                                <figure class="tm-media-box-wrap"><img
                                                                        src="images/products/1/1-add-1-large.jpg"
                                                                        alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                </figure>
                                                            </a></li>
                                                        <li><a class="uk-card-body tm-media-box tm-media-box-zoom"
                                                                href="images/products/1/1-add-2-large.jpg">
                                                                <figure class="tm-media-box-wrap"><img
                                                                        src="images/products/1/1-add-2-large.jpg"
                                                                        alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                </figure>
                                                            </a></li>
                                                        <li><a class="uk-card-body tm-media-box tm-media-box-zoom"
                                                                href="images/products/1/1-add-3-large.jpg">
                                                                <figure class="tm-media-box-wrap"><img
                                                                        src="images/products/1/1-add-3-large.jpg"
                                                                        alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                </figure>
                                                            </a></li>
                                                        <li><a class="uk-card-body tm-media-box tm-media-box-zoom" --}}
                                                                <figure class="tm-media-box-wrap">
                                                                    <img src="images/products/1/1-add-4-large.jpg" alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                </figure>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <div class="uk-card-body uk-flex uk-flex-center">
                                                        <div class="uk-width-1-2 uk-visible@s">
                                                            <div uk-slider="finite: true">
                                                                <div class="uk-position-relative">
                                                                    <div class="uk-slider-container">
                                                                        <ul class="tm-slider-items uk-slider-items uk-child-width-1-4 uk-grid uk-grid-small">
                                                                            <li uk-slideshow-item="0">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a class="tm-media-box tm-media-box-frame">
                                                                                        <figure class="tm-media-box-wrap">
                                                                                            {{-- <img src="{{Storage::url($product->image)}}" alt=""> --}}
                                                                                            @foreach($galleryImages as $galleryImage)
                                                                                            <img src="{{ Storage::url($galleryImage) }}" alt="">
                                                                                            @endforeach
                                                                                            {{-- <img src="images/products/1/1-small.jpg"
                                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)"> --}}
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </li>
                                                                            <li uk-slideshow-item="1">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a class="tm-media-box tm-media-box-frame"
                                                                                        href="#">
                                                                                        <figure
                                                                                            class="tm-media-box-wrap">
                                                                                            <img src="images/products/1/1-add-1-small.jpg"
                                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </li>
                                                                            <li uk-slideshow-item="2">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a class="tm-media-box tm-media-box-frame"
                                                                                        href="#">
                                                                                        <figure
                                                                                            class="tm-media-box-wrap">
                                                                                            <img src="images/products/1/1-add-2-small.jpg"
                                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </li>
                                                                            <li uk-slideshow-item="3">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a class="tm-media-box tm-media-box-frame"
                                                                                        href="#">
                                                                                        <figure
                                                                                            class="tm-media-box-wrap">
                                                                                            <img src="images/products/1/1-add-3-small.jpg"
                                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </li>
                                                                            <li uk-slideshow-item="4">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a class="tm-media-box tm-media-box-frame"
                                                                                        href="#">
                                                                                        <figure
                                                                                            class="tm-media-box-wrap">
                                                                                            <img src="images/products/1/1-add-4-small.jpg"
                                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                                        </figure>
                                                                                    </a></div>
                                                                            </li>
                                                                        </ul>
                                                                       
                                                                        <div><a class="uk-position-center-left-out uk-position-small"
                                                                                href="#" uk-slider-item="previous"
                                                                                uk-slidenav-previous></a><a
                                                                                class="uk-position-center-right-out uk-position-small"
                                                                                href="#" uk-slider-item="next"
                                                                                uk-slidenav-next></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="uk-slideshow-nav uk-dotnav uk-hidden@s"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-width-1-3@m tm-product-info">
                                            <div class="uk-card-body">
                                                <div><a href="#" title="Apple"><img src="images/brands/apple.svg"
                                                            alt="Apple" style="height: 40px;"></a></div>
                                                <div class="uk-margin">
                                                    <div class="uk-grid-small" uk-grid>
                                                        <div class="uk-flex uk-flex-middle">
                                                            <ul
                                                                class="uk-iconnav uk-margin-xsmall-bottom tm-rating">
                                                                <li><span class="uk-text-warning"
                                                                        uk-icon="star"></span></li>
                                                                <li><span class="uk-text-warning"
                                                                        uk-icon="star"></span></li>
                                                                <li><span class="uk-text-warning"
                                                                        uk-icon="star"></span></li>
                                                                <li><span class="uk-text-warning"
                                                                        uk-icon="star"></span></li>
                                                                <li><span class="uk-text-warning"
                                                                        uk-icon="star"></span></li>
                                                            </ul>
                                                            <div class="uk-margin-xsmall-left"><a
                                                                    class="uk-text-meta js-scroll-to-description"
                                                                    href="#description"
                                                                    onclick="UIkit.switcher('.js-product-switcher').show(3);">(2)</a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            
                                                            <span
                                                                class="uk-label uk-label-warning uk-margin-xsmall-right">top
                                                                selling</span><span
                                                                class="uk-label uk-label-danger uk-margin-xsmall-right">trade-in</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="uk-margin">
                                                   
                                                    <div class="uk-grid-medium" uk-grid>
                                                        <div>
                                                            <div class="">Color
                                                            </div>
                                                            <ul class="uk-subnav uk-subnav-pill tm-variations"
                                                               >
                                                                @foreach($colors as $id => $name)
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" 
                                                                            id="radio_color_{{ $id }}" name="product_color_id" value="{{ $id }}">
                                                                            <div class="" style="width:50px; height:20px; background:{{ $name }};" for="radio_color_{{ $id }}"></div>
                                                                        {{-- <label class="form-check-label" style="width:50px; height:20px background:{{ $name }};" for="radio_color_{{ $id }}"></label> --}}
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                            
                                                               
                                                            </ul>
                                                        </div>

                                                        <div>
                                                            <div class="uk-text-small uk-margin-xsmall-bottom">Size</div>
                                                            <ul class="uk-subnav uk-subnav-pill tm-variations">
                                                                @foreach($sizes as $id => $name)
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input"
                                                                            id="radio_size_{{ $id }}" name="product_size_id" value="{{ $id }}">
                                                                        <label class="form-check-label" for="radio_size_{{ $id }}">{{ $name }}</label>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                                {{-- <a>256 GB</a>
                                                                <li><a>512 GB</a></li> --}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <div
                                                        class="uk-padding-small uk-background-primary-lighten uk-border-rounded">
                                                        <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                            <div><del class="uk-text-meta">{{ number_format($product->price_regular) }}đ</del>
                                                                <div class="tm-product-price">{{ number_format($product->price_sale) }}đ</div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-grid-small" uk-grid>
                                                                    <div>
                                                                        <input style="width: 40px" type="number" class="form-control"
                                                                        min="1" required value="1" required  value="1"
                                                                        id="quantity" placeholder="Enter quantity" name="quantity">
                                                                        {{-- <a onclick="increment(-1, 'product-1')"
                                                                            uk-icon="icon: minus; ratio: .75">
                                                                        </a>
                                                                        <input
                                                                            class="uk-input tm-quantity-input" required value="1" id="product-1" name="quantity" type="text" maxlength="4"value="1" />
                                                                        <a
                                                                            onclick="increment(+1, 'product-1')"
                                                                            uk-icon="icon: plus; ratio: .75">
                                                                        </a> --}}
                                                                    </div>
                                                                    <div>
                                                                        <button class="uk-button uk-button-primary tm-product-add-button tm-shine "type="submit">Thêm vào giỏ hàng</button>
                                                                    </div>
                                                                    <div
                                                                        class="uk-width-auto uk-width-expand@s uk-flex uk-flex-middle uk-text-meta">
                                                                        <a class="uk-margin-small-right js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                            uk-tooltip="Add to favorites"><span
                                                                                uk-icon="heart"></span></a><a
                                                                            class="js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                            uk-tooltip="Add to compare"><span
                                                                                uk-icon="copy"></span></a></div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                                <div class="uk-margin">
                                                    <div
                                                        class="uk-padding-small uk-background-muted uk-border-rounded">
                                                        <div class="uk-grid-small uk-child-width-1-1 uk-text-small"
                                                            uk-grid>
                                                            <div>
                                                                <div class="uk-grid-collapse" uk-grid><span
                                                                        class="uk-margin-xsmall-right"
                                                                        uk-icon="cart"></span>
                                                                    <div>
                                                                        <div class="uk-text-bolder">Delivery</div>
                                                                        <div class="uk-text-xsmall uk-text-muted">In
                                                                            stock, free, tomorrow</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-grid-collapse" uk-grid><span
                                                                        class="uk-margin-xsmall-right"
                                                                        uk-icon="location"></span>
                                                                    <div>
                                                                        <div class="uk-text-bolder">Pick up from
                                                                            store</div>
                                                                        <div class="uk-text-xsmall uk-text-muted">In
                                                                            stock, free, tomorrow</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <ul class="uk-list uk-text-small uk-margin-remove">
                                                        <li><span class="uk-text-muted">Diagonal display:
                                                            </span><span>15.4"</span></li>
                                                        <li><span class="uk-text-muted">CPU:
                                                            </span><span>Intel®&nbsp;Core™ i7</span></li>
                                                        <li><span class="uk-text-muted">RAM:
                                                            </span><span>16&nbsp;GB</span></li>
                                                        <li><span class="uk-text-muted">Video Card: </span><span>AMD
                                                                Radeon Pro 555</span></li>
                                                    </ul>
                                                    <div class="uk-margin-small-top"><a
                                                            class="uk-link-heading js-scroll-to-description"
                                                            href="#description"
                                                            onclick="UIkit.switcher('.js-product-switcher').show(1);"><span
                                                                class="tm-pseudo">Detailed
                                                                specifications</span><span
                                                                class="uk-margin-xsmall-left"
                                                                uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 tm-product-description" id="description">
                                            <header>
                                                <nav class="tm-product-nav"
                                                    uk-sticky="offset: 60; bottom: #description; cls-active: tm-product-nav-fixed;">
                                                    <ul class="uk-subnav uk-subnav-pill js-product-switcher"
                                                        uk-switcher="connect: .js-tabs">
                                                        <li><a class="js-scroll-to-description"
                                                                href="#description">Overview</a></li>
                                                        <li><a class="js-scroll-to-description"
                                                                href="#description">Specifications</a></li>
                                                        <li><a class="js-scroll-to-description"
                                                                href="#description">Accessories
                                                                <span>(9)</span></a></li>
                                                        <li><a class="js-scroll-to-description"
                                                                href="#description">Reviews
                                                                <span>(2)</span></a></li>
                                                        <li><a class="js-scroll-to-description"
                                                                href="#description">Q&A</a></li>
                                                    </ul>
                                                </nav>
                                            </header>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Related items-->

                            <section>
                                <div uk-slider="finite: true">
                                    <div class="uk-grid-small uk-flex-middle uk-margin-bottom" uk-grid>
                                        <h2 class="uk-width-expand uk-text-center uk-text-left@s">Related Products
                                        </h2>
                                        <div class="uk-visible@s"><a class="tm-slidenav" href="#"
                                                uk-slider-item="previous" uk-slidenav-previous></a><a
                                                class="tm-slidenav" href="#" uk-slider-item="next"
                                                uk-slidenav-next></a></div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                            <div class="uk-position-relative">
                                                <div class="uk-slider-container">
                                                    <div
                                                        class="uk-slider-items uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid">
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <div class="tm-product-card-labels"><span
                                                                                class="uk-label uk-label-warning">top
                                                                                selling</span><span
                                                                                class="uk-label uk-label-danger">trade-in</span>
                                                                        </div>
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/1/1-medium.jpg"
                                                                                alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Apple MacBook Pro
                                                                            15&quot; Touch Bar MPTU2LL/A 256GB
                                                                            (Silver)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>15.4"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i7</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>16&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>AMD Radeon Pro 555</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices"><del
                                                                            class="uk-text-meta">$1899.00</del>
                                                                        <div class="tm-product-card-price">$1599.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <div class="tm-product-card-labels"><span
                                                                                class="uk-label uk-label-success">new</span><span
                                                                                class="uk-label uk-label-danger">trade-in</span>
                                                                        </div>
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/2/2-medium.jpg"
                                                                                alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Apple MacBook
                                                                            12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                                                    </h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>12"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i5</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>8&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® HD Graphics
                                                                                615</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="tm-product-card-price">$1549.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/3/3-medium.jpg"
                                                                                alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Lenovo IdeaPad YOGA
                                                                            920-13IKB 80Y7001RRK (Copper)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.9"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i7
                                                                                8550U</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>16&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® HD Graphics
                                                                                620</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="tm-product-card-price">$1199.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <div class="tm-product-card-labels"><span
                                                                                class="uk-label uk-label-warning">top
                                                                                selling</span></div>
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/4/4-medium.jpg"
                                                                                alt="ASUS Zenbook UX330UA-FC020T (Rose Gold)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">ASUS Zenbook
                                                                            UX330UA-FC020T (Rose Gold)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.3"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™
                                                                                i7-6500U</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>8&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® HD Graphics
                                                                                520</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="tm-product-card-price">$749.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/5/5-medium.jpg"
                                                                                alt="Dell XPS 15 9560-8968 (Silver)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Dell XPS 15
                                                                            9560-8968 (Silver)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>15.6"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i7
                                                                                7700HQ</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>16&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>NVIDIA GeForce GTX
                                                                                960M</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices"><del
                                                                            class="uk-text-meta">$999.00</del>
                                                                        <div class="tm-product-card-price">$949.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <div class="tm-product-card-labels"><span
                                                                                class="uk-label uk-label-danger">trade-in</span>
                                                                        </div>
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/6/6-medium.jpg"
                                                                                alt="Apple MacBook Air 13&quot; MQD32LL/A 128GB (Silver)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Apple MacBook Air
                                                                            13&quot; MQD32LL/A 128GB (Silver)</a>
                                                                    </h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.3"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i5</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>8&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® HD Graphics
                                                                                6000</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="tm-product-card-price">$849.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/7/7-medium.jpg"
                                                                                alt="Dell Inspiron 5378-2063 (Gray)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Dell Inspiron
                                                                            5378-2063 (Gray)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.3"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™
                                                                                i3-7100U</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>4&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">HDD
                                                                                Capacity:
                                                                            </span><span>1&nbsp;TB</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices"><del
                                                                            class="uk-text-meta">$599.00</del>
                                                                        <div class="tm-product-card-price">$579.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <div class="tm-product-card-labels"><span
                                                                                class="uk-label uk-label-success">new</span>
                                                                        </div>
                                                                        <figure class="tm-media-box-wrap"><img
                                                                                src="images/products/8/8-medium.jpg"
                                                                                alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)" />
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Lenovo Yoga
                                                                            720-13IKB 80X60059RK (Silver)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.3"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™
                                                                                i5-7200U</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>8&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® HD Graphics
                                                                                620</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="tm-product-card-price">$1099.00
                                                                        </div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                        <button
                                                                            class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                class="tm-product-card-add-button-icon"
                                                                                uk-icon="cart"></span><span
                                                                                class="tm-product-card-add-button-text">add
                                                                                to cart</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <article class="tm-product-card">
                                                            <div class="tm-product-card-media">
                                                                <div class="tm-ratio tm-ratio-4-3"><a
                                                                        class="tm-media-box" href="product.html">
                                                                        <figure class="tm-media-box-wrap"><span
                                                                                class="uk-text-muted"
                                                                                uk-icon="icon: image; ratio: 3;"></span>
                                                                        </figure>
                                                                    </a></div>
                                                            </div>
                                                            <div class="tm-product-card-body">
                                                                <div class="tm-product-card-info">
                                                                    <div
                                                                        class="uk-text-meta uk-margin-xsmall-bottom">
                                                                        Laptop</div>
                                                                    <h3 class="tm-product-card-title"><a
                                                                            class="uk-link-heading"
                                                                            href="product.html">Lenovo ThinkPad X380
                                                                            Yoga 20LH000MUS (Black)</a></h3>
                                                                    <ul
                                                                        class="uk-list uk-text-small tm-product-card-properties">
                                                                        <li><span class="uk-text-muted">Diagonal
                                                                                display: </span><span>13.3"</span>
                                                                        </li>
                                                                        <li><span class="uk-text-muted">CPU:
                                                                            </span><span>Intel®&nbsp;Core™ i7
                                                                                8550U</span></li>
                                                                        <li><span class="uk-text-muted">RAM:
                                                                            </span><span>4&nbsp;GB</span></li>
                                                                        <li><span class="uk-text-muted">Video Card:
                                                                            </span><span>Intel® UHD Graphics
                                                                                620</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tm-product-card-shop">
                                                                    <div class="tm-product-card-prices">
                                                                        <div class="uk-text-muted">Product not
                                                                            available</div>
                                                                    </div>
                                                                    <div class="tm-product-card-add">
                                                                        <div
                                                                            class="uk-text-meta tm-product-card-actions">
                                                                            <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                title="Add to favorites"><span
                                                                                    uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to favorites</span></a><a
                                                                                class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                title="Add to compare"><span
                                                                                    uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                    class="tm-product-card-action-text">Add
                                                                                    to compare</span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul
                                            class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top uk-hidden@s">
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="review" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body"><button class="uk-modal-close-outside"
                                    type="button" uk-close></button>
                                <h2 class="uk-modal-title uk-text-center">Review</h2>
                                <form class="uk-form-stacked">
                                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                        <div><label>
                                                <div class="uk-form-label uk-form-label-required">Name</div><input
                                                    class="uk-input" type="text" required>
                                            </label></div>
                                        <div><label>
                                                <div class="uk-form-label uk-form-label-required">Email</div><input
                                                    class="uk-input" type="email" required>
                                            </label></div>
                                        <div>
                                            <div class="uk-form-label">Rating</div>
                                            <ul class="uk-iconnav tm-rating">
                                                <li><a uk-icon="star"></a></li>
                                                <li><a uk-icon="star"></a></li>
                                                <li><a uk-icon="star"></a></li>
                                                <li><a uk-icon="star"></a></li>
                                                <li><a uk-icon="star"></a></li>
                                            </ul>
                                        </div>
                                        <div><label>
                                                <div class="uk-form-label uk-form-label-required">Review</div>
                                                <textarea class="uk-textarea" rows="5" required></textarea>
                                            </label></div>
                                        <div class="uk-text-center"><button
                                                class="uk-button uk-button-primary">Send</button></div>
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
@endsection
    
