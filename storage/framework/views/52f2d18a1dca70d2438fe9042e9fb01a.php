<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	  <h1>Nuevo Empleado</h1>

	  
	  <?php if($errors->any()): ?>
		<div style="color:red;">
			<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<li><?php echo e($error); ?></li>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	  <?php endif; ?> 
	  
	<form method="POST" action="<?php echo e(route('empleados.store')); ?>">
	<?php echo csrf_field(); ?>
		<label>Nombre:</label>
		<input type="text" name="nombre" required><br>
		
		<label>Apellidos:</label>
		<input type="text" name="apellido" required><br>

		<label>Edad:</label>
		<input type="number" name="edad" required><br>

		<label>Fecha de Nacimiento:</label>
		<input type="date" name="fecha_nac" required><br>

		<label>Telefono:</label>
		<input type="number" name="telefono" required><br>

		<hr> <h3>Dirección</h3>

		<label>Calle:</label>
		<input type="text" name="calle" required><br>

		<label>Manzana (Mz):</label>
		<input type="number" name="mz" required><br>

		<label>Lote (Lt):</label>
		<input type="number" name="lt" required><br>

		<label>Municipio:</label>
		<input type="text" name="municipio" required><br>

		<label>Estado:</label>
		
		<select name="estado" multiple>
		  <option value="Ciudad de Mexico">Ciudad de Mexico</option>
		  <option value="Estado de Mexico">Estado de Mexico</option>
		  <option value="Puebla">Puebla</option>
		</select><br>

		<label>Código Postal:</label>
		<input type="number" name="cp" required><br>		

		
	<button type="submit">Guardar</button>
	<a href="<?php echo e(route('empleados.index')); ?>">Regresar</a>
	</form>
	
    <header></header>
    <main></main>
    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/empleados/create.blade.php ENDPATH**/ ?>