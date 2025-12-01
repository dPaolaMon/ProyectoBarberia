<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>	  
	<header></header>
    <main></main>
	  <h1>@section('titulo', 'Detalle del Servicio: ' . $servicios->nombre)</h1>
		<p><strong>ID:</strong> {{ $servicios->id }}</p>
		<p><strong>Duración:</strong> {{ $servicios->duracion }}</p>
		<p><strong>Precio:</strong> {{ $servicios->precio }}</p>
		<p><strong>Descripción:</strong> {{ $servicios->descripcion }}</p>
		
		<a href="{{ route('servicios.index') }}">Volver</a>

    <footer></footer>
  </body>
</html>
