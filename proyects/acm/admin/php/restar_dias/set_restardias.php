<?php 

include('../../../server_local/conection_DB.php');

//dispositivo_de_ingreso
include('../../../server_local/canal.php');
include('../../../server_local/fecha_y_hora.php');




$pedido_sql = 'UPDATE ti_usuarios SET dias_disp=dias_disp-1
WHERE tipo_user = "premium1"
OR 	tipo_user = "free1"'
;



$resultado = $db_conection->prepare($pedido_sql);




/*----------------------------- Execute: restar dias -----------------------------*/
if ($resultado->execute()) {

	echo "Execute: Restar dias OK<br>";


	$pedido_sql_2 = 'INSERT INTO ti_admin_restardias (fecha, hora) 
	VALUES (
		"'.	$fecha			.'",
		"'.	$hora			.'"
		)';

	$resultado_2 = $db_conection->prepare($pedido_sql_2);

}
else{
	echo 'Error de conexion. Mensaje: ' . $error->getMessage();
}



/*----------------------------- Execute: Registrando en DB -----------------------------*/

if ($resultado_2->execute()) {
//	echo "Execute: Registrar evento en DB OK";
} 
else{
//	echo 'Error de conexion. Mensaje: ' . $error->getMessage();
}




/*------------ Execute: Convierto usuarios Free1, con dias dis 0, a Free2 ---------------*/

$pedido_sql_3 = 'UPDATE ti_usuarios SET tipo_user="free2", dias_disp=1000
WHERE 	tipo_user = "free1"
AND 	dias_disp = 0'
;


$resultado_3 = $db_conection->prepare($pedido_sql_3);


if ($resultado_3->execute()) {

}