<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];


//echo $_POST['id_pedido'];
//echo $id_pedido;


include('../../../server_local/conection_DB.php');


$sql = 'UPDATE ti_facebook_pixel SET 


active 				= 0


WHERE id_web 		= '.	$id_web			.'
AND id_cliente 		= '.	$id_cliente		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo "Facebook Pixel desactivado";
}else{
	echo $error->getMessage();
}


?>