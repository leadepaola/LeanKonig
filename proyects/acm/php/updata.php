<?php 


	include('../../server_local/conection_DB.php');
	include('../../server_local/fecha_y_hora.php');


	$envio = 0 ;



	$pedido_sql = 
	'
	INSERT INTO levantada_d_datos (nombre, numero_wsp, cantidad_d_personas, fecha, hora) 
	VALUES (

				:name_nombre,
				:name_numero_wsp,
				:name_cantidad_d_personas,
				'."'".$fecha."','".$hora."'"	.'
				
	)';

	//db_conection es una variable que uso en 'conection_DB.php'
	$resultado = $db_conection->prepare($pedido_sql);

	//Evitar injeccion sql
	$nombre 				= htmlentities(addslashes($_POST["name_nombre"]));
	$numero_wsp 			= htmlentities(addslashes($_POST["name_numero_wsp"]));
	$cantidad_d_personas 	= htmlentities(addslashes($_POST["name_cantidad_d_personas"]));

	$resultado->bindValue(":name_nombre", $nombre);
	$resultado->bindValue(":name_numero_wsp", $numero_wsp);
	$resultado->bindValue(":name_cantidad_d_personas", $cantidad_d_personas);



	// El método execute () devuelve TRUE si es exitoso y FALSE si no lo es, permitiéndole escribir sus propios mensajes aquí

	if ($resultado->execute()) {
		$envio=1;
		
	  	echo $envio;
	} else {
		$envio=0;
	  	echo $envio;
	}


























?>