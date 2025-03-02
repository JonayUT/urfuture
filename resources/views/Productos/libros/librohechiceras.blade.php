@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('hechiceras') }}
   <!-- --------- -->

   <h1 class="neon-text">JOVENES HECHICERAS</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
                <img src="../../images/producto3.jpg" alt="Producto 3">
                <h2>Jovenes Hechiceras / Pasta Dura</h2>
                <p>Convierte en toda una brujita.</p>
                <span>$300</span>
            </div>
        </section>
    </main>
   @endsection