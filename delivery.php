<?php
// 1. Configuración
$page_title = "Delivery";

// 2. Encabezado y Navegación
require_once 'includes/head.php';
require_once 'includes/navbar.php';
?>

<header class="hero-delivery text-center fade-in-up">
    <div class="container">
        <div class="mb-3 display-1 text-white opacity-25">
            <i class="fa-solid fa-motorcycle"></i>
        </div>
        <h1 class="display-4 fw-bold mb-3">¡Llevamos el sabor a tu puerta!</h1>
        <p class="lead text-white opacity-75 mx-auto" style="max-width: 600px;">
            Rápido, caliente y listo para disfrutar. Sin salir de casa.
        </p>
    </div>
</header>

<main class="container py-5">
    
    <div class="row g-4 mb-5 justify-content-center">
        <div class="col-md-6 col-lg-3">
            <div class="delivery-step-card h-100 fade-in-up" style="animation-delay: 0.1s;">
                <div class="delivery-icon">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <h3 class="h5 fw-bold text-dark">Horarios</h3>
                <p class="text-muted small mb-0">
                    <strong>Lun - Sab:</strong> 8:30 - 16:00<br>
                    <strong>Dom:</strong> 12:00 - 17:00
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="delivery-step-card h-100 fade-in-up" style="animation-delay: 0.2s;">
                <div class="delivery-icon">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <h3 class="h5 fw-bold text-dark">Cobertura</h3>
                <p class="text-muted small mb-0">
                    Todos los pedidos son recepcionados dentro de la circunvalacion - Oruro
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="delivery-step-card h-100 fade-in-up" style="animation-delay: 0.3s;">
                <div class="delivery-icon">
                    <i class="fa-solid fa-stopwatch"></i>
                </div>
                <h3 class="h5 fw-bold text-dark">Tiempo</h3>
                <p class="text-muted small mb-0">
                    Entre <strong>30 a 45 min</strong> según tráfico y demanda.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="delivery-step-card h-100 fade-in-up" style="animation-delay: 0.4s;">
                <div class="delivery-icon">
                    <i class="fa-solid fa-sack-dollar"></i>
                </div>
                <h3 class="h5 fw-bold text-dark">Costo</h3>
                <p class="text-muted small mb-0">
                    <strong>10 a 20 Bs</strong> Según distancia.<br>
                    <span class="text-success fw-bold">¡Gratis > 150 Bs!</span>
                </p>
            </div>
        </div>
    </div>

    <section class="bg-warning rounded-4 p-5 text-center shadow-sm mb-5 position-relative overflow-hidden">
        <div class="position-relative z-1">
            <h2 class="fw-bold text-dark mb-3">¿No sabes qué pedir hoy?</h2>
            <p class="mb-4 text-dark fs-5">Descubre nuestros combos familiares y especiales del día.</p>
            <a href="menu.php" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-sm">
                <i class="fa-solid fa-utensils me-2"></i> Ver Menú Completo
            </a>
        </div>
        <i class="fa-solid fa-burger position-absolute text-white opacity-25" style="font-size: 15rem; top: -50px; left: -50px;"></i>
    </section>

    <section class="text-center py-4 mb-5">
        <h2 class="text-primary fw-bold mb-3">Haz tu pedido ahora</h2>
        <p class="text-muted mb-4">Envíanos tu pedido y ubicación GPS directamente por WhatsApp.</p>
        
        <a href="https://wa.link/u0a667" target="_blank" class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp fa-xl"></i> Pedir por WhatsApp
        </a>
    </section>

    <section class="card border-0 shadow-sm p-4 p-md-5 rounded-4">
        <h3 class="text-center text-primary fw-bold mb-5">Preguntas Frecuentes</h3>
        
        <div class="row g-4">
            <div class="col-md-6">
                <h5 class="fw-bold text-dark"><i class="fa-regular fa-circle-question text-warning me-2"></i> ¿Cómo realizo mi pedido?</h5>
                <p class="text-muted small">Elige tus platos del menú, haz clic en el botón de WhatsApp y envíanos el detalle junto con tu ubicación.</p>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold text-dark"><i class="fa-regular fa-circle-question text-warning me-2"></i> ¿Qué formas de pago aceptan?</h5>
                <p class="text-muted small">Efectivo (indica si necesitas cambio), transferencia bancaria y pago QR contra entrega.</p>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold text-dark"><i class="fa-regular fa-circle-question text-warning me-2"></i> ¿Llega caliente?</h5>
                <p class="text-muted small">Sí, utilizamos mochilas térmicas aislantes de grado profesional para mantener la temperatura.</p>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold text-dark"><i class="fa-regular fa-circle-question text-warning me-2"></i> ¿Puedo programar pedidos?</h5>
                <p class="text-muted small">¡Claro! Escríbenos temprano para asegurar tu almuerzo o cena a una hora exacta.</p>
            </div>
        </div>
    </section>

</main>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php require_once 'includes/footer.php'; ?>