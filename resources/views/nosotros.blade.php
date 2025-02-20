@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('nosotros') }}
   <!-- --------- -->

   <h1 class="neon-text">Nosotros</h1>

        <section class="mision">
            <p>
                En nuestra tienda esotérica, buscamos brindar herramientas y conocimientos para 
                el crecimiento espiritual y el bienestar personal. Creemos en la magia, la energía 
                y la conexión con el universo, ofreciendo productos seleccionados con amor y 
                sabiduría para ayudarte en tu camino.
            </p>
            <p>
                Nuestra misión es ser un faro de luz para aquellos que buscan orientación, 
                equilibrio y armonía en sus vidas. Desde inciensos hasta piedras energéticas, 
                cada artículo en nuestra tienda está destinado a aportar paz y espiritualidad.
            </p>
        </section>
        <div class="imagen-container">
            <img src="images/eso8.jpg" alt="Imagen Esotérica">
        </div>
    

   @endsection
