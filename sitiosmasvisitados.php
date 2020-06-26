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
    h4{
		text-align: center;
	}
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
	img{
		max-width: 100%;
		max-heigh: 100%;
	}
	
	div {
		width: 100%;
		height: 200px;
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


<form name="estilo" action="sitiosmasvisitados.php" method="post">
<div>
	<h4>Sitios más visitados</h4>
	<br>
	<br>
	<table style="width:70%">
	  <tr>
		<td>Seleccione un lugar:
		<select name="lugar">
			<option value="Cartago">Cartago</option>
			<option value="Alajuela">Alajuela</option>
			<option value="San José">San José</option>
			<option value="Heredia">Heredia</option>
			<option value="Limón">Limón</option>
			<option value="Guanacaste">Guanacaste</option>
			<option value="Puntarenas">Puntarenas</option>
		</select></td>
		<td>Seleccione cantidad de comentarios:
		<select name="comentarios">
			<option value="1a5">1-5</option>
			<option value="6a10">6-10</option>
			<option value="11a15">11-15</option>
			<option value="16-20">16-20</option>
			<option value="21-25">21-25</option>
			<option value="26-30">26-30</option>
		</select></td>
		<td>Seleccione cantidad de likes:
		<select name="likes">
			<option value="1a5">1-5</option>
			<option value="6a10">6-10</option>
			<option value="11a15">11-15</option>
			<option value="16-20">16-20</option>
			<option value="21-25">21-25</option>
			<option value="26-30">26-30</option>
		</select></td>
		<td><input type="submit" class="btn btn-primary" name="submit"  value="Buscar"></td>
	  
	</table>

</div>

</form>

<?php include 'euclidesAndNaiveBayes.php';
	
	$sitio1 = " ";
	$sitio2 = " ";
	$sitio3 = " ";
	if(isset($_POST['submit'])){
		$servername = "163.178.107.10";//La dirección del servidor MySQL
		$username = "laboratorios";//usuario del servidor
		$password = "UCRSA.118";//contraseña del servidor
		$dbname = "tarea2_bd_b77436";//nombre de la base de datos que se va a utilizar

		//Realiza la conexión a una base de datos, utilizando la dirección, usuario, contraseña y base de datos del servidor a utilizar
		$conn = new mysqli($servername, $username, $password, $dbname);
		// En caso que la conexión fallé, envía mensaje de conexión fallida.
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$lugar = $_POST['lugar'];
		$comentarios = $_POST['comentarios'];
		$likes = $_POST['likes'];
		
		$sql = "SELECT `probabilidaddestinosvisitados`.`Valor 1`,
		`probabilidaddestinosvisitados`.`Lugar`,
		`probabilidaddestinosvisitados`.`Valor 2`,
		`probabilidaddestinosvisitados`.`Comentarios`,
		`probabilidaddestinosvisitados`.`Valor 3`,
		`probabilidaddestinosvisitados`.`Likes`,
		`probabilidaddestinosvisitados`.`Nombre destino`,
		`probabilidaddestinosvisitados`.`Porbabilidad destino`
		FROM `proyectos_expertos_b16213_b77436`.`probabilidaddestinosvisitados`;";
		$result = $conn->query($sql);//ejecuta la sentencia anterior
		//declarar arreglos
		$arreglo = array();//almacena datos de base de datos de sexo, estilo, recinto y promedio de la tabla EstiloSexoPromedioRecinto
		if ($result->num_rows > 0) {
			$flag_lugar =false;//bandera para recolectar solo las probabilidades necesarias para lugar
			$flag_comentarios =false;//bandera para recolectar solo las probabilidades necesarias para comentarios
			$flag_likes =false;//bandera para recolectar solo las probabilidades necesarias para likes
			$tipoDestino_lugar=0;//cantidad de probabilidades de lugar
			$tipoDestino_comentarios=0;//cantidad de probabilidades de comentarios
			$tipoDestino_like=0;//cantidad de probabilidades de like
			$tiposDestinoyProbabilidades=0;//cantidad de probabilidades de recintos 
			//recorre todo los registros extraídos de Nombre destino, hasta el último
			while($row = $result->fetch_assoc()) {
				if($lugar==$row["Valor 1"] || $flag_lugar==true){//obtiene las probabilidades de estilo en la consulta a la bd
					$flag_lugar=true;
					if($tipoDestino_lugar<44){
						$arreglo[0][$tipoDestino_lugar]=$row["Lugar"];
						$tipoDestino_lugar++;
					}else{
						$flag_lugar=false;
					}
				}
				if($comentarios==$row["Valor 2"] || $flag_comentarios==true){//obtiene las probabilidades de comentarios en la consulta a la bd
					$flag_comentarios=true;
					if($tipoDestino_comentarios<44){
						
						$arreglo[1][$tipoDestino_comentarios]=$row["Comentarios"];
						$tipoDestino_comentarios++;
					}else{
						$flag_comentarios=false;
					}
				}
				if($likes==$row["Valor 3"] || $flag_likes==true){//obtiene las probabilidades de likes en la consulta a la bd
					$flag_likes=true;
					if($tipoDestino_like<44){
						$arreglo[2][$tipoDestino_like]=$row["Likes"];
						$tipoDestino_like++;
					}else{
						$flag_likes=false;
					}
				}
				if($tiposDestinoyProbabilidades<44){//obtiene las probabilidades de recintos y probabilidades en la consulta a la bd
					$arreglo[4][$tiposDestinoyProbabilidades]=$row["Nombre destino"];
					$arreglo[3][$tiposDestinoyProbabilidades]=$row["Porbabilidad destino"];
					$tiposDestinoyProbabilidades++;
				}
			}
		} else {//la consulta no tenía registros
			echo "0 results";
		}
		
		$resultados = naiveBayes($arreglo);
		$auxResultados = naiveBayes($arreglo);
		sort($resultados);
		
		
		
		$posicionSitio1 =0;
		$posicionSitio2 =0;
		$posicionSitio3 =0;
		
		for($c=0;$c<sizeof($auxResultados);$c++){
			if ($auxResultados[$c]==$resultados[43]){
				$posicionSitio1 = $c;//almacena la posicion del registro más similar
				
			}
			if ($auxResultados[$c]==$resultados[42]){
				$posicionSitio2 = $c;//almacena la posicion del registro más similar
				
			}
			if ($auxResultados[$c]==$resultados[41]){
				$posicionSitio3 = $c;//almacena la posicion del registro más similar
				
			}
		}
	
		
		$sitio1= $arreglo[4][$posicionSitio1];
		$sitio2= $arreglo[4][$posicionSitio2];
		$sitio3= $arreglo[4][$posicionSitio3];
		
		$idDestino1 = obtieneIdDestino($sitio1);
		$idDestino2 = obtieneIdDestino($sitio2);
		$idDestino3 = obtieneIdDestino($sitio3);
		$imagen1 = obtenerImagen($idDestino1);
		$imagen2 = obtenerImagen($idDestino2);
		$imagen3 = obtenerImagen($idDestino3);
		
	}
	
	
	
?>
<div>
<table style="width:70%">
	  <tr>
		<td><button type="button" class="btn btn-sm" ><?php echo $sitio1 ?></button></td>
		<td><button type="button" class="btn btn-sm" ><?php echo $sitio2 ?></button></td>
		<td><button type="button" class="btn btn-sm" ><?php echo $sitio3 ?></button></td>
	  </tr>
	   <tr>
		<td><img src="<?php echo $imagen1 ?>" /></td>
		<td><img src="<?php echo $imagen2 ?>" /></td>
		<td><img src="<?php echo $imagen3 ?>" /></td>
	  </tr>
	  
</table>
</div>


</body>
</html>