<?php 

// COPIÉ LITERAL DE php/pedidos/get_pedidos_general.php




//Tomo variables de filtros
$estado 		= $_GET['filtro_estado'];
$id_zona 		= $_GET['filtro_zona'];

// variables de estado 
$sel_nue 	= '';
$sel_prep1 	= '';
$sel_prep2 	= '';
$sel_car 	= '';
$sel_enr 	= '';
$sel_ent 	= '';
$sel_can 	= '';










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


// 1 PARTE

$sql_pedidos_datos_usuarios = 'SELECT * 

FROM 		ti_pedidos_datos_usuarios 	user
INNER JOIN 	ti_pedidos_facturacion 		Fact ON user.id_pedido = Fact.id_pedido

WHERE user.id_web 		= '.	$id_web			.' 
AND user.id_cliente 	= '.	$id_cliente		.'
';






// Verifico si hay filtro estado seleccionado
if ($estado!='0') {

	//Sumo where, and al query
	$sql_pedidos_datos_usuarios .= 'AND Fact.estado = "'.$estado.'"';

	//marco el estado seleccionado en el select
	switch ($estado) {
		
		case 'nuevo':
			$sel_nue = 'selected';
		break;

		case 'preparacion':
			$sel_prep1 = 'selected';
		break;

		case 'preparado':
			$sel_prep2 = 'selected';
		break;

		case 'cargado':
			$sel_car = 'selected';
		break;

		case 'en_ruta':
			$sel_enr = 'selected';
		break;

		case 'entregado':
			$sel_ent = 'selected';
		break;

		case 'cancelado':
			$sel_can = 'selected';
		break;
		
	}

}







// 2 PARTE
// Traigo las zonas de entregas correspondiente al cliente

$sql_zona_entrega = 'SELECT * FROM ti_costo_d_envio 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';





$result_zona_entrega = $db_conection->prepare($sql_zona_entrega);

// Variables
$html_zonas_d_entrega = '';
$temp_zonas_selc = '';

// Ejecuto query
if ($result_zona_entrega->execute()) {

	while($fila_zona_entr = $result_zona_entrega->fetch(PDO::FETCH_ASSOC)){

		// Verifico si la Zona esta selecionada para filtrar
		if ($id_zona==$fila_zona_entr['id'] && $fila_zona_entr['id']!='0') {
			$temp_zonas_selc = 'selected';
			$sql_pedidos_datos_usuarios .= 'AND user.id_zona = "'.$id_zona.'"';
		}
		else{
			$temp_zonas_selc = '';
		}

		// Imprimo la zona
		$html_zonas_d_entrega .= 
		'
	    <option value="'.$fila_zona_entr['id'].'"  '.$temp_zonas_selc.' >'.$fila_zona_entr['nombre_zona'].'</option>
		';
			
	}
}









// 3 PARTE
// Termino de crear query

$sql_pedidos_datos_usuarios .= 'ORDER BY user.id_pedido DESC';



// Fin de creacion de cosnulta sql --> 




































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


$result_pedido_datos_usuarios = $db_conection->prepare($sql_pedidos_datos_usuarios);

// Variable
$html_lista_pedidos_general = '';

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
if ($result_pedido_datos_usuarios->execute()) {


	while($fila_dat_p = $result_pedido_datos_usuarios->fetch(PDO::FETCH_ASSOC)){


		// Verifico el estado del pedido 
		// Para su correcta impresion en la Parte 2 - Select
		$select_opt_nuevo 		= '';
		$select_opt_preparacion = '';
		$select_opt_preparado 	= '';
		$select_opt_cargado 	= '';
		$select_opt_enruta 		= '';
		$select_opt_entregado 	= '';
		$select_opt_cancelado 	= '';

		switch ($fila_dat_p['estado']) {

			case 'nuevo':
				$estado_css = 'nuevo';
				$estado_txt = 'Nuevo';

				$select_opt_nuevo = 'selected';
			break;

			case 'preparacion':
				$estado_css = 'preparacion';
				$estado_txt = 'Preparación';

				$select_opt_preparacion = 'selected';
			break;
			
			case 'preparado':
				$estado_css = 'preparado';
				$estado_txt = 'Preparado';

				$select_opt_preparado = 'selected';
			break;
			
			case 'cargado':
				$estado_css = 'cargado';
				$estado_txt = 'Cargado';

				$select_opt_cargado = 'selected';
			break;

			case 'en_ruta':
				$estado_css = 'enruta';
				$estado_txt = 'En ruta';

				$select_opt_enruta = 'selected';
			break;

			case 'entregado':
				$estado_css = 'entregado';
				$estado_txt = 'Entregado';

				$select_opt_entregado = 'selected';
			break;

			case 'cancelado':
				$estado_css = 'cancelado';
				$estado_txt = 'Cancelado';

				$select_opt_cancelado = 'selected';
			break;
		}



		// Realizo query segun id de pedido para contar cantidad de items

		$sql_cant_items = 'SELECT count(1) FROM ti_pedidos_lista_productos 

		WHERE id_web 	= '.	$id_web						.' 
		AND id_cliente 	= '.	$id_cliente					.'
		AND id_pedido 	= '.	$fila_dat_p['id_pedido']	.'
		';
		$result_cant_items = $db_conection->prepare($sql_cant_items);

		// Ejecuto query
		if ($result_cant_items->execute()) {

			//echo  $result_cant_items->fetchColumn();
			$temp_cant_items = $result_cant_items->fetchColumn();
		}






		// Verifico si el cliente comentó el pedido del usuario
		$comentario_vacio_o_no = '';
		if(empty($fila_dat_p['coment_cliente'])){
			$comentario_vacio_o_no = 'id="list_p_comentario"';
		}else{
			$comentario_vacio_o_no = 'id="list_p_comentario_active"';
		}




		$contador++;

		$html_lista_pedidos_general .= 
		'
		<div class="col s10 m11 l11 pedido_unidividual" id="lista_parte_datos"  >
		<!-- <div class="col s10 m11 l11 pedido_unidividual" id="lista_parte_datos"  href="pedido_individual.php'.$codigo_id_web.'&id_pedido='.$fila_dat_p['id_pedido'].'">-->

			<span class="col s1 view_indi_radio_cancel">

		      <input name="ids_pedidos[]" type="checkbox" id="radio_'.$fila_dat_p['id_pedido'].'_1" value="'.$fila_dat_p['id_pedido'].'" />
		      <label for="radio_'.$fila_dat_p['id_pedido'].'_1" ></label> 

		      <input type="hidden" id="id_pedido" 		value="'.$fila_dat_p['id_pedido'].'" 	style="display:none">
		      <input type="hidden" id="id_web" 			value="'.$fila_dat_p['id_web'].'" 		style="display:none">
		      <input type="hidden" id="id_cliente" 		value="'.$fila_dat_p['id_cliente'].'" 	style="display:none"> 

		    </span>

			<div class="col s0  m0 l1 list_p" id="list_p_id_pedido">		ID '.$fila_dat_p['id_pedido'].'				</div>
			<div class="col s3  m2 l2 list_p" id="list_p_name_user">		'.$fila_dat_p['name_user'].'				</div>
			<div class="col s8 	m3 l3 list_p" id="list_p_direccion">		'.$fila_dat_p['direccion'].' '.$fila_dat_p['altura'].'	, '.$fila_dat_p['localidad'].'	</div>
			<div class="col s0  m1 l1 list_p" id="list_p_item">				'.$temp_cant_items.' items 			</div>
			<div class="col s0  m2 l1 list_p" id="list_p_precio_tot">		$'.$fila_dat_p['total'].'			</div>

			<div class="col s0  m2 l2 list_p" id="list_p_fecha">			'.$fila_dat_p['fecha'].'			</div>
			<div class="col s0  m1 l1 list_p" id="list_p_hora">				'.$fila_dat_p['hora'].'				</div>
		</div> 

		<!-- Parte 2  -->
		<div class="col s2 m1 l1 pedido_unidividual">


			<!-- Estado view -->
			<div class="col s12 m12 l12 list_p estado_circle" id="list_p_estado_view">
				<span id="lista_cont_circle"><div class="lista_p_circle circle_'.$estado_css.'"></div></span>
				'.$estado_txt.'			
		
			</div>
		</div>




		';


	}

}






















?>