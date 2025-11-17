<?php 


	

$sql_ = 'SELECT * FROM ti_descuento 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';



$result_ = $db_conection->prepare($sql_);

// Variables




// Ejecuto query
if ($result_->execute()) {

	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);


	// Verifico si está activo
	// Para visualizar su estado en el switch
	if ($fila_['active']==1) {
		$temp_switch_active = 'checked="checked"';
	}else{
		$temp_switch_active = '';
	}

}






$html_inputs_descuento = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"		style="display:none">

';


















?>