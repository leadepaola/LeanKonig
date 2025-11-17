<?php 



// Conecto a base de datos
include('../../../server_local/conection_DB.php');
// Traigo fecha y hora en formato especifico para grabarlo en el nombre de la img
include('../../../server_local/carga_d_imgs/fecha_y_hora.php');



//Recibo datos
$nombre_new_img 	= $_FILES['img_logo']['name'];
$name_new_img_fyh 	= $hora.'_'. $fecha.'_'.$nombre_new_img;

$name_logo_actual 	= $_POST['name_logo_actual'];

$id_web 		= $_POST['id_web'];
$id_cliente 	= $_POST['id_cliente'];



// Luego de cargar datos (id_web,etc) Cargo la ruta de la img (logo) 
include('../../../server_local/carga_d_imgs/rutas_imgs.php');


/* 
Echos de verificacion

echo $nombre_new_img;
echo "\n";
echo $id_web;
echo "\n";
echo $id_cliente;
echo "\n";
echo $name_logo_actual;
echo "\n";

*/



//Elimino img de logo vieja
unlink($carpeta_destino_cpanel_logo.$name_logo_actual);



$sql = 'UPDATE ti_logo SET 

nombre 			= "'.	$name_new_img_fyh		.'"

WHERE id_web 	= '.	$id_web					.'
AND id_cliente 	= '.	$id_cliente				.'
';



// Preparo query
$result_ = $db_conection->prepare($sql);

// Ejecuto query
if ($result_->execute()) {

	/* Echos de verificacion

	echo "Logo actualizado";
	echo "\n";
	echo $carpeta_destino_cpanel_logo.$name_new_img_fyh;
	*/

	//Mover imagen del directorio temporal al directorio escogido
	move_uploaded_file($_FILES['img_logo']['tmp_name'], $carpeta_destino_cpanel_logo.$name_new_img_fyh );

	//header("Location: ./../../views/logo.php?id_web=47&id_cliente=1"); 

}else{
	echo $error->getMessage();
}



?>