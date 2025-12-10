@extends('layouts.app')

@section('titulo', 'Editar empleado: ' . $empleados->nombre)

@section('contenido')

<div class="form-container">
    <h1 class="titulo-seccion">
        <i class="fa-solid fa-user-pen"></i>
        Editar Empleado
    </h1>

    {{-- VALIDACIÓN DE ERRORES --}}
    @if ($errors->any())
        <div class="alerta-errores">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.update', $empleados->id) }}" method="POST" class="astro-form">
        @csrf
        @method('PUT')

        <div class="grupo-form">
            <label><i class="fa-solid fa-user"></i> Nombre:</label>
            <input type="text" name="nombre" value="{{ $empleados->nombre }}" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-user-tag"></i> Apellidos:</label>
            <input type="text" name="apellido" value="{{ $empleados->apellido }}" required>
        </div>
