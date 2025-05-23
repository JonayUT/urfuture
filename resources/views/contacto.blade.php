@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<!-- Breadcrumbs -->
{{ Breadcrumbs::render('contacto') }}
<!-- --------- -->

<h1 class="neon-text" title="CONTACTO">CONTACTO</h1>

<div class="contact-card">
    <form action="{{ route('contacto.enviar') }}" method="POST" class="contact-form">
        @csrf
        <label for="nombre">Name</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa el Nombre" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingresa e-mail válido" required>

        <label for="mensaje">Message</label>
        <textarea id="mensaje" name="mensaje" placeholder="Coméntanos" rows="4" required></textarea>

        <div class="terms-container">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">
                I accept the
                <a href="#" class="terms-link" data-bs-toggle="modal" data-bs-target="#termsModal">
                    Terms of Service
                </a>
            </label>
        </div>

        <button type="submit" class="btn-submit">Envíe su solicitud</button>
    </form>

    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif

</div>

<!-- Modal de Términos y Condiciones -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Al utilizar este formulario de contacto, aceptas que la información proporcionada será utilizada
                    únicamente
                    para responder a tu consulta. No compartiremos tus datos con terceros sin tu consentimiento.
                </p>
                <p>
                    Nos reservamos el derecho de responder únicamente a solicitudes legítimas y de rechazar mensajes que
                    contengan
                    información inapropiada o que no estén en línea con nuestras políticas de servicio.
                </p>
                <p>
                    Para más información sobre nuestra política de privacidad, contáctanos directamente.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection
