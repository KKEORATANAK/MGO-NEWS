<?php $__env->startSection('comments-show'); ?>
    show
<?php $__env->stopSection(); ?>

<?php $__env->startSection('comments_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('comments-setting'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => 'update-comment-settings','method' => 'post']); ?>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="add-new-header clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <div class="block-header">
                                        <h2><?php echo e(__('comment_settings')); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php if(session('error')): ?>
                                <div id="error_m" class="alert alert-danger">
                                    <?php echo e(session('error')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(session('success')): ?>
                                <div id="success_m" class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="in_build" class="col-form-label"><?php echo e(__('in_build')); ?></label>
                                <select name="inbuild_comment" id="in_build" class="form-control">
                                    <option <?php if( settingHelper('inbuild_comment') =='1'): ?> selected
                                            <?php endif; ?> value="1"><?php echo e(__('enable')); ?></option>
                                    <option <?php if( settingHelper('inbuild_comment') !='1'): ?> selected
                                            <?php endif; ?> value="0"><?php echo e(__('disable')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="disqus_comment" class="col-form-label"><?php echo e(__('disqus_comment')); ?></label>
                                <select name="disqus_comment" id="disqus_comment" class="form-control">
                                    <option <?php if( settingHelper('disqus_comment') =='1'): ?> selected
                                            <?php endif; ?> value="1"><?php echo e(__('enable')); ?></option>
                                    <option <?php if( settingHelper('disqus_comment') !='1'): ?> selected
                                            <?php endif; ?> value="0"><?php echo e(__('disable')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="disqus_short_name" class="col-form-label"><?php echo e(__('disqus_short')); ?></label>
                                <input value="<?php echo e(settingHelper('disqus_short_name')); ?>" id="disqus_short_name"
                                       name="disqus_short_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="facebook_comment"
                                       class="col-form-label"><?php echo e(__('facebook_comment')); ?></label>
                                <select name="facebook_comment" id="facebook_comment" class="form-control">
                                    <option <?php if( settingHelper('facebook_comment') =='1'): ?> selected
                                            <?php endif; ?> value="1"><?php echo e(__('enable')); ?></option>
                                    <option <?php if( settingHelper('facebook_comment') !='1'): ?> selected
                                            <?php endif; ?> value="0"><?php echo e(__('disable')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="facebook_app_id" class="col-form-label"><?php echo e(__('facebook_app_id')); ?></label>
                                <input value="<?php echo e(settingHelper('facebook_app_id')); ?>" id="facebook_app_id"
                                       name="facebook_app_id" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_changes')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo Form::close(); ?>

        <!-- page info end-->
        </div>
    </div>
    <!-- page info end-->
    </div>
    </div>
    </div>
    


<?php $__env->stopSection(); ?>


<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/comment_settings.blade.php ENDPATH**/ ?>