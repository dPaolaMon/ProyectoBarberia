<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>	  
	<header></header>
    <main></main>
	  <h1>@section('titulo', 'Detalles del cliente: ' . $clientes->nombre)</h1>
	   <h1>Datos del cliente: {{ $clientes->nombre }}</h1>
		<p><strong>ID:</strong></p>
		<input value="{{ $clientes->id }}" readonly>

		<p><strong>Nombre:</strong></p>
		<input type="text" value="{{ $clientes->nombre }}">

		<p><strong>Apellidos:</strong></p>
		<input type="text" value="{{ $clientes->apellido }}">

		<p><strong>Teléfono:</strong></p>
		<input type="text" value="{{ $clientes->telefono}}">
		{{-- SE ELIMINA PARA QUE SE ALMACENE EN LA TABLA USERS
		<p><strong>Correo Electrónico:</strong></p>
		<input type="email" value="{{ $clientes->correo}}"> --}}

		<p><strong>Fecha de nacimiento:</strong></p>
		<input type="date" value="{{ $clientes->fecha_nac}}"> 

		<p><strong>Total de visitas:</strong></p>
		<input value="{{ $clientes->total_visitas}}" readonly>
		
		<a href="{{ route('clientes.index') }}">Volver</a>

    <footer></footer>
  </body>
</html>
