<?php $__env->startSection('post-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('post-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('post'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sub-category-active'); ?>
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
                            <?php echo Form::open(['route'=>'update-sub-category','method' => 'post']); ?>

                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('update_sub_category')); ?></h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="language"><?php echo e(__('select_language')); ?>*</label>
                                        <select class="form-control  dynamic-category" name="language" id="language" 
                                        data-dependent="category_id" required>
                                            <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    <?php if($subCategory->language==$lang->code): ?> Selected
                                                    <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="parent_cat"><?php echo e(__('parent_category')); ?>*</label>
                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option value=""><?php echo e(__('select_category')); ?></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($subCategory->category_id==$category->id): ?> Selected
                                                        <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sub_category-name"
                                               class="col-form-label"><?php echo e(__('sub_category_name')); ?>*</label>
                                        <input id="sub_category-name" value="<?php echo e($subCategory->sub_category_name); ?>"
                                               name="sub_category_name" type="text" class="form-control" required>
                                        <input value="<?php echo e($subCategory->id); ?>" name="sub_category_id" type="hidden"
                                               required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sub_category-slug" class="col-form-label"><b><?php echo e(__('slug')); ?></b>
                                            (<?php echo e(__('slug_message')); ?>)</label>
                                        <input id="sub_category-slug" value="<?php echo e($subCategory->slug); ?>" name="slug"
                                               type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sub_category-desc"
                                               class="col-form-label"><b><?php echo e(__('description')); ?></b>
                                            (<?php echo e(__('meta_tag')); ?>)</label>
                                        <input id="sub_category-desc" value="<?php echo e($subCategory->meta_description); ?>"
                                               name="meta_description" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sub_category-keywords"
                                               class="col-form-label"><b><?php echo e(__('keywords')); ?></b> (<?php echo e(__('meta_tag')); ?>)</label>
                                        <input id="sub_category-keywords" name="meta_keywords"
                                               value="<?php echo e($subCategory->meta_keywords); ?>" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-12 m-t-20">
                                        <div class="form-group form-float form-group-sm text-right">
                                            <button type="submit" name="btnSubmit" class="btn btn-primary pull-right"><i
                                                    class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update_sub_category')); ?>

                                            </button>
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

<?php $__env->startSection('script'); ?>

    <script>
        $(document).ready(function () {

            $('.dynamic-category').change(function () {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = "<?php echo e(csrf_token()); ?>";
                    $.ajax({
                        url: "<?php echo e(route('category-fetch')); ?>",
                        method: "POST",
                        data: {select: select, value: value, _token: _token},
                        success: function (result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#language').change(function () {
                $('#category_id').val('');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/edit_sub_category.blade.php ENDPATH**/ ?>