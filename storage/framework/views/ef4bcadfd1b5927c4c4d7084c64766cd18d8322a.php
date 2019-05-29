<?php $__env->startSection('content'); ?>

    <main class="site-main product-list">

        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                        <div class="main-content">
                            <div class="toolbar-products">
                                <h4 class="title-product">Grid Category</h4>
                                <div class="toolbar-option">
                                    <div class="toolbar-sort">
                                        <select class="chosen-select sorter-options form-control ">
                                            <?php if($product_by_cat_id['sort_by'] == 'all'): ?>
                                                <option selected="selected" value="all"><?php echo e(trans('frontend.sort_filter_all_label')); ?></option>
                                            <?php else: ?>
                                                <option value="all"><?php echo e(trans('frontend.sort_filter_all_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'alpaz'): ?>
                                                <option selected="selected" value="alpaz"><?php echo e(trans('frontend.sort_filter_alpaz_label')); ?></option>
                                            <?php else: ?>
                                                <option value="alpaz"><?php echo e(trans('frontend.sort_filter_alpaz_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'alpza'): ?>
                                                <option selected="selected" value="alpza"><?php echo e(trans('frontend.sort_filter_alpza_label')); ?></option>
                                            <?php else: ?>
                                                <option value="alpza"><?php echo e(trans('frontend.sort_filter_alpza_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'low-high'): ?>
                                                <option selected="selected" value="low-high"><?php echo e(trans('frontend.sort_filter_low_high_label')); ?></option>
                                            <?php else: ?>
                                                <option value="low-high"><?php echo e(trans('frontend.sort_filter_low_high_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'high-low'): ?>
                                                <option selected="selected" value="high-low"><?php echo e(trans('frontend.sort_filter_high_low_label')); ?></option>
                                            <?php else: ?>
                                                <option value="high-low"><?php echo e(trans('frontend.sort_filter_high_low_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'old-new'): ?>
                                                <option selected="selected" value="old-new"><?php echo e(trans('frontend.sort_filter_old_new_label')); ?></option>
                                            <?php else: ?>
                                                <option value="old-new"><?php echo e(trans('frontend.sort_filter_old_new_label')); ?></option>
                                            <?php endif; ?>

                                            <?php if($product_by_cat_id['sort_by'] == 'new-old'): ?>
                                                <option selected="selected" value="new-old"><?php echo e(trans('frontend.sort_filter_new_old_label')); ?></option>
                                            <?php else: ?>
                                                <option value="new-old"><?php echo e(trans('frontend.sort_filter_new_old_label')); ?></option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="toolbar-per">
                                        <select class="chosen-select limiter-options form-control">
                                            <option selected="selected" value="6">20 per page</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="modes">
                                        <?php if($product_by_cat_id['selected_view'] == 'grid'): ?>
                                            <a href="<?php echo e($product_by_cat_id['action_url_grid_view']); ?>"
                                               class=" active modes-mode  mode-grid" title="Grid">
                                                <i class="flaticon-squares"></i>
                                                <span>Grid</span>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e($product_by_cat_id['action_url_grid_view']); ?>"
                                               class="modes-mode  mode-grid" title="Grid">
                                                <i class="flaticon-squares"></i>
                                                <span>Grid</span>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($product_by_cat_id['selected_view'] == 'list'): ?>
                                            <a href="<?php echo e($product_by_cat_id['action_url_list_view']); ?>" title="List"
                                               class="active modes-mode mode-list"><i
                                                        class="flaticon-interface"></i>
                                                <span>List</span>
                                            </a>
                                        <?php else: ?>
                                            <a href=" <?php echo e($product_by_cat_id['action_url_list_view']); ?> " title="List"
                                               class="modes-mode mode-list"><i
                                                        class="flaticon-interface"></i>
                                                <span>List</span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="products products-list <?php if ($product_by_cat_id['selected_view'] == 'grid') {
                                echo 'products-grid equal-container';
                            }?>" style="width: 100%">
                                <?php if($product_by_cat_id['selected_view'] == 'list'): ?>
                                    <?php $__currentLoopData = $product_by_cat_id['products']->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="product-items">
                                            <div class="product-image">
                                                <a href=""><img src="<?php echo e($products['image_url']); ?>"
                                                                alt="<?php echo $products['title']; ?>"></a>
                                                <a href="" class="quick-view">Quick View</a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-name">
                                                    <a href="">
                                                        <?php echo $products['title']; ?>

                                                    </a>
                                                </div>
                                                <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>
                                                <div class="product-infomation">
                                                    <?php echo html_entity_decode($products['content']); ?>

                                                </div>
                                            </div>
                                            <div class="product-info-price">
                                                <div class="product-info-stock-sku">
                                                    <div class="stock available">
                                                        <span class="label-stock">Avability:</span> <?php if ($products['stock_availability']) {
                                                            echo 'Available';
                                                        } else {
                                                            echo 'Not Available';
                                                        }?>
                                                    </div>
                                                </div>
                                                <span class="price">

                                            <del><?php echo e($products['price']); ?></del>
                                        </span>
                                                <div class="single-add-to-cart">
                                                    <a href="#" class="btn-add-to-cart add-to-cart-bg"
                                                       data-id="<?php echo e($products['id']); ?>">Add to cart</a>
                                                    <a href="" class="compare product-compare" data-id="<?php echo e($products['id']); ?>"><i
                                                                class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                    <a href="" class="wishlist product-wishlist" data-id="<?php echo e($products['id']); ?>"><i class="fa fa-heart-o"
                                                                                   aria-hidden="true"></i>Wishlist</a>
                                                </div>
                                            </div>
                                        </div>


                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                
                                <?php if($product_by_cat_id['selected_view'] == 'grid'): ?>
                                    <?php $__currentLoopData = $product_by_cat_id['products']->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="<?php echo e($products['image_url']); ?>"
                                                                        alt="<?php echo $products['title']; ?>"></a>
                                                    </div>
                                                    <a href="" class="quick-view">Quick View</a>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">
                                                            <?php echo $products['title']; ?>

                                                        </a>
                                                    </div>
                                                    <span class="price">
                                                        <del><?php echo e($products['price']); ?></del>
                                                    </span>
                                                    <span class="star-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span class="review">5 Review(s)</span>
                                                    </span>
                                                    <div class="single-add-to-cart">
                                                        <a href="#" class="btn-add-to-cart add-to-cart-bg"
                                                           data-id="<?php echo e($products['id']); ?>">Add to cart</a>
                                                        <a href="" class="compare product-compare" data-id="<?php echo e($products['id']); ?>"><i
                                                                    class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                        <a href="" class="wishlist product-wishlist" data-id="<?php echo e($products['id']); ?>"><i class="fa fa-heart-o"
                                                                                                                                       aria-hidden="true"></i>Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="pagination">

                                <?php echo e($product_by_cat_id['products']->links()); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                <div class="block-content">
                                    <form action="" method="get">
                                        <div class="filter-options-item filter-categori">
                                            <div class="filter-options-title">Categories</div>
                                            <div class="filter-options-content">

                                                <ul>
                                                    <?php if(count($productCategoriesTree) > 0): ?>
                                                        <?php $__currentLoopData = $productCategoriesTree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><label class="inline"><input type="checkbox">
                                                                    <a href="<?php echo e(route('categories-page', $data['slug'])); ?>"><?php echo $data['name']; ?>

                                                                    </a>
                                                                </label>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-options-item filter-brand">
                                            <div class="filter-options-title">Brand</div>
                                            <div class="filter-options-content">
                                                <ul>
                                                    <?php if(count($brands_data) > 0): ?>
                                                        <?php $__currentLoopData = $brands_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><label class="inline"><a
                                                                            href="<?php echo e(route('brands-single-page', $brand_name['slug'])); ?>"><img
                                                                                src="<?php echo e(get_image_url($brand_name['brand_logo_img_url'])); ?>"
                                                                                class="img-fluid"></a>
                                                                </label>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-options-item filter-price">
                                            <div class="filter-options-title">Price</div>
                                            <div class="filter-options-content">
                                                <div class="price_slider_wrapper">
                                                    <div data-label-reasult="Price:"
                                                         data-min="<?php echo e($product_by_cat_id['min_price']); ?>"
                                                         data-max="<?php echo e($product_by_cat_id['max_price']); ?>"
                                                         data-unit="<?php echo get_currency_symbol_by_code( get_frontend_selected_currency()); ?>"
                                                         class="slider-range-price "
                                                         data-value-min="<?php echo e($product_by_cat_id['min_price']); ?>"
                                                         data-value-max="<?php echo e($product_by_cat_id['max_price']); ?>">
                                                        <span class="text-right">Filter</span>
                                                    </div>
                                                    <input name="price_min" id="price_min"
                                                           value="<?php echo e($product_by_cat_id['min_price']); ?>" type="hidden">
                                                    <input name="price_max" id="price_max"
                                                           value="<?php echo e($product_by_cat_id['max_price']); ?>" type="hidden">
                                                    <div class="price_slider_amount">
                                                        <div class="price_label">
                                                            Price: <span class="from">
                                                            <?php echo e($product_by_cat_id['min_price']); ?>

                                                        </span>-<span class="to">
                                                            <?php echo e($product_by_cat_id['max_price']); ?>

                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-options-item filter-size">
                                            <div class="filter-options-title">Size</div>
                                            <div class="filter-options-content">
                                                <ul>
                                                    <?php if(count($sizes_list_data)>0): ?>
                                                        <?php $__currentLoopData = $sizes_list_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><label class="inline"><input type="checkbox"
                                                                                             name="selected_sizes"
                                                                                             value=" <?php echo e($item['name']); ?>"><span
                                                                            class="input"><?php echo e($item['name']); ?></span></label>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-options-item filter-color">
                                            <div class="filter-options-title">Color</div>
                                            <div class="filter-options-content" style="display: flex">
                                                <ul>

                                                    <?php if(count($colors_list_data)>0): ?>
                                                        <?php $__currentLoopData = $colors_list_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><label class="inline">
                                                                    <input type="checkbox" name="selected_colors"
                                                                           value="<?php echo e($item['name']); ?>"><span
                                                                            class="input"></span><?php echo e($item['name']); ?>

                                                                </label></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Filter</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>