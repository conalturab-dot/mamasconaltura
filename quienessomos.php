<?php
$page_title = "Quiénes Somos";
require_once 'includes/head.php'; 
require_once 'includes/navbar.php'; 
?>

<main class="container py-5 mt-5">

    <div class="text-center mb-5 fade-in-up">
        <span class="text-primary fw-bold text-uppercase ls-2">Nuestra Historia</span>
        <h1 class="display-4 fw-bold text-secondary mt-2">Quiénes Somos</h1>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
            Un restaurante que combina rapidez, sabor y un toque casero que nos distingue.
        </p>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-6">
            <div class="card h-100 bg-primary text-white border-0 shadow rounded-4 overflow-hidden card-hover position-relative">
                <div class="card-body p-5 d-flex flex-column justify-content-between position-relative z-1">
                    <i class="fa-solid fa-heart icon-bg-float icon-bg-heart text-white"></i>
                    
                    <div>
                        <div class="icon-circle bg-white bg-opacity-25 mb-4 text-white">
                            <i class="fa-solid fa-heart fs-4"></i>
                        </div>
                        <h2 class="fw-bold mb-3">Nuestra Misión</h2>
                        <p class="fs-5 opacity-75">Transmitir sabores auténticos y experiencias memorables a través de comida rápida preparada con dedicación y calidad.</p>
                    </div>
                    
                    <figure class="mt-4 border-start border-white border-4 ps-3 opacity-75 fst-italic">
                        "En Mamás Con Altura buscamos que cada cliente sienta que recibe un plato hecho con cariño y altura."
                    </figure>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card h-100 text-white border-0 shadow rounded-4 overflow-hidden card-hover position-relative" style="background-color: #f8873bff;">
                <div class="card-body p-4 position-relative z-1">
                    <i class="fa-solid fa-star icon-bg-float icon-bg-star text-white"></i>
                    
                    <div class="icon-circle bg-white bg-opacity-25 mb-4 text-white">
                        <i class="fa-solid fa-star fs-4"></i>
                    </div>
                    <h3 class="fw-bold mb-4">Nuestros Valores</h3>
                    <ul class="list-unstyled d-flex flex-column gap-3 fs-6 fw-medium">
                        <li><i class="fa-solid fa-check bg-white bg-opacity-25 rounded-circle p-1 me-2 fs-6"></i> Calidad en preparación</li>
                        <li><i class="fa-solid fa-check bg-white bg-opacity-25 rounded-circle p-1 me-2 fs-6"></i> Rapidez y sabor</li>
                        <li><i class="fa-solid fa-check bg-white bg-opacity-25 rounded-circle p-1 me-2 fs-6"></i> Cercanía con clientes</li>
                        <li><i class="fa-solid fa-check bg-white bg-opacity-25 rounded-circle p-1 me-2 fs-6"></i> Innovación en menú</li>
                        <li><i class="fa-solid fa-check bg-white bg-opacity-25 rounded-circle p-1 me-2 fs-6"></i> Servicio amable</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="d-flex flex-column h-100 gap-4" >
                
                <div class="card flex-grow-1 bg-mamas-blue text-white border-0 shadow rounded-4 overflow-hidden card-hover" >
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <div class="icon-circle bg-white bg-opacity-25 text-white" style="width: 45px; height: 45px;">
                                <i class="fa-solid fa-eye fs-5"></i>
                            </div>
                            <h4 class="fw-bold m-0">Visión</h4>
                        </div>
                        <p class="small opacity-75 m-0">
                            Expandirnos a nuevos mercados y formatos. Convertirnos en una marca reconocida por su calidad y espíritu familiar.
                        </p>
                    </div>
                </div>

                <div class="card bg-warning text-dark border-0 shadow rounded-4 overflow-hidden card-hover text-center">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-mug-hot fs-1 text-dark mb-2 opacity-50"></i>
                        <h4 class="fw-bold">Salchipapas & Frappés</h4>
                        <p class="small mb-3">El sabor que nos hace únicos.</p>
                        <a href="menu.php" class="btn btn-light rounded-pill fw-bold px-4 stretched-link">Ver Menú</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card bg-mamas-night text-white border-0 shadow rounded-4 overflow-hidden mt-2 card-hover">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8 p-5">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-circle bg-primary text-white">
                                <i class="fa-solid fa-users fs-4"></i>
                            </div>
                            <h2 class="fw-bold m-0">Nuestro Equipo</h2>
                        </div>
                        <p class="opacity-75 mb-3">
                            En <strong class="text-warning">Mamás ConAltura</strong> contamos con un equipo apasionado por el servicio y la gastronomía.
                        </p>
                        <p class="opacity-75 m-0">
                            Somos una familia que crece unida, apoyándose mutuamente para elevar siempre la calidad de nuestro servicio.
                        </p>
                    </div>
                    <div class="col-md-4 text-center bg-white bg-opacity-10 p-5 h-100 d-flex flex-column justify-content-center">
                        <img src="assets/img/logo-conaltura.png" alt="Equipo Mamás Con Altura" class="img-fluid mx-auto mb-3" style="max-height: 100px; filter: brightness(0) invert(1);">
                        <div class="fw-bold">Talento Humano</div>
                        <div class="small opacity-50">El corazón de nuestro sabor</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php require_once 'includes/footer.php'; ?>