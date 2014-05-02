<?php 

session_start();
$receiver = $_POST['receiver'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$redirect = 0;
$header = 'From: LibrosChingones@elmejorequipo.com' . "\r\n" .
    	  'Reply-To: LibrosChingones@elmejorequipo.com' . "\r\n" .
    	  'X-Mailer: PHP/' . phpversion();

$message = str_replace("\n.", "\n..", $message);

include_once("infousuario.php");
if($res != false){

	$messagefav = '<br> Hola '.$receiver.' Estos son mis libros favoritos... Cuales son los tuyos?<br><ul>';

	foreach ($res as $key => $value) {
		$messagefav.= '<li>'.$value['ISBN'].', '.$value['titulo'].', '.$value['autor'].', '.$value['editorial'].'</li>';

	}
	$messagefav.="</ul>";
	$mensaje = $message . $messagefav;	
	$envio = mail($receiver, $subject, $mensaje, $header);
}



if($envio == TRUE){
	echo "<script>alert('Se envio con exito')</script>";
	$redirect = 1;

} else {
	echo "Ocurrio un error";
}

if($redirect==1)
{
	header("Location: cuenta.php");
}



?>