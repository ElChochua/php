<?php
    session_start();
    include "./manager/db-manager.php";

    #echo $_SESSION["carrito"][1];
 #  $prod_Name = $_POST["producto"];
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])){
    
}else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $prod_Name = $_POST["producto"];
        $cantidad = $_POST["cantidad"];
        if(in_array($prod_Name, $_SESSION["carrito"])){
            $indice = array_search($prod_Name, $_SESSION["carrito"]);
            unset($_SESSION["carrito"][$indice]);
            $_SESSION["carrito"] = array_values($_SESSION["carrito"]);
        }
    }
}