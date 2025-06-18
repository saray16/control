<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Certificado de Taller</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .certificado { 
            border: 2px solid #000; 
            padding: 20px; 
            text-align: center;
            margin: 20px;
        }
        .titulo { font-size: 24px; font-weight: bold; margin-bottom: 30px; }
        .contenido { margin: 20px 0; }
        .firma { margin-top: 50px; }
        .codigo { font-size: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="certificado">
        <div class="titulo">CERTIFICADO DE PARTICIPACIÓN</div>
        
        <div class="contenido">
            <p>Se certifica que</p>
            <h3>{{ $inscripcion->user->name }}</h3>
            <p>ha participado satisfactoriamente en el taller:</p>
            <h4>{{ $inscripcion->evento->nombre }}</h4>
            <p>con una duración de {{ $inscripcion->horas }} horas.</p>
        </div>
        
        <div class="firma">
            <p>_________________________</p>
            <p>Nombre del Facilitador</p>
            <p>Facilitador</p>
        </div>
        
        <div class="codigo">
            Código de verificación: {{ $codigo_verificacion }}
            <br>
            Fecha de emisión: {{ $fecha_emision }}
        </div>
    </div>
</body>
</html>