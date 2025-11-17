<?php 


	

$sql_ = 'SELECT * FROM ti_mail_confirmacion 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';



$result_ = $db_conection->prepare($sql_);

// Variables




// Ejecuto query
if ($result_->execute()) {

	$fila_mail_notif = $result_->fetch(PDO::FETCH_ASSOC);

	// En view_mail_notoficacion.php imprimo el mail de notificacion 

}
















?>