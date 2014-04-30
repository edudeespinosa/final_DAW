<?php
 session_start();

include_once('util.php');
	$mysql=connect();
	$mysql->query("SET NAMES 'utf8'");
	$isbn=$_POST['isbn'];
	$query="DELETE FROM escoge WHERE email='".$_SESSION['email']."' AND ISBN=".$isbn;

	$res=runquery($query,$mysql);
	echo $res;
?>