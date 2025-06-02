@extends('layouts.app')

@section('content')
<style>
:root {
    --primary: #2c3e50;
    --secondary: #3498db;
    --accent: rgb(103, 140, 163);
    --light: #f8f9fa;
    --dark: #343a40;
    --text-dark: #2c3e50;
    --text-light: #6c757d;
    --border: #ced4da;
    --success: #27ae60;
    --warning: #f1c40f;
    --error: #e74c3c;
}

.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: var(--primary) !important;
    color: white !important;
    font-weight: 700;
    font-size: 1.3rem;
}

.table thead th {
    background-color: var(--accent);
    color: white;
    font-weight: 600;
}

.table tbody td {
    vertical-align: middle;
    font-weight: 500;
    color: var(--text-dark);
}

.table-bordered {
    border: 2px solid var(--border);
}

.table-bordered th,
.table-bordered td {
    border: 1px solid var(--border);
}

.badge.bg-success {
    background-color: var(--success) !important;
}

.badge.bg-warning {
    background-color: var(--warning) !important;
    color: var(--dark) !important;
}

.badge.bg-danger {
    background-color: var(--error) !important;
}

.btn-outline-primary {
    color: var(--primary) !important;
    border-color: var(--primary) !important;
}

.btn-outline-primary:hover {
    background-color: var(--primary) !important;
    color: white !important;
}

a.btn-outline-primary i {
    margin-left: 5px;
}

.text-muted {
    color: var(--text-light) !important;
}

tr td .badge.bg-success {
    box-shadow: 0 0 5px rgba(39, 174, 96, 0.5);
}

tr td .badge.bg-warning {
    box-shadow: 0 0 5px rgba(241, 196, 15, 0.5);
}
</style>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Historial Académico del Usuario</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Módulo / Unidad</th>
                            <th>Finalización</th>
                            <th>Nota</th>
                            <th>Comentarios</th>
                            <th>Certificado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo: Curso -->
                        <tr>
                            <td>Curso</td>
                            <td>Programación Básica</td>
                            <td><span class="badge bg-success">Completado</span></td>
                            <td>Módulo 4</td>
                            <td>15 abril 2025</td>
                            <td>18 / 20</td>
                            <td>Excelente participación</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    Descargar <i class="bi bi-file-earmark-arrow-down"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- Ejemplo: Taller -->
                        <tr>
                            <td>Taller</td>
                            <td>Comunicación Efectiva</td>
                            <td><span class="badge bg-warning text-dark">En progreso</span></td>
                            <td>Módulo 2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <span class="text-muted">No disponible</span>
                            </td>
                        </tr>

                        <!-- Ejemplo: Diplomado -->
                        <tr>
                            <td>Diplomado</td>
                            <td>Gerencia Pública</td>
                            <td><span class="badge bg-success">Completado</span></td>
                            <td>Todos</td>
                            <td>01 mayo 2025</td>
                            <td>19 / 20</td>
                            <td>Certificado emitido por la Universidad</td>
                            <td>
                         
    Descargar <i class="bi bi-file-earmark-arrow-down"></i>


                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
