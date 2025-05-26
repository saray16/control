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
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_taller" value="T" {{ old('tipo_formacion') == 'T' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_taller">Taller</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_curso" value="C" {{ old('tipo_formacion') == 'C' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_curso">Curso</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_diplomado" value="D" {{ old('tipo_formacion') == 'D' ? 'checked' : '' }} required>
            <label class="form-check-label" for="tipo_diplomado">Diplomado</label>
        </div>
    </div>

    <!-- Selects por tipo -->
    <div class="mb-3" id="select_taller" style="display:none;">
        <label for="taller">Seleccione un Taller</label>
        <select id="taller" name="taller" class="form-select">
            <option value="">Seleccione un taller</option>
            <option value="taller1" {{ old('taller') == 'taller1' ? 'selected' : '' }}>Taller de Fotografía</option>
            <option value="taller2" {{ old('taller') == 'taller2' ? 'selected' : '' }}>Taller de Cocina</option>
            <option value="taller3" {{ old('taller') == 'taller3' ? 'selected' : '' }}>Taller de Escritura Creativa</option>
        </select>
    </div>

    <div class="mb-3" id="select_curso" style="display:none;">
        <label for="curso">Seleccione un Curso</label>
        <select id="curso" name="curso" class="form-select">
            <option value="">Seleccione un curso</option>
            <option value="curso1" {{ old('curso') == 'curso1' ? 'selected' : '' }}>Curso de Programación</option>
            <option value="curso2" {{ old('curso') == 'curso2' ? 'selected' : '' }}>Curso de Inglés</option>
            <option value="curso3" {{ old('curso') == 'curso3' ? 'selected' : '' }}>Curso de Marketing Digital</option>
        </select>
    </div>

    <div class="mb-3" id="select_diplomado" style="display:none;">
        <label for="diplomado">Seleccione un Diplomado</label>
        <select id="diplomado" name="diplomado" class="form-select">
            <option value="">Seleccione un diplomado</option>
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tipoRadios = document.querySelectorAll('input[name="tipo_formacion"]');
        const selectTaller = document.getElementById('select_taller');
        const selectCurso = document.getElementById('select_curso');
        const selectDiplomado = document.getElementById('select_diplomado');

        function toggleSelects() {
            const selected = [...tipoRadios].find(r => r.checked);
            selectTaller.style.display = 'none';
            selectCurso.style.display = 'none';
            selectDiplomado.style.display = 'none';

            if (!selected) return;

            if (selected.value === 'T') {
                selectTaller.style.display = 'block';
            } else if (selected.value === 'C') {
                selectCurso.style.display = 'block';
            } else if (selected.value === 'D') {
                selectDiplomado.style.display = 'block';
            }
        }

        tipoRadios.forEach(radio => {
            radio.addEventListener('change', toggleSelects);
        });

        toggleSelects();
    });
</script>

<!-- Footer -->
<footer class="bg-light mt-5 pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="#">
                    <img src="cenamec.jpeg" alt="Logo CENAMEC" style="max-width: 150px; height: auto;">
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Dirección</h5>
                <ul style="list-style:none; padding-left:0;">
                    <li>Parroquia Altagracia, Esquina de Salas, Edificio</li>
                    <li>Sede MPPE - piso 5 Zona Postal 1010, Municipio</li>
                    <li>Libertador Caracas-Venezuela</li>
                    <li>RIF: G-200087854</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Contacto</h5>
                <ul style="list-style:none; padding-left:0;">
                    <li><i class="bi bi-telephone"></i> +58 212 5638244</li>
                    <li><i class="bi bi-telephone"></i> +58 212 5648030</li>
                    <li><i class="bi bi-telephone"></i> +58 212 5640232</li>
                    <li><i class="bi bi-envelope"></i> @fundacioncenamec</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Redes Sociales</h5>
                <ul style="list-style:none; padding-left:0;">
                    <li><i class="bi bi-twitter"></i> @CenamecFormaeInforma</li>
                    <li><i class="bi bi-twitter"></i> @Funda_cenamec1</li>
                    <li><i class="bi bi-facebook"></i> @FundacionCename</li>
                    <li><i class="bi bi-instagram"></i> @FundaCenamec</li>
                </ul>
            </div>
        </div>
        <div class="text-center" style="padding:1rem 0; font-size:0.9rem; color:#666;">
            <p>© {{ date('Y') }} CENAMEC. Todos los derechos reservados</p>
        </div>
    </div>
</footer>
@endsection
