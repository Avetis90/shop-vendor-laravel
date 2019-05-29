<?php $__env->startSection('content'); ?>
    <main class="site-main">
        <div class="block-slide">
            <div class="container">
                <div class="main-slide slide-opt-3">
                    <div class="owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="true"
                         data-loop="true" data-margin="0"
                         data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                        <?php if(count(get_appearance_header_settings_data())>0): ?>
                            <?php $__currentLoopData = get_appearance_header_settings_data(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item-slide item-slide-1" style="background: url(<?php echo e(asset($image->img_url)); ?>">
                                    <div class="container">
                                        <div class="slide-desc slide-desc-1">
                                            <div class="p-primary">World Leader in Home & Kitchens Appliances</div>
                                            <p>Introducing Products for a Machine and Healthier Lifestyle.</p>
                                            <a href="" class="btn-shop-now">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
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
                    <?php $__currentLoopData = $advancedData['best_sales']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="block-top-categori-item">
                            <a href=""><img src="<?php echo e($item->image-url); ?>" alt="<?php echo e($item->content); ?>"></a>
                            <div class="block-top-categori-title"><?php echo e($item->content); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="block-promotion-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <div class="promotion-banner style-5">
                            <a href="" class="banner-img"><img
                                        src="<?php echo e(asset('public/krystal/images/home3/banner3.jpg')); ?>" alt="banner3"></a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-5">
                        <div class="promotion-banner style-5">
                            <a href="" class="banner-img"><img
                                        src="<?php echo e(asset('public/krystal/images/home3/banner4.jpg')); ?>" alt="banner4"></a>
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

                                    <?php $__currentLoopData = $advancedData['features_items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="/product/details/<?php echo e($item->slug); ?>"><img
                                                                        src="<?php echo e($item->image_url); ?>"
                                                                        alt="<?php echo e($item->content); ?>"></a>
                                                        </div>
                                                        <a href="<?php echo e(route('details-page', $item->slug )); ?>"
                                                           class="quick-view quick-view-popup" data-id="<?php echo e($item->id); ?>">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name">
                                                            <a href="/product/details/<?php echo e($item->slug); ?>">
                                                                <?php echo html_entity_decode($item->content); ?>

                                                            </a>
                                                        </div>
                                                        <span class="price price-dark">
                                                            <ins>$<?php echo $item->price; ?></ins>
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
                                                                <a href="" class="compare product-compare" data-id="<?php echo e($item->id); ?>"><i
                                                                            class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart add-to-cart-bg"
                                                                   data-id="<?php echo e($item->id); ?>">Add to cart</a>
                                                                <a href="" class="wishlist product-wishlist" data-id="<?php echo e($item->id); ?>"><i
                                                                            class="fa fa-heart-o"
                                                                            aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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


                    <?php $__currentLoopData = $advancedData['todays_deal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="/product/details/<?php echo e($item->slug); ?>"><img src="<?php echo e($item->image-url); ?>" alt="<?php echo e($item->content); ?>"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="" class="quick-view quick-view-popup" data-id="<?php echo e($item->id); ?>">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href=""><?php echo html_entity_decode($item->content); ?></a>
                                    </div>
                                    <span class="price">
                                        <ins>$<?php echo e($item->price); ?></ins>
                                        <del>$<?php echo e($item->price); ?></del>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart add-to-cart-bg" data-id="<?php echo e($item->id); ?>"><i
                                                    class="fa fa-shopping-bag"
                                                    aria-hidden="true"></i></a>
                                        <a href="" class="compare" data-id="<?php echo e($item->id); ?>"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist product-wishlist" data-id="<?php echo e($item->id); ?>"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">Recently Viewed Products</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="0"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>


                    <?php $__currentLoopData = $advancedData['latest_items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="/product/details/<?php echo e($item->slug); ?>"><img src="<?php echo e($item->image_url); ?>" alt="<?php echo e($item->content); ?>"></a>
                                    </div>
                                    <a href="" class="quick-view quick-view-popup" data-id="<?php echo e($item->id); ?>">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href=""><?php echo html_entity_decode($item->content); ?></a>
                                    </div>
                                    <span class="price price-dark">
                                        <ins><?php echo e($item->price); ?></ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart add-to-cart-bg" data-id="<?php echo e($item->id); ?>"><i
                                                    class="fa fa-shopping-bag"
                                                    aria-hidden="true"></i></a>
                                        <a href="" class="compare product-compare" data-id="<?php echo e($item->id); ?>"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist product-wishlist" data-id="<?php echo e($item->id); ?>"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>