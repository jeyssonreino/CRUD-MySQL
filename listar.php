<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Listar</title>
</head>

<body >



    <?php

    include('conexion.php');

    $validar = "SELECT * FROM `usuarios` WHERE 1;";
    $existe = $con->query($validar);
    $can = $existe->num_rows;

    if ($can == 0) {
        echo "No se encontraron registros para mostrar";
        $con->close();
    } else {


    ?>

    
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="#">CRUD</a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="insertar.html">Insertar <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="eliminar.html">Eliminar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="listar.php">Mostrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="modificar.php">Actualizar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="paginar.php">Paginar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Apellido
                                </th>
                                <th>
                                    Telefono
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($fila = mysqli_fetch_array($existe)) {


                            ?>
                                <tr class="table-success">
                                    <td>
                                        <?php echo $fila['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['apellido']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fila['tel'] ?>
                                    </td>
                                </tr>

                        <?php
                            }
                            $con->close();
                        }

                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</body>

</html>