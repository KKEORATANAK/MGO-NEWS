
<?php echo Form::open(['route' => ['send-email-to',$param[0]], 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>


    <div class="modal-body">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="subject" class="col-form-label"><?php echo e(__('subject')); ?></label>
                <input id="subject" name="subject" value="<?php echo e(old('subject')); ?>" required type="text" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="message" class="col-form-label"><?php echo e(__('message')); ?></label>
                <textarea name="message" class="form-control content" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i><?php echo e(__('close')); ?></button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo e(__('send_email')); ?></button>
    </div>
<?php echo e(Form::close()); ?>

<script>
    tinymce.init({
        selector: "textarea.content",
        theme: "modern",
        height: 400,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
</script>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Common/Providers/../Resources/views/modal/send-email.blade.php ENDPATH**/ ?>