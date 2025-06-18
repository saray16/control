<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Curso</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;500&display=swap');

        body {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .certificate-container {
            width: 21cm;
            height: 29.7cm;
            background: white;
            position: relative;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            padding: 2.5cm;
            overflow: hidden;
        }

        .gold-border {
            position: absolute;
            top: 1.5cm;
            left: 1.5cm;
            right: 1.5cm;
            bottom: 1.5cm;
            border: 1px solid #d4af37;
            z-index: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 1.2cm;
            position: relative;
        }

        .institution {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .department {
            font-family: 'Raleway', sans-serif;
            font-size: 13px;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .certificate-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #2c3e50;
            margin: 20px 0;
            position: relative;
        }

        .certificate-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 2px;
            background: #d4af37;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }

        .content {
            text-align: center;
            margin: 0 auto;
            max-width: 15cm;
            position: relative;
            z-index: 1;
        }

        .declaration {
            font-family: 'Raleway', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 25px;
        }

        .recipient-name {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            margin: 30px 0;
            padding: 20px 0;
            position: relative;
        }

        .recipient-name:before, .recipient-name:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 1px;
            background: #d4af37;
            top: 0;
        }

        .recipient-name:before {
            left: calc(50% - 70px);
        }

        .recipient-name:after {
            right: calc(50% - 70px);
        }

        .program-name {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-style: italic;
            color: #3498db;
            margin-bottom: 30px;
        }

        .details {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 30px 0;
        }

        .detail-item {
            text-align: center;
        }

        .detail-label {
            font-family: 'Raleway', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            color: #7f8c8d;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .detail-value {
            font-family: 'Playfair Display', serif;
            font-size: 15px;
        }

        .signatures {
            display: flex;
            justify-content: space-around;
            margin-top: 2cm;
        }

        .signature {
            text-align: center;
            width: 180px;
        }

        .signature-line {
            border-top: 1px solid #333;
            width: 120px;
            margin: 0 auto 8px;
        }

        .signature-name {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .signature-title {
            font-family: 'Raleway', sans-serif;
            font-size: 11px;
            color: #7f8c8d;
        }

        .footer {
            position: absolute;
            bottom: 1.2cm;
            left: 0;
            right: 0;
            text-align: center;
            font-family: 'Raleway', sans-serif;
            font-size: 11px;
            color: #95a5a6;
            padding: 0 2.5cm;
        }

        .certificate-id {
            position: absolute;
            bottom: 0.8cm;
            right: 2.5cm;
            font-family: 'Raleway', sans-serif;
            font-size: 11px;
            color: #95a5a6;
        }

        @media print {
            body {
                background: none;
            }
            .certificate-container {
                box-shadow: none;
                margin: 0;
                width: auto;
                height: auto;
            }
        }
    </style>
</head>
<body>
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