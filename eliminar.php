<?php

$id = $_POST['id'];

include('conexion.php');
if (isset($_POST['id'])) {
    $sqlvalidar = "SELECT * FROM `usuarios` WHERE `id` = '$id'";
    $existe = $con->query( $sqlvalidar);
    $can = $existe->num_rows;
    if ($can == 1) {
        $sqldelete= "DELETE FROM `usuarios` WHERE `id` = '$id'";
        $con->query($sqldelete);
        echo "El estudiante con el Id = ".$id." Fue eliminado<br>";   
        echo "<a href= 'eliminar.html'><button>Regresar </button></a>";
    } else {
        echo "<div class='col-12' style='margin: 20px 0px 0px 20px;'>";
        echo "No registro con ID: " . $id . " No existe";
        echo "<a href= 'eliminar.html'><button>Regresar </button></a>";
        echo "</div>";
        
        $con->close();
}

}
?>