@extends('layouts.app')

@section('content')
    <div class="register-container">
        <h2>Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Contraseña</label>
            <input type="password" name="password" required>

            <label>Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
    </div>
@endsection
