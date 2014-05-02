<?php 

//$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = 'From: LibrosChingones@elmejoequipo.com' . "\r\n" .
    	  'Reply-To: LibrosChingones@elmejoequipo.com' . "\r\n" .
    	  'X-Mailer: PHP/' . phpversion();

$message = str_replace("\n.", "\n..", $message);

$envio = mail($receiver, $subject, $message, $header);

if($envio == TRUE){
	echo "Se envio con exito";
} else {
	echo "Ocurrio un error";
}



?>