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
        
        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" id="reg_usuario" placeholder="User">
        </div>

        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" id="reg_nombre" placeholder="Firstname">
        </div>

        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" id="reg_apellido"  placeholder="Lastname">
        </div>

        <!-- Email y Password en filas separadas -->
        <div class="input-box">
            <i class="bx bx-envelope"></i>
            <input type="text" class="input-field" id="reg_correo"  placeholder="Email">
        </div>

        <div class="input-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" class="input-field" id="reg_password" placeholder="Password">
        </div>

        <!-- Botón de registro -->
        <div class="input-box" id="btn">
           <i class="bx bx-lock-alt"></i>
           <input type="submit" class="submit" id="registro" value="Register"></a>
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