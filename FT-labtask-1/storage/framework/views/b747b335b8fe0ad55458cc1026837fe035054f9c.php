<?php $__env->startSection('content'); ?>
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>Student Id</th>
        <th>PASSWORD</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>

        <th>ACTION</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->name); ?></td>
        <td><?php echo e($student->student_id); ?></td>
    <td><?php echo e($student->password); ?></td>
    <td><?php echo e($student->email); ?></td>
    <td><?php echo e($student->address); ?></td>
    
    <td><?php echo e($student->phone); ?></td>
    <td><a href="/studentEdit/<?php echo e($student->id); ?>/<?php echo e($student->name); ?>">Details</a></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UseR\Desktop\labtask-db\resources\views/pages/student/list.blade.php ENDPATH**/ ?>