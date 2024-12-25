<?php
$video              = $content['video'][0]['video'];
$video_url          = $content['video'][2]['video_url'];
$video_url_type     = $content['video'][1]['video_url_type'];
$videoThumbnail     = $content['video'][3]['video_thumbnail'];

?>
<style type="text/css">
    .entry-thumbnail video{
        width: 100%;
    }
</style>
<div class="thumb mb-4">
    <div class="entry-header">
        <div class="entry-thumbnail" height="100%">

            <?php if($content['video'][0]['video_id'] != null): ?>

                    <?php if(isFileExist(@$videoThumbnail, @$videoThumbnail->big_image_two)): ?>

                        <video id='player_<?php echo e($video_count); ?>' controls
                            poster="<?php echo e(basePath($videoThumbnail)); ?>/<?php echo e($videoThumbnail->big_image_two); ?> "
                            height="100%">
                    <?php else: ?>
                        <video id='player_<?php echo e($video_count); ?>' controls
                            poster="<?php echo e(static_asset('default-image/default-730x400.png')); ?>" height="100%">
                    <?php endif; ?>

                    <?php if($video->v_144p==null and
                        $video->v_240p==null and
                        $video->v_360p==null and
                        $video->v_480p==null and
                        $video->v_720p==null and
                        $video->v_1080p==null
                    ): ?>
                        <source src="<?php echo e(basePath($video)); ?>/<?php echo e($video->original); ?>"
                                type="video/<?php echo e($video->video_type); ?>"/>

                    <?php else: ?>
                        <?php $video_version = array('v_1080p', 'v_720p', 'v_480p', 'v_360p', 'v_240p', 'v_144p') ?>

                        <?php $__currentLoopData = $video_version; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $version): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($video->$version !=null): ?>
                                <source src="<?php echo e(basePath($video)); ?>/<?php echo e($video->$version); ?>"
                                        size="<?php echo e(str_replace(array("v_1080p","v_720p","v_480p","v_360p","v_240p","v_144p"), array("1080", "720","576","480","360","240"), $version)); ?>"
                                        type="video/<?php echo e($video->video_type); ?>"/>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </video>

                <?php else: ?>
                    <?php if($video_url_type == "youtube_url"): ?>
                        <div id="player_<?php echo e($video_count); ?>" data-plyr-provider="youtube"
                            data-plyr-embed-id="<?php echo e(get_id_youtube($video_url)); ?>" height="100%"></div>
                    <?php elseif($video_url_type == "mp4_url"): ?>
                        <video id="player_<?php echo e($video_count); ?>" playsinline controls
                            data-poster="<?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->big_image_two); ?>"
                            height="100%">
                            <source src="<?php echo e($video_url); ?>" type="video/mp4"/>
                        </video>
                    <?php else: ?>
                        <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-730x400.png')); ?> "
                            alt="<?php echo $post->title; ?>">
                    <?php endif; ?>
                <?php endif; ?>
               
        </div>
    </div>
</div>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/contents/video.blade.php ENDPATH**/ ?>