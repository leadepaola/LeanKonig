



<title><?php echo $titulo_pagina; ?></title>

<meta charset="UTF-8">

<!-- 	mobile 						-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 	favicon 					-->
<link rel="icon" href="<?php echo $routs; ?>images/favicon/favicon.ico" type="image/x-icon">

<!-- 	icons "big mug" 			-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/icons/bigmug_and_slim/icon.css">

<!-- 	materealize 				-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize.css?2025_1_15_0908">
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize_control.css?2025_1_15_0908">

<!-- 	fonts 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/fonts.css?2025_1_15_0908">

<!-- 	css 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/index.css?2025_1_15_0908">

<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/style.css?2025_1_15_0908">



<!--	Google fonts				-->
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@200;300;400&display=swap" rel="stylesheet">
<!-- 	font-family: 'Newsreader', serif;  -->




<?php 
	

	// Se activan rutas dependiendo de la view activa

	// css
	switch ($view_activa) {
		
		case '1':
			//echo '	<link rel="stylesheet" href="'.$routs.'lib/base/css/inicio/prod_destacados.css?2025_1_15_0908">';
		break;

		case '2':
			echo '	<link rel="stylesheet" href="'.$routs.'lib/base/css/samsara.css?2025_1_15_0908">';
		break;
	}



?>