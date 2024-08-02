@extends('client.layouts.master')



@section('content')

<section class="uk-section uk-section-small">
    <div class="uk-container">
        <h2 class="uk-text-center">Trending Items</h2>
        <div class="row mb-4 justify-content-center">
            <form action="{{ route('index') }}" method="GET" class="d-flex align-items-end">
                <div class="col col-lg-11">
                    <div class="form-group">
                        <label for="catalogue_id">Filter by Catalogue:</label>
                        <select name="catalogue_id" id="catalogue_id" class="form-control">
                            <option value="">All</option>
                            @foreach($catalogues as $catalogue)
                                <option value="{{ $catalogue->id }}" {{ request('catalogue_id') == $catalogue->id ? 'selected' : '' }}>
                                    {{ $catalogue->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col col-lg-1 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary ms-3">Filter</button>
                </div>
            </form>
        </div>
           
        <div class="uk-card uk-card-default tm-ignore-container">
            <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>
                @foreach($products as $product)
                    <article class="tm-product-card">
                        <div class="tm-product-card-media">
                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                    <div class="tm-product-card-labels"><span
                                            class="uk-label uk-label-warning">top selling</span><span
                                            class="uk-label uk-label-danger">trade-in</span></div>
                                    <figure class="tm-media-box-wrap"><img src="{{ $product->img_thumbnail }}"
                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                    </figure>
                                </a></div>
                        </div>
                        <div class="tm-product-card-body">
                            <div class="tm-product-card-info">
                                <div class="uk-text-meta uk-margin-xsmall-bottom">{{$product->catalogue->name}}</div>
                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                        href="product.html">{{$product->name}}</a></h3>
                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <li><span class="uk-text-muted">Diagonal display: </span><span>15.4"</span>
                                    </li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                            i7</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon Pro
                                            555</span></li>
                                </ul>
                            </div>
                            <div class="tm-product-card-shop">
                                <div class="tm-product-card-prices"><del class="uk-text-meta">{{$product->price_regular}}đ</del>
                                    <div class="tm-product-card-price">{{$product->price_sale}}đ</div>
                                </div>
                                <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions"><a
                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                            title="Add to favorites"><span
                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                class="tm-product-card-action-text">Add to
                                                favorites</span></a><a
                                            class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                            title="Add to compare"><span
                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                class="tm-product-card-action-text">Add to compare</span></a>
                                    </div><button
                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                            class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                            class="tm-product-card-add-button-text">add to cart</span></button>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                
            </div>
           
        </div>
        <div class="mt-4 uk-pagination uk-flex-center" >
            
            {{ $products->links() }}
        </div>
    </div>
    
</section>
</div>

@endsection
