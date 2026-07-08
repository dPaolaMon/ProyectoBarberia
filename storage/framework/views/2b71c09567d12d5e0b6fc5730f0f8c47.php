<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'AstroCuts'); ?></title>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/clientes/create.css']); ?> 
</head>
<body>
    
    <header></header>
    
    <main class="main-content">
        
        <div class="fondo-borroso">
            <div class="contenido-principal">
                <div class="card-form">

                    <h1 class="card-title">Nuevo Cliente</h1>
                    
                    
                    <?php if($errors->any()): ?>
                        
                        <div class="errores-validacion">
                            <h3>⚠️ Errores de Validación:</h3>
                            <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo e(route('clientes.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="perfil-derecha">
                            
                            <div class="input-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" value="<?php echo e(old('nombre')); ?>" required>
                            </div>
                            
                            <div class="input-group">
                                <label for="apellido">Apellidos:</label>
                                <input type="text" id="apellido" name="apellido" value="<?php echo e(old('apellido')); ?>" required>
                            </div>
                            
                        </div>

                        <div class="input-row">
                            
                            <div class="input-group">
                                <label for="fecha_nac">Fecha de Nacimiento:</label>
                                <input type="date"
										max="<?php echo e(now()->subYears(8)->toDateString()); ?>" 
                                       min="<?php echo e(now()->subYears(100)->toDateString()); ?>

                                       id="fecha_nac" 
                                       name="fecha_nac" 
                                       value="<?php echo e(old('fecha_nac')); ?>" 
                                       required> 
                            </div>

                            <div class="input-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" value="<?php echo e(old('telefono')); ?>" required maxlength="10">
                            </div>
                            
                        </div>

                        <div class="input-row-final">
                            <button type="submit" class="guardar-btn">Guardar</button>
                            <a href="<?php echo e(route('clientes.index')); ?>">Regresar</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        
    </main>

    <footer></footer>
</body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/clientes/create.blade.php ENDPATH**/ ?>