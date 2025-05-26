@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Todas las habilidades que necesitas en un único lugar</h1>
            <p class="hero-subtitle">Desde habilidades esenciales hasta temas técnicos, CENAMEC respalda tu desarrollo profesional</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mt-4">
        <!-- Navigation Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button" role="tab" aria-controls="cursos" aria-selected="true">
                    <i class="bi bi-journal-bookmark-fill me-2"></i>Cursos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="diplomados-tab" data-bs-toggle="tab" data-bs-target="#diplomados" type="button" role="tab" aria-controls="diplomados" aria-selected="false">
                    <i class="bi bi-award-fill me-2"></i>Diplomados
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="talleres-tab" data-bs-toggle="tab" data-bs-target="#talleres" type="button" role="tab" aria-controls="talleres" aria-selected="false">
                    <i class="bi bi-tools me-2"></i>Talleres
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="inscripcion-tab" data-bs-toggle="tab" data-bs-target="#inscripcion" type="button" role="tab" aria-controls="inscripcion" aria-selected="false">
                    <i class="bi bi-pencil-square me-2"></i>Inscripción
                </button>
            </li>
        </ul>

        <div class="tab-content py-4" id="myTabContent">
            <!-- Cursos -->
            <div class="tab-pane fade show active" id="cursos" role="tabpanel">
                <h2 class="category-title">Cursos de Ciencias</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="course-card science-card">
                            <div class="course-img">
                                <i class="bi bi-robot"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</h3>
                                <p class="course-description">Este curso innovador integra metodologías activas con tecnologías emergentes para la enseñanza de la biología. Aprenderás a diseñar experiencias de aprendizaje significativas, utilizando modelos didácticos contemporáneos y recursos digitales interactivos que potencian la comprensión de conceptos biológicos complejos.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.3
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card math-card">
                            <div class="course-img">
                                <i class="bi bi-calculator"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">FRACCIONES MATEMÁTICAS</h3>
                                <p class="course-description">Dominio pedagógico de las fracciones matemáticas, desde conceptos básicos hasta aplicaciones avanzadas. El curso incluye estrategias para superar dificultades de aprendizaje, diseño de materiales didácticos y enfoques lúdicos que facilitan la enseñanza de este tema fundamental en matemáticas.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.5
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('FRACCIONES MATEMÁTICAS')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card">
                            <div class="course-img">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ARDUINO NIVEL 1</h3>
                                <p class="course-description">Introducción práctica a la programación con Arduino, ideal para educadores STEM. Desarrollarás proyectos interactivos que integran electrónica básica, sensores y actuadores, aprendiendo a aplicar estos conocimientos en contextos educativos para fomentar el pensamiento computacional y la creatividad tecnológica.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.7
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ARDUINO NIVEL 1')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card">
                            <div class="course-img">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ESCRITURA CREATIVA EN ESCENA</h3>
                                <p class="course-description">Taller vivencial que explora técnicas de escritura creativa aplicadas al teatro. A través de ejercicios prácticos, desarrollarás habilidades para crear personajes memorables, estructurar diálogos efectivos y construir narrativas escénicas impactantes, todo dentro de un enfoque pedagógico aplicable en el aula.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.2
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ESCRITURA CREATIVA EN ESCENA')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card math-card">
                            <div class="course-img">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">LAS MEDIDAS DEL MUNDO</h3>
                                <p class="course-description">Exploración interdisciplinaria de los sistemas de medición a través de la historia y sus aplicaciones modernas. El curso combina fundamentos científicos con enfoques pedagógicos innovadores, incluyendo experimentos prácticos y actividades colaborativas para enseñar medición en contextos reales.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.0
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('LAS MEDIDAS DEL MUNDO')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cursos de IA Generativa -->
                <h2 class="category-title mt-5">Cursos de Tecnología Avanzada</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="course-card ia-card">
                            <div class="course-img">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</h3>
                                <p class="course-description">Versión avanzada que integra inteligencia artificial en la enseñanza de biología. Aprenderás a utilizar herramientas de IA para crear simulaciones personalizadas, generar contenido educativo adaptativo y analizar el progreso de los estudiantes, todo dentro de un marco pedagógico sólido.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.6
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card ia-card">
                            <div class="course-img">
                                <i class="bi bi-robot"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">Curso Completo de IA Generativa: ChatGPT, Midjourney y más!</h3>
                                <p class="course-description">Dominio profesional de las herramientas más avanzadas de IA generativa. Desde generación de texto con ChatGPT hasta creación de imágenes con Midjourney, aprenderás a integrar estas tecnologías en tu práctica docente, creación de materiales educativos y procesos de evaluación innovadores.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.8
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('Curso Completo de IA Generativa: ChatGPT, Midjourney y más!')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card ia-card">
                            <div class="course-img">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">Inteligencia artificial. Herramientas para tu trabajo</h3>
                                <p class="course-description">Curso práctico que te enseñará a integrar IA en tu flujo de trabajo educativo. Automatiza tareas administrativas, genera informes personalizados, crea materiales didácticos dinámicos y desarrolla sistemas de tutoría inteligente, optimizando tu tiempo y mejorando los resultados de aprendizaje.</p>
                                <div class="course-meta">
                                    <span class="course-rating">
                                        <i class="bi bi-star-fill"></i>4.4
                                    </span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('Inteligencia artificial. Herramientas para tu trabajo')">
                                    <i class="bi bi-pencil"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Diplomados -->
            <div class="tab-pane fade" id="diplomados" role="tabpanel">
                <h2 class="category-title">Diplomados profesionales</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="course-card diploma-card">
                            <div class="course-img">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">DIPLOMADO DIDACTICA DEL TEATRO Y LA ORGANICIDAD DEL ACTOR</h3>
                                <p class="course-description">Programa integral de 6 meses que combina teoría teatral con práctica pedagógica. Desarrollarás competencias para diseñar programas educativos en artes escénicas, utilizando técnicas de expresión corporal, improvisación guiada y metodologías participativas que fomentan la creatividad en el aula.</p>
                                <div class="course-meta">
                                <span class="course-rating">4.5 ★★★★☆</span>
                                    <span class="course-price">Gratis</span>
                                    </span>
                                   
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('DIPLOMADO DIDACTICA DEL TEATRO Y LA ORGANICIDAD DEL ACTOR (ENERO-MAYO2023)')">
                                    Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card">
                            <div class="course-img">
                                <i class="bi bi-flask" style="font-size: 3rem;"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA</h3>
                                <p class="course-description">Programa avanzado que combina teoría y práctica para transformar la enseñanza de la química mediante metodologías innovadoras y experimentación.</p>
                                <div class="course-meta">
                                    <span class="course-rating">4.5 ★★★★☆</span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA')">
                                    Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="course-card">
                            <div class="course-img">
                                <i class="bi bi-lightning" style="font-size: 3rem;"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA</h3>
                                <p class="course-description">Enfoque práctico para enseñar física mediante experimentos, simulaciones y tecnologías educativas que facilitan la comprensión de conceptos complejos.</p>
                                <div class="course-meta">
                                    <span class="course-rating">4.8 ★★★★★</span>
                                    <span class="course-price">Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA')">
                                    Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diplomados destacados -->
                <h2 class="category-title mt-5">Diplomados destacados</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="course-card">
                            <div class="course-img">
                                <i class="bi bi-search" style="font-size: 3rem;"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">DIPLOMADO INVESTIGACIÓN SOCIOCRÍTICA EN CIENCIAS NATURALES, MATEMÁTICA O TECNOLOGÍA</h3>
                                <p class="course-description">Formación en metodologías de investigación crítica aplicadas a las ciencias, con enfoque en la transformación de prácticas educativas mediante la indagación.</p>
                                <div class="course-meta">
                                    <span class="course-rating">4.6 ★★★★☆</span>
                                    <span class="course-price">
                                    <span class="course-price"><del></del>Gratis </span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('Diplomado en Gestión de Recursos Humanos')">
                                    Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="course-card">
                            <div class="course-img" style="background-color: #f8f9fa;">
                                <i class="bi bi-graph-up" style="font-size: 3rem; color: var(--primary);"></i>
                            </div>
                            <div class="course-body">
                                <h3 class="course-title">Diplomado en Marketing Digital Avanzado</h3>
                                <p><strong>Instructor:</strong> Laura Fernández</p>
                                <div class="course-meta">
                                    <span class="course-rating">4.9 ★★★★★</span>
                                    <span class="course-price"><del></del>Gratis</span>
                                </div>
                                <button class="btn-enroll mt-3" onclick="setFormacion('Diplomado en Marketing Digital Avanzado')">
                                    Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      <!-- Talleres -->
<div class="tab-pane fade" id="talleres" role="tabpanel">
    <h2 class="category-title">Talleres prácticos</h2>
    <div class="row">
        <!-- Taller 1 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES</h3>
                    <p class="course-description">Más de 500,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.3 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 2 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 3 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">MATEMÁTICA Y BOTÁNICA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('MATEMÁTICA Y BOTÁNICA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 4 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">MATEMÁTICA Y ARTES</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('MATEMÁTICA Y ARTES')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 5 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">LAS MEDIDAS DEL MUNDO</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('LAS MEDIDAS DEL MUNDO')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 6 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 7 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">AJEDREZ MULTINIVEL</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('AJEDREZ MULTINIVEL')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 8 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">IMPRESIÓN 3D</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('IMPRESIÓN 3D')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 9 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">MECATRÓNICA INTERMEDIA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('MECATRÓNICA INTERMEDIA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 10 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">MECATRÓNICA BÁSICA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('MECATRÓNICA BÁSICA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 11 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">FORMACIÓN EN MECATRÓNICA PARA PROFESORES</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('FORMACIÓN EN MECATRÓNICA PARA PROFESORES')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
        <!-- Taller 12 -->
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <div class="course-img">
                    <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
                </div>
                <div class="course-body">
                    <h3 class="course-title">ELECTRÓNICA CREATIVA</h3>
                    <p class="course-description">Más de 300,000 estudiantes</p>
                    <div class="course-meta">
                        <span class="course-rating">4.5 ★★★★☆</span>
                        <span class="course-price">Gratis</span>
                    </div>
                    <button class="btn-enroll mt-3" onclick="setFormacion('ELECTRÓNICA CREATIVA')">
                        Inscribirse
                    </button>
                </div>
            </div>
        </div>
    

    
   <!-- Talleres destacados -->
<h2 class="category-title mt-5">Talleres destacados</h2>
<div class="row">
    <!-- Destacado 1 -->
    <div class="col-md-6 mb-4">
        <div class="course-card" style="background-color: #fff; color: #000;">
            <div class="course-img" style="background-color: #fff;">
                <i class="bi bi-tools" style="font-size: 3rem; color: var(--primary);"></i>
            </div>
            <div class="course-body" style="background-color: #fff;">
                <h3 class="course-title">APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES</h3>
                <p class="course-description">Más de 500,000 estudiantes</p>
                <div class="course-meta">
                    <span class="course-rating">4.3 ★★★★☆</span>
                    <span class="course-price">Gratis</span>
                </div>
                <button class="btn-enroll mt-3" onclick="setFormacion('APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES')">
                    Inscribirse
                </button>
            </div>
        </div>
    </div>
    <!-- Destacado 2 -->
    <div class="col-md-6 mb-4">
        <div class="course-card" style="background-color: #fff; color: #000;">
            <div class="course-img" style="background-color: #fff;">
                <i class="bi bi-palette" style="font-size: 3rem; color: var(--primary);"></i>
            </div>
            <div class="course-body" style="background-color: #fff;">
                <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA</h3>
                <p class="course-description">Más de 300,000 estudiantes</p>
                <div class="course-meta">
                    <span class="course-rating">4.5 ★★★★☆</span>
                    <span class="course-price">Gratis</span>
                </div>
                </div>
                <button class="btn-enroll mt-3" onclick="setFormacion('ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA')">
                    Inscribirse
                </button>
            </div>
        </div>
    </div>
</div>
</div>

                    <!-- Agrega más cards aquí -->
                </div>
            </div>

            <!-- Diplomados Tab Pane -->
            <div class="tab-pane fade" id="diplomados" role="tabpanel" aria-labelledby="diplomados-tab">
                <h2 class="category-title">Diplomados Disponibles</h2>
                <p>Aquí puedes agregar la lista o contenido de diplomados.</p>
            </div>

            <!-- Talleres Tab Pane -->
            <div class="tab-pane fade" id="talleres" role="tabpanel" aria-labelledby="talleres-tab">
                <h2 class="category-title">Talleres Disponibles</h2>
                <p>Aquí puedes agregar la lista o contenido de talleres.</p>
            </div>

            <!-- Inscripción Tab Pane -->
            <div class="tab-pane fade" id="inscripcion" role="tabpanel" aria-labelledby="inscripcion-tab">
                <h2 class="category-title">Formulario de Inscripción</h2>
                <p>Aquí puedes colocar un link o incluir el formulario de inscripción.</p>
            </div>
        </div>
    </main>
@endsection

