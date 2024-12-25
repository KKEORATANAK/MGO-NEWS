<?php $__env->startSection('author-socials'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="author-section">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('site.pages.author.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <form class="author-form author-form-content" name="author-form" method="post" action="<?php echo e(route('site.author.socials.update')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('facebook_url')); ?></label>
                            <input type="text" class="form-control" name="facebook_url" value="<?php echo e(@$socials['facebook_url']); ?>"  placeholder="https://www.facebook.com">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('twitter_url')); ?></label>
                            <input type="text" class="form-control" name="twitter_url" value="<?php echo e(@$socials['twitter_url']); ?>" placeholder="https://www.twitter.com">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('instagram_url')); ?></label>
                            <input type="text" class="form-control" name="instagram_url" value="<?php echo e(@$socials['instagram_url']); ?>" placeholder="https://www.instagram.com">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('google_url')); ?></label>
                            <input type="text" class="form-control" name="google_url" value="<?php echo e(@$socials['google_url']); ?>" placeholder="https://myaccount.google.com/">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('pinterest_url')); ?></label>
                            <input type="text" class="form-control" name="pinterest_url" value="<?php echo e(@$socials['pinterest_url']); ?>" placeholder="https://www.pinterest.com">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('youtube_url')); ?></label>
                            <input type="text" class="form-control" name="youtube_url" value="<?php echo e(@$socials['youtube_url']); ?>" placeholder="https://www.youtube.com">
                        </div>
                        <div class="form-group text-left mb-0">
                            <label><?php echo e(__('linkedin_url')); ?></label>
                            <input type="text" class="form-control" name="linkedin_url" value="<?php echo e(@$socials['linkedin_url']); ?>" placeholder="https://www.linkedin.com">
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.author-section -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/author/social.blade.php ENDPATH**/ ?>