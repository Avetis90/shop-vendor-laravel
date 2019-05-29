<?php $__env->startSection('content'); ?>
    <div class="customer-login">
        <div class="container">
            <?php echo $__env->make('pages-message.notify-msg-error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('pages-message.form-submit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="col-sm-6 col-md-offset-3 mt-5">
                    <h5 class="title-login">Log in to your account</h5>
                    <p class="p-title-login">Wellcome to your account.</p>
                    <form class="login" method="post" action="/user/login">
                        <?php echo csrf_field(); ?>
                        <p class="form-row form-row-wide">
                            <label>Username or Email Address:<span class="required"></span></label>
                            <input type="text" value="" name="login_username" placeholder="Type your username or email address" class="input-text">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Password:<span class="required"></span></label>
                            <input type="password" name="login_password" placeholder="************" class="input-text">
                        </p>
                        <ul class="inline-block">
                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Remember me</label></li>
                        </ul>
                        <a href="" class="forgot-password">Forgotten password?</a>
                        <p class="form-row">
                            <input type="submit" value="Login" name="Login" class="button-submit">
                        </p>
                    </form>
                </div>


        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>