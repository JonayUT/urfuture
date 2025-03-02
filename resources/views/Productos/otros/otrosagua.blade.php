@extends('layouts.app')

@section('title', 'Agua Afrodita')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('agua') }}
   <!-- --------- -->

   <h1 class="neon-text">AGUA DE AFRODITA</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
               <a class="card-product" href="/nosotros">
               <img src="../../images/producto2.jpg" alt="Producto 2">
                <h2>Agua de Afrodita</h2>
                <p>La diosa de la belleza te convertira en un iman de humanos.</p>
                <span>$200</span>
               </a> 
            </div>
    </main>
   @endsection