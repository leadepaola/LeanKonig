






<div class="max_w_700 mail_general_cont" >

  <div class="row">


    <!-- titulo de seccion-->
    <div class="col s12 index_tit_lista">
      Mensaje de mail de confirmación que recibirá tu cliente: <br> 
      <span id="mail_detalle_tit">El siguiente recuadro es lo único que puedes editar</span>
    </div>

  </div>

</div>




<div class="col s12 max_w_700 mapa_textarea_cont">
	<?php echo $html_inputs_mail ?>
	<textarea class="mail_textarea" id="mail_textarea_tit">
<?php echo $fila_mail_confirm['mail'] ?>
	</textarea>
</div>

<!--
Hola '.$name_user.', gracias por testear el nuevo modelo TI 2.0 de LowCostWeb.
Este mail no recibe respuestas y podrá modificarse desde su panel de control.
																				
[Mensaje demostración]
																				
Muchas gracias por realizar tu pedido. Lo estaremos entregando en '.$direccion.' '.$altura.', '.$localidad.'.
Te contactaremos por Whatsapp o teléfono al '.$phone.' si llega a ser necesario.
-->  


	<div class="col s12 max_w_700 mail_msj_predet_cont">


		<div class="col s12">Tus datos: </div>

		<div class="col s12 mail_msj_preder_lista_prods">
			Nombre: 		######	<br>
			Telefono: 		######	<br>
			Email: 			######	<br>
			Social media: 	######	<br>
			Dirección: 		######	<br>
			Altura: 		######	<br>
			Piso: 			######	<br>
			Dpto: 			######	<br>
			Localidad: 		######	<br>
			Comentario: 	######	<br>
			<!--
			Nombre: 		\'.$name_user	.\'	<br>
			Telefono: 		\'.$phone		.\'	<br>
			Email: 			\'.$email		.\'	<br>
			Social media: 	\'.$social_media.\'	<br>
			Dirección: 		\'.$direccion	.\'	<br>
			Altura: 		\'.$altura		.\'	<br>
			Piso: 			\'.$piso		.\'	<br>
			Dpto: 			\'.$dpto		.\'	<br>
			Localidad: 		\'.$localidad	.\'	<br>
			Comentario: 	\'.$comentario	.\'	<br>
			-->
			<br>

		</div>



		<div class="col s12">Pedido: </div>

		<div class="col s12 mail_msj_preder_lista_prods">
			1. 2Ud de "producto" a $100 = $200 <br>
			2. 2Ud de "producto" a $100 = $200 <br>
			3. 2Ud de "producto" a $100 = $200 <br>
			4. 2Ud de "producto" a $100 = $200 <br>
			5. 2Ud de "producto" a $100 = $200 <br>
			
			<br>
			
		</div>

		<div class="col s12">
			Subtotal: $1000				<br>
			Descuento (10%): -$100		<br>
			Costo de envio: $100		<br>
			_________					<br>
			Total: $900					<br>
		</div>

	
	</div>


<!-- Boton de accion -->
<div class="mail_btn_accion_cont max_w_700">
	<div class="index_btn_accion">
		Actualizar mensaje
	</div>	
</div>
