<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0" xmlns:media="http://www.w3.org/2001/XMLSchema" xml:base="<?php echo e(url('/feed')); ?>" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo e(settingHelper('application_name')); ?></title>
        <link><?php echo e(url('/feed')); ?></link>
        <atom:link rel="self" href="<?php echo e(url('feed')); ?>" />
        <description><?php echo e(settingHelper('seo_meta_description')); ?></description>
        <language><?php echo e(settingHelper('default_language')); ?></language>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <item>
                <title><?php echo e($item->title); ?></title>
                <description><?php echo strip_tags( html_entity_decode(\Illuminate\Support\Str::limit($item->summary, 200))); ?></description>

                <link><?php echo e($item->link); ?></link>
                <author><?php echo e($item->author); ?></author>
                <guid><?php echo e($item->link); ?></guid>
                <pubDate><?php echo e($item->updated->toRssString()); ?></pubDate>
                <?php if($item->enclosure !=null): ?>
                    <enclosure url="<?php echo e(static_asset($item->enclosure)); ?>"></enclosure>
                <?php else: ?>
                    <enclosure url="<?php echo e(static_asset('default-image/default-730x400.png')); ?>"></enclosure>
                <?php endif; ?>
            </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </channel>
</rss>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/vendor/feed/rss.blade.php ENDPATH**/ ?>