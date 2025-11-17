<?php 

// Tomo variable de categoria
$id_categ 	= $_GET['id_categ'];










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

		
		if ($id_categ == $fila_categorias['id'] ) {
			$temp_categ_select = 'selected';
		}
		else{
			$temp_categ_select = '';
		}

		

		$html_prod_edit_categorias .= 
		'
			<option  value="'.$fila_categorias['id'].'" '.$temp_categ_select.'  >'.$fila_categorias['categoria'].'</option>
		';
			
	}
}



// Termino de formar el select 

if ($id_categ == 2 ) {
	$temp_categ_select = 'selected';
}
else{
	$temp_categ_select = '';
}

$html_prod_edit_categorias .= 
'
	<option  value="2" '.$temp_categ_select.'  >Destacados</option>
';

if ($id_categ == 3 ) {
	$temp_categ_select = 'selected';
}
else{
	$temp_categ_select = '';
}

$html_prod_edit_categorias .= 
'
	<option  value="3" '.$temp_categ_select.'  >Promoción</option>
';
























//Segun el id de categoria se preparara el query para mostrar productos

switch ($id_categ) {
	//Todos
	case 1:
		$sql_2 = 'SELECT * FROM ti_productos
		WHERE id_web 	= '.	$id_web			.' 
		AND id_cliente 	= '.	$id_cliente		.'

		ORDER BY titulo ASC
		';
	break;

	//Destacados
	case 2:
		$sql_2 = 'SELECT * FROM ti_productos
		WHERE id_web 	= '.	$id_web			.' 
		AND id_cliente 	= '.	$id_cliente		.'
		AND tipo 	= "destacado"

		ORDER BY titulo ASC
		';
	break;

	//Promocion
	case 3:
		$sql_2 = 'SELECT * FROM ti_productos
		WHERE id_web 	= '.	$id_web			.' 
		AND id_cliente 	= '.	$id_cliente		.'
		AND tipo 	= "promocion"


		ORDER BY titulo ASC
		';
	break;
	
	//Seleccionado
	default:
		$sql_2 = 'SELECT * FROM ti_productos
		WHERE id_web 	= '.	$id_web			.' 
		AND id_cliente 	= '.	$id_cliente		.'
		AND id_categ 	= '.	$id_categ	.'


		ORDER BY titulo ASC
		';
	break;
}





$result_prod_edit = $db_conection->prepare($sql_2);

// Variables
$html_prod_edit_prods = '';

$href_img_principal = '';

// Ejecuto query
if ($result_prod_edit->execute()) {

	while($fila_prods_edit = $result_prod_edit->fetch(PDO::FETCH_ASSOC)){



		// SWITCH
		// Verifico si la categoria está activa
		// Para visualizar su estado en el switch
		if ($fila_prods_edit['stock']==1) {
			$temp_switch_active = 'checked="checked"';
		}else{
			$temp_switch_active = '';
		}


		// Funcion
		// Verifico si hay imagen_principal cargada 
		if(!empty($fila_prods_edit['img_principal'])){
			$href_img_principal = 
			'
			<img data-src="../../TI/images/productos/id_web_'.$id_web.'/'.$fila_prods_edit['img_principal'].'" alt="" class="prod_edit_item_lista_img lazyload">
			';
		}else{
			$href_img_principal = 
			'
			<img data-src="../../cpanel/images/icon/cpanel/sumar_img.png" alt="" class="prod_edit_item_lista_img lazyload" style="border:1px solid #f1f1f1">
			';
		}




		$html_prod_edit_prods .= 
		'
		<div class="col s12 producto_fila_cont">

			<!-- sector 1 -->
			<a class="col s6 m7 index_cont_lista a_re" href="productos_individual_edit.php'.$codigo_id_web.'&id_prod='.$fila_prods_edit['id'].'">
				
				<div class="col s2 m3 prod_edit_item_lista_img_cont">
					'.$href_img_principal.'
				</div>

				<div class="col s10 m9 index_item_lista" id="prod_edit_item_txt">		
					<span >
						'.$fila_prods_edit['titulo'].'				
					</span>
				</div>

			</a>

			<!-- sector 2 -->
	        <div class="input-field col s2 m2 index_input_precio" >
	        	$
	        	<input class="index_input_editlea input_precio" type="text" value="'.$fila_prods_edit['precio'].'">

	        	'.$html_inputs_web_cliente.'
				    	<input type="hidden" id="id_producto" 	name="id_producto"	value="'.$fila_prods_edit['id'].'" >
				    	
	        </div>


			<!-- sector 3 -->
	        <div class="col s2 m2 index_cont_lista btn_actualizar_precio" id="prod_edit_actualizar_cont">
				
				<div class="col s12  m12 l12 index_item_lista" id="prod_edit_actualizar">		
					<span >
						Actualizar	<br> precio				
					</span>
				</div>

			</div>

			<!-- sector 4 -->
			<div class="col s2 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="label_checkbox">
				    	
				    	'.$html_inputs_web_cliente.'
				    	<input type="hidden" id="id_producto" 	name="id_producto"	value="'.$fila_prods_edit['id'].'" >
				    	<input type="checkbox" id="switch_checkbox" '.$temp_switch_active.' >
				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>

		</div>
		';
			
	}
}

















































?>