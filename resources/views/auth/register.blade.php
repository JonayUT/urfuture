@extends('layouts.auth')

@section('content')
    <div class="register-container" id="register">
        <div class="top">
            <span>¿Ya tienes una cuenta? <a href="/login" onclick="login()">Iniciar Sesión</a></span>
            <header>Regístrate</header>
        </div>

        <!-- Agrupamos Firstname y Lastname en una fila -->
        
        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" placeholder="User">
        </div>

        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" placeholder="Firstname">
        </div>

        <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" class="input-field" placeholder="Lastname">
        </div>
        


        <!-- Email y Password en filas separadas -->
        <div class="input-box">
            <i class="bx bx-envelope"></i>
            <input type="text" class="input-field" placeholder="Email">
        </div>

        <div class="input-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" class="input-field" placeholder="Password">
        </div>

        <!-- Botón de registro -->
        <div class="input-box" id="btn">
           <a href="/"> 
           <i class="bx bx-lock-alt"></i>
            <input type="submit" class="submit" value="Register"></a>
        </div>

        <!-- Opciones: Recordarme y Términos -->
        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="register-check">
                <label for="register-check">Recordarme</label>
            </div>
            <div class="two">
                <label><a href="#">Términos y condiciones.</a></label>
            </div>
        </div>
    </div>
@endsection