<?php 


$view_activa 		= $_POST['view_activa'];
$dispositivo 		= $_POST['dispositivo'];


include('../../../server_local/conection_DB.php');


$sql_ = 'SELECT * FROM ti_tutoriales 

WHERE view_activa 	= "'.	$view_activa		.'" 
AND dispositivo 	= "'.	$dispositivo		.'"
';



$result_ = $db_conection->prepare($sql_);





// Ejecuto query
if ($result_->execute()) {


	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);


	//ingresa si hay algo
	if (!empty($fila_['iframe'])) {
		//echo "Hay informacion";
		//echo "\n";
		echo $fila_['iframe'];
	}
	else{
		$vacio = "vacio";
		// sacar salto de linea a variable
		$vacio = trim(preg_replace('/\s+/', '', $vacio));
		echo "Esta sección tendrá tutorial pronto";
	}


}














?>