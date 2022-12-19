<?php $__env->startSection('content'); ?>
<h2>Edit Doctor</h2>

<div class="card-body">
    <div class="card">
        <div class="card-body">
           <form method="post" action="<?php echo e(route('doctors.update',$doctor->id)); ?>" enctype="multipart/form-data">
            <div class="row">
                <?php echo csrf_field(); ?>

                <?php if(Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">Doctor Name</label>
                    <input id="name" type="text" value="<?php echo e($doctor->name); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" autofocus>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="p-2">
                        <span class="text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="number" value="<?php echo e($doctor->phone); ?>" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" autofocus>

                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="p-2">
                        <span class="text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="room">Room</label>
                    <input id="room" type="text" value="<?php echo e($doctor->room); ?>" class="form-control <?php $__errorArgs = ['room'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="room"  autofocus>

                    <?php $__errorArgs = ['room'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="p-2">
                        <span class="text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="form-group">
                    <label for="speciality_name">Sepeciality Name</label>

                    <select name="speciality_name" id="speciality_name" class="form-control">
                        <option value="">Select Speciality Name</option>
                        <option value="Cardiology"<?php echo e(($doctor->speciality_name=="Cardiology")?"selected":""); ?>>Cardiology</option>
                        <option value="Surgery"<?php echo e(($doctor->speciality_name=="Surgery")?"selected":""); ?>>Surgery</option>
                    </select>

                    <?php $__errorArgs = ['speciality_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="p-2">
                        <span class="text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="p-2">
                        <span class="text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-5" style="padding-top: 10px;">
                    <img id="showImage" src="<?php echo e(!empty($doctor->image) ? url('uploads/doctor_image/'.$doctor->image):url('/uploads/no_image.jpg')); ?>" alt="User profile picture" style="width:150px; height:160px; border:1px solid #000;">

                </div>
                <div class="col-2" style="padding-top: 30px;">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<script src="<?php echo e(asset('js/min.js')); ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Sithi\labtask-db\resources\views/pages/doctors/edit.blade.php ENDPATH**/ ?>