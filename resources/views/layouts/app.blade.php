<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Agregar Bootstrap si no está presente -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <title>@yield('title')</title> <!-- Aquí se insertará el título de cada página -->
    <script src="{{ asset('/js/validation_alerts.js') }}"></script>    

    <!-- Incluir los estilos -->
    <link rel="stylesheet" href="/estilos.css">
</head>

<body>
    @include('partials.navbar')
    <!-- Incluir la barra de navegación -->
    <!-- Breadcrumbs -->



    <div class="container">
        <br><br><br><br><br>
        @yield('content')
        <!-- Aquí irá el contenido de cada página -->
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/menu-toggle.js') }}"></script>

</body>

</html>
