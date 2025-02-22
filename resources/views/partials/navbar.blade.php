<header class="header">
    <!-- Botón de menú hamburguesa -->
    <div class="menu-toggle" id="menu-toggle">☰</div>

    <!-- Logo -->
    <a href="{{ route('inicio') }}" class="logo">UrFuture</a>

    <!-- Menú de navegación principal -->
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
                    <a href="{{ route('vision') }}">Libros</a>
                    <ul class="subnav">
                        <li><a href="#">Jovenes Hechiceras</a></li>
                        <li><a href="#">Tarot Guia Personal</a></li>
                        <li><a href="#">The Eye in Ur Hand</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('mision') }}">Aromaticos</a>
                    <ul class="subnav">
                        <li><a href="#">Velas Pacificadoras</a></li>
                        <li><a href="#">Perlas Aromaticas</a></li>
                    </ul>
                </li>               
                <li class="submenu">
                    <a href="{{ route('valores') }}">Otros</a>
                    <ul class="subnav">
                        <li><a href="#">Agua de Afrodita</a></li>
                    </ul>
                </li>
            </ul>
        </div>       
        <a href="{{ route('testimonios') }}">Testimonios</a>
        <a href="{{ route('descubre') }}">Descubre</a>
    </nav>
</header>
    <!-- Menú lateral hamburguesa -->
    <div class="sidebar" id="sidebar">
        <a href="{{ route('perfil') }}">Perfil</a>
        <a href="{{ route('compras') }}">Compras</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </div>