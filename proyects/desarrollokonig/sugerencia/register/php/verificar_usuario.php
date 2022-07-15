<?php 

	include('conection_DB.php');


	$usuario_resultado = 0 ;


	$pedido_sql_usuario = "SELECT * FROM usuarios WHERE usuario= :name_usuario ";

	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado_usuario = $my_Db_Connection->prepare($pedido_sql_usuario);

	$usuario 		= htmlentities(addslashes($_POST["name_usuario"]));

	$resultado_usuario->bindValue(":name_usuario", 		$usuario);

	$resultado_usuario->execute();

	/*Mete los datos de la fila que coinciden en la variable $fila */	
	$fila_usuario = $resultado_usuario->fetch(PDO::FETCH_ASSOC);
	//print_r($fila_usuario);
	//print_r($fila_usuario['user']);

	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*/
	if (strcmp ($fila_usuario['usuario'] , $_POST["name_usuario"] ) == 0) {
		//echo "usuario conincide con existente";
		$usuario_resultado = 1;
		echo $usuario_resultado;

	}else{
		$usuario_resultado = 0;
		echo $usuario_resultado;
	}













?>