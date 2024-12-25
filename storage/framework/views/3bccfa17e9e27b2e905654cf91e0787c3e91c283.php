<?php $__env->startSection('notification-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('notification-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('send_custom_notification'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('notification_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => 'custom-notification-send', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>


            <div class="row clearfix">
                <div class="col-12">
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
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">

                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('send_custom_notification')); ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="headings" class="col-form-label"><?php echo e(__('headings')); ?>*</label>
                                <input id="headings" name="headings" value="<?php echo e(old('headings')); ?>" required type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message" class="col-form-label"><?php echo e(__('message')); ?>*</label>
                                <textarea id="message" name="message" class="form-control" required rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="url" class="col-form-label"><?php echo e(__('url')); ?>*</label>
                                <input id="url" name="url" value="<?php echo e(old('url')); ?>" required type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="icon_url" class="col-form-label"><?php echo e(__('icon_url')); ?>*</label>
                                <input id="icon_url" name="icon_url" value="<?php echo e(old('icon_url')); ?>" required type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="image_url" class="col-form-label"><?php echo e(__('image_url')); ?>*</label>
                                <input id="image_url" name="image_url" value="<?php echo e(old('image_url')); ?>" required
                                       type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="fa fa-paper-plane"
                                            aria-hidden="true"></i> <?php echo e(__('send_notification')); ?></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php echo e(Form::close()); ?>

        <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Notification/Providers/../Resources/views/send_custom_notification.blade.php ENDPATH**/ ?>