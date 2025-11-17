<?php 
/*
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
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Arroz integral yamaní x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Avena gruesa x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Avena mediana x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Avena instantánea x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Cus cus x 500Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'315'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Garbanzo 6mm x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Garbanzo 8mm x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Lenteja chica x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'300'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Lenteja turca x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'400'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Lentejón x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'350'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Poroto aduki x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'250'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Poroto alubia x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Poroto de soja x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Poroto negro x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
						1,
			'."'".		'Quinoa x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'500'						.',
			'."'".		'Unidad'					."'".',
			'.			'10065'						.',
			'."'".		'Cereales y legumbres'		."'".'
)


;';





/*
						38,
						38,
			'."'".		'alimentosesenciales'		."'".',
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
/*

$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {


}else{
	echo $error->getMessage();
}



