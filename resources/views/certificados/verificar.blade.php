<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Verificación de Certificado</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 2rem; }
        .card { max-width: 600px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        h1 { color: #333; }
        p { font-size: 1.1rem; margin-bottom: 0.5rem; }
        .error { color: red; text-align: center; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Certificado de {{ $inscripcion->nombre }}</h1>
        <p><strong>Cédula:</strong> {{ $inscripcion->documento_completo }}</p>
        <p><strong>Formación:</strong> {{ $inscripcion->taller ?? $inscripcion->curso ?? $inscripcion->diplomado }}</p>
        <p><strong>Estado:</strong> {{ $inscripcion->estado_formacion }}</p>
        <p><strong>Fecha de inscripción:</strong> {{ $inscripcion->created_at->format('d/m/Y') }}</p>
    </div>
</body>
</html>