<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('titulo', 'AstroCuts')</title>
	</head>
	<body>
		
	{{-- Encabezado fijo --}}
		<header style="margin-bottom: 20px;">
			<img src="" alt="logo astrocuts" >
			<a href="/servicios">Servicios</a> |
			<a href="/clientes">Clientes</a> |
			<a href="/citas">Citas</a> |
			<a href="/empleados">Empleados</a>
		</header>
	
		<section>
			@yield('contenido')
		</section>
	
	</body>
</html>
