<?php
//Este es para agregar al carrito los productos.
session_start();
include "../manager/db-manager.php";

#echo $_SESSION["carrito"][1];
#  $prod_Name = $_POST["producto"];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {
    $cantidad = $_POST["cantidad"];
    $id_producto = $_POST["item"];
    if(isset($_SESSION["carrito"][$id_producto])){
        $_SESSION["carrito"][$id_producto] = $cantidad;

    }
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prod_Id = $_POST["producto"];
        //$cantidad = $_POST["cantidad"];
        unset($_SESSION["carrito"][$indice]);

        if (in_array($prod_Id, $_SESSION["carrito"])) {
            $indice = array_search($prod_Id, $_SESSION["carrito"]);
            unset($_SESSION["carrito"][$indice]);
            $_SESSION["carrito"] = array_values($_SESSION["carrito"]);
        }
    }
}
header("Location: ../carrito.php");

