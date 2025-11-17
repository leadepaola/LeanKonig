<?php  // COPIÉ LITERAL HTML DE views/pedidos/pedidos.general.php				?>




<!-- 
###### # #      ##### #####   ####   ####  
#      # #        #   #    # #    # #      
#####  # #        #   #    # #    #  ####  
#      # #        #   #####  #    #      # 
#      # #        #   #   #  #    # #    # 
#      # ######   #   #    #  ####   ####  
-->

<form class="row max_w_700 ped_gral_filtros_cont" <?php echo 'action="../php/exportar_a_excel/get_pedidos_filtros.php'.$codigo_id_web.'"' ?> method="post">

	<!-- titulo de seccion-->
	<div class="col s12 index_tit_lista">
		Filtros
	</div>

	<div class="col s9">
		
		<span>
			<select class="nice-select wide max_w_700 filtro" name="estado">
			    <option value="0"  selected>Todos los estado</option>
			    <option  value="nuevo" 		 <?php echo $sel_nue 	?> >Nuevos</option>
			    <option  value="preparacion" <?php echo $sel_prep1 	?> >En preparación</option>
			    <option  value="preparado"	 <?php echo $sel_prep2 	?> >Preparados</option>
			    <option  value="cargado"	 <?php echo $sel_car 	?> >Cargados</option>
			    <option  value="en_ruta"	 <?php echo $sel_enr 	?> >En ruta</option>
			    <option  value="entregado"	 <?php echo $sel_ent 	?> >Entregados</option>
			    <option  value="cancelado"	 <?php echo $sel_can 	?> >Cancelados</option>
			</select>
		</span>



		<span>
			<select class="nice-select wide max_w_700 filtro" name="zona"> 
			    <option value="0"  selected>Todas las zonas de entrega</option>
			    <?php echo $html_zonas_d_entrega ?>

			    <!--
			    <option  value="8">CABA</option>
			    <option  value="9">Zona Oeste</option>
			    <option  value="10">Zona Norte</option>
			    <option  value="11">Zona Sur</option>
				-->
			</select>
		</span>

	</div>

	<div class="col s3 ped_gral_btn_filtrar_cont">
		<input class="index_btn_accion a_re" id="ped_gral_btn_filtrar" type="submit" value="Filtrar">
	</div>

</form>








<!-- Lista de pedidos -->
<div class="pedidos_gral_productos_cont max_w_700">
	<div class="row">
		
		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Lista de Pedidos
		</div>




		<?php
			// Funcion
			// Escribo action de la etiqueta form para mejorar lectura
			$metric_contab_action = 'action="../php/exportar_a_excel/export_datos_a_excel.php'.$codigo_id_web.'"'; 
		?>


		<form  <?php echo $metric_contab_action ?> method="POST">


			<!-- #PEDIDO -->
			<?php echo $html_lista_pedidos_general ?>

			<!-- Parte 1  --
			<a class="col s7 m9 l9 pedido_unidividual" id="lista_parte_datos"  href="pedido_individual.php?id_web=47&id_cliente=1&id_pedido=1">
				<div class="col s0  m1 l1 list_p" id="list_p_id_pedido">		ID 1029				</div>
				<div class="col s0  m2 l2 list_p" id="list_p_name_user">		Leandro				</div>
				<div class="col s12 m5 l5 list_p" id="list_p_direccion">		Ing. Wernicke 5904, Ciudad Jardín	</div>
				<div class="col s0  m0 l1 list_p" id="list_p_item">				6 items 			</div>
				<div class="col s0  m2 l2 list_p" id="list_p_precio_tot">		$703 				</div>
				
			</a> 

			<!- Parte 2  --
			<div class="col s5 m3 l3 pedido_unidividual">

				<!- select --
				<span id="list_p_estado_input">
					<select class="nice-select col s4 m4 l4 list_p" >
					    <option value="" disabled selected>Estado</option>
					    <option  value="1">Nuevo</option>
					    <option  value="2">Preparación</option>
					    <option  value="3">Preparado</option>
					    <option  value="4">Cargado</option>
					    <option  value="5">En ruta</option>
					    <option  value="6">Entregado</option>
					    <option  value="7">Cancelado</option>
					</select>
				</span>

				<!- Icon comentario --
				<div class="col s4 m4 l4 list_p contacts-modern-icon fl-bigmug-line-oval34" id="list_p_comentario"></div>
				<!-
				<div class="col s4 m4 l4 list_p contacts-modern-icon fl-bigmug-line-chat51" id="list_p_comentario_active"></div>
				-->

				<!-- Estado view --
				<div class="col s4 m4 l4 list_p" id="list_p_estado_view">
					<span id="lista_cont_circle"><div class="lista_p_circle circle_nuevo"></div></span>
					Nuevo			
				</div>
			</div>
			-->


			<!-- Boton de accion -->
			<div class="met_contabil_btn_accion_cont col s12">
				
				<div class="index_btn_accion">
					Exportar a excel
					<input type="submit" id="met_contabil_submit">
				</div>	
		
			</div>

		</form>




	</div>
</div>
















<!-- Paginacion --
<div class="view_gral_paginacion_cont max_w_700">
	<ul class="pagination">
		
		<!- Flecha izquierda --
		<li class="disabled">
			<a href="#!">
				<div class="contacts-modern-icon fl-bigmug-line-left148" id="pagination_icon"></div>
			</a>
		</li>
		
		<span class="view_gral_paginas_cont">
			<!- Paginas --
			<li class="active">	<a href="#!">1</a></li>
			<li class="">		<a href="#!">2</a></li>
			<li class="">		<a href="#!">3</a></li>
			<li class="">		<a href="#!">4</a></li>
			<li class="">		<a href="#!">5</a></li>
		</span>

		<!- Flecha Derecha --
		<li class="">
			<a href="#!">
				<div class="contacts-modern-icon fl-bigmug-line-right154" id="pagination_icon"></div>
			</a>
		</li>

	</ul>
</div>
-->
