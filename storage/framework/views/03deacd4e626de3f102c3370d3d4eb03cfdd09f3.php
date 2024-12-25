<?php $__env->startSection('sections'); ?>
    active
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
                                        <?php echo Form::open(['route'=>'update-theme-section','method' => 'post', 'id' => 'save-new-section']); ?>

                                            <div class="add-new-page  bg-white p-20 m-b-20">
                                                <div class="block-header">
                                                    <h2><?php echo e(__('update_section')); ?></h2>
                                                </div>

                                                
                                                        <input name="theme_section_id" value="<?php echo e($section->id); ?>" type="hidden" class="form-control" required>
                                                    
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="type"><?php echo e(__('type')); ?></label>
                                                        <select class="form-control" name="type" id="type" required>
                                                            
                                                                <option value="<?php echo e(\Modules\Appearance\Enums\ThemeSectionType::CATEGORY); ?>" <?php echo e($section->type == 1? 'selected':''); ?>><?php echo e(__('category')); ?></option>
                                                                <option value="<?php echo e(\Modules\Appearance\Enums\ThemeSectionType::VIDEO); ?>" <?php echo e($section->type == 2? 'selected':''); ?>><?php echo e(__('video')); ?></option>
                                                                <option value="<?php echo e(\Modules\Appearance\Enums\ThemeSectionType::LATEST_POST); ?>" <?php echo e($section->type == 3? 'selected':''); ?>><?php echo e(__('latest_post')); ?></option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 <?php echo e($section->type != 1? 'd-none':''); ?>" id="category-area">
                                                    <div class="form-group">
                                                        <label for="category_id"><?php echo e(__('category')); ?></label>
                                                        <select class="form-control" name="category_id" id="category_id" <?php echo e($section->type == 1? 'required':''); ?>>
                                                            <option value=""><?php echo e(__('select_category')); ?></option>
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php if($section->category_id==$category->id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="category-order" class="col-form-label"><?php echo e(__('order')); ?></label>
                                                        <input id="category-order"  value="<?php echo e($section->order); ?>" name="order" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row p-l-15">
                                                    <div class="col-12 col-md-4">
                                                    <div class="form-title">
                                                            <label for="status"><?php echo e(__('status')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-md-2">
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="status" id="status_yes" <?php if($section->status===1): ?> checked <?php endif; ?> value="1" class="custom-control-input">
                                                            <span class="custom-control-label"><?php echo e(__('active')); ?></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-3 col-md-2">
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="status" id="status_no" <?php if($section->status===0): ?> checked <?php endif; ?> value="0" class="custom-control-input">
                                                            <span class="custom-control-label"><?php echo e(__('inactive')); ?></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row p-l-15 <?php echo e($section->type == 3? 'd-none':''); ?>" id="section-style">
                                                    <div class="col-12 col-md-12">
                                                        <div class="form-title">
                                                            <label for="section_style"><?php echo e(__('section_style')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-l-15">
                                                        <div class="col-12 col-md-4">
                                                            <div class="section_section_style">
                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" name="section_style" id="section_section_style_1" <?php if($section->section_style=="style_1"): ?> checked <?php endif; ?> value="style_1" class="custom-control-input">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                                <img src="<?php echo e(static_asset('default-image/Section/Section_1.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="section_section_style">
                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" name="section_style" id="section_section_style_2" <?php if($section->section_style=="style_2"): ?> checked <?php endif; ?> value="style_2" class="custom-control-input">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                                <img src="<?php echo e(static_asset('default-image/Section/Section_2.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="section_section_style">
                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" name="section_style" id="section_section_style_3" <?php if($section->section_style=="style_3"): ?> checked <?php endif; ?> value="style_3" class="custom-control-input">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                                <img src="<?php echo e(static_asset('default-image/Section/Section_3.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="section_section_style">
                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" name="section_style" id="section_section_style_4" value="style_4" <?php if($section->section_style=="style_4"): ?> checked <?php endif; ?> class="custom-control-input">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                                <img src="<?php echo e(static_asset('default-image/Section/Section_4.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="section_section_style">
                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" name="section_style" id="section_section_style_5" value="style_5" <?php if($section->section_style=="style_5"): ?> checked <?php endif; ?> class="custom-control-input">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                                <img src="<?php echo e(static_asset('default-image/Section/Section_5.png')); ?>" alt="" class="img-responsive cat-block-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12" id="ad-area">
                                                        <div class="form-group">
                                                            <label for="language"><?php echo e(__('show_ad_in_bottom')); ?>?</label>
                                                            <select class="form-control" name="ad" id="ad">
                                                                <option value=""><?php echo e(__('none')); ?></option>
                                                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($ad->id); ?>" <?php echo e($section->ad_id == $ad->id? 'selected':''); ?>><?php echo e($ad->ad_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 m-t-20">
                                                        <div class="form-group form-float form-group-sm text-right">
                                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-right"><i class="m-r-10 mdi mdi-plus"></i><?php echo e(__('update_section')); ?></button>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Appearance/Providers/../Resources/views/edit_theme_section.blade.php ENDPATH**/ ?>