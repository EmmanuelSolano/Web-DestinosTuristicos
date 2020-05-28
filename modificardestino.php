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
		<td><b>Seleccione el lugar a modificar:<b></td>
		<td><select name="destinoAModificar">
				<option value="C">Se llena dinamicamente</option>
			</select></td>
	  </tr>
      <tr>
        <td><b>Ingrese el nombre del destino turístico</b></td>
        <td><input type="text" placeholder="Ingrese nombre" name="nombreDestino" required></td>
      </tr>
      <tr>
        <td><b>Ingrese la descripcion del destino turístico</b></td>
        <td><input type="text" placeholder="Ingrese descripción" name="descripcionDestino" required></td>
      </tr>  
	  <tr>
		<td><b>Seleccione un lugar:<b></td>
		<td><select name="lugarDestino">
				<option value="C">Cartago</option>
				<option value="A">Alajuela</option>
				<option value="S">San José</option>
				<option value="H">Heredia</option>
				<option value="L">Limón</option>
				<option value="G">Guanacaste</option>
				<option value="P">Puntarenas</option>
			</select></td>
	  </tr>
	  <tr>
		<td><b>Duracción de recorrido:<b></td>
		<td><select name="tiempoDestino">
				<option value="1"> 30 min</option>
				<option value="2">1 h</option>
				<option value="3">1 h 30 min</option>
				<option value="4">2 h</option>
				<option value="5">2 h 30 min</option>
				<option value="6">3 h</option>
				<option value="7">3 h 30 min</option>
				<option value="8"> > 4 h</option>
			</select></td>
	  </tr>
	  <tr>
		<td><b>Seleccione el tipo de camino:<b></td>
		<td><select name="caminoDestino">
				<option value="1">Asfalto</option>
				<option value="2">Lastre</option>
				<option value="3">Llano</option>
				<option value="4">Curvas</option>
				<option value="5">Empinado</option>
			</select></td>
	  </tr>
	  
	  <tr>
		<td><b>Seleccione el precio:<b></td>
		<td><select name="precioDestino">
				<option value="1">< 10000</option>
				<option value="2">> 10000 y < 30000</option>
				<option value="3">> 30000 y < 50000</option>
				<option value="4">> 100000</option>
			</select></td>
	  </tr>
	  
	  <tr>
		<td><b>Seleccione el estilo de destino:<b></td>
		<td><select name="estiloDestino">
				<option value="1">Campo</option>
				<option value="2">Ciudad</option>
				<option value="3">Bosque</option>
				<option value="4">Playa</option>
			</select></td>
	  </tr>
      <tr>
        <td><b>Ingrese la imagen del destino turístico</b></td>
        <td><input type="file" name="imagenDestino" required></td>
      </tr>
	</table>
	<br>
	<br>
	<button type="button" class="btn btn-primary" onclick="window.location.href='modificardestino.php'">
		Modificar destino
	</button>

</div>