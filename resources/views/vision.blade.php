@extends('layouts.app')

@section('title', 'Vision')

@section('content')
   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('vision') }}
    <!-- --------- -->

   <h1 class="neon-text">VISION</h1>
   <main>
        <section class="contenido">
            <p>
                Nuestra visión es ser el destino principal para aquellos que buscan herramientas 
                espirituales y orientación en su camino esotérico. 
                Aspiramos a crear una comunidad 
                donde la sabiduría ancestral y el conocimiento moderno se unan para inspirar y 
                empoderar a las personas.
                
            </p>
        </section>
        <div class="imagen-container">
            <img src="/images/eso10.jpg" alt="Imagen Visión">
        </div>
    </main>
 
   @endsection
