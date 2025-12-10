@extends('layouts.app')

@section('titulo', 'Empleado: ' . $empleados->nombre)

@section('contenido')

<div class="glass-card">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-id-card-clip"></i>
        Datos del Empleado: {{ $empleados->nombre }}
    </h1>

    {{-- DATOS GENERALES --}}
    <h3 class="subtitulo">
        <i class="fa-solid fa-user"></i>
        Datos Generales
    </h3>

    <div class="detalle-cliente">
        
        <div class="campo-detalle">
            <label>ID:</label>
            <input value="{{ $empleados->id }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Nombre:</label>
            <input value="{{ $empleados->nombre }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Apellidos:</label>
            <input value="{{ $empleados->apellido }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Edad:</label>
            <input value="{{ $empleados->edad }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Fecha de Nacimiento:</label>
            <input value="{{ $empleados->fecha_nac }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Teléfono:</label>
            <input value="{{ $empleados->telefono }}" readonly>
        </div>
    </div>

    <hr class="separador">

    {{-- DIRECCIÓN --}}
    <h3 class="subtitulo">
        <i class="fa-solid fa-location-dot"></i>
        Dirección
    </h3>

    <div class="detalle-cliente">

        <div class="campo-detalle">
            <label>Calle:</label>
            <input value="{{ $empleados->calle }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Mz:</label>
            <input value="{{ $empleados->mz }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Lt:</label>
            <input value="{{ $empleados->lt }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Municipio:</label>
            <input value="{{ $empleados->municipio }}" readonly>
        </div>

        <div class="campo-detalle">
            <label>Estado:</label>
            <i
