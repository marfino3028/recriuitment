<?php $__env->startSection('content'); ?>
<center>
<div class="card shadow mb-4">
    <?php $__currentLoopData = $ar_employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e($employees->nama); ?></h6>
    </div>
    <div class="card-body">
      <div class="alert alert-dismissable alert-primary">

          Nama : <?php echo e($employees->nama); ?> <br/>
          Company : <?php echo e($employees->company); ?> <br/>
          Email : <?php echo e($employees->email); ?>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a rel="nofollow" href="<?php echo e(url('/employees')); ?>"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/employees/show.blade.php ENDPATH**/ ?>