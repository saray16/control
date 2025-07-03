@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Panel del Facilitador</h1>

    @if($formaciones->isEmpty())
        <p>No tienes formaciones asignadas.</p>
    @else
        @foreach($formaciones as $formacion)
            <div class="card mb-3">
                <div class="card-header">
                    <strong>{{ $formacion->titulo }}</strong> 
                    <span class="text-muted"> - {{ $formacion->fecha_inicio->format('d/m/Y') ?? 'Fecha no definida' }}</span>
                </div>
                <div class="card-body">
                    <h5>Inscripciones:</h5>
                    @if($formacion->inscripciones->isEmpty())
                        <p>No hay inscripciones en esta formación.</p>
                    @else
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Participante</th>
                                    <th>Email</th>
                                    <th>Evaluación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formacion->inscripciones as $inscripcion)
                                    <tr>
                                        <td>{{ $inscripcion->user->name ?? 'Sin nombre' }}</td>
                                        <td>{{ $inscripcion->user->email ?? 'Sin email' }}</td>
                                        <td>
                                            @if(!is_null($inscripcion->aprobado_por_facilitador))
                                                {{ $inscripcion->aprobado_por_facilitador ? 'Aprobado' : 'Reprobado' }}
                                            @else
                                                Pendiente
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('facilitador.evaluate.form', $inscripcion->id) }}" class="btn btn-primary btn-sm">
                                                Evaluar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
