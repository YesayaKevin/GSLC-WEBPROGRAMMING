

<?php $__env->startSection('container'); ?>
    <div class="flex ml-10 flex-col text-white mt-24 space-y-4">
        <img class="mx-auto" src="muka-ganteng.jpg" alt="<?php echo e($name); ?>" width="200px" height="400px">
        <h4 class="mx-auto">Name: <?php echo e($name); ?></h4>
        <h4 class="mx-auto">Email: <?php echo e($email); ?></h4>
        <h4 class="mx-auto">Address: <?php echo e($address); ?></h4>
        <a class="mx-auto bg-slate-700 text-white rounded-md p-2 hover:text-slate-400 drop-shadow-xl" href="/articles">Click here to see articles</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\gslcSession5\resources\views/identity.blade.php ENDPATH**/ ?>