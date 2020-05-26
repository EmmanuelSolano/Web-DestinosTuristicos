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
	table, th, td, input {
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
		text-align: center;
	}
	
	img{
		max-width: 100%;
		max-heigh: 100%;
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
	Filtrar por:
	<input type="radio" id="comentarios" name="comment" value="Por comentarios">Por comentarios</input>
	<input type="radio" id="likes" name="like" value="Por likes">Por likes</input>
	<br>
	<br>
	<table style="width:70%">
	  <tr>
		<td>Descripción</td>
		<td></td>
	  </tr>
	  <tr>
		<td><p>Sanatorio Carlos Durán, su actividad principal del reducto es realizar una caminata por sus alrededores e interior del edificio. Se encuentra a unos 30 minutos del norte de Cartago. Precio: 1000 colones</p></td>
		
		<td><img src="duran.jpg" /></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Ir</button></td>
	  </tr>
	  <tr>
		<td><p>Volcán Irazú, su actividad es ir a observar y caminar los alrededores del parque, se encuentra a 1 hora de Cartago. Precio de 2500 colones</p></td>
		<td><img src="irazu.jpg" /></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Ir</button></td>
	  </tr>
	  
	  <tr>
		<td><p>Mirador del Valle de Orosí, actividad ir a observar la vista del valle, e ideal para almuerzos, juegos entre familia, etc. Se encuentra a 30 minutos de Cartago.  Precio 5000 colones</p></td>
		<td><img src="mirador.jpg" /></td>
		<td><button type="button" class="btn btn-primary btn-sm" >Ir</button></td>
	  </tr>
	  
	  
	</table>
	<br>
	<br>
</div>

</body>
</html>