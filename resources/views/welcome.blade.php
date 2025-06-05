@extends('layouts.app') 
@section('title', 'Inicio') 

@section('content')
	<!-- Hero Section -->
	<section class="hero-section hero-fullwidth">
		<div class="hero-content">
			<h1 class="hero-title">Todas las habilidades que necesitas en un único lugar</h1>
			<p class="hero-subtitle">Desde habilidades esenciales hasta temas técnicos, CENAMEC respalda tu desarrollo profesional</p>
		</div>
	</section>

	<!-- Sidebar + Main Content Layout -->
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-3 col-lg-2 d-md-block sidebar ">
				<h3 class="sidebar-heading px-3 mb-3 text-center">Categorías de Formación</h3>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link category-filter" href="#" data-category="hoy"><i class="bi bi-check2-circle me-2"></i>Disponibles de hoy</a></li>
					<li class="nav-item"><a class="nav-link category-filter active" href="#" data-category="all"><i class="bi bi-grid-fill me-2"></i>Todas</a></li>
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
			
			<!-- Main Content -->
			<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
				<div class="tab-pane fade show active" id="cursos" role="tabpanel">
					<div class="d-flex justify-content-between align-items-center mb-3">
						<h2 class="category-title mb-0">Cursos de Ciencias</h2>
					</div>

					<div class="row">
						<div class="col-md-4 mb-4 course-item" data-hoy="true">
							<div class="course-card" data-category="idiomas" data-hoy="true"> <!-- Añadido data-category -->
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
										data-nombre="CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 1"
										onclick="abrirInscripcionVisible('C', 'CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 1')">
										<i class="fas fa-sign-in-alt"></i> Inscribirse
									</button>
								</div>
							</div>
						</div>

						<!-- Curso de Inglés Nivel 2 (Categoría: idiomas) -->
						<div class="col-md-4 mb-4" data-hoy="true">
							<div class="course-card" data-category="idiomas" data-hoy="true">
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

						<!-- Curso de Biología (Categoría: biologia) -->
						<div class="col-md-4 mb-4">
							<div class="course-card" data-category="biologia">
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
					</div>
				</div>
			</main>


			
	<div class="REVISAR hidden">
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
					<!-- Modal para agregar curso -->
						<!-- Modal para agregar curso -->
						<div class="modal fade" id="modalAgregarCurso" tabindex="-1" aria-labelledby="modalAgregarCursoLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<form id="formAgregarCurso">
								<div class="modal-body">
								<div class="mb-3">
									<label for="nombreCurso" class="form-label">Nombre del Curso</label>
									<input type="text" class="form-control" id="nombreCurso" name="nombreCurso" placeholder="Ingrese el nombre del curso" required>
								</div>

								<div class="mb-3">
									<label for="categoriaCurso" class="form-label">Categoría</label>
									<select class="form-select" id="categoriaCurso" name="categoriaCurso" required>
									<option value="" selected disabled>Seleccione una categoría</option>
									<option value="hoy">Disponibles de hoy</option>
									<option value="all">Todas</option>
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

								<div class="mb-3">
									<label for="descripcionCurso" class="form-label">Descripción</label>
									<textarea class="form-control" id="descripcionCurso" name="descripcionCurso" rows="3" placeholder="Breve descripción del curso" required></textarea>
								</div>

								<div class="mb-3">
									<label for="duracionCurso" class="form-label">Duración (horas)</label>
									<input type="number" class="form-control" id="duracionCurso" name="duracionCurso"  required>
								</div>
								</div>

								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Guardar Curso</button>
								</div>
							</form>
							</div>
				</div>
		</div>
		<div class="row mt-5" id="contenedor-cursos">
		<!-- Aquí se van a ir agregando los cursos -->
		</div>
	</div>

	<!-- REVISAR -->
	<script>
			const usuarioRegistrado = {{ auth()->check() ? 'true' : 'false' }} === true;

			function verificarSesion() {
				return usuarioRegistrado;
			}

			const tipoMap = {
				'T': 'select_taller',
				'C': 'select_curso',
				'D': 'select_diplomado'
			};

			// Función para filtrar por categoría
			function filtrarPorCategoria(categoria, tabPaneActivo = null) {
				tabPaneActivo = tabPaneActivo || document.querySelector('.tab-pane.fade.show.active:not(#inscripcion)');
				if (!tabPaneActivo) return;

				const cards = tabPaneActivo.querySelectorAll('.course-card');
				cards.forEach(card => {
				const cardCategory = card.getAttribute('data-category');
				const isToday = card.getAttribute('data-hoy') === 'true';
				const parentCol = card.closest('.col-md-4.mb-4');
				if (!parentCol) return;

				if (categoria === 'all') {
					parentCol.style.display = 'block';
				} else if (categoria === 'hoy') {
					parentCol.style.display = isToday ? 'block' : 'none';
				} else {
					parentCol.style.display = cardCategory === categoria ? 'block' : 'none';
				}
				});

				const categoryTitle = tabPaneActivo.querySelector('.category-title');
				if (categoryTitle) {
				if (categoria === 'all') {
					const defaultTitles = {
					'cursos': 'Cursos de Ciencias',
					'talleres': 'Talleres prácticos',
					'diplomados': 'Diplomados'
					};
					categoryTitle.textContent = defaultTitles[tabPaneActivo.id] || 'Formaciones';
				} else if (categoria === 'hoy') {
					categoryTitle.textContent = 'Cursos Disponibles de Hoy';
				} else {
					const filter = document.querySelector(`.category-filter[data-category="${categoria}"]`);
					if (filter) {
					const prefix = {
						'cursos': 'Cursos ',
						'talleres': 'Talleres de ',
						'diplomados': 'Diplomados de '
					}[tabPaneActivo.id] || '';
					categoryTitle.textContent = prefix + filter.textContent.trim();
					}
				}
				}

				// Actualizar clase activa en filtros
				document.querySelectorAll('.category-filter').forEach(f => {
				f.classList.toggle('active', f.getAttribute('data-category') === categoria);
				});

				// Actualizar botón agregar curso
				actualizarBotonAgregarCurso(categoria, tabPaneActivo);
			}

			// Función mejorada para mostrar el formulario de inscripción
			function abrirInscripcionVisible(tipoFormacion, nombreCurso) {
				if (!verificarSesion()) {
				sessionStorage.setItem('selected_course', JSON.stringify({
					nombre: nombreCurso,
					tipo: tipoFormacion
				}));
				window.location.href = "{{ route('registro') }}?from_course=true";
				return;
				}

				// Activar la pestaña de inscripción
				const inscripcionTab = document.getElementById('inscripcion');
				if (!inscripcionTab) return;

				// Ocultar todas las pestañas
				document.querySelectorAll('.tab-pane').forEach(tab => {
				tab.classList.remove('show', 'active');
				});
				
				// Mostrar la pestaña de inscripción
				inscripcionTab.classList.add('show', 'active');

				// Configurar el tipo de formación
				const radio = document.querySelector(`input[name="tipo_formacion"][value="${tipoFormacion}"]`);
				if (radio) {
				radio.checked = true;
				radio.dispatchEvent(new Event('change'));
				}

				// Configurar el select correspondiente
				const selectDivId = tipoMap[tipoFormacion];
				if (selectDivId) {
				document.querySelectorAll('#select_taller, #select_curso, #select_diplomado').forEach(div => {
					div.style.display = 'none';
				});
				
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

				// Mostrar el formulario sin hacer scroll
				inscripcionTab.style.display = 'block';
				inscripcionTab.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}

			// Función para alternar entre selects
			function toggleSelects() {
				document.querySelectorAll('#select_taller, #select_curso, #select_diplomado').forEach(div => {
				div.style.display = 'none';
				});

				const checkedRadio = document.querySelector('input[name="tipo_formacion"]:checked');
				if (checkedRadio) {
				const selectDivId = tipoMap[checkedRadio.value];
				if (selectDivId) {
					document.getElementById(selectDivId).style.display = 'block';
				}
				}
			}

			// Función para actualizar botón de agregar curso
			function actualizarBotonAgregarCurso(categoria, tabPaneActivo) {
				if (!tabPaneActivo || tabPaneActivo.id !== 'cursos') return;

				let header = tabPaneActivo.querySelector('.d-flex.justify-content-between');
				if (!header) {
				// Crear encabezado si no existe
				const titulo = tabPaneActivo.querySelector('.category-title');
				if (!titulo) return;

				header = document.createElement('div');
				header.className = 'd-flex justify-content-between align-items-center mb-3';
				titulo.parentNode.insertBefore(header, titulo);
				header.appendChild(titulo);
				}

				let btnAgregar = header.querySelector('#btnAgregarCursoNuevo');

				if (categoria === 'hoy') {
				if (!btnAgregar) {
					btnAgregar = document.createElement('button');
					btnAgregar.id = 'btnAgregarCursoNuevo';
					btnAgregar.type = 'button';
					btnAgregar.className = 'btn btn-outline-primary';
					btnAgregar.setAttribute('data-bs-toggle', 'modal');
					btnAgregar.setAttribute('data-bs-target', '#modalAgregarCurso');
					btnAgregar.innerHTML = '<i class="bi bi-plus-circle me-1"></i> Agregar Curso Nuevo';
					header.appendChild(btnAgregar);
				}
				} else if (btnAgregar) {
				btnAgregar.remove();
				}
			}

			// Función para manejar el formulario de agregar curso
			function setupAgregarCurso() {
				const formAgregarCurso = document.getElementById('formAgregarCurso');
				const modalAgregarCursoEl = document.getElementById('modalAgregarCurso');
				const modalAgregarCurso = modalAgregarCursoEl ? new bootstrap.Modal(modalAgregarCursoEl) : null;

				if (formAgregarCurso) {
				formAgregarCurso.addEventListener('submit', function(e) {
					e.preventDefault();

					const nombre = formAgregarCurso.nombreCurso.value.trim();
					const categoria = formAgregarCurso.categoriaCurso.value;
					const descripcion = formAgregarCurso.descripcionCurso.value.trim();
					const duracion = formAgregarCurso.duracionCurso.value;

					if (!nombre || !categoria || !descripcion || !duracion) {
					alert('Por favor, complete todos los campos del formulario.');
					return;
					}

					const iconosCategorias = {
					'biologia': 'bi-flower3',
					'fisica': 'bi-eyedropper',
					'quimica': 'bi-funnel',
					'matematicas': 'bi-calculator',
					'artes': 'bi-palette',
					'idiomas': 'bi-translate',
					'tecnologia': 'bi-cpu',
					'ambiente': 'bi-tree',
					'ocev': 'bi-clipboard-data',
					'ajedrez': 'bi-chess',
					'lectura': 'bi-book',
					'tics': 'bi-laptop',
					'eis': 'bi-lightbulb',
					'deporte': 'bi-trophy',
					'hse': 'bi-shield-check'
					};

					const icono = iconosCategorias[categoria] || 'bi-bookmark-star';

					const nuevoHTML = `
					<div class="col-md-4 mb-4 course-item" data-category="${categoria}" data-hoy="true">
						<div class="course-card" data-category="${categoria}" data-hoy="true">
						<div class="course-img"><i class="bi ${icono}"></i></div>
						<div class="course-body">
							<h3 class="course-title">${nombre}</h3>
							<p class="course-description">${descripcion}</p>
							<div class="course-meta">
							<span class="course-rating"><i class="bi bi-star-fill"></i>4.0</span>
							<span class="course-price">Gratis</span>
							</div>
							<button class="btn-enroll" 
									data-tipo="C" 
									data-nombre="${nombre.replace(/'/g, "\\'")}"
									onclick="abrirInscripcionVisible('C', '${nombre.replace(/'/g, "\\'")}')">
							<i class="fas fa-sign-in-alt"></i> Inscribirse
							</button>
						</div>
						</div>
					</div>
					`;

					const container = document.querySelector('#cursos .row');
					if (container) {
					container.insertAdjacentHTML('beforeend', nuevoHTML);
					}

					// Resetear y cerrar el modal correctamente
					formAgregarCurso.reset();
					if (modalAgregarCurso) {
					modalAgregarCurso.hide();
					}

					// Eliminar el backdrop manualmente si persiste
					const backdrops = document.querySelectorAll('.modal-backdrop');
					backdrops.forEach(backdrop => backdrop.remove());
					
					// Habilitar el scroll del body si fue deshabilitado
					document.body.style.overflow = 'auto';
					document.body.style.paddingRight = '0';
				});
				}
			}

			document.addEventListener('DOMContentLoaded', () => {
				// Configurar el formulario de agregar curso
				setupAgregarCurso();

				// Filtros
				document.querySelectorAll('.category-filter').forEach(filter => {
				filter.addEventListener('click', (e) => {
					e.preventDefault();
					const categoria = filter.getAttribute('data-category');
					filtrarPorCategoria(categoria);
				});
				});

				// Configurar los radio buttons para mostrar los selects correspondientes
				const tipoRadios = document.querySelectorAll('input[name="tipo_formacion"]');
				tipoRadios.forEach(r => r.addEventListener('change', toggleSelects));
				toggleSelects();

				// Manejar clic en botones de inscripción
				document.body.addEventListener('click', (e) => {
				if (e.target.closest('.btn-enroll')) {
					e.preventDefault();
					const btn = e.target.closest('.btn-enroll');
					const parentCard = btn.closest('.course-card');
					const titulo = parentCard.querySelector('.course-title').innerText.trim();
					const tipoFormacion = btn.getAttribute('data-tipo') || 'C';
					
					abrirInscripcionVisible(tipoFormacion, titulo);
				}
				});
			});
	</script>
@endsection
