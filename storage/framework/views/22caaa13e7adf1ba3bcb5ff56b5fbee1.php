<?php $__env->startSection("title"); ?>
    User Index
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route("users.detail", $user["id"])); ?>"><?php echo e($user["nama"]); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programing\jda-laravel\resources\views/users/index.blade.php ENDPATH**/ ?>