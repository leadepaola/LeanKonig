<?php 


// FUNCION
// Dependiendo el menú que se encuentra activo se pone en negrita la letra. 
// (inicio, productos,ayuda y contacto)

// ACTIVAR LUEGO DE TERMINAR EL ESTILO 



/*
$html_header_menu_activo= "";
$html_header_menu_activo_sideNav = "";

$html_cart_activo = '';

switch ($header_menu_activo) {

	case "inicio":
		$html_header_menu_activo= 
		'
			<div class="col m6 header_cont_menu">
		    	<div class="header_cont_letra_menu">
		    		<a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_active">Inicio</p>
		    		</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1">
		    			<p class="header_letras_menu header_letras_inactive">Productos</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Ayuda</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Contacto</p>
					</a>
		    	</div>
		    </div>
		';

		$html_header_menu_activo_sideNav=
		'
			<ul id="slide-out" class="side-nav">
	
				<div style="margin-bottom: 100px;"></div>			
				
			    <li><a href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'" class="haeder_sidenav_active a_re">Inicio</a></li>
			    
			    <li><a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1"><i>Productos</i></a></li>
			    
			    <li><a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Ayuda</i></a></li>
			    
			    <li><a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Contacto</i></a></li>
				
			</ul>
		';
	break;

	case "productos":
		$html_header_menu_activo= 
		'
			<div class="col m6 header_cont_menu">
		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Inicio</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1">
		    			<p class="header_letras_menu header_letras_active">Productos</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Ayuda</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Contacto</p>
					</a>
		    	</div>
		    </div>
		';

		$html_header_menu_activo_sideNav=
		'
			<ul id="slide-out" class="side-nav">
	
				<div style="margin-bottom: 100px;"></div>			
				
				<li><a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Inicio</i></a></li>

			    <li><a href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1" class="haeder_sidenav_active a_re">Productos</a></li>
			    
			    <li><a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Ayuda</i></a></li>
			    
			    <li><a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Contacto</i></a></li>
				
			</ul>
		';
	break;

	case "ayuda":
		$html_header_menu_activo= 
		'
			<div class="col m6 header_cont_menu">
		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Inicio</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1">
		    			<p class="header_letras_menu header_letras_inactive">Productos</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_active">Ayuda</p>
					</a>
				</div>


		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Contacto</p>
					</a>
		    	</div>
		    </div>
		';

		$html_header_menu_activo_sideNav=
		'
			<ul id="slide-out" class="side-nav">
	
				<div style="margin-bottom: 100px;"></div>			
				
				<li><a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Inicio</i></a></li>

			    <li><a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1"><i>Productos</i></a></li>

			    <li><a href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'" class="haeder_sidenav_active a_re">Ayuda</a></li>
			    
			    <li><a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Contacto</i></a></li>
				
			</ul>
		';
	break;

	case "contacto":
		$html_header_menu_activo= 
		'
			<div class="col m6 header_cont_menu">
		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Inicio</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1">
		    			<p class="header_letras_menu header_letras_inactive">Productos</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Ayuda</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_active">Contacto</p>
					</a>
		    	</div>
		    </div>
		';

		$html_header_menu_activo_sideNav=
		'
			<ul id="slide-out" class="side-nav">
	
				<div style="margin-bottom: 100px;"></div>			
				
				<li><a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Inicio</i></a></li>
			    
				<li><a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1"><i>Productos</i></a></li>

				<li><a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Ayuda</i></a></li>

			    <li><a href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'" class="haeder_sidenav_active a_re">Contacto</a></li>
			    
			</ul>
		';
	break;

	case "carrito":
		$html_header_menu_activo= 
		'
			<div class="col m6 header_cont_menu">
		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Inicio</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1">
		    			<p class="header_letras_menu header_letras_inactive">Productos</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Ayuda</p>
					</a>
		    	</div>

		    	<div class="header_cont_letra_menu">
					<a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">
		    			<p class="header_letras_menu header_letras_inactive">Contacto</p>
					</a>
		    	</div>
		    </div>
		';

		$html_header_menu_activo_sideNav=
		'
			<ul id="slide-out" class="side-nav">
	
				<div style="margin-bottom: 100px;"></div>			
				
				<li><a class="a_re" href="index.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Inicio</i></a></li>
			    
				<li><a class="a_re" href="productos.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'&id_categ=1"><i>Productos</i></a></li>

				<li><a class="a_re" href="ayuda.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Ayuda</i></a></li>

			    <li><a class="a_re" href="contacto.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'"><i>Contacto</i></a></li>
			    
			</ul>
		';

		$html_cart_activo = 'style="font-weight: 600;"';
	break;
	

}



*/


?>












<!--

#    # ######   ##   #####  ###### #####  
#    # #       #  #  #    # #      #    # 
###### #####  #    # #    # #####  #    # 
#    # #      ###### #    # #      #####  
#    # #      #    # #    # #      #   #  
#    # ###### #    # #####  ###### #    # 

-->


<header class="header">
	<div class="contenet_padding_gral">
		<div class="row cpanel_header_mob">
			

			<!-- Burger menu -->
			<div href="#" data-activates="slide-out" class="button-collapse">
				<i class=" col s3 material-icons header_cont_burger_menu">
					<div id="burger_menu" class="titanic titanic-menu-close" ></div>
				</i>
			</div>
		    

			<!-- seccion Youtube-->
		    <div class="col s9 header_cont_carrito">
		    	<?php //echo '<a class="a_re" href="cart.php?id_web='.$id_web.'&id_cliente='.$id_cliente.'">' ?>
			    <div>	
			    	<div class="header_cont_items_carrito">
			    		<!--
			    		<p class="header_letras_carrito" id="header_precio" <?php //echo $html_cart_activo ?> >
							¿Cómo funciona?
						</p>

			    		<img src="../images/icon/youtube_64.png" alt="" id="img_youtube">
			    		-->
			    		<!--
			    		<div class="contacts-modern-icon fl-bigmug-line-shopping198" id="icon_shop">
			    		-->
			    						    			
						<div id="header_carrito_cant_prod">
							<pre id="header_carrito_num_prods">2</pre>
						</div>
					
			    	</div>
			    </div>
		    </div>



	  	</div>
	</div>
</header>



    