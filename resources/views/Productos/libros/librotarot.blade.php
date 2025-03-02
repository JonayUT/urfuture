@extends('layouts.app')

@section('title', 'Tarot Guia Personal')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('tarot') }}
   <!-- --------- -->

   <h1 class="neon-text">TAROT GUIA PERSONAL</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
                <img src="../../images/producto4.jpg" alt="Producto 4">
                <h2>Tarot Guia Personal / Pasta Dura</h2>
                <p>Aprende a leer el tarot.</p>
                <span>$400</span>
            </div>
        </section>
    </main>
   @endsection