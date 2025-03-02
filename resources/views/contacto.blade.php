@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<!-- Breadcrumbs -->
{{ Breadcrumbs::render('contacto') }}
<!-- --------- -->

<h1 class="neon-text">CONTACTO</h1>

<div class="contact-card">
    {{-- action="{{ route('contacto.enviar') }}" method="POST" class="contact-form"comment --}}
    <form class="contact-form">
        @csrf
        <label for="nombre">Name</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa el Nombre" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingresa e-mail valido" required>

        <label for="mensaje">Message</label>
        <textarea id="mensaje" name="mensaje" placeholder="Comentanos" rows="4" required></textarea>

        <div class="terms-container">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms" class="terms-label">I accept the <a href="#" class="terms-link">Terms of
                    Service</a></label>
        </div>

        <button type="submit" class="btn-submit">Envíe su solicitud</button>
    </form>
</div>

@endsection
