<?php 





// variables de estado 
$sel_nue 	= '';
$sel_prep1 	= '';
$sel_prep2 	= '';
$sel_car 	= '';
$sel_enr 	= '';
$sel_ent 	= '';
$sel_can 	= '';







/*
 ####  #    # ###### #####  #   # 
#    # #    # #      #    #  # #  
#    # #    # #####  #    #   #   
#  # # #    # #      #####    #   
#   #  #    # #      #   #    #   
 ### #  ####  ###### #    #   # 
*/


$sql_restardias = 'SELECT * FROM ti_admin_restardias  
ORDER BY id DESC
';














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

$contador= 0;


$result_restardias = $db_conection->prepare($sql_restardias);

// Variable
$html_lista_restardias_general = '';

$estado_css = '';
$estado_txt = '';

$select_opt_nuevo 		= '';
$select_opt_preparacion = '';
$select_opt_preparado 	= '';
$select_opt_cargado 	= '';
$select_opt_enruta 		= '';
$select_opt_entregado 	= '';
$select_opt_cancelado 	= '';

// Comienza la funcion 
if ($result_restardias->execute()) {


	while($fila_dat_p = $result_restardias->fetch(PDO::FETCH_ASSOC)){


		// Verifico el estado del pedido 
		// Para su correcta impresion en la Parte 2 - Select
		$select_opt_nuevo 		= '';
		$select_opt_preparacion = '';
		$select_opt_preparado 	= '';
		$select_opt_cargado 	= '';
		$select_opt_enruta 		= '';
		$select_opt_entregado 	= '';
		$select_opt_cancelado 	= '';




		$contador++;


		$html_lista_restardias_general .= 
		'
		<div class="col s12 m12 l12 pedido_unidividual" id="lista_parte_datos"  >
			<div class="col s0  m0 l0 list_p" id="list_p_id_pedido">									</div>
			<div class="col s6  m3 l3 list_p" id="list_p_name_user">		'.$fila_dat_p['hora'].'		</div>
			<div class="col s6  m3 l3 list_p" id="list_p_direccion">		'.$fila_dat_p['fecha'].' 	</div>
			<div class="col s0  m0 l0 list_p" id="list_p_item">							 				</div>
			<div class="col s0  m0 l0 list_p" id="list_p_precio_tot">									</div>
		</div> 

		';


		/*
		$html_lista_restardias_general .= 
		'
		<a class="col s7 m9 l9 pedido_unidividual" id="lista_parte_datos"  href="pedido_individual.php'.$codigo_id_web.'&id_pedido='.$fila_dat_p['id_pedido'].'">
			<div class="col s0  m1 l1 list_p" id="list_p_id_pedido">		ID '.$fila_dat_p['id_pedido'].'				</div>
			<div class="col s0  m2 l2 list_p" id="list_p_name_user">		'.$fila_dat_p['name_user'].'				</div>
			<div class="col s12 m5 l5 list_p" id="list_p_direccion">		'.$fila_dat_p['direccion'].' '.$fila_dat_p['altura'].'	, '.$fila_dat_p['localidad'].'	</div>
			<div class="col s0  m0 l1 list_p" id="list_p_item">				'.$temp_cant_items.' items 			</div>
			<div class="col s0  m2 l2 list_p" id="list_p_precio_tot">		$'.$fila_dat_p['total'].'			</div>
		</a> 

		<!-- Parte 2  -->
		<div class="col s5 m3 l3 pedido_unidividual">

			<!-- select -->
			<span id="list_p_estado_input" class="estado_select_cont">

				<input type="hidden" id="id_p" value="'.$fila_dat_p['id_pedido'].'" style="display:none">
				<input type="hidden" id="id_web" value="'.$fila_dat_p['id_web'].'" style="display:none">
				<input type="hidden" id="id_cliente" value="'.$fila_dat_p['id_cliente'].'" style="display:none"> 

				<select class="nice-select col s4 m4 l4 list_p " id="id_estado">
				    <option value="" disabled selected>Estado</option>
				    <option  value="nuevo" '.		$select_opt_nuevo			.'>Nuevo</option>
				    <option  value="preparacion" '.	$select_opt_preparacion		.'>Preparación</option>
				    <option  value="preparado" '.	$select_opt_preparado		.'>Preparado</option>
				    <option  value="cargado" '.		$select_opt_cargado			.'>Cargado</option>
				    <option  value="en_ruta" '.		$select_opt_enruta			.'>En ruta</option>
				    <option  value="entregado" '.	$select_opt_entregado		.'>Entregado</option>
				    <option  value="cancelado" '.	$select_opt_cancelado		.'>Cancelado</option>
				</select>
			</span>

			<!-- Icon comentario -->
			<div class="col s4 m4 l4 list_p contacts-modern-icon fl-bigmug-line-oval34 lista_p_coment" '.$comentario_vacio_o_no.'>

				<input type="hidden" id="ped_coment" 	value="'.$fila_dat_p['coment_cliente'].'" 	style="display:none">

				<input type="hidden" id="ped_direc" 	value="'.$fila_dat_p['direccion'].'" 		style="display:none">
				<input type="hidden" id="ped_altura" 	value="'.$fila_dat_p['altura'].'" 			style="display:none">

				<input type="hidden" id="id_p" 			value="'.$fila_dat_p['id_pedido'].'" 		style="display:none">
				<input type="hidden" id="id_web" 		value="'.$fila_dat_p['id_web'].'" 			style="display:none">
				<input type="hidden" id="id_cliente" 	value="'.$fila_dat_p['id_cliente'].'" 		style="display:none"> 

			</div>
			<!--
			<div class="col s4 m4 l4 list_p contacts-modern-icon fl-bigmug-line-chat51" id="list_p_comentario_active"></div>
			-->

			<!-- Estado view -->
			<div class="col s4 m4 l4 list_p estado_circle" id="list_p_estado_view">
				<span id="lista_cont_circle"><div class="lista_p_circle circle_'.$estado_css.'"></div></span>
				'.$estado_txt.'			
		

			</div>
		</div>

		';
		*/

	}

}






















?>