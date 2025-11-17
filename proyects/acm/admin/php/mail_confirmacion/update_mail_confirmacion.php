<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$mail_txtArea 	= $_POST['mail_txtArea'];

/*
echo $id_web;
echo $id_cliente;

echo $mail_txtArea;
*/

include('../../../server_local/conection_DB.php');


$sql = 'UPDATE ti_mail_confirmacion SET 


mail 				= '."'".	$mail_txtArea		."'".'


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo "Mail automatico de confirmacion actualizado";
}else{
	echo $error->getMessage();
}


?>