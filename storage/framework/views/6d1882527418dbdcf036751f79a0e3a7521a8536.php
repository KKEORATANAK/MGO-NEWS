<?php $__env->startSection('home'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('common::dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/mgotv/Modules/Common/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>