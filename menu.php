<?php
$page_title = "Menú"; 

// Datos (Base de datos simulada)
$plato_domingo = [
    'id'     => 'dom-01',
    'nombre' => 'Chancho a la Cruz',
    'desc'   => 'Carne de cerdo jugosa y tierna, asada lentamente...',
    'precio' => '70.00',
    'imagen' => 'assets/img/chancho-cruz.png'
];

$salchipapas = [
    ['id' => 'sal-1', 'nombre' => 'Economico', 'desc' => 'Papas crujientes...', 'precio' => '5.00',  'imagen' => 'assets/img/salchi1.jpg'],
    ['id' => 'sal-2', 'nombre' => 'Escolar',   'desc' => 'Porción ideal...',    'precio' => '8.00',  'imagen' => 'assets/img/salchi2.png'],
    ['id' => 'sal-3', 'nombre' => 'Normal',    'desc' => 'Más papas...',        'precio' => '12.00', 'imagen' => 'assets/img/salchi3.jpg'],
    ['id' => 'sal-4', 'nombre' => 'Mega',      'desc' => 'Extra grande...',     'precio' => '18.00', 'imagen' => 'assets/img/salchi4.png']
];

$hamburguesas = [
    ['id' => 'ham-1', 'nombre' => 'La Poderosa',    'desc' => 'Carne 200g...',      'precio' => '30.00', 'imagen' => 'assets/img/hambur1.jpg'],
    ['id' => 'ham-2', 'nombre' => 'Crispy Chicken', 'desc' => 'Pollo empanizado...', 'precio' => '25.00', 'imagen' => 'assets/img/hambur2.jpg'],
    ['id' => 'ham-3', 'nombre' => 'Veggie',         'desc' => 'Medallón...',        'precio' => '28.00', 'imagen' => 'assets/img/hambur3.jpg']
];

$frappes = [
    ['id' => 'fra-1', 'sabor' => 'Oreo',         'precio' => '18.00', 'imagen' => 'assets/img/frape1.jpg'],
    ['id' => 'fra-2', 'sabor' => 'Mocaccino',    'precio' => '18.00', 'imagen' => 'assets/img/frape2.jpg'],
    ['id' => 'fra-3', 'sabor' => 'Frutos Rojos', 'precio' => '20.00', 'imagen' => 'assets/img/frape3.jpg'],
    ['id' => 'fra-4', 'sabor' => 'Maracuyá',     'precio' => '18.00', 'imagen' => 'assets/img/frape4.jpg']
];

require_once 'includes/head.php'; 
require_once 'includes/navbar.php'; 
?>

<main class="container py-5 mt-5">
    
    <hr class="my-5 border-secondary border-opacity-25 dashed-divider">

    <section id="domingo" class="mb-5">
        <div class="card bg-primary text-white shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-warning text-dark fw-bold text-uppercase py-3 text-center">
                <i class="fa-solid fa-star"></i> Especial del Domingo
            </div>
            <div class="card-body p-0">
                <div class="row g-0"> 
                    <div class="col-md-6 order-md-1">
                        <img src="<?php echo htmlspecialchars($plato_domingo['imagen']); ?>" class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 300px;" alt="<?php echo htmlspecialchars($plato_domingo['nombre']); ?>">
                    </div>
                    <div class="col-md-6 order-md-2 p-4 p-md-5 text-center d-flex flex-column justify-content-center">
                        <h2 class="display-6 fw-bold mb-3"><?php echo htmlspecialchars($plato_domingo['nombre']); ?></h2>
                        <p class="lead mb-4"><?php echo htmlspecialchars($plato_domingo['desc']); ?></p>
                        <div> 
                            <div class="d-inline-block bg-white text-danger fw-bold rounded-pill px-4 py-2 fs-3 mb-4 shadow-sm">
                                Bs <?php echo htmlspecialchars($plato_domingo['precio']); ?>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-light btn-lg text-primary fw-bold px-5 rounded-pill agregar-carrito"
                                data-id="<?php echo $plato_domingo['id']; ?>"
                                data-titulo="<?php echo htmlspecialchars($plato_domingo['nombre']); ?>"
                                data-precio="<?php echo $plato_domingo['precio']; ?>"
                                data-imagen="<?php echo htmlspecialchars($plato_domingo['imagen']); ?>">
                                Añadir al Carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fastfood" class="mb-5">
        <h3 class="mb-4 text-primary border-bottom border-warning border-3 d-inline-block pb-1">
            <i class="fa-solid fa-burger"></i> Hamburguesas
        </h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($hamburguesas as $hamb): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm border-start-orange">
                    <img src="<?php echo htmlspecialchars($hamb['imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($hamb['nombre']); ?>" style="aspect-ratio: 1/1; object-fit: cover; width: 100%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title fw-bold text-dark m-0"><?php echo htmlspecialchars($hamb['nombre']); ?></h5>
                            <span class="badge bg-danger fs-6">Bs <?php echo htmlspecialchars($hamb['precio']); ?></span>
                        </div>
                        <p class="card-text text-muted small"><?php echo htmlspecialchars($hamb['desc']); ?></p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0">
                        <button class="btn btn-outline-primary w-100 agregar-carrito"
                            data-id="<?php echo $hamb['id']; ?>"
                            data-titulo="<?php echo htmlspecialchars($hamb['nombre']); ?>"
                            data-precio="<?php echo htmlspecialchars($hamb['precio']); ?>"
                            data-imagen="<?php echo htmlspecialchars($hamb['imagen']); ?>">
                            Añadir al Carrito
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="salchipapas" class="mb-5">
        <h3 class="mb-4 text-danger border-bottom border-danger border-3 d-inline-block pb-1">
            <i class="fa-solid fa-drumstick-bite"></i> Salchipapas
        </h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($salchipapas as $salchi): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm border-start-red">
                    <img src="<?php echo htmlspecialchars($salchi['imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($salchi['nombre']); ?>" style="aspect-ratio: 1/1; object-fit: cover; width: 100%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title fw-bold text-dark m-0"><?php echo htmlspecialchars($salchi['nombre']); ?></h5>
                            <span class="badge bg-danger fs-6">Bs <?php echo htmlspecialchars($salchi['precio']); ?></span>
                        </div>
                        <p class="card-text text-muted small"><?php echo htmlspecialchars($salchi['desc']); ?></p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0">
                        <button class="btn btn-outline-danger w-100 agregar-carrito"
                            data-id="<?php echo $salchi['id']; ?>"
                            data-titulo="<?php echo htmlspecialchars($salchi['nombre']); ?>"
                            data-precio="<?php echo htmlspecialchars($salchi['precio']); ?>"
                            data-imagen="<?php echo htmlspecialchars($salchi['imagen']); ?>">
                            Añadir al Carrito
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="frappes" class="p-4 rounded-4 bg-gradient-blue mb-5 text-white" style="background: linear-gradient(to right, #1E5DBA, #51b3d6);">
        <h3 class="text-center mb-4 text-shadow"><i class="fa-solid fa-snowflake"></i> Frappés Refrescantes</h3>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <?php foreach($frappes as $frap): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow text-center rounded-4 overflow-hidden">
                    <img src="<?php echo htmlspecialchars($frap['imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($frap['sabor']); ?>" style="aspect-ratio: 4/5; object-fit: cover; width: 100%;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-dark fw-bold"><?php echo htmlspecialchars($frap['sabor']); ?></h5>
                            <p class="fw-bold text-warning fs-5 mb-3">Bs <?php echo htmlspecialchars($frap['precio']); ?></p>
                        </div>
                        <button class="btn btn-outline-primary w-100 mt-auto agregar-carrito"
                            data-id="<?php echo $frap['id']; ?>"
                            data-titulo="<?php echo htmlspecialchars($frap['sabor']); ?>"
                            data-precio="<?php echo htmlspecialchars($frap['precio']); ?>"
                            data-imagen="<?php echo htmlspecialchars($frap['imagen']); ?>">
                            Añadir al Carrito
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>
<?php require_once 'includes/footer.php'; ?>