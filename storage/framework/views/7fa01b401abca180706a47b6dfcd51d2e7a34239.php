<?php $__env->startSection('newsletter-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('newsletter-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('send_newsletter'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('newsletter_active'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => 'save-to-cron', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>


            <div class="row clearfix">
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
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">

                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('send_email_to_subscribers')); ?></h4>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="subject" class="col-form-label"><?php echo e(__('subject')); ?>*</label>
                                <input id="subject" name="subject" value="<?php echo e(old('subject')); ?>" required type="text"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="language"><?php echo e(__('type')); ?></label>
                                <select class="form-control" name="content_type" id="send_email_type">
                                    <?php $__currentLoopData = __('newsletter::send_email.send_email_type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>"><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12" id="bulk_email_type_container">
                            <div class="form-group">
                                <label for="language"><?php echo e(__('Bulk Email Type')); ?></label>
                                <select class="form-control" name="bulk_email_type" id="bulk_email_type">
                                    <?php $__currentLoopData = __('newsletter::send_email.bulk_email_type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>"><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 d-none" id="newsletter_post_container">
                            <div class="form-group">
                                <label for="language"><?php echo e(__('post')); ?></label>
                                <select class="form-control" name="single_content_type" id="newsletter_post">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 d-none" id="custom_message_container">
                            <div class="form-group">
                                <label for="message" class="col-form-label"><?php echo e(__('message')); ?></label>
                                <textarea id="content" name="custom_message" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo e(__('send_email')); ?>

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

<?php $__env->startPush('include_js'); ?>
    <script>
        $(document).ready(function () {
            $('#send_email_type').on('change', function () {
                let sendEMailType = $(this).val();
                $('#bulk_email_type_container').addClass('d-none');
                $('#newsletter_post_container').addClass('d-none');
                $('#custom_message_container').addClass('d-none');

                if (sendEMailType == <?php echo e(\Modules\Newsletter\Enums\SendEmailType::MULTIPLE); ?>) {
                    $('#bulk_email_type_container').removeClass('d-none');
                }

                if (sendEMailType == <?php echo e(\Modules\Newsletter\Enums\SendEmailType::SINGLE); ?>) {
                    $('#newsletter_post_container').removeClass('d-none');

                    $('#newsletter_post').select2({
                        ajax: {
                            method: "GET",
                            delay: 250,
                            url: '<?php echo e(route('newsletter.search.post')); ?>',
                            dataType: 'json',
                            data: function (params) {
                                return {
                                    search: params.term
                                }
                            },
                            processResults: function (data) {
                                return {
                                    results: data
                                }
                            }
                        }
                    });
                }

                if (sendEMailType == <?php echo e(\Modules\Newsletter\Enums\SendEmailType::CUSTOM); ?>) {
                    $('#custom_message_container').removeClass('d-none');
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Newsletter/Providers/../Resources/views/send_email.blade.php ENDPATH**/ ?>