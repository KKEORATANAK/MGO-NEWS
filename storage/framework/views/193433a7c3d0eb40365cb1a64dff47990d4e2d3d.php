 <div class="footer footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget about-widget">
                            <h3><?php echo e(__('about_us')); ?></h3>
                            <p><?php echo e(settingHelper('about_us_description')); ?></p>
                            <ul class="global-list">
                                <li><i class="fa fa-home mr-2" aria-hidden="true"></i><?php echo e(settingHelper('address')); ?></li>
                                <li><i class="fa fa-volume-control-phone mr-2" aria-hidden="true"></i><?php echo e(settingHelper('phone')); ?></li>
                                <li><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> <a href="#"><?php echo e(settingHelper('email')); ?></a></li>
                            </ul>
                        </div><!-- /.footer-widget -->
                    </div>

                    <?php $__currentLoopData = $footerWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($widget['view'] == 'editor_picks'): ?>
                            <?php echo $__env->make('site.widgets.footer.editor_picks', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'categories'): ?>
                            <?php echo $__env->make('site.widgets.footer.categories', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            <div class="logo">
                <img src="<?php echo e(static_asset(settingHelper('logo'))); ?>" alt="Logo" class="img-fluid" width="20%">
            </div>
            <?php $__currentLoopData = $footerWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($widget['view'] == 'follow_us'): ?>
                    <div class="d-flex justify-content-center">
                        <div class="sg-socail">
                            <ul class="global-list d-flex">
                                <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($socialMedia->url); ?>" target="_blank"><i class="<?php echo e($socialMedia->icon); ?>" aria-hidden="true"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo e(settingHelper('copyright_text')); ?></span>
        </div><!-- /.container -->
    </div>
</div><!-- /.footer -->
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/layouts/footer/style_3.blade.php ENDPATH**/ ?>