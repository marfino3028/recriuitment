<?php $__env->startSection('content'); ?>

<div class="row">
         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-12 col-md-6 mb-4">
            <a href="<?php echo e(url('employees')); ?>">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-2" style="font-size: 7mm; font-family: timesnewroman;">Total Companies</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 5mm"><?php echo e($totalcompanies); ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>

          <div class="col-xl-12 col-md-6 mb-4">
              <a href="<?php echo e(url('employees')); ?>">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-2" style="font-size: 7mm; font-family: timesnewroman;">Total Employees</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 5mm"><?php echo e($totalemployees); ?></div>
                      </div>
                     <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div></a>
              </div>



        </div>






          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>