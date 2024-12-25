<?php $__env->startSection('ads-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ads-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ads'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ads_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('gallery::image-gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route'=>'store-ad','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

            <input type="hidden" id="images" value="<?php echo e($countImage); ?>">
            <input type="hidden" id="imageCount" value="1">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="add-new-header clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <div class="block-header">
                                        <h2><?php echo e(__('create_ad')); ?></h2>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('ads')); ?>" class="btn btn-primary btn-add-new btn-sm"><i class="fas fa-arrow-left"></i>
                                        <?php echo e(__('back_to_ads')); ?>

                                    </a>
                                </div>
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
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('ads_details')); ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ad_name" class="col-form-label"><?php echo e(__('ad_name')); ?>*</label>
                                <input id="ad_name" value="<?php echo e(old('ad_name')); ?>" name="ad_name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ad_size" class="col-form-label"><?php echo e(__('ad_size')); ?>*</label>
                                <input id="ad_size" name="ad_size" required value="<?php echo e(old('ad_size')); ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ad_type" class="col-form-label"><?php echo e(__('ad_type')); ?>*</label>
                                <select id="ad_type" name="ad_type" class="form-control" required>
                                    <option value=""> <?php echo e(__('select_option')); ?></option>
                                    <option value="code"> <?php echo e(__('code')); ?></option>
                                    <option value="image"> <?php echo e(__('image')); ?></option>
                                    <option value="text"> <?php echo e(__('text')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 d-none" id="div_ad_text">
                            <div class="form-group">
                                <label for="ad_text" class="col-form-label"><?php echo e(__('ad_text')); ?>*</label>
                                <textarea  name="ad_text" id="content" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 d-none" id="div_ad_code">
                            <div class="form-group">
                                <label for="ad_code" class="col-form-label"><?php echo e(__('ad_code')); ?>*</label>
                                <textarea  name="ad_code" class="form-control" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="d-none" id="div_ad_image">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="button" id="btn_image_modal" class="btn btn-primary btn-image-modal" data-id="1" data-toggle="modal" data-target=".image-modal-lg"><?php echo e(__('ad_image')); ?>*</button>
                                    <input id="image_id" name="ad_image_id" type="hidden" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?> " id="image_preview"  width="200" height="200" alt="image" class="img-responsive img-thumbnail">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ad_url" class="col-form-label"><?php echo e(__('ad_url')); ?></label>
                                    <input id="ad_url" name="ad_url"  value="<?php echo e(old('ad_url')); ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i class="mdi mdi-plus"></i> <?php echo e(__('create_ad')); ?></button>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Ads/Providers/../Resources/views/ads_create.blade.php ENDPATH**/ ?>