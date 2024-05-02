<?php
session_start();
include "../manager/db-manager.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_id = $_POST["producto"];
    echo"$producto_id";
    $estado = getStatus($producto_id, $conn);
    if ($estado == 1) {
        $query = "UPDATE Productos
                      SET Estado = 0
                      WHERE Id='{$producto_id}'";
    $conn->query($query);
    } else {
        $query = "UPDATE Productos
                      SET Estado = 1
                      WHERE Id='{$producto_id}'";
        $conn->query($query);
    }
    header("Location: /carrito-compra/gestion/abc_altabaja.php");
}
