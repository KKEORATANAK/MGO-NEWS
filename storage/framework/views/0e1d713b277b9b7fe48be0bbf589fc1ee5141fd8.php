<div class="entry-header">
    <div class="entry-thumbnail">
        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
            <?php if(isFileExist($post->image, $result = @$post->image->medium_image_three)): ?>
                <img src="<?php echo e(safari_check() ? basePath(@$post->image).'/'.$result : static_asset('default-image/default-123x83.png')); ?> "
                     data-original=" <?php echo e(basePath($post->image)); ?>/<?php echo e($result); ?> "
                     class="img-fluid lazy" width="100%" height="100%" alt="<?php echo $post->title; ?>">
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/default-255x175.png')); ?> " class="img-fluid"
                     alt="<?php echo $post->title; ?>">
            <?php endif; ?>
        </a>
    </div>
    <?php if($post->post_type=="video"): ?>
        <div class="video-icon small-block">
            <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
        </div>
    <?php elseif($post->post_type=="audio"): ?>
        <div class="video-icon small-block">
            <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/partials/home/category/block.blade.php ENDPATH**/ ?>