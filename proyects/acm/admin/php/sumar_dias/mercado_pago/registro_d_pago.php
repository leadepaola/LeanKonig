
<?php 

include('../../../../server_local/google_analytics.php');
include('../../../../server_local/conection_DB.php');

//dispositivo_de_ingreso
include('../../../php/canal.php');

//fecha y hora
include('../../../php/fecha_y_hora.php');

//Toma de datos bases
include('../../../php/base/get_variables.php');
include('../../../php/base/get_mis_datos.php');

//Tomo el tipo de pago (mensual, semestral, anual)
$tipo_pago 		= $_GET['tipo_pago'];
$monto 			= $_GET['monto'];
$dias_a_sumar 	= $_GET['dias_a_sumar'];
$dias_sin_sumar = $fila_mis_datos['dias_disp'];

/*
echo "id_web: "		.$id_web.			"<br>";
echo "id_cliente: "	.$id_cliente.		"<br>";
echo "dominio: "	.$dominio.			"<br>";
echo "tipo: "		.$tipo_pago.		"<br>";
echo "fecha: "		.$fecha.			"<br>";
echo "hora: "		.$hora.				"<br>";
echo "canal: "		.$canal.			"<br>";
echo "monto: "		.$monto.			"<br>";
*/


// 1°
// Se inserta el registro de pago en la tabla "ti_usuarios_pagos"

$pedido_sql_1 = 'INSERT INTO ti_usuarios_pagos (id_web, id_cliente, dominio, tipo, fecha, hora, canal, monto)
VALUES(
 	  	       	'.			$id_web			.',
 	 	  	    '.			$id_cliente		.',
 		  		"'.			$dominio		.'",
 		  		"'.			$tipo_pago		.'",
 			 	"'.			$fecha			.'",
 		   		"'.			$hora			.'",
 		   		"'.			$canal			.'",
 		   		 '.			$monto			.'
)'
;

$resultado_1 = $db_conection->prepare($pedido_sql_1);

if ($resultado_1->execute()) {

} 




// 2°
// Se suma la cantidad de dias correspondientes
// Y se dirige a vista de confirmacion de pago

$pedido_sql_2 = 'UPDATE ti_usuarios SET dias_disp=dias_disp+'.$dias_a_sumar.' 
WHERE 			id_web=		'.		$id_web				.'
AND 		 	id_cliente=	'.		$id_cliente			.'
';


$resultado_2 = $db_conection->prepare($pedido_sql_2);

if ($resultado_2->execute()) {

	header('location:../../../views/sumar_dias_pago_confirmacion.php'.$codigo_id_web.'&dias_sumados='.$dias_a_sumar.'&dias_sin_sumar='.$dias_sin_sumar);
} 






























?>
