<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
  <div class="container">
    
    <a class="navbar-brand" href="menu.php">
        <img src="assets/img/logo-mamas.png" alt="Mamás Con Altura" height="50">
    </a>

    <div class="d-flex align-items-center order-lg-last gap-2">
        
        <div class="position-relative btn-cart-container">
            <div class="btn-cart">
                <button type="button" class="btn btn-transparent p-1 position-relative border-0">
                    <i class="fa-solid fa-cart-shopping fs-4 text-primary"></i>
                    <span id="cartCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
                
                <div class="cart shadow-lg rounded-3">
                    <div class="cart-responsive p-3">
                        <table class="table table-sm align-middle mb-0">
                            <thead>
                                <tr class="text-secondary small">
                                    <th>Img</th>
                                    <th>Desc</th>
                                    <th>Precio</th>
                                    <th style="width: 50px;">Cant.</th> 
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="contentProducts"></tbody>
                        </table>
                        
                        <div class="cart-footer mt-3 border-top pt-3 text-center">
                            <h5 class="fw-bold text-dark">Total: <span id="total" class="text-primary">Bs 0.00</span></h5>
                            <button type="button" id="emptyCart" class="btn btn-outline-danger btn-sm rounded-pill w-100 mt-2">
                                <i class="fa-solid fa-trash-can me-2"></i> Vaciar Carrito
                            </button>
                            <a href="#" id="procesarPedido" class="btn btn-primary btn-sm rounded-pill w-100 mt-2 fw-bold">
                                <i class="fa-brands fa-whatsapp me-1"></i> Enviar Pedido
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item"><a class="nav-link" href="menu.php">Menú</a></li>
        <li class="nav-item"><a class="nav-link" href="delivery.php">Delivery</a></li>
        <li class="nav-item"><a class="nav-link" href="restaurantes.php">Restaurantes</a></li>
        <li class="nav-item"><a class="nav-link" href="quienessomos.php">¿Quiénes Somos?</a></li>
        <li class="nav-item"><a class="nav-link" href="novedades.php">Novedades</a></li>
      </ul>
    </div>
  </div>
</nav>