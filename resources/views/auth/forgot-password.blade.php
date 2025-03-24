@extends('layouts.auth')

@section('title', 'Recuperar Contraseña')

@section('content')
<div class="login-box">
    <div class="top">
        <span>¿Recuerdas tu contraseña? <a href="{{ route('login') }}">Inicia Sesión</a></span>
        <header>Recuperar Contraseña</header>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="user-box">
            <input type="email" name="email" id="email" required>
            <label for="email">Correo Electrónico</label>
        </div>

        <button type="submit" class="btn-log">Enviar enlace de recuperación</button>
    </form>
</div>
@endsection
