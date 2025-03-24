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


        <!-- Agrupamos Firstname y Lastname en una fila -->
        
        <div class="user-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" name="username" id="username" placeholder="Usuario" required>
        </div>

        <div class="user-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" name="name"  id="name" placeholder="Nombre" required>
        </div>

        <div class="user-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" name="lastname" id="lastname"  placeholder="Apellido" required>
        </div>

        <!-- Email y Password en filas separadas -->
        <div class="user-box">
            <i class="bx bx-envelope"></i>
            <input type="text" class="input-field" name="email" id="email"  placeholder="Correo" required>
        </div>

        <div class="user-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" class="input-field" name="password" id="password" placeholder="Contraseña" required>
        </div>

        <div class="user-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" class="input-field" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" required>
        </div>

        <!-- Botón de registro -->
        <div class="user-box">
           <input type="submit" class="btn-register" id="registro" value="Registro"></a>
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