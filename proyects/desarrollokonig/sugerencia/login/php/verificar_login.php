<?php 

	include('conection_DB.php');

	$sesion = 0 ;

	$pedido_sql = "SELECT * FROM usuarios WHERE user= :name_usuario AND pass= :name_pass";


	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado = $my_Db_Connection->prepare($pedido_sql);

	$user = htmlentities(addslashes($_POST["name_usuario"]));
	$pass = htmlentities(addslashes($_POST["name_pass"]));

	$resultado->bindValue(":name_usuario", $user);
	$resultado->bindValue(":name_pass", $pass);

	$resultado->execute();



	/*Mete los datos de la fila que coinciden en la variable $fila */	
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
	//print_r($fila);
	//print_r($fila['user']);


	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*/
	if (strcmp ($fila['user'] , $_POST["name_usuario"] ) == 0) {
		//echo "Sesion exitosa";
		$sesion = 0;
	}
	else{
		//echo "Sesion fail";
		$sesion = 1;
	}





	if($sesion == 0){
		echo $sesion;
	}
	else{
		echo $sesion;
	}
	//echo $sesion;
	

?>