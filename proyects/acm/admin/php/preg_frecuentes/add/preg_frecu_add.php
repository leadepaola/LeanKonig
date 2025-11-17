<?php 


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$dominio 			= $_POST['dominio'];

$nueva_pregunta 	= $_POST['nueva_pregunta'];
$nueva_respuesta 	= $_POST['nueva_respuesta'];

/*
echo $id_web;
echo $id_cliente;
*/

include('../../../../server_local/conection_DB.php');



$sql = 
'
INSERT INTO ti_ayuda_preg_frecuentes 
			(	
				id_web,
				id_cliente,
				dominio,
				active,
				titulo,
				texto
			) 
VALUES (
			'.			$id_web							.',
			'.			$id_cliente						.',
			'."'".		$dominio					."'".',
						0,
			'."'".		$nueva_pregunta				."'".',
			'."'".		$nueva_respuesta			."'".'
);';




$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Nueva pregunta agregada';
}else{
	echo $error->getMessage();
}



?>




