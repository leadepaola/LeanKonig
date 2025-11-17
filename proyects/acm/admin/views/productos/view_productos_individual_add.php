


<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="" >

	<div class="row">

		<span class="col s12 m5">
			<select class="nice-select wide max_w_700 tipo transition">
				<option value="" selected>Tipo de publicación</option>
				<option  value="normal">Normal</option>
				<option  value="destacado">Destacada</option>
				<option  value="promocion">Promoción</option>
			</select>
		</span>

		<span class="col m2"></span>

		<span class="col s12 m5">
			<select class="nice-select wide max_w_700 categoria transition">
				<option value="" selected>Categoría</option>
				<?php echo $html_prod_add_categorias ?>
				<!--
				<option  value="1">Frutas</option>
				<option  value="2">Verduras</option>
				<option  value="3">Agroecológico</option>
				<option  value="4">Dietética</option>
				<option  value="5">Almacén</option>
				<option  value="6">Bandejas</option>
				<option  value="7">Huevos</option>
				-->			
			</select>
		</span>


	</div>	
</div>


<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="prod_indi_edit_fila_princ_cont" >

	<div class="row">





		<!-- Inputs id_web y id_cliente para funciones js-->
		<?php echo $html_inputs_web_cliente ?>
		<input type="hidden" id="dominio" 	name="dominio"	<?php echo 'value="'.$dominio.'"' ?> >


		<!--
		# #    #   ##    ####  ######  ####  
		# ##  ##  #  #  #    # #      #      
		# # ## # #    # #      #####   ####  
		# #    # ###### #  ### #           # 
		# #    # #    # #    # #      #    # 
		# #    # #    #  ####  ######  ####  
		-->

		<span class="col s12 m5">
			

			<!-- img principal -->
			<div class="col s12 img_principal_general_cont">
				<div class="prod_indi_edit_item_lista_img_cont" >

					<div id="img_principal_cont" >
						<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img" id="prod_indi_edit_item_lista_img_princ">
					</div>

					<form action="" id="form_img_princ" class="index_form_invi_btn_cargar_img_cont">
					    <div class="index_form_invi_btn_cargar_img">

					      <input type="file" enctype="multipart/form-data" id="img_form_princ" name="img_form_princ" class="index_form_invi_input_img">

					      <?php echo $html_inputs_web_cliente ?>

					    </div>
					</form>


				</div>

			</div>




			<!-- imgs secundarias -->
			<span class="col s12 prod_indi_edit_imgs_sec_cont">


				<!-- img secundaria 1 -->

				<span class="col s4" id="img_sec_gral_cont">

					<div class="col s12 img_sec_gral_cont_2" id="img_sec_1">
						<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
					</div>

					<form action="" id="form_img_sec_1" class="index_form_invi_btn_cargar_img_cont">
					    <div class="index_form_invi_btn_cargar_img">

					      <input type="file" enctype="multipart/form-data" id="img_form_sec_1" name="img_form_sec_1" class="index_form_invi_input_img">

					      <?php echo $html_inputs_web_cliente ?>

					    </div>
					</form>

				</span>



				<!--
				<div class="prod_indi_edit_separador_img_sec"></div>
				-->
				
				<!-- img secundaria 2 -->

				<span class="col s4" id="img_sec_gral_cont">

					<div class="col s12 img_sec_gral_cont_2" id="img_sec_2">
						<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
					</div>

					<form action="" id="form_img_sec_2" class="index_form_invi_btn_cargar_img_cont">
					    <div class="index_form_invi_btn_cargar_img">

					      <input type="file" enctype="multipart/form-data" id="img_form_sec_2" name="img_form_sec_2" class="index_form_invi_input_img">

					      <?php echo $html_inputs_web_cliente ?>

					    </div>
					</form>

				</span>

				<!--
				<div class="col s3" >
					<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
				</div>
				-->


				<!--
				<div class="prod_indi_edit_separador_img_sec"></div>
				-->


				<!-- img secundaria 3 -->
				<span class="col s4" id="img_sec_gral_cont">

					<div class="col s12 img_sec_gral_cont_2" id="img_sec_3">
						<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
					</div>

					<form action="" id="form_img_sec_3" class="index_form_invi_btn_cargar_img_cont">
					    <div class="index_form_invi_btn_cargar_img">

					      <input type="file" enctype="multipart/form-data" id="img_form_sec_3" name="img_form_sec_3" class="index_form_invi_input_img">

					      <?php echo $html_inputs_web_cliente ?>

					    </div>
					</form>

				</span>
				
				<!--
				<div class="col s3" >
					<img src="../images/icon/cpanel/sumar_img.png" alt="" class="prod_indi_edit_item_lista_img_sec">
				</div>
				-->

		
			</span>
				

			<div class="col s12 index_dimension_recomend ">Dimensión recomendada: 1400x1200</div>


		</span>





		<span class="col m2"></span>

		





		<!--
		#####    ##   #####   ##   
		#    #  #  #    #    #  #  
		#    # #    #   #   #    # 
		#    # ######   #   ###### 
		#    # #    #   #   #    # 
		#####  #    #   #   #    # 
		-->
		
		<span class="col s12 m5 prod_indi_edit_lateral_derecho_cont ">

			<!-- Titulo -->
	        <div class="col s12 ">
	        	<textarea class="prod_indi_edit_textarea titulo transition" id="prod_indi_edit_textarea_tit" placeholder="Escribe aquí el titulo del producto"></textarea>
	        </div>

			<!-- Tipo de unidad -->
			<span class="col s12" id="prod_indi_add_tipo_unidad_cont">

				<div class="col s1" id="prod_indi_add_tipo_unidad_num">1</div>

		        <select class="nice-select col s11 unidad transition" >
					<option value="" selected>Tipo de medida</option>
					<option  value="Unidad">Unidad</option>
					<option  value="Kilo">Kilo</option>
				</select>

			</span>

			<!-- Precio -->
	        <div class="col s12 " id="prod_indi_edit_precio_cont">
	        	$

	        	<input id="index_input_editlea" class="precio transition" type="text" placeholder="Escribe el precio" >
	        	<!--
	        	<input type="text" class="precio" id="prod_indi_edit_precio" placeholder="Escribe el precio" >
				-->


	        </div>








	        <!-- Linea separadora -->
	        <span class="col s12 prod_indi_edit_linea_separadora prod_indi_color_gris"></span>












	        <!-- Precio titulo -->
	        <span class="col s12" id="prod_indi_edit_descipcion_cont">

		        <!-- Precio TItulo -->
	        	<div class=" prod_indi_edit_tit_descipcion_general txt_inactivo" id="prod_indi_tit_tach_y_off">
		        	Precio tachado y %OFF <span class="txt_inactivo">(opcional)</span> 
		        </div>
		        <div id="prod_indi_flechita_seleccion" style="transform: rotate(45deg);"></div>
	        </span>




	        <!-- Precio Tachado -->
	        <div class="col s12 " id="prod_indi_edit_precio_tach_cont" style="display: none;" >
	        	$
	        	<!--
	        	<input type="text" id="prod_indi_edit_precio" class="precio transition" <?php echo 'value="'.$fila_producto['precio'].'"' ?> >
				-->
	        	<input id="prod_indi_edit_precio_tach" class="col s9 precio_tach_txt transition tach" type="text" placeholder="Escribe el precio tachado"  >


	        	<!-- switch en fila -->
				<div class="col s3 m3  index_item_switch">
					<!-- Switch -->
					<div class="switch ">
						<label>
					    	
					    	<input type="checkbox" class="precio_tach_checkbox"  >
					    	<span class="lever"></span>
					    	
						</label>
					</div>
				</div>

	        </div>





	        <!-- Txt OFF -->
	        <div class="col s12 " id="prod_indi_edit_txt_OFF_cont" style="display: none;" >
	        	
	        	<!--
	        	<input type="text" id="prod_indi_edit_precio" class="precio transition" <?php echo 'value="'.$fila_producto['precio'].'"' ?> >
				-->
	        	<input id="prod_indi_edit_txt_OFF" class="col s2 txt_off_txt transition" type="text" placeholder="" >

	        	%OFF
	        	<!-- switch en fila -->
				<div class="col s10 m10  index_item_switch">
					<!-- Switch -->
					<div class="switch ">
						<label>
					    	
					    	<input type="checkbox" class="txt_off_checkbox" >
					    	<span class="lever"></span>
					    	
						</label>
					</div>
				</div>

	        </div>









			<!-- Linea separadora -->
	        <span class="col s12 prod_indi_edit_linea_separadora"></span>


			<!-- Descripcion -->
	        <span class="col s12" id="prod_indi_edit_descipcion_cont">
	        	<div class="col s9 prod_indi_edit_tit_descipcion_general txt_inactivo">
		        	Descipcion
		        </div>


		        <!-- switch en fila -->
				<div class="col s3 m3  index_item_switch">
					<!-- Switch -->
					<div class="switch ">
						<label  >
					    	
					    	<input type="checkbox" class="descripcion_checkbox" >
					    	<span class="lever"></span>
					    	
						</label>
					</div>
				</div>
	        </span>
			
			<span class="col s12">
		        <textarea class="prod_indi_edit_textarea descripcion" id="prod_indi_edit_descipcion_textarea" 
		        placeholder="Escribe aquí una descripción del producto"></textarea>
	        </span>



			<!-- Linea separadora -->
	        <span class="col s12 prod_indi_edit_linea_separadora"></span>













	        <!--
	        #####   ##   #      #      ###### 
			  #    #  #  #      #      #      
			  #   #    # #      #      #####  
			  #   ###### #      #      #      
			  #   #    # #      #      #      
			  #   #    # ###### ###### ######
			-->

	        <span class="col s12" id="prod_indi_edit_descipcion_cont">

		        <!-- Talle TItulo -->
	        	<div class="col s9 prod_indi_edit_tit_descipcion_general txt_inactivo">
		        	Talle
		        </div>


		        <!-- switch en fila -->
				<div class="col s3 m3  index_item_switch">
					<!-- Switch -->
					<div class="switch ">
						<label>
					    	
					    	<input type="checkbox" disabled  >
					    	<span class="lever"></span>
					    	
						</label>
					</div>
				</div>

	        </span>

		        <!-- Talle Circulos -->
		        <div class="col s12 prod_indi_edit_talle_circles_cont ">

			        <div class=" perfil_p_talles">
				      <input name="talle_confir" type="radio" id="talle_1" value="37" disabled="disabled"  />
				      <label for="talle_1" class="txt_inactivo">37</label>
				    </div>

				    <div class=" perfil_p_talles">
				      <input name="talle_confir" type="radio" id="talle_2" value="38" disabled="disabled"  />
				      <label for="talle_2" class="txt_inactivo">39</label>
				    </div>

				    <div class=" perfil_p_talles">
				      <input name="talle_confir" type="radio" id="talle_3" value="37" disabled="disabled"  />
				      <label for="talle_3" class="txt_inactivo">40</label>
				    </div>

				    <div class=" perfil_p_talles">
				      <input name="talle_confir" type="radio" id="talle_4" value="38" disabled="disabled"  />
				      <label for="talle_4" class="txt_inactivo">41</label>
				    </div>

			    </div>


			    <!-- Filas -->
			    <div class="col s12 prod_indi_edit_talle_add_cont">

			        <div class="col s4 " id="prod_indi_edit_input_add_talle_cont">
			        	<input type="text" id="prod_indi_edit_input_add_talle"  placeholder="Agregar talle" >
			        </div>


			        <div class="col s3 m2 index_cont_lista " id="index_item_img_add_cont">
						<img src="../images/icon/sumar_32.png" id="index_item_img_add" alt="" > 
					</div>

				</div>









				<!--
				#####   ####  #####  ####  #    # 
				#    # #    #   #   #    # ##   # 
				#####  #    #   #   #    # # #  # 
				#    # #    #   #   #    # #  # # 
				#    # #    #   #   #    # #   ## 
				#####   ####    #    ####  #    # 
				-->

				<div class="col s12 l12 prod_indi_edit_btn_accion" >
					Crear producto
				</div>














		</span>


	</div>	
</div>