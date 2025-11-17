<?php 


	

$sql_facebook_pixel = 'SELECT * FROM ti_facebook_pixel 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';



$result_facebook_pixel = $db_conection->prepare($sql_facebook_pixel);

// Variables




// Ejecuto query
if ($result_facebook_pixel->execute()) {

	$fila_facebook_pixel = $result_facebook_pixel->fetch(PDO::FETCH_ASSOC);


	// Verifico si la categoria está activa
	// Para visualizar su estado en el switch
	if ($fila_facebook_pixel['active']==1) {
		$temp_switch_active = 'checked="checked"';
	}else{
		$temp_switch_active = '';
	}



	
}




$html_inputs_facebook_pixel = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"		style="display:none">

';











?>