



<style>
	


	.row .col {
		<?php 
			if ($dispositivo_de_ingreso!="pc") {
				echo "padding: 0 0;";	
			} 
		?>
	}	

:root{
	--main-color_FRUTAS: #black;
	}

	body{

/*		height: 100vh;	
		width: 100vh;
/*
		 display: flex;
		  width: 120px;
		  height: 120px;
		 
		  overflow: hidden;
		  justify-content: center;	
		  
	    display: flex;
		align-items: center;
	    justify-content: center;

*/	    
		
	}

	.pr_content_general{
		width: 100%;
		height: 100vh;	

		/*background-color: red;*/

		display: flex;
		justify-content: center;
		overflow: scroll;

	}


	.pr_content_general_img_fondo{
		position: fixed;
		width: 100%;
		height: 100vh;

		object-fit: cover;
		/*filter: blur(1px)!important;*/
		
	}


	.pr_conent_general_filtro{
		width: 100%;
		height: 120%;

		background-color: #ffffff26;
		/*opacity: 0.4;*/

		position: fixed;
		backdrop-filter: blur(5px);
	}


	.pr_content_secundario{
		position: relative;

		width: 86%;
	    height: 80vh;
	    top: 14%;
	    /*background-color: white;*/

	    border-radius: 20px 20px 0px 0px;

	    box-shadow: 0px 0px 9px 2px #0000001f;

	    display: flex;
		justify-content: center;

		margin-bottom: 250px;
	}


	.pr_content_secundario_img_fondo{
		width: 100%;
		height: 80vh;

		object-fit: cover;
		border-radius: 20px;
	}


	.pr_content_img_perfil{
		position: absolute;
		top: -60px;

		width: 190px;
		height: 190px;

		border-radius: 20px;
		overflow: hidden;

	    box-shadow: 0px 5px 10px -1px #00000073;

	}

	.pr_img_perfil{
		position: absolute;
		top: -18px;

		width: 100%;
	    object-fit: cover;

		border-radius: 20px;

	}


	.pr_titulo{
		position: absolute;
		top: 150px;

		color: white;
		font-size: 15px;
	}



	.pr_cotent_links{
		position: absolute;

		width: 100%;
		height: 355px;
		top: 355px;

		/*background-color: red;*/

		display: flex;
		justify-content: center;

		padding-top: 55px;
	}

	.pr_link{
		position: relative;

		width: 85%;
    	height: 65px;
    	
    	border-radius: 10px;

    	/*background-color: black;*/

    	display: flex;
		/*justify-content: center;*/
    	align-items: center;

	}

			.pr_link_transparencia{
				position: absolute;
				/*z-index: 1;*/

				width: 100%;
				height: 100%;
		    	border-radius: 10px;

				background-color: #4f4f4f47;
				/*opacity: 0.4;*/
				
				backdrop-filter: blur(5px);

			}

			.pr_link_logo{
				width: 40px;
				height: 40px;

				margin-left: 14%;

				border-radius: 5px;

				z-index: 3;
			}

			.pr_link_texto{

				width: 50%;
				height: 40px;

				color: white;
				font-size: 16px;
				font-weight: 300;
			
				display: flex;
				align-items: center;

				margin-left: 26px;

				z-index: 3;
			}







































</style>