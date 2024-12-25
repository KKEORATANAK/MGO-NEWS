<?php $__env->startSection('appearance'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appearance-aria-expanded'); ?>
    aria-expanded=true
<?php $__env->stopSection(); ?>
<?php $__env->startSection('theme_option'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appearance-show'); ?>
    show
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- page info start-->
            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
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
                        <!-- Main Content section start -->
                        <div class="col-12 col-lg-12">
                            <?php echo Form::open(['route'=>'update-theme-option','method' => 'post']); ?>

                                <div class="add-new-page  bg-white p-20 m-b-20">
                                    <div class="block-header">
                                        <h2><?php echo e(__('update_theme')); ?></h2>
                                    </div>
                                    <div class="row p-l-15">
                                        <div class="col-12 col-md-12">
                                            <div class="form-title">
                                                <label for="header_style"><?php echo e(__('header')); ?></label>
                                            </div>
                                        </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_1" value="header_1" <?php echo e((data_get($activeTheme, 'options.header_style') == "header_1"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_1.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_2" value="header_2" <?php echo e((data_get($activeTheme, 'options.header_style') == "header_2"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_2.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_3" value="header_3"  <?php echo e((data_get($activeTheme, 'options.header_style') == "header_3"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_3.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_4" value="header_4" <?php echo e((data_get($activeTheme, 'options.header_style') == "header_4"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_4.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_5" value="header_5" <?php echo e((data_get($activeTheme, 'options.header_style') == "header_5"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_5.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="header_style" id="header_style_6" value="header_6"  <?php echo e((data_get($activeTheme, 'options.header_style') == "header_6"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Header/Header_6.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>

                                    </div>
                                    <div class="row p-l-15">
                                            <div class="col-12 col-md-12">
                                                <div class="form-title">
                                                    <label for="footer_style"><?php echo e(__('footer')); ?></label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="footer_style" id="footer_style_1" value="footer_1" <?php echo e((data_get($activeTheme, 'options.footer_style') == "footer_1"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Footer/Footer_1.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="footer_style" id="footer_style_2" value="footer_2"  <?php echo e((data_get($activeTheme, 'options.footer_style') == "footer_2"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Footer/Footer_2.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="section_section_style">
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="footer_style" id="footer_style_3" value="footer_3" <?php echo e((data_get($activeTheme, 'options.footer_style') == "footer_3"? 'checked':'')); ?> class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                    <img src="<?php echo e(static_asset('default-image/Footer/Footer_3.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="page-title" class="col-form-label"><?php echo e(__('primary_color')); ?></label>
                                                    <input id="page-title" value="<?php echo e(data_get($activeTheme, 'options.primary_color')); ?>" name="primary_color" type="color" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="language" class="col-form-label"><?php echo e(__('font')); ?></label>
                                                    <select class="form-control" name="fonts" id="language">
                                                        <?php $__currentLoopData = \Config::get('site.fonts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$font): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($key); ?>" <?php if(data_get($activeTheme, 'options.fonts') == $key): ?> selected <?php endif; ?>>
                                                            <?php
                                                                $font = explode(',',$font);
                                                            ?> <?php echo e($font[0]); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="language" class="col-form-label"><?php echo e(__('default_mode')); ?></label>
                                                    <select class="form-control" name="mode" id="mode">
                                                        <?php $__currentLoopData = \Config::get('site.modes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$mode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($mode); ?>" <?php if(data_get($activeTheme, 'options.mode') == $mode): ?> selected <?php endif; ?>><?php echo e($key); ?> </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-12 m-t-20">
                                            <div class="form-group form-float form-group-sm text-right">
                                                <button type="submit" class="btn btn-primary pull-right"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update_theme')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>


                            <?php echo Form::open(['route' => 'update-settings', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'update-settings']); ?>

                                <div class="add-new-page  bg-white p-20 m-b-20">
                                    <div class="row p-l-15">
                                        <div class="col-sm-12">
                                            <div class="m-b-20">
                                                <span class=""><strong> <?php echo e(__('preloader_option')); ?></strong> </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-title">
                                                <label for="visibility"><?php echo e(__('status')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="preloader_option" id="visibility_show"
                                                       value="1"
                                                       <?php echo e(settingHelper('preloader_option') == 1? 'checked':""); ?> class="custom-control-input">
                                                <span class="custom-control-label"><?php echo e(__('enable')); ?></span>
                                            </label>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="preloader_option" id="visibility_hide"
                                                       value="0"
                                                       class="custom-control-input" <?php echo e(settingHelper('preloader_option') == 0? 'checked':""); ?>>
                                                <span class="custom-control-label"><?php echo e(__('disable')); ?></span>
                                            </label>
                                        </div>

                                        <div class="col-12 m-t-20">
                                            <div class="form-group form-float form-group-sm text-right">
                                                <button type="submit" class="btn btn-primary pull-right"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                            </div>
                        <!-- Main Content section end -->

                    </div>
                </div>
            </div>
        <!-- page info end-->
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Appearance/Providers/../Resources/views/theme_option.blade.php ENDPATH**/ ?>