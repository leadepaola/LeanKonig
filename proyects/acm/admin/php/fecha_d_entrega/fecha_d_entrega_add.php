<?php 


$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$dominio 		= $_POST['dominio'];
$dato 			= $_POST['dato'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');



$sql = 
'
INSERT INTO ti_fecha_d_entrega 
			(	
				id_web,
				id_cliente,
				dominio,
				active,
				fecha
			) 
VALUES (
			'.			$id_web							.',
			'.			$id_cliente						.',
			'."'".		$dominio					."'".',
						0,
			'."'".		$dato						."'".'
);';




$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Nueva fecha '.$dato.' agregada';
}else{
	echo $error->getMessage();
}



?>




