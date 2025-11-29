<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	  <h1>{{ $servicios->nombre }}</h1>
		<p><strong>ID:</strong> {{ $servicios->id }}</p>
		<p><strong>Duración:</strong> {{ $servicios->duracion }}</p>
		<p><strong>Precio:</strong> {{ $servicios->precio }}</p>
		<p><strong>Descripción:</strong> {{ $servicios->descripcion }}</p>
		
		<a href="{{ route('servicios.index') }}">Volver</a>
    <header></header>
    <main></main>
    <footer></footer>
  </body>
</html>
