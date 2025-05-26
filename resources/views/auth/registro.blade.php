@extends('layouts.app')

@section('content')
<div class="form-wrapper">
    <div class="card">
        <div class="card-header">Registro de Usuario</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('registro.submit') }}" method="POST" id="registerForm">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">Nombre Completo</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required
                           value="{{ old('name') }}" placeholder="Ingrese su nombre completo">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required
                           value="{{ old('email') }}" placeholder="Ingrese su correo electrónico">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required
                           placeholder="Cree una contraseña segura">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required
                           placeholder="Repita la contraseña">
                </div>

                <button type="submit" class="btn btn-register w-100">Registrarse</button>
            </form>

            <div class="text-center mt-4">
                <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}" style="color: var(--accent);">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

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
        min-height: 100vh;
        color: var(--dark);
    }
    .form-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        min-height: 100vh;
    }

    .card {
        width: 100%;
        max-width: 500px; /* Antes era 500px */
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
    .btn-register {
        background-color: var(--accent);
        border: none;
        font-weight: 600;
        padding: 12px;
        transition: all 0.3s;
    }
    .btn-register:hover {
        background-color: #2980b9;
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
        margin-bottom: 8px;
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
    .alert {
        font-size: 14px;
        padding: 10px 15px;
        border-radius: 6px;
    }
    .password-strength {
        height: 5px;
        margin-top: 5px;
        background-color: #eee;
        border-radius: 3px;
        overflow: hidden;
    }
    .strength-0 { width: 20%; background-color: #e74c3c; }
    .strength-1 { width: 40%; background-color: #f39c12; }
    .strength-2 { width: 60%; background-color: #f1c40f; }
    .strength-3 { width: 80%; background-color: #2ecc71; }
    .strength-4 { width: 100%; background-color: #27ae60; }
</style>
