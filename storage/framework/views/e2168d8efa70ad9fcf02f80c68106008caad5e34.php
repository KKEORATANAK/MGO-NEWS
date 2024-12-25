<?php
    $message= Modules\Contact\Entities\ContactMessage::findOrFail($param[0]);
    $message->message_seen=1;
    $message->save();
?>

<div class="modal-body">
    <div class="row">
        <label for="name" class="col-form-label col-md-12"><b><?php echo e($message->name); ?></b> <?php echo e($message->email); ?></label>
        <div class="col-md-12">
            <textarea disabled rows="10" class="form-control"><?php echo $message->message; ?></textarea>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('close')); ?></button>
</div><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Common/Providers/../Resources/views/modal/view-message.blade.php ENDPATH**/ ?>