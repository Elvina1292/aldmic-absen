

<?php $__env->startSection('konten'); ?>
<h3>Employee Data</h3>
<div class = "row">
<div class = "col-md-9">
  <a class="btn btn-success" href="<?php echo e(route('add_employee')); ?>"><i class="fa fa-plus"></i> Add New Employee</a><br><br>
</div>
<div class = "col-md-3">
  <form method="get" action="<?php echo e(route('search_employee')); ?>">

    <div class = "col-md-9">
        <input type="text" name="search" class="form-control" placeholder="Search">
    </div>
    <div class = "col-md-2">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    </div>
  </form>
</div>  
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
  <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><?php echo e($s->id); ?></td>
    <td><?php echo e($s->nik); ?></td>
    <td><?php echo e($s->full_name); ?></td>
    <td><?php echo e($s->email); ?></td>
    <td><?php echo e($s->mobile); ?></td>
    <td><?php echo e($s->address); ?></td>
    <td>
      <a href="/employee/edit/<?php echo e($s->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/employee/delete/<?php echo e($s->id); ?>" onclick="return confirm('Are you sure want to delete this data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<ul class="pagination pagination-sm m-0 float-right">
  <li class="page-item"><?php echo e($employee->links()); ?></a></li>
</ul>
<?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/viewemployee.blade.php ENDPATH**/ ?>