<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$dato 			= $_POST['dato'];
$input 			= $_POST['input'];



/*
echo $id_web;
echo "\n";
echo $id_cliente;
echo "\n";
echo $dato;
echo "\n";
echo $input;
echo "\n";
*/


include('../../../server_local/conection_DB.php');



// Preparo query

$sql = 'UPDATE ti_contacto SET 

';




switch ($input) {

	case 'Teléfono 1':
		$sql .='tel_txt_1 		= "'.$dato.'"';
	break;

	case 'Teléfono 2':
		$sql .='tel_txt_2 		= "'.$dato.'"';
	break;

	case 'Mail':
		$sql .='mail_txt 		= "'.$dato.'"';
	break;

	case 'Dirección':
		$sql .='direc_txt 		= "'.$dato.'"';
	break;


	case 'Instagram':
		$sql .='instagram_link 	= "'.$dato.'"';
	break;

	case 'Facebook':
		$sql .='facebook_link 	= "'.$dato.'"';
	break;

	case 'Whatsapp':
		$sql .='whatsapp_link 	= "'.$dato.'"';
	break;

	case 'Twitter':
		$sql .='twitter_link 	= "'.$dato.'"';
	break;

	case 'Youtube':
		$sql .='youtube_link 	= "'.$dato.'"';
	break;

	case 'Linkedin':
		$sql .='linkedin_link 	= "'.$dato.'"';
	break;

	case 'Pinterest':
		$sql .='pinterest_link 	= "'.$dato.'"';
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
	echo $input." activado";
}else{
	echo $error->getMessage();
}


?>	