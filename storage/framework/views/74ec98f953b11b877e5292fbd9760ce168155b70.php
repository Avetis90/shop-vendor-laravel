<?php $__env->startSection('content'); ?>
    <main class="site-main blog-single">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 float-none float-right">
                    <div class="main-content">
                        <div class="post-list post-items">
                            <?php $__currentLoopData = $blogs_all_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="/blog/<?php echo e($row['post_slug']); ?>"><img
                                                    src="<?php echo e(asset($row['featured_image'])); ?>" alt="post-image"></a>
                                        <span class="date"><?php echo e(Carbon\Carbon::parse($row['created_at'])->format('d F')); ?></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a
                                                    href="/blog/<?php echo e($row['post_slug']); ?>"><?php echo $row['post_title']; ?></a>
                                        </h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="news"><?php echo e($row['post_type']); ?></span>
                                            <span class="comment"><i class="fa fa-comment"
                                                                     aria-hidden="true"></i><?php echo e($row['comments_details']['total']); ?></span>
                                        </div>
                                        <div class="post-content">
                                            <p><?php echo html_entity_decode($row['post_content']); ?></p>
                                            <a href="/blog/<?php echo e($row['post_slug']); ?>" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar-left">
                        <div class="block-recent-post-blog">
                            <?php if(count($advanced_data['latest_items']) > 0): ?>
                                <div class="block-title">Recent Post</div>
                                <ul>
                                    <?php $__currentLoopData = $advanced_data['latest_items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="recent-post-item"><a
                                                    href="/blog/<?php echo e($row['post_slug']); ?>"><?php echo e($post['post_title']); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="block-categories-blog">
                            <div class="block-title">Blog categories</div>
                            <ul>
                                <?php if(count($categoriesTree) > 0): ?>
                                    <?php $__currentLoopData = $categoriesTree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="categories-item"><a href="/categories/blog/<?php echo e($cat['slug']); ?>"><?php echo e($cat['name']); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.krystal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>