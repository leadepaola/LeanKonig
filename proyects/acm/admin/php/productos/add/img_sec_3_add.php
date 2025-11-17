<?php 

// Conecto a base de datos
include('../../../../server_local/conection_DB.php');
// Traigo fecha y hora en formato especifico para grabarlo en el nombre de la img
include('../../../../server_local/carga_d_imgs/fecha_y_hora.php');


$id_web 			= $_POST['id_web'];
$id_cliente 		= $_POST['id_cliente'];
$id_producto 		= $_POST['id_producto'];

$name_img_secundaria_3 		= $_FILES['img_form_sec_3']['name'];

	// FUNCION
	// Preparo variable para nombre de imagen

	//Selecciono tipo de imagen y la meto en $tipo_img
	$tipo_img = substr($name_img_secundaria_3, strrpos($name_img_secundaria_3, '.')+1);
	//Armo nombre de imagen final
	$name_img_secundaria_3_id 		= $id_producto.'_sec-3__'.$hora.$fecha.'.'.$tipo_img;
	// Le saco el salto de linea a la varible (q nose porque tiene ese salto)
	$name_img_secundaria_3_id = trim(preg_replace('/\s+/', '', $name_img_secundaria_3_id));


/*
echo $name_img_secundaria_3;
echo "\n";
*/


// Luego de cargar datos (id_web,etc) Cargo la ruta de la img (imagen secundaria) 
include('../../../../server_local/carga_d_imgs/rutas_imgs.php');




$sql = 'UPDATE ti_productos SET 

img_sec_3 				= "'.	$name_img_secundaria_3_id	.'"

WHERE id_web 			= '.	$id_web					.'
AND id_cliente 			= '.	$id_cliente				.'
AND id 					= '.	$id_producto			.'
';





// Preparo query
$result_ = $db_conection->prepare($sql);

// Ejecuto query
if ($result_->execute()) {

	//Mover imagen del directorio temporal al directorio escogido
	move_uploaded_file($_FILES['img_form_sec_3']['tmp_name'], $carpeta_destino_cpanel_producto_add_imgs_secundarias.$name_img_secundaria_3_id );


}else{
	echo $error->getMessage();
}





















?>