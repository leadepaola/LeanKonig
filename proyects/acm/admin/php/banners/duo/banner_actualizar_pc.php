<?php 



// Conecto a base de datos
include('../../../../server_local/conection_DB.php');
// Traigo fecha y hora en formato especifico para grabarlo en el nombre de la img
include('../../../../server_local/carga_d_imgs/fecha_y_hora.php');



//Recibo datos

$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];
$num_banner 	= $_POST['num_banner'];

/*
echo $id_web;
echo "\n";
echo $id_cliente;
echo "\n";
*/

$name_new_img 		= $_FILES['img_form_pc']['name'];
$name_new_img_fyh 	= $hora.'_'. $fecha.'_'.$name_new_img;

$name_img_actual 	= $_POST['name_img_actual'];





// Luego de cargar datos (id_web,etc) Cargo la ruta de la img (banner unico) 
include('../../../../server_local/carga_d_imgs/rutas_imgs.php');



//Echos de verificacion
/*
echo $name_new_img;
echo "\n";

echo $name_img_actual;
echo "\n";
*/



//Elimino img de logo vieja
unlink($carpeta_destino_cpanel_banner_duo_pc.$name_img_actual);



$sql = 'UPDATE ti_banners SET 

pc_nombre_'.$num_banner.' 		= "'.	$name_new_img_fyh		.'"

WHERE id_web 					= '.	$id_web					.'
AND id_cliente 					= '.	$id_cliente				.'
';



// Preparo query
$result_ = $db_conection->prepare($sql);

// Ejecuto query
if ($result_->execute()) {

	//Mover imagen del directorio temporal al directorio escogido
	move_uploaded_file($_FILES['img_form_pc']['tmp_name'], $carpeta_destino_cpanel_banner_duo_pc.$name_new_img_fyh );


}else{
	echo $error->getMessage();
}


?>