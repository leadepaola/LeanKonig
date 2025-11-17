<?php 


// Tomo id de pedido
$id_mensaje 	= $_GET['id_mensaje'];


// Traigo toda los datos de la tabla facturacion 
$sql_msj_individual = 'SELECT * FROM ti_contacto_msj 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
AND id 			= '.	$id_mensaje		.'
';

$result_msj_individual = $db_conection->prepare($sql_msj_individual);

// Variables
$html_mensaje = '';



// Ejecuto query
if ($result_msj_individual->execute()) {

	$fila_msj = $result_msj_individual->fetch(PDO::FETCH_ASSOC);


}






// FUNCION
// Marco el msj como leido 

$sql_set_msj_leido = 'UPDATE ti_contacto_msj SET 

leido = 1 

WHERE id 			= '.	$id_mensaje		.'
';

$result_msj_leido = $db_conection->prepare($sql_set_msj_leido);

// Ejecuto query
if ($result_msj_leido->execute()) {
	
}



















?>