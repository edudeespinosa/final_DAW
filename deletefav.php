<?php
 session_start();

include_once('util.php');
	$mysql=connect('siisa-qro.com','siisaqr_daw','daw12345','siisaqr_daw');
	$mysql->query("SET NAMES 'utf8'");
	$isbn=$_POST['isbn'];
	$query="DELETE FROM escoge WHERE email='".$_SESSION['email']."' AND ISBN=".$isbn;

	$res=runquery($query,$mysql);
	echo $res;
?>