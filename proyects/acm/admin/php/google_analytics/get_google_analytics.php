<?php 


	

$sql_google_analytics = 'SELECT * FROM ti_google_analytics 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';



$result_google_analytics = $db_conection->prepare($sql_google_analytics);

// Variables




// Ejecuto query
if ($result_google_analytics->execute()) {

	$fila_google_analytics = $result_google_analytics->fetch(PDO::FETCH_ASSOC);


	// Verifico si la categoria está activa
	// Para visualizar su estado en el switch
	if ($fila_google_analytics['active']==1) {
		$temp_switch_active = 'checked="checked"';
	}else{
		$temp_switch_active = '';
	}



	
}




$html_inputs_google_analytics = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"		style="display:none">

';











?>