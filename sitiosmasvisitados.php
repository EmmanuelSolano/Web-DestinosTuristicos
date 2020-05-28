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
    h4{
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
		text-align: center;
	}
	img{
		max-width: 100%;
		max-heigh: 100%;
	}
	
	div {
		width: 100%;
		height: 600px;
		background-image: url('fondo2.jpg');
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
	<h4>Sitios más visitados</h4>
	<br>
	<br>
	Seleccione un lugar:
	<select name="lugar">
		<option value="C">Cartago</option>
		<option value="A">Alajuela</option>
		<option value="S">San José</option>
		<option value="H">Heredia</option>
		<option value="L">Limón</option>
		<option value="G">Guanacaste</option>
		<option value="P">Puntarenas</option>
	</select>
	<table style="width:70%">
	  <tr>
		<td><button type="button" class="btn btn-sm" >Volcán Irazú</button></td>
		<td><button type="button" class="btn btn-sm" >Parque Nacional Tapantí</button></td>
		<td><button type="button" class="btn btn-sm" >Iglesia de Orosi</button></td>
	  </tr>
	   <tr>
		<td><img src="irazu.jpg" /></td>
		<td><img src="tapanti.jpg" /></td>
		<td><img src="orosi.jpg" /></td>
	  </tr>
	  
	</table>
</div>

</body>
</html>