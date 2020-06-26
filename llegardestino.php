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
		width: 100%;
		heigh: 100%;
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
      <a class="nav-link" href="../main.php">Principal</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Destinos Turísticos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../buscardestinos.php">Buscar destinos cercanos</a>
        <a class="dropdown-item" href="../sitiosmasvisitados.php">Sitios más visitados</a>
        <a class="dropdown-item" href="../ofertas.php">Ofertas</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../mapadelsitio.php">Mapa del sitio</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="../creditos.php">Créditos</a>
    </li>
  </ul>
</nav>
<?php

	$valorlatitud = $_GET['latitud'];
	$valorlongitud = $_GET['longitud'];
	$latitud = str_replace(',','.',$valorlatitud);
	$longitud = str_replace(',','.',$valorlongitud);

?>



	<div>
	
		<br>
		<h5 align="center">¿Cómo llegar al destino?</h5>
		<iframe class="iframe" src="https://maps.google.com/?ll=<?php echo $latitud ?>,<?php echo $longitud ?>&z=14&t=m&output=embed" height="450" width="1300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>



</body>
</html>