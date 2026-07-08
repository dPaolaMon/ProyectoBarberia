<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>
    <main></main>
    <form method="POST" action="<?php echo e(route('citas.store')); ?>">
	<?php echo csrf_field(); ?>
    
    <h3>Agendar Nueva Cita</h3>

	<?php if($errors->any()): ?>
    <div style="color: red;">
        <h3>⚠️ Errores de Validación:</h3>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    
		
		<label for="empleado_id">Empleado/Barbero:</label>
		
		<select name="empleado_id" id="empleado_id" required>
			<option value="">-- Seleccionar Barbero --</option>
			<?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($empleado->id); ?>"><?php echo e($empleado->nombre); ?> <?php echo e($empleado->apellido); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select><br>

		
		<label for="cliente_id">Cliente:</label>
		<select name="cliente_id" id="cliente_id" required>
			<option value="">-- Seleccionar Cliente --</option>
			<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombre); ?> <?php echo e($cliente->apellido); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select><br>

		
		<label for="servicio_id">Servicio:</label>
		<select name="servicio_id" id="servicio_id" required>
			<option value="">-- Seleccionar Servicio --</option>
			<?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($servicio->id); ?>"><?php echo e($servicio->nombre); ?> - $<?php echo e($servicio->precio); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select><br>

		
		<label for="fecha">Fecha:</label>
		<input type="date" name="fecha" id="fecha" required><br>

		<label for="hora_inicio">Hora de Inicio:</label>
		
		<input type="time" name="hora_inicio" id="hora_inicio" required><br>
		
		
		
		<button type="submit">Agendar Cita</button>
		<a href="<?php echo e(route('citas.index')); ?>">Regresar</a>
	</form>
    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/citas/create.blade.php ENDPATH**/ ?>