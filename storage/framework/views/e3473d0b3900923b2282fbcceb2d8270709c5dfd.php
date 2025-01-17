 
<?php $__env->startSection('content'); ?>
    <div class="ragister-account text-center">
        <div class="container">
            <div class="account-content">
                <h1><?php echo e(__('login')); ?></h1>
                
                <form class="ragister-form" name="ragister-form" method="post" action="#">
                    <?php echo csrf_field(); ?>
                    <div class="form-group text-left mb-0">
                        <label><?php echo e(__('email')); ?></label>
                        <input name="email" type="email" class="form-control" required="required" placeholder="<?php echo e(__('input_email')); ?>">
                    </div>
                    <div class="form-group text-left mb-0">
                        <label><?php echo e(__('password')); ?></label>
                        <input name="password" type="password" class="form-control" required="required" placeholder="***********">
                    </div>
                    <?php if( settingHelper('captcha_visibility') == 1 ): ?>
                        <div class="col-lg-12 text-center mb-4">
                            <div class="row">
                              <?php echo NoCaptcha::renderJs(); ?>

                              <?php echo NoCaptcha::display(); ?>

                          </div>
                        </div>
                    <?php endif; ?>
                    <button type="submit"><?php echo e(__('login')); ?></button>
                    <div class="middle-content">
                        <p><?php echo e(__('dont_have_an_account')); ?> <a href="<?php echo e(route('site.register.form')); ?>"><?php echo e(__('sign_up')); ?></a></p> <a href="<?php echo e(route('forget-password')); ?>"><?php echo e(__('forgot_password')); ?></a>
                    </div>
                </form>
                <div class="widget-social">
                    <ul class="global-list">
                        <?php if(settingHelper('facebook_visibility') == 1): ?>
                            <li class="facebook login"><a href="<?php echo e(url('/login/facebook')); ?>" style="background:#056ED8"><span style="background:#0061C2"><i class="fa fa-facebook" aria-hidden="true"></i></span><?php echo e(__('login_with_facebook')); ?></a></li>  
                        <?php endif; ?>
                        <?php if(settingHelper('google_visibility') == 1): ?>    
                            <li class="google login"><a href="<?php echo e(url('/login/google')); ?>" style="background:#FF5733"><span style="background:#CD543A"><i class="fa fa-google" aria-hidden="true"></i></span><?php echo e(__('login_with_google')); ?></a></li>  
                        <?php endif; ?>
                    </ul>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if(defaultModeCheck() == 'sg-dark'): ?>
        <script type="text/javascript">
            jQuery(function($){
                $('.g-recaptcha').attr('data-theme', 'dark');
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/auth/login.blade.php ENDPATH**/ ?>