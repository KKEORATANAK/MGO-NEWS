<?php $__env->startSection('post-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('post-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('post'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('category-active'); ?>
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
                        <div class="col-12 col-lg-5">
                            <?php echo Form::open(['route'=>'save-new-category','method' => 'post']); ?>

                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('add_category')); ?></h2>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="language"><?php echo e(__('select_language')); ?>*</label>
                                        <select class="form-control" name="language" id="language">
                                            <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    <?php if(App::getLocale()==$lang->code): ?> Selected
                                                    <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category-name" class="col-form-label"><?php echo e(__('category_name')); ?>

                                            *</label>
                                        <input id="category-name" name="category_name" type="text" class="form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category-slug" class="col-form-label"><b><?php echo e(__('slug')); ?></b>
                                            (<?php echo e(__('slug_message')); ?>)</label>
                                        <input id="category-slug" name="slug" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category-desc" class="col-form-label"><b><?php echo e(__('description')); ?></b>
                                            (<?php echo e(__('meta_tag')); ?>)</label>
                                        <input id="category-desc" name="meta_description" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category-keywords"
                                               class="col-form-label"><b><?php echo e(__('keywords')); ?></b> (<?php echo e(__('meta_tag')); ?>)</label>
                                        <input id="category-keywords" name="meta_keywords" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category-order" class="col-form-label"><?php echo e(__('order')); ?></label>
                                        <input id="category-order" value="1" name="order" type="number"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 m-t-20">
                                        <div class="form-group form-float form-group-sm text-right">
                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-right"><i
                                                    class="m-r-10 mdi mdi-plus"></i><?php echo e(__('add_category')); ?></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                        <!-- Main Content section end -->

                        <!-- right sidebar start -->
                        <div class="col-12 col-lg-7">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header m-b-20">
                                    <h2><?php echo e(__('categories')); ?></h2>
                                </div>
                                <div class="table-responsive all-pages">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th><?php echo e(__('category_name')); ?></th>
                                            <th><?php echo e(__('language')); ?></th>
                                            <th><?php echo e(__('order')); ?></th>
                                            <?php if(Sentinel::getUser()->hasAccess(['category_write']) || Sentinel::getUser()->hasAccess(['category_delete'])): ?>
                                                <th><?php echo e(__('options')); ?></th>
                                            <?php endif; ?>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd" id="row_<?php echo e($category->id); ?>">
                                                <td class="sorting_1"><?php echo e($category->id); ?></td>
                                                <td><?php echo e($category->category_name); ?></td>
                                                <td><?php echo e($category->language); ?></td>
                                                <td><?php echo e($category->order); ?></td>
                                                <?php if(Sentinel::getUser()->hasAccess(['category_write']) || Sentinel::getUser()->hasAccess(['category_delete'])): ?>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn bg-primary dropdown-toggle btn-select-option"
                                                                type="button" data-toggle="dropdown">...
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu options-dropdown">
                                                                <?php if(Sentinel::getUser()->hasAccess(['category_write'])): ?>
                                                                    <li>
                                                                        <a href="<?php echo e(route('edit-category',['id'=>$category->id])); ?>"><i
                                                                                class="fa fa-edit option-icon"></i><?php echo e(__('edit')); ?>

                                                                        </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                                <?php if(Sentinel::getUser()->hasAccess(['category_delete'])): ?>
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                           onclick="delete_item('categories','<?php echo e($category->id); ?>')"><i
                                                                                class="fa fa-trash option-icon"></i><?php echo e(__('delete')); ?>

                                                                        </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="block-header">
                                            <h2><?php echo e(__('showing')); ?> <?php echo e($categories->firstItem()); ?> <?php echo e(__('to')); ?> <?php echo e($categories->lastItem()); ?>

                                                of <?php echo e($categories->total()); ?> <?php echo e(__('entries')); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 text-right">
                                        <div class="table-info-pagination float-right">
                                            <nav aria-label="Page navigation example">
                                                <?php echo $categories->render(); ?>

                                            </nav>
                                        </div>
                                    </div>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/categories.blade.php ENDPATH**/ ?>