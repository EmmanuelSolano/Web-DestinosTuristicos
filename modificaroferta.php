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

  <?php

  $servername = "163.178.107.10"; //La dirección del servidor MySQL
  $username = "laboratorios"; //usuario del servidor
  $password = "UCRSA.118"; //contraseña del servidor
  $dbname = "proyectos_expertos_b16213_b77436"; //nombre de la base de datos que se va a utilizar

  //Realiza la conexión a una base de datos, utilizando la dirección, usuario, contraseña y base de datos del servidor a utilizar
  $conn = new mysqli($servername, $username, $password, $dbname);
  // En caso que la conexión fallé, envía mensaje de conexión fallida.
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM ofertasdestinos where id_oferta=$id";
    $updateresult = mysqli_query($conn, $query);

    if (mysqli_num_rows($updateresult) == 1) {
      $row = mysqli_fetch_array($updateresult);

      $name = $row['nombre_destino'];
      $place = $row['ubicacion_destino'];
      $originalPrice = $row['precio_original'];
      
    }


    if (isset($_POST['modificarOferta'])) {
      $id = $_GET['id'];
      $discount = $_POST['porcentajeDescuento'];
      $percentage = $discount / 100;
      $calc = $originalPrice * $percentage;
      $res = $originalPrice - $calc;


      $sql1 = "SET SQL_SAFE_UPDATES=0;";
      $sql2 = "UPDATE ofertasdestinos SET porcentaje_descuento=$discount,precio_descontado=$res WHERE id_oferta=$id;";
      $sql3 = "SET SQL_SAFE_UPDATES=1;";
      mysqli_query($conn, $sql1);
      $res = mysqli_query($conn, $sql2);
      mysqli_query($conn, $sql3);

      if (!$res) {
        die("Falló el query");
      }

      header("Location: mantenimientoofertas.php");
    }
  }


  ?>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
          <form action="modificaroferta.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
              <label>Ingrese el nuevo porcentaje de descuento que desea aplicar</label>
              <select name="porcentajeDescuento" value>
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value=0>0 %</option>
                <option value=5>5 %</option>
                <option value=10>10 %</option>
                <option value=15>15 %</option>
                <option value=25>25 %</option>
                <option value=50>50 %</option>
                <option value=75>75 %</option>
              </select><br><br>

              <button class="btn btn-primary btn-block" name="modificarOferta">Modificar oferta</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>