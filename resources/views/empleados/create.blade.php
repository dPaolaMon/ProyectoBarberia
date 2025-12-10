@extends('layouts.app')

@section('titulo', 'Nuevo empleado')

@section('contenido')

<div class="form-container">

    <h1 class="titulo-seccion">
        <i class="fa-solid fa-user-plus"></i>
        Nuevo Empleado
    </h1>

    {{-- ERRORES --}}
    @if($errors->any())
        <div class="alerta-errores">
            <ul>
                @foreach($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('empleados.store') }}" class="astro-form">
        @csrf

        <div class="grupo-form">
            <label><i class="fa-solid fa-user"></i> Nombre:</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-user-tag"></i> Apellidos:</label>
            <input type="text" name="apellido" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-hourglass-half"></i> Edad:</label>
            <input type="number" name="edad" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-cake-candles"></i> Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nac" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-phone"></i> Teléfono:</label>
            <input type="number" name="telefono" required>
        </div>

        <hr class="separador">

        <h3 class="subtitulo">
            <i class="fa-solid fa-location-dot"></i> Dirección
        </h3>

        <div class="grupo-form">
            <label><i class="fa-solid fa-road"></i> Calle:</label>
            <input type="text" name="calle" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-square"></i> Mz:</label>
            <input type="number" name="mz" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-square-full"></i> Lt:</label>
            <input type="number" name="lt" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-city"></i> Municipio:</label>
            <input type="text" name="municipio" required>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-flag"></i> Estado:</label>
            <select name="estado" required>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Puebla">Puebla</option>
            </select>
        </div>

        <div class="grupo-form">
            <label><i class="fa-solid fa-envelope"></i> Código Postal:</label>
            <input type="number" name="cp" required>
        </div>

        <div class="acciones-form">
            <a href="{{ route('empleados.index') }}" class="btn-regresar">
                <i class="fa-solid fa-arrow-left"></i>
                Regresar
            </a>

            <button class="btn-guardar" type="submit">
                <i class="fa-solid fa-floppy-disk"></i>
                Guardar
            </button>
        </div>

    </form>

</div>

@endsection
