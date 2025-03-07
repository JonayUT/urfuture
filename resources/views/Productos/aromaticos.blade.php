@extends('layouts.app')

@section('title', 'Aromaticos')

@section('content')
 
    <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('aromaticos') }}
   <!-- --------- -->

   <h1 class="neon-text">AROMATICOS</h1>
   <main>
        <section class="productos-i">
            <div class="producto">
                <a class="card-product" href="/productos/aromaticos/velas">
                <img src="/images/producto1.jpg" alt="Producto 1">
                <h2>Velas Pacificadoras</h2>
                <p>La llama de estas velas alejara a las cucarachas de tu vida.</p>
                <span>$100</span>
                </a>
            </div>
            <div class="producto">
                <a class="card-product" href="/productos/aromaticos/perlas">
                <img src="/images/producto6.jpg" alt="Producto 6">
                <h2>Perlas Aromaticas</h2>
                <p>Dale a tu ropa el olor del éxito.</p>
                <span>$600</span>
                </a>
            </div>
        </section>
    </main>
   @endsection