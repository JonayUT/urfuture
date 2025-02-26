@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('eye') }}
   <!-- --------- -->

   <h1 class="neon-text">THE EYE IN UR HAND</h1>
   <main>
        <section class="productos">
            <div class="producto">
                <img src="images/producto5.jpg" alt="Producto 5">
                <h2>The Eye in Ur Hand</h2>
                <p>Tarot interactivo, incluye tapete digital.</p>
                <span>$500</span>
            </div>
        </section>
    </main>
   @endsection