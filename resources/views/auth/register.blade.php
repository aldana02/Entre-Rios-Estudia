@extends('layouts.app')

@section('content')
<div class="login-page-bg">
    <div class="login-wrapper">
        <!-- LADO IZQUIERDO: Banner con logo y bandera -->
        <div class="login-banner">
            <img src="{{ asset('images/logoER.png') }}" alt="Logo Entre Ríos" class="login-logo">
            <h1 class="login-title">Entre <br>Ríos <br>Estudia</h1>
            <p class="login-desc">
                Unite a la comunidad educativa de Entre Ríos.<br>
                Descubrí y compartí oportunidades de aprendizaje en toda la provincia.
            </p>
        </div>
        <!-- FORMULARIO REGISTER -->
        <div class="login-form-box">
            <h2 class="titulo-formulario">Registrarse</h2>
            <p class="subtitulo-formulario mb-6">Crea tu cuenta para acceder a todas las funciones.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="name" class="label-auth">Nombre completo</label>
                    <input id="name" type="text" name="name" required autofocus class="input-auth" value="{{ old('name') }}">
                    <x-input-error :messages="$errors->get('name')" class="mensaje-error" />
                </div>

                <div>
                    <label for="email" class="label-auth">Correo Electrónico</label>
                    <input id="email" type="email" name="email" required class="input-auth" value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mensaje-error" />
                </div>

                <div>
                    <label for="password" class="label-auth">Contraseña</label>
                    <input id="password" type="password" name="password" required class="input-auth">
                    <x-input-error :messages="$errors->get('password')" class="mensaje-error" />
                </div>

                <div>
                    <label for="password_confirmation" class="label-auth">Confirmar contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required class="input-auth">
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-[#032348] hover:underline">¿Ya tenés una cuenta?</a>
                    <button type="submit" class="btn-auth">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
