<?php 

// Llamando a los campos
$nombre 	= $_POST['nombre'];
$telefono 	= $_POST['telefono'];
$correo 	= $_POST['email'];
$mensaje 	= $_POST['mensaje'];

$instagram 	= $_POST['instagram'];
$twitter 	= $_POST['twitter'];
$facebook 	= $_POST['facebook'];


$carta="DATOS\n";
$mensaje_a_cliente="Hola ";




// Datos para el correo 
$destinatario = "leandro.developer.01@gmail.com";
$destinatario2 = " ";
$asunto = "Nueva Sugerencia | Sugerencia.com.ar";

// Carta
$carta .= 'Nombre:    '.$nombre."\n";
$carta .= 'Teléfono:  '.$telefono."\n";
$carta .= 'Correo:    '.$correo."\n";
$carta .= 'Instagram: '.$instagram."\n";
$carta .= 'Twitter:   '.$twitter."\n";
$carta .= 'Facebook:  '.$facebook."\n\n";
$carta .= 'Mensaje:   '.$mensaje."\n";



// Mensaje a cliente
$mensaje_a_cliente 	.= ''.$nombre.','."\n\n";

$mensaje_a_cliente 	.= 'Muchas gracias por contactarnos. Este mensaje es para notificarte que recibimos tu consulta. ';
$mensaje_a_cliente	.= 'En la brevedad nos pondremos en contacto por telefono al '.$telefono.' o email a '.$correo."\n\n";

$mensaje_a_cliente 	.= 'También podes comunicarte con nosotros en el siguiente email:'."\n\n";

$mensaje_a_cliente	.= 'leandro.konig.developer@gmail.com'."\n\n\n";

$mensaje_a_cliente	.= 'Atentamente,'."\n";
$mensaje_a_cliente	.= 'Desarrollo König'."\n\n";





//echo $mensaje_a_cliente;
echo $carta;




//ESTAS LINEAS DE CODIGO ACTIVAR PARA HOSTING, NO PARA LOCALHOST
//Enviando mensaje 

//mail a dueño
mail($destinatario, $asunto, $carta);
//mail($destinatario2, $asunto, $carta);

//mail al cliente
//mail($correo, $asunto, $mensaje_a_cliente);

//header('Location:../index_desk.html')

 ?>