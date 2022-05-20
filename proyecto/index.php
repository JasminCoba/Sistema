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
    
    <div class="center">
        <table style="width: 100%; background-color: #2C3333; color: white; border-collapse: collapse;
        border: #2C3333 4px solid;">
            <tr style="border: #E0DDAA 1px solid;">
                <th style= "height: 50px; text-align: center">&nbsp Hora &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Lunes &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Martes &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Miercoles &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Jueves &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Viernes &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Sabado &nbsp</th>
                <th style= "height: 50px; text-align: center">&nbsp Domingo &nbsp</th>
            </tr>
        
            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 07:00 - 08:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>
        
            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 08:00 - 09:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 09:00 - 10:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 10:00 - 11:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 11:00 - 12:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 12:00 - 13:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 13:00 - 14:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 14:00 - 15:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 15:00 - 16:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 16:00 - 17:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 17:00 - 18:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 18:00 - 19:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 19:00 - 20:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr >
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 20:00 - 21:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

            <tr>
                <th style= "height: 20px; border: #E0DDAA 1px solid;">&nbsp 21:00 - 22:00 &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
                <th style= "height: 20px; border: #2C3333 1px solid; background-color: #E0DDAA">&nbsp &nbsp</th>
            </tr>

        </table>
    </div>
    <div class="pie">
        <p class="centrados"> SIMBOLOGIA </p>
    </div>

    <script src="js/scripts.js ">
    </script>

</body>

</html>