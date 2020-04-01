<?php $__env->startSection('content'); ?>
<?php
 $ar_judul = ['No','Nama','Company','Email','Action'];
$no = 1;
?>

<a href="<?php echo e(route('employees.create')); ?>"
  class="btn btn-primary btn-md">
<i class="fas fa-user-plus"></i>&nbsp;Tambah Data
</a>&nbsp;&nbsp;
<a href="<?php echo e(url('employees-pdf')); ?>"
  class="btn btn-danger btn-md">
 <i class="fas fa-file-pdf"></i>&nbsp;Data Employees
</a>&nbsp;&nbsp;
<br/><br/>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Employees</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($jdl); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $ar_employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($employees->nama); ?></td>
        <td><?php echo e($employees->company); ?></td>
        <td><?php echo e($employees->email); ?></td>

                <td>
                  <form action="<?php echo e(route('employees.destroy', $employees->id)); ?>" method="POST">
                   <a href="<?php echo e(route('employees.show', $employees->id)); ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                   <a href="<?php echo e(route('employees.edit', $employees->id)); ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>

                  <?php if(Auth::user()->role == 'administrator'): ?>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                     <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-trash"></i></button>
                    </button>
                  <?php endif; ?>
                 </form>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/employees/index.blade.php ENDPATH**/ ?>