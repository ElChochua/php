<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Amlitos - Modificar</title>
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/shop-style/gestion-styles/styles_abc_modificar.css">
    <!--<script src="/scripts/carrito-compras/login-register/script_register.js"></script>-->
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
                <a href="/index.php">Inicio</a>
                <a href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">Gestión de Productos</a>
                    <div class="dropdown-content">
                      <a href="/carrito-compra/gestion/abc_nuevo.php">Nuevo Producto</a>
                      <a href="/carrito-compra/gestion/abc_altabaja.php">Alta/Baja Producto</a>
                      <a href="/carrito-compra/gestion/abc_modificar.php">Modificar Producto</a>
                    </div>
                  </div>
                <a href="gestion.php">Perfil</a>


            </ul>
            <div class="icon-group">
                <a id="bypass-over" href="#">X
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </a>
                <a id="bypass-over" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </nav>
    </header>
    <hr class="divisor-line">

    <div class="search-container button img">
        <input type="text" placeholder="Buscar...">
        <button type="submit">
          <img src="/assets/carrito-compra/lupa.png" alt="Buscar">
        </button>
      </div>

      <div class="container">
        <div class="left-side">
            <div class="login-card">
                <div class="form-container">
                    <form id="formulario" action="agregar-producto.php">
                        <div class="options-login">
                            <a>Lista de carrito</a>
                        </div>
                        <hr class="divisor-line">
                        <ul class="fruits-list">
                            <li class="fruit-item">
                                <div class="fruit-info">
                                    <img src="fruta1.jpg" alt="Fruta 1">
                                    <div class="details">
                                        <h3>Manzana</h3>
                                        <p class="price">Precio: $1.99</p>
                                    </div>
                                </div>
                                <button class="modify-button">Modificar</button>
                            </li>
                            <li class="fruit-item">
                                <div class="fruit-info">
                                    <img src="fruta2.jpg" alt="Fruta 2">
                                    <div class="details">
                                        <h3>Naranja</h3>
                                        <p class="price">Precio: $2.49</p>
                                    </div>
                                </div>
                                <button class="modify-button">Modificar</button>
                            </li>
                            <!-- Agrega más elementos <li> para otras frutas si es necesario -->
                        </ul>
                        <hr class="divisor-line">
                        <div class="another-options">
                            <!-- Otras opciones aquí -->
                        </div>
                    </form>
                </div>
            </div>
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
       <strong> Teléfono: </strong>  +52 668 819 2830</p>
    </div>
    <div class="contactanos">
        <p><strong>Contacte con nosotros</strong></p>
        <div class="imagenes-contacto">
            <img src="/assets/carrito-compra/linkedin.png" alt="linkedin">
            <img src="/assets/carrito-compra/twitter.png" alt="X">
            <img src="/assets/carrito-compra/facebook.png" alt="Facebook">
        </div>
    </div>
    <div class="copy-right">
        <p><strong>Copyright © 2024 - Pascalitos Group</strong></p>
    </div>

</footer>
</body>

</html>