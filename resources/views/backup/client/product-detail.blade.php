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
                                            <div class="uk-grid-collapse uk-child-width-1-1"
                                                uk-slideshow="finite: true; ratio: 4:3;" uk-grid>
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
                                                                <figure class="tm-media-box-wrap"><img
                                                                        src="images/products/1/1-add-4-large.jpg"
                                                                        alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
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
                                                                       
                                                                        <ul
                                                                            class="tm-slider-items uk-slider-items uk-child-width-1-4 uk-grid uk-grid-small">
                                                                            <li uk-slideshow-item="0">
                                                                                <div class="tm-ratio tm-ratio-1-1">
                                                                                    <a
                                                                                        class="tm-media-box tm-media-box-frame">
                                                                                        <figure
                                                                                            class="tm-media-box-wrap">
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
                                                                        min="1" required value="1"
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
                                            {{-- <div class="uk-card-body">
                                                <div class="uk-switcher js-product-switcher js-tabs">
                                                    <section>
                                                        <article class="uk-article">
                                                            <div class="uk-article-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit. Pellentesque euismod nisl nunc,
                                                                    a dictum magna laoreet eget. Vestibulum ante
                                                                    ipsum primis in faucibus orci luctus et ultrices
                                                                    posuere cubilia Curae.</p>
                                                                <div class="tm-wrapper uk-text-center">
                                                                    <figure><a
                                                                            href="images/articles/macbook-photo.jpg"><img
                                                                                src="images/articles/macbook-photo.jpg"
                                                                                alt="MacBook Pro"></a>
                                                                        <figcaption>MacBook Pro</figcaption>
                                                                    </figure>
                                                                </div>
                                                                <p>Sed sit amet ante eget nunc dictum auctor
                                                                    sagittis in libero. Aliquam ultricies tincidunt
                                                                    nisi, a vestibulum nisi tempor vitae. Praesent
                                                                    fermentum sem semper fermentum ultrices. Duis
                                                                    eleifend vel sapien dignissim auctor. Vestibulum
                                                                    at commodo leo. In vitae eros ut sapien egestas
                                                                    venenatis non sit amet elit. In gravida vitae
                                                                    ante a rutrum.</p>
                                                                <h2>Touch Bar</h2>
                                                                <p>Vivamus ornare tortor elit, sed rutrum felis
                                                                    iaculis in. Nunc ut molestie neque. Aenean vitae
                                                                    elementum arcu, at rutrum ligula. Pellentesque
                                                                    fringilla dictum viverra. Vestibulum eu ipsum
                                                                    nec risus pharetra iaculis. Donec quis nulla
                                                                    orci. Suspendisse eget dictum augue, et lobortis
                                                                    justo. Suspendisse velit dui, sollicitudin quis
                                                                    velit nec, tincidunt consequat arcu.</p>
                                                                <h2>Retina Display</h2>
                                                                <p>Pellentesque dictum imperdiet rutrum. Vestibulum
                                                                    egestas quam eget maximus rutrum. Etiam blandit
                                                                    a dolor laoreet vulputate. Nulla ullamcorper
                                                                    ipsum et libero finibus, vitae vestibulum odio
                                                                    feugiat.</p>
                                                                <figure class="uk-text-center"><a
                                                                        href="images/articles/macbook-promo-4.jpg"><img
                                                                            src="images/articles/macbook-promo-4.jpg"
                                                                            alt="MacBook Pro"></a></figure>
                                                                <h2>Force Touch Trackpad</h2>
                                                                <p>Vivamus ornare tortor elit, sed rutrum felis
                                                                    iaculis in. Nunc ut molestie neque. Aenean vitae
                                                                    elementum arcu, at rutrum ligula. Pellentesque
                                                                    fringilla dictum viverra. Vestibulum eu ipsum
                                                                    nec risus pharetra iaculis. Donec quis nulla
                                                                    orci. Suspendisse eget dictum augue, et lobortis
                                                                    justo. Suspendisse velit dui, sollicitudin quis
                                                                    velit nec, tincidunt consequat arcu.</p>
                                                                <div class="tm-wrapper">
                                                                    <figure class="tm-ratio tm-ratio-16-9"><iframe
                                                                            src="https://www.youtube.com/embed/WVPRkcczXCY"
                                                                            frameborder="0"
                                                                            allow="autoplay; encrypted-media"
                                                                            allowfullscreen></iframe></figure>
                                                                </div>
                                                                <p>Ut arcu lacus, tempus bibendum purus sed, iaculis
                                                                    sollicitudin sapien. Donec quis imperdiet arcu.
                                                                    Ut sagittis ipsum diam, nec tempor ex fermentum
                                                                    a. Nam ac vehicula erat. Curabitur id congue
                                                                    risus, vel iaculis enim. Donec tristique lacinia
                                                                    velit eu fringilla. Mauris lectus enim, aliquet
                                                                    eu dolor sed, porta vehicula lacus. Etiam luctus
                                                                    egestas scelerisque. Sed sit amet metus ante.
                                                                    Cras pulvinar sollicitudin nisl nec egestas.
                                                                    Maecenas vitae velit ut urna vestibulum
                                                                    venenatis ut vel ex. Quisque sit amet mattis
                                                                    ante. Duis blandit nisl non commodo rutrum.
                                                                    Nulla in velit ut arcu efficitur laoreet ut eu
                                                                    mauris. Duis condimentum vulputate consequat.
                                                                    Vestibulum aliquet suscipit purus.</p>
                                                                <figure uk-slideshow>
                                                                    <div
                                                                        class="uk-position-relative uk-visible-toggle uk-light">
                                                                        <ul class="uk-slideshow-items">
                                                                            <li><img src="images/articles/macbook-promo-1.jpg"
                                                                                    alt="MacBook Pro" uk-cover></li>
                                                                            <li><img src="images/articles/macbook-promo-2.jpg"
                                                                                    alt="MacBook Pro" uk-cover></li>
                                                                        </ul><a
                                                                            class="uk-position-center-left uk-position-small uk-hidden-hover"
                                                                            href="#" uk-slidenav-previous
                                                                            uk-slideshow-item="previous"></a><a
                                                                            class="uk-position-center-right uk-position-small uk-hidden-hover"
                                                                            href="#" uk-slidenav-next
                                                                            uk-slideshow-item="next"></a>
                                                                    </div>
                                                                    <ul
                                                                        class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin">
                                                                    </ul>
                                                                </figure>
                                                                <p>Mauris dignissim non nulla quis sollicitudin.
                                                                    Maecenas quis orci dui. Suspendisse pharetra
                                                                    facilisis metus, at venenatis nisl convallis et.
                                                                    Curabitur vulputate eget nisl sed dignissim. Sed
                                                                    eget metus ut orci volutpat gravida.</p>
                                                                <blockquote class="twitter-tweet" data-lang="en">
                                                                    <p lang="en" dir="ltr">Mophie&apos;s latest
                                                                        battery pack is powerful enough to charge
                                                                        your 15-inch MacBook Pro<a
                                                                            href="https://t.co/jN4RzcxOyG">https://t.co/jN4RzcxOyG</a><a
                                                                            href="https://t.co/5oJBKZRVBx">pic.twitter.com/5oJBKZRVBx</a>
                                                                    </p>&mdash; The Verge (@verge)<a
                                                                        href="https://twitter.com/verge/status/948539601265872896?ref_src=twsrc%5Etfw">January
                                                                        3, 2018</a>
                                                                </blockquote>
                                                                <script
                                                                    src="https://platform.twitter.com/widgets.js"
                                                                    charset="utf-8" async></script>
                                                                <p>Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit. Quisque sem urna, accumsan nec
                                                                    velit et, convallis tincidunt enim. Proin
                                                                    sollicitudin, metus at interdum tempus, velit mi
                                                                    posuere nisl, nec viverra ligula lorem sit amet
                                                                    felis. Class aptent taciti sociosqu ad litora
                                                                    torquent per conubia nostra, per inceptos
                                                                    himenaeos.</p>
                                                                <table
                                                                    class="uk-table uk-table-large uk-table-middle uk-table-divider uk-table-justify uk-table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th class="uk-width-1-4 uk-text-center">
                                                                                MacBook Pro 13"</th>
                                                                            <th class="uk-width-1-4 uk-text-center">
                                                                                MacBook Pro 13" with Touch Bar</th>
                                                                            <th class="uk-width-1-4 uk-text-center">
                                                                                MacBook Pro 15" with Touch Bar</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Dimensions</th>
                                                                            <td>0.59 × 11.97 × 8.36&nbsp;inches</td>
                                                                            <td>0.59 × 11.97 × 8.36&nbsp;inches</td>
                                                                            <td>0.61 × 13.75 × 9.48&nbsp;inches</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Weight</th>
                                                                            <td>3.02&nbsp;pounds</td>
                                                                            <td>3.02&nbsp;pounds</td>
                                                                            <td>4.02&nbsp;pounds</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Display</th>
                                                                            <td>13.3" 2560×1600,<br>60Hz Retina
                                                                                Display</td>
                                                                            <td>13.3" 2560×1600,<br>60Hz Retina
                                                                                Display</td>
                                                                            <td>15.4" 2880×1800,<br>60Hz Retina
                                                                                Display</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Inputs</th>
                                                                            <td>2 × USB-C Ports,<br>1 × 3.5mm
                                                                                Headphone Jack</td>
                                                                            <td>4 × USB-C Ports,<br>1 × 3.5mm
                                                                                Headphone Jack</td>
                                                                            <td>4 × USB-C Ports,<br>1 × 3.5mm
                                                                                Headphone Jack</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Battery Life</th>
                                                                            <td>Approximately 10&nbsp;hours</td>
                                                                            <td>Approximately 10&nbsp;hours</td>
                                                                            <td>Approximately 10&nbsp;hours</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Sed at diam aliquet, fringilla turpis ac,
                                                                    consequat ante. Duis id maximus purus. Cras
                                                                    rutrum erat non nibh accumsan, vitae maximus
                                                                    sapien elementum. Maecenas tellus libero,
                                                                    vulputate vitae mi eu, volutpat ornare felis.
                                                                    Nulla malesuada nunc urna, quis rutrum massa
                                                                    consequat id. Pellentesque elit diam, dignissim
                                                                    a lorem eu, tincidunt mollis erat.</p>
                                                                <div class="tm-wrapper">
                                                                    <figure class="uk-text-center"><a
                                                                            href="images/articles/macbook-promo-3.jpg"><img
                                                                                src="images/articles/macbook-promo-3.jpg"
                                                                                alt="MacBook Pro"></a>
                                                                        <figcaption>13-inch and 15-inch</figcaption>
                                                                    </figure>
                                                                </div>
                                                                <p>Sed at diam aliquet, fringilla turpis ac,
                                                                    consequat ante. Duis id maximus purus. Cras
                                                                    rutrum erat non nibh accumsan, vitae maximus
                                                                    sapien elementum. Maecenas tellus libero,
                                                                    vulputate vitae mi eu, volutpat ornare felis.
                                                                    Nulla malesuada nunc urna, quis rutrum massa
                                                                    consequat id. Pellentesque elit diam, dignissim
                                                                    a lorem eu, tincidunt mollis erat.</p>
                                                                <blockquote cite="#">
                                                                    <p class="uk-margin-small-bottom">You can
                                                                        converge a toaster and refrigerator, but
                                                                        these things are probably not going to be
                                                                        pleasing to the user.</p>
                                                                    <footer>Tim Cook</footer>
                                                                </blockquote>
                                                            </div>
                                                        </article>
                                                    </section>
                                                    <section>
                                                        <h2>Performance</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Processor</th>
                                                                <td class="uk-table-expand">Intel&nbsp;Core
                                                                    i7&nbsp;Quad-Core</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Base Clock Speed</th>
                                                                <td class="uk-table-expand">2.8&nbsp;GHz</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Maximum Boost Speed</th>
                                                                <td class="uk-table-expand">3.8&nbsp;GHz</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Total Installed Memory
                                                                </th>
                                                                <td class="uk-table-expand">16&nbsp;GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Memory Type</th>
                                                                <td class="uk-table-expand">LPDDR3&nbsp;SDRAM</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Memory Speed</th>
                                                                <td class="uk-table-expand">2133&nbsp;MHz</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Onboard Memory</th>
                                                                <td class="uk-table-expand">16&nbsp;GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Available Memory Slots
                                                                </th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Graphics Type</th>
                                                                <td class="uk-table-expand">Hybrid</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">GPU</th>
                                                                <td class="uk-table-expand">AMD Radeon&nbsp;Pro 555
                                                                    with 2&nbsp;GB&nbsp;GDDR5 VRAM,<br>Intel HD
                                                                    Graphics&nbsp;630</td>
                                                            </tr>
                                                        </table>
                                                        <h2>Display</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Panel Type</th>
                                                                <td class="uk-table-expand">IPS</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Size</th>
                                                                <td class="uk-table-expand">15.4"</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Aspect Ratio</th>
                                                                <td class="uk-table-expand">16:10</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Native Resolution</th>
                                                                <td class="uk-table-expand">2880×1800</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Touchscreen</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Finish</th>
                                                                <td class="uk-table-expand">Glossy</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Brightness</th>
                                                                <td class="uk-table-expand">
                                                                    500&nbsp;cd/m<sup>2</sup></td>
                                                            </tr>
                                                        </table>
                                                        <h2>Drives</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Available Slots</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Total Capacity</th>
                                                                <td class="uk-table-expand">256&nbsp;GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Solid State Storage</th>
                                                                <td class="uk-table-expand">1 ×
                                                                    256&nbsp;GB&nbsp;Integrated PCIe</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Optical Drive</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                        </table>
                                                        <h2>Input/ Output Connectors</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Ports</th>
                                                                <td class="uk-table-expand">4 × Thunderbolt
                                                                    3&nbsp;via USB Type-C</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Display</th>
                                                                <td class="uk-table-expand">4 × DisplayPort&nbsp;via
                                                                    Type-C</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Audio</th>
                                                                <td class="uk-table-expand">1 × 1/8" (3.5&nbsp;mm)
                                                                    Headphone Output,<br>2 × Integrated
                                                                    Speaker,<br>3 × Integrated Microphone</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Expansion Slots</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Media Card Slots</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                        </table>
                                                        <h2>Communications</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Network</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Modem</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Wi-Fi</th>
                                                                <td class="uk-table-expand">802.11ac; Dual-Band</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Bluetooth</th>
                                                                <td class="uk-table-expand">Bluetooth 4.2</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Mobile Broadband</th>
                                                                <td class="uk-table-expand">—</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">GPS</th>
                                                                <td class="uk-table-expand">Not Specified by
                                                                    Manufacturer</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">NFC</th>
                                                                <td class="uk-table-expand">Not Specified by
                                                                    Manufacturer</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Webcam</th>
                                                                <td class="uk-table-expand">User-Facing: 720p Video
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <h2>Battery</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Battery Chemistry</th>
                                                                <td class="uk-table-expand">Lithium-Ion Polymer</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Watt Hours / Type</th>
                                                                <td class="uk-table-expand">
                                                                    76&nbsp;Wh&nbsp;Non-Removable</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Maximum Runtime</th>
                                                                <td class="uk-table-expand">10&nbsp;Hours</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Power Requirements</th>
                                                                <td class="uk-table-expand">100-240&nbsp;VAC,
                                                                    50-60&nbsp;Hz</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Power Supply</th>
                                                                <td class="uk-table-expand">1 × 87&nbsp;W</td>
                                                            </tr>
                                                        </table>
                                                        <h2>General</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Operating System</th>
                                                                <td class="uk-table-expand">macOS High Sierra</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Security</th>
                                                                <td class="uk-table-expand">Not specified</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Keyboard</th>
                                                                <td class="uk-table-expand">Keys: 64,<br>Type:
                                                                    Standard Notebook Keyboard,<br>Features:
                                                                    Backlight</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Pointing Device</th>
                                                                <td class="uk-table-expand">Force Touch Trackpad
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Dimensions (W × H × D)
                                                                </th>
                                                                <td class="uk-table-expand">13.8 × 0.6 ×
                                                                    9.5"&nbsp;/&nbsp;35.1 × 1.5 × 24.1&nbsp;cm</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Weight</th>
                                                                <td class="uk-table-expand">
                                                                    4.02&nbsp;lb&nbsp;/&nbsp;1.82&nbsp;kg</td>
                                                            </tr>
                                                        </table>
                                                        <h2>Packaging Info</h2>
                                                        <table
                                                            class="uk-table uk-table-divider uk-table-justify uk-table-responsive">
                                                            <tr>
                                                                <th class="uk-width-medium">Package Weight</th>
                                                                <td class="uk-table-expand">7.55&nbsp;lb</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="uk-width-medium">Box Dimensions (L × W ×
                                                                    H)</th>
                                                                <td class="uk-table-expand">16.2 × 11.6 × 3.7"</td>
                                                            </tr>
                                                        </table>
                                                    </section>
                                                    <section>
                                                        <div class="tm-wrapper">
                                                            <div class="uk-grid-collapse uk-child-width-1-3@s uk-child-width-1-4@m tm-products-grid"
                                                                uk-grid>
                                                                <article class="tm-product-card">
                                                                    <div class="tm-product-card-media">
                                                                        <div class="tm-ratio tm-ratio-4-3"><a
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <div class="tm-product-card-labels">
                                                                                    <span
                                                                                        class="uk-label uk-label-warning">top
                                                                                        selling</span><span
                                                                                        class="uk-label uk-label-danger">trade-in</span>
                                                                                </div>
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/1/1-medium.jpg"
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
                                                                                    href="product.html">Apple
                                                                                    MacBook Pro 15&quot; Touch Bar
                                                                                    MPTU2LL/A 256GB (Silver)</a>
                                                                            </h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>15.4"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i7</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>16&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>AMD
                                                                                        Radeon Pro 555</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices"><del
                                                                                    class="uk-text-meta">$1899.00</del>
                                                                                <div class="tm-product-card-price">
                                                                                    $1599.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <div class="tm-product-card-labels">
                                                                                    <span
                                                                                        class="uk-label uk-label-success">new</span><span
                                                                                        class="uk-label uk-label-danger">trade-in</span>
                                                                                </div>
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/2/2-medium.jpg"
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
                                                                                    href="product.html">Apple
                                                                                    MacBook 12&quot; MNYN2LL/A 512GB
                                                                                    (Rose Gold)</a></h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>12"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i5</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>8&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel® HD
                                                                                        Graphics 615</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $1549.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/3/3-medium.jpg"
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
                                                                                    href="product.html">Lenovo
                                                                                    IdeaPad YOGA 920-13IKB
                                                                                    80Y7001RRK (Copper)</a></h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.9"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i7 8550U</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>16&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel® HD
                                                                                        Graphics 620</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $1199.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <div class="tm-product-card-labels">
                                                                                    <span
                                                                                        class="uk-label uk-label-warning">top
                                                                                        selling</span></div>
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/4/4-medium.jpg"
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
                                                                                    UX330UA-FC020T (Rose Gold)</a>
                                                                            </h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.3"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i7-6500U</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>8&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel® HD
                                                                                        Graphics 520</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $749.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/5/5-medium.jpg"
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
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>15.6"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i7 7700HQ</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>16&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>NVIDIA
                                                                                        GeForce GTX 960M</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices"><del
                                                                                    class="uk-text-meta">$999.00</del>
                                                                                <div class="tm-product-card-price">
                                                                                    $949.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <div class="tm-product-card-labels">
                                                                                    <span
                                                                                        class="uk-label uk-label-danger">trade-in</span>
                                                                                </div>
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/6/6-medium.jpg"
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
                                                                                    href="product.html">Apple
                                                                                    MacBook Air 13&quot; MQD32LL/A
                                                                                    128GB (Silver)</a></h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.3"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i5</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>8&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel® HD
                                                                                        Graphics 6000</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $849.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/7/7-medium.jpg"
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
                                                                                    href="product.html">Dell
                                                                                    Inspiron 5378-2063 (Gray)</a>
                                                                            </h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.3"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i3-7100U</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>4&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span class="uk-text-muted">HDD
                                                                                        Capacity:
                                                                                    </span><span>1&nbsp;TB</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices"><del
                                                                                    class="uk-text-meta">$599.00</del>
                                                                                <div class="tm-product-card-price">
                                                                                    $579.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <div class="tm-product-card-labels">
                                                                                    <span
                                                                                        class="uk-label uk-label-success">new</span>
                                                                                </div>
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <img src="images/products/8/8-medium.jpg"
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
                                                                                    720-13IKB 80X60059RK
                                                                                    (Silver)</a></h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.3"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i5-7200U</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>8&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel® HD
                                                                                        Graphics 620</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="tm-product-card-price">
                                                                                    $1099.00</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div><button
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
                                                                                class="tm-media-box"
                                                                                href="product.html">
                                                                                <figure class="tm-media-box-wrap">
                                                                                    <span class="uk-text-muted"
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
                                                                                    href="product.html">Lenovo
                                                                                    ThinkPad X380 Yoga 20LH000MUS
                                                                                    (Black)</a></h3>
                                                                            <ul
                                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                                <li><span
                                                                                        class="uk-text-muted">Diagonal
                                                                                        display:
                                                                                    </span><span>13.3"</span></li>
                                                                                <li><span class="uk-text-muted">CPU:
                                                                                    </span><span>Intel®&nbsp;Core™
                                                                                        i7 8550U</span></li>
                                                                                <li><span class="uk-text-muted">RAM:
                                                                                    </span><span>4&nbsp;GB</span>
                                                                                </li>
                                                                                <li><span
                                                                                        class="uk-text-muted">Video
                                                                                        Card: </span><span>Intel®
                                                                                        UHD Graphics 620</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tm-product-card-shop">
                                                                            <div class="tm-product-card-prices">
                                                                                <div class="uk-text-muted">Product
                                                                                    not available</div>
                                                                            </div>
                                                                            <div class="tm-product-card-add">
                                                                                <div
                                                                                    class="uk-text-meta tm-product-card-actions">
                                                                                    <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                        title="Add to favorites"><span
                                                                                            uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to
                                                                                            favorites</span></a><a
                                                                                        class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                        title="Add to compare"><span
                                                                                            uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                            class="tm-product-card-action-text">Add
                                                                                            to compare</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section>
                                                        <div class="uk-grid-small uk-grid-divider" uk-grid>
                                                            <div
                                                                class="uk-width-1-1 uk-width-1-5@s uk-text-center tm-reviews-column">
                                                                <div class="uk-text-meta uk-text-uppercase">average
                                                                    rating</div>
                                                                <div class="uk-heading-primary">5.0</div>
                                                                <div class="uk-flex uk-flex-center">
                                                                    <ul class="uk-iconnav tm-rating">
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
                                                                </div>
                                                                <div class="uk-margin-small-top uk-text-meta">based
                                                                    on 2 reviews</div><button
                                                                    class="uk-button uk-button-primary uk-margin-top uk-width-1-1"
                                                                    uk-toggle="target: #review">write a
                                                                    review</button>
                                                            </div>
                                                            <div class="uk-width-1-1 uk-width-expand@s">
                                                                <div class="uk-grid-small uk-grid-divider uk-child-width-1-1"
                                                                    uk-grid>
                                                                    <article>
                                                                        <section
                                                                            class="uk-grid-small uk-child-width-1-1"
                                                                            uk-grid>
                                                                            <header>
                                                                                <div class="uk-h4 uk-margin-remove">
                                                                                    Thomas Bruns</div><time
                                                                                    class="uk-text-meta">May 21,
                                                                                    2018</time>
                                                                            </header>
                                                                            <div>
                                                                                <ul
                                                                                    class="uk-iconnav uk-margin-bottom tm-rating">
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                </ul>
                                                                                <div>
                                                                                    <p>Lorem ipsum dolor sit amet,
                                                                                        consetetur sadipscing elitr,
                                                                                        sed diam nonumy eirmod
                                                                                        tempor invidunt ut labore et
                                                                                        dolore magna aliquyam erat,
                                                                                        sed diam voluptua. At vero
                                                                                        eos et accusam et justo duo
                                                                                        dolores et ea rebum. Stet
                                                                                        clita kasd gubergren, no sea
                                                                                        takimata sanctus est Lorem
                                                                                        ipsum dolor sit amet.</p>
                                                                                </div>
                                                                                <div class="uk-grid-small uk-flex-middle uk-margin-top"
                                                                                    uk-grid>
                                                                                    <div class="uk-text-meta">Was
                                                                                        this review helpful to you?
                                                                                    </div>
                                                                                    <div><button
                                                                                            class="uk-button uk-button-default uk-button-small">Yes<span
                                                                                                class="uk-margin-xsmall-left uk-text-muted">14</span></button><button
                                                                                            class="uk-button uk-button-default uk-button-small uk-margin-small-left">No<span
                                                                                                class="uk-margin-xsmall-left uk-text-muted">2</span></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </article>
                                                                    <article>
                                                                        <section
                                                                            class="uk-grid-small uk-child-width-1-1"
                                                                            uk-grid>
                                                                            <header>
                                                                                <div class="uk-h4 uk-margin-remove">
                                                                                    George Clanton</div><time
                                                                                    class="uk-text-meta">May 24,
                                                                                    2018</time>
                                                                            </header>
                                                                            <div>
                                                                                <ul
                                                                                    class="uk-iconnav uk-margin-bottom tm-rating">
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                    <li><span
                                                                                            class="uk-text-warning"
                                                                                            uk-icon="star"></span>
                                                                                    </li>
                                                                                </ul>
                                                                                <div>
                                                                                    <p>Nunc interdum odio non erat
                                                                                        commodo lacinia. Aliquam nec
                                                                                        tincidunt lorem. Nunc quis
                                                                                        scelerisque nulla. Nam nulla
                                                                                        ante, luctus non dignissim
                                                                                        a, luctus quis sem.
                                                                                        Curabitur consectetur
                                                                                        porttitor leo. Donec
                                                                                        molestie nisl vitae lorem
                                                                                        porttitor vehicula. Etiam
                                                                                        feugiat a magna ac dapibus.
                                                                                        Donec vitae sollicitudin
                                                                                        lectus.</p>
                                                                                    <p>Sed mollis ex tincidunt
                                                                                        posuere blandit. Mauris sed
                                                                                        tellus dolor. Suspendisse
                                                                                        nibh mi, dignissim et
                                                                                        molestie id, dictum in arcu.
                                                                                        Duis sodales scelerisque
                                                                                        quam, quis lobortis felis
                                                                                        egestas eu. Sed nibh nulla,
                                                                                        aliquet ac leo vel, rutrum
                                                                                        dignissim metus. Sed non
                                                                                        rhoncus ex. Curabitur
                                                                                        accumsan porta lacus non
                                                                                        viverra. Etiam feugiat
                                                                                        sapien ut purus luctus, eu
                                                                                        porttitor neque volutpat.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="uk-grid-small uk-flex-middle uk-margin-top"
                                                                                    uk-grid>
                                                                                    <div class="uk-text-meta">Was
                                                                                        this review helpful to you?
                                                                                    </div>
                                                                                    <div><button
                                                                                            class="uk-button uk-button-default uk-button-small">Yes<span
                                                                                                class="uk-margin-xsmall-left uk-text-muted">5</span></button><button
                                                                                            class="uk-button uk-button-default uk-button-small uk-margin-small-left">No<span
                                                                                                class="uk-margin-xsmall-left uk-text-muted">0</span></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section>
                                                        <ul class="uk-list-divider uk-list-large"
                                                            uk-accordion="multiple: true">
                                                            <li><a class="uk-accordion-title" href="#">Lorem ipsum
                                                                    dolor sit amet, consectetur adipiscing elit?</a>
                                                                <div class="uk-accordion-content">Vivamus imperdiet
                                                                    venenatis est. Phasellus vitae mauris imperdiet,
                                                                    condimentum eros vel, ullamcorper turpis.
                                                                    Maecenas sed libero quis orci egestas vehicula
                                                                    fermentum id diam.</div>
                                                            </li>
                                                            <li><a class="uk-accordion-title" href="#">Nullam massa
                                                                    sem, mollis ut luctus at, tincidunt a lorem?</a>
                                                                <div class="uk-accordion-content">Aliquam sed dictum
                                                                    elit, quis consequat metus. Proin in mauris
                                                                    finibus urna lacinia laoreet sed id orci.</div>
                                                            </li>
                                                            <li><a class="uk-accordion-title" href="#">Aliquam
                                                                    pretium diam et ullamcorper malesuada?</a>
                                                                <div class="uk-accordion-content">Praesent feugiat
                                                                    lectus faucibus tellus congue pharetra. In
                                                                    viverra vehicula pellentesque. Etiam consectetur
                                                                    ultricies magna at bibendum.</div>
                                                            </li>
                                                            <li><a class="uk-accordion-title" href="#">Nulla
                                                                    fringilla sollicitudin mauris eu volutpat?</a>
                                                                <div class="uk-accordion-content">Mauris quis neque
                                                                    nec lectus aliquet malesuada. Nunc ullamcorper
                                                                    purus id gravida aliquam. Integer eget blandit
                                                                    urna.</div>
                                                            </li>
                                                            <li><a class="uk-accordion-title" href="#">Nam luctus
                                                                    velit ante, id pulvinar nisl gravida eget?</a>
                                                                <div class="uk-accordion-content">Vestibulum gravida
                                                                    nisi tempor malesuada iaculis. Phasellus
                                                                    finibus, nisl quis pellentesque scelerisque,
                                                                    erat erat mollis massa, eu semper diam eros id
                                                                    risus. Cras vitae nisi porta.</div>
                                                            </li>
                                                        </ul>
                                                    </section>
                                                </div>
                                            </div> --}}
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
    
