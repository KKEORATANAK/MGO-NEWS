<div id="media-gallery" class="modal fade image-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('image_gallery')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <?php echo Form::open(['id'=>'imageUploadForm','method' => 'post','enctype'=>'multipart/form-data']); ?>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="image" class="upload-file-btn btn btn-primary  btn-block"><i
                                        class="fa fa-folder input-file" aria-hidden="true"></i> <?php echo e(__('add_image')); ?>

                                </label>
                                <input id="image" name="image" type="file" class="form-control d-none" required
                                       onChange="swapImage(this);uploadBtn()" data-index="0">
                            </div>
                            <div class="form-group">
                                <div class="form-group text-center">
                                    <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?> "
                                         id="perview_current_image"
                                         data-index="0" width="200" height="200" alt="image"
                                         class="img-responsive img-thumbnail">
                                </div>
                            </div>
                            <div class="form-group" id="divUploadBtn">
                                <div class="form-group text-center">
                                    <button type="submit" name="btn_image_upload" id="media-upload-btn"
                                            class="btn btn-primary btn-block"><i
                                            class="fas fa-cloud-upload-alt"></i> <?php echo e(__('upload')); ?></button>
                                </div>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>

                    <div class="col-md-8">
                        <div class="row" id="media-library"></div>
                        <input type="hidden" id="count" value="1">

                        <div class="ajax-loading" id="ajax-image-loading"><img
                                src="<?php echo e(static_asset('site/images/preloader-2.gif')); ?>"/>
                        </div>

                        <div class="load-more" id="load-more-image"><a href="javascript:void(0)"
                                                                       class=""><?php echo e(__('load_more')); ?></a></div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="selectImage" class="btn btn-primary selectImage"
                        data-dismiss="modal"><?php echo e(__('select_image')); ?></button>
                <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('close')); ?></button>
                <?php if(Sentinel::getUser()->roles[0]->id != 4 && Sentinel::getUser()->roles[0]->id != 5): ?>
                    <div class="delete-image-btn" id="delete-image-btn">
                        <button type="button" class='btn btn-danger'><?php echo e(__('delete')); ?></button>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function (e) {
        var image_page_no = 1;
        url = "<?php echo e(route('fetch-image')); ?>";

        $(document).on('click', '.btn-image-modal', function () {

            var content_count = $(this).parents('.add-new-page').find('#content_count').val();


            $('#selectImage').css('display', 'none');
            $('#delete-image-btn').css('display', 'none');
            $('#ajax-image-loading').hide();
            $('#load-more-image').show();
            $("#media-library").empty();
            $('#count').val(1);
            $('#imageCount').val(1);


            window.value = $(this).attr('data-id');


            if (typeof content_count === "undefined") {
                content_count = '';
            }

            var formData = {
                count: $('#count').val(),
                content_count: content_count
            };


            console.log(formData);

            $.ajax({
                url: url,
                type: 'get',
                data: formData,
                dataType: 'html',
                beforeSend: function () {
                    $('#ajax-image-loading').show();
                },
                success: function (data) {
                    console.log(data);

                    if (parseInt($("#imageCount").val()) * 24 >= parseInt($("#images").val())) {
                        $('#load-more-image').hide();
                        $('#ajax-image-loading').html('<?php echo e(__('no_more_records')); ?>');
                    } else {
                        $('#ajax-image-loading').hide();
                        $('#load-more-image').show();
                    }

                    $("#media-library").html(data);
                    $("#imageCount").val(parseInt($("#imageCount").val()) + 1);
                }
            })
                .fail(function () {
                    $('#ajax-image-loading').hide();
                    swal('Oops...', '<?php echo e(__('something_went_wrong_with_ajax')); ?>', 'error');
                })
        });


        // $("#media-library").scroll(function(){
        $(document).on('click', '#load-more-image', function () {


            // var ele = document.getElementById('media-library');
            // if(Math.round(ele.scrollHeight - ele.scrollTop) === ele.clientHeight){
            image_page_no++;
            let next_url = url + '?page=' + image_page_no;

            $.ajax({
                url: next_url,
                type: 'get',
                beforeSend: function () {
                    $('#ajax-image-loading').show();
                },
                dataType: 'html',
                success: function (data) {

                    if (parseInt($("#imageCount").val()) * 24 >= parseInt($("#images").val())) {
                        $('#load-more-image').hide();
                        $('#ajax-image-loading').html('<?php echo e(__('no_more_records')); ?>');
                    } else {
                        $('#ajax-image-loading').hide();
                        $('#load-more-image').show();

                    }

                    $("#media-library").append(data);
                    $("#imageCount").val(parseInt($("#imageCount").val()) + 1);
                }
            })
                .fail(function () {
                    $('#ajax-image-loading').hide();
                    swal('Oops...', '<?php echo e(__('something_went_wrong_with_ajax')); ?>', 'error');
                })
            // }
        });

        $('#imageUploadForm').on('submit', (function (e) {
            e.preventDefault();
            $("#media-upload-btn").prop('disabled', true);
            $("#media-upload-btn").html('<i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only"></span> Loading...');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                }
            });

            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('image-upload')); ?>",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data[0].status == 'success') {
                        $("#media-library").prepend(
                            <?php if(settingHelper('default_storage') =='local'): ?>
                                '<div class="col-md-2" id="row_' + data[0].data.id + '"><img id="' + data[0].data.id + '" src="<?php echo e(asset("/")); ?>' + data[1] + '" alt="image" class="image img-responsive img-thumbnail"></div>'
                        <?php else: ?>
                            '<div class="col-md-2" id="row_' + data[0].data.id + '"><img id="' + data[0].data.id + '" src="https://s3.<?php echo e(config('filesystems.disks.s3.region')); ?>.amazonaws.com/<?php echo e(config('filesystems.disks.s3.bucket')); ?>/' + data[1] + '" alt="image" class="image img-responsive img-thumbnail"></div>'
                        <?php endif; ?>);
                        $('#perview_current_image').attr('src', "<?php echo e(static_asset('default-image/default-100x100.png')); ?>");
                        $.notify('successfully image uploaded to gallery', "success");
                        $("#image").val('');
                        $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                        $("#media-upload-btn").prop('disabled', false);
                        $("#divUploadBtn").show();
                    } else {
                        $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                        $("#media-upload-btn").prop('disabled', false);
                        $("#divUploadBtn").show();
                        $.notify(data[1].message, "error");
                    }
                },

                error: function (data) {
                    if (data.responseJSON.errors['image'] !== undefined) {
                        $.notify(data.responseJSON.errors['image'], "danger");
                    }
                    $.notify(data.responseJSON.message, "danger");
                    $("#media-upload-btn").html('<i class="fas fa-cloud-upload-alt"></i> Upload');
                    $("#media-upload-btn").prop('disabled', false);
                    // $('#error_msg').append(data.responseJSON.message);
                    // console.log(data.responseJSON.message);
                }
            });
        }));

        var selected_image_id = '';

        $(document).on('click', '.image', function () {

            $('.image').removeClass('selected');
            $('#delete-image-btn').css('display', 'block');
            $('#selectImage').css('display', 'block');
            selected_image_id = $(this).attr('id');
            selected_image_src = $(this).attr('src');
            $(this).addClass('selected');

        });

        $("#selectImage").on('click', function () {

            var content_count = $(this).closest('.modal-content').find('#content_count').val();

            if (content_count == "") {

                if (window.value == 1 || window.value == 0) {
                    $('#image_id').val(selected_image_id);
                    $('#image_preview').attr('src', selected_image_src);
                } else if (window.value == 2) {
                    $('#video_thumbnail_id').val(selected_image_id);
                    $('#video_thumb_preview').attr('src', selected_image_src);
                }

            } else {

                if (window.value == 1) {

                    $("#image_content_" + content_count + "").find('#image_id_content').val(selected_image_id);
                    $("#image_content_" + content_count + "").find('#image_preview_content').attr('src', selected_image_src);

                } else if (window.value == 2) {


                    $("#video_content_" + content_count + "").find('#video_thumbnail_id_content').val(selected_image_id);
                    $("#video_content_" + content_count + "").find('#video_thumb_preview_content').attr('src', selected_image_src);
                }

            }


        });


        $(".delete-image-btn").on('click', function () {
            var div_row = '#row_' + selected_image_id
            var token = "<?php echo e(csrf_token()); ?>";
            deleteurl = "<?php echo e(route('delete-image')); ?>"

            swal({
                title: "<?php echo e(__('are_you_sure?')); ?>",
                text: "<?php echo e(__('it_will_be_deleted_permanently')); ?>",
                icon: "warning",
                buttons: true,
                buttons: ["<?php echo e(__('cancel')); ?>", "<?php echo e(__('delete')); ?>"],
                dangerMode: true,
                closeOnClickOutside: false
            })
                .then(function (confirmed) {
                    if (confirmed) {
                        $.ajax({
                            url: deleteurl,
                            type: 'delete',
                            data: 'row_id=' + selected_image_id + '&_token=' + token,
                            dataType: 'json'
                        })
                            .done(function (response) {
                                swal.stopLoading();
                                if (response.status == "success") {
                                    console.log(response);
                                    swal("<?php echo e(__('deleted')); ?>!", response.message, response.status);
                                    $(div_row).fadeOut(2000);

                                    console.log($('#image_id').val());

                                    // if($('#video_thumbnail_id').val() == selected_image_id){
                                    //     $('#video_thumbnail_id').removeAttr('value');
                                    //     $('#video_thumb_preview').attr('src', '<?php echo e(static_asset('default-image/default-100x100.png')); ?>');
                                    // }

                                    $(".image_id").each(function () {
                                        if ($(this).val() != "") {

                                            if ($(this).val() == selected_image_id) {
                                                $(this).removeAttr('value');
                                                $(this).parents('.add-new-page').find('.image_preview').attr('src', '<?php echo e(static_asset('default-image/default-100x100.png')); ?>');

                                            }

                                        }

                                    });


                                } else {
                                    swal("Error!", response.message, response.status);
                                }
                            })
                            .fail(function () {
                                swal('Oops...', '<?php echo e(__('something_went_wrong_with_ajax')); ?>', 'error');
                            })
                    }
                })
        });

    });


</script>


<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Gallery/Providers/../Resources/views/image-gallery.blade.php ENDPATH**/ ?>