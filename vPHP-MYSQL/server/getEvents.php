<?php
session_start();
require('../server/lib.php');

$con = new ConectorBD();
if ($con->initConexion()=='OK'){

    $resul=$con->obtenerEventos($_SESSION['id']);
    $rows = array();
	while($r = mysqli_fetch_assoc($resul)) {
	    $rows[] = $r;
	}
	$php_response=array("msg"=>"OK","eventos"=>$rows);   
	echo json_encode($php_response);

    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}


 ?>
