@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('velas') }}
   <!-- --------- -->

   <h1 class="neon-text">VELAS PACIFICADORAS</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
                <img src="../../images/producto1.jpg" alt="Producto 1">
                <h2>Velas Pacificadoras</h2>
                <p>La llama de estas velas alejara a las cucarachas de tu vida.</p>
                <span>$100</span>
            </div>
        </section>
    </main>
   @endsection