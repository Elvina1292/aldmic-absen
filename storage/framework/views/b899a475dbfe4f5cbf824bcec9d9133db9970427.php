

<?php $__env->startSection('konten'); ?>
<h3>Ubah Data pegawai</h3>
  <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(route('updatepegawai')); ?>">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="id_pegawai" value="<?php echo e($s->id); ?>">
      <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo e($s->nik); ?>" class="form-control" placeholder="NIK" required="">
      </div>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" value="<?php echo e($s->full_name); ?>" class="form-control" placeholder="Full Name" required="">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo e($s->email); ?>" class="form-control" placeholder="Email" required="">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo e($s->mobile); ?>" class="form-control" placeholder="mobile" required="">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea name="address" rows="3" class="form-control" placeholder="address" required=""><?php echo e($s->address); ?></textarea>
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/ubahpegawai.blade.php ENDPATH**/ ?>