<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('titulo', 'AstroCuts')</title>

    <!-- Íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ========= FONDO GLOBAL ========= */
body {
    margin: 0;
    padding: 0;
    background: url("/img/image-inicio.jpeg") no-repeat center center fixed;
    background-size: cover;
    font-family: "Poppins", sans-serif;
    color: #F6F2EA;
}

/* ========= NAV SUPERIOR ========= */
.main-header {
    width: 100%;
    background: rgba(15, 22, 20, 0.85);
    backdrop-filter: blur(6px);
    padding: 12px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
}

.logo-container {
    display: flex;
    align-items: center;
    gap: 12px;
}

.site-logo {
    width: 45px;
    height: 45px;
    object-fit: contain;
}

.main-header h1 {
    font-size: 28px;
    color: var(--khaki, #E8D4A7);
    margin: 0;
}

.main-nav .nav-list {
    list-style: none;
    display: flex;
    gap: 25px;
    margin: 0;
}

.nav-link {
    color: #E8D4A7;
    text-decoration: none;
    font-size: 17px;
    font-weight: 500;
}

.nav-link:hover {
    color: #ffffff;
}

/* ========= CONTENIDO PRINCIPAL ========= */
.main-content {
    width: 90%;
    max-width: 1200px;
    margin: 80px auto;
}

/* Sección hero */
.section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(240, 248, 255, 0.13);
    border-radius: 15px;
    padding: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
}

.text-content h2 {
    font-size: 45px;
    margin-bottom: 10px;
    color: #fff;
}

.slogan {
    font-size: 20px;
    margin-bottom: 20px;
    color: #E8D4A7;
}

.btn-cta {
    background: #B85A33;
    padding: 14px 28px;
    border-radius: 10px;
    color: white;
    font-size: 18px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.btn-cta:hover {
    background: #8B4F2E;
}

/* Imagen Hero */
.image-container img {
    width: 350px;
    border-radius: 20px;
}


/* ========= GRID DE SERVICIOS ========= */
.services-preview-section {
    margin-top: 60px;
}

.section-title {
    font-size: 28px;
    margin-bottom: 25px;
    color: #F6F2EA;
    text-align: center;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
}

.service-card {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(6px);
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    color: #F6F2EA;
    transition: 0.3s;
}

.service-card:hover {
    background: rgba(255, 255, 255, 0.18);
    transform: translateY(-5px);
}

.service-icon {
    width: 70px;
    margin-bottom: 15px;
}


/* ========= FOOTER ========= */
.main-footer {
    margin-top: 60px;
    width: 100%;
    background: rgba(15, 22, 20, 0.85);
    padding: 30px;
    color: #E8D4A7;
    text-align: center;
}

.footer-section {
    margin-bottom: 10px;
}

</style>

</head>

<body>

<header class="main-header">
        
        <div class="logo-container">
            <img src="/img/logo.png" alt="Logo de AstroCuts" class="site-logo">
            <h1>AstroCuts</h1>
        </div>
        
        <nav class="main-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="/login" class="nav-link">Iniciar Sesión</a></li>
                <li class="nav-item"><a href="/register" class="nav-link">Registrarme</a></li>
            </ul>
        </nav>

</header>

<section>
<main class="main-content">

<section class="section">
    <div class="text-content">
        <h2>AstroCuts.</h2>
        <p class="slogan">Tu corte perfecto, agendado en segundos.</p>
        <a href="/citas/create" class="btn btn-primary btn-cta">Agendar Mi Cita Ahora</a>
    </div>
<!--
    <div class="image-container">
        <img src="/img/barber1.jpeg" alt="Imagen de barbería tradicional" class="hero-image">
    </div>
</section> 
-->

<section class="services-preview-section">
    <h3 class="section-title">Nuestros Servicios</h3>

    <div class="services-grid">

        <div class="service-card">
            <img src="/img/icon1.png" alt="" class="service-icon">
            <h4>Corte Clásico</h4>
            <p>Dominamos las técnicas tradicionales de desvanecido y navaja.</p>
        </div>

        <div class="service-card">
            <img src="/img/icon2.png" alt="" class="service-icon">
            <h4>Arreglo de Barba</h4>
            <p>Perfiles definidos y tratamientos de hidratación para tu barba.</p>
        </div>

        <div class="service-card">
            <img src="/img/icon3.png" alt="" class="service-icon">
            <h4>Experiencia VIP</h4>
            <p>Relájate con nuestro servicio premium con vapor y masaje.</p>
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
        <p>&copy; {{ date('Y') }} AstroCuts. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
