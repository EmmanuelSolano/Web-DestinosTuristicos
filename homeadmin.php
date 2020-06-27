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
      background-color: #5B8CA4;
      ;
    }

    h5 {
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
    <a class="navbar-brand" href="homeadmin.php">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homeadmin.php">Principal</a>
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
      
    </ul>
  </nav>

  <form action="login.php" method="post">
    <div style="text-align: right">
      <button type="submit" class="btn btn-primary btn-sm" onclick="window.location.href='main.php'">Cerrar sesión</button>
    </div>
  </form>


  <div class="container-fluid">
    <font color="white" size="5" face="Sanserif">
      <h1 align="center">Bienvenid@ al módulo de administración!</h1>
    </font>

    <img src="imagen1.jpg" />
    <img src="imagen2.jpg" />

    <br>
    <br>
    <h5 align="center">Contacto: destinosturisticos@gmail.com Teléfono: 8888-00-01</h5>
  </div>

</body>

</html>