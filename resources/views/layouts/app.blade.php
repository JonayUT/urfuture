<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Aquí se insertará el título de cada página -->
    
    <!-- Incluir los estilos -->
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    </head>
<body>
    @include('partials.navbar') <!-- Incluir la barra de navegación -->
    <!-- Breadcrumbs -->
   


    <div class="container">
        <br><br><br><br><br>
        @yield('content') <!-- Aquí irá el contenido de cada página -->
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/menu-toggle.js') }}"></script>

</body>
</html>
