<?php $__env->startSection('content'); ?>

    <!-- MAIN -->
    <main class="site-main">

        <div class="container">
            <div class="product-content-single">
                <div class="row">
                    <div class="col-md-4 col-sm-12 padding-right">
                        <div class="product-media">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom"
                                     data-zoom-image="<?php echo e(asset($single_product_details['post_image_url'])); ?>"
                                     src="<?php echo e(asset($single_product_details['post_image_url'])); ?>" alt="">
                                <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <?php if(count($single_product_details['_product_related_images_url']->product_gallery_images)>0): ?>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4"
                                         data-nav="true"
                                         data-autoplay="false" data-dots="false" data-loop="true" data-margin="10"
                                         data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                        <?php $__currentLoopData = $single_product_details['_product_related_images_url']->product_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#" data-image="<?php echo e(asset($img->url)); ?>"
                                               data-zoom-image="<?php echo e(asset($img->url)); ?>">
                                                <img src="<?php echo e(asset($img->url)); ?>"
                                                     data-large-image="images/detail/thick-box-1.jpg"
                                                     alt="i1">
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="product-info-main">
                            <div class="product-name"><?php echo e($single_product_details['post_title']); ?></div>
                            <div class="product-infomation">
                                <?php echo html_entity_decode($single_product_details['post_content']); ?>

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
                                    <ins><?php echo e($single_product_details['post_regular_price']); ?></ins>
                                </span>
                            <div class="quantity">
                                <h6 class="quantity-title">Quantity:</h6>
                                <div class="buttons-added">
                                    <input type="text" value="<?php echo e($single_product_details['post_stock_qty']); ?>" title="Qty"
                                           class="input-text qty text" size="1">
                                    <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="single-add-to-cart">

                                <a href="" class="btn-add-to-cart add-to-cart-bg"
                                   data-id="<?php echo e($single_product_details['id']); ?>">Add to cart</a>
                                <a href="" class="compare product-compare" data-id="<?php echo e($single_product_details['id']); ?>"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                <a href="" class="wishlist product-wishlist" data-id="<?php echo e($single_product_details['id']); ?>"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
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
                            <p>  <?php echo html_entity_decode($single_product_details['post_content']); ?></p>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <div class="box-content">
                            <?php if(count($attr_lists)>0): ?>
                                <?php $__currentLoopData = $attr_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <p><?php echo e($list['attr_name']); ?>: <?php echo e($list['attr_values']); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-panel">
                        <div class="box-content">
                            <?php if(count($comments_details) > 0): ?>
                                <p class="meta">
                                    <span class="comment-date"><?php echo e(Carbon\Carbon::parse(  $comment->created_at )->format('F d, Y')); ?></span>
                                    &nbsp; - <span
                                            class="comment-user-role"><strong><?php echo e(trans('frontend.by_label')); ?> <?php echo e($comment->display_name); ?></strong></span>
                                </p>
                                <hr>
                                <div class="description">
                                    <p><?php echo e($comment->content); ?></p>
                                </div>
                            <?php else: ?>
                                <p>There is no comment</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- end MAIN -->
    <!-- FOOTER -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>