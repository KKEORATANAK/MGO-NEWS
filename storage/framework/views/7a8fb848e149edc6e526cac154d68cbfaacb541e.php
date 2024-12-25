<?php $__env->startSection('pages'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-aria-expanded'); ?>
    aria-expanded=true
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pages-list'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('gallery::image-gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => ['update_page', $page->id],'method' => 'post', 'enctype'=>'multipart/form-data']); ?>

            <input type="hidden" id="images" value="<?php echo e($countImage); ?>">
            <input type="hidden" id="imageCount" value="1">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="add-new-header clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <div class="block-header">
                                        <h2><?php echo e(__('add_page')); ?></h2>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('pages')); ?>" class="btn btn-primary btn-add-new btn-sm"><i
                                            class="fas fa-arrow-left"></i>
                                        <?php echo e(__('back_to_pages')); ?>

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

                <div class="col-8">
                    <div class="add-new-page  bg-white p-20 m-b-20">

                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('page_content')); ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-title" class="col-form-label"><?php echo e(__('title')); ?></label>
                                <input id="page-title" value="<?php echo e($page->title); ?>" name="title" type="text"
                                       class="form-control" required>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-slug" class="col-form-label"><b><?php echo e(__('slug')); ?></b>
                                    (<?php echo e(('slug_message')); ?>)</label>
                                <input id="page-slug" value="<?php echo e($page->slug); ?>" name="slug" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="language" class="col-form-label"><?php echo e(__('language')); ?></label>
                                <select class="form-control" name="language" id="language">
                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php if($page->language==$lang->code): ?> Selected
                                            <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page_type" class="col-form-label"><?php echo e(__('page_type')); ?></label>
                                <select name="page_type" id="page_type" class="form-control">
                                    <option value="1" <?php echo e($page->page_type==1?"selected":""); ?>><?php echo e(__('default')); ?></option>
                                    <option
                                        value="2" <?php echo e($page->page_type==2?"selected":""); ?>><?php echo e(__('contact_us')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 <?php echo e($page->page_type==1? '':'d-none'); ?>" id="description">
                            <div class="form-group">
                                <label for="content" class="col-form-label"><?php echo e(__('description')); ?></label>
                                <textarea name="description" id="content"
                                          class="form-control"><?php echo html_entity_decode($page->description); ?></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('page_layout')); ?></h4>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="template" class="col-form-label"><?php echo e(__('template')); ?></label>
                                <select name="template" id="template" class="form-control">
                                    <option
                                        value="1" <?php echo e($page->template==1?"selected":""); ?>><?php echo e(__('without_sidebar')); ?></option>
                                    <option
                                        value="2" <?php echo e($page->template==2?"selected":""); ?>><?php echo e(__('with_right_sidebar')); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="template" class="col-form-label"><?php echo e(__('feature_image')); ?></label>
                            <div class="form-group text-center">
                                <?php if(isFileExist($page->image, $result = @$page->image->thumbnail)): ?>
                                    <img src=" <?php echo e(basePath($page->image)); ?>/<?php echo e($result); ?> "
                                         id="image_preview" width="200" height="200"
                                         class="img-responsive img-thumbnail" alt="<?php echo $page->title; ?>">
                                <?php else: ?>
                                    <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?> " id="image_preview" width="200"
                                         height="200" class="img-responsive img-thumbnail" alt="<?php echo $page->title; ?>">
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <button type="button" id="btn_image_modal" class="btn btn-primary btn-image-modal"
                                        data-id="1" data-toggle="modal" data-target=".image-modal-lg">Add Image
                                </button>
                                <input id="image_id" name="image_id" type="hidden" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('visibility')); ?></h4>
                            </div>
                        </div>
                        <div class="row p-l-15">

                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="visibility"><?php echo e(__('visibility')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="visibility" id="visibility_show" value="1"
                                           <?php if($page->visibility==1): ?>
                                           checked
                                           <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('show')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="visibility" id="visibility_hide"
                                           <?php if($page->visibility==0): ?>
                                           checked
                                           <?php endif; ?>
                                           value="0" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('hide')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="show_for_register"><?php echo e(__('show_only_to_registered_users')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_for_register"
                                           <?php if($page->show_for_register==1): ?>
                                           checked
                                           <?php endif; ?> id="show_only_registerd_user_enable" value="1"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_for_register"
                                           <?php if($page->show_for_register==0): ?>
                                           checked
                                           <?php endif; ?> id="show_only_registerd_user_desable" value="0"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="show_title"><?php echo e(__('show_title')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_title"
                                           <?php if($page->show_title==1): ?>
                                           checked
                                           <?php endif; ?> id="show_title_enable" value="1" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_title"
                                           <?php if($page->show_title==0): ?>
                                           checked
                                           <?php endif; ?> id="show_title_desable" value="0" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="breadcrumb"><?php echo e(__('show_breadcrumb')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_breadcrumb"
                                           <?php if($page->show_breadcrumb==1): ?>
                                           checked
                                           <?php endif; ?> id="show_breadcumb_enable" value="1" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_breadcrumb"
                                           <?php if($page->show_breadcrumb==0): ?>
                                           checked
                                           <?php endif; ?> id="show_breadcumb_desable" value="0" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="show_right_colmn"><?php echo e(__('show_right_column')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_right_column"
                                           <?php if($page->show_right_column==1): ?>
                                           checked
                                           <?php endif; ?> id="show_right_column_enable" value="1" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_right_column"
                                           <?php if($page->show_right_column==0): ?>
                                           checked
                                           <?php endif; ?> id="show_right_column_desable" value="0" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>


                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="location"><?php echo e(__('show_on_menu')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="location"
                                           <?php if($page->location=='top'): ?>
                                           checked
                                           <?php endif; ?> id="menu_location_top" value="top" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('top_menu')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="location"
                                           <?php if($page->location=='mainmenu'): ?>
                                           checked
                                           <?php endif; ?> id="menu_location_main" value="mainmenu" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('main_menu')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="location"
                                           <?php if($page->location=='footer'): ?>
                                           checked
                                           <?php endif; ?> id="menu_location_footer" value="footer" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('footer')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="location" <?php if($page->location=='none'): ?>
                                    checked
                                           <?php endif; ?> id="menu_location_none" value="none" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('do_not_add_to_menu')); ?></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('seo')); ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title-meta" class="col-form-label"><b><?php echo e(__('title')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="title-meta" name="meta_title" value="<?php echo e($page->meta_title); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-meta" class="col-form-label"><b><?php echo e(__('description')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="page-meta" name="meta_description" value="<?php echo e($page->meta_description); ?>"
                                       type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-keywords" class="col-form-label"><b><?php echo e(__('keywords')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="page-keywords" name="meta_keywords" value="<?php echo e($page->meta_keywords); ?>"
                                       type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="m-r-10 mdi mdi-content-save-all"></i> <?php echo e(__('update_page')); ?>

                                    </button>
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

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Page/Providers/../Resources/views/edit.blade.php ENDPATH**/ ?>