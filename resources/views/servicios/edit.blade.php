<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
	  <header></header>
		<h1>Editar Servicio</h1>
	  <main>


	
	<form method="POST" action="{{ route('servicios.update', $servicios->id) }}">
	@csrf
	@method('PUT')
		<label>Nombre:</label>
		<input type="text" name="nombre" value="{{ $servicios->nombre }}" required><br>

		<label>Duración:</label>
		<input type="text" name="duracion" value="{{ $servicios-> duracion }}" required><br>
		
		<label>Precio:</label>
		<input type="number" name="precio" step="0.01" value="{{ $servicios->precio }}" required><br>

		<label>Descripción:</label>
		<textarea name="descripcion" required>{{ $servicios->descripcion }}</textarea><br>

		<button type="submit">Actualizar</button>
	</form>
		<a href="{{ route('servicios.index') }}">Regresar</a>

    </main>
    <footer></footer>
  </body>
</html>
