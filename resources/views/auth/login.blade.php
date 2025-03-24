@extends('layouts.auth')

@section('title', 'Inicio de Sesion')

@section('content')
<div class="login-box">

    <div class="top">   
        <span>¿No tienes una cuenta? <a href="/register" onclick="register()">Registrate</a></span>
        <header>Inicia Sesión</header>
    </div>

    <form id="loginForm" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="user-box">
            <input type="text" name="usuario" id="log_usuario" required>
            <label for="log_usuario">Usuario</label>
        </div>

        <div class="user-box">
            <input type="password" name="password" id="log_password" required>
            <label for="log_password">Contraseña</label>
        </div>

        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Recordar contraseña</label>
        </div>
        
        <button type="submit" class="btn-log" id="log_inicio">INICIO</button>
    </form>
</div>
@endsection

<!-- <div class="login-box">
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
    </div> -->

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault(); // Evitar el envío del formulario por defecto

            let usuario = $('#log_usuario').val();
            let psw = $('#log_password').val();

            if (usuario.length === 0 || psw.length === 0) {
                Swal.fire({
                    title: "Datos Vacíos",
                    text: "Al parecer no llenaste los campos",
                    icon: "question"
                });
            } else {
                $.ajax({
                    url: "{{ route('login') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        usuario: usuario,
                        password: psw
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Inicio de Sesión Exitoso",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('inicio') }}";
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Error",
                                text: "Credenciales incorrectas",
                                icon: "error"
                            });
                        }
                    }
                });
            }
        });
    });
</script>
@endsection


