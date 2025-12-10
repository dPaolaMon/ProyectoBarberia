@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')




<div class="glass-card">
    {{-- Título de la Sección --}}
    <h1 class="titulo-seccion">
        <i class="fas fa-calendar-alt"></i> Detalle de Cita N° {{ $citas->id }}
    </h1>

    {{-- Contenedor de Detalles --}}
    <section class="detalle-cliente">
        
        {{-- ID de la Cita --}}
        <div class="campo-detalle">
            <label>ID de la Cita:</label>
            <input value="{{ $citas->id }}" readonly>
        </div>

        <hr class="separador"> 
        
        {{-- DATOS ESENCIALES (Fila para agrupar) --}}
        <div class="input-row">
            {{-- Servicio --}}
            <div class="campo-detalle">
                <label>Servicio Agendado:</label>
                <input type="text" value="{{ $citas->servicio->nombre }}" readonly>
            </div>
            {{-- Estado --}}
            <div class="campo-detalle">
                <label>Estado:</label>
                <input type="text" value="{{ ucfirst($citas->estado) }}" readonly 
                    style="font-weight: bold; 
                    color: @if($citas->estado == 'pendiente') #F8D794 
                            @elseif($citas->estado == 'completada') #3f7972 
                            @else #ff6b6b @endif;">
            </div>
        </div>

        {{-- FECHA Y HORA --}}
        <div class="input-row">
            {{-- Fecha --}}
            <div class="campo-detalle">
                <label>Fecha:</label>
                {{-- Formatear la fecha --}}
                <input type="text" value="{{ \Carbon\Carbon::parse($citas->fecha)->format('d/m/Y') }}" readonly>
            </div>
            {{-- Hora de Inicio --}}
            <div class="campo-detalle">
                <label>Hora de Inicio:</label>
                {{-- Formatear la hora --}}
                <input type="text" value="{{ \Carbon\Carbon::parse($citas->hora_inicio)->format('H:i') }}" readonly>
            </div>
        </div>
        
        <hr class="separador">

        {{-- DATOS DE RELACIÓN --}}
        <div class="input-row">
            {{-- Empleado --}}
            <div class="campo-detalle">
                <label>Empleado Asignado:</label>
                <input type="text" value="{{ $citas->empleado->nombre }} {{ $citas->empleado->apellido }}" readonly>
            </div>

            {{-- Cliente --}}
            <div class="campo-detalle">
                <label>Cliente:</label>
                <input type="text" value="{{ $citas->cliente->nombre }} {{ $citas->cliente->apellido }}" readonly>
            </div>
        </div>
        
    </section>

    {{-- ACCIONES --}}
    <div class="acciones-detalle">
        {{-- Enlace para editar --}}
        <a href="{{ route('citas.edit', $citas->id) }}" class="btn-guardar" style="background-color: #3f7972;">
            <i class="fas fa-edit"></i> Editar Cita
        </a>
        
        {{-- Enlace para regresar --}}
        <a href="{{ route('citas.index') }}" class="btn-regresar">
            <i class="fas fa-arrow-left"></i> Volver al Listado
        </a>
    </div>
</div>

@endsection