<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $basedatos="proyecto";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$enlace){
        echo"error en la base de datos";
    }

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/styleform.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<meta>

<head>
    <title>Reservación de laboratorios</title>
</head>

<body class="body1">
    <!--NAV-->
    <header class="enca">
        <div class="wrapper">
            <div class="logo">
            <img src="styles/imagenes/logo.png" height= 80, weight = 244>
            </div>
            <nav>
                <a href="index.php">Horario</a>
                <a href="reservar.php">Reservar laboratorio</a>
                <a href="solicitud.php">Solicitud de reservaciones</a>
                <a href="inicio.php">Cerrar sesión</a>
            </nav>
        </div>
    </header>
    <section class="form-login-reserva">
        <h5>Reservar laboratorio</h5>
        <form action="" >
            <input class="controls" type="text" name="nombre" placeholder="Nombre">
            <input class="controls" type="text" name="ap_paterno" placeholder="Apellido paterno">
            <input class="controls" type="text" name="ap_materno" placeholder="Apellido materno">
            <input class="controls" type="text" name="correo" placeholder="Correo">
            <input class="controls" type="text" name="clase" placeholder="Nombre de la clase">
            <input class="controls" type="text" name="horario" placeholder="Horario">
            <input class="buttons" type="submit" name="" value="Ingresar">
        </form>
    </section>
</body>
</html>
