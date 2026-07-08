<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>
    <header>@include('includes.header')</header>
    <main>
		<h1>@yield('titulo', 'Citas')</h1>
	  
	  	<a href="{{ route('citas.create') }}">Registrar cita</a>
		{{-- Form para buscar  TODO: AJUSTAR A CITAS
	  	<hr> 
	  	<h3>Buscar</h3>
			<form method="GET" action="{{ route('citas.index') }}">
				
			<label>Nombre:</label>
			<input type="text" name="nombre" value="{{ request('nombre') }}">
			
			<label>Mínimo de visitas:</label>
			<input type="number" name="minimo_visitas" value="{{ request('minimo_visitas') }}" min="0" step="1">
			
			<label>Telefono:</label>
			<input type="text" name="telefono_busqueda" value="{{ request('telefono_busqueda') }}" maxlength="10">
			
			<button type="submit">Buscar</button>
			</form>
		<hr> --}}

	  	<table border="1">
    
    <thead>
        <tr>
            <th>ID Cita</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Servicio</th>
            <th>Barbero</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    @forelse($citas as $cita)
    
        <tr>
            <td> {{ $cita->id }} </td>
            <td> {{ $cita->fecha }} </td>
            <td> {{ $cita->hora_inicio }} </td>
            
            {{-- Muestra el nombre del Servicio --}}
            <td> {{ $cita->servicio->nombre }} </td>
            
            {{-- Muestra el nombre del Empleado --}}
            <td> {{ $cita->empleado->nombre }} </td>
            
            {{-- Muestra el nombre del Cliente --}}
            <td> {{ $cita->cliente->nombre }} </td>
            
            <td> {{ $cita->estado }} </td>
                        
            <td> <a href="{{ route('citas.show', $cita->id) }}">Ver detalle</a> </td>
            <td><a href="{{ route('citas.edit', $cita->id) }}">Editar</a></td>
            
            <td>
                <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline">		
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        
			@empty
			<p>No hay citas registradas que coincidan con tu búsqueda.</p>
        </tr>
    @endforelse
    </tbody>
</table>
    </main>
    {{-- <footer>@include('includes.footer')</footer> --}}
  </body>
</html>
