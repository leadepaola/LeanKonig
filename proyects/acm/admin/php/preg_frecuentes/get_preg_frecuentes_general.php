<?php 




	

$sql_ = 'SELECT * FROM ti_ayuda_preg_frecuentes 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';



$result_ = $db_conection->prepare($sql_);

// Variables
$html_preg_frecuentes = '';

$temp_switch_active = '';

// Ejecuto query
if ($result_->execute()) {

	while($fila_ = $result_->fetch(PDO::FETCH_ASSOC)){



		// Verifico si la categoria está activa
		// Para visualizar su estado en el switch
		if ($fila_['active']==1) {
			$temp_switch_active = 'checked="checked"';
		}else{
			$temp_switch_active = '';
		}





		$html_preg_frecuentes .= 
		'
		<a class="col s9 m11 index_cont_lista a_re" href="preguntas_frecuentes_edit.php'.$codigo_id_web.'&id_preg='.$fila_['id'].'">
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					'.$fila_['titulo'].'					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="label_checkbox">
				    	
				    	'.$html_inputs_web_cliente.'
				    	<input type="hidden" id="id_preg_frecu" 	name="id_preg_frecu"	value="'.$fila_['id'].'">
				    	<input type="checkbox" id="switch_checkbox" '.$temp_switch_active.'>
				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>
		';
			
	}
}




$preg_frec_link_a_add = 'href="preguntas_frecuentes_add.php'.$codigo_id_web.'"';













?>