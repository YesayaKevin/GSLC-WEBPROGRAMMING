

<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="text-white space-y-2 my-8 flex-col ml-10">
            <h2 class="underline font-bold text-xl hover:text-slate-800"><a href="/posts/<?php echo e($post["slug"]); ?>"><?php echo e($post["title"]); ?></a></h2>
            <h3 class="font-bold text-md">By: <?php echo e($post["author"]); ?></h3>
            <p class="text-sm"><?php echo e($post["body"]); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\gslcSession5\resources\views/articles.blade.php ENDPATH**/ ?>