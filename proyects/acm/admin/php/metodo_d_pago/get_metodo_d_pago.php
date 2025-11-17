<?php 






$sql_ = 'SELECT * FROM ti_metodo_d_pago 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';



$result_ = $db_conection->prepare($sql_);

// Variables
$html_categorias = '';

$temp_switch_active = '';

// Ejecuto query
if ($result_->execute()) {

	while($fila_ = $result_->fetch(PDO::FETCH_ASSOC)){

		//	echo $fila_msj['fila'];
		


		// Verifico si la categoria está activa
		// Para visualizar su estado en el switch
		if ($fila_['active']==1) {
			$temp_switch_active = 'checked="checked"';
		}else{
			$temp_switch_active = '';
		}




		$html_categorias .= 
		'
		<div class="col s12">

			<div class="input-field col s7 m8">
	        	<input class="index_input_editlea" type="text" value="'.$fila_['metodo'].'">
	        </div>

	        <div class="col s0"></div>

	        <div class="col s3 m3 index_cont_lista ">
				
				<div class="col s12  m12 l12 index_item_lista">		
					<span >
						Actualizar					
					</span>
				</div>

			</div>

			<!-- switch en fila -->
			<div class="col s2 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="label_checkbox">
				    	
				    	'.$html_inputs_web_cliente.'
				    	<input type="hidden" id="id_metodo" 	name="id_metodo"	value="'.$fila_['id'].'"	>
				    	<input type="checkbox" id="switch_checkbox" '.$temp_switch_active.'>
				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>
		
		</div>
		';




	}
}












































?>