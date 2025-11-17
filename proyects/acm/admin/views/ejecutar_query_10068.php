<?php 

include('../../server_local/conection_DB.php');



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
				categoria

			) 
VALUES (
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de sésamo blaco x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'225'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de chia x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'90'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
),



(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de amaranto x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de lino x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'52'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de amapola x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'300'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Semillas de girasol pelado x 250Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10068'						.',
			'."'".		'Granos y semillas'					."'".'
)


;';





/*
						12,
						12,
			'."'".		'kokomia'					."'".',
						1,
			'."'".		'Titulo'					."'".',
			'."'".		'normal'					."'".',
			'. 			'0000'						.',
			'."'".		'Unidad'					."'".',
			'.			'$id_categoria'				.',
			'."'".		'$name_categ'				."'".',
			'.			'$descripcion_active'		.',
			'."'".		'$descripcion_txt'			."'".',
			'.			'$precio_tach_active'		.',
			'."'".		'$precio_tach_txt'			."'".',
			'.			'$txt_off_active'			.',
			'."'".		'$txt_off_txt'				."'".'
*/


$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {


}else{
	echo $error->getMessage();
}



