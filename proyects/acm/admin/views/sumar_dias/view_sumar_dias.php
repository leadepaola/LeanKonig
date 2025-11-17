<?php 

$a_mensual 		= 'href="sumar_dias_pago.php'.$codigo_id_web.'&tipo_pago=mensual"';
$a_semestral 	= 'href="sumar_dias_pago.php'.$codigo_id_web.'&tipo_pago=semestral"';
$a_anual 		= 'href="sumar_dias_pago.php'.$codigo_id_web.'&tipo_pago=anual"';



?>







<!-- Lista de productos de pedido -->
<div class="index_filas_cont max_w_500" >

	<div class="row">

		

		<!-- 
		#    # ###### #    #  ####  #    #   ##   #      
		##  ## #      ##   # #      #    #  #  #  #      
		# ## # #####  # #  #  ####  #    # #    # #      
		#    # #      #  # #      # #    # ###### #      
		#    # #      #   ## #    # #    # #    # #      
		#    # ###### #    #  ####   ####  #    # ######
		-->

		<a class="col s11 m12 index_cont_lista a_re" <?php echo $a_mensual ?> >
			
			<!-- Sector 1 -->
			<span class="col s12" id="sumar_dias_fila_sector_1_cont">

				<div class="col s1 index_item_lista" id="sumar_dias_icon_cont">	
					<div class="contacts-modern-icon fl-bigmug-line-shopping198 " id="sumar_dias_icon"></div>
				</div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_tit_cont">	
					
					<span class="sumar_dias_tit">
						Mensual					
					</span>

				</div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						Sumar 30 días					
					</span>

				</div>

			</span>

			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						No hay descuentos disponibles para el pago mensual					
					</span>

				</div>

			</span>

			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 4 -->
			<span class="col s12" id="sumar_dias_fila_sector_3_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio">
						$<?php echo $maths_monto_mensual ?> AR					
					</span>

				</div>

			</span>

		</a>






		<!-- 
		 ####  ###### #    # ######  ####  ##### #####    ##   #      
		#      #      ##  ## #      #        #   #    #  #  #  #      
		 ####  #####  # ## # #####   ####    #   #    # #    # #      
		     # #      #    # #           #   #   #####  ###### #      
		#    # #      #    # #      #    #   #   #   #  #    # #      
		 ####  ###### #    # ######  ####    #   #    # #    # ###### 
		-->

		<a class="col s11 m12 index_cont_lista a_re" <?php echo $a_semestral ?> >
			
			<!-- Sector 1 -->
			<span class="col s12" id="sumar_dias_fila_sector_1_cont">

				<div class="col s1 index_item_lista" id="sumar_dias_icon_cont">	
					<div class="contacts-modern-icon fl-bigmug-line-shopping198 " id="sumar_dias_icon"></div>
				</div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_tit_cont">	
					
					<span class="sumar_dias_tit">
						Semestral					
					</span>

				</div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						Sumar 180 días					
					</span>

				</div>

			</span>

			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="restaltado_descuento">10% de descuento</span> 
					en el total											
					

				</div>

			</span>

			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 4 -->
			<span class="col s12" id="sumar_dias_fila_sector_3_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio">
						$<?php echo $maths_monto_descuento_semestral ?> AR					
					</span>

					<span class="sumar_dias_precio_tachado">
						$<?php echo $maths_monto_semestral ?> AR					
					</span>

				</div>

			</span>

		</a>







		<!-- 
		  ##   #    # #    #   ##   #      
		 #  #  ##   # #    #  #  #  #      
		#    # # #  # #    # #    # #      
		###### #  # # #    # ###### #      
		#    # #   ## #    # #    # #      
		#    # #    #  ####  #    # ######
		-->
		
		<a class="col s11 m12 index_cont_lista a_re" <?php echo $a_anual ?> >
			
			<!-- Sector 1 -->
			<span class="col s12" id="sumar_dias_fila_sector_1_cont">

				<div class="col s1 index_item_lista" id="sumar_dias_icon_cont">	
					<div class="contacts-modern-icon fl-bigmug-line-shopping198 " id="sumar_dias_icon"></div>
				</div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_tit_cont">	
					
					<span class="sumar_dias_tit">
						Anual					
					</span>

				</div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						Sumar 365 días					
					</span>

				</div>

			</span>

			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="restaltado_descuento">20% de descuento</span> 
					en el total											
					

				</div>

			</span>

			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 4 -->
			<span class="col s12" id="sumar_dias_fila_sector_3_cont">

				<div class="col s1"></div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio">
						$<?php echo $maths_monto_descuento_anual ?> AR					
					</span>

					<span class="sumar_dias_precio_tachado">
						$<?php echo $maths_monto_anual ?> AR					
					</span>

				</div>

			</span>

		</a>




	</div>

</div>