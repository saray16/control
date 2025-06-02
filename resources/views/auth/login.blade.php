<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - CENAMEC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5.3 + Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: rgb(103, 140, 163);
            --light: #f8f9fa;
            --dark: #343a40;
        }

        body {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            color: var(--dark);
        }

        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 450px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
        }

        .card-header {
            background-color: var(--primary);
            color: white;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            padding: 20px;
            border-bottom: 4px solid var(--accent);
        }

        .card-body {
            padding: 30px;
            background-color: var(--light);
        }

        .btn-login {
            background-color: var(--accent);
            border: none;
            font-weight: 600;
            padding: 12px;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        .form-control {
            border: 2px solid #ddd;
            border-radius: 6px;
            padding: 12px 15px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        label {
            font-weight: 500;
            color: var(--primary);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="form-wrapper">
    <div class="card">
        <div class="card-header">Iniciar Sesión</div>
        <div class="card-body">

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           name="email" 
                           id="email" 
                           value="{{ old('email') }}"
                           required 
                           placeholder="Ingrese su correo">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           name="password" 
                           id="password" 
                           required 
                           placeholder="Ingrese su contraseña">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-login w-100">Entrar</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <p>CENAMEC - Centro Nacional de Mejoramiento Profesional</p>
    <p>© 2025 Todos los derechos reservados</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
