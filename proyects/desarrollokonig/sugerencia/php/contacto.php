<?php 

@$fecha = date("Y-m-d H:i:s",time());
$date = new DateTime($fecha, new DateTimeZone('America/Argentina/Buenos_Aires'));
date_default_timezone_set('America/Argentina/Buenos_Aires');
$zonahoraria = date_default_timezone_get();

@$fecha=date("d/m/Y",time());
@$hora  = date("h:i A",time());
$dispositivo = "PC";






// Llamando a los campos
$nombre 	= $_POST['nombre'];
$apellido 	= $_POST['apellido'];
$telefono 	= $_POST['telefono'];
$correo 	= $_POST['email'];
$mensaje 	= $_POST['mensaje'];



$carta="DATOS\n";
$mensaje_a_cliente="Hola ";




// Datos para el correo 
$destinatario = "leandro.developer.01@gmail.com";
$destinatario2 = " ";
$asunto = "Nueva consulta | E.Sence Argentina";

// Carta
$carta .=  'Nombre:  '.$nombre."\n";
$carta .=  'Apellido:  '.$apellido."\n";
$carta .= 'Teléfono:  '.$telefono."\n";
$carta .= 'Correo:  '.$correo."\n\n";
$carta .= 'Mensaje:  '.$mensaje."\n";



// Mensaje a cliente
$mensaje_a_cliente 	.= ''.$nombre.','."\n\n";

$mensaje_a_cliente 	.= 'Muchas gracias por contactarnos. Este mensaje es para notificarte que recibimos tu consulta. ';
$mensaje_a_cliente	.= 'En la brevedad nos pondremos en contacto por telefono al '.$telefono.' o email a '.$correo."\n\n";

$mensaje_a_cliente 	.= 'También podes comunicarte con nosotros en el siguiente email:'."\n\n";

$mensaje_a_cliente	.= 'esenceargentina@gmail.com'."\n\n\n";

$mensaje_a_cliente	.= 'Atentamente,'."\n";
$mensaje_a_cliente	.= 'E.sence Argentina'."\n\n";














$insert_consulta = "";
$insert_consulta .= 'INSERT INTO consultas_historial(nombre, apellido, telefono, correo, fecha, hora, dispositivo, mensaje) VALUES ('."'".$nombre."','".$apellido."','".$telefono."','".$correo."','".$fecha."','".$hora."','".$dispositivo."','".$mensaje."')" ;

echo $mensaje_a_cliente;
echo $carta;

include('add_consulta_DB.php');










//ESTAS LINEAS DE CODIGO ACTIVAR PARA HOSTING, NO PARA LOCALHOST
//Enviando mensaje 

mail($destinatario, $asunto, $carta);
//mail($destinatario2, $asunto, $carta);
mail($correo, $asunto, $mensaje_a_cliente);

//header('Location:../index_desk.html')

 ?>