<?php $__env->startSection('notification-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('notification-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('notify_setting'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('notification_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => 'update-settings', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'onesignal-update']); ?>


            <input type="hidden" name="default_language" value="<?php echo e(settingHelper('default_language')); ?>">
            <input type="hidden" name="url" id="url" value="<?php echo e(url('')); ?>">

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
                                <h4 class="border-bottom"><?php echo e(__('notification_setting_details')); ?></h4>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="onesignal_api_key"
                                       class="col-form-label"><?php echo e(__('onesignal_api_key')); ?></label>
                                <input id="onesignal_api_key" value="<?php echo e(settingHelper('onesignal_api_key')); ?>"
                                       name="onesignal_api_key" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="onesignal_app_id"
                                       class="col-form-label"><?php echo e(__('onesignal_app_id')); ?></label>
                                <input id="onesignal_app_id" name="onesignal_app_id"
                                       value="<?php echo e(settingHelper('onesignal_app_id')); ?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row p-l-15 p-t-20">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="notification"><?php echo e(__('notification')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="notification_status" value="1"
                                           <?php if(settingHelper('notification_status')==1): ?> checked
                                           <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('enable')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="notification_status" value="0"
                                           <?php if(settingHelper('notification_status')==0): ?> checked
                                           <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('disable')); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="settings_language"><?php echo e(__('select_language_for_below_fields')); ?></label>
                                <select class="form-control" name="onesignal_language" id="onesignal_language">
                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php if(settingHelper('default_language')==$lang->code): ?> Selected
                                            <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="onesignal_action_message"
                                       class="col-form-label"><?php echo e(__('onesignal_action_message')); ?></label>
                                <input id="onesignal_action_message" name="onesignal_action_message"
                                       value="<?php echo e(settingHelper('onesignal_action_message')); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="onesignal_accept_button"
                                       class="col-form-label"><?php echo e(__('onesignal_accept_button')); ?></label>
                                <input id="onesignal_accept_button" name="onesignal_accept_button"
                                       value="<?php echo e(settingHelper('onesignal_accept_button')); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="onesignal_cancel_button"
                                       class="col-form-label"><?php echo e(__('onesignal_cancel_button')); ?></label>
                                <input id="onesignal_cancel_button" name="onesignal_cancel_button"
                                       value="<?php echo e(settingHelper('onesignal_cancel_button')); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="mdi mdi-plus"></i> <?php echo e(__('update')); ?></button>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Notification/Providers/../Resources/views/notification_setting.blade.php ENDPATH**/ ?>