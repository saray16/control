@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white fw-bold d-flex align-items-center">
                    <i class="bi bi-pencil-square me-2"></i> Editar Usuario
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label fw-semibold">Nombre Completo</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $user->nombre) }}" 
                                   class="form-control shadow-sm @error('nombre') is-invalid @enderror" required>
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                                   class="form-control shadow-sm @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="rol" class="form-label fw-semibold">Rol</label>
                            <select name="rol" id="rol" class="form-select shadow-sm @error('rol') is-invalid @enderror" required>
                                <option value="usuario" {{ old('rol', $user->rol) == 'usuario' ? 'selected' : '' }}>Usuario</option>
                                <option value="admin" {{ old('rol', $user->rol) == 'admin' ? 'selected' : '' }}>Administrador</option>
                            </select>
                            @error('rol')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check form-switch mb-4">
                            <input type="checkbox" name="activo" class="form-check-input" id="activo" 
                                   {{ old('activo', $user->activo) ? 'checked' : '' }}>
                            <label class="form-check-label" for="activo">Usuario activo</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left-circle"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection