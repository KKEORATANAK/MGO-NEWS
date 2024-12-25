<?php echo Form::open(['route' => 'change-password-by-me', 'method' => 'post']); ?>


    <div class="modal-body">
        <div class="form-group">
            <label for="name" class="col-form-label"><b><?php echo e(__('old_password')); ?></b></label>
            <input id="old_password" name="old_password" type="password" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="col-form-label"><b><?php echo e(__('new_password')); ?></b></label>
            <input id="password" name="password" type="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description" class="col-form-label"><b><?php echo e(__('confirm_password')); ?></b></label>
            <input id="password" name="password_confirmation" type="password" class="form-control"
                   data-parsley-equalto="#password" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i><?php echo e(__('close')); ?></button>
        <button type="submit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save')); ?></button>
    </div>

<?php echo e(Form::close()); ?>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Common/Providers/../Resources/views/modal/change-password.blade.php ENDPATH**/ ?>