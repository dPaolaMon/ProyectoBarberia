<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/header_style.css']); ?>
  </head>
  <body>

	  <header><?php echo $__env->make('includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></header>

	  <h1>Servicios</h1>
	  
	  	<a href="<?php echo e(route('servicios.create')); ?>">Nuevo Servicio</a>

	  	<hr>
		<h3>Buscar</h3>
			<form method="GET" action="<?php echo e(route('servicios.index')); ?>">
				
			<label>Nombre:</label> <input type="text" name="nombre" value="<?php echo e(request('nombre')); ?>">
			<label>Precio mínimo:</label> <input type="number" name="min" step="0.01" value="<?php echo e(request('min')); ?>">
			<label>Precio máximo:</label> <input type="number" name="max" step="0.01" value="<?php echo e(request('max')); ?>">
			
			<button type="submit">Buscar</button>
			</form>
		<hr>
		
		<table border=1>
			
			<thead>
				<tr>
				  <th>ID</th>
				  <th>Nombre</th></th>
				  <th colspan="3">Acciones</th>
				</tr>
			</thead>
			
			<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			
				<tr>
					<td> <?php echo e($s->id); ?> </td>
					<td> <?php echo e($s->nombre); ?> </td>
					<td> <a href="<?php echo e(route('servicios.show', $s->id)); ?>">Ver detalle</a> </td>
					<td><a href="<?php echo e(route('servicios.edit', $s->id)); ?>">Editar</a></td>
					
					<td><form action="<?php echo e(route('servicios.destroy', $s->id)); ?>" method="POST" style="display:inline">		
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						
						<button>Eliminar</button>
					</form></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<p>No hay productos que coincidan con tu búsqueda.</p>

			</tbody>
			<?php endif; ?>
			
		</table>

		<?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   
  </body>
</html>
<?php /**PATH /home/diana/MEGA/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/servicios/index.blade.php ENDPATH**/ ?>