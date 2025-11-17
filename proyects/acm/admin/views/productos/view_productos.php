	

<?php 

$href_add 	= 'href="productos_individual_add.php'.$codigo_id_web.'"';

$href_edit 	= 'href="productos_edit.php'.$codigo_id_web.'&id_categ=1"';

?>




<!-- Lista de productos de pedido -->
<div class="index_filas_cont" >

	<div class="row">

		

		<!-- Filas -->
		<a class="col s12 index_cont_lista a_re" <?php echo $href_add ?> >
			
			<div class="col s12  m12 l12 index_item_lista">	
				<span class="index_item_icon_cont">
					<img src="../images/icon/sumar_32.png" class="index_iteam_icon_img" alt=""> 
				</span>	
				<span class="productos_item_txt">
					Agregar nuevo producto					
				</span>
			</div>

		</a>






		<!-- Filas -->
		<a class="col s12 index_cont_lista a_re" <?php echo $href_edit ?> >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/edit_24.png" class="index_iteam_icon_img" alt=""> 
				</span>	
				<span class="productos_item_txt">
					Editar productos					
				</span>
			</div>

		</a>





	</div>

</div>