<?php $__env->startSection('settings'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('s-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('email_temp'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route'=>'update-email-template','method' => 'post']); ?>

            <?php echo csrf_field(); ?>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-header clearfix m-b-20">
                        <div class="row">
                            <div class="col-6">
                                <div class="block-header">
                                    <h2><?php echo e(__('email_template')); ?></h2>
                                </div>
                            </div>
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

                        </div>
                    </div>
                    <div class="row">
                        <!-- Main Content section start -->
                        <div class="col-12 col-lg-12">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('email_template')); ?></h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email_group" class="col-form-label"><?php echo e(__('email_group')); ?></label>
                                        <input id="email_group" name="email_group"
                                               value="<?php echo e($emailTemplate->email_group); ?>" type="text" required
                                               class="form-control" readonly data-toggle="tooltip" data-placement="top"
                                               title="You cannot update email group.">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="subject" class="col-form-label"><?php echo e(__('subject')); ?></label>
                                        <input id="subject" name="subject" value="<?php echo e($emailTemplate->subject); ?>"
                                               type="text" required
                                               class="form-control">
                                        <input name="template_id" value="<?php echo e($emailTemplate->id); ?>" type="hidden"
                                               required>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="role-slug"
                                                       class="col-form-label"><b><?php echo e(__('template_body')); ?></b></label>
                                                <textarea name="template_body" name="contact-text" id="post_content"
                                                          cols="40" rows="7">
                                                        <?php echo $emailTemplate->template_body; ?>

                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="role-slug"
                                                       class="col-form-label"><b><?php echo e(__('available_merge_fields')); ?></b></label>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('site_logo')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {SITE_LOGO}
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('username')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {USERNAME}
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('site_name')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {SITE_NAME}
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('site_url')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {SITE_URL}
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('user_email')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {USER_EMAIL}
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('password')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {PASSWORD}
                                                    </div>
                                                </div>
                                                <?php if($emailTemplate->email_group == 'activate_account'): ?>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <?php echo e(__('activate_url')); ?>

                                                        </div>
                                                        <div class="col-md-6">
                                                            {ACTIVATE_URL}
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if($emailTemplate->email_group == 'forgot_password'): ?>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <?php echo e(__('password_reset_url')); ?>

                                                        </div>
                                                        <div class="col-md-6">
                                                            {PASS_KEY_URL}
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($emailTemplate->email_group == 'reset_password'): ?>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <?php echo e(__('new_password')); ?>

                                                        </div>
                                                        <div class="col-md-6">
                                                            {NEW_PASSWORD}
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <?php echo e(__('signature')); ?>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {SIGNATURE}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 m-t-20">
                                        <div class="form-group form-float form-group-sm text-right">
                                            <button type="submit" name="btn" class="btn btn-primary pull-right"><i
                                                    class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update_template')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Content section end -->
                    </div>
                </div>
            </div>
        <?php echo e(Form::close()); ?>

        <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Setting/Providers/../Resources/views/edit_email_template.blade.php ENDPATH**/ ?>