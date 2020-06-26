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
      <a class="nav-link" href="./main.php">Principal</a>
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
	include 'euclidesAndNaiveBayes.php';

	
	$valor = $_GET['valor1'];
	$datos = array();
	
	$datos = obtenerInformacionDestinoEspecífico($valor);
	$destino = $datos[0][8];
	$info = "Información: " . $destino . ". Su actividad principal es: " . $datos[0][5] . ". Se encuentra a " . $datos[0][0] . ". Precio: " . $datos[0][2] . " colones. Tipo camino: " . $datos[0][1] . ". Estilo: " . $datos[0][3] . ".";  
	$latitud = $datos[0][6];
	$longitud = $datos[0][7];
	
	$imagen = obtenerImagen($valor);
	$video = obtenerVideo($valor);
	
?>

<form name="destinos" action="llegardestino.php" method="post">
	<div >
		<h3><?php echo $destino ?></h3>
		
		<table style="width:70%">
		  <tr>
			<td><p><?php echo $info ?></p></td>
			
			<a class="btn btn-primary btn-sm"  href="llegardestino.php/?latitud=<?php echo $latitud ?>&longitud=<?php echo $longitud ?>">¿Cómo llegar al destino?</a>
		 
			<td></td>
		  </tr>
		  <tr>
			<td><img src="<?php echo $imagen ?>" /></td>
			<td><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		  </tr>
		</table>
	</div>

</form>

</body>
</html>