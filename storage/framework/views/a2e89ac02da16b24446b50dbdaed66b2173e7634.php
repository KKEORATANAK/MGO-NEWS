<div class="entry-header">
    <div class="entry-thumbnail">
        <a href="<?php echo e(route('article.detail', ['id' => @$firstPost->slug])); ?>">
            <?php if(isFileExist(@$firstPost->image, $result =@$firstPost->image->medium_image)): ?>
                <img src="<?php echo e(safari_check() ? basePath(@$firstPost->image).'/'.$result : static_asset('default-image/default-358x215.png')); ?> "
                     data-original=" <?php echo e(basePath($firstPost->image)); ?>/<?php echo e($result); ?> "
                     class="img-fluid" alt="<?php echo $firstPost->title; ?>">
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> " class="img-fluid"
                     alt="<?php echo $firstPost->title; ?>">
            <?php endif; ?>
        </a>
    </div>
    <?php if($firstPost->post_type=="video"): ?>
        <div class="video-icon large-block">
            <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
        </div>
    <?php elseif($firstPost->post_type=="audio"): ?>
        <div class="video-icon large-block">
            <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/partials/home/category/first_post.blade.php ENDPATH**/ ?>