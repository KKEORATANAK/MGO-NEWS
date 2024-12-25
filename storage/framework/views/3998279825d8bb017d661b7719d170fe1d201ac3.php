<div class="entry-header">
    <div class="entry-thumbnail">
        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
            <?php if(isFileExist(@$post->image, $result = @$post->image->big_image)): ?>
                <img src="<?php echo e(safari_check() ? basePath(@$post->image).'/'.$result : static_asset('default-image/default-1080x1000.png')); ?> "
                     data-original=" <?php echo e(basePath($post->image)); ?>/<?php echo e($result); ?> "
                     class="img-fluid" alt="<?php echo $post->title; ?>">
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/default-1080x1000.png')); ?> " class="img-fluid"
                     alt="<?php echo $post->title; ?>">
            <?php endif; ?>
        </a>
    </div>
    <?php if($post->post_type=="video"): ?>
        <div class="video-icon">
            <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
        </div>
    <?php elseif($post->post_type=="audio"): ?>
        <div class="video-icon">
            <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/mgotv/resources/views/site/partials/home/primary/slider.blade.php ENDPATH**/ ?>