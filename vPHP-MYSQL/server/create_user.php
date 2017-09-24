<?php
require('../server/lib.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Paolo Garcia'";
    $datos['correo'] = "'pgarcia@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'07/04/1980'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Juan Perez'";
    $datos['correo'] = "'jperez@gmail.com'";
    $datos['password'] = "'".password_hash("234",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'08/09/1995'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Angel Cueva'";
    $datos['correo'] = "'angeldx@gmail.com'";
    $datos['password'] = "'".password_hash("345",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'11/02/1981'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}

?>-
