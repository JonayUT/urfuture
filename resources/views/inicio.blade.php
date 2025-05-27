@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

  <!-- Breadcrumbs -->
  {{ Breadcrumbs::render('inicio') }}
  <!-- --------- -->

  <h1 id="frase-principal" class="neon-text" title="Descubre tu proposito, construye tu destino.">
    Descubre tu propósito, construye tu destino.
  </h1>

  <div style="display: flex; justify-content: center; align-items: center;">
    <button id="narrador-btn" style="margin: 20px 0; padding: 10px 20px; font-size: 1.1em;">
      <i class="bx bx-volume-full"></i> Escuchar titulo
    </button>
  </div>

  <div class="video-container"> 
    <iframe src="https://www.youtube.com/embed/Rw8Q9WZfVuI" title="Mishaal Tamer - ITTY BITTY (Official Visualizer)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>

  <script>
    document.getElementById('narrador-btn').addEventListener('click', function() {
      const frase = document.getElementById('frase-principal').innerText;
      const utterance = new window.SpeechSynthesisUtterance(frase);
      utterance.lang = 'es-ES'; // Español
      window.speechSynthesis.speak(utterance);
    });
  </script>

@endsection
