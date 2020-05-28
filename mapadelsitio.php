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
    h5{
		text-align: center;
	}
	table, th, td {
		border: hidden;
		padding: 15px;
	}
	table {
		border-spacing: 5px;
	}
	tr {
		text-align: left;
	}
	
	div {
		width: 100%;
		height: 600px;
		background-image: url('fondo_mapa.jpg');
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

<div>
	<br>
	<br>
	<br>
	<h5>Mapa del sitio</h5>
	<table style="width:70%">
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="login.php">Login</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="main.php">Principal</a>
		<a type="button" class="btn btn-primary btn-sm" href="homeadmin.php" >Mantenimiento</a>
		<a type="button" class="btn btn-primary btn-sm" href="mapadelsitio.php">Mapa del sitio</a>
		<a type="button" class="btn btn-primary btn-sm" href="creditos.php">Créditos</a></td>
	  </tr>
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="main.php">Principal</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="homeadmin.php">Login</a>
		<a type="button" class="btn btn-primary btn-sm" href="mapadelsitio.php">Mapa del sitio</a>
		<a type="button" class="btn btn-primary btn-sm" href="creditos.php">Créditos</a>
		<a type="button" class="btn btn-primary btn-sm" href="buscardestinos.php">Buscar destinos</a></td>
	  </tr>
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="buscardestinos.php">Buscar destinos</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="sitiosmasvisitados.php">Sitios más visitados</a>
		<a type="button" class="btn btn-primary btn-sm" href="ofertas.php">Ofertas destinos</a>
		<a type="button" class="btn btn-primary btn-sm" href="llegardestino.php">¿Cómo llegar al sitio?</a>
		<a type="button" class="btn btn-primary btn-sm" href="resultadosbusqueda.php">Resultados búsqueda</a></td>
	  </tr>
	  
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="resultadosbusqueda.php">Resultados búsqueda</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="llegardestino.php">¿Cómo llegar al destino?</a>
		</td>
	  </tr>
	  
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="llegardestino.php">¿Cómo llegar al destino?</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="detalles.php">Más información destino</a></td>
	  </tr>
	  
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="homeadmin.php">Mantenimiento</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="mantenimientodestinos.php">Mantenimiento de destinos</a>
		<a type="button" class="btn btn-primary btn-sm" href="mantenimientoofertas.php">Mantenimiento de ofertas</a></td>
	  </tr>
	  
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="mantenimientodestinos.php">Mantenimiento de destinos</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="creardestino.php">Crear destino</a>
		<a type="button" class="btn btn-primary btn-sm" href="eliminardestino.php">Eliminar destino</a>
		<a type="button" class="btn btn-primary btn-sm" href="modificardestino.php">Modificar destino</a></td>
	  </tr>
	  
	  <tr>
		<td><a type="button" class="btn btn-primary btn-sm" href="mantenimientoofertas.php" >Mantenimiento de ofertas</a></td>
		<td><a type="button" class="btn btn-primary btn-sm" href="crearoferta.php">Crear oferta</a>
		<a type="button" class="btn btn-primary btn-sm" href="modificaroferta.php">Modificar oferta</a></td>
	  </tr>
	</table>
</div>

</body>
</html>