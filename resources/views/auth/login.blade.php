<x-guest-layout>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;

        /* FONDO SOLIDO CON !important */
        background: linear-gradient(135deg, #2F5A55, #3f7972) !important;

        background-size: cover !important;
        background-position: center !important;
    }

    .login-card {
        width: 420px;
        margin: 70px auto;
        background: rgba(255, 255, 255, 0.12);
        padding: 35px;
        border-radius: 18px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.30);
        color: #F7F7F7;
    }

    .login-title {
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #F8D794;
    }

    label {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #EADBC8;
        display: block;
    }

    .input-icon {
        position: relative;
        margin-bottom: 18px;
    }

    .input-icon i {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        color: #F7F7F7;
        font-size: 16px;
    }

    .input-icon input {
        width: 100%;
        padding: 12px 14px 12px 40px;
        background: rgba(255, 255, 255, 0.20);
        border: none;
        border-radius: 10px;
        color: white;
        outline: none;
    }

    .btn-login {
        width: 100%;
        padding: 12px;
        background: #3f7972;
        color: #F8D794;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.25s;
    }

    .btn-login:hover {
        background: #34645e;
        transform: translateY(-2px);
    }
</style>

<div class="login-card">

    <h2 class="login-title">Iniciar Sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Correo Electrónico</label>
        <div class="input-icon">
            <i class="fa-solid fa-envelope"></i>
            <input id="email" type="email" name="email" :value="old('email')" required>
        </div>

        <label for="password">Contraseña</label>
        <div class="input-icon">
            <i class="fa-solid fa-lock"></i>
            <input id="password" type="password" name="password" required>
        </div>

        <label><input type="checkbox" name="remember"> Recuérdame</label>

        <button class="btn-login">Iniciar Sesión</button>

        @if (Route::has('password.request'))
            <a class="forgot-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        @endif
    </form>

</div>

</x-guest-layout>
