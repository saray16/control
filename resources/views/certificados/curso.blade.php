<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Curso</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;500&display=swap');
        @page {
            size: landscape; 
            margin: 0;
        }
        body{
            background: url("{{ asset('images/Plantilla.png') }}");
        }
    </style>
</head>
<body>
    <img src="Plantilla.png" alt="">
    <div class="certificate-container">
        <div class="gold-border"></div>

        <div class="header">
            <div class="institution">INSTITUTO DE FORMACIÓN PROFESIONAL</div>
            <div class="department">CURSO ACADÉMICO</div>
            <div class="certificate-title">Certificado de Participación</div>
        </div>

        <div class="content">
            <p class="declaration">Se otorga el presente certificado a</p>

            <div class="recipient-name">{{ $inscripcion->user->name }}</div>

            <p class="declaration">Por haber aprobado satisfactoriamente el curso:</p>

            <div class="program-name">{{ $inscripcion->curso }}</div>

            <div class="details">
                <div class="detail-item">
                    <div class="detail-label">Duración</div>
                    <div class="detail-value">{{ $inscripcion->horas }} horas</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Fecha de emisión</div>
                    <div class="detail-value">{{ $fecha_emision }}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Código</div>
                    <div class="detail-value">{{ $codigo_verificacion }}</div>
                </div>
            </div>

            <div class="signatures">
                <div class="signature">
                    <div class="signature-line"></div>
                    <div class="signature-name">{{ $inscripcion->facilitador }}</div>
                    <div class="signature-title">Facilitador</div>
                </div>
                <div class="signature">
                    <div class="signature-line"></div>
                    <div class="signature-name">Dra. Carolina Méndez</div>
                    <div class="signature-title">Directora Académica</div>
                </div>
            </div>
        </div>

        <div class="footer">
            Este certificado puede ser verificado en www.instituto.edu/validar-certificado
        </div>

        <div class="certificate-id">
            ID: {{ strtoupper(substr($codigo_verificacion, 0, 12)) }}
        </div>
    </div>
</body>
</html>