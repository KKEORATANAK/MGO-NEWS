<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="sg-page-content">
        <div class="container">
            <div class="row">
                <?php
                $i = 0;
                if(!empty($feeds)){

                $site = $feeds->channel->title;
                $sitelink = $feeds->channel->link;

                echo "<h1>" . $site . "</h1>";
                foreach ($feeds->channel->item as $item) {

                if($i == 2):
                endif;
                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $postDate = $item->pubDate;
                $postImage = $item->enclosure['url'];

                $pubDate = date('D, d M Y', strtotime($postDate));

                if ($i >= 5) break;
                ?>
                <div class="post">
                    <div class="post-head">
                        <img src="<?php echo e($postImage); ?>" alt="<?php echo e($title); ?>"  class="  img-fluid">
                        <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <span><?php echo $pubDate; ?></span>
                    </div>
                    <div class="post-content">
                        <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a
                            href="<?php echo $link; ?>">Read more</a>
                    </div>
                </div>

                <?php
                $i++;
                }
                }else {
                    if (!$invalidurl) {
                        echo "<h2>No item found</h2>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/feed.blade.php ENDPATH**/ ?>