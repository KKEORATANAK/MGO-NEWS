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
            <div class="admin-section">
                <div class="row clearfix m-t-30">
                    <div class="col-12">
                        <div class="navigation-list bg-white p-20">
                            <div class="add-new-header clearfix m-b-20">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="block-header col-6">
                                                <h2><?php echo e(__('roles_&_permissions')); ?></h2>
                                            </div>
                                            <?php if(Sentinel::getUser()->hasAccess(['role_write'])): ?>
                                                <div class="col-6 text-right">
                                                    <a href="<?php echo e(route('new-role-add')); ?>"
                                                       class="btn btn-primary btn-sm"><i
                                                            class="m-r-10 mdi mdi-plus"></i><?php echo e(__('add_role')); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
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
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive all-pages">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr role="row">
                                        <th><?php echo e(__('role')); ?></th>
                                        <th><?php echo e(__('permissions')); ?></th>
                                        <?php if(Sentinel::getUser()->hasAccess(['role_read']) || Sentinel::getUser()->hasAccess(['role_write'])): ?>
                                            <th><?php echo e(__('options')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr role="row" id="row_<?php echo e($role->id); ?>">
                                            <td><strong><?php echo e($role->name); ?></strong></td>
                                            <td height="50">

                                                <?php if(!empty($role->permissions)): ?>
                                                    <?php $__currentLoopData = $permissionss[$role->slug]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <label class="label label-default"><?php echo e($value); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <?php if(Sentinel::getUser()->hasAccess(['role_read']) || Sentinel::getUser()->hasAccess(['role_write'])): ?>
                                                <td>
                                                    <?php if($role->id != 1): ?>
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn bg-primary dropdown-toggle btn-select-option"
                                                                type="button" data-toggle="dropdown">... <span
                                                                    class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu options-dropdown">
                                                                <?php if(Sentinel::getUser()->hasAccess(['users_write'])): ?>
                                                                    <li>
                                                                        <a href="<?php echo e(route('user.edit-role-and-permissions',['id'=>$role->id])); ?>"><i
                                                                                class="fa fa-edit option-icon"></i><?php echo e(__('edit')); ?>

                                                                        </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                                <?php if(Sentinel::getUser()->hasAccess(['role_delete']) && Sentinel::getUser()->hasAccess(['permission_write'])): ?>
                                                                <?php if($role->id != 1 && $role->id != 4 && $role->id != 5): ?>
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                           onclick="delete_item('roles','<?php echo e($role->id); ?>')"><i
                                                                                class="fa fa-trash option-icon"></i><?php echo e(__('delete')); ?>

                                                                        </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            <?php endif; ?>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/User/Providers/../Resources/views/roles.blade.php ENDPATH**/ ?>