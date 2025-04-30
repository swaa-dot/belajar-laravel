

<?php $__env->startSection('konten'); ?>

<div class="w-50.center.border.rounded.px-3.py-3.mx-auto">
    <h1>Login bang</h1>
    <form action="/login/" method="POST">
     <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="passwird" class="form-control" name="password">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">login</button>
        </div>
    </form>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\kuliah syahwa\Semester 4\Pemogramman Web\laravel\belajar-1\resources\views/sesi/index.blade.php ENDPATH**/ ?>