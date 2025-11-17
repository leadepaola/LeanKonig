




<!-- Agregar nueva categoria -->
<div class="index_filas_cont" >

	<div class="row">



		<!-- Filas -->
		<div class="input-field col s6 m6" >
        	<input id="nueva_zona" type="text" >
        	<label for="nueva_zona">Zona de entrega</label>

        	<input type="hidden" id="dominio" 	name="dominio"	<?php echo 'value="'.$dominio.'"' ?> >
        	<?php echo $html_inputs_web_cliente ?>
        </div>

        <div class="col s1"></div>

        <div class="input-field col s3 m3 index_input_precio" >
        	$
        	<input id="nueva_zona_precio" type="text" >
        	<label for="nueva_zona_precio">Precio</label>
        </div>


        <div class="col s2 m2 index_btn_add" id="index_item_img_add_cont">
			
				<img src="../images/icon/sumar_32.png" class="index_item_img_add" alt="" > 

		</div>


	</div>
</div>




<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="costo_envio_fila_gral_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Lista de zonas de entregas
		</div>



		
		<?php echo $html_costo_d_envio ?>
		<!-- Filas --
		<div class="col s12 costo_envio_fila_cont">

			<div class="input-field col s4 m5">
	        	<input id="zona_envio_1" type="text" class="validate">
	        	<label for="zona_envio_1"  id="cost_envio_txt_zona_entrega">CABA - Envío gratis</label>
	        </div>

	        <div class="col s1"></div>

	        <div class="input-field col s2 m3 index_input_precio" >
	        	$
	        	<input id="zona_precio_1" type="text" class="validate">
	        	<label for="zona_precio_1">0</label>
	        </div>


	        <div class="col s3 m2 index_cont_lista ">
				
				<div class="col s12  m12 l12 index_item_lista">		
					<span >
						Actualizar					
					</span>
				</div>

			</div>

			<!- switch en fila --
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


