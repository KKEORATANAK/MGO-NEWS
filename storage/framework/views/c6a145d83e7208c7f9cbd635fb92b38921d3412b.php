<?php $__env->startSection('rss'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => ['save-rss-feed'],'method' => 'post']); ?>


            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-header clearfix m-b-20">
                        <div class="row">
                            <div class="col-6">
                                <div class="block-header">
                                    <h2><?php echo e(__('add_rss_source')); ?></h2>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?php echo e(route('rss-feeds')); ?>" class="btn btn-primary btn-add-new"><i
                                        class="fas fa-list"></i> <?php echo e(__('rss_feeds')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-12 col-lg-8">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('feed_details')); ?></h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="feed_name" class="col-form-label"><?php echo e(__('feed_name')); ?> *</label>
                                        <input id="feed_name" name="name"
                                               value="<?php echo e(old('name')); ?>" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="feed_url" class="col-form-label"> <b><?php echo e(__('feed_url')); ?> * </b>
                                        (<?php echo e(__('valid_feed_url')); ?>)</label>
                                        <input id="feed_url" name="feed_url" placeholder="<?php echo e(__('feed_url')); ?>" value="<?php echo e(old('feed_url')); ?>" type="text"
                                             required  class="form-control">
                                    </div>
                                </div>
                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="post_content" class="col-form-label"><?php echo e(__('number_of_post_to_import')); ?> *</label>
                                        <input type="number" class="form-control max-100" name="post_limit" placeholder="<?php echo e(__('number_of_post_to_import')); ?>" value="" min="1" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <!-- options section start -->
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('options')); ?></h2>
                                </div>
                                <div class="row p-l-15">
                                    <div class="col-12 col-md-4">
                                        <div class="form-title">
                                            <label for="auto_update"><?php echo e(__('auto_update')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="auto_update" id="auto_update" checked value="1"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="auto_update" id="auto_update" value="0"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row p-l-15">
                                    <div class="col-12 col-md-4">
                                        <div class="form-title">
                                            <label for="show_read_more"><?php echo e(__('show_read_more')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="show_read_more" id="show_read_more" checked value="1"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="show_read_more" id="show_read_more" value="0"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row p-l-15">
                                    <div class="col-12 col-md-4">
                                        <div class="form-title">
                                            <label for="show_author"><?php echo e(__('keep_post_original_publish_date')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="keep_date" id="keep_date" checked value="1"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="keep_date" id="keep_date" value="0"
                                                   class="custom-control-input">
                                            <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- options section end -->
                            <!-- SEO section start -->
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('seo_details')); ?></h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="post-keywords" class="col-form-label"><b><?php echo e(__('keywords')); ?></b>
                                            (<?php echo e(__('meta_tag')); ?>)</label>
                                        <input id="post-keywords" name="meta_keywords"
                                               value="<?php echo e(old('meta_keywords')); ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="post_tags" class="col-form-label"><?php echo e(__('tags')); ?></label>
                                        <input id="post_tags" name="tags" type="text" value="<?php echo e(old('tags')); ?>"
                                               data-role="tagsinput" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="post_desc"><b><?php echo e(__('description')); ?></b> (<?php echo e(__('meta_tag')); ?>)</label>
                                        <textarea class="form-control" id="meta_description"
                                                  value="<?php echo e(old('meta_description')); ?>" name="meta_description"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- SEO section end -->
                        </div>
                        <!-- Main Content section end -->

                        <!-- right sidebar start -->
                        <div class="col-12 col-lg-4">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="post_language"><?php echo e(__('select_language')); ?>*</label>
                                        <select class="form-control dynamic-category" id="post_language" name="language"
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
                                        <label for="category_id"><?php echo e(__('category')); ?>*</label>

                                        <select class="form-control dynamic" id="category_id" name="category_id"
                                                data-dependent="sub_category_id" required>
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
                                        <label for="sub_category_id"><?php echo e(__('sub_category')); ?></label>
                                        <select class="form-control dynamic" id="sub_category_id" name="sub_category_id">
                                            <option value=""><?php echo e(__('select_sub_category')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="col-md-12">
                                    <div class="block-header">
                                        <h2><?php echo e(__('article_detail')); ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio detail-control-inline">
                                                <input type="radio" name="layout" id="detail_style_1" value="default" checked  class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <img src="<?php echo e(static_asset('default-image/Detail/detail_1.png')); ?>" alt="" class="img-responsive cat-block-img">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio detail-control-inline">
                                                <input type="radio" name="layout" id="detail_style_2" value="style_2"  class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <img src="<?php echo e(static_asset('default-image/Detail/detail_2.png')); ?>" alt="" class="img-responsive cat-block-img">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio detail-control-inline">
                                                <input type="radio" name="layout" id="detail_style_3" value="style_3"  class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <img src="<?php echo e(static_asset('default-image/Detail/detail_3.png')); ?>" alt="" class="img-responsive cat-block-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2><?php echo e(__('publish')); ?>*</h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" id="post_status" name="status" required>
                                            <option value="1"><?php echo e(__('published')); ?></option>
                                            <option value="0"><?php echo e(__('draft')); ?></option>
                                            <option value="2"><?php echo e(__('scheduled')); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 divScheduleDate">
                                    <label for="scheduled_date"><?php echo e(__('schedule_date')); ?></label>
                                    <div class="input-group">
                                        <label class="input-group-text" for="scheduled_date"><i
                                                class="fa fa-calendar-alt"></i></label>
                                        <input type="text" class="form-control date" id="scheduled_date"
                                               name="scheduled_date"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="custom-control" for="btnSubmit"></label>
                                        <button type="submit" name="btnSubmit" class="btn btn-primary pull-right"><i
                                                class="m-r-10 mdi mdi-plus"></i><?php echo e(__('add_feed')); ?></button>
                                        <label class="" for="btnSubmit"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right sidebar end -->
                    </div>
                </div>
            </div>
        <?php echo Form::close(); ?>

        <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>
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


            $('#post_language').change(function () {
                $('#category_id').val('');
                $('#sub_category_id').val('');
            });

            $('.dynamic').change(function () {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = "<?php echo e(csrf_token()); ?>";
                    $.ajax({
                        url: "<?php echo e(route('subcategory-fetch')); ?>",
                        method: "POST",
                        data: {select: select, value: value, _token: _token},
                        success: function (result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#category').change(function () {
                $('#sub_category_id').val('');
            });
        });
    </script>

    <script type="text/javascript" src="<?php echo e(static_asset('js/post.js')); ?>"></script>
    <script src="<?php echo e(static_asset('js/tagsinput.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/import_rss.blade.php ENDPATH**/ ?>