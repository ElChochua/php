<?php
//session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: /carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1.php");
    exit(); // Importante: asegúrate de salir del script después de redirigir
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Amlitos - Contacto</title>
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/shop-style/fruteria-contacto/styles_contacto.css">
    <script src="/scripts/carrito-compras/login-register/script_register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <header class="container">
        <div class="logo">
            <img src="/assets/carrito-compra/logo-fruteria.png" alt="logo-frutería" class="logo">
            <h1 class="h1-title">FRUTERIA <br> AMLITOS</h1>
        </div>

        <nav role="navigation" class="nav-menu w-nav-menu">
            <ul class="menu-options">
                <a
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-inicio.php">Inicio</a>
                <a
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>
            </ul>
            <div class="icon-group">
                <a id="bypass-over"
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1.php">X
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </a>
                <a id="confg-icon"
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-configuracion.php">
                    <i class="fa-solid fa-gear"></i>
                </a>
                <a id="bypass-over" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </nav>
    </header>
    <hr class="divisor-line">
    <div class="contenedor-imagen">
        <img src="/assets/carrito-compra/tienda.png" alt="Descripción de la imagen" class="imagen-acoplada">
    </div>
    <a href="https://www.google.com/mymaps/viewer?mid=1zvqI7ImcxqtOBPyogbk3SoQl8CU&hl=en_US">
        <div class="contenedor-imagenubi">
            <img src="/assets/carrito-compra/ubi.png" alt="Descripción de la imagen" class="imagen-medioubi">
        </div>
    </a>
    <div class="container">
        <div class="left-side">
            <div class="login-card">
                <div class="form-container">
                    <form id="formulario">
                        <div class="options-login">
                            <a href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1.php">No
                                te pierdas nuestras promociones</a>
                        </div>
                        <input class="margin-aaa" type="username" id="username" name="username"
                            placeholder="Correo Electronico" required>
                        <input class="margin-aaa" type="username" id="username" name="username" placeholder="Nombre"
                            required>
                        <input class="margin-aaa" type="username" placeholder="Comentario" required>
                        <a id="reset-inputs" href="#" onclick="resetInputs()" class="reset-inputs">Reiniciar campos</a>
                        <button id="register-button" type="button">Enviar</button>
                        <div class="another-options">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <div class="footer-logo">
            <img src="/assets/carrito-compra/logo-fruteria.png" alt="logo-frutería" class="logo-footer">
            <p>Av. Constitución, Palacio de Gobierno <br>
                Frente a las Guajolotas “La doble P” <br>
                <strong>Correo: </strong> futeria@amlitos.gob <br>
                <strong> Teléfono: </strong> +52 668 819 2830
            </p>
        </div>
        <div class="contactanos">
            <p><strong>Contacte con nosotros</strong></p>
            <div class="footer-social-link">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copy-right">
            <p><strong>Copyright © 2024 - Pascalitos Group</strong></p>
        </div>
    </footer>
</body>

</html>