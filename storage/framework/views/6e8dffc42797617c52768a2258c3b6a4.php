<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('titulo', 'Clientes'); ?></title>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/clientes/index.css']); ?> 
</head>
<body>
    
    <header><?php echo $__env->make('includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></header>
    
    <main class="main-content">
        
        
        
        <div class="contenido-principal">

            
            <div class="card-form"> 

                <h1 class="card-title">Clientes</h1>

                
                <div class="acciones-header">
                    <a href="<?php echo e(route('clientes.create')); ?>" class="btn-primary">Registrar cliente</a>
                </div>

                
                <h3>Buscar</h3>

                <form method="GET" action="<?php echo e(route('clientes.index')); ?>" class="formulario-busqueda">

                    
                    <div class="input-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" value="<?php echo e(request('nombre')); ?>">
                    </div>

                    
                    <div class="input-group">
                        <label>Mínimo de visitas:</label>
                        <input type="number" name="minimo_visitas" value="<?php echo e(request('minimo_visitas')); ?>" min="0" step="1">
                    </div>

                    
                    <div class="input-group">
                        <label>Teléfono:</label>
                        <input type="text" name="telefono_busqueda" value="<?php echo e(request('telefono_busqueda')); ?>" maxlength="10">
                    </div>

                    <div class="acciones-busqueda">
                        <button class="btn-primary" type="submit">Buscar</button>
                    </div>
                </form>

                <hr class="separator">

                
                <div class="tabla-contenedor">
                    <table>

                        <thead>
                            <tr class="header-tabla">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Visitas</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="fila-tabla">
                                <td><?php echo e($c->id); ?></td>
                                <td><?php echo e($c->nombre); ?></td>
                                <td><?php echo e($c->apellido); ?></td>
                                <td><?php echo e($c->total_visitas); ?></td>

                                <td class="accion-columna">
                                    <a class="btn-link" href="<?php echo e(route('clientes.show', $c->id)); ?>">Ver detalle</a>
                                </td>

                                <td class="accion-columna">
                                    <a class="btn-link" href="<?php echo e(route('clientes.edit', $c->id)); ?>">Editar</a>
                                </td>

                                <td class="accion-columna">
                                    <form action="<?php echo e(route('clientes.destroy', $c->id)); ?>" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este cliente?')" style="display:inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn-eliminar" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="mensaje-vacio">
                                    No hay clientes que coincidan con tu búsqueda.
                                </td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        
    </main>
    
    <footer class="main-footer">
        <div class="footer-section contact-info">
            <h3>Contacto</h3>
            <p>Dirección: Calle 123, Municipio, Estado</p>
            <p>Teléfono: (00) 1234 5678</p>
            <p>Email: contacto@astrocuts.com</p>
        </div>

        <div class="footer-section legal-copy">
            <p class="copyright">
                &copy; <?php echo e(date('Y')); ?> AstroCuts. Todos los derechos reservados.
            </p>
        </div>
    </footer>
    
</body>
</html>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/clientes/index.blade.php ENDPATH**/ ?>