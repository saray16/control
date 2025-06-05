<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'CNPFCP')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- En layouts/app.blade.php dentro del <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- Fuente Poppins desde Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Bootstrap CSS (si lo necesitas) -->






    <style>
        
        /* Aquí va todo el CSS que me diste */
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
            --error: #e74c3c;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--light);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary) !important;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            padding: 8px 15px !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: var(--light);
            padding: 90px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .hero-title {
            font-weight: 800;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            position: relative;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-subtitle {
            font-weight: 400;
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            position: relative;
            opacity: 0.9;
        }

        .category-title {
            font-weight: 700;
            font-size: 1.8rem;
            margin: 60px 0 30px;
            color: var(--text-dark);
            position: relative;
            padding-bottom: 15px;
        }

        .category-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 2px;
        }

        /* Estilos mejorados para las tarjetas */
        .course-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            background: white;
        }

        .course-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            transform: translateY(-8px);
        }

        .course-img {
            height: 180px;
            background: linear-gradient(135deg, var(--secondary) 0%, var(--accent) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3.5rem;
            position: relative;
            overflow: hidden;
        }

        .course-img i {
            transition: all 0.3s ease;
            z-index: 1;
        }

        .course-card:hover .course-img i {
            transform: scale(1.1);
        }

        .course-img::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.1)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }

        .course-body {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .course-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 15px;
            color: var(--text-dark);
            line-height: 1.4;
            min-height: 70px;
        }

        .course-description {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.6;
            flex: 1;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        .course-rating {
            color: #fab437;
            font-weight: 700;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .course-rating i {
            margin-right: 3px;
        }

        .course-price {
            font-weight: 700;
            color: var(--text-dark);
            font-size: 1.1rem;
        }

        .original-price {
            text-decoration: line-through;
            color: var(--text-light);
            font-size: 0.9rem;
            margin-left: 5px;
        }

        .btn-enroll {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            font-weight: 600;
            padding: 10px 15px;
            border-radius: 8px;
            width: 100%;
            border: none;
            transition: all 0.3s ease;
            margin-top: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-enroll i {
            margin-right: 8px;
        }

        .btn-enroll:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
            color: white;
        }

        /* Estilos específicos para tipos de formaciones */
        .ia-card .course-img {
            background: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);
        }

        .diploma-card .course-img {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .workshop-card .course-img {
            background: linear-gradient(135deg, #f46b45 0%, #eea849 100%);
        }

        .science-card .course-img {
            background: linear-gradient(135deg, #1a2980 0%, #26d0ce 100%);
        }

        .math-card .course-img {
            background: linear-gradient(135deg, #614385 0%, #516395 100%);
        }

        /* Sección de formulario */
        .form-section {
            background: var(--light);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin: 2rem auto;
            max-width: 1000px;
        }

        .required-field::after {
            content: " *";
            color: var(--error);
        }

        .alert-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            max-width: 400px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 15px;
        }

        .icon-input {
            position: relative;
        }

        .icon-input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            z-index: 2;
        }

        .icon-input .form-control {
            padding-left: 40px;
        }

        .section-title {
            font-size: 22px;
            font-weight: 700;
            padding-bottom: 8px;
            margin-bottom: 25px;
            border-bottom: 3px solid var(--primary);
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent);
        }

        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 6px;
            display: none;
            font-weight: 500;
        }

        .success {
            background-color: rgba(39, 174, 96, 0.1);
            color: var(--success);
            border-left: 4px solid var(--success);
            display: block !important;
        }

        .error {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--error);
            border-left: 4px solid var(--error);
            display: block !important;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }
               /* Footer */
               footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 30px 0 20px;
        }

        .footer-logo {
            max-width: 100px;
            margin-bottom: 15px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--light);
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }


        .footer-links i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 25px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255,255,255,0.6);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .course-title {
                min-height: auto;
            }
        }
        .navbar {
                 position: fixed;
                 top: 0;
                 width: 100%;
                z-index: 1030;
         }

         body {
             padding-top: 56px; /* Ajusta según la altura de tu navbar */
        }

        .hidden{
            display: none;
        }
/* Sidebar styles */

.sidebar {
  width: 250px;
  background-color: #f8f9fa;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.sidebar-sticky {
  padding-top: 1rem;
  padding-bottom: 2rem;
}

.sidebar-heading {
  font-size: 1.1rem;
  font-weight: 600;
  color: #495057;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid #dee2e6;
}

.sidebar-subheading {
  font-size: 0.85rem;
  font-weight: 600;
  color: #6c757d;
  margin-top: 1rem;
}

.nav-link {
  color: #495057;
  border-radius: 0.25rem;
  margin-bottom: 0.25rem;
  transition: all 0.2s;
}

.nav-link:hover {
  color: #0d6efd;
  background-color: rgba(13, 110, 253, 0.1);
}

.nav-link.active {
  color: #0d6efd;
  background-color: rgba(13, 110, 253, 0.1);
  font-weight: 500;
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
 /* Estilos para Sidebar Fijo */
 
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: var(--light);
    padding: 20px;
    box-shadow: 2px 0 15px rgba(0,0,0,0.1);
    z-index: 1000;
    display: flex;
    flex-direction: column;
}

.sidebar h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar li {
    margin-bottom: 15px;
}

.sidebar a {
    color: var(--light);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.sidebar a:hover {
    text-decoration: underline;
}

/* Ajustes del contenido principal */
.main-content {
    margin-left: 250px;
    padding: 20px;
}

/* Responsive Sidebar */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }
    .main-content {
        margin-left: 200px;
    }
}

@media (max-width: 576px) {
    .sidebar {
        position: relative;
        width: 100%;
        height: auto;
        flex-direction: row;
        justify-content: space-around;
        padding: 10px;
    }
    .main-content {
        margin-left: 0;
        padding-top: 80px;
    }
    .sidebar h2 {
        display: ;
    }
}
.category-filter.active {
    font-weight: bold;
    background-color: #f0f0f0;
    color: #0066cc;
}
.category-filter.active {
  background-color: #007bff;
  color: white;
}

.course-card {
  transition: all 0.3s ease;
}

.col-md-4.mb-4 {
  transition: all 0.3s ease;
}

    .highlight-courses {
        border-left: 4px solid #ffc107;
        transition: all 0.3s ease;
    }
    .highlight-courses:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    #inscripcion.fixed-top-form {
    position: fixed;
    top: 80px; /* Ajusta según la altura de tu header */
    left: 0;
    right: 0;
    z-index: 1000;
    background: white;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-height: 80vh;
    overflow-y: auto;
    display: none; /* Inicialmente oculto */
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-book-half"></i>CNPFCP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('historia') ? 'active' : '' }}" href="{{ url('historia') }}">Quiénes Somos</a>
                </li>

                @auth
                    <li class="nav-item">
                        <span class="nav-link">Bienvenido, {{ Auth::user()->name }}</span>
                    </li>
                    @if (Auth::user()->rol === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}">Panel Admin</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('usuario') }}">Mi Panel</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registro') }}">Registrarse</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>



    <main class="container py-4">
        @yield('content')
    </main>
     <!-- Footer con logo -->
     <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="#">
                    <img src="cenamec.jpeg" alt="Logo CENAMEC" class="footer-logo">
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Dirección</h5>
                <ul class="footer-links">
                    <li>Parroquia Altagracia, Esquina de Salas, Edificio</li>
                    <li>Sede MPPE - piso 5 Zona Postal 1010, Municipio</li>
                    <li>Libertador Caracas-Venezuela</li>
                    <li>RIF: G-200087854</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Contacto</h5>
                <ul class="footer-links">
                    <li><i class="bi bi-telephone"></i> +58 212 5638244</li>
                    <li><i class="bi bi-telephone"></i> +58 212 5648030</li>
                    <li><i class="bi bi-telephone"></i> +58 212 5640232</li>
                    <li><i class="bi bi-envelope"></i> @fundacioncenamec</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Redes Sociales</h5>
                <ul class="footer-links">
                    <li><i class="bi bi-twitter"></i> @CenamecFormaeInforma</li>
                    <li><i class="bi bi-twitter"></i> @Funda_cenamec1</li>
                    <li><i class="bi bi-facebook"></i> @FundacionCename</li>
                    <li><i class="bi bi-instagram"></i> @FundaCenamec</li>
                </ul>
            </div>
                
            </div>
            <div class="copyright text-center">
                <p>© <?= date('Y') ?> CENAMEC. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (Popper + Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
   
</body>
</html>
