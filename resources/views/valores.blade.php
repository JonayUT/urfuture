@extends('layouts.app')
@section('title', 'Valores')
@section('content')
    <!-- Breadcrumbs -->
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/nosotros">Nosotros</a></li>
            <li class="breadcrumb-item">Valores</li>
        </ol>
    </div>
   <!-- --------- -->
   <h1 class="neon-text" title="VALORES">VALORES</h1>
   <main>
        <section class="contenido">
            <p><strong>Autenticidad:</strong> Creemos en la magia genuina y en compartir productos 
            y conocimientos con integridad.</p><br>
            <p><strong>Conexión:</strong> Fomentamos la unión entre la naturaleza, el espíritu y el ser interior.</p><br>
            <p><strong>Respeto:</strong> Valoramos todas las creencias y prácticas espirituales, promoviendo la diversidad.</p><br>
            <p><strong>Sabiduría:</strong> Buscamos difundir conocimiento que guíe a nuestros clientes en su camino espiritual.</p>
        </section>
        <div class="imagen-container">
            <img src="/images/eso9.jpg" alt="Imagen Valores">
        </div>
    </main>
   @endsection