<input type="hidden" value="<?php echo e($content_count); ?>" id="content_count">
<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-2 " id="row_<?php echo e($video->id); ?>">

        <?php if(isFileExist(@$video, @$video->video_thumbnail)): ?>
            <img id='<?php echo e($video->id); ?>' src="<?php echo e(basePath($video)); ?>/<?php echo e($video->video_thumbnail); ?>" alt="video"
                 class="video img-responsive img-thumbnail">
        <?php else: ?>
            <img id='<?php echo e($video->id); ?>' src="<?php echo e(static_asset('default-image/default-video-100x100.png')); ?>" alt="video"
                 class="video img-responsive img-thumbnail">
        <?php endif; ?>

        <label class="video_lvl" for="<?php echo e($video->id); ?>"><?php echo e($video->video_name); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Gallery/Providers/../Resources/views/ajax-videos.blade.php ENDPATH**/ ?>