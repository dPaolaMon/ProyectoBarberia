@extends('layouts.app')

@section('titulo', 'Editar Cliente')

@section('contenido')

<div class="glass-card">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-user-pen"></i>
        Editar Cliente: {{ $clientes->nombre }}
    </h1>

    <form method="POST" action="{{ route('clientes.update', $clientes->id) }}" class="formulario">
        @csrf
        @method('PUT')

        <div class="input-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $clientes->nombre }}" required>
        </div>

        <div class="input-group">
            <label>Apellidos:</label>
            <input type="text" name="apellido" value="{{ $clientes->apellido }}" required>
        </div>

        <div class="input-row">
            <div class="input-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nac" value="{{ $clientes->fecha_nac }}" min="1940-01-01" max="2010-12-07" required>
            </div>

            <div class="input-group">
                <label>Teléfono:</label>
                <input type="text" name="telefono" maxlength="10" value="{{ $clientes->telefono }}" required>
            </div>
        </div>

        <div class="acciones-detalle">
            <button type="submit" class="btn-guardar">
                <i class="fa-solid fa-floppy-disk"></i>
                Actualizar
            </button>

            <a href="{{ route('clientes.index') }}" class="btn-regresar">
                <i class="fa-solid fa-arrow-left"></i>
                Regresar
            </a>
        </div>

    </form>
</div>

@endsection
