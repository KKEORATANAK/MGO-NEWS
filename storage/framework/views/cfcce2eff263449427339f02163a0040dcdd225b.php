<div class="entry-header">
    <div class="header-top p-4">
        <h3 class="entry-title"><?php echo $post->title ?? ''; ?></h3>
        <div class="entry-meta mb-2">
            <ul class="global-list">
                <li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                    <a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($post->updated_at)))); ?>"><?php echo e($post->updated_at->format('F j, Y')); ?></a>
                </li>
                <li><i class="fa fa-eye" aria-hidden="true"></i>
                    <span><?php echo e($post->total_hit); ?></span>
                </li>
            </ul>
        </div><!-- /.entry-meta -->
    </div>
    <div class="entry-thumbnail" height="100%">
        <?php echo $__env->make('site.pages.article.partials.detail_image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<div class="entry-content p-4">
    <?php if(@$post->post_type == 'audio'): ?>
        <?php echo $__env->make('site.pages.article.partials.audio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="paragraph">
        <?php echo $post->content; ?>

    </div>
    <?php if(isset($post->read_more_link)): ?>
        <div class="rss-content-actual-link">
            <a href="<?php echo e($post->read_more_link); ?>" class="btn btn-primary" target="_blank"><?php echo e(__('read_actual_content')); ?> <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
    <?php endif; ?>
    <?php echo $__env->make('site.pages.article.partials.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(settingHelper('adthis_option')==1 and settingHelper('addthis_public_id')!=null and settingHelper('addthis_toolbox')!=null): ?>
        <?php echo base64_decode(settingHelper('addthis_toolbox')); ?>

    <?php endif; ?>

    <?php if(@$post->user->permissions['author_show'] == 1): ?>
        <?php echo $__env->make('site.pages.article.partials.author', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/style_2.blade.php ENDPATH**/ ?>