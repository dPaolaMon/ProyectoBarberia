<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>
	  <h1>Nuevo Cliente</h1>

	  {{-- Validacion de errores (if) 
	  @if($errors->any())
		<div style="color:red;">
			<ul>
			@foreach ($errors->all() as $error)
			
			<li>{{ $error }}</li>
			
			@endforeach
			</ul>
		</div>
	  @endif --}}
	  
	<form method="POST" action="{{ route('clientes.store') }}">
	@csrf
		<label>Nombre:</label>
		<input type="text" name="nombre" required><br>
		
		<label>Apellidos:</label>
		<input type="text" name="apellido" required><br>

		<label>Fecha de Nacimiento:</label>
		<input type="date" name="fecha_nac" required><br>

		<label>Telefono:</label>
		<input type="number" name="telefono" required><br>

		<label>Correo Electronico:</label>
		<input type="email" name="correo" required><br>

	<button type="submit">Guardar</button>
	<a href="{{ route('clientes.index') }}">Regresar</a>
	</form>
	
    <header></header>
    <main></main>
    <footer></footer>
  </body>
</html>
