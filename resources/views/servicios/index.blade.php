@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')

<div class="glass-card">
    
    {{-- Título de la Sección --}}
    <h1 class="titulo-seccion">
        <i class="fas fa-cut"></i> Listado de Servicios
    </h1>

    {{-- Botón para Registrar (Crear) Servicio --}}
    <div style="margin-bottom: 25px; text-align: right;">
        <a href="{{ route('servicios.create') }}" class="btn-registrar">
            <i class="fas fa-plus-circle"></i> Nuevo Servicio
        </a>
    </div>

    {{-- --- Form para buscar/Filtrar --- --}}
    <hr class="separador">
    
    <h3 class="subtitulo"><i class="fas fa-search"></i> Filtrar Servicios</h3>
    <form method="GET" action="{{ route('servicios.index') }}" class="form-busqueda">
        <div class="input-row" style="gap: 15px;">
            
            {{-- Nombre --}}
            <div class="input-group">
                <label>Nombre:</label> 
                <input type="text" name="nombre" value="{{ request('nombre') }}">
            </div>

            {{-- Precio Mínimo --}}
            <div class="input-group">
                <label>Precio mínimo:</label> 
                <input type="number" name="min" step="0.01" value="{{ request('min') }}">
            </div>

            {{-- Precio Máximo --}}
            <div class="input-group">
                <label>Precio máximo:</label> 
                <input type="number" name="max" step="0.01" value="{{ request('max') }}">
            </div>
        </div>
        
        <div style="text-align: right; margin-top: 15px;">
             <button type="submit" class="btn-guardar" style="padding: 10px 20px; background-color: #3f7972;">
                <i class="fas fa-filter"></i> Buscar/Filtrar
             </button>
        </div>
    </form>
    
    <hr class="separador"> 


    {{-- Contenedor de la Tabla --}}
    <div class="tabla-contenedor">
        <table class="tabla-estilo">
            
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Duración</th> {{-- Agregamos Duración para mayor utilidad en la tabla --}}
                  <th>Precio</th>   {{-- Agregamos Precio para mayor utilidad en la tabla --}}
                  <th colspan="3">Acciones</th>
                </tr>
            </thead>
            
            <tbody>
            @forelse($servicios as $s)
            
                <tr>
                    <td> {{ $s->id }} </td>
                    <td> {{ $s->nombre }} </td>
                    {{-- Asumiendo que $s->duracion y $s->precio existen en el objeto Servicio --}}
                    <td> {{ $s->duracion ?? 'N/A' }} </td> 
                    <td> ${{ number_format($s->precio ?? 0, 2) }} </td>
                    
                    {{-- ACCIONES --}}
                    <td> 
                        {{-- Ver Detalle --}}
                        <a href="{{ route('servicios.show', $s->id) }}" class="accion" title="Ver Detalle">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('servicios.edit', $s->id) }}" class="accion" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        {{-- Eliminar --}}
                        <form action="{{ route('servicios.destroy', $s->id) }}" method="POST" style="display:inline">       
                            @csrf
                            @method('DELETE')
                            
                            {{-- Se usa la clase 'eliminar' para el hover de color rojo --}}
                            <button type="submit" class="accion eliminar" title="Eliminar" style="background: none; border: none; cursor: pointer;">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        <p style="text-align: center; font-style: italic; color: #E8D4A7;">
                            <i class="fas fa-exclamation-circle"></i> No hay servicios que coincidan con tu búsqueda.
                        </p>
                    </td>
                </tr>
            @endforelse
            </tbody>
            
        </table>
    </div>
</div>

@endsection