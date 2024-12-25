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
            <form action="#" method="post">
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
                                <?php echo Form::open(['route'=>'save-new-sub-category','method' => 'post']); ?>

                                <div class="add-new-page  bg-white p-20 m-b-20">
                                    <div class="block-header">
                                        <h2><?php echo e(__('add_sub_category')); ?></h2>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="language"><?php echo e(__('select_language')); ?>*</label>


                                            <select class="form-control dynamic-category" id="language" name="language"
                                        data-dependent="category_id" required>
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
                                            <label for="category_id"><?php echo e(__('parent_category')); ?>*</label>
                                            <select class="form-control dynamic" id="category_id" name="category_id" required>
                                            <option value=""><?php echo e(__('select_category')); ?></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sub_category-name"
                                                   class="col-form-label"><?php echo e(__('sub_category_name')); ?>*</label>
                                            <input id="sub_category-name" name="sub_category_name" type="text"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sub_category-slug"
                                                   class="col-form-label"><b><?php echo e(__('slug')); ?></b>
                                                (<?php echo e(__('slug_message')); ?>)</label>
                                            <input id="sub_category-slug" name="slug" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sub_category-desc"
                                                   class="col-form-label"><b><?php echo e(__('description')); ?></b>
                                                (<?php echo e(__('meta_tag')); ?>)</label>
                                            <input id="sub_category-desc" name="meta_description" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sub_category-keywords"
                                                   class="col-form-label"><b><?php echo e(__('keywords')); ?></b>
                                                (<?php echo e(__('meta_tag')); ?>)</label>
                                            <input id="sub_category-keywords" name="meta_keywords" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 m-t-20">
                                            <div class="form-group form-float form-group-sm text-right">
                                                <button type="submit" name="btnSubmit"
                                                        class="btn btn-primary pull-right"><i
                                                        class="m-r-10 mdi mdi-plus"></i><?php echo e(__('add_sub_category')); ?>

                                                </button>
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
                                        <h2><?php echo e(__('sub_categories')); ?></h2>
                                    </div>
                                    <div class="table-responsive all-pages">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th><?php echo e(__('sub_category_name')); ?></th>
                                                <th><?php echo e(__('language')); ?></th>
                                                <th><?php echo e(__('parent_category')); ?></th>
                                                <?php if(Sentinel::getUser()->hasAccess(['sub_category_write']) || Sentinel::getUser()->hasAccess(['sub_category_delete'])): ?>
                                                    <th><?php echo e(__('options')); ?></th>
                                                <?php endif; ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd" id="row_<?php echo e($subCategory->id); ?>">
                                                    <td class="sorting_1"><?php echo e($subCategory->id); ?></td>
                                                    <td><?php echo e($subCategory->sub_category_name); ?></td>
                                                    <td><?php echo e($subCategory->language); ?></td>
                                                    <td> <?php echo e($subCategory->category['category_name']); ?> </td>
                                                    <?php if(Sentinel::getUser()->hasAccess(['sub_category_write']) || Sentinel::getUser()->hasAccess(['sub_category_delete'])): ?>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn bg-primary dropdown-toggle btn-select-option"
                                                                    type="button" data-toggle="dropdown">...<span
                                                                        class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu options-dropdown">
                                                                    <?php if(Sentinel::getUser()->hasAccess(['sub_category_write'])): ?>
                                                                        <li>
                                                                            <a href="<?php echo e(route('edit-sub-category',['id'=>$subCategory])); ?>"><i
                                                                                    class="fa fa-edit option-icon"></i><?php echo e(__('edit')); ?>

                                                                            </a>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                    <?php if(Sentinel::getUser()->hasAccess(['sub_category_delete'])): ?>
                                                                        <li>
                                                                            <a href="javascript:void(0)"
                                                                               onclick="delete_item('sub_categories','<?php echo e($subCategory->id); ?>')"><i
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
                                                <h2><?php echo e(__('showing')); ?> <?php echo e($subCategories->firstItem()); ?> <?php echo e(__('to')); ?> <?php echo e($subCategories->lastItem()); ?>

                                                    of <?php echo e($subCategories->total()); ?> <?php echo e(__('entries')); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 text-right">
                                            <div class="table-info-pagination float-right">
                                                <nav aria-label="Page navigation example">
                                                    <?php echo $subCategories->render(); ?>

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
            </form>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/sub_categories.blade.php ENDPATH**/ ?>