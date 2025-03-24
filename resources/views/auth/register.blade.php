@extends('layouts.auth')

@section('title', 'Registro')

@section('content')
<div class="register-container">
    <form id="registerForm" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="top">
            <span>¿Ya tienes una cuenta? <a href="/login" onclick="login()">Iniciar Sesión</a></span>
            <header>Regístrate</header>
        </div>

        <div class="user-box">
            <input type="text" name="username" id="username" placeholder="Nombre de Usuario" required>
        </div>
        <div class="user-box">
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>
        <div class="user-box">
            <input type="text" name="lastname" id="lastname" placeholder="Apellido" required>
        </div>
        <div class="user-box">
            <input type="email" name="email" id="email" placeholder="Correo Electronico" required>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
        </div>
        <div class="user-box">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Contraseña" required>
        </div>
        <div class="user-box">
            <button type="submit" class="btn-register">Registrarse</button>
        </div>

        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="register-check">
                <label for="register-check">Recordarme</label>
            </div>
            <div class="two">
                <label><a href="#">Términos y condiciones.</a></label>
            </div>
        </div>

    </form>
</div>
@endsection

@section('scripts')     

<script src="{{ asset('js/validation_alerts.js') }}"></script>   

@endsection