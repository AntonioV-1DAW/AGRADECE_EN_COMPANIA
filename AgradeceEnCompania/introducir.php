<?php
    include'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        return $conexion;
    }

    function iniciarSesion(){
        session_start();
        //Tenemos que conectar con la base de datos
        $conexion=conectar();
        $nombre=$_POST["nombre"];
        $contrasena=$_POST["contrasena"];
        //Consulta del query
        $sql = "SELECT idAlumno FROM alumnos WHERE nombre = '$nombre' AND contrasena = '$contrasena'";
        $resultado=$conexion->query($sql);
        //Optener primera fila
        $fila=$resultado->fetch_array();

        if($fila){
            $_SESSION['nombre'] = $nombre;
            echo "Inicio de sesión correcto";
            //header("Location: inicio.html?login=success");
            exit();
        } else {
            echo "Usuario o contrasena incorrectos";
        }

        $conexion->close();
    }
    // Ejecutar la función si se envió el formulario
    if($_POST){
        iniciarSesion();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inicio-AGRADECE_EN_COMPAÑIA</title>
        <meta charset="UTF-8">
        <meta name="Author" content="San Francisco Javier">
		<link rel="StyleSheet" href="./Estilos.css" type="text/css">
    </head>
    <body class="fondoIntroducir">
        <header class="tituloIntroducir">
            <img src="./imagenes/titulo.png"/>
            <br>
            <img src="./imagenes/comparte.png"/>
        </header>
        <article class="introducir">
            <div  class="inicio">
                <img src="./imagenes/inicia.png"/>
            </div>
            <div>
                <form action="introducir.php" method="POST">
                    <div>
                        <label for="nombre">Usuario:</label><br>
                        <input type="text" id="nombre" name="nombre" placeholder="Introduce tu usuario" class="campo" required><br><br>

                        <label for="nombre">Contraseña:</label><br>
                        <input type="password" id="contrasena" name="contrasena" placeholder="Introduce tu contraseña" class="campo" required><br>
                    </div>
                    <div>
                        <p>
                            <input type="radio" id="recordarme" name="recordarme" value="recordarme">
                            <label for="recordarme">Recordarme</label>
                            <br>
                            <input type="submit" value="Enviar" class="btnEnviar"/>
                        </p>
                    </div>
                </form>
            </div>
        </article>
    </body>
</html>