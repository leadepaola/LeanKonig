<?php 


	$id_web 		= $_GET['id_web'];
	$id_cliente 	= $_GET['id_cliente'];
	


	/*
	echo "ingresar a cpanel";
	echo "<br>";
	echo "id_web: ".$id_web;
	echo "<br>";
	echo "id_cliente: ".$id_cliente;
	*/

	session_start();

	$_SESSION["id_web"] 	= $id_web;
	$_SESSION["id_cliente"] = $id_cliente;




	header('location: /cpanel');



?>