<section class="perfil-section">

    <header>
        <h2>{{ __('Información del Perfil') }}</h2>

        <p class="descripcion">
            {{ __("Actualiza tu información personal y tu correo electrónico.") }}
        </p>
    </header>

    <style>
    /* ======== ESTILO GENERAL ======== */
    .perfil-section {
        background: rgba(255, 255, 255, 0.12);
        padding: 30px;
        margin: 40px auto;
        width: 600px;
        border-radius: 18px;
        backdrop-filter: blur(12px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.30);
        color: #F7F7F7;
        font-family: 'Poppins', sans-serif;
    }

    /* ======== TÍTULO ======== */
    .perfil-section h2 {
        font-size: 26px;
        font-weight: 700;
        color: #E8D4A7; /* Khaki */
        margin-bottom: 10px;
    }

    /* ======== DESCRIPCIÓN ======== */
    .perfil-section .descripcion {
        color: #d9cba4;
        font-size: 14px;
        margin-bottom: 25px;
    }

    /* ======== LABELS ======== */
    .perfil-section label {
        color: #F8D794;
        font-weight: 600;
        font-size: 14px;
    }

    /* ======== INPUTS ======== */
    .perfil-section input[type="text"],
    .perfil-section input[type="email"],
    .perfil-section input[type="password"] {
        background: rgba(0,0,0,0.25);
        color: #fff;
        border: 1px solid rgba(255,255,255,0.25);
        border-radius: 10px;
        padding: 10px;
        width: 100%;
        margin-top: 6px;
        margin-bottom: 15px;
    }

    .perfil-section input:focus {
        outline: none;
        border-color: #E8D4A7;
        box-shadow: 0 0 6px #E8D4A7;
    }

    /* ======== BOTÓN ======== */
    .perfil-section button {
        background: #8B4F2E; /* madera */
        padding: 10px 20px;
        border-radius: 12px;
        border: none;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .perfil-section button:hover {
        background: #B85A33;
        transform: scale(1.05);
    }
    </style>

    {{-- FORMULARIO DE VERIFICACIÓN --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    {{-- FORMULARIO PRINCIPAL --}}
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text"
                :value="old('name', $user->name)" required autofocus />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" name="email" type="email"
                :value="old('email', $user->email)" required />
            <x-input-error :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <p class="text-sm mt-2 text-red-300">
                    {{ __('Tu correo aún no está verificado.') }}

                    <button form="send-verification" class="underline text-sm">
                        {{ __('Reenviar correo de verificación') }}
                    </button>
                </p>
            @endif
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">{{ __('Guardar Cambios') }}</button>

            @if (session('status') === 'profile-updated')
                <span class="ml-3 text-green-300">{{ __('Guardado.') }}</span>
            @endif
        </div>
    </form>

</section>
