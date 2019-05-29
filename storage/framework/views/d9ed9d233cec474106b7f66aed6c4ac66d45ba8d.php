<meta charset="UTF-8">
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['meta_keywords'])): ?>
    <meta name="keywords" content="<?php echo e($single_product_details['meta_keywords']); ?>">

<?php elseif( Request::is('blog/*') && !empty($blog_details_by_slug['meta_keywords'])): ?>
    <meta name="keywords" content="<?php echo e($blog_details_by_slug['meta_keywords']); ?>">

<?php elseif((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_keywords)): ?>
    <meta name="keywords" content="<?php echo e($store_seo_meta_keywords); ?>">

<?php elseif(!empty($seo_data) && $seo_data['meta_tag']['meta_keywords']): ?>
    <meta name="keywords" content="<?php echo e($seo_data['meta_tag']['meta_keywords']); ?>">
<?php endif; ?>

<?php if(!empty($seo_data) && $seo_data['meta_tag']['meta_description']): ?>
    <meta name="description" content="<?php echo e($seo_data['meta_tag']['meta_description']); ?>">
<?php endif; ?>

<?php if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['_product_seo_description'])): ?>
    <meta name="description" content="<?php echo e($single_product_details['_product_seo_description']); ?>">
<?php endif; ?>

<?php if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['post_slug'])): ?>
    <link rel="canonical" href="<?php echo e(route('details-page', $single_product_details['post_slug'])); ?>">
<?php endif; ?>

<?php if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_description'])): ?>
    <meta name="description" content="<?php echo e($blog_details_by_slug['blog_seo_description']); ?>">
<?php endif; ?>

<?php if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_url'])): ?>
    <link rel="canonical" href="<?php echo e(route('blog-single-page', $blog_details_by_slug['blog_seo_url'])); ?>">
<?php endif; ?>

<?php if((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_description)): ?>
    <meta name="description" content="<?php echo e($store_seo_meta_description); ?>">
<?php endif; ?>



<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/font-awesome.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/pe-icon-7-stroke.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/owl.carousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/chosen.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/jquery.bxslider.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/krystal/css/style.css')); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">
