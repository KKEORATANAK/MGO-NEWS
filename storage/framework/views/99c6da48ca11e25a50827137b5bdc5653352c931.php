<div class="row mb-4">
    <div class="col-lg-4">
        <div class="text">
            <p class="paragraph"><?php echo $content['text-image-text'][0]['text_1']; ?> </p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="thumb">
            <?php if($content['text-image-text'][1]['image'] != ""): ?>
                <?php if(isFileExist($content['text-image-text'][1]['image'] , $result =  $content['text-image-text'][1]['image']->medium_image_three)): ?>
                    <img src="<?php echo e(safari_check() ? basePath(@$content['text-image-text'][1]['image']).'/'.$result : static_asset('default-image/default-255x175.png')); ?> " data-original=" <?php echo e(basePath($content['text-image-text'][1]['image'])); ?>/<?php echo e($result); ?> " class="img-fluid"   alt="<?php echo $post->title; ?>"  >
                <?php else: ?>
                    <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-255x175.png')); ?>" alt="<?php echo $post->title; ?>" >
                <?php endif; ?>
            <?php else: ?>
                <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-255x175.png')); ?>" alt="<?php echo $post->title; ?>" >
            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="text">
            <p class="paragraph"><?php echo $content['text-image-text'][2]['text_2']; ?></p>
        </div>
    </div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/contents/text-image-text.blade.php ENDPATH**/ ?>