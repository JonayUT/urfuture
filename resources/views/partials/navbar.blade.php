<header class="header">
    <!-- Botón de menú hamburguesa -->
    <div class="menu-toggle" id="menu-toggle">☰</div>

    <!-- Logo -->
    <a href="{{ route('inicio') }}" class="logo">UrFuture</a>

    <!-- Menú de navegación principal -->

    <div class="search-box">
        <i class="fas fa-search search-icon"></i>
        <input type="text" class="form-control" id="searchInput" placeholder="Buscar..." aria-label="Buscar">
    </div>

    <nav class="navbar">


        <div class="dropdown">
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <ul class="navert">
                <li><a href="{{ route('vision') }}">Visión</a></li>
                <li><a href="{{ route('mision') }}">Misión</a></li>
                <li><a href="{{ route('valores') }}">Valores</a></li>
        </div>
        <div class="dropdown">
            <a href="{{ route('productos') }}">Productos</a>
            <ul class="navert">
                <li class="submenu">
                    <a href="{{ route('libros') }}">Libros</a>
                    <ul class="subnav">
                        <li><a href="{{ route('hechiceras') }}">Jovenes Hechiceras</a></li>
                        <li><a href="{{ route('tarot') }}">Tarot Guia Personal</a></li>
                        <li><a href="{{ route('eye') }}">The Eye in Ur Hand</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('aromaticos') }}">Aromaticos</a>
                    <ul class="subnav">
                        <li><a href="{{ route('velas') }}">Velas Pacificadoras</a></li>
                        <li><a href="{{ route('perlas') }}">Perlas Aromaticas</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('otros') }}">Otros</a>
                    <ul class="subnav">
                        <li><a href="{{ route('agua') }}">Agua de Afrodita</a></li>
                    </ul>
                </li>
            </ul>
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
                <li><a href="{{ route('logout') }}">Cerrar Sesión</a></li>
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
    <!--  <a href="{{ route('perfil') }}">Perfil</a> -->
    <a href="{{ route('nosotros') }}">Nosotros</a>
    <a href="{{ route('productos') }}">Productos</a>
    <a href="{{ route('testimonios') }}">Testimonios</a>
    <a href="{{ route('contacto') }}">Contacto</a>
    <a href="{{ route('login') }}">Iniciar Sesión</a>
    <a href="{{ route('register') }}">Registrarse</a>


</div>
<!-- Fondo difuminado -->
<div class="overlay" id="overlay"></div>

<!-- Script para mostrar y ocultar blur de Menú lateral -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");

        menuToggle.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

        overlay.addEventListener("click", function () {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        });
    });
</script>
