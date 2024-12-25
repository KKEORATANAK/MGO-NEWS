<?php $__env->startSection('rolePermission_'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('p-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('rolePermission'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('rolePermissionsub'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['method' => 'post']); ?>

            <?php echo csrf_field(); ?>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-header clearfix m-b-20">
                        <div class="row">
                            <div class="col-6">
                                <div class="block-header">
                                    <h2><?php echo e(__('add_role')); ?></h2>
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
                        <div class="col-12 col-lg-4">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('add_role')); ?></h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label"><?php echo e(__('name')); ?>*</label>
                                        <input id="name" name="name" value="<?php echo e(old('name')); ?>" type="text" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="role-slug" class="col-form-label"><b><?php echo e(__('slug')); ?>*</b></label>
                                        <input id="role-slug" value="<?php echo e(old('slug')); ?>" name="slug" required
                                               type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Content section end -->

                        <!-- right sidebar start -->
                        <div class="col-12 col-lg-8">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('permissions')); ?></h2>
                                </div>
                                <div class="row">
                                    
                                    <div class="table-responsive all-pages">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr role="row">
                                                <th><?php echo e(__('module')); ?></th>
                                                <th><?php echo e(__('read')); ?></th>
                                                <th><?php echo e(__('write')); ?></th>
                                                <th><?php echo e(__('delete')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $allPermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td>
                                                            <strong><?php echo e($p_item->name); ?></strong>
                                                        </td>

                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="<?php echo e($p_item->name); ?>_read"
                                                                       class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="<?php echo e($p_item->name); ?>_write"
                                                                       class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="<?php echo e($p_item->name); ?>_delete"
                                                                       class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </td>

                                                    </tr>

                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group form-float form-group-sm text-right">
                                            <button type="submit" class="btn btn-primary pull-right"><i
                                                    class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('add_role')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right sidebar end -->
                    </div>
                </div>
            </div>
        <?php echo e(Form::close()); ?>

        <!-- page info end-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/User/Providers/../Resources/views/add-role.blade.php ENDPATH**/ ?>