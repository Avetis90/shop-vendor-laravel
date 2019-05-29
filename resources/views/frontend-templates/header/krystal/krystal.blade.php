{{--{{dd($productCategoriesTree)}}--}}
<header class="site-header header-opt-1">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- hotline -->
            <ul class="nav-top-left">
                <li><a href="">Welcome to KryStal - Always free delivery</a></li>
            </ul><!-- hotline -->
            <!-- heder links -->
            <ul class="nav-top-right krystal-nav">
                <li><a href="">Newsletter</a></li>
                <li class="menu-item-has-children multi-language">
                    @if(count(get_frontend_selected_languages_data()) > 0)
                        @if(get_frontend_selected_languages_data()['lang_code'] == 'en')
                            <a href="" class="dropdown-toggle">
                                <img src="{{ asset('public/images/'. get_frontend_selected_languages_data()['lang_sample_img']) }}"
                                     alt="flag">
                                {!! get_frontend_selected_languages_data()['lang_name'] !!}
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        @else
                            <a href="" class="dropdown-toggle">
                                <img src="{{ asset('public/images/'. get_frontend_selected_languages_data()['lang_sample_img']) }}"
                                     alt="flag">
                                {!! get_frontend_selected_languages_data()['lang_name'] !!}
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        @endif
                    @endif

                    @if(count(get_available_languages_data_frontend()) > 0)
                        <ul class="submenu parent-megamenu">
                            @foreach(get_available_languages_data_frontend() as $key => $val)
                                @if($val['lang_code'] == 'en')
                                    <li class="switcher-option" data-lang_name="{{ $val['lang_code']}}">
                                        <a href="" class="flag"><img
                                                    src="{{ asset('/public/images/'.$val['lang_sample_img']) }}"
                                                    alt="flag">&nbsp;{!! ucwords($val['lang_name']) !!}
                                        </a>
                                    </li>
                                @else
                                    <li class="switcher-option" data-lang_name="{{ $val['lang_code']}}">
                                        <a href="" class="flag"><img src="{{ get_image_url($val['lang_sample_img']) }}"
                                                                     alt="flag">&nbsp;{!! ucwords($val['lang_name']) !!}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="menu-item-has-children">
                    @if(get_frontend_selected_currency())
                        <a href="#" class="dropdown-toggle">
                            <span>{!! get_currency_name_by_code( get_frontend_selected_currency() ) !!}</span>
                            @if(count(get_frontend_selected_currency_data()) >0)
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            @endif
                        </a>
                    @endif
                    @if(count(get_frontend_selected_currency_data()) >0)
                        <ul class="submenu parent-megamenu multy-currency">
                            @foreach(get_frontend_selected_currency_data() as $val)
                                <li class="switcher-option" data-currency_name="{{ $val }}">
                                    <a href="#" class="switcher-flag icon">{!! get_currency_name_by_code( $val ) !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                @if(Session::has('shopist_frontend_user_id'))
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="{{ route('user-account-page') }}">Your
                            Account</a>
                        <a href="" class="frontend-user-logout">Logout</a>
                    </li>

                @else
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="/user/login">Sign in</a>
                        <a href="/user/registration">Register</a></li>
                @endif
            </ul><!-- heder links -->
        </div>
    </div> <!-- header-top -->
    <!-- header-content -->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="/"><img src="{{ get_site_logo_image() }}" alt="logo"></a>
                    </strong><!-- logo -->
                </div>
                <div class="col-md-8 nav-mind">
                    <!-- block search -->
                    <div class="block-search">
                        <div class="block-content">
                            <div class="categori-search  ">
                                <select data-placeholder="All Categories" class="chosen-select categori-search-option">
                                    <option value="">All Categories</option>
                                    @if(count($productCategoriesTree) > 0)
                                        @foreach($productCategoriesTree as $cat)
                                            <optgroup label="- {{$cat['name']}}">
                                                @if(count($cat['children'])>0)
                                                    @foreach($cat['children'] as $child)
                                                        <option value="{{$child['slug']}}">
                                                            <a href="/product/categories/{{$child['slug']}}"></a>{{$child['name']}}
                                                        </option>
                                                    @endforeach

                                                @else
                                                @endif
                                            </optgroup>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-search">
                                <form action="{{ route('shop-page') }}" method="get">
                                    <div class="box-group">
                                        <input type="text" class="form-control"
                                               placeholder="Searh entire store here..." name="srch_term">
                                        <button class="btn btn-search" type="submit"><span>search</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- block search -->
                </div>
                <div class="col-md-2 nav-right">
                    <!-- block mini cart -->
                    <div class="block-minicart dropdown">

                        <a class="minicart show-mini-cart" href="#" data-id="1">
                                    <span class="counter qty">
                                        <span class="cart-icon"><i class="fa fa-shopping-bag"
                                                                   aria-hidden="true"></i></span>
                                        <span class="counter-number quantity">{!! Cart::count() !!}</span>
                                    </span>
                            <span class="counter-your-cart">
                                        <span class="counter-label">Your Cart:</span>
                                        <span class="counter-price">{!! price_html( get_product_price_html_by_filter(Cart::getTotal()) ) !!}</span>
                                    </span>
                        </a>
                        <div class="parent-megamenu">
                            <form>
                                <div class="minicart-content-wrapper">

                                    <div class="subtitle">
                                        You have <span>{!! Cart::count() !!}</span> item(s) in your cart
                                    </div>
                                    @if( Cart::count() >0 )
                                        <div class="minicart-items-wrapper">

                                            <ol class="minicart-items">
                                                @foreach(Cart::items() as $index => $items)
                                                    <li class="product-inner">
                                                        <div class="product-thumb style1">
                                                            <div class="thumb-inner" style="max-width : 100px">
                                                                <a href="#"><img src="{{asset($items->img_src)}}"
                                                                                 alt="c1"></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-innfo">
                                                            <div class="product-name"><a
                                                                        href="">&nbsp;{!! $items->name !!}</a></div>
                                                            <a href="{{ route('removed-item-from-cart', $index)}}"
                                                               class="remove"><i class="fa fa-times"
                                                                                 aria-hidden="true"></i></a>
                                                            <span class="price price-dark">
                                                                <ins>{!! $items->price !!}</ins>
                                                            </span>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ol>

                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total :</span>
                                            <span class="price">{!! price_html( get_product_price_html_by_filter(Cart::getTotal()) ) !!}</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-viewcart" href="{{ route('cart-page') }}">View cart</a>
                                            <a class="btn btn-checkout" href="{{ route('checkout-page') }}">Checkout</a>
                                        </div>
                                    @else
                                        <div class="empty-cart-msg">{!! trans('frontend.empty_cart_msg') !!}</div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div><!-- block mini cart -->
                    <a href="" class="hidden-md search-hidden"><span class="pe-7s-search"></span></a>
                    <a class="wishlist-minicart" href="{{ route('my-saved-items-page') }}"><i class="fa fa-heart-o"
                                                                                              aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div><!-- header-content -->
    <!-- header-menu-bar -->
    <div class="header-menu-bar header-sticky">
        <div class="header-menu-nav menu-style-2">
            <div class="container">
                <div class="header-menu-nav-inner">
                    <div id="box-vertical-megamenus" class="box-vertical-megamenus">
                        <h4 class="title active">
                                    <span class="btn-open-mobile home-page">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                            <span class="title-menu">All Departments</span>
                        </h4>
                        <div class="vertical-menu-content">
                            <span class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <ul class="vertical-menu-list">
                                @if(count($productCategoriesTree) > 0)
                                    @foreach($productCategoriesTree as $cat)
                                        @if(count($cat['children']) > 0)
                                            <li class="menu-item-has-children arrow item-megamenu">
                                                <a href="#" class="dropdown-toggle">{{$cat['name']}}</a>
                                                <span class="toggle-submenu hidden-md"></span>
                                                <div class="submenu parent-megamenu megamenu">
                                                    <div class="row">
                                                        <div class="submenu-banner submenu-banner-menu-1">
                                                            <div class="col-md-4">
                                                                <div class="dropdown-menu-info">
                                                                    <div class="dropdown-menu-content">
                                                                        <ul class="menu">
                                                                            @foreach($cat['children'] as $child)

                                                                                <li class="menu-item"><a
                                                                                            href="/product/categories/{{$child['slug']}}">{{$child['name']}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                        @else
                                            <li><a href="/product/categories/{{$cat['slug']}}">{{$cat['name']}}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="header-menu header-menu-resize">

                        <ul class="header-nav krystal-nav">
                            <li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>
                            <li>
                                <a href="{{ route('home-page') }}" class="dropdown-toggle">Home</a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>

                            @if(count($productCategoriesTree) > 0)
                                <li class="menu-item-has-children arrow">
                                    <a href="#" class="dropdown-toggle">Collection</a>
                                    <span class="toggle-submenu hidden-md"></span>
                                    <ul class="submenu parent-megamenu">
                                        @foreach($productCategoriesTree as $cat)
                                            <li class="menu-item">
                                                <a href="/product/categories/{{$cat['slug']}}">{{$cat['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('shop-page') }}" class="dropdown-toggle">Collection</a>
                                    <span class="toggle-submenu hidden-md"></span>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('shop-page') }}" class="dropdown-toggle">Shop</a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>
                            <li>
                                <a href="{{ route('checkout-page') }}" class="dropdown-toggle">Checkout</a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>
                            <li>
                                <a href="{{ route('cart-page') }}" class="dropdown-toggle">Cart</a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>
                            <li>
                                <a href="{{ route('blogs-page-content') }}" class="dropdown-toggle">Blog</a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>
                        </ul>
                    </div>
                    <span data-action="toggle-nav" class="menu-on-mobile hidden-md">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span>
                            </span>
                </div>
            </div>
        </div>
    </div>
    <div class="error-mes"></div>
</header><!-- end HEADER -->
<!-- MAIN -->
<div id="block-quick-view-popup " class="block-quick-view-popup quick-view-popup">
    <div class="quick-view-content" id="quick_view_modal">
        <a class="popup-btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="product-items">
            <div class="product-image">
                <a href=""><img src="" alt="p1"></a>
            </div>
            <div class="product-info">
                <div class="product-name"><a href=""></a></div>
                <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                <a href="" class="wishlist product-wishlist" data-id=""><i class="fa fa-heart-o" aria-hidden="true">Add to Wishlist</i></a>
                <div class="product-infomation">
                </div>
            </div>
            <div class="product-info-price">
                        <span class="price">
                            <ins></ins>{!! get_currency_symbol_by_code( get_frontend_selected_currency()) !!}
                            <del></del>{!! get_currency_symbol_by_code( get_frontend_selected_currency()) !!}
                        </span>
                <div class="quantity">
                    <h6 class="quantity-title">Quantity:</h6>
                    <div class="buttons-added">
                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <a href="" class="btn-add-to-cart add-to-cart-bg" data-id="">Add to cart</a>
            </div>
        </div>
    </div>
</div>