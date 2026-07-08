<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'AstroCuts')</title>
    {{-- Asegúrate de que este @vite también compile el CSS global si tienes un fondo borroso global --}}
    @vite(['resources/css/app.css', 'resources/css/clientes/create.css']) 
</head>
<body>
    
    <header></header>
    
    <main class="main-content">
        
        <div class="fondo-borroso">
            <div class="contenido-principal">
                <div class="card-form">

                    <h1 class="card-title">Nuevo Cliente</h1>
                    
                    {{-- Bloque de Errores de Validación --}}
                    @if($errors->any())
                        {{-- Eliminar estilos en línea (inline) y confiar en el CSS externo --}}
                        <div class="errores-validacion">
                            <h3>⚠️ Errores de Validación:</h3>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf

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
                            
                            <div class="input-group">
                                <label for="fecha_nac">Fecha de Nacimiento:</label>
                                <input type="date"
										max="{{ now()->subYears(8)->toDateString() }}" 
                                       min="{{ now()->subYears(100)->toDateString() }}"
                                       id="fecha_nac" 
                                       name="fecha_nac" 
                                       value="{{ old('fecha_nac') }}" 
                                       required> 
                            </div>

                            <div class="input-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required maxlength="10">
                            </div>
                            
                        </div>

                        <div class="input-row-final">
                            <button type="submit" class="guardar-btn">Guardar</button>
                            <a href="{{ route('clientes.index') }}">Regresar</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        
    </main>

    <footer></footer>
</body>
</html>
