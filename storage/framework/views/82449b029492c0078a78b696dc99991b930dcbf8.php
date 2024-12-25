<div class="footer footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <?php $__currentLoopData = $footerWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($widget['view'] == 'follow_us'): ?>
                        <div class="d-flex justify-content-lg-center">
                            <div class="sg-socail">
                                <ul class="global-list d-flex">
                                    <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($socialMedia->url); ?>" target="_blank"><i class="<?php echo e($socialMedia->icon); ?>" aria-hidden="true"></i></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row">

                    <?php $__currentLoopData = $footerWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($widget['view'] == 'popular_post'): ?>
                            <?php echo $__env->make('site.widgets.footer.popular_post', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'editor_picks'): ?>
                            <?php echo $__env->make('site.widgets.footer.editor_picks', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'newsletter'): ?>
                            <?php echo $__env->make('site.widgets.footer.newsletter', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            <span><?php echo e(settingHelper('copyright_text')); ?></span>
        </div><!-- /.container -->
    </div>
</div><!-- /.footer -->
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/layouts/footer/style_2.blade.php ENDPATH**/ ?>