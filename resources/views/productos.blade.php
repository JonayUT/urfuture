@extends('layouts.app')

@section('title', 'Productos')

@section('content')
   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('productos') }}
   <!-- --------- -->

   <h1>Nuestra Tienda</h1>
   <main>
        <section class="productos">
            <div class="producto">
                <img src="images/producto1.jpg" alt="Producto 1">
                <h2>Velas Pacificadoras</h2>
                <p>La llama de estas velas alejara a las cucarachas de tu vida.</p>
                <span>$100</span>
            </div>
            <div class="producto">
               <a class="card-product" href="/nosotros">
               <img src="images/producto2.jpg" alt="Producto 2">
                <h2>Agua de Afrodita</h2>
                <p>La diosa de la belleza te convertira en un iman de humanos.</p>
                <span>$200</span>
               </a> 
            </div>
            <div class="producto">
                <img src="images/producto3.jpg" alt="Producto 3">
                <h2>Jovenes Hechiceras / Pasta Dura</h2>
                <p>Convierte en toda una brujita.</p>
                <span>$300</span>
            </div>
            <div class="producto">
                <img src="images/producto4.jpg" alt="Producto 4">
                <h2>Tarot Guia Personal / Pasta Dura</h2>
                <p>Aprende a leer el tarot.</p>
                <span>$400</span>
            </div>
            <div class="producto">
                <img src="images/producto5.jpg" alt="Producto 5">
                <h2>The Eye in Ur Hand</h2>
                <p>Tarot interactivo, incluye tapete digital.</p>
                <span>$500</span>
            </div>
            <div class="producto">
                <img src="images/producto6.jpg" alt="Producto 6">
                <h2>Perlas Aromaticas</h2>
                <p>Dale a tu ropa el olor del éxito.</p>
                <span>$600</span>
            </div>
        </section>
    </main>




   @endsection