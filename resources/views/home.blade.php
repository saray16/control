@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido a la página principal</h1>

    <section class="text-center py-5">
        <h1>Todas las habilidades que necesitas en un único lugar</h1>
        <p>Desde habilidades esenciales hasta temas técnicos, CENAMEC respalda tu desarrollo profesional</p>
    </section>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button" role="tab" aria-controls="cursos" aria-selected="true">Cursos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="inscripcion-tab" data-bs-toggle="tab" data-bs-target="#inscripcion" type="button" role="tab" aria-controls="inscripcion" aria-selected="false">Inscripción</button>
        </li>
    </ul>

    <div class="tab-content py-3" id="myTabContent">
        <div class="tab-pane fade show active" id="cursos" role="tabpanel" aria-labelledby="cursos-tab">
            <h2>Cursos de Ciencias</h2>
            <div>
                <h3>ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</h3>
                <p>Este curso innovador integra metodologías activas con tecnologías emergentes...</p>
                <button class="btn btn-primary" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA')">Inscribirse</button>
            </div>
        </div>

        <div class="tab-pane fade" id="inscripcion" role="tabpanel" aria-labelledby="inscripcion-tab">
            <h2>Formulario de Inscripción</h2>
            <form action="{{ route('inscribir') }}" method="POST">
                @csrf
                <input type="hidden" id="formacion" name="formacion" value="">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Enviar Inscripción</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function setFormacion(nombreCurso) {
    document.getElementById('formacion').value = nombreCurso;
    var inscripcionTab = new bootstrap.Tab(document.querySelector('#inscripcion-tab'));
    inscripcionTab.show();
}
</script>
@endpush
