<?php $__env->startSection('settings'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('s-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setting-custom'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
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

            
            <input type="hidden" name="url" id="url" value="<?php echo e(url('/')); ?>">

            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="add-new-page  bg-white p-0 m-b-20">

                                <nav>
                                    <div class="nav m-b-20 setting-tab" id="nav-tab" role="tablist">

                                        <a class="nav-item nav-link" id="general-settings"
                                           href="<?php echo e(route('setting-general')); ?>"><?php echo e(__('general_settings')); ?></a>
                                        <a class="nav-item nav-link" id="contact-settings"
                                           href="<?php echo e(route('setting-company')); ?>"><?php echo e(__('company_informations')); ?></a>
                                        <a class="nav-item nav-link" id="mail-settings"
                                           href="<?php echo e(route('setting-email')); ?>"><?php echo e(__('email_settings')); ?></a>
                                        <!--<a class="nav-item nav-link" id="storage-settings"
                                           href="<?php echo e(route('setting-storage')); ?>"><?php echo e(__('storage_settings')); ?></a>-->
                                        <a class="nav-item nav-link" id="seo-settings"
                                           href="<?php echo e(route('setting-seo')); ?>"><?php echo e(__('seo_settings')); ?></a>
                                       <!-- <a class="nav-item nav-link" id="recaptcha-settings"
                                           href="<?php echo e(route('setting-recaptcha')); ?>"><?php echo e(__('recaptcha_settings')); ?></a>-->
                                        <a class="nav-item nav-link" id="setting-url" href="<?php echo e(route('settings-url')); ?>"
                                           role="tab"><?php echo e(__('url_settings')); ?></a>

                                        <!--<a class="nav-item nav-link" id="setting-ffmpeg"
                                           href="<?php echo e(route('settings-ffmpeg')); ?>" role="tab"><?php echo e(__('ffmpeg_settings')); ?></a>-->

                                        <a class="nav-item nav-link active" id="setting-custom"
                                           href="<?php echo e(route('setting-custom-header-footer')); ?>"><?php echo e(__('custom_header_footer')); ?></a>
                                        <!--<a class="nav-item nav-link" id="cron-information"
                                           href="<?php echo e(route('cron-information')); ?>"><?php echo e(__('cron_information')); ?></a>-->
                                        <!--<a class="nav-item nav-link" id="preference-control"
                                           href="<?php echo e(route('preferene-control')); ?>"><?php echo e(__('preference_setting')); ?></a>-->
                                        <!--<a class="nav-item nav-link" id="setting-social-login"
                                           href="<?php echo e(route('setting-social-login')); ?>"><?php echo e(__('social_login_settings')); ?></a>-->   
                                        <!--<a class="nav-item nav-link active" id="update-database"
                                           href="<?php echo e(route('update-database')); ?>"><?php echo e(__('')); ?></a>-->
                                    </div>
                                </nav>

                            </div>
                        </div>
						<div class="col-md-9">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- single tab content start -->
                                    <div class="tab-pane fade show active" id="recaptcha_settings" role="tabpanel">
                                        <?php echo Form::open(['route' => 'update-settings', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'update-settings']); ?>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="predefined_header"
                                                       class="col-form-label"><?php echo e(__('predefined_header')); ?></label>
                                                <textarea name="predefined_header" id="predefined_header"
                                                          class="form-control"><?php echo e(base64_decode(settingHelper('predefined_header'))); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="custom_header_style"
                                                       class="col-form-label"><?php echo e(__('custom_css')); ?></label>
                                                <textarea name="custom_header_style" id="custom_header_style"
                                                          class="form-control"><?php echo e(base64_decode(settingHelper('custom_header_style'))); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="custom_footer_js"
                                                       class="col-form-label"><?php echo e(__('custom_js')); ?></label>
                                                <textarea name="custom_footer_js" id="custom_footer_js"
                                                          class="form-control"><?php echo e(base64_decode(settingHelper('custom_footer_js'))); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 m-t-20">
                                                <div class="form-group form-float form-group-sm text-right">
                                                    <button type="submit" name="status"
                                                            class="btn btn-primary pull-right"><i
                                                            class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_changes')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- single tab content end -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  tab end -->
                </div>
            </div>
            <!-- Main Content Section End -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Setting/Providers/../Resources/views/custom_setting.blade.php ENDPATH**/ ?>