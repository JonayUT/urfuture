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
        <strong>Imagen:</strong><br>
        <img src="{{ $producto->Imagen }}" alt="{{ $producto->Nombre }}"><br>
        <strong>Precio:</strong> ${{ number_format($producto->Precio, 2) }} <br>
        <strong>Categoría:</strong> {{ $producto->Tipo }} <br>

        <!-- Botón de Editar -->
        <button
            onclick="mostrarModal('{{ $producto->_id }}', '{{ $producto->Nombre }}', '{{ $producto->Descripcion }}', '{{ $producto->Imagen }}','{{ $producto->Precio }}', '{{ $producto->Tipo }}')">Editar</button>

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
</div>

<!-- Agregar productos -->
<div class="AgregarProducto">
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" required>

        <label for="Descripcion">Descripción</label>
        <input type="text" name="Descripcion" id="Descripcion" required>

        <label for="Imagen">Imagen</label>
        <input type="text" name="Imagen" id="Imagen" required>

        <label for="Precio">Precio</label>
        <input type="number" name="Precio" id="Precio" required step="0.01">

        <label for="Tipo">Tipo</label>
        <input type="text" name="Tipo" id="Tipo" required>

        <button type="submit">Agregar</button>
    </form>
</div>
<!-- Fin agregar productos -->

<!-- Modal para editar producto -->
<div id="modalEditar"
    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">
    <h3>Editar Producto</h3>
    <form id="formEditar" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" id="edit_id">
        <label for="edit_nombre">Nombre</label>
        <input type="text" name="Nombre" id="edit_nombre">
        <label for="edit_descripcion">Descripción</label>
        <input type="text" name="Descripcion" id="edit_descripcion">
        <label for="edit_imagen">Imagen</label>
        <input type="text" name="Imagen" id="edit_imagen">
        <label for="edit_precio">Precio</label>
        <input type="number" name="Precio" id="edit_precio">
        <label for="edit_tipo">Categoría</label>
        <input type="text" name="Tipo" id="edit_tipo">
        <button type="submit">Guardar cambios</button>
        <button type="button" onclick="cerrarModal()">Cancelar</button>
    </form>

</div>

<script>
    function mostrarModal(id, nombre, descripcion, imagen, precio, tipo) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_nombre').value = nombre;
    document.getElementById('edit_descripcion').value = descripcion;
    document.getElementById('edit_imagen').value = imagen;
    document.getElementById('edit_precio').value = precio;
    document.getElementById('edit_tipo').value = tipo;

    // Asignar la ruta correcta al formulario dinámicamente
    let formEditar = document.getElementById('formEditar');
    formEditar.action = `/productos/${id}`;

    document.getElementById('modalEditar').style.display = 'block';
}


    function cerrarModal() {
        document.getElementById('modalEditar').style.display = 'none';
    }

    function confirmarEliminacion(event, form) {
        event.preventDefault();
        if (confirm('¿Estás seguro de que quieres eliminar este producto?')) {
            form.submit();
        }
    }
</script>
<!-- Fin editar productos -->

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
