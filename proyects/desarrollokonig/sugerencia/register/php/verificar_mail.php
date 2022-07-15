<?php 

	include('conection_DB.php');


	$mail_resultado = 0 ;


	$pedido_sql_mail = "SELECT * FROM usuarios WHERE mail= :name_mail ";

	//my_Db_Connection es una variable que uso en 'conection_DB.php'
	$resultado_mail = $my_Db_Connection->prepare($pedido_sql_mail);

	$mail 		= htmlentities(addslashes($_POST["name_mail"]));

	$resultado_mail->bindValue(":name_mail", 		$mail);

	$resultado_mail->execute();

	/*Mete los datos de la fila que coinciden en la variable $fila */	
	$fila_mail = $resultado_mail->fetch(PDO::FETCH_ASSOC);
	//print_r($fila_mail);
	//print_r($fila_mail['user']);

	/*strcmp es sensible a mayúsculas y minúsculas, es decir, no considera igual Martes que martes.
	Si son iguales devuelve el valor numerico cero*/
	if (strcmp ($fila_mail['mail'] , $_POST["name_mail"] ) == 0) {
		//echo "mail conincide con existente";
		$mail_resultado = 1;
		echo $mail_resultado;

	}else{
		$mail_resultado = 0;
		echo $mail_resultado;
	}













?>
