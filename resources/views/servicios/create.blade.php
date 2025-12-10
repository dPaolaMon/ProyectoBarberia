@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')


<div class="glass-card">
    
    <h1 class="titulo-form">Nuevo Servicio</h1>

    {{-- Validacion de errores --}}
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

    <form method="POST" action="{{ route('servicios.store') }}" class="formulario">
        @csrf
        
        {{-- CAMPO: NOMBRE --}}
        <div class="input-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        </div>
        
        {{-- CAMPO: DESCRIPCIÓN --}}
        <div class="input-group">
            <label>Descripción:</label>
            {{-- Se aplica estilo inline a textarea para coincidir con la apariencia de los inputs --}}
            <textarea name="descripcion" rows="4" 
                style="padding: 12px 14px; font-size: 1.1rem; border-radius: 10px; border: none; background-color: rgba(120, 150, 130, 0.45); color: #fff;" 
                required>{{ old('descripcion') }}</textarea>
        </div>

        {{-- CAMPO: DURACIÓN Y PRECIO (Agrupados en una fila) --}}
        <div class="input-row">
            
            {{-- Duración --}}
            <div class="input-group">
                <label>Duración (ej. 1h 30m):</label>
                <input type="text" name="duracion" value="{{ old('duracion') }}" required>
            </div>

            {{-- Precio --}}
            <div class="input-group">
                <label>Precio:</label>
                <input type="number" name="precio" step="0.01" value="{{ old('precio') }}" required>
            </div>
        </div>

        {{-- ACCIONES --}}
        <div class="acciones-detalle">
            {{-- Botón para guardar --}}
            <button type="submit" class="btn-guardar">
                <i class="fas fa-save"></i> Guardar Servicio
            </button>
            
            {{-- Enlace para regresar --}}
            <a href="{{ route('servicios.index') }}" class="btn-regresar">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
    </form>
</div>

@endsection