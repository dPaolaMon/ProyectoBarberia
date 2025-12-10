@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')

<div class="glass-card">
    
    {{-- Título de la Edición --}}
    <h1 class="titulo-form">Editar Servicio N° {{ $servicios->id }}</h1>

    {{-- Validacion de errores (Puedes incluir aquí tu bloque de errores estilizado si lo deseas) --}}
    @if($errors->any())
        <div style="background-color: #ff6b6b; color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
            <h3 style="margin-top: 0; font-size: 1.2rem;">⚠️ Errores de Validación:</h3>
            <ul style="padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('servicios.update', $servicios->id) }}" class="formulario">
        @csrf
        @method('PUT')
        
        {{-- CAMPO: NOMBRE --}}
        <div class="input-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $servicios->nombre) }}" required>
        </div>
        
        {{-- CAMPO: DURACIÓN Y PRECIO (Agrupados en una fila) --}}
        <div class="input-row">
            
            {{-- Duración --}}
            <div class="input-group">
                <label>Duración:</label>
                <input type="text" name="duracion" value="{{ old('duracion', $servicios->duracion) }}" required>
            </div>

            {{-- Precio --}}
            <div class="input-group">
                <label>Precio:</label>
                <input type="number" name="precio" step="0.01" value="{{ old('precio', $servicios->precio) }}" required>
            </div>
        </div>

        {{-- CAMPO: DESCRIPCIÓN --}}
        <div class="input-group">
            <label>Descripción:</label>
            {{-- Se aplica estilo inline a textarea para coincidir con la apariencia de los inputs --}}
            <textarea name="descripcion" rows="4" 
                style="padding: 12px 14px; font-size: 1.1rem; border-radius: 10px; border: none; background-color: rgba(120, 150, 130, 0.45); color: #fff;" 
                required>{{ old('descripcion', $servicios->descripcion) }}</textarea>
        </div>


        {{-- ACCIONES --}}
        <div class="acciones-detalle">
            {{-- Botón para actualizar --}}
            <button type="submit" class="btn-guardar">
                <i class="fas fa-save"></i> Actualizar Servicio
            </button>
            
            {{-- Enlace para regresar --}}
            <a href="{{ route('servicios.index') }}" class="btn-regresar">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
    </form>
</div>

@endsection