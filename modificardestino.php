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

	<?php

	$servername = "163.178.107.10"; //La dirección del servidor MySQL
	$username = "laboratorios"; //usuario del servidor
	$password = "UCRSA.118"; //contraseña del servidor
	$dbname = "proyectos_expertos_b16213_b77436"; //nombre de la base de datos que se va a utilizar

	//Realiza la conexión a una base de datos, utilizando la dirección, usuario, contraseña y base de datos del servidor a utilizar
	$conn = new mysqli($servername, $username, $password, $dbname);
	// En caso que la conexión fallé, envía mensaje de conexión fallida.
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = "SELECT * FROM destinosturisticosse where Id=$id";
		$updateresult = mysqli_query($conn, $query);

		if (mysqli_num_rows($updateresult) == 1) {
			$row = mysqli_fetch_array($updateresult);

			$place = $row['Lugar'];
			$activity = $row['Actividad'];
			$price = $row['Precio'];
			$roadType = $row['Camino'];
			$time = $row['Tiempo'];
			$style = $row['Estilo'];
			$name = $row['Nombre destino'];
		}


		if (isset($_POST['modificarDestino'])) {
			$id = $_GET['id'];
			$place = $_POST['lugarDestinoModificar'];
			$activity = $_POST['actividadDestinoModificar'];
			$price = $_POST['precioDestinoModificar'];
			$roadType = $_POST['caminoDestinoModificar'];
			$time = $_POST['tiempoDestinoModificar'];
			$style = $_POST['estiloDestinoModificar'];
			$name = $_POST['nombreDestinoModificar'];
			$image = 'aaaaaaa';

			$sql1 = "SET SQL_SAFE_UPDATES=0;";
			$sql2 = "UPDATE destinosturisticosse SET Lugar='$place',Actividad='$activity',Precio=$price,Camino='$roadType',Tiempo='$time',Estilo='$style',`destinosturisticosse`.`Nombre destino`='$name' WHERE Id=$id;";
			$sql3 = "SET SQL_SAFE_UPDATES=1;";
			mysqli_query($conn, $sql1);
			$res = mysqli_query($conn, $sql2);
			mysqli_query($conn, $sql3);

			if (!$res) {
				die("Falló el query");
			}

			header("Location: mantenimientodestinos.php");
		}
	}


	?>

	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="card card-body">
					<form action="modificardestino.php?id=<?php echo $_GET['id']; ?>" method="POST">
						<div class="form-group">
							<label>Ingrese el nombre del destino turístico que desea modificar: </label>
							<input type="text" placeholder="Ingrese nombre" name="nombreDestinoModificar" value="<?php echo $name ?>" required><br>

							<label>Seleccione la actividad a realizar en este lugar:</label>
							<select name="actividadDestinoModificar" value>
								<option value="" selected disabled hidden>Elija una opción</option>
								<option value="Observación">Observación</option>
								<option value="Caminata">Caminata</option>
								<option value="Senderismo">Senderismo</option>
								<option value="Disfrutar paisajes">Disfrutar paisajes</option>
								<option value="Recreativo">Recreativo</option>
							</select><br>

							<label>Seleccione un lugar: </label>
							<select name="lugarDestinoModificar">
								<option value="" selected disabled hidden>Elija una opción</option>
								<option value="Cartago">Cartago</option>
								<option value="Alajuela">Alajuela</option>
								<option value="San José">San José</option>
								<option value="Heredia">Heredia</option>
								<option value="Limón">Limón</option>
								<option value="Guanacaste">Guanacaste</option>
								<option value="Puntarenas">Puntarenas</option>
							</select><br>

							<label>Duracción de recorrido: </label>
							<select name="tiempoDestinoModificar">
								<option value="" selected disabled hidden>Elija una opción</option>
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
							<select name="caminoDestinoModificar">
								<option value="" selected disabled hidden>Elija una opción</option>
								<option value="Asfalto">Asfalto</option>
								<option value="Lastre">Lastre</option>
								<option value="Llano">Llano</option>
								<option value="Curvas">Curvas</option>
								<option value="Empinado">Empinado</option>
							</select><br>

							<label>Ingrese el precio del tiquete: </label>
							<input type="text" placeholder="Ingrese precio a modificar" name="precioDestinoModificar" value="<?php echo $price ?>" required><br>

							<label>Seleccione el estilo de destino: </label>
							<select name="estiloDestinoModificar">
								<option value="" selected disabled hidden>Elija una opción</option>
								<option value="Campo">Campo</option>
								<option value="Ciudad">Ciudad</option>
								<option value="Bosque">Bosque</option>
								<option value="Playa">Playa</option>
							</select><br><br>

							<button class="btn btn-primary btn-block" name="modificarDestino">Modificar destino</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>