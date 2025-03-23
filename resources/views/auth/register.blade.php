@extends('layouts.auth')

@section('title', 'Registro')

@section('content')
<div class="register-box">
    <form id="registerForm" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="user-box">
            <input type="text" name="username" id="username" required>
            <label for="username">Nombre de usuario</label>
        </div>
        <div class="user-box">
            <input type="text" name="name" id="name" required>
            <label for="name">Nombre</label>
        </div>
        <div class="user-box">
            <input type="text" name="lastname" id="lastname" required>
            <label for="lastname">Apellido</label>
        </div>
        <div class="user-box">
            <input type="email" name="email" id="email" required>
            <label for="email">Correo electrónico</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required>
            <label for="password">Contraseña</label>
        </div>
        <div class="user-box">
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            <label for="password_confirmation">Confirmar contraseña</label>
        </div>
        <button type="submit" class="btn-register">Registrarse</button>
    </form>
</div>
@endsection

@section('scripts')     

<script src="{{ asset('js/validation_alerts.js') }}"></script>   

@endsection