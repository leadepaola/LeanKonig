<?php
	
	$sesion = 0 ;

	session_start();


	if(!isset($_SESSION["usuario"])){
		$sesion = 0;
	}
	else{
		$sesion = 1;
	}


	echo $sesion;




































