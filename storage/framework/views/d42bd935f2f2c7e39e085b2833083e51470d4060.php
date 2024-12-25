<div class="post-author">
    <div class="d-flex mb-3">
        <div class="thumb">
            <?php if(@$post->user->profile_image != null): ?>
                <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" data-original=" <?php echo e(static_asset(@$post->user->profile_image)); ?>" class="img-fluid"   >
            <?php else: ?>
                <img src="<?php echo e(static_asset('site/images/others/author.png')); ?>" class="img-fluid">
            <?php endif; ?>
        </div>
        <div class="text">
            <h3><?php echo e(@$post->user->first_name.' '.@$post->user->last_name); ?></h3>
            <div class="sg-social">
                <ul class="global-list">
                    <?php if(@$post->user->social_media['facebook_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['facebook_url']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['twitter_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['twitter_url']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['instagram_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['instagram_url']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['google_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['google_url']); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['pinterest_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['pinterest_url']); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['youtube_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['youtube_url']); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                    <?php if(@$post->user->social_media['linkedin_url'] != null): ?>
                        <li><a href="<?php echo e(@$post->user->social_media['linkedin_url']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.sg-social -->
        </div>
    </div>
</div><!-- /.post-author -->
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/article/partials/author.blade.php ENDPATH**/ ?>