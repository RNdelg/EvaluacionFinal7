<?php
session_start();
require('../server/lib.php');
$con = new ConectorBD();

$passw=$_POST["password"];
$email=$_POST["username"];

if ($con->initConexion()=='OK'){
	$resul=$con->datosUsuario($email);

	while ($rows = $resul->fetch_array()) {
		 
		if(password_verify($passw,$rows["password"])) {
			$_SESSION['id'] = $rows["id"];

	    	$php_response=array("msg"=>"OK","data"=>"2");   
	 		//echo json_encode($php_response,JSON_FORCE_OBJECT);
		}else{
			$php_response=array("msg"=>"NO existe el Usuario","data"=>"2"); 
		}
		echo json_encode($php_response,JSON_FORCE_OBJECT);
	}
	//echo $email;
	//if(password_verify($passw, $hashed_password)) {
    //	$php_response=array("msg"=>"OK","data"=>"2");   
 	//	echo json_encode($php_response,JSON_FORCE_OBJECT);
	//}

    $con->cerrarConexion();
}
?>
