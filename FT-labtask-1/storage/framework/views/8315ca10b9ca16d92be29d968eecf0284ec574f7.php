<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-grid.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.css')); ?>"/>
    
    <title>Hospital Project</title>
</head>
<body>

    <div class="container">
        <?php echo $__env->make('inc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

<?php echo $__env->yieldPushContent('js'); ?>
</html>
<?php /**PATH D:\lab\doctors-portal-backend\resources\views/layouts/app.blade.php ENDPATH**/ ?>