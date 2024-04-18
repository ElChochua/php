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
    $connection = null;
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
    return false;
}
function accountType(string $username, mysqli $connection){
    $query = "SELECT Type FROM usuarios WHERE Nombre='{$username}'";
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
                "nombre" => $fila['Nombre'],
                "precio" => $fila['Precio'],
                "stock" => $fila['Stock'],
                "imagen" => $fila['Imagen']
            );
            $productos[] = $producto;
        }
        return $productos;
    }
    $conn->close();
}
$productos = imprimirProductos($conn);
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
?>
