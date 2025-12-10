@extends('layouts.app')

@section('titulo', 'Empleados')

@section('contenido')

<div class="glass-card">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-user-tie"></i>
        Empleados
    </h1>

    <a href="{{ route('empleados.create') }}" class="btn-registrar">
        <i class="fa-solid fa-user-plus"></i>
        Registrar empleado
    </a>

    <hr class="separador">

    {{-- Buscador --}}
    <h3 class="subtitulo">
        <i class="fa-solid fa-magnifying-glass"></i>
        Buscar Empleados
    </h3>

    <form method="GET" action="{{ route('empleados.index') }}" class="form-busqueda">

        <div class="input-row">
            <div class="input-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ request('nombre') }}">
            </div>

            <div class="input-group">
                <label>Mes de Nacimiento:</label>
                <input type="number" name="mes_nacimiento" min="1" max="12" value="{{ request('mes_nacimiento') }}">
            </div>

            <div class="input-group">
                <label>Teléfono:</label>
                <input type="text" maxlength="10" name="telefono_busqueda" value="{{ request('telefono_busqueda') }}">
            </div>
        </div>

        <button class="btn-buscar">
            <i class="fa-solid fa-search"></i>
            Buscar
        </button>

    </form>

    <hr class="separador">

    {{-- Tabla de empleados --}}
    <div class="tabla-contenedor">
        <table class="tabla-estilo">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse($empleados as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->nombre }}</td>
                        <td>{{ $e->apellido }}</td>
                        <td>{{ $e->edad }}</td>
                        <td>{{ $e->telefono }}</td>

                        <td>
                            <a href="{{ route('empleados.show', $e->id) }}" class="accion ver">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('empleados.edit', $e->id) }}" class="accion editar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('empleados.destroy', $e->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button class="accion eliminar">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="sin-resultados">
                            No hay empleados que coincidan con tu búsqueda.
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
