<?php $__env->startSection('appearance'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appearance-aria-expanded'); ?>
    aria-expanded=true
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appearance-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('nestable/nestable.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

     <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content">
            <div class="row clearfix">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#edit-menu" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo e(__('edit_menu')); ?></a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#manage-menu" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo e(__('menu_location')); ?></a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="edit-menu" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-white p-20 m-b-20">
                                        <?php echo Form::open(['route' => 'search-menu-item','method' => 'get','class' => 'form-inline']); ?>

                                            <div class="form-group menu-select">
                                                <label for="menu_id" class="col-form-label"><?php echo e(__('menu')); ?></label>
                                                <select name="menu_id" id="menu_id" class="form-control">
                                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if($selectedMenus->id==$menu->id): ?> selected <?php endif; ?>  value="<?php echo e($menu->id); ?>"><?php echo e($menu->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group menu-select">
                                                <label for="selecttedLanguage" class="col-form-label language"><?php echo e(__('language')); ?></label>
                                                <select class="form-control" name="language" id="selecttedLanguage">
                                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php if($selectedLanguage==$lang->code): ?> Selected
                                                        <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                                    </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group ml-3">
                                                <button  class="btn btn-primary" type="submit"><?php echo e(__('select_menu')); ?></button>
                                            </div>
                                            <a href="javascript:void(0)" class="modal-menu"data-title="<?php echo e(__('add_menu')); ?>"
                                                   data-url="<?php echo e(route('edit-info',['page_name'=>'add-menu'])); ?>"
                                                   data-toggle="modal" data-target="#common-modal"> <?php echo e(__('create_new_menu')); ?></a>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="add-new-page  bg-white p-20 m-b-20" id=div_menu_create>
                                    <?php echo Form::open(['route' => 'add-menu', 'method' => 'post']); ?>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="title" class="col-form-label"><?php echo e(__('title')); ?></label>
                                                    <input type="text" class="form-control" name="title" id="title">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="language" class="col-form-label"><?php echo e(__('language')); ?></label>
                                                    <select class="form-control" name="language" id="language">
                                                        <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            <?php if(settingHelper('default_language')==$lang->code): ?> Selected
                                                            <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                                        </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="btnSubmit" class="col-form-label"> &nbsp;</label>
                                                    <button type="submit" id="btnSubmit" class="form-control btn btn-light " ><?php echo e(__('create')); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php echo e(Form::close()); ?>

                                    </div>
                                </div>

                                <div class="col-md-12">
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
                                <div class="col-4">
                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                        <div class="accrodion-regular">
                                            <div id="accordion3">
                                                <div class="card mb-2">
                                                    <div class="card-header" id="headingSeven">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                            <span class="fas fa-angle-down mr-3"></span><?php echo e(__('custom')); ?>

                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <?php echo Form::open(['route' => 'save-menu-item','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                                <?php echo csrf_field(); ?>
                                                                <div class="row clearfix">
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <!-- Main Content section start -->
                                                                            <div class="col-12 col-lg-12">
                                                                                <div class="add-new-page  bg-white p-20 m-b-20">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="form-group">
                                                                                                <label for="label" class="col-form-label"><?php echo e(__('label')); ?>*</label>
                                                                                                <input id="label" name="label" value="<?php echo e(old('label')); ?>"
                                                                                                    type="text" class="form-control" required>
                                                                                                <input type="hidden" name="menu_id" value="<?php echo e($selectedMenus->id); ?>">
                                                                                                <input id="source" name="source" type="hidden" value="custom" class="form-control" required>
                                                                                                <input id="language" name="language" type="hidden" value="<?php echo e($selectedLanguage); ?>" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12">
                                                                                            <div class="form-group">
                                                                                                <label for="url" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                                <input id="url" name="url" value="<?php echo e(old('url')); ?>"
                                                                                                    type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12 m-t-20">
                                                                                            <div class="form-group form-float form-group-sm text-right">
                                                                                                <button type="submit" name="btn" class="btn btn-primary pull-right">
                                                                                                    <i class="m-r-10 fa fa-plus"></i><?php echo e(__('add_menu_item')); ?>

                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Main Content section end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php echo e(Form::close()); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-2">
                                                    <div class="card-header" id="headingEight">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                            <span class="fas fa-angle-down mr-3"></span><?php echo e(__('pages')); ?>

                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <?php echo Form::open(['route' => 'save-menu-item','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="row clearfix">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <!-- Main Content section start -->
                                                                                <div class="col-12 col-lg-12">
                                                                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                                                                        <div class="row page-area">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="form-group">
                                                                                                    <input id="source" name="source"
                                                                                                        type="hidden" value="page" class="form-control" required>
                                                                                                    <input type="hidden" name="menu_id" value="<?php echo e($selectedMenus->id); ?>">
                                                                                                    <input type="hidden" name="language" value="<?php echo e($selectedLanguage); ?>">
                                                                                                     <span><?php echo e(__('must_select')); ?>*</span>
                                                                                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                        <label class="custom-control custom-checkbox">
                                                                                                            <input type="checkbox" name="page_id[]" value="<?php echo e($page->id); ?>" class="custom-control-input">
                                                                                                            <span class="custom-control-label"><?php echo e($page->title); ?></span>
                                                                                                        </label>
                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <label class="custom-control custom-checkbox">
                                                                                                        <input type="checkbox" name="page_id[]" value="gallery" class="custom-control-input">
                                                                                                        <span class="custom-control-label"><?php echo e(__('gallery')); ?></span>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-12 m-t-20">
                                                                                                <div class="form-group form-float form-group-sm text-right">
                                                                                                    <button type="submit" name="btn" class="btn btn-primary pull-right">
                                                                                                        <i class="m-r-10 fa fa-plus"></i><?php echo e(__('add_menu_item')); ?>

                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Main Content section end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php echo e(Form::close()); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-2">
                                                    <div class="card-header" id="headingNine">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                            <span class="fas fa-angle-down mr-3"></span><?php echo e(__('posts')); ?> </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <?php echo Form::open(['route' => 'save-menu-item','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                                <?php echo csrf_field(); ?>
                                                                <div class="row clearfix">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <!-- Main Content section start -->
                                                                                <div class="col-12 col-lg-12">
                                                                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                                                                        <?php if($posts->count() > 0): ?>
                                                                                            <div class="row post-area">
                                                                                                <div class="col-sm-12">
                                                                                                    <div class="form-group">
                                                                                                        <input id="source" name="source" value="post" type="hidden" class="form-control" required>
                                                                                                        <input type="hidden" name="menu_id" value="<?php echo e($selectedMenus->id); ?>">
                                                                                                        <input type="hidden" name="languale" value="<?php echo e($selectedLanguage); ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-12">
                                                                                                    <div class="form-group">
                                                                                                        <span><?php echo e(__('must_select')); ?>*</span>
                                                                                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                            <label class="custom-control custom-checkbox">
                                                                                                                <input type="checkbox" name="post_id[]" value="<?php echo e($post->id); ?>" class="custom-control-input">
                                                                                                                <span class="custom-control-label"><?php echo e(Str::limit($post->title, 40)); ?></span>
                                                                                                            </label>
                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                            <div class="col-12 m-t-20">
                                                                                                <div class="form-group form-float form-group-sm text-right">
                                                                                                    <button type="submit" name="btn" class="btn btn-primary pull-right">
                                                                                                        <i class="m-r-10 fa fa-plus"></i><?php echo e(__('add_menu_item')); ?>

                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php else: ?>
                                                                                            <?php echo e(__('no_post_available')); ?>

                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Main Content section end -->
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            <?php echo e(Form::close()); ?>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-header" id="headingTen">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            <span class="fas fa-angle-down mr-3"></span><?php echo e(__('categories')); ?>

                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <?php echo Form::open(['route' => 'save-menu-item','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="row clearfix">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <!-- Main Content section start -->
                                                                                <div class="col-12 col-lg-12">
                                                                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                                                                        <?php if($categories->count() > 0): ?>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-12">
                                                                                                    <div class="form-group">
                                                                                                        <span><?php echo e(__('must_select')); ?>*</span>
                                                                                                        <input id="source" name="source" type="hidden" value="category" class="form-control" required>
                                                                                                        <input type="hidden" name="menu_id" value="<?php echo e($selectedMenus->id); ?>">
                                                                                                        <input type="hidden" name="language" value="<?php echo e($selectedLanguage); ?>">

                                                                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                <label class="custom-control custom-checkbox">
                                                                                                                    <input type="checkbox" name="category_id[]" value="<?php echo e($category->id); ?>" class="custom-control-input">
                                                                                                                    <span class="custom-control-label"><?php echo e($category->category_name); ?></span>
                                                                                                                </label>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="row">
                                                                                            <div class="col-12 m-t-20">
                                                                                                <div class="form-group form-float form-group-sm text-right">
                                                                                                    <button type="submit" name="btn"  class="btn btn-primary pull-right">
                                                                                                        <i class="m-r-10 fa fa-plus"></i><?php echo e(__('add_menu_item')); ?>

                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php else: ?>
                                                                                            <?php echo e(__('no_category_available')); ?>

                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Main Content section end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php echo e(Form::close()); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-header" id="headingEleven">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                            <span class="fas fa-angle-down mr-3"></span><?php echo e(__('sub_categories')); ?>

                                                        </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <?php echo Form::open(['route' => 'save-menu-item','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="row clearfix">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <!-- Main Content section start -->
                                                                                <div class="col-12 col-lg-12">
                                                                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                                                                        <?php if($categories->count() > 0): ?>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-12">
                                                                                                    <div class="form-group">
                                                                                                        <span><?php echo e(__('must_select')); ?>*</span>
                                                                                                        <hr>
                                                                                                        <input id="source" name="source" type="hidden" value="sub-category" class="form-control" required>
                                                                                                        <input type="hidden" name="menu_id" value="<?php echo e($selectedMenus->id); ?>">
                                                                                                        <input type="hidden" name="language" value="<?php echo e($selectedLanguage); ?>">

                                                                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                                            <?php $__currentLoopData = $category->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                <?php if($key == 0): ?>
                                                                                                                <div class="mt-2"><?php echo e($category->category_name); ?>:</div>
                                                                                                                <?php endif; ?>
                                                                                                                    <label class="custom-control custom-checkbox sub-category">
                                                                                                                        <input type="checkbox" name="sub_category_id[]" value="<?php echo e($sub_category->id); ?>" class="custom-control-input">
                                                                                                                        <span class="custom-control-label"><?php echo e($sub_category->sub_category_name); ?></span>
                                                                                                                    </label>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="row">
                                                                                            <div class="col-12 m-t-20">
                                                                                                <div class="form-group form-float form-group-sm text-right">
                                                                                                    <button type="submit" name="btn"  class="btn btn-primary pull-right">
                                                                                                        <i class="m-r-10 fa fa-plus"></i><?php echo e(__('add_menu_item')); ?>

                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php else: ?>
                                                                                            <?php echo e(__('no_category_available')); ?>

                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Main Content section end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php echo e(Form::close()); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <?php echo Form::open(['route' => 'update-menu-item','method' => 'post', 'enctype'=>'multipart/form-data', 'id' => 'update-menu-item']); ?>

                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="cf nestable-lists">
                                                    <label for="menu_id" class="col-form-label"><?php echo e(__('menu_item')); ?>(<?php echo e(__('drag_drop_menu_item_for_rearrange')); ?>)</label>
                                                    <div class="dd" id="nestable3">
                                                        <ol class="dd-list">
                                                            <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(count($item->children)==0): ?>
                                                                    <li class="dd-item dd3-item" id="<?php echo e($item->id); ?>" data-id="<?php echo e($item->id); ?>">
                                                                        
                                                                        <input type="hidden" name="source" id="source" value="<?php echo e(@$item->source); ?>">
                                                                        <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="1">
                                                                        <div class="dd-handle dd3-handle"></div>
                                                                        <div class="dd3-content"><?php echo e($item->label == 'gallery'? __('gallery'): $item->label); ?>

                                                                            <!-- expand menu item start -->
                                                                            <div id="" class="expend-icon pull-right">
                                                                                <i class="fa fa-fw fa-sort-down"></i>
                                                                            </div>
                                                                            <div class="expended-menu-item hide-menu-item">
                                                                                <div class="form-group">
                                                                                    <label for="label-<?php echo e($item->id); ?>" class="col-form-label"><?php echo e(__('label')); ?></label>
                                                                                    <input id="label-<?php echo e($item->id); ?>" name="label[]" value="<?php echo e($item->label); ?>" type="text" class="form-control" required>
                                                                                    <input name="menu_item_id[]" value="<?php echo e($item->id); ?>" type="hidden" class="form-control">
                                                                                </div>
                                                                                <?php if($item->source == 'custom'): ?>
                                                                                    <div class="form-group">
                                                                                        <label for="order" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                        <input id="order" name="url[]" value="<?php echo e($item->url); ?>" type="text" class="form-control">
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                <div class="form-group">
                                                                                    <label class="custom-control custom-checkbox">
                                                                                        <input type="hidden" name="new_teb[]" value="<?php echo e($item->new_teb); ?>"><input type="checkbox" class="custom-control-input" <?php if($item->new_teb==1): ?> checked <?php endif; ?> onclick="this.previousSibling.value=1-this.previousSibling.value">
                                                                                        <span class="custom-control-label"><?php echo e(__('open_in_new_teb')); ?></span>
                                                                                    </label>
                                                                                </div>

                                                                                <div class="form-group" id="mega-menu-area">
                                                                                    <label for="is_mega_menu" class="col-form-label"><?php echo e(__('is_mega_menu')); ?></label>
                                                                                    <select name="is_mega_menu[]" id="is_mega_menu" class="form-control">
                                                                                        <option value="no" <?php echo e($item->is_mega_menu == 'no'?'selected':''); ?>><?php echo e(__('no')); ?></option>
                                                                                        <option value="tab" <?php echo e($item->is_mega_menu == 'tab'?'selected':''); ?>><?php echo e(__('tab_type')); ?></option>
                                                                                        <option value="category" <?php echo e($item->is_mega_menu == 'category'?'selected':''); ?>><?php echo e(__('category_type')); ?></option>

                                                                                    </select>
                                                                                </div>
                                                                                <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>
                                                                                <div class="form-group">
                                                                                    <a href="javascript:void(0)" onclick="delete_menu_item('<?php echo e($item->id); ?>')"
                                                                                       class="text-danger"> <?php echo e(__('delete_menu_item')); ?></a>
                                                                                </div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <!-- expand menu item end -->
                                                                        </div>
                                                                    </li>
                                                                <?php else: ?>
                                                                    <li class="dd-item dd3-item" id="<?php echo e($item->id); ?>" data-id="<?php echo e($item->id); ?>">
                                                                         
                                                                        <input type="hidden" name="source" id="source" value="<?php echo e(@$item->source); ?>">
                                                                        <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="1">
                                                                        <div class="dd-handle dd3-handle"></div>
                                                                        <div class="dd3-content"><?php echo e($item->label == 'gallery'? __('gallery'): $item->label); ?>

                                                                        <!-- expand menu item start -->
                                                                            <div id="" class="expend-icon pull-right">
                                                                                <i class="fa fa-fw fa-sort-down"></i>
                                                                            </div>
                                                                            <div class="expended-menu-item hide-menu-item">
                                                                                <div class="form-group">
                                                                                    <label for="label-<?php echo e($item->id); ?>" class="col-form-label"><?php echo e(__('label')); ?></label>
                                                                                    <input id="label-<?php echo e($item->id); ?>" name="label[]" value="<?php echo e($item->label); ?>" type="text" class="form-control" required>
                                                                                    <input name="menu_item_id[]" value="<?php echo e($item->id); ?>" type="hidden" class="form-control">
                                                                                </div>
                                                                                <?php if($item->source == 'custom'): ?>
                                                                                    <div class="form-group">
                                                                                        <label for="order" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                        <input id="order" name="url[]" value="<?php echo e($item->url); ?>" type="text" class="form-control">
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                                <div class="form-group">
                                                                                    <label class="custom-control custom-checkbox">
                                                                                        <input type="hidden" name="new_teb[]" value="<?php echo e($item->new_teb); ?>"><input type="checkbox" class="custom-control-input" <?php if($item->new_teb==1): ?> checked <?php endif; ?> onclick="this.previousSibling.value=1-this.previousSibling.value">
                                                                                        <span class="custom-control-label"><?php echo e(__('open_in_new_teb')); ?></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group" id="mega-menu-area" >
                                                                                    <label for="menu_id" class="col-form-label" ><?php echo e(__('is_mega_menu')); ?></label>
                                                                                    <select name="is_mega_menu[]" id="is_mega_menu" class="form-control">
                                                                                            <option value="no" <?php echo e($item->is_mega_menu == 'no'?'selected':''); ?>><?php echo e(__('no')); ?></option>
                                                                                            <option value="tab" <?php echo e($item->is_mega_menu == 'tab'?'selected':''); ?>><?php echo e(__('tab_type')); ?></option>
                                                                                            <option value="category" <?php echo e($item->is_mega_menu == 'category'?'selected':''); ?>><?php echo e(__('category_type')); ?></option>
                                                                                    </select>
                                                                                </div>
                                                                                <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>
                                                                                <div class="form-group">
                                                                                    <a href="javascript:void(0)" onclick="delete_menu_item('<?php echo e($item->id); ?>')"
                                                                                    class="text-danger"> <?php echo e(__('delete_menu_item')); ?></a>
                                                                                </div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        <!-- expand menu item end -->
                                                                        </div>
                                                                        <ol class="dd-list">

                                                                            <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if(count($child->children)==0): ?>
                                                                                    <li class="dd-item dd3-item" id="<?php echo e($child->id); ?>" data-id="<?php echo e($child->id); ?>">
                                                                                         
                                                                                        <input type="hidden" name="source" id="source" value="<?php echo e(@$child->source); ?>">

                                                                                        <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="2">

                                                                                        <div class="dd-handle dd3-handle"></div>
                                                                                        <div class="dd3-content"><?php echo e($child->label == 'gallery'? __('gallery'): $child->label); ?>

                                                                                        <!-- expand menu item start -->
                                                                                            <div id="" class="expend-icon pull-right"><i class="fa fa-fw fa-sort-down"></i></div>
                                                                                            <div class="expended-menu-item hide-menu-item">

                                                                                                <div class="form-group">
                                                                                                    <label for="label-<?php echo e($child->id); ?>" class="col-form-label"><?php echo e(__('label')); ?></label>
                                                                                                    <input id="label-<?php echo e($child->id); ?>" name="label[]" value="<?php echo e($child->label); ?>" type="text" class="form-control" required>
                                                                                                    <input name="menu_item_id[]" value="<?php echo e($child->id); ?>" type="hidden" class="form-control">
                                                                                                </div>
                                                                                                <?php if($child->source == 'custom'): ?>
                                                                                                    <div class="form-group">
                                                                                                        <label for="order" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                                        <input id="order" name="url[]" value="<?php echo e($child->url); ?>" type="text" class="form-control">
                                                                                                    </div>
                                                                                                <?php endif; ?>
                                                                                                <div class="form-group">
                                                                                                    <label class="custom-control custom-checkbox">
                                                                                                        <input type="hidden" name="new_teb[]" value="<?php echo e($child->new_teb); ?>"><input type="checkbox" class="custom-control-input" <?php if($child->new_teb==1): ?> checked <?php endif; ?> onclick="this.previousSibling.value=1-this.previousSibling.value">
                                                                                                        <span class="custom-control-label"><?php echo e(__('open_in_new_teb')); ?></span>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="form-group" id="mega-menu-area" >
                                                                                                    <label for="menu_id" class="col-form-label" ><?php echo e(__('is_mega_menu')); ?></label>
                                                                                                    <select name="is_mega_menu[]" id="is_mega_menu" class="form-control">
                                                                                                            <option value="no"><?php echo e(__('no')); ?></option>
                                                                                                            <option value="tab"><?php echo e(__('tab_type')); ?></option>
                                                                                                            <option value="category"><?php echo e(__('category_type')); ?></option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>
                                                                                                <div class="form-group">
                                                                                                    <a href="javascript:void(0)" onclick="delete_menu_item('<?php echo e($child->id); ?>')"
                                                                                                    class="text-danger"> <?php echo e(__('delete_menu_item')); ?></a>
                                                                                                </div>
                                                                                                <?php endif; ?>
                                                                                            </div>
                                                                                            <!-- expand menu item end -->
                                                                                        </div>
                                                                                    </li>
                                                                                <?php else: ?>
                                                                                <li class="dd-item dd3-item" id="<?php echo e($child->id); ?>" data-id="<?php echo e($child->id); ?>">
                                                                                     
                                                                                    <input type="hidden" name="source" id="source" value="<?php echo e(@$child->source); ?>">
                                                                                    <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="2">
                                                                                        <div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo e($child->label == 'gallery'? __('gallery'): $child->label); ?>

                                                                                        <!-- expand menu item start -->
                                                                                            <div id="" class="expend-icon pull-right"><i class="fa fa-fw fa-sort-down"></i></div>
                                                                                            <div class="expended-menu-item hide-menu-item">
                                                                                                <div class="form-group">
                                                                                                    <label for="label-<?php echo e($child->id); ?>" class="col-form-label"><?php echo e(__('label')); ?></label>
                                                                                                    <input id="label-<?php echo e($child->id); ?>" name="label[]" value="<?php echo e($child->label); ?>" type="text" class="form-control" required>
                                                                                                    <input name="menu_item_id[]" value="<?php echo e($child->id); ?>" type="hidden" class="form-control">
                                                                                                </div>
                                                                                                <?php if($child->source == 'custom'): ?>
                                                                                                    <div class="form-group">
                                                                                                        <label for="order" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                                        <input id="order" name="url[]" value="<?php echo e($child->url); ?>" type="text" class="form-control">
                                                                                                    </div>
                                                                                                <?php endif; ?>
                                                                                                <div class="form-group">
                                                                                                    <label class="custom-control custom-checkbox">
                                                                                                        <input type="hidden" name="new_teb[]" value="<?php echo e($child->new_teb); ?>"><input type="checkbox" class="custom-control-input" <?php if($child->new_teb==1): ?> checked <?php endif; ?> onclick="this.previousSibling.value=1-this.previousSibling.value">
                                                                                                        <span class="custom-control-label"><?php echo e(__('open_in_new_teb')); ?></span>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="form-group" id="mega-menu-area">
                                                                                                    <label for="menu_id" class="col-form-label" ><?php echo e(__('is_mega_menu')); ?></label>
                                                                                                    <select name="is_mega_menu[]" id="is_mega_menu" class="form-control">
                                                                                                            <option value="no"><?php echo e(__('no')); ?></option>
                                                                                                            <option value="tab"><?php echo e(__('tab_type')); ?></option>
                                                                                                            <option value="category"><?php echo e(__('category_type')); ?></option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>
                                                                                                <div class="form-group">
                                                                                                    <a href="javascript:void(0)" onclick="delete_menu_item('<?php echo e($child->id); ?>')"
                                                                                                    class="text-danger"> <?php echo e(__('delete_menu_item')); ?></a>
                                                                                                </div>
                                                                                                <?php endif; ?>
                                                                                            </div>
                                                                                        <!-- expand menu item end -->
                                                                                        </div>
                                                                                        <ol class="dd-list">
                                                                                            <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <li class="dd-item dd3-item" id="<?php echo e($subChild->id); ?>" data-id="<?php echo e($subChild->id); ?>">
                                                                                                     
                                                                                                    <input type="hidden" name="source" id="source" value="<?php echo e(@$subChild->source); ?>">

                                                                                                    <input type="hidden" name="menu_lenght[]" id="menu_lenght" value="3">

                                                                                                    <div class="dd-handle dd3-handle"></div>
                                                                                                    <div class="dd3-content"><?php echo e($subChild->label == 'gallery'? __('gallery'): $subChild->label); ?>

                                                                                                        <!-- expand menu item start -->
                                                                                                        <div id="" class="expend-icon pull-right"><i class="fa fa-fw fa-sort-down"></i></div>
                                                                                                        <div class="expended-menu-item hide-menu-item">
                                                                                                            <div class="form-group">
                                                                                                                <label for="label-<?php echo e($subChild->id); ?>" class="col-form-label"><?php echo e(__('label')); ?></label>
                                                                                                                <input id="label-<?php echo e($subChild->id); ?>" name="label[]" value="<?php echo e($subChild->label); ?>" type="text" class="form-control" required>
                                                                                                                <input name="menu_item_id[]" value="<?php echo e($subChild->id); ?>" type="hidden" class="form-control">
                                                                                                            </div>
                                                                                                            <?php if($subChild->source == 'custom'): ?>
                                                                                                                <div class="form-group">
                                                                                                                    <label for="order" class="col-form-label"><?php echo e(__('url')); ?></label>
                                                                                                                    <input id="order" name="url[]" value="<?php echo e($subChild->url); ?>" type="text" class="form-control">
                                                                                                                </div>
                                                                                                            <?php endif; ?>
                                                                                                             <div class="form-group">
                                                                                                                <label class="custom-control custom-checkbox">
                                                                                                                    <input type="hidden" name="new_teb[]" value="<?php echo e($subChild->new_teb); ?>"><input type="checkbox" class="custom-control-input" <?php if($subChild->new_teb==1): ?> checked <?php endif; ?> onclick="this.previousSibling.value=1-this.previousSibling.value">
                                                                                                                    
                                                                                                                    <span class="custom-control-label"><?php echo e(__('open_in_new_teb')); ?></span>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                            <div class="form-group" id="mega-menu-area" >
                                                                                                                <label for="menu_id" class="col-form-label" ><?php echo e(__('is_mega_menu')); ?></label>
                                                                                                                <select name="is_mega_menu[]" id="is_mega_menu" class="form-control">
                                                                                                                        <option value="no"><?php echo e(__('no')); ?></option>
                                                                                                                        <option value="tab"><?php echo e(__('tab_type')); ?></option>
                                                                                                                        <option value="category"><?php echo e(__('category_type')); ?></option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>
                                                                                                            <div class="form-group">
                                                                                                                <a href="javascript:void(0)" onclick="delete_menu_item('<?php echo e($subChild->id); ?>')"
                                                                                                                class="text-danger"> <?php echo e(__('delete_menu_item')); ?></a>
                                                                                                            </div>
                                                                                                            <?php endif; ?>
                                                                                                        </div>
                                                                                                        <!-- expand menu item end -->
                                                                                                    </div>
                                                                                                </li>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </ol>
                                                                                </li>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </ol>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if(Sentinel::getUser()->hasAccess(['menu_delete'])): ?>

                                                <div class="">
                                                    <a href="javascript:void(0)"
                                                    onclick="delete_item('menu','<?php echo e($selectedMenus->id); ?>')" class="text-danger"><?php echo e(__('delete_this_menu')); ?></a>
                                                </div>
                                                <?php endif; ?>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary" type="submit"><?php echo e(__('update')); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php echo e(Form::close()); ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="manage-menu" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="add-new-page  bg-white p-20 m-b-20" >
                                        <div class="table-responsive all-pages">
                                            <?php echo Form::open(['route' => 'save-menu-locations','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr role="row">
                                                            <th><?php echo e(__('title')); ?></th>
                                                            <th><?php echo e(__('menu')); ?></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__currentLoopData = $menuLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuLocation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo e($menuLocation->title); ?></td>
                                                            <td>
                                                                <input name="menu_location_id[]" type="hidden" value="<?php echo e($menuLocation->id); ?>">
                                                                <select class="form-control" name="menu_id[]">
                                                                    <option value=""><?php echo e(__('select_option')); ?></option>
                                                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option <?php if($menu->id==$menuLocation->menu['id']): ?> selected <?php endif; ?> value="<?php echo e($menu->id); ?>"><?php echo e($menu->title); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </td>
                                                            <td><a href="javascript:void(0)" class="modal-menu"data-title="<?php echo e(__('add_menu')); ?>"
                                                                data-url="<?php echo e(route('edit-info',['page_name'=>'add-menu'])); ?>"
                                                                data-toggle="modal" data-target="#common-modal"> <?php echo e(__('create_new_menu')); ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                                <div class="pull-right">
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('update')); ?></button>
                                                </div>
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(static_asset('nestable/jquery.nestable.js')); ?>"></script>
<script src="<?php echo e(static_asset('nestable/custom.js')); ?>"></script>



<script type="text/javascript">

    $(document).on("submit", "form#update-menu-item", function (event) {
        var countOne = 0
        var countOTwo = 0

        $('li.dd-item').each(function (list, this2) {

            if ($(this2).parents('ol').length == 1) {

                if ($(this2).find('#is_mega_menu').val() == 'tab') {

                    $(this2).find('li.dd-item').each(function (ii, this3) {

                        if ($(this3).find('#source').val() != 'category') {
                            countOne++;
                        }

                        if ($(this3).parents('ol').length == 3) {
                            countOTwo++;
                        }

                    });

                }

            }

        });

        if (countOne != 0 && countOTwo != 0) {
            $.notify("<?php echo e(__('you_can_make_child_only_for_category_for_tab_mega_menu')); ?>", "danger");
            $.notify('you_can_make_child_max_length_2', "danger");
            return false;
        } else if (countOne != 0) {
            $.notify("<?php echo e(__('you_can_make_child_only_for_category_for_tab_mega_menu')); ?>", "danger");
            return false;
        } else if (countOTwo != 0) {
            $.notify('you_can_make_child_max_length_2', "danger");
            return false;
        }


    });

    function delete_menu_item(row_id) {
            var table_row = '#' + row_id
            var token =  "<?php echo e(csrf_token()); ?>";
            url = "<?php echo e(route('delete-menu-item')); ?>"

            swal({
                title: "<?php echo e(__('are_you_sure?')); ?>",
                text: "<?php echo e(__('it_will_be_deleted_permanently')); ?>",
                icon: "warning",
                buttons: true,
                buttons: ["<?php echo e(__('cancel')); ?>", "<?php echo e(__('delete')); ?>"],
                dangerMode: true,
                closeOnClickOutside: false
                })
            .then(function(confirmed){
                if (confirmed){
                     $.ajax({
                        url: url,
                        type: 'delete',
                        data: 'row_id=' + row_id + '&_token='+token,
                        dataType: 'json'
                     })
                     .done(function(response){
                        swal.stopLoading();
                        if(response.status == "success"){
                            swal("<?php echo e(__('deleted')); ?>!", response.message, response.status);
                            $(table_row).fadeOut(2000);
                        }else{
                            swal("Error!", response.message, response.status);
                        }
                     })
                     .fail(function(){
                        swal('Oops...', '<?php echo e(__('something_went_wrong_with_ajax')); ?>', 'error');
                     })
                }
            })
        }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/mgotv/Modules/Appearance/Providers/../Resources/views/menu_item.blade.php ENDPATH**/ ?>