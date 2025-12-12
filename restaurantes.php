<?php
// 1. CONFIGURACIÓN
$page_title = "Ubicación";

// URL del mapa (Puse una genérica de Oruro, cambia el 'src' del iframe por tu link real de Google Maps Embed)
$map_url = "https://www.google.com/maps/embed/v1/place?q=Soria%20Galvarro%20%26%20Calle%20Aldana&key=AIzaSyASOfV00RidAAP3lH5vlVtfgVH8Wxnqvn0";
?>

<?php require_once 'includes/head.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<div style="background-color: #f9fafb; min-height: 100vh;">

    <main class="container py-5 mt-5">
        
        <div class="text-center mb-5 fade-in-up">
            <h1 class="display-5 fw-bold text-primary mb-3">
                Encuéntranos Aquí <span class="text-secondary">– Mamás Con Altura</span>
            </h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                ¡El sabor está a la vuelta de la esquina! Estamos ubicados en una zona céntrica y accesible de Oruro.
            </p>
            <div class="d-inline-block border-bottom border-warning border-3" style="width: 80px;"></div>
        </div>

        <div class="row g-4 align-items-stretch">
            
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden position-relative">
                    <div class="bg-primary" style="height: 6px;"></div>
                    
                    <div class="card-body p-4 p-md-5">
                        
                        <div class="d-flex mb-4 align-items-start">
                            <div class="flex-shrink-0">
                                <div class="icon-circle bg-orange-light text-primary">
                                    <i class="fa-solid fa-location-dot fs-4"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="fw-bold text-secondary mb-1">Nuestra Dirección</h4>
                                <p class="text-muted mb-0">
                                    Calle Soria Galvarro y Aldana,<br>
                                    <span class="fw-bold text-dark">Frente al colegio Reekie.</span><br>
                                    Oruro – Bolivia.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mb-5 align-items-start">
                            <div class="flex-shrink-0">
                                <div class="icon-circle bg-blue-light text-secondary">
                                    <i class="fa-regular fa-clock fs-4"></i>
                                </div>
                            </div>
                            <div class="ms-3 w-100">
                                <h4 class="fw-bold text-secondary mb-1">Horarios de Atención</h4>
                                <ul class="list-unstyled text-muted mb-0">
                                    <li class="d-flex justify-content-between border-bottom py-2">
                                        <span>Lun - Sáb:</span>
                                        <span class="fw-bold text-dark">10:00 AM - 16:00 PM</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-2">
                                        <span>Domingos:</span>
                                        <span class="fw-bold text-dark">12:00 PM - 17:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-grid gap-3">
                            <a href="https://maps.app.goo.gl/MgeFrZ4tPjKmTeDS9" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                <i class="fa-solid fa-map-location-dot me-2"></i> Abrir en Google Maps
                            </a>
                            <a href="https://wa.link/u0a667" class="btn btn-outline-secondary rounded-pill">
                                <i class="fa-solid fa-phone me-2"></i> Llamar al Local
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 min-h-map position-relative">
                    
                    <div class="position-absolute top-50 start-50 translate-middle z-0">
                        <div class="spinner-border text-primary" role="status"></div>
                    </div>

                    <iframe 
                        src="<?php echo $map_url; ?>" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 450px; position: relative; z-index: 1;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <div class="position-absolute bottom-0 start-0 m-3 p-3 bg-white rounded-3 shadow z-2 d-none d-md-block border-start-orange">
                        <div class="d-flex align-items-center gap-2">
                            <span class="d-block rounded-circle bg-success p-1 animate-pulse"></span>
                            <small class="fw-bold text-secondary">Zona Central</small>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
</div>

<?php require_once 'includes/footer.php'; ?>