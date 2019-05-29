<?php $__env->startSection('title',  trans('frontend.cat_post_label') .' < '. get_site_title() ); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="container new-container">
  <div id="blog-cat-content-main">  
  <?php if(isset($blogs_cat_post['breadcrumb_html'])){?>
  <div id="blog-category-breadcrumb">
    <?php echo $blogs_cat_post['breadcrumb_html']; ?>

  </div>
  <?php }?>

    <div class="row">
      <div class="col-md-9">
        <?php if(count($blogs_cat_post['posts']) > 0): ?>  
          <?php $__currentLoopData = $blogs_cat_post['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $total = get_comments_rating_details($row->id, 'blog');?>
          <div class="blog-content-elements-main">
            <div class="row">
              <div class="col-md-6">
                <div class="blog-media">
                  <?php if(get_blog_postmeta_data($row->id, 'featured_image')): ?>
                  <img class="img-responsive" src="<?php echo e(get_image_url(get_blog_postmeta_data($row->id, 'featured_image'))); ?>" alt="<?php echo e(basename(get_blog_postmeta_data($row->id, 'featured_image'))); ?>">
                  <?php else: ?>
                  <img class="img-responsive" src="<?php echo e(default_placeholder_img_src()); ?>"  alt=""> 
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="blog-text">
                  <p>
                    <span class="blog-date"><i class="fa fa-calendar"></i>&nbsp;<?php echo e(Carbon\Carbon::parse($row->created_at)->format('d F, Y')); ?></span> &nbsp;&nbsp;
                    <span class="blog-comments"> <i class="fa fa-comment"></i>&nbsp; <?php echo $total['total']; ?> <?php echo trans('frontend.comments_label'); ?></span>
                  </p>
                  <p class="blog-title"><?php echo $row->post_title; ?></p>
                  <p class="blog-description">
                    <?php echo get_limit_string(string_decode($row->post_content), get_blog_postmeta_data($row->id, 'allow_max_number_characters_at_frontend')); ?>

                  </p>
                  <div class="btn-read-more"><a class="btn btn-block btn-default" href="<?php echo e(route('blog-single-page', $row->post_slug)); ?>"><?php echo trans('frontend.read_more_label'); ?></a></div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <p><?php echo trans('frontend.no_post_blog_cat_yet_label'); ?></p>
        <?php endif; ?>
      </div>

      <div class="col-md-3">
        <?php echo $__env->make('includes.frontend.blog-categories-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('blog-categories-page-content'); ?>
        <div class="best-blog">
          <div class="content-title">
            <h2 class="text-center title-under"><?php echo trans('frontend.best_from_the_blog_title'); ?></h2>
          </div>
          <div class="best-blog-content">
            <div class="row">
              <?php if(count($advanced_data['best_items']) > 0): ?>  
                <?php $__currentLoopData = $advanced_data['best_items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-12 blog-box extra-padding">
                    <a href="<?php echo e(route('blog-single-page', $items['post_slug'])); ?>">
                      <?php if(!empty($items['blog_image'])): ?>  
                        <img class="img-responsive" src="<?php echo e(get_image_url($items['blog_image'])); ?>"  alt="<?php echo e(basename($items['blog_image'])); ?>">          
                      <?php else: ?>
                        <img class="img-responsive" src="<?php echo e(default_placeholder_img_src()); ?>"  alt="">       
                      <?php endif; ?>
                      <div class="blog-bottom-text">
                        <p class="blog-title"><?php echo $items['post_title']; ?></p>
                        <p><span class="blog-date"><i class="fa fa-calendar"></i>&nbsp; <?php echo e(Carbon\Carbon::parse($items['created_at'])->format('d F, Y')); ?></span>&nbsp;&nbsp;<span class="blog-comments"> <i class="fa fa-comment"></i>&nbsp; <?php echo $items['comments_details']['total']; ?> <?php echo trans('frontend.comments_label'); ?></span></p>
                      </div>
                    </a>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <p><?php echo trans('frontend.no_blogs_data_label'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="products-pagination"><?php echo $blogs_cat_post['posts']->appends(Request::capture()->except('page'))->render(); ?></div>  
    </div>
  </div>  
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>