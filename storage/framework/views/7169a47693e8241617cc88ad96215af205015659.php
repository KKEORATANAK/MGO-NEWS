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
                        <div class="col-12 col-lg-12">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header m-b-20">
                                    <h2><?php echo e(__('languages')); ?></h2>
                                </div>
                                <div class="table-responsive all-pages m-t-20">
                                    <table class="table table-bordered table-striped dataTable no-footer"
                                           id="cs_datatable" role="grid" aria-describedby="cs_datatable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th><?php echo e(__('group')); ?></th>
                                                <th><?php echo e(__('phrase')); ?></th>
                                                <th><?php echo e(__('translated_language')); ?></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            <?php echo Form::open(['route' => ['update-default-messages',$langInfo->code], 'method' => 'post']); ?>


                                                <?php $__currentLoopData = $defaultMsg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" id="row_<?php echo e($key); ?>" class="odd">
                                                        <td><?php echo e($i++); ?></td>
                                                        <td><?php echo e($value->group); ?></td>
                                                        <td><input type="text" class="form-control" value="<?php echo e($value->key); ?>"
                                                                   disabled id=""></td>
                                                        <td><input type="text" class="form-control" name="<?php echo e($value->key); ?>"
                                                                   value="<?php echo e($value->value); ?>"></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td colspan="4">
                                                        <button type="submit" class="btn btn-primary pull-right">
                                                            <i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update')); ?>

                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php echo e(Form::close()); ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- right sidebar end -->
                    </div>
                </div>
            </div>

            <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Language/Providers/../Resources/views/edit_default_msg.blade.php ENDPATH**/ ?>