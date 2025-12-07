<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>
	  <header></header>
		<h1>Editar Cliente {{ $clientes->nombre }}</h1>
	  <main>
	
	<form method="POST" action="{{ route('clientes.update', $clientes->id) }}">
	@csrf
	@method('PUT')
		<label>Nombre:</label>
		<input type="text" name="nombre" value="{{ $clientes->nombre }}" required><br>

		<label>Apellidos:</label>
		<input type="text" name="apellido" value="{{ $clientes-> apellido }}" required><br>

		<label>Fecha de Nacimiento:</label>
		<input type="date" max="2010-12-07" min="1940-01-01" name="fecha_nac" value="{{ $clientes->fecha_nac }}" required><br>

		<label>Teléfono:</label>
		<input type="number" name="telefono" value="{{ $clientes->telefono }}" required><br>
		{{-- SE ELIMINA PARA QUE SE ALMACENE EN LA TABLA USERS
		<label>Correo Electronico:</label>
		<input type="email" name="correo" value="{{ $clientes->correo }}" required><br>	--}}		


		<button type="submit">Actualizar</button>
	</form>
		<a href="{{ route('clientes.index') }}">Regresar</a>

    </main>
    <footer></footer>
  </body>
</html>
