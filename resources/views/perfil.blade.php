@extends('layouts.app')

@section('title', $activeSection ?? 'Perfil')

@section('content')

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('perfil') }}
   <!-- --------- -->

   <h1 class="neon-text">{{ $activeSection ?? 'PERFIL' }}</h1>

   <!-- Mostrar datos del usuario autenticado -->
   <p>Usuario: {{ $user->name ?? 'Invitado' }}</p>
   <p>Email: {{ $user->email ?? 'No disponible' }}</p>

@endsection