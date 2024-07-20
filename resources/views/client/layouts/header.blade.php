<header>
    <div class="uk-navbar-container uk-light uk-visible@m tm-toolbar-container">
        <div class="uk-container" uk-navbar>
            <div class="uk-navbar-left">
                <nav>
                    <ul class="uk-navbar-nav">
                        <li><a href="#"><span class="uk-margin-xsmall-right"
                                    uk-icon="icon: receiver; ratio: .75;"></span><span class="tm-pseudo">8 800
                                    799 99 99</span></a></li>
                        <li><a href="contacts.html" onclick="return false"><span class="uk-margin-xsmall-right"
                                    uk-icon="icon: location; ratio: .75;"></span><span class="tm-pseudo">Store
                                    in St. Petersburg</span><span
                                    uk-icon="icon: triangle-down; ratio: .75;"></span></a>
                            <div class="uk-margin-remove" uk-drop="mode: click; pos: bottom-center;">
                                <div
                                    class="uk-card uk-card-default uk-card-small uk-box-shadow-xlarge uk-overflow-hidden uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom">
                                    <figure class="uk-card-media-top uk-height-small js-map"
                                        data-latitude="59.9356728" data-longitude="30.3258604" data-zoom="14">
                                    </figure>
                                    <div class="uk-card-body">
                                        <div class="uk-text-small">
                                            <div class="uk-text-bolder">Store Name</div>
                                            <div>St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28</div>
                                            <div>Daily 10:00–22:00</div>
                                        </div>
                                        <div class="uk-margin-small"><a
                                                class="uk-link-muted uk-text-uppercase tm-link-to-all uk-link-reset"
                                                href="contacts.html"><span>contacts</span><span
                                                    uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-navbar-item"><span class="uk-margin-xsmall-right"
                                    uk-icon="icon: clock; ratio: .75;"></span>Daily 10:00–22:00</div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="uk-navbar-right">
                <nav>
                    <ul class="uk-navbar-nav">
                        <li><a href="news.html">News</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="#">Payment</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="uk-navbar-container tm-navbar-container" uk-sticky="cls-active: tm-navbar-container-fixed">
        <div class="uk-container" uk-navbar>
            <div class="uk-navbar-left"><button class="uk-navbar-toggle uk-hidden@m"
                    uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button><a
                    class="uk-navbar-item uk-logo" href="{{ url('/') }}"><img src="{{asset('theme/dest/images/logo.svg')}}" width="90"
                        height="32" alt="Logo"></a>
                <nav class="uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li><a href="catalog.html">Catalog<span class="uk-margin-xsmall-left"
                                    uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container">
                                    <ul class="uk-navbar-dropdown-grid uk-child-width-1-5" uk-grid>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                    href="category.html"><img
                                                        class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                        src="images/catalog/computers.svg"
                                                        alt="Laptops &amp; Tablets" width="80" height="80">
                                                    <div class="uk-text-bolder">Laptops &amp; Tablets</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Laptops</a></li>
                                                    <li><a href="subcategory.html">Tablets</a></li>
                                                    <li><a href="subcategory.html">Peripherals</a></li>
                                                    <li><a href="subcategory.html">Keyboards</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                    href="category.html"><img
                                                        class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                        src="images/catalog/phones.svg"
                                                        alt="Phones &amp; Gadgets" width="80" height="80">
                                                    <div class="uk-text-bolder">Phones &amp; Gadgets</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Smartphones</a></li>
                                                    <li><a href="subcategory.html">Mobile Phones</a></li>
                                                    <li><a href="subcategory.html">Smart watches</a></li>
                                                    <li><a href="subcategory.html">Charging and batteries</a>
                                                    </li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                    href="category.html"><img
                                                        class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                        src="images/catalog/tv.svg" alt="TV &amp; Video"
                                                        width="80" height="80">
                                                    <div class="uk-text-bolder">TV &amp; Video</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">TV</a></li>
                                                    <li><a href="subcategory.html">Home Cinema</a></li>
                                                    <li><a href="subcategory.html">Satellite &amp; Cable TV</a>
                                                    </li>
                                                    <li><a href="subcategory.html">Projectors</a></li>
                                                    <li><a href="subcategory.html">DVD &amp; Blu-ray</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                    href="category.html"><img
                                                        class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                        src="images/catalog/games.svg"
                                                        alt="Games &amp; Entertainment" width="80" height="80">
                                                    <div class="uk-text-bolder">Games &amp; Entertainment</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Gaming consoles</a></li>
                                                    <li><a href="subcategory.html">Games</a></li>
                                                    <li><a href="subcategory.html">Software</a></li>
                                                    <li><a href="subcategory.html">Joysticks &amp; gamepads</a>
                                                    </li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-margin-top uk-margin-bottom"><a class="uk-link-reset"
                                                    href="category.html"><img
                                                        class="uk-display-block uk-margin-auto uk-margin-bottom"
                                                        src="images/catalog/photo.svg" alt="Photo" width="80"
                                                        height="80">
                                                    <div class="uk-text-bolder">Photo</div>
                                                </a>
                                                <ul class="uk-nav uk-nav-default">
                                                    <li><a href="subcategory.html">Cameras</a></li>
                                                    <li><a href="subcategory.html">Lenses</a></li>
                                                    <li><a href="subcategory.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="brands.html">Brands<span class="uk-margin-xsmall-left"
                                    uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                    <ul class="uk-grid-small uk-child-width-1-6" uk-grid>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Apple">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/apple.svg" alt="Apple"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Samsung">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/samsung.svg" alt="Samsung">
                                                    </figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Sony">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/sony.svg" alt="Sony"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Microsoft">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/microsoft.svg" alt="Microsoft">
                                                    </figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Intel">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/intel.svg" alt="Intel"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="HP">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/hp.svg" alt="HP"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="LG">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/lg.svg" alt="LG"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Lenovo">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/lenovo.svg" alt="Lenovo">
                                                    </figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="ASUS">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/asus.svg" alt="ASUS"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Acer">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/acer.svg" alt="Acer"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Dell">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/dell.svg" alt="Dell"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-4-3"><a
                                                    class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large tm-media-box"
                                                    href="#" title="Canon">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/canon.svg" alt="Canon"></figure>
                                                </a></div>
                                        </li>
                                    </ul>
                                    <div class="uk-text-center uk-margin"><a
                                            class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="brands.html"><span>See all brands</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages<span class="uk-margin-xsmall-left"
                                    uk-icon="icon: chevron-down; ratio: .75;"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical"
                                uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
                                    <ul class="uk-nav uk-nav-default uk-column-1-3">
                                        <li><a href="catalog.html">Catalog</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="subcategory.html">Subcategory</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="brands.html">Brands</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="account.html">Account</a></li>
                                        <li><a href="favorites.html">Favorites</a></li>
                                        <li><a href="personal.html">Personal</a></li>
                                        <li><a href="settings.html">Settings</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="article.html">Article</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="delivery.html">Delivery</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="{{route('admin.catalogues.index')}}">Website Admin</a></li>
                    </ul>
                </nav>
            </div>
            <div class="uk-navbar-right"><a class="uk-navbar-toggle tm-navbar-button" href="#"
                    uk-search-icon></a>
                <div class="uk-navbar-dropdown uk-padding-small uk-margin-remove"
                    uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                    <div class="uk-container">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <form class="uk-search uk-search-navbar uk-width-1-1"><input
                                        class="uk-search-input" type="search" placeholder="Search…" autofocus>
                                </form>
                            </div>
                            <div class="uk-width-auto"><a class="uk-navbar-dropdown-close" href="#"
                                    uk-close></a></div>
                        </div>
                    </div>
                </div><a class="uk-navbar-item uk-link-muted uk-visible@m tm-navbar-button"
                    href="compare.html"><span uk-icon="copy"></span><span class="uk-badge">3</span></a><a
                    class="uk-navbar-item uk-link-muted tm-navbar-button" href="account.html"
                    uk-icon="user"></a>
                <div class="uk-padding-small uk-margin-remove"
                    uk-dropdown="pos: bottom-right; offset: -10; delay-hide: 200;" style="min-width: 150px;">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="account.html">Orders
                                <span>(2)</span></a></li>
                        <li><a href="favorites.html">Favorites
                                <span>(3)</span></a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="settings.html">Settings</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Log out</a></li>
                    </ul>
                </div><a class="uk-navbar-item uk-link-muted tm-navbar-button" href="cart.html"
                    uk-toggle="target: #cart-offcanvas" onclick="return false"><span uk-icon="cart"></span><span
                        class="uk-badge">2</span></a>
            </div>
        </div>
    </div>
</header>