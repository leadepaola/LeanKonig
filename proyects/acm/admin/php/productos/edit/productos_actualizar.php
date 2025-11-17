<?php 


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$id_producto 		= $_POST['id_producto'];
$precio 			= $_POST['precio'];

/*
echo $id_web;
echo $id_cliente;
*/



// Si el dato de pecio viene vacio, lo pongo en cero
if(empty($data_precio)){
	$data_precio = 0;
}



include('../../../../server_local/conection_DB.php');




$sql = 'UPDATE ti_productos SET 


precio				= '.		$precio			.'


WHERE id_web 		= '.		$id_web			.'
AND id_cliente 		= '.		$id_cliente		.'
AND id 				= '.		$id_producto	.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Precio actualizado a $'.$precio;
}else{
	echo $error->getMessage();
}




?>