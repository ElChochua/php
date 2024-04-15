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

    <title>Frutería Amlitos - Configuración</title>

    <link rel="shortcut icon" href="/assets/carrito-compra/logo-fruteria.png" type="images/x-png">

    <script src="https://kit.fontawesome.com/df00b7509d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/style/shop-style/fruteria-configuracion/styles_config.css">

    <script src="/scripts/practica-3.js"></script>

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

                <a href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-inicio.php">Inicio</a>

                <a href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-contacto.php">Contacto</a>

            </ul>

            <div class="icon-group">

                <a id="bypass-over" href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1.php">X

                    <i class="fa fa-user-o" aria-hidden="true"></i>

                </a>

                <a id="confg-icon" href="/carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-configuracion.php">

                    <i class="fa-solid fa-gear"></i>

                </a>

                <a id="bypass-over" href="#">

                    <i class="fa-solid fa-cart-shopping"></i>

                </a>

            </div>

        </nav>

    </header>

    <hr class="divisor-line">

        <div class="grid-container">



        <!-- Titulo de la página -->



        <div class="title-container">



            <h1>Configuración</h1>



        </div>







        <!-- Columna derecha para el contenido -->



        <div class="content-container">



            <div class="inputs-container card-container">



                <!-- Fondo -->



                <div class="card-content">



                    <h2>Fondo</h2>



                    <label for="link-background-color-page-input">Color de fondo:</label>



                    <p>Cambia el color de fondo de las páginas web.</p>



                    <input type="color" name="" id="background-color-input" oninput="changeBackgroundColor()">



                </div>







                <!-- Enlaces -->



                <div class="card-content">



                    <h2>Enlaces</h2>



                    <label for="rounded-checkbox">Redondear enlaces</label>



                    <p>



                        Cambia el estilo para que los enlaces tengan un redondeo en su tarjeta.



                    </p>



                    <input type="checkbox" id="rounded-checkbox" oninput="roundLinks()">







                    <label for="link-background-color-input-label">Color de fondo del enlace</label>



                    <p>



                        Cambia el color de fondo de los enlaces a tu gusto.



                    </p>



                    <input type="color" id="link-background-color-input" oninput="changeBackgroundLinksColor()">







                    <label for="link-color-input">Color del enlace</label>



                    <p>



                        Cambia el color del enlace mismo (no aplica a la propiedad hover).



                    </p>



                    <input type="color" id="link-color-input" oninput="changeLinksColor()">



                </div>







                <!-- Imágenes -->



                <div class="card-content">



                    <h2>Imágenes</h2>



                    <!-- Tamaño de la imagen -->



                    <label for="image-size-input">Tamaño de la imagen:</label>



                    <p>



                        Controla el tamaño de las imágenes.



                    </p>



                    <div class="button-container">



                        <button onclick="setImageSizeSmall()">Pequeñas</button>



                        <button onclick="setImageSizeMedium()">Medianas</button>



                        <button onclick="setImageSizeLarge()">Grandes</button>



                    </div>







                    <!-- Bordes -->



                    <label for="image-border-input-label">Bordes:</label>



                    <p>



                        Establece un determinado borde a las imágenes.



                    </p>



                    <input type="number" id="image-border-input" min="0" max="50" step="1" value="0"



                        oninput="setImageBorder()">







                    <!-- Tamaño de los bordes -->



                    <label for="border-size-input-label">Tamaño de los bordes:</label>



                    <p>



                        Modifica el tamaño de los bordes.



                    </p>



                    <input type="number" id="border-size-input" min="1" max="100" step="1" value="0"



                        oninput="setBorderWidth()">







                    <!-- Color de los bordes -->



                    <label for="border-color-input-label">Color de los bordes:</label>



                    <p>



                        Añade un color a los bordes.



                    </p>



                    <input type="color" id="border-color-input" oninput="setColoredBorder()">







                    <!-- Redondeo -->



                    <label for="border-radius-input">Redondeo:</label>



                    <p>



                        Alterna el redondeo de las imágenes.



                    </p>



                    <input type="number" id="border-radius-input" min="0" max="50" step="1" value="0"



                        oninput="setImageBorderRadius()">







                    <!-- Sombra -->



                    <label for="box-shadow-input">Sombra:</label>



                    <p>



                        Establece si hay sombreado o no a las imágenes.



                    </p>



                    <input type="checkbox" id="box-shadow-input" oninput="addShadow()">



                </div>







                <!-- Párrafos, títulos, subtítulos -->



                <div class="card-content">



                    <h2>Párrafos, Títulos, Subtítulos</h2>







                    <!-- Estilo para párrafos -->



                    <label for="paragraph-color-input-label">Color de párrafos:</label>



                    <p>



                        Intercala los colores de los párrafos.



                    </p>



                    <input type="color" id="paragraph-color-input" onchange="paragraphsFontColor()">







                    <label for="paragraph-font-size-input">Tamaño de fuente para párrafos:</label>



                    <p>



                        Intercala los tamaños de fuente de los párrafos.



                    </p>



                    <div class="button-container">



                        <button onclick="setParagraphFontSize('small')">Chico</button>



                        <button onclick="setParagraphFontSize('medium')">Mediano</button>



                        <button onclick="setParagraphFontSize('large')">Grande</button>



                    </div>







                    <!-- Estilo para títulos -->



                    <label for="title-color-input-label">Color de títulos:</label>



                    <p>



                        Modifica el color de los títulos.



                    </p>



                    <input type="color" id="title-color-input" onchange="changeTitleColor()">







                    <label for="title-font-size-input">Tamaño de fuente para títulos:</label>



                    <p>



                        Modifica el tamaño de los títulos.



                    </p>



                    <div class="button-container">



                        <button onclick="setTitleFontSize('small')">Chico</button>



                        <button onclick="setTitleFontSize('medium')">Mediano</button>



                        <button onclick="setTitleFontSize('large')">Grande</button>



                    </div>



                    <!-- Estilo para subtítulos -->



                    <label for="subtitle-color-input">Color de subtítulos:</label>



                    <p>



                        Establece un color a los subtítulos.



                    </p>



                    <input type="color" id="subtitle-color-input-ip" onchange="changeSubtitleColor()">







                    <label for="subtitle-font-size-input">Tamaño de fuente para subtítulos:</label>



                    <p>



                        Establece un tamaño para los subtítulos.



                    </p>



                    <div class="button-container">



                        <button onclick="setImageSizeSmall()">Pequeñas</button>



                        <button onclick="setImageSizeMedium()">Medianas</button>



                        <button onclick="setImageSizeLarge()">Grandes</button>                        



                    </div>







                </div>







            </div>







            <div class="image-container">



                <h1>Texto de prueba h1</h1>



                <h2>Texto de prueba h2</h2>



                <p>Párrafo de prueba</p>



                <a href="">Enlace de prueba</a>



                <img src="/assets/images/Ama+Dablam.jpeg" alt="Descripción de la imagen">



                <img src="/assets/images/logo-page.png" alt="Descripción de la imagen">



            </div>







            <!-- Botones -->



            <button onclick="restoreConfigPath()">Restaurar Configuración Inicial</button>



        </div>



    </div>



</body>







</html>