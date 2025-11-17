<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_fecha 		= $_POST['id_fecha'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');





// 1 
// Activo Fecha

$sql = 'UPDATE ti_fecha_d_entrega SET 


active 				= 1


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_fecha			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Fecha (ID '.$id_fecha.') activada'."\n";
}else{
	echo $error->getMessage();
}




?>