<?php

include("euclidesAndNaiveBayes.php");

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

//declaracion variables

$id=obtenerIdNuevo()+1;
$name = $_POST['nombreDestinoIngresar'];
$activity = $_POST['actividadDestinoIngresar'];
$place = $_POST['lugarDestinoIngresar'];
$time = $_POST['tiempoDestinoIngresar'];
$roadType = $_POST['caminoDestinoIngresar'];
$price = $_POST['precioDestinoIngresar'];
$style = $_POST['estiloDestinoIngresar'];
$image = 'aaaaaaa';

$sql = "insert into proyectos_expertos_b16213_b77436.destinosturisticosse 
	values($id,'$place',0,0,'$activity','$price','$roadType','$time','$style',0,0,'$name')";
$result=mysqli_query($conn,$sql);
if ($name = 1) {
	header("location:mantenimientodestino.php");
}

?> 