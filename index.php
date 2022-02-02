<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Peliculas</title>
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
		<div class="columns">
			<div class="column is-one-third"></div>
			<form action="guardar.php" method="post">
				<div>
					<label>Pelicula:</label>
					<input class="input is-primary" type="text" name="peli" required>
				</div>

				<div>
					<label>Sinopsis:</label>

					<textarea class="input" name="sinopsis" placeholder="Agregue una sinopsis"></textarea>
				</div>


				<div>
					<label>Fecha de publicacion:</label>
					<input class="input is-primary" type="date" name="fecha">
				</div>


				<div style="text-align: medium">
					<br>
					<input type="submit" class="button is-link" value="Guardar">
				</div>
			</form>
			<div class="column "></div>
	</section>
</body>

</html>
