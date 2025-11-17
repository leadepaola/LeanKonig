<?php 




//Tomo variables de filtros
$filtro 		= $_GET['filtro'];


/*
#####  #####  ###### #####    ##   #####   ####  
#    # #    # #      #    #  #  #  #    # #    # 
#    # #    # #####  #    # #    # #    # #    # 
#####  #####  #      #####  ###### #####  #    # 
#      #   #  #      #      #    # #   #  #    # 
#      #    # ###### #      #    # #    #  ####

 ####  #    # ###### #####  #   # 
#    # #    # #      #    #  # #  
#    # #    # #####  #    #   #   
#  # # #    # #      #####    #   
#   #  #    # #      #   #    #   
 ### #  ####  ###### #    #   # 
*/



// FUNCION
// Traigo la lista de mensajes recibidos


// 1 PARTE
$sql_msj_general = 'SELECT * FROM ti_contacto_msj 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'
';


// 2 PARTE
if ($filtro!=2) {
	$sql_msj_general .='AND leido = '.$filtro;
}


// 3 PARTE
$sql_msj_general .= ' ORDER BY id DESC';














$html_msj_general_inputs_select = 
'
<span style="display:none">
	<input type="hidden" id="id_web" 		value="'.$id_web.'"		style="display:none">
	<input type="hidden" id="id_cliente" 	value="'.$id_cliente.'"	style="display:none">
</span>
';




$sinleer_selec = '';
$leido_selec = '';


//marco el estado seleccionado en el select
switch ($filtro) {
	
	case 0:
		$sinleer_selec 	= 'selected';
	break;

	case 1:
		$leido_selec 	= 'selected';
	break;


}





/*
######      # ######  ####  #    # #####  ####  
#           # #      #    # #    #   #   #    # 
#####       # #####  #      #    #   #   #    # 
#           # #      #      #    #   #   #    # 
#      #    # #      #    # #    #   #   #    # 
######  ####  ######  ####   ####    #    #### 

 ####  #    # ###### #####  #   # 
#    # #    # #      #    #  # #  
#    # #    # #####  #    #   #   
#  # # #    # #      #####    #   
#   #  #    # #      #   #    #   
 ### #  ####  ###### #    #   # 
 */




$result_msj_general = $db_conection->prepare($sql_msj_general);

// Variables
$html_msj_general_lista = '';



// Ejecuto query
if ($result_msj_general->execute()) {

	while($fila_msj_gral = $result_msj_general->fetch(PDO::FETCH_ASSOC)){



		// Verifico si el msj ya fue leido para indicar su estado (leido / no leido)
		if ($fila_msj_gral['leido']==0) {
			// 0 = no leido
			$temp_estado_txt = 'Sin leer';
			$temp_estado_css = 'circle_sinleer';
		}else{
			$temp_estado_txt = 'Leído';	
			$temp_estado_css = 'circle_leido';
		}



		$html_msj_general_lista .= 
		'
		<a class="col s12 index_cont_lista a_re" href="mensaje_individual.php'.$codigo_id_web.'&id_mensaje='.$fila_msj_gral['id'].'">
			
			<div class="col s3  m3 l3 index_item_lista">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/avatar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<span class="msj_item_txt">
					'.$fila_msj_gral['nombre'].'					
				</span>
			</div>

			<div class="col s4  m3 l3 index_item_lista" >		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/phone.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					'.$fila_msj_gral['telefono'].'					
				</span>
			</div>

			<div class="col s3 m2 l2 index_item_lista" id="msj_fila_item_hora">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/time.png" class="index_iteam_icon_img" alt=""> 
				</span>
				'.$fila_msj_gral['hora'].'	
			</div>

			<div class="col s3  m2 l2 index_item_lista" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/calendar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					'.$fila_msj_gral['fecha'].'					
				</span>
			</div>

			<!-- Estado view -->
			<div class="col s2 m2  index_item_estado_cont">
				<div class="index_item_estado_circle_cont">
					<span class="index_item_estado_span_circle_cont">
						<div class="index_item_estado_circle '.$temp_estado_css.'"></div>
					</span>
					'.$temp_estado_txt.'			
				</div>
			</div>
			
		</a> 
		';

	}


}




























?>