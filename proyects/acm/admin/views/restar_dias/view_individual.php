




<!--
 ####  ###### #      ######  ####  ##### 
#      #      #      #      #    #   #   
 ####  #####  #      #####  #        #   
     # #      #      #      #        #   
#    # #      #      #      #    #   #   
 ####  ###### ###### ######  ####    #  

######  ####  #####   ##   #####   ####  
#      #        #    #  #  #    # #    # 
#####   ####    #   #    # #    # #    # 
#           #   #   ###### #    # #    # 
#      #    #   #   #    # #    # #    # 
######  ####    #   #    # #####   ####

#####  ###### #####  # #####   ####  
#    # #      #    # # #    # #    # 
#    # #####  #    # # #    # #    # 
#####  #      #    # # #    # #    # 
#      #      #    # # #    # #    # 
#      ###### #####  # #####   ####  
-->

<?php echo $html_pedido_indi_select_estado_pedido ?>
<!-- Estado del pedido --
<div class="row max_w_700">
	<select class="col s10 m11 nice-select wide">
	    <option value="" disabled selected>Estado del pedido</option>
	    <option  value="1">Nuevo</option>
	    <option  value="2">Preparación</option>
	    <option  value="3">Preparado</option>
	    <option  value="4">Cargado</option>
	    <option  value="5">En ruta</option>
	    <option  value="6">Entregado</option>
	    <option  value="7">Cancelado</option>
	</select>
	<!- Estado view --
	<div 	class="col s2 m1" id="view_indi_estado_d_pedido">
		<div class="view_indi_cont_circle">
			<span id="view_indi_lista_cont_circle">
				<div class="view_indi_lista_p_circle circle_nuevo"></div>
			</span>
			Nuevo			
		</div>
	</div>
</div>
-->
	



<!--
#####    ##   #####  ####   ####  
#    #  #  #    #   #    # #      
#    # #    #   #   #    #  ####  
#    # ######   #   #    #      # 
#    # #    #   #   #    # #    # 
#####  #    #   #    ####   ####  

#    #  ####  ###### #####  
#    # #      #      #    # 
#    #  ####  #####  #    # 
#    #      # #      #####  
#    # #    # #      #   #  
 ####   ####  ###### #    #
-->


<!-- titulo de seccion-->
<div class="row max_w_700">
	<div class="col s12 view_ind_tit_lista_prod" id="view_indi_tit_en_color"	>
		Datos de comprador
	</div>
</div>

<!-- Datos de usuario - Seccion desplazable  -->
<div class="select_desplazable max_w_700">

	<div class="row">
	
	
		<!-- Icon flecha hacia abajo -->	
		<div class="view_ind_list" id="view_ind_list_icon" >			
			<div class="contacts-modern-icon fl-bigmug-line-down64"></div>
		</div>
			
		
		



		<!-- Piso 1 -->
		<div class="col s12 view_ind_datos_user">
			
			<div class="col s12  m1 l1 view_ind_list view_ind_list_id_name_pc">		ID <?php echo $fila__data_usuario['id_pedido'] ?>		</div>
			<div class="col s12  m3 l3 view_ind_list view_ind_list_id_name_pc">		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/avatar.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['name_user'] ?>
			</div>


			<div class="col s12 m5 l5 view_ind_list" id="view_ind_list_direc">		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/placeholder.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['direccion'].' '.$fila__data_usuario['altura'].', '.$fila__data_usuario['localidad'] ?> 	
			</div>

			<div class="col s12  m1 l1 view_ind_list view_ind_list_id_name_mob">		
				<span class="view_ind_list_data_user_icon_cont"></span>
				ID <?php echo $fila__data_usuario['id_pedido'] ?>
			</div>
			<div class="col s12  m3 l3 view_ind_list view_ind_list_id_name_mob">		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/avatar.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['name_user'] ?>
			</div>


			<div class="col s12  m2 l2 view_ind_list" >
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/dpto.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				Piso <?php echo $fila__data_usuario['piso'] ?> / Dpto <?php echo $fila__data_usuario['dpto'] ?>
			</div>
			

			<div class="col s1  m1 l1"></div>
			
		</div> 

		
		<!-- Piso 2 -->
		<div class="col s12 view_ind_datos_user">
			
			<div class="col s1 view_ind_list" ></div>
			<div class="col s12  m3 l3 view_ind_list" >		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/phone.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['phone'] ?>
			</div>
			<div class="col s12 m5 l5 view_ind_list" >		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/mail.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['email'] ?>
			</div>
			<div class="col s12  m2 l2 view_ind_list" >
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/users.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['social_media'] ?>
			</div>

			<div class="col s1  "></div>

		</div> 


		<!-- Piso 3 -->
		<div class="col s12 view_ind_datos_user">
			
			<div class="col s1 view_ind_list" ></div>
			<div class="col s12  m3 l3 view_ind_list" >		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/disp.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['dispositivo'] ?>
			</div>
			<div class="col s12 m5 l5 view_ind_list" >		
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/time.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['hora'] ?>
			</div>
			<div class="col s12  m2 l2 view_ind_list" >
				<span class="view_ind_list_data_user_icon_cont">
					<img src="../images/icon/cpanel/calendar.png" class="view_ind_data_user_icon" alt=""> 
				</span>
				<?php echo $fila__data_usuario['fecha'] ?>
			</div>

			<div class="col s1"></div>

		</div> 


	</div>

</div>



<!--
 ####   ####  #    # ###### #    # ##### 
#    # #    # ##  ## #      ##   #   #   
#      #    # # ## # #####  # #  #   #   
#      #    # #    # #      #  # #   #   
#    # #    # #    # #      #   ##   #   
 ####   ####  #    # ###### #    #   #  

#    #  ####  ###### #####  
#    # #      #      #    # 
#    #  ####  #####  #    # 
#    #      # #      #####  
#    # #    # #      #   #  
 ####   ####  ###### #    #
-->


<!-- Comentario Usuario -->
<?php echo $html_pedido_indi_comentario ?>
<!--
<div class="view_indi_coment_user_cont max_w_700" style="display: block">
	<div class="row">

		<div class="col s0  m4"></div>

		<div class="col s12 m8 view_indi_coment_txt">
			<span class="view_ind_list_data_user_icon_cont" id="view_ind_icon_coment_cont">
				<img src="../images/icon/cpanel/chat_24.png" class="view_ind_data_user_icon" alt="" id="view_ind_icon_coment"> 
			</span>
			Si tienen rucula, sumame 3 paquetes q no encontre en la web
		</div>

	</div>
</div>
-->


<?php echo $html_metodo_d_pago ?>

<!--
<div class="view_indi_coment_user_cont max_w_700" style="display: block">
	<div class="row">

		<div class="col s0  m4"></div>

		<div class="col s12 m8 view_indi_coment_txt">
			<span class="view_ind_list_data_user_icon_cont" id="view_ind_icon_coment_cont">
				<img src="../images/icon/cpanel/chat_24.png" class="view_ind_data_user_icon" alt="" id="view_ind_icon_coment"> 
			</span>
			Metodo de pago: Efectivo
		</div>

	</div>
</div>
-->

<?php echo $html_fecha_d_entrega ?>


<!--
#      #  ####  #####   ##   
#      # #        #    #  #  
#      #  ####    #   #    # 
#      #      #   #   ###### 
#      # #    #   #   #    # 
###### #  ####    #   #    # 

#####  #####   ####  #####  #    #  ####  #####  ####  
#    # #    # #    # #    # #    # #    #   #   #      
#    # #    # #    # #    # #    # #        #    ####  
#####  #####  #    # #    # #    # #        #        # 
#      #   #  #    # #    # #    # #    #   #   #    # 
#      #    #  ####  #####   ####   ####    #    ####  
-->

<!-- Lista de productos de pedido -->
<div class="view_indi_prod_d_pedido_cont max_w_700">

	<div class="row">


		<!-- titulo de seccion-->
		<div class="col s12 view_ind_tit_lista_prod" id="view_indi_tit_en_color">
			Lista de productos
		</div>





		<?php echo $html_pedido_indi_lista_prods ?>
		<!-- Producto --
		<div class="col s12 view_ind_prod_cont">
			
			<div class="col s1  m1 l1 view_ind_list_prods" >		1.		</div>

			<div class="col s1  m1 l1 view_ind_list_prods" id="view_ind_list_price">		
				2Kg		
			</div>

			<div class="col s5 m5 l5 view_ind_list_prods" id="view_ind_list_nom_prod">		
				Frutillas Agroecológicas	
			</div>

			<div class="col s2  m1 l1 view_ind_list_prods" id="view_ind_list_price_unit">		a $60	</div>

			<div class="col s2  m1 l1 view_ind_list_prods" >		= $180	</div>

			<div class="col s1  m3 l3 view_ind_list_prods" id="view_ind_list_radios">
				<div class="col 4 view_indi_stock_prod_cont" >

					<span class="view_indi_radio_cancel">
				      <input name="group1" type="radio" id="test1" />
				      <label for="test1"></label>
				    </span>
				    
				    <span class="view_indi_radio_incomplet">
				      <input name="group1" type="radio" id="test2" />
				      <label for="test2"></label>
				    </span>

				    <span class="view_indi_radio_completo">
				      <input name="group1" type="radio" id="test3" />
				      <label for="test3"></label>
				    </span>

				</div>

			</div>
			
		</div> 
		-->







	</div>

</div>













<!--
######   ##    ####  ##### #    # #####    ##    ####  #  ####  #    # 
#       #  #  #    #   #   #    # #    #  #  #  #    # # #    # ##   # 
#####  #    # #        #   #    # #    # #    # #      # #    # # #  # 
#      ###### #        #   #    # #####  ###### #      # #    # #  # # 
#      #    # #    #   #   #    # #   #  #    # #    # # #    # #   ## 
#      #    #  ####    #    ####  #    # #    #  ####  #  ####  #    #
-->



<!-- CONTENEDER DE numeros datos -->
<div class="max_w_700" id="view_indi_facturacion_cont">
	

	<!-- nums -->
	<div class="row margin_0">
		
		

		<!-- 1 -->
		<div class="col s0 m7 l7"></div>

		<!-- 2 -->
		<div class="col s12 m5 l5 cart_cont_nums">





			<!-- interno 1 -->
			<div class="col         l0"></div>

			<!-- interno 2 -->
			<div class="col s12 m12 l12 cart_padding_modif">

				
				<div class="col s12 l12 cart_cont_txt_y_nums">
					<div class="col s7 l7 cart_txt_nums">Subtotal</div>
					<div class="col s5 l5 cart_num_nums" id="cart_subtotal">
						$<?php echo $fila__data_facturacion['subtotal'] ?>
					</div>					
				</div>
				
				
				
				<div class="col s12 l12 cart_cont_txt_y_nums">
					<div class="col s7 l7 cart_txt_nums">Descuento <?php echo $fila__data_facturacion['dato_descuento'] ?>%</div>
					<div class="col s5 l5 cart_num_nums" id="cart_descuento">-$<?php echo $fila__data_facturacion['descuento'] ?></div>
				</div>
				
				

				<!-- Costo de envio -->

				
				<div class="col s12 l12 cart_cont_txt_y_nums">
					<div class="col s7 l7 cart_txt_nums">Costo de envío</div>
					<div class="col s5 l5 cart_num_nums">$<?php echo $fila__data_facturacion['costo_d_envio'] ?></div>
					<div class="col s12 l12 cart_txt_nums">(<?php echo $fila__data_usuario['zona'] ?>)</div>
				</div>
								
				
				<div class="col s12 l12 cart_separador_nums"></div>
				

				<div class="col s12 l12 cart_cont_txt_y_nums">
					<div class="col s5 l5 cart_txt_total">TOTAL</div>
					<div class="col s7 l7 cart_num_total" id="cart_total">
						$<?php echo $fila__data_facturacion['total'] ?>
					</div>
				</div>

				<div class="col s12 l12 view_indi_btn_pedido_preparado" id="cart_btn_fin_1">
					Pedido preparado
					<div class="btn_modal modal-trigger" href="#modal1"></div>

					<?php echo $html_pedido_indi_lista_inputs_btn_accion ?>
				
				</div>

			</div>

			<!-- interno 3 -->
			<div class="col         l0"></div>

		</div>






		<!-- 3 -->
		<div class="col s0 m0 l0"></div>

	</div>

	

</div>




