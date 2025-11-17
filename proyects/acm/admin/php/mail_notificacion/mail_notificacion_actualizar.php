<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$data_1 		= $_POST['data_1'];

/*
echo $id_web;
echo $id_cliente;

echo $data_1;
*/

include('../../../server_local/conection_DB.php');


$sql = 'UPDATE ti_mail_confirmacion SET 


mail_notificaciones	= '."'".	$data_1		."'".'


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo "Mail de notificaciones actualizado";
}else{
	echo $error->getMessage();
}


?>