@extends('layouts.app') @section('title', 'Inicio') @section('content')
<!-- Hero Section -->

<section class="hero-section hero-fullwidth">
	<div class="hero-content">
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
<div class="course-card science-card" data-category="biologia">
<div class="course-img">
<i class="bi bi-robot"></i>
</div>
<div class="course-body">
<h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</h3>
<p class="course-description">Este curso innovador integra metodologías activas con tecnologías emergentes para la enseñanza de la biología.</p>
<div class="course-meta">
<span class="course-rating">
<i class="bi bi-star-fill"></i>4.3
</span>
<span class="course-price">Gratis</span>
</div>
<button class="btn btn-unavailable">
<i class="bi bi-x-circle me-2"></i> No Disponible
</button>
</div>
</div>
</div>
<div class="col-md-4 mb-4">
  <div class="course-card math-card" data-category="matematicas">
    <div class="course-img">
      <i class="bi bi-calculator"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">RESOLUCIÓN DE PROBLEMAS</h3>
      <p class="course-description">Desarrolla habilidades lógicas y de pensamiento crítico para resolver problemas matemáticos cotidianos y académicos.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.5
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card science-card" data-category="biologia">
    <div class="course-img">
      <i class="bi bi-flower3"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">BOTÁNICA POR UN DÍA</h3>
      <p class="course-description">Un recorrido práctico por el mundo de las plantas para descubrir su importancia y diversidad en nuestro entorno.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.6
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card math-card" data-category="matematicas">
    <div class="course-img">
      <i class="bi bi-globe-americas"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">LAS MEDIDAS DEL MUNDO</h3>
      <p class="course-description">Explora cómo las matemáticas ayudan a medir el mundo: distancias, tiempo, volumen y mucho más de forma práctica.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.4
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card science-card" data-category="literatura">
    <div class="course-img">
      <i class="bi bi-pencil-square"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">ESCRITURA CREATIVA EN ESCENA</h3>
      <p class="course-description">Fomenta la creatividad literaria a través de ejercicios teatrales y narrativos para potenciar la expresión escrita.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.8
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-translate"></i></div>
    <div class="course-body">
      <h3 class="course-title">CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 1</h3>
      <p class="course-description">Aprende inglés desde cero con vocabulario esencial, estructuras básicas y práctica oral y escrita.</p>
      <div class="course-meta">
        <span class="course-rating"><i class="bi bi-star-fill"></i>4.2</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="C"
              data-nombre="CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2"
              onclick="abrirInscripcionVisible('C', 'CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-translate"></i></div>
    <div class="course-body">
      <h3 class="course-title">CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2</h3>
      <p class="course-description">Consolida y amplía tus conocimientos del idioma inglés con temas del día a día y práctica interactiva.</p>
      <div class="course-meta">
        <span class="course-rating"><i class="bi bi-star-fill"></i>4.3</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="C"
              data-nombre="CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2"
              onclick="abrirInscripcionVisible('C', 'CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<!-- MECATRÓNICA CREATIVA -->
<div class="col-md-4 mb-4">
  <div class="course-card tech-card" data-category="mecatronica">
    <div class="course-img">
      <i class="bi bi-cpu"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">MECATRÓNICA CREATIVA</h3>
      <p class="course-description">Descubre el fascinante mundo de la mecatrónica mediante proyectos prácticos y diseño creativo con tecnología.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.7
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- MECATRÓNICA INTERMEDIA -->
<div class="col-md-4 mb-4">
  <div class="course-card tech-card" data-category="mecatronica">
    <div class="course-img">
      <i class="bi bi-gear"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">MECATRÓNICA INTERMEDIA</h3>
      <p class="course-description">Aprende los fundamentos y aplicaciones de sistemas mecatrónicos a nivel intermedio.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.4
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- USO INTELIGENTE DE LAS REDES SOCIALES -->
<div class="col-md-4 mb-4">
  <div class="course-card tech-card" data-category="tecnologia">
    <div class="course-img">
      <i class="bi bi-share"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">USO INTELIGENTE DE LAS REDES SOCIALES</h3>
      <p class="course-description">Conoce buenas prácticas para un uso responsable y provechoso de las redes sociales.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.5
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- CURSO PASANTIA PARA DOCENTES EN TIC E IA -->
<div class="col-md-4 mb-4">
  <div class="course-card tech-card" data-category="educacion-tecnologica">
    <div class="course-img">
      <i class="bi bi-laptop"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">CURSO PASANTIA PARA DOCENTES EN TIC E IA</h3>
      <p class="course-description">Curso intensivo para docentes sobre el uso inteligente de las TIC en la era de la IA.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.6
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Introducción a la Informática -->
<div class="col-md-4 mb-4">
  <div class="course-card tech-card" data-category="informatica">
    <div class="course-img">
      <i class="bi bi-display"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Introducción a la Informática</h3>
      <p class="course-description">Conceptos básicos de informática, hardware, software y uso de sistemas operativos.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.3
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- IA: Fundamentos de ML y Regresión -->
<div class="col-md-4 mb-4">
  <div class="course-card ai-card" data-category="inteligencia-artificial">
    <div class="course-img">
      <i class="bi bi-brain"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">IA: Fundamentos de ML y Regresión</h3>
      <p class="course-description">Explora los fundamentos del aprendizaje automático y problemas de regresión aplicados.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.7
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Indicadores de Calidad de Vida Estudiantil -->
<div class="col-md-4 mb-4">
  <div class="course-card edu-card" data-category="educacion">
    <div class="course-img">
      <i class="bi bi-graph-up-arrow"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Indicadores de Calidad de Vida Estudiantil</h3>
      <p class="course-description">Herramientas para medir y evaluar la calidad de vida en el entorno educativo.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.5
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Estrategia y Táctica del Juego de Ajedrez -->
<div class="col-md-4 mb-4">
  <div class="course-card logic-card" data-category="ajedrez">
    <div class="course-img">
      <i class="bi bi-kanban"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Estrategia y Táctica del Juego de Ajedrez</h3>
      <p class="course-description">Fundamentos estratégicos y tácticos del ajedrez aplicados a la educación.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.8
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Ajedrez Multinivel -->
<div class="col-md-4 mb-4">
  <div class="course-card logic-card" data-category="ajedrez">
    <div class="course-img">
      <i class="bi bi-trophy"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Ajedrez Multinivel</h3>
      <p class="course-description">Curso progresivo para desarrollar habilidades en ajedrez desde nivel básico hasta avanzado.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.6
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Organización de Grupos Estables -->
<div class="col-md-4 mb-4">
  <div class="course-card edu-card" data-category="educacion">
    <div class="course-img">
      <i class="bi bi-people"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Organización de Grupos Estables</h3>
      <p class="course-description">Metodologías para una transformación curricular efectiva usando tecnologías digitales.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.4
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Pensamiento Computacional y Calidad Educativa -->
<div class="col-md-4 mb-4">
  <div class="course-card logic-card" data-category="educacion-tecnologica">
    <div class="course-img">
      <i class="bi bi-cpu"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Pensamiento Computacional y Calidad Educativa</h3>
      <p class="course-description">Aplicaciones del pensamiento lógico y algoritmos en la mejora educativa.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.6
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

<!-- Defensa Personal -->
<div class="col-md-4 mb-4">
  <div class="course-card sport-card" data-category="deportes">
    <div class="course-img">
      <i class="bi bi-shield-lock"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">Defensa Personal</h3>
      <p class="course-description">Técnicas básicas y efectivas de defensa personal para contextos escolares y comunitarios.</p>
      <div class="course-meta">
        <span class="course-rating">
          <i class="bi bi-star-fill"></i>4.7
        </span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn btn-unavailable">
        <i class="bi bi-x-circle me-2"></i> No Disponible
      </button>
    </div>
  </div>
</div>

	
				<!-- Más cursos... -->
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
      <p class="course-description">Programa integral de 6 meses que combina teoría teatral con práctica pedagógica.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="D"
              data-nombre="DIPLOMADO DIDACTICA DEL TEATRO Y LA ORGANICIDAD DEL ACTOR"
              onclick="abrirInscripcionVisible('D', 'DIPLOMADO DIDACTICA DEL TEATRO Y LA ORGANICIDAD DEL ACTOR')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<!-- Nuevo diplomado agregado -->
<div class="col-md-4 mb-4">
  <div class="course-card diploma-card">
    <div class="course-img">
      <i class="bi bi-award"></i>
    </div>
    <div class="course-body">
      <h3 class="course-title">DIPLOMADO INVESTIGACIÓN SOCIOCRÍTICA EN CIENCIAS NATURALES, MATEMÁTICA O TECNOLOGÍA</h3>
      <p class="course-description">Programa diseñado para fomentar la investigación crítica en áreas de ciencias naturales, matemáticas y tecnología.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="D"
              data-nombre="DIPLOMADO INVESTIGACIÓN SOCIOCRÍTICA EN CIENCIAS NATURALES, MATEMÁTICA O TECNOLOGÍA"
              onclick="abrirInscripcionVisible('D', 'DIPLOMADO INVESTIGACIÓN SOCIOCRÍTICA EN CIENCIAS NATURALES, MATEMÁTICA O TECNOLOGÍA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>

						</div>
					</div>
				</div>

				<!-- Más diplomados... -->
			</div>
		</div>


		<!-- Talleres -->
		<div class="tab-pane fade" id="talleres" role="tabpanel">
			<h2 class="category-title">Talleres prácticos</h2>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="course-card">
						<div class="course-img">
							<i class="bi bi-translate"></i>
						</div>
						<div class="course-body">
							<h3 class="course-title">APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES</h3>
							<p class="course-description">Más de 500,000 estudiantes</p>
							<div class="course-meta">
								<span class="course-rating">4.3 ★★★★☆</span>
								<span class="course-price">Gratis</span>
							</div>
							<button class="btn-enroll" 
  data-tipo="T" 
  data-nombre="APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES" 
  onclick="abrirInscripcionVisible('T', 'APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES')">
  <i class="fas fa-sign-in-alt"></i> Inscribirse
</button>


						</div>
					</div>
				</div>


				<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-person"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO</h3>
      <p class="course-description">Exploración práctica del cuerpo humano y sus funciones.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO"
              onclick="abrirInscripcionVisible('T', 'TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tree"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER APRENDIENDO SOBRE EL MUNDO ANIMAL</h3>
      <p class="course-description">Conociendo la diversidad y características de los animales.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="TALLER APRENDIENDO SOBRE EL MUNDO ANIMAL"
              onclick="abrirInscripcionVisible('T', 'TALLER APRENDIENDO SOBRE EL MUNDO ANIMAL')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-flower3"></i></div>
    <div class="course-body">
      <h3 class="course-title">INTERDISCIPLINARIEDAD EN LAS CIENCIAS NATURALES</h3>
      <p class="course-description">Integración de conocimientos para una enseñanza completa.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="INTERDISCIPLINARIEDAD EN LAS CIENCIAS NATURALES"
              onclick="abrirInscripcionVisible('T', 'INTERDISCIPLINARIEDAD EN LAS CIENCIAS NATURALES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-flask"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</h3>
      <p class="course-description">Nuevas técnicas para una biología más atractiva y efectiva.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DEL USO Y EL MANEJO DE LOS INSTRUMENTOS DE LABORATORIO</h3>
      <p class="course-description">Metodologías para la correcta utilización de equipos científicos.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DEL USO Y EL MANEJO DE LOS INSTRUMENTOS DE LABORATORIO"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DEL USO Y EL MANEJO DE LOS INSTRUMENTOS DE LABORATORIO')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE BIOLOGÍA</h3>
      <p class="course-description">Aprende a usar los materiales del kit para prácticas biológicas.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE BIOLOGÍA"
              onclick="abrirInscripcionVisible('T', 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE BIOLOGÍA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-leaf-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">EL DIVERTIDO MUNDO DE LAS PLANTAS</h3>
      <p class="course-description">Descubre las plantas y su importancia en la naturaleza.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="EL DIVERTIDO MUNDO DE LAS PLANTAS"
              onclick="abrirInscripcionVisible('T', 'EL DIVERTIDO MUNDO DE LAS PLANTAS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-boxes"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA FÍSICA</h3>
      <p class="course-description">Métodos innovadores para enseñar física de forma dinámica.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA FÍSICA"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA FÍSICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA</h3>
      <p class="course-description">Identificando y corrigiendo errores comunes en física.</p>
      <div class="course-meta">
        <span class="course-rating">4.3 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA"
              onclick="abrirInscripcionVisible('T', 'LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>
<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-backpack"></i></div>
    <div class="course-body">
      <h3 class="course-title">DESCUBRIENDO LA COTIDIANIDAD A TRAVÉS DEL JUEGO PARA LA MEJORA DE LA CALIDAD EDUCATIVA</h3>
      <p class="course-description">Uso del juego para potenciar el aprendizaje cotidiano.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="DESCUBRIENDO LA COTIDIANIDAD A TRAVÉS DEL JUEGO PARA LA MEJORA DE LA CALIDAD EDUCATIVA"
              onclick="abrirInscripcionVisible('T', 'DESCUBRIENDO LA COTIDIANIDAD A TRAVÉS DEL JUEGO PARA LA MEJORA DE LA CALIDAD EDUCATIVA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">FÍSICA RECREATIVA</h3>
      <p class="course-description">Actividades lúdicas para enseñar física de manera divertida.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="FÍSICA RECREATIVA"
              onclick="abrirInscripcionVisible('T', 'FÍSICA RECREATIVA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">LOS JUEGOS TRADICIONALES APLICADOS A LA FÍSICA</h3>
      <p class="course-description">Integración de juegos tradicionales para explicar conceptos físicos.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="LOS JUEGOS TRADICIONALES APLICADOS A LA FÍSICA"
              onclick="abrirInscripcionVisible('T', 'LOS JUEGOS TRADICIONALES APLICADOS A LA FÍSICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">DISEÑO PARA LA ELABORACIÓN DE MATERIALES EDUCATIVOS ALTERNATIVOS PARA LA ENSEÑANZA DE LAS CIENCIAS INTEGRADAS</h3>
      <p class="course-description">Crea materiales educativos innovadores para ciencias.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="DISEÑO PARA LA ELABORACIÓN DE MATERIALES EDUCATIVOS ALTERNATIVOS PARA LA ENSEÑANZA DE LAS CIENCIAS INTEGRADAS"
              onclick="abrirInscripcionVisible('T', 'DISEÑO PARA LA ELABORACIÓN DE MATERIALES EDUCATIVOS ALTERNATIVOS PARA LA ENSEÑANZA DE LAS CIENCIAS INTEGRADAS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE I)</h3>
      <p class="course-description">Aprende a usar el kit de física en mecánica, primera parte.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE I)"
              onclick="abrirInscripcionVisible('T', 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE I)')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE II)</h3>
      <p class="course-description">Segunda parte para dominar el kit de física en mecánica.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE II)"
              onclick="abrirInscripcionVisible('T', 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECÁNICA I / PARTE II)')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA</h3>
      <p class="course-description">Técnicas innovadoras para la enseñanza efectiva de química.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE QUÍMICA</h3>
      <p class="course-description">Uso práctico del kit de química para laboratorio.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE QUÍMICA"
              onclick="abrirInscripcionVisible('T', 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE QUÍMICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tools"></i></div>
    <div class="course-body">
      <h3 class="course-title">EL MUNDO ENTRE LA QUÍMICA, EL ARTE Y LOS VEGETALES</h3>
      <p class="course-description">Explorando las relaciones entre química, arte y plantas.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="EL MUNDO ENTRE LA QUÍMICA, EL ARTE Y LOS VEGETALES"
              onclick="abrirInscripcionVisible('T', 'EL MUNDO ENTRE LA QUÍMICA, EL ARTE Y LOS VEGETALES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-music-note"></i></div>
    <div class="course-body">
      <h3 class="course-title">LA QUÍMICA EN LO COTIDIANO Y LAS DANZAS TRADICIONALES</h3>
      <p class="course-description">Explorando la química en la cultura y tradiciones.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="LA QUÍMICA EN LO COTIDIANO Y LAS DANZAS TRADICIONALES"
              onclick="abrirInscripcionVisible('T', 'LA QUÍMICA EN LO COTIDIANO Y LAS DANZAS TRADICIONALES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-flask"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER CONOCIENDO EL APASIONANTE MUNDO DE LA QUÍMICA</h3>
      <p class="course-description">Introducción al fascinante mundo de la química.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="TALLER CONOCIENDO EL APASIONANTE MUNDO DE LA QUÍMICA"
              onclick="abrirInscripcionVisible('T', 'TALLER CONOCIENDO EL APASIONANTE MUNDO DE LA QUÍMICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-calculator"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA</h3>
      <p class="course-description">Métodos innovadores para enseñar matemática eficazmente.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="i bi-plus-slash-minus"></i></div>
    <div class="course-body">
      <h3 class="course-title">FRACCIONES DE MATEMÁTICA</h3>
      <p class="course-description">Aprende y domina las fracciones de forma sencilla y práctica.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="FRACCIONES DE MATEMÁTICA"
              onclick="abrirInscripcionVisible('T', 'FRACCIONES DE MATEMÁTICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-calculator"></i></div>
    <div class="course-body">
      <h3 class="course-title">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA. Jornada II</h3>
      <p class="course-description">Continuación de métodos innovadores para enseñanza matemática.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA. Jornada II"
              onclick="abrirInscripcionVisible('T', 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA. Jornada II')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-puzzle"></i></div>
    <div class="course-body">
      <h3 class="course-title">CONSTRUCCIÓN Y USO DIDÁCTICO DEL TANGRAM</h3>
      <p class="course-description">Aprende a construir y usar el tangram como recurso didáctico.</p>
      <div class="course-meta">
        <span class="course-rating">4.8 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="CONSTRUCCIÓN Y USO DIDÁCTICO DEL TANGRAM"
              onclick="abrirInscripcionVisible('T', 'CONSTRUCCIÓN Y USO DIDÁCTICO DEL TANGRAM')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-dice-4"></i></div>
    <div class="course-body">
      <h3 class="course-title">JUEGOS Y ALGO MÁS</h3>
      <p class="course-description">Explora juegos didácticos para el aprendizaje integral.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="JUEGOS Y ALGO MÁS"
              onclick="abrirInscripcionVisible('T', 'JUEGOS Y ALGO MÁS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-palette"></i></div>
    <div class="course-body">
      <h3 class="course-title">MATEMÁTICA Y ARTES</h3>
      <p class="course-description">Combinando matemática y artes para un aprendizaje creativo.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="MATEMÁTICA Y ARTES"
              onclick="abrirInscripcionVisible('T', 'MATEMÁTICA Y ARTES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-rulers"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER LAS MEDIDAS DEL MUNDO</h3>
      <p class="course-description">Explora el mundo de las medidas y sus aplicaciones.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll" 
              data-tipo="T" 
              data-nombre="TALLER LAS MEDIDAS DEL MUNDO"
              onclick="abrirInscripcionVisible('T', 'TALLER LAS MEDIDAS DEL MUNDO')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-pencil-square"></i></div>
    <div class="course-body">
      <h3 class="course-title">DISEÑO DE TAREAS COMPLEMENTARIAS DE MATEMÁTICA</h3>
      <p class="course-description">Creación de tareas para complementar el aprendizaje matemático.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="DISEÑO DE TAREAS COMPLEMENTARIAS DE MATEMÁTICA"
              onclick="abrirInscripcionVisible('T', 'DISEÑO DE TAREAS COMPLEMENTARIAS DE MATEMÁTICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-pencil-square"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER PARA EL DISEÑO DE ACTIVIDADES REMEDIALES DE MATEMÁTICA</h3>
      <p class="course-description">Estrategias para crear actividades remediativas en matemática.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER PARA EL DISEÑO DE ACTIVIDADES REMEDIALES DE MATEMÁTICA"
              onclick="abrirInscripcionVisible('T', 'TALLER PARA EL DISEÑO DE ACTIVIDADES REMEDIALES DE MATEMÁTICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-emoji-smile"></i></div>
    <div class="course-body">
      <h3 class="course-title">MATEMÁTICA RECREATIVA</h3>
      <p class="course-description">Aprende matemática de manera divertida y recreativa.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="MATEMÁTICA RECREATIVA"
              onclick="abrirInscripcionVisible('T', 'MATEMÁTICA RECREATIVA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-search"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER BUSCANDO LAS MATEMÁTICAS</h3>
      <p class="course-description">Descubre la matemática en situaciones cotidianas.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER BUSCANDO LAS MATEMÁTICAS"
              onclick="abrirInscripcionVisible('T', 'TALLER BUSCANDO LAS MATEMÁTICAS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-heart"></i></div>
    <div class="course-body">
      <h3 class="course-title">8/9 Por amor a las matemáticas</h3>
      <p class="course-description">Una experiencia para fomentar el amor por la matemática.</p>
      <div class="course-meta">
        <span class="course-rating">4.8 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="8/9 Por amor a las matemáticas"
              onclick="abrirInscripcionVisible('T', '8/9 Por amor a las matemáticas')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-puzzle"></i></div>
    <div class="course-body">
      <h3 class="course-title">Acertijos Divertidos</h3>
      <p class="course-description">Desafía tu mente con acertijos entretenidos.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="Acertijos Divertidos"
              onclick="abrirInscripcionVisible('T', 'Acertijos Divertidos')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-universal-access"></i></div>
    <div class="course-body">
      <h3 class="course-title">MUÑECAS INTERACTIVAS</h3>
      <p class="course-description">Creación y uso de muñecas interactivas para el aprendizaje.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="MUÑECAS INTERACTIVAS"
              onclick="abrirInscripcionVisible('T', 'MUÑECAS INTERACTIVAS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-slack"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER DE TEATRO ACCIÓN CREATIVA</h3>
      <p class="course-description">Explora técnicas de teatro para la expresión creativa.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER DE TEATRO ACCIÓN CREATIVA"
              onclick="abrirInscripcionVisible('T', 'TALLER DE TEATRO ACCIÓN CREATIVA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-theater"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER DE TEATRO LA EXPRESIÓN DRAMÁTICA</h3>
      <p class="course-description">Desarrolla habilidades de expresión y dramatización.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER DE TEATRO LA EXPRESIÓN DRAMÁTICA"
              onclick="abrirInscripcionVisible('T', 'TALLER DE TEATRO LA EXPRESIÓN DRAMÁTICA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-music-note-beamed"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER JOROPO ORIENTAL, SAN JUAN DE BARLOVENTO, CULO ´E PUYA, MINA</h3>
      <p class="course-description">Aprende sobre los ritmos y danzas tradicionales venezolanas.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER JOROPO ORIENTAL, SAN JUAN DE BARLOVENTO, CULO ´E PUYA, MINA"
              onclick="abrirInscripcionVisible('T', 'TALLER JOROPO ORIENTAL, SAN JUAN DE BARLOVENTO, CULO ´E PUYA, MINA')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-music-note"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER GAITA DE TAMBORA, TAMBOR CORIANO, SANGUEO Y GOLPE DE SAN MILLAN</h3>
      <p class="course-description">Explora los instrumentos y ritmos tradicionales del Zulia.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER GAITA DE TAMBORA, TAMBOR CORIANO, SANGUEO Y GOLPE DE SAN MILLAN"
              onclick="abrirInscripcionVisible('T', 'TALLER GAITA DE TAMBORA, TAMBOR CORIANO, SANGUEO Y GOLPE DE SAN MILLAN')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chat-dots"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER LÚDICO DE FRANCÉS</h3>
      <p class="course-description">Métodos divertidos para aprender francés de manera práctica.</p>
      <div class="course-meta">
        <span class="course-rating">4.3 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER LÚDICO DE FRANCÉS"
              onclick="abrirInscripcionVisible('T', 'TALLER LÚDICO DE FRANCÉS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chat-left-text"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER LA MARAVILLA DEL INGLES EN NUESTRAS VACACIONES</h3>
      <p class="course-description">Explora el inglés con actividades divertidas durante las vacaciones.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER LA MARAVILLA DEL INGLES EN NUESTRAS VACACIONES"
              onclick="abrirInscripcionVisible('T', 'TALLER LA MARAVILLA DEL INGLES EN NUESTRAS VACACIONES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chat-left-text-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">Aprendiendo inglés y francés en vacaciones</h3>
      <p class="course-description">Programa combinado para mejorar inglés y francés durante las vacaciones.</p>
      <div class="course-meta">
        <span class="course-rating">4.3 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="Aprendiendo inglés y francés en vacaciones"
              onclick="abrirInscripcionVisible('T', 'Aprendiendo inglés y francés en vacaciones')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-translate"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER INGLÉS PARA PRINCIPIANTES</h3>
      <p class="course-description">Curso básico para introducirte al idioma inglés.</p>
      <div class="course-meta">
        <span class="course-rating">4.2 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER INGLÉS PARA PRINCIPIANTES"
              onclick="abrirInscripcionVisible('T', 'TALLER INGLÉS PARA PRINCIPIANTES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-gear-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">FORMACIÓN EN MECATRONICA PARA PROFESORES</h3>
      <p class="course-description">Capacitación para docentes en mecatrónica aplicada a la enseñanza.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="FORMACIÓN EN MECATRONICA PARA PROFESORES"
              onclick="abrirInscripcionVisible('T', 'FORMACIÓN EN MECATRONICA PARA PROFESORES')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-printer-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">IMPRESIÓN 3D</h3>
      <p class="course-description">Introducción a las técnicas y aplicaciones de la impresión 3D.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="IMPRESIÓN 3D"
              onclick="abrirInscripcionVisible('T', 'IMPRESIÓN 3D')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-motherboard-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">ARDUINO NIVEL 1</h3>
      <p class="course-description">Curso básico de Arduino para principiantes en electrónica y programación.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="ARDUINO NIVEL 1"
              onclick="abrirInscripcionVisible('T', 'ARDUINO NIVEL 1')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-code-slash"></i></div>
    <div class="course-body">
      <h3 class="course-title">PYTHON</h3>
      <p class="course-description">Introducción a la programación con Python para educadores y estudiantes.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="PYTHON"
              onclick="abrirInscripcionVisible('T', 'PYTHON')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-file-earmark-word-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">FORMACIÓN DE PROGRAMAS OFIMÁTICOS. WORD BÁSICO</h3>
      <p class="course-description">Curso básico para dominar Word y sus funciones esenciales.</p>
      <div class="course-meta">
        <span class="course-rating">4.3 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="FORMACIÓN DE PROGRAMAS OFIMÁTICOS. WORD BÁSICO"
              onclick="abrirInscripcionVisible('T', 'FORMACIÓN DE PROGRAMAS OFIMÁTICOS. WORD BÁSICO')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-tiktok"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER EL MUNDO DEL TIK TOK</h3>
      <p class="course-description">Explora las posibilidades educativas y creativas de TikTok.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER EL MUNDO DEL TIK TOK"
              onclick="abrirInscripcionVisible('T', 'TALLER EL MUNDO DEL TIK TOK')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-broadcast"></i></div>
    <div class="course-body">
      <h3 class="course-title">LA RADIO COMO MEDIO DE COMUNICACIÓN</h3>
      <p class="course-description">Aprende a utilizar la radio como herramienta educativa y de comunicación.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="LA RADIO COMO MEDIO DE COMUNICACIÓN"
              onclick="abrirInscripcionVisible('T', 'LA RADIO COMO MEDIO DE COMUNICACIÓN')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-robot"></i></div>
    <div class="course-body">
      <h3 class="course-title">FORMACIÓN DE ROBÓTICA EDUCATIVA REGRESO A CLASES 2024/2025</h3>
      <p class="course-description">Preparación para docentes en robótica educativa para el ciclo 2024/2025.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="FORMACIÓN DE ROBÓTICA EDUCATIVA REGRESO A CLASES 2024/2025"
              onclick="abrirInscripcionVisible('T', 'FORMACIÓN DE ROBÓTICA EDUCATIVA REGRESO A CLASES 2024/2025')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-code-slash"></i></div>
    <div class="course-body">
      <h3 class="course-title">PROGRAMACIÓN APLICADA A ROBOT SEGUIDOR DE LÍNEAS.</h3>
      <p class="course-description">Curso práctico sobre programación para robots seguidores de líneas.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="PROGRAMACIÓN APLICADA A ROBOT SEGUIDOR DE LÍNEAS."
              onclick="abrirInscripcionVisible('T', 'PROGRAMACIÓN APLICADA A ROBOT SEGUIDOR DE LÍNEAS.')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-cpu"></i></div>
    <div class="course-body">
      <h3 class="course-title">MECATRÓNICA Y PROGRAMACIÓN APLICADA A PROYECTOS EDUCATIVOS.</h3>
      <p class="course-description">Capacitación en mecatrónica y programación para desarrollar proyectos educativos innovadores.</p>
      <div class="course-meta">
        <span class="course-rating">4.8 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="MECATRÓNICA Y PROGRAMACIÓN APLICADA A PROYECTOS EDUCATIVOS."
              onclick="abrirInscripcionVisible('T', 'MECATRÓNICA Y PROGRAMACIÓN APLICADA A PROYECTOS EDUCATIVOS.')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-wifi"></i></div>
    <div class="course-body">
      <h3 class="course-title">LOT INTERNET DE LAS COSAS</h3>
      <p class="course-description">Introducción al Internet de las Cosas (IoT) y sus aplicaciones educativas.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="LOT INTERNET DE LAS COSAS"
              onclick="abrirInscripcionVisible('T', 'LOT INTERNET DE LAS COSAS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chat-dots"></i></div>
    <div class="course-body">
      <h3 class="course-title">CONVERSATORIO Jornada reflexiva sobre el cambio climático. Un problema que nos afecta a todos.</h3>
      <p class="course-description">Espacio de diálogo y reflexión sobre el impacto del cambio climático y acciones posibles.</p>
      <div class="course-meta">
        <span class="course-rating">4.7 ★★★★★</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="CONVERSATORIO Jornada reflexiva sobre el cambio climático. Un problema que nos afecta a todos."
              onclick="abrirInscripcionVisible('T', 'CONVERSATORIO Jornada reflexiva sobre el cambio climático. Un problema que nos afecta a todos.')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-card-checklist"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER PROCESO DE ELABORACIÓN DE ITEM. LA VALIDEZ Y CONFIABILIDAD DEL ITEM</h3>
      <p class="course-description">Aprende sobre el diseño y validación de ítems para evaluaciones educativas confiables.</p>
      <div class="course-meta">
        <span class="course-rating">4.6 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER PROCESO DE ELABORACIÓN DE ITEM. LA VALIDEZ Y CONFIABILIDAD DEL ITEM"
              onclick="abrirInscripcionVisible('T', 'TALLER PROCESO DE ELABORACIÓN DE ITEM. LA VALIDEZ Y CONFIABILIDAD DEL ITEM')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chess"></i></div>
    <div class="course-body">
      <h3 class="course-title">Ajedrez</h3>
      <p class="course-description">Taller básico de ajedrez para desarrollar habilidades de lógica y estrategia.</p>
      <div class="course-meta">
        <span class="course-rating">4.3 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="Ajedrez"
              onclick="abrirInscripcionVisible('T', 'Ajedrez')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-chess-fill"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER AJEDREZ INTERMEDIO PARA NIÑOS</h3>
      <p class="course-description">Avanza tus habilidades en ajedrez con este taller intermedio diseñado para niños.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER AJEDREZ INTERMEDIO PARA NIÑOS"
              onclick="abrirInscripcionVisible('T', 'TALLER AJEDREZ INTERMEDIO PARA NIÑOS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-book"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER CUÉNTAME UN CUENTO</h3>
      <p class="course-description">Desarrolla habilidades narrativas y creatividad a través del arte del cuento.</p>
      <div class="course-meta">
        <span class="course-rating">4.4 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER CUÉNTAME UN CUENTO"
              onclick="abrirInscripcionVisible('T', 'TALLER CUÉNTAME UN CUENTO')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-brush"></i></div>
    <div class="course-body">
      <h3 class="course-title">TALLER MATERIALES ARTESANALES PARA EL APRENDIZAJE COMPUTACIONAL</h3>
      <p class="course-description">Crea materiales artesanales que faciliten el aprendizaje en ciencias de la computación.</p>
      <div class="course-meta">
        <span class="course-rating">4.5 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="TALLER MATERIALES ARTESANALES PARA EL APRENDIZAJE COMPUTACIONAL"
              onclick="abrirInscripcionVisible('T', 'TALLER MATERIALES ARTESANALES PARA EL APRENDIZAJE COMPUTACIONAL')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <div class="course-img"><i class="bi bi-person-bounding-box"></i></div>
    <div class="course-body">
      <h3 class="course-title">INDUCCIÓN AL PROGRAMA EIS</h3>
      <p class="course-description">Introducción formal al programa EIS para docentes interesados en innovación educativa.</p>
      <div class="course-meta">
        <span class="course-rating">4.2 ★★★★☆</span>
        <span class="course-price">Gratis</span>
      </div>
      <button class="btn-enroll"
              data-tipo="T"
              data-nombre="INDUCCIÓN AL PROGRAMA EIS"
              onclick="abrirInscripcionVisible('T', 'INDUCCIÓN AL PROGRAMA EIS')">
        <i class="fas fa-sign-in-alt"></i> Inscribirse
      </button>
    </div>
  </div>
</div>


				<div class="row">
				</div>

			</div>
		</div>

		<!-- Inscripción -->
		<div class="tab-pane fade" id="inscripcion" role="tabpanel">
			<h2 class="category-title">Formulario de Inscripción</h2>
			<form method="POST" action="{{ route('inscribir') }}" class="form-section p-4 shadow-sm rounded">
				@csrf

				<!-- Datos participantes -->
				<h2 class="section-title mb-4">Datos de los participantes</h2>

				<div class="mb-4">
					<label for="nombre" class="form-label required-field fw-semibold">Nombre y Apellido</label>
					<div class="input-group shadow-sm rounded">
						<span class="input-group-text bg-white border-end-0"><i class="bi bi-person-fill text-muted"></i></span>
						<input type="text" id="nombre" name="nombre" class="form-control border-start-0" placeholder="Ingrese nombre completo" required value="{{ old('nombre') }}">
					</div>
				</div>

				<div class="row g-4 mb-4">
					<div class="col-md-6">
						<label for="cedula" class="form-label required-field fw-semibold">Cédula</label>
						<div class="input-group shadow-sm rounded">
							<span class="input-group-text bg-white border-end-0"><i class="bi bi-credit-card text-muted"></i></span>
							<input type="text" id="cedula" name="cedula" class="form-control border-start-0" placeholder="Ingrese número de cédula" required value="{{ old('cedula') }}">
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="form-label required-field fw-semibold">Estado</label>
						<div class="input-group shadow-sm rounded">
							<span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt text-muted"></i></span>
							<input type="text" id="estado" name="estado" class="form-control border-start-0" placeholder="Ingrese estado" required value="{{ old('estado') }}">
						</div>
					</div>
				</div>

				<!-- Selección tipo formación -->
				<h2 class="section-title mb-4">Ingrese Datos de la Formación</h2>

				<div class="mb-4">
					<label class="required-field fw-semibold d-block mb-3">Tipo de Formación</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_taller" value="T" {{ old( 'tipo_formacion')=='T' ? 'checked' : '' }} required>
						<label class="form-check-label fw-medium" for="tipo_taller">Taller</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_curso" value="C" {{ old( 'tipo_formacion')=='C' ? 'checked' : '' }} required>
						<label class="form-check-label fw-medium" for="tipo_curso">Curso</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="tipo_formacion" id="tipo_diplomado" value="D" {{ old( 'tipo_formacion')=='D' ? 'checked' : '' }} required>
						<label class="form-check-label fw-medium" for="tipo_diplomado">Diplomado</label>
					</div>
				</div>

				<!-- Selects por tipo -->
				<div class="mb-4" id="select_taller" style="display:none;">
					<label for="taller" class="form-label fw-semibold">Seleccione un Taller</label>
					<select id="taller" name="taller" class="form-select shadow-sm rounded">
        <option value="">Seleccione un taller</option>
        <option value="aprendiendo_idiomas">APRENDIENDO INGLÉS Y FRANCÉS EN VACACIONES</option>
        <option value="fisica">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA FÍSICA</option>
      </select>
				</div>

				<div class="mb-4" id="select_curso" style="display:none;">
					<label for="curso" class="form-label fw-semibold">Seleccione un Curso</label>
					<select id="curso" name="curso" class="form-select shadow-sm rounded">
        <option value="">Seleccione un curso</option>
        <option value="estrategias_biologia">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA</option>
        <option value="fracciones_matematicas">FRACCIONES MATEMÁTICAS</option>
      </select>
				</div>

				<div class="mb-4" id="select_diplomado" style="display:none;">
					<label for="diplomado" class="form-label fw-semibold">Seleccione un Diplomado</label>
					<select id="diplomado" name="diplomado" class="form-select shadow-sm rounded">
        <option value="">Seleccione un diplomado</option>
        <option value="didactica_teatro">DIPLOMADO DIDACTICA DEL TEATRO Y LA ORGANICIDAD DEL ACTOR</option>
        <option value="innovacion_quimica">ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA</option>
      </select>
				</div>

				<!-- Datos Facilitador -->
				<h2 class="section-title mb-4">Datos del Facilitador</h2>

				<div class="row g-4 mb-4">
					<div class="col-md-6">
						<label for="facilitador" class="form-label required-field fw-semibold">Nombre y Apellido del Facilitador</label>
						<input type="text" id="facilitador" name="facilitador" class="form-control shadow-sm rounded" required value="{{ old('facilitador') }}">
					</div>
					<div class="col-md-6">
						<label for="codigo_facilitador" class="form-label required-field fw-semibold">Cédula del Facilitador</label>
						<input type="text" id="codigo_facilitador" name="codigo_facilitador" class="form-control shadow-sm rounded" required value="{{ old('codigo_facilitador') }}">
					</div>
				</div>

				<div class="text-center mt-5">
					<button type="submit" class="btn btn-enroll-professional px-5 py-3 fw-semibold shadow-sm">
        <i class="bi bi-send-fill me-2"></i> Enviar Inscripción
      </button>
				</div>
			</form>
		</div>
</main>
<script>
  // Convertimos la variable Blade a booleano JS
  const usuarioRegistrado = {{ auth()->check() ? 'true' : 'false' }} === true;

  function verificarSesion() {
    return usuarioRegistrado;
  }

  function abrirInscripcionVisible() {
    const inscripcionTab = document.querySelector('#inscripcion-tab');
    if (inscripcionTab) {
      const scrollTopBefore = window.pageYOffset;
      new bootstrap.Tab(inscripcionTab).show();
      window.scrollTo(0, scrollTopBefore);
    }
  }

  // Mapeo correcto para IDs de selects
  const tipoMap = {
    'T': 'select_taller',
    'C': 'select_curso',
    'D': 'select_diplomado'
  };

  function setFormacionFromStorage() {
    const courseData = JSON.parse(sessionStorage.getItem('selected_course'));
    if (courseData) {
      // Seleccionar radio
      const radio = document.querySelector(`input[name="tipo_formacion"][value="${courseData.tipo}"]`);
      if (radio) {
        radio.checked = true;
        radio.dispatchEvent(new Event('change', { bubbles: true, cancelable: true }));
      }

      // Mostrar select y seleccionar opción
      const selectDivId = tipoMap[courseData.tipo];
      if (selectDivId) {
        const selectDiv = document.getElementById(selectDivId);
        if (selectDiv) {
          selectDiv.style.display = 'block';
          const selectEl = selectDiv.querySelector('select');
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

      sessionStorage.removeItem('selected_course');
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const tipoRadios = document.querySelectorAll('input[name="tipo_formacion"]');
    const selectTaller = document.getElementById('select_taller');
    const selectCurso = document.getElementById('select_curso');
    const selectDiplomado = document.getElementById('select_diplomado');

    function toggleSelects() {
      if (selectTaller) selectTaller.style.display = 'none';
      if (selectCurso) selectCurso.style.display = 'none';
      if (selectDiplomado) selectDiplomado.style.display = 'none';

      const checkedRadio = [...tipoRadios].find(r => r.checked);
      if (!checkedRadio) return;

      const selectDivId = tipoMap[checkedRadio.value];
      if (selectDivId) {
        const selectDiv = document.getElementById(selectDivId);
        if (selectDiv) {
          selectDiv.style.display = 'block';
        }
      }
    }

    if (tipoRadios.length > 0) {
      tipoRadios.forEach(r => r.addEventListener('change', toggleSelects));

      // Si hay old() en Laravel, seleccionar radio y disparar evento
      const oldTipo = '{{ old("tipo_formacion") }}';
      if (oldTipo) {
        const radio = document.querySelector(`input[name="tipo_formacion"][value="${oldTipo}"]`);
        if (radio) {
          radio.checked = true;
          radio.dispatchEvent(new Event('change', { bubbles: true, cancelable: true }));
        }
      } else {
        toggleSelects();
      }
    }

    // Si viene parámetro from_course, cargar desde sessionStorage y abrir tab
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('from_course')) {
      setFormacionFromStorage();
      abrirInscripcionVisible();
    }

    // Manejo de botones inscribirse
    document.querySelectorAll('.btn-enroll').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();

        const parentCard = btn.closest('.course-card');
        const titulo = parentCard.querySelector('.course-title').innerText.trim();
        const tipoFormacion = btn.getAttribute('data-tipo') || 'C';

        if (verificarSesion()) {
          abrirInscripcionVisible();

          const radio = document.querySelector(`input[name="tipo_formacion"][value="${tipoFormacion}"]`);
          if (radio) {
            radio.checked = true;
            radio.dispatchEvent(new Event('change', { bubbles: true, cancelable: true }));
          }

          const selectDivId = tipoMap[tipoFormacion];
          if (selectDivId) {
            const selectDiv = document.getElementById(selectDivId);
            if (selectDiv) {
              selectDiv.style.display = 'block';
              const selectEl = selectDiv.querySelector('select');
              if (selectEl) {
                for (const option of selectEl.options) {
                  if (option.text.trim() === titulo) {
                    option.selected = true;
                    break;
                  }
                }
              }
            }
          }
        } else {
          // Guardar y redirigir a registro
          sessionStorage.setItem('selected_course', JSON.stringify({
            nombre: titulo,
            tipo: tipoFormacion
          }));
          window.location.href = "{{ route('registro') }}?from_course=true";
        }
      });
    });
  });
  function abrirInscripcionVisible(tipoFormacion, nombreCurso) {
  const inscripcionTab = document.querySelector('#inscripcion-tab');
  if (inscripcionTab) {
    const scrollTopBefore = window.pageYOffset;
    new bootstrap.Tab(inscripcionTab).show();
    window.scrollTo(0, scrollTopBefore);

    // Preseleccionar radio
    const radio = document.querySelector(`input[name="tipo_formacion"][value="${tipoFormacion}"]`);
    if (radio) {
      radio.checked = true;
      radio.dispatchEvent(new Event('change', { bubbles: true, cancelable: true }));
    }

    // Preseleccionar opción en select
    const tipoMap = {
      'T': 'select_taller',
      'C': 'select_curso',
      'D': 'select_diplomado'
    };
    const selectDivId = tipoMap[tipoFormacion];
    if (selectDivId) {
      const selectDiv = document.getElementById(selectDivId);
      if (selectDiv) {
        selectDiv.style.display = 'block';
        const selectEl = selectDiv.querySelector('select');
        if (selectEl) {
          for (const option of selectEl.options) {
            if (option.text.trim() === nombreCurso) {
              option.selected = true;
              break;
            }
          }
        }
      }
    }
  }
}

</script>

