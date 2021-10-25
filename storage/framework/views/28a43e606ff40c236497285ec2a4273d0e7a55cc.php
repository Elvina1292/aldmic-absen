

<?php $__env->startSection('konten'); ?>
  <div class="row">
    <h4>Selamat Datang <b><?php echo e(Auth::user()->full_name); ?></b>, Anda Login sebagai <b><?php echo e(Auth::user()->role); ?></b>.</h4>

    <div class = "row">
      <div class = "col-md-10">
        <form method="post" action="<?php echo e(route('store_attendance')); ?>">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="id_employee" value="<?php echo e(Auth::user()->id); ?>">
          <input type="hidden" name="in_out" value="In">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> In/Out</button>
        </form>
      </div> 


    </div>
        <?php if(Auth::user()->role=='admin'): ?>
        <table class="table table-bordered table-hover" style="margin-top: 2%;">
          <tr>
            <th>Employee</th>
            <th>Time</th>
            <th>In out</th>
          </tr>

         <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <tr>
            <td><?php echo e($a->full_name); ?></td>
            <td><?php echo e($a->created_at); ?></td>
            <td><?php echo e($a->in_out); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><?php echo e($attendance->links()); ?></a></li>
        </ul>
          <?php else: ?>
        <table class="table table-bordered table-hover" style="margin-top: 2%;">
          <tr>
            <th>Time</th>
            <th>In out</th>
          </tr>

         <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <tr>
            <td><?php echo e($a->created_at); ?></td>
            <td><?php echo e($a->in_out); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><?php echo e($attendance->links()); ?></a></li>
        </ul>


        <?php endif; ?>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp73\htdocs\aldmic\resources\views/home.blade.php ENDPATH**/ ?>