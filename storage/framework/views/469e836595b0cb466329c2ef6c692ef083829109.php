<?php
    $user= Modules\User\Entities\User::find($param[0]);
?>

<?php echo Form::open(['route' => ['update-user-info',$param[0]], 'method' => 'post','enctype'=>'multipart/form-data']); ?>

    <div class="modal-body">

        <div class="form-group">
            <label for="first_name" class="col-form-label"><?php echo e(__('first_name')); ?></label>
            <input id="first_name" name="first_name" value="<?php echo e($user->first_name); ?>" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name" class="col-form-label"><?php echo e(__('last_name')); ?></label>
            <input id="last_name" name="last_name" value="<?php echo e($user->last_name); ?>" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label"><?php echo e(__('email')); ?></label>
            <input id="email" disabled value="<?php echo e($user->email); ?>" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="newsletter" class="col-form-label"><?php echo e(__('newsletter')); ?></label>
            <select name="newsletter_enable" class="form-control">
                <option value="0" <?php if($user->newsletter_enable==0): ?> selected <?php endif; ?>><?php echo e(__('disable')); ?></option>
                <option value="1" <?php if($user->newsletter_enable==1): ?> selected <?php endif; ?>><?php echo e(__('enable')); ?></option>
            </select>
        </div>

        <div class="form-group">
            <label for="profile_image" class="upload-file-btn btn btn-primary"><i
                    class="fa fa-folder input-file"
                    aria-hidden="true"></i> <?php echo e(__('select_image')); ?></label>
            <input id="profile_image" name="profile_image" onChange="swapImage(this)" data-index="0"
                   type="file" class="form-control d-none" accept="image/*">
        </div>
        <div class="form-group text-center">
            <?php if(profile_exist($user->profile_image) && $user->profile_image!=null): ?>
                <img src="<?php echo e(static_asset($user->profile_image)); ?>" data-index="0"
                     height="200" width="200" alt="img">
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" height="200" width="200" data-index="0" alt="user" class="img-responsive ">
            <?php endif; ?>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i><?php echo e(__('close')); ?></button>
        <button type="submit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save')); ?></button>
    </div>
<?php echo e(Form::close()); ?>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Common/Providers/../Resources/views/modal/edit-user.blade.php ENDPATH**/ ?>