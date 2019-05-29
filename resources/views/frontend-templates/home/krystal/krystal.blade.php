@extends('layouts.frontend.krystal')

@section('content')
    <main class="site-main">
        <div class="block-slide">
            <div class="container">
                <div class="main-slide slide-opt-3">
                    <div class="owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="true"
                         data-loop="true" data-margin="0"
                         data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                        @if(count(get_appearance_header_settings_data())>0)
                            @foreach(get_appearance_header_settings_data() as $image)
                                <div class="item-slide item-slide-1" style="background: url({{asset($image->img_url)}}">
                                    <div class="container">
                                        <div class="slide-desc slide-desc-1">
                                            <div class="p-primary">World Leader in Home & Kitchens Appliances</div>
                                            <p>Introducing Products for a Machine and Healthier Lifestyle.</p>
                                            <a href="" class="btn-shop-now">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="block-top-categori">
            <div class="container">
                <div class="title-of-section">Top Categories This Week</div>
                <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="true"
                     data-loop="true" data-margin="20"
                     data-responsive='{"0":{"items":1},"360":{"items":2},"500":{"items":3},"992":{"items":5}}'>
                    @foreach($advancedData['best_sales'] as $item)
                        <div class="block-top-categori-item">
                            <a href=""><img src="{{$item->image-url}}" alt="{{$item->content}}"></a>
                            <div class="block-top-categori-title">{{$item->content}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="block-promotion-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <div class="promotion-banner style-5">
                            <a href="" class="banner-img"><img
                                        src="{{asset('public/krystal/images/home3/banner3.jpg')}}" alt="banner3"></a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <div class="promotion-banner style-5">
                            <a href="" class="banner-img"><img
                                        src="{{asset('public/krystal/images/home3/banner4.jpg')}}" alt="banner4"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-feature-product">
            <div class="container">
                <div class="title-of-section">Featured Products</div>
                <div class="tab-product tab-product-fade-effect">
                    <ul class="box-tabs nav-tab">
                        <li class="active"><a data-animated="" data-toggle="tab" href="#tab-1">All Products </a></li>
                        <li><a data-animated="fadeInLeft" data-toggle="tab" href="#tab-2">Accessories</a></li>
                        <li><a data-animated="fadeInDownBig" data-toggle="tab" href="#tab-1">Fashion Me’s</a></li>
                        <li><a data-animated="zoomInUp" data-toggle="tab" href="#tab-2">Fashion Women’s</a></li>
                        <li><a data-animated="fadeInRight" data-toggle="tab" href="#tab-1">Electronics</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="0"
                                     data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>

                                    @foreach($advancedData['features_items'] as $item)
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="/product/details/{{$item->slug}}"><img
                                                                        src="{{$item->image_url}}"
                                                                        alt="{{$item->content}}"></a>
                                                        </div>
                                                        <a href="{{ route('details-page', $item->slug ) }}"
                                                           class="quick-view quick-view-popup" data-id="{{$item->id}}">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name">
                                                            <a href="/product/details/{{$item->slug}}">
                                                                {!! html_entity_decode($item->content) !!}
                                                            </a>
                                                        </div>
                                                        <span class="price price-dark">
                                                            <ins>${!! $item->price!!}</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare product-compare" data-id="{{ $item->id }}"><i
                                                                            class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart add-to-cart-bg"
                                                                   data-id="{{ $item->id }}">Add to cart</a>
                                                                <a href="" class="wishlist product-wishlist" data-id="{{ $item->id }}"><i
                                                                            class="fa fa-heart-o"
                                                                            aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-sale-product full-width block-background">
            <div class="container">
                <div class="title-of-section">Sale Products</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="0"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":4}}'>


                    @foreach($advancedData['todays_deal'] as $item)
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="/product/details/{{$item->slug}}"><img src="{{$item->image-url}}" alt="{{$item->content}}"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="" class="quick-view quick-view-popup" data-id="{{$item->id}}">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">{!!html_entity_decode($item->content)!!}</a>
                                    </div>
                                    <span class="price">
                                        <ins>${{$item->price}}</ins>
                                        <del>${{$item->price}}</del>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart add-to-cart-bg" data-id="{{ $item->id }}"><i
                                                    class="fa fa-shopping-bag"
                                                    aria-hidden="true"></i></a>
                                        <a href="" class="compare" data-id="{{ $item->id }}"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist product-wishlist" data-id="{{ $item->id }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">Recently Viewed Products</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="0"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>


                    @foreach($advancedData['latest_items'] as $item)
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="/product/details/{{$item->slug}}"><img src="{{$item->image_url}}" alt="{{$item->content}}"></a>
                                    </div>
                                    <a href="" class="quick-view quick-view-popup" data-id="{{$item->id}}">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">{!! html_entity_decode($item->content)!!}</a>
                                    </div>
                                    <span class="price price-dark">
                                        <ins>{{$item->price}}</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart add-to-cart-bg" data-id="{{ $item->id }}"><i
                                                    class="fa fa-shopping-bag"
                                                    aria-hidden="true"></i></a>
                                        <a href="" class="compare product-compare" data-id="{{ $item->id }}"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist product-wishlist" data-id="{{ $item->id }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection