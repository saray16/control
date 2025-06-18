@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-primary fw-bold">Panel de Administración</h1>

    <!-- Usuarios -->
    <h2>Usuarios ({{ $totalUsuarios }})</h2>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ ucfirst($usuario->rol) }}</td>
                <td>
                    <a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('¿Eliminar usuario?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Control de Estudios -->
    <h2>Control de Estudios</h2>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Detalle</th>
                <!-- agrega columnas según tu tabla control_de_estudios -->
            </tr>
        </thead>
        <tbody>
            @foreach($control_estudio as $control)
            <tr>
                <td>{{ $control->id }}</td>
                <td>{{ $control->detalle ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Inscripciones -->
    <h2>Inscripciones</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo Formación</th>
                <th>Estado</th>
                <th>Certificado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $inscripcion)
            <tr>
                <td>{{ $inscripcion->nombre }}</td>
                <td>
                    @switch($inscripcion->tipo_formacion)
                        @case('C') Curso @break
                        @case('T') Taller @break
                        @case('D') Diplomado @break
                        @default Desconocido
                    @endswitch
                </td>
                <td>{{ $inscripcion->estado }}</td>
                <td>
                    @if($inscripcion->certificado_pdf_path)
                        <a href="{{ asset('storage/' . $inscripcion->certificado_pdf_path) }}" target="_blank" class="btn btn-sm btn-success">Ver certificado</a>
                    @else
                        <span class="text-muted">No disponible</span>
                    @endif
                    <br>
                    <a href="{{ route('admin.certificado.edit', $inscripcion->id) }}" class="btn btn-sm btn-warning mt-1">Subir / Cambiar certificado</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
