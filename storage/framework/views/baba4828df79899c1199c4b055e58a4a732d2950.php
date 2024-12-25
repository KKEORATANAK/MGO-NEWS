<?php $__env->startSection('gallery-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gallery-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gallery'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('all-images-active'); ?>
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
                        <div class="col-12 col-lg-8">
                            
                            <form class="author-form" name="author-form" method="post"
                                  action="<?php echo e(route('add-album-image')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="add-new-page  bg-white p-20 m-b-20">
                                    <div class="add-new-header clearfix m-b-20">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="block-header">
                                                    <h2><?php echo e(__('add_gallery_image')); ?></h2>
                                                </div>
                                            </div>
                                            <?php if(Sentinel::getUser()->hasAccess(['post_write'])): ?>
                                                <div class="col-6 text-right">
                                                    <a href="<?php echo e(route('images')); ?>"
                                                       class="btn btn-primary btn-sm btn-add-new"><i
                                                            class="fa fa-bars"></i>
                                                        <?php echo e(__('gallery_images')); ?>

                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="language"><?php echo e(__('select_language')); ?> *</label>
                                            <select class="form-control dynamic-album" id="language" name="language"
                                                    required data-dependent="album_id">
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
                                            <label for="album_id"><?php echo e(__('album')); ?> *</label>
                                            <select class="form-control dynamic-album-tab" id="album_id" name="album_id"
                                                    required data-dependent="album_tab">
                                                <option value=""><?php echo e(__('select_album')); ?></option>
                                                <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($album->id); ?>"><?php echo e($album->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="album_tab"><?php echo e(__('tab')); ?> </label>
                                            <select class="form-control dynamic text-capitalize" id="album_tab" name="tab">
                                                <option value=""><?php echo e(__('select_album_first')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image-slug"
                                                   class="col-form-label"><?php echo e(__('title')); ?>

                                             </label>
                                            <input id="image-slug" name="title" value="" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="field" align="left">
                                            <label for="images" class="upload-file-btn btn btn-primary"><i
                                                    class="fa fa-folder input-file"
                                                    aria-hidden="true"></i> <?php echo e(__('select_image')); ?> *
                                            </label><br>
                                            <input type="file" id="images" class="d-none " name="files[]" required
                                                   multiple/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-t-20">
                                            <div class="form-group form-float form-group-sm text-right">
                                                <button type="submit" name="btnsubmit" class="btn btn-primary"><i
                                                        class="m-r-10 mdi mdi-plus"></i><?php echo e(__('add_image')); ?></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            
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

                $('.dynamic-album').change(function () {
                    if ($(this).val() != '') {
                        var select = $(this).attr("id");
                        var value = $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = "<?php echo e(csrf_token()); ?>";
                        $.ajax({
                            url: "<?php echo e(route('album-fetch')); ?>",
                            method: "POST",
                            data: {select: select, value: value, _token: _token},
                            success: function (result) {
                                $('#' + dependent).html(result);
                            }

                        })
                    }
                });

                $('.dynamic-album-tab').change(function () {
                    if ($(this).val() != '') {
                        var select = $(this).attr("id");
                        var value = $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = "<?php echo e(csrf_token()); ?>";
                        $.ajax({
                            url: "<?php echo e(route('album-tabs-fetch')); ?>",
                            method: "POST",
                            data: {select: select, value: value, _token: _token},
                            success: function (result) {
                                $('#' + dependent).html(result);
                            }

                        })
                    }
                });

                $('#language').change(function () {
                    $('#album_tab').val('');
                    $('#album_id').val('');
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Gallery/Providers/../Resources/views/add_gallery_image.blade.php ENDPATH**/ ?>