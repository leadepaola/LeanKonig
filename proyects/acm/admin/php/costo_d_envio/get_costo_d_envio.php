<?php 




	

$sql_ = 'SELECT * FROM ti_costo_d_envio 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';



$result_ = $db_conection->prepare($sql_);

// Variables
$html_costo_d_envio = '';

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







		$html_costo_d_envio .= 
		'
		<div class="col s12 costo_envio_fila_cont">

			<div class="input-field col s4 m5">
	        	<input class="index_input_editlea input_nombre_zona" type="text" value="'.$fila_['nombre_zona'].'">
	        </div>


	        <div class="col s1"></div>


	        <div class="input-field col s2 m3 index_input_precio" >

	        	<span class="signo_peso_cont">
	        	$
	        	</span>

	        	<input class="index_input_editlea font_size_15 input_precio" type="text" value="'.$fila_['precio'].'">

	        </div>


	        <div class="col s3 m2 index_cont_lista ">
				
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
					<label class="label_checkbox" >
				    	
				    	'.$html_inputs_web_cliente.'
				    	<input type="hidden" id="id_costo_d_envio" 	name="id_costo_d_envio"	value="'.$fila_['id'].'">
				    	<!--
				    	<input type="hidden" id="nombre_zona" 		name="nombre_zona"		value="'.$fila_['nombre_zona'].'">
				    	<input type="hidden" id="data_precio" 		name="data_precio"		value="'.$fila_['precio'].'">
				    	-->
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