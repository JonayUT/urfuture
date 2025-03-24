@extends('layouts.auth')

@section('title', 'Restablecer Contraseña')

@section('content')
<div class="login-box">
    <div class="top">
        <span>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></span>
        <header>Restablecer Contraseña</header>
    </div>

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="user-box">
            <input type="email" name="email" value="{{ old('email') }}" required>
            <label for="email">Correo Electrónico</label>
        </div>

        <div class="user-box">
            <input type="password" name="password" required>
            <label for="password">Nueva Contraseña</label>
        </div>

        <div class="user-box">
            <input type="password" name="password_confirmation" required>
            <label for="password_confirmation">Confirmar Contraseña</label>
        </div>

        @error('email')
        <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn-log">Restablecer Contraseña</button>
    </form>
</div>
@endsection
