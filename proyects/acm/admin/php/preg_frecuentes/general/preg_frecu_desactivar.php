<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_preg_frecu 	= $_POST['id_preg_frecu'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../../server_local/conection_DB.php');





$sql = 'UPDATE ti_ayuda_preg_frecuentes SET 


active 				= 0


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_preg_frecu		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Pregunta (ID '.$id_preg_frecu.') desactivada';
}else{
	echo $error->getMessage();
}





?>