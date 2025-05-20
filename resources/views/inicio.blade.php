@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
  

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('inicio') }}
   <!-- --------- -->

    <h1 class="neon-text">Descubre tu propósito, construye tu destino.</h1>

   <div class="video-container"> 
   <iframe src="https://www.youtube.com/embed/Rw8Q9WZfVuI" title="Mishaal Tamer - ITTY BITTY (Official Visualizer)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
   </div>

   @endsection
