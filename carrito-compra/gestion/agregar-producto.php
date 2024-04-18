<?php 
    require "../manager/db-manager.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $estado = isset($_POST["Estado"]) ? 0 : 1;

        $image_Name = $_FILES["imagen"]["name"];
        $imagen_tmp = $_FILES["imagen"]["tmp_name"];
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path.basename($_FILES["imagen"]["name"]);
        $ruta_imagen= "./productos/".$image_Name;
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta_imagen);

        $query = "INSERT INTO productos (Nombre, Precio, Stock, Imagen, Estado) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sdisi",$nombre,$precio,$stock,$ruta_imagen,$estado);
        $stmt->execute();

        if($stmt->affected_rows > 0 ){
            alert("Producto agregado");
            header("Location: abc_nuevo.php");
        }else{
            alert("Algo valio madre padrino");
        }
        $stmt->close();
        $conn->close();
    }
