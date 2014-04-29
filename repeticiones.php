<?php
include_once('util.php');

	$email=$_POST['username'];
	$pass=$_POST['passwd'];
	$nombre=$_POST['nombre'];
	$query="SELECT COUNT(*) cuantos FROM usuarios WHERE email='".$email."' AND password='".$pass."'";

	$mysql=connect('siisa-qro.com','siisaqr_daw','daw12345','siisaqr_daw');
	$res=showquery($query,$mysql);

	if(isset($res) && $res!=""){
		if($res[0]['cuantos']!=0){
			echo "repetido";
		}else{
			$query="INSERT INTO usuarios VALUES('".$email."','".$nombre."', '".$pass."')";
			$result=runquery($query,$mysql);
			if($result==1){
				echo "ok";				
			}else{
				echo "error al insertar";
			}
		}
	}
	disconnect($mysql);
?>