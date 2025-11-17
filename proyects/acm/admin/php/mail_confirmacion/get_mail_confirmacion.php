<?php 


	

$sql_mail_confirm = 'SELECT * FROM ti_mail_confirmacion 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';



$result_mail_confirm = $db_conection->prepare($sql_mail_confirm);

// Variables




// Ejecuto query
if ($result_mail_confirm->execute()) {

	$fila_mail_confirm = $result_mail_confirm->fetch(PDO::FETCH_ASSOC);




	
}




$html_inputs_mail = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"		style="display:none">

';











?>