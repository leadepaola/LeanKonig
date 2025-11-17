



<!--
 ####  ###### #      ######  ####  ##### 
#      #      #      #      #    #   #   
 ####  #####  #      #####  #        #   
     # #      #      #      #        #   
#    # #      #      #      #    #   #   
 ####  ###### ###### ######  ####    #  

##### # #####   ####  
  #   # #    # #    # 
  #   # #    # #    # 
  #   # #####  #    # 
  #   # #      #    # 
  #   # #       ####  

#####    ##   #    # #    # ###### #####   ####  
#    #  #  #  ##   # ##   # #      #    # #      
#####  #    # # #  # # #  # #####  #    #  ####  
#    # ###### #  # # #  # # #      #####       # 
#    # #    # #   ## #   ## #      #   #  #    # 
#####  #    # #    # #    # ###### #    #  ####    
-->



<!-- Estado del pedido -->
<div class="row max_w_700 select_banner_cont">
	<?php echo $html_banner_inputs_select ?>
	<select class="col s12  nice-select wide select_banner">
	    <option value="" disabled >Único o Duo</option>
	    <option  value="basic" <?php echo $temp_sel_unic ?> >Único</option>
	    <option  value="advanced" <?php echo $temp_sel_duo  ?> >Duo</option>
	</select>
</div>










<!--
#    # #    # #  ####   ####  
#    # ##   # # #    # #    # 
#    # # #  # # #      #    # 
#    # #  # # # #      #    # 
#    # #   ## # #    # #    # 
 ####  #    # #  ####   ####  
-->



<!-- Lista de productos de pedido -->
<div class="index_filas_cont" <?php echo $temp_display_unic ?> >

	<div class="row">


		<!--
		
		   #   
		  ##   
		 # #   
		   #   
		   #   
		   #   
		 ##### 

		-->
		
		<!-- BANNER 1 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banner_unico.php'.$codigo_id_web.'&num_banner=1"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner 1					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox" >

						<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="1" >
				    	<input type="checkbox"  id="switch_checkbox" <?php echo $switch_check_1 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>





		<!--
		
		 #####  
		#     # 
		      # 
		 #####  
		#       
		#       
		####### 

		-->

		<!-- BANNER 2 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banner_unico.php'.$codigo_id_web.'&num_banner=2"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner 2					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox">
				    	
				    	<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="2" >
				    	<input type="checkbox" id="switch_checkbox" <?php echo $switch_check_2 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>



		<!--
		
		 #####  
		#     # 
		      # 
		 #####  
		      # 
		#     # 
		 ##### 

		-->


		<!-- BANNER 3 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banner_unico.php'.$codigo_id_web.'&num_banner=3"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner 3					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox">
				    	
				    	<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="3" >
				    	<input type="checkbox" id="switch_checkbox" <?php echo $switch_check_3 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>



	</div>

</div>










<!--
#####  #    #  ####  
#    # #    # #    # 
#    # #    # #    # 
#    # #    # #    # 
#    # #    # #    # 
#####   ####   ####   
-->



<!-- Lista de productos de pedido -->
<div class="index_filas_cont" <?php echo $temp_display_duo ?> >

	<div class="row">


		<!--
		
		   #   
		  ##   
		 # #   
		   #   
		   #   
		   #   
		 ##### 

		-->

		<!-- BANNER 1 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banners_duo.php'.$codigo_id_web.'&num_banner=1"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner Duo 1					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox">
				    	
				    	<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="1" >
				    	<input type="checkbox" id="switch_checkbox" <?php echo $switch_check_1 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>






		<!--
		
		 #####  
		#     # 
		      # 
		 #####  
		#       
		#       
		#######

		-->

		<!-- BANNER 2 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banners_duo.php'.$codigo_id_web.'&num_banner=2"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner Duo 2					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox">
				    	
				    	<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="2" >
				    	<input type="checkbox" id="switch_checkbox" <?php echo $switch_check_2 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>




		<!--
		
		 #####  
		#     # 
		      # 
		 #####  
		      # 
		#     # 
		 ##### 

		-->

		<!-- BANNER 3 -->
		<a class="col s9 m11 index_cont_lista a_re" 
		<?php echo 'href="banners_duo.php'.$codigo_id_web.'&num_banner=3"' ?>  >
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span class="msj_item_txt">
					Banner Duo 3					
				</span>
			</div>

		</a>
			<!-- switch en fila -->
			<div class="col s3 m1  index_item_switch">
				<!-- Switch -->
				<div class="switch ">
					<label class="banner_checkbox">
				    	
				    	<?php echo $html_banner_inputs_switch ?>
				    	<input type="hidden" id="name_banner_actual" 	name="name_banner_actual"	value="3" >
				    	<input type="checkbox" id="switch_checkbox" <?php echo $switch_check_3 ?> >

				    	<span class="lever"></span>
				    	
					</label>
				</div>
			</div>



	</div>

</div>


