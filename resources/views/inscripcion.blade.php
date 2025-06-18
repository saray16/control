@extends('layouts.app')

@section('title', 'Formulario de Inscripción')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Encabezado con icono -->
            <div class="text-center mb-5">
                <div class="icon-circle bg-primary text-white mb-3">
                    <i class="bi bi-pencil-square fs-3"></i>
                </div>
                <h1 class="fw-bold text-gradient">Formulario de Inscripción</h1>
                <p class="text-muted">Complete todos los campos requeridos para inscribirse en la formación</p>
            </div>

            <!-- Alertas -->
            @if (session('success'))
                <div class="alert alert-success alert-elegant alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-2 fs-4"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-elegant alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                        <div>
                            <h5 class="alert-heading mb-2">Por favor corrige los siguientes errores:</h5>
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Formulario -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="{{ route('inscribir') }}" class="needs-validation" novalidate>
                        @csrf

                        <!-- Sección 1: Datos del Participante -->
                        <div class="mb-5">
                            <div class="section-header mb-4">
                                <div class="section-icon">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <h2 class="section-title">Datos del Participante</h2>
                            </div>

                            <div class="row g-3">
                                <!-- Nombre -->
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" id="nombre" name="nombre" class="form-control" 
                                               placeholder="Nombre completo" required value="{{ old('nombre') }}">
                                        <label for="nombre" class="form-label">Nombre y Apellido <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor ingrese su nombre completo
                                        </div>
                                    </div>
                                </div>

                                <!-- Cédula y Estado -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="cedula" name="cedula" class="form-control" 
                                               placeholder="Cédula" required value="{{ old('cedula') }}"
                                               pattern="[VEve]-?\d{6,8}" title="Formato: V-12345678 o 12345678">
                                        <label for="cedula" class="form-label">Cédula <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Ingrese una cédula válida (Ej: V-12345678)
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="estado" name="estado" class="form-control" 
                                               placeholder="Estado" required value="{{ old('estado') }}">
                                        <label for="estado" class="form-label">Estado <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor ingrese su estado
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sección 2: Datos de la Formación -->
                        <div class="mb-5">
                            <div class="section-header mb-4">
                                <div class="section-icon">
                                    <i class="bi bi-book"></i>
                                </div>
                                <h2 class="section-title">Datos de la Formación</h2>
                            </div>

                            <!-- Tipo de Formación -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tipo de Formación <span class="text-danger">*</span></label>
                                <div class="d-flex flex-wrap gap-3">
                                    <div class="form-check-card">
                                        <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_taller" value="T" 
                                            {{ old('tipo_formacion') == 'T' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="tipo_taller">
                                            <i class="bi bi-tools me-2"></i> Taller
                                        </label>
                                    </div>
                                    <div class="form-check-card">
                                        <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_curso" value="C" 
                                            {{ old('tipo_formacion') == 'C' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="tipo_curso">
                                            <i class="bi bi-journal-text me-2"></i> Curso
                                        </label>
                                    </div>
                                    <div class="form-check-card">
                                        <input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_diplomado" value="D" 
                                            {{ old('tipo_formacion') == 'D' ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="tipo_diplomado">
                                            <i class="bi bi-award me-2"></i> Diplomado
                                        </label>
                                    </div>
                                </div>
                                <div class="invalid-feedback d-block">
                                    Por favor seleccione un tipo de formación
                                </div>
                            </div>

                            <!-- Selects dinámicos -->
                            <div class="row g-3">
                                <div class="col-md-12 select-grupo" id="select_taller" style="display:none;">
                                    <div class="form-floating">
                                       <!-- Select Taller -->
<select id="taller" name="taller" class="form-select" required>
    <option value="" disabled {{ old('taller') ? '' : 'selected' }}>Seleccione un taller</option>
    <option value="TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO" {{ old('taller') == 'TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO' ? 'selected' : '' }}>TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO</option>
    <option value="Taller de Cocina" {{ old('taller') == 'Taller de Cocina' ? 'selected' : '' }}>Taller de Cocina</option>
    <option value="Taller de Escritura Creativa" {{ old('taller') == 'Taller de Escritura Creativa' ? 'selected' : '' }}>Taller de Escritura Creativa</option>
</select>
                                        <label for="taller">Seleccione un Taller <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor seleccione un taller
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 select-grupo" id="select_curso" style="display:none;">
                                    <div class="form-floating">
                                        <select id="curso" name="curso" class="form-select" required>
                                            <option value="" disabled {{ old('curso') ? '' : 'selected' }}>Seleccione un curso</option>
                                            <option value="curso1" {{ old('curso') == 'curso1' ? 'selected' : '' }}>Curso de Programación</option>
                                            <option value="curso2" {{ old('curso') == 'curso2' ? 'selected' : '' }}>Curso de Inglés</option>
                                            <option value="curso3" {{ old('curso') == 'curso3' ? 'selected' : '' }}>Curso de Marketing Digital</option>
                                        </select>
                                        <label for="curso">Seleccione un Curso <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor seleccione un curso
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 select-grupo" id="select_diplomado" style="display:none;">
                                    <div class="form-floating">
                                        <select id="diplomado" name="diplomado" class="form-select" required>
                                            <option value="" disabled {{ old('diplomado') ? '' : 'selected' }}>Seleccione un diplomado</option>
                                            <option value="diplomado1" {{ old('diplomado') == 'diplomado1' ? 'selected' : '' }}>Diplomado en Gestión Empresarial</option>
                                            <option value="diplomado2" {{ old('diplomado') == 'diplomado2' ? 'selected' : '' }}>Diplomado en Educación</option>
                                            <option value="diplomado3" {{ old('diplomado') == 'diplomado3' ? 'selected' : '' }}>Diplomado en Salud Pública</option>
                                        </select>
                                        <label for="diplomado">Seleccione un Diplomado <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor seleccione un diplomado
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sección 3: Datos del Facilitador -->
                        <div class="mb-4">
                            <div class="section-header mb-4">
                                <div class="section-icon">
                                    <i class="bi bi-person-workspace"></i>
                                </div>
                                <h2 class="section-title">Datos del Facilitador</h2>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="facilitador" name="facilitador" class="form-control" 
                                               placeholder="Nombre del facilitador" required value="{{ old('facilitador') }}">
                                        <label for="facilitador" class="form-label">Nombre y Apellido <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Por favor ingrese el nombre del facilitador
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="codigo_facilitador" name="codigo_facilitador" class="form-control" 
                                               placeholder="Cédula del facilitador" required value="{{ old('codigo_facilitador') }}"
                                               pattern="[VEve]-?\d{6,8}" title="Formato: V-12345678 o 12345678">
                                        <label for="codigo_facilitador" class="form-label">Cédula <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">
                                            Ingrese una cédula válida (Ej: V-12345678)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary btn-lg px-5 py-3 fw-bold">
                                <i class="bi bi-send-fill me-2"></i> Enviar Inscripción
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos personalizados */
    :root {
        --primary-color: #4e73df;
        --secondary-color: #f8f9fc;
        --text-dark: #2c3e50;
        --text-muted: #6c757d;
        --border-radius: 0.5rem;
    }
    
    body {
        background-color: #f8f9fa;
    }
    
    .text-gradient {
        background: linear-gradient(90deg, #4e73df 0%, #224abe 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }
    
    .card {
        border: none;
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .section-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #e9ecef;
    }
    
    .section-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(78, 115, 223, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
    }
    
    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }
    
    .form-floating label {
        color: var(--text-muted);
        font-weight: 500;
    }
    
    .form-control, .form-select {
        border-radius: var(--border-radius);
        padding: 1rem 1rem;
        border: 1px solid #d1d3e2;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }
    
    .form-check-card {
        flex: 1;
        min-width: 120px;
    }
    
    .form-check-card .form-check-input {
        position: absolute;
        opacity: 0;
    }
    
    .form-check-card .form-check-label {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        border: 1px solid #d1d3e2;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }
    
    .form-check-card .form-check-input:checked + .form-check-label {
        border-color: var(--primary-color);
        background-color: rgba(78, 115, 223, 0.05);
        color: var(--primary-color);
        font-weight: 500;
    }
    
    .form-check-card .form-check-input:focus + .form-check-label {
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        border: none;
        padding: 0.75rem 2rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
    }
    
    .alert-elegant {
        border-left: 4px solid;
        border-radius: var(--border-radius);
    }
    
    .alert-success.alert-elegant {
        border-left-color: #1cc88a;
        background-color: rgba(28, 200, 138, 0.1);
    }
    
    .alert-danger.alert-elegant {
        border-left-color: #e74a3b;
        background-color: rgba(231, 74, 59, 0.1);
    }
    
    .required-field::after {
        content: " *";
        color: #e74a3b;
    }
    
    .invalid-feedback {
        font-size: 0.85rem;
    }
    
    @media (max-width: 768px) {
        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
        
        .form-check-card {
            min-width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validación de Bootstrap
        (function () {
            'use strict'
            
            const forms = document.querySelectorAll('.needs-validation')
            
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    
                    form.classList.add('was-validated')
                }, false)
            })
        })()
        
        // Manejo de selects dinámicos
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
                // Hacer required solo el select visible
                document.getElementById('taller').required = true;
                document.getElementById('curso').required = false;
                document.getElementById('diplomado').required = false;
            } else if (seleccionado.value === 'C') {
                selectCurso.style.display = 'block';
                document.getElementById('taller').required = false;
                document.getElementById('curso').required = true;
                document.getElementById('diplomado').required = false;
            } else if (seleccionado.value === 'D') {
                selectDiplomado.style.display = 'block';
                document.getElementById('taller').required = false;
                document.getElementById('curso').required = false;
                document.getElementById('diplomado').required = true;
            }
        }

        tipoRadios.forEach(radio => {
            radio.addEventListener('change', toggleSelects);
        });

        // Ejecutar al cargar para mostrar el select correcto según old()
        toggleSelects();

        // Cargar datos desde sessionStorage si existen
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
                        // Buscar por texto (no por value)
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