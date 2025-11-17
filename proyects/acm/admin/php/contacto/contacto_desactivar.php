<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$switch_value 	= $_POST['switch_value'];


//echo $_POST['id_pedido'];
//echo $id_pedido;


include('../../../server_local/conection_DB.php');



// Preparo query

$sql = 'UPDATE ti_contacto SET 

';




switch ($switch_value) {

	case 'Teléfono 1':
		$sql .='tel_activo_1 = 0';
	break;

	case 'Teléfono 2':
		$sql .='tel_activo_2 = 0';
	break;

	case 'Mail':
		$sql .='mail_activo = 0';
	break;

	case 'Dirección':
		$sql .='direc_activo = 0';
	break;


	case 'Instagram':
		$sql .='instagram_activo = 0';
	break;

	case 'Facebook':
		$sql .='facebook_activo = 0';
	break;

	case 'Whatsapp':
		$sql .='whatsapp_activo = 0';
	break;

	case 'Twitter':
		$sql .='twitter_activo = 0';
	break;

	case 'Youtube':
		$sql .='youtube_activo = 0';
	break;

	case 'Linkedin':
		$sql .='linkedin_activo = 0';
	break;

	case 'Pinterest':
		$sql .='pinterest_activo = 0';
	break;
	
}



$sql .= 
'
WHERE id_web 		= '.	$id_web			.'
AND id_cliente 		= '.	$id_cliente		.'
'
;




$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo $switch_value." desactivado";
}else{
	echo $error->getMessage();
}


?>	