// Función para mostrar el carrito de compras
/*
function mostrarCarrito() {
    // Aquí simularemos que obtenemos los productos del carrito desde algún almacenamiento (como localStorage)
    const productos = obtenerProductosDelCarrito();

    // Verificar si hay productos en el carrito
    if (productos.length === 0) {
        // No hay productos en el carrito, mostrar un mensaje de error
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El carrito de compras está vacío',
        });
        return;
    }

    // Construir el HTML para mostrar los productos en el carrito
    let listaHTML = '<h2>Carrito de Compras</h2><ul>';
    productos.forEach((producto, index) => {
        listaHTML += `
            <li class="product-item">
                <div class="product-details">
                    <p class="product-name">${producto.nombre}</p>
                    <p class="product-price">$${producto.precio.toFixed(2)}</p>
                </div>
                <input class="quantity-input" type="number" value="${producto.cantidad}" min="1">
                <button class="btn-remove" onclick="eliminarProducto(${index})">Eliminar</button>
            </li>
        `;
    });
    listaHTML += '</ul>';

    // Mostrar la lista de productos en el carrito en un modal de SweetAlert
    Swal.fire({
        html: listaHTML,
        width: 'auto',
    });
}

// Obtener productos del carrito (simulado)
function obtenerProductosDelCarrito() {
    // Aquí podrías obtener los productos desde algún almacenamiento (como localStorage)
    // Por ahora, simularemos que hay algunos productos en el carrito
    return [

    ];
}

// Asignar la función al evento clic del botón "Mostrar Carrito"
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cart-icon').addEventListener('click', mostrarCarrito);
});

document.addEventListener("DOMContentLoaded", function() {
    // Verificar si el usuario está logueado basado en la cookie
    if (document.cookie.indexOf("logged_in=true") === -1) {
        // Redirigir a la página de inicio de sesión si no está logueado
        //window.location.href = "/carrito-compra/login-registro/practica-6-desarrollar-carrito-de-compra-v0.1.php";
    }
});

*/