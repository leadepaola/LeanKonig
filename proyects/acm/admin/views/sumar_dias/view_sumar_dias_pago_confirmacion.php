

<?php 

// Inputs de id_Web y id_Cliente
//echo $html_inputs_web_cliente;
$dias_sumados 		= $_GET['dias_sumados'];
$dias_sin_sumar 	= $_GET['dias_sin_sumar'];
$sumar_dias_link_entendido = 'href="./sumar_dias.php'.$codigo_id_web.'"';
?>






<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="monto_min_filas_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">

			Mensaje de confirmación <br> 
      		<span id="mail_detalle_tit">
      			<?php 
	      			echo 
	      			'Se han sumado '.$dias_sumados.' días correctamente.
	      				
	      				<br><br>
	      			Antes: '.$dias_sin_sumar.' días disponibles

	      				<br>
	      			
	      			';
      			?>

      		</span>
      		
      		<span id="mail_detalle_tit_2">
      			<?php echo 'Ahora: '.$fila_mis_datos['dias_disp'].' días disponibles'; ?>
      		</span>

		</div>




	</div>

</div>



<!-- Boton de accion -->
<a class="monto_min_btn_accion_cont" <?php echo $sumar_dias_link_entendido ?> >
	<div class="index_btn_accion">
		Entendido
	</div>	
</a>





