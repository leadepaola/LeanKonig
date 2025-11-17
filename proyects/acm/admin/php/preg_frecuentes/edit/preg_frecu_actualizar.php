<?php 


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$id_pregunta 		= $_POST['id_pregunta'];

$pregunta 			= $_POST['pregunta'];
$respuesta 			= $_POST['respuesta'];

/*
echo $id_web;
echo $id_cliente;
echo $id_pregunta;
echo $pregunta;
echo $respuesta;
*/



include('../../../../server_local/conection_DB.php');




$sql = 'UPDATE ti_ayuda_preg_frecuentes SET 


titulo				= "'.		$pregunta		.'",
texto 				= "'.		$respuesta		.'"


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_pregunta		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Pregunta actualizada';
}else{
	echo $error->getMessage();
}




?>