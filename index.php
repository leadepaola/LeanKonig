<?php 


echo "Hola 2 <br />";


//echo "$_GET['index_var']";

	
if(empty($_GET['index_var'])){

	$index_var = 'inicio';
	
}else{

	$index_var 		= $_GET['index_var'];
}



echo $index_var;







switch ($index_var) {

	case 'desarrollokonig':
		header("location: ./proyects/desarrollokonig/canal.php");
		
		//header("location: ./proyects/desarrollokonig/index.php");
		
	break;


	case 'PR':
		header("location: ./proyects/PR/index.php");
		
	break;

	default:
		//header("location: index.php");
	break;
}
/*
switch ($index_var) {

	case 'AAA':
		//header("location: /proyects/desarrollokonig/canal.php");
		//echo $fila['fecha_web'];
		//header("location: /proyects/desarrollokonig/index.html");
		header("location:./AAAAA");
	break;

	case 'registro':
		header("location: /TI/cpanel-auth/views/register.php");
	break;

	case 'admin':
		header("location: /TI/admin/views/index.php");
	break;


	case 'cpanel':
		header('location: /TI/cpanel/views/index.php');
	break;

	//muestra
	case 'calzado':
		header('location: /TI/TI/inicio.php?id_web=-1&id_cliente=-1');
	break;



	case 'tienda':
		$id_web 		= $_GET['id_web'];
		$id_cliente 	= $_GET['id_cliente'];
		header('location: ../TI/TI/inicio.php?id_web='.$id_web.'&id_cliente='.$id_cliente);
	break;

	case 'cart':
		$id_web 		= $_GET['id_web'];
		$id_cliente 	= $_GET['id_cliente'];
		header('location: ../TI/TI/cart.php?id_web='.$id_web.'&id_cliente='.$id_cliente);
	break;



	// [Temporal]
	case 'actualizacion':
		header('location: /TI/actualizacion/views/actualizacion.php');
	break;

	



	// Landing

	default:
		//header("location:./landing");
	break;

}


*/
?>