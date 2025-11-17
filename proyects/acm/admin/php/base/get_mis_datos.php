<?php 











// Traigo toda los datos de la tabla facturacion 
$sql_mis_datos = 'SELECT * FROM ti_usuarios 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';

$result_mis_datos = $db_conection->prepare($sql_mis_datos);





// Ejecuto query
if ($result_mis_datos->execute()) {

	$fila_mis_datos = $result_mis_datos->fetch(PDO::FETCH_ASSOC);

}


$dominio = $fila_mis_datos['dominio'];































?>