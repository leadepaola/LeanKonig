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
			'."'".		'Achiote x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'300'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Aji de cayena amarillo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'62'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),





(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Aji molido extra x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'90'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ajo en polvo premium x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'85'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ajo granulado importado x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'78'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Albahaca deshidratada x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'110'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Anís en grano verde x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'180'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Azúcar mascabo x 500Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Bicarbonato de sodio x 500Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Canela premium x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'170'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cebolla en escama x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'130'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Clavo de olor molido x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'172'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Comino molido premium x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Coriandro en grano x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'48'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Curry especial x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'135'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cúrcuma molida premium x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'63'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Eneldo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'120'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Estragon x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'105'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Garam Masala x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Gengibre molido x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'180'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Mix de pimienta en grano x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'300'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Mostaza en grano x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Nuez Moscada Molida extra x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'210'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Orégano de Mendoza x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'113'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Paprika x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'68'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Perejil deshidratado x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pesto x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pimenton importado x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'92'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pimienta blanca en grano x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'136'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pimienta negra molida extra x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'77'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pimienta de cayena x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pimienta negra en grano x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'171'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Provenzal x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'95'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Romero x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'120'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Sal del Himalaya x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'50'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Tomate deshidratado x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'135'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Tomillo en hojas x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'148'						.',
			'."'".		'Unidad'					."'".',
			'.			'10067'						.',
			'."'".		'Condimentos y especias'					."'".'
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



