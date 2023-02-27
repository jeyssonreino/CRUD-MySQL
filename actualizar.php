<?php 

$id = $_POST['id'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$tel = $_POST['telefono'];

include('conexion.php');
$sql = "UPDATE `usuarios` SET `id`='$id',`nombre`='$nom',`apellido`='$ape',`tel`='$tel' WHERE `id` = '$id'";
$con->query($sql);
if($con){
    echo "Actualizado correctamente <br>";
    echo "<a href= 'modificar.php'><button>Regresar </button></a>";
}else{
    echo "Error para actualizar";
    echo "<a href= 'modificar.php'><button>Regresar </button></a>";
    $con->close();
}

?>


