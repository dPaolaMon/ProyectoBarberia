<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Clientes')</title>
    {{-- Inclusión del CSS general y de la tabla/formulario --}}
    @vite(['resources/css/app.css']) 
</head>
<body>
    
    <header>@include('includes.header')</header>
    
    <main class="main-content">
        
        {{-- Aquí se integra el contenido de la sección para aplicar los estilos de card --}}
        
        <div class="contenido-principal">

            {{-- El card-form actúa como el contenedor principal del listado y la búsqueda --}}
            <div class="card-form"> 

                <h1 class="card-title">Clientes</h1>

                {{-- BOTÓN DE REGISTRO --}}
                <div class="acciones-header">
                    <a href="{{ route('clientes.create') }}" class="btn-primary">Registrar cliente</a>
                </div>

                {{-- FORMULARIO DE BÚSQUEDA --}}
                <h3>Buscar</h3>

                <form method="GET" action="{{ route('clientes.index') }}" class="formulario-busqueda">

                    {{-- Nombre --}}
                    <div class="input-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" value="{{ request('nombre') }}">
                    </div>

                    {{-- Mínimo de visitas --}}
                    <div class="input-group">
                        <label>Mínimo de visitas:</label>
                        <input type="number" name="minimo_visitas" value="{{ request('minimo_visitas') }}" min="0" step="1">
                    </div>

                    {{-- Teléfono --}}
                    <div class="input-group">
                        <label>Teléfono:</label>
                        <input type="text" name="telefono_busqueda" value="{{ request('telefono_busqueda') }}" maxlength="10">
                    </div>

                    <div class="acciones-busqueda">
                        <button class="btn-primary" type="submit">Buscar</button>
                    </div>
                </form>

                <hr class="separator">

                {{-- TABLA DE CLIENTES --}}
                <div class="tabla-contenedor">
                    <table>

                        <thead>
                            <tr class="header-tabla">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Visitas</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($clientes as $c)
                            <tr class="fila-tabla">
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->nombre }}</td>
                                <td>{{ $c->apellido }}</td>
                                <td>{{ $c->total_visitas }}</td>

                                <td class="accion-columna">
                                    <a class="btn-link" href="{{ route('clientes.show', $c->id) }}">Ver detalle</a>
                                </td>

                                <td class="accion-columna">
                                    <a class="btn-link" href="{{ route('clientes.edit', $c->id) }}">Editar</a>
                                </td>

                                <td class="accion-columna">
                                    <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este cliente?')" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-eliminar" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="mensaje-vacio">
                                    No hay clientes que coincidan con tu búsqueda.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        
    </main>
    
    <footer class="main-footer">
        <div class="footer-section contact-info">
            <h3>Contacto</h3>
            <p>Dirección: Calle 123, Municipio, Estado</p>
            <p>Teléfono: (00) 1234 5678</p>
            <p>Email: contacto@astrocuts.com</p>
        </div>

        <div class="footer-section legal-copy">
            <p class="copyright">
                &copy; {{ date('Y') }} AstroCuts. Todos los derechos reservados.
            </p>
        </div>
    </footer>
    
</body>
</html>
