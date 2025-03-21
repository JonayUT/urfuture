@extends('layouts.auth')

@section('title', 'Inicio de Sesion')

@section('content')

    <div class="login-box">
        <form action="submit">
            <div class="user-box">
                <input type="text" required>
                <label for="">Usuario</label>
            </div>

            <div class="user-box">
                <input type="password" required>
                <label for="">Contraseña</label>
            </div>

            <div class="remember">
                <input type="checkbox">
                Recordar contraseña
            </div>
            
            <a href="/">Inicio</a>
        </form>
    </div>

@endsection