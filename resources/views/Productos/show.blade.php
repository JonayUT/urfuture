@extends('layouts.app')

@section('title', 'Detalles del Producto')


@section('content')
<div class="container mt-5">
    <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('producto', $producto) }}
    <!-- --------- -->

    <div>
        <div class="producto">
            <img src="{{ $producto->Imagen }}" alt="{{ $producto->Nombre }}" >
            <h1>{{ $producto->Nombre }}</h1>
            <p><strong>Descripción:</strong> {{ $producto->Descripcion }}</p>
            <p><strong>Precio:</strong> ${{ number_format($producto->Precio, 2) }}</p>
            <p><strong>Categoría:</strong> {{ $producto->Tipo }}</p>
            <a href="{{ route('productos') }}">Volver a la tienda</a>
        
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
        <select name="Tipo" id="edit_tipo" required>
            <option value="Libros">Libros</option>
            <option value="Aromaticos">Aromaticos</option>
            <option value="Otros">Otros</option>
        </select>
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
            Swal.fire({
                icon: "error",
                title: "PRODUCTO ELIMINADO",
            });
            return false;
        }
    } 

</script>
<!-- Fin editar productos -->
@endsection