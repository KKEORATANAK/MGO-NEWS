<div class="row mb-4">
    <div class="col-lg-6">
        <div class="thumb">
            <?php if($content['image-text'][0]['image'] != ""): ?>
                <?php if(isFileExist($content['image-text'][0]['image'] , $result =  $content['image-text'][0]['image']->medium_image)): ?>
                    <img src="<?php echo e(safari_check() ? basePath(@$content['image-text'][0]['image']).'/'.$result : static_asset('default-image/default-358x215.png')); ?> " data-original=" <?php echo e(basePath($content['image-text'][0]['image'])); ?>/<?php echo e($result); ?> " class="img-fluid"   alt="<?php echo $post->title; ?>"  >
                <?php else: ?>
                    <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-358x215.png')); ?>" alt="<?php echo $post->title; ?>" >
                <?php endif; ?>
            <?php else: ?>
                <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-358x215.png')); ?>" alt="<?php echo $post->title; ?>" >
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="text">
            <p class="paragraph"><?php echo $content['image-text'][1]['text']; ?> </p>
        </div>
    </div>
</div>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/contents/image-text.blade.php ENDPATH**/ ?>