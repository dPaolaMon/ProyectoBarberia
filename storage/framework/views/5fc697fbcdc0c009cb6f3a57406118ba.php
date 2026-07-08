<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	  <h1>Nuevo Servicio</h1>

	  
	  <?php if($errors->any()): ?>
		<div style="color:red;">
			<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<li><?php echo e($error); ?></li>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	  <?php endif; ?>
	<form method="POST" action="<?php echo e(route('servicios.store')); ?>">
	<?php echo csrf_field(); ?>
		<label>Nombre:</label>
		<input type="text" name="nombre" required><br>
		
		<label>Descripción:</label>
		<textarea name="descripcion" required></textarea><br>

		<label>Duración:</label>
		<input type="text" name="duracion" required><br>

		<label>Precio:</label>
		<input type="number" name="precio" step="0.01" required><br>
	<button type="submit">Guardar</button>
	<a href="<?php echo e(route('servicios.index')); ?>">Regresar</a>
	</form>
	
    <header></header>
    <main></main>
    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/servicios/create.blade.php ENDPATH**/ ?>