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
    <title>APRENDE IDIOMAS</title>
</head>

<body class="masthead bg-primary">
    <!--NAV-->
    <header class="enca">
        <div class="wrapper">
            <div class="logo">
                LanguageLearning
            </div>

            <nav>
                <a href="index.php">Inicio</a>
                <a href="prueba.php">Idiomas</a>
                <a href="prueba2.php">Sobre nosotros</a>
                <a href="prueba3.php">Contacto</a>
                <a href="prueba4.php">Formulario</a>
            </nav>
        </div>
    </header>

    <!--Header-->
    <header class=" text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="styles/Imagenes/traducir.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Aprende un nuevo idioma</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Practica al menos 10 minutos diarios para aprender un nuevo idioma</p>
        </div>
    </header>

    <!--Footer-->

    <script src="js/scripts.js ">
    </script>

</body>

</html>