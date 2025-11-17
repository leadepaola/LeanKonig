<?php 


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$id_costo_d_envio 	= $_POST['id_costo_d_envio'];
$nombre_zona 		= $_POST['nombre_zona'];
$data_precio 		= $_POST['data_precio'];

/*
echo $id_web;
echo $id_cliente;
*/



// Si el dato de pecio viene vacio, lo pongo en cero
if(empty($data_precio)){
	$data_precio = 0;
}



include('../../../server_local/conection_DB.php');




$sql = 'UPDATE ti_costo_d_envio SET 


nombre_zona			= "'.		$nombre_zona		.'",
precio 				= '.		$data_precio		.'


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_costo_d_envio	.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo $nombre_zona.' actualizado';
}else{
	echo $error->getMessage();
}




?>