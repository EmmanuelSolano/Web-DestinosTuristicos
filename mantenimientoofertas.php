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

    .centrado {
      text-align: center;
      margin-bottom: 100px;
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

  <div class="container p-4">

    <div class="row">

      <div class="col-md-4">

        <div class="card card-body">

          <form action="crearoferta.php" method="POST">

            <div class="form-group">

              <h5> <b>Ingresar una nueva oferta para un sitio turístico</b> </h5>

              <input type="submit" class="btn btn-primary btn-block" name="crearOferta" value="Crear oferta">

            </div>

          </form>

        </div>

      </div>

      <div class="col-md-8">
        <h5>Listado de destinaciones turísticas con ofertas disponibles</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Ubicación</th>
              <th>Precio original</th>
              <th>Porcentaje de descuento</th>
              <th>Precio de oferta</th>
            </tr>
          </thead>

          <tbody>
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

            $sql = "select * from ofertasdestinos";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td> <?php echo $row['nombre_destino'] ?> </td>
                <td> <?php echo $row['ubicacion_destino'] ?>  </td>
                <td> <?php echo $row['precio_original'] ?> </td>
                <td> <?php echo $row['porcentaje_descuento'] ?> % </td>
                <td> <?php echo $row['precio_descontado'] ?> </td>
                <td>
                  <a href="modificaroferta.php?id=<?php echo $row['id_oferta'] ?>">Editar</a>
                </td>
              </tr>
            <?php } ?>


          </tbody>

        </table>

      </div>

    </div>

  </div>