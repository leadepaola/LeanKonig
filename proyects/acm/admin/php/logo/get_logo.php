<?php 




// Traigo toda los datos de la tabla facturacion 
$sql_ = 'SELECT * FROM ti_logo 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';

$result_ = $db_conection->prepare($sql_);

// Variables
$html_logo_img 		= '';
$html_logo_menu_pc 	= '';
$html_logo_menu_mob	= '';

$html_checbox_active = '';

// Ejecuto query
if ($result_->execute()) {

	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);





	// Verifico si hay logo cargado
	if(empty($fila_['nombre'])){
		//Si no hay logo cargado
		$html_logo_img = 
		'
			<img src="../../TI/images/logo/img_predeterminada.png" alt="" id="logo_img">
		';


		$html_logo_menu_pc 	= 
		'
			<img src="../../TI/images/logo/img_predeterminada.png" alt="" class="menu_pc_img">	
		';

		$html_logo_menu_mob	= 
		'
			<img class="circle logo_img_circle" src="../../TI/images/logo/img_predeterminada.png">	
		';
	}else{
		// Si hay logo cargado
		$html_logo_img = 
		'
			<img src="../../TI/images/logo/id_web_'.$id_web.'/'.$fila_['nombre'].'" alt="" id="logo_img">
		';


		$html_logo_menu_pc 	= 
		'
			<img src="../../TI/images/logo/id_web_'.$id_web.'/'.$fila_['nombre'].'" alt="" class="menu_pc_img">	
		';

		$html_logo_menu_mob	= 
		'
			<img class="circle logo_img_circle" src="../../TI/images/logo/id_web_'.$id_web.'/'.$fila_['nombre'].'">	
		';
	}


		




	// Verifico
	// Si el logo está activo para mostrar checkbox
	if ($fila_['activo']==1) {
		$html_checbox_active = 'checked="checked"';
	}



}




$html_inputs_logo = 
'

<input type="hidden" id="id_web" 			name="id_web"	value="'.$id_web.'"						style="display:none">
<input type="hidden" id="id_cliente" 		name="id_cliente"	value="'.$id_cliente.'"				style="display:none">

<input type="hidden" id="name_logo_actual" 	name="name_logo_actual"	value="'.$fila_['nombre'].'"	style="display:none">
';



















































 ?>