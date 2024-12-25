<?php
    //$posts = data_get($categorySection, 'category.post', collect([]));
?>

<div class="sg-section">
    <div class="section-content mt-3">
        <div class="section-title">
            <h1>
                <?php if(data_get($categorySection, 'label') == 'videos'): ?>
                    <?php echo e(__('videos')); ?>

                <?php else: ?>
                    <?php echo e(\Illuminate\Support\Str::upper(data_get($categorySection, 'label'))); ?>

                <?php endif; ?>
            </h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $posts->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="sg-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                    <?php if(isFileExist(@$post->image, $result = @$post->image->medium_image)): ?>
                                        <img src="<?php echo e(safari_check() ? basePath(@$post->image).'/'.$result : static_asset('default-image/default-358x215.png')); ?> "
                                             data-original=" <?php echo e(basePath(@$post->image)); ?>/<?php echo e($result); ?> "
                                             class="img-fluid lazy" alt="<?php echo $post->title; ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> "
                                             class="img-fluid" alt="<?php echo $post->title; ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <?php if($post->post_type=="video"): ?>
                                <div class="video-icon block">
                                    <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
                                </div>
                            <?php elseif($post->post_type=="audio"): ?>
                                <div class="video-icon block">
                                    <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="entry-content">
                            <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                <p><?php echo \Illuminate\Support\Str::limit($post->title, 50); ?></p></a>
                            <div class="entry-meta">
                                <ul class="global-list">
                                    <li><a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($post->updated_at)))); ?>"> <?php echo e($post->updated_at->format('F j, Y')); ?></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/partials/home/category/style_4.blade.php ENDPATH**/ ?>