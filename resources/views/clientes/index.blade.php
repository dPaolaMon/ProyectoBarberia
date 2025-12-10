@extends('layouts.app')

@section('titulo', 'Clientes')

@section('contenido')

<div class="glass-card">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-user-group"></i> Clientes
    </h1>

    <a href="{{ route('clientes.create') }}" class="btn-registrar">
        <i class="fa-solid fa-user-plus"></i> Registrar cliente
    </a>

    <hr class="separador">

    {{-- Buscador --}}
    <h3 class="subtitulo">
        <i class="fa-solid fa-magnifying-glass"></i> Buscar Clientes
    </h3>

    <form method="GET" action="{{ route('clientes.index') }}" class="form-busqueda">

        <div class="input-row">
            <div class="input-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ request('nombre') }}">
            </div>

            <div class="input-group">
                <label>Mínimo de visitas:</label>
                <input type="number" name="minimo_visitas" min="0" value="{{ request('minimo_visitas') }}">
            </div>

            <div class="input-group">
                <label>Teléfono:</label>
                <input type="text" name="telefono_busqueda" maxlength="10" value="{{ request('telefono_busqueda') }}">
            </div>
        </div>

        <button class="btn-buscar">
            <i class="fa-solid fa-search"></i> Buscar
        </button>
    </form>

    <hr class="separador">

    {{-- Tabla de clientes --}}
    <div class="tabla-contenedor">
        <table class="tabla-estilo">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Visitas</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse($clientes as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nombre }}</td>
                        <td>{{ $c->apellido }}</td>
                        <td>{{ $c->total_visitas }}</td>

                        <td>
                            <a href="{{ route('clientes.show', $c->id) }}" class="accion ver">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('clientes.edit', $c->id) }}" class="accion editar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" style="display:inline">
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
                            No hay clientes que coincidan con tu búsqueda.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
