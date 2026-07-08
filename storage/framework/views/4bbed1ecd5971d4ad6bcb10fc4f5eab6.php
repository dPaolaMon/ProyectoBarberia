<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'Empleados'); ?></title>
  </head>
  <body>
	<header></header>
    <main>
	  <h1><?php echo $__env->yieldContent('titulo', 'Empleados'); ?></h1>
	  
	  	<a href="<?php echo e(route('empleados.create')); ?>">Registrar empleado</a>

	  	<hr> 
		<h3>Buscar</h3>
			<form method="GET" action="<?php echo e(route('empleados.index')); ?>">
				
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo e(request('nombre')); ?>">
			
			<label>Mes de Nacimiento:</label>
			<input type="number" name="mes_nacimiento" value="<?php echo e(request('mes_nacimiento')); ?>" min="1" max="12">
			
			<label>Telefono:</label>
			<input type="text" name="telefono_busqueda" value="<?php echo e(request('telefono_busqueda')); ?>" maxlength="10">
			
			<button type="submit">Buscar</button>
			</form>
		<hr>
		
		<table border=1>
			
			<thead>
				<tr>
				  <th>ID</th>
				  <th>Nombre</th>
				  <th>Apellidos</th>
				  <th>Edad</th>				  
				  <th>Telefono</th>				  
				  <th colspan="3">Acciones</th>
				</tr>
			</thead>
			
			<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			
				<tr>
					<td> <?php echo e($e->id); ?> </td>
					<td> <?php echo e($e->nombre); ?> </td>
					<td> <?php echo e($e->apellido); ?> </td>
					<td> <?php echo e($e->edad); ?> </td>
					<td> <?php echo e($e->telefono); ?> </td>
					<td> <a href="<?php echo e(route('empleados.show', $e->id)); ?>">Ver detalle</a> </td>
					<td><a href="<?php echo e(route('empleados.edit', $e->id)); ?>">Editar</a></td>
					
					<td><form action="<?php echo e(route('empleados.destroy', $e->id)); ?>" method="POST" style="display:inline">		
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						
						<button>Eliminar</button>
					</form></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<p>No hay empleados que coincidan con tu búsqueda.</p>

			</tbody>
			<?php endif; ?>
			
		</table>
    </main>
    <footer>
		
		<a href="<?php echo e(url('/')); ?>">Página principal</a>

    </footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/empleados/index.blade.php ENDPATH**/ ?>