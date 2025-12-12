// ==========================================
// 1. VARIABLES GLOBALES
// ==========================================
const carrito = document.querySelector('#contentProducts'); 
const listaProductos = document.querySelector('main');      
const vaciarCarritoBtn = document.querySelector('#emptyCart');
// NUEVO: Seleccionamos el botón de procesar pedido
const procesarPedidoBtn = document.querySelector('#procesarPedido'); 

const contadorCarrito = document.querySelector('#cartCount');
const totalCarrito = document.querySelector('#total');
let articulosCarrito = [];

// ==========================================
// 2. LISTENERS
// ==========================================
cargarEventListeners();

function cargarEventListeners() {
    // A) Agregar productos (usando delegación segura)
    listaProductos?.addEventListener('click', agregarProducto);
    
    // B) Eliminar productos del carrito
    carrito?.addEventListener('click', eliminarProducto);
    
    // C) Vaciar todo
    vaciarCarritoBtn?.addEventListener('click', () => {
        articulosCarrito = [];
        limpiarHTML();
        actualizarTotales();
        mostrarAlerta('Carrito vaciado', 'alert-danger'); 
    });

    // D) NUEVO: Enviar pedido a WhatsApp
    procesarPedidoBtn?.addEventListener('click', enviarPedidoWhatsApp);

    // E) Cargar LocalStorage
    document.addEventListener('DOMContentLoaded', () => {
        articulosCarrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carritoHTML();
    });

    // F) LÓGICA MÓVIL: Toggle menú
    const btnIcono = document.querySelector('.btn-cart button');
    const menuCarrito = document.querySelector('.cart');

    if (btnIcono && menuCarrito) {
        btnIcono.addEventListener('click', (e) => {
            e.stopPropagation();
            menuCarrito.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (menuCarrito.classList.contains('active')) {
                // Cierra si el clic NO es dentro del carrito Y NO es en el botón
                if (!menuCarrito.contains(e.target) && !btnIcono.contains(e.target)) {
                    menuCarrito.classList.remove('active');
                }
            }
        });
    }
}

// ==========================================
// 3. FUNCIONES PRINCIPALES
// ==========================================

function agregarProducto(e) {
    // Buscamos el elemento que tenga la clase 'agregar-carrito'
    const btn = e.target.closest('.agregar-carrito');

    if (!btn) return;
    
    e.preventDefault();
    leerDatosProducto(btn);
    mostrarAlerta('Producto agregado al carrito', 'alert-success');
}

function eliminarProducto(e) {
    const btn = e.target.closest('.borrar-curso');
    
    if (btn) {
        e.preventDefault();
        const productoId = btn.getAttribute('data-id');
        articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);
        carritoHTML(); 
        mostrarAlerta('Producto eliminado', 'alert-warning');
    }
}

function leerDatosProducto(btn) {
    const infoProducto = {
        imagen: btn.getAttribute('data-imagen'),
        titulo: btn.getAttribute('data-titulo'),
        precio: parseFloat(btn.getAttribute('data-precio')),
        id: btn.getAttribute('data-id'),
        cantidad: 1
    }

    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
    
    if (existe) {
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
                return producto; 
            } else {
                return producto; 
            }
        });
        articulosCarrito = [...productos];
    } else {
        articulosCarrito = [...articulosCarrito, infoProducto];
    }

    carritoHTML();
}

function carritoHTML() {
    limpiarHTML();

    articulosCarrito.forEach(producto => {
        const { imagen, titulo, precio, cantidad, id } = producto;
        const row = document.createElement('tr');

        row.innerHTML = `
            <td><img src="${imagen}" alt="producto"></td>
            <td class="small">${titulo}</td>
            <td class="fw-bold">Bs ${precio}</td>
            <td>
                <input type="number" class="form-control form-control-sm text-center input-cantidad" 
                       min="1" value="${cantidad}" data-id="${id}" style="width: 50px;">
            </td>
            <td>
                <a href="#" class="borrar-curso text-danger fw-bold text-decoration-none" data-id="${id}">X</a>
            </td>
        `;

        carrito.appendChild(row);
    });
    
    agregarEventosCantidad();
    actualizarTotales();
    sincronizarStorage();
}

function actualizarTotales() {
    const cantidadTotal = articulosCarrito.reduce((total, prod) => total + parseInt(prod.cantidad), 0);
    const totalDinero = articulosCarrito.reduce((total, prod) => total + (prod.precio * prod.cantidad), 0);
    
    if (contadorCarrito) contadorCarrito.textContent = cantidadTotal;
    if (totalCarrito) totalCarrito.textContent = `Bs ${totalDinero.toFixed(2)}`;
}

function sincronizarStorage() {
    localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
}

function limpiarHTML() {
    if (carrito) {
        while (carrito.firstChild) {
            carrito.removeChild(carrito.firstChild);
        }
    }
}

function agregarEventosCantidad() {
    const inputs = document.querySelectorAll('.input-cantidad');
    inputs.forEach(input => {
        input.addEventListener('change', (e) => {
            const id = e.target.getAttribute('data-id');
            const valor = parseInt(e.target.value);

            if (valor < 1) {
                e.target.value = 1; 
                return; 
            }

            articulosCarrito = articulosCarrito.map(producto => {
                if (producto.id === id) {
                    producto.cantidad = valor;
                }
                return producto;
            });

            actualizarTotales();
            sincronizarStorage();
        });
    });
}

function mostrarAlerta(mensaje, clase) {
    const alertaPrevia = document.querySelector('.alerta-flotante');
    if (alertaPrevia) alertaPrevia.remove();

    const alerta = document.createElement('div');
    alerta.classList.add('alert', clase, 'alerta-flotante', 'text-center', 'fw-bold');
    alerta.textContent = mensaje;

    document.body.appendChild(alerta);

    setTimeout(() => alerta.remove(), 3000);
}

// ==========================================
// 4. LÓGICA DE WHATSAPP (Integración)
// ==========================================
function enviarPedidoWhatsApp(e) {
    e.preventDefault(); // Evita que la página recargue

    // 1. Validar si hay productos
    if (articulosCarrito.length === 0) {
        mostrarAlerta('El carrito está vacío, agrega productos primero.', 'alert-danger');
        return;
    }

    // 2. Configuración del número (Tu número: 591 60402160)
    const telefono = "59160402160"; 

    // 3. Construcción del mensaje
    // Iniciamos el mensaje
    let mensaje = `Hola *Mamás Con Altura*, quisiera realizar el siguiente pedido:%0A%0A`;
    
    // Recorremos el carrito para listar los items
    articulosCarrito.forEach((producto, index) => {
        const { titulo, cantidad, precio } = producto;
        const subtotal = (precio * cantidad).toFixed(2);
        
        // Formato: 1. 2x Hamburguesa (Bs 50.00)
        mensaje += `${index + 1}. *${cantidad}x ${titulo}* - Bs ${subtotal}%0A`;
    });

    // Calculamos el total final
    const totalFinal = articulosCarrito.reduce((total, prod) => total + (prod.precio * prod.cantidad), 0);
    
    // Agregamos el total y formulario de datos
    mensaje += `%0A*TOTAL A PAGAR: Bs ${totalFinal.toFixed(2)}*%0A`;
    mensaje += `-----------------------------------%0A`;
    mensaje += `*DATOS PARA EL DELIVERY:*%0A`;
    mensaje += `👤 Nombre: %0A`;
    mensaje += `📍 Dirección: %0A`;
    mensaje += `🗺️ Ubicación GPS: %0A`;
    mensaje += `💰 Método de pago: `;

    // 4. Crear la URL codificada
    // encodeURIComponent convierte caracteres especiales (como espacios) para URL
    // Aunque wa.me suele manejarlo, es mejor asegurar.
    const urlWhatsApp = `https://wa.me/${telefono}?text=${mensaje}`;

    // 5. Abrir WhatsApp en nueva pestaña
    window.open(urlWhatsApp, '_blank');
}