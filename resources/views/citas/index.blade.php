@extends('layouts.app')

@section('titulo', 'Nuevo servicio')

@section('contenido')

<div class="glass-card">
    
    {{-- Título de la Sección --}}
    <h1 class="titulo-seccion">
        <i class="fas fa-calendar-alt"></i> Listado de Citas
    </h1>

    {{-- Botón para Registrar (Crear) Cita --}}
    <div style="margin-bottom: 25px; text-align: right;">
        <a href="{{ route('citas.create') }}" class="btn-registrar">
            <i class="fas fa-plus-circle"></i> Registrar Nueva Cita
        </a>
    </div>

    {{-- --- Form para buscar ---}}
    <hr class="separador">
    
    <h3 class="subtitulo"><i class="fas fa-search"></i> Filtrar Citas</h3>
    <form method="GET" action="{{ route('citas.index') }}" class="form-busqueda">
        <div class="input-row" style="gap: 15px;">
            <div class="input-group">
                <label>Nombre Cliente/Barbero:</label>
                <input type="text" name="nombre" value="{{ request('nombre') }}">
            </div>
            
            <div class="input-group">
                <label>Estado Cita:</label>
                <select name="estado" class="select-estado">
                    <option value="">Todos</option>
                    <option value="pendiente" {{ request('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="confirmada" {{ request('estado') == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                    <option value="completada" {{ request('estado') == 'completada' ? 'selected' : '' }}>Completada</option>
                    <option value="cancelada" {{ request('estado') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                </select>
            </div>
        </div>
        
        <div style="text-align: left;">
             <button type="submit" class="btn-guardar" style="padding: 10px 20px; background-color: #3f7972;">
                <i class="fas fa-filter"></i> Buscar/Filtrar
             </button>
        </div>
    </form>
    <hr class="separador"> --}}


    {{-- Contenedor de la Tabla --}}
    <div class="tabla-contenedor">
        <table class="tabla-estilo">
            
            <thead>
                <tr>
                    <th>ID Cita</th>
                    <th>Fecha</th>
                    <th>Hora Inicio</th>
                    <th>Servicio</th>
                    <th>Barbero</th>
                    <th>Cliente</th>
                    <th>Estado</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>
            
            <tbody>
            @forelse($citas as $cita)
                <tr>
                    <td> {{ $cita->id }} </td>
                    <td> {{ \Carbon\Carbon::parse($cita->fecha)->format('d/m/Y') }} </td>
                    <td> {{ \Carbon\Carbon::parse($cita->hora_inicio)->format('H:i') }} </td>
                    
                    {{-- Muestra el nombre del Servicio --}}
                    <td> {{ $cita->servicio->nombre }} </td>
                    
                    {{-- Muestra el nombre del Empleado (Barbero) --}}
                    <td> {{ $cita->empleado->nombre }} </td>
                    
                    {{-- Muestra el nombre del Cliente --}}
                    <td> {{ $cita->cliente->nombre }} </td>
                    
                    {{-- Estado con posible Badge (puedes añadir más estilos CSS para los estados) --}}
                    <td> 
                        <span style="font-weight: bold; color: 
                            @if($cita->estado == 'pendiente') #F8D794 
                            @elseif($cita->estado == 'confirmada') #809076 
                            @elseif($cita->estado == 'completada') #3f7972
                            @else #ff6b6b @endif;">
                            {{ strtoupper($cita->estado) }}
                        </span>
                    </td>
                                
                    {{-- ACCIONES --}}
                    <td>
                        {{-- Ver Detalle --}}
                        <a href="{{ route('citas.show', $cita->id) }}" class="accion" title="Ver Detalle">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('citas.edit', $cita->id) }}" class="accion" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        {{-- Eliminar --}}
                        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline;">    
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
                    <td colspan="10">
                        <p style="text-align: center; font-style: italic; color: #E8D4A7;">
                            <i class="fas fa-exclamation-circle"></i> No hay citas registradas que coincidan con tu búsqueda.
                        </p>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
