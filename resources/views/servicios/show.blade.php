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
		<p><strong>ID:</strong></p>
		<input value="{{ $servicios->id }}" readonly>

		<p><strong>Duración:</strong></p>
		<input type="text" value="{{ $servicios->duracion }}" readonly>

		<p><strong>Precio:</strong></p>
		<input type="number" value="{{ $servicios->precio }}" readonly>

		<p><strong>Descripción:</strong></p>
		<input type="text" value="{{ $servicios->descripcion }}" readonly>
		
		<a href="{{ route('servicios.index') }}">Volver</a>

    <footer></footer>
  </body>
</html>
