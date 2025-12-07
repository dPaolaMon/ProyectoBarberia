<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <link rel="stylesheet" href="{{ asset('css/header_style.css') }}">
  </head>
  <body>

	  <header>@include('includes.header')</header>

	  <h1>Servicios</h1>
	  
	  	<a href="{{ route('servicios.create') }}">Nuevo Servicio</a>

	  	<hr>
		<h3>Buscar</h3>
			<form method="GET" action="{{ route('servicios.index') }}">
				
			<label>Nombre:</label> <input type="text" name="nombre" value="{{ request('nombre') }}">
			<label>Precio mínimo:</label> <input type="number" name="min" step="0.01" value="{{ request('min') }}">
			<label>Precio máximo:</label> <input type="number" name="max" step="0.01" value="{{ request('max') }}">
			
			<button type="submit">Buscar</button>
			</form>
		<hr>
		
		<table border=1>
			
			<thead>
				<tr>
				  <th>ID</th>
				  <th>Nombre</th></th>
				  <th colspan="3">Acciones</th>
				</tr>
			</thead>
			
			<tbody>
			@forelse($servicios as $s)
			
				<tr>
					<td> {{ $s->id }} </td>
					<td> {{ $s->nombre }} </td>
					<td> <a href="{{ route('servicios.show', $s->id) }}">Ver detalle</a> </td>
					<td><a href="{{ route('servicios.edit', $s->id) }}">Editar</a></td>
					
					<td><form action="{{ route('servicios.destroy', $s->id) }}" method="POST" style="display:inline">		
						@csrf
						@method('DELETE')
						
						<button>Eliminar</button>
					</form></td>
				</tr>
			@empty
			<p>No hay productos que coincidan con tu búsqueda.</p>

			</tbody>
			@endforelse
			
		</table>

		@include('includes.footer')
   
  </body>
</html>
