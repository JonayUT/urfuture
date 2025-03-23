@extends('layouts.app')

@section('title', 'Otros')

@section('content')

    <!-- Breadcrumbs -->
    {{ Breadcrumbs::render('otros') }}
    <!-- --------- -->

<h1>Otros Productos</h1>

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
                    <a href="{{ route('productos.show', $producto->_id) }}" class="btn-card">Ver más</a>
                </div>
            </div>
            @empty
            <p>No hay productos disponibles</p>
            @endforelse
        </div>
    </div>
</div>
@endsection