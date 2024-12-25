<?php $__currentLoopData = $feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="alternate" type="<?php echo e($feed['type'] ?? 'application/atom+xml'); ?>" href="<?php echo e(route("feeds.{$name}")); ?>" title="<?php echo e($feed['title']); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/mgotv/resources/views/vendor/feed/links.blade.php ENDPATH**/ ?>