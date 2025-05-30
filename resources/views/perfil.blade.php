@extends('layouts.app')

@section('title', $activeSection ?? 'Perfil')

@section('content')

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('perfil') }}
   <!-- --------- -->

   <h1 class="neon-text" title="{{ $activeSection ?? 'PERFIL' }}">{{ $activeSection ?? 'PERFIL' }}</h1>


   <section class="testimonios">
         <div class="testimonios-container">
            <div class="testimonio">
               <img src="https://pbs.twimg.com/media/EObQ5KQX0AA_EOm.png" alt="Testimonio 1">
               <div class="contenido">
                  <h2 title="Usuario">Usuario: {{ $user->name ?? 'Invitado' }}</h3>
                  <p title="Email">Email: {{ $user->email ?? 'No disponible' }}</p>               
               </div>
            </div>
         </div>
   </section>


@endsection