
 <h1 align="center">Data Employees </h1>
 <table align="center" width="100%" cellpadding="2" cellspacing="0" border="1">
                  <thead>
                    <tr>
                    	<?php
                    $ar_judul = ['No','Nama','Company','Email'];
                    $no = 1;
                    ?>
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
                  	</tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/employees/employeesPDF.blade.php ENDPATH**/ ?>