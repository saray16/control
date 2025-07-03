@extends('layouts.app') @section('title', 'Panel de Administración') @section('content')
<div class="container py-4">
	<h1 class="text-center mb-4 fw-bold text-primary">Panel de Administración</h1> @if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('success') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
	</div>
	@endif

	<!-- Tabs -->
	<ul class="nav nav-pills bg-white shadow-sm sticky-top" id="adminTabs" role="tablist" style="top: 56px; z-index: 1030;">
		<li class="nav-item" role="presentation">
			<button class="nav-link custom-tab-btn active" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab">
            <i class="bi bi-people-fill me-1"></i> Usuarios
        </button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link text-primary fw-semibold" id="control-estudios-tab" data-bs-toggle="tab" data-bs-target="#control-estudios" type="button" role="tab" aria-controls="control-estudios" aria-selected="false">
            <i class="bi bi-journal-text me-1"></i> Control de Estudios
        </button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link text-primary fw-semibold" id="certificados-tab" data-bs-toggle="tab" data-bs-target="#certificados" type="button" role="tab" aria-controls="certificados" aria-selected="false">
            <i class="bi bi-file-earmark-check me-1"></i> Aprobación Certificados
        </button>
		</li>
	</ul>

	<div style="height: 48px;"></div>

	<div class="tab-content mt-3" id="adminTabsContent">

		<!-- TAB: Usuarios -->
		<div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
			<!-- Contador dinámico profesional -->
			<!-- Reemplaza esta sección -->


			<!-- Por esta versión mejorada -->
			<div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded-3" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border-left: 5px solid #2c3e50;">
				<div>
					<h3 class="mb-0 fw-bold text-dark" style="color: #1a365d !important;">
    <i class="bi bi-people-fill me-2"></i>Usuarios Registrados
</h3>
					<p class="mb-0 text-muted">Gestión completa de usuarios del sistema</p>
				</div>
				<div class="d-flex align-items-center">
					<div class="me-3 text-end">
						<h6 class="mb-0 text-uppercase text-muted small">Total</h6>
						<h2 class="mb-0 fw-bold contador-numero" id="contadorUsuarios" data-valor="{{ $totalUsuarios }}">0</h2>
					</div>
					<div class="icono-contador p-3 rounded-circle d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #2c3e50, #3498db);">
						<i class="bi bi-person-lines-fill fs-4 text-white"></i>
					</div>
				</div>
			</div>

			<!-- Tabla de usuarios -->
			<div class="card border-0 shadow-sm mb-4">
				<div class="card-header text-white d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, #2c3e50, #678ca3);">
					<h5 class="mb-0"><i class="bi bi-person-lines-fill me-1"></i> Lista de Usuarios</h5>
					<input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-usuarios')" autocomplete="off">
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-hover table-striped align-middle mb-0" id="table-usuarios">
							<thead class="text-white text-center" style="background: #2c3e50;">
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Email</th>
									<th>Rol</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody class="text-center">
								@forelse ($usuarios as $usuario)
								<tr>
									<td>{{ $usuario->id }}</td>
									<td>{{ $usuario->name }}</td>
									<td>{{ $usuario->email }}</td>
									<td>
										@if($usuario->rol === 'admin')
										<span class="badge" style="background: linear-gradient(135deg,rgb(46, 84, 153),rgb(36, 85, 158));">Administrador</span> @else
										<span class="badge" style="background: linear-gradient(135deg, #3498db, #2980b9);">Usuario</span> @endif
									</td>
								<td>
    <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-primary btn-sm" title="Editar usuario" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal" data-id="{{ $usuario->id }}" data-name="{{ $usuario->name }}" data-email="{{ $usuario->email }}" data-rol="{{ $usuario->rol }}">
            <i class="bi bi-pencil-square"></i>
        </button>
        <button class="btn btn-outline-danger btn-sm btn-eliminar" title="Eliminar usuario" data-id="{{ $usuario->id }}" data-name="{{ $usuario->name }}">
            <i class="bi bi-trash3-fill"></i>
        </button>
        <form id="delete-form-{{ $usuario->id }}" action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" class="d-none">
            @csrf @method('DELETE')
        </form>
    </div>
</td>
								</tr>
								@empty
								<tr>
									<td colspan="5" class="text-muted">No hay usuarios registrados.</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>

				<!-- Botón de nuevo usuario abajo -->
				<div class="card-footer bg-white d-flex justify-content-end">
					<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#crearUsuarioModal" style="background: linear-gradient(135deg, #27ae60, #219955); border: none;">
                        <i class="bi bi-plus-lg"></i> Nuevo Usuario
                    </button>
				</div>
			</div>
		</div>

		<!-- TAB: Control de Estudios -->
		<div class="tab-pane fade" id="control-estudios" role="tabpanel" aria-labelledby="control-estudios-tab">
			<div class="card border-0 shadow-sm">
				<div class="card-header text-white d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, #2c3e50, #678ca3);">
					<h5 class="mb-0"><i class="bi bi-mortarboard-fill me-1"></i> Registros Académicos</h5>
					<input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-control')" autocomplete="off">
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-striped table-hover align-middle mb-0" id="table-control">
							<thead class="text-white text-center" style="background: #2c3e50;">
								<tr>
									<th>ID</th>
									<th>Estado</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Cédula</th>
									<th>Certificado</th>
									<th>Día</th>
									<th>Mes</th>
									<th>Año</th>
									<th>Duración</th>
									<th>Formación</th>
									<th>Programa</th>
									<th>Cohorte</th>
									<th>Fila</th>
									<th>Detalle</th>
									<th>Cód. Barra</th>
									<th>Generador CB</th>
								</tr>
							</thead>
							<tbody class="text-center">
								@forelse ($control_estudio as $formacion)
								<tr>
									<td>{{ $formacion->id }}</td>
									<td>
										@php $estado = strtolower($formacion->ESTADO); @endphp
										<span class="badge" style="background: {{ $estado === 'completado' ? 'linear-gradient(135deg, #27ae60, #219955)' : ($estado === 'en progreso' ? 'linear-gradient(135deg, #f39c12, #e67e22)' : 'linear-gradient(135deg, #95a5a6, #7f8c8d)') }}; color: white;">
                                            {{ $formacion->ESTADO }}
                                        </span>
									</td>
									<td>{{ $formacion->NOMBRE }}</td>
									<td>{{ $formacion->APELLIDO }}</td>
									<td>{{ $formacion->CEDULA }}</td>
									<td>{{ $formacion->certificado }}</td>
									<td>{{ $formacion->dia }}</td>
									<td>{{ $formacion->mes }}</td>
									<td>{{ $formacion->año }}</td>
									<td>{{ $formacion->duracion }}</td>
									<td>{{ $formacion->{'tipo de Formacion'} }}</td>
									<td>{{ $formacion->Programa }}</td>
									<td>{{ $formacion->Cohorte }}</td>
									<td>{{ $formacion->fila }}</td>
									<td>{{ $formacion->{'tipo de Formacion-Programa-Cohorte-fila'} }}</td>
									<td>{{ $formacion->{'Cod de Barra'} }}</td>
									<td>{{ $formacion->{'generador CB'} }}</td>
								</tr>
								@empty
								<tr>
									<td colspan="17" class="text-muted">No hay registros académicos.</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Dentro del div.tab-content, después del tab de Control de Estudios -->
		<div class="tab-pane fade" id="certificados" role="tabpanel" aria-labelledby="certificados-tab">
			<div class="card border-0 shadow-sm">
				<div class="card-header text-white" style="background: linear-gradient(90deg, #2c3e50, #678ca3);">
					<h5 class="mb-0"><i class="bi bi-file-earmark-medical me-1"></i> Solicitudes de Certificados</h5>
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-striped table-hover align-middle mb-0">
							<thead class="text-white text-center" style="background: #2c3e50;">
								<tr>
									<th>ID</th>
									<th>Participante</th>
									<th>Formación</th>
									<th>Tipo</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody class="text-center">
								@foreach($inscripciones as $inscripcion)
								<tr>
									<td>{{ $inscripcion->id }}</td>
									<td>{{ $inscripcion->nombre }}</td>
									<td>{{ $inscripcion->curso ?? $inscripcion->taller ?? $inscripcion->diplomado ?? 'N/A' }}</td>
									<td>
										@switch($inscripcion->tipo_formacion) @case('C') Curso @break @case('T') Taller @break @case('D') Diplomado @break @default Desconocido @endswitch
									</td>
									<td>
										<span class="badge" style="background: {{ $inscripcion->estado_formacion === 'aprobado' ? 'linear-gradient(135deg, #27ae60, #219955)' : ($inscripcion->estado_formacion === 'pendiente' ? 'linear-gradient(135deg, #f39c12, #e67e22)' : 'linear-gradient(135deg, #95a5a6, #7f8c8d)') }}; color: white;">
                                    {{ ucfirst($inscripcion->estado_formacion) }}
                                </span>
									</td>
				<td class="text-center">
    @if($inscripcion->estado_formacion === 'pendiente')
    <div class="d-flex justify-content-center gap-2">
        <form method="POST" action="{{ route('admin.certificados.aprobar', $inscripcion->id) }}" class="m-0">
            @csrf
            <button type="submit" class="btn btn-success btn-sm d-flex align-items-center" style="min-width: 90px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <i class="bi bi-check-circle-fill me-1"></i>
                <span>Aprobar</span>
            </button>
        </form>
        <form method="POST" action="{{ route('admin.certificados.rechazar', $inscripcion->id) }}" class="m-0">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center" style="min-width: 90px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <i class="bi bi-x-circle-fill me-1"></i>
                <span>Rechazar</span>
            </button>
        </form>
    </div>
										@else
										<span class="text-muted">Acción realizada</span> @endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal: Crear Nuevo Usuario -->
<div class="modal fade" id="crearUsuarioModal" tabindex="-1" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form method="POST" action="{{ route('admin.usuarios.create') }}">
			@csrf
			<div class="modal-content">
				<div class="modal-header text-white" style="background: linear-gradient(90deg, #2c3e50, #678ca3);">
					<h5 class="modal-title" id="crearUsuarioModalLabel">Crear Nuevo Usuario</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="nombre" class="form-label">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Correo Electrónico</label>
						<input type="email" class="form-control" id="email" name="email" required autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="rol" class="form-label">Rol</label>
						<select class="form-select" id="rol" name="rol" required>
              <option value="">Seleccione un rol</option>
              <option value="admin">Administrador</option>
              <option value="usuario">Usuario</option>
            </select>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Contraseña</label>
						<input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn text-white" style="background: linear-gradient(135deg, #3498db, #2980b9); border: none;">Crear Usuario</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal: Editar Usuario -->
<div class="modal fade" id="editarUsuarioModal" tabindex="-1" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form method="POST" action="" id="formEditarUsuario">
			@csrf @method('PUT')
			<div class="modal-content">
				<div class="modal-header text-white" style="background: linear-gradient(90deg, #2c3e50, #678ca3);">
					<h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="edit_nombre" class="form-label">Nombre</label>
						<input type="text" class="form-control" id="edit_nombre" name="nombre" required autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="edit_email" class="form-label">Correo Electrónico</label>
						<input type="email" class="form-control" id="edit_email" name="email" required autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="edit_rol" class="form-label">Rol</label>
						<select class="form-select" id="edit_rol" name="rol" required>
              <option value="admin">Administrador</option>
              <option value="usuario">Usuario</option>
            </select>
					</div>
					<div class="mb-3">
						<label for="edit_password" class="form-label">Nueva Contraseña (dejar en blanco para no cambiar)</label>
						<input type="password" class="form-control" id="edit_password" name="password" autocomplete="new-password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn text-white" style="background: linear-gradient(135deg, #3498db, #2980b9); border: none;">Guardar Cambios</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal: Confirmación de Eliminación -->
<div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header text-white" style="background: linear-gradient(90deg, #e74c3c, #c0392b);">
				<h5 class="modal-title" id="confirmarEliminarModalLabel">Confirmar Eliminación</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
			</div>
			<div class="modal-body">
				<div class="d-flex align-items-center mb-3">
					<div class="flex-shrink-0 me-3">
						<i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
					</div>
					<div>
						<p class="mb-0">¿Estás seguro que deseas eliminar al usuario <strong id="nombreUsuarioEliminar"></strong>?</p>
						<p class="text-muted small mt-1">Esta acción no se puede deshacer.</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
				<button type="button" class="btn text-white" id="confirmarEliminarBtn" style="background: linear-gradient(135deg, #e74c3c, #c0392b); border: none;">Sí, Eliminar</button>
			</div>
		</div>
	</div>
</div>

@endsection @section('style')
<style>
	/* Estilos generales */
		body {
			background-color: #f8f9fa;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		
		.container {
			max-width: 1400px;
		}
		
	  .nav-pills .nav-link.active {
	        background-color: #f8f9fa !important;  /* Fondo blanco grisáceo */
	        color: #495057 !important;  /* Texto gris oscuro */
	        border-bottom: 3px solid #6c757d !important;  /* Borde inferior gris */
	        box-shadow: none !important;
	    }
	    
	    .nav-pills .nav-link {
	        color: #6c757d !important;  /* Gris medio para texto inactivo */
	        transition: all 0.3s ease;
	        border-radius: 0 !important;
	        margin: 0 5px !important;
	    }
	    
	    .nav-pills .nav-link:hover:not(.active) {
	        background-color: transparent !important;
	        color: #2c3e50 !important;  /* Color más oscuro al pasar el mouse */
	        border-bottom: 3px solid #dee2e6 !important;
	    }
	    
	    /* Mantener el color del ícono consistente */
	    .nav-pills .nav-link i {
	        color: inherit !important;
	    }
	    
	    /* Contenedor de pestañas */
	    .nav-pills {
	        border-bottom: 1px solid #dee2e6 !important;
	    }
		
		/* Estilos para las tarjetas */
		.card {
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
			border: none;
		}
		
		.card-header {
			border-radius: 0 !important;
		}
		
		/* Estilos para las tablas */
		.table {
			margin-bottom: 0;
		}
		
		.table th {
			font-weight: 600;
			text-transform: uppercase;
			font-size: 0.8rem;
			letter-spacing: 0.5px;
		}
		
		.table td {
			vertical-align: middle;
		}
		
		/* Estilos para los badges */
		.badge {
			padding: 0.5em 0.75em;
			font-weight: 600;
			letter-spacing: 0.5px;
			border-radius: 20px;
		}
		
		/* Estilos para los botones */
		.btn {
			border-radius: 6px;
			font-weight: 500;
			transition: all 0.3s ease;
		}
		
		.btn-sm {
			padding: 0.25rem 0.5rem;
			font-size: 0.8rem;
		}
		
		/* Animación para el contador */
		.animate {
			animation: pulse 1.5s infinite;
		}
		
		@keyframes pulse {
			0% { transform: scale(1); }
			50% { transform: scale(1.05); }
			100% { transform: scale(1); }
		}
		
		/* Efecto hover para las filas de la tabla */
		.table-hover tbody tr {
			transition: all 0.2s ease;
		}
		
		.table-hover tbody tr:hover {
			transform: translateY(-2px);
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
		}
		
		/* Estilos para los modales */
		.modal-header {
			border-radius: 0;
		}
		
		
		/* Estilos para los inputs */
		.form-control, .form-select {
			border-radius: 6px;
			padding: 0.5rem 0.75rem;
			border: 1px solid #dee2e6;
		}
		
		.form-control:focus, .form-select:focus {
			border-color: #3498db;
			box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
		}
		
		/* Estilos para el contador */
		.contador-icono {
			color: #3498db;
		}
		
		.contador-numero {
			font-size: 2.5rem;
			font-weight: 700;
			background: linear-gradient(135deg, #3498db, #2c3e50);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}
		
		/* Efecto de sombra al hacer hover en botones */
		.btn:hover {
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		
		/* Estilos para los botones de acción */
		.btn-outline-primary {
			color: #3498db;
			border-color: #3498db;
		}
		
		.btn-outline-primary:hover {
			background-color: #3498db;
			color: white;
		}
		
		.btn-outline-danger {
			color: #e74c3c;
			border-color: #e74c3c;
		}
		
		.btn-outline-danger:hover {
			background-color: #e74c3c;
			color: white;
		}
		
		/* Estilos para el footer de las tarjetas */
		.card-footer {
			background-color: white;
			border-top: 1px solid rgba(0, 0, 0, 0.05);
		}
		/* Estilos para los botones de acción */
.d-flex.gap-2 {
    gap: 0.5rem !important;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    min-width: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-sm i {
    font-size: 0.875rem;
    line-height: 1;
}

/* Asegurar que los botones mantengan su estilo al pasar el mouse */
.btn-outline-primary:hover, 
.btn-outline-danger:hover {
    color: white !important;
}
	
</style>
@endsection @section('script')
<script>
	document.addEventListener('DOMContentLoaded', function() {
	    const tabs = document.querySelectorAll('#adminTabs .nav-link');
	    tabs.forEach(tab => {
	        tab.classList.add('custom-tab-btn');
	        
	        // Fuerza estilos incluso si Bootstrap los sobreescribe después
	        tab.addEventListener('click', function() {
	            tabs.forEach(t => {
	                t.style.backgroundColor = '';
	                t.style.color = '';
	            });
	            this.style.backgroundColor = '#e9ecef';
	            this.style.color = '#495057';
	            this.style.borderBottom = '2px solid #adb5bd';
				   });
	    });
	});
		function filterTable(input, tableId) {
			        const filter = input.value.toLowerCase();
			        const rows = document.querySelectorAll(`#${tableId} tbody tr`);
			        rows.forEach(row => {
			            const text = row.textContent.toLowerCase();
			            row.style.display = text.includes(filter) ? '' : 'none';
			        });
			    }
			
			    // Contador animado con cambio de color al final
			    document.addEventListener("DOMContentLoaded", () => {
			        const elemento = document.getElementById("contadorUsuarios");
			        const valorFinal = parseInt(elemento.getAttribute("data-valor"));
			        let valorActual = 0;
			
			        const animar = setInterval(() => {
			            valorActual += Math.ceil(valorFinal / 40);
			            if (valorActual >= valorFinal) {
			                valorActual = valorFinal;
			                clearInterval(animar);
			                elemento.classList.add('animate');
			            }
			            elemento.innerText = valorActual.toLocaleString();
			        }, 40);
			
			        // Configurar el modal de edición cuando se abre
			        const editarModal = document.getElementById('editarUsuarioModal');
			        if (editarModal) {
			            editarModal.addEventListener('show.bs.modal', function (event) {
			                const button = event.relatedTarget; // Botón que activó el modal
			                const id = button.getAttribute('data-id');
			                const nombre = button.getAttribute('data-name');
			                const email = button.getAttribute('data-email');
			                const rol = button.getAttribute('data-rol');
			                
			                // Actualizar el formulario
			                const form = document.getElementById('formEditarUsuario');
			                form.action = `/admin/usuarios/${id}`;
			                
			                document.getElementById('edit_nombre').value = nombre;
			                document.getElementById('edit_email').value = email;
			                document.getElementById('edit_rol').value = rol;
			                
			                // Actualizar título del modal
			                document.getElementById('editarUsuarioModalLabel').textContent = `Editar Usuario #${id}`;
			            });
			        }
			
			        // Configurar el modal de confirmación de eliminación
			        const confirmarEliminarModal = document.getElementById('confirmarEliminarModal');
			        let usuarioIdAEliminar = null;
			        const formEliminar = document.createElement('form');
			        formEliminar.method = 'POST';
			        formEliminar.classList.add('d-none');
			
			        document.querySelectorAll('.btn-eliminar').forEach(btn => {
			            btn.addEventListener('click', function() {
			                const id = this.getAttribute('data-id');
			                const nombre = this.getAttribute('data-name');
			                
			                usuarioIdAEliminar = id;
			                document.getElementById('nombreUsuarioEliminar').textContent = nombre;
			                
			                const modal = new bootstrap.Modal(confirmarEliminarModal);
			                modal.show();
			            });
			        });
			
			        document.getElementById('confirmarEliminarBtn').addEventListener('click', function() {
			            if (usuarioIdAEliminar) {
			                const form = document.getElementById(`delete-form-${usuarioIdAEliminar}`);
			                form.submit();
			            }
			        });
			    });
	
</script>
<script type="module" src="{{ asset('js/abrirVentana.js') }}"></script>
@endsection