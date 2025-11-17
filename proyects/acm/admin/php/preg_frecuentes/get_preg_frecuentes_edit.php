<?php 


// Tomo id de pregunta frecuente
$id_preg 	= $_GET['id_preg'];

	

$sql_ = 'SELECT * FROM ti_ayuda_preg_frecuentes 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
AND id 			= '.	$id_preg		.'

';



$result_ = $db_conection->prepare($sql_);

// Variables




// Ejecuto query
if ($result_->execute()) {

	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);

}


















?>