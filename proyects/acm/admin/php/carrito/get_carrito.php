<?php 




// Traigo toda los datos de la tabla facturacion 
$sql_carrito = 'SELECT * FROM ti_carrito 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';

$result_carrito = $db_conection->prepare($sql_carrito);


$html_checbox_active = '';
$html_txt_estado_carrito = 'Desactivado';

// Ejecuto query
if ($result_carrito->execute()) {

	$fila_carrito = $result_carrito->fetch(PDO::FETCH_ASSOC);

	// Verifico
	// Si el logo está activo para mostrar checkbox
	if ($fila_carrito['active']==1) {
		$html_checbox_active = 'checked="checked"';

		$html_txt_estado_carrito = 'Activado';
	}



}



















































 ?>