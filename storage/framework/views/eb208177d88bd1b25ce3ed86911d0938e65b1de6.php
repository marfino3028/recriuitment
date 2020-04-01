<?php $__env->startSection('content'); ?>
<div class="card shadow mb-4">
    <?php $__currentLoopData = $ar_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e($companies->nama); ?></h6>
    </div>
    <div class="card-body">
      <div class="text-center">
        <?php if(!empty($companies->logo)): ?>
          <img id="poto" class="img-fluid img-thumbnail" src="<?php echo e(asset('company/'.$companies->logo)); ?>">
        <?php else: ?>
          <img id="poto" class="img-fluid img-thumbnail" src="<?php echo e(asset('company/no-photo.png')); ?>" >
        <?php endif; ?>
      </div>
      <div class="alert alert-dismissable alert-primary">
          Nama : <?php echo e($companies->nama); ?> <br/>
          Email : <?php echo e($companies->email); ?><br>
          Website : <?php echo e($companies->email); ?>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a rel="nofollow" href="<?php echo e(url('/companies')); ?>"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/companies/show.blade.php ENDPATH**/ ?>