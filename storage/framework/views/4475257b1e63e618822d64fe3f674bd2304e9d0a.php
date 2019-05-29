<!doctype html>
<html>
<head>

    <?php echo $__env->make('frontend-templates.header.krystal.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="wrapper">
    <form id="block-search-mobile" method="get" class="block-search-mobile">
        <div class="form-content">
            <div class="control">
                <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                <input type="text" name="search" placeholder="Search" class="input-subscribe">
                <button type="submit" class="btn search">
                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </form>

    <?php echo $__env->make('frontend-templates.header.krystal.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
</div>


<?php echo $__env->make('frontend-templates.footer.krystal.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>