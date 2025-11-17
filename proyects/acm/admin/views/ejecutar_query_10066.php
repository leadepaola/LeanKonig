<?php 

include('../../server_local/conection_DB.php');

/*

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
			'."'".		'Aceite de sésamo importado Nissein x 250ml'	."'".',
			'."'".		'normal'					."'".',
			'. 			'1760'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ajinomoto x 1Kg'	."'".',
			'."'".		'normal'					."'".',
			'. 			'600'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),


(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Algas Hijiki x 40Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'450'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Algas Kombu x 20Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'450'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Algas Nori Plancha Green x 10 Hojas'	."'".',
			'."'".		'normal'					."'".',
			'. 			'434'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Algas Nori Plancha Red x 10 Hojas'	."'".',
			'."'".		'normal'					."'".',
			'. 			'460'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Algas Wakame x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'1000'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Curry concentrado kukumaro suave x 88Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'600'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Fucus x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'270'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Hongos de pino boletus x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'272'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Palitos descartables warabachi x 100 pares'	."'".',
			'."'".		'normal'					."'".',
			'. 			'500'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Té verde con arroz tostado Gen Maicha x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'817'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Vinagre de arroz importado x 500ml'	."'".',
			'."'".		'normal'					."'".',
			'. 			'759'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Wasabi en pomo Neri Wasabi x 43Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'440'						.',
			'."'".		'Unidad'					."'".',
			'.			'10066'						.',
			'."'".		'Orientales / Algas'					."'".'
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

/*
$result_ = $db_conection->prepare($sql);


// Ejecuto query
if ($result_->execute()) {


}else{
	echo $error->getMessage();
}



