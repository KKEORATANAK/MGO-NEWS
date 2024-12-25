<?php
    $ad = data_get($widget, 'detail.ad');
?>

<?php if(!blank($ad)): ?>
    <div class="sg-widget">
        <div class="sg-ad">
            <?php if(data_get($ad, 'ad_type') == 'image'): ?>
                <a href="<?php echo e(data_get($ad, 'ad_url', '#')); ?>">
                    <?php if(isFileExist(@$ad->adImage, $result = @$ad->adImage->original_image)): ?>
                        <img src="<?php echo e(safari_check() ? basePath(@$ad->adImage).'/'.$result : static_asset('default-image/default-add-350x350.png')); ?> " data-original="<?php echo e(basePath($ad->adImage)); ?>/<?php echo e($result); ?>" class="img-fluid"   alt="<?php echo $ad->ad_name; ?>"  >
                    <?php else: ?>
                        <img src="<?php echo e(static_asset('default-image/default-add-300x250.png')); ?> "  class="img-fluid"   alt="<?php echo $ad->ad_name; ?>" >
                    <?php endif; ?>
                </a>
            <?php elseif(data_get($ad, 'ad_type') == 'code'): ?>
                <?php echo $ad->ad_code ?? ''; ?>

            <?php elseif(data_get($ad, 'ad_type') == 'text'): ?>
                <?php echo $ad->ad_text ?? ''; ?>

            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/widgets/ad_widget.blade.php ENDPATH**/ ?>