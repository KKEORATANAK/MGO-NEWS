<?php $__env->startSection('language-setting'); ?>
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
            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
                        <!-- Main Content section start -->
                        <div class="col-12 col-lg-12">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('update_language')); ?></h2>
                                </div>

                                <?php echo Form::open(['route' => ['update-language-info',$langInfo->id], 'method' => 'post']); ?>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label"><?php echo e(__('language_name')); ?>*</label>
                                            <input id="name" name="name" type="text" value="<?php echo e($langInfo->name); ?>"
                                                   class="form-control" placeholder="Language Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="code" class="col-form-label"><?php echo e(__('short_form')); ?>*</label>
                                            <input id="code" name="code" type="text" value="<?php echo e($langInfo->code); ?>"
                                                   class="form-control" placeholder="en" maxlength='5' minlength='2'
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="icon_class" class="col-form-label"><?php echo e(__('flag')); ?>*</label>
                                            <select name="icon_class" class="form-control selectpicker" required>
                                                <option value=""> <?php echo e(__('select_option')); ?></option>
                                                <?php $__currentLoopData = $flagIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($icon->icon_class); ?>"
                                                            data-icon="<?php echo e($icon->icon_class); ?>"
                                                            <?php if($icon->icon_class===$langInfo->icon_class): ?> selected
                                                            <?php endif; ?> class=""> <?php echo e($icon->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="script" class="col-form-label"><?php echo e(__('script')); ?></label>
                                            <input id="script" name="script" type="text"
                                                   value="<?php echo e($langConfig->script); ?>" class="form-control"
                                                   placeholder="Latn">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="native" class="col-form-label"><?php echo e(__('native')); ?></label>
                                            <input id="native" name="native" type="text"
                                                   value="<?php echo e($langConfig->native); ?>" class="form-control"
                                                   placeholder="English">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="regional" class="col-form-label"><?php echo e(__('regional')); ?></label>
                                            <input id="regional" name="regional" type="text"
                                                   value="<?php echo e($langConfig->regional); ?>" class="form-control"
                                                   placeholder="en_GB">
                                        </div>
                                    </div>

                                    <div class="row p-l-15">
                                        <div class="col-12 col-md-4">
                                            <div class="form-title">
                                                <label for="text_direction"><?php echo e(__('text_direction')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="text_direction"
                                                       id="text_direction_left_to_right" value="LTR"
                                                       class="custom-control-input"
                                                       <?php if($langInfo->text_direction=='LTR'): ?>
                                                       checked="checked"
                                                    <?php endif; ?>
                                                >
                                                <span class="custom-control-label"><?php echo e(__('ltr')); ?></span>
                                            </label>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="text_direction"
                                                       id="text_direction_right_to_left" value="RTL"
                                                       class="custom-control-input"
                                                       <?php if($langInfo->text_direction=='RTL'): ?>
                                                       checked="checked"
                                                    <?php endif; ?>
                                                >
                                                <span class="custom-control-label"><?php echo e(__('rtl')); ?></span>
                                            </label>
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
                                                <input type="radio" name="status" id="status_active" value="active"
                                                       class="custom-control-input"

                                                       <?php if($langInfo->status=='active'): ?>
                                                       checked="checked"
                                                    <?php endif; ?>
                                                >
                                                <span class="custom-control-label"><?php echo e(__('active')); ?></span>
                                            </label>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="status" id="status_inactive" value="inactive"
                                                       class="custom-control-input"
                                                       <?php if($langInfo->status=='inactive'): ?>
                                                       checked="checked"
                                                    <?php endif; ?>
                                                >
                                                <span class="custom-control-label"><?php echo e(__('inactive')); ?></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-t-20">
                                            <div class="form-group form-float form-group-sm text-right">
                                                <button type="submit"
                                                        class="btn btn-primary pull-right"><i
                                                        class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update_language')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php echo e(Form::close()); ?>


                            </div>
                        </div>
                        <!-- Main Content section end -->
                    </div>
                </div>
            </div>

            <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Language/Providers/../Resources/views/edit_language.blade.php ENDPATH**/ ?>