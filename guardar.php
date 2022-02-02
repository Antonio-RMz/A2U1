<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tarea</title>
    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>

<body>
    <section class="hero is-success">
        <div class="hero-body">
            <p class="title">
                PELICULAS
            </p>
            <p class="subtitle">
                Registro
            </p>
        </div>
    </section>
    <section class="section">
        <p class="subtitle">Lista de peliculas</p>

        <?php
        $peli = $_POST['peli'];
        $sinopsis = $_POST['sinopsis'];
        $fecha = $_POST['fecha'];

        $pelicula = fopen("pelicula.txt", "a+");
        fwrite($pelicula,  "<b><br> Nombre de la pelicula: </b>");
        fwrite($pelicula,  $peli);
        fwrite($pelicula,  "<b><<br>Sinopsis: </b>");
        fwrite($pelicula, $sinopsis);
        fwrite($pelicula,  "<b><<br> Fecha de lanzamiento: </b>");
        fwrite($pelicula,  $fecha);
        fwrite($pelicula,  "<br>");

        fclose($pelicula);

        ?>


        <?php
        $lecturaArchivo = fopen("pelicula.txt", "a+");
        while (!feof($lecturaArchivo)) {
            $linea = fgets($lecturaArchivo);
            echo nl2br($linea);
        }
        fclose($lecturaArchivo);
        ?>

        </div>
    </section>
</body>

</html>
