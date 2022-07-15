<?php 

	include('conection_DB.php');


	$dni_resultado = 0 ;


	$pedido_sql_DNI = "SELECT * FROM usuarios WHERE dni= :name_DNI ";

	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado_DNI = $my_Db_Connection->prepare($pedido_sql_DNI);

	$DNI 		= htmlentities(addslashes($_POST["name_DNI"]));

	$resultado_DNI->bindValue(":name_DNI", 		$DNI);

	$resultado_DNI->execute();

	/*Mete los datos de la fila que coinciden en la variable $fila */	
	$fila_DNI = $resultado_DNI->fetch(PDO::FETCH_ASSOC);
	//print_r($fila_DNI);
	//print_r($fila_DNI['user']);

	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*/
	if (strcmp ($fila_DNI['dni'] , $_POST["name_DNI"] ) == 0) {
		//echo "DNI conincide con existente";
		$dni_resultado = 1;
		echo $dni_resultado;

	}else{
		$dni_resultado = 0;
		echo $dni_resultado;
	}













?>
