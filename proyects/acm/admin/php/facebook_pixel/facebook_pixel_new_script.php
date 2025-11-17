<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$new_iframe 	= $_POST['new_iframe'];

/*
echo $id_web;
echo $id_cliente;
*/

//echo $new_iframe;



$pattern = "/'/i";
$new_iframe_editada = preg_replace($pattern, "\'", $new_iframe);







include('../../../server_local/conection_DB.php');


$sql = 'UPDATE ti_facebook_pixel SET 


script 				= '."'" .	$new_iframe_editada		. "'".'


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo "Script actualizado";
}else{
	echo $error->getMessage();
}


?>