<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Clientes')</title>
  </head>
  <body>
    <header>@include('includes.header')</header>
    <main>
		<h1>@yield('titulo', 'Clientes')</h1>
	  
	  	<a href="{{ route('clientes.create') }}">Registrar cliente</a>

	  	<hr> {{-- Form para buscar --}}
	  	<h3>Buscar</h3>
			<form method="GET" action="{{ route('clientes.index') }}">
				
			<label>Nombre:</label>
			<input type="text" name="nombre" value="{{ request('nombre') }}">
			
			<label>Mínimo de visitas:</label>
			<input type="number" name="minimo_visitas" value="{{ request('minimo_visitas') }}" min="0" step="1">
			
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
				  <th>Visitas</th>			  
				  <th colspan="3">Acciones</th>
				</tr>
			</thead>
			
			<tbody>
			@forelse($clientes as $c)
			
				<tr>
					<td> {{ $c->id }} </td>
					<td> {{ $c->nombre }} </td>
					<td> {{ $c->apellido }} </td>
					<td> {{ $c->total_visitas }} </td>
					<td> <a href="{{ route('clientes.show', $c->id) }}">Ver detalle</a> </td>
					<td><a href="{{ route('clientes.edit', $c->id) }}">Editar</a></td>
					
					<td><form action="{{ route('clientes.destroy', $c->id) }}" method="POST" style="display:inline">		
						@csrf
						@method('DELETE')
						
						<button>Eliminar</button>
					</form></td>
				</tr>
			@empty
			<p>No hay clientes que coincidan con tu búsqueda.</p>
			@endforelse
			</tbody>			
    </main>
    
    <footer class="main-footer">
    
    <div class="footer-section contact-info">
        <h3>Contacto</h3>
        <p>Dirección: Calle 123, Municipio, Estado</p>
        <p>Teléfono: (00) 1234 5678</p>
        <p>Email: contacto@astrocuts.com</p>
    </div>

    <div class="footer-section legal-copy">
        <p class="copyright">
            &copy; {{ date('Y') }} AstroCuts. Todos los derechos reservados.
        </p>
    </div>
    
	</footer>
  </body>
</html>
