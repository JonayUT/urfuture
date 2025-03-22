@extends('layouts.auth')

@section('title', 'Inicio de Sesion')

@section('content')

    <div class="login-box">
        <form action="submit">
            <div class="user-box">
                <input type="text" name="usuario" id="usuario" required>
                <label for="">Usuario</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label for="">Contraseña</label>
            </div>

            <div class="remember">
                <input type="checkbox">
                Recordar contraseña
            </div>
            
            <input class="btn-log" type="button" id="iniciar" placeholder="INICIO">
            
        </form>
    </div>

@endsection