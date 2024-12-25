<?php
    $blockPosts = $posts->take(4);
?>
<div class="sg-home-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="home-carousel" class="carousel slide slider-style-1" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $sliderPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php if($sliderPosts->first()->id == $post->id): ?> active <?php endif; ?>">
                                <div class="sg-post featured-post style_1">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                                <?php if(isFileExist(@$post->image, $result = @$post->image->big_image_two)): ?>
                                                    <img src="<?php echo e(safari_check() ? basePath(@$post->image).'/'.$result : static_asset('default-image/default-730x400.png')); ?>"
                                                         data-original=" <?php echo e(basePath($post->image)); ?>/<?php echo e($result); ?> "
                                                         class="img-fluid image-thumb" alt="<?php echo $post->title; ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo e(static_asset('default-image/default-730x400.png')); ?>"
                                                         class="img-fluid image-thumb" alt="<?php echo $post->title; ?>">
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
                                    <div class="entry-content absolute text-center">
                                        <div class="category" data-animation="animated pulse">
                                            <ul class="global-list justify-content-center">
                                                <?php if(isset($post->category->category_name)): ?>
                                                    <li>
                                                        <a href="<?php echo e(url('category',$post->category->slug)); ?>"><?php echo e($post->category->category_name); ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title" data-animation="animated pulse">
                                            <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><?php echo $post->title; ?></a>
                                        </h2>
                                        <div class="entry-meta" data-animation="animated pulse">
                                            <ul class="global-list justify-content-center">
                                                <li><?php echo e(__('post_by')); ?> <a
                                                        href="<?php echo e(route('site.author',['id' => $post->user->id])); ?>"> <?php echo e(data_get($post, 'user.first_name')); ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($post->updated_at)))); ?>"><?php echo e($post->updated_at->format('F j, Y')); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo e(__('previous')); ?></span>
                    </a>
                    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo e(__('next')); ?></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sg-breaking-news">
                    <div class="section-title">
                        <h1><?php echo e(__('breaking_news')); ?></h1>
                    </div>
                    <div class="breaking-news-slider">
                        <?php $__currentLoopData = $breakingNewss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="sg-post">
                                <div class="entry-content">
                                    <div class="category">
                                        <ul class="global-list">
                                            <?php if(isset($post->category->category_name)): ?>
                                                <li>
                                                    <a href="<?php echo e(url('category',$post->category->slug)); ?>"><?php echo e($post->category->category_name); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><?php echo \Illuminate\Support\Str::limit($post->title,100); ?></a>
                                    </h2>
                                    <div class="entry-meta">
                                        <ul class="global-list">
                                            <li>
                                                <a href="javascript:void(0)"><?php echo e(Carbon\Carbon::parse($post->updated_at)->diffForHumans()); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $blockPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="sg-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                    <?php if(isFileExist(@$post->image, @$post->image->medium_image)): ?>
                                        <img class="img-fluid"
                                             src="<?php echo e(safari_check() ? basePath(@$post->image).'/'.$result : static_asset('default-image/default-358x215.png')); ?> "
                                             data-original="<?php echo e(basePath(@$post->image)); ?>/<?php echo e($post->image->medium_image); ?>"
                                             alt="<?php echo $post->title; ?>">
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
                            <div class="category">
                                <ul class="global-list">
                                    <?php if(isset($post->category->category_name)): ?>
                                        <li>
                                            <a href="<?php echo e(url('category',$post->category->slug)); ?>"><?php echo e($post->category->category_name); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-content">
                            <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                <p><?php echo \Illuminate\Support\Str::limit($post->title, 50); ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/partials/home/primary/style_3.blade.php ENDPATH**/ ?>