<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_metodo 		= $_POST['id_metodo'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');





// 1 
// Activo Método

$sql = 'UPDATE ti_metodo_d_pago SET 


active 				= 1


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_metodo			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Método (ID '.$id_metodo.') activado'."\n";
}else{
	echo $error->getMessage();
}





?>