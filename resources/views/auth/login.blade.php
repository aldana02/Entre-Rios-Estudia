@extends('layouts.app')

@section('content')
<div class="login-page-bg">
    <div class="login-wrapper">
        <!-- LADO IZQUIERDO -->
        <div class="login-banner">
            <img src="{{ asset('images/logoER.png') }}" alt="Logo Entre Ríos" class="login-logo">
            <h1 class="login-title">Entre <br>Ríos <br>Estudia</h1>
            <p class="login-desc">
                Tu portal de acceso a la educación de calidad.<br>
                Conectá con miles de recursos educativos y mantenete actualizado.
            </p>
        </div>
        <!-- FORMULARIO -->
        <div class="login-form-box">
            <h2 class="titulo-formulario">Iniciar Sesión</h2>
            <p class="subtitulo-formulario mb-6">Ingresa a tu cuenta para continuar</p>

            <!-- Mensajes -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="label-auth">Correo Electrónico</label>
                    <input id="email" type="email" name="email" required autofocus class="input-auth" value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mensaje-error" />
                </div>

                <div class="mt-4">
                    <label for="password" class="label-auth">Contraseña</label>
                    <input id="password" type="password" name="password" required class="input-auth">
                    <x-input-error :messages="$errors->get('password')" class="mensaje-error" />
                </div>

                <div class="mt-4 flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                    <label for="remember_me" class="text-sm text-gray-600">Recordarme</label>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-[#032348] hover:underline">¿Olvidaste tu contraseña?</a>
                    @endif
                    <button type="submit" class="btn-auth">Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
