<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$id_categoria 	= $_POST['id_categoria'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');






// 1 
// Desactivo Categoria

$sql = 'UPDATE ti_categorias SET 


active 				= 0


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id 				= '.		$id_categoria		.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Categoria (ID '.$id_categoria.') actualizado'."\n";
}else{
	echo $error->getMessage();
}




// 2
// Desctivo stock de todos los productos
// de la categoria

$sql_2 = 'UPDATE ti_productos SET 


stock 				= 0


WHERE id_web 		= '.		$id_web				.'
AND id_cliente 		= '.		$id_cliente			.'
AND id_categ		= '.		$id_categoria		.'
';



$result_2 = $db_conection->prepare($sql_2);

// Ejecuto query
if ($result_2->execute()) {
	echo 'Productos de categoria desactivados';
}else{
	echo $error->getMessage();
}






?>