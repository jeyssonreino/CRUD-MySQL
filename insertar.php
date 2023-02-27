<?php 
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$tel = $_POST['telefono'];

include ('conexion.php');
/*$validar = "SELECT * FROM `usuarios` WHERE `id` = '$id'";*/
/*$existe = $con->query($validar); /*mysqli_query($mysqli, $query);*/
/*$cantidad = $existe->num_rows;*/
/*if($cantidad == 0){*/
    $query = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `tel`) VALUES ('','$nom','$ape','$tel')";
    $res = $con->query($query); /*mysqli_query($mysqli, $query);*/
    if($res){
        echo "Registrado exitosamente";
        echo "<br><a href='insertar.html'>Volver</a>'";
    }else{
        echo"Error al registrar";
    }
/*}else{
    echo "El registro ya existe";
    echo "<br><a href='insertar.html'>Volver</a>";
}*/
$con->close();



?>


