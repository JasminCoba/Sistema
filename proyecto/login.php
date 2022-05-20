<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $basedatos="proyecto";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$enlace){
        echo"error en la base de datos";
    }

    $nombre
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/styleform.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<meta charset="utf-8">

<head>

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
    <title>Inicio de sesión</title>
    <section class="form-login-reserva">
        <center><img src="styles/imagenes/logo.png" height= 150, weight = 244></center><br/>
        <form action="" >
            <input class="controls" type="text" name="usuario" placeholder="Usuario">
            <input class="controls" type="text" name="contrasenia" placeholder="Contrasenia">
            <input class="buttons" type="submit" name="" value="Iniciar sesión">
            <div class="registrate_link">
                <center>¿Olvidaste tu contraseña?</center><br/>
                <center>¿No tienes cuenta? <a href="#">Registrate</a></center>
            </div>
        </form>
    </section>
</head>
</html>
