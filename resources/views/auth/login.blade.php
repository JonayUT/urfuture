@extends('layouts.auth')

@section('content')

    <video autoplay muted loop id="background-video">
        <source src="{{ asset('') }}" type="video/mp4">
        Tu navegador no soporta videos.
    </video>

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

    <div>
        <div class="remember">
            <input type="checkbox">
            Recordar contraseña
        </div>
        <a href="/">Inicio</a>
</form>
    </div>



@endsection