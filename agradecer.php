<?php
    function conectar(){
        $conexion=new mysqli("localhost", "root", "", "alumnos");
        return $conexion;
    }

    function mostrarAlumnos($conexion){
        $sql="SELECT idAlumno, nombre FROM alumnos";
        $resultado=$conexion->query($sql);

        while($fila=$resultado->fetch_array()){
            echo '<option  value="'.$fila['idAlumno'].'">';
            echo $fila['idAlumno'].'-'.$fila['nombre'];
            echo '</option>';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="author" content="Papa Francisco">
        <link rel="StyleSheet" href="./Estilos.css" type="text/css"/>
    </head>
    <body>
        <header id="Agradecer">
            <img src="./imagenes/titulo.png"/>
        </header>
        <nav>
            <a class="botones" href="./inicio.html">Inicio</a>
			<a class="botones" href="./agradecer.php">Agradecer</a>
			<a class="botones" href="./MisAgradecimientos.html">Mis Agradecimientos</a>
        </nav>
        <section class="principal">
            <label for="alumnos" placeholder="Selecciona un alumno">Para: </label>
            <select name="alumnos" id="alumnos">
                <?php
                    $conexion=conectar();
                    mostrarAlumnos($conexion);
                ?>
            </select>
        </section>
    </body>
</html>