@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')

<div class="glass-card">
    {{-- Título de la Edición --}}
    <h1 class="titulo-form">Editar Cita N° {{ $citas->id }}</h1>

    {{-- Manejo de Errores con Estilo Básico --}}
    @if ($errors->any())
        <div style="background-color: #ff6b6b; color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
            <h3 style="margin-top: 0; font-size: 1.2rem;">⚠️ Errores de Validación:</h3>
            <ul style="padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('citas.update', $citas->id) }}" class="formulario">
        @csrf
        @method('PUT')
        
        {{-- SECCIÓN: PERSONAL --}}
        <div class="input-row">
            {{-- 1. SELECCIÓN DE EMPLEADO (Quién atiende) --}}
            <div class="input-group">
                <label for="empleado_id">Empleado/Barbero:</label>
                <select name="empleado_id" id="empleado_id" class="select-estado" required>
                    <option value="">-- Seleccionar Barbero --</option>
                    @foreach($empleados as $empleado)
                        <option value="{{ $empleado->id }}" 
                                {{ $empleado->id == $citas->empleado_id ? 'selected' : '' }}>
                            {{ $empleado->nombre }} {{ $empleado->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- 2. SELECCIÓN DE CLIENTE (Quién recibe) --}}
            <div class="input-group">
                <label for="cliente_id">Cliente:</label>
                <select name="cliente_id" id="cliente_id" class="select-estado" required>
                    <option value="">-- Seleccionar Cliente --</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" 
                                {{ $cliente->id == $citas->cliente_id ? 'selected' : '' }}>
                            {{ $cliente->nombre }} {{ $cliente->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- SECCIÓN: SERVICIO --}}
        <div class="input-group">
            {{-- 3. SELECCIÓN DE SERVICIO (Qué se hará) --}}
            <label for="servicio_id">Servicio:</label>
            <select name="servicio_id" id="servicio_id" class="select-estado" required>
                <option value="">-- Seleccionar Servicio --</option>
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}" 
                            {{ $servicio->id == $citas->servicio_id ? 'selected' : '' }}>
                        {{ $servicio->nombre }} - ${{ $servicio->precio }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- SECCIÓN: FECHA Y HORA --}}
        <div class="input-row">
            {{-- 4. FECHA --}}
            <div class="input-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $citas->fecha) }}" required>
            </div>

            {{-- 4. HORA --}}
            <div class="input-group">
                <label for="hora_inicio">Hora de Inicio:</label>
                {{-- Se usa substr para eliminar los segundos si están presentes (ej: "10:00:00" -> "10:00") --}}
                <input type="time" name="hora_inicio" id="hora_inicio" value="{{ old('hora_inicio', substr($citas->hora_inicio, 0, 5)) }}" required>
            </div>
        </div>
        
        {{-- SECCIÓN: ESTADO --}}
        <div class="input-group">
            {{-- 5. ESTADO (CRÍTICO para la lógica de negocio) --}}
            <label for="estado">Estado de la Cita:</label>
            <select name="estado" id="estado" class="select-estado" required>
                {{-- Lista de estados posibles (debe coincidir con la validación IN) --}}
                <option value="pendiente" {{ $citas->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="completada" {{ $citas->estado == 'completada' ? 'selected' : '' }}>Completada</option>
                <option value="cancelada" {{ $citas->estado == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>

        {{-- ACCIONES --}}
        <div class="acciones-detalle">
            {{-- Botón para guardar/actualizar --}}
            <button type="submit" class="btn-guardar">
                <i class="fas fa-save"></i> Actualizar Cita
            </button>
            
            {{-- Enlace para regresar. Note que se usa el estilo de btn-regresar con el color gris --}}
            <a href="{{ route('citas.index') }}" class="btn-regresar">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
    </form>
</div>

@endsection
