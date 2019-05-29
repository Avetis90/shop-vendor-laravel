<?php $__env->startSection('blog-categories-page-content'); ?>

<div class="blog-categories-accordian">
  <h2><?php echo e(trans('frontend.category_label')); ?> <span class="responsive-accordian"></span></h2>
  <?php if(count($categoriesTree) > 0): ?>
  <div class="panel-group category-accordian" id="accordian">
    <?php $__currentLoopData = $categoriesTree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('pages.common.blog-category-frontend-loop', $data, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php else: ?>
  <h5><?php echo e(trans('frontend.no_categories_yet')); ?></h5>
  <?php endif; ?>
</div>

<?php $__env->stopSection(); ?> 