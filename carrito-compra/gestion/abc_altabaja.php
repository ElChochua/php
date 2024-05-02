<?php 
    session_start();
    include "../manager/db-manager.php";
    if(!isset($_SESSION['username'])){
        header("Location: /index.php");
    }
    $productos = imprimirProductos($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Amlitos - Alta o Baja</title>
    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">
    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/shop-style/gestion-styles/styles_abc_altabaja.css">
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
            <a href="/carrito-compra/Fruteria-Inicio.php">Inicio</a>
                <a href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>
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

    <div class="search-container button img">
        <input type="text" placeholder="Buscar...">
        <button type="submit">
          <img src="..carrito-compra/assets/carrito-compra/lupa.png" alt="Buscar">
        </button>
      </div>

      <div class="container">
        <div class="left-side">
            <div class="login-card">
                <div class="form-container">
                        <div class="options-login">
                            <a>Alta o Baja de producto</a>
                        </div>
                            <?php 
                            if(!empty($productos)){
                                foreach($productos as $producto){
                echo '<form id="formulario" method="post" action="/carrito-compra/funciones/baja_alta.php">
                        <div class="options-login">
                            <img src="/carrito-compra/gestion/productos/" alt="">
                        </div>
                    <hr class="divisor-line">
                        <ul class="fruits-list">
                            <li class="fruit-item">
                                <div class="fruit-info">
                                    <img src="../gestion'.$producto["imagen"].'" alt="Product Image">
                                    <div class="details">
                                        <h3>'.$producto["nombre"].'</h3>
                                        <p class="price">Precio: $'.$producto["precio"].'</p>
                                        <h3>Stock: '.$producto["stock"].'</h3>
                                    </div>
                                </div>
                                ';
                                if($producto["estado"] == 1){
                                    echo'<button class="modify-button" name="producto" type="submit" value="'.$producto["id"].'">Desactivar</button>';
                                }else{
                                    echo'<button class="modify-button" name="producto" type="submit" value="'.$producto["id"].'">Activar</button>';
                                }
                            echo'</li>';
                                
                                }
                            }else{
                                echo"<h3 class='total'>No hay productos agregados</h3>";
                            }
                            ?>
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