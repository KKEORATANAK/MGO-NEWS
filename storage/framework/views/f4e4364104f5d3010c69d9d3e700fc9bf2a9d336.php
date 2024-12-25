<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/plyr.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(static_asset('reaction/reaction.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(static_asset('reaction/reaction-2.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="sg-page-content">
        <div class="container">
            <div class="entry-header mb-4">
                <div class="entry-thumbnail">
                    <?php if($post->layout == 'style_3'): ?>
                        <?php echo $__env->make('site.pages.article.partials.detail_image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8 sg-sticky">
                    <div class="theiaStickySidebar post-details">
                        <div class="sg-section">
                            <div class="section-content">
                                <div class="sg-post">
                                    <?php if($post->layout =='default'): ?>
                                        <?php echo $__env->make('site.pages.article.style_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php elseif($post->layout == 'style_2'): ?>
                                        <?php echo $__env->make('site.pages.article.style_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php elseif($post->layout == 'style_3'): ?>
                                        <?php echo $__env->make('site.pages.article.style_3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                </div>
                                

                                <?php if($post->tags!=null): ?>
                                    <div class="sg-section mb-4">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('tags')); ?></h1>
                                            </div>

                                            <div class="tagcloud tagcloud-style-1">
                                                <?php if(!blank($tags = explode(',', $post->tags))): ?>
                                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(url('tags/'.$tag)); ?>"><?php echo e($tag); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if(settingHelper('inbuild_comment') == 1): ?>
                                    <div class="sg-section">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('comment')); ?> / <?php echo e(__('reply_from')); ?></h1>
                                            </div>
                                            <form class="contact-form" name="contact-form" method="post" action="<?php echo e(route('article.save.comment')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="four"><?php echo e(__('comments')); ?></label>
                                                            <textarea name="comment" required="required"
                                                                      class="form-control" rows="7" id="four"
                                                                      placeholder="this is message..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <?php if(Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()): ?>
                                                        <button type="submit" class="btn btn-primary"><?php echo e(__('post')); ?> <?php echo e(__('comment')); ?></button>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary" href="<?php echo e(route('site.login.form')); ?>"><?php echo e(__('comment')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <?php if(!blank($comments = data_get($post, 'comments'))): ?>
                                        <div class="sg-section">
                                            <div class="section-content">
                                                <div class="sg-comments-area">
                                                    <div class="section-title">
                                                        <h1><?php echo e(__('comments')); ?></h1>
                                                    </div>
                                                    <?php echo $__env->make('site.post.comment', ["comments" => $comments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if(settingHelper('facebook_comment')==1): ?>
                                    <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-numposts="5" data-width="100%"></div>
                                <?php endif; ?>

                                <?php if(settingHelper('disqus_comment')==1): ?>
                                <!-- disqus comments -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="disqus_thread"></div>
                                            <script>
                                                var disqus_config = function () {
                                                    this.page.url = "<?php echo e(url()->current()); ?>";  // Replace PAGE_URL with your page's canonical URL variable
                                                    this.page.identifier = "<?php echo e($post->id); ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                };

                                                (function() { // DON'T EDIT BELOW THIS LINE
                                                    var d = document, s = d.createElement('script');
                                                    s.src = 'https://<?php echo e(settingHelper('disqus_short_name')); ?>.disqus.com/embed.js';
                                                    s.setAttribute('data-timestamp', +new Date());
                                                    (d.head || d.body).appendChild(s);
                                                })();
                                            </script>
                                            <noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>
                                            <script id="dsq-count-scr" src="//<?php echo e(settingHelper('disqus_short_name')); ?>.disqus.com/count.js" async></script>
                                        </div>
                                    </div>
                                    <!-- END disqus comments -->
                                <?php endif; ?>


                                <?php if(!blank($relatedPost)): ?>
                                    <div class="sg-section">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('related_post')); ?></h1>
                                            </div>
                                            <div class="row text-center">
                                                <?php $__currentLoopData = $relatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-lg-6">
                                                        <div class="sg-post post-style-2">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <a href="<?php echo e(route('article.detail', [$item->slug])); ?>">
                                                                        <?php if(isFileExist(@$item->image, $result =  @$item->image->medium_image)): ?>
                                                                            <img src="<?php echo e(safari_check() ? basePath(@$item->image).'/'.$result : static_asset('default-image/default-358x215.png')); ?> " data-original="<?php echo e(basePath(@$item->image)); ?>/<?php echo e($result); ?>" class="img-fluid" <?php echo $item->title; ?>>
                                                                        <?php else: ?>
                                                                            <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> "  <?php echo $item->title; ?>>
                                                                        <?php endif; ?>
                                                                    </a>
                                                                </div>
                                                                <?php if($item->post_type=="video"): ?>
                                                                    <div class="video-icon large-block">
                                                                        <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
                                                                    </div>
                                                                <?php elseif($item->post_type=="audio"): ?>
                                                                    <div class="video-icon large-block">
                                                                        <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <div class="category block">
                                                                    <ul class="global-list">
                                                                        <?php if(isset($post->category->category_name)): ?>
                                                                            <li><a href="<?php echo e(url('category',$post->category->slug)); ?>"><?php echo e($post->category->category_name); ?></a></li>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="entry-content">
                                                                <h3 class="entry-title"><a href="<?php echo e(route('article.detail', [$item->slug])); ?>"><?php echo $item->title ?? ''; ?></a></h3>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 sg-sticky">
                    <div class="sg-sidebar theiaStickySidebar">
                        <?php echo $__env->make('site.partials.right_sidebar_widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
    <input type="hidden" id="post_id" value="<?php echo e($post->id); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('player'); ?>
    <script src="<?php echo e(static_asset('site/js')); ?>/plyr.js"></script>
    <script src="<?php echo e(static_asset('site/js')); ?>/plyr_ini.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script>

    $(".emoji-2").on("click", function () {
        var url = $('#url').val();

        $('[data-toggle="tooltip"]').tooltip();

        var formData = {
            data_reaction: $(this).attr("data-reaction"),
            id: $('#post_id').val()
        };

        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'post/reaction',
            success: function (data) {

                console.log(data['reactions']);
                console.log(data['is_you']);

                if(data['total'] == 0){

                    $('.like-details').html('Like');

                }else if(data['is_you'] != null){

                    var total = data['total'] - 1;

                    $('.like-details').html(' you and '+ total + ' others');

                }else{

                    $('.like-details').html(data['total']+ ' others');

                }

                console.log(data['is_you']);

                if(data['is_you'] == null || data['is_you']['data_reaction'] == 'Like'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-like');
                }else if(data['is_you']['data_reaction'] == 'Love'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-love');
                }else if(data['is_you']['data_reaction'] == 'HaHa'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-haha');
                }else if(data['is_you']['data_reaction'] == 'Wow'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-wow');
                }else if(data['is_you']['data_reaction'] == 'Sad'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-sad');
                }else if(data['is_you']['data_reaction'] == 'Angry'){
                    $('.like-emo span').removeAttr('class');
                    $('.like-emo span').attr('class', 'like-btn-angry');
                }

                jQuery.each( data['reactions'], function( key, val ) {

                    if(key == "Like"){
                        $('.emo-like-2').attr('data-original-title', 'Like '+val);
                    }
                    if(key == "Love"){
                        $('.emo-love-2').attr('data-original-title', 'Love '+val);
                    }
                    if(key == "HaHa"){
                        $('.emo-haha-2').attr('data-original-title', 'HaHa '+val);
                    }
                    if(key == "Wow"){
                        $('.emo-wow-2').attr('data-original-title', 'Wow '+val);
                    }
                    if(key == "Sad"){
                        $('.emo-sad-2').attr('data-original-title', 'Sad '+val);
                    }
                    if(key == "Angry"){
                        $('.emo-angry-2').attr('data-original-title', 'Angry '+val);
                    }

                });


                var reactions = ['Like', 'Love', 'HaHa', 'Wow', 'Sad', 'Angry'];

                jQuery.each( reactions, function( key, val ) {

                    if (!data['reactions'].hasOwnProperty(val)) {
                        $('.emo-'+val.toLowerCase()+'-2').attr('data-original-title', val + ' 0');
                    }

                });

                $('[data-toggle="tooltip"]').tooltip();


            },
            error: function (data) {
            // console.log('Error:', data);
            }
        });
    });

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/mgotv/resources/views/site/pages/article_detail.blade.php ENDPATH**/ ?>