<?php 


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$dominio 			= $_POST['dominio'];
$nueva_zona 		= $_POST['nueva_zona'];
$nueva_zona_precio 	= $_POST['nueva_zona_precio'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../server_local/conection_DB.php');



$sql = 
'
INSERT INTO ti_costo_d_envio 
			(	
				id_web,
				id_cliente,
				dominio,
				active,
				precio,
				nombre_zona
			) 
VALUES (
			'.			$id_web							.',
			'.			$id_cliente						.',
			'."'".		$dominio					."'".',
						0,
			'.			$nueva_zona_precio				.',
			'."'".		$nueva_zona					."'".'
);';




$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Nueva zona de entrega agregada';
}else{
	echo $error->getMessage();
}



?>




