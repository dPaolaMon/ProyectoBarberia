@extends('layouts.app')

@section('titulo', 'Nuevo Cliente')

@section('contenido')

<div class="glass-card">

    <h1>Nuevo Cliente</h1>

    <form method="POST" action="{{ route('clientes.store') }}" class="formulario">
        @csrf

        @if($errors->any())
            <div style="margin-bottom: 15px; background:#3f7972; padding:12px; border-radius:10px; color:#F8D794;">
                <h3>⚠️ Errores de Validación</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <div class="input-group">
            <label>Apellidos:</label>
            <input type="text" name="apellido" value="{{ old('apellido') }}" required>
        </div>

                {{-- Fila 1 --}}
        <div class="input-row">
            <div class="input-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nac" required>
            </div>

            <div class="input-group">
                <label>Teléfono:</label>
                <input type="text" name="telefono" maxlength="10" required>
            </div>
        </div>

        {{-- Fila 2 (correo ocupa todo el ancho) --}}
        <div class="input-group email-group">
            <label>Correo:</label>

            <div class="input-with-icon">
                <i class="fa-solid fa-envelope email-icon"></i>
                <input type="email" name="correo" placeholder="correo@ejemplo.com">
            </div>

        </div>



        <div class="acciones">
            <button type="submit" class="btn-guardar">Guardar</button>
            <a href="{{ route('clientes.index') }}" class="btn-regresar">Regresar</a>
        </div>

    </form>

</div>

@endsection
