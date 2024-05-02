<?php

function console_Log($output, $with_script_tags = true){
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
    ');';
    if ($with_script_tags) {
    $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
//funciones miadas pa debugear
function alert($output, $with_script_tags = true){
    $js_code = 'alert(' . json_encode($output, JSON_HEX_TAG) .
    ');';
    if ($with_script_tags) {
    $js_code = '<script>'.$js_code.'</script>';
    }
    echo $js_code;
}
function doesExist(string $user, mysqli $connection){
    try{
    $query = "SELECT * FROM usuarios WHERE User = '$user'";
    $result = $connection->query($query);
    if($result){
        return mysqli_num_rows($result) > 0;
    }
    }catch(Exception $e){
        alert("Ha ocurrido un error".$e->getMessage());
    }
    $connection = null;
    return false;
}
function registerUser(string $user, string $password, mysqli $connection){
    
    if(!doesExist($user,$connection)){
        alert("Registro agregado");

    $query = "INSERT INTO usuarios (User, Password) VAlUES (?,?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss",$user,$password);
    $stmt->execute();
    $connection->close();
    header("Location: /index.php");
    }else{
        header("Location: /carrito-compra/practica-6-desarrollar-carrito-de-compra-v0.1-registro.php");
        alert("Ya hay una cuenta con ese usuario");

    }

}
function checkLogin(string $user, string $password, mysqli $connection){
    $query = "SELECT * FROM usuarios WHERE Password='$password' AND User='$user'";
    $result = $connection->query($query);
    if($result->num_rows>0){
        return true;
    }else{
        alert("Usuario o contraseña incorrectos");
        return false;
    }
    $connection->close();
    return false;
}
function accountType(string $username, mysqli $connection){
    $query = "SELECT Type FROM usuarios WHERE User='{$username}'";
    $result = $connection->query($query);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $type = $row["Type"];
    }
    $connection->close();
    return $type;
}
$host = "localhost";
$dbUser = "chochua";
$dbPass = "06440566";
$dbName = "amlitos";
//creamos una instancia de mysqli en la variable conn
$conn = new mysqli($host,$dbUser,$dbPass,$dbName);
if($conn->connect_error){
    alert("Conexion fallida ".$conn->connect_error);
}
function imprimirProductos($conn){
    $query = "SELECT * FROM productos";
    $resultado = $conn->query($query);
    if($resultado->num_rows>0){
        $productos = array();
        while($fila=$resultado->fetch_assoc()){
            $producto = array(
                "id" => $fila['Id'],
                "nombre" => $fila['Nombre'],
                "precio" => $fila['Precio'],
                "stock" => $fila['Stock'],
                "imagen" => $fila['Imagen'],
                "estado" => $fila['Estado']
            );
            $productos[] = $producto;
        }
        return $productos;
    }
    $conn->close();
}
function imprimirProductosActivos($conn){
    $query = "SELECT * FROM productos WHERE Estado='1' AND Stock>0";
    $resultado = $conn->query($query);
    if($resultado->num_rows>0){
        $productos = array();
        while($fila=$resultado->fetch_assoc()){
            $producto = array(
                "id" => $fila['Id'],
                "nombre" => $fila['Nombre'],
                "precio" => $fila['Precio'],
                "stock" => $fila['Stock'],
                "imagen" => $fila['Imagen'],
                "estado" => $fila['Estado']
            );
            $productos[] = $producto;
        }
        return $productos;
    }
    $conn->close();
}
function getStatus($productoId, $conn){
    if(isset($productoId)){
        $query = "SELECT Estado FROM Productos Where Id='{$productoId}'";
        $resultado = $conn->query($query);
        if($resultado->num_rows>0){
            if($fila=$resultado->fetch_assoc()){
                $estado = $fila;
                return $estado;
            }
        }
        $conn->close();
    }
}
function getProduct(mysqli $conn, $nombre){
    if(isset($nombre)){
    $query = "SELECT * FROM productos WHERE Id='{$nombre}'";
    $resultado = $conn->query($query);
    if($resultado->num_rows>0){
        if($fila=$resultado->fetch_assoc()){
        $producto = array(
            "id" => $fila['Id'],
            "nombre" => $fila['Nombre'],
            "precio" => $fila['Precio'],
            "stock" => $fila['Stock'],
            "imagen" => $fila['Imagen'],
            "estado" => $fila['Estado']
        );    
        }
        return $producto;
    }
    }
}
function getStock($conn, $productos){
    foreach($productos as $producto => $cantidad){
        $query = "SELECT Stock FROM productos WHERE Nombre={$producto}";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $stockEnBD = $row["Stock"];
        if($stockEnBD>=$cantidad["cantidad"]){
            $nuevoStock = $stockEnBD-$cantidad["cantidad"];
            $actualizar = "UPDATE productos set Stock = $nuevoStock WHERE Nombre = $producto";
            mysqli_query($conn,$actualizar);
        }else{
            mysqli_close($conn);
            return false;
        }
        return true;
    }
}
function modificarUsuario($datos,$conn){

 $nombre = mysqli_real_escape_string($conn, $datos["nombre"]);
 $edad = mysqli_real_escape_string($conn, $datos["edad"]);
 $email = mysqli_real_escape_string($conn, $datos["email"]);
 $password = mysqli_real_escape_string($conn, $datos["password"]);
 $newPassword = mysqli_real_escape_string($conn, $datos["newPassword"]);
 $user = mysqli_real_escape_string($conn, $datos["user"]);
 
 // Construir la consulta SQL con comillas simples alrededor de los valores de cadena
 $query = "UPDATE usuarios SET Nombre='$nombre', Edad='$edad', Email='$email', Password='$newPassword' WHERE User='$user' AND Password='$password'";
 
 if(checkLogin($datos["user"], $datos["password"], $conn)){
     if($conn->query($query) === TRUE && $datos["newPassword"] == $datos["confirmPassword"]){
         alert("Usuario Modificado con éxito");
     }else{
         alert("Verifique sus credenciales");
     }
     $conn->close();
 }
}
function modificarProducto($datos,$connection){
    $id = mysqli_real_escape_string($connection,$datos["id"]);
    $nombre = mysqli_real_escape_string($connection,$datos["nombre"]);
    $precio = mysqli_real_escape_string($connection,$datos["precio"]);
    $stock = mysqli_real_escape_string($connection,$datos["stock"]);
    $imagen = mysqli_real_escape_string($connection,$datos["imagen"]);
    $query = "UPDATE productos
              SET Nombre='$nombre',Precio='$precio',Stock='$stock',Imagen='$imagen'
              Where Id='$id'";
    if($connection->query($query) === TRUE){
        alert("Producto Modificado con exito");
    }else{
        alert("Error al modificar");
    }
    $connection->close();
}
/*
$query = "SELECT * FROM usuarios";
//Multiquery se utiliza para obtener datos de la bd y mostrarlos
if($conn->multi_query($query)){
    //Ciclo do while para checar si hay mas de 1 fila, si la hay la imprime y repite
    do{
        //Guarda el resultado de los datos encontrados en result
        if($result = $conn->store_result()){
            while($row = $result->fetch_row()){
                //columnas
                printf("%s|\n", $row[0],"|\n");
                printf("%s|\n", $row[1],"|\n");
                printf("%s|\n", $row[2],"|\n");
                printf("%s|\n", $row[3],"|\n");
                printf("%s|\n", $row[4],"|\n");

                
            }
            //Libera los datos de la columna anterior para agregar nuevos
            $result->free();
        }
        //Si encuentra mas resultados hace un salto pero no salta de a deveras
        if($conn->more_results()){
            echo "<br>";
        }
        //verifica si ya es todo
    }while($conn->more_results());
}
*/

/*
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$valor);
if($stmt->execute()){
    echo"Si se pudo padrino";
}else{
    echo "no se pudo padrino ".$conn->error;
}
$stmt->close();
$conn->close();
*/

