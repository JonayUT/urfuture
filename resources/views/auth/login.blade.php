@extends('layouts.app')

@section('content')
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required>
            
            <label>Contraseña</label>
            <input type="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
    </div>
@endsection
