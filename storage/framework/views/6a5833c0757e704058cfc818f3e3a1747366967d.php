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
            <?php echo Form::open(['method' => 'post']); ?>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('update_role_and_permission')); ?> </h2>
                                </div>
                                <?php if(session('error')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo e(session('error')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
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

                                <div class="form-group">
                                    <label><?php echo e(__('role_name')); ?></label>
                                    <input type="text" class="form-control" name="role_name"
                                           placeholder=" 'role_name') }}"
                                           value="<?php echo e($role->name); ?>" maxlength="200" required>
                                </div>
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
                                                    <td><strong><?php echo e($p_item->name); ?></strong></td>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   <?php if(array_key_exists($p_item->name.'_read',$permissions)): ?> checked
                                                                   <?php endif; ?> name="<?php echo e($p_item->name); ?>_read"
                                                                   class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   <?php if(array_key_exists($p_item->name.'_write',$permissions)): ?> checked
                                                                   <?php endif; ?> name="<?php echo e($p_item->name); ?>_write"
                                                                   class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   <?php if(array_key_exists($p_item->name.'_delete',$permissions)): ?> checked
                                                                   <?php endif; ?> name="<?php echo e($p_item->name); ?>_delete"
                                                                   class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </td>

                                                </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                    <div class="box-footer m-t-20">
                                        <button type="submit" class="btn btn-primary pull-right"><i
                                                class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_change')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/User/Providers/../Resources/views/edit-role.blade.php ENDPATH**/ ?>