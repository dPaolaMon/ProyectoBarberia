<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo', 'AstroCuts')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

    <!-- Scripts Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tus estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="fondo-app">
    <div class="min-h-screen">

        {{-- NAV SUPERIOR --}}
        @include('layouts.navigation')

        {{-- ENCABEZADO (si alguna vista lo usa) --}}
        @isset($header)
            <header class="bg-transparent shadow-none">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- CONTENIDO --}}
        <main>
            @yield('contenido')
        </main>

    </div>
</body>
</html>

