@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('perlas') }}
   <!-- --------- -->

   <h1 class="neon-text">PERLAS AROMATICAS</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
                <img src="../../images/producto6.jpg" alt="Producto 6">
                <h2>Perlas Aromaticas</h2>
                <p>Dale a tu ropa el olor del éxito.</p>
                <span>$600</span>
            </div>
        </section>
    </main>
   @endsection