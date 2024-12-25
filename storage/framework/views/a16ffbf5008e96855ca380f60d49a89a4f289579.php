<?php
    //$posts = data_get($categorySection, 'category.post', collect([]));
    $blockPosts = $posts->skip(1)->take(4);
    $firstPost = $posts->first();
?>

<div class="sg-section">
    <div class="section-content">
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
            <div class="col-lg-6">
                <div class="sg-post">
                    <?php echo $__env->make('site.partials.home.category.first_post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="entry-content">
                        <h3 class="entry-title"><a href="<?php echo e(route('article.detail', ['id' => $firstPost->slug])); ?>"><?php echo \Illuminate\Support\Str::limit($firstPost->title, 50); ?></a></h3>
                        <div class="entry-meta mb-2">
                            <ul class="global-list">
                                <li><?php echo e(__('post_by')); ?> <a href="<?php echo e(route('site.author',['id' => $firstPost->user->id])); ?>"><?php echo e(data_get($firstPost, 'user.first_name')); ?></a></li>
                                <li><a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($firstPost->updated_at)))); ?>"><?php echo e($firstPost->updated_at->format('F j, Y')); ?></a></li>
                            </ul>
                        </div>
                        <p> <?php echo strip_tags(\Illuminate\Support\Str::limit($firstPost->content, 130)); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php $__currentLoopData = $blockPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="sg-post small-post post-style-1">
                        <?php echo $__env->make('site.partials.home.category.post_block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="entry-content">
                           <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><p><?php echo \Illuminate\Support\Str::limit($post->title, 25); ?></p></a>
                            <div class="entry-meta">
                                <ul class="global-list">
                                    <li><?php echo e(__('post_by')); ?> <a href="<?php echo e(route('site.author',['id' => $firstPost->user->id])); ?>"> <?php echo e(data_get($post, 'user.first_name')); ?></a></li>
                                    <li><a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($post->updated_at)))); ?>"> <?php echo e($post->updated_at->format('F j, Y')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/partials/home/category/style_2.blade.php ENDPATH**/ ?>