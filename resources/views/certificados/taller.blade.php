<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Certificado de Taller</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', serif;
        }
        .certificate-container {
            position: relative;
            width: 100%;
            height: 100vh;
        }
        .certificate-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .text-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
        }
        /* Posiciones de texto sobre el certificado */
        .document-number {
            position: absolute;
            top: 38%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
            text-align: center;
            width: 80%;
        }
        .recipient-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            width: 80%;
        }
        .program-name {
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            width: 80%;
        }
        .facilitator-name {
            position: absolute;
            top: 64%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            font-weight: normal;
            text-align: center;
            width: 80%;
        }
        .duration {
            position: absolute;
            top: 69%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            width: 80%;
        }
        .verification-code {
            position: absolute;
            bottom: 15%;
            left: 50%;
            transform: translateX(-50%);
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
            text-align: center;
            width: 100%;
        }
        .qr-code {
            position: absolute;
            bottom: 10%;
            right: 5%;
            width: 80px;
            height: 80px;
        }
        .qr-code img {
            width: 100%;
            height: 100%;
            display: block;
        }
    </style>
</head>
<body>
    @php
        use SimpleSoftwareIO\QrCode\Facades\QrCode;

        // Carga la imagen plantilla como base64 para evitar problemas en PDF
        $path = public_path('images/Plantilla.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        // Genera el código QR como base64, apunta a la URL de verificación con el código
        $qrCodeBase64 = base64_encode(QrCode::format('png')->size(150)->generate(url('/verificar/' . $codigo_verificacion)));
    @endphp

    <div class="certificate-container">
        {{-- Imagen de fondo --}}
        <img src="{{ $base64 }}" class="certificate-image" alt="Plantilla de Certificado">

        {{-- Textos encima de la plantilla --}}
        <div class="text-overlay">
            <div class="document-number">
                Cédula Nro. {{ $inscripcion->documento_completo }}
            </div>

            <div class="recipient-name">
                {{ strtoupper($inscripcion->nombre) }}
            </div>

            <div class="program-name">
                {{ $inscripcion->taller ?? $inscripcion->curso ?? $inscripcion->diplomado }}
            </div>

            <div class="facilitator-name">
                Facilitador: {{ $inscripcion->facilitador->nombre ?? 'No asignado' }}
            </div>

            <div class="duration">
                Duración: {{ $inscripcion->duracion ?? 'N/A' }} horas
            </div>

            <div class="verification-code">
                Código de verificación: {{ $codigo_verificacion }} | Emitido el: {{ $fecha_emision }}
            </div>

            {{-- QR Code en base64 --}}
            <div class="qr-code">
                <img src="data:image/png;base64,{{ $qrCodeBase64 }}" alt="Código QR">
            </div>
        </div>
    </div>
</body>
</html>