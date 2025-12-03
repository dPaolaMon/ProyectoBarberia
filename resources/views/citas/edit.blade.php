<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>
    <main><form method="POST" action="{{ route('citas.update', $citas->id) }}">
	@csrf
	@method('PUT')
    
    <h3>Editar Cita N° {{ $citas->id }}</h3>

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
    
    {{-- 1. SELECCIÓN DE EMPLEADO (Quién atiende) --}}
    <label for="empleado_id">Empleado/Barbero:</label>
    <select name="empleado_id" id="empleado_id" required>
        <option value="">-- Seleccionar Barbero --</option>
        @foreach($empleados as $empleado)
            {{-- CRÍTICO: Selecciona el empleado actual de la cita --}}
            <option value="{{ $empleado->id }}" 
                    {{ $empleado->id == $citas->empleado_id ? 'selected' : '' }}>
                {{ $empleado->nombre }} {{ $empleado->apellido }}
            </option>
        @endforeach
    </select><br>

    {{-- 2. SELECCIÓN DE CLIENTE (Quién recibe) --}}
    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        <option value="">-- Seleccionar Cliente --</option>
        @foreach($clientes as $cliente)
            {{-- CRÍTICO: Selecciona el cliente actual de la cita --}}
            <option value="{{ $cliente->id }}" 
                    {{ $cliente->id == $citas->cliente_id ? 'selected' : '' }}>
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </option>
        @endforeach
    </select><br>

    {{-- 3. SELECCIÓN DE SERVICIO (Qué se hará) --}}
    <label for="servicio_id">Servicio:</label>
    <select name="servicio_id" id="servicio_id" required>
        <option value="">-- Seleccionar Servicio --</option>
        @foreach($servicios as $servicio)
            {{-- CRÍTICO: Selecciona el servicio actual de la cita --}}
            <option value="{{ $servicio->id }}" 
                    {{ $servicio->id == $citas->servicio_id ? 'selected' : '' }}>
                {{ $servicio->nombre }} - ${{ $servicio->precio }}
            </option>
        @endforeach
    </select><br>

    {{-- 4. FECHA Y HORA --}}
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" value="{{ $citas->fecha }}" required><br>

    <label for="hora_inicio">Hora de Inicio:</label>
    <input type="time" name="hora_inicio" id="hora_inicio" value="{{ $citas->hora_inicio }}" required><br>
    
    {{-- 5. ESTADO (CRÍTICO para la lógica de negocio) --}}
    <label for="estado">Estado de la Cita:</label>
    <select name="estado" id="estado" required>
        {{-- Lista de estados posibles (debe coincidir con la validación IN) --}}
        <option value="pendiente" {{ $citas->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
        <option value="completada" {{ $citas->estado == 'completada' ? 'selected' : '' }}>Completada</option>
        <option value="cancelada" {{ $citas->estado == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select><br>

    <button type="submit">Actualizar Cita</button>
</form>
<a href="{{ route('citas.index') }}">Regresar</a></main>
    <footer></footer>
  </body>
</html>
