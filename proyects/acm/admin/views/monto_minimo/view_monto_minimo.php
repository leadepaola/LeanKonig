








<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="monto_min_filas_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Monto mínimo de compra 
		</div>



		<!-- Input -->
		<div class="col s12 m12 " id="index_input_editlea_cont">
			<span id="monto_min_signo_pesos" >
				$
			</span>

        	<input id="index_input_editlea" type="text" <?php echo 'value="'.$fila_['monto'].'"' ?> >
        	<?php echo $html_inputs_monto_minimo ?>
        </div>


	</div>

</div>



<!-- Boton de accion -->
<div class="monto_min_btn_accion_cont ">
	<div class="index_btn_accion">
		Actualizar
	</div>	
</div>





