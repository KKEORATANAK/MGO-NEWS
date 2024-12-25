<?php $__currentLoopData = $audios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-2 " id="row_<?php echo e($audio->id); ?>">
        <img id='<?php echo e($audio->id); ?>' for="<?php echo e($audio->id); ?>" src="<?php echo e(static_asset('default-image/music-100x100.png')); ?>" alt="<?php echo e($audio->audio_name); ?>"
             class="audio img-responsive img-thumbnail">

        <label class="audio_lvl" id="audio_lvl" for="<?php echo e($audio->id); ?>"><?php echo e($audio->audio_name); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/Modules/Gallery/Providers/../Resources/views/ajax-audios.blade.php ENDPATH**/ ?>