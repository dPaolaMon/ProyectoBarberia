<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Empleados')</title>
  </head>
  <body>
	<header></header>
    <main>
	  <h1>@yield('titulo', 'Empleados')</h1>
	  
	  	<a href="{{ route('empleados.create') }}">Registrar empleado</a>

	  	<hr>
		<h3>Buscar</h3>
			<form method="GET" action="{{ route('empleados.index') }}">
				
			<label>Nombre:</label>
			<input type="text" name="nombre" value="{{ request('nombre') }}">
			
			<label>Mes de Nacimiento:</label>
			<input type="number" name="mes_nacimiento" value="{{ request('mes_nacimiento') }}" min="1" max="12">
			
			<label>Telefono:</label>
			<input type="text" name="telefono_busqueda" value="{{ request('telefono_busqueda') }}" maxlength="10">
			
			<button type="submit">Buscar</button>
			</form>
		<hr>
		
		<table border=1>
			
			<thead>
				<tr>
				  <th>ID</th>
				  <th>Nombre</th>
				  <th>Apellidos</th>
				  <th>Edad</th>				  
				  <th>Telefono</th>				  
				  <th colspan="3">Acciones</th>
				</tr>
			</thead>
			
			<tbody>
			@forelse($empleados as $e)
			
				<tr>
					<td> {{ $e->id }} </td>
					<td> {{ $e->nombre }} </td>
					<td> {{ $e->apellido }} </td>
					<td> {{ $e->edad }} </td>
					<td> {{ $e->telefono }} </td>
					<td> <a href="{{ route('empleados.show', $e->id) }}">Ver detalle</a> </td>
					<td><a href="{{ route('empleados.edit', $e->id) }}">Editar</a></td>
					
					<td><form action="{{ route('empleados.destroy', $e->id) }}" method="POST" style="display:inline">		
						@csrf
						@method('DELETE')
						
						<button>Eliminar</button>
					</form></td>
				</tr>
			@empty
			<p>No hay empleados que coincidan con tu búsqueda.</p>

			</tbody>
			@endforelse
			
		</table>
    </main>
    <footer>
		{{--- <a href="{{ route('AstroCuts') }}">Página principal</a> ---}}
		<a href="{{ url('/') }}">Página principal</a>

    </footer>
  </body>
</html>
