@extends('layouts.app')

@section('title', 'Historial de Inscripciones')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Encabezado -->
            <div class="d-flex align-items-center mb-5">
                <div class="icon-box bg-primary text-white me-4">
                    <i class="fas fa-history fa-2x"></i>
                </div>
                <div>
                    <h1 class="h2 text-dark mb-0">Historial de Inscripciones</h1>
                    <p class="text-muted mb-0">Revisa todas tus formaciones registradas</p>
                </div>
            </div>

            @if($inscripciones->isEmpty())
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-clipboard-list fa-4x text-muted mb-4"></i>
                        <h3 class="h4 text-muted mb-3">No tienes inscripciones registradas</h3>
                        <a href="{{ route('formaciones.index') }}" class="btn btn-primary px-4">
                            <i class="fas fa-book-open me-2"></i> Explorar Formaciones
                        </a>
                    </div>
                </div>
            @else
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Participante</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Tipo</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Formación</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Facilitador</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Duración</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Inscripción</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0">Estado</th>
                                        <th class="py-3 px-4 text-uppercase small fw-bold text-muted border-0 text-end">Certificado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inscripciones as $inscripcion)
                                        <tr class="border-top">
                                            <td class="py-3 px-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded-circle me-3">
                                                        <span class="avatar-title text-primary">
                                                            {{ substr($inscripcion->nombre, 0, 1) }}
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ $inscripcion->nombre }}</h6>
                                                        <small class="text-muted">{{ $inscripcion->cedula }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                @switch($inscripcion->tipo_formacion)
    @case('C')
        <span class="badge bg-info">Curso</span>
        @break
    @case('T')
        <span class="badge bg-warning text-dark">Taller</span>
        @break
    @case('D')
        <span class="badge" style="background-color: #6f42c1; color: white;">Diplomado</span>
        @break
    @default
        <span class="badge bg-secondary">Desconocido</span>
@endswitch

                                            </td>
                                            <td class="py-3 px-4">
                                                <h6 class="mb-0">{{ $inscripcion->nombre_formacion }}</h6>
                                            </td>
                                            <td class="py-3 px-4">
                                                {{ $inscripcion->facilitador ?? 'No asignado' }}
                                            </td>
                                            <td class="py-3 px-4">
                                                {{ $inscripcion->horas ? $inscripcion->horas . ' horas' : 'N/A' }}
                                            </td>
                                            <td class="py-3 px-4">
                                                {{ $inscripcion->created_at->format('d/m/Y') }}
                                            </td>
                                            <td class="py-3 px-4">
                                                @if(strtolower($inscripcion->estado_formacion) === 'aprobado')
                                                    <span class="badge bg-success-light text-success">
                                                        <i class="fas fa-check-circle me-1"></i> Aprobado
                                                    </span>
                                                @elseif(strtolower($inscripcion->estado_formacion) === 'pendiente')
                                                    <span class="badge bg-warning-light text-warning">
                                                        <i class="fas fa-clock me-1"></i> Pendiente
                                                    </span>
                                                @else
                                                    <span class="badge bg-secondary-light text-secondary">
                                                        {{ ucfirst($inscripcion->estado_formacion) }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="py-3 px-4 text-end">
                                                @if(strtolower($inscripcion->estado_formacion) === 'aprobado')
                                                    @php
                                                        $tipoCertificado = [
                                                            'C' => 'curso',
                                                            'T' => 'taller', 
                                                            'D' => 'diplomado'
                                                        ][$inscripcion->tipo_formacion] ?? 'curso';
                                                    @endphp
                                                    <a href="{{ url('/certificado/' . $tipoCertificado . '/' . $inscripcion->id) }}" 
                                                       class="btn btn-sm btn-outline-primary"
                                                       target="_blank">
                                                       <i class="fas fa-file-pdf me-1"></i> Descargar
                                                    </a>
                                                @else
                                                    <span class="text-muted small">No disponible</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted small">
                                Mostrando {{ $inscripciones->count() }} registros
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
