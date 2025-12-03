<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('titulo', 'AstroCuts')</title>
    @vite(['resources/css/header_style.css'])
    @vite(['resources/css/footer_style.css'])
</head>
<body>
    
    {{-- Encabezado principal del sitio --}}
    <header class="main-header">
        
        <div class="logo-container">
            <img src="" alt="Logo de AstroCuts" class="site-logo">
            <h1>AstroCuts</h1> {{-- Título principal del sitio, relevante para SEO --}}
        </div>
        
        <nav class="main-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="/servicios" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="/clientes" class="nav-link">Clientes</a></li>
                <li class="nav-item"><a href="/citas" class="nav-link">Citas</a></li>
                <li class="nav-item"><a href="/empleados" class="nav-link">Empleados</a></li>
            </ul>
        </nav>
        
    </header>

    <section>
        @yield('contenido')
    </section>

    <footer class="main-footer">
    
    <div class="footer-section contact-info">
        <h3>Contacto</h3>
        <p>Dirección: Calle 123, Municipio, Estado</p>
        <p>Teléfono: (00) 1234 5678</p>
        <p>Email: contacto@astrocuts.com</p>
    </div>

    <div class="footer-section legal-copy">
        <p class="copyright">
            &copy; {{ date('Y') }} AstroCuts. Todos los derechos reservados.
        </p>
    </div>
    
	</footer>

</body>
</html>
