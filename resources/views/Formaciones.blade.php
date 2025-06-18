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
                            <h5 class="card-title">{{ $formacion->nombre }}</h5>

                            @if($formacion->descripcion)
                                <p class="card-text">{{ $formacion->descripcion }}</p>
                            @endif

                            <ul class="list-unstyled text-muted small">
                                <li><strong>Tipo:</strong> {{ $formacion->tipo }}</li>
                                @if($formacion->duracion)
                                    <li><strong>Duración:</strong> {{ $formacion->duracion }}</li>
                                @endif
                                @if($formacion->cupos_disponibles)
                                    <li><strong>Cupos:</strong> {{ $formacion->cupos_disponibles }}</li>
                                @endif
                                @if($formacion->disponible_hoy)
                                    <li><strong>Disponible hoy</strong></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $formaciones->links() }} <!-- paginación -->
        </div>
    @endif
</div>
@endsection
