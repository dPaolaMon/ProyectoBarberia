@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')

<div class="glass-card">
    
    {{-- Título de la Sección --}}
    <h1 class="titulo-seccion">
        <i class="fas fa-cut"></i> Detalle del Servicio: {{ $servicios->nombre }}
    </h1>

    {{-- Contenedor de Detalles --}}
    <section class="detalle-cliente">
        
        {{-- ID del Servicio --}}
        <div class="campo-detalle">
            <label>ID:</label>
            <input value="{{ $servicios->id }}" readonly>
        </div>

        <hr class="separador"> 
        
        {{-- DURACIÓN Y PRECIO --}}
        <div class="input-row">
            {{-- Duración --}}
            <div class="campo-detalle">
                <label>Duración:</label>
                <input type="text" value="{{ $servicios->duracion }}" readonly>
            </div>
            {{-- Precio --}}
            <div class="campo-detalle">
                <label>Precio:</label>
                <input type="text" value="${{ number_format($servicios->precio, 2) }}" readonly>
            </div>
        </div>

        {{-- DESCRIPCIÓN --}}
        <div class="campo-detalle">
            <label>Descripción:</label>
            {{-- Para la descripción, es mejor usar un textarea o un div con estilo para mostrar contenido extenso sin cortarse --}}
            <textarea readonly 
                rows="4" 
                style="padding: 12px 14px; font-size: 1.1rem; border-radius: 10px; border: none; background-color: rgba(120, 150, 130, 0.45); color: #fff; width: 100%; resize: none;">{{ $servicios->descripcion }}</textarea>
        </div>
        
    </section>

    {{-- ACCIONES --}}
    <div class="acciones-detalle">
        {{-- Enlace para editar --}}
        <a href="{{ route('servicios.edit', $servicios->id) }}" class="btn-guardar" style="background-color: #3f7972;">
            <i class="fas fa-edit"></i> Editar Servicio
        </a>
        
        {{-- Enlace para regresar --}}
        <a href="{{ route('servicios.index') }}" class="btn-regresar">
            <i class="fas fa-arrow-left"></i> Volver al Listado
        </a>
    </div>
</div>

@endsection
