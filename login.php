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
	.container{
		width: 100%;
		height: 99%;
		text-align: center;
		padding: 100px;
	}
	label{
		padding: 15px;
		text-align: left;
	}
	
	.container {
		width: 100%;
		height: 600px;
		background-image: url('fondo3.png');
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
<form action="action_page.php" method="post">

  <div class="container">
    <label for="uname">Usuario</label>
    <input type="text" placeholder="Ingrese usuario" name="uname" required>
	<br>
    <label for="psw">Contraseña</label>
    <input type="password" placeholder="Ingrese contraseña" name="psw" required>
	<br>
    <button type="submit" class="btn btn-primary btn-sm" onclick="window.location.href='homeadmin.php'">
      Login
    </button>
	<button type="button" class="cancelbtn">Cancelar</button>
  </div>

</form>

</body>
</html>