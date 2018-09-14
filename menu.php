<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Controlest</h5>
        <nav class="my-2 my-md-0 mr-md-3">
        <ul class="nav nav-pills">
            <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
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
        <h1>Bienvenido Umpalumpa</h1>
        <p class="lead">Selecciona la opción que deseas realizar</p>
    </div>
</body>
</html>