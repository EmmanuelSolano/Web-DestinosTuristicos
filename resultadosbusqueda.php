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
	
	div {
		width: 100%;
		height: 600px;
		
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
<?php 
	include 'euclidesAndNaiveBayes.php';
	$servername = "163.178.107.10";//La dirección del servidor MySQL
	$username = "laboratorios";//usuario del servidor
	$password = "UCRSA.118";//contraseña del servidor
	$dbname = "proyectos_expertos_b16213_b77436";//nombre de la base de datos que se va a utilizar

	//Realiza la conexión a una base de datos, utilizando la dirección, usuario, contraseña y base de datos del servidor a utilizar
	$conn = new mysqli($servername, $username, $password, $dbname);
	// En caso que la conexión fallé, envía mensaje de conexión fallida.
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	//Se obtienen los valores ingresados por el usuario en la clase buscar destino
	$lugar = $_POST['lugar'];
	$tiempo = $_POST['tiempo'];
	$tipoCamino = $_POST['camino'];
	$precio = $_POST['precio'];
	$estilo = $_POST['estilo'];
	
	/*echo $lugar . "<br>";
	echo $tiempo . "<br>";
	echo $tipoCamino . "<br>";
	echo $precio . "<br>";
	echo $estilo . "<br>";
	echo "-------" . "<br>";*/

	//se declara un arreglo para almacenar los valores de ec, or, ca, ea.
	$arregloParametrosDestinosRecolectados = array();
	$arregloParametrosDestinosRecolectados[4] =$lugar;
	$arregloParametrosDestinosRecolectados[0] =$tiempo;
	$arregloParametrosDestinosRecolectados[1] =$tipoCamino;
	$arregloParametrosDestinosRecolectados[2] =$precio;
	$arregloParametrosDestinosRecolectados[3] =$estilo;
	
	//se realiza la consulta a la tabla destinos turisticos
	$sql = "SELECT `destinosturisticosse`.`Id`,
    `destinosturisticosse`.`Lugar`,
    `destinosturisticosse`.`Comentarios`,
    `destinosturisticosse`.`Likes`,
    `destinosturisticosse`.`Actividad`,
    `destinosturisticosse`.`Precio`,
    `destinosturisticosse`.`Camino`,
    `destinosturisticosse`.`Tiempo`,
    `destinosturisticosse`.`Estilo`,
    `destinosturisticosse`.`Latitud`,
    `destinosturisticosse`.`Longitud`,
    `destinosturisticosse`.`Nombre destino`
FROM `proyectos_expertos_b16213_b77436`.`destinosturisticosse`;";
	//guarda los datos consultados
	$result = $conn->query($sql);
	//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
	$arreglo = array();
	if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
		$fila =0;
		$colm =0;
		//recorre todo los registros extraídos de Recintos, hasta el último
		while($row = $result->fetch_assoc()) {
			//almacena cada registro en un arreglo bidimensional
			$arreglo[$fila][$colm] = $row["Tiempo"];
			$colm++;
			$arreglo[$fila][$colm] = $row["Camino"];
			$colm++;
			$arreglo[$fila][$colm] = $row["Precio"];
			$colm++;
			$arreglo[$fila][$colm] = $row["Estilo"];
			$colm++;
			$arreglo[$fila][$colm] = $row["Lugar"];
			$colm++;
			$arreglo[$fila][$colm] = $row["Nombre destino"];
			$colm = 0;
			
			$fila++;
		}
	} else {//condición sino, donde variable $result no contiene registros
		echo "0 results";
	}
	//la variable $resultados llama a la función encontrarEstilo que retorna la similidad de cada registro de la tabla Recintos, con los datos obtenidos
	
	$datosInt = convertirDatosStringToInt($arreglo);
	$resultados = encontrarDestino($datosInt, $arregloParametrosDestinosRecolectados);
	//$resultadosLugarEspecifico = array();
	$probabilidadLugarEspecifico = array();
	//$auxPropabilidades = array();
	for($i=0;$i<sizeof($resultados);$i++){
		if($datosInt[$i][4]==$lugar){
			//$resultadosLugarEspecifico[$i] = $i;
			$probabilidadLugarEspecifico[$i] = $resultados[$i];
			//$auxPropabilidades = $resultados[$i];
			
		}
		
	}
	sort($probabilidadLugarEspecifico);
	$minimo = array();//saca el valor mínimo de la variable $resultados
	$minimo[0]=$probabilidadLugarEspecifico[sizeof($probabilidadLugarEspecifico)-1];
	$minimo[1]=$probabilidadLugarEspecifico[sizeof($probabilidadLugarEspecifico)-2];
	$minimo[2]=$probabilidadLugarEspecifico[sizeof($probabilidadLugarEspecifico)-3];
	$posicion1 = 0;
	$posicion2 = 0;
	$posicion3 = 0;
	//ciclo para encontrar el registro más similar que arrojo el metodo encontrarEstilo
	for($c=0;$c<sizeof($resultados);$c++){
		if ($resultados[$c]==$minimo[0] && $datosInt[$c][4]==$lugar)
			$posicion1 = $c;//obtiene la posición en el arreglo del registro más similar
		if ($resultados[$c]==$minimo[1] && $datosInt[$c][4]==$lugar)
			$posicion2 = $c;
		if ($resultados[$c]==$minimo[2] && $datosInt[$c][4]==$lugar)
			$posicion3 = $c;
	}
	$destino1 = $arreglo[$posicion1][5] . ". El tiempo en llegar al lugar es de:  " . $arreglo[$posicion1][0] . ", tipo de camino: " . $arreglo[$posicion1][1] . ", el costo del atractivo: " . $arreglo[$posicion1][2] . " y su estilo es: " . $arreglo[$posicion1][3];
	$destino2 = $arreglo[$posicion2][5] . ". El tiempo en llegar al lugar es de:  " . $arreglo[$posicion2][0] . ", tipo de camino: " . $arreglo[$posicion2][1] . ", el costo del atractivo: " . $arreglo[$posicion2][2] . " y su estilo es: " . $arreglo[$posicion2][3];;
	$destino3 = $arreglo[$posicion3][5] . ". El tiempo en llegar al lugar es de:  " . $arreglo[$posicion3][0] . ", tipo de camino: " . $arreglo[$posicion3][1] . ", el costo del atractivo: " . $arreglo[$posicion3][2] . " y su estilo es: " . $arreglo[$posicion3][3];;
	$nombredestino1 = $arreglo[$posicion1][5];
	$nombredestino2 = $arreglo[$posicion2][5];
	$nombredestino3 = $arreglo[$posicion3][5];
	$conn->close();
	
	$imagen1 = obtenerImagen(++$posicion1);
	$imagen2 = obtenerImagen(++$posicion2);
	$imagen3 = obtenerImagen(++$posicion3);
	
?>

<form name="destinos" action="detalles.php" method="post">
	<div>
		
		<br>
		<table style="width:70%">
		  <tr>
			<td>Descripción</td>
			<td></td>
		  </tr>
		  <tr>
			<td><p><?php echo $destino1 ?></p></td>
			
			<td><img src="<?php echo $imagen1?>" /></td>
			<td><!--<button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='detalles.php'">Ir</button>-->
			<input type="submit" class="btn btn-primary btn-sm" name="destino1" value="<?php echo $nombredestino1; echo $posicion1 ?>"></td>
		  </tr>
		  <tr>
			<td><p><?php echo $destino2 ?></p></td>
			<td><img src="<?php echo $imagen2?>" /></td>
			<td><input type="submit" class="btn btn-primary btn-sm" name="destino1" value="<?php echo $nombredestino2 ?>"></td>
		  </tr>
		  
		  <tr>
			<td><p><?php echo $destino3 ?></p></td>
			<td><img src="<?php echo $imagen3?>" /></td>
			<td><input type="submit" class="btn btn-primary btn-sm" name="destino1" value="<?php echo $nombredestino3 ?>"></td>
		  </tr>
		  
		  
		</table>
		<br>
		<br>
	</div>

</form>

</body>
</html>