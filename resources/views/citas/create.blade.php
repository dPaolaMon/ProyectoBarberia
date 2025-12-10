@extends('layouts.app')

@section('titulo', 'Nuevo empleado')

@section('contenido')



{{-- La estructura del glass-card se coloca directamente para el contenido de la vista --}}
<div class="glass-card">
    <h1 class="titulo-form">Agendar Nueva Cita</h1>

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

    <form method="POST" action="{{ route('citas.store') }}" class="formulario">
        @csrf

        {{-- SECCIÓN: SELECCIÓN DE PERSONAL --}}
        <div class="input-row">
            {{-- 1. SELECCIÓN DE EMPLEADO (¿Quién atiende?) --}}
            <div class="input-group">
                <label for="empleado_id">Empleado/Barbero:</label>
                {{-- Usamos la clase .select-estado para el <select> --}}
                <select name="empleado_id" id="empleado_id" class="select-estado" required>
                    <option value="">-- Seleccionar Barbero --</option>
                    @foreach($empleados as $empleado)
                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                    @endforeach
                </select>
            </div>

            {{-- 2. SELECCIÓN DE CLIENTE (¿Quién recibe?) --}}
            <div class="input-group">
                <label for="cliente_id">Cliente:</label>
                {{-- Usamos la clase .select-estado para el <select> --}}
                <select name="cliente_id" id="cliente_id" class="select-estado" required>
                    <option value="">-- Seleccionar Cliente --</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- SECCIÓN: SERVICIO --}}
        <div class="input-group">
            {{-- 3. SELECCIÓN DE SERVICIO (¿Qué se hará?) --}}
            <label for="servicio_id">Servicio:</label>
            {{-- Usamos la clase .select-estado para el <select> --}}
            <select name="servicio_id" id="servicio_id" class="select-estado" required>
                <option value="">-- Seleccionar Servicio --</option>
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre }} - ${{ $servicio->precio }}</option>
                @endforeach
            </select>
        </div>

        {{-- SECCIÓN: FECHA Y HORA --}}
        <div class="input-row">
            {{-- 4. FECHA --}}
            <div class="input-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" required>
            </div>

            {{-- 4. HORA --}}
            <div class="input-group">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
            </div>
        </div>

        {{-- ACCIONES --}}
        <div class="acciones">
            {{-- Botón para guardar/agendar con clase de estilo --}}
            <button type="submit" class="btn-guardar">
                <i class="fas fa-calendar-check"></i> Agendar Cita
            </button>

            {{-- Enlace para regresar con clase de estilo --}}
            <a href="{{ route('citas.index') }}" class="btn-regresar" style="background-color: #6c757d;">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
    </form>
</div>