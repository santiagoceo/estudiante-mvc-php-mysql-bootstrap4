<?php
    include 'clases/conexion.php';
    include 'clases/municipio.php';
    include 'clases/acudiente.php';

    $objConexion = new Conexion();
    $objMunicipio = new Municipio();
    $objAcudiente = new Acudiente();

    $conexion = $objConexion->conectar();
    $municipioObjeto = $objMunicipio->consultar($conexion);
    $acudiente = $objAcudiente->consultarAcudienteId($conexion, $_GET['id']);
    $id;
    $nombre;
    $apellido;
    $fechaNacimiento;
    $tel;
    $direccion;
    $id_municipio;

    while ($datos = mysqli_fetch_array($acudiente)) {
        $id = $datos['idAcudiente'];
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $fechaNacimiento = $datos['fechaNacimiento'];
        //$fechaNacimiento = date('d/m/Y', strtotime($conEst['fechaNacimiento']));
        $tel = $datos['tel'];
        $direccion = $datos['direccion'];
        $id_municipio = $datos['id_municipio'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acudiente modificar</title>
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
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#">Acudiente</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="acuCon.php">Consultar </a>
                <a class="dropdown-item" href="acuCre.php">Crear </a>
                <a class="dropdown-item active" href="acuMod.php">Modificar </a>
                <a class="dropdown-item" href="acuDes.php">Desactivar/Activar </a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Ubicaciones</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="ubiCon.php">Consultar </a>
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
        <h1>Modificar Acudiente</h1>
        <p class="lead">Ajusta los campos y presiona el botón de Actualizar</p>
    </div>
    <div class="container pb-3">
        <div class="row">
        <div class="col"></div>
            <div class="col">
            <form action="controlador/acuMod.php" method="post">
                <div class="form-group text-center">
                    <label for="Nombre">Nombre</label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $nombre ?>" required>
                </div>
                <div class="form-group text-center">
                    <label for="Apellido">Apellido</label>
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php echo $apellido ?>"required>
                </div>
                <div class="form-group text-center">
                    <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" placeholder="Fecha de nacimiento" name="fechaNacimiento" value="<?php echo $fechaNacimiento ?>" required>
                </div>
                <div class="form-group text-center">
                    <label for="Fecha de nacimiento">Teléfono</label>
                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono" value="<?php echo $tel ?>" required>
                </div>
                <div class="form-group text-center">
                    <label for="Fecha de nacimiento">Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección" name="direccion" value="<?php echo $direccion ?>" required>
                </div>
                <div class="form-group text-center">
                    <label for="Municipio">Municipio</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="idMunicipio">
                        <?php
                        while($nombrem = mysqli_fetch_array($municipioObjeto)){
                        ?>
                        <option value="<?php echo $nombrem['id_municipio'] ?>" 
                        <?php 
                        if ($nombrem['id_municipio']==$id_municipio){
                        ?>
                        selected 
                        <?php
                        }
                        ?>>
                            <?php echo $nombrem['municipio'] ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
            </div>
        <div class="col"></div>
        </div>
    </div>
</body>
</html>