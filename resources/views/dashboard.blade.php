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
			<button class="nav-link active text-primary fw-semibold" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab" aria-controls="usuarios" aria-selected="true">
                <i class="bi bi-people-fill me-1"></i> Usuarios
            </button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link text-primary fw-semibold" id="control-estudios-tab" data-bs-toggle="tab" data-bs-target="#control-estudios" type="button" role="tab" aria-controls="control-estudios" aria-selected="false">
                <i class="bi bi-journal-text me-1"></i> Control de Estudios
            </button>
		</li>
		<!-- Dentro del ul.nav-pills, después del tab de Control de Estudios -->
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
			<div class="row g-3 mb-4">
				<div class="col-md-6">
					<div class="card contador-profesional h-100 text-center p-4">
						<div class="contador-icono mb-2">
							<i class="bi bi-graph-up-arrow fs-1 text-gradient"></i>
						</div>
						<h6 class="text-muted text-uppercase fw-semibold mb-1">Usuarios Inscritos</h6>
						<h2 class="contador-numero" id="contadorUsuarios" data-valor="{{ $totalUsuarios }}">0</h2>
					</div>
				</div>
			</div>

			<!-- Tabla de usuarios -->
			<div class="card border-0 shadow-sm mb-4">
				<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
					<h5 class="mb-0"><i class="bi bi-person-lines-fill me-1"></i> Lista de Usuarios</h5>
					<input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-usuarios')" autocomplete="off">
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-hover table-striped align-middle mb-0" id="table-usuarios">
							<thead class="table-primary text-center">
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
									<td><span class="badge bg-info text-dark">{{ $usuario->rol }}</span></td>
									<td>
										<button class="btn btn-outline-primary btn-sm me-1" title="Editar usuario" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal" data-id="{{ $usuario->id }}" data-name="{{ $usuario->name }}" data-email="{{ $usuario->email }}" data-rol="{{ $usuario->rol }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
										<button class="btn btn-outline-danger btn-sm btn-eliminar" title="Eliminar usuario" data-id="{{ $usuario->id }}" data-name="{{ $usuario->name }}">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
										<form id="delete-form-{{ $usuario->id }}" action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" class="d-none">
											@csrf @method('DELETE')
										</form>
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
					<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#crearUsuarioModal">
                        <i class="bi bi-plus-lg"></i> Nuevo Usuario
                    </button>
				</div>
			</div>
		</div>

		<!-- TAB: Control de Estudios -->
		<div class="tab-pane fade" id="control-estudios" role="tabpanel" aria-labelledby="control-estudios-tab">
			<div class="card border-0 shadow-sm">
				<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
					<h5 class="mb-0"><i class="bi bi-mortarboard-fill me-1"></i> Registros Académicos</h5>
					<input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-control')" autocomplete="off">
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-striped table-hover align-middle mb-0" id="table-control">
							<thead class="table-primary text-center">
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
										<span class="badge bg-{{ $estado === 'completado' ? 'success' : ($estado === 'en progreso' ? 'warning text-dark' : 'secondary') }}">
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
				<div class="card-header bg-primary text-white">
					<h5 class="mb-0"><i class="bi bi-file-earmark-medical me-1"></i> Solicitudes de Certificados</h5>
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-striped table-hover align-middle mb-0">
							<thead class="table-primary text-center">
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
										<span class="badge bg-{{ $inscripcion->estado_formacion === 'aprobado' ? 'success' : ($inscripcion->estado_formacion === 'pendiente' ? 'warning text-dark' : 'secondary') }}">
                                    {{ ucfirst($inscripcion->estado_formacion) }}
                                </span>
									</td>
									<td>
										@if($inscripcion->estado_formacion === 'pendiente')
										<form method="POST" action="{{ route('admin.certificados.aprobar', $inscripcion->id) }}" style="display: inline;">
											@csrf
											<button type="submit" class="btn btn-sm btn-success me-1">
                                        <i class="bi bi-check-circle"></i> Aprobar
                                    </button>
										</form>
										<form method="POST" action="{{ route('admin.certificados.rechazar', $inscripcion->id) }}" style="display: inline;">
											@csrf
											<button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-x-circle"></i> Rechazar
                                    </button>
										</form>
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
				<div class="modal-header">
					<h5 class="modal-title" id="crearUsuarioModalLabel">Crear Nuevo Usuario</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
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
					<button type="submit" class="btn btn-primary">Crear Usuario</button>
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
				<div class="modal-header">
					<h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
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
					<button type="submit" class="btn btn-primary">Guardar Cambios</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal: Confirmación de Eliminación -->
<div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-danger text-white">
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
				<button type="button" class="btn btn-danger" id="confirmarEliminarBtn">Sí, Eliminar</button>
			</div>
		</div>
	</div>
</div>

@endsection @section('style')
<style>
	  :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #678ca3;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #27ae60;
            --error: #e74c3c;
            --border-radius: 8px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f5f7fa;
            color: var(--primary);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .admin-header {
            background: var(--primary);
            color: white;
            padding: 20px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            box-shadow: var(--box-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-title {
            margin: 0;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Navigation Tabs */
        .admin-tabs {
            display: flex;
            background: white;
            border-radius: var(--border-radius);
            padding: 5px;
            margin-bottom: 20px;
            box-shadow: var(--box-shadow);
        }

        .tab-item {
            padding: 12px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .tab-item.active {
            background: var(--secondary);
            color: white;
        }

        .tab-item:not(.active):hover {
            background: #e9f5ff;
        }

        /* Stats Card */
        .stats-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--box-shadow);
            border-left: 4px solid var(--secondary);
        }

        .stats-title {
            color: var(--accent);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .stats-value {
            font-size: 32px;
            font-weight: 700;
            margin: 0;
            color: var(--primary);
        }

        /* Users Table */
        .table-container {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .table-header {
            background: var(--primary);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title {
            margin: 0;
            font-weight: 600;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-box {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 4px;
            padding: 8px 15px;
            color: white;
            width: 250px;
        }

        .search-box::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f0f4f8;
            color: var(--primary);
            font-weight: 600;
            text-align: left;
            padding: 15px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            border-bottom: 1px solid #e1e8ed;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e1e8ed;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: #f8fafc;
        }

        /* Badges */
        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-admin {
            background: rgba(44, 62, 80, 0.1);
            color: var(--primary);
        }

        .badge-user {
            background: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
        }

        /* Action Buttons */
        .action-btn {
            padding: 8px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 5px;
        }

        .edit-btn {
            background: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
        }

        .edit-btn:hover {
            background: rgba(52, 152, 219, 0.2);
        }

        .delete-btn {
            background: rgba(231, 76, 60, 0.1);
            color: var(--error);
        }

        .delete-btn:hover {
            background: rgba(231, 76, 60, 0.2);
        }

        /* Footer */
        .table-footer {
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            border-top: 1px solid #e1e8ed;
        }

        .add-btn {
            background: var(--success);
            color: white;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 2px 8px rgba(39, 174, 96, 0.3);
            border: none;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .add-btn:hover {
            background: #219955;
        }
	
</style>
@endsection @section('script')
<script>
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