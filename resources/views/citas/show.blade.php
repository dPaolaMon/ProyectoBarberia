<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
  </head>
  <body>	  
	<header></header>
    <main></main>
		@section('titulo', 'Detalles de la Cita N° ' . $citas->id)

		<section class="cita-details">
			
			<h1>Detalles de la Cita</h1>
			
			<p><strong>ID de la Cita:</strong></p>
			<input value="{{ $citas->id }}" readonly>

			<hr> {{-- Separador visual --}}

			{{-- DATOS ESENCIALES --}}
			
			<p><strong>Servicio Agendado:</strong></p>
			<input type="text" value="{{ $citas->servicio->nombre }}" readonly>

			<p><strong>Fecha:</strong></p>
			<input type="date" value="{{ $citas->fecha }}" readonly>

			<p><strong>Hora de Inicio:</strong></p>
			<input type="time" value="{{ $citas->hora_inicio}}" readonly>

			<p><strong>Estado:</strong></p>
			<input type="text" value="{{ $citas->estado}}" readonly>

			<hr>

			{{-- DATOS DE RELACIÓN --}}
			
			<p><strong>Empleado Asignado:</strong></p>
			<input type="text" value="{{ $citas->empleado->nombre }} {{ $citas->empleado->apellido }}" readonly>

			<p><strong>Cliente:</strong></p>
			<input type="text" value="{{ $citas->cliente->nombre }} {{ $citas->cliente->apellido }}" readonly>
			
			<hr>

			<a href="{{ route('citas.index') }}">Volver al Listado de Citas</a>
			
		</section>

    <footer></footer>
  </body>
</html>
