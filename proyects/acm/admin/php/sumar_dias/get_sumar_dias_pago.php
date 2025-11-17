<?php 



// Tomo tipo de pago
$tipo_pago 	= $_GET['tipo_pago'];



// Variables
$titulo 			= '';
$dias_a_sumar	 	= '';
$subtotal 			= '';
$num_descuento 		= '';
$porcent_descuent 	= '';
$total 				= '';






switch ($tipo_pago) {

	case 'mensual':
		$titulo 			= 'Mensual';
		$dias_a_sumar	 	= '30';
		$subtotal 			= $maths_monto_mensual;
		$num_descuento 		= '0';
		$porcent_descuent 	= $maths_descuento_0;
		$total 				= $maths_monto_mensual;
	break;

	case 'semestral':
		$titulo 			= 'Semestral';
		$dias_a_sumar	 	= '180';
		$subtotal 			= $maths_monto_semestral;
		$num_descuento 		= '10';
		$porcent_descuent 	= $maths_descuento_10;
		$total 				= $maths_monto_descuento_semestral;
	break;

	case 'anual':
		$titulo 			= 'Anual';
		$dias_a_sumar	 	= '365';
		$subtotal 			= $maths_monto_anual;
		$num_descuento 		= '20';
		$porcent_descuent 	= $maths_descuento_20;
		$total 				= $maths_monto_descuento_anual;
	break;
	
}







// MERCADO PAGO

// Crea un objeto de preferencia / PAGO MENSUAL
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $titulo;
$item->quantity = 1;
$item->unit_price = $total;
$preference->items = array($item);

//Guardar preferencia
$preference->save();


































?>