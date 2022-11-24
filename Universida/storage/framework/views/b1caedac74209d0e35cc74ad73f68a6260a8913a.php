
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Registro </div>
  <div class="card-body">
       
      <form action="<?php echo e(url('estudiante')); ?>" method="post">
        <?php echo csrf_field(); ?>

        
        <div class="mb-3 mt-3">
            	<label>Nombres</label>
            	<input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Ingrese sus nombres" value="<?php echo e(isset($student->Nombres)?$student->Nombres:''); ?>" required>
            </div>

             <div class="mb-3 mt-3">
            	<label>Apellidos</label>
            	<input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Ingrese sus apellidos" value="<?php echo e(isset($student->Apellidos)?$student->Apellidos:''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
            	<label>Fecha de nacimiento</label>
            	<input type="date" name="Fecha_Nacimiento"  id="Fecha_Nacimiento" class="form-control" value="<?php echo e(isset($student->Fecha_Nacimiento  )?$student->Fecha_Nacimiento  :''); ?>">
            </div>

            <div class="mb-3 mt-3">
                <label>Carrera</label>
                <select name="id_carrera" id="id_carrera" class="form-control" required>
                    <option value="">Seleccione </option>
                    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($carrera['id_carrera']); ?>"><?php echo e($carrera['Nombre_Carrera']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Sexo</label>
                <input  type="text" name="Sexo" id="Sexo" class="form-control" placeholder="Ingrese su sexo" value="<?php echo e(isset($student->Sexo)?$student->Sexo:''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Estado Civil</label>
                <input  type="text" name="estado_civil" id="estado_civil" class="form-control" placeholder="Ingrese su estado civil" value="<?php echo e(isset($student->estado_civil )?$student->estado_civil :''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Estado</label>
                <input  type="text" name="Status" id="Status" class="form-control" placeholder="Ingrese su estado" value="<?php echo e(isset($student->Status)?$student->Status:''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Campus</label>
                <select name="id_campus" id="id_campus" class="form-control" required>
                    <option value="">Seleccione</option>
                    <?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campuz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($campuz['id_campus']); ?>"><?php echo e($campuz['Descripcion']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Pais</label>
                <select name="id_pais " id="id_pais " class="form-control" >
                <option value="">Seleccione </option>
                    <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pais['id_pais']); ?>"><?php echo e($pais['Descripcion']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <a href="<?php echo e(url('estudiante/')); ?> "  class="btn btn-secondary" >Volver atras</a>
		   	<input type="submit" value="Registrar" class="btn btn-success">
            
            
	   </form>    
    
    </div>

</div>
        
<?php echo $__env->make('estudiante.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Universidad\resources\views/estudiante/create.blade.php ENDPATH**/ ?>