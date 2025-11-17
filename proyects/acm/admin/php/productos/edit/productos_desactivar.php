<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_producto 	= $_POST['id_producto'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../../server_local/conection_DB.php');





// 1 
// Activo Categoria

$sql = 'UPDATE ti_productos SET 


stock 				= 0


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_producto		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Producto (ID '.$id_producto.') desactivado';
}else{
	echo $error->getMessage();
}






?>