@extends('layouts.app')

@section('titulo', 'Detalles de ' . $clientes->nombre)

@section('contenido')

<div class="glass-card">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-id-card"></i>
        Detalles del cliente
    </h1>

    <div class="detalle-cliente">

        <div class="campo-detalle">
            <label>ID:</label>
            <input type="text" value="{{ $clientes->id }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Nombre:</label>
            <input type="text" value="{{ $clientes->nombre }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Apellidos:</label>
            <input type="text" value="{{ $clientes->apellido }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Teléfono:</label>
            <input type="text" value="{{ $clientes->telefono }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Fecha de nacimiento:</label>
            <input type="date" value="{{ $clientes->fecha_nac }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Total de visitas:</label>
            <input type="number" value="{{ $clientes->total_visitas }}" readonly>
        </div>

    </div>

    <div class="acciones-detalle">
        <a href="{{ route('clientes.index') }}" class="btn-regresar">
            <i class="fa-solid fa-arrow-left"></i>
            Regresar
        </a>

        <a href="{{ route('clientes.edit', $clientes->id) }}" class="btn-guardar">
            <i class="fa-solid fa-pen-to-square"></i>
            Editar
        </a>
    </div>

</div>

@endsection
