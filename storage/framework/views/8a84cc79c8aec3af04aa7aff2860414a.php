<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'AstroCuts'); ?></title>
  </head>
  <body>	  
	<header></header>
    <main></main>
	  <h1><?php $__env->startSection('titulo', 'Detalle del Servicio: ' . $servicios->nombre); ?></h1>
		<p><strong>ID:</strong></p>
		<input value="<?php echo e($servicios->id); ?>" readonly>

		<p><strong>Duración:</strong></p>
		<input type="text" value="<?php echo e($servicios->duracion); ?>" readonly>

		<p><strong>Precio:</strong></p>
		<input type="number" value="<?php echo e($servicios->precio); ?>" readonly>

		<p><strong>Descripción:</strong></p>
		<input type="text" value="<?php echo e($servicios->descripcion); ?>" readonly>
		
		<a href="<?php echo e(route('servicios.index')); ?>">Volver</a>

    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/servicios/show.blade.php ENDPATH**/ ?>