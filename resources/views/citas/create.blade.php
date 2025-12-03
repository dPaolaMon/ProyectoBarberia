<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>
    <main></main>
    <form method="POST" action="{{ route('citas.store') }}">
	@csrf
    
    <h3>Agendar Nueva Cita</h3>

	@if ($errors->any())
    <div style="color: red;">
        <h3>⚠️ Errores de Validación:</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
		{{-- 1. SELECCIÓN DE EMPLEADO (¿Quién atiende?) --}}
		<label for="empleado_id">Empleado/Barbero:</label>
		{{-- El 'name' debe coincidir con la clave foránea en la migración --}}
		<select name="empleado_id" id="empleado_id" required>
			<option value="">-- Seleccionar Barbero --</option>
			@foreach($empleados as $empleado)
				<option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
			@endforeach
		</select><br>

		{{-- 2. SELECCIÓN DE CLIENTE (¿Quién recibe?) --}}
		<label for="cliente_id">Cliente:</label>
		<select name="cliente_id" id="cliente_id" required>
			<option value="">-- Seleccionar Cliente --</option>
			@foreach($clientes as $cliente)
				<option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
			@endforeach
		</select><br>

		{{-- 3. SELECCIÓN DE SERVICIO (¿Qué se hará?) --}}
		<label for="servicio_id">Servicio:</label>
		<select name="servicio_id" id="servicio_id" required>
			<option value="">-- Seleccionar Servicio --</option>
			@foreach($servicios as $servicio)
				<option value="{{ $servicio->id }}">{{ $servicio->nombre }} - ${{ $servicio->precio }}</option>
			@endforeach
		</select><br>

		{{-- 4. FECHA Y HORA --}}
		<label for="fecha">Fecha:</label>
		<input type="date" name="fecha" id="fecha" required><br>

		<label for="hora_inicio">Hora de Inicio:</label>
		{{-- Usar type="time" para facilitar la entrada de hora en el navegador --}}
		<input type="time" name="hora_inicio" id="hora_inicio" required><br>
		
		{{-- El campo 'estado' se maneja mejor en el controlador (por defecto 'pendiente') --}}
		
		<button type="submit">Agendar Cita</button>
		<a href="{{ route('citas.index') }}">Regresar</a>
	</form>
    <footer></footer>
  </body>
</html>
