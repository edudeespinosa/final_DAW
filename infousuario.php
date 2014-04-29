<?php

include_once('util.php');
	$mysql=connect('siisa-qro.com','siisaqr_daw','daw12345','siisaqr_daw');
	$mysql->query("SET NAMES 'utf8'");

	$query="SELECT e.ISBN, titulo, autor, editorial, genero, descripcion 
	FROM libros l, escoge e,usuarios u 
	WHERE l.ISBN=e.ISBN AND  u.email=e.email 
	AND u.email='".$_SESSION['email']."'";

	$res=showquery($query,$mysql);
?>