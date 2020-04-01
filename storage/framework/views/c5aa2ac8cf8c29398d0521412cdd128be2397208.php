
 <h1 align="center">Data Companies </h1>
 <table align="center" width="100%" cellpadding="2" cellspacing="0" border="1">
                  <thead>
                    <tr>
                    	<?php
                    $ar_judul = ['No','Nama','Email','Logo','Website'];
                    $no = 1;
                    ?>
                  	<?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <th><?php echo e($jdl); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $ar_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  	<tr>
                  		<td><?php echo e($no++); ?></td>
                  		<td><?php echo e($companies->nama); ?></td>
                      <td><?php echo e($companies->email); ?></td>
                      <td>
                        <center>
                        <?php if(!empty($companies->logo)): ?>
                            <img src="company/<?php echo e($companies->logo); ?>"  />
                        <?php else: ?>
                            <img src="img/no-photo.jpg" />
                        <?php endif; ?>
                        </center>
                      </td>
                      <td><?php echo e($companies->website); ?></td>

                  	</tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/companies/companiesPDF.blade.php ENDPATH**/ ?>