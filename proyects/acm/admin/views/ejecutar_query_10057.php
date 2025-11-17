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
			'."'".		'Almendras Guara x 100Gr'	."'".',
			'."'".		'normal'					."'".',
			'. 			'120'						.',
			'."'".		'Unidad'					."'".',
			'.			'10057'						.',
			'."'".		'Frutos secos y harinas'	."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Almendras Partidas x 100Gr'	."'".',
			'."'".		'normal'						."'".',
			'. 			'90'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Almendras Nonpareil x 100Gr'	."'".',
			'."'".		'normal'						."'".',
			'. 			'135'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Castañas de cajú x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'97'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),


(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Castañas de caju entera x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'142'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Chip de banana x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'100'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),



(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Ciruela bombon d agen x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'100'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Coco en escamas x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'105'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Coco rallado fino x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'69'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Cacao alcalino holandes x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'130'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Dátiles egipto x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'60'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Harina de almendras x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'232'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Harina de chia x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'70'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Harina de coco x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'77'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),

(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Harina integral x 1Kg'		."'".',
			'."'".		'normal'						."'".',
			'. 			'150'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Higos Lerida x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'112'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Maní tostado sin sal x 1Kg'		."'".',
			'."'".		'normal'						."'".',
			'. 			'200'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Maní tostado con sal x 1Kg'		."'".',
			'."'".		'normal'						."'".',
			'. 			'250'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Maní con piel runner x 1Kg'		."'".',
			'."'".		'normal'						."'".',
			'. 			'280'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Nuez cuartos x 100Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'100'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Pasas de uva jumbo x 500Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'200'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Pasas de uva rubia x 500Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'300'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Medallones de durazno x 250Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'300'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Mix de pasas (pasas rubias y pasas morochas) x 500Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'250'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),
(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Mix esencial (castañas de cajú, almendras nonpareil, nueces, pasas jumbo, pasas rubias) x 500Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'500'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
),


(
						38,
						38,
			'."'".		'alimentosesenciales'			."'".',
						1,
			'."'".		'Mix de semillas (amapola, lino, chía, sésamo blanco y girasol) x 250Gr'		."'".',
			'."'".		'normal'						."'".',
			'. 			'300'							.',
			'."'".		'Unidad'						."'".',
			'.			'10057'							.',
			'."'".		'Frutos secos y harinas'		."'".'
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



