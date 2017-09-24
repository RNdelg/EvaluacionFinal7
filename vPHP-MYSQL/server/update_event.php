<?php
session_start();
require('../server/lib.php');

$con = new ConectorBD();
if ($con->initConexion()=='OK'){

    $idevento=$_POST["id"];
    if($con->actualizarEvento($idevento,$_SESSION['id'])){
    	$php_response=array("msg"=>"OK","eventos"=>$idevento);  
    }else{
    	$php_response=array("msg"=>"Error al eliminar el evento","eventos"=>$idevento); 
    }
	 
	echo json_encode($php_response,JSON_FORCE_OBJECT);

    $con->cerrarConexion();
    
}else {
    echo "Se presentó un error en la conexión";
}

 ?>
