

<?php $__env->startSection('container'); ?>
    <article class="text-white ml-10 mt-10 space-y-6">
        <h1 class="font-bold text-xl"><?php echo e($post["title"]); ?></h1>
        <h5 class="font-bold text-md"><?php echo e($post["author"]); ?></h5>
        <p class="text-sm"><?php echo e($post["body"]); ?></p>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\gslcSession5\resources\views/post.blade.php ENDPATH**/ ?>