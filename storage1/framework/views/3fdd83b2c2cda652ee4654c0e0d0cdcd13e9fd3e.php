<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
    <?php if(session('status')): ?>
        <?php echo e(session('status')); ?>

    <?php endif; ?>
    <a href="<?php echo e(route('create')); ?>">Создать</a>
    <div class="cards">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
        <h3><?php echo e($blog->title); ?></h3>
        <img src="storage1/<?php echo e($blog->image); ?>" alt="image">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</body>
</html>
<?php /**PATH C:\Users\alish\coffee\resources\views/blogs.blade.php ENDPATH**/ ?>