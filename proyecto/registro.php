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
    <title>pagina web</title>
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

                <a href="reservar.php">Recepcion del laboratorio</a>
                <a href="registro.php">Registro</a>
                <a href="solicitud.php">Solicitud de reservaciones</a>
                <a href="inicio.php">Iniciar sesion</a>
            </nav>
        </div>
    </header>

    <div class="center">
        <table style="width: 100%; height: 100%; background-color: #2C3333; color: white; border-collapse: collapse;
        border: #2C3333 4px solid;">
            <tr tyle= "height: 50px; text-align: center;">
                <th style= "text-align: center; height: 40px; border: #2C3333 1px solid; background-color: #2C3333"></th>
                <th style= "text-align: center; height: 40px; border: #2C3333 1px solid; background-color: #2C3333"></th>
                <th style= "text-align: center; height: 40px; border: #2C3333 1px solid; background-color: #2C3333">&nbsp Recepcion del laboratorio &nbsp</th>
                <th style= "text-align: center; height: 40px; border: #2C3333 1px solid; background-color: #2C3333"></th>
                <th style= "text-align: center; height: 40px; border: #2C3333 1px solid; background-color: #2C3333"></th>
            </tr>
        
            <tr >
                <th style= "text-align: center; color: black; height: 40px; border: #2C3333 1px solid; background-color: white">&nbsp TIEMPO &nbsp</th>
                <th style= "text-align: center; color: black; height: 40px; border: #2C3333 1px solid; background-color: white">&nbsp HORA DE ENTRADA &nbsp</th>
                <th style= "text-align: center; color: black; height: 40px; border: #2C3333 1px solid; background-color: white">&nbsp HOLA DE SALIDA&nbsp</th>
                <th style= "text-align: center; color: black; height: 40px; border: #2C3333 1px solid; background-color: white">&nbsp ENCARGADO &nbsp</th>
                <th style= "text-align: center; color: black; height: 40px; border: #2C3333 1px solid; background-color: white">&nbsp LABORATORIO &nbsp</th>
            </tr>
        
            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>


            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>


            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>


            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            <tr >
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
                <th style= "text-align: center; color: black; height: 10px; border: #2C3333 1px solid; background-color: white"></th>
            </tr>

            

        </table>
    </div>

    <div class="pie">
        <p class="centrados"> NOTAS </p>
    </div>
</body>
</html>
