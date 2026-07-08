<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'AstroCuts'); ?></title>
  </head>
  <body>
	<header></header>
    <main>
	  <h1>Datos del emplead@: <?php echo e($empleados->nombre); ?></h1>
	  <h3>Datos generales</h3>
		<p><strong>ID:</strong></p>
		<input value ="<?php echo e($empleados->id); ?>" readonly>
		
		<p><strong>Nombre:</strong></p>
		<input value ="<?php echo e($empleados->nombre); ?>" readonly>
		 
		<p><strong>Apellidos:</strong></p>
		<input value ="<?php echo e($empleados->apellido); ?>" readonly>
		
		<p><strong>Edad:</strong></p>
		<input value ="<?php echo e($empleados->edad); ?>" readonly>

		<p><strong>Fecha de nacimiento:</strong></p>
		<input value ="<?php echo e($empleados->fecha_nac); ?>" readonly>

		<p><strong>Telefono:</strong></p>
		<input value ="<?php echo e($empleados->telefono); ?>" readonly>

	  <hr> <h3>Direccion</h3>

		<p><strong>Calle:</strong></p>
		<input value ="<?php echo e($empleados->calle); ?>" readonly>

		<p><strong>Mz:</strong></p>
		<input value ="<?php echo e($empleados->mz); ?>" readonly>

		<p><strong>Lt:</strong></p>
		<input value ="<?php echo e($empleados->lt); ?>" readonly>

		<p><strong>Entidad:</strong></p>
		<input value ="<?php echo e($empleados->municipio); ?>" readonly>

		<p><strong>Estado:</strong></p>
		<input value ="<?php echo e($empleados->estado); ?>" readonly>

		<p><strong>Código Postal:</strong></p>
		<input value ="<?php echo e($empleados->cp); ?>" readonly> 

		

		<br><a href="<?php echo e(route('empleados.index')); ?>">Volver</a>
    </main>
    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/empleados/show.blade.php ENDPATH**/ ?>