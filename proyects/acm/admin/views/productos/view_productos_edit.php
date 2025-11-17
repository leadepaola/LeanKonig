


<!-- Filtrar por estado -->
<span class="select_filtro_prods_cont">

	<?php echo $html_inputs_web_cliente ?>

	<select class="nice-select wide max_w_700 select_filtro_prods">
	    <option value="1" selected>Todas las categorías</option>
	    <?php echo $html_prod_edit_categorias ?>
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











<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="view_prod_filas_gral_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Lista de Productos
		</div>



		
		<?php echo $html_prod_edit_prods ?>
		<!-- Filas --
		<div class="col s12 producto_fila_cont">

			<!- sector 1 --
			<a class="col s6 m7 index_cont_lista " href="productos_individual_edit.php?id_web=47&id_cliente=1&num_banner=1">
				
				<div class="col s2 m3 prod_edit_item_lista_img_cont">
					<img src="../../TI/images/productos/id_web_47/img1.png" alt="" class="prod_edit_item_lista_img">
				</div>

				<div class="col s10 m9 index_item_lista" id="prod_edit_item_txt">		
					<span >
						Hummus de Garbanzo x 230Gr - Felices Las Vacas					
					</span>
				</div>

			</a>

			<!- sector 2 --
	        <div class="input-field col s2 m2 index_input_precio" >
	        	$
	        	<input id="zona_precio_1" type="text" class="validate">
	        	<label for="zona_precio_1">190</label>
	        </div>


			<!- sector 3 --
	        <div class="col s2 m2 index_cont_lista" id="prod_edit_actualizar_cont">
				
				<div class="col s12  m12 l12 index_item_lista" id="prod_edit_actualizar">		
					<span >
						Actualizar	<br> precio				
					</span>
				</div>

			</div>

			<!- sector 4 --
			<div class="col s2 m1  index_item_switch">
				<!- Switch --
				<div class="switch ">
					<label>
				    	
				    	<input type="checkbox" checked="checked">
				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>

		</div>
		-->





	</div>
</div>