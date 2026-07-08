<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>
	<header></header>
    <main>
	  <h1>Datos del emplead@: {{ $empleados->nombre }}</h1>
	  <h3>Datos generales</h3>
		<p><strong>ID:</strong></p>
		<input value ="{{ $empleados->id }}" readonly>
		
		<p><strong>Nombre:</strong></p>
		<input value ="{{ $empleados->nombre }}" readonly>
		 
		<p><strong>Apellidos:</strong></p>
		<input value ="{{ $empleados->apellido }}" readonly>
		
		<p><strong>Edad:</strong></p>
		<input value ="{{ $empleados->edad }}" readonly>

		<p><strong>Fecha de nacimiento:</strong></p>
		<input value ="{{ $empleados->fecha_nac }}" readonly>

		<p><strong>Telefono:</strong></p>
		<input value ="{{ $empleados->telefono }}" readonly>

	  <hr> <h3>Direccion</h3>

		<p><strong>Calle:</strong></p>
		<input value ="{{ $empleados->calle }}" readonly>

		<p><strong>Mz:</strong></p>
		<input value ="{{ $empleados->mz }}" readonly>

		<p><strong>Lt:</strong></p>
		<input value ="{{ $empleados->lt }}" readonly>

		<p><strong>Entidad:</strong></p>
		<input value ="{{ $empleados->municipio }}" readonly>

		<p><strong>Estado:</strong></p>
		<input value ="{{ $empleados->estado }}" readonly>

		<p><strong>Código Postal:</strong></p>
		<input value ="{{ $empleados->cp }}" readonly> 

		

		<br><a href="{{ route('empleados.index') }}">Volver</a>
    </main>
    <footer></footer>
  </body>
</html>
