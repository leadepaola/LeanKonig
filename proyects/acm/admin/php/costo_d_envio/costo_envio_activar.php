<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_costo_d_envio 	= $_POST['id_costo_d_envio'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');






$sql = 'UPDATE ti_costo_d_envio SET 


active 				= 1


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_costo_d_envio		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Costo (ID '.$id_costo_d_envio.') activado';
}else{
	echo $error->getMessage();
}






?>