<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_categoria 	= $_POST['id_categoria'];
$dato 			= $_POST['dato'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');





// 1 
// Actualizo nombre Categoria

$sql = 'UPDATE ti_categorias SET 


categoria 			= "'.		$dato				.'"


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_categoria		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Nombre categoria (ID '.$id_categoria.') actualizado'."\n";
}else{
	echo $error->getMessage();
}





// 2
// Activo nombre de categoria
// en tabla de productos 

// (Cada producto tiene el nombre de su categoria 
//	para agilizar acceso a dato cuando llamo al producto)

$sql_2 = 'UPDATE ti_productos SET 


categoria 			= "'.		$dato				.'"


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id_categ		= '.		$id_categoria		.'
';



$result_2 = $db_conection->prepare($sql_2);

// Ejecuto query
if ($result_2->execute()) {
	echo 'Nombre de categoria en tabla productos actualizado';
}else{
	echo $error->getMessage();
}



?>