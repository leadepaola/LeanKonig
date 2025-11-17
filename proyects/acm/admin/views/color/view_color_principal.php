



<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Introducir código de color en hexadecimal <br>
			<a href="https://www.colorhexa.com/" target="_blank" id="color_prin_link_colorHexa">Buscar color</a>
		</div>



		<!-- Fila -->
		<span class="col s12 color_prin_fila_cont">


			<!-- Input -->
			<div class="col s7 m8" id="index_input_editlea_cont">
				
	        	<input id="index_input_editlea" type="text" <?php echo 'value="'.$color_principal.'"' ?> >
	        	<?php echo $html_inputs_color_principal ?>
	        </div>


			<!-- cuadrado de color -->
			<div class="col s4 m3  color_prin_cuadrado_cont">
				
				<div class="color_prin_cuadrado"></div> 

			</div>


		</span>


	</div>

</div>



<!-- Boton de accion -->
<div class="color_prin_btn_accion_cont ">
	<div class="index_btn_accion">
		Actualizar color
	</div>	
</div>



















