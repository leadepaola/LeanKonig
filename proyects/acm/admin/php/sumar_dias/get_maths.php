<?php 




// CUENTAS MATEMATICAS PARA SACAR MONTOS DE SUSCRIPCION


// Declaraciones
$maths_monto_mensual    = 0;
$maths_monto_semestral  = 0;
$maths_monto_anual      = 0;
$maths_monto_descuento_semestral = 0;
$maths_monto_descuento_anual = 0;

// CUENTAS
$maths_monto_mensual    = $fila_mis_datos['mensualidad'];
$maths_monto_semestral  = $maths_monto_mensual*6;
$maths_monto_anual      = $maths_monto_mensual*12;


// Porcentajes de descuentos
$maths_descuento_0 	= 0;
$maths_descuento_10 = (($maths_monto_semestral*10)/100);
$maths_descuento_20 = (($maths_monto_anual*20)/100);

// Monto final a pagar 
$maths_monto_descuento_semestral = $maths_monto_semestral - (($maths_monto_semestral*10)/100);
$maths_monto_descuento_anual = $maths_monto_anual - (($maths_monto_anual*20)/100);




















































?>




