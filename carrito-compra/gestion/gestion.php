<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: /index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Amlitos - Usuario</title>
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/shop-style/gestion-styles/styles_gestion.css">
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
                <a href="./Fruteria-inicio.php">Inicio</a>
                <a href="/practicas/practica-1/actividades-extraescolares.php">Contacto</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">Gestión de Productos</a>
                    <div class="dropdown-content">
                      <a href="abc_nuevo.php">Nuevo Producto</a>
                      <a href="abc_altabaja.php">Alta/Baja Producto</a>
                      <a href="abc_modificar.php">Modificar Producto</a>
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
    <div class="contenedor-imagen">
        <img src="/assets/carrito-compra/user.png" alt="Descripción de la imagen" class="imagen-acoplada">
    </div>

    <div class="container">
        <div class="left-side">
            <div class="login-card">
                <div class="form-container">
                    <form id="formulario" method="post" action="/carrito-compra/gestion/editar-perfil.php">
                        <div class="options-login">
                            <a>Editar Perfil</a>
                        </div>
                        <input class="margin-aaa" type="username" id="username" name="nombre" placeholder="Nombre"
                            required>
                        <input class="margin-aaa" type="number" id="number" name="edad" placeholder="Edad"
                            required>
                        <input class="margin-aaa" type="email" name="email" placeholder="Correo Electronico"
                            required>
                            <input class="margin-aaa" type="username" id="username" name="username" placeholder="Nombre de Usuario"
                            required>
                        <input class="margin-aaa" type="password" id="password" name="password" placeholder="Contraseña Actual"
                            required>
                        <input class="margin-aaa" type="password" id="password" name="newPassword" placeholder="Nueva Contraseña"
                            required>
                            <input class="margin-aaa" type="password" id="password" name="confirmPassword" placeholder="Confirmar Contraseña"
                            required>
                        <a id="reset-inputs" href="#" onclick="resetInputs()" class="reset-inputs">Reiniciar campos</a>
                        <button id="register-buttons" type="submit">Guardar</button>
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