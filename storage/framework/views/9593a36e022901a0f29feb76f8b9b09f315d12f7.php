 <?php $__env->startSection('content'); ?>
    <div class="ragister-account text-center">
        <div class="container">
            <div class="account-content">
                <h1><?php echo e(__('reset_password')); ?></h1> 
                <form class="ragister-form" name="ragister-form" method="post" action="<?php echo e(route('reset-password', [$email, $resetCode])); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                <input class="form-control" id="password" value="<?php echo e(old('password')); ?>" name="password" data-parsley-minlength="4" type="password" placeholder="<?php echo e(__('password')); ?>" required />
            </div>
            <div class="form-group">
                <input class="form-control" id="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" name="password_confirmation" data-parsley-minlength="4" type="password" placeholder="<?php echo e(__('confirm_password')); ?>" required />
            </div>
                    <button type="submit"><?php echo e(__('change_password')); ?></button>
                </form>
                
            </div>
            
        </div>
        
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/auth/reset_password.blade.php ENDPATH**/ ?>