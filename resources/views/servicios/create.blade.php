<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	  <h1>Nuevo Servicio</h1>

	  {{-- Validacion de errores (if) --}}
	  @if($errors->any())
		<div style="color:red;">
			<ul>
			@foreach ($errors->all() as $error)
			
			<li>{{ $error }}</li>
			
			@endforeach
			</ul>
		</div>
	  @endif
	<form method="POST" action="{{ route('servicios.store') }}">
	@csrf
		<label>Nombre:</label>
		<input type="text" name="nombre" required><br>
		
		<label>Descripción:</label>
		<textarea name="descripcion" required></textarea><br>

		<label>Duración:</label>
		<input type="text" name="duracion" required><br>

		<label>Precio:</label>
		<input type="number" name="precio" step="0.01" required><br>
	<button type="submit">Guardar</button>
	<a href="{{ route('servicios.index') }}">Regresar</a>
	</form>
	
    <header></header>
    <main></main>
    <footer></footer>
  </body>
</html>
