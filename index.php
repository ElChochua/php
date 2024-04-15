<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Amlitos - Iniciar sesión</title>
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/shop-style/login-registro/style-login.css">
    <script src="/scripts/carrito-compras/login-register/script_login.js"></script>
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
                    href="/carrito-compra/fruteria-inicio/practica-6-desarrollar-carrito-de-compra-v0.1-inicio.php">Inicio</a>
                <a
                    href="/carrito-compra/fruteria-contacto/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>
            </ul>
            <div class="icon-group">
                <a id="bypass-over"
                    href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1.php">X
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </a>
                <a id="bypass-over" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </nav>
    </header>
    <hr class="divisor-line">

    <div class="container">
        <div class="left-side">
            <div class="split-panel">
                <div id="myAnim" class="left-panel"></div>
                <div id="myAnim" class="right-panel"></div>
                <div id="myAnim" class="third-panel"></div>
                <div id="myAnim" class="fourth-panel"></div>
                <div id="myAnim" class="fifth-panel"></div>
            </div>
        </div>
        <div class="right-side">
            <div class="login-card">
                <div class="form-container">
                    <form id="formulario" action="/carrito-compra/session.php" method="post">
                        <div class="options-login">
                            <a class="bypass" href="#"><u>In</u>iciar sesión</a>
                            <a
                                href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-registro.php">Registrarme</a>
                        </div>
                        <input class="margin-aaa" type="username" id="username" name="username" placeholder="Usuario"
                            required>
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                        <a href="#" onclick="resetInputs()" class="reset-inputs">Reiniciar campos</a>
                        <button id="login-buttonwes" type="submit">Iniciar sesión</button>
                        <div class="another-options">
                            <a class="option-forgot-password" href="#">¿Olvidaste la contraseña?</a>
                            <hr class="hr-format">
                            <ul class="social-icon">
                                <img class="img-bottom" src="/assets/carrito-compra/social/github-icon.png"
                                    alt="github">
                                <img class="img-bottom" src="/assets/carrito-compra/social/google-icon.webp"
                                    alt="google">
                                <img class="img-bottom" src="/assets/carrito-compra/social/x-icon.png" alt="">
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>