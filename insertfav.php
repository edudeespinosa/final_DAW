<?php

 session_start();



include_once('util.php');

	$mysql=connect();

	$mysql->query("SET NAMES 'utf8'");

	$isbn=$_POST['isbn'];

	$query="INSERT INTO escoge VALUES('".$_SESSION['email']."',".$isbn.")";



	$res=runquery($query,$mysql);

	echo $res;

?>