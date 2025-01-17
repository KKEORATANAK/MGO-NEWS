<?php $__env->startSection('my-profile-edit'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="author-section">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('site.pages.author.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <div class="author-form-content">
                        <div class="author">
                                <?php if(Sentinel::getUser()->profile_image != null): ?>
                                    <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" data-original=" <?php echo e(static_asset(Sentinel::getUser()->profile_image)); ?>" id="profile-img" class="img-thumbnail" height="200"  >
                                <?php else: ?>
                                    <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" height="200" id="profile-img" class="img-thumbnail">
                                <?php endif; ?>

                        </div>
                        <form class="author-form" name="author-form" method="post" action="<?php echo e(route('site.profile.save')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group text-left mb-0">
                                <input type="file" id="profile_image" name="profile_image">
                                <label for="profile_image"><?php echo e(__('select_image')); ?></label>
                            </div>
                            <div class="form-group text-left mb-0">
                                <label><?php echo e(__('first_name')); ?></label>
                                <input type="text" class="form-control" required id="first_name" name="first_name" value="<?php echo e(Sentinel::getUser()->first_name); ?>" placeholder="admin">
                            </div>
                            <div class="form-group text-left mb-0">
                                <label><?php echo e(__('last_name')); ?></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo e(Sentinel::getUser()->last_name); ?>" required placeholder="admin">
                            </div>
                            <div class="form-group text-left mb-0">
                                <label><?php echo e(__('email')); ?></label>
                                <input type="email" id="email" disabled value="<?php echo e(Sentinel::getUser()->email); ?>" class="form-control" required placeholder="<?php echo e(__('input_email')); ?>">
                            </div>
                            <div class="form-group text-left mb-0">
                                <label><?php echo e(__('about_me')); ?></label>
                                <textarea class="form-control" name="about" placeholder="<?php echo e(__('input_message')); ?>"><?php echo e(Sentinel::getUser()->about_us); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
                        </form>
                    </div><!-- /.author-form-content -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.author-section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/author/edit_profile.blade.php ENDPATH**/ ?>