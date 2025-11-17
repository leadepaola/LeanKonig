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
$html_banner_duo_pc  = '';
$html_banner_duo_mob = '';
$temp_banner_a_mostrar = '';





// Ejecuto query
if ($result_->execute()) {



	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);

	

	
	// FUNCION
	// Verifico cual es el banner seleccionado y lo muestro
	switch ($num_banner) {
		case '1':
			
			/*pc*/
			if (!empty($fila_['pc_nombre_1'])) {
				$html_banner_duo_pc = '<img src="../../TI/images/banners/id_web_'.$id_web.'/pc/'.$fila_['pc_nombre_1'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}else{
				$html_banner_duo_pc = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}

			/*mobile*/
			if (!empty($fila_['mob_nombre_1'])) {
				$html_banner_duo_mob = '<img src="../../TI/images/banners/id_web_'.$id_web.'/mobile/'.$fila_['mob_nombre_1'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}else{
				$html_banner_duo_mob = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}


		break;

		case '2':

			/*pc*/
			if (!empty($fila_['pc_nombre_2'])) {
				$html_banner_duo_pc = '<img src="../../TI/images/banners/id_web_'.$id_web.'/pc/'.$fila_['pc_nombre_2'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}else{
				$html_banner_duo_pc = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}

			/*mobile*/
			if (!empty($fila_['mob_nombre_2'])) {
				$html_banner_duo_mob = '<img src="../../TI/images/banners/id_web_'.$id_web.'/mobile/'.$fila_['mob_nombre_2'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}else{
				$html_banner_duo_mob = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}
			
		break;

		case '3':
			

			/*pc*/
			if (!empty($fila_['pc_nombre_3'])) {
				$html_banner_duo_pc = '<img src="../../TI/images/banners/id_web_'.$id_web.'/pc/'.$fila_['pc_nombre_3'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}else{
				$html_banner_duo_pc = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_1">';
			}

			/*mobile*/
			if (!empty($fila_['mob_nombre_3'])) {
				$html_banner_duo_mob = '<img src="../../TI/images/banners/id_web_'.$id_web.'/mobile/'.$fila_['mob_nombre_3'].'" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}else{
				$html_banner_duo_mob = '<img src="../../TI/images/banners/banner_predeterminado.png" alt="" class="max_w_700 ban_unic_recuadro_cont" id="ban_duo_2">';
			}
			
		break;
		

	}




}




// Armo html input para poder modificar banners desde ajax

$html_inputs_banner_duo_pc = 
'

<input type="hidden" id="id_web" 			name="id_web"			value="'.$id_web.'"				style="display:none">
<input type="hidden" id="id_cliente" 		name="id_cliente"		value="'.$id_cliente.'"			style="display:none">
<input type="hidden" id="num_banner" 		name="num_banner"		value="'.$num_banner.'"			style="display:none">

';


$html_inputs_banner_duo_mob = $html_inputs_banner_duo_pc;


switch ($num_banner) {
	case '1':

		$html_inputs_banner_duo_pc .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['pc_nombre_1'].'"	style="display:none">
		';


		$html_inputs_banner_duo_mob .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['mob_nombre_1'].'"	style="display:none">
		';
	
	break;

	case '2':
		
		$html_inputs_banner_duo_pc .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['pc_nombre_2'].'"	style="display:none">
		';


		$html_inputs_banner_duo_mob .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['mob_nombre_2'].'"	style="display:none">
		';

	break;

	case '3':
		
		$html_inputs_banner_duo_pc .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['pc_nombre_3'].'"	style="display:none">
		';


		$html_inputs_banner_duo_mob .= 
		'
		<input type="hidden" id="name_img_actual" 	name="name_img_actual"	value="'.$fila_['mob_nombre_3'].'"	style="display:none">
		';

	break;
	

}


































?>