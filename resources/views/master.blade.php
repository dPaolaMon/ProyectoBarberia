<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('titulo', 'AstroCuts')</title>
    @vite(['resources/css/header_style.css'])
    @vite(['resources/css/footer_style.css'])
    @vite(['/resources/css/master_style.css'])
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
        <main class="main-content">
        
        <section class="section">
            <div class="text-content">
                <h2>AstroCuts.</h2>
                <p class="slogan">Tu corte perfecto, agendado en segundos.</p>
                
                <a href="" class="btn btn-primary btn-cta">Agendar Mi Cita Ahora</a>
            </div>
            
            <div class="image-container">
                <img src="" alt="Imagen de barbería tradicional" class="hero-image">
            </div>
        </section>

        <section class="services-preview-section">
            <h3 class="section-title">Nuestros Servicios</h3>
            
            <div class="services-grid">
                <div class="service-card">
                    <img src="" alt="Icono de tijeras" class="service-icon">
                    <h4>Corte Clásico</h4>
                    <p>Dominamos las técnicas tradicionales de desvanecido y navaja.</p>
                </div>
                
                <div class="service-card">
                    <img src="" alt="Icono de barba" class="service-icon">
                    <h4>Arreglo de Barba</h4>
                    <p>Perfiles definidos y tratamientos de hidratación para tu barba.</p>
                </div>
                
                <div class="service-card">
                    <img src="" alt="Icono de estrella VIP" class="service-icon">
                    <h4>Experiencia</h4>
                    <p>Servicios descripcion.</p>
                </div>
            </div>
        </section>
        
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
            &copy; {{ date('Y') }} AstroCuts. Todos los derechos reservados.
        </p>
    </div>
    
	</footer>

</body>
</html>
