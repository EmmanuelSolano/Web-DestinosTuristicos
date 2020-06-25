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
	table, th, td {
		border: hidden;
		padding: 15px;
	}
	table {
		border-spacing: 5px;
	}
	tr {
		text-align: center;
	}
	
	button{
		text-align: right;
	}
	
	div {
		width: 100%;
		height: 600px;
		background-image: url('fondo.jpg');
		background-size: cover;
		background-attachment: fixed;
		opacity: 100%;
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
    <li class="nav-item">
      <a class="nav-link" href="mapadelsitio.php">Mapa del sitio</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="creditos.php">Créditos</a>
    </li>
  </ul>
</nav>

<form name="destinos" action="resultadosbusqueda.php" method="post">
	<div>
		<table style="width:70%">
		  <tr>
			<td><b>Seleccione un lugar:<b></td>
			<td><select name="lugar">
					<option value="1">Cartago</option>
					<option value="2">Alajuela</option>
					<option value="3">San José</option>
					<option value="4">Heredia</option>
					<option value="5">Guanacaste</option>
					<option value="6">Limón</option>
					<option value="7">Puntarenas</option>
				</select></td>
		  </tr>
		  <tr>
			<td><b>Duracción de recorrido:<b></td>
			<td><select name="tiempo">
					<option value="1">menor a 30 min</option>
					<option value="2">30 min</option>
					<option value="3">1 h 30 min</option>
					<option value="4">2 h</option>
					<option value="5">2h 30 min</option>
					<option value="6">3 h</option>
					<option value="7">3h 30 min</option>
					<option value="8">4 h</option>
					<option value="9">4 h 30 min</option>
					<option value="10">5 h</option>
					<option value="11">5 h 30 min</option>
					<option value="12">mayor a 6 h</option>
				</select></td>
		  </tr>
		  <tr>
			<td><b>Seleccione el tipo de camino:<b></td>
			<td><select name="camino">
					<option value="1">Lastre</option>
					<option value="2">Asfalto</option>
					<option value="3">Empinado</option>
					<option value="4">Llano</option>
					<option value="5">Con curvas</option>
					<option value="6">Sin curvas</option>
				</select></td>
		  </tr>
		  
		  <tr>
			<td><b>Seleccione el precio:<b></td>
			<td><select name="precio">
					<option value="1">1000</option>
					<option value="2">1500</option>
					<option value="3">2500</option>
					<option value="4">3000</option>
					<option value="5">5000</option>
					<option value="6">8000</option>
					<option value="7">11000</option>
					<option value="8">15000</option>
					<option value="9">20000</option>
					<option value="10">23000</option>
					<option value="11">30000</option>
					<option value="12">50000</option>
					<option value="13">80000</option>
					<option value="14">100000</option>
					<option value="15">200000</option>
				</select></td>
		  </tr>
		  
		  <tr>
			<td><b>Seleccione el estilo de destino:<b></td>
			<td><select name="estilo">
					<option value="1">Montaña</option>
					<option value="2">Campo</option>
					<option value="3">Ciudad</option>
					<option value="4">Playa</option>
				</select></td>
		  </tr>
		</table>
		<br>
		<br>
		<input type="submit" class="btn btn-primary" value="Buscar sitios turísticos cercanos">
		

	</div>
</form>
</body>
</html>