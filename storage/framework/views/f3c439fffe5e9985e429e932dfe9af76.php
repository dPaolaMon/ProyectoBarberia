<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'AstroCuts'); ?></title>
  </head>
  <body>
    <header><?php echo $__env->make('includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></header>
    <main>
		<h1><?php echo $__env->yieldContent('titulo', 'Citas'); ?></h1>
	  
	  	<a href="<?php echo e(route('citas.create')); ?>">Registrar cita</a>
		

	  	<table border="1">
    
    <thead>
        <tr>
            <th>ID Cita</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Servicio</th>
            <th>Barbero</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    
        <tr>
            <td> <?php echo e($cita->id); ?> </td>
            <td> <?php echo e($cita->fecha); ?> </td>
            <td> <?php echo e($cita->hora_inicio); ?> </td>
            
            
            <td> <?php echo e($cita->servicio->nombre); ?> </td>
            
            
            <td> <?php echo e($cita->empleado->nombre); ?> </td>
            
            
            <td> <?php echo e($cita->cliente->nombre); ?> </td>
            
            <td> <?php echo e($cita->estado); ?> </td>
                        
            <td> <a href="<?php echo e(route('citas.show', $cita->id)); ?>">Ver detalle</a> </td>
            <td><a href="<?php echo e(route('citas.edit', $cita->id)); ?>">Editar</a></td>
            
            <td>
                <form action="<?php echo e(route('citas.destroy', $cita->id)); ?>" method="POST" style="display:inline">		
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<p>No hay citas registradas que coincidan con tu búsqueda.</p>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
    </main>
    
  </body>
</html>
<?php /**PATH /home/diana/MEGA/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/citas/index.blade.php ENDPATH**/ ?>