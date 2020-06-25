<!DOCTYPE html>
<html lang="en">

<head>
	<title>Destinos Turísticos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<style>
		.container-fluid {
			position: absolute;
			width: 100%;
			height: 99%;
			background-color: #5B8CA4;
			;
		}

		h5 {
			text-align: center;
		}
	</style>

	<style type="text/css">
		img {
			width: auto;
			height: auto;
			text-align: center;
			padding: 155px;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="#">
		</a>

		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="main.php">Principal</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Destinos Turísticos
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="buscardestinos.php">Buscar destinos cercanos</a>
					<a class="dropdown-item" href="sitiosmasvisitados.php">Sitios más visitados</a>
					<a class="dropdown-item" href="ofertas.php">Ofertas</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Mantenimiento
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="mantenimientodestinos.php">Administrar destinos</a>
					<a class="dropdown-item" href="mantenimientoofertas.php">Administrar ofertas</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mapadelsitio.php">Mapa del sitio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="creditos.php">Créditos</a>
			</li>
		</ul>
	</nav>

	<div>

		<form action="guardardestino.php" method="POST">
			<label>Ingrese el nombre del destino turístico: </label>
			<input type="text" placeholder="Ingrese nombre" name="nombreDestinoIngresar" required><br>

			<label>Seleccione la actividad a realizar en este lugar:</label><br>
			<select name="actividadDestinoIngresar" method="get">
				<option value="Observación">Observación</option>
				<option value="Caminata">Caminata</option>
				<option value="Senderismo">Senderismo</option>
				<option value="Disfrutar paisajes">Disfrutar paisajes</option>
				<option value="Recreativo">Recreativo</option>
			</select><br>

			<label>Seleccione un lugar: </label>
			<select name="lugarDestinoIngresar">
				<option value="Cartago">Cartago</option>
				<option value="Alajuela">Alajuela</option>
				<option value="San José">San José</option>
				<option value="Heredia">Heredia</option>
				<option value="Limón">Limón</option>
				<option value="Guanacaste">Guanacaste</option>
				<option value="Puntarenas">Puntarenas</option>
			</select><br>

			<label>Duracción de recorrido: </label>
			<select name="tiempoDestinoIngresar">
				<option value="30 min"> 30 min</option>
				<option value="1 h">1 h</option>
				<option value="1 h 30 min">1 h 30 min</option>
				<option value="2 h">2 h</option>
				<option value="2 h 30 min">2 h 30 min</option>
				<option value="3 h">3 h</option>
				<option value="3 h 30 min">3 h 30 min</option>
				<option value="4 h"> > 4 h</option>
			</select><br>

			<label>Seleccione el tipo de camino: </label>
			<select name="caminoDestinoIngresar">
				<option value="Asfalto">Asfalto</option>
				<option value="Lastre">Lastre</option>
				<option value="Llano">Llano</option>
				<option value="Curvas">Curvas</option>
				<option value="Empinado">Empinado</option>
			</select><br>

			<label>Ingrese el precio del tiquete: </label>
			<input type="text" placeholder="Ingrese precio" name="precioDestinoIngresar" required><br>

			<label>Seleccione el estilo de destino: </label>
			<select name="estiloDestinoIngresar">
				<option value="Campo">Campo</option>
				<option value="Ciudad">Ciudad</option>
				<option value="Bosque">Bosque</option>
				<option value="Playa">Playa</option>
			</select><br><br>

			<input type="submit" class="btn btn-primary" name="guardarDestino" value="Agregar destino">

		</form>

	</div>

</body>

</html>

