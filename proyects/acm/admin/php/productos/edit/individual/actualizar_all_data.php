<?php 



// Conecto a base de datos
include('../../../../../server_local/conection_DB.php');


$id_web 				= $_POST['id_web'];
$id_cliente 			= $_POST['id_cliente'];
$id_producto 			= $_POST['id_producto'];
$tipo 					= $_POST['tipo'];
$id_categoria 			= $_POST['id_categoria'];
$titulo 				= $_POST['titulo'];
$unidad 				= $_POST['unidad'];
$precio 				= $_POST['precio'];
$descripcion_active 	= $_POST['descripcion_active'];
$descripcion_txt 		= $_POST['descripcion_txt'];
$precio_tach_active 	= $_POST['precio_tach_active'];
$precio_tach_txt 		= $_POST['precio_tach_txt'];
$txt_off_active 		= $_POST['txt_off_active'];
$txt_off_txt 			= $_POST['txt_off_txt'];



// Traigo el nombre de la categoria seleccionada 
// para ponerlo en la fila del producto en la Base de datos
include('../../add/producto_add_get_name_categ.php');


/*
echo $id_web 		;
echo "\n";
echo $id_cliente 	;
echo "\n";
echo $id_producto 	;
echo "\n";
echo $tipo 			;
echo "\n";
echo $id_categoria 	;	
echo "\n";
echo $name_categ 	;	
echo "\n";
echo $titulo 		;
echo "\n";
echo $unidad 		;		
echo "\n";
echo $descripcion_active 	;
echo "\n";
echo $descripcion_txt 		;
echo "\n";
*/



$sql = 'UPDATE ti_productos SET 



titulo 				= '."'".		$titulo						."'".',
tipo 				= '."'".		$tipo						."'".',
precio 				= '.			$precio						.',
unidad 				= '."'".		$unidad						."'".',
id_categ 			= '.			$id_categoria					.',
categoria 			= '."'".		$name_categ					."'".',
desc_active 		= '.			$descripcion_active				.',
descripcion 		= '."'".		$descripcion_txt			."'".',
precio_tach_active 	= '.			$precio_tach_active				.',
precio_tach 		= '."'".		$precio_tach_txt			."'".',
txt_off_active 		= '.			$txt_off_active					.',
txt_off 			= '."'".		$txt_off_txt				."'".'


WHERE id_web 		= '.		$id_web			.'
AND id_cliente 		= '.		$id_cliente		.'
AND id 				= '.		$id_producto	.'
';



$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {
	echo 'Datos actualizados';
}else{
	echo $error->getMessage();
}




?>