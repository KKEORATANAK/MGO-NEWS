<?php $__env->startSection('author-password'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="author-section">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('site.pages.author.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <form class="author-form author-form-content" name="author-form" method="post" action="<?php echo e(route('change-password-by-me')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('old_password')); ?></label>
                            <input type="password" name="old_password" class="form-control" required="required" placeholder="***********">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('new_password')); ?></label>
                            <input type="password" name="password" class="form-control" required="required" placeholder="***********">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('confirm_password')); ?></label>
                            <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="***********">
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
                    <?php echo e(Form::close()); ?>

                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.author-section -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/author/change_password.blade.php ENDPATH**/ ?>