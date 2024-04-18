<?php
//session_start();
include('db-manager.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <link href='https://fonts.googleapis.com/css?family=Mr Dafoe' rel='stylesheet'>
    <!-- FONT AWESOME LINKED -->
    <!--<script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    <!-- ESTILO CSS -->
    <link rel="stylesheet" href="/style/shop-style/fruteria-inicio/style-inicio.css">
    <!--<script src="/scripts/carrito-compras/inicio/script-carrito.js"></script>-->
    <title>Frutería Amlitos — Frutas frescas diariamente desde 1973</title>
</head>

<body>
    <!-- Contenedor de imagen, enlaces y otros elementos  -->
    <header class="container">
        <div class="logo">
            <img src="/assets/carrito-compra/logo-fruteria.png" alt="logo-frutería" class="logo">
            <h1 class="h1-title">FRUTERIA <br> AMLITOS</h1>
        </div>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <ul class="menu-options">
                <a
                    href="/carrito-compra/login-registro/practica-6-desarrollar-carrito-de-compra-v0.1.php">Inicio</a>
                <a
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>
            </ul>
            <div class="icon-group">
                <a id="bypass-over" href="/carrito-compra/logout.php">
                </a>
                <a id="confg-icon" href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-configuracion.php">
                    <i class="fa-solid fa-gear"></i>
                </a>
                <a id="cart-icon" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </nav>
    </header>
    <hr class="divisor-line">
    <div class="contenedor-imagen-fruteria">
        <img class="no-effect" src="/assets/carrito-compra/frutas.jpg" alt="Frutas">
        <div class="texto-superpuesto">Frutería</div>
    </div>
    <div class="main-container">
        <div class="header-productos">
            <p>¡Bienvenido a nuestra Frutería Amlitos! Aquí las frutas, son tan frescas que las manzanas hacen yoga y
                las piñas tienen su propio concurso de baile. ¡Ven y únete a la fiesta frutal!
            </p>
            <div class="search-bar">
                <input id="buscar_Input" type="text" placeholder="Buscar una fruta">
                <i id="glass-icon" class="fa-solid fa-magnifying-glass"></i>
                <button id="filtar_Button"><i class="fa fa-filter"></i> Filtrar</button>
            </div>
        </div>
        <div class="container-productos">
            <!--
            <div id="extra-margin" class="card">
                <img class="card-image" src="/assets/carrito-compra/frutas/mango.png" alt="Product Image">
                <div class="card-content">
                    <div class="product-name">Mango</div>
                    <div class="product-price-tag">Precio</div>
                    <div class="product-price">$99.99</div>
                    <button class="add-to-cart">Agregar al carrito
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <div id="extra-margin" class="card">
                <img class="card-image" src="/assets/carrito-compra/frutas/manzana.webp" alt="Product Image">
                <div class="card-content">
                    <div class="product-name">Manzana</div>
                    <div class="product-price-tag">Precio</div>
                    <div class="product-price">$99.99</div>
                    <button class="add-to-cart">Agregar al carrito
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>-->
            <?php
                foreach($productos as $producto){
                    echo '<div id="extra-margin" class="card">
        <img class="card-image" src="'.$producto['imagen'].'" alt="Product Image">
        <div class="card-content">
            <div class="product-name">'.$producto['nombre'].'</div>
            <div class="product-price-tag">Precio</div>
            <div class="product-price">$'.$producto['precio'].'</div>
            <button class="add-to-cart">Agregar al carrito
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </div>';
                }
                
            ?>
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