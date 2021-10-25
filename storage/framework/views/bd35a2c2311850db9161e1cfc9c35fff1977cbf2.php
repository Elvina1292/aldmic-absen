

<?php $__env->startSection('konten'); ?>
<h3>Edit Employee's Data</h3>
  <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(route('update_employee')); ?>">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id_employee" value="<?php echo e($s->id); ?>">
      <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo e($s->nik); ?>" class="form-control" placeholder="NIK" required="">
      </div>
      <?php if($errors->has('nik')): ?>
        <div class="text-danger">
          <?php echo e($errors->first('nik')); ?>

         </div>
      <?php endif; ?>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" value="<?php echo e($s->full_name); ?>" class="form-control" placeholder="Full Name" required="">
      </div>
      <?php if($errors->has('full_name')): ?>
        <div class="text-danger">
          <?php echo e($errors->first('full_name')); ?>

         </div>
      <?php endif; ?>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo e($s->email); ?>" class="form-control" placeholder="Email" required="">
      </div>
      <?php if($errors->has('email')): ?>
        <div class="text-danger">
          <?php echo e($errors->first('email')); ?>

         </div>
      <?php endif; ?>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo e($s->mobile); ?>" class="form-control" placeholder="mobile" required="">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea name="address" rows="3" class="form-control" placeholder="address" required=""><?php echo e($s->address); ?></textarea>
      </div>
      <div class="form-group">
        <label>New Password </label>
        <input type="password" name="password" value="" class="form-control" placeholder="password">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/editemployee.blade.php ENDPATH**/ ?>