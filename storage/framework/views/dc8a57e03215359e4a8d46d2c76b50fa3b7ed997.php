<?php $__env->startSection('content'); ?>
<div class="container-fluid ">
	<div class="text-center my-5">
	    <div class="error mx-auto"><?php echo e(__('403')); ?></div>
	    <p class="lead text-gray-800 mb-5"><?php echo e(__('access_forbidden')); ?></p>
	    <p class="text-gray-500 mb-0"><?php echo e(__('403_message')); ?> </p>
	    <a href="<?php echo e(url('')); ?>">← <?php echo e(__('back_to_home')); ?></a>
	 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/pages/403.blade.php ENDPATH**/ ?>