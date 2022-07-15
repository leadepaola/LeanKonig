<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
	<meta name="viewport" content="width=device-width">
	<title>Sugerencia</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	 <!-- 
     ####   ####   ####  
    #    # #      #      
    #       ####   ####  
    #           #      # 
    #    # #    # #    # 
     ####   ####   ####  
    -->
    <link rel="stylesheet" type="text/css" href="./css/header_planes.css">

	<link rel="stylesheet" type="text/css" href="./css/planes.css">

	


	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  



	<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Se usa asi: font-family: 'Quicksand', sans-serif; -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Se usa asi: font-family: 'Open Sans', sans-serif; -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Se usa asi: font-family: 'Roboto', sans-serif; -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <!-- Se usa asi: font-family: 'Roboto Mono', monospace; -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500&display=swap" rel="stylesheet">
    <!-- Se usa asi: font-family: 'Raleway', sans-serif; -->

</head>





<!-- p>lorem5 -->


<body>

	<?php

		session_start();

		if(!isset($_SESSION["usuario"])){
			echo "<h2>NO HAY SESSION INICIADA</h2>";
			//header("location:../../login_add_plan");
		}
		else{
			echo "<h2>Hay sesion iniciada</h2>";
		}

	?>



	<div class="contenedor_general">
		
		<h1>PRUEBA DE PAGAR PLAN </h1>
		
	</div>
































	<script src="../../lib/jquery-3.3.1.min.js"></script>
	<script src="./../js/panel.js"></script>

</body>
</html>