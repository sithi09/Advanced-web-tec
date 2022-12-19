
<?php $__env->startSection("content"); ?>

<h2> EDIT student </h2>
<form action="<?php echo e(route('studentEdit')); ?>" class="form-group" method = "post">
    <!-- Cross Site Request Forgery-->
    <?php echo e(csrf_field()); ?>

    <input type="text" name="id" value="<?php echo e($students->id); ?>" class="form-control" readonly>
   
     
    <div class="col-md-4 form-group">
    <span>NAME</span>
    <input type="text" name="name" value="<?php echo e($students->name); ?>" class="form-control">
    <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="text-denger"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="col-md-4 form-group">
    <span>PASSWORD</span>
    <input type="text" name="password" value="<?php echo e($students->password); ?>" class="form-control">
    <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="text-denger"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="col-md-4 form-group">
    <span>EMAIL</span>
    <input type="text" name="email" value="<?php echo e($students->email); ?>" class="form-control">
    
    <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="text-denger"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="col-md-4 form-group">
    <span>ADDRESS</span>
    <input type="text" name="address" value="<?php echo e($students->address); ?>" class="form-control">
    
    <?php $__errorArgs = ["address"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  
    <span class="text-denger"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="col-md-4 form-group">
    <span>PHONE</span>
    <input type="text" name="phn" value="<?php echo e($students->phone); ?>" class="form-control">
    
    <?php $__errorArgs = ["phn"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="text-denger"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<input type="submit"  class="btn btn-success" value="EDIT">

</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Sithi\labtask-db\resources\views/pages/student/studentEdit.blade.php ENDPATH**/ ?>