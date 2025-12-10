<x-app-layout>

    <style>
        .profile-wrapper {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.25);
            backdrop-filter: blur(12px);
            color: #F7F7F7 !important;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .profile-wrapper h2 {
            color: #F8D794 !important;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Evitar que Breeze ponga texto negro */
        .text-gray-800, 
        .text-gray-900, 
        .text-gray-600 {
            color: #F7F7F7 !important;
        }

    </style>

    <div class="profile-wrapper">

        <h2>Perfil de Usuario</h2>

        {{-- Sección: Actualizar información --}}
        @include('profile.partials.update-profile-information-form')

        <hr style="margin: 25px 0; border-color: #ffffff60;">

        {{-- Sección: Actualizar contraseña --}}
        @include('profile.partials.update-password-form')

        <hr style="margin: 25px 0; border-color: #ffffff60;">

        {{-- Sección: Eliminar cuenta --}}
        @include('profile.partials.delete-user-form')

    </div>

</x-app-layout>

