@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('productos') }}
<!-- --------- -->

<div class="MostrarProductos">
    @forelse ($productos as $producto)
    <p>
        <strong>Nombre:</strong> {{ $producto->Nombre }} <br>
        <strong>Descripción:</strong> {{ $producto->Descripcion }} <br>
        <strong>Precio:</strong> ${{ number_format($producto->Precio, 2) }} <br>
        <strong>Categoría:</strong> {{ $producto->Tipo }} <br>

        <!-- Formulario para eliminar -->
    <form action="{{ route('productos.destroy', $producto->_id) }}" method="POST"
        onsubmit="return confirmarEliminacion(event, this)">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-eliminar">Eliminar</button>
    </form>
    </p>
    <hr>
    @empty
    <p>No hay productos</p>
    @endforelse

    <script>
        function confirmarEliminacion(event, form) {
            event.preventDefault();
            if (confirm('¿Estás seguro de que quieres eliminar este producto?')) {
                form.submit();
            }
        }
    </script>
</div>


<div class="AgregarProducto">
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" required>

        <label for="Descripcion">Descripción</label>
        <input type="text" name="Descripcion" id="Descripcion" required>

        <label for="Precio">Precio</label>
        <input type="number" name="Precio" id="Precio" required step="0.01">

        <label for="Tipo">Tipo</label>
        <input type="text" name="Tipo" id="Tipo" required>

        <button type="submit">Agregar</button>
    </form>
</div>

<h1>Nuestra Tienda</h1>
<main>
    <section class="productos">
        <div class="producto">
            <a class="card-product" href="/productos/aromaticos/velas">
                <img src="images/producto1.jpg" alt="Producto 1">
                <h2>Velas Pacificadoras</h2>
                <p>La llama de estas velas alejara a las cucarachas de tu vida.</p>
                <span>$100</span>
            </a>
        </div>
        <div class="producto">
            <a class="card-product" href="/productos/otros/agua">
                <img src="images/producto2.jpg" alt="Producto 2">
                <h2>Agua de Afrodita</h2>
                <p>La diosa de la belleza te convertira en un iman de humanos.</p>
                <span>$200</span>
            </a>
        </div>
        <div class="producto">
            <a class="card-product" href="/productos/libros/hechiceras">
                <img src="images/producto3.jpg" alt="Producto 3">
                <h2>Jovenes Hechiceras / Pasta Dura</h2>
                <p>Convierte en toda una brujita.</p>
                <span>$300</span>
            </a>
        </div>
        <div class="producto">
            <a class="card-product" href="/productos/libros/tarot">
                <img src="images/producto4.jpg" alt="Producto 4">
                <h2>Tarot Guia Personal / Pasta Dura</h2>
                <p>Aprende a leer el tarot.</p>
                <span>$400</span>
            </a>
        </div>
        <div class="producto">
            <a class="card-product" href="/productos/libros/eye">
                <img src="images/producto5.jpg" alt="Producto 5">
                <h2>The Eye in Ur Hand</h2>
                <p>Tarot interactivo, incluye tapete digital.</p>
                <span>$500</span>
            </a>
        </div>
        <div class="producto">
            <a class="card-product" href="/productos/aromaticos/perlas">
                <img src="images/producto6.jpg" alt="Producto 6">
                <h2>Perlas Aromaticas</h2>
                <p>Dale a tu ropa el olor del éxito.</p>
                <span>$600</span>
            </a>
        </div>
    </section>
</main>


@endsection
