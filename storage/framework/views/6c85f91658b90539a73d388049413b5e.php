
<?php echo app('Illuminate\Foundation\Vite')('/resources/css/header_style.css'); ?>

    <header class="main-header">
        
        <div class="logo-container">
            <img src="" alt="Logo de AstroCuts" class="site-logo">
            <h1>AstroCuts</h1> 
        </div>
        
        <nav class="main-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="<?php echo e(url('/')); ?>" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="/servicios" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="/clientes" class="nav-link">Clientes</a></li>
                <li class="nav-item"><a href="/citas" class="nav-link">Citas</a></li>
                <li class="nav-item"><a href="/empleados" class="nav-link">Empleados</a></li>
                <li class="nav-item"><a href="/login" class="nav-link">Iniciar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
<?php /**PATH /home/diana/Workspace/PHP/Laravel/ProyectoBarberia/resources/views/includes/header.blade.php ENDPATH**/ ?>