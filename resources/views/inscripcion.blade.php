@extends('layouts.app')

@section('title', 'Formulario de Inscripción')

@section('content')
<h1>Formulario de Inscripción</h1>

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('inscribir') }}">
    @csrf

    <!-- Datos participantes -->
    <h2 class="section-title">Datos de los participantes</h2>

    <div class="mb-3">
        <label for="nombre" class="form-label required-field">Nombre y Apellido</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre completo" required value="{{ old('nombre') }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="cedula" class="form-label required-field">Cédula</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Ingrese número de cédula" required value="{{ old('cedula') }}">
            </div>
        </div>
        <div class="col-md-6">
            <label for="estado" class="form-label required-field">Estado</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <input type="text" id="estado" name="estado" class="form-control" placeholder="Ingrese estado" required value="{{ old('estado') }}">
            </div>
        </div>
    </div>

    <!-- Selección tipo formación -->
    <h2 class="section-title">Ingrese Datos de la Formación</h2>

    <div class="mb-3">
        <label class="required-field">Tipo de Formación</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_taller" value="T" 
                {{ old('tipo_formacion') == 'T' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_taller">Taller</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_curso" value="C" 
                {{ old('tipo_formacion') == 'C' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_curso">Curso</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_diplomado" value="D" 
                {{ old('tipo_formacion') == 'D' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_diplomado">Diplomado</label>
        </div>
    </div>

    <!-- Selects dinámicos -->
    <div class="mb-3 select-grupo" id="select_taller" style="display:none;">
        <label for="taller" class="form-label">Seleccione un Taller</label>
        <select id="taller" name="taller" class="form-select">
            <option value="" disabled {{ old('taller') ? '' : 'selected' }}>Seleccione un taller</option>
            <option value="taller1" {{ old('taller') == 'taller1' ? 'selected' : '' }}>Taller de Fotografía</option>
            <option value="taller2" {{ old('taller') == 'taller2' ? 'selected' : '' }}>Taller de Cocina</option>
            <option value="taller3" {{ old('taller') == 'taller3' ? 'selected' : '' }}>Taller de Escritura Creativa</option>
        </select>
    </div>

    <div class="mb-3 select-grupo" id="select_curso" style="display:none;">
        <label for="curso" class="form-label">Seleccione un Curso</label>
        <select id="curso" name="curso" class="form-select">
            <option value="" disabled {{ old('curso') ? '' : 'selected' }}>Seleccione un curso</option>
            <option value="curso1" {{ old('curso') == 'curso1' ? 'selected' : '' }}>Curso de Programación</option>
            <option value="curso2" {{ old('curso') == 'curso2' ? 'selected' : '' }}>Curso de Inglés</option>
            <option value="curso3" {{ old('curso') == 'curso3' ? 'selected' : '' }}>Curso de Marketing Digital</option>
        </select>
    </div>

    <div class="mb-3 select-grupo" id="select_diplomado" style="display:none;">
        <label for="diplomado" class="form-label">Seleccione un Diplomado</label>
        <select id="diplomado" name="diplomado" class="form-select">
            <option value="" disabled {{ old('diplomado') ? '' : 'selected' }}>Seleccione un diplomado</option>
            <option value="diplomado1" {{ old('diplomado') == 'diplomado1' ? 'selected' : '' }}>Diplomado en Gestión Empresarial</option>
            <option value="diplomado2" {{ old('diplomado') == 'diplomado2' ? 'selected' : '' }}>Diplomado en Educación</option>
            <option value="diplomado3" {{ old('diplomado') == 'diplomado3' ? 'selected' : '' }}>Diplomado en Salud Pública</option>
        </select>
    </div>

    <!-- Datos Facilitador -->
    <h2 class="section-title">Datos del Facilitador</h2>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="facilitador" class="form-label required-field">Nombre y Apellido del Facilitador</label>
            <input type="text" id="facilitador" name="facilitador" class="form-control" required value="{{ old('facilitador') }}">
        </div>
        <div class="col-md-6">
            <label for="codigo_facilitador" class="form-label required-field">Cédula del Facilitador</label>
            <input type="text" id="codigo_facilitador" name="codigo_facilitador" class="form-control" required value="{{ old('codigo_facilitador') }}">
        </div>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-enroll-professional">
            <i class="bi bi-send-fill me-2"></i> Enviar Inscripción
        </button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tipoRadios = document.querySelectorAll('input[name="tipo_formacion"]');
        const selectTaller = document.getElementById('select_taller');
        const selectCurso = document.getElementById('select_curso');
        const selectDiplomado = document.getElementById('select_diplomado');

        function toggleSelects() {
            // Ocultar todos
            selectTaller.style.display = 'none';
            selectCurso.style.display = 'none';
            selectDiplomado.style.display = 'none';

            // Mostrar el correspondiente
            const seleccionado = document.querySelector('input[name="tipo_formacion"]:checked');
            if (!seleccionado) return;

            if (seleccionado.value === 'T') {
                selectTaller.style.display = 'block';
            } else if (seleccionado.value === 'C') {
                selectCurso.style.display = 'block';
            } else if (seleccionado.value === 'D') {
                selectDiplomado.style.display = 'block';
            }
        }

        tipoRadios.forEach(radio => {
            radio.addEventListener('change', toggleSelects);
        });

        // Ejecutar al cargar para mostrar el select correcto según old()
        toggleSelects();

        // Opcional: si quieres cargar datos desde sessionStorage (como en tu script anterior)
        const courseData = JSON.parse(sessionStorage.getItem('selected_course'));
        if (courseData) {
            const radio = document.querySelector(`input[name="tipo_formacion"][value="${courseData.tipo}"]`);
            if (radio) {
                radio.checked = true;
                const event = new Event('change', { bubbles: true, cancelable: true });
                radio.dispatchEvent(event);

                // Seleccionar opción en select correspondiente
                let selectId = '';
                switch(courseData.tipo) {
                    case 'T': selectId = 'taller'; break;
                    case 'C': selectId = 'curso'; break;
                    case 'D': selectId = 'diplomado'; break;
                }
                if (selectId) {
                    const selectEl = document.getElementById(selectId);
                    if (selectEl) {
                        for (const option of selectEl.options) {
                            if (option.text.trim() === courseData.nombre.trim()) {
                                option.selected = true;
                                break;
                            }
                        }
                    }
                }
            }
            // Limpiar para no repetir
            sessionStorage.removeItem('selected_course');
        }
    });
</script>

@endsection
