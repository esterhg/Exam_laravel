
<?php $__env->startSection('content'); ?>
<div class="card" style="margin:20px;">
  <div class="card-header">Estudiante</div>
  <div class="card-body">
        <table class='table table-hover table-responsive table-bordered'>
                <tr class="card-text" >
                    <td>ID</td>
                    <td>id : <?php echo e($estudiantes->id); ?></td>
                </tr>
                <tr class="card-text" >
                    <td>Nombres</td>
                    <td>nombres : <?php echo e($estudiantes->Nombres); ?></td>
                </tr>
                <tr class="card-text" >
                    <td>Apellidos</td>
                    <td>apellidos : <?php echo e($estudiantes->Apellidos); ?></td>
                </tr>
                <tr  class="card-text" >
                    <td>Fecha de nacimiento</td>
                    <td>Fecha de nacimiento: <?php echo e($estudiantes->Fecha_Nacimiento); ?></td>
                </tr>
                <tr class="card-text" >
                    <td>Id de carrera</td>
                    <td>Id de carrera : <?php echo e($estudiantes->id_carrera); ?></td>
                </tr>
                 <tr class="card-text">
                    <td>Sexo</td>
                    <td>Sexo : <?php echo e($estudiantes->Sexo); ?></td>
                </tr>
                <tr class="card-text">
                    <td>Estado civil</td>
                    <td>Estado Civil : <?php echo e($estudiantes->estado_civil); ?></td>
                </tr>
                <tr class="card-text">
                    <td>Status</td>
                    <td>Status : <?php echo e($estudiantes->Status); ?></td>
                </tr>
                <tr class="card-text" >
                    <td>Id de Campus</td>
                    <td>Id de Campus : <?php echo e($estudiantes->id_campus); ?></td>
                </tr>
                <tr class="card-text" >
                    <td>Id de pais</td>
                    <td>Id de pais : <?php echo e($estudiantes->id_pais); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <a href="javascript:history.back()" class='btn btn-danger'>Back to read</a>
                    </td>
                </tr>
            </table>
  </div>
    </hr>
  </div>
</div>
<?php echo $__env->make('estudiante.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Universidad\resources\views/estudiante/show.blade.php ENDPATH**/ ?>