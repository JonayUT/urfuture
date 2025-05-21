@extends('layouts.app')

@section('title', 'Inicio')

@section('content')


<!-- Breadcrumbs -->
{{ Breadcrumbs::render('inicio') }}
<!-- --------- -->

<h1 class="neon-text">Descubre tu propósito, construye tu destino.</h1>

<iframe src="/Video/Urfuture.mp4" frameborder="0" width="600" height="400" loading="lazy"></iframe>

@include('partials.carrusel')

@endsection
