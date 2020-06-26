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

	if(isset($_GET['id'])){
		$id=$_GET['id'];
		

		$sql1 = "SET SQL_SAFE_UPDATES=0;";
		$sql2 = "DELETE FROM destinosturisticosse WHERE Id=$id;";
		$sql3 = "SET SQL_SAFE_UPDATES=1;";
		mysqli_query($conn,$sql1);
		$result=mysqli_query($conn,$sql2);
		mysqli_query($conn,$sql3);

		if(!$result){
			die("Falló el query");
		}

		header("Location: mantenimientodestinos.php");
	}

?>

