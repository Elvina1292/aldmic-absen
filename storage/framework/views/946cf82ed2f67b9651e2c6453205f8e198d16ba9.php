

<?php $__env->startSection('konten'); ?>
<h3>Form Input Pegawai</h3>
<form method="post" action="<?php echo e(route('simpanpegawai')); ?>">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label>Nik Pegawai</label>
    <input type="text" name="nik" class="form-control" placeholder="NIK" required="">
  </div>

  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" placeholder="Full Name" required="">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" placeholder="Email" required="">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="mobile" required="">
  </div>

  <div class="form-group">
    <label>Address</label>
    <textarea name="address" rows="3" class="form-control" placeholder="address" required=""></textarea>
  </div>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/tambahpegawai.blade.php ENDPATH**/ ?>