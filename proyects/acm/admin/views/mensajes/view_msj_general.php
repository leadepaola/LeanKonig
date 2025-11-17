



<!--
 ####  ###### #      ######  ####  ##### 
#      #      #      #      #    #   #   
 ####  #####  #      #####  #        #   
     # #      #      #      #        #   
#    # #      #      #      #    #   #   
 ####  ###### ###### ######  ####    #  

###### # #      ##### #####   ####  
#      # #        #   #    # #    # 
#####  # #        #   #    # #    # 
#      # #        #   #####  #    # 
#      # #        #   #   #  #    # 
#      # ######   #   #    #  #### 

#    # ###### #    #  ####    ##        # ######  ####  
##  ## #      ##   # #       #  #       # #      #      
# ## # #####  # #  #  ####  #    #      # #####   ####  
#    # #      #  # #      # ######      # #           # 
#    # #      #   ## #    # #    # #    # #      #    # 
#    # ###### #    #  ####  #    #  ####  ######  ####   
-->

<!-- Estado del pedido -->
<div class="row msjs_filas_cont">

	<?php echo $html_msj_general_inputs_select ?>

	<select class="col s12  nice-select wide msjs_select">


	    <option value="" disabled selected>Filtrar mensajes</option>
	    <!-- 
			0 sin leer
			1 leido
	    -->
	    <option  value="0" <?php echo $sinleer_selec ?> >Sin leer	</option>
	    <option  value="1" <?php echo $leido_selec ?> 	>Leídos		</option>
	    <option  value="2"  							>Todos		</option>
	</select>
</div>









<!--
#      #  ####  #####   ##   
#      # #        #    #  #  
#      #  ####    #   #    # 
#      #      #   #   ###### 
#      # #    #   #   #    # 
###### #  ####    #   #    # 

#    # ###### #    #  ####    ##        # ######  ####  
##  ## #      ##   # #       #  #       # #      #      
# ## # #####  # #  #  ####  #    #      # #####   ####  
#    # #      #  # #      # ######      # #           # 
#    # #      #   ## #    # #    # #    # #      #    # 
#    # ###### #    #  ####  #    #  ####  ######  ####   
-->

<!-- Lista de productos de pedido -->
<div class="msjs_filas_cont" >

	<div class="row">


		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Lista de mensajes
		</div>

		<?php echo $html_msj_general_lista ?>

		<!-- Filas --
		<a class="col s12 index_cont_lista" href="mensaje_individual.php?id_web=47&id_cliente=1&id_mensaje=1">
			
			<div class="col s3  m3 l3 index_item_lista">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/avatar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<span class="msj_item_txt">
					Leandro					
				</span>
			</div>

			<div class="col s4  m3 l3 index_item_lista" >		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/phone.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					47513377					
				</span>
			</div>

			<div class="col s3 m2 l2 index_item_lista" id="msj_fila_item_hora">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/time.png" class="index_iteam_icon_img" alt=""> 
				</span>
				21:50	
			</div>

			<div class="col s3  m2 l2 index_item_lista" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/calendar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					30/09/20					
				</span>
			</div>

			<!- Estado view --
			<div class="col s2 m2  index_item_estado_cont">
				<div class="index_item_estado_circle_cont">
					<span class="index_item_estado_span_circle_cont">
						<div class="index_item_estado_circle circle_sinleer"></div>
					</span>
					Sin leer			
				</div>
			</div>
			
		</a> 
		-->







	</div>

</div>











<!--
#####    ##    ####  # #    #   ##    ####  #  ####  #    # 
#    #  #  #  #    # # ##   #  #  #  #    # # #    # ##   # 
#    # #    # #      # # #  # #    # #      # #    # # #  # 
#####  ###### #  ### # #  # # ###### #      # #    # #  # # 
#      #    # #    # # #   ## #    # #    # # #    # #   ## 
#      #    #  ####  # #    # #    #  ####  #  ####  #    # 
-->




<!-- Paginacion --
<div class="index_paginacion_cont">
	<ul class="pagination">
		
		<-- Flecha izquierda --
		<li class="disabled">
			<a href="#!">
				<div class="contacts-modern-icon fl-bigmug-line-left148" id="pagination_icon"></div>
			</a>
		</li>
		
		<span class="index_paginas_cont">
			<-- Paginas --
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