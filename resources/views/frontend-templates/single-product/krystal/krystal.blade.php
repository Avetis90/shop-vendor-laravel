@extends('layouts.frontend.krystal')
{{--
{{dd($single_product_details)}}
--}}
@section('content')

    <!-- MAIN -->
    <main class="site-main">

        <div class="container">
            <div class="product-content-single">
                <div class="row">
                    <div class="col-md-4 col-sm-12 padding-right">
                        <div class="product-media">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom"
                                     data-zoom-image="{{asset($single_product_details['post_image_url'])}}"
                                     src="{{asset($single_product_details['post_image_url'])}}" alt="">
                                <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            @if(count($single_product_details['_product_related_images_url']->product_gallery_images)>0)
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4"
                                         data-nav="true"
                                         data-autoplay="false" data-dots="false" data-loop="true" data-margin="10"
                                         data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                        @foreach($single_product_details['_product_related_images_url']->product_gallery_images as $img)
                                            <a href="#" data-image="{{asset($img->url)}}"
                                               data-zoom-image="{{asset($img->url)}}">
                                                <img src="{{asset($img->url)}}"
                                                     data-large-image="images/detail/thick-box-1.jpg"
                                                     alt="i1">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="product-info-main">
                            <div class="product-name">{{ $single_product_details['post_title'] }}</div>
                            <div class="product-infomation">
                                {!! html_entity_decode($single_product_details['post_content']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-info-price">
                            <div class="product-info-stock-sku">
                                <div class="stock available">
                                    <span class="label-stock">Availability: </span>
                                    <?php if ($single_product_details['post_stock_availability'] === 'in_stock') {
                                        echo 'In Stock';
                                    } else {
                                        echo 'Not Available';
                                    } ?>
                                </div>
                            </div>

                            <span class="price">
                                    <ins>{{$single_product_details['post_regular_price']}}</ins>
                                </span>
                            <div class="quantity">
                                <h6 class="quantity-title">Quantity:</h6>
                                <div class="buttons-added">
                                    <input type="text" value="{{$single_product_details['post_stock_qty']}}" title="Qty"
                                           class="input-text qty text" size="1">
                                    <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="single-add-to-cart">

                                <a href="" class="btn-add-to-cart add-to-cart-bg"
                                   data-id="{{ $single_product_details['id'] }}">Add to cart</a>
                                <a href="" class="compare product-compare" data-id="{{ $single_product_details['id'] }}"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                <a href="" class="wishlist product-wishlist" data-id="{{ $single_product_details['id'] }}"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-details-product">
                <ul class="box-tab nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                    <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>

                </ul>
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <div class="box-content">
                            <p>  {!!  html_entity_decode($single_product_details['post_content']) !!}</p>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <div class="box-content">
                            @if(count($attr_lists)>0)
                                @foreach($attr_lists as $list)

                                    <p>{{$list['attr_name']}}: {{$list['attr_values']}}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div id="tab-3" class="tab-panel">
                        <div class="box-content">
                            @if(count($comments_details) > 0)
                                <p class="meta">
                                    <span class="comment-date">{{ Carbon\Carbon::parse(  $comment->created_at )->format('F d, Y') }}</span>
                                    &nbsp; - <span
                                            class="comment-user-role"><strong>{{ trans('frontend.by_label') }} {{ $comment->display_name }}</strong></span>
                                </p>
                                <hr>
                                <div class="description">
                                    <p>{{ $comment->content }}</p>
                                </div>
                            @else
                                <p>There is no comment</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- end MAIN -->
    <!-- FOOTER -->

@endsection