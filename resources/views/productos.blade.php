@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<!-- Breadcrumbs -->
{{ Breadcrumbs::render('productos') }}
<!-- --------- -->

<h1>Nuestra Tienda</h1>

<div class="MostrarProductos">
    <div class="container-card">
        <div class="row">
            @forelse ($productos as $producto)
            <div class="card">
                <img src="{{ $producto->Imagen }}" alt="{{ $producto->Nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->Nombre }}</h5>
                    <p class="card-text">{{ $producto->Descripcion }}</p>
                    <p class="card-text"><strong>${{ number_format($producto->Precio, 2) }}</strong></p>
                    <a href="#" class="btn-card">Ver más</a>
                    @auth
                        @if(Auth::user()->hasRole('admin'))
                        <form action="{{ route('productos.destroy', $producto->_id) }}" method="POST"
                            onsubmit="return confirmarEliminacion(event, this)">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-eliminar">Eliminar</button>
                        </form> 
                        @endif
                        @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('editor'))
                        <button class="btn-editar"
                            onclick="mostrarModal('{{ $producto->_id }}', '{{ $producto->Nombre }}', '{{ $producto->Descripcion }}', '{{ $producto->Imagen }}','{{ $producto->Precio }}', '{{ $producto->Tipo }}')">
                            Editar
                        </button>
                        @endif
                    @endauth
                    
                    
                </div>
            </div>
            @empty
            <p>No hay productos disponibles</p>
            @endforelse
        </div>

        <!-- Agregar productos -->

        <button id="btnAgregarProducto" onclick="toggleAgregarProducto()">Agregar Producto</button>
        <div class="AgregarProducto" id="AgregarProducto" style="display: none;">
            <form action="{{ route('productos.store') }}" method="POST" class="form-agregar">
                @csrf
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" required>
                <br>
                <label for="Descripcion">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion" required>
                <br>
                <label for="Imagen">Imagen</label>
                <input type="text" name="Imagen" id="Imagen" required>
                <br>
                <label for="Precio">Precio</label>
                <input type="number" name="Precio" id="Precio" required step="0.01">
                <br>
                <label for="Tipo">Categoria</label>
                <input type="text" name="Tipo" id="Tipo" required>
                <br>
                <button type="submit" id="btnAgregarProducto">Agregar</button>
            </form>
        </div>

        <script>
            function toggleAgregarProducto() {
                var agregarProductoDiv = document.getElementById('AgregarProducto');
                if (agregarProductoDiv.style.display === 'none') {
                    agregarProductoDiv.style.display = 'block';
                } else {
                    agregarProductoDiv.style.display = 'none';
                }
            }
        </script>
        <!-- Fin agregar productos -->
    </div>
</div>



<!-- Modal para editar producto -->
<div id="modalEditar" class="modal">
    <h3>Editar Producto</h3>
    <form id="formEditar" method="POST" class="form-editar">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" id="edit_id">
        <label for="edit_nombre">Nombre</label>
        <input type="text" name="Nombre" id="edit_nombre" required>
        <br>
        <label for="edit_descripcion">Descripción</label>
        <input type="text" name="Descripcion" id="edit_descripcion" required>
        <br>
        <label for="edit_imagen">Imagen</label>
        <input type="text" name="Imagen" id="edit_imagen" required>
        <br>
        <label for="edit_precio">Precio</label>
        <input type="number" name="Precio" id="edit_precio" required step="0.01">
        <br>
        <label for="edit_tipo">Categoría</label>
        <input type="text" name="Tipo" id="edit_tipo" required>
        <br>
        <button type="submit" class="btn-submit">Guardar cambios</button>
        <button type="button" onclick="cerrarModal()" class="btn-cancelar">Cancelar</button>
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




@endsection
