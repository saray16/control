@extends('layouts.app')

@section('title', 'Quiénes Somos - CENAMEC')

@section('content')

    <!-- Hero Section -->
    <section class="hero-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Empoderando el futuro de la educación</h1>
                    <p class="lead mb-4">Desde 1985, CENAMEC ha sido pionero en la transformación educativa, formando a las mentes más brillantes de Latinoamérica.</p>
                    <a href="#nuestra-historia" class="btn btn-primary-custom">Conoce nuestra historia</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Equipo CENAMEC" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre CENAMEC -->
    <section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texto -->
      <div class="col-lg-6">
        <h2 class="section-title mb-4" style="color: #2c3e50; font-weight: 700; font-size: 2.75rem;">
          Sobre <span style="color: #678ca3;">CENAMEC</span>
        </h2>
        <p class="lead mb-4" style="font-size: 1.25rem; color: #34495e;">
          El Centro Nacional para el Mejoramiento de la Enseñanza de la Ciencia (CENAMEC) es una institución comprometida con la excelencia educativa en Venezuela.
        </p>
        <p style="color: #4a4a4a; font-size: 1.1rem; line-height: 1.6;">
          Desde su creación, CENAMEC ha trabajado para mejorar la calidad de la enseñanza de las ciencias y matemáticas, desarrollando programas innovadores y formando a los profesionales de la educación.
        </p>
        <p style="color: #4a4a4a; font-size: 1.1rem; line-height: 1.6;">
          Nuestra misión es contribuir al desarrollo del Subsistema de Educación Básica a través de la investigación, formación y actualización continua de los trabajadores del sector educativo.
        </p>
      </div>

      <!-- Imagen decorativa o ilustrativa -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="ng" alt="Ilustración CENAMEC" class="img-fluid rounded shadow" style="max-width: 450px;">
      </div>
    </div>
  </div>
</section>

    <!-- CNPFCP -->
    <section class="py-5" style="background-color: #f8fafc;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Coordinación Nacional de Programas de Formación Continua y Permanente</h2>
      <div class="divider mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #2c3e50, #678ca3);"></div>
    </div>

    <div class="row g-4">
      <!-- Sección Origen y Propósito -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid #678ca3;">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-box me-3" style="background: linear-gradient(135deg, #2c3e50, #678ca3);">
                <i class="fas fa-history text-white"></i>
              </div>
              <h3 class="mb-0" style="color: #2c3e50;">Origen y Propósito</h3>
            </div>
            <p class="mb-4">Producto de la transferencia de los programas de formación (diplomados) desde los Programas No Conducentes a Grado a la Universidad Nacional del Magisterio "Samuel Robinson" (UNEMSR), surge en 2020 la CNPFCP.</p>
            
            <div class="highlight-box p-4 mb-3" style="background-color: rgba(103, 140, 163, 0.08); border-radius: 8px;">
              <h5 class="d-flex align-items-center" style="color: #2c3e50;">
                <i class="fas fa-bullseye me-2" style="color: #678ca3;"></i>
                Nuestro Propósito
              </h5>
              <p class="mb-0">Desarrollar programas de formación en el campo educativo para responder a las necesidades del Subsistema de Educación Básica, contribuyendo al desarrollo profesional de los trabajadores del sistema educativo.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección Gestión Formativa -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid #678ca3;">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-box me-3" style="background: linear-gradient(135deg, #2c3e50, #678ca3);">
                <i class="fas fa-network-wired text-white"></i>
              </div>
              <h3 class="mb-0" style="color: #2c3e50;">Gestión Formativa</h3>
            </div>
            
            <p class="mb-3">Nuestra gestión se desarrolla mediante trabajo articulado con:</p>
            
            <ul class="styled-list mb-4">
              <li class="d-flex align-items-start mb-2">
                <i class="fas fa-check-circle mt-1 me-2" style="color: #678ca3;"></i>
                <span>Dirección General de Investigación y Formación del CENAMEC</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <i class="fas fa-check-circle mt-1 me-2" style="color: #678ca3;"></i>
                <span>División de Investigación en cada Zona Educativa</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <i class="fas fa-check-circle mt-1 me-2" style="color: #678ca3;"></i>
                <span>Centros Regionales de Investigación (CRIF)</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="fas fa-check-circle mt-1 me-2" style="color: #678ca3;"></i>
                <span>Centros Locales de Investigación (CLIF)</span>
              </li>
            </ul>
            
            <div class="highlight-box p-3" style="background-color: rgba(103, 140, 163, 0.08); border-radius: 8px;">
              <p class="mb-0"><i class="fas fa-info-circle me-2" style="color: #678ca3;"></i> Planificamos la coordinación local de facilitadores para garantizar la formación en el territorio.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sección Certificación -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card border-0 shadow-sm" style="border-radius: 12px; background: linear-gradient(135deg, #f8ffc 0%, white 100%);">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-md-0">
                <h3 class="d-flex align-items-center" style="color: #2c3e50;">
                  <div class="icon-box me-3" style="background: linear-gradient(135deg, #2c3e50, #678ca3);">
                    <i class="fas fa-award text-white"></i>
                  </div>
                  Certificación y Reconocimiento
                </h3>
                <p class="mb-0 mt-2">La CNPFCP tiene la responsabilidad de reconocer y certificar las formaciones realizadas conforme a la evaluación de los facilitadores.</p>
              </div>
              <div class="col-md-4 text-md-end">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Funciones CNPFCP -->
    <section class="py-5" style="background-color: #f8fafc;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Funciones de la CNPFCP</h2>
      <div class="divider mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #2c3e50, #678ca3);"></div>
      <p class="lead mt-3" style="color: #678ca3;">Nuestras principales áreas de acción</p>
    </div>

    <div class="row g-4">
      <!-- Función 1 -->
      <div class="col-md-6">
        <div class="function-card h-100" style="border-left: 4px solid #678ca3;">
          <div class="function-number">1</div>
          <div class="function-content">
            <h5 style="color: #2c3e50;">Apoyo a acciones formativas</h5>
            <p>Brindar el apoyo requerido para llevar a cabo las acciones formativas dirigidas a las trabajadoras y los trabajadores en ejercicio del Sistema Educativo Venezolano que den respuestas a las necesidades del Subsistema de Educación Básica.</p>
          </div>
        </div>
      </div>

      <!-- Función 2 -->
      <div class="col-md-6">
        <div class="function-card h-100" style="border-left: 4px solid #678ca3;">
          <div class="function-number">2</div>
          <div class="function-content">
            <h5 style="color: #2c3e50;">Gestión de programas</h5>
            <p>Gestionar los programas de formación a partir del trabajo articulado con la Dirección General de Investigación y Formación del CENAMEC, la División de Investigación y Formación en cada Zona Educativa, conjuntamente con los responsables de los Centros Regionales e Locales de Investigación y Formación.</p>
          </div>
        </div>
      </div>

      <!-- Función 3 -->
      <div class="col-md-6">
        <div class="function-card h-100" style="border-left: 4px solid #678ca3;">
          <div class="function-number">3</div>
          <div class="function-content">
            <h5 style="color: #2c3e50;">Articulación interinstitucional</h5>
            <p>Articular acciones formativas dirigidas a las y los trabajadores de la educación con el apoyo del diferentes entes como UNEXCA, Escuela Nacional de Fiscales, UNES, CONAPDIS, Escuela de Fiscales del Ministerio Público, Universidad Latinoamericana del Caribe, UNFPA, UNEMSR, entre otros.</p>
          </div>
        </div>
      </div>

      <!-- Función 4 -->
      <div class="col-md-6">
        <div class="function-card h-100" style="border-left: 4px solid #678ca3;">
          <div class="function-number">4</div>
          <div class="function-content">
            <h5 style="color: #2c3e50;">Apoyo a organismos del Estado</h5>
            <p>Apoyar a diferentes organismos y entes del Estado que soliciten acciones formativas para sus trabajadores.</p>
          </div>
        </div>
      </div> 
           

    <!-- CTA -->
   <section class="py-5">
  <div class="container text-center">
    <h2 class="section-title mb-4">¿Necesitas más información sobre nuestros programas?</h2>
    <p class="lead mb-5">Contáctanos para conocer más sobre nuestras formaciones y cómo podemos apoyar el desarrollo profesional en el sector educativo.</p>
    <a href="contacto.html" class="btn btn-primary-custom me-3">Contáctanos</a>
    <div class="mt-3">
      <i class="fa fa-arrow-down fa-2x" aria-hidden="true" style="color:#007bff;"></i>
    </div>
  </div>
</section>

@endsection

<style>
  /* Botón principal personalizado */
  .btn-primary-custom {
    background: linear-gradient(45deg, #2c3e50, #678ca3);
    border: none;
    color: white;
    padding: 12px 28px;
    font-weight: 600;
    border-radius: 8px;
    transition: background 0.3s ease;
  }
  .btn-primary-custom:hover {
    background: linear-gradient(45deg, #1f2a37, #546d82);
    color: white;
  }

  /* Icon boxes */
  .icon-box {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Sección funciones */
  .function-card {
    background-color: white;
    padding: 20px 25px 20px 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(103, 140, 163, 0.1);
    position: relative;
  }
  .function-number {
    position: absolute;
    top: 20px;
    left: 10px;
    font-size: 2.5rem;
    font-weight: 700;
    color: #678ca3;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .function-content {
    margin-left: 50px;
  }


</style>
