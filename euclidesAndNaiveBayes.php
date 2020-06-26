<?php 
	
	function encontrarDestino($arreglo, $arregloRecolectado){//la función recibe dos arreglos, el primero contiene todos los registros de la tabla correspondiente, el segundo arreglo los datos ingresados por el usuario
		$sumaDeDiferencias = 0;//almacena la diferencia de cada campo, cuando se compara los datos del usuario con el de cada registro de la tabla de la base de datos.
		$resultados = array();//se declara arreglo para almaenar la suma total de la diferencia de cada registro de la tabla de base de datos que se compara, con los datos que el usuario ingreso.
		//$posicionLugar = 4;
		//se aplica el algoritmo de euclides, recorriendo dato por dato de la tabla de la base de datos con el dato del usuario
		for($i=0;$i<sizeof($arreglo);$i++){
			for($f=0;$f<sizeof($arreglo[0])-1;$f++){
				if ($arreglo[$i][$f]!= 0){
					$sumaDeDiferencias += pow($arreglo[$i][$f]-$arregloRecolectado[$f],2);//se aplica la potencia de 2, a la diferencia de un dato de cada registro, con dato del usuario. Al final se obtiene la suma de diferencias de cada registro de la tabla, con la del usuario
				}
			}
			
			$resultados[$i] = 1/(1+sqrt($sumaDeDiferencias));// se le asigna al arreglo la suma de diferencia de cada registro, pero se le aplica la 1 sobre raíz de la sumadediferencias
			$sumaDeDiferencias = 0;//se inicializa la variable para almacenar la nueva suma de diferencia de cada registro.
		}
		return $resultados;// al final retorna la similitud que hay de cada registro de la tabla con los datos del usuario.
	}
	
	
	function convertirDatosStringToInt($arreglo){
	
		$results = array();
		 for($i=0;$i<sizeof($arreglo);$i++){
            for($f=0;$f<sizeof($arreglo[0]);$f++){
                //condiciones para convertir de acuerdo al valor de string
                if($f==0){
					if($arreglo[$i][$f] == "menor a 30 min")
                        $results[$i][$f]=1;
                    elseif($arreglo[$i][$f] == "30 min")
                        $results[$i][$f]=2;
                    elseif ($arreglo[$i][$f] == "1 h 30 min")
                        $results[$i][$f]=3;
                    elseif ($arreglo[$i][$f]=="2 h")
                        $results[$i][$f]=4;
                    elseif($arreglo[$i][$f]=="2h 30 min")
                        $results[$i][$f]=5;
                    elseif($arreglo[$i][$f]=="3 h")
                        $results[$i][$f]=6;
                    elseif($arreglo[$i][$f]==" 3h 30 min")
                        $results[$i][$f]=7;
                    elseif ($arreglo[$i][$f]=="4 h")
                        $results[$i][$f]=8;
                    elseif ($arreglo[$i][$f]=="4 h 30 min")
                        $results[$i][$f]=9;
                    elseif($arreglo[$i][$f]=="5 h")
                        $results[$i][$f]=10;
                    elseif($arreglo[$i][$f]=="5 h 30 min")
                        $results[$i][$f]=11;
                    else
                        $results[$i][$f]=12;
                    
                }elseif($f==1){
                    if($arreglo[$i][$f]=="Lastre")
                        $results[$i][$f]=1;
                    elseif($arreglo[$i][$f]=="Asfalto")
                        $results[$i][$f]=2;
                    elseif ($arreglo[$i][$f] == "Empinado")
                        $results[$i][$f]=3;
                    elseif ($arreglo[$i][$f] == "Llano")
                        $results[$i][$f]=4;
                    elseif($arreglo[$i][$f] == "Con curvas")
                        $results[$i][$f]=5;
                    else
                        $results[$i][$f]=6;
                }elseif ($f==2){
                    if($arreglo[$i][$f]==1000)
                        $results[$i][$f]=1;
                    elseif($arreglo[$i][$f] == 1500)
                        $results[$i][$f]=2;
                    elseif ($arreglo[$i][$f]==2500)
                        $results[$i][$f]=3;
                    elseif ($arreglo[$i][$f] ==3000)
                        $results[$i][$f]=4;
                    elseif($arreglo[$i][$f]==5000)
                        $results[$i][$f]=5;
                    elseif($arreglo[$i][$f]==8000)
                        $results[$i][$f]=6;
                    elseif($arreglo[$i][$f]==11000)
                        $results[$i][$f]=7;
                    elseif ($arreglo[$i][$f]==15000)
                        $results[$i][$f]=8;
                    elseif ($arreglo[$i][$f]==20000)
                        $results[$i][$f]=9;
                    elseif($arreglo[$i][$f]==23000)
                        $results[$i][$f]=10;
                    elseif($arreglo[$i][$f]==30000)
                        $results[$i][$f]=11;
                    elseif($arreglo[$i][$f]==50000)
                        $results[$i][$f]=12;
                    elseif ($arreglo[$i][$f]==80000)
                        $results[$i][$f]=13;
                    elseif ($arreglo[$i][$f]==100000)
                        $results[$i][$f]=14;
                    else
                        $results[$i][$f]=15;
                }elseif($f==3){
					if($arreglo[$i][$f]=="Montańa")
                        $results[$i][$f]=1;
                    elseif($arreglo[$i][$f]=="Campo")
                        $results[$i][$f]=2;
                    elseif ($arreglo[$i][$f]=="Ciudad")
                        $results[$i][$f]=3;
                    else
                        $results[$i][$f]=4;
                    
                }elseif($f==4){
                    if($arreglo[$i][$f]=="Cartago")
                        $results[$i][$f]=1;
                    elseif($arreglo[$i][$f]=="Alajuela")
                        $results[$i][$f]=2;
                    elseif ($arreglo[$i][$f]=="San José")
                        $results[$i][$f]=3;
                    elseif ($arreglo[$i][$f]=="Heredia")
                        $results[$i][$f]=4;
                    elseif($arreglo[$i][$f]=="Guanacaste")
                        $results[$i][$f]=5;
                    elseif($arreglo[$i][$f]=="Limón")
                        $results[$i][$f]=6;
                    else
                        $results[$i][$f]=7;
                }
            }
        }
        return $results;//retorna los valores conveertidos
	}
	
	
	function obtenerImagen($posicionDestino){
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
		
		$sql = "SELECT `imageneslinks`.`id`,
		`imageneslinks`.`imagenes`
		FROM `proyectos_expertos_b16213_b77436`.`imageneslinks` WHERE `imageneslinks`.`id` = " .$posicionDestino . ";";
		//guarda los datos consultados
		$result = $conn->query($sql);
		//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
		$imagenURL = "";
		if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
			//recorre todo los registros extraídos de Recintos, hasta el último
			while($row = $result->fetch_assoc()) {
				//almacena cada registro en un arreglo bidimensional
				$imagenURL = $row["imagenes"];
			}
		} else {//condición sino, donde variable $result no contiene registros
			echo "0 results";
		}
		
		
		$conn->close();
		return $imagenURL;
	}
	
	
	function obtenerVideo($posicionDestino){
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
		
		$sql = "SELECT `videoslinks`.`id`,
		`videoslinks`.`linkvideo`
		FROM `proyectos_expertos_b16213_b77436`.`videoslinks` WHERE `videoslinks`.`id`=" . $posicionDestino . ";";
		//guarda los datos consultados
		$result = $conn->query($sql);
		//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
		$videoURL = "";
		if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
			//recorre todo los registros extraídos de videos, hasta el último
			while($row = $result->fetch_assoc()) {
				//almacena cada registro en un arreglo bidimensional
				$videoURL = $row["linkvideo"];
			}
		} else {//condición sino, donde variable $result no contiene registros
			echo "0 results";
		}
		
		
		$conn->close();
		return $videoURL;
	}
	
	function obtenerInformacionDestinoEspecífico($idDestino){
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
		FROM `proyectos_expertos_b16213_b77436`.`destinosturisticosse` WHERE `destinosturisticosse`.`Id`=" . $idDestino .";";
		//guarda los datos consultados
		$result = $conn->query($sql);
		//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
		$datos = array();
		if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
			//recorre todo los registros extraídos de destinosturisticosse, hasta el último
			$fila =0;
			$colm =0;
			while($row = $result->fetch_assoc()) {
				//almacena cada registro en un arreglo bidimensional
				$datos[$fila][$colm] = $row["Tiempo"];
				$colm++;
				$datos[$fila][$colm] = $row["Camino"];
				$colm++;
				$datos[$fila][$colm] = $row["Precio"];
				$colm++;
				$datos[$fila][$colm] = $row["Estilo"];
				$colm++;
				$datos[$fila][$colm] = $row["Lugar"];
				$colm++;
				$datos[$fila][$colm] = $row["Actividad"];
				$colm++;
				$datos[$fila][$colm] = $row["Latitud"];
				$colm++;
				$datos[$fila][$colm] = $row["Longitud"];
				$colm++;
				$datos[$fila][$colm] = $row["Nombre destino"];
				$colm = 0;
				
				$fila++;
			}
		} else {//condición sino, donde variable $result no contiene registros
			echo "0 results";
		}
		
		
		$conn->close();
		return $datos;
	}
	
	function obtenerIdNuevo(){
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
		FROM `proyectos_expertos_b16213_b77436`.`destinosturisticosse`";
		//guarda los datos consultados
		$result = $conn->query($sql);
		//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
		$datoId = 0;
		if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
			//recorre todo los registros extraídos de destinosturisticosse, hasta el último
			$fila =0;
			$colm =0;
			while($row = $result->fetch_assoc()) {
				//almacena cada registro en un arreglo bidimensional
				$datoId = $row["Id"];
				
			}
		} else {//condición sino, donde variable $result no contiene registros
			echo "0 results";
		}
		
		
		$conn->close();
		return $datoId;
	}
	
	//calcula mediante el metodo de naive bayes los sitios más visitados del sitio web
	function naiveBayes($arreglo){//la función recibe el arreglo, con las probabilidades que corresponden a los datos ingresados por el usuario.
		$productoProbabilidades = 1.0;//almacena la probabilidad de cada uno de los resultados (provabildad segun estilo, sexo, recinto, porfesor, redes)
		$resultados = array();//se declara arreglo para almaenar las probabilidades
		//se aplica el algoritmo de naive bayes, recorriendo dato por dato y se multiplican las probabilidades
		for($i=0;$i<sizeof($arreglo[0]);$i++){
			for($f=0;$f<sizeof($arreglo)-1;$f++){
				$probabilidad = str_replace(',', '.', $arreglo[$f][$i]);//se convierte la coma por el punto de las probabilidades, ya que al venir de la base se guardan con ,, y para multiplicar es necesario que sea punto los decimales
				$productoProbabilidades = (double)$probabilidad*(double)$productoProbabilidades;// se multiplica las probabilidades de cada atributo del arreglo, según corresponda
			}
			$resultados[$i] = (double)$productoProbabilidades;// se guarda en el arreglo las probabilidades, además a probabilidad de cada resultado
			$productoProbabilidades = 1.0;//se inicializa la variable para almacenar la nueva probabilidad de cada registro.
		}
		return $resultados;// al final retorna las probabilidades resultantes.
	}
	
	
	function obtieneIdDestino($nombreDestino){
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
		
		$sql = "SELECT `destinosturisticosse`.`Id`
		FROM `proyectos_expertos_b16213_b77436`.`destinosturisticosse` 
		WHERE `destinosturisticosse`.`Nombre destino`='" . $nombreDestino ."' limit 1;";
		//guarda los datos consultados
		$result = $conn->query($sql);
		//se declara un arreglo para almacenar cada registro de la tabla destinos turisticos
		$idDestino = 0;
		if ($result->num_rows > 0) {//condición if si la variable $result contiene almenos 1 registro
			//recorre todo los registros extraídos de destinosturisticosse, hasta el último
			$fila =0;
			$colm =0;
			while($row = $result->fetch_assoc()) {
				//almacena cada registro en un arreglo bidimensional
				$idDestino = $row["Id"];
				
			}
		} else {//condición sino, donde variable $result no contiene registros
			echo "0 results";
		}
		
		
		$conn->close();
		return $idDestino;
	}
	
?>