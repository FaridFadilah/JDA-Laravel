<?php $__env->startSection("title"); ?>
    User Detail
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <h1>Ini halaman detail users</h1>
    <ul>
        

                <?php echo $__env->make("component.detailUser", [
                    "user" => $user
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        
        

        
        
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programing\jda-laravel\resources\views/users/detail.blade.php ENDPATH**/ ?>