



<title><?php echo $titulo_pagina; ?></title>

<meta charset="UTF-8">

<!-- 	mobile 						-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 	favicon 					-->
<link rel="icon" href="<?php echo $routs; ?>images/favicon/favicon.ico" type="image/x-icon">

<!-- 	icons "big mug" 			-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/icons/bigmug_and_slim/icon.css">

<!-- 	materealize 				-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize.css?2021_5_21_0320">
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize_control.css?2021_5_21_0320">

<!-- 	fonts 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/fonts.css?2021_5_21_0320">

<!-- 	css 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/index.css?2021_5_21_0320">



<!--	Google fonts				-->
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@200;300;400&display=swap" rel="stylesheet">
<!-- 	font-family: 'Newsreader', serif;  -->




<?php 
	

	// Se activan rutas dependiendo de la view activa

	// css
	switch ($view_activa) {
		
		case '1':
			//echo '	<link rel="stylesheet" href="'.$routs.'lib/base/css/inicio/prod_destacados.css?2021_5_21_0320">';
		break;
	}



?>