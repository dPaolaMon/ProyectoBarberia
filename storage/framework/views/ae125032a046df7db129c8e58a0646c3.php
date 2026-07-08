<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>
    <main><form method="POST" action="<?php echo e(route('citas.update', $citas->id)); ?>">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
    
    <h3>Editar Cita N° <?php echo e($citas->id); ?></h3>

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
            
            <option value="<?php echo e($empleado->id); ?>" 
                    <?php echo e($empleado->id == $citas->empleado_id ? 'selected' : ''); ?>>
                <?php echo e($empleado->nombre); ?> <?php echo e($empleado->apellido); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><br>

    
    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        <option value="">-- Seleccionar Cliente --</option>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <option value="<?php echo e($cliente->id); ?>" 
                    <?php echo e($cliente->id == $citas->cliente_id ? 'selected' : ''); ?>>
                <?php echo e($cliente->nombre); ?> <?php echo e($cliente->apellido); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><br>

    
    <label for="servicio_id">Servicio:</label>
    <select name="servicio_id" id="servicio_id" required>
        <option value="">-- Seleccionar Servicio --</option>
        <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <option value="<?php echo e($servicio->id); ?>" 
                    <?php echo e($servicio->id == $citas->servicio_id ? 'selected' : ''); ?>>
                <?php echo e($servicio->nombre); ?> - $<?php echo e($servicio->precio); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><br>

    
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" value="<?php echo e($citas->fecha); ?>" required><br>

    <label for="hora_inicio">Hora de Inicio:</label>
    <input type="time" name="hora_inicio" id="hora_inicio" value="<?php echo e($citas->hora_inicio); ?>" required><br>
    
    
    <label for="estado">Estado de la Cita:</label>
    <select name="estado" id="estado" required>
        
        <option value="pendiente" <?php echo e($citas->estado == 'pendiente' ? 'selected' : ''); ?>>Pendiente</option>
        <option value="completada" <?php echo e($citas->estado == 'completada' ? 'selected' : ''); ?>>Completada</option>
        <option value="cancelada" <?php echo e($citas->estado == 'cancelada' ? 'selected' : ''); ?>>Cancelada</option>
    </select><br>

    <button type="submit">Actualizar Cita</button>
</form>
<a href="<?php echo e(route('citas.index')); ?>">Regresar</a></main>
    <footer></footer>
  </body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/citas/edit.blade.php ENDPATH**/ ?>