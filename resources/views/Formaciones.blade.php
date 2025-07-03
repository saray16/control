@extends('layouts.app')

@section('title', 'Formaciones Disponibles')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center">Formaciones: {{ $categoria }}</h1>

    @if($formaciones->isEmpty())
        <p class="text-center text-muted">No hay formaciones disponibles en esta categoría.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($formaciones as $formacion)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h5 class="card-title">{{ $formacion->nombre }}</h5>
                                @if($formacion->disponible_hoy)
                                    <span class="badge bg-success">Disponible hoy</span>
                                @endif
                            </div>

                            @if($formacion->descripcion)
                                <p class="card-text text-muted mb-3">{{ Str::limit($formacion->descripcion, 100) }}</p>
                            @endif

                            <div class="bg-light p-3 rounded small">
                                <div class="mb-2">
                                    <span class="fw-bold">Tipo:</span>
                                    <span class="text-capitalize">{{ $formacion->tipo }}</span>
                                </div>
                                
                                @if($formacion->duracion)
                                    <div class="mb-2">
                                        <span class="fw-bold">Duración:</span>
                                        <span>{{ $formacion->duracion }} horas académicas</span>
                                    </div>
                                @endif
                                
                                @if($formacion->facilitador)
                                    <div class="mb-2">
                                        <span class="fw-bold">Facilitador(es):</span>
                                        <span class="text-primary">{{ $formacion->facilitador }}</span>
                                    </div>
                                @endif
                                
                                @if($formacion->cupos_disponibles)
                                    <div>
                                        <span class="fw-bold">Cupos disponibles:</span>
                                        <span>{{ $formacion->cupos_disponibles }}</span>
                                    </div>
                                @endif
                            </div>
                            
                            @auth
                                @if(auth()->user()->rol === 'admin')
                                    <div class="mt-3 d-flex gap-2">
                                        <a href="{{ route('formaciones.edit', $formacion->id) }}" 
                                           class="btn btn-sm btn-outline-warning">
                                           <i class="fas fa-edit"></i> Editar
                                        </a>
                                        
                                        <form action="{{ route('formaciones.destroy', $formacion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                    onclick="return confirm('¿Seguro que deseas eliminar esta formación?')">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $formaciones->links() }}
        </div>
    @endif
</div>
@endsection