<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>
	  <header></header>
		<h1>Editar Empleado</h1>
	  <main>
	
	<form method="POST" action="{{ route('empleados.update', $empleados->id) }}">
	@csrf
	@method('PUT')
		<label>Nombre:</label>
		<input type="text" name="nombre" value="{{ $empleados->nombre }}" required><br>

		<label>Apellidos:</label>
		<input type="text" name="apellido" value="{{ $empleados-> apellido }}" required><br>
		
		<label>Edad:</label>
		<input type="number" name="edad" value="{{ $empleados->edad }}" required><br>

		<label>Fecha de Nacimiento:</label>
		<input type="date" name="fecha_nac" value="{{ $empleados->fecha_nac }}" required><br>

		<label>Teléfono:</label>
		<input type="number" name="telefono" value="{{ $empleados->telefono }}" required><br>

		<label>Calle:</label>
		<input type="text" name="calle" value="{{ $empleados-> calle }}" required><br>

		<label>Mz:</label>
		<input type="number" name="mz" value="{{ $empleados->mz }}" required><br>

		<label>Lt:</label>
		<input type="number" name="lt" value="{{ $empleados->lt }}" required><br>

		<label>Entidad:</label>
		<input type="text" name="municipio" value="{{ $empleados->municipio }}" required><br>

		<label>Estado:</label>
		<input type="text" name="estado" value="{{ $empleados->estado }}" required><br>

		<label>Código Postal:</label>
		<input type="number" name="cp" value="{{ $empleados->cp }}" required><br>

		<button type="submit">Actualizar</button>
	</form>
		<a href="{{ route('empleados.index') }}">Regresar</a>

    </main>
    <footer></footer>
  </body>
</html>
