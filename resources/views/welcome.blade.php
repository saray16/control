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
            </div>

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
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="biologia"><i class="bi bi-flower3 me-2"></i>Biología</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="fisica"><i class="bi bi-eyedropper me-2"></i>Física</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="quimica"><i class="bi bi-funnel me-2"></i>Química</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="matematicas"><i class="bi bi-calculator me-2"></i>Matemática</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="artes"><i class="bi bi-palette me-2"></i>Artes</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="idiomas"><i class="bi bi-translate me-2"></i>Idiomas</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="tecnologia"><i class="bi bi-cpu me-2"></i>Tecnología</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="ambiente"><i class="bi bi-tree me-2"></i>Ambiente</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="ocev"><i class="bi bi-clipboard-data me-2"></i>OCEV</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="ajedrez"><i class="bi bi-chess me-2"></i>Ajedrez</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="lectura"><i class="bi bi-book me-2"></i>Lectura/Escritura</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="tics"><i class="bi bi-laptop me-2"></i>TICs</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="eis"><i class="bi bi-lightbulb me-2"></i>EIS</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="deporte"><i class="bi bi-trophy me-2"></i>Deporte</a></li>
                                <li class="nav-item"><a class="nav-link category-filter" href="#" data-category="hse"><i class="bi bi-shield-check me-2"></i>HSE</a></li>
                            </ul>
                        </div>
                    </div> 

                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="talleres" role="tabpanel" aria-labelledby="talleres-tab">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <button class="btn btn-primary btn-sm me-2 add-formation-btn" style="display: none;" data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="T">
                                            <i class="bi bi-plus-lg me-1"></i> Nuevo Taller
                                        </button>
                                        <h2 class="category-title mb-0 d-inline-block">Talleres Disponibles</h2>
                                    </div>
                                </div>
                                
                                <div class="row g-4" id="talleres-container">
                                    @forelse($talleres as $taller)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $taller->categoria_filtro }}" 
                                            data-hoy="{{ $taller->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $taller->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $taller->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($taller->descripcion, 100) }}</p>
                                                    <div class="course-meta">
                                                        <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $taller->rating ?? '4.5' }}</span>
                                                        <span class="course-price">Gratis</span>
                                                    </div>
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
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <button class="btn btn-primary btn-sm me-2 add-formation-btn" style="display: none;" data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="C">
                                            <i class="bi bi-plus-lg me-1"></i> Nuevo Curso
                                        </button>
                                        <h2 class="category-title mb-0 d-inline-block">Cursos Disponibles</h2>
                                    </div>
                                </div>
                                
                                <div class="row g-4" id="cursos-container">
                                    @forelse($cursos as $curso)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $curso->categoria_filtro }}" 
                                            data-hoy="{{ $curso->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $curso->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $curso->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($curso->descripcion, 100) }}</p>
                                                    <div class="course-meta">
                                                        <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $curso->rating ?? '4.5' }}</span>
                                                        <span class="course-price">Gratis</span>
                                                    </div>
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
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <button class="btn btn-primary btn-sm me-2 add-formation-btn" style="display: none;" data-bs-toggle="modal" data-bs-target="#addFormationModal" data-type="D">
                                            <i class="bi bi-plus-lg me-1"></i> Nuevo Diplomado
                                        </button>
                                        <h2 class="category-title mb-0 d-inline-block">Diplomados Disponibles</h2>
                                    </div>
                                </div>
                                <div class="row g-4" id="diplomados-container">
                                    @forelse($diplomados as $diplomado)
                                        <div class="col-md-4 mb-4 course-item" 
                                            data-category="{{ $diplomado->categoria_filtro }}" 
                                            data-hoy="{{ $diplomado->disponible_hoy ? 'true' : 'false' }}">
                                            <div class="course-card">
                                                <div class="course-img">
                                                    <i class="bi {{ $diplomado->icono }}"></i>
                                                </div>
                                                <div class="course-body">
                                                    <h3 class="course-title">{{ $diplomado->nombre }}</h3>
                                                    <p class="course-description">{{ Str::limit($diplomado->descripcion, 100) }}</p>
                                                    <div class="course-meta">
                                                        <span class="course-rating"><i class="bi bi-star-fill"></i> {{ $diplomado->rating ?? '4.5' }}</span>
                                                        <span class="course-price">Gratis</span>
                                                    </div>
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

    <div class="modal fade" id="addFormationModal" tabindex="-1" aria-labelledby="addFormationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFormationModalLabel">Añadir Nueva Formación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addFormationForm">
                        <input type="hidden" id="formationType" name="type">
                        <div class="mb-3">
                            <label for="formationName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="formationName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formationDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="formationDescription" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formationCategory" class="form-label">Categoría</label>
                            <select class="form-select" id="formationCategory" name="category" required>
                                <option value="biologia">Biología</option>
                                <option value="fisica">Física</option>
                                <option value="quimica">Química</option>
                                <option value="matematicas">Matemática</option>
                                <option value="artes">Artes</option>
                                <option value="idiomas">Idiomas</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="ambiente">Ambiente</option>
                                <option value="ocev">OCEV</option>
                                <option value="ajedrez">Ajedrez</option>
                                <option value="lectura">Lectura/Escritura</option>
                                <option value="tics">TICs</option>
                                <option value="eis">EIS</option>
                                <option value="deporte">Deporte</option>
                                <option value="hse">HSE</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="formationAvailableToday" name="available_today" checked>
                            <label class="form-check-label" for="formationAvailableToday">Disponible hoy</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="saveFormationBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mapeo de categorías
    const CATEGORY_MAP = {
        'all': {key: 'all', label: 'Todas'},
        'hoy': {key: 'hoy', label: 'Disponibles hoy'},
        'biologia': {key: 'biologia', label: 'Biología'},
        'fisica': {key: 'fisica', label: 'Física'},
        'quimica': {key: 'quimica', label: 'Química'},
        'matematicas': {key: 'matematicas', label: 'Matemática'},
        'artes': {key: 'artes', label: 'Artes'},
        'idiomas': {key: 'idiomas', label: 'Idiomas'},
        'tecnologia': {key: 'tecnologia', label: 'Tecnología'},
        'ambiente': {key: 'ambiente', label: 'Ambiente'},
        'ocev': {key: 'ocev', label: 'OCEV'},
        'ajedrez': {key: 'ajedrez', label: 'Ajedrez'},
        'lectura': {key: 'lectura', label: 'Lectura/Escritura'},
        'tics': {key: 'tics', label: 'TICs'},
        'eis': {key: 'eis', label: 'EIS'},
        'deporte': {key: 'deporte', label: 'Deporte'},
        'hse': {key: 'hse', label: 'HSE'}
    };

    let currentCategory = 'all'; 

function filterFormations(category) {
    currentCategory = category;
    const activeTab = document.querySelector('.tab-pane.fade.show.active');
    if (!activeTab) return;

    const container = activeTab.querySelector('.row.g-4');
    const courseItems = container.querySelectorAll('.course-item');
    let hasVisibleItems = false;

    courseItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        const isAvailableToday = item.getAttribute('data-hoy') === 'true';
        
        let shouldShow = false;
        
        if (category === 'all') {
            shouldShow = true;
        } else if (category === 'hoy') {
            shouldShow = isAvailableToday;
        } else {
            shouldShow = (itemCategory === category);
        }
        
        // Cambiado para usar clases en lugar de style directo
        if (shouldShow) {
            item.classList.remove('hidden');
            hasVisibleItems = true;
        } else {
            item.classList.add('hidden');
        }
    });

    updateCategoryTitle(activeTab, category);
    showNoResultsMessage(container, hasVisibleItems);
}

    function updateCategoryTitle(activeTab, category) {
        const titleElement = activeTab.querySelector('.category-title');
        if (!titleElement) return;

        const tabType = activeTab.id; // talleres, cursos, or diplomados
        const prefixes = {
            'talleres': 'Talleres',
            'cursos': 'Cursos',
            'diplomados': 'Diplomados'
        };

        if (category === 'all') {
            titleElement.textContent = `${prefixes[tabType]} Disponibles`;
        } else if (category === 'hoy') {
            titleElement.textContent = `${prefixes[tabType]} Disponibles Hoy`;
        } else {
            const categoryData = CATEGORY_MAP[category] || CATEGORY_MAP.all;
            titleElement.textContent = `${prefixes[tabType]} de ${categoryData.label}`;
        }
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

    document.querySelectorAll('.category-filter').forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');
            
          
            document.querySelectorAll('.category-filter').forEach(f => {
                f.classList.remove('active');
            });
            this.classList.add('active');
            
     
            filterFormations(category);
        });
    });

    
    document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', function() {
       
            filterFormations(currentCategory);
        });
    });

    const addFormationModal = document.getElementById('addFormationModal');
    if (addFormationModal) {
        addFormationModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const type = button.getAttribute('data-type');
            document.getElementById('formationType').value = type;
         
            document.getElementById('addFormationModalLabel').textContent = `Añadir Nuevo ${type === 'T' ? 'Taller' : (type === 'C' ? 'Curso' : 'Diplomado')}`;
        });
    }

    document.getElementById('saveFormationBtn')?.addEventListener('click', function() {

        const type = document.getElementById('formationType').value;
        const name = document.getElementById('formationName').value;
        const description = document.getElementById('formationDescription').value;
        const category = document.getElementById('formationCategory').value;
        const availableToday = document.getElementById('formationAvailableToday').checked;

        console.log({ type, name, description, category, availableToday });

        alert('Formación agregada exitosamente! (This is a simulated save)');

        const modal = bootstrap.Modal.getInstance(document.getElementById('addFormationModal'));
        modal.hide();

        filterFormations(currentCategory);
    });

    filterFormations('all');
});
</script>
@endsection