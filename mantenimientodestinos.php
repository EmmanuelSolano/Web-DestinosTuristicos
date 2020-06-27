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

  <div class="container p-4">

    <div class="row">

      <div class="col-md-4">

        <div class="card card-body">

          <form action="guardardestino.php" method="POST">

            <div class="form-group">

              <h5> <b>Ingresar un nuevo sitio turistico</b> </h5>

              <label>Ingrese el nombre del destino turístico: </label>
              <input type="text" placeholder="Ingrese nombre" name="nombreDestinoIngresar" required><br>

              <label>Seleccione la actividad a realizar en este lugar:</label>
              <select name="actividadDestinoIngresar" method="get">
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value="Observación">Observación</option>
                <option value="Caminata">Caminata</option>
                <option value="Senderismo">Senderismo</option>
                <option value="Disfrutar paisajes">Disfrutar paisajes</option>
                <option value="Recreativo">Recreativo</option>
              </select><br>

              <label>Seleccione un lugar: </label>
              <select name="lugarDestinoIngresar">
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value="Cartago">Cartago</option>
                <option value="Alajuela">Alajuela</option>
                <option value="San José">San José</option>
                <option value="Heredia">Heredia</option>
                <option value="Limón">Limón</option>
                <option value="Guanacaste">Guanacaste</option>
                <option value="Puntarenas">Puntarenas</option>
              </select><br>

              <label>Duracción de recorrido: </label>
              <select name="tiempoDestinoIngresar">
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value="30 min"> 30 min</option>
                <option value="1 h">1 h</option>
                <option value="1 h 30 min">1 h 30 min</option>
                <option value="2 h">2 h</option>
                <option value="2 h 30 min">2 h 30 min</option>
                <option value="3 h">3 h</option>
                <option value="3 h 30 min">3 h 30 min</option>
                <option value="4 h"> > 4 h</option>
              </select><br>

              <label>Seleccione el tipo de camino: </label>
              <select name="caminoDestinoIngresar">
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value="Asfalto">Asfalto</option>
                <option value="Lastre">Lastre</option>
                <option value="Llano">Llano</option>
                <option value="Curvas">Curvas</option>
                <option value="Empinado">Empinado</option>
              </select><br>

              <label>Ingrese el precio del tiquete: </label>
              <input type="text" placeholder="Ingrese precio" name="precioDestinoIngresar" required><br>

              <label>Seleccione el estilo de destino: </label>
              <select name="estiloDestinoIngresar">
                <option value="" selected disabled hidden>Elija una opción</option>
                <option value="Campo">Campo</option>
                <option value="Ciudad">Ciudad</option>
                <option value="Bosque">Bosque</option>
                <option value="Playa">Playa</option>
              </select><br><br>

              <input type="submit" class="btn btn-primary btn-block" name="guardarDestino" value="Agregar destino">

            </div>

          </form>

        </div>

      </div>

      <div class="col-md-8">
        <h5>Listado de destinaciones turísticas</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Ubicación</th>
              <th>Actividad</th>
              <th>Precio</th>
              <th>Acción</th>
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

            $sql = "select * from destinosturisticosse";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td> <?php echo $row['Nombre destino'] ?> </td>
                <td> <?php echo $row['Lugar'] ?> </td>
                <td> <?php echo $row['Actividad'] ?> </td>
                <td> <?php echo $row['Precio'] ?> </td>
                <td>
                  <a href="modificardestino.php?id=<?php echo $row['Id'] ?>">Editar</a>
                  <a href="eliminardestino.php?id=<?php echo $row['Id'] ?>">Eliminar</a>
                </td>
              </tr>
            <?php } ?>


          </tbody>

        </table>

      </div>

    </div>

  </div>