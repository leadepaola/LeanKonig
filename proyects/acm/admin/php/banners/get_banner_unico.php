<?php


// Tomo id del banner
$num_banner 	= $_GET['num_banner'];



// Traigo toda los datos de la tabla facturacion 
$sql_ = 'SELECT * FROM ti_banners 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';


$result_ = $db_conection->prepare($sql_);

// Variables
$html_banner_unico = '';
$temp_banner_a_mostrar = '';






// Ejecuto query
if ($result_->execute()) {



	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);

	


	// FUNCION
	// Verifico cual es el banner seleccionado y lo muestro
	switch ($num_banner) {
		case '1':
			

			if (!empty($fila_['unic_nombre_1'])) {
				$html_banner_unico = '<img src="../../TI/images/banners/id_web_'.$id_web.'/'.$fila_['unic_nombre_1'].'" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}else{
				$html_banner_unico = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}


		break;

		case '2':

			if (!empty($fila_['unic_nombre_2'])) {
				$html_banner_unico = '<img src="../../TI/images/banners/id_web_'.$id_web.'/'.$fila_['unic_nombre_2'].'" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}else{
				$html_banner_unico = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}
			
		break;

		case '3':
			

			if (!empty($fila_['unic_nombre_3'])) {
				$html_banner_unico = '<img src="../../TI/images/banners/id_web_'.$id_web.'/'.$fila_['unic_nombre_3'].'" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}else{
				$html_banner_unico = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont">';
			}
			
		break;
		

	}

}



// Armo html input para poder modificar banner desde ajax

$html_inputs_banner_unico = 
'

<input type="hidden" id="id_web" 			name="id_web"			value="'.$id_web.'"				style="display:none">
<input type="hidden" id="id_cliente" 		name="id_cliente"		value="'.$id_cliente.'"			style="display:none">
<input type="hidden" id="num_banner" 		name="num_banner"		value="'.$num_banner.'"			style="display:none">

';


switch ($num_banner) {
	case '1':
		$html_inputs_banner_unico .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['unic_nombre_1'].'"	style="display:none">
		';
	break;

	case '2':
		$html_inputs_banner_unico .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['unic_nombre_2'].'"	style="display:none">
		';		
	break;

	case '3':
		$html_inputs_banner_unico .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['unic_nombre_3'].'"	style="display:none">
		';
	break;
	

}













?>