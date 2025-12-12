<?php 
// 1. Lógica y Datos
$page_title = "Novedades"; 

// Datos simulados (Centralizados al inicio para mantener el HTML limpio)
$novedades = [
    [
        'titulo' => 'Festival del Pique Macho',
        'fecha'  => '12 Oct',
        'imagen' => 'https://placehold.co/600x400/1E5DBA/FFFFFF?text=Pique+Macho',
        'texto'  => 'Ven a disfrutar de nuestra versión especial del Pique Macho, con ingredientes locales y el toque picante perfecto.'
    ],
    [
        'titulo' => 'Noches de Música en Vivo',
        'fecha'  => '20 Oct',
        'imagen' => 'https://placehold.co/600x400/F0741E/FFFFFF?text=Musica+Vivo',
        'texto'  => 'Este viernes tendremos folclore nacional en vivo. Reserva tu mesa y disfruta de la mejor música con una cena inolvidable.'
    ],
    [
        'titulo' => '2x1 en Cócteles de Autor',
        'fecha'  => 'Noviembre',
        'imagen' => 'https://placehold.co/600x400/F14634/FFFFFF?text=Cocteles',
        'texto'  => 'Prueba nuestros nuevos cócteles inspirados en frutas bolivianas. Aprovecha la promoción de martes a jueves.'
    ],
    [
        'titulo' => 'Nuevo Menú Ejecutivo',
        'fecha'  => '01 Nov',
        'imagen' => 'https://placehold.co/600x400/FBB846/333333?text=Menu+Ejecutivo',
        'texto'  => 'Renovamos nuestro menú de almuerzo. Platos balanceados, deliciosos y servidos con la rapidez que necesitas.'
    ],
    [
        'titulo' => 'Taller de Salteñas',
        'fecha'  => '15 Nov',
        'imagen' => 'https://placehold.co/600x400/6EA6F3/FFFFFF?text=Taller+Cocina',
        'texto'  => 'Aprende los secretos de la masa y el jigote perfecto con nuestros chefs expertos. ¡Cupos limitados!'
    ],
    [
        'titulo' => 'Cena de Fin de Año',
        'fecha'  => '31 Dic',
        'imagen' => 'https://placehold.co/600x400/1E5DBA/FFFFFF?text=Fin+de+Año',
        'texto'  => 'Despide el año con una cena de gala, brindis y las mejores tradiciones para recibir el año nuevo con altura.'
    ]
];

// 2. Estructura de la Página
require_once 'includes/head.php'; 
require_once 'includes/navbar.php'; 
?>

<main class="container py-5 mt-4">
    
    <div class="text-center mb-5 fade-in-up">
        <h1 class="display-5 fw-bold text-primary mb-3">
            Novedades y Eventos
        </h1>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
            Descubre lo último en sabores, promociones y cultura en Mamás Con Altura.
        </p>
        <div class="d-inline-block border-bottom border-warning border-3" style="width: 80px;"></div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <?php foreach ($novedades as $index => $item): ?>
            <div class="col fade-in-up" style="animation-delay: <?php echo ($index * 0.1); ?>s;">
                <article class="card news-card h-100 border-0 shadow-sm">
                    
                    <div class="news-img-wrapper position-relative">
                        <img src="<?php echo $item['imagen']; ?>" class="card-img-top" alt="<?php echo $item['titulo']; ?>" loading="lazy">
                        <div class="news-date-badge shadow-sm">
                            <i class="fa-regular fa-calendar me-1"></i> <?php echo $item['fecha']; ?>
                        </div>
                    </div>
                    
                    <div class="card-body d-flex flex-column p-4">
                        <h3 class="card-title h4 fw-bold text-dark mb-3">
                            <?php echo $item['titulo']; ?>
                        </h3>
                        
                        <p class="card-text text-muted mb-4 flex-grow-1">
                            <?php echo $item['texto']; ?>
                        </p>
                        
                        <a href="#" class="btn btn-outline-primary rounded-pill align-self-start fw-bold btn-sm px-4" onclick="return false;">
                            Leer más
                        </a>
                    </div>
                    
                    <div class="card-footer p-0 border-0 bg-warning" style="height: 4px;"></div>
                </article>
            </div>
        <?php endforeach; ?>

    </div>

</main>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php require_once 'includes/footer.php'; ?>