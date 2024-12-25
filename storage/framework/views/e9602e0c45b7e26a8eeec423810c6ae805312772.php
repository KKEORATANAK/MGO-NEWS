<?php $__env->startSection('author-preference'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="author-section">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('site.pages.author.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <form action="<?php echo e(route('site.author.preference.update')); ?>" method="post" class="radio-form author-form-content">
                        <?php echo csrf_field(); ?>
                        <h3><?php echo e(__('show_email_on_profile_page')); ?></h3>
                        <div class="row mb-5">
                            <div class="col-6 col-md-4">
                                <input type="radio" name="email_show" id="yes" value="1" <?php echo e(@$preferences['email_show'] == 1? 'checked':""); ?>>
                                <label for="yes"><?php echo e(__('yes')); ?></label>
                            </div>
                            <div class="col-6 col-md-4">
                                <input type="radio" name="email_show" id="no" value="0" <?php echo e(@$preferences['email_show'] == 0? 'checked':""); ?>>
                                <label for="no"> <?php echo e(__('no')); ?></label>
                            </div>
                        </div>
                        <h3><?php echo e(__('show_author_on_post_detail')); ?></h3>
                        <div class="row mb-5">
                            <div class="col-6 col-md-4">
                                <input type="radio" name="author_show" id="enable" value="1" <?php echo e(@$preferences['author_show'] == 1? 'checked':""); ?>>
                                <label for="enable"><?php echo e(__('yes')); ?></label>
                            </div>
                            <div class="col-6 col-md-4">
                                <input type="radio" name="author_show" id="disable" value="0" <?php echo e(@$preferences['author_show'] == 0? 'checked':""); ?>>
                                <label for="disable"> <?php echo e(__('no')); ?></label>
                            </div>
                        </div>
                        <button class="btn btn-primary">Save Change</button>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.author-section -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/author/preference.blade.php ENDPATH**/ ?>