@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Subir o Actualizar Certificado PDF</h2>

    <form action="{{ route('admin.certificado.update', $inscripcion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="certificado_pdf" class="form-label">Seleccionar archivo PDF</label>
            <input type="file" name="certificado_pdf" id="certificado_pdf" class="form-control @error('certificado_pdf') is-invalid @enderror" accept="application/pdf" required>
            @error('certificado_pdf')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if($inscripcion->certificado_pdf_path)
            <p>Certificado actual: <a href="{{ asset('storage/' . $inscripcion->certificado_pdf_path) }}" target="_blank">Ver PDF</a></p>
        @endif

        <button type="submit" class="btn btn-primary">Guardar Certificado</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
