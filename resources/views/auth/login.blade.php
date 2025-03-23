@extends('layouts.auth')

@section('title', 'Inicio de Sesion')

@section('content')


    <div class="login-box">
        <form action="submit" id="loginForm">
            <div class="user-box">
                <input type="text" name="usuario" id="log_usuario" required>
                <label for="">Usuario</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" id="log_password" required>
                <label for="">Contraseña</label>
            </div>

            <div class="remember">
                <input type="checkbox">
                Recordar contraseña
            </div>
            
            <button class="btn-log" type="button" id="log_inicio" >
                INICIO
            </button>
            
        </form>
    </div>

@endsection

@section('scripts')     

<script src="{{ asset('js/validation_alerts.js') }}"></script>   

@endsection