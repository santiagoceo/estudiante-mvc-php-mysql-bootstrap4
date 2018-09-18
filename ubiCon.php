<?php
    include 'clases/conexion.php';
    include 'clases/municipio.php';

    $objConexion = new Conexion();
    $objMunicipio = new Municipio();

    $conexion = $objConexion->conectar();
    $datos = $objMunicipio->consultarMunDep($conexion);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ubicación consultar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Controlest</h5>
        <nav class="my-2 my-md-0 mr-md-3">
        <ul class="nav nav-pills">
            <li class="nav-item">
            <a class="nav-link" href="menu.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Estudiante</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="estCon.php">Consultar </a>
                <a class="dropdown-item" href="estCre.php">Crear </a>
                <a class="dropdown-item" href="estMod.php">Modificar </a>
                <a class="dropdown-item" href="estDes.php">Desactivar/Activar </a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Acudiente</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="acuCon.php">Consultar </a>
                <a class="dropdown-item" href="acuCre.php">Crear </a>
                <a class="dropdown-item" href="acuMod.php">Modificar </a>
                <a class="dropdown-item" href="acuDes.php">Desactivar/Activar </a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#">Ubicaciones</a>
            <div class="dropdown-menu">
                <a class="dropdown-item active" href="ubiCon.php">Consultar </a>
                <a class="dropdown-item" href="ubiCre.php">Crear </a>
                <a class="dropdown-item" href="ubiMod.php">Modificar </a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="miPerf.php">Mi perfil</a>
            </li>
        </ul>
        </nav>
        <a class="btn btn-outline-primary" href="logout.php">Cerrar sesión</a>
    </div>
    <div class="container text-center">
        <h1>Consulta de Ubicaciones</h1>
        <p class="lead">A continuación podrás conocer cada ciudad con departamento</p>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Departamento</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($dato = mysqli_fetch_array($datos)){
                ?>
                <tr>
                <td scope="row">
                    <?php echo $dato['municipio'] ?>
                </td>
                <td scope="row">
                    <?php echo $dato['departamento'] ?>
                </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>