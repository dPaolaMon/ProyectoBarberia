<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
    {{-- Usar @vite para el CSS que contiene los estilos del formulario --}}
    @vite('resources/css/clientes/create.css') 
</head>
<body>
    
    {{-- EL CUERPO DEBE ESTAR CENTRADO POR EL CSS GLOBAL --}}
    
    <header></header>
    
    <main class="main-content">
        
        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf
            
            <h1>Nuevo Cliente</h1>
            
            @if($errors->any())
                <div style="color:red; background-color: #3f7972; padding: 10px; border-radius: 8px;">
                    <h3>⚠️ Errores de Validación:</h3>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="perfil-derecha">
                
                <div class="input-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>
                
                <div class="input-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
                </div>
                
            </div>
            
            <div class="input-row">
                
                <div>
                    <label for="fecha_nac">Fecha de Nacimiento:</label>
                    <input type="date" max="2010-12-07" min="1940-01-01" id="fecha_nac" name="fecha_nac" value="{{ old('fecha_nac') }}" required>
                </div>
                
                <div>
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required maxlength="10">
                </div>
                {{-- SE ELIMINA PARA QUE SE ALMACENE EN LA TABLA USERS
                <div>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
                </div> --}}
                
            </div>
            
            <div class="input-row-final">
                <button type="submit" class="guardar-btn">Guardar</button>
                <a href="{{ route('clientes.index') }}">Regresar</a>
            </div>

        </form>
    </main>

    <footer></footer>
</body>
</html>
