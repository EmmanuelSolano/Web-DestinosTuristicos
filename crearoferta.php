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
      background-color: #5B8CA4; ; 
    }
	h5{
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
	<table style="width:70%">
      <tr>
		<td><b>Seleccione el destino al que desea asignar una oferta:<b></td>
		<td><select name="ofertaDestino">
				<option value="C">Se llena dinamicamente</option>
			</select></td>
	  </tr>
	  <tr>
		<td><b>Porcentaje de descuento:<b></td>
		<td><select name="descuentoDestino">
				<option value="5"> 5%</option>
				<option value="10">10%</option>
				<option value="15">15%</option>
				<option value="20">20%</option>
				<option value="25">25%</option>
				<option value="50">50%</option>
				<option value="75">75%</option>
			</select></td>
	  </tr><tr>
        <td><b>Ingrese la descripción de la oferta</b></td>
        <td><input type="text" placeholder="Ingrese descripción" name="descripcionDestino" required></td>
      </tr> 
	</table>
	<br>
	<br>
	<button type="button" class="btn btn-primary" onclick="window.location.href='crearoferta.php'">
		Agregar oferta
	</button>

</div>