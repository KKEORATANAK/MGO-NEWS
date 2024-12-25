
<?php echo Form::open(['route' => 'add-menu', 'method' => 'post']); ?>


    <div class="modal-body">
        <div class="form-group">
            <label for="title" class="col-form-label"><b><?php echo e(__('title')); ?></b></label>
            <input id="title" name="title" type="text" required class="form-control">
        </div>

        <div class="form-group">
            <label for="remark" class="col-form-label"><b><?php echo e(__('remark')); ?></b></label>
            <textarea name="remark" class="form-control" id="remark" cols="10" rows="5"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i><?php echo e(__('close')); ?></button>
        <button type="submit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save')); ?></button>
    </div>

<?php echo e(Form::close()); ?>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Common/Providers/../Resources/views/modal/add-menu.blade.php ENDPATH**/ ?>