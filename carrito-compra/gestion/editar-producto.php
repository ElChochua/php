<?php
include "../manager/db-manager.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $ruta_imagen = $_POST["imagen_prov"];

    $id = $_POST["id"];
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
        $image_Name = $_FILES["imagen"]["name"];
        $imagen_tmp = $_FILES["imagen"]["tmp_name"];
        $destination_path = getcwd() . DIRECTORY_SEPARATOR;
        $target_path = $destination_path . basename($_FILES["imagen"]["name"]);
        $ruta_imagen = "./productos/" . $image_Name;
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen);
    }
    $datos = array(
        "nombre" => $nombre,
        "precio" => $precio,
        "stock" => $stock,
        "imagen" => $ruta_imagen,
        "id" => $id
    );
    modificarProducto($datos, $conn);
}
header("Location: ../gestion/abc_modificar.php");
