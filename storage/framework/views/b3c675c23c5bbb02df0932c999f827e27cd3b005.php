<?php $__env->startSection('content'); ?>
    <main class="site-main shopping-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php if(Session::has('error-message')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('error-message')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-cart" method="post" action="<?php echo e(route('cart-page-post')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="table-cart">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="tb-image"></th>
                                    <th class="tb-product">Product Name</th>
                                    <th class="tb-price">Unit Price</th>
                                    <th class="tb-qty">Qty</th>
                                    <th class="tb-total">SubTotal</th>
                                    <th class="tb-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = Cart::items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="tb-image"><a
                                                    href="<?php echo e(route('details-page', get_product_slug($items->id))); ?>"
                                                    class="item-photo"><img src="<?php echo e(get_image_url($items->img_src)); ?>"
                                                                            alt="cart"></a></td>
                                        <td class="tb-product">
                                            <div class="product-name"><a
                                                        href="<?php echo e(route('details-page', get_product_slug($items->id))); ?>"><?php echo $items->name; ?></a>
                                            </div>
                                        </td>
                                        <td class="tb-price">
                                            <span class="price"><?php echo price_html( get_product_price_html_by_filter( $items->price ), get_frontend_selected_currency() ); ?></span>
                                        </td>
                                        <td class="tb-qty">
                                            <div class="quantity">
                                                <div class="buttons-added">
                                                    <input type="number" name="cart_quantity[<?php echo e($index); ?>]"
                                                           value="<?php echo e($items->quantity); ?>" title="Qty"
                                                           class="input-text qty text" min="1">
                                                    <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                    <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tb-total">
                                            <span class="price">
                                                <?php echo price_html(  get_product_price_html_by_filter(Cart::getRowPrice($items->quantity, $items->price)), get_frontend_selected_currency() ); ?></span>
                                        </td>
                                        <td class="tb-remove">
                                            <a href="<?php echo e(route('removed-item-from-cart', $index)); ?>"
                                               class="action-remove"><span><i class="fa fa-times"
                                                                              aria-hidden="true"></i></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="cart-actions">

                            <input type="submit" class="btn-clean" name="empty_cart" value="Clear Shopping Cart">

                            <input type="submit" class="btn-update" name="update_cart" value="Update Shopping Cart">

                        </div>
                    </form>
                </div>
                <div class="col-md-3 padding-left-5">
                    <div class="order-summary">
                        <h4 class="title-shopping-cart">Order Summary</h4>
                        <div class="checkout-element-content">
                            <span class="order-left">Subtotal:<span><?php echo price_html( get_product_price_html_by_filter(Cart::getTax()), get_frontend_selected_currency() ); ?></span></span>
                            <span class="order-left">Shipping:<span><?php echo trans('frontend.free'); ?></span></span>
                            <span class="order-left">Total:<span><?php echo price_html( get_product_price_html_by_filter(Cart::getCartTotal()), get_frontend_selected_currency() ); ?></span></span>

                            <a href="/checkout" class="btn btn-primary" name="checkout">
                                <span>Check Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>