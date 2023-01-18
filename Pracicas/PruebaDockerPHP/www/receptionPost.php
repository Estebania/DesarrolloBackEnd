<?php

$Usuario = $_POST['user'];
$password = $_POST['pwd'];
$resultado = verificaDatos($Usuario, $password);

if($resultado){
    echo "Bienvenido";
}
else{
    echo "Datos incorrectos";
}
//echo "Usuario: " . $Usuario . "</br>";
//echo "Contraseña: " . $password . "</br>";

function verificaDatos ($Usuario,$password){
    if($Usuario == "Admin"&& $password=="Admin123"){
        return true;
    }
    else {
        return false;
    }
}

?>