@extends('layouts.app')

@section('title', 'Libros')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('libros') }}
   <!-- --------- -->

   <h1 class="neon-text">LIBROS</h1>
   <main>
        <section class="productos-i">
        <div class="producto">
                <a class="card-product" href="/productos/libros/hechiceras">
                <img src="/images/producto3.jpg" alt="Producto 3">
                <h2>Jovenes Hechiceras / Pasta Dura</h2>
                <p>Convierte en toda una brujita.</p>
                <span>$300</span>
                </a>
            </div>
            <div class="producto">
                <a class="card-product" href="/productos/libros/tarot">
                <img src="/images/producto4.jpg" alt="Producto 4">
                <h2>Tarot Guia Personal / Pasta Dura</h2>
                <p>Aprende a leer el tarot.</p>
                <span>$400</span>
                </a>    
            </div>
            <div class="producto">
                <a class="card-product" href="/productos/libros/eye">
                <img src="/images/producto5.jpg" alt="Producto 5">
                <h2>The Eye in Ur Hand</h2>
                <p>Tarot interactivo, incluye tapete digital.</p>
                <span>$500</span>
                </a>
            </div>
        </section>
    </main>
   @endsection