<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #e8d9f0;
            /* Fondo lila suave */
            color: #4a3b6b;
            /* Texto en tono violeta oscuro */
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #a64ac9;
            /* Título en tono púrpura */
            font-size: 24px;
            margin-bottom: 30px;
        }

        p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        strong {
            color: #7d5ba6;
            /* Negritas con tono violeta medio */
        }

        .mensaje {
            background-color: #f3e8fd;
            /* Fondo claro para el mensaje */
            padding: 15px;
            border: 1px solid #d1b3e0;
            /* Borde en tono lila */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-style: italic;
            /* Estilo cursivo para el mensaje */
        }

        .info {
            margin-top: 20px;
            font-size: 0.9em;
            color: #6a5c85;
            /* Texto informativo con tono gris-violeta */
        }
    </style>
</head>

<body>
    <h2>✨ Nuevo mensaje de contacto ✨</h2>

    <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $datos['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <div class="mensaje">{{ $datos['mensaje'] }}</div>

    <p class="info">Este mensaje fue enviado desde el formulario de contacto de tu página esotérica.</p>
</body>

</html>
