@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4 fw-bold text-primary">Panel de Administración</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

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
    </ul>

    <div style="height: 48px;"></div>

    <div class="tab-content mt-3" id="adminTabsContent">

        <!-- TAB: Usuarios -->
        <div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-person-lines-fill me-1"></i> Lista de Usuarios</h5>
                    <input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-usuarios')">
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
                                        <a href="#" class="btn btn-outline-primary btn-sm me-1" title="Editar usuario">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('¿Eliminar este usuario?')" class="btn btn-outline-danger btn-sm" title="Eliminar usuario">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-muted">No hay usuarios registrados.</td>
                                </tr>
                                @endforelse
                                <!-- Fila con botón para crear usuario -->
                                <tr>
                                    <td colspan="4" class="text-end fw-semibold">Crear nuevo usuario:</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#crearUsuarioModal">
                                            <i class="bi bi-plus-lg"></i> Nuevo
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB: Control de Estudios -->
        <div class="tab-pane fade" id="control-estudios" role="tabpanel" aria-labelledby="control-estudios-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-mortarboard-fill me-1"></i> Registros Académicos</h5>
                    <input type="text" class="form-control form-control-sm w-auto" placeholder="Buscar..." onkeyup="filterTable(this, 'table-control')">
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

    </div>
</div>

<!-- Modal para crear nuevo usuario -->
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
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
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
            <input type="password" class="form-control" id="password" name="password" required>
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

<script>
    function filterTable(input, tableId) {
        const filter = input.value.toLowerCase();
        const rows = document.querySelectorAll(`#${tableId} tbody tr`);
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
    }
</script>
@endsection

@section('script')
    <script type="module" src="{{ asset('js/abrirVentana.js') }}"></script>
@endsection
