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
			'."'".		'Ajenjo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'50'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Alcachofa x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'140'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),


(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ambay x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
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
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Burro x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'100'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Canela en polvo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Carqueja x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cáscara de naranja dulce x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cedrón en hojas x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'200'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cocu x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'70'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Cola de caballo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'150'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Congorosa x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'140'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Chañar corteza x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'65'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),





(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Damiana x 50Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'350'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Diente de león x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'156'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Eucaliptus x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'85'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Fucus x 50Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'140'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ginko Biloba x 50Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'190'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Higuera x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'60'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Lapacho leño x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'85'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Lemon grass x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'130'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Marrubio x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Malva x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'65'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),



(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Marcela Flores x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'50'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Melisa hoja x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'148'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Manzanilla flor x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'250'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Menta egipcia x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'100'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Moringa x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'185'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Nogal x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'58'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Olivo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'50'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Ortiga x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'120'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pasionaria x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'110'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Pesuña de vaca x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'50'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),



(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Rome piedra x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'85'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Salvia Blanca x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'100'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Sen hojas x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'80'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Stevia x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'260'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Te rojo x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'90'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Te verde x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'90'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Tilo x 50Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'235'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Te negro x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'90'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Valeriana x 50Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'400'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'					."'".',
						1,
			'."'".		'Zarzaparilla x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'85'						.',
			'."'".		'Unidad'					."'".',
			'.			'10069'						.',
			'."'".		'Hierbas'					."'".'
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



