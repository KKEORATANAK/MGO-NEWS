<div class="thumb mb-4">

 <?php if($content['image'][0]['image'] != ""): ?>

     <?php if(isFileExist($content['image'][0]['image'] , $result =  $content['image'][0]['image']->original_image)): ?>
         <img src="<?php echo e(safari_check() ? basePath(@$content['image'][0]['image']).'/'.$result : static_asset('default-image/default-730x400.png')); ?> " data-original=" <?php echo e(basePath($content['image'][0]['image'])); ?>/<?php echo e($result); ?> " class="img-fluid"   alt="<?php echo $post->title; ?>"  >
     <?php else: ?>
      <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-730x400.png')); ?>" alt="<?php echo $post->title; ?>" >
     <?php endif; ?>
    <?php else: ?>
     <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-730x400.png')); ?>" alt="<?php echo $post->title; ?>" >
    <?php endif; ?>

</div><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/contents/image.blade.php ENDPATH**/ ?>