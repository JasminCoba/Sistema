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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<meta>

<head>
    <title>Reservar</title>
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
                <a href="inicio.php">Iniciar sesion</a>
            </nav>
        </div>
    </header>

    <div>
    <img src="styles/imagenes/horario.jpg" class="center"/>
    </div>

    <div class="pie">
        <p class="centrados"> SIMBOLOGIA </p>
</div>

    <script src="js/scripts.js ">
    </script>

</body>

</html>