<header class="header">
    <!-- Botón de menú hamburguesa -->
    <div class="menu-toggle" id="menu-toggle">☰</div>

    <!-- Logo -->
    <a href="{{ route('inicio') }}" class="logo">UrFuture</a>

   


    <!-- Modo Oscuro -->
    <button id="dark-mode-toggle" class="dark-mode-btn">🌙</button>

    <nav class="navbar">
        <div class="dropdown">
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <ul class="navert">
                <li><a href="{{ route('vision') }}">Visión</a></li>
                <li><a href="{{ route('mision') }}">Misión</a></li>
                <li><a href="{{ route('valores') }}">Valores</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <a href="{{ route('productos') }}">Productos</a>
            
        </div>

        <a href="{{ route('testimonios') }}">Testimonios</a>
        <a href="{{ route('contacto') }}">Contacto</a>

        <!-- Botón de perfil -->
        <div class="dropdown">
            <a href="#">
                <img src="{{ asset('images/default-profile.png') }}" alt="Perfil" class="profile-icon">
            </a>
            <ul class="navert">
                @auth
                <li><a href="{{ route('perfil') }}">Mi Perfil</a></li>
                @if(Auth::user()->hasRole('admin'))
                <li><a href="{{ route('users.roles') }}">Usuarios/Roles</a></li>
                @endif
                <li>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Cerrar Sesión</a>
                </li>
                @else
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>

<!-- Menú lateral hamburguesa -->
<div class="sidebar" id="sidebar">
    <a href="{{ route('nosotros') }}">Nosotros</a>
    <a href="{{ route('productos') }}">Productos</a>
    <a href="{{ route('testimonios') }}">Testimonios</a>
    <a href="{{ route('contacto') }}">Contacto</a>
    @auth
    <a href="{{ route('perfil') }}">Mi Perfil</a>
    @if(Auth::user()->hasRole('admin'))
    <a href="{{ route('users.roles') }}">Usuarios/Roles</a>
    @endif
    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Cerrar Sesión</a>
    @else
    <a href="{{ route('login') }}">Iniciar Sesión</a>
    <a href="{{ route('register') }}">Registrarse</a>
    @endauth
</div>

<!-- Fondo difuminado -->
<div class="overlay" id="overlay"></div>

<!-- Script para Menú Lateral y Modo Oscuro -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");
        const darkModeToggle = document.getElementById("dark-mode-toggle");
        const body = document.body;

        // Mostrar y ocultar menú lateral
        menuToggle.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

        overlay.addEventListener("click", function () {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        });

        // Cargar preferencia de Modo Oscuro
        if (localStorage.getItem("darkMode") === "true") {
            body.classList.add("dark-mode");
            darkModeToggle.textContent = "☀️";
        }

        // Activar/desactivar modo oscuro
        darkModeToggle.addEventListener("click", function () {
            body.classList.toggle("dark-mode");
            const isDarkMode = body.classList.contains("dark-mode");
            localStorage.setItem("darkMode", isDarkMode);
            darkModeToggle.textContent = isDarkMode ? "☀️" : "🌙";
        });
    });
</script>
