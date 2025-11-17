<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_metodo 		= $_POST['id_metodo'];
$dato 			= $_POST['dato'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');





// 1 
// Actualizo nombre Categoria

$sql = 'UPDATE ti_metodo_d_pago SET 


metodo 				= "'.		$dato				.'"


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_metodo			.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Nombre Método (ID '.$id_metodo.') actualizado'."\n";
}else{
	echo $error->getMessage();
}






?>