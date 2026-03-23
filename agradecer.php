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
                    //El en segundo option lo vamos a poner como sería para volverlo dinámico
                    // en el cual el propio option cogera los valores guardados de la base de datos sobre los alumnos

                    //En el value el idAlumno como bien dice su nombre el valor se cambiaria
                    // al del id del alumno y el name se cambiaria al nombre del alumno respectivo del id
                ?>
                <option value="1">Perez Maroto, Alejandro</option>
                <option value="idAlumno">name</option>
            </select>
        </section>
    </body>
</html>