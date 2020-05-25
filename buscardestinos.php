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
      <a class="nav-link" href="#">Principal</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Destinos Turísticos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Buscar destinos cercanos</a>
        <a class="dropdown-item" href="#">Sitios más visitados</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Mapa del sitio</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Créditos</a>
    </li>
  </ul>
</nav>
<div>
	<table style="width:70%">
	  <tr>
		<td>Seleccione un lugar:</td>
		<td><select name="lugar">
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
		<td>Duracción de recorrido:</td>
		<td><select name="tiempo">
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
		<td>Seleccione el tipo de camino:</td>
		<td><select name="camino">
				<option value="1">Asfalto</option>
				<option value="2">Lastre</option>
				<option value="3">Llano</option>
				<option value="4">Curvas</option>
				<option value="5">Empinado</option>
			</select></td>
	  </tr>
	  
	  <tr>
		<td>Seleccione el precio:</td>
		<td><select name="precio">
				<option value="1">< 10000</option>
				<option value="2">> 10000 y < 30000</option>
				<option value="3">> 30000 y < 50000</option>
				<option value="4">> 100000</option>
			</select></td>
	  </tr>
	  
	  <tr>
		<td>Seleccione el estilo de destino:</td>
		<td><select name="estilo">
				<option value="1">Campo</option>
				<option value="2">Ciudad</option>
				<option value="3">Bosque</option>
				<option value="4">Playa</option>
			</select></td>
	  </tr>
	</table>
	<br>
	<br>
	<button type="button" class="btn btn-primary" >Buscar sitios turísticos cercanos</button>

</div>

</body>
</html>