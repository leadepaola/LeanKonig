<?php 



// Conecto a base de datos
include('../../../../server_local/conection_DB.php');


//Recibo datos
$id_web 				= $_POST['id_web'];
$id_cliente 			= $_POST['id_cliente'];
$dominio 				= $_POST['dominio'];
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
include('./producto_add_get_name_categ.php');


/*
echo $id_web 		;
echo "\n";
echo $id_cliente 	;
echo "\n";
echo $dominio	 	;
echo "\n";
echo $tipo 			;
echo "\n";
echo $id_categoria 	;	
echo "\n";
echo $titulo 		;
echo "\n";
echo $unidad 		;		
echo "\n";
echo $precio 		;		
echo "\n";
echo $descripcion_active 	;
echo "\n";
echo $descripcion_txt 		;
echo "\n";
*/


$sql = 
'
INSERT INTO ti_productos 
			(	
				id_web,
				id_cliente,
				dominio,
				stock,
				titulo,
				tipo,
				precio,
				unidad,
				id_categ,
				categoria,
				desc_active,
				descripcion,
				precio_tach_active,
				precio_tach,
				txt_off_active,
				txt_off
			) 
VALUES (
			'.			$id_web							.',
			'.			$id_cliente						.',
			'."'".		$dominio					."'".',
						1,
			'."'".		$titulo						."'".',
			'."'".		$tipo						."'".',
			'.			$precio						.',
			'."'".		$unidad						."'".',
			'.			$id_categoria					.',
			'."'".		$name_categ					."'".',
			'.			$descripcion_active				.',
			'."'".		$descripcion_txt			."'".',
			'.			$precio_tach_active				.',
			'."'".		$precio_tach_txt			."'".',
			'.			$txt_off_active					.',
			'."'".		$txt_off_txt				."'".'
);';




$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {

	// FUNCION
	// Toma el ultimo id insertado y lo mete dentro de la variable $id_pedido
	$id_producto = $db_conection->lastInsertId('id');
	echo $id_producto;

}else{
	echo $error->getMessage();
}


















?>