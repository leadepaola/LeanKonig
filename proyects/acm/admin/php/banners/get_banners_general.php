<?php



// Traigo toda los datos de la tabla facturacion 
$sql_ = 'SELECT * FROM ti_banners 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';





$html_banner_inputs_select = 
'
<span style="display:none">
	<input type="hidden" id="id_web" 		value="'.$id_web.'"		style="display:none">
	<input type="hidden" id="id_cliente" 	value="'.$id_cliente.'"	style="display:none">
</span>
';

$html_banner_inputs_switch = 
'

<input type="hidden" id="id_web" 			name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 		name="id_cliente"	value="'.$id_cliente.'"		style="display:none">


';







$result_ = $db_conection->prepare($sql_);

// Variables
$temp_sel_unic = '';
$temp_sel_duo  = '';

$temp_display_unic = 'style="display: none"';
$temp_display_duo  = 'style="display: none"';

$switch_check_1 = '';
$switch_check_2 = '';
$switch_check_3 = '';




// Ejecuto query
if ($result_->execute()) {



	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);

	

	//Verifico método de banner activo ( basic o duo )
	switch ($fila_['basic_advanced']) {
		case 'basic':
			$temp_sel_unic = 'selected';
			$temp_display_unic = 'style="display: block"';


		break;
		
		case 'advanced':
			$temp_sel_duo  = 'selected';
			$temp_display_duo  = 'style="display: block"';


		break;
	}


	//Verficio Banners activos
	if ($fila_['banner_on_1']==1) {
		$switch_check_1 = 'checked="checked"';
	}
	if ($fila_['banner_on_2']==1) {
		$switch_check_2 = 'checked="checked"';
	}
	if ($fila_['banner_on_3']==1) {
		$switch_check_3 = 'checked="checked"';
	}





}





















?>