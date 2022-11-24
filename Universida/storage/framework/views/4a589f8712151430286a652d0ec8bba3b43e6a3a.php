
<?php $__env->startSection('content'); ?>
<div class="container">
        <div  style="margin:10px;">
            <div class="col-15">
                <div class="card">
                  <div class="card-header">
                  <h2>Crear regitro</h2>
                  <br>
                  <div>
                  <a href="<?php echo e(url('estudiante/create')); ?> " class='btn btn-success m-b-1em'>Crear un registro</a>
                  </div>
                  <br/>
                  <div class="table-responsive" class="row text-center">
                    <table class="table">
                            <thead>
                                <tr>
                                   <th>#</th>
                                   <th>Nombres</th>
                                   <th>Apellidos</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Id de carrera</th>
                                    <th>Estado civil</th>
                                    <th>Status</th>
                                    <th>Id de campus</th>
                                    <th>Id de pais</th>
                                </tr>
                          </thead>
                        <tbody>
                            <?php $__currentLoopData = $estudiante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                  <td><?php echo e($item->id); ?></td>
                                  <td><?php echo e($item->Nombres); ?></td>
                                  <td><?php echo e($item->Apellidos); ?></td>
                                  <td><?php echo e($item->Fecha_Nacimiento); ?></td>
                                  <td><?php echo e($item->id_carrera); ?></td>
                                 <td><?php echo e($item->estado_civil); ?></td>
                                 <td><?php echo e($item->Status); ?></td>
                                 <td><?php echo e($item->id_campus); ?></td>
                                 <td><?php echo e($item->id_pais); ?></td>
                                 <td>
                                  <a href="<?php echo e(url('/estudiante/' . $item->id)); ?>" title="View"><button class="btn btn-success btn-sm "><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                  </td>
                                  <td>
                                  <a href="<?php echo e(url('/estudiante/' . $item->id . '/edit')); ?>" title="Edit"><button class="btn btn-primary active btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                  </td>
                                  <td>
                                  <form method="POST" action="<?php echo e(url('/estudiante' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete empleados" onclick="return confirm('Confirm delete?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                    </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
               </div>
           </div>
        </div>
    </div>
</div>
<?php echo $__env->make('estudiante.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Universidad\resources\views/estudiante/index.blade.php ENDPATH**/ ?>