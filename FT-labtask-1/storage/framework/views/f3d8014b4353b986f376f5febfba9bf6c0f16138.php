<?php $__env->startSection('content'); ?>
<table class="table table-border">
    <tr>
        <th class="text-center">Doctor Image</th>
        <th class="text-center">Doctor Name</th>
        <th class="text-center">Phone Number</th>
        <th class="text-center">Room</th>
        <th class="text-center">Speciality</th>
        <th class="text-center">ACTION</th>
    </tr>
    <?php if(Session::get('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(Session::get('error')); ?>

            </div>
    <?php endif; ?>
    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="text-center">
            <div class="widget-content-left">
                <img height="100px" width="200px" src="<?php echo e(!empty($doctor->image)?url('uploads/doctor_image/'.$doctor->image):url('uploads/no_image.jpg/')); ?>" alt="Doctor picture">
            </div>
        </td>
        <td class="text-center"><?php echo e($doctor->name); ?></td>
        <td class="text-center"><?php echo e($doctor->phone); ?></td>
        <td class="text-center"><?php echo e($doctor->speciality_name); ?></td>
        <td class="text-center"><?php echo e($doctor->room); ?></td>
        <td class="text-center">
            <a href="<?php echo e(route('doctors.edit',$doctor->id)); ?>" class="btn btn-primary"><span class="menu-icon"><i class="mdi mdi-edit">Edit</i></span></a>

            <?php if($doctor->deletable == true): ?>
            <a title="Delete" href="<?php echo e(route('doctors.delete',$doctor->id)); ?>" class="btn btn-danger" id="delete">Delete</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\labfinal\doctors-portal-backend\resources\views/pages/doctors/index.blade.php ENDPATH**/ ?>