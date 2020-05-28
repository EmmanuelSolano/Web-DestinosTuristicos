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
		<td><button type="button" class="btn btn-primary btn-sm" >Login</button></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Mantenimiento ofertas</button>
		<button type="button" class="btn btn-primary btn-sm" >Mantenimiento sitios más visitados</button>
		<button type="button" class="btn btn-primary btn-sm" >Buscar destinos</button></td>
	  </tr>
	  <tr>
		<td><button type="button" class="btn btn-primary btn-sm" >Principal</button></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Login</button>
		<button type="button" class="btn btn-primary btn-sm" >Mapa del sitio</button>
		<button type="button" class="btn btn-primary btn-sm" >Créditos</button>
		<button type="button" class="btn btn-primary btn-sm" >Buscar destinos</button></td>
	  </tr>
	  <tr>
		<td><button type="button" class="btn btn-primary btn-sm" >Buscar destinos</button></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Sitios más visitados</button>
		<button type="button" class="btn btn-primary btn-sm" >Ofertas destinos</button>
		<button type="button" class="btn btn-primary btn-sm" >¿Cómo llegar al sitio?</button>
		<button type="button" class="btn btn-primary btn-sm" >Resultados búsqueda</button></td>
	  </tr>
	  
	  <tr>
		<td><button type="button" class="btn btn-primary btn-sm" >Resultados búsqueda</button></td>
		<td><button type="button" class="btn btn-primary btn-sm" >¿Cómo llegar al destino?</button>
		</td>
	  </tr>
	  
	  <tr>
		<td><button type="button" class="btn btn-primary btn-sm" >¿Cómo llegar al destino?</button></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Más información destino</button></td>
	  </tr>
	</table>
</div>

</body>
</html>