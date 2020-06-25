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
	img{
		width: 400px;
		heigh: 400px;
	}
	
	h3 {
		padding: 25px;
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

<?php

	$destino = $_POST['destino1'];
	echo $destino . "<br>";
?>

<div >
	<h3>Sanatorio Carlos Durán</h3>
	
	<table style="width:70%">
	  <tr>
		<td><p>Información
			Sanatorio Carlos Durán, su actividad principal del reducto es realizar una caminata por sus alrededores e interior del edificio. Se encuentra a unos 30 minutos del norte de Cartago. Precio: 1000 colones

			Estilo: campo

			Camino: asfalto</p></td>

      <button type="button" class="btn btn-primary" onclick="window.location.href='llegardestino.php'">
		    ¿Cómo llegar al destino?
	    </button>
		<td><img src="duran.jpg" /></td>
	  </tr>
	  <tr>
		<td></td>
		<td><img src="sanatorio.jpg" /><iframe width="560" height="315" src="https://www.youtube.com/embed/CDV2AwOeeis" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
	  </tr>
	</table>
</div>

</body>
</html>