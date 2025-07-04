@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
    <section class="hero-section hero-fullwidth">
        <div class="hero-content">
            <h1 class="hero-title">Todas las habilidades que necesitas en un único lugar</h1>
            <p class="hero-subtitle">Desde habilidades esenciales hasta temas técnicos, CENAMEC respalda tu desarrollo profesional</p>
        </div>
    </section>

    <section class="py-5" style="background-color: #f8fafc;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Nuestras Formaciones</h2>
                <div class="divider mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #2c3e50, #678ca3);"></div>
                <p class="lead mt-3" style="color: #678ca3;">Programas diseñados para la excelencia educativa</p>
                <!-- Banner Plan Recreacional -->
<div class="mb-5">
    <div class="position-relative overflow-hidden rounded-4 animate__animated animate__fadeInUp" style="
        background: linear-gradient(135deg, #f8fafc, #dce5ec);
        border-left: 6px solid #2c3e50;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        transition: all 0.4s ease;
    ">
        <!-- Texto -->
        <div class="mb-3 mb-md-0" style="max-width: 65%;">
            <div class="d-flex align-items-center mb-2">
                <!-- Ícono elegante -->
                <svg width="28" height="28" viewBox="0 0 24 24" fill="#2c3e50" class="me-2">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                             10-4.48 10-10S17.52 2 12 2zm0 3a1.5 1.5 0 110 3
                             1.5 1.5 0 010-3zm1 14h-2v-2h2v2zm0-4h-2V8h2v7z"/>
                </svg>
                <h4 class="fw-bold mb-0" style="color: #2c3e50;">Plan Recreacional Institucional</h4>
            </div>
            <p class="mb-0" style="color: #5f6f81; font-size: 1.05rem;">
                Actividades participativas que fomentan el aprendizaje desde la creatividad y la recreación.
            </p>
        </div>

        <!-- Botón Interactivo -->
        <button id="recreacionalBtn" class="btn px-4 py-2 fw-semibold rounded-pill mt-3 mt-md-0" style="
            background: linear-gradient(135deg, #2c3e50, #4a6580);
            color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        " onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            Ver Detalles
        </button>

        <!-- Panel oculto con contenido -->
        <div id="panelRecreacional" style="
            display: none;
            width: 100%;
            padding: 2rem 1.5rem;
            margin-top: 2rem;
            background: rgba(255, 255, 255, 0.75);
            border-radius: 1rem;
            backdrop-filter: blur(6px);
            box-shadow: inset 0 0 20px rgba(44,62,80,0.05);
            animation: slideDown 0.4s ease-out forwards;
        ">
            <div class="row">
                <!-- Tarjeta 1 -->
                <div class="col-md-4 mb-3">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background: #f2f6fa;">
                        <div class="mb-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#4a6580">
                                <path d="M3 13h2v-2H3v2zm4 0h14v-2H7v2zm0 4h10v-2H7v2zm0-8h14V7H7v2z"/>
                            </svg>
                        </div>
                        <h6 class="fw-bold mb-1" style="color:#2c3e50;">Talleres Recreativos</h6>
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sesiones diseñadas para promover habilidades blandas mediante el juego.</p>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="col-md-4 mb-3">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background: #f2f6fa;">
                        <div class="mb-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#4a6580">
                                <path d="M12 2L1.5 9l10.5 7 10.5-7L12 2zm0 2.18L19.5 9 12 13.82 4.5 9 12 4.18z"/>
                            </svg>
                        </div>
                        <h6 class="fw-bold mb-1" style="color:#2c3e50;">Dinámicas Grupales</h6>
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Actividades que fortalecen el trabajo en equipo y el pensamiento creativo.</p>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="col-md-4 mb-3">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background: #f2f6fa;">
                        <div class="mb-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#4a6580">
                                <path d="M5 5v14h14V5H5zm2 2h10v10H7V7z"/>
                            </svg>
                        </div>
                        <h6 class="fw-bold mb-1" style="color:#2c3e50;">Material Audiovisual</h6>
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Recursos didácticos complementarios para reforzar la experiencia recreacional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<script>
 document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("recreacionalBtn");
        const panel = document.getElementById("panelRecreacional");

        btn.addEventListener("click", function() {
            panel.style.display = (panel.style.display === "none" || panel.style.display === "") ? "block" : "none";
        });
    });
    </script>
=======

>>>>>>> 6f70c06 (Últimos cambios)
<!-- Animación personalizada -->
<style>
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
<<<<<<< HEAD

</style>

     </div>
=======
</style>

<!-- Script de interacción -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("recreacionalBtn");
        const panel = document.getElementById("panelRecreacional");

        btn.addEventListener("click", function() {
            panel.style.display = (panel.style.display === "none" || panel.style.display === "") ? "block" : "none";
        });
    });
</script>



            </div>
>>>>>>> 6f70c06 (Últimos cambios)


            <ul class="nav nav-tabs justify-content-center mb-4" id="formacionesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="talleres-tab" data-bs-toggle="tab" data-bs-target="#talleres" type="button" role="tab" aria-controls="talleres" aria-selected="true" style="color:rgb(80, 44, 44); font-weight: 600;">
                        Talleres
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button" role="tab" aria-controls="cursos" aria-selected="false" style="color:#808080; font-weight: 600;">
                        Cursos
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="diplomados-tab" data-bs-toggle="tab" data-bs-target="#diplomados" type="button" role="tab" aria-controls="diplomados" aria-selected="false" style="color: #2c3e50; font-weight: 600;">
                        Diplomados
                    </button>
                </li>
            </ul>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-lg-2 d-md-block sidebar px-0">
                        <div class="sidebar-sticky pt-3">
                            <h3 class="sidebar-heading px-3 mb-3">Categorías de Formación</h3>
                            <ul class="nav flex-column" id="category-filters">
                                <li class="nav-item"><a class="nav-link category-filter active" href="#" data-category="all"><i class="bi bi-grid-fill me-2"></i>Todas</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="hoy"><i class="bi bi-check2-circle me-2"></i>Disponibles hoy</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Biología"><i class="bi bi-flower3 me-2"></i>Biología</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Física"><i class="bi bi-eyedropper me-2"></i>Física</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Química"><i class="bi bi-funnel me-2"></i>Química</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Matemática"><i class="bi bi-calculator me-2"></i>Matemática</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Artes"><i class="bi bi-palette me-2"></i>Artes</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Idiomas"><i class="bi bi-translate me-2"></i>Idiomas</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Tecnología"><i class="bi bi-cpu me-2"></i>Tecnología</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Ambiente"><i class="bi bi-tree me-2"></i>Ambiente</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="OCEV"><i class="bi bi-clipboard-data me-2"></i>OCEV</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Ajedrez"><i class="bi bi-chess me-2"></i>Ajedrez</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Lectura/Escritura"><i class="bi bi-book me-2"></i>Lectura/Escritura</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="TICs"><i class="bi bi-laptop me-2"></i>TICs</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="EIS"><i class="bi bi-lightbulb me-2"></i>EIS</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="Deporte"><i class="bi bi-trophy me-2"></i>Deporte</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="HSE"><i class="bi bi-shield-check me-2"></i>HSE</a></li>
                            </ul>
                        </div>
                    </div> 

                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="talleres" role="tabpanel" aria-labelledby="talleres-tab">
                                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                                    <h2 class="category-title m-0">Talleres Disponibles</h2>
                                    
                                     @auth
        @if(auth()->user()->rol === 'admin')
            <button class="btn btn-success btn-sm add-formation-btn" 
                data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="T">
                <i class="bi bi-plus-lg me-1"></i> Agregar Taller
            </button>
        @endif
    @endauth
                                </div>
                                
                                <div class="row g-4" id="talleres-container">
                                    @forelse($talleres as $taller)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $taller->categoria }}" 
                                            data-hoy="{{ $taller->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $taller->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $taller->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($taller->descripcion, 100) }}</p>
             <div class="course-meta">
                
    @if($taller->duracion)
        <div class="duration-above-rating">
            <i class="bi bi-clock"></i> {{ $taller->duracion }} horas
        </div>
    @endif
    <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $taller->rating ?? '4.5' }}</span>
    <span class="course-price">Gratis</span>
</div>
  @if($taller->facilitador)
        <div class="facilitador-info mt-2 small">
            <span class="fw-bold">Facilitador:</span>
            <span class="text-primary">{{ $taller->facilitador }}</span>
        </div>
    @endif
                                                    @auth
                                                        @if(auth()->user()->rol === 'admin')
                                                            <div class="d-flex gap-2 mt-2">
                                                                <!-- Botón Editar con modal -->
                                                                  <button class="btn btn-sm btn-outline-verde-cenamec flex-grow-1 edit-formation-btn"
                                                                    data-bs-toggle="modal" 
                                                                    data-bs-target="#editFormationModal"
                                                                    data-id="{{ $taller->id }}"
                                                                    data-tipo="T"
                                                                    data-nombre="{{ $taller->nombre }}"
                                                                    data-descripcion="{{ $taller->descripcion }}"
                                                                    data-categoria="{{ $taller->categoria }}"
                                                                    data-duracion="{{ $taller->duracion }}"
                                                                    data-disponible="{{ $taller->disponible_hoy ? '1' : '0' }}"
                                                                    data-facilitador="{{ $taller->facilitador }}">
                                                                    <i class="bi bi-pencil-fill"></i> Editar
                                                                </button>
                                                                <form action="{{ route('formaciones.destroy', $taller->id) }}" method="POST" class="flex-grow-1">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" 
                                                                            class="btn btn-sm btn-outline-danger w-100"
                                                                            onclick="return confirm('¿Estás seguro de eliminar esta formación?')">
                                                                        <i class="bi bi-trash-fill"></i> Eliminar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    
                                                    @if($taller->disponible_hoy)
                                                    <a href="{{ route('inscripcion.formulario', ['tipo' => 'T', 'formacion_id' => $taller->id]) }}" class="btn btn-enroll w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                        <span>Inscribirse</span>
                                                    </a>
                                                    @else
                                                    <button class="btn btn-unavailable w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="bi bi-x-circle"></i>
                                                        <span>No Disponible</span>
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 text-center py-4">
                                            <div class="alert alert-info">No hay talleres disponibles en este momento</div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cursos" role="tabpanel" aria-labelledby="cursos-tab">
                                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                                    <h2 class="category-title m-0">Cursos Disponibles</h2>
                                       @auth
        @if(auth()->user()->rol === 'admin')
            <button class="btn btn-success btn-sm add-formation-btn" 
                data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="C">
                <i class="bi bi-plus-lg me-1"></i> Agregar Curso
            </button>
        @endif
    @endauth
                                </div>
                                
                                <div class="row g-4" id="cursos-container">
                                    @forelse($cursos as $curso)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $curso->categoria }}" 
                                            data-hoy="{{ $curso->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $curso->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $curso->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($curso->descripcion, 100) }}</p>
                                                          <div class="course-meta">
    @if($curso->duracion)
        <div class="duration-above-rating">
            <i class="bi bi-clock"></i> {{ $curso->duracion }} horas
        </div>
    @endif
    <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $curso->rating ?? '4.5' }}</span>
    <span class="course-price">Gratis</span>
</div>
  @if($curso->facilitador)
        <div class="facilitador-info mt-2 small">
            <span class="fw-bold">Facilitador:</span>
            <span class="text-primary">{{ $curso->facilitador }}</span>
        </div>
    @endif
                                                    @auth
                                                        @if(auth()->user()->rol === 'admin')
                                                            <div class="d-flex gap-2 mt-2">
                                                                <!-- Botón Editar con modal -->
                                                                 <button class="btn btn-sm btn-outline-verde-cenamec flex-grow-1 edit-formation-btn"
                                                                    data-bs-toggle="modal" 
                                                                    data-bs-target="#editFormationModal"
                                                                    data-id="{{ $curso->id }}"
                                                                    data-tipo="C"
                                                                    data-nombre="{{ $curso->nombre }}"
                                                                    data-descripcion="{{ $curso->descripcion }}"
                                                                    data-categoria="{{ $curso->categoria }}"
                                                                    data-duracion="{{ $curso->duracion }}"
                                                                    data-disponible="{{ $curso->disponible_hoy ? '1' : '0' }}"
                                                                       data-facilitador="{{ $curso->facilitador }}">
                                                                    <i class="bi bi-pencil-fill"></i> Editar
                                                                </button>
                                                                <form action="{{ route('formaciones.destroy', $curso->id) }}" method="POST" class="flex-grow-1">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" 
                                                                            class="btn btn-sm btn-outline-danger w-100"
                                                                            onclick="return confirm('¿Estás seguro de eliminar esta formación?')">
                                                                        <i class="bi bi-trash-fill"></i> Eliminar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    
                                                    @if($curso->disponible_hoy)
                                                    <a href="{{ route('inscripcion.formulario', ['tipo' => 'C', 'formacion_id' => $curso->id]) }}" class="btn btn-enroll w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                        <span>Inscribirse</span>
                                                    </a>
                                                    @else
                                                    <button class="btn btn-unavailable w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="bi bi-x-circle"></i>
                                                        <span>No Disponible</span>
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 text-center py-4">
                                            <div class="alert alert-info">No hay cursos disponibles en este momento</div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                            <div class="tab-pane fade" id="diplomados" role="tabpanel" aria-labelledby="diplomados-tab">
                                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                                    <h2 class="category-title m-0">Diplomados Disponibles</h2>
                                       @auth
        @if(auth()->user()->rol === 'admin')
            <button class="btn btn-success btn-sm add-formation-btn" 
                data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="D">
                <i class="bi bi-plus-lg me-1"></i> Agregar Diplomado
            </button>
        @endif
    @endauth
                                </div>
                                
                                <div class="row g-4" id="diplomados-container">
                                    @forelse($diplomados as $diplomado)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $diplomado->categoria }}" 
                                            data-hoy="{{ $diplomado->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $diplomado->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $diplomado->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($diplomado->descripcion, 100) }}</p>
                                                         <div class="course-meta">
    @if($diplomado->duracion)
        <div class="duration-above-rating">
            <i class="bi bi-clock"></i> {{ $diplomado->duracion }} horas
        </div>
    @endif
    <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $diplomado->rating ?? '4.5' }}</span>
    <span class="course-price">Gratis</span>
</div>
  @if($diplomado->facilitador)
        <div class="facilitador-info mt-2 small">
            <span class="fw-bold">Facilitador:</span>
            <span class="text-primary">{{ $diplomado->facilitador }}</span>
        </div>
    @endif
                                                    @auth
                                                        @if(auth()->user()->rol === 'admin')
                                                            <div class="d-flex gap-2 mt-2">
                                                                <!-- Botón Editar con modal -->
                                                               <button class="btn btn-sm btn-outline-verde-cenamec flex-grow-1 edit-formation-btn"
                                                                    data-bs-toggle="modal" 
                                                                    data-bs-target="#editFormationModal"
                                                                    data-id="{{ $diplomado->id }}"
                                                                    data-tipo="D"
                                                                    data-nombre="{{ $diplomado->nombre }}"
                                                                    data-descripcion="{{ $diplomado->descripcion }}"
                                                                    data-categoria="{{ $diplomado->categoria }}"
                                                                    data-duracion="{{ $diplomado->duracion }}"
                                                                    data-disponible="{{ $diplomado->disponible_hoy ? '1' : '0' }}"
                                                                       data-facilitador="{{ $diplomado->facilitador }}">
                                                                    <i class="bi bi-pencil-fill"></i> Editar
                                                                </button>
                                                                <form action="{{ route('formaciones.destroy', $diplomado->id) }}" method="POST" class="flex-grow-1">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" 
                                                                            class="btn btn-sm btn-outline-danger w-100"
                                                                            onclick="return confirm('¿Estás seguro de eliminar esta formación?')">
                                                                        <i class="bi bi-trash-fill"></i> Eliminar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    @endauth
                                                    
                                                    @if($diplomado->disponible_hoy)
                                                    <a href="{{ route('inscripcion.formulario', ['tipo' => 'D', 'formacion_id' => $diplomado->id]) }}" class="btn btn-enroll w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="fas fa-sign-in-alt"></i>
                                                        <span>Inscribirse</span>
                                                    </a>
                                                    @else
                                                    <button class="btn btn-unavailable w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                                        <i class="bi bi-x-circle"></i>
                                                        <span>No Disponible</span>
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 text-center py-4">
                                            <div class="alert alert-info">No hay diplomados disponibles en este momento</div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para agregar formación -->
    <div class="modal fade" id="addFormationModal" tabindex="-1" aria-labelledby="addFormationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #2c3e50, #678ca3);">
                    <h5 class="modal-title fs-4 fw-bold" id="addFormationModalLabel">
                        <i class="bi bi-plus-circle me-2"></i>Añadir Nueva Formación
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addFormationForm" action="{{ route('formaciones.store') }}" method="POST">
                    @csrf
                    <input type="hidden" id="formationType" name="tipo">
                    <div class="modal-body py-4">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="formationName" name="nombre" required>
                                    <label for="formationName">Nombre *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" id="formationDescription" name="descripcion" required></textarea>
                                    <label for="formationDescription">Descripción *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <select class="form-select" id="formationCategory" name="categoria" required>
                                        <option value=""></option>
                                        <option value="Biología">Biología</option>
                                        <option value="Física">Física</option>
                                        <option value="Química">Química</option>
                                        <option value="Matemática">Matemática</option>
                                        <option value="Artes">Artes</option>
                                        <option value="Idiomas">Idiomas</option>
                                        <option value="Tecnología">Tecnología</option>
                                        <option value="Ambiente">Ambiente</option>
                                        <option value="OCEV">OCEV</option>
                                        <option value="Ajedrez">Ajedrez</option>
                                        <option value="Lectura/Escritura">Lectura/Escritura</option>
                                        <option value="TICs">TICs</option>
                                        <option value="EIS">EIS</option>
                                        <option value="Deporte">Deporte</option>
                                        <option value="HSE">HSE</option>
                                    </select>
                                    <label for="formationCategory">Categoría *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="number" class="form-control" id="formationDuration" name="duracion">
                                    <label for="formationDuration">Duración (horas)</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="formationAvailableToday" name="disponible_hoy" value="1">
                                    <label class="form-check-label" for="formationAvailableToday">Disponible hoy</label>
                         

                                </div>
                                <div class="form-floating mb-4">
    <input type="text" class="form-control" id="editFormationFacilitador" name="facilitador">
    <label for="editFormationFacilitador">Facilitador(es)</label>
    <small class="text-muted">Separa múltiples facilitadores con comas</small>
</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Formación</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 
    <!-- Modal para editar formación -->
<<<<<<< HEAD
<!-- Modal para editar formación - Código corregido -->
=======
>>>>>>> 6f70c06 (Últimos cambios)
<div class="modal fade" id="editFormationModal" tabindex="-1" aria-labelledby="editFormationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #2c3e50, #678ca3);">
                <h5 class="modal-title fs-4 fw-bold" id="editFormationModalLabel">
                    <i class="bi bi-pencil-square me-2"></i>Editar 
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editFormationForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" id="editFormationId" name="id">
                <input type="hidden" id="editFormationType" name="tipo">
                <div class="modal-body py-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="editFormationName" name="nombre" required>
                                <label for="editFormationName">Nombre *</label>
                            </div>
                            <div class="form-floating mb-4">
<<<<<<< HEAD
=======
                                <!-- Cambio principal aquí: textarea con más rows y estilo -->
>>>>>>> 6f70c06 (Últimos cambios)
                                <textarea class="form-control" id="editFormationDescription" name="descripcion" style="min-height: 150px;" rows="5" required></textarea>
                                <label for="editFormationDescription">Descripción *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <select class="form-select" id="editFormationCategory" name="categoria" required>
                                    <option value=""></option>
                                    <option value="Biología">Biología</option>
                                    <option value="Física">Física</option>
                                    <option value="Química">Química</option>
                                    <option value="Matemática">Matemática</option>
                                    <option value="Artes">Artes</option>
                                    <option value="Idiomas">Idiomas</option>
                                    <option value="Tecnología">Tecnología</option>
                                    <option value="Ambiente">Ambiente</option>
                                    <option value="OCEV">OCEV</option>
                                    <option value="Ajedrez">Ajedrez</option>
                                    <option value="Lectura/Escritura">Lectura/Escritura</option>
                                    <option value="TICs">TICs</option>
                                    <option value="EIS">EIS</option>
                                    <option value="Deporte">Deporte</option>
                                    <option value="HSE">HSE</option>
                                </select>
                                <label for="editFormationCategory">Categoría *</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="number" class="form-control" id="editFormationDuration" name="duracion">
                                <label for="editFormationDuration">Duración (horas)</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="editFormationAvailableToday" name="disponible_hoy" value="1">
                                <label class="form-check-label" for="editFormationAvailableToday">Disponible hoy</label>
                            </div>
<<<<<<< HEAD
                            <!-- Campo agregado para el facilitador -->
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="editFormationFacilitador" name="facilitador">
                                <label for="editFormationFacilitador">Facilitador(es)</label>
                                <small class="text-muted">Separa múltiples facilitadores con comas</small>
                            </div>
=======
>>>>>>> 6f70c06 (Últimos cambios)
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar Formación</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
   
document.addEventListener('DOMContentLoaded', function() {
    // Mapeo de categorías
    const CATEGORY_MAP = {
        'all': {key: 'all', label: 'Todas'},
        'hoy': {key: 'hoy', label: 'Disponibles hoy'},
        'Biología': {key: 'Biología', label: 'Biología'},
        'Física': {key: 'Física', label: 'Física'},
        'Química': {key: 'Química', label: 'Química'},
        'Matemática': {key: 'Matemática', label: 'Matemática'},
        'Artes': {key: 'Artes', label: 'Artes'},
        'Idiomas': {key: 'Idiomas', label: 'Idiomas'},
        'Tecnología': {key: 'Tecnología', label: 'Tecnología'},
        'Ambiente': {key: 'Ambiente', label: 'Ambiente'},
        'OCEV': {key: 'OCEV', label: 'OCEV'},
        'Ajedrez': {key: 'Ajedrez', label: 'Ajedrez'},
        'Lectura/Escritura': {key: 'Lectura/Escritura', label: 'Lectura/Escritura'},
        'TICs': {key: 'TICs', label: 'TICs'},
        'EIS': {key: 'EIS', label: 'EIS'},
        'Deporte': {key: 'Deporte', label: 'Deporte'},
        'HSE': {key: 'HSE', label: 'HSE'}
    };

    let currentCategory = 'all';

    function filterFormations(category) {
        currentCategory = category;
        const activeTab = document.querySelector('.tab-pane.fade.show.active');
        if (!activeTab) return;

        const container = activeTab.querySelector('.row.g-4');
        if (!container) return;

        const courseItems = container.querySelectorAll('.course-item');
        let hasVisibleItems = false;

        courseItems.forEach(item => {
            const itemCategory = item.dataset.category;
            const isAvailableToday = item.dataset.hoy === 'true';
            
            let shouldShow = false;
            
            if (category === 'all') {
                shouldShow = true;
            } else if (category === 'hoy') {
                shouldShow = isAvailableToday;
            } else {
                shouldShow = itemCategory === category;
            }
            
            item.style.display = shouldShow ? 'block' : 'none';
            if (shouldShow) hasVisibleItems = true;
        });

        updateCategoryTitle(activeTab, category);
        showNoResultsMessage(container, hasVisibleItems);
    }

    function updateCategoryTitle(activeTab, category) {
        const titleElement = activeTab.querySelector('.category-title');
        if (!titleElement) return;

        const tabType = activeTab.id;
        const prefixes = {
            'talleres': 'Talleres',
            'cursos': 'Cursos',
            'diplomados': 'Diplomados'
        };

        const baseTitle = prefixes[tabType] || '';
        const categoryData = CATEGORY_MAP[category] || CATEGORY_MAP.all;
        
        titleElement.textContent = category === 'all' ? `${baseTitle} Disponibles` :
                                 category === 'hoy' ? `${baseTitle} Disponibles Hoy` :
                                 `${baseTitle} de ${categoryData.label}`;
    }

    function showNoResultsMessage(container, hasVisibleItems) {
        const existingMessages = container.querySelectorAll('.no-results-message');
        existingMessages.forEach(msg => msg.remove());

        if (!hasVisibleItems) {
            const message = document.createElement('div');
            message.className = 'col-12 text-center py-4 no-results-message';
            message.innerHTML = '<div class="alert alert-info">No hay formaciones disponibles en esta categoría</div>';
            container.appendChild(message);
        }
    }

    // Event Listeners
    document.querySelectorAll('.category-filter').forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.category-filter').forEach(f => f.classList.remove('active'));
            this.classList.add('active');
            filterFormations(this.dataset.category);
        });
    });

    // Manejar cambios de pestaña
    const tabEls = document.querySelectorAll('button[data-bs-toggle="tab"]');
    tabEls.forEach(tabEl => {
        tabEl.addEventListener('shown.bs.tab', () => {
            filterFormations(currentCategory);
        });
    });

    // Configurar el modal de edición
    const editFormationModal = document.getElementById('editFormationModal');
    if (editFormationModal) {
        editFormationModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            
            // Obtener los datos del botón
            const id = button.getAttribute('data-id');
            const tipo = button.getAttribute('data-tipo');
            const nombre = button.getAttribute('data-nombre');
            const descripcion = button.getAttribute('data-descripcion');
            const categoria = button.getAttribute('data-categoria');
            const duracion = button.getAttribute('data-duracion');
            const disponible = button.getAttribute('data-disponible') === '1';
<<<<<<< HEAD
            const facilitador = button.getAttribute('data-facilitador');
=======
                const facilitador = button.getAttribute('data-facilitador');
>>>>>>> 6f70c06 (Últimos cambios)
            
            // Configurar el formulario de edición
            const form = document.getElementById('editFormationForm');
            form.action = `/formaciones/${id}`;
            
            // Llenar los campos del formulario
            document.getElementById('editFormationId').value = id;
            document.getElementById('editFormationType').value = tipo;
            document.getElementById('editFormationName').value = nombre;
            document.getElementById('editFormationDescription').value = descripcion;
            document.getElementById('editFormationCategory').value = categoria;
            document.getElementById('editFormationDuration').value = duracion || '';
            document.getElementById('editFormationAvailableToday').checked = disponible;
<<<<<<< HEAD
            document.getElementById('editFormationFacilitador').value = facilitador || '';
=======
                document.getElementById('editFormationFacilitador').value = facilitador || '';
>>>>>>> 6f70c06 (Últimos cambios)
            
            // Actualizar el título del modal según el tipo
            let tipoTexto = '';
            switch(tipo) {
                case 'T': tipoTexto = 'Taller'; break;
                case 'C': tipoTexto = 'Curso'; break;
                case 'D': tipoTexto = 'Diplomado'; break;
            }
            document.getElementById('editFormationModalLabel').innerHTML = 
                `<i class="bi bi-pencil-square me-2"></i>Editar ${tipoTexto}`;
        });

        // Manejar el envío del formulario de edición
        document.getElementById('editFormationForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = e.target;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Actualizando...';

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'X-HTTP-Method-Override': 'PUT'
                    },
                    body: JSON.stringify({
                        nombre: form.nombre.value,
                        descripcion: form.descripcion.value,
                        tipo: form.tipo.value,
                        categoria: form.categoria.value,
                        duracion: form.duracion.value || null,
                        disponible_hoy: form.disponible_hoy.checked,
                         facilitador: form.facilitador.value || null,
<<<<<<< HEAD
                         
=======
>>>>>>> 6f70c06 (Últimos cambios)
                        _method: 'PUT'
                    })
                });

                const data = await response.json();

                if (!response.ok) {
                    if (data.errors) {
                        const errorMessages = Object.values(data.errors).flat();
                        throw new Error(errorMessages.join('\n'));
                    }
                    throw new Error(data.message || 'Error en el servidor');
                }

                // Éxito - recargar la página
                window.location.reload();

            } catch (error) {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.message,
                    confirmButtonText: 'Entendido'
                });
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }

    // Formulario de nueva formación
    const addFormationModal = document.getElementById('addFormationModal');
    if (addFormationModal) {
        addFormationModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const type = button.getAttribute('data-type');
            document.getElementById('formationType').value = type;
            document.getElementById('addFormationForm').reset();
            
            // Actualizar el título del modal según el tipo
            let tipoTexto = '';
            switch(type) {
                case 'T': tipoTexto = 'Taller'; break;
                case 'C': tipoTexto = 'Curso'; break;
                case 'D': tipoTexto = 'Diplomado'; break;
            }
            document.getElementById('addFormationModalLabel').innerHTML = 
                `<i class="bi bi-plus-circle me-2"></i>Añadir Nuevo ${tipoTexto}`;
        });

        document.getElementById('addFormationForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const form = e.target;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Guardando...';

            try {
                const formData = {
                    nombre: form.nombre.value,
                    descripcion: form.descripcion.value,
                    tipo: form.tipo.value,
                    categoria: form.categoria.value,
                    duracion: form.duracion.value || null,
                    disponible_hoy: form.disponible_hoy.checked,
<<<<<<< HEAD
                     facilitador: form.facilitador.value || null,
=======
>>>>>>> 6f70c06 (Últimos cambios)
                    _token: document.querySelector('meta[name="csrf-token"]').content
                };

                if (!formData.tipo) {
                    throw new Error('Debe seleccionar un tipo de formación');
                }

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (!response.ok) {
                    if (data.errors) {
                        const errorMessages = Object.values(data.errors).flat();
                        throw new Error(errorMessages.join('\n'));
                    }
                    throw new Error(data.message || 'Error en el servidor');
                }

                window.location.reload();

            } catch (error) {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.message,
                    confirmButtonText: 'Entendido'
                });
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }

    // Inicialización
    filterFormations('all');
});

</script>
@endsection