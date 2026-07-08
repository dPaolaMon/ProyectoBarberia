<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Editar Cliente')</title>
    {{-- Asegúrate de enlazar el CSS específico para este formulario --}}
    @vite('resources/css/clientes/create.css') 
</head>
<body>
    
    <header>
        {{-- Aquí iría la inclusión de su header si fuera necesario --}}
    </header>
    
    <main class="main-content">
        
        {{-- ESTRUCTURA DEL DISEÑO DE BARBERÍA (CARD) --}}
        
        <div class="fondo-borroso">
            <div class="contenido-principal">
                
                {{-- CARD-FORM: Contenedor principal del formulario --}}
                <div class="card-form">

                    <h1 class="card-title">Editar Cliente: {{ $cliente->nombre }}</h1>

                    {{-- Bloque de Errores de Validación (se debe incluir en todos los formularios) --}}
                    @if ($errors->any())
                        <div class="errores-validacion">
                            <h3>⚠️ Errores de Validación:</h3>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
                        @csrf
                        @method('PUT')
                        
                        {{-- DIV 1: Nombre y Apellidos (Usando .perfil-derecha/input-group para 50/50) --}}
                        <div class="perfil-derecha">
                            
                            <div class="input-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" required>
                            </div>
                            
                            <div class="input-group">
                                <label for="apellido">Apellidos:</label>
                                <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $cliente->apellido) }}" required>
                            </div>
                            
                        </div>

                        {{-- DIV 2: Fecha y Teléfono (Usando .input-row para la distribución horizontal) --}}
                        {{-- NOTA: Se eliminan los estilos en línea "style=..." para que el CSS externo aplique la distribución --}}
                        <div class="input-row">
                            
                            <div class="input-group">
                                <label for="fecha_nac">Fecha de Nacimiento:</label>
                                {{-- Los límites de edad deben ser dinámicos y se deben añadir aquí para UX --}}
                                <input type="date" 
                                       id="fecha_nac" 
                                       name="fecha_nac" 
                                       value="{{ old('fecha_nac', $cliente->fecha_nac) }}" 
                                       required 
                                       max="{{ now()->subYears(15)->toDateString() }}" 
                                       min="{{ now()->subYears(100)->toDateString() }}">
                            </div>

                            <div class="input-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" required maxlength="10">
                            </div>
                            
                            {{-- Si el correo no se usa aquí, se debe comentar el espacio en el CSS también --}}
                            
                        </div>
                        
                        {{-- DIV 3: Acciones/Botones (Usando .input-row-final) --}}
                        <div class="input-row-final">
                            <button type="submit" class="guardar-btn">Actualizar</button>
                            <a href="{{ route('clientes.index') }}">Regresar</a>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        
    </main>
    
    <footer>
        {{-- Aquí iría la inclusión de su footer --}}
    </footer>
    
</body>
</html>
