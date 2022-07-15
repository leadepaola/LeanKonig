<?php 

	include('conection_DB.php');

	/*
	$error = 0 ;


	$pedido_sql_DNI = "SELECT * FROM usuarios WHERE dni= :name_DNI ";

	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado_DNI = $my_Db_Connection->prepare($pedido_sql_DNI);

	$DNI 		= htmlentities(addslashes($_POST["name_DNI"]));

	$resultado_DNI->bindValue(":name_DNI", 		$DNI);

	$resultado_DNI->execute();

	/*Mete los datos de la fila que coinciden en la variable $fila */	/*
	$fila_DNI = $resultado_DNI->fetch(PDO::FETCH_ASSOC);
	//print_r($fila_DNI);
	//print_r($fila_DNI['user']);

	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*//*
	if (strcmp ($fila_DNI['dni'] , $_POST["name_DNI"] ) == 0) {
		//echo "DNI conincide con existente";
		$error = 101;
		echo $error;

	}else{
		//echo "DNI sin usar";
		//$dato_DNI = 1;
		//echo $dato_DNI;
		verificar_mail();
	}


	function verificar_mail(){


	}
*/


	
	$pedido_sql = "SELECT * FROM usuarios WHERE dni= :name_DNI OR mail= :name_mail OR user= :name_usuario OR pass= :name_pass";


	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado = $my_Db_Connection->prepare($pedido_sql);

	//$nombre 		= htmlentities(addslashes($_POST["name_nombre"]));
	//$apellido 	= htmlentities(addslashes($_POST["name_apellido"]));
	$DNI 		= htmlentities(addslashes($_POST["name_DNI"]));
	$mail 		= htmlentities(addslashes($_POST["name_mail"]));

	$user = htmlentities(addslashes($_POST["name_usuario"]));
	$pass = htmlentities(addslashes($_POST["name_pass"]));


	//$resultado->bindValue(":name_nombre", 	$nombre);
	//$resultado->bindValue(":name_apellido", $apellido);
	$resultado->bindValue(":name_DNI", 		$DNI);
	$resultado->bindValue(":name_mail", 	$mail);

	$resultado->bindValue(":name_usuario", 	$user);
	$resultado->bindValue(":name_pass", 	$pass);

	$resultado->execute();



	/*Mete los datos de la fila que coinciden en la variable $fila */	
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
	//print_r($fila);
	//print_r($fila['user']);


	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*/
	if (strcmp ($fila['user'] , $_POST["name_usuario"] ) == 0) {
		//echo "Sesion exitosa";
		$sesion = 101;

	}else{
		//echo "Sesion fail";
		$sesion = 101;
	}

	$jsonString = json_encode($fila);
	echo $jsonString;




?>