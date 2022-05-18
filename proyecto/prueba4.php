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
<link rel="stylesheet" type="text/css" href="styles/style_formulario.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<meta>

<head>
    <title>APRENDE IDIOMAS</title>
</head>

<body class="masthead bg-primary">
    <!--NAV-->
    <header class="enca ">
        <div class="wrapper ">
            <div class="logo ">
                Formulario
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


    <!--Formulario-->
    <div class="margen">
        <form action="#" class="proyecto" id="proyecto" name="proyecto" method="POST">
            <h1 class="titu">FORMULARIO</h1>
            <p class="formulario">
            <font size="4"><b>Cliente/contacto</b></font>
            </p>
        <form action="#" class="proyecto" id="proyecto" name="proyecto" method="POST">
            <div class="row input-container">
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text"  id="nombre" name="nombre" required />
                        <label>Nombre</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text"  id="paterno" name="paterno" required />
                        <label>Apellido Paterno</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text"  id="materno" name="materno" required />
                        <label>Apellido Materno</label> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" id="correo" name="correo" required />
                        <label>Email</label> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" id="telefono" name="telefono" required />
                        <label>Numero Telefonico</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" id="edad" name="edad" required />
                        <label>Edad</label>
                    </div>
                </div>
            

                <div class="pregresp">
                    <label>Sexo: </label>
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="sexo" id="sexo" value="Hombre" required/> Hombre<br/>
                            </label>
                        </div>

                        <div class="pregunta">
                                <input class="respuestas" type="radio" name="sexo" id="sexo" value="Mujer"> Mujer<br/>
                                </label>
                        </div>                   
                        <div class="pregunta">
                                <input class="respuestas" type="radio" name="sexo" id="raro" value="Raro"> Indefinido<br/>
                                </label>
                        </div>
                        
                </div>
            </div>

        <!------------------------------------------------------------------------------------------------------------------------------------------------>
        
        <!------------------------------------------------------------------------------------------------------------------------------------------------>
        <br>
        <br>
    <div class="row input-container">
        <p class="formulario">
            <font size="4"><b>Preguntas comunes</b></font>
        </p>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" id="supo" name="supo" required />
                <label>¿Como supo de nosotros?</label>
            </div>
        </div>
        <br>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" id="trabaja" name="trabaja" required />
                <label>¿Trabajas? (si/no)</label>
            </div>
        </div>
    
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" id="estudiado" name="estudiado" required />
                <label>¿Ha estudiedo algun idiomas antes? (si/no)</label>
            </div>
        </div>
    </div>

        
        <!------------------------------------------------------------------------------------------------------------------------------------------------>
        

        <!--Encuesta-->
        <p class="formulario">
            <br></br>
            <font size="4"><b>Idioma</b></font>
        </p>
    <div class="row input-container">
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" id="nativo" name="nativo" required />
                <label>¿Cual es su idioma nativo?</label>
            </div>
        </div>

        <div class="pregresp">
            <table>
                <label>idioma que desea aprender: </label>
                <tr>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="Español"> Español
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="japones"> Japones
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="aleman"> Aleman
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="form-check">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="noruego"> Noruego
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="portugues"> Portugues
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="chino"> Chino
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuesta" type="radio" name="idioma" id="idioma" value="ingles"> Ingles
                            </label>
                        </div>
                    </td>
                </tr>
            </table>

        </div>

        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" id="objetivo" name="objetivo" required />
                <label>Objetivo a cumplir</label>
            </div>
        </div>
    </div>


<!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="row input-container">
        <p class="pregresp">
            <br></br>
            <font size="4"><b>Modalidad de estudio</b></font>
        </p>

        <div class="pregresp">
            <table>
                <label>Tipo de clases: </label>
                <tr>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="tipo" id="tipo" value="presencial"> Presencial
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="tipo" id="tipo" value="linea"> En linea
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <br/>

        <div class="pregresp">
            <table>
                <label>Turno: </label>
                <tr>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="turno" id="turno" value="Matutino"> Matutino
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="turno" id="turno" value="Vespertino"> Vespertino
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="pregresp">
            <table>
                <label>Tipo de curso: </label>
                <tr>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="curso" id="curso" value="Regular"> Regular
                            </label>
                        </div>
                    </td>
                    <td class="celda2">
                        <div class="pregunta">
                            <input class="respuestas" type="radio" name="curso" id="curso" value="Intensivo"> Intensivo
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    

        <!-------------------------------------------------------------------------------------------------------------------------------------->
        <!--Boton-->

        <div class="col-xs-12">
            <br>
            <input class="btn-lrg submit-btn" type="submit" name="guardar" class="btn" value="guardar">
        </div>
</form>
    </div>

<!--Fin de formulario-->


<!--Tabla de cliente-->
<br>
    <div class="margen">
    <p class="formulario" align="center">
            <font size="4"><b>Cliente</b></font>
        </p>
        <div class="formulario">
			<table>
				<tr>
                    <td class="borde"><b>ID:</b> </td>
					<td class="borde"><b>Nombre:</b> </td>
					<td class="borde"><b>Apellido Paterno:</b> </td>
					<td class="borde"><b>Apellido Materno:</b> </td>
					<td class="borde"><b>Edad:</b> </td>
                    <td class="borde"><b>Sexo:</b> </td>
				</tr>
					<?php
                    //$id=1;
						$sql="SELECT * from cliente";
                        $result=mysqli_query($enlace,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <!--<td><-?php echo $id?></td>-->
                                <td><?php echo $mostrar['id']?></td> 
                                <td><?php echo $mostrar['nombre']?></td>  
                                <td><?php echo $mostrar['paterno']?></td> 
                                <td><?php echo $mostrar['materno']?></td> 
                                <td><?php echo $mostrar['edad']?></td> 
                                <td><?php echo $mostrar['sexo']?></td> 

                            </tr>
                        <?php
                        //$id++;
                        }

					?>
						
			</table>
                    </div>
    </div>
<!--Fin de tabla cliente-->


<!--Tabla de contacto-->
<br>
    <div class="margen">
    <p class="formulario" align="center">
            <font size="4"><b>Contacto</b></font>
        </p>
        <div class="formulario">
			<table>
				<tr>
                    <td class="borde"><b>ID:</b> </td>
					<td class="borde"><b>Correo:</b> </td>
					<td class="borde"><b>Contacto:</b> </td>
				</tr>
					<?php
                    //$id=1;
						$sql="SELECT * from contacto";
                        $result=mysqli_query($enlace,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <!--<td><-?php echo $id?></td>-->
                                <td><?php echo $mostrar['id']?></td> 
                                <td><?php echo $mostrar['correo']?></td>  
                                <td><?php echo $mostrar['telefono']?></td> 

                            </tr>
                        <?php
                        //$id++;
                        }

					?>
						
			</table>
                    </div>
    </div>
<!--Fin de tabla contacto-->


<!--Tabla de preguntas-->
<br>
    <div class="margen">
    <p class="formulario" align="center">
            <font size="4"><b>Preguntas frecuentes</b></font>
        </p>
        <div class="formulario">
			<table>
				<tr>
                    <td class="borde"><b>ID:</b> </td>
                    <td class="borde"><b>Como nos conocio?</b> </td>
					<td class="borde"><b>Trabaja?</b> </td>
					<td class="borde"><b>Ha estudiado un idioma antes?:</b> </td>
				</tr>
					<?php
                    //$id=1;
						$sql="SELECT * from preguntas";
                        $result=mysqli_query($enlace,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <!--<td><-?php echo $id?></td>-->
                                <td><?php echo $mostrar['id']?></td> 
                                <td><?php echo $mostrar['supo']?></td>  
                                <td><?php echo $mostrar['trabaja']?></td> 
                                <td><?php echo $mostrar['estudiado']?></td> 

                            </tr>
                        <?php
                        //$id++;
                        }

					?>
						
			</table>
                    </div>
    </div>
<!--Fin de tabla preguntas-->

<!--Tabla de idiomas-->
<br>
    <div class="margen">
    <p class="formulario" align="center">
            <font size="4"><b>Idioma</b></font>
        </p>
        <div class="formulario">
			<table>
				<tr>
                    <td class="borde"><b>ID:</b> </td>
                    <td class="borde"><b>Lenguaje nativo:</b> </td>
					<td class="borde"><b>Idioma a estudiar?</b> </td>
					<td class="borde"><b>Objetivo:</b> </td>
				</tr>
					<?php
                    //$id=1;
						$sql="SELECT * from idioma";
                        $result=mysqli_query($enlace,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <!--<td><-?php echo $id?></td>-->
                                <td><?php echo $mostrar['id']?></td> 
                                <td><?php echo $mostrar['nativo']?></td>  
                                <td><?php echo $mostrar['idioma']?></td> 
                                <td><?php echo $mostrar['objetivo']?></td> 

                            </tr>
                        <?php
                        //$id++;
                        }

					?>
						
			</table>
                    </div>
    </div>
<!--Fin de tabla idioma-->

<!--Tabla de modalidad-->
<br>
    <div class="margen">
    <p class="formulario" align="center">
            <font size="4"><b>Idioma</b></font>
        </p>
        <div class="formulario">
			<table>
				<tr>
                    <td class="borde"><b>ID:</b> </td>
                    <td class="borde"><b>Tipo de clases:</b> </td>
					<td class="borde"><b>Turno:</b> </td>
					<td class="borde"><b>Tipo de curso:</b> </td>
				</tr>
					<?php
                    //$id=1;
						$sql="SELECT * from modalidad";
                        $result=mysqli_query($enlace,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <!--<td><-?php echo $id?></td>-->
                                <td><?php echo $mostrar['id']?></td> 
                                <td><?php echo $mostrar['tipo']?></td>  
                                <td><?php echo $mostrar['turno']?></td> 
                                <td><?php echo $mostrar['curso']?></td> 

                            </tr>
                        <?php
                        //$id++;
                        }

					?>
						
			</table>
                    </div>
    </div>
<!--Fin de tabla modalidad-->


</body>
</html>

<!--------------------------------------------------------------------------------------------------------------->
<!--php de cliente-->

<?php	
    if(isset($_POST['guardar'])){
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $edad=$_POST['edad'];
        $sexo=$_POST['sexo'];
        


    $insertardatos = "INSERT INTO cliente (nombre, paterno, materno, edad, sexo) VALUES('$nombre',
     '$paterno', 
     '$materno', 
     '$edad', 
     '$sexo')";
    

    $ejecutarinsertar = mysqli_query($enlace, $insertardatos);

    if(!$ejecutarinsertar){
        echo"no se subieron los datos";
    }
}

?> 


<!--php de contacto-->
<?php	
    if(isset($_POST['guardar'])){
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        


    $insertardatos1 = "INSERT INTO contacto (correo, telefono) VALUES('$correo',
     '$telefono')";
    

    $ejecutarinsertar1 = mysqli_query($enlace, $insertardatos1);

    if(!$ejecutarinsertar1){
        echo"no se subieron los datos";
    }
}

?> 


<!--php de preguntas-->
<?php	
    if(isset($_POST['guardar'])){
        $trabaja=$_POST['trabaja'];
        $estudiado=$_POST['estudiado'];
        $supo=$_POST['supo'];
        


    $insertardatos2 = "INSERT INTO preguntas (trabaja, estudiado,supo) VALUES('$trabaja',
     '$estudiado', '$supo')";
    

    $ejecutarinsertar2 = mysqli_query($enlace, $insertardatos2);

    if(!$ejecutarinsertar2){
        echo"no se subieron los datos";
    }
}

?> 

<!--php de idioma-->
<?php	
    if(isset($_POST['guardar'])){
        $nativo=$_POST['nativo'];
        $idioma=$_POST['idioma'];
        $objetivo=$_POST['objetivo'];
        


    $insertardatos3 = "INSERT INTO idioma (nativo, idioma,objetivo) VALUES('$nativo',
     '$idioma', '$objetivo')";
    

    $ejecutarinsertar3 = mysqli_query($enlace, $insertardatos3);

    if(!$ejecutarinsertar3){
        echo"no se subieron los datos";
    }
}

?> 


<!--php de idioma-->
<?php	
    if(isset($_POST['guardar'])){
        $tipo=$_POST['tipo'];
        $turno=$_POST['turno'];
        $curso=$_POST['curso'];
        


    $insertardatos4 = "INSERT INTO modalidad (tipo, turno,curso) VALUES('$tipo',
     '$turno', '$curso')";
    

    $ejecutarinsertar4 = mysqli_query($enlace, $insertardatos4);

    if(!$ejecutarinsertar4){
        echo"no se subieron los datos";
    }
}

?>



