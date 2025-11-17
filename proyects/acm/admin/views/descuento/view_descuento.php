









<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="descuento_filas_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Porcentaje de descuento 
		</div>


		<!-- Input -->
		<div class="col s12 m12 " id="index_input_editlea_cont">
			
			<span id="descuento_signo_porcentaje" >
				%
			</span>

        	<input id="index_input_editlea" type="text" <?php echo 'value="'.$fila_['descuento'].'"' ?> >
        	<?php echo $html_inputs_descuento ?>
        </div>


	</div>

</div>



<!-- Boton de accion -->
<div class="descuento_btn_accion_cont ">
	<div class="index_btn_accion">
		Actualizar
	</div>	
</div>





