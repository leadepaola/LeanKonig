<?php
	
	include('../database.php');
	
	$query = "SELECT * from categoria_7 ORDER BY id";
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die('Query Failed') . mysqli_error($connection);
	}
	//else echo "PRODUCTOS CARGADOS CORRECTAMENTE";
	
	$json = array();

	while($row = mysqli_fetch_array($result)){
			
		$json[] = array(
			'id' => $row['id'],
			'activo' => $row['activo'],
			'codigo' => $row['codigo'],
			'fragancia' => $row['fragancia'],
		);	
	}

	
	$jsonString = json_encode($json);
	echo $jsonString;
	
?>