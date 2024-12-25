<div class="row mb-4">
    <div class="col-lg-12">
        <?php if($content['ads'][0]['ads_type'] == 'image'): ?>
            <div class="thumb">
                <?php if(isFileExist($content['ads'][0]['detail'] , $result =  $content['ads'][0]['detail']->original_image)): ?>
                    <img src="<?php echo e(safari_check() ? basePath(@$content['ads'][0]['detail']).'/'.$result : static_asset('default-image/default-ads.png')); ?> " data-original=" <?php echo e(basePath($content['ads'][0]['detail'])); ?>/<?php echo e($result); ?> " class="img-fluid"   alt="<?php echo $post->title; ?>"  >
                <?php else: ?>
                    <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-ads.png')); ?>" alt="<?php echo $post->title; ?>" >
                <?php endif; ?>
            </div>
        <?php elseif($content['ads'][0]['ads_type'] == 'text'): ?>
            <div class="text">
                <p class="paragraph"><?php echo $content['image-text'][1]['text']; ?> </p>
            </div>
        <?php elseif($content['ads'][0]['ads_type'] == 'code'): ?>
            <?php echo $content['vimeo-embed'][0]['vimeo']; ?>

        <?php endif; ?>
    </div>
    <div class="col-lg-12">

    </div>
    <div class="col-lg-12">

    </div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/contents/ads.blade.php ENDPATH**/ ?>