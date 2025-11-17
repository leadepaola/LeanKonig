

<?php 

// Inputs de id_Web y id_Cliente
echo $html_inputs_web_cliente;

?>






<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="monto_min_filas_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Mail de notificación <br> 
      		<span id="mail_detalle_tit">En el siguiente campo introduce un mail para recibir una notificación cada vez que recibes un nuevo pedido</span>

		</div>



		<!-- Input -->
		<div class="col s12 m12 " id="index_input_editlea_cont">
			<!--
			<span id="monto_min_signo_pesos" >
				$
			</span>
			-->
        	<input id="index_input_editlea" type="text" <?php echo 'value="'.$fila_mail_notif['mail_notificaciones'].'"' ?> >
        </div>


	</div>

</div>



<!-- Boton de accion -->
<div class="monto_min_btn_accion_cont ">
	<div class="index_btn_accion">
		Actualizar
	</div>	
</div>





