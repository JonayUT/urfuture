@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
  

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('inicio') }}
   <!-- --------- -->

    <h1 class="neon-text">Descubre tu propósito, construye tu destino.</h1>


   @include('partials.carrusel')

   @endsection
