<?php 






// Tomo id de pregunta frecuente
$id_prod 	= $_GET['id_prod'];

	

$sql_ = 'SELECT * FROM ti_productos 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
AND id 			= '.	$id_prod		.'
';



$result_ = $db_conection->prepare($sql_);

// Variables
$tipo_prod_nor = '';
$tipo_prod_des = '';
$tipo_prod_pro = '';

$img_principal = '';
$img_sec_1 = '';
$img_sec_2 = '';
$img_sec_3 = '';



// Ejecuto query
if ($result_->execute()) {

	$fila_producto = $result_->fetch(PDO::FETCH_ASSOC);

	switch ($fila_producto['tipo']) {
		
		case 'normal':
			$tipo_prod_nor = 'selected';
		break;

		case 'destacado':
			$tipo_prod_des = 'selected';
		break;

		case 'promocion':
			$tipo_prod_pro = 'selected';
		break;
		
	}


	// FUNCION
	// Verifico si hay imagen_principal cargada 
	if(!empty($fila_producto['img_principal'])){
		$img_principal = 
		'
		<img src="../../TI/images/productos/id_web_'.$id_web.'/'.$fila_producto['img_principal'].'" alt="" class="prod_indi_edit_item_lista_img" id="prod_indi_edit_item_lista_img_princ">
		';
	}else{
		$img_principal = 
		'
		<img src="../../cpanel/images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img" id="prod_indi_edit_item_lista_img_princ">
		';
	}



	// FUNCION 
	// Verifico si hay img_sec_1 cargada 
	if(!empty($fila_producto['img_sec_1'])){
		$img_sec_1 = 
		'
		<img src="../../TI/images/productos/id_web_'.$id_web.'/secundarias/'.$fila_producto['img_sec_1'].'" alt="" class="prod_indi_edit_item_lista_img_sec">
		';
	}else{
		$img_sec_1 = 
		'
		<img src="../../cpanel/images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
		';
	}


	// Verifico si hay img_sec_2 cargada 
	if(!empty($fila_producto['img_sec_2'])){
		$img_sec_2 = 
		'
		<img src="../../TI/images/productos/id_web_'.$id_web.'/secundarias/'.$fila_producto['img_sec_2'].'" alt="" class="prod_indi_edit_item_lista_img_sec">

		';
	}else{
		$img_sec_2 = 
		'
		<img src="../../cpanel/images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
		';
	}

	// Verifico si hay img_sec_3 cargada 
	if(!empty($fila_producto['img_sec_3'])){
		$img_sec_3 = 
		'
		<img src="../../TI/images/productos/id_web_'.$id_web.'/secundarias/'.$fila_producto['img_sec_3'].'" alt="" class="prod_indi_edit_item_lista_img_sec">

		';
	}else{
		$img_sec_3 = 
		'
		<img src="../../cpanel/images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
		';
	}




	//Variables
	$selec_unidad 	= '';
	$selec_kilo 	= '';

	// FUNCION 
	// Verifico tipo de medida

	switch ($fila_producto['unidad']) {
		
		case 'Unidad':
			$selec_unidad 	= 'selected';
		break;

		case 'Kilo':
			$selec_kilo 	= 'selected';
		break;
		
	}


	//Variables
	$switch_descrip = '';
	$desc_inactive_css = '';

	// FUNCION
	// Verifico si la descripcion está activa

	if ($fila_producto['desc_active']==1) {
		$switch_descrip = 'checked="checked"';
	}else{
		$switch_descrip = '';
		$desc_inactive_css = 'style="color:#cccccc"';
	}




	//Variables
	$switch_precio_tach = '';
	$precio_tach_inactive_css = '';

	// FUNCION
	// Verifico si el precio tachado está activo

	if ($fila_producto['precio_tach_active']==1) {
		$switch_precio_tach = 'checked="checked"';
	}else{
		$switch_precio_tach = '';
		$precio_tach_inactive_css = 'style="color:#cccccc"';
	}




	//Variables
	$switch_txt_off = '';
	$txt_off_inactive_css = '';

	// FUNCION
	// Verifico si el TXT OFF está activo

	if ($fila_producto['txt_off_active']==1) {
		$switch_txt_off = 'checked="checked"';
	}else{
		$switch_txt_off = '';
		$txt_off_inactive_css = 'style="color:#cccccc"';
	}





	// 	FUNCION
	//	Armo inputs para usar en ajax productos_individual_edit_js

	$input_img_principal = 
	'
	<input type="hidden" id="name_img_principal_actual" 	name="name_img_principal_actual"	value="'.$fila_producto['img_principal'].'"	>
	<input type="hidden" id="id_producto" 					name="id_producto"					value="'.$fila_producto['id'].'"	>
	';
	$input_img_sec_1 = 
	'
	<input type="hidden" id="name_img_sec_1_actual" 	name="name_img_sec_1_actual"	value="'.$fila_producto['img_sec_1'].'"	>
	<input type="hidden" id="id_producto" 				name="id_producto"				value="'.$fila_producto['id'].'"	>
	';
	$input_img_sec_2 = 
	'
	<input type="hidden" id="name_img_sec_2_actual" 	name="name_img_sec_2_actual"	value="'.$fila_producto['img_sec_2'].'"	>
	<input type="hidden" id="id_producto" 				name="id_producto"				value="'.$fila_producto['id'].'"	>
	';
	$input_img_sec_3 = 
	'
	<input type="hidden" id="name_img_sec_3_actual" 	name="name_img_sec_3_actual"	value="'.$fila_producto['img_sec_3'].'"	>
	<input type="hidden" id="id_producto" 				name="id_producto"				value="'.$fila_producto['id'].'"	>
	';

	






}





















































// FUNCION 
// Tomo las categorias y las coloco en el select

$sql_ = 'SELECT * FROM ti_categorias 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';



$result_categorias = $db_conection->prepare($sql_);

// Variables
$html_prod_edit_categorias = '';

$temp_categ_select = '';


// Ejecuto query
if ($result_categorias->execute()) {

	while($fila_categorias = $result_categorias->fetch(PDO::FETCH_ASSOC)){

	
		// Verifico cual es en la categoria que se encuentra el producto
		if ($fila_producto['categoria']==$fila_categorias['categoria']) {
			$temp_categ_select = 'selected';
		}else{
			$temp_categ_select = '';
		}

		


		$html_prod_edit_categorias .= 
		'
		<option  value="'.$fila_categorias['id'].'" '.$temp_categ_select.'  >'.$fila_categorias['categoria'].'</option>
		';
			
	}
}































?>