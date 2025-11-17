<?php 



// FUNCION 
// Tomo las categorias y las coloco en el select

$sql_cat = 'SELECT * FROM ti_categorias 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
AND id 			= '.	$id_categoria	.'

';



$result_ = $db_conection->prepare($sql_cat);

// Variables
$name_categ = '';


// Ejecuto query
if ($result_->execute()) {
	
	
	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);


	$name_categ = $fila_['categoria'];

}























?>