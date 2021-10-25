

<?php $__env->startSection('konten'); ?>
<h3>Tampil Data Satri</h3>
<a class="btn btn-success" href="<?php echo e(route('tambahpegawai')); ?>"><i class="fa fa-plus"></i> Tambah pegawai</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nik</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Aksi</th>
  </tr>
  <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><?php echo e($s->id); ?></td>
    <td><?php echo e($s->nik); ?></td>
    <td><?php echo e($s->full_name); ?></td>
    <td><?php echo e($s->email); ?></td>
    <td><?php echo e($s->mobile); ?></td>
    <td><?php echo e($s->address); ?></td>
    <td>
      <a href="/pegawai/ubah/<?php echo e($s->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/pegawai/hapus/<?php echo e($s->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/tampilpegawai.blade.php ENDPATH**/ ?>