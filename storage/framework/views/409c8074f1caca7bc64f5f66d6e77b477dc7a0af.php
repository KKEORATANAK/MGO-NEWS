
<div class="add-new-page content_<?php echo e($content_count); ?> bg-white p-20 m-b-20">
    <div class="row">
        <div class="col-12">
            <div class="right"><button type="button" class="btn btn-danger px-1 py-0 float-right row_remove"><i class="m-r-0 mdi mdi-minus"></i></button></div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="language"><?php echo e(__('ads')); ?></label>
                <select class="form-control" name="new_content[<?php echo e($content_count); ?>][ads][ads]" id="ad">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ad->id); ?>" <?php echo e(isset($content)? ($content['ads'][0]['ads'] == $ad->id? 'selected':''):''); ?>><?php echo e($ad->ad_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
</div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Post/Providers/../Resources/views/contents/ads.blade.php ENDPATH**/ ?>